<?php
          /* main directory */
          require("globals.php");
          /* appropiate language select */
          $img_main_dir=$main_dir;
          if(isset($_GET['popwin']) ) $main_dir="";
          //echo "test";

          if(is_file($main_dir."lang/".$lang))
           {
           require($main_dir."lang/".$lang);
           }else require($main_dir."lang/lang_english.php");

          $frontpage=true;
          include("inc/initdb.php");

          if(!isset($view_type)){ $view_type="main";}


          /* get the variables */

          if(isset($_POST['subscribe']))$subscribe=$_POST['subscribe'];
          else $subscribe=$_GET['subscribe'];
          if(isset($_POST['email']))$email=$_POST['email'];
          else $email=$_GET['email'];
          if(isset($_POST['name']))$name=$_POST['name'];
          else if(isset($_GET['name'])) $name=$_GET['name'];
          else $name="";
          if(isset($_POST['group']))$group=$_POST['group'];
          else $group=$_GET['group'];



          if(isset($_GET['verify']))$verify=$_GET['verify'];
            else $verfiy='';

          /* Check for existence */
          $email_exists=false;
          $sql = "SELECT * FROM wiml_maillist WHERE email_address = '".$email."' AND group_id =".$group;
          if($recordset=$conn->Execute($sql))
          {
          if(        $recordset->RecordCount() > 0 ) {
          $email_exists=true;
          $ers=$recordset->GetArray();
          }
          }
          /*        print($num);
                  print($base_file->entries());
          */
        {
        if( $subscribe=="true" && $email_verify=="no" )
                {
                                if($email_exists){
                                /* email already excists display error*/
                                include ($main_dir."inc/email_exist.php");
                                return;
                                }
                            else {
                    /* register email and display thanks */
                                 $sql = "INSERT INTO wiml_maillist (email_name,email_address,email_ip,email_date,group_id)";
                     $sql .= "VALUES ('".$name."', '".$email."', '".$_SERVER['REMOTE_ADDR']."', '".time()."', $group)";
                                $conn->Execute($sql);
                                if($email_thank=="yes")
                                {
                                $mailheaders="Return-path: $email_name <$email_email>\n";
                                $mailheaders.="From: $email_name <$email_email>\n";
                                $mailheaders.="Reply-To: $email_name\n";
                                $mailheaders.="X-Mailer: $website\n";
                                $mailheaders.="X-Return-Path: $email_email\n";
                                mail($email,$email_thank_title,$email_thank_message,$mailheaders);
                                }
                                include ($main_dir."inc/email_thanks.php");
                                return;
                                }
        }
                elseif($subscribe=="true" && $email_verify=="yes" && strlen($verify) == 0)
                {
                $makepass="";
                $salt = "abchefghjkmnpqrstuvwxyz0123456789";
                srand((double)microtime()*1000000);
                $i = 0;
                while ($i <= 8) {
                $num = rand() % 33;
                $tmp = substr($salt, $num, 1);
                $makepass = $makepass . $tmp;
                $i++;
                }
                                $sql = "INSERT INTO wiml_verify (email_name,email_address,group_id,rand_str)";
                $sql .= "VALUES ('$name','$email',$group,'$makepass')";
                                $conn->Execute($sql);
                                echo $conn->ErrorMsg();
                                $mailheaders="Return-path: $email_name <$email_email>\n";
                                $mailheaders.="From: $email_name <$email_email>\n";
                                $mailheaders.="MIME-Version: 1.0\n";
                                $mailheaders.="Content-type: text/html; charset=$lang_charset\n";
                                $mailheaders.="Content-Transfer-Encoding: 8bit\n";
                                $mailheaders.="Reply-To: $email_email\n";
                                $mailheaders.="X-Mailer: $website\n";
                                $mailheaders.="X-Return-Path: $email_email\n";
                                $email_message="<html><body><br>$email_thank_message<br><br>";
                                $v_html=str_replace("{slink}","<a href=".$website.$relative_string."verify=".$makepass.">",$email_verify_message);
                                $v_html=str_replace("{/slink}","</a>",$v_html);
                                $email_message.="<br>".$v_html ;
                                $email_message.="</body></html>";
                                mail($email,"Registration Details",$email_message,$mailheaders);
                                include ($main_dir."inc/email_email_sent.php");
                            return;

                }
                elseif( $email_verify=="yes" && strlen($verify) > 0 )
                {
                                $vrs=$conn->Execute("SELECT * FROM wiml_verify WHERE rand_str='$verify'");
                                $vrow=$vrs->GetArray();
                                if(is_array($vrow))
                                {
                                /* check for existence */
                                $sql = "SELECT * FROM wiml_maillist WHERE email_address = '".$vrow[0]['email_address']."' AND group_id =".$vrow[0]['group_id'];
                                $recordset=$conn->Execute($sql);

                                if(        $recordset!=false && $recordset->RecordCount() > 0 ) {
                                $conn->Execute("DELETE FROM wiml_verify WHERE id=".$vrow[0]['id']);
                                include ($main_dir."inc/email_exist.php");
                                return;
                                }
                                else {
                    /* register email and display thanks */
                                 $sql = "INSERT INTO wiml_maillist (email_name,email_address,email_ip,email_date,group_id)";
                     $sql .= "VALUES ('".$vrow[0]['email_name']."', '".$vrow[0]['email_address']."', '".$_SERVER['REMOTE_ADDR']."', '".time()."', ".$vrow[0]['group_id'].")";
                                $conn->Execute($sql);
                                $conn->Execute("DELETE FROM wiml_verify WHERE id=".$vrow[0]['id']);
                                if($email_thank=="yes")
                                {
                                $mailheaders="Return-path: $email_name <$email_email>\n";
                                $mailheaders.="From: $email_name <$email_email>\n";
                                $mailheaders.="Reply-To: $email_email\n";
                                $mailheaders.="X-Mailer: $website\n";
                                $mailheaders.="X-Return-Path: $email_email\n";
                                mail($vrow[0]['email_address'],$email_thank_title,$email_thank_message,$mailheaders);
                                //mail($email,$email_thank_title,$email_thank_message,$mailheaders);
                                }
                                include ($main_dir."inc/email_thanks.php");
                                return;
                                }
                                }
                }

                elseif($subscribe=="false")
                {
                                if(!$email_exists){
                                /* email does not exist*/
                                include ($main_dir."inc/email_not_exist.php");
                                return;
                                }
                            else {
                                /* does exist remove email */
                                $sql = "DELETE FROM wiml_maillist WHERE id = ".$ers[0]['id'];
                                 $rs = $conn->Execute($sql);
                                include ($main_dir."inc/email_removed.php");
                                return;
                                }

                }
        }
?>
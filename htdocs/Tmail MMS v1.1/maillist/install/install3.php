<html>
<head>
<title>Tmail MMS Ver1.0 安装程序</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="css/install.css" rel="stylesheet" type="text/css">
<link href="install/css/install.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" class="codeboxes">
  <tr>
    <td bgcolor="#FFFFFF"><table width="600" height="62" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td background="../admin/images/bgmain.png"><img src="../admin/images/logo.png" width="250" height="62"></td>
      </tr>
    </table>

      <br> <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><br>
            <?php
// Rem this if your server admin has register_globals turned on.
// It just converts global variables into local variables
foreach($HTTP_POST_VARS as $postvar => $postval){ ${$postvar} = $postval; }
foreach($HTTP_GET_VARS as $getvar => $getval){ ${$getvar} = $getval; }

//---------Uses ADODB to perform Database connectivity

$connection=false;
if($database=="none")
{
include($cabsolute_path.'../inc/adodbt/db.inc');
$conn = &ADONewConnection();
$connection=true;
$conn->PConnect("","","",$cabsolute_path."data/");
}else
{
include($cabsolute_path.'../inc/adodb/adodb.inc.php');
if($database=="mysql")
{
$conn = &ADONewConnection('mysql');
$connection=$conn->Connect($cdbhostname,$cdbusername,$cdbpassword,$cdbname);
}else if($database=="postgres7")
{
$conn = &ADONewConnection('postgres7');
$connection=$conn->Connect($cdbhostname,$cdbusername,$cdbpassword,$cdbname);
}
else if($database=="mssql")
{
$conn = &ADONewConnection('odbc_mssql');
$dsn = "Driver={SQL Server};Server=$cdbhostname;Database=$cdbname;";
$connection=$db->Connect($dsn,$cdbusername,$cdbpassword);
}else
{
$conn = &ADONewConnection('mysql');
$connection=$conn->Connect($cdbhostname,$cdbusername,$cdbpassword,$cdbname);
}
}
if($connection==false)
{
                die ( "无法连接到数据库 : ".$conn->ErrorMsg() .". Please go back and check settings ");
}
// Do not insert in case of scustom database //
//if(!strstr($database,"custom"))
$wtable=false;
{
$query = "CREATE TABLE wiml_maillist  (id int(10)  primary key auto_increment NOT NULL,lastupd char(20),email_name char(50) ,email_address char(50),email_ip char(16),email_date char(64),group_id int(4), unique(email_address,group_id))";
$recordSet = &$conn->Execute($query);
    if (!$recordSet)
        {
                if(strstr($conn->ErrorMsg(),'already exists'))$wtable=true;
//                 die ("无法创建 maillist table  ".$conn->ErrorMsg() .". Please go back and check settings ");
                }
$query = "CREATE TABLE wiml_mailgroup  (id int(10)  primary key auto_increment NOT NULL,lastupd char(20),fid int(3),name char(30) )";
$recordSet = &$conn->Execute($query);
    if (!$recordSet)
        {
                if(strstr($conn->ErrorMsg(),'already exists'))$wtable=true;
//                 die ("无法创建 mailgroup table  ".$conn->ErrorMsg() .". Please go back and check settings ");
                }
$query = "CREATE TABLE wiml_verify  (id int(10)  primary key auto_increment NOT NULL,lastupd char(20),email_name char(50),email_address char(50),group_id int(3),rand_str char(50))";
$recordSet = &$conn->Execute($query);
    if (!$recordSet)
        {
                if(strstr($conn->ErrorMsg(),'already exists'))$wtable=true;
//                 die ("无法创建 Verify table  ".$conn->ErrorMsg() .". Please go back and check settings ");
                }
//modify to add priority and more by moises www.hgmnetwork.com to add charset iso
$query = "CREATE TABLE wiml_history  (id int(10)  primary key auto_increment NOT NULL,lastupd char(20),group_id int(3) , email_address char(50) , date char(20) ,subject char(255),text_message longtext ,html_message longtext ,template char(20),emailfrom char(255),charsetiso char(20),priority char(1),total_emails int not null,total_sends int not null  )";
$recordSet = &$conn->Execute($query);

    if (!$recordSet)
        {
                if(strstr($conn->ErrorMsg(),'already exists'))$wtable=true;
//                 die ("无法创建 History table  ".$conn->ErrorMsg() .". Please go back and check settings ");
                }
$query = "INSERT INTO wiml_mailgroup (fid,name) VALUES ('', 'Default')";
if(!$wtable)$recordSet = &$conn->Execute($query);
}

        $fp=fopen("../globals.php","w");
        if($fp==null)
        {
        echo "无法打开 globals.php";
        return;
        }

                                $out=sprintf("<?php \r\n\$main_dir = \"%s\";\r\n",$cpath);
                                fwrite($fp,$out,strlen($out));
                                $out=sprintf("\$website = \"%s\";\r\n",$cwebsite);
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$relative_string=\"%s\";\r\n",$cstring);
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$absolute_path=\"%s\";\r\n",$cabsolute_path);
                                fwrite($fp,$out,strlen($out));
                                $out=sprintf("\$lang=\"%s\";\r\n","lang_chinese.php");
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$email_name=\"%s\";\r\n","Yourname");
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$email_email=\"%s\";\r\n",$cemail);
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$email_thank_title=\"%s\";\r\n","感谢你的使用");
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$email_thank_message=\"%s\";\r\n","感谢你使用我们的邮件订阅系统,我们会把最新的信息及时发送给你.");
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$email_unsubscribe_message=\"%s\";\r\n","<br><br>点击此处取消订阅 {ulink}link{/ulink} !");
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$email_verify_message=\"%s\";\r\n","<br><br>点击此处确认订阅 {slink}subscription{/slink} !");
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$email_unsubscribe=\"%s\";\r\n","yes");
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$email_thank=\"%s\";\r\n","no");
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$email_verify=\"%s\";\r\n","no");
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$email_images=\"%s\";\r\n","yes");
                                fwrite($fp,$out,strlen($out));

                $out=sprintf("\$user=\"%s\";\r\n",$cusername);
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$pass=\"%s\";\r\n",$cpassword);
                                fwrite($fp,$out,strlen($out));
                                if(strstr($database,"custom"))
                                {
                                $database="custom";
                                }
                $out=sprintf("\$database=\"%s\";\r\n",$database);
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$dbhostname=\"%s\";\r\n",$cdbhostname);
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$dbusername=\"%s\";\r\n",$cdbusername);
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$dbpassword=\"%s\";\r\n",$cdbpassword);
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$dbname=\"%s\";\r\n",$cdbname);
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$dbtable=\"%s\";\r\n",$tablename);
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$userfield=\"%s\";\r\n",$userfield);
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$emailfield=\"%s\";\r\n",$emailfield);
                                fwrite($fp,$out,strlen($out));

                                /*output the server selection */
                $out=sprintf("\$mserver=\"%s\";\r\n","php");
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$sendmail_string=\"%s\";\r\n","");
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$smtp_string=\"%s\";\r\n","");
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$smtp_auth=\"%s\";\r\n","no");
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$smtp_username=\"%s\";\r\n","");
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$smtp_password=\"%s\";\r\n","");
                                fwrite($fp,$out,strlen($out));
//add by moises www.hgmnetwork.com to add charset iso
                $out=sprintf("\$charsettype=\"%s\";\r\n","gb2312");
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$priorityemail=\"%s\";\r\n","3");
                                fwrite($fp,$out,strlen($out));

                $out=sprintf("?>"); fwrite($fp,$out,strlen($out)); fclose($fp); ?>
            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td><div align="center"><?php if($wtable)echo '安装完成报告'; ?> </div></td>
              </tr>
            </table>
            <table width="95%" border="0" align="center" cellpadding="5" cellspacing="0">
              <tr>
                <td width="58%" class="menuheader"><font color="#FF9900">globals.php</font>
                </td>
                <td width="42%">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2"><div align="left" class="f8"><font color="#CCCCCC"><font color="#999999">这个是maillist程序的主配置文件,需要的时候,你可以进入手动修改其配置参数.<br/><font color="#FF3300">注意:请你现在打开此文件删除第五行最后的"install/"</font></font></font></div></td>
              </tr>
              <tr>
                <td>配置主要参数 </td>
                <td>
<b><font color="green">完成</font></b></td>
              </tr>
            </table>
            <br> <table width="95%" border="0" align="center" cellpadding="5" cellspacing="0">
              <tr>
                <td width="58%" class="menuheader"><font color="#FF9900">Support
                  and bugs </font> </td>
                <td width="42%">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2"><div align="left" class="f8"><font color="#CCCCCC"><font color="#999999">如果你在使用中遇到BUGS或者你有什么好的建议请访问我们的网站!我们会尽力帮你解决问题!</font></font></div></td>
              </tr>
              <tr>
                <td>我的网站</td>
                <td><a href="http://www.cms8.com" target="_blank" class="slink">http://www.cms8.com</a></td>
              </tr>
              <tr>
                <td>支持论坛</td>
                <td><a href="http://www.cms8.com/bbs/index.asp" target="_blank" class="slink">http://www.cms8.com/bbs/index.asp</a></td>
              </tr>
            </table>
            <br> <table width="95%" border="0" align="center" cellpadding="5" cellspacing="0">
              <tr>
                <td width="58%" class="menuheader"><font color="#FF9900">请删除安装文件</font></td>
                <td width="42%">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2"><div align="left" class="f8"><font color="#CCCCCC"><font color="#999999">请你安装完本软件后删除install文件夹,你可以备份这个文件夹以备不时之需. </font></font></div></td>
              </tr>
            </table>
            <br> <br> <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td><div align="right"><span class="menulink"><a href="../admin.php" class="menulink"><font face="Arial, Helvetica, sans-serif"><strong>进入后台</strong></font></a></span>&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
              </tr>
            </table>
            <br> <br> </td>
        </tr>
      </table>
      <br>
      <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><br> </td>
        </tr>
      </table> </td>

  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>

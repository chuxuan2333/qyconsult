<?php
require("globals.php");
include_once("inc/initdb.php");
if(is_file("lang/".$lang))
{
require("lang/".$lang);
}else require("lang/lang_english.php");


/*
//modify by Moises Hdez.
//last update 2004/11/18
//www.hgmnetwork.com
if get id group delte from this group the email address
if not send id_group delete from all groups
*/
if ((isset($id) and ($id>0))){
   $sql = "SELECT * FROM wiml_maillist WHERE email_address = '".$_GET['mail']."' AND group_id = ".$_GET['id'];
} else {
   $sql = "SELECT * FROM wiml_maillist WHERE email_address = '".$_GET['mail']."';";

};
//test
//echo "<br>sql 1: $sql";

   $rs=$conn->Execute($sql);
   if( $rs->RecordCount() > 0)
   {
   $row=$rs->GetArray();
//test
//echo "<br>sql 2: $sql" .$row[0];

/*
//modify by Moises Hdez.
//last update 2004/11/18
if get id group delte from this group the email address
if not send id_group delete from all groups
and $id>0 if the email sent is a single email the group is -2 delete from all

*/
if ((isset($id) and ($id>0))){
//delete only 1 emails of 1 group
   $sql = "DELETE FROM wiml_maillist WHERE id = ".$row[0]['id'];
} else {
//delete all emails of all groups
$sql = "DELETE FROM wiml_maillist WHERE email_address = '".$row[0]['email_address']."';";
};
//test
//echo "<br>sql delete 1: $sql";

   if($conn->Execute($sql))include ("inc/email_removed.php");
   else include ("inc/email_not_exist.php");
   }
   else include ("inc/email_not_exist.php");
?>
<?php

include("globals.php");
include_once("inc/jscript.php");

if(is_file($main_dir."lang/".$lang))
 {
 require($main_dir."lang/".$lang);
 }else require($main_dir."lang/lang_chinese.php");

switch($mailbar)
{
case 1: include("mailbar1.php"); break;
case 2: include("mailbar2.php"); break;
case 3: include("mailbar3.php"); break;
case 4: include("mailbar4.php"); break;
case 5: include("mailbar5.php"); break;
case 6: include("mailbar6.php"); break;
case 7: include("mailbar7.php"); break;
default: include("mailbar1.php");
break;
}

?>
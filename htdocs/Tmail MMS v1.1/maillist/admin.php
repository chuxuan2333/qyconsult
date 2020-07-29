<?php session_start();
error_reporting (E_ALL);
require("globals.php");
require("inc/config.php");
if(!isset($website)){
include("install/install.php");
return;
}
require("inc/functions.php");

// This is to handle those magic quotes problem
function strip_magic_quotes($arr)
{
        foreach ($arr as $k => $v)
        {
//                        echo "[".$arr[$k]."==";
                if (is_array($v))
                        { $arr[$k] = strip_magic_quotes($v); }
                else
                        { $arr[$k] = stripslashes($v); }
//                        echo $arr[$k]."]";
        }

        return $arr;
}

if (get_magic_quotes_gpc())
{
        if (!empty($_GET))    { $_GET    = strip_magic_quotes($_GET);    }
        if (!empty($_POST))   { $_POST   = strip_magic_quotes($_POST);   }
        if (!empty($_COOKIE)) { $_COOKIE = strip_magic_quotes($_COOKIE); }
}
// Rem this if your server admin has register_globals turned on.
// It just converts global variables into local variables
foreach($_POST as $postvar => $postval){ ${$postvar} = $postval; }
foreach($_GET as $getvar => $getval){ ${$getvar} = $getval; }
//require("globals.php");
if( isset($change) )include("admin/update.php");
if(is_file("lang/".$lang))
{
require("lang/".$lang);
}else require("lang/lang_chinese.php");
include("admin/admin.php");
?>

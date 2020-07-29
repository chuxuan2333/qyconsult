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
    <td bgcolor="#FFFFFF"> <table width="600" height="62" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td background="../admin/images/bgmain.png"><img src="../admin/images/logo.png" width="250" height="62"></td>
      </tr>
    </table>

      <br>
      <form name="form1" method="post" action="install.php?stage=2">
        <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td><br>
              <table width="95%" border="0" align="center" cellpadding="5" cellspacing="0">
                <tr>
                  <td width="58%" class="menuheader"><font color="#FF9900">主要变量设置</font> </td>
                  <td width="42%">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="2"><div align="left" class="f8"><font color="#CCCCCC"><font color="#999999">这些是基础必要的设置,更加详细的设置,请在安装完成登陆后台进行管理配置.</font></font></div></td>
                </tr>
                <tr>
                  <td>绝对网址(请修改)</td>
                  <td><input name="cwebsite" type="text" class="textboxgray" id="cwebsite" value="http://localhost/" size="50"></td>
                </tr>
                <tr>
                  <td>mailist安装路径</td>
                  <td><input name="cpath" type="text" class="textboxgray" id="cpath" value="maillist/" size="50"></td>
                </tr>
                <tr>
                  <td>Relative string ( 根据index.php 说明设置 )</td>
                  <td><input name="cstring" type="text" class="textboxgray" id="cstring" value="index.php?page=mail&amp;" size="50"></td>
                </tr>
                <tr>
                  <td>绝对路径 ( 程序所在服务器的绝对路径 )</td>
                  <td><input name="cabsolute_path" type="text" class="textboxgray" id="cpath2" value="<?php $cwd = getcwd()."/";
				  $cwd = str_replace("\\","/",$cwd);
				  $cwd = str_replace("//","/",$cwd);
				  echo $cwd;

				  ?>" size="50"></td>
                </tr>
              </table>
              <br> <table width="95%" border="0" align="center" cellpadding="5" cellspacing="0">
                <tr>
                  <td width="58%" class="menuheader"><font color="#FF9900">管理员设定 </font></td>
                  <td width="42%">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="2"><div align="left" class="f8"><font color="#CCCCCC"><font color="#999999">设置MAILLIST的管理员信息,此管理员将负责管理MAILLIST的后台操作.</font></font></div></td>
                </tr>
                <tr>
                  <td>用户名</td>
                  <td><input name="cusername" type="text" class="textboxgray" id="cusername" value="admin" size="50"></td>
                </tr>
                <tr>
                  <td>密 码</td>
                  <td><input name="cpassword" type="text" class="textboxgray" id="cpassword" value="<?php
/* taken from the mambo open source cms */
	$makepass="";
	$salt = "abchefghjkmnpqrstuvwxyz0123456789";
	srand((double)microtime()*1000000);
	$i = 0;
	while ($i <= 7) {
		$num = rand() % 33;
		$tmp = substr($salt, $num, 1);
		$makepass = $makepass . $tmp;
		$i++;
		}
		echo $makepass;
				  ?>" size="50"></td>
                </tr>
                <tr>
                  <td>管理员 email </td>
                  <td><input name="cemail" type="text" class="textboxgray" id="cemail" onClick="this.value='';" value="admin@mysite.com" size="50"></td>
                </tr>
              </table>
              <br> <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td><div align="right"><span class="menulink"><a href="javascript:document.form1.submit();" class="menulink"><font face="Arial, Helvetica, sans-serif"><strong>下一步</strong></font></a></span>&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
                </tr>
              </table>
              <br> </td>
          </tr>
        </table>
      </form>

      <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><br> </td>
        </tr>
      </table>
    <br> </td>
  </tr>
</table>
</body>
</html>

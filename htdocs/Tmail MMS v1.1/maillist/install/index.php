<?php
if(isset($_GET['stage']))
{
$stage=$_GET['stage'];
include("install$stage.php");
return;
}
?>
<html>
<head>
<title>Tmail MMS Ver1.0 ��װ����</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="css/install.css" rel="stylesheet" type="text/css">
<link href="install/css/install.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
</head>

<body>
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" class="codeboxes">
  <tr>
    <td bgcolor="#FFFFFF">
      <table width="600" height="62" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td background="../admin/images/bgmain.png"><img src="../admin/images/logo.png" width="250" height="62"></td>
        </tr>
      </table>

      <br>
      <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><br>
            <table width="95%" border="0" align="center" cellpadding="5" cellspacing="0">
              <tr>
                <td width="66%" class="menuheader">&nbsp;</td>
                <td width="34%">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2"><div align="center">��л��ѡ��<span class="style1">Tmail MMSϵͳ</span>����ͻ��ʼ�,������кõĽ���,���½CMS8.COM</div></td>
              </tr>
              <tr>
                <td><div align="right">�������ȴ򿪰����ĵ� <a href="http://www.cms8.com/mail/maillist/help/index.htm" target="_blank">�������</a></div></td>
                <td>&nbsp;</td>
              </tr>
            </table>
            <br>
            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td><div align="right">                                &nbsp;&nbsp;&nbsp;&nbsp;</div></td>
              </tr>
            </table>
            <br>
          </td>
        </tr>
      </table>
      <br>

      <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><div align="center"><br>
          <span class="menulink"><a href="install.php" class="menulink"><font face="Arial, Helvetica, sans-serif"><strong>��ʼ��װ</strong></font></a></span> </div></td>
        </tr>
      </table>
    <br>    </td>
  </tr>
</table>
</body>
</html>

<html>
<head>
<title>Tmail MMS Ver1.0 ��װ����</title>
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

      <form name="form" method="post" action="install.php?stage=3">
        <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td><br> <table width="95%" border="0" align="center" cellpadding="5" cellspacing="0">
                <tr>
                  <td width="58%" class="menuheader"><font color="#FF9900">���ݿ�����</font></td>
                  <td width="42%"><br> <input type="hidden" name="cwebsite" value="<?php echo $_POST['cwebsite']; ?>">
                    <input  type="hidden" name="cstring" value="<?php echo $_POST['cstring']; ?>">
                    <input  type="hidden" name="cpath" value="<?php echo $_POST['cpath']; ?>">
                    <input type="hidden"  name="cusername" value="<?php echo $_POST['cusername']; ?>">
                    <input  type="hidden" name="cpassword" value="<?php echo $_POST['cpassword']; ?>">
                    <input  type="hidden" name="cemail" value="<?php echo $_POST['cemail']; ?>">
                                         <input  type="hidden" name="cabsolute_path" value="<?php echo $_POST['cabsolute_path']; ?>">
                  </td>
                </tr>
                <tr>
                  <td colspan="2"><div align="left" class="f8"><font color="#CCCCCC"><font color="#999999">��ѡ������ʹ�õ����ݿ�����. </font></font></div></td>
                </tr></table>
                                <script language="JavaScript" type="text/JavaScript">
function change_database()
{
switch(document.form.database.value)
{
case "custom1":
dhtml.cycleTab('tab1');
document.form.tablename.value="nuke_users";
document.form.userfield.value="username";
document.form.emailfield.value="user_email";
break;

case "custom2":
dhtml.cycleTab('tab1');
document.form.tablename.value="phpbb_users";
document.form.userfield.value="username";
document.form.emailfield.value="user_email";
break;

case "custom3":
dhtml.cycleTab('tab1');
document.form.tablename.value="";
document.form.userfield.value="";
document.form.emailfield.value="";
break;
default :
dhtml.cycleTab('tab2');
break;


}
//dhtml.cycleTab('tab1');
}
</script>

              <table width="95%" border="0" align="center" cellpadding="5" cellspacing="0">
                <tr>
                  <td width="20%">Select Database </td>
                  <td width="80%"><select name="database" id="database" onChange="javascript:change_database();">
                      <option value="mysql" selected>MySQL</option>
                      <option value="postgres7">PostgreSQL</option>
                      <option value="mssql">MS SQL Server</option>
                      <option value="custom1">PHP Nuke</option>
                      <option value="custom2">PHPBB</option>
                      <option value="custom3">Custom</option>
                    </select></td>
                </tr>
              </table>
                          <table width="95%" border="0" align="center" cellpadding="5" cellspacing="0">
                <tr>
                  <td><font color="#999999">��������д�������� .</font></td>
                </tr>
              </table>
                            <table width="570" align="center" cellpadding="5" cellspacing="0" >
                  <tr>
                    <td width="196">���ݿ����� </td>
                    <td width="352">
<input name="cdbhostname" type="text" class="textboxgray" id="cauthor3" value="localhost" size="50"></td>
                  </tr>
                  <tr>
                    <td>���ݿ��û��� </td>
                    <td><input name="cdbusername" type="text" class="textboxgray"  size="50"></td>
                  </tr>
                  <tr>
                    <td>���ݿ�����</td>
                    <td><input name="cdbpassword" type="text" class="textboxgray" size="50"></td>
                  </tr>
                  <tr>
                    <td>���ݿ���<br/><font color="#FF3300">(Ĭ�ϵ����ݱ�ǰ׺Ϊ"wiml_")</font></td>
                    <td><input name="cdbname" type="text" class="textboxgray"  size="50"></td>
                  </tr></table>
                                  <div id="page1" class="pagetext">
                <table width="570" align="center" cellpadding="5" cellspacing="0">
                  <tr>
                    <td width="196">���ݱ���</td>
                    <td width="352">
                      <input name="tablename" type="text" class="textboxgray" size="50">
                    </td>
                  </tr>
                  <tr>
                    <td>Username field name</td>
                    <td><input name="userfield" type="text" class="textboxgray" id="userfield" size="50"></td>
                  </tr>
                  <tr>
                    <td>Email Field name </td>
                    <td><input name="emailfield" type="text" class="textboxgray" id="emailfield" size="50"></td>
                  </tr>
                </table></div>
              <div id="page2" class="pagetext"> </div>
              <br> <br> <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td><div align="right"><span class="menulink"><a href="javascript:document.form.submit();" class="menulink"><font face="Arial, Helvetica, sans-serif"><strong>��ɰ�װ</strong></font></a></span>&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
                </tr>
              </table>
              <br> </td>
          </tr>
        </table>
      </form>
     <br>
      <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>
                  <span class="menulink2" id="tab1" onClick="dhtml.cycleTab(this.id)">&nbsp;</span>
                  <span class="menulink2" id="tab2" onClick="dhtml.cycleTab(this.id)">&nbsp;</span>
          </td>
        </tr>
      </table> </td>
  </tr>
</table>
<script language="javascript" type="text/javascript">
//        dhtml.cycleTab('tab2');
</script>
</body>
</html>

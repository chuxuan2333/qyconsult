<html>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<TITLE>OSCTIA Mailing List</TITLE>
<link href="maillist/admin/css/admin.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style10 {font-size: 10px}
-->
</style>
</HEAD>
<body ><table width="780" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td width="180" valign="top"> 
       <table width="180" border="0" cellpadding="0" cellspacing="0" class="boxes">
        <tr>
          <td class="boxheader">���⻪�˿ƴ�����OSCTIA�ʼ�����</td>
        </tr>
        <tr>
          <td><?php
                          $mailbar=5;
                          $group=1;
                          include("maillist/mailbar.php");
                           ?></td>
        </tr>
      </table>
      <p><br>
      </p></td>
    <td width="580" valign="top"> <table width="460" border="0" cellpadding="0" cellspacing="0" class="codeboxes">
      <tr>
        <td width="20">��</td>
        <td><code>
          <br>
          <?php
                      if(isset ($_GET['page']))
                                        {
                                        if ($_GET['page'] == "mail")
                                        {
                                    include("http://www.ruicuntech.com.cn/maillist/mailmain.php");
                                        }
                                        if ($_GET['page'] == "about")
                                        {
                                    include("http://www.ruicuntech.com.cn/about.php");
                                        }
                                        }else {
                                        /* include( your title page"); */
                                        print(":���Ľ�����ڴ˴���ʾ :");
                                        }
              ?>
          <br>
          <br>
        </code></td>
      </tr>
    </table>
      <p align="left"><strong>���⻪�˿ƴ�����OSCTIA</strong></p>
      <p align="left">���⻪�˿ƴ�����(OSCTIA)��һ�����⻪�˻���ר�Ҽ�ǿ�����ʹ��½�����ƽ̨. ͬʱ,Ҳ�ٽ��й�����������֮��ļ�������ҵ�����.�Դ�2006��,OSCTIA��ŷ������-����ʱ��³������ʼ,Ϊȫ�����,��ŷ��,����,�й��ȵط�Ϊ���˻���ר����֯�����ר�������̳.</p>

      <p align="left">�ʼ������Ա����<a href="http://www.ruicuntech.com.cn/maillist/admin.php">�����½</a> ���б�Ҫ������.
		<a href="http://www.ruicuntech.com.cn/phpnews/">���ŷ���</a></p>
      </td>
  </tr>
  <tr>
    <td height="40" colspan="2" background="maillist/admin/images/bgbottom.png"><div align="center">Copy Right: OSCTIA 2006</div></td>
  </tr>
</table>
</body>
</HTML>
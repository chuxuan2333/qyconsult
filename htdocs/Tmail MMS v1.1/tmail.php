<html>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<TITLE>Tmail MMS Ver1.1</TITLE>
<link href="maillist/admin/css/admin.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style10 {font-size: 10px}
-->
</style>
</HEAD>
<body ><table width="780" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td colspan="2"><table width="100%" border="0" cellpadding="0" cellspacing="0" background="maillist/admin/images/bgmain.png">
        <tr>
          <td width="60%"><a href="http://www.cms8.com"><img src="maillist/admin/images/logo.png" width="250" height="62" border="0"></a><span class="style1"></span></td>
          <td width="40%"> <p align="right"><span class="h3"><font color="#666666"><strong>Tmail MMS Ver1.1</strong><br>
          </font></span> <font color="#999999"><em>�����ʼ�ԭ����˼�</em></font></p></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td width="200" valign="top"> <table width="200"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td class="headermenu">���˵�</td>
        </tr>
        <tr>
          <td class="itemmenu"><div class="menu">
            <div align="left"><a href="index.php" class="menu">��ҳ</a></div>
          </div></td>
        </tr>
        <tr>
          <td  class="itemmenu"><div class="menu">
            <div align="left"><a href="index.php?page=about" class="menu">����</a></div>
          </div></td>
        </tr>
        <tr>
          <td class="itemmenu"><div class="menu">
            <div align="left"><a href="maillist/admin.php" class="menu">����</a></div>
          </div></td>
        </tr>
        <tr>
          <td class="itemmenu"><div class="menu">
            <div align="left"><a href="http://www.cms8.com/mail/maillist/help/index.htm" target="_blank" class="menu">����</a></div>
          </div></td>
        </tr>
      </table>
      <br>
      <table width="200" border="0" cellpadding="0" cellspacing="0" class="boxes">
        <tr>
          <td class="boxheader">�ʼ�����</td>
        </tr>
        <tr>
          <td><?php
                          $mailbar=1;
                          $group=1;
                          include("maillist/mailbar.php");
                           ?></td>
        </tr>
      </table>
      <br>
      <table width="200" border="0" cellpadding="0" cellspacing="0" class="boxes">
        <tr>
          <td class="boxheader">�ʼ�����</td>
        </tr>
        <tr>
          <td><?php
                          $mailbar=2;
                          $group=1;
                          include("maillist/mailbar.php");
                           ?></td>
        </tr>
      </table>
      <br>
      <table width="200" border="0" cellpadding="0" cellspacing="0" class="boxes">
        <tr>
          <td class="boxheader">�ʼ�����</td>
        </tr>
        <tr>
          <td><?php
                          $mailbar=6;
                          $group=1;
                          include("maillist/mailbar.php");
                           ?></td>
        </tr>
      </table>
            <br>
      <table width="200" border="0" cellpadding="0" cellspacing="0" class="boxes">
        <tr>
          <td class="boxheader">�ʼ�����</td>
        </tr>
        <tr>
          <td><?php
                          $mailbar=4;
                          $group=1;
                          include("maillist/mailbar.php");
                           ?></td>
        </tr>
      </table>
      <p><br>
      </p></td>
    <td width="685" valign="top"> <table width="460" border="0" cellpadding="0" cellspacing="0" class="codeboxes">
      <tr>
        <td width="20">&nbsp;</td>
        <td><code>
          <br>
          <?php
                      if(isset ($_GET['page']))
                                        {
                                        if ($_GET['page'] == "mail")
                                        {
                                    include("maillist/mailmain.php");
                                        }
                                        if ($_GET['page'] == "about")
                                        {
                                    include("about.php");
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
      <p align="left"><strong>��ʾҳ��</strong></p>
      <p align="left">����ɹ���װ���Tmailϵͳ֮��,�㽫�ᵽ�����ʾҳ��,������,�����������������.</p>
      <p align="left">�����,�㽫�ῴ��һЩ�ʼ����ĵı�ʵ��,�����ѡ��һ�ֽ������õ�����Ҫ���ö��ĵ�ҳ��,�뿴����Ĵ���.</p>
      <p align="left">ѡ��һ�����ı�,�����´�����õ����PHP��ҳ��.</p>
      <p align="left">
  

   $group=1��ʾ�û��ύ����Ϣ�Զ����浽id=1���û�����,��������. <br>
   $mailbar=1��ʾʹ�õ�һ�ֱ���ʽ. </p>
      <table width="460" border="0" cellpadding="0" cellspacing="0" class="codeboxes">
        <tr>
          <td width="20">&nbsp;</td>
          <td><code><br>
              <span class="style8 style8">&lt;?php <BR>
          $mailbar=1;<BR>
          $group=1; <BR>
          include("maillist/mailbar.php");<br>
          ?&gt;</span><span class="style10"><br>
              </span><br>
          </code></td>
        </tr>
      </table>
      <p align="left">&nbsp;</p>
      <p align="left">һ�´��뽫��֪ͨ�û������Ƿ�ɹ�,�뽫����õ����趨�õ�ҳ����.</p>
      <div align="left"><code> </code>
        <table width="460" border="0" cellpadding="0" cellspacing="0" class="codeboxes">
          <tr>
            <td width="20">&nbsp;</td>
            <td><code><br>
                <span class="style8 style8">&lt;?php<br>
              if(isset ($_GET['page']))<br>
              {<br>
              if ($_GET['page'] == &quot;mail&quot;)<br>
              {<br>
              include(&quot;maillist/mailmain.php&quot;);<br>
              }<br>
              if ($_GET['page'] == &quot;about&quot;)<br>
              {<br>
              include(&quot;about.php&quot;);<br>
              }<br>
              }else {<br>
              /* include( your title page&quot;); */<br>
              print(&quot;:���Ľ�����ڴ˴���ʾ :&quot;);<br>
              }<br>
              ?&gt;</span></code> <span class="style8 style8"><br>
              </span><br></td>
          </tr>
        </table>
      </div>
      <p align="left"><em>��ע������е��ļ�·��������ȷ.</em></p>
      <p align="left">���������<a href="maillist/admin.php">��̨����</a> ����һЩ��Ҫ������.</p>
      <p><strong>Good luck :) </strong></p>
      <p>Toll</p>
      <p>����㻹������,������ҵ���վ:<BR>
        <BR>
        <A
href="http://www.cms8.com/bbs/"
target=_blank><STRONG>http://www.cms8.com/bbs </STRONG></A> <strong><br>
        <br>
      </strong></p></td>
  </tr>
  <tr>
    <td height="40" colspan="2" background="maillist/admin/images/bgbottom.png"><div align="center">WWW.CMS8.COM| Tmail MMS Ver1.1</div></td>
  </tr>
</table>
</body>
</HTML>
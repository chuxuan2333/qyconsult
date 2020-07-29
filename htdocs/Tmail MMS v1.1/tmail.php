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
          </font></span> <font color="#999999"><em>发送邮件原来如此简单</em></font></p></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td width="200" valign="top"> <table width="200"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td class="headermenu">主菜单</td>
        </tr>
        <tr>
          <td class="itemmenu"><div class="menu">
            <div align="left"><a href="index.php" class="menu">首页</a></div>
          </div></td>
        </tr>
        <tr>
          <td  class="itemmenu"><div class="menu">
            <div align="left"><a href="index.php?page=about" class="menu">关于</a></div>
          </div></td>
        </tr>
        <tr>
          <td class="itemmenu"><div class="menu">
            <div align="left"><a href="maillist/admin.php" class="menu">管理</a></div>
          </div></td>
        </tr>
        <tr>
          <td class="itemmenu"><div class="menu">
            <div align="left"><a href="http://www.cms8.com/mail/maillist/help/index.htm" target="_blank" class="menu">帮助</a></div>
          </div></td>
        </tr>
      </table>
      <br>
      <table width="200" border="0" cellpadding="0" cellspacing="0" class="boxes">
        <tr>
          <td class="boxheader">邮件订阅</td>
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
          <td class="boxheader">邮件订阅</td>
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
          <td class="boxheader">邮件订阅</td>
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
          <td class="boxheader">邮件订阅</td>
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
                                        print(":订阅结果将在此处显示 :");
                                        }
              ?>
          <br>
          <br>
        </code></td>
      </tr>
    </table>
      <p align="left"><strong>演示页面</strong></p>
      <p align="left">当你成功安装完此Tmail系统之后,你将会到达此演示页面,在这里,将告诉你具体怎样做.</p>
      <p align="left">在左侧,你将会看到一些邮件订阅的表单实例,你可以选择一种将它放置到你需要设置订阅的页面,请看下面的代码.</p>
      <p align="left">选择一个订阅表单,将以下代码放置到你的PHP网页中.</p>
      <p align="left">
  

   $group=1表示用户提交的信息自动储存到id=1的用户组中,依此类推. <br>
   $mailbar=1表示使用第一种表单样式. </p>
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
      <p align="left">一下代码将会通知用户订阅是否成功,请将其放置到你设定好的页面中.</p>
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
              print(&quot;:订阅结果将在此处显示 :&quot;);<br>
              }<br>
              ?&gt;</span></code> <span class="style8 style8"><br>
              </span><br></td>
          </tr>
        </table>
      </div>
      <p align="left"><em>请注意代码中的文件路径保持正确.</em></p>
      <p align="left">现在请进入<a href="maillist/admin.php">后台管理</a> 进行一些必要的设置.</p>
      <p><strong>Good luck :) </strong></p>
      <p>Toll</p>
      <p>如果你还有疑问,请访问我的网站:<BR>
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
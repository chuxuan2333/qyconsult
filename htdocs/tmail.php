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
          <td class="boxheader">海外华人科创联盟OSCTIA邮件订阅</td>
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
        <td width="20">　</td>
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
                                        print(":订阅结果将在此处显示 :");
                                        }
              ?>
          <br>
          <br>
        </code></td>
      </tr>
    </table>
      <p align="left"><strong>海外华人科创联盟OSCTIA</strong></p>
      <p align="left">海外华人科创联盟(OSCTIA)是一个海外华人华侨专家加强技术和创新交流的平台. 同时,也促进中国和西方国家之间的技术和商业交流活动.自从2006年,OSCTIA从欧盟中心-比利时布鲁塞尔开始,为全球服务,在欧盟,美国,中国等地方为华人华侨专家组织了许多专场活动和论坛.</p>

      <p align="left">邮件组管理员请点击<a href="http://www.ruicuntech.com.cn/maillist/admin.php">管理登陆</a> 进行必要的设置.
		<a href="http://www.ruicuntech.com.cn/phpnews/">新闻发布</a></p>
      </td>
  </tr>
  <tr>
    <td height="40" colspan="2" background="maillist/admin/images/bgbottom.png"><div align="center">Copy Right: OSCTIA 2006</div></td>
  </tr>
</table>
</body>
</HTML>
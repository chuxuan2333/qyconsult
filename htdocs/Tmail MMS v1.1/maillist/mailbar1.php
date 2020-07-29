<?php include("globals.php"); ?>
<form action="<?php echo $website.$relative_string;?>" name="subscribe" onsubmit="javascript:return checkEmail(this);" method="post">
  <table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td><strong>
        <input name="email" type="text" class="box" id="email2" value="Your email address" size="20" onfocus="this.value='';" >
        <input name="group" type="hidden" id="group[]" value="<?php echo $group; ?>">
        </strong></td>
    </tr>
    <tr>
      <td height="18"> <div align="left">
          <p><span class="small">
            <input name="subscribe" type="radio" value="true" checked>
            </span>Subscribe </p>
        </div></td>
    </tr>
    <tr>
      <td width="94%" height="17" valign="middle"> <div align="left">
          <p><span class="small">
            <input type="radio" name="subscribe" value="false">
            </span>Un-Subscribe </p>
        </div></td>
    </tr>
    <tr>
      <td valign="middle"> <div align="center">
          <input name="Submit2" type="submit" class="box" value="Submit">
        </div></td>
    </tr>
  </table>
</form>
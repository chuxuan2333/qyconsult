<?php include("globals.php"); ?> 
<form action="<?php echo $website.$relative_string;?>" name="subscribe" onsubmit="javascript:return checkNEmail(this);" method="post">
  <table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr> 
      <td width="94%"><strong> 
        <input name="name" type="text" class="box" id="email2" value="Your name" size="20" onfocus="this.value='';" >
        <input name="group" type="hidden" id="group[]" value="<?php echo $group; ?>">
        </strong></td>
    </tr>
    <tr> 
      <td><strong> 
        <input name="email" type="text" class="box" id="email2" value="Your email address" size="20" onfocus="this.value='';" >
        </strong></td>
    </tr>
    <tr> 
      <td valign="middle"> <div align="center">
          <input name="subscribe" type="hidden" id="subscribe" value="true">
          <input name="Submit2" type="submit" class="box" value="Submit">
        </div></td>
    </tr>
  </table>
</form>
<?php include("globals.php"); ?>
<form action="<?php echo $website.$relative_string;?>" name="subscribe" onsubmit="javascript:return checkNEmail(this);" method="post">
  <table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td><strong>
Name: <input name="name" type="text" class="box" id="email2" value="Your name" size="20" onfocus="this.value='';" style="font-size: 10px; font-family: Verdana;">
  <input name="group" type="hidden" id="group[]" value="<?php echo $group; ?>">
        </strong></td>
    </tr>
    <tr>
      <td><strong>
Email: <input name="email" type="text" class="box" id="email2" value="Your email address" size="20" onfocus="this.value='';" style="font-size: 10px; font-family: Verdana;">
        </strong></td>
    </tr>
<tr>
      <td width="94%" height="17" valign="middle"> <div align="left">
          <p>
<strong>Want to:</strong> <select name="subscribe" id="subscribe" style="font-size: 10px; font-family: Verdana;">
              <option value="true" selected>Subscribe</option>
              <option value="false">Unsubscribe</option>
            </select>
          </p>
        </div></td>
    </tr>
    <tr><td>
   <strong> In group: </strong>
    <select name="group" class="textbox" style="font-size: 10px; font-family: Verdana;">
                  <?php
                  include_once("inc/initdb.php");
                                  $recordset=$conn->Execute('SELECT  *  FROM  wiml_mailgroup');
                                  $rs=$recordset->GetArray();
                                  if(is_array($rs))
                                  {
                                  foreach($rs as $row)
                                  {
                                         $selected="";
                                        if(!isset($group))$group="-1";
                                        if($row['id']==$group)$selected="selected";
                                    echo '<option value="'.$row['id'].'" '.$selected.' >'.$row['name'].'</option>';
                                  }
                                  }
?>
</select>

    </td></tr>
    <tr>
      <td valign="middle"> <div align="center">

          <input name="Submit2" type="submit" class="box" value="Submit" style="font-size: 10px; font-family: Verdana;">
        </div></td>
    </tr>
  </table>
</form>
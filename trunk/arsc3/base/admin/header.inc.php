<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html>
 <head>
  <title>
   <?php echo ARSC_PARAMETER_TITLE; ?> Administration
  </title>
 </head>
 <body bgcolor="#FFFFFF">
  <table width="100%" cellspacing="0" cellpadding="4">
   <tr bgcolor="#888888">
    <td width="10%">
     &nbsp;
    </td>
    <td width="90%" bgcolor="#EEEEEE">
     <font face="Arial" size="3">
      <?php echo ARSC_PARAMETER_TITLE; ?>
      <b>
       Administration
      </b>
     </font>
    </td>
   </tr>
   <tr bgcolor="#444444">
    <td width="10%" bgcolor="#FFFFFF"><font size="1">&nbsp;</font></td>
    <td width="90%">
     <font face="Verdana, Arial" size="1">
      <?php
      if (!strstr($PHP_SELF, "index.php"))
      {
       ?>
       <a href="parameters.php"><font color="#EEEEEE">Parameters</font></a>
       <a href="smilies.php"><font color="#EEEEEE">Smilies</font></a>
       <a href="templates.php"><font color="#EEEEEE">Templates</font></a>
       <a href="layouts.php"><font color="#EEEEEE">Layouts</font></a>
       <a href="users.php"><font color="#EEEEEE">Users</font></a>
       <a href="levels.php"><font color="#EEEEEE">Level Right Management</font></a>
       <?php
      }
      ?>
     </font>
    </td>
   </tr>
  </table>
  <br>
  <br>

<?php

function arsc_message_postprocessing($user, $room, $message)
{
 /*
  This function is called everytime someone posts into the chat.
  You can send this data e.g. into a weblog.
 */
 
 // Example: Send the data to a webpage
 // $fp = fopen("http://www.example.com/yourscript.php?user=".$user."&room=".$room."&message=".$message, "r");
 // fclose($fp);
}

?>

<?php

function arsc_message_preprocessing($message)
{
 /*
  This function is called everytime someone posts into the chat.
  Here you can e.g. filter out words or do other tricks with the input.
  Don't forget to return the $message!
 */
 
 // Change URLs to links:
 $message = preg_replace("#(^|[^\"=]{1})(http://|ftp://|mailto:|news:)([^\s<>]+)([\s\n<>]|$)#sm", "\\1<a href=\"\\2\\3\" target=\"_blank\">\\2\\3</a>\\4", $message);
 
 return $message;
}

?>

<?php

class arsc_api_Class // FIXME: All SQL queries must come here one day.
{

 function getUserValuesBySID($sid)
 {
  if ($result = mysql_query("SELECT user, lastping, ip, room, language, color, version, template, level, flag_ripped, sid, lastmessageping FROM arsc_users WHERE sid = '$sid'", ARSC_PARAMETER_DB_LINK))
  {
   return mysql_fetch_array($result);
  }
  else
  {
   return FALSE;
  }
 }

 function getUserValuesByName($name)
 {
  if ($result = mysql_query("SELECT user, lastping, ip, room, language, color, version, template, level, flag_ripped, sid, lastmessageping FROM arsc_users WHERE user = '$name'", ARSC_PARAMETER_DB_LINK))
  {
   return mysql_fetch_array($result);
  }
  else
  {
   return FALSE;
  }
 }

 function getUserValueByName($value_name, $name)
 {
  if ($result = mysql_query("SELECT $value_name FROM arsc_users WHERE user = '$name'", ARSC_PARAMETER_DB_LINK))
  {
   $a = mysql_fetch_array($result);
   return $a[$value_name];
  }
  else
  {
   return FALSE;
  }
 }
 
 function getUserValueByValue($get_value_name, $find_value_name, $find_value_value)
 {
  if ($result = mysql_query("SELECT $get_value_name FROM arsc_users WHERE $find_value_name = '$find_value_value'", ARSC_PARAMETER_DB_LINK))
  {
   $a = mysql_fetch_array($result);
   return $a[$get_value_name];
  }
  else
  {
   return FALSE;
  }
 }
 
 function setUserValueByName($value_name, $value, $name)
 {
  if ($result = mysql_query("UPDATE arsc_users SET $value_name = '$value' WHERE user = '$name'", ARSC_PARAMETER_DB_LINK))
  {
   return TRUE;
  }
  else
  {
   return FALSE;
  }
 }
 
 function userIsValid($name)
 {
  if ($result = mysql_query("SELECT level FROM arsc_users WHERE user = '$name'", ARSC_PARAMETER_DB_LINK))
  {
   $a = mysql_fetch_array($result);
   if ($a["level"] >= 0)
   {
    return TRUE;
   }
   else
   {
    return FALSE;
   }
  }
  else
  {
   return FALSE;
  }
 }

 function getReadableRoomname($room)
 {
  $result = mysql_query("SELECT roomname_nice FROM arsc_rooms WHERE roomname = '$room'", ARSC_PARAMETER_DB_LINK);
  $a = mysql_fetch_array($result);
  return $a["roomname_nice"];
 }

 function getInternalRoomname($room)
 {
  $result = mysql_query("SELECT roomname FROM arsc_rooms WHERE roomname_nice = '$room'", ARSC_PARAMETER_DB_LINK);
  $a = mysql_fetch_array($result);
  return $a["roomname"];
 }

 function getReadableRoomlist()
 {
  $result = mysql_query("SELECT roomname_nice, owner FROM arsc_rooms ORDER BY owner", ARSC_PARAMETER_DB_LINK);
  while ($a = mysql_fetch_array($result))
  {
   if ($a["owner"] == -1)
   {
    $return[] = $a["roomname_nice"];
   }
  }
  return($return);
 }

 function getInternalRoomlist()
 {
  $result = mysql_query("SHOW tables LIKE 'arsc\_room\_%'", ARSC_PARAMETER_DB_LINK);
  while ($a = mysql_fetch_array($result))
  {
   if ($a[0] <> "")
   {
    $return[] = substr($a[0], 10);
   }
  }
  reset($return);
  return($return);
 }

 function getSimpleUserlist($room)
 {
  $result = mysql_query("SELECT user FROM arsc_users WHERE room = '$room' ORDER BY level DESC, user ASC", ARSC_PARAMETER_DB_LINK);
  while ($a = mysql_fetch_array($result))
  {
   $return[] = $a["user"];
  }
  return($return);
 }

 function getSimpleUserlistWithRights($room)
 {
  $result = mysql_query("SELECT user, level FROM arsc_users WHERE room = '$room' ORDER BY level DESC, user ASC", ARSC_PARAMETER_DB_LINK);
  while ($a = mysql_fetch_array($result))
  {
   $return["{$a["user"]}"] = $a["level"];
  }
  return($return);
 }
 
 function getTemplatelist()
 {
  $result = mysql_query("SELECT DISTINCT template FROM arsc_templates", ARSC_PARAMETER_DB_LINK);
  while ($a = mysql_fetch_array($result))
  {
   $return[] = $a["template"];
  }
  reset($return);
  return($return);
 }

 function getLayoutlist()
 {
  $result = mysql_query("SELECT id, name FROM arsc_layouts", ARSC_PARAMETER_DB_LINK);
  while ($a = mysql_fetch_array($result))
  {
   $return["{$a["id"]}"] = $a["name"];
  }
  reset($return);
  return($return);
 }
 
 function getLayoutValues($id)
 {
  $result = mysql_query("SELECT * FROM arsc_layouts WHERE id = ".$id, ARSC_PARAMETER_DB_LINK);
  $a = mysql_fetch_array($result);
  return($a);
 }

 function createUser($user, $password, $room, $language, $template, $version, $ip)
 {
  mt_srand((double)microtime() * 1000000);
  $sid = md5(mt_rand(0, mt_getrandmax()));
  mysql_query("INSERT INTO arsc_users
               (user, lastping, ip, room, language, version, template, sid)
               VALUES
               ('$user', '".time()."', '$ip', '$room', '$language', '$version', '$template', '$sid')", ARSC_PARAMETER_DB_LINK);
  return $sid;
 }
 
 function deleteUser($name)
 {
  mysql_query("DELETE FROM arsc_users WHERE user = '$name'", ARSC_PARAMETER_DB_LINK);
  return TRUE;
 }
 
 function getTemplate($template)
 {
  $result = mysql_query("SELECT name, value FROM arsc_templates WHERE template = '$template'", ARSC_PARAMETER_DB_LINK);
  while ($a = mysql_fetch_array($result))
  {
   $return["{$a["name"]}"] = $a["value"];
  }
  return $return;
 }

 function getMessages($since, $room, $template)
 {
  $template_varname = "arsc_template_".$template;
  GLOBAL $$template_varname, $arsc_my;
  $result = mysql_query("SELECT message, user, flag_ripped, sendtime, timeid FROM arsc_room_$room WHERE timeid > '$since' ORDER BY timeid ASC, id ASC", ARSC_PARAMETER_DB_LINK);
  while ($a = mysql_fetch_array($result))
  {
   $message .= arsc_filter_posting($a["user"], $a["sendtime"], str_replace("\n", "#ret#", $a["message"]), $room, $a["flag_ripped"], $$template_varname);
   $return[1] = $a["timeid"];
  }
  $return[0] = $message;
  return($return);
 }

 function postMessage($room, $message, $user, $sendtime, $timeid, $flag_ripped)
 {
  include("message_postprocessing.inc.php");
  arsc_message_postprocessing($user, $room, $message);
  mysql_query("INSERT INTO arsc_room_".mysql_escape_string($room)." (message, user, sendtime, timeid, flag_ripped) VALUES ('".mysql_escape_string($message)."', '".mysql_escape_string($user)."', '$sendtime', '$timeid', '$flag_ripped')", ARSC_PARAMETER_DB_LINK);
 }
 
 function handleReceivedMessage($sid, $message, $language_path)
 {
  //$message = htmlspecialchars($message);
  $my = $this->getUserValuesBySID($sid);
  @include($language_path."languages/".$my["language"].".inc.php");
  if ($my["level"] >= 0)
  {
   $this->deleteNeedlessMessages($my["room"]);
   $sendtime = date("H:i:s");
   $timeid = arsc_microtime();
   if ($message <> "")
   {
    $flood_count = $this->getUserValueByName("flood_count", $my["user"]);
    $flood_lastmessage = $this->getUserValueByName("flood_lastmessage", $my["user"]);
    if ($flood_lastmessage == $message)
    {
     if ($flood_count > ARSC_PARAMETER_FLOOD_MAX - 1)
     {
      $this->postMessage($my["room"], "arsc_user_kicked~~System~~".$my["user"], "System", date("H:i:s"), arsc_microtime(), 0);
      $this->setUserValueByName("level", -1, $my["user"]);
      return FALSE;
     }
     elseif ($flood_count == ARSC_PARAMETER_FLOOD_MAX - 2)
     {
      $this->postMessage($my["room"], "/msg ".$my["user"]." ".$arsc_lang["floodwarn"], "System", date("H:i:s"), arsc_microtime(), 0);
      $this->setUserValueByName("flood_count", $flood_count + 1, $my["user"]);
      return TRUE;
     }
     $this->setUserValueByName("flood_count", $flood_count + 1, $my["user"]);
    }
    else
    {
     $this->setUserValueByName("flood_lastmessage", $message, $my["user"]);
     $this->setUserValueByName("flood_count", 0, $my["user"]);
    }
    $this->postMessage($my["room"], $message, $my["user"], $sendtime, $timeid, $my["flag_ripped"]);
    return TRUE;
   }
  }
  else
  {
   return FALSE;
  }
 }
 
 function deleteNeedlessMessages($room)
 {
  if ($result = mysql_query("SELECT COUNT(*) AS howmany FROM arsc_room_$room", ARSC_PARAMETER_DB_LINK))
  {
   $a = mysql_fetch_array($result);
   if ($a["howmany"] > ARSC_PARAMETER_ROWLIMIT)
   {
    $row_difference = $a["howmany"] - ARSC_PARAMETER_ROWLIMIT - 1;
    $result = mysql_query("SELECT timeid FROM arsc_room_$room ORDER BY timeid ASC LIMIT $row_difference, 1", ARSC_PARAMETER_DB_LINK);
    $a = mysql_fetch_array($result);
    $delete_id = $a["timeid"];
    mysql_query("DELETE FROM arsc_room_$room WHERE timeid < '$delete_id'", ARSC_PARAMETER_DB_LINK);
   }
  }
 }
 
 function deleteIdleUsers()
 {
  $timebuffer = time() - ARSC_PARAMETER_PING;
  mysql_query("DELETE FROM arsc_users WHERE (lastping < '$timebuffer' AND version <> 'text')", ARSC_PARAMETER_DB_LINK);
  $timebuffer = time() - ARSC_PARAMETER_PING_TEXT;
  mysql_query("DELETE FROM arsc_users WHERE lastping < '$timebuffer' AND version = 'text'", ARSC_PARAMETER_DB_LINK);
 }
 
 function addTraffic($direction, $bytes)
 {
  mysql_query("UPDATE arsc_traffic SET $direction = $direction + ".strlen($bytes), ARSC_PARAMETER_DB_LINK);
 }

 function checkCommandAllowed($level, $command)
 {
  if ($level == "") $level = 0;
  $result = mysql_query("SELECT level".mysql_escape_string($level)." FROM arsc_levels WHERE command = '".mysql_escape_string($command)."'", ARSC_PARAMETER_DB_LINK);
  $a = @mysql_fetch_array($result);
  if ($a["level".$level] == 1)
  {
   return TRUE;
  }
  else
  {
   return FALSE;
  }
 }

 function getBasicLayoutValues($layout_id = -1, $checkroom = TRUE)
 {
  GLOBAL $arsc_my;
  if ($layout_id == -1)
  {
   if ($checkroom == FALSE) $layout_id = ARSC_PARAMETER_DEFAULT_LAYOUT;
   if ($checkroom && $arsc_my["room"] == "")
   {
    $layout_id = ARSC_PARAMETER_DEFAULT_LAYOUT;
   }
   elseif ($checkroom)
   {
    $result = mysql_query("SELECT layout_id FROM arsc_rooms WHERE roomname = '".$arsc_my["room"]."'", ARSC_PARAMETER_DB_LINK);
    $a = mysql_fetch_array($result);
    $layout_id = $a["layout_id"];
   }
  }
  $result = mysql_query("SELECT * FROM arsc_layouts WHERE id = ".$layout_id, ARSC_PARAMETER_DB_LINK);
  $a = mysql_fetch_array($result);
  while (list($key, $val) = each($a))
  {
   if (!is_numeric($key) && !strstr("template_", $key)) $arsc_layout[$key] = $val;
  }
  return $arsc_layout;
 }

 function parseLayoutTemplate($name, $checkroom = TRUE)
 {
  GLOBAL $arsc_my, $arsc_lang, $arsc_layout, $arsc_current;
  if ($checkroom == FALSE) $layout_id = ARSC_PARAMETER_DEFAULT_LAYOUT;
  if ($checkroom && $arsc_my["room"] == "")
  {
   $layout_id = ARSC_PARAMETER_DEFAULT_LAYOUT;
  }
  elseif ($checkroom)
  {
   $result = mysql_query("SELECT layout_id FROM arsc_rooms WHERE roomname = '".$arsc_my["room"]."'", ARSC_PARAMETER_DB_LINK);
   $a = mysql_fetch_array($result);
   $layout_id = $a["layout_id"];
  }
  $arsc_layout = $this->getBasicLayoutValues($layout_id, $checkroom);
  include("layout_defaults.inc.php");
  $result = mysql_query("SELECT template_".$name." FROM arsc_layouts WHERE id = ".$layout_id, ARSC_PARAMETER_DB_LINK);
  $a = mysql_fetch_array($result);
  $template = $a["template_".$name];
  if (is_array($arsc_my))
  {
   while (list($key, $val) = each($arsc_my))
   {
    $template = ereg_replace("<%my_".$key."%>", $val, $template);
   }
  }
  $arsc_parameters = get_defined_constants();
  while (list($key, $val) = each($arsc_parameters))
  {
   if (ereg("ARSC_PARAMETER_", $key))
   {
    $key = strtolower(str_replace("ARSC_PARAMETER_", "", $key));
    $template = ereg_replace("<%parameters_".$key."%>", $val, $template);
   }
  }
  if (is_array($arsc_lang))
  {
   while (list($key, $val) = each($arsc_lang))
   {
    $template = ereg_replace("<%lang_".$key."%>", $val, $template);
   }
  }
  if (is_array($arsc_current))
  {
   while (list($key, $val) = each($arsc_current))
   {
    $template = ereg_replace("<%current_".$key."%>", $val, $template);
   }
  }
  while (list($key, $val) = each($arsc_layout))
  {
   $template = ereg_replace("<%layout_".$key."%>", $val, $template);
  }
  return $template;
 }

}

?>

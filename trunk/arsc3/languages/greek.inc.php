<?php

/*
 This is an ARSC language file. If you translate it, please send me
 a copy to <manuel@kiessling.net>, I will add it to ARSC then.
 Thanks.

 This file is for versions 3.0-beta1, 3.0-beta2, 3.0-rc1, 3.0, 3.0.1, 3.0.2, 3.0.2-rc1, 3.0.2-rc2
  
 Translation by Stavros Tsoukalas <tsoukalass@hotmail.com>.
*/

// Include the english file, in order to provide english text if the current file has some sentences missing.
include("english.inc.php");

// Define some settings for this language
$arsc_lang_regions["greek"] = array("gr", "gr-gr", "gr-el", "el");
$arsc_lang_name["greek"] = "Greek";
$arsc_lang["charset"] = "iso-8859-7";


// Language selection

$arsc_lang["chooseyourlanguage"] = "�������� ������:";
$arsc_lang["next"] = "�������";


// Login Page

$arsc_lang["entername"]                 = "����� ������:";
$arsc_lang["enterpassword"]             = "����� �������:";
$arsc_lang["selectchatversion"]         = "�������� ������ ����������:";
$arsc_lang["version_browser_socket"]    = "����������";
$arsc_lang["version_browser_push"]      = "���������� (������� �� firewall";
$arsc_lang["version_browser_text"]      = "��� ��������� ��������";
$arsc_lang["yes"]                       = "���";
$arsc_lang["no"]                        = "���";
$arsc_lang["selectroom"]                = "�������� �������:";
$arsc_lang["createdby"]                 = "������������� ���";
$arsc_lang["startbutton"]               = "������ ����������";
$arsc_lang["usersinchat"]               = "������������ �������:";
$arsc_lang["usersinchat_room"]          = "�������";
$arsc_lang["usersinchat_name"]          = "�������/��";
$arsc_lang["clicktoregister"]           = "���������� ��� ��������� ����� ������!";


// Why kicked? Page

$arsc_lang["why_kicked"] = "��� ���������� ��� ��� ��������� ���� �����������. ���� ������ ���� ����� ��� ������������ ���� ������� ��� ������� ��� ��������, ���� ����� � ������� ��� ����� �������.";
$arsc_lang["returntologinpage"] = "��������� ���� ������ ��������";

// Register page and eMail

$arsc_lang["register_intro"]                 = "��� ��  ��������� �� e-mail ��� ����������� ��� �������� �����.";
$arsc_lang["register_intro_force"]           = "��� ������� �� ������ �� ��� ���������� ��� ���������� ��� ������, ���� ������������ ��������� ������������ ����������� (e-mail).";
$arsc_lang["register_entername"]             = "����� ������:";
$arsc_lang["register_enteremail"]            = "��������� ������������ ����������� (e-mail):";
$arsc_lang["register_enterpassword"]         = "�������:";
$arsc_lang["register_send"]                  = "����������";
$arsc_lang["register_yougetmail"]            = "������������, �� ���� �� ��� ������ ��� e-mail �� ��  ������� ���.";
$arsc_lang["register_emailtemplate_subject"] = "������� ��� {title}";
$arsc_lang["register_emailtemplate_body"]    = "
���� ���,

����������� ��� {title}.

��������� ���� �� ����� ������ '{username}'.
�� ����� ������������� ��� �� �������� �������:

            '{password}'

�������� ���� �� ���������� ���� ������:
{homepage}

��������� �� �������� ����!

-- 
 {chatowner}

";


// Chat interface

$arsc_lang["usersinroom"]               = "������� ��� �������";
$arsc_lang["sendmessage"]               = "��������";
$arsc_lang["refreshmessages"]           = "�������� ���������";
$arsc_lang["leave"]                     = "�����������";
$arsc_lang["roomlist"]                  = "����� ��������";
$arsc_lang["go_room"]                   = "��������";
$arsc_lang["refresh"]                   = "��������";
$arsc_lang["otherfunctions"]            = "������������ �����������";
$arsc_lang["smilielist"]                = "����� ��� smilies";
$arsc_lang["scroll_active"]             = "�������� ���������";
$arsc_lang["select_color"]              = "������� ��������";
$arsc_lang["moderatorqueue_title"]      = "����������� ���������";
$arsc_lang["moderatorqueue_delete"]     = "��������";
$arsc_lang["moderatorqueue_youranswer"] = "� �������� ���";
$arsc_lang["moderatorqueue_cancel"]     = "�������";
$arsc_lang["drawboard"]                 = "������� ���������";

$arsc_lang["cmd_m"]           = "����� ���� ��� �� �������� ������ �� ����� ��� ������";
$arsc_lang["opcmd_w"]         = "�������� ������������ ����������� ��� ����� ��� ������";
$arsc_lang["opcmd_k"]         = "������ ����� ��� ������ ��� �� �������.";
$arsc_lang["opcmd_b"]         = "���������� ��� IP ����� ��� ������ ��� ������ ��������";
$arsc_lang["opcmd_l"]         = "��������� ����� ��� ������ ������ (�� ���� �������� ��� �������)";
$arsc_lang["opcmd_r"]         = "�������� ��� ������ (��� �� ��� ������ �� �������)";
$arsc_lang["opcmd_u"]         = "������������� ��� ������ (���� ���� �� ������ �� �������)";
$arsc_lang["opcmd_o"]         = "����� ���� ������ status �������� (operator)";
$arsc_lang["opcmd_d"]         = "��������� �� status �������� (operator) ��� ��� ������";
$arsc_lang["opcmd_m"]         = "����������� ��� ������� �� ���� �������";
$arsc_lang["opcmd_id"]        = "��������� ��� ��������� ��� ������";


// Errors

$arsc_lang["error_register_double_user"] = "�� ����� ������ ��� ��������� ������� ���. �������� �������� ������ ����.";
$arsc_lang["error_double_user"]          = "���� ��� �������� ������� �� ���� �� ����� ������.";
$arsc_lang["error_no_name"]              = "������ �� ������������ ����� ������!";
$arsc_lang["error_bad_name"]             = "�� ����� ������ ��� ��������� ��� �����������t!";
$arsc_lang["error_wrong_credentials"]    = "� �������� ��� �����������!<br>����� ����� �� �������������� ���;";
$arsc_lang["error_banned"]               = "� �������� ��������� ��� �����������.";


// IDCard

$arsc_lang["idcard_title"]               = "��������� ���";
$arsc_lang["idcard_sex"]                 = "����:";
$arsc_lang["idcard_male"]                = "������";
$arsc_lang["idcard_female"]              = "�������";
$arsc_lang["idcard_location"]            = "�������:";
$arsc_lang["idcard_color"]               = "������������ �����:";
$arsc_lang["idcard_hobbies"]             = "������������:";
$arsc_lang["idcard_save"]                = "����������";
$arsc_lang["idcard_save_ok"]             = "�� ������� �������������";
$arsc_lang["idcard_save_no"]             = "�� ������� ��� �������� �� ������������!";
$arsc_lang["idcard_guestbook"]           = "������ ����������:";
$arsc_lang["idcard_guestbook_active"]    = "�� ����� �������� ��� ������� ����������;";
$arsc_lang["idcard_guestbook_delete"]    = "��������";
$arsc_lang["idcard_guestbook_delete_ok"] = "� ������� ����������";
$arsc_lang["idcard_guestbook_delete_no"] = "� ������� ��� ������� �� ���������!";
$arsc_lang["idcard_guestbook_add"]       = "�������� ��������";
$arsc_lang["idcard_guestbook_add_ok"]    = "� ���������� ����� ��������";
$arsc_lang["idcard_guestbook_add_no"]    = "� ���������� ��� ������� �� ���������������!";
$arsc_lang["idcard_guestbook_next"]      = "�������� ��������";
$arsc_lang["idcard_guestbook_prev"]      = "������������ ��������";
$arsc_lang["idcard_close"]               = "��������";


// Chat System Messages

$arsc_lang["enter"]               = "� ������� {user} ���� ��� ������� {room}.";
$arsc_lang["welcome"]             = "����� ������ ��� {title}!";
$arsc_lang["quit"]                = "� ������� {user} ��������� ��� �� ������� {room}.";
$arsc_lang["roomchange"]          = "� ������� {user} ������������ ��� �� ������� {room1} ��� {room2}.";
$arsc_lang["kicked"]              = "� ������� {userpassive} ������������� ��� ���/�� {useractive}.";
$arsc_lang["youwerekicked"]       = "��������������� ��� ��� ��������!";
$arsc_lang["floodwarn"]           = "���  �������������� �������, �� �������� ��������� �� ������������ �� ��������������!";
$arsc_lang["op"]                  = "User {userpassive} wurde von User {useractive} Operatorstatus erteilt.";
$arsc_lang["deop"]                = "User {useractive} hat User {userpassive} den Operatorenstatus entzogen.";
$arsc_lang["whispers"]            = "���������";
$arsc_lang["whispersops"]         = "��������� �� ����� ���� ��������� (operators)";
$arsc_lang["gotmsg"]              = "���������� ���� ������ {user}: {message}";
$arsc_lang["croom"]               = "� ������� {user} ��������� �� ��������� ��� �������� ������� {room} .";
$arsc_lang["room_exists"]         = "�� ������� {room} ������� ���!";
$arsc_lang["room_badname"]        = "�� ����� �������� ���� �����������.";
$arsc_lang["room_created"]        = "�� �������� ��� �������: {room} ������������� ��������! �������� ����� �� ������� ������� ��������������� ��� ������  /invite .";
$arsc_lang["invite"]              = "� ������� {user} ��� ������ ��� �������� ������� {room}. ��������������� \"/room {room} {password}\"  ��� �� ������ ��� �������.";
$arsc_lang["invite_notexist"]     = "� ������� {user} ��� �������!";
$arsc_lang["invite_notownroom"]   = "������ �� ��������� ��� ���� ��� �������� ������� ��� �� �������� �� �������� ��� ������ �������!";
$arsc_lang["room_not_exist"]      = "�� ������� {room} ��� �������!";
$arsc_lang["room_wrong_password"] = " ������ �� ������ �� ����� ������� ��� �� ������ ��� �������:{room} .";
$arsc_lang["moderate_message"]    = "�� ������ ��� `{message}` ���������� ����� ����������� ��� �� �������.";
$arsc_lang["opcall"]              = "[OPCALL] ���������� �������!";

$arsc_lang["helplink"]      = "�������";
$arsc_lang["help"]          = "
<b><i>������ �������:</i></b>
��� ���� ����� ��� ������� �������� �� ����� 
����� ���� �������, ��� ���������� ��� �������.

�� ������� �� �� @ ������� ��� �� ����� ����
����� ��������� (operators) ��� ������� 
�� ������������ ������ ������� ��� �� �������,
�� ������ ����� �������� (operator) �� ������ ������� 
��� �� ���������� ����� �������� (operator).

�� ������ ���� �� ��� ����� ������ �����,
��� ����� ��������� �� �������� � ������ 
��� �������� ���������� ��������� ���� ������ ����.
�� ���� ��� ����� ����� ����� ��� ����� ��� �������,
�� �������� �� ������, ��� ����������, ��������� ��� ����.

<b><i>������� �������:</i></b>
<b>/me message</b> -- ���������� ��� ��������, �.�. <i>/me ���������� ������</i> ���� ���������: <i>* � ������� ���������� ������</i>
<b>/msg ����� ������ ������</b> -- ������� ��������� ������ ���� <i>����� ������</i>, ����� �� ����� ����� �� ���� ������.
<b>/opcall</b> -- ������� ���� ��������� �� �������";

$arsc_lang["helpop"]        = "
<b><i>������� ��������� (operators):</i></b>
/msgops ������ -- ��������� �� ������ �� ����� ���� ��������� (operators)
/whois ������ -- ������� ����������� ��� ��� ������
/op ������ -- ������ status �������� (operator) ���� ������
/deop ������ -- ������� �� status �������� (operator) ��� ��� ������
/kick ������ -- ������� ��� ������ ��� ��� ��������
/bann ������ X -- ��������� ��� IP ��� ������� ��� X ������������
/lock ������ -- ��������� ��� ���������� ��� (������������) ������ ������
/rip ������ --  �,�� ���� � ������ ��� ����� �����
/unrip ������ -- �,�� ���� � ������ ����� ���� �����
/move ������ ������� -- ��������� ��� ������ ��� �������";

?>

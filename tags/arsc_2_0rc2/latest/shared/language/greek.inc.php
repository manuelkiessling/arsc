<?php

/*
  This is an ARSC language file. If you translate it, please send me
  a copy to <arsc-help@lists.sourceforge.net>, I will add it to ARSC then. Thanks.

  This file is for versions: 1.0, 1.0.1, 1.0.1p1, 1.0.2

Translated by Demosthenes Koptsis <dkoptsis@otenet.gr>
*/


// Homepage

$arsc_lang["entername"]         = "�������� ������ ����� (nickname) :";
$arsc_lang["enterpassword"]     = "�������� ������ ������ (password) :";
$arsc_lang["whichversion"]      = "���� ������ ��������� �� ���������������?";
$arsc_lang["version_dontknow"]  = "�������� ����� ��� ������ ��� ��� ��������� ����� browser �������������.";
$arsc_lang["version_sockets"]   = "����������� ������ ��� ���������� browsers. ������������ JavaScript ��� Frames.";
// If you installed the socket server, version_push_js will not be shown, and vice versa, this is why they are same.
$arsc_lang["version_push_js"]   = "����������� ������ ��� ���������� browsers. ������������ JavaScript ��� Frames.";
$arsc_lang["version_header_js"] = "��� ���������� ������ ��� ���������� browsers ��� �� �������� ��� ���������. ������������ JavaScript ��� Frames.";
$arsc_lang["version_header"]    = "��� ������ ��� ������������ JavaScript ��� Frames.";
$arsc_lang["version_box"]       = "��� ������ ��� Zuum WebTV.";
$arsc_lang["version_text"]      = "��� ���� ������ ��� browsers ��������.";
$arsc_lang["yes"]               = "���";
$arsc_lang["no"]                = "���";
$arsc_lang["selectroom"]        = "�������� ��� �������:";
$arsc_lang["startbutton"]       = "��������� �� chat!";
$arsc_lang["usersinchat"]       = "����� �� ������� ����� ���������� ���:";
$arsc_lang["usersinchat_room"]  = "�������";
$arsc_lang["usersinchat_name"]  = "�������";
$arsc_lang["clicktoregister"]   = "����������� �� nickname ���!";


// Register page and eMail

$arsc_lang["register_intro"]                 = "��� �� ������������ �� nickname ��� ����������� �� �������� �����.";
$arsc_lang["register_intro_force"]           = "���� ������� �� ������ ���� eMail ���������.";
$arsc_lang["register_entername"]             = "����� Nickname:";
$arsc_lang["register_enteremail"]            = "eMail ���������:";
$arsc_lang["register_enterpassword"]         = "�������:";
$arsc_lang["register_send"]                  = "�������� �����������";
$arsc_lang["register_yougetmail"]            = "������������, ���� �� ������ ��� email �� ��� ������ ���.";
$arsc_lang["register_emailtemplate_subject"] = "� ���������� ��� nickname ���.";

$arsc_lang["register_emailtemplate"]         = "
���� ���,

�� ����� ��� ���� ����������� ��� �� ARSC chat.

��������� �� ����� (nickname) '{username}'.
�� ����� ���� ������������ ��� ��� ������:

            '{password}'

�������� ���� �� ��������� �� �� ����� ��� ��� ������ ���� ���� �������� ���������:
{homepage}


���� ��� ����������!

--
 {chatowner}

";


// Password Change Page

$arsc_lang["changepassword"]                 = "������ �������";
$arsc_lang["changepassword_intro"]           = "��� �� �������� ��� ������ ���, �������� �� ����� ������, ��� �������� ������, ��� ��� ��� ������ ��������.";
$arsc_lang["changepassword_entername"]       = "����� ������: (Nickname)";
$arsc_lang["changepassword_entercurrent"]    = "������ �������:";
$arsc_lang["changepassword_enternew"]        = "���� �������:";
$arsc_lang["error_password_changed"]         = "� ������� ��� ������ ��������!";
$arsc_lang["changepassword_submit"]          = "������";


// Chat interface

$arsc_lang["usersinroom"]     = "������� ��� �������";
$arsc_lang["sendmessage"]     = "��������";
$arsc_lang["refreshmessages"] = "�������� ���������";
$arsc_lang["leave"]           = "������";
$arsc_lang["roomlist"]        = "����� ��������";
$arsc_lang["refresh"]         = "��������";
$arsc_lang["otherfunctions"]  = "������������ �����������";
$arsc_lang["smilielist"]      = "�������� :-)";
$arsc_lang["scroll_active"]   = "�������� ����������";
$arsc_lang["drawboard"]       = "Drawboard";


// Errors

$arsc_lang["error_register_double_user"] = "���� �� nickname ������������� ���. ����������� �������� ��� ����.";
$arsc_lang["error_waitformail"]          = "���� �� eMail �� �� �������� ��� ������, �� �������� �� ��������� ��� �� ������ chat.";
$arsc_lang["error_double_user"]          = "���� ������� �� �� ����� ���� ��� �������!";
$arsc_lang["error_no_name"]              = "������ �� ������� ����� nickname!";
$arsc_lang["error_bad_name"]             = "��� ���������� �� ��������������� �� ����� ����!";
$arsc_lang["error_wrong_credentials"]    = "� �������� ������������!<br>����� �� �������� ��� �����?";
$arsc_lang["error_banned"]               = "� �������� ��������� ��� �����������.";


// Chat System Messages

$arsc_lang["enter"]         = "� ������� {user} ������� ��� ������� {room}.";
$arsc_lang["welcome"]       = "�����������! �������� /? ��� ����� �������� ��� �� ����� �� ������� ������ ��������.";
$arsc_lang["quit"]          = "� ������� {user} ������������ �� ������� {room}.";
$arsc_lang["roomchange"]    = "� ������� {user} ������������ �� ������� {room1} ��� ������� ��� {room2}.";
$arsc_lang["kicked"]        = "� ������� {userpassive} ���������� ��� ��� ��������� ��� ��� ������ {useractive}.";
$arsc_lang["youwerekicked"] = "������������ ��� ��� ���������!";
$arsc_lang["op"]            = "� ������� {userpassive} ������� ������������ ��� ��� ������ {useractive}.";
$arsc_lang["deop"]          = "� ������� {useractive} ������� �� �������� ����������� ��� ��� ������ {userpassive}.";
$arsc_lang["whispers"]      = "����������";
$arsc_lang["whispersops"]   = "���������� ����� ���� ������������";
$arsc_lang["gotmsg"]        = "����������� ��� ������ </i>{user}<i>: {message}";

$arsc_lang["help"]          = "
</i><br><br>&nbsp;<b>������ �������:</b>
<br>&nbsp;&nbsp;&nbsp;��� ����� ����� ������� ����� ���� �������
<br>&nbsp;&nbsp;&nbsp;�� ������ ����� ���� ��� �������.
<br>
<br>&nbsp;&nbsp;&nbsp;������� �� @ ������� ��� �� ����� ����
<br>&nbsp;&nbsp;&nbsp;����� ������������ (operators) ��� ������� �� �������� ������� ���
<br>&nbsp;&nbsp;&nbsp;�� �������, �� ������� ������������ ������
<br>&nbsp;&nbsp;&nbsp;�������, ��� �� �������� �� �������� ����������� ��� ������ �������.
<br>
<br>&nbsp;&nbsp;&nbsp;��� ������ ���� �� ��� ����� ��� �����, �� �����
<br>&nbsp;&nbsp;&nbsp;��������� �������� �� ����������� �� ��� ������
<br>&nbsp;&nbsp;&nbsp;� ����� ����� ���������� ��� �� ������� ��� ��������� ������ ���� ������ ����.
<br>&nbsp;&nbsp;&nbsp;���� ������ �� ���������� �� ������� ���
<br>&nbsp;&nbsp;&nbsp;��� ����� ��� �������.
<br>
<br>&nbsp;<b>������� �������:</b>
<br>&nbsp;&nbsp;&nbsp;/me <i>�������</i> -- ���������� ��� ��������, �.�. <i>/me ��������� �������</i> �������� <i>*� ������� ��������� �������</i>
<br>&nbsp;&nbsp;&nbsp;/msg <i>�������</i> <i>�������</i> -- ������� ��� ���������<i>������</i> �� ��� <i>������</i>
<br>&nbsp;&nbsp;&nbsp;/j <i>�������</i> -- ������������� ��� ������� ��� �������� �� ���� <i>�������</i>
<br>&nbsp;&nbsp;&nbsp;/room <i>�������</i> -- �������� ��� ������� /j
<br><br><i>";

$arsc_lang["helpop"]        = "
</i>&nbsp;<b>������� ������������:</b>
<br>&nbsp;&nbsp;&nbsp;/msgops <i>�������</i> -- ���������� ����� ���� ������������ �� �� <i>�������</i>
<br>&nbsp;&nbsp;&nbsp;/whois <i>�������</i> -- ������� �������������� ��� <i>������</i>
<br>&nbsp;&nbsp;&nbsp;/op <i>������</i> -- ������ �� ����������� ��� <i>������</i>
<br>&nbsp;&nbsp;&nbsp;/deop <i>������</i> -- ������� �� �������� ����������� ��� ��� <i>������</i>
<br>&nbsp;&nbsp;&nbsp;/kick <i>������</i> -- ������� ��� <i>������</i> ��� �� �������
<br>&nbsp;&nbsp;&nbsp;/bann <i>������ X</i> -- �������� ��� ������� �� ��� IP ��� <i>������</i> ��� <i>X</i> ������������
<br>&nbsp;&nbsp;&nbsp;/lock <i>������</i> -- ��������� ��� ���������� ���� (�������������!) <i>������</i> ��������
<br>&nbsp;&nbsp;&nbsp;/rip <i>������</i> -- ������� ��� ��������� ��������� �������� ��� ��� <i>������</i>
<br>&nbsp;&nbsp;&nbsp;/unrip <i>������</i> -- ��������� ��� <i>������</i> �� ��������� ������� �� �������
<br>&nbsp;&nbsp;&nbsp;/move <i>������ �������</i> -- &acute;��������� ���&acute; <i>������</i> ��� <i>room</i>
<br><br><i>";
?>
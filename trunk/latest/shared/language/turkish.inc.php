<?php

/*
  This is an ARSC language file. If you translate it, please send me
  a copy to <manuel@kiessling.net>, I will add it to ARSC then. Thanks.

  This file is for versions: 1.0, 1.0.1, 1.0.1p1, 1.0.2
  
  Translation by Ridvan Agar <ridvan.agar@web.de>
*/


// Homepage

$arsc_lang["entername"]         = "Rumuz (Chat kullan�c� ad�n�z):";
$arsc_lang["enterpassword"]     = "�ifreniz:";
$arsc_lang["whichversion"]      = "Hangi s�r�m� kullanmak istiyorsunuz? <br>E�er otomatik se�im �al��mazsa,kendiniz se�in.";
$arsc_lang["version_dontknow"]  = "Web Borowser tipini bilmiyorsan�z bu s�r�m� se�in.";
$arsc_lang["version_sockets"]   = "Modern Web Browserlar i�in �ng�r�len s�r�m. JavaScript ve Frames kullan�l�r.";
// If you installed the socket server, version_push_js will not be shown, and vice versa, this is why they are same.
$arsc_lang["version_push_js"]   = "Modern Web Browserlar i�in �ng�r�len s�r�m. JavaScript ve Frames kullan�l�r.";
$arsc_lang["version_header_js"] = "Bir �nceki s�r�m �al�smazsa bunu deneyin. JavaScript ve Frames kullan�l�r.";
$arsc_lang["version_header"]    = "Sadece Frames kullan�lan ama JavaScript�e ihtiya� olmayan s�r�m";
$arsc_lang["version_box"]       = "WebTV box i�in bir s�r�m.";
$arsc_lang["version_text"]      = "Textbrowser i�in bir s�r�m.";
$arsc_lang["yes"]               = "Evet";
$arsc_lang["no"]                = "Hay�r";
$arsc_lang["selectroom"]        = "Bir oda se�in:";
$arsc_lang["startbutton"]       = "Chat�e gir!";
$arsc_lang["usersinchat"]       = "Chat�te bulunan kullan�c�lar:";
$arsc_lang["usersinchat_room"]  = "Oda";
$arsc_lang["usersinchat_name"]  = "Ad";
$arsc_lang["clicktoregister"]   = "�ye olun!";


// Register page and eMail

$arsc_lang["register_intro"]                 = "Rumuzunuzu s�rekli kullanmak i�in a�a��daki formu doldurun.";
$arsc_lang["register_intro_force"]           = "�ifreniz vermi� oldu�unuz E-Mail adresine g�nderilecek.";
$arsc_lang["register_entername"]             = "Arzu etti�iniz rumuz:";
$arsc_lang["register_enteremail"]            = "E-Mail adresiniz:";
$arsc_lang["register_enterpassword"]         = "Arzu etti�iniz �ifre:";
$arsc_lang["register_send"]                  = "Formu g�nder";
$arsc_lang["register_yougetmail"]            = "Te�ekk�rler, �ifreniz E-Mail adresinize g�nderildi.";
$arsc_lang["register_emailtemplate_subject"] = "Abacho Chat �yeli�iniz";

$arsc_lang["register_emailtemplate"]         = "
Merhaba,

ARSC Chat'e kay�t oldunuz.

Rumuz: '{username}'
�ifre:

            '{password}'

�imdi chat'e buradan girebilirsiniz
{homepage}

�yi e�lenceler!

--
 {chatowner}

";


// Chat interface

$arsc_lang["usersinroom"]     = "Odadak� kullan�c�lar";
$arsc_lang["sendmessage"]     = "G�nder";
$arsc_lang["refreshmessages"] = "Mesajlar� yenile";
$arsc_lang["leave"]           = "Chat�ten ��k";
$arsc_lang["roomlist"]        = "Oda listesi";
$arsc_lang["refresh"]         = "Yenile";
$arsc_lang["otherfunctions"]  = "Di�er fonksiyonlar";
$arsc_lang["smilielist"]      = "Smilies listesi";
$arsc_lang["scroll_active"]   = "Otomatik kayd�rma";
$arsc_lang["drawboard"]       = "Yaz� tahtas�";


// Errors

$arsc_lang["error_register_double_user"] = "Bu rumuz kullan�lmakta. L�tfen ba�ka bir rumuzu deney�n";
$arsc_lang["error_waitformail"]          = "Giri� bilgilerinizin bulundu�u E-Maili al�r almaz, chate girebilirsiniz.";
$arsc_lang["error_double_user"]          = "Bu rumuz ile �u an bir kullan�c� chatte bulunuyor!";
$arsc_lang["error_no_name"]              = "L�tfen rumuzunuzu girin!";
$arsc_lang["error_bad_name"]             = "Bu rumuz, ne yaz�k k� ge�ersiz!";
$arsc_lang["error_wrong_credentials"]    = "Sistem sizi tan�yamad�!<br>Giri� bilgileriniz do�ru mu?";
$arsc_lang["error_banned"]               = "Giri�iniz s�reli olarak k�s�tland�.";


// Chat System Messages

$arsc_lang["enter"]         = "{user}  {room} odas�na giriyor.";
$arsc_lang["welcome"]       = "Ho� geldiniz! Kullanabilece�iniz komutlar� g�rmek i�in alttaki kutucu�a /? yaz�n ve enter tu�una bas�n.";
$arsc_lang["quit"]          = "{user} {room} odas�n� terkediyor.";
$arsc_lang["roomchange"]    = "{user} {room1} odas�ndan {room2} ads�na giriyor.";
$arsc_lang["kicked"]        = "{userpassive} {useractive} taraf�ndan Chattten �utland�.";
$arsc_lang["youwerekicked"] = "Chattten �utland�n�z!";
$arsc_lang["op"]            = "{userpassive} {useractive} taraf�ndan Operat�r ilan edildi.";
$arsc_lang["deop"]          = "{useractive} {userpassive} �n Operat�r haklar�n� geri ald�.";
$arsc_lang["whispers"]      = "f�s�ld�yor";
$arsc_lang["whispersops"]   = "t�m operat�rlere f�s�ld�yor";
$arsc_lang["gotmsg"]        = "</i>{user}<i>a f�s�ld�yorsunuz: {message}";

$arsc_lang["help"]          = "
</i><br><br>&nbsp;<b>Genel Yard�m:</b>
<br>&nbsp;&nbsp;&nbsp;Sa� tarafta bu odadaki
<br>&nbsp;&nbsp;&nbsp;kullan�c�lar� g�r�yorsunuz.
<br>
<br>&nbsp;&nbsp;&nbsp;Ba��nda @ olan kullan�c�lar Operat�rlerdir.
<br>&nbsp;&nbsp;&nbsp;Operat�rler, di�er kullan�c�lar� chatten atabilir,
<br>&nbsp;&nbsp;&nbsp;onlara Operat�r haklar� verebilir
<br>&nbsp;&nbsp;&nbsp;yada Operat�r haklar�n� geri alabilirler.
<br>
<br>&nbsp;&nbsp;&nbsp;Kullan�c�lardan birinin ad�na t�klad���n�zda,
<br>&nbsp;&nbsp;&nbsp;a�a��daki kutucu�a,otomatik olarak, bu kullan�c�ya 
<br>&nbsp;&nbsp;&nbsp;f�s�ldamak i�in gerekli komut yaz�l�r. Burdan itibaren
<br>&nbsp;&nbsp;&nbsp;size sadece mesaj�n�z� yazmak kal�yor
<br>
<br>&nbsp;<b>Genel Komutlar:</b>
<br>&nbsp;&nbsp;&nbsp;/me <i>Mesaj</i> -- �rnek: <i>/me �ay ��ecek</i> �u mesaj� g�nderir <i>* Kullan�c� (yani siz) �ay i�ecek</i>
<br>&nbsp;&nbsp;&nbsp;/msg <i>Kullan�c�</i> <i>Mesaj</i> -- Ad� ge�en <i>Kullan�c�</i>ya  <i>Mesaj</i> f�s�ldan�r
<br>&nbsp;&nbsp;&nbsp;/j <i>Oda</i> -- Bulunulan oday� terkedip yaz�lan <i>Oda</i>ya ge�ilir
<br>&nbsp;&nbsp;&nbsp;/room <i>Oda ad�</i> -- /j komutunun ayn�s�
<br>&nbsp;&nbsp;&nbsp;/userlist -- Bulunulan odadaki b�t�n kullan�c�lar� g�sterir
<br>&nbsp;&nbsp;&nbsp;/roomlist -- B�t�n odalar�n listesini g�sterir
<br>&nbsp;&nbsp;&nbsp;/smilies -- Var olan smiliesleri ve kullan�mlar�n� g�sterir
<br><br><i>";

$arsc_lang["helpop"]        = "
</i>&nbsp;<b>Operat�r Komutlar�:</b>
<br>&nbsp;&nbsp;&nbsp;/msgops <i>Mesaj</i> -- Yaz�lan <i>Mesaj</i> b�t�n Operat�rlere f�s�ldan�r
<br>&nbsp;&nbsp;&nbsp;/whois <i>Kullan�c�</i> -- <i>Kullan�c�</i> hakk�ndaki bilgileri g�sterir
<br>&nbsp;&nbsp;&nbsp;/kick <i>Kullan�c�</i> -- <i>Kullan�c�</i> chatten at�l�r
<br>&nbsp;&nbsp;&nbsp;/bann <i>Kullan�c� X</i> -- <i>Kullan�c�</i> IP adresi <i>X</i> saniye chat kullan�m�na kapat�l�r
<br>&nbsp;&nbsp;&nbsp;/lock <i>Kullan�c�</i> -- �ye olan <i>Kullan�c�</i>n�n kayd� chat kullan�m�na kapat�l�r
<br>&nbsp;&nbsp;&nbsp;/rip <i>Kullan�c�</i> -- <i>Kullan�c�</i>n�n yayd�klar� g�sterilmez
<br>&nbsp;&nbsp;&nbsp;/unrip <i>Kullan�c�</i> -- <i>Kullan�c�</i>n�n yayd�klar� yeniden g�sterilmeye ba�lar
<br>&nbsp;&nbsp;&nbsp;/op <i>Kullan�c�</i> -- <i>Kullan�c�</i>ya Operat�r haklar� verilir
<br>&nbsp;&nbsp;&nbsp;/deop <i>Kullan�c�</i> -- <i>Kullan�c�</i>n�n Operat�r haklar� geri al�n�r
<br>&nbsp;&nbsp;&nbsp;/move <i>Kullan�c� Oda</i> -- <i>Kullan�c�</i> belirtilen <i>Oda</i>ya &acute;g�nderilir&acute;<br><br><i>";
?>

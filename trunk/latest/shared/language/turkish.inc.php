<?php

/*
  This is an ARSC language file. If you translate it, please send me
  a copy to <manuel@kiessling.net>, I will add it to ARSC then. Thanks.

  This file is for versions: 1.0, 1.0.1, 1.0.1p1, 1.0.2
  
  Translation by Ridvan Agar <ridvan.agar@web.de>
*/


// Homepage

$arsc_lang["entername"]         = "Rumuz (Chat kullanýcý adýnýz):";
$arsc_lang["enterpassword"]     = "Þifreniz:";
$arsc_lang["whichversion"]      = "Hangi sürümü kullanmak istiyorsunuz? <br>Eðer otomatik seçim çalýþmazsa,kendiniz seçin.";
$arsc_lang["version_dontknow"]  = "Web Borowser tipini bilmiyorsanýz bu sürümü seçin.";
$arsc_lang["version_sockets"]   = "Modern Web Browserlar için öngörülen sürüm. JavaScript ve Frames kullanýlýr.";
// If you installed the socket server, version_push_js will not be shown, and vice versa, this is why they are same.
$arsc_lang["version_push_js"]   = "Modern Web Browserlar için öngörülen sürüm. JavaScript ve Frames kullanýlýr.";
$arsc_lang["version_header_js"] = "Bir önceki sürüm çalýsmazsa bunu deneyin. JavaScript ve Frames kullanýlýr.";
$arsc_lang["version_header"]    = "Sadece Frames kullanýlan ama JavaScript´e ihtiyaç olmayan sürüm";
$arsc_lang["version_box"]       = "WebTV box için bir sürüm.";
$arsc_lang["version_text"]      = "Textbrowser için bir sürüm.";
$arsc_lang["yes"]               = "Evet";
$arsc_lang["no"]                = "Hayýr";
$arsc_lang["selectroom"]        = "Bir oda seçin:";
$arsc_lang["startbutton"]       = "Chat´e gir!";
$arsc_lang["usersinchat"]       = "Chat´te bulunan kullanýcýlar:";
$arsc_lang["usersinchat_room"]  = "Oda";
$arsc_lang["usersinchat_name"]  = "Ad";
$arsc_lang["clicktoregister"]   = "Üye olun!";


// Register page and eMail

$arsc_lang["register_intro"]                 = "Rumuzunuzu sürekli kullanmak için aþaðýdaki formu doldurun.";
$arsc_lang["register_intro_force"]           = "Þifreniz vermiþ olduðunuz E-Mail adresine gönderilecek.";
$arsc_lang["register_entername"]             = "Arzu ettiðiniz rumuz:";
$arsc_lang["register_enteremail"]            = "E-Mail adresiniz:";
$arsc_lang["register_enterpassword"]         = "Arzu ettiðiniz þifre:";
$arsc_lang["register_send"]                  = "Formu gönder";
$arsc_lang["register_yougetmail"]            = "Teþekkürler, þifreniz E-Mail adresinize gönderildi.";
$arsc_lang["register_emailtemplate_subject"] = "Abacho Chat üyeliðiniz";

$arsc_lang["register_emailtemplate"]         = "
Merhaba,

ARSC Chat'e kayýt oldunuz.

Rumuz: '{username}'
Þifre:

            '{password}'

Þimdi chat'e buradan girebilirsiniz
{homepage}

Ýyi eðlenceler!

--
 {chatowner}

";


// Chat interface

$arsc_lang["usersinroom"]     = "Odadaký kullanýcýlar";
$arsc_lang["sendmessage"]     = "Gönder";
$arsc_lang["refreshmessages"] = "Mesajlarý yenile";
$arsc_lang["leave"]           = "Chat´ten çýk";
$arsc_lang["roomlist"]        = "Oda listesi";
$arsc_lang["refresh"]         = "Yenile";
$arsc_lang["otherfunctions"]  = "Diðer fonksiyonlar";
$arsc_lang["smilielist"]      = "Smilies listesi";
$arsc_lang["scroll_active"]   = "Otomatik kaydýrma";
$arsc_lang["drawboard"]       = "Yazý tahtasý";


// Errors

$arsc_lang["error_register_double_user"] = "Bu rumuz kullanýlmakta. Lütfen baþka bir rumuzu deneyýn";
$arsc_lang["error_waitformail"]          = "Giriþ bilgilerinizin bulunduðu E-Maili alýr almaz, chate girebilirsiniz.";
$arsc_lang["error_double_user"]          = "Bu rumuz ile þu an bir kullanýcý chatte bulunuyor!";
$arsc_lang["error_no_name"]              = "Lütfen rumuzunuzu girin!";
$arsc_lang["error_bad_name"]             = "Bu rumuz, ne yazýk ký geçersiz!";
$arsc_lang["error_wrong_credentials"]    = "Sistem sizi tanýyamadý!<br>Giriþ bilgileriniz doðru mu?";
$arsc_lang["error_banned"]               = "Giriþiniz süreli olarak kýsýtlandý.";


// Chat System Messages

$arsc_lang["enter"]         = "{user}  {room} odasýna giriyor.";
$arsc_lang["welcome"]       = "Hoþ geldiniz! Kullanabileceðiniz komutlarý görmek için alttaki kutucuða /? yazýn ve enter tuþuna basýn.";
$arsc_lang["quit"]          = "{user} {room} odasýný terkediyor.";
$arsc_lang["roomchange"]    = "{user} {room1} odasýndan {room2} adsýna giriyor.";
$arsc_lang["kicked"]        = "{userpassive} {useractive} tarafýndan Chattten þutlandý.";
$arsc_lang["youwerekicked"] = "Chattten þutlandýnýz!";
$arsc_lang["op"]            = "{userpassive} {useractive} tarafýndan Operatör ilan edildi.";
$arsc_lang["deop"]          = "{useractive} {userpassive} ýn Operatör haklarýný geri aldý.";
$arsc_lang["whispers"]      = "fýsýldýyor";
$arsc_lang["whispersops"]   = "tüm operatörlere fýsýldýyor";
$arsc_lang["gotmsg"]        = "</i>{user}<i>a fýsýldýyorsunuz: {message}";

$arsc_lang["help"]          = "
</i><br><br>&nbsp;<b>Genel Yardým:</b>
<br>&nbsp;&nbsp;&nbsp;Sað tarafta bu odadaki
<br>&nbsp;&nbsp;&nbsp;kullanýcýlarý görüyorsunuz.
<br>
<br>&nbsp;&nbsp;&nbsp;Baþýnda @ olan kullanýcýlar Operatörlerdir.
<br>&nbsp;&nbsp;&nbsp;Operatörler, diðer kullanýcýlarý chatten atabilir,
<br>&nbsp;&nbsp;&nbsp;onlara Operatör haklarý verebilir
<br>&nbsp;&nbsp;&nbsp;yada Operatör haklarýný geri alabilirler.
<br>
<br>&nbsp;&nbsp;&nbsp;Kullanýcýlardan birinin adýna týkladýðýnýzda,
<br>&nbsp;&nbsp;&nbsp;aþaðýdaki kutucuða,otomatik olarak, bu kullanýcýya 
<br>&nbsp;&nbsp;&nbsp;fýsýldamak için gerekli komut yazýlýr. Burdan itibaren
<br>&nbsp;&nbsp;&nbsp;size sadece mesajýnýzý yazmak kalýyor
<br>
<br>&nbsp;<b>Genel Komutlar:</b>
<br>&nbsp;&nbsp;&nbsp;/me <i>Mesaj</i> -- örnek: <i>/me çay ýçecek</i> þu mesajý gönderir <i>* Kullanýcý (yani siz) çay içecek</i>
<br>&nbsp;&nbsp;&nbsp;/msg <i>Kullanýcý</i> <i>Mesaj</i> -- Adý geçen <i>Kullanýcý</i>ya  <i>Mesaj</i> fýsýldanýr
<br>&nbsp;&nbsp;&nbsp;/j <i>Oda</i> -- Bulunulan odayý terkedip yazýlan <i>Oda</i>ya geçilir
<br>&nbsp;&nbsp;&nbsp;/room <i>Oda adý</i> -- /j komutunun aynýsý
<br>&nbsp;&nbsp;&nbsp;/userlist -- Bulunulan odadaki bütün kullanýcýlarý gösterir
<br>&nbsp;&nbsp;&nbsp;/roomlist -- Bütün odalarýn listesini gösterir
<br>&nbsp;&nbsp;&nbsp;/smilies -- Var olan smiliesleri ve kullanýmlarýný gösterir
<br><br><i>";

$arsc_lang["helpop"]        = "
</i>&nbsp;<b>Operatör Komutlarý:</b>
<br>&nbsp;&nbsp;&nbsp;/msgops <i>Mesaj</i> -- Yazýlan <i>Mesaj</i> bütün Operatörlere fýsýldanýr
<br>&nbsp;&nbsp;&nbsp;/whois <i>Kullanýcý</i> -- <i>Kullanýcý</i> hakkýndaki bilgileri gösterir
<br>&nbsp;&nbsp;&nbsp;/kick <i>Kullanýcý</i> -- <i>Kullanýcý</i> chatten atýlýr
<br>&nbsp;&nbsp;&nbsp;/bann <i>Kullanýcý X</i> -- <i>Kullanýcý</i> IP adresi <i>X</i> saniye chat kullanýmýna kapatýlýr
<br>&nbsp;&nbsp;&nbsp;/lock <i>Kullanýcý</i> -- Üye olan <i>Kullanýcý</i>nýn kaydý chat kullanýmýna kapatýlýr
<br>&nbsp;&nbsp;&nbsp;/rip <i>Kullanýcý</i> -- <i>Kullanýcý</i>nýn yaydýklarý gösterilmez
<br>&nbsp;&nbsp;&nbsp;/unrip <i>Kullanýcý</i> -- <i>Kullanýcý</i>nýn yaydýklarý yeniden gösterilmeye baþlar
<br>&nbsp;&nbsp;&nbsp;/op <i>Kullanýcý</i> -- <i>Kullanýcý</i>ya Operatör haklarý verilir
<br>&nbsp;&nbsp;&nbsp;/deop <i>Kullanýcý</i> -- <i>Kullanýcý</i>nýn Operatör haklarý geri alýnýr
<br>&nbsp;&nbsp;&nbsp;/move <i>Kullanýcý Oda</i> -- <i>Kullanýcý</i> belirtilen <i>Oda</i>ya &acute;gönderilir&acute;<br><br><i>";
?>

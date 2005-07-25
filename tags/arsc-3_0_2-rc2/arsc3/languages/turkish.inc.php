<?php

/*
 This is an ARSC language file. If you translate it, please send me
 a copy to <manuel@kiessling.net>, I will add it to ARSC then.
 Thanks.

 This file is for versions 3.0-beta1, 3.0-beta2, 3.0-rc1, 3.0, 3.0.1, 3.0.2, 3.0.2-rc1, 3.0.2-rc2
  
 Translation by Ridvan Agar <ridvan.agar@web.de>.
*/

// Include the english file, in order to provide english text if the current file has some sentences missing.
include("english.inc.php");

// Define some settings for this language
$arsc_lang_regions["turkish"] = array("tr", "tr-TR");
$arsc_lang_name["turkish"] = "T�rk�e";
$arsc_lang["charset"] = "iso-8859-9";


// Language selection

$arsc_lang["chooseyourlanguage"] = "Dilinizi se�in:";
$arsc_lang["next"] = "Devam";


// Login Page

$arsc_lang["entername"]                 = "Rumuzunuzu girin:";
$arsc_lang["enterpassword"]             = "Sifrenizi girin:";
$arsc_lang["selectchatversion"]         = "Program tipini se�in:";
$arsc_lang["version_browser_socket"]    = "Optimize";
$arsc_lang["version_browser_push"]      = "Optimize (firewall uyumlu)";
$arsc_lang["version_browser_text"]      = "Basit Web Tarayicilarina uygun";
$arsc_lang["yes"]                       = "Evet";
$arsc_lang["no"]                        = "Hayir";
$arsc_lang["selectroom"]                = "Oda se�in:";
$arsc_lang["createdby"]                 = "Yapimci";
$arsc_lang["startbutton"]               = "Chat'e gir!";
$arsc_lang["usersinchat"]               = "Chatteki kullanicilar:";
$arsc_lang["usersinchat_room"]          = "Oda";
$arsc_lang["usersinchat_name"]          = "Kullanici";
$arsc_lang["clicktoregister"]           = "Rumuz i�in basvurun!";


// Why kicked page

$arsc_lang["returntologinpage"] = "Girise d�n";


// Register page and eMail

$arsc_lang["register_intro"]                 = "Rumuz basvurusu i�in asagidaki formu doldurun.";
$arsc_lang["register_intro_force"]           = "Sifreniz, verdiginiz eMail adresine g�nderilecek.";
$arsc_lang["register_entername"]             = "Rumuz:";
$arsc_lang["register_enteremail"]            = "eMail adresi:";
$arsc_lang["register_enterpassword"]         = "Sifre:";
$arsc_lang["register_send"]                  = "Basvuruyu g�nder";
$arsc_lang["register_yougetmail"]            = "Tesekk�rler, sifreniz eMail adresinize g�nderildi.";
$arsc_lang["register_emailtemplate_subject"] = "{title} i�in yapilan basvuru";
$arsc_lang["register_emailtemplate_body"]    = "
Merhaba,

{title}  adina basvuruda bulundunuz.

Se�tiginiz rumuz '{username}'.
Asagidaki sifre ile rezerve edildi:

            '{password}'

Chat'e asagidaki adresten girebilirsiniz:
{homepage}

Iyi eglenceler!

-- 
 {chatowner}

";


// Chat interface

$arsc_lang["usersinroom"]               = "Odadaki �yeler";
$arsc_lang["sendmessage"]               = "G�nder";
$arsc_lang["refreshmessages"]           = "Mesajlari yenile";
$arsc_lang["leave"]                     = "�ik";
$arsc_lang["roomlist"]                  = "Oda Listesi";
$arsc_lang["go_room"]                   = "Gir";
$arsc_lang["refresh"]                   = "Yenile";
$arsc_lang["otherfunctions"]            = "Ek fonksiyonlar";
$arsc_lang["smilielist"]                = "Smilies(Mimikler) listesi";
$arsc_lang["scroll_active"]             = "Otomatik kaydirma";
$arsc_lang["select_color"]              = "Renginizi se�in";
$arsc_lang["moderatorqueue_title"]      = "Yanitlanmayan sorular";
$arsc_lang["moderatorqueue_delete"]     = "Sil";
$arsc_lang["moderatorqueue_youranswer"] = "Yanitiniz";
$arsc_lang["moderatorqueue_cancel"]     = "Iptal";
$arsc_lang["drawboard"]                 = "Kara tahta";

$arsc_lang["cmd_m"]           = "Bu kullaniciya mesaj �ekmek i�in tiklayin";
$arsc_lang["opcmd_w"]         = "Bu kullanici hakkindaki ek bilgileri g�ster";
$arsc_lang["opcmd_k"]         = "Bu kullaniciyi odadan at!";
$arsc_lang["opcmd_b"]         = "Bu kullanicinin IP adresini bir s�re i�in bloke et";
$arsc_lang["opcmd_l"]         = "Bu kullaniciyi daimi olarak bloke et(kayitli ise)";
$arsc_lang["opcmd_r"]         = "Bu kullanicinin gitlagina ��k (konusamasin)";
$arsc_lang["opcmd_u"]         = "Bu kullanicinin gitlagini birak(konusabilsin)";
$arsc_lang["opcmd_o"]         = "Bu kullaniciyi operat�r yap";
$arsc_lang["opcmd_d"]         = "Bu kullanicinin operat�r haklarini geri al";
$arsc_lang["opcmd_m"]         = "Bu kullaniciyi bu odadan baska odaya g�nder";
$arsc_lang["opcmd_id"]        = "Bu kullanicinin kimligini g�ster";


// Errors

$arsc_lang["error_register_double_user"] = "Bu rumuz baskai tarafindan kullaniliyor. L�tfen baskasini se�in.";
$arsc_lang["error_double_user"]          = "Bu rumuzlu kullanici su an chatte!";
$arsc_lang["error_no_name"]              = "Bir kullanici adi girmeniz gerekiyor!";
$arsc_lang["error_bad_name"]             = "Bu kullanici adini kullanmayiniz!";
$arsc_lang["error_wrong_credentials"]    = "Giris basarili olamadi!<br>Girdiginiz bilgilerin dogrulugunu kontrol edin.";
$arsc_lang["error_banned"]               = "Giris bir s�re i�in iptal edilmis durumda.";


// IDCard

$arsc_lang["idcard_title"]               = "Kimlik sahibi";
$arsc_lang["idcard_sex"]                 = "Cinsiyet:";
$arsc_lang["idcard_male"]                = "erkek";
$arsc_lang["idcard_female"]              = "bayan";
$arsc_lang["idcard_location"]            = "Bulundugu yer:";
$arsc_lang["idcard_color"]               = "Standart renk:";
$arsc_lang["idcard_hobbies"]             = "Hobileri:";
$arsc_lang["idcard_save"]                = "Kaydet";
$arsc_lang["idcard_save_ok"]             = "Degisiklikler kaydedildi";
$arsc_lang["idcard_save_no"]             = "Degisiklikler kaydedilemedi";
$arsc_lang["idcard_guestbook"]           = "Konuk defteri:";
$arsc_lang["idcard_guestbook_active"]    = "Konuk defteri g�sterime a�ik mi?";
$arsc_lang["idcard_guestbook_delete"]    = "Sil";
$arsc_lang["idcard_guestbook_delete_ok"] = "Girilen not silindi";
$arsc_lang["idcard_guestbook_delete_no"] = "Girilen not silinemedi!";
$arsc_lang["idcard_guestbook_add"]       = "Not ekle";
$arsc_lang["idcard_guestbook_add_ok"]    = "Notunuz deftere eklendi";
$arsc_lang["idcard_guestbook_add_no"]    = "Notunuz deftere eklenemedi!";
$arsc_lang["idcard_guestbook_next"]      = "Yeni notlar";
$arsc_lang["idcard_guestbook_prev"]      = "�nceki notlar";
$arsc_lang["idcard_close"]               = "Kapat";


// Chat System Messages

$arsc_lang["enter"]               = "{user} {room} odasina giriyor.";
$arsc_lang["welcome"]             = "{title} Hosgeldiniz!";
$arsc_lang["quit"]                = "{user} {room} odasindan �ikiyor.";
$arsc_lang["roomchange"]          = "{user} {room1} odasindan �ikiyor ve {room2} odasina giriyor.";
$arsc_lang["kicked"]              = "{userpassive} {useractive} tarafinda chat'ten atildi.";
$arsc_lang["youwerekicked"]       = "Chat'ten atildiniz!";
$arsc_lang["floodwarn"]           = "Ortaligi sele bogmayi birak yoksa atilirsin!";
$arsc_lang["op"]                  = "{userpassive} {useractive} tarafindan operat�r yapildi.";
$arsc_lang["deop"]                = "{useractive} {userpassive}'nin operat�r stat�s�n� geri aldi.";
$arsc_lang["whispers"]            = "fisliyor";
$arsc_lang["whispersops"]         = "t�m operat�rlere fisliyor";
$arsc_lang["gotmsg"]              = "{user}'a fisliyorsun: {message}";
$arsc_lang["croom"]               = "{user} {room} �zel odasini kapatiyor.";
$arsc_lang["room_exists"]         = "Pardon {room} odasi kullaniliyor.";
$arsc_lang["room_badname"]        = "Pardon, bu ge�erli bir oda ad&#305; de&#287;il.";
$arsc_lang["room_created"]        = "{room} �zel odaniz a�ildi! Artik /invite komutunu kullanarak dostlarinizi davet edebilirsiniz.";
$arsc_lang["invite"]              = "{user} seni {room} �zel odasina davet etti. \"/room {room} {password}\" yazarak girebilirsin.";
$arsc_lang["invite_notexist"]     = "Pardon, {user} diye bir kullanici yok.";
$arsc_lang["invite_notownroom"]   = "Pardon, dostlarini davet edebilmek i�in, kendi �zel odanda bulunman gerekiyor.";
$arsc_lang["room_not_exist"]      = "Pardon, {room} diye bir oda yok";
$arsc_lang["room_wrong_password"] = "Pardon, {room} odasina girebilmek i�in dogru sifreyi girmen gerekiyor";
$arsc_lang["moderate_message"]    = "Mesajin `{message}` chat sorumlusuna g�nderildi ve en kisa s�rede isleme konulacak.";
$arsc_lang["opcall"]              = "[OPCALL] Yardima ihtiyacim var!";

$arsc_lang["helplink"]      = "Yardim";
$arsc_lang["help"]          = "
Genel Yardim:
Sol s�tunda, odada bulunanlari g�r�yorsunuz.

Adlarinin �n�nde @ olan kullanicilar operat�rd�r
ve diger kullanicilara operat�r stat�s� verebilir 
stat�lerini geri alabilir ve chatt'en atabilirier.

Sag taraftaki kullanici adlarina tiklayarak
onlara gizli mesaj yollayabilirbilirsiniz.
Tikladiktan sonra sadece mesajinizi yazmaniz yeterli.

General Commands:
/me mesaj -- Bir hareketi sembolize eder, �rnek: /me kendini iyi hissediyor * Kullan&#305;c&#305; kendini iyi hissediyor yazd&#305;r&#305;r
/msg kullanici mesaj -- 'kullanici' ya gizli mesaj �eker
/j odaadi -- Bulunulan odadan 'odaadi' adli odaya ge�er
/room room --  /j odaadi komutunun aynisi";

$arsc_lang["helpop"]        = "
Operat�r Komutlari:
/msgops mesaj -- T�m operat�rlere gizli mesaj g�nderir
/whois kullaniciadi -- 'kullaniciadi' hakkinda bilgi verir
/op kullaniciadi -- 'kullaniciadi' na operat�r haklari verir
/deop kullaniciadi -- 'kullaniciadi' ndan operat�r haklarini geri alir
/kick kullaniciadi -- 'kullaniciadi' ni chat'ten atar
/bann kullaniciadi X -- 'kullaniciadi' nin IP adresini X saniye bloke eder
/lock kullaniciadi -- 'kullaniciadi' ni, kayitli ise, daimi olarak bloke eder
/rip kullaniciadi -- 'kullaniciadi' nin yazdiklarini bloke eder
/unrip kullaniciadi -- 'kullaniciadi' nin yazdiklarinin blokesini kaldirir
/move kullaniciadi odaadi -- 'kullaniciadi' ni 'odaadi' na nakleder";

?>

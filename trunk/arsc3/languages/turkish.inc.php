<?php

/*
 This is an ARSC language file. If you translate it, please send me
 a copy to <manuel@kiessling.net>, I will add it to ARSC then.
 Thanks.

 This file is for versions 3.0-beta1, 3.0-beta2, 3.0-rc1
  
 Translation by Ridvan Agar <ridvan.agar@web.de>.
*/

// Define some settings for this language
$arsc_lang_regions["turkish"] = array("tr", "tr-TR");
$arsc_lang_name["turkish"] = "Türkçe";
$arsc_lang["charset"] = "utf-8";


// Language selection

$arsc_lang["chooseyourlanguage"] = "Dilinizi seçin:";
$arsc_lang["next"] = "Devam";


// Login Page

$arsc_lang["entername"]                 = "Rumuzunuzu girin:";
$arsc_lang["enterpassword"]             = "Şifrenizi girin:";
$arsc_lang["selectchatversion"]         = "Program tipini seçin:";
$arsc_lang["version_browser_socket"]    = "Optimize";
$arsc_lang["version_browser_push"]      = "Optimize (firewall uyumlu)";
$arsc_lang["version_browser_text"]      = "Basit Web Tarayıcılarına uygun";
$arsc_lang["yes"]                       = "Evet";
$arsc_lang["no"]                        = "Hayır";
$arsc_lang["selectroom"]                = "Oda seçin:";
$arsc_lang["createdby"]                 = "Yapımcı";
$arsc_lang["startbutton"]               = "Chat'e gir!";
$arsc_lang["usersinchat"]               = "Chatteki kullanıcılar:";
$arsc_lang["usersinchat_room"]          = "Oda";
$arsc_lang["usersinchat_name"]          = "Kullanıcı";
$arsc_lang["clicktoregister"]           = "Rumuz için başvurun!";


// Why kicked page

$arsc_lang["why_kicked"] = "Muhtemelen oturum süreniz dolduğu için yada chat kurallarına uymadığınız için, operatör tarafından dışarı atıldınız.";
$arsc_lang["returntologinpage"] = "Girişe dön";


// Register page and eMail

$arsc_lang["register_intro"]                 = "Rumuz başvurusu için aşağıdaki formu doldurun.";
$arsc_lang["register_intro_force"]           = "Şifreniz, verdiğiniz eMail adresine gönderilecek.";
$arsc_lang["register_entername"]             = "Rumuz:";
$arsc_lang["register_enteremail"]            = "eMail adresi:";
$arsc_lang["register_enterpassword"]         = "Şifre:";
$arsc_lang["register_send"]                  = "Başvuruyu gönder";
$arsc_lang["register_yougetmail"]            = "Teşekkürler, şifreniz eMail adresinize gönderildi.";
$arsc_lang["register_emailtemplate_subject"] = "{title} için yapılan başvuru";
$arsc_lang["register_emailtemplate_body"]    = "
Merhaba,

{title}  adına başvuruda bulundunuz.

Seçtiğiniz rumuz '{username}'.
Aşağıdaki şifre ile rezerve edildi:

            '{password}'

Chat'e aşağıdaki adresten girebilirsiniz:
{homepage}

İyi eğlenceler!

-- 
 {chatowner}

";


// Chat interface

$arsc_lang["usersinroom"]               = "Odadaki üyeler";
$arsc_lang["sendmessage"]               = "Gönder";
$arsc_lang["refreshmessages"]           = "Mesajları yenile";
$arsc_lang["leave"]                     = "Çık";
$arsc_lang["roomlist"]                  = "Oda Listesi";
$arsc_lang["go_room"]                   = "Gir";
$arsc_lang["refresh"]                   = "Yenile";
$arsc_lang["otherfunctions"]            = "Ek fonksiyonlar";
$arsc_lang["smilielist"]                = "Smilies(Mimikler) listesi";
$arsc_lang["scroll_active"]             = "Otomatik kaydırma";
$arsc_lang["select_color"]              = "Renginizi seçin";
$arsc_lang["moderatorqueue_title"]      = "Yanıtlanmayan sorular";
$arsc_lang["moderatorqueue_delete"]     = "Sil";
$arsc_lang["moderatorqueue_youranswer"] = "Yanıtınız";
$arsc_lang["moderatorqueue_cancel"]     = "İptal";
$arsc_lang["drawboard"]                 = "Kara tahta";

$arsc_lang["cmd_m"]           = "Bu kullanıcıya mesaj çekmek için tıklayın";
$arsc_lang["opcmd_w"]         = "Bu kullanıcı hakkındaki ek bilgileri göster";
$arsc_lang["opcmd_k"]         = "Bu kullanıcıyı odadan at!";
$arsc_lang["opcmd_b"]         = "Bu kullanıcının IP adresini bir süre için bloke et";
$arsc_lang["opcmd_l"]         = "Bu kullanıcıyı daimi olarak bloke et(kayıtlı ise)";
$arsc_lang["opcmd_r"]         = "Bu kullanıcının gıtlağına çök (konuşamasın)";
$arsc_lang["opcmd_u"]         = "Bu kullanıcının gıtlağını bırak(konuşabilsin)";
$arsc_lang["opcmd_o"]         = "Bu kullanıcıyı operatör yap";
$arsc_lang["opcmd_d"]         = "Bu kullanıcının operatör haklarını geri al";
$arsc_lang["opcmd_m"]         = "Bu kullanıcıyı bu odadan başka odaya gönder";
$arsc_lang["opcmd_id"]        = "Bu kullanıcının kimliğini göster";


// Errors

$arsc_lang["error_register_double_user"] = "Bu rumuz başkaı tarafından kullanılıyor. Lütfen başkasını seçin.";
$arsc_lang["error_double_user"]          = "Bu rumuzlu kullanıcı şu an chatte!";
$arsc_lang["error_no_name"]              = "Bir kullanıcı adı girmeniz gerekiyor!";
$arsc_lang["error_bad_name"]             = "Bu kullanıcı adını kullanmayınız!";
$arsc_lang["error_wrong_credentials"]    = "Giriş başarılı olamadı!<br>Girdiğiniz bilgilerin doğruluğunu kontrol edin.";
$arsc_lang["error_banned"]               = "Giriş bir süre için iptal edilmiş durumda.";


// IDCard

$arsc_lang["idcard_title"]               = "Kimlik sahibi";
$arsc_lang["idcard_sex"]                 = "Cinsiyet:";
$arsc_lang["idcard_male"]                = "erkek";
$arsc_lang["idcard_female"]              = "bayan";
$arsc_lang["idcard_location"]            = "Bulunduğu yer:";
$arsc_lang["idcard_color"]               = "Standart renk:";
$arsc_lang["idcard_hobbies"]             = "Hobileri:";
$arsc_lang["idcard_save"]                = "Kaydet";
$arsc_lang["idcard_save_ok"]             = "Değişiklikler kaydedildi";
$arsc_lang["idcard_save_no"]             = "Değişiklikler kaydedilemedi";
$arsc_lang["idcard_guestbook"]           = "Konuk defteri:";
$arsc_lang["idcard_guestbook_active"]    = "Konuk defteri gösterime açık mı?";
$arsc_lang["idcard_guestbook_delete"]    = "Sil";
$arsc_lang["idcard_guestbook_delete_ok"] = "Girilen not silindi";
$arsc_lang["idcard_guestbook_delete_no"] = "Girilen not silinemedi!";
$arsc_lang["idcard_guestbook_add"]       = "Not ekle";
$arsc_lang["idcard_guestbook_add_ok"]    = "Notunuz deftere eklendi";
$arsc_lang["idcard_guestbook_add_no"]    = "Notunuz deftere eklenemedi!";
$arsc_lang["idcard_guestbook_next"]      = "Yeni notlar";
$arsc_lang["idcard_guestbook_prev"]      = "Önceki notlar";
$arsc_lang["idcard_close"]               = "Kapat";


// Chat System Messages

$arsc_lang["enter"]               = "{user} {room} odasına giriyor.";
$arsc_lang["welcome"]             = "{title} Hoşgeldiniz!";
$arsc_lang["quit"]                = "{user} {room} odasından çıkıyor.";
$arsc_lang["roomchange"]          = "{user} {room1} odasından çıkıyor ve {room2} odasına giriyor.";
$arsc_lang["kicked"]              = "{userpassive} {useractive} tarafında chat'ten atıldı.";
$arsc_lang["youwerekicked"]       = "Chat'ten atıldınız!";
$arsc_lang["floodwarn"]           = "Ortalığı sele boğmayı bırak yoksa atılırsın!";
$arsc_lang["op"]                  = "{userpassive} {useractive} tarafından operatör yapıldı.";
$arsc_lang["deop"]                = "{useractive} {userpassive}'nın operatör statüsünü geri aldı.";
$arsc_lang["whispers"]            = "fıslıyor";
$arsc_lang["whispersops"]         = "tüm operatörlere fıslıyor";
$arsc_lang["gotmsg"]              = "{user}'a fıslıyorsun: {message}";
$arsc_lang["croom"]               = "{user} {room} özel odasını kapatıyor.";
$arsc_lang["room_exists"]         = "Pardon {room} odası kullanılıyor.";
$arsc_lang["room_badname"]        = "Sorry, this roomname is not acceptable.";
$arsc_lang["room_created"]        = "{room} özel odanız açıldı! Artık /invite komutunu kullanarak dostlarınızı davet edebilirsiniz.";
$arsc_lang["invite"]              = "{user} seni {room} özel odasına davet etti. \"/room {room} {password}\" yazarak girebilirsin.";
$arsc_lang["invite_notexist"]     = "Pardon, {user} diye bir kullanıcı yok.";
$arsc_lang["invite_notownroom"]   = "Pardon, dostlarını davet edebilmek için, kendi özel odanda bulunman gerekiyor.";
$arsc_lang["room_not_exist"]      = "Pardon, {room} diye bir oda yok";
$arsc_lang["room_wrong_password"] = "Pardon, {room} odasına girebilmek için doğru şifreyi girmen gerekiyor";
$arsc_lang["moderate_message"]    = "Mesajın `{message}` chat sorumlusuna gönderildi ve en kısa sürede işleme konulacak.";
$arsc_lang["opcall"]              = "[OPCALL] Yardıma ihtiyacım var!";

$arsc_lang["helplink"]      = "Yardım";
$arsc_lang["help"]          = "
Genel Yardım:
Sol sütunda, odada bulunanları görüyorsunuz.

Adlarının önünde @ olan kullanıcılar operatördür
ve diğer kullanıcılara operatör statüsü verebilir 
statülerini geri alabilir ve chatt'en atabilirier.

Sağ taraftaki kullanıcı adlarına tıklayarak
onlara gizli mesaj yollayabilirbilirsiniz.
Tıkladıktan sonra sadece mesajınızı yazmanız yeterli.

General Commands:
/me mesaj -- Symbolizes an action, e.g. /me feels fine writes * User feels fine
/msg kullanıcı mesaj -- 'kullanıcı' ya gizli mesaj çeker
/j odaadı -- Bulunulan odadan 'odaadı' adlı odaya geçer
/room room --  /j odaadı komutunun aynısı";

$arsc_lang["helpop"]        = "
Operatör Komutları:
/msgops mesaj -- Tüm operatörlere gizli mesaj gönderir
/whois kullanıcıadı -- 'kullanıcıadı' hakkında bilgi verir
/op kullanıcıadı -- 'kullanıcıadı' na operatör hakları verir
/deop kullanıcıadı -- 'kullanıcıadı' ndan operatör haklarını geri alır
/kick kullanıcıadı -- 'kullanıcıadı' nı chat'ten atar
/bann kullanıcıadı X -- 'kullanıcıadı' nın IP adresini X saniye bloke eder
/lock kullanıcıadı -- 'kullanıcıadı' nı, kayıtlı ise, daimi olarak bloke eder
/rip kullanıcıadı -- 'kullanıcıadı' nın yazdıklarını bloke eder
/unrip kullanıcıadı -- 'kullanıcıadı' nın yazdıklarının blokesini kaldırır
/move kullanıcıadı odaadı -- 'kullanıcıadı' nı 'odaadı' na nakleder";

?>

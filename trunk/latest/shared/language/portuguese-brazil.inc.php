<?php

/*
  This is an ARSC language file. If you translate it, please send me
  a copy to <manuel@kiessling.net>, I will add it to ARSC then. Thanks.

  This file is for version: 1.0 and 1.0.1

  Translated by Adriano Seixas Dekker <bart@email.com.br>
*/


// Homepage

$arsc_lang["entername"]         = "Por favor, entre com seu Nick:";
$arsc_lang["enterpassword"]     = "Por favor, entre com sua Senha:";
$arsc_lang["whichversion"]      = "Qual versão voce quer escolher?";
$arsc_lang["version_dontknow"]  = "Escolha esta versão se voce não sabe qual Browser voce usa.";
$arsc_lang["version_sockets"]   = "Versão recomendada para Browsers modernos. Usa JavaScript e Frames.";
// If you installed the socket server, version_push_js will not be shown, and vice versa, this is why they are same.
$arsc_lang["version_push_js"]   = "Versão recomendada para Browsers modernos. Usa JavaScript e Frames.";
$arsc_lang["version_header_js"] = "Versão alternativa para os Browsers modernos se a escolha de cima não funciona. Usa JavaScript e Frames.";
$arsc_lang["version_header"]    = "Uma versão que só usa Frames, mas não JavaScript.";
$arsc_lang["version_box"]       = "Uma versão para o Zuum WebTV box.";
$arsc_lang["version_text"]      = "Versão puro texto, para Browsers Simples.";
$arsc_lang["yes"]               = "Sim";
$arsc_lang["no"]                = "Não";
$arsc_lang["selectroom"]        = "Escolha uma sala:";
$arsc_lang["startbutton"]       = "Entrar no CHAT!";
$arsc_lang["usersinchat"]       = "Usuarios que estão no Chat:";
$arsc_lang["usersinchat_room"]  = "Sala";
$arsc_lang["usersinchat_name"]  = "Usuario";
$arsc_lang["clicktoregister"]   = "Registre seu nick!";


// Register page and eMail

$arsc_lang["register_intro"]                 = "Para registrar seu nick preencha os campos abaixo.";
$arsc_lang["register_intro_force"]           = "Uma senha será enviada para seu eMail.";
$arsc_lang["register_entername"]             = "Nick:";
$arsc_lang["register_enteremail"]            = "eMail:";
$arsc_lang["register_enterpassword"]         = "Senha:";
$arsc_lang["register_send"]                  = "Enviar registo";
$arsc_lang["register_yougetmail"]            = "Obrigado, voce agora receberá um eMail com sua senha.";
$arsc_lang["register_emailtemplate_subject"] = "Seu Registro no CHAT.";

$arsc_lang["register_emailtemplate"]         = "
Ola,

Voce se registrou no CHAT.

Voce escolheu o nick: '{username}'.
E está protegido com esta senha:

            '{password}'

Voce pode agora entrar no CHAT nesta pagina:
{homepage}


Boa diversão!

--
 {chatowner}

";


// Chat interface

$arsc_lang["usersinroom"]     = "Usuarios na Sala";
$arsc_lang["sendmessage"]     = "Enviar";
$arsc_lang["refreshmessages"] = "Atualizar Mensagens";
$arsc_lang["leave"]           = "Sair";
$arsc_lang["roomlist"]        = "Lista de Salas";
$arsc_lang["refresh"]         = "Atualizar";
$arsc_lang["otherfunctions"]  = "Funções Adicionais";
$arsc_lang["smilielist"]      = "Listar todos os Smilies";
$arsc_lang["scroll_active"]   = "Autoscroll";
$arsc_lang["drawboard"]       = "Drawboard";


// Errors

$arsc_lang["error_register_double_user"] = "Este nick já está sendo usado. Por favor escolha outro.";
$arsc_lang["error_waitformail"]          = "Quando o eMail com sua senha chegar, voce poderá entrar no chat.";
$arsc_lang["error_double_user"]          = "Um usuario com este nome já está logado!";
$arsc_lang["error_no_name"]              = "Voce precisar ter um nick!";
$arsc_lang["error_bad_name"]             = "Este nome não foi aceito!";
$arsc_lang["error_wrong_credentials"]    = "Accesso Negado!<br>Sua senha está correta?";
$arsc_lang["error_banned"]               = "Accesso está temporariamente negado.";


// Chat System Messages

$arsc_lang["enter"]         = "Usuario {user} entrou na sala {room}.";
$arsc_lang["welcome"]       = "Bem vindo! Entre com /? no textfield para ver os possiveis comandos.";
$arsc_lang["quit"]          = "Usuario {user} deixou a sala {room}.";
$arsc_lang["roomchange"]    = "Usuario {user} deixou a sala {room1} e entrou na sala {room2}.";
$arsc_lang["kicked"]        = "Usuario {userpassive} foi kickado do chat por {useractive}.";
$arsc_lang["youwerekicked"] = "Voce foi kickado do chat!";
$arsc_lang["op"]            = "Usario {userpassive} pegou Status de Operador de {useractive}.";
$arsc_lang["deop"]          = "Usario {useractive} removeu o Status de operador de {userpassive}.";
$arsc_lang["whispers"]      = "Sussurrou";
$arsc_lang["whispersops"]   = "Sussurrou para todos os Operadores";
$arsc_lang["gotmsg"]        = "Voce sussurrou para </i>{user}<i>: {message}";

$arsc_lang["help"]          = "
</i><br><br>&nbsp;<b>Ajuda Geral:</b>
<br>&nbsp;&nbsp;&nbsp;No frame da direita voce verá todos os usuarios
<br>&nbsp;&nbsp;&nbsp;que estão atualmente na sala.
<br>
<br>&nbsp;&nbsp;&nbsp;Usuarios com uma @ na frente no nick
<br>&nbsp;&nbsp;&nbsp;são os operadores e podem kickar usuarios para fora
<br>&nbsp;&nbsp;&nbsp;da sala, dar status de operador para outros
<br>&nbsp;&nbsp;&nbsp;usuarios, ou tirar o proprio status de operador.
<br>
<br>&nbsp;&nbsp;&nbsp;Se voce clicar em um nick da direita, o input
<br>&nbsp;&nbsp;&nbsp;field será preenchido com o camando que é necessario
<br>&nbsp;&nbsp;&nbsp;para enviar uma mensagem privada para aquele usuario.
<br>&nbsp;&nbsp;&nbsp;Voce só precisa colocar sua mensagem no final
<br>&nbsp;&nbsp;&nbsp;da linha de comando.
<br>
<br>&nbsp;<b>Comandos Gerais:</b>
<br>&nbsp;&nbsp;&nbsp;/me <i>mensagem</i> -- Simboliza uma ação, ex. <i>/me se sente bem</i> writes <i>* Usuario se 
sente bem</i>
<br>&nbsp;&nbsp;&nbsp;/msg <i>nick</i> <i>mensagem</i>  -- Envia uma <i>message</i> privada para um <i>usuario</i>
<br>&nbsp;&nbsp;&nbsp;/j <i>sala</i> -- Deixa a sala ou entra em uma <i>sala</i>
<br>&nbsp;&nbsp;&nbsp;/room <i>sala</i> -- Atalho para o /j
<br><br><i>";

$arsc_lang["helpop"]        = "
</i>&nbsp;<b>Comandos dos Operadores:</b>
<br>&nbsp;&nbsp;&nbsp;/msgops <i>mensagem</i> -- Sussurra uma <i>message</i> para todos os operadores
<br>&nbsp;&nbsp;&nbsp;/whois <i>nick</i> -- Mostra informações sobre o <i>nick</i>
<br>&nbsp;&nbsp;&nbsp;/op <i>nick</i> -- Dar status de operador para <i>nick</i>
<br>&nbsp;&nbsp;&nbsp;/deop <i>nick</i> -- Tira o status de operador do <i>nick</i>
<br>&nbsp;&nbsp;&nbsp;/kick <i>nick</i> -- Kicka o <i>nick</i> para fora do chat
<br>&nbsp;&nbsp;&nbsp;/bann <i>nick X</i> -- Bloqueia o IP do <i>nick</i> por <i>X</i> segundos
<br>&nbsp;&nbsp;&nbsp;/lock <i>nick</i> -- Trava a conta do(registrado!) <i>nick</i> permanentemente
<br>&nbsp;&nbsp;&nbsp;/rip <i>nick</i> -- Oque o <i>nick</i> falar não será mostrado
<br>&nbsp;&nbsp;&nbsp;/unrip <i>nick</i> -- Oque o <i>nick</i> falar será mostrado denovo
<br>&nbsp;&nbsp;&nbsp;/move <i>nick sala</i> -- &acute;Move&acute; <i>usuario</i> para a <i>sala</i>
<br><br><i>";
?>

<?php

//	Translateded by RODRIGO LOPES <rvl@ufrj.br>

// Include the english file, in order to provide english text if the current file has some sentences missing.
include("english.inc.php");

// Define some settings for this language
$arsc_lang_regions["portuguese-brazil"] = array("pt-br", "pt");
$arsc_lang_name["portuguese-brazil"] = "Portuguese (Brazil)";
$arsc_lang["charset"] = "iso-8859-1";


// Login Page

$arsc_lang["entername"]                 = "Por favor digite seu nick:";
$arsc_lang["enterpassword"]             = "Por favor digite sua senha:";
$arsc_lang["whichversion"]              = "Qual vcers�o voc� quer usar?";
$arsc_lang["version_dontknow"]          = "Escolha essa vers�o se voc� n�o sabe qual navegador usar.";
$arsc_lang["version_browser_socket"]    = "Vers�o recomendada para navegadores modernos. Usa javascript e frames.";
$arsc_lang["version_browser_push"]      = "Vers�o alternativa. Use esta se voc� teve problemas com a vers�o recomendada.";
$arsc_lang["version_browser_header_js"] = "Vers�o alternativa para navegadores modernos se alguma acima n�o funcionou. Usa javascript e frames.";
$arsc_lang["version_browser_header"]    = "Uma vers�o que s� usa frame, mas n�o JavaScript.";
$arsc_lang["version_browser_box"]       = "Uma vers�o para Zuum WebTV box.";
$arsc_lang["version_browser_text"]      = "Vers�o simples para navegadores baseados em texto.";
$arsc_lang["version_applet"]            = "Java Applet.";
$arsc_lang["yes"]                       = "Sim";
$arsc_lang["no"]                        = "N�o";
$arsc_lang["selectroom"]                = "Escolha uma sala:";
$arsc_lang["createdby"]                 = "Criado por";
$arsc_lang["startbutton"]               = "iniciar o chat!";
$arsc_lang["usersinchat"]               = "Estes usu�rios est�o logados:";
$arsc_lang["usersinchat_room"]          = "Sala";
$arsc_lang["usersinchat_name"]          = "Usu�rio";
$arsc_lang["clicktoregister"]           = "Registre seu nick!";

// Why kicked page
$arsc_lang["why_kicked"] = "Voc� foi chutado pra fora do chat por um operador, provavelmente por causa de seu coportamento que n�o foi de acordo com as regras desse chat.";

// Register page and eMail

$arsc_lang["register_intro"]                 = "Para registrar seu nick, preencha os campos abaixo.";
$arsc_lang["register_intro_force"]           = "Uma senha ser� enviada para o email fornecido.";
$arsc_lang["register_entername"]             = "Nick:";
$arsc_lang["register_enteremail"]            = "Email:";
$arsc_lang["register_enterpassword"]         = "Senha:";
$arsc_lang["register_send"]                  = "Enviar registro";
$arsc_lang["register_yougetmail"]            = "Obrigado, Voc� receber� agora um email com a sua senha.";
$arsc_lang["register_emailtemplate_subject"] = "Seu registro para {title}";
$arsc_lang["register_emailtemplate_body"]    = "
Ol�,

Voc� est� registrado para {title}.

Voc� escolheu o nick '{username}'.
Ele est� agora protegido com esta senha:

            '{password}'

Voc� pode agora entrar no chat por esta p�gina:
{homepage}

Divirta-se!

-- 
 {chatowner}

";


// Chat interface

$arsc_lang["usersinroom"]     = "Usu�rios na sala";
$arsc_lang["sendmessage"]     = "Enviar";
$arsc_lang["refreshmessages"] = "Atualizar Menssagens";
$arsc_lang["leave"]           = "Sair";
$arsc_lang["roomlist"]        = "Lista de Salas";
$arsc_lang["go_room"]         = "Entrar";
$arsc_lang["refresh"]         = "Atualizar";
$arsc_lang["otherfunctions"]  = "Fun��es adicionais";
$arsc_lang["smilielist"]      = "Lista de todos os Smiles";
$arsc_lang["scroll_active"]   = "Auto Rolagem";
$arsc_lang["select_color"]    = "Selecione sua cor";
$arsc_lang["drawboard"]       = "Quadro de cor";

$arsc_lang["cmd_m"]           = "Clique para enviar uma mensagem para este usu�rio";
$arsc_lang["opcmd_w"]         = "Mostrar informa��es adicionais para este usu�rio";
$arsc_lang["opcmd_k"]         = "Chutar esse usu�rio da sala";
$arsc_lang["opcmd_b"]         = "Banir o IP deste usu�rio por algum tempo";
$arsc_lang["opcmd_l"]         = "Trancar este usu�rio permanentemente (se ele estiver registrado)";
$arsc_lang["opcmd_r"]         = "Calar este usu�rio (ent�o ele n�o pode conversar)";
$arsc_lang["opcmd_u"]         = "DesCalar este usu�rio (ent�o ele pode conversar denovo)";
$arsc_lang["opcmd_o"]         = "Dar a este usu�rio status de operador";
$arsc_lang["opcmd_d"]         = "Tirar status de operador deste usu�rio";
$arsc_lang["opcmd_m"]         = "Mover usu�rio deste sala para uma outra";
$arsc_lang["opcmd_id"]        = "Mostrar o ID Card deste usu�rio";

// Errors

$arsc_lang["error_register_double_user"] = "Este nick j� est� em uso. Por favor escolha outro.";
$arsc_lang["error_double_user"]          = "Um usu�rio com este nome j� est� logado!";
$arsc_lang["error_no_name"]              = "Voc� deve digitar um nick!";
$arsc_lang["error_bad_name"]             = "Este nome n�o � permitido!";
$arsc_lang["error_wrong_credentials"]    = "Acesso negado!<br>Seuas credenciais est�o corretas?";
$arsc_lang["error_banned"]               = "Acesso temporariamente n�o permitido.";

// IDCard

$arsc_lang["idcard_title"]               = "ID Card de";
$arsc_lang["idcard_sex"]                 = "Sexo:";
$arsc_lang["idcard_male"]                = "masculino";
$arsc_lang["idcard_female"]              = "feminino";
$arsc_lang["idcard_location"]            = "Localiza��o:";
$arsc_lang["idcard_color"]               = "Cor padr�o:";
$arsc_lang["idcard_hobbies"]             = "Hobbes:";
$arsc_lang["idcard_save"]                = "Salvar";
$arsc_lang["idcard_save_ok"]             = "Mudan�as salvas";
$arsc_lang["idcard_save_no"]             = "Mudan�as n�o puderam ser salvas";
$arsc_lang["idcard_guestbook"]           = "Livro de visitas:";
$arsc_lang["idcard_guestbook_active"]    = "Mostrar livro de visitas?";
$arsc_lang["idcard_guestbook_delete"]    = "Delete";
$arsc_lang["idcard_guestbook_delete_ok"] = "Entrada foi deletada";
$arsc_lang["idcard_guestbook_delete_no"] = "Entrada n�o pode ser deletada!";
$arsc_lang["idcard_guestbook_add"]       = "Acrescentar entrada";
$arsc_lang["idcard_guestbook_add_ok"]    = "Sua entrada foi acrescentada";
$arsc_lang["idcard_guestbook_add_no"]    = "Sua entrada n�o pode ser acrescentada!";
$arsc_lang["idcard_guestbook_next"]      = "Pr�ximas entradas";
$arsc_lang["idcard_guestbook_prev"]      = "Anteriores entradas";
$arsc_lang["idcard_close"]               = "Fechar";


// Chat System Messages

$arsc_lang["enter"]               = "Usu�rio {user} entrou na sala {room}.";
$arsc_lang["welcome"]             = "Bem vindo ao {title}!";
$arsc_lang["quit"]                = "Usu�rio {user} saiu da sala {room}.";
$arsc_lang["roomchange"]          = "Usu�rio {user} saiu da sala {room1} e entrou na {room2}.";
$arsc_lang["kicked"]              = "Usu�rio {userpassive} foi chutado do chat por {useractive}.";
$arsc_lang["youwerekicked"]       = "Voc� foi chutado pra fora do chat!";
$arsc_lang["floodwarn"]           = "Para de FLOODAR ou ter� que deixar a sala!";
$arsc_lang["op"]                  = "Usu�rio {userpassive} pegou status de operador de {useractive}.";
$arsc_lang["deop"]                = "Usu�rio {useractive} removeu o status de operador de {userpassive}.";
$arsc_lang["whispers"]            = "sussurros";
$arsc_lang["whispersops"]         = "sussurros para todos os operadores";
$arsc_lang["gotmsg"]              = "Voc� sussurrou para {user}: {message}";
$arsc_lang["croom"]               = "Usu�rio {user} decidiu-se retirar-se em sua sala reservada {room}.";
$arsc_lang["room_exists"]         = "Desculpe, mas a sala {room} j� existe.";
$arsc_lang["room_badname"]        = "Desculpe, este nome de sala n�o � aceit�vel.";
$arsc_lang["room_created"]        = "Sua sala privada {room} foi criada com sucesso! Agora voc� pode convidar algu�m usando o comando /invite .";
$arsc_lang["invite"]              = "Usu�rio {user} convidou voc� para a sala {room}. Digite \"/room {room} {password}\" para entrar nesta sala.";
$arsc_lang["invite_notexist"]     = "Desculpe, o usu�rio {user} n�o existe.";
$arsc_lang["invite_notownroom"]   = "Desculpe, voc� deve estar em sua pr�pria sala para convidar outros usu�rios.";
$arsc_lang["room_not_exist"]      = "Desculpe, mas a sala {room} n�o existe";
$arsc_lang["room_wrong_password"] = "Desculpe, voc� deve dizer a senha correta para entrar na sala {room}";
$arsc_lang["moderate_message"]    = "Sua menssagem `{message}` foi entregue ao moderador e ser� checada.";
$arsc_lang["opcall"]              = "[OPCALL] Preciso de ajuda !!!";

$arsc_lang["helplink"]      = "Ajuda";
$arsc_lang["help"]          = "
Ajuda Geral:
No frame direito voc� v� todos os usu�rios
que est�o agora mesmo na sala.

Usu�rios com um @ a frente de seus nomes
e podem chutar usu�rios para fora
da sala, dar status de operador a outros
usu�rios, e se disfazer de seu status de operador.

Se voc� clicar num nome da direita, o campo de
entrada ser� preenchido com o comando
necess�rio para enviar menssagem privada para este us�rio.
Voc� s� deve acrescentar sua menssagem ao final
desta linha.

Comandos Gerais:
/me message -- Simboliza uma a��o, ex. /me feels fine writes * User feels fine
/msg user message -- Enviar uma menssagem privada para um usu�rio
/j OutraSala -- Deixa essa sala e entra na sala 'OutraSala'
/room room -- O mesmo que /j";

$arsc_lang["helpop"]        = "
Comandos de Operador:
/msgops message -- Sussurra uma menssagem para todos os operadores
/whois user -- Mostra informa��es sobre usu�rios
/op user -- D� status de operador � usu�rios
/deop user -- Retira status de operador de usu�rios
/kick user -- Chuta usu�rios para fora do chat
/bann user X -- Bloqueia o IP do usu�rio por X segundos
/lock user -- Bloqueia conta do (registered!) usu�rio permanentemente
/rip user -- O que o su�rio dizer n�o ser� mostrado
/unrip user -- O que o usu�rio disser ser� mostrado denovo
/move user room -- Move o usu�rio na sala";

?>
<?php

/*Traduzido do Espanhol para Portugu�s por Roberto Costa [crab]*/
/*Visitar www.trampoart.com ou mandar e-mail para trampoart@trampoart.com*/
/*Vers�o do script: 1.3 Vers�o interna da traduc�o: 1.0/*

/*headder Bar */
$lang_charset= "iso-8859-1";
$lang_head_settings="Configura��o";
$lang_send_out_mail="Enviar E-mail";
$lang_edit_mailing_groups="Grupos";
$lang_edit_mailing_list="Cadastrados";
$lang_about="Sobre ?";
$lang_help="Ajuda";
$lang_history="Hist�rico";
$lang_logout="Sair";

/*logging setings */
$lang_login_manage="Gerencie suas listas facilmente";
$lang_login_username="Nome do Usu�rio";
$lang_login_passwords="Senha";

/*main setings */
$lang_tail_total="Total de Cadastrados:";
$lang_main_updated="O arquivo de configura��o principal foi atualizado";
$lang_main_settings="Configura��o Principal";
$lang_main_global="Altere a configura��o geral aqui";
$lang_main_vote="Votar";
$lang_main_diagnostics="Registro de Erro";
$lang_main_script="Opc�es de Script";
$lang_main_database="Banco de Dados";
$lang_main_email="Opc�es de E-mail";
$lang_main_security="Opc�es de Seguran�a";
$lang_main_server="Servidor de E-mail";
$lang_main_script_about="Estas s�o configurac�es para o correto funcionamento do Script. Em caso de problemas consulte a Ajuda. ";
$lang_main_website="Website";
$lang_main_website_help="Nome do website com o caminho principal!";
$lang_main_relative="Caminho Relativo :";
$lang_main_relative_help="Este � o caminho onde est� armazenado o sistema de newsletter!";
$lang_main_absolute_path="Caminho Absoluto :";
$lang_main_absolute_path_help="Este � o caminho do arquivo do sistema ";
$lang_main_string="String Relativa :";
$lang_main_string_help="Aqui est� o nome do arquivo com a qual se chama os e-mails listados <B>?page=mail&</B>!";
$lang_main_rc4="String unica para encriptar RC4 :";
$lang_main_encrypt="Ativar Encripta��o RC4 :";
$lang_main_encrypt_help="Selecione a encripta��o que deseja ativar para arquivos de texto";
$lang_main_popup_help="Se deseja ver as confirma��es em uma janela Pop up. Evite uma sequ�ncia relativa.";
$lang_main_popup="Habilitar Janelas Pop up :";
$lang_main_rc4_help="Introduza aqui uma �nica sequ�ncia RC$ para encriptar os registros de seus arquivos de texto.";
$lang_main_Language="Selecione o Idioma :";
$lang_main_Language_help="Aqui pode selecionar o idioma";
$lang_main_databaseset="Ajustes de Banco de Dados";
$lang_main_databasesetex="Especifique aqui se vai utilizar um banco de dados de texto ou MySQL.";
$lang_main_mysql="Usar mySQL?";
$lang_main_mysql_help="Deseja usar mySQL ou um arquivo de texto?";
$lang_main_hostname="Nome do Host :";
$lang_main_hostname_help="Host do Banco de Dados";
$lang_main_databaseuser="Nome do usu�rio :";
$lang_main_databaseuser_help="Nome do usu�rio para login no Banco de Dados";
$lang_main_databasepass="Senha :";
$lang_main_databasepass_help="Sua senha para login no Banco de Dados";
$lang_main_databasename="Nome do Banco de Dados:";
$lang_main_databasename_help="Nome do Banco de Dados onde se encontram as tabelas";
$lang_main_emailex="Aqui poder� definir como seus e-mails s�o enviados e se quiser pode mudar as varias op��es de propriedades de seu e-mail. Tamb�m poser� especificar outras facilidades, como por exemplo...se inclui ou n�o um link de descadastrar .";
$lang_main_emailname="Nome do Remetente :";
$lang_main_emailname_help="Nome do remetente da lista de e-mail";
$lang_main_emailadress="Enviar e-mail pelo endere�o do remetente :";
$lang_main_emailadress_help="Endere�o de e-mail do remetente!";
$lang_main_thankstitle="T�tulo da mensagem de agradecimento :";
$lang_main_thankstitle_help="Titulo do e-mail para mensagens de agradecimento";
$lang_main_thanksmessage="Mensagem texto de agradecimento :";
$lang_main_thanksmessage_help="Esta � a mensagem que o usu�rio receber� quando registrar-se com exito no website!";
$lang_main_unsubscribe="Mensagem de descadastramento :";
$lang_main_unsubscribe_help="Esta � a mensagem de descadastramento ";
$lang_main_verify="Mensagem para confirmar a inscri��o :";
$lang_main_verify_help="Esta � a mensagem incluida no e-mail de confirma��o de inscri��o!";
$lang_main_includeunsubscribe="Incluir link de descadastramento :";
$lang_main_includeunsubscribe_help="No e-mail aparecer� um link para descadastramento no final da mensagem.";
$lang_yes="Sim";
$lang_no="N�o";
$lang_main_thankmail="Mensagem de agradecimento :";
$lang_main_thankmail_help="Enviar mensagem de agradecimento com a confirma��o. ";
$lang_main_verification="Verifica��o do endere�o de e-mail :";
$lang_main_verification_help="O endere�o de e-mail do inscrito somente ser� cadastrado quando confirma-lo.";
$lang_main_htmlarea="Ativar Editor HTML no formul�rio de envio";
$lang_main_htmlarea_help="Mostrar Editor HTML no formul�rio de envio!";
$lang_main_images="Inserir imagens no e-mail :";
$lang_main_images_help="Se estiver ativada esta op��o, as imagens ser�o inseridas";
$lang_main_securityex="Aqui poder� introduzir um nome de usu�rio e senha para ter acesso � administra��o";
$lang_main_username="Nome de usu�rio :";
$lang_main_username_help="Nome de usuario do administrador";
$lang_main_password="Senha :";
$lang_main_password_help="Senha do Administrador";
$lang_main_mailserver="Servidor de E-amail";
$lang_main_mailserverex="Aqui poder� selecionar o m�todo de envio de e-amil. O melhor a ser utilizado � \"PHP's mail\"";
$lang_main_selectmethod="Selecione o m�todo para o envio de e-mail :";
$lang_main_selectmethod_help="Selecione o m�todo para o envio de e-mail";
$lang_main_sendmail="Caminho do Sendmail";
$lang_main_sendmail_help="Por favor especifique o caminho do Sendmail, se n�o sabe, entre em contato com o Administrador do Provedor de Hospedagem.";
$lang_main_smtpserver="Nome do servidor SMTP";
$lang_main_smtpserver_help="Este � o endere�o do servidor SMTP";
$lang_main_smtpauthentication="Autentica��o";
$lang_main_smtpauthentication_help="Se o servidor SMTP prescisa de nome de usu�rio senha, favor digitar aqui";
$lang_main_smtpuser="Nome de usu�rio";
$lang_main_smtpuser_help="Nome usu�rio";
$lang_main_smtppass="Senha";
$lang_main_update="Atualizar";

/*sendmail */
$lang_sendmail_suberror="Por favor, introduza um Assunto";
$lang_sendmail_fillerror="Por favor, especifique se � texto ou html";
$lang_sendmail_send="Processo de envio";
$lang_sendmail_sendex="Introduza aqui tudo que for necess�rio para enviar o e-mail";
$lang_sendmail_sendselect="Selecione aqui o tipo de envio e introduza os dados necess�rios.";
$lang_sendmail_from="Remetente";
$lang_sendmail_subject="Assunto";
$lang_sendmail_text="Vers�o em texto";
$lang_sendmail_textversion="<strong>Vers�o texto </strong>do E-mail : <br> <font color=#999999>Escreva ou copie aqui o texto de sua mensagem </font>";
$lang_sendmail_htmlversion="<strong>Vers�o HTML</strong> do E-mail : <br> <font color=#999999>Escreva ou copie aqui c�digo HTML com o texto de sua mensagem</font>";
$lang_sendmail_textversion_view="<strong>Vers�o Texto </strong>do E-mail : <br> ";
$lang_sendmail_htmlversion_view="<strong>HTML Version</strong> do E-mail : <br> ";
$lang_sendmail_selecttemplate="Selecione um modelo";
$lang_sendmail_usetemplate="Usar Modelos";
$lang_sendmail_selecttemplate="Seleccione um modelo";
$lang_sendmail_selectdraft="Selecione um rascunho modelo (assinatura)";
$lang_sendmail_errortemplate="Erro : Imposs�vel ativar um diret�rio de modelos!!";
$lang_sendmail_errordrafts="Erro : Imposs�vel ativar um diret�rio de rascunho modelo (assinatura)!!";
$lang_sendmail_helptemplate="Para saber como alterar os modelos consulte a p�gina de ajuda.";
$lang_sendmail_attachment="Anexar";
$lang_sendmail_sendbutton="Enviar";
$lang_sendmail_nextbutton="Seguinte";
$lang_sendmail_backbutton="Anterior";
$lang_sendmail_stage1="Passo 1/3";
$lang_sendmail_stage2="Passo 2/3";
$lang_sendmail_stage3="Passo 3/3";
$lang_sendmail_to="Enviar e-mail para: ";
$lang_sendmail_to_help="Por favor escolha para quem deseja enviar o e-mail ";
$lang_sendmail_emailID="ID do e-mail";
$lang_sendmail_emailID_help="Indique o n�mero de identificac�o de contato (ID) do desinat�rio";
$lang_sendmail_group="Enviar um e-mail para um grupo";
$lang_sendmail_group_help="Por favor selecione o grupo que desja enviar um e-mail";
$lang_sendmail_single_error="Voc� n�o especificou o endere�o ou o ID do destinat�rio";
$lang_sendmail_group_error="Voc� n�o especificou o grupo ao qual vai ser enviado o e-mail";
$lang_sendmail_wysiwyg="Clique aqui para iniciar o editor de texto com formata��o";
$lang_sendmail_single="Para apenas um destinat�rio";
$lang_sendmail_group="Para um grupo espec�fico";
$lang_sendmail_every="Para todos os destinat�rios";

/*edit sending */
$lang_send_wait="Um momento por favor ... <br><br> Enviando e-mail";
$lang_send_done="Enviado com sucesso !!<br><br>";
$lang_send_mailing="O sitema de newsletter est� enviando os os e-mails ...";

/*edit wysiwyg */
$lang_editwin_edit="Editor de texto com formata��o";
$lang_editwin_help="Editar o HTML em um editor de HTML avan�ado";

/*edit maillist members */
$lang_edit_list="Editar a lista de e-mail";
$lang_edit_listex="Poder� adicionar, editar e procurar registros por aqui.";
$lang_edit_new="Introduza um novo endere�o de e-mail";
$lang_edit_new_name="Introduza um novo nome para o endere�o de e-mail :";
$lang_edit_nomailgroup="Especifique um grupo de envio";
$lang_edit_expression="Introduza uma express�o para a pesquisa";
$lang_edit_correct="Introduza o endere�o de e-mail correto :";
$lang_edit_correct_name="Introduza o nome correto :";
$lang_edit_delete="Deseja apagar o seguinte endere�o?";
$lang_edit_jump="---- Ir para ----";
$lang_edit_jump_group="---- Selecione um Grupo ----";
$lang_edit_import="Importar";
$lang_edit_export="Exportar";
$lang_edit_add="Adicionar";
$lang_edit_search="Pesquisar";
$lang_edit_refresh="Atualizar";
$lang_edit_editdata="Editar endere�os do Banco de Dados";
$lang_edit_editdataex="Selecione o registro que deseja trocar ou modificar.";
$lang_edit_submitted="Adicionado";
$lang_edit_ip="Endere�o IP";
$lang_edit_ipedit="Atualizar";
$lang_edit_ipdelete="Apagar";
$lang_edit_select="<Br><br><center>...Por favor selecione um grupo para modificar...</center><Br><br>";

/*edit maillist members */
$lang_editg_deleted="<br><br><center>O grupo <strong>{group}</strong> foi apagado! !!</center><br><br>";
$lang_editg_added="<br><br><center>O grupo <strong>{group}</strong> foi adicionado!!!</center><br><br>";
$lang_editg_added_error="<br><br><center>O grupo <strong>{group}</strong> j� existe! !!</center><br><br>";
$lang_editg_adit="<br><br><center>O grupo <strong>{group}</strong> foi editado! !!</center><br><br>";
$lang_editg_list="Editar grupos de e-mail";
$lang_editg_listex="Voc� poder� adicionar, pequisar e modificar os grupos de e-mail aqui ";
$lang_editg_new_name="Por favor introduza o nome do novo grupo � ser adicionado";
$lang_editg_new="Por favor introduza uma identifica��o unica para este grupo";
$lang_editg_expression="Por favor introduza um grupo para pequisar no Banco de Dados";
$lang_editg_correct="Por favor, introduza o ID correto do grupo :";
$lang_editg_correct_name="Por favor, introduza o nome correto do grupo :";
$lang_editg_delete="Esta certo em apagar o grupo? :";
$lang_editg_jump="---- Ir para ----";
$lang_editg_add="Adicionar Grupo";
$lang_editg_search="Pesquisar";
$lang_editg_refresh="Atualizar";
$lang_editg_editdata="Editar registro do Banco de Dados";
$lang_editg_editdataex="Selecione um grupo que deseja modificar.";
$lang_editg_ipedit="Editar";
$lang_editg_ipdelete="Apagar";
$lang_editg_subscribers="Destinat�rios";
$lang_editg_name="Nome de Grupo ( ID )";

/*edit maillist history */
$lang_edith_title="Hist�rico de Envios";
$lang_edith_titlex="Lista com hist�rico de todos os e-mails enviados";
$lang_edith_editdata="Historico de e-mail enviados";
$lang_edith_editdataex="Por favor selecione uma opera��o que voc� deseja para apresentar por um link.";
$lang_edith_date="Data";
$lang_edith_edit="Reenviar";
$lang_edith_to="Enviado para";
$lang_edith_delete="Apagar";
$lang_edith_delete_history="Quer apagar o neme desta tarefa: ";
$lang_edith_subject="Assunto ";

/*diagnostics */
$lang_diag_simple="Simples diagn�stico";
$lang_diag_simpleex="Esta p�gina � para um simples check-up de arquivos que tenham ou n�o permiss�o para serem escritos.";
$lang_diag_status="Estatus";
$lang_diag_checking="Verificando / erro";
$lang_diag_globals="Se houver erros � porque o arquivo n�o tem permiss�o para ser escrito. Altere a permiss�o.";

$lang_diag_temp="Se houver erros � porque o diret�rio temp/ n�o tem permiss�o para ser escrito. Altere a permiss�o.";

/*import */
$lang_import_adress="Importar Endere�os";
$lang_import_adressex="aqui poder� importar seus endere�os de e-mail.";
$lang_import_import="Arquivo para importar";
$lang_import_import_help="Selecione o arquivo de onde deseja importar os endere�os de e-mail. Os endere�os s�o arquivados linha por linha.";
$lang_import_next="Seguinte";
$lang_import_group="Importar Grupo : ";
$lang_import_group_help="Este � o grupo de onde ser�o importados os endere�os";
$lang_import_close="Fechar";

/*mainnn inc files */
$lang_email_thanks="Obrigado por cadastrar-se";
$lang_emailexist_error="Erro no cadastro";
$lang_emailexist_adress="O endere�o de e-mail {email} j� est� cadastrado no banco de Dados.";
$lang_emailexist_adress_error="O endere�o de e-mail {email} n�o existe no Banco de Dados.";
$lang_emailreg_verify="Um e-mail foi enviado para {email}. Favor confirmar clicando sobre o linque que est� na mensagem.";
$lang_emailreg_done="O endere�o de e-mail {email} foi adicionado com sucesso no Banco de Dados.";
$lang_emailunreg_done="O endere�o de e-mail {email} foi apagado do Banco de Dados. ";
$lang_emailremove_removed="Apagando o e-mail";
$lang_emailremove_adress="O endere�o {email} de e-mail foi apagado do Banco de Dados..";
/*editor */
$lang_htmledit_cancel="Cancelar";
$lang_htmledit_reset="Restaurar";
$lang_htmledit_save="Salvar";

/*Search */
$lang_search_email="Emails Searchs";
$lang_search_emailex="Here, you can make an avanced search in the Email list";
$lang_search_group="Search in this groups: ";
$lang_search_group_help="The Search will be made in this group";
$lang_search_text="Search Text";
$lang_search="Search";
$lang_search_text_help="In order to look for ex. hotmail.com, try *@hotmail.com, it is used <strong>*</strong> like jokers, if you want to search for ex. webmaster, look for webmaster@*";
$lang_search_allgroups="On all Groups";
$lang_search_text_filter="Total Found";

/* addons*/
$lang_total_group_entries="Total Group Entries:";
$lang_email_name="Email ( Name )";
$lang_send_email="Send a Email";
$lang_show_all_group="Show All Groups";
$lang_see_group="Show Group";

/* charset iso */
$lang_charsetiso[1]="8859-1 - western Europe (Latin-1)";
$lang_charsetiso[2]="8859-2 - Eastern Europe (Latin-2)";
$lang_charsetiso[3]="8859-3 - Southeast of Europe & more (Latin-3)";
$lang_charsetiso[4]="8859-4 - Scandinavian/Balkan (Latin-4)";
$lang_charsetiso[5]="8859-5 - Lat�n/Cyrillic";
$lang_charsetiso[6]="8859-6 - Lat�n/Arab";
$lang_charsetiso[7]="8859-7 - Lat�n/Greek";
$lang_charsetiso[8]="8859-8 - Lat�n/Hebrew";
$lang_charsetiso[9]="8859-9 - Modification Latin-1 Turkish (Latin-5)";
$lang_charsetiso[10]="8859-10 - Lappish/Norway/Eskimo (Latin-6)";
$lang_charsetiso[11]="8859-11 - Thailand";
$lang_charsetiso[12]="8859-12 - Celtic (Latin-7)";
$lang_charsetiso[13]="8859-13 - Baltic (Latin-7)";
$lang_charsetiso[14]="8859-14 - Celtic (Latin-8)";
$lang_charsetiso[15]="8859-15 - Western Europe (Latin-9)";
$lang_charsetiso[16]="8859-16 - South-Eastern European (Latin-10)";
$lang_charsetiso[25]="UTF-8 - Unicode";
$lang_charsetiso[26]="WIN1256 - - Arabic & Persian HTML";//win1256
$lang_charsetiso[27]="CP-866 - Russia";
$lang_charsetiso[28]="TIS-620 - Thailand";
$lang_charsetiso[29]="EUC - Japanese";
$lang_charsetiso[30]="SJIS - Japanese";
$lang_charsetiso[31]="EUC-KR - Korea";
$lang_charsetiso[32]="KOI8-R - Russia";
$lang_charsetiso[33]="GB2312 - Chinese Simplified";
$lang_charsetiso[34]="BIG5 - Chinese Traditional";
$lang_charsetiso[35]="windows-1251 - Bulgaria";

/* new translations*/
$lang_sendmail_everyone="You have chosen to send email to every one in the database";
$lang_main_charsetiso_help="The type of Charset-iso for you email list";
$lang_main_charset="Charset-Iso To Send";
$lang_main_priority_help="The priority of the sending email list";
$lang_priority_text="Priority";
$lang_priority_high="High";
$lang_priority_normal="Normal";
$lang_priority_low="Low";
$lang_sendmail_fromerror="You forgot to fill in Email From";
$lang_sendmail_templateName="Template name";
$lang_sendmail_TemplateAuthor="Template Author";
$lang_sendmail_templateDescription="Description";
$lang_sendmail_templateHomepage="Homepage";
$lang_sendmail_templateNone="None";
?>
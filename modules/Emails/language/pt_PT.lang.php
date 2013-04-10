<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/master-subscription-agreement
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2012 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_ARCHIVED_EMAILS_CREATE' => 'Criar',
  'LBL_EMAIL_SELECTOR_SELECT' => 'Seleccionar',
  'LBL_EMAIL_SELECTOR_CLEAR' => 'Limpar',
  'LBL_FW' => 'FW:',
  'LBL_RE' => 'RE:',
  'LBL_BCC' => 'Bcc:',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
  'LBL_CC' => 'Cc:',
  'LBL_COLON' => ':',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_SAVE_AS_DRAFT_BUTTON_KEY' => 'R',
  'LBL_SEND_BUTTON_KEY' => 'S',
  'LBL_BUTTON_RAW_KEY' => 'e',
  'LBL_BUTTON_CHECK_KEY' => 'c',
  'LBL_BUTTON_FORWARD_KEY' => 'f',
  'LBL_BUTTON_REPLY_KEY' => 'r',
  'LBL_LIST_BUG' => 'Bugs',
  'LBL_LIST_LEAD' => 'Leads',
  'LBL_BUTTON_DISTRIBUTE_KEY' => 'a',
  'LBL_BUTTON_GRAB_KEY' => 't',
  'LBL_TAKE_ONE_TITLE' => 'Reps',
  'LBL_ADD_CC_BCC_SEP' => '|',
  'LBL_GMAIL_LOGO' => 'Gmail',
  'LBL_YAHOO_MAIL' => 'Yahoo',
  'LBL_EXCHANGE_LOGO' => 'Exchange',
  'LBL_BUTTON_CREATE' => 'Criar',
  'LBL_BUTTON_EDIT' => 'Editar',
  'LBL_QS_DISABLED' => '(Pesquisa Rápida não está disponível para este módulo. Por favor utilize o botão seleccionar.)',
  'LBL_SIGNATURE_PREPEND' => 'Assinatura acima da resposta?',
  'LBL_EMAIL_DEFAULT_DESCRIPTION' => 'Eis a cotação que pediu (Pode mudar este texto)',
  'LBL_EMAIL_QUOTE_FOR' => 'Cotação para:',
  'LBL_QUOTE_LAYOUT_DOES_NOT_EXIST_ERROR' => 'ficheiro de layout da cotação não existe: $layout',
  'LBL_QUOTE_LAYOUT_REGISTERED_ERROR' => 'layout da cotação não está registado em modules/Quotes/Layouts.php',
  'LBL_CONFIRM_DELETE' => 'Tem certeza que pretende eliminar esta pasta?',
  'LBL_ENTER_FOLDER_NAME' => 'Por favor insira um nome de pasta',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Cotações',
  'LBL_EMAILS_QUOTES_REL' => 'E-mails: Cotações',
  'LBL_ERROR_SELECT_REPORT' => 'Por favor seleccione um relatório',
  'LBL_ERROR_SELECT_MODULE_SELECT' => 'Por favor seleccione um nome clicando no botão seleccionar ao lado do campo Referente a',
  'LBL_ERROR_SELECT_MODULE' => 'Por favor seleccione um módulo para o campo Referente a',
  'ERR_ARCHIVE_EMAIL' => 'Erro: Seleccionar os e-mails a arquivar.',
  'ERR_DATE_START' => 'Data de Envio',
  'ERR_DELETE_RECORD' => 'Erro: Um número de registo deverá ser especificado para eliminar a entidade.',
  'ERR_NOT_ADDRESSED' => 'Erro: O e-mail deverá conter um endereço Para, Cc ou Bcc',
  'ERR_TIME_START' => 'Hora de Início',
  'ERR_TIME_SENT' => 'Hora de Envio',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Entidades',
  'LBL_ADD_ANOTHER_FILE' => 'Adicionar Outro Ficheiro',
  'LBL_ADD_DASHLETS' => 'Adicionar Dashlets',
  'LBL_ADD_DOCUMENT' => 'Adicionar do módulo de Documentos',
  'LBL_ADD_ENTRIES' => 'Adicionar Entradas',
  'LBL_ADD_FILE' => 'Adicionar Ficheiros',
  'LBL_ARCHIVED_EMAIL' => 'E-mail Arquivado',
  'LBL_ARCHIVED_MODULE_NAME' => 'Arquivar E-mails',
  'LBL_ATTACHMENTS' => 'Anexos:',
  'LBL_HAS_ATTACHMENT' => 'Tem anexo?:',
  'LBL_BODY' => 'Corpo:',
  'LBL_COMPOSE_MODULE_NAME' => 'Escrever E-mail',
  'LBL_CONTACT_FIRST_NAME' => 'Primeiro Nome do Contacto',
  'LBL_CONTACT_LAST_NAME' => 'Sobrenome do Contacto',
  'LBL_CONTACT_NAME' => 'Contacto:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
  'LBL_CREATED_BY' => 'Criado por',
  'LBL_DATE_AND_TIME' => 'Data e Hora de Envio:',
  'LBL_DATE_SENT' => 'Data de Envio:',
  'LBL_DATE' => 'Data de Envio:',
  'LBL_DELETE_FROM_SERVER' => 'Eliminar mensagem do servidor',
  'LBL_DESCRIPTION' => 'Descrição',
  'LBL_EDIT_ALT_TEXT' => 'Editar Texto Alternativo',
  'LBL_SEND_IN_PLAIN_TEXT' => 'Enviar como texto simples',
  'LBL_EDIT_MY_SETTINGS' => 'Editar as Minhas Definições',
  'LBL_EMAIL_ATTACHMENT' => 'Anexo do E-mail',
  'LBL_EMAIL_EDITOR_OPTION' => 'Enviar E-mail em formato HTML',
  'LBL_EMAIL' => 'E-mail:',
  'LBL_EMAILS_ACCOUNTS_REL' => 'Contas de E-mail',
  'LBL_EMAILS_BUGS_REL' => 'E-mails: Bugs',
  'LBL_EMAILS_CASES_REL' => 'E-mails: Ocorrências',
  'LBL_EMAILS_CONTACTS_REL' => 'E-mails: Contactos',
  'LBL_EMAILS_LEADS_REL' => 'E-mails: Leads',
  'LBL_EMAILS_OPPORTUNITIES_REL' => 'E-mails: Oportunidades',
  'LBL_EMAILS_NOTES_REL' => 'E-mails: Notas ou Anexos',
  'LBL_EMAILS_PROJECT_REL' => 'E-mails: Projecto',
  'LBL_EMAILS_PROJECT_TASK_REL' => 'E-mails: Tarefa de Projecto',
  'LBL_EMAILS_PROSPECT_REL' => 'E-mails: Potenciais Clientes',
  'LBL_EMAILS_TASKS_REL' => 'E-mails: Tarefas',
  'LBL_EMAILS_USERS_REL' => 'E-mails: Utilizadores',
  'LBL_EMPTY_FOLDER' => 'Nenhuns E-mails a exibir',
  'LBL_ERROR_SENDING_EMAIL' => 'Erro ao enviar o e-mail',
  'LBL_ERROR_SAVING_DRAFT' => 'Erro ao gravar rascunho',
  'LBL_FORWARD_HEADER' => 'Iniciar a mensagem encaminhada:',
  'LBL_FROM_NAME' => 'Nome De',
  'LBL_FROM' => 'De:',
  'LBL_REPLY_TO' => 'Responder A:',
  'LBL_HTML_BODY' => 'Corpo em HTML',
  'LBL_INVITEE' => 'Destinatários',
  'LBL_MESSAGE_SENT' => 'Mensagem Enviada',
  'LBL_MODIFIED_BY' => 'Modificado Por',
  'LBL_MODULE_NAME_NEW' => 'Arquivar E-mail',
  'LBL_MODULE_NAME' => 'Todos os E-mails',
  'LBL_MODULE_TITLE' => 'E-mails:',
  'LBL_MY_EMAILS' => 'Os Meus E-mails',
  'LBL_NEW_FORM_TITLE' => 'Arquivar E-mail',
  'LBL_NONE' => 'Nenhum',
  'LBL_NOT_SENT' => 'Erro no Envio',
  'LBL_NOTE_SEMICOLON' => 'Nota: Use o ponto-e-vírgula como separador para vários endereços de e-mail.',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Anexos',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Oportunidades',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projectos',
  'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Tarefas de Projectos',
  'LBL_RAW' => 'Email Geral',
  'LBL_SAVE_AS_DRAFT_BUTTON_LABEL' => 'Gravar como Rascunho',
  'LBL_SAVE_AS_DRAFT_BUTTON_TITLE' => 'Gravar como Rascunho [Alt+R]',
  'LBL_SEARCH_FORM_DRAFTS_TITLE' => 'Pesquisar Rascunhos',
  'LBL_SEARCH_FORM_SENT_TITLE' => 'Pesquisar E-mails Enviados',
  'LBL_SEARCH_FORM_TITLE' => 'Pesquisar E-mails',
  'LBL_SEND_ANYWAYS' => 'Este e-mail está sem assunto. Enviar / Gravar mesmo assim?',
  'LBL_SEND_BUTTON_LABEL' => 'Enviar',
  'LBL_SEND_BUTTON_TITLE' => 'Enviar [Alt+S]',
  'LBL_SEND' => 'ENVIAR',
  'LBL_SENT_MODULE_NAME' => 'E-mails Enviados',
  'LBL_SHOW_ALT_TEXT' => 'Mostrar Texto Alternativo',
  'LBL_SIGNATURE' => 'Assinatura',
  'LBL_SUBJECT' => 'Assunto:',
  'LBL_TEXT_BODY' => 'Corpo do Texto',
  'LBL_TIME' => 'Hora de Envio:',
  'LBL_TO_ADDRS' => 'Para',
  'LBL_USE_TEMPLATE' => 'Usar Modelo:',
  'LBL_USERS_SUBPANEL_TITLE' => 'Utilizadores',
  'LBL_USERS' => 'Utilizadores',
  'LNK_ALL_EMAIL_LIST' => 'Todos os E-mails',
  'LNK_ARCHIVED_EMAIL_LIST' => 'Lista de E-mails',
  'LNK_CALL_LIST' => 'Chamadas Telefónicas',
  'LNK_DRAFTS_EMAIL_LIST' => 'Todos os Rascunhos',
  'LNK_EMAIL_LIST' => 'E-mails',
  'LBL_EMAIL_RELATE' => 'Referente a',
  'LNK_EMAIL_TEMPLATE_LIST' => 'Modelos de E-mail',
  'LNK_MEETING_LIST' => 'Reuniões',
  'LNK_NEW_ARCHIVE_EMAIL' => 'Arquivar E-mail',
  'LNK_NEW_CALL' => 'Criar Nova Chamada Telefónica',
  'LNK_NEW_EMAIL_TEMPLATE' => 'Criar Modelo de E-mail',
  'LNK_NEW_EMAIL' => 'Escrever E-mail',
  'LNK_NEW_MEETING' => 'Criar Nova Reunião',
  'LNK_NEW_NOTE' => 'Criar Nova Nota',
  'LNK_NEW_SEND_EMAIL' => 'Escrever E-mail',
  'LNK_NEW_TASK' => 'Criar Nova Tarefa',
  'LNK_NOTE_LIST' => 'Notas ou Anexos',
  'LNK_SENT_EMAIL_LIST' => 'E-mails Enviados',
  'LNK_TASK_LIST' => 'Tarefas',
  'LNK_VIEW_CALENDAR' => 'Hoje',
  'LBL_LIST_ASSIGNED' => 'Atribuído',
  'LBL_LIST_CONTACT_NAME' => 'Nome do Contacto',
  'LBL_LIST_CREATED' => 'Criado',
  'LBL_LIST_DATE_SENT' => 'Data de Envio',
  'LBL_LIST_DATE' => 'Data de Envio',
  'LBL_LIST_FORM_DRAFTS_TITLE' => 'Rascunho',
  'LBL_LIST_FORM_SENT_TITLE' => 'E-mails Enviados',
  'LBL_LIST_FORM_TITLE' => 'Lista de E-mails',
  'LBL_LIST_FROM_ADDR' => 'De',
  'LBL_LIST_RELATED_TO' => 'Referente a',
  'LBL_LIST_SUBJECT' => 'Assunto',
  'LBL_LIST_TIME' => 'Hora de Envio',
  'LBL_LIST_TO_ADDR' => 'Para',
  'LBL_LIST_TYPE' => 'Tipo',
  'NTC_REMOVE_INVITEE' => 'Tem certeza de que pretende eliminar este destinatário do e-mail?',
  'WARNING_SETTINGS_NOT_CONF' => 'Atenção: As suas configurações de e-mail não estão definidas para o envio do mesmo.',
  'WARNING_NO_UPLOAD_DIR' => 'Os anexos podem falhar: Nenhum valor para o parâmetro "upload_tmp_dir" foi detectado. Por favor corrija o seu ficheiro php.ini.',
  'WARNING_UPLOAD_DIR_NOT_WRITABLE' => 'Os anexos podem falhar: Um valor incorrecto ou não usual para o parâmetro "upload_tmp_dir" foi detectado. Por favor corrija o seu ficheiro php.ini.',
  'LBL_BUTTON_RAW_TITLE' => 'Mostrar Mensagem Geral [Alt+E]',
  'LBL_BUTTON_RAW_LABEL' => 'Mostrar Geral',
  'LBL_BUTTON_RAW_LABEL_HIDE' => 'Esconder Geral',
  'LBL_BUTTON_CHECK' => 'Verificar se tem novos E-mails',
  'LBL_BUTTON_CHECK_TITLE' => 'Verificar se tem novos E-mails [Alt+C]',
  'LBL_BUTTON_FORWARD' => 'Encaminhar',
  'LBL_BUTTON_FORWARD_TITLE' => 'Encaminhar este E-mail [Alt+F]',
  'LBL_BUTTON_REPLY_TITLE' => 'Responder [Alt+R]',
  'LBL_BUTTON_REPLY' => 'Responder',
  'LBL_CASES_SUBPANEL_TITLE' => 'Ocorrências',
  'LBL_INBOUND_TITLE' => 'E-mail Recebido',
  'LBL_INTENT' => 'Intenção',
  'LBL_MESSAGE_ID' => 'ID da Mensagem',
  'LBL_REPLY_HEADER_1' => 'Em',
  'LBL_REPLY_HEADER_2' => 'escreveu:',
  'LBL_REPLY_TO_ADDRESS' => 'Endereço de Resposta',
  'LBL_REPLY_TO_NAME' => 'Nome de Resposta',
  'LBL_LIST_CASE' => 'Ocorrências',
  'LBL_LIST_CONTACT' => 'Contactos',
  'LBL_LIST_TASK' => 'Tarefas',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilizador',
  'LBL_ALL' => 'Todos',
  'LBL_ASSIGN_WARN' => 'Assegure-se de que as 2 opções estão seleccionadas.',
  'LBL_BACK_TO_GROUP' => 'Voltar para a Caixa de E-mails de Entrada de Grupo',
  'LBL_BUTTON_DISTRIBUTE_TITLE' => 'Atribuir [Alt+A]',
  'LBL_BUTTON_DISTRIBUTE' => 'Atribuir',
  'LBL_BUTTON_GRAB_TITLE' => 'Capturar do Grupo [Alt+T]',
  'LBL_BUTTON_GRAB' => 'Capturar do Grupo',
  'LBL_CREATE_BUG' => 'Criar Bug',
  'LBL_CREATE_CASE' => 'Criar Ocorrência',
  'LBL_CREATE_CONTACT' => 'Criar Contacto',
  'LBL_CREATE_LEAD' => 'Criar Lead',
  'LBL_CREATE_TASK' => 'Criar Tarefa',
  'LBL_DIST_TITLE' => 'Atribuição',
  'LBL_LOCK_FAIL_DESC' => 'O item escolhido não está disponível de momento.',
  'LBL_LOCK_FAIL_USER' => 'não tem propriedade.',
  'LBL_MASS_DELETE_ERROR' => 'Nenhum dos itens seleccionados foi submetido à eliminação.',
  'LBL_NEW' => 'Novo',
  'LBL_NEXT_EMAIL' => 'Próximo Item Livre',
  'LBL_NO_GRAB_DESC' => 'Não existiam itens disponíveis. Por favor tente novamente.',
  'LBL_QUICK_REPLY' => 'Resposta',
  'LBL_REPLIED' => 'Respondido',
  'LBL_SELECT_TEAM' => 'Equipas Seleccionadas',
  'LBL_TITLE_SEARCH_RESULTS' => 'Pesquisar Resultados',
  'LBL_TO' => 'Para:',
  'LBL_TOGGLE_ALL' => 'Marcar todos',
  'LBL_UNKNOWN' => 'Desconhecido',
  'LBL_UNREAD_HOME' => 'E-mails Não Lidos',
  'LBL_UNREAD' => 'Não Lido',
  'LBL_USE_ALL' => 'Pesquisar Todos os Resultados',
  'LBL_USE_CHECKED' => 'Apenas os Seleccionados',
  'LBL_USE_MAILBOX_INFO' => 'Usar o Endereço da Caixa Postal De:',
  'LBL_USE' => 'Atribuir:',
  'LBL_ASSIGN_SELECTED_RESULTS_TO' => 'Atribuir Resultados Seleccionados A:',
  'LBL_USER_SELECT' => 'Seleccionar Utilizadores',
  'LBL_USING_RULES' => 'Utilizando Funções:',
  'LBL_WARN_NO_DIST' => 'Nenhum Método de Distribuição Seleccionado',
  'LBL_WARN_NO_USERS' => 'Nenhum Utilizador está seleccionado',
  'LBL_WARN_NO_USERS_OR_TEAM' => 'Por favor, seleccione um utilizador ou equipa para a atribuição.',
  'LBL_IMPORT_STATUS_TITLE' => 'Estado',
  'LBL_LIST_STATUS' => 'Estado',
  'LBL_LIST_TITLE_GROUP_INBOX' => 'Caixa de Entrada do Grupo',
  'LBL_LIST_TITLE_MY_DRAFTS' => 'Os Meus Rascunhos',
  'LBL_LIST_TITLE_MY_INBOX' => 'A Minha Caixa de Entrada',
  'LBL_LIST_TITLE_MY_SENT' => 'Os Meus E-mails Enviados',
  'LBL_LIST_TITLE_MY_ARCHIVES' => 'Os Meus E-mails Arquivados',
  'LBL_ACTIVITIES_REPORTS' => 'Relatório de Actividades',
  'LNK_CHECK_MY_INBOX' => 'Verificar o Meu E-mail',
  'LNK_DATE_SENT' => 'Data de Envio',
  'LNK_GROUP_INBOX' => 'Caixa de Entrada do Grupo',
  'LNK_MY_DRAFTS' => 'Os Meus Rascunhos',
  'LNK_MY_INBOX' => 'A Minha Caixa de Entrada',
  'LNK_VIEW_MY_INBOX' => 'Ver o Meu e-mail',
  'LNK_QUICK_REPLY' => 'Responder',
  'LNK_MY_ARCHIVED_LIST' => 'Os Meus Arquivos',
  'LBL_EMAILS_NO_PRIMARY_TEAM_SPECIFIED' => 'Nenhuma Equipa Principal especificada',
  'LBL_ASSIGNED_TO' => 'Atribuído A:',
  'LBL_MEMBER_OF' => 'Precedente',
  'LBL_QUICK_CREATE' => 'Criar Rápido',
  'LBL_STATUS' => 'Estado do E-mail:',
  'LBL_EMAIL_FLAGGED' => 'Assinalado:',
  'LBL_EMAIL_REPLY_TO_STATUS' => 'Estado da Resposta:',
  'LBL_TYPE' => 'Tipo:',
  'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE' => 'Por favor verifique!',
  'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG' => 'Ao seleccionar este modelo irá sobrescrever quaisquer dados já introduzidos dentro do corpo do e-mail. Pretende continuar?',
  'LBL_EMAILTEMPLATE_MESSAGE_CLEAR_MSG' => 'Seleccionando "--Nenhum--" vai limpar todos os dados já inseridos no corpo do email. Deseja continuar?',
  'LBL_EMAILTEMPLATE_MESSAGE_WARNING_TITLE' => 'Aviso',
  'LBL_EMAILTEMPLATE_MESSAGE_MULTIPLE_RECIPIENTS' => 'Usar um template de email que contenha variáveis de contacto, como nome de contacto, para enviar e-mails para vários recipientes poderá dar resultados inesperados. É recomendado que seja usado uma campanha de email para envio massivo de mails.',
  'LBL_CHECK_ATTACHMENTS' => 'Por Favor Verifique os Anexos!',
  'LBL_HAS_ATTACHMENTS' => 'Este e-mail já contém anexos(s). Pretende manter o(s) anexo(s)?',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Faltam campos obrigatórios:',
  'ERR_INVALID_REQUIRED_FIELDS' => 'Campo obrigatório inválido',
  'LBL_FILTER_BY_RELATED_BEAN' => 'Apenas exibir recipientes relacionados',
  'LBL_RECIPIENTS_HAVE_BEEN_ADDED' => 'Os destinatários foram adicionados.',
  'LBL_ADD_INBOUND_ACCOUNT' => 'Adicionar',
  'LBL_ADD_OUTBOUND_ACCOUNT' => 'Adicionar',
  'LBL_EMAIL_ACCOUNTS_INBOUND' => 'Propriedades da conta de e-mail',
  'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNT' => 'Servidor SMTP',
  'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNTS' => 'Servidores SMTP',
  'LBL_EMAIL_SETTINGS_INBOUND_ACCOUNTS' => 'Contas de Correio',
  'LBL_EMAIL_SETTINGS_INBOUND' => 'E-mail de entrada',
  'LBL_EMAIL_SETTINGS_OUTBOUND' => 'E-mail de saída',
  'LBL_ADD_CC' => 'Adicionar Cc',
  'LBL_ADD_BCC' => 'Adicionar Bcc',
  'LBL_ADD_TO_ADDR' => 'Adicionar Para',
  'LBL_SELECTED_ADDR' => 'Seleccionado',
  'LBL_SEND_EMAIL_FAIL_TITLE' => 'Mensagem Não Pode Ser Enviada',
  'LBL_EMAIL_DETAIL_VIEW_SHOW' => 'exibir',
  'LBL_EMAIL_DETAIL_VIEW_MORE' => 'mais',
  'LBL_MORE_OPTIONS' => 'Mais',
  'LBL_LESS_OPTIONS' => 'Menos',
  'LBL_MAILBOX_TYPE_PERSONAL' => 'Pessoal',
  'LBL_MAILBOX_TYPE_GROUP' => 'Grupo',
  'LBL_MAILBOX_TYPE_GROUP_FOLDER' => 'Grupo - Importação Automática',
  'LBL_SEARCH_FOR' => 'Procurar',
  'LBL_EMAIL_INBOUND_TYPE_HELP' => '<b>Pessoal:</b> conta de e-mail acessível por si. Só você pode gerir e importar e-mails dessa conta.<br> <b>Grupo:</b> conta de e-mail acessível a membros das equipas especificadas. Os membros das equipas podem gerir e importar e-mails dessa conta. <br><b>Grupo - Importação Automática:</b> a conta de e-mail acessível a membros de equipas especificadas. Emails são importados automaticamente como registos.',
  'LBL_ADDRESS_BOOK_SEARCH_HELP' => 'Insira um endereço de e-mail, Nome, Apelido ou Nome da Entidade para encontrar recipientes.',
  'LBL_TEST_SETTINGS' => 'Testar Definições',
  'LBL_EMPTY_EMAIL_BODY' => 'Esta mensagem não tem conteúdo',
  'LBL_TEST_EMAIL_SUBJECT' => 'E-mail de teste do Sugar',
  'LBL_NO_SUBJECT' => '(sem assunto)',
  'LBL_CHECKING_ACCOUNT' => 'A verificar conta',
  'LBL_OF' => 'de',
  'LBL_TEST_EMAIL_BODY' => 'Este e-mail foi enviado para testar as definições do servidor de correio de saída fornecidas no Sugar. Uma recepção bem-sucedida deste e-mail indica que as informações do servidor de correio de saída são válidas.',
  'LBL_MAIL_SMTPUSER' => 'Utilizador SMTP:',
  'LBL_MAIL_SMTPPASS' => 'Palavra-passe SMTP:',
  'LBL_MAIL_SMTPSERVER' => 'Servidor SMTP:',
  'LBL_SMTP_SERVER_HELP' => 'Este servidor SMTP pode ser usado para mensagens de saída. Forneça um nome de utilizador e palavra-passe da sua conta de e-mail para usar o servidor.',
  'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'O administrador ainda não configurou a conta padrão de saída. Não é possível enviar e-mail de teste.',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Utilizar Autenticação SMTP?',
  'LBL_MAIL_SMTPPORT' => 'Porta SMTP:',
  'LBL_MAIL_SMTPTYPE' => 'Tipo de servidor SMTP:',
  'LBL_MAIL_SMTP_SETTINGS' => 'Especificação servidor SMTP',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Escolha o seu fornecedor de e-mail',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Palavra-passe Yahoo! Mail',
  'LBL_YAHOOMAIL_SMTPUSER' => 'ID Yahoo! Mail',
  'LBL_GMAIL_SMTPPASS' => 'Palavra-passe Gmail',
  'LBL_GMAIL_SMTPUSER' => 'Endereço de e-mail Gmail',
  'LBL_EXCHANGE_SMTPPASS' => 'Palavra-passe Exchange',
  'LBL_EXCHANGE_SMTPUSER' => 'Utilizador Exchange',
  'LBL_EXCHANGE_SMTPPORT' => 'Porta Servidor Exchange',
  'LBL_EXCHANGE_SMTPSERVER' => 'Servidor Exchange',
  'LBL_EDIT_LAYOUT' => 'Editar Layout',
  'LBL_ATTACHMENT' => 'Anexo',
  'LBL_DELETE_INLINE' => 'Eliminar',
  'LBL_CREATE_CASES' => 'Criar Ocorrência',
  'LBL_CREATE_LEADS' => 'Criar Lead',
  'LBL_CREATE_CONTACTS' => 'Criar Contacto',
  'LBL_CREATE_BUGS' => 'Criar Registo de Bugs',
  'LBL_CREATE_TASKS' => 'Criar Tarefa',
  'LBL_CHECK_INLINE' => 'Correcto',
  'LBL_CLOSE' => 'Fechar',
  'LBL_HELP' => 'Ajuda',
  'LBL_WAIT' => 'Esperar',
  'LBL_CHECKEMAIL' => 'Verificar Email',
  'LBL_COMPOSEEMAIL' => 'Escrever Email',
  'LBL_EMAILSETTINGS' => 'Opção de E-mail',
  'LBL_CONTACTS_SUBPANEL_TITLE_SNIP' => 'Emails de Contactos',
  'LBL_EMAILS_MEETINGS_REL' => 'Emails:Reuniões',
  'LBL_DATE_CREATED' => 'Data de Criação',
  'LBL_DATE_MODIFIED' => 'Data de Modificação',
);


<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'role', language 'pt', branch 'MOODLE_26_STABLE'
 *
 * @package   role
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addinganewrole'] = 'Adicionar novo papel';
$string['addrole'] = 'Adicionar novo papel';
$string['advancedoverride'] = 'Redefinição avançada de papéis';
$string['allow'] = 'Permitir';
$string['allowassign'] = 'Permitir atribuição de papéis';
$string['allowed'] = 'Permitidos';
$string['allowoverride'] = 'Permitir redefinir papéis';
$string['allowroletoassign'] = 'Permitir que os utilizadores com o papel {$a->fromrole} atribuam o papel {$a->targetrole}';
$string['allowroletooverride'] = 'Permitir que os utilizadores com o papel {$a->fromrole} redefinam o papel {$a->targetrole}';
$string['allowroletoswitch'] = 'Permitir que os utilizadores com o papel {$a->fromrole} assumam o papel {$a->targetrole}';
$string['allowswitch'] = 'Permitir assumir outros papéis';
$string['allsiteusers'] = 'Todos os utilizadores do site';
$string['archetype'] = 'Papel modelo';
$string['archetypecoursecreator'] = 'MODELO: Criador de disciplina';
$string['archetypeeditingteacher'] = 'MODELO: Professor (editor)';
$string['archetypefrontpage'] = 'MODELO: Utilizador autenticado na página principal';
$string['archetypeguest'] = 'MODELO: Visitante';
$string['archetype_help'] = 'O modelo do papel define as permissões atribuídas quando o papel é reiniciado para os seus valores originais. Define ainda novas permissões para o papel quando o site é atualizado.';
$string['archetypemanager'] = 'MODELO: Gestor';
$string['archetypestudent'] = 'MODELO: Aluno';
$string['archetypeteacher'] = 'MODELO: Professor (não editor)';
$string['archetypeuser'] = 'MODELO: Utilizador autenticado';
$string['assignanotherrole'] = 'Atribuir outro papel';
$string['assignedroles'] = 'Papéis atribuídos';
$string['assignerror'] = 'Ocorrei um erro ao atribuir o papel {$a->role} ao utilizador {$a->user}.';
$string['assignglobalroles'] = 'Atribuir papéis no sistema';
$string['assignmentcontext'] = 'Atribuição de contexto';
$string['assignmentoptions'] = 'Opções de atribuição';
$string['assignrole'] = 'Atribuir papel';
$string['assignrolenameincontext'] = 'Atribuir papel \'{$a->role}\' em {$a->context}';
$string['assignroles'] = 'Atribuir papéis';
$string['assignroles_help'] = 'A atribuição de um papel a um utilizador num contexto dá a esse utilizador as permissões associadas ao papel no contexto em que o papel é atribuído e em todos os contextos abaixo desse. Por exemplo, se for atribuído o papel de aluno a um utilizador numa disciplina, ele terá também o papel de aluno em todas as atividades e blocos da disciplina.';
$string['assignrolesin'] = 'Atribuir papéis no contexto de {$a}';
$string['assignroles_link'] = 'admin/roles/assign';
$string['assignrolesrelativetothisuser'] = 'Atribuir papéis relativos a este utilizador';
$string['backtoallroles'] = 'Voltar à lista de papéis';
$string['backup:anonymise'] = 'Ocultar identificação dos utilizadores na cópia de segurança';
$string['backup:backupactivity'] = 'Fazer cópia de segurança das atividades';
$string['backup:backupcourse'] = 'Fazer cópia de segurança das disciplinas';
$string['backup:backupsection'] = 'Fazer cópia de segurança das secções';
$string['backup:backuptargethub'] = 'Fazer cópia de segurança para o hub';
$string['backup:backuptargetimport'] = 'Fazer cópia de segurança para importação';
$string['backup:configure'] = 'Configurar opções das cópias de segurança';
$string['backup:downloadfile'] = 'Descarregar ficheiros das áreas de cópia de segurança';
$string['backup:userinfo'] = 'Fazer cópia de segurança das informações dos utilizadores';
$string['badges:awardbadge'] = 'Atribuir Medalha a um utilizador';
$string['badges:configurecriteria'] = 'Configurar/editar critérios para atribuição de uma Medalha';
$string['badges:configuredetails'] = 'Configurar/editar detalhes da Medalha';
$string['badges:configuremessages'] = 'Configurar mensagens da Medalha';
$string['badges:createbadge'] = 'Criar/duplicar Medalhas';
$string['badges:deletebadge'] = 'Eliminar Medalhas';
$string['badges:earnbadge'] = 'Receber Medalha';
$string['badges:manageglobalsettings'] = 'Gerir configurações globais das Medalhas';
$string['badges:manageownbadges'] = 'Ver e gerir as Medalhas recebidas';
$string['badges:viewawarded'] = 'Ver utilizadores que ganharam uma Medalha específica mas cujo papel não lhes permite atribuir uma Medalha';
$string['badges:viewbadges'] = 'Ver Medalhas disponíveis sem as ter';
$string['badges:viewotherbadges'] = 'Ver Medalhas públicas no perfil de outros utilizadores';
$string['block:edit'] = 'Alterar as configurações de um bloco';
$string['block:view'] = 'Ver bloco';
$string['blog:associatecourse'] = 'Esta capacidade foi descontinuada e não faz nada.';
$string['blog:associatemodule'] = 'Esta capacidade foi descontinuada e não faz nada.';
$string['blog:create'] = 'Criar novas entradas do blogue';
$string['blog:manageentries'] = 'Editar e gerir entradas';
$string['blog:manageexternal'] = 'Gerir e alterar blogues externos';
$string['blog:manageofficialtags'] = 'Gerir palavras-chave oficiais';
$string['blog:managepersonaltags'] = 'Gerir palavras-chave pessoais';
$string['blog:search'] = 'Pesquisar mensagens dos blogues';
$string['blog:view'] = 'Ver entradas do blogue';
$string['blog:viewdrafts'] = 'Ver rascunhos das mensagens dos blogues';
$string['calendar:manageentries'] = 'Gerir todos os eventos no calendário';
$string['calendar:managegroupentries'] = 'Gerir entradas no calendário de grupo';
$string['calendar:manageownentries'] = 'Gerir entradas no calendário individual';
$string['capabilities'] = 'Capacidades';
$string['capability'] = 'Capacidade';
$string['category:create'] = 'Criar categorias';
$string['category:delete'] = 'Eliminar categorias';
$string['category:manage'] = 'Gerir categorias';
$string['category:update'] = 'Atualizar categorias';
$string['category:viewhiddencategories'] = 'Ver categorias ocultas';
$string['category:visibility'] = 'Ver categorias ocultas';
$string['checkglobalpermissions'] = 'Verificar permissões do sistema';
$string['checkpermissions'] = 'Verificar permissões';
$string['checkpermissionsin'] = 'Verificar permissões no contexto: {$a}';
$string['checksystempermissionsfor'] = 'Verifique as permissões de sistema de {$a->fullname}';
$string['checkuserspermissionshere'] = 'Verificar permissões que {$a->fullname} tem em {$a->contextlevel}';
$string['chooseroletoassign'] = 'Atribuição de papéis';
$string['cohort:assign'] = 'Adicionar/remover grupos globais';
$string['cohort:manage'] = 'Criar, apagar e mover grupos globais';
$string['cohort:view'] = 'Ver grupos globais ao nível do site';
$string['comment:delete'] = 'Apagar comentários';
$string['comment:post'] = 'Colocar comentários';
$string['comment:view'] = 'Ler comentários';
$string['community:add'] = 'Usar o bloco <strong>Procurar comunidades</strong> para procurar <em>hubs</em> e encontrar disciplinas';
$string['community:download'] = 'Descarregar uma disciplina a partir do bloco Procurar comunidades';
$string['confirmaddadmin'] = 'Tem a certeza de que quer designar o utilizador <strong>{$a}</strong> como administrador do site?';
$string['confirmdeladmin'] = 'Tem a certeza de que quer remover o utilizador <strong>{$a}</strong> da lista de administradores do site?';
$string['confirmroleprevent'] = 'Tem a certeza de que quer remover <strong>{$a->role}</strong> da lista dos papéis permitidos com a capacidade {$a->cap} no contexto {$a->context}?';
$string['confirmroleunprohibit'] = 'Tem a certeza de que quer remover <strong>{$a->role}</strong> da lista dos papéis proibidos para a capacidade {$a->cap} no contexto {$a->context}?';
$string['confirmunassign'] = 'Tem a certeza de que quer retirar este papel a este utilizador?';
$string['confirmunassignno'] = 'Cancelar';
$string['confirmunassigntitle'] = 'Confirmar a mudança de papel';
$string['confirmunassignyes'] = 'Remover';
$string['context'] = 'Contexto';
$string['course:activityvisibility'] = 'Ocultar/mostrar atividades';
$string['course:bulkmessaging'] = 'Enviar uma mensagem a várias pessoas';
$string['course:changecategory'] = 'Modificar a categoria da disciplina';
$string['course:changefullname'] = 'Modificar o nome completo da disciplina';
$string['course:changeidnumber'] = 'Modificar o número ID da disciplina';
$string['course:changeshortname'] = 'Modificar o nome curto da disciplina';
$string['course:changesummary'] = 'Modificar a descrição da disciplina';
$string['course:create'] = 'Criar disciplinas';
$string['course:delete'] = 'Apagar disciplinas';
$string['course:enrolconfig'] = 'Configurar ocorrências de papéis nas disciplinas';
$string['course:enrolreview'] = 'Rever papéis da disciplina';
$string['course:ignorefilesizelimits'] = 'Utilizar ficheiros maiores do que quaisquer restrições de tamanho';
$string['course:isincompletionreports'] = 'A ser mostrado nos relatórios de conclusão';
$string['course:manageactivities'] = 'Gerir atividades';
$string['course:managefiles'] = 'Gerir ficheiros';
$string['course:managegrades'] = 'Gerir notas';
$string['course:managegroups'] = 'Gerir grupos';
$string['course:managescales'] = 'Gerir escalas';
$string['course:markcomplete'] = 'Marcar utilizadores como "completos" na conclusão da disciplina';
$string['course:movesections'] = 'Mover secções';
$string['course:publish'] = 'Publicar uma disciplina num <em>hub</em>';
$string['course:request'] = 'Pedir nova disciplina';
$string['course:reset'] = 'Repor disciplina';
$string['course:sectionvisibility'] = 'Controlar visibilidade de secções';
$string['course:setcurrentsection'] = 'Definir secção atual';
$string['course:update'] = 'Atualizar definições de disciplinas';
$string['course:useremail'] = 'Ativar/desativar endereços de e-mail';
$string['course:view'] = 'Ver disciplinas sem permissão para participar';
$string['course:viewcoursegrades'] = 'Ver notas de disciplinas';
$string['course:viewhiddenactivities'] = 'Ver atividades ocultas';
$string['course:viewhiddencourses'] = 'Ver disciplinas ocultas';
$string['course:viewhiddensections'] = 'Ver secções ocultas';
$string['course:viewhiddenuserfields'] = 'Ver campos de utilizador ocultos';
$string['course:viewparticipants'] = 'Ver participantes';
$string['course:viewscales'] = 'Ver escalas';
$string['course:viewsuspendedusers'] = 'Ver utilizadores suspensos';
$string['course:visibility'] = 'Ocultar/mostrar disciplinas';
$string['createrolebycopying'] = 'Criar um papel copiado de {$a}';
$string['createthisrole'] = 'Criar este papel';
$string['currentcontext'] = 'Contexto atual';
$string['currentrole'] = 'Papel atual';
$string['customroledescription'] = 'Descrição personalizada';
$string['customroledescription_help'] = 'As descrições dos papéis-padrão são traduzidas automaticamente caso a descrição personalizada esteja vazia.';
$string['customrolename'] = 'Nome completo personalizado';
$string['customrolename_help'] = 'Os nomes dos papéis-padrão são localizados automaticamente se o nome personalizado estiver vazio. Deve fornecer um nome completo para todos os papéis personalizados.';
$string['defaultrole'] = 'Papel predefinido';
$string['defaultx'] = 'Predefinido: {$a}';
$string['defineroles'] = 'Definir papéis';
$string['deletecourseoverrides'] = 'Apagar todas as adaptações existentes na disciplina';
$string['deletelocalroles'] = 'Apagar todas as atribuições locais de papéis';
$string['deleterolesure'] = 'Tem a certeza que quer apagar o papel "{$a->name} ({$a->shortname})"?</p><p>Atualmente existem {$a->count} utilizadores atribuídos a esse papel.';
$string['deletexrole'] = 'Apagar o papel {$a}';
$string['duplicaterole'] = 'Duplicar papel';
$string['duplicaterolesure'] = 'Tem a certeza que pretende duplicar o papel "{$a->name} ({$a->shortname})"?</p>';
$string['editingrolex'] = 'A editar o papel \'{$a}';
$string['editrole'] = 'Editar papel';
$string['editxrole'] = 'Editar o papel {$a}';
$string['errorbadrolename'] = 'Nome do papel incorreto';
$string['errorbadroleshortname'] = 'Nome curto do papel incorreto';
$string['errorexistsrolename'] = 'O nome do papel já existe';
$string['errorexistsroleshortname'] = 'O nome do papel já existe';
$string['eventroleallowassignupdated'] = 'Permitir atribuição de papel';
$string['eventroleallowoverrideupdated'] = 'Permitir redefinir papel';
$string['eventroleallowswitchupdated'] = 'Permitir trocar de papel';
$string['eventroleassigned'] = 'Papel atribuído';
$string['eventrolecapabilitiesupdated'] = 'Capacidades do papel atualizadas';
$string['eventroledeleted'] = 'Papel eliminado';
$string['eventroleunassigned'] = 'Papel não atribuído';
$string['existingadmins'] = 'Administradores do site';
$string['existingusers'] = '{$a} utilizadores existentes';
$string['explanation'] = 'Explicação';
$string['export'] = 'Exportar';
$string['extusers'] = 'Utilizadores existentes';
$string['extusersmatching'] = 'Utilizadores existentes que correspondem a \'{$a}';
$string['filter:manage'] = 'Gerir configurações atuais do filtro';
$string['frontpageuser'] = 'Utilizador autenticado na página de entrada';
$string['frontpageuserdescription'] = 'Todos os utilizadores com sessão na página principal.';
$string['globalrole'] = 'Papel global';
$string['globalroleswarning'] = 'Aviso! Todos os papéis que atribuir nesta página serão aplicados aos utilizadores indicados em todo o site, incluindo a página principal e todas as disciplinas.';
$string['gotoassignroles'] = 'Ir para Atribuição de papéis em {$a->contextlevel}';
$string['gotoassignsystemroles'] = 'Ir para Atribuição de papéis no sistema';
$string['grade:edit'] = 'Editar notas';
$string['grade:export'] = 'Exportar notas';
$string['grade:hide'] = 'Ocultar/mostrar notas ou itens';
$string['grade:import'] = 'Importar notas';
$string['grade:lock'] = 'Bloquear notas ou itens';
$string['grade:manage'] = 'Gerir itens de avaliação';
$string['grade:managegradingforms'] = 'Gerir métodos avançados de avaliação';
$string['grade:manageletters'] = 'Gerir notas alfabéticas';
$string['grade:manageoutcomes'] = 'Gerir competências';
$string['grade:managesharedforms'] = 'Gerir formulários de avaliação dos métodos avançados de avaliação';
$string['grade:override'] = 'Ajustar notas';
$string['grade:sharegradingforms'] = 'Partilhar formulários de avaliação dos métodos de avançados de avaliação';
$string['grade:unlock'] = 'Bloquear notas ou itens';
$string['grade:view'] = 'Ver as próprias notas';
$string['grade:viewall'] = 'Ver notas de outros utilizadores';
$string['grade:viewhidden'] = 'Ver notas ocultas para o próprio';
$string['hidden'] = 'Oculto(a)';
$string['highlightedcellsshowdefault'] = 'As permissões destacadas na tabela abaixo mostram as permissões predefinidas para este tipo de papel, com base no papel modelo atualmente selecionado acima.';
$string['highlightedcellsshowinherit'] = 'As células em destaque na tabela abaixo mostram as permissões (se houver) que serão herdadas. Além das capacidades cuja permissão pretende alterar, deve deixar o resto com a permissão herdar.';
$string['inactiveformorethan'] = 'sem atividade há mais de {$a->timeperiod}';
$string['ingroup'] = 'no grupo {$a->group}';
$string['inherit'] = 'Herdar';
$string['invalidpresetfile'] = 'Ficheiro de definição de papel inválido';
$string['legacy:admin'] = 'PAPEL LEGADO: Administrador';
$string['legacy:coursecreator'] = 'PAPEL LEGADO: Criador de disciplina';
$string['legacy:editingteacher'] = 'PAPEL LEGADO: Professor (editor)';
$string['legacy:guest'] = 'PAPEL LEGADO: Visitante';
$string['legacy:student'] = 'PAPEL LEGADO: Aluno';
$string['legacy:teacher'] = 'PAPEL LEGADO: Professor (não editor)';
$string['legacytype'] = 'Tipo de legado de atribuições';
$string['legacy:user'] = 'PAPEL LEGADO: Utilizador autenticado';
$string['listallroles'] = 'Mostrar lista de papéis';
$string['localroles'] = 'Papéis atribuídos localmente';
$string['mainadmin'] = 'Administrador principal';
$string['mainadminset'] = 'Definir administrador principal';
$string['manageadmins'] = 'Gerir os administradores do site';
$string['manager'] = 'Gestor';
$string['managerdescription'] = 'Os gestores podem aceder às disciplinas e modificá-las. Normalmente não participam nas disciplinas.';
$string['manageroles'] = 'Gerir papéis';
$string['maybeassignedin'] = 'Tipos de contextos em que este papel pode ser atribuído';
$string['morethan'] = 'Mais de {$a}';
$string['multipleroles'] = 'Papéis múltiplos';
$string['my:configsyspages'] = 'Configure modelos do sistema para a Minha página principal';
$string['my:manageblocks'] = 'Gerir blocos na Minha página principal';
$string['neededroles'] = 'Papéis com permissão';
$string['nocapabilitiesincontext'] = 'Não há capacidades disponíveis neste contexto';
$string['noneinthisx'] = 'Nenhum(a) em {$a}';
$string['noneinthisxmatching'] = 'Não existem utilizadores com correspondência a \'{$a->search}\' em {$a->contexttype}';
$string['norole'] = 'Sem papel';
$string['noroleassignments'] = 'Não foi atribuído nenhum papel a este utilizador neste site';
$string['noroles'] = 'Sem papéis';
$string['notabletoassignroleshere'] = 'Não tem permissão para atribuir papéis neste contexto';
$string['notabletooverrideroleshere'] = 'Não tem permissão para redefinir as permissões de nenhum papel aqui';
$string['notes:manage'] = 'Gerir anotações';
$string['notes:view'] = 'Ver anotações';
$string['notset'] = 'Não definido';
$string['overrideanotherrole'] = 'Redefinir outro papel';
$string['overridecontext'] = 'Contexto de redefinição';
$string['overridepermissions'] = 'Redefinir permissões';
$string['overridepermissionsforrole'] = 'Redefinir permissões no papel \'{$a->role}\' em {$a->context}';
$string['overridepermissions_help'] = 'Redefinir permissões faz com que as capacidades selecionadas sejam permitidas ou não num contexto específico.';
$string['overridepermissionsin'] = 'Redefinir permissões em {$a}';
$string['overridepermissions_link'] = 'admin/roles/override';
$string['overrideroles'] = 'Redefinir Papéis';
$string['overriderolesin'] = 'Redefinir papéis em {$a}';
$string['overrides'] = 'Ajustamentos';
$string['overridesbycontext'] = 'Redefinir (por contexto)';
$string['permission'] = 'Permissão';
$string['permission_help'] = 'As permissões são as configurações das capacidades. Existem 4 opções:

* Não definido
* Permitir - A permissão é concedida para a capacidade
* Impedir - A permissão é removida para a capacidade, mesmo se for permitida num contexto superior
* Proibir - A permissão é completamente proibida e não pode ser adaptada em nenhum contexto abaixo (mais específico)';
$string['permissions'] = 'Permissões';
$string['permissionsforuser'] = 'Permissões para o utilizador {$a}';
$string['permissionsincontext'] = 'Permissões em {$a}';
$string['portfolio:export'] = 'Exportar para portefólios';
$string['potentialusers'] = '{$a} potenciais utilizadores';
$string['potusers'] = 'Potenciais utilizadores';
$string['potusersmatching'] = 'Potenciais utilizadores correspondentes a \'{$a}';
$string['prevent'] = 'Impedir';
$string['prohibit'] = 'Proibir';
$string['prohibitedroles'] = 'Proibido';
$string['question:add'] = 'Adicionar novas perguntas';
$string['question:config'] = 'Configurar tipos de pergunta';
$string['question:editall'] = 'Editar todas as perguntas';
$string['question:editmine'] = 'Editar perguntas próprias';
$string['question:flag'] = 'Marcar perguntas durante a tentativa de resolução do teste';
$string['question:managecategory'] = 'Editar categorias de perguntas';
$string['question:moveall'] = 'Mover todas as perguntas';
$string['question:movemine'] = 'Mover as suas próprias perguntas';
$string['question:useall'] = 'Utilizar todas as perguntas';
$string['question:usemine'] = 'Utilizar as perguntas próprias';
$string['question:viewall'] = 'Ver todas as perguntas';
$string['question:viewmine'] = 'Ver perguntas próprias';
$string['rating:rate'] = 'Adicionar notas aos itens';
$string['rating:view'] = 'Ver a sua nota total';
$string['rating:viewall'] = 'Ver as notas dadas individualmente';
$string['rating:viewany'] = 'Ver as notas totais de um utilizador';
$string['resetrole'] = 'Restaurar';
$string['resettingrole'] = 'Restaurar papel \'{$a}\'';
$string['restore:configure'] = 'Configurar opções de restauro';
$string['restore:createuser'] = 'Criar utilizadores no restauro';
$string['restore:restoreactivity'] = 'Restaurar atividades';
$string['restore:restorecourse'] = 'Restaurar disciplinas';
$string['restore:restoresection'] = 'Restaurar secções';
$string['restore:restoretargethub'] = 'Restaurar a partir de ficheiros marcados como hub';
$string['restore:restoretargetimport'] = 'Restaurar a partir de ficheiros marcados como importados';
$string['restore:rolldates'] = 'Com permissão para mudar as datas da configuração das atividades no restauro';
$string['restore:uploadfile'] = 'Carregar ficheiros para as áreas das cópias de segurança';
$string['restore:userinfo'] = 'Restaurar informações dos utilizadores';
$string['restore:viewautomatedfilearea'] = 'Restaurar disciplinas de cópias de segurança automáticas';
$string['risks'] = 'Riscos';
$string['roleallowheader'] = 'Permitir papel:';
$string['roleallowinfo'] = 'Selecione um papel a ser adicionado à lista de papéis permitidos no contexto {$a->context}, capacidade {$a->cap}:';
$string['role:assign'] = 'Atribuir papéis aos utilizadores';
$string['roleassignments'] = 'Atribuição de papéis';
$string['roledefinitions'] = 'Definições de papel';
$string['rolefullname'] = 'Nome do papel';
$string['roleincontext'] = '{$a->role} in {$a->context}';
$string['role:manage'] = 'Criar e editar papéis';
$string['role:override'] = 'Redefinir papéis';
$string['roleprohibitheader'] = 'Proibir papel';
$string['roleprohibitinfo'] = 'Selecione um papel a ser adicionado à lista de papéis proibidos no contexto {$a->context}, capacidade {$a->cap}:';
$string['rolerepreset'] = 'Usar configurações predefinidas do papel';
$string['roleresetdefaults'] = 'Configurações predefinidas';
$string['roleresetrole'] = 'Usar papel ou modelo';
$string['role:review'] = 'Rever permissões de outros';
$string['rolerisks'] = 'Riscos do papel';
$string['roles'] = 'Papéis';
$string['role:safeoverride'] = 'Redefinir permissões seguras de outros';
$string['roleselect'] = 'Selecionar papel';
$string['rolesforuser'] = 'Papéis do utilizador {$a}';
$string['roles_help'] = 'Papéis são conjuntos de permissões, definidos para todo o sistema, que são atribuídos aos utilizadores em contextos específicos.';
$string['roleshortname'] = 'Nome curto';
$string['roleshortname_help'] = 'O nome curto do papel é um identificador de papel de nível reduzido no qual apenas caracteres alfanuméricos ASCII são permitidos. Não modifique os nomes curtos ou os papéis-padrão.';
$string['roles_link'] = 'papéis';
$string['role:switchroles'] = 'Assumir outros papéis';
$string['roletoassign'] = 'Papel a atribuir';
$string['roletooverride'] = 'Papel a redefinir';
$string['safeoverridenotice'] = 'Nota: As capacidades com riscos foram bloqueadas porque apenas possui permissão para redefinir capacidades seguras.';
$string['selectanotheruser'] = 'Selecionar outro utilizador';
$string['selectauser'] = 'Selecionar um utilizador';
$string['selectrole'] = 'Selecione papel';
$string['showallroles'] = 'Mostrar todos os papéis';
$string['showthisuserspermissions'] = 'Mostrar as permissões deste utilizador';
$string['site:accessallgroups'] = 'Aceder a todos os grupos';
$string['siteadministrators'] = 'Administradores do site';
$string['site:approvecourse'] = 'Aprovar criação de disciplinas';
$string['site:backup'] = 'Fazer cópias de segurança de disciplinas';
$string['site:config'] = 'Alterar configurações do site';
$string['site:doanything'] = 'Autorizado(a) a fazer tudo';
$string['site:doclinks'] = 'Mostrar hiperligações para documentos localizados fora do site';
$string['site:import'] = 'Importar outras disciplinas para uma disciplina';
$string['site:manageblocks'] = 'Gerir blocos a nível do site';
$string['site:mnetloginfromremote'] = 'Login de um Moodle remoto';
$string['site:mnetlogintoremote'] = 'Navegar para um Moodle remoto';
$string['site:readallmessages'] = 'Ler todas as mensagens no site';
$string['site:restore'] = 'Recuperar cópias de segurança de disciplinas';
$string['site:sendmessage'] = 'Enviar mensagens para qualquer utilizador';
$string['site:trustcontent'] = 'Confiar no conteúdo submetido';
$string['site:uploadusers'] = 'Carregar novos utilizadores a partir de um ficheiro';
$string['site:viewfullnames'] = 'Ver sempre o nome completo dos utilizadores';
$string['site:viewparticipants'] = 'Ver participantes';
$string['site:viewreports'] = 'Ver relatórios';
$string['site:viewuseridentity'] = 'Ver os dados completos do utilizador em lista';
$string['tag:create'] = 'Criar novas palavras-chave';
$string['tag:edit'] = 'Editar palavras-chave existentes';
$string['tag:editblocks'] = 'Editar blocos nas páginas de palavras-chave';
$string['tag:flag'] = 'Marcar palavras-chave como inapropriadas';
$string['tag:manage'] = 'Gerir todas as palavras-chave';
$string['thisnewrole'] = 'Este novo papel';
$string['thisusersroles'] = 'Papéis atribuídos a este utilizador';
$string['unassignarole'] = 'Retirar o papel {$a}';
$string['unassignconfirm'] = 'Deseja realmente retirar o papel "{$a->role}" ao utilizador "{$a->user}"?';
$string['unassignerror'] = 'Ocorreu um erro ao retirar o papel {$a->role} ao utilizador {$a->user}.';
$string['user:changeownpassword'] = 'Mudar sua senha';
$string['user:create'] = 'Criar utilizadores';
$string['user:delete'] = 'Eliminar utilizadores';
$string['user:editmessageprofile'] = 'Editar o perfil de envio de mensagens do utilizador';
$string['user:editownmessageprofile'] = 'Editar o seu perfil de envio de mensagens';
$string['user:editownprofile'] = 'Editar perfil próprio';
$string['user:editprofile'] = 'Editar perfil de utilizador';
$string['user:ignoreuserquota'] = 'Ignorar o limite de quota do utilizador';
$string['user:loginas'] = 'Autenticar-se como outro utilizador';
$string['user:manageblocks'] = 'Gerir blocos no perfil de utilizador de outros utilizadores';
$string['user:manageownblocks'] = 'Gerir blocos no seu perfil público de utilizador';
$string['user:manageownfiles'] = 'Gerir ficheiros nas áreas de ficheiros privados';
$string['user:managesyspages'] = 'Configurar o layout predefinido das páginas dos perfis de utilizadores públicas';
$string['user:readuserblogs'] = 'Ver todos os blogues do utilizador';
$string['user:readuserposts'] = 'Ver todos os tópicos de Fórum do utilizador';
$string['usersfrom'] = 'Utilizadores de {$a}';
$string['usersfrommatching'] = 'Utilizadores de {$a->contextname} correspondem a \'{$a->search}';
$string['usersinthisx'] = 'Utilizadores deste {$a}';
$string['usersinthisxmatching'] = 'Utilizadores deste {$a->contexttype} correspondem a \'{$a->search}';
$string['userswithrole'] = 'Todos os utilizadores com um papel';
$string['userswiththisrole'] = 'Utilizadores com papel';
$string['user:update'] = 'Modificar perfil dos utilizadores';
$string['user:viewalldetails'] = 'Ver a informação completa do utilizador';
$string['user:viewdetails'] = 'Ver perfil dos utilizadores';
$string['user:viewhiddendetails'] = 'Ver dados ocultos dos utilizadores';
$string['user:viewuseractivitiesreport'] = 'Ver relatórios de atividade do utilizador';
$string['user:viewusergrades'] = 'Ver notas de utilizador';
$string['useshowadvancedtochange'] = 'Usar \'Mostrar avançado\' para alterar';
$string['viewingdefinitionofrolex'] = 'A ver definições do papel \'{$a}';
$string['viewrole'] = 'Ver pormenores de papéis';
$string['webservice:createmobiletoken'] = 'Criar um token de web service para acesso mobile';
$string['webservice:createtoken'] = 'Criar um token de web service';
$string['whydoesuserhavecap'] = 'Porque é que {$a->fullname} tem a capacidade {$a->capability} no contexto {$a->context}?';
$string['whydoesusernothavecap'] = 'Porque é que {$a->fullname} não tem a capacidade {$a->capability} no contexto {$a->context}?';
$string['xroleassignments'] = 'Papéis atribuídos a {$a}';
$string['xuserswiththerole'] = 'Utilizadores com o papel "{$a->role}"';
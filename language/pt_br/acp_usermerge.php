<?php
/**
*
* User Merge extension for the phpBB Forum Software package.
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.0.2] (https://github.com/phpBBTraducoes)
* @copyright (c) 2015 RMcGirr83 (Rich McGirr) rmcgirr83@rmcgirr83.org & Jari Kanerva (tumba25) <http://www.phpbbmodders.net>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'VERSION' 			=> 'Versão',
	'LOG_USERS_MERGED'	=> '<strong>Usuários mesclados</strong><br />%s',
	'NO_USER_FOR_MERGE'			=> 'Um usuário especificado para mesclar não pode ser localizado dentro do banco de dados.',
	'NO_USER_SPECIFIED'			=> 'Um usuário para mesclar não foi especificado.',
	'CANNOT_MERGE_SELF'			=> 'Você está tentando se deletar.',
	'CANNOT_MERGE_FOUNDER'		=> 'Os fundadores só podem ser deletados por outros fundadores.',
	'CANNOT_MERGE_SAME'			=> 'Você não pode mesclar a conta do usuário <strong>%s</strong> consigo mesmo',

	'USERS_MERGED'				=> 'Os usuários especificados foram mesclados com sucesso.',
	'MERGE_USERS'				=> 'Mesclar usuários',
	'MERGE_USERS_CONFIRM'		=> 'Tem certeza de que deseja mesclar esses usuários?<br /><strong>%s serão deletados, não há retorno após isso.</Strong>',
	'ACP_USER_MERGE_TITLE'		=> 'Mesclar usuários',
	'ACP_USER_MERGE_EXPLAIN'	=> 'Aqui você pode mesclar dois usuários em um usuário. Observe que o usuário antigo será excluído e somente o conteúdo feito por esse usuário será transferido para o novo usuário.',

	'OLD_USER'					=> 'Antigo nome de usuário',
	'OLD_USER_EXPLAIN'			=> 'O antigo usuário que deve ser incorporado. Cuidado, esse usuário será excluído após a mesclagem.',
	'NEW_USER'					=> 'Novo nome de usuário',
	'NEW_USER_EXPLAIN'			=> 'O novo usuário ao qual o outro usuário deve ser mesclado. Esse usuário já deve existir.',
));

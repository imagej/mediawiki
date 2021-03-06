<?php
/**
* News Channel extension 1.52
* This MediaWiki extension represents a RSS 2.0/Atom 1.0 news channel for wiki project.
* 	The channel is implemented as a dynamic [[Special:NewsChannel|special page]].
* 	All pages from specified category (e.g. "Category:News") are considered
* 	to be articles about news and published on the site's news channel.
* Internationalization file, containing message strings for extension.
* Requires MediaWiki 1.8 or higher.
* Extension's home page: http://www.mediawiki.org/wiki/Extension:News_Channel
*
* Distributed under GNU General Public License 2.0 or later (http://www.gnu.org/copyleft/gpl.html)
* Authors:
* 	English messages: Iaroslav Vassiliev
* 	Russian messages: Iaroslav Vassiliev
* 	German messages: Cornelius Sicker
* 	French messages: Mauro Bornet
*/

$messages = array();

$messages['en'] = array( 
	'newschannel' => 'News channel',
	'newschannel_format' => 'Format:',
	'newschannel_limit' => 'Limit:',
	'newschannel_include_category' => 'Additional category:',
	'newschannel_exclude_category' => 'Exclude category:',
	'newschannel_submit_button' => 'Create feed',
);

$messages['ru'] = array(
	'newschannel' => 'Канал новостей',
	'newschannel_format' => 'Формат новостей:',
	'newschannel_limit' => 'Кол-во последних новостей:',
	'newschannel_include_category' => 'Дополнительная категория:',
	'newschannel_exclude_category' => 'Исключить категорию:',
	'newschannel_submit_button' => 'Вывести',
);

$messages['de'] = array( 
	'newschannel' => 'Nachrichten',
	'newschannel_format' => 'Format:',
	'newschannel_limit' => 'Limit:',
	'newschannel_include_category' => 'Zusätzliche Kategorie:',
	'newschannel_exclude_category' => 'Auszuschließen die Kategorie:',
	'newschannel_submit_button' => 'Feed erstellen',
);

$messages['fr'] = array( 
	'newschannel' => 'Chaîne d\'information',
	'newschannel_format' => 'Format:',
	'newschannel_limit' => 'Limite:',
	'newschannel_include_category' => 'Catégorie(s) additionnelle(s):',
	'newschannel_exclude_category' => 'Catégorie(s) exclue(s):',
	'newschannel_submit_button' => 'Créer le flux',
);

<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "fluidcontent_zurb".
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Style Tiles for TYPO3',
	'description' => 'A collection of Layouts and Elements written for EXT:fluidcontent and EXT:fluidpages using ViewHelpers from EXT:vhs',
	'category' => 'misc',
	'author' => 'Beda Steinacher',
	'author_email' => 'beda.steinacher@creaocchio.ch',
	'author_company' => 'CreaOcchio GmbH',
	'shy' => '',
	'dependencies' => 'cms,fluidcontent, fluidpages, vhs, fluidcontent_zurb',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'version' => '0.0.1',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.0-0.0.0',
			'cms' => '',
			'fluidcontent' => '',
            'fluidpages' => '',
			'vhs' => '',
            'fluidcontent_zurb' => ''
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	)
);

?>
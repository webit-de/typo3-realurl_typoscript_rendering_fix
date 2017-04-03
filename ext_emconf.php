<?php
/***************************************************************
 * Extension Manager/Repository config file for ext: "realurl_typoscript_rendering_fix"
 *
 * Manually added 2017-04-03
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'RealUrl TypoScript Rendering Fix',
	'description' => 'Fixes the bug in RealUrl that causes infinite loops when using TypoScript rendering.',
	'category' => 'misc',
	'state' => 'stable',
	'createDirs' => '',
	'clearCacheOnLoad' => 1,
	'author' => 'Lidia Demin',
	'author_email' => 'demin@webit.de',
	'author_company' => '',
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			/*TYPO3 core & Fluid Powered TYPO3*/
			'typo3' => '7.6.0-7.6.99',
			'cms' => '',
			'extbase' => '',
			'realurl' => '',
			'typoscript_rendering' => '',
		),
		'conflicts' => array(),
		'suggests' => array(),
	),
);
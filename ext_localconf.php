<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// Hooks for realurl manipulation while ajax-requests in filter
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl']['encodeSpURL_postProc']['realurltyposcriptrenderingfix'] = 'WebitDe\\RealurlTyposcriptRenderingFix\\Hooks\\UrlHandler->encode';

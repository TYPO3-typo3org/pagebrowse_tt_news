<?php

if (!defined ("TYPO3_MODE")) {
	die ("Access denied.");
}

if (t3lib_extMgm::isLoaded('tt_news')) {
	include_once(t3lib_extMgm::extPath($_EXTKEY).'class.tx_pagebrowse_tt_news_userPageBrowserFunc.php');
	
	// Force tt_news to use this extension as pagebrowser.
	t3lib_extMgm::addTypoScript(
		$_EXTKEY,
		'setup',
		'plugin.tt_news.userPageBrowserFunc = tx_pagebrowse_tt_news_userPageBrowserFunc->userPageBrowserFunc'
	);
}

?>
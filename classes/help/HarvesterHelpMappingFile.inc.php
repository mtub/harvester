<?php

/**
 * @file classes/help/HarvesterHelpMappingFile.inc.php
 *
 * Copyright (c) 2005-2012 Alec Smecher and John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class HarvesterHelpMappingFile
 * @ingroup help
 * 
 * @brief Abstracts the built-in help mapping XML file.
 */


import('lib.pkp.classes.help.HelpMappingFile');

class HarvesterHelpMappingFile extends HelpMappingFile {
	/**
	 * Constructor
	 */
	function HarvesterHelpMappingFile() {
		parent::HelpMappingFile('help/help.xml');
	}

	/**
	 * Return the filename for a built-in OCS help TOC filename.
	 */
	function getTocFilename($tocId) {
		$help =& Help::getHelp();
		return sprintf('help/%s/%s.xml', $help->getLocale(), $tocId);
	}

	/**
	 * Return the filename for a built-in OCS help topic filename.
	 */
	function getTopicFilename($topicId) {
		$help =& Help::getHelp();
		return sprintf('help/%s/%s.xml', $help->getLocale(), $topicId);
	}


	function getTopicIdForFilename($filename) {
		$parts = split('/', str_replace('\\', '/', $filename));
		array_shift($parts); // Knock off "help"
		array_shift($parts); // Knock off locale
		return substr(join('/', $parts), 0, -4); // Knock off .xml
	}

	function getSearchPath($locale = null) {
		if ($locale == '') {
			$help =& Help::getHelp();
			$locale = $help->getLocale();
		}
		return 'help' . DIRECTORY_SEPARATOR . $locale;
	}
}

?>

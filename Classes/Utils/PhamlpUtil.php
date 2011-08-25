<?php

class Tx_Phamlp_Utils_PhamlpUtil {
	/**
	 * Static function for use in TypoScript userfunc
	 */
	static function getNearestTemplate($content, $conf) {
		$idx = $GLOBALS['TSFE']->tmpl->outermostRootlineIndexWithTemplate;
		return $content . $GLOBALS['TSFE']->tmpl->absoluteRootLine[$idx]['uid'];
	}
	/**
	 * initiate the complete Phamlp Framework
	 */
	static function initCompleteFramework() {
		self::initHamlFramework();
		self::initSassFramework();
	}

	/**
	 * initiate the haml part of the Phamlp Framework
	 */
	static function initHamlFramework() {
		require_once(t3lib_extMgm::extPath('phamlp').'Resources/Private/Contrib/phamlp/haml/HamlParser.php');
	}
	
	/**
	 * get a preconfigured sass parser
	 * http://code.google.com/p/phamlp/wiki/HamlOptions
	 * 
	 * @param $options array options for haml parser
	 */
	static function getHamlParser($options) {
		self::initHamlFramework();
		$options = t3lib_div::array_merge_recursive_overrule(
			array(
				'cache' => TRUE,
				'cache_location' => PATH_site . 'typo3temp/Cache/Data/phamlp',
			),
			$options
		);
	}

	/**
	 * initiate the sass/scss part of the Phamlp Framework
	 */

	static function initSassFramework() {
		require_once(t3lib_extMgm::extPath('phamlp').'Resources/Private/Contrib/phamlp/sass/SassParser.php');
	}

	/**
	 * get a preconfigured sass parser
	 * http://code.google.com/p/phamlp/wiki/SassOptions
	 * 
	 * @param $options array options for sass parser
	 */
	static function getSassParser(array $options = array()) {
		self::initSassFramework();
			//set default values
		$options = t3lib_div::array_merge_recursive_overrule(
			array(
				'style' => 'compact',
				'cache' => TRUE,
				'cache_location' => PATH_site . 'typo3temp/Cache/Data/phamlp',
			),
			$options
		);
		return $sassParser = new SassParser($options);
	}

}
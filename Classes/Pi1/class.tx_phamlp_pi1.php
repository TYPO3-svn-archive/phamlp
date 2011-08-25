<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 Kay Strobach <typo3@kay-strobach.de>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 * Hint: use extdeveval to insert/update function index above.
 */

require_once(PATH_tslib.'class.tslib_pibase.php');
#require_once(t3lib_extMgm::('phamlp').'Classes/Utils/PhamlpUtil.php');


/**
 * Plugin 'PHamlP' for the 'phamlp' extension.
 *
 * @author	Kay Strobach <typo3@kay-strobach.de>
 * @package	TYPO3
 * @subpackage	tx_phamlp
 */
class tx_phamlp_pi1 extends tslib_pibase {
	var $prefixId      = 'tx_phamlp_pi1';		// Same as class name
	var $scriptRelPath = 'pi1/class.tx_phamlp_pi1.php';	// Path to this script relative to the extension dir.
	var $extKey        = 'phamlp';	// The extension key.
	var $pi_checkCHash = true;
	
	
	/**
	 * The main method of the PlugIn
	 *
	 * @param	string		$content: The PlugIn content
	 * @param	array		$conf: The PlugIn configuration
	 * @return	The content that is displayed on the website
	 */
	function main($content, $conf)	{
			// init vars
		$filebuffer = '';
			// calculate input path
		$inputFilename = $GLOBALS['TSFE']->cObj->cObjGetSingle($conf['inputFile'],$conf['inputFile.']);
		$inputFilename = t3lib_div::getFileAbsFileName($inputFilename);
			// calculate output path
		$outputFilename = $GLOBALS['TSFE']->cObj->cObjGetSingle($conf['outputCssFile'],$conf['outputCssFile.']);
		$outputFilename = t3lib_div::getFileAbsFileName($outputFilename);
			// setup parsers
		$parser = Tx_Phamlp_Utils_PhamlpUtil::getSassParser();
		
			//convert TS Vars to CSS vars
		if(is_array($conf['variables.'])) {
			foreach($conf['variables.'] as $varName => $varValue) {
				$filebuffer .= '$' . $varName . ': ' . $varValue . ";\n";
			}
		}
			//read file or use dynamic scss
		if(is_file($inputFilename)) {
			$filebuffer .= file_get_contents($inputFilename);
		} else {
			$filebuffer .= $conf['dynamicCss'];
		}
			//parse and convert
		if($conf['debug'] !== '1' ) {
			$filebuffer = $parser->toCss($filebuffer, 0);
		}
		t3lib_div::writeFile(
			$outputFilename,
			$filebuffer
		);
		return $content;
		//return $content . '<pre>' . print_r($GLOBALS['TSFE']->tmpl->absoluteRootLine,true) . '</pre>';
	}
}



if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/phamlp/pi1/class.tx_phamlp_pi1.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/phamlp/pi1/class.tx_phamlp_pi1.php']);
}

?>
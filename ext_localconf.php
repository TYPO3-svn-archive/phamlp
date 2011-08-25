<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

t3lib_extMgm::addPItoST43($_EXTKEY, 'Classes/Pi1/class.tx_phamlp_pi1.php', '_pi1', 'includeLib', 1);
?>
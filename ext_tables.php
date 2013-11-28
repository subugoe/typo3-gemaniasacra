<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Gs',
	'GS'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Germania Sacra');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_germaniasacra_domain_model_orden', 'EXT:germaniasacra/Resources/Private/Language/locallang_csh_tx_germaniasacra_domain_model_orden.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_germaniasacra_domain_model_orden');
$TCA['tx_germaniasacra_domain_model_orden'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:germaniasacra/Resources/Private/Language/locallang_db.xlf:tx_germaniasacra_domain_model_orden',
		'label' => 'orden',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'orden,ordo,symbol,graphik,ordenstyp,url,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Orden.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_germaniasacra_domain_model_orden.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_germaniasacra_domain_model_land', 'EXT:germaniasacra/Resources/Private/Language/locallang_csh_tx_germaniasacra_domain_model_land.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_germaniasacra_domain_model_land');
$TCA['tx_germaniasacra_domain_model_land'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:germaniasacra/Resources/Private/Language/locallang_db.xlf:tx_germaniasacra_domain_model_land',
		'label' => 'land',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'land,ist_in_deutschland,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Land.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_germaniasacra_domain_model_land.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_germaniasacra_domain_model_ort', 'EXT:germaniasacra/Resources/Private/Language/locallang_csh_tx_germaniasacra_domain_model_ort.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_germaniasacra_domain_model_ort');
$TCA['tx_germaniasacra_domain_model_ort'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:germaniasacra/Resources/Private/Language/locallang_db.xlf:tx_germaniasacra_domain_model_ort',
		'label' => 'ort',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'ort,gemeinde,kreis,wuestung,breite,laenge,land,bistum,url,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Ort.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_germaniasacra_domain_model_ort.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_germaniasacra_domain_model_bistum', 'EXT:germaniasacra/Resources/Private/Language/locallang_csh_tx_germaniasacra_domain_model_bistum.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_germaniasacra_domain_model_bistum');
$TCA['tx_germaniasacra_domain_model_bistum'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:germaniasacra/Resources/Private/Language/locallang_db.xlf:tx_germaniasacra_domain_model_bistum',
		'label' => 'bistum',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'bistum,kirchenprovinz,bemerkung,ist_erzbistum,shapefile,url,ort,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Bistum.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_germaniasacra_domain_model_bistum.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_germaniasacra_domain_model_band', 'EXT:germaniasacra/Resources/Private/Language/locallang_csh_tx_germaniasacra_domain_model_band.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_germaniasacra_domain_model_band');
$TCA['tx_germaniasacra_domain_model_band'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:germaniasacra/Resources/Private/Language/locallang_db.xlf:tx_germaniasacra_domain_model_band',
		'label' => 'nummer',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'nummer,sortierung,titel,kurztitel,bistum,url,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Band.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_germaniasacra_domain_model_band.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_germaniasacra_domain_model_kloster', 'EXT:germaniasacra/Resources/Private/Language/locallang_csh_tx_germaniasacra_domain_model_kloster.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_germaniasacra_domain_model_kloster');
$TCA['tx_germaniasacra_domain_model_kloster'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:germaniasacra/Resources/Private/Language/locallang_db.xlf:tx_germaniasacra_domain_model_kloster',
		'label' => 'kloster',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'kloster,kloster_id,patrozinium,bemerkung,band_seite,text_gs_band,band,url,standort,bearbeitungsstatus,personallistenstatus,orden,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Kloster.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_germaniasacra_domain_model_kloster.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_germaniasacra_domain_model_zeitraum', 'EXT:germaniasacra/Resources/Private/Language/locallang_csh_tx_germaniasacra_domain_model_zeitraum.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_germaniasacra_domain_model_zeitraum');
$TCA['tx_germaniasacra_domain_model_zeitraum'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:germaniasacra/Resources/Private/Language/locallang_db.xlf:tx_germaniasacra_domain_model_zeitraum',
		'label' => 'von_von',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'von_von,von_bis,von_verbal,bis_von,bis_bis,bis_verbal,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Zeitraum.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_germaniasacra_domain_model_zeitraum.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_germaniasacra_domain_model_klosterorden', 'EXT:germaniasacra/Resources/Private/Language/locallang_csh_tx_germaniasacra_domain_model_klosterorden.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_germaniasacra_domain_model_klosterorden');
$TCA['tx_germaniasacra_domain_model_klosterorden'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:germaniasacra/Resources/Private/Language/locallang_db.xlf:tx_germaniasacra_domain_model_klosterorden',
		'label' => 'bemerkung',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'bemerkung,klosterstatus,orden,zeitraum,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/KlosterOrden.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_germaniasacra_domain_model_klosterorden.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_germaniasacra_domain_model_url', 'EXT:germaniasacra/Resources/Private/Language/locallang_csh_tx_germaniasacra_domain_model_url.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_germaniasacra_domain_model_url');
$TCA['tx_germaniasacra_domain_model_url'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:germaniasacra/Resources/Private/Language/locallang_db.xlf:tx_germaniasacra_domain_model_url',
		'label' => 'url',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'url,bemerkung,typ,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Url.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_germaniasacra_domain_model_url.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_germaniasacra_domain_model_klosterstandort', 'EXT:germaniasacra/Resources/Private/Language/locallang_csh_tx_germaniasacra_domain_model_klosterstandort.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_germaniasacra_domain_model_klosterstandort');
$TCA['tx_germaniasacra_domain_model_klosterstandort'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:germaniasacra/Resources/Private/Language/locallang_db.xlf:tx_germaniasacra_domain_model_klosterstandort',
		'label' => 'gruender',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'gruender,bemerkung,breite,laenge,bemerkung_standort,temp_literatur_alt,ort,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/KlosterStandort.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_germaniasacra_domain_model_klosterstandort.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_germaniasacra_domain_model_bearbeitungsstatus', 'EXT:germaniasacra/Resources/Private/Language/locallang_csh_tx_germaniasacra_domain_model_bearbeitungsstatus.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_germaniasacra_domain_model_bearbeitungsstatus');
$TCA['tx_germaniasacra_domain_model_bearbeitungsstatus'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:germaniasacra/Resources/Private/Language/locallang_db.xlf:tx_germaniasacra_domain_model_bearbeitungsstatus',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Bearbeitungsstatus.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_germaniasacra_domain_model_bearbeitungsstatus.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_germaniasacra_domain_model_personallistenstatus', 'EXT:germaniasacra/Resources/Private/Language/locallang_csh_tx_germaniasacra_domain_model_personallistenstatus.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_germaniasacra_domain_model_personallistenstatus');
$TCA['tx_germaniasacra_domain_model_personallistenstatus'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:germaniasacra/Resources/Private/Language/locallang_db.xlf:tx_germaniasacra_domain_model_personallistenstatus',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Personallistenstatus.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_germaniasacra_domain_model_personallistenstatus.gif'
	),
);

?>
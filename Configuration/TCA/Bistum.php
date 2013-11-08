<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_germaniasacra_domain_model_bistum'] = array(
	'ctrl' => $TCA['tx_germaniasacra_domain_model_bistum']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, bistum, kirchenprovinz, bemerkung, ist_erzbistum, shapefile',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, bistum, kirchenprovinz, bemerkung, ist_erzbistum, shapefile,--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_germaniasacra_domain_model_bistum',
				'foreign_table_where' => 'AND tx_germaniasacra_domain_model_bistum.pid=###CURRENT_PID### AND tx_germaniasacra_domain_model_bistum.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'bistum' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:germaniasacra/Resources/Private/Language/locallang_db.xlf:tx_germaniasacra_domain_model_bistum.bistum',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'kirchenprovinz' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:germaniasacra/Resources/Private/Language/locallang_db.xlf:tx_germaniasacra_domain_model_bistum.kirchenprovinz',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bemerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:germaniasacra/Resources/Private/Language/locallang_db.xlf:tx_germaniasacra_domain_model_bistum.bemerkung',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
		),
		'ist_erzbistum' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:germaniasacra/Resources/Private/Language/locallang_db.xlf:tx_germaniasacra_domain_model_bistum.ist_erzbistum',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'shapefile' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:germaniasacra/Resources/Private/Language/locallang_db.xlf:tx_germaniasacra_domain_model_bistum.shapefile',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
	),
);

?>
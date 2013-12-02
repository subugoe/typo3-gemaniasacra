<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_germaniasacra_domain_model_kloster'] = array(
	'ctrl' => $TCA['tx_germaniasacra_domain_model_kloster']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, kloster, kloster_id, patrozinium, bemerkung, band_seite, text_gs_band, band, url, standort, bearbeitungsstatus, personallistenstatus, orden, literatur',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, kloster, kloster_id, patrozinium, bemerkung, band_seite, text_gs_band, band, url, standort, bearbeitungsstatus, personallistenstatus, orden, literatur,--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'),
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
				'foreign_table' => 'tx_germaniasacra_domain_model_kloster',
				'foreign_table_where' => 'AND tx_germaniasacra_domain_model_kloster.pid=###CURRENT_PID### AND tx_germaniasacra_domain_model_kloster.sys_language_uid IN (-1,0)',
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
		'kloster' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:germaniasacra/Resources/Private/Language/locallang_db.xlf:tx_germaniasacra_domain_model_kloster.kloster',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'kloster_id' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:germaniasacra/Resources/Private/Language/locallang_db.xlf:tx_germaniasacra_domain_model_kloster.kloster_id',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'patrozinium' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:germaniasacra/Resources/Private/Language/locallang_db.xlf:tx_germaniasacra_domain_model_kloster.patrozinium',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bemerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:germaniasacra/Resources/Private/Language/locallang_db.xlf:tx_germaniasacra_domain_model_kloster.bemerkung',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
		),
		'band_seite' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:germaniasacra/Resources/Private/Language/locallang_db.xlf:tx_germaniasacra_domain_model_kloster.band_seite',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'text_gs_band' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:germaniasacra/Resources/Private/Language/locallang_db.xlf:tx_germaniasacra_domain_model_kloster.text_gs_band',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
		),
		'band' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:germaniasacra/Resources/Private/Language/locallang_db.xlf:tx_germaniasacra_domain_model_kloster.band',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_germaniasacra_domain_model_band',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'url' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:germaniasacra/Resources/Private/Language/locallang_db.xlf:tx_germaniasacra_domain_model_kloster.url',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_germaniasacra_domain_model_url',
				'MM' => 'tx_germaniasacra_kloster_url_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_germaniasacra_domain_model_url',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
		'standort' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:germaniasacra/Resources/Private/Language/locallang_db.xlf:tx_germaniasacra_domain_model_kloster.standort',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_germaniasacra_domain_model_klosterstandort',
				'foreign_field' => 'kloster',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => TRUE,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'bearbeitungsstatus' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:germaniasacra/Resources/Private/Language/locallang_db.xlf:tx_germaniasacra_domain_model_kloster.bearbeitungsstatus',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_germaniasacra_domain_model_bearbeitungsstatus',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'personallistenstatus' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:germaniasacra/Resources/Private/Language/locallang_db.xlf:tx_germaniasacra_domain_model_kloster.personallistenstatus',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_germaniasacra_domain_model_personallistenstatus',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'orden' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:germaniasacra/Resources/Private/Language/locallang_db.xlf:tx_germaniasacra_domain_model_kloster.orden',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_germaniasacra_domain_model_klosterorden',
				'foreign_field' => 'kloster',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapseAll' => TRUE,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'literatur' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:germaniasacra/Resources/Private/Language/locallang_db.xlf:tx_germaniasacra_domain_model_kloster.literatur',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_germaniasacra_domain_model_literatur',
				'MM' => 'tx_germaniasacra_kloster_literatur_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_germaniasacra_domain_model_literatur',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
	),
);

?>
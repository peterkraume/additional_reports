<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "additional_reports".
 *
 * Auto generated 30-01-2014 15:58
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Useful informations in reports module',
	'description' => 'Useful informations in the reports module : xclass, ajax, cliKeys, eID, general status of the system (encoding, DB, php vars...), hooks, compare local and TER extension (diff), used content type, used plugins, ExtDirect... It can really help you during migration or new existing project (to have a global reports of the system).',
	'category' => 'misc',
	'shy' => 0,
	'version' => '2.6.5',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'CERDAN Yohann',
	'author_email' => 'cerdanyohann@yahoo.fr',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.0.0-5.5.99',
			'typo3' => '4.5.0-6.1.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:68:{s:9:"ChangeLog";s:4:"423a";s:16:"ext_autoload.php";s:4:"d33d";s:12:"ext_icon.gif";s:4:"87d7";s:17:"ext_localconf.php";s:4:"3d61";s:14:"ext_tables.php";s:4:"03d7";s:13:"locallang.xml";s:4:"5097";s:6:"README";s:4:"4109";s:43:"Classes/class.tx_additionalreports_main.php";s:4:"c554";s:45:"Classes/class.tx_additionalreports_report.php";s:4:"5694";s:43:"Classes/class.tx_additionalreports_util.php";s:4:"c76e";s:41:"Classes/Eid/class.tx_compareFiles_eID.php";s:4:"d987";s:51:"Classes/Reports/class.tx_additionalreports_ajax.php";s:4:"4748";s:54:"Classes/Reports/class.tx_additionalreports_clikeys.php";s:4:"87b2";s:54:"Classes/Reports/class.tx_additionalreports_dbcheck.php";s:4:"cc97";s:50:"Classes/Reports/class.tx_additionalreports_eid.php";s:4:"ba0a";s:56:"Classes/Reports/class.tx_additionalreports_extdirect.php";s:4:"32ae";s:57:"Classes/Reports/class.tx_additionalreports_extensions.php";s:4:"424e";s:52:"Classes/Reports/class.tx_additionalreports_hooks.php";s:4:"b50e";s:56:"Classes/Reports/class.tx_additionalreports_logerrors.php";s:4:"2302";s:54:"Classes/Reports/class.tx_additionalreports_plugins.php";s:4:"3e42";s:60:"Classes/Reports/class.tx_additionalreports_realurlerrors.php";s:4:"d93f";s:53:"Classes/Reports/class.tx_additionalreports_status.php";s:4:"3781";s:59:"Classes/Reports/class.tx_additionalreports_websitesconf.php";s:4:"a1d1";s:53:"Classes/Reports/class.tx_additionalreports_xclass.php";s:4:"a927";s:40:"Classes/ViewHelpers/InListViewHelper.php";s:4:"ce3c";s:37:"Classes/ViewHelpers/RawViewHelper.php";s:4:"1035";s:49:"Classes/ViewHelpers/Widget/PaginateViewHelper.php";s:4:"5a31";s:60:"Classes/ViewHelpers/Widget/Controller/PaginateController.php";s:4:"b936";s:43:"Resources/Private/Templates/ajax-fluid.html";s:4:"3252";s:46:"Resources/Private/Templates/clikeys-fluid.html";s:4:"bbab";s:46:"Resources/Private/Templates/dbcheck-fluid.html";s:4:"e452";s:42:"Resources/Private/Templates/eid-fluid.html";s:4:"0192";s:48:"Resources/Private/Templates/extdirect-fluid.html";s:4:"125f";s:49:"Resources/Private/Templates/extensions-fluid.html";s:4:"da46";s:44:"Resources/Private/Templates/hooks-fluid.html";s:4:"34c1";s:48:"Resources/Private/Templates/logerrors-fluid.html";s:4:"42a4";s:46:"Resources/Private/Templates/plugins-fluid.html";s:4:"3933";s:52:"Resources/Private/Templates/realurlerrors-fluid.html";s:4:"1402";s:45:"Resources/Private/Templates/status-fluid.html";s:4:"3805";s:50:"Resources/Private/Templates/websiteconf-fluid.html";s:4:"77a8";s:45:"Resources/Private/Templates/xclass-fluid.html";s:4:"f227";s:66:"Resources/Private/Templates/ViewHelpers/Widget/Paginate/Index.html";s:4:"62e0";s:45:"Resources/Public/Css/tx_additionalreports.css";s:4:"f56f";s:52:"Resources/Public/Icons/tx_additionalreports_ajax.png";s:4:"84bb";s:55:"Resources/Public/Icons/tx_additionalreports_clikeys.png";s:4:"84bb";s:55:"Resources/Public/Icons/tx_additionalreports_dbcheck.png";s:4:"84bb";s:51:"Resources/Public/Icons/tx_additionalreports_eid.png";s:4:"84bb";s:57:"Resources/Public/Icons/tx_additionalreports_extdirect.png";s:4:"84bb";s:58:"Resources/Public/Icons/tx_additionalreports_extensions.png";s:4:"84bb";s:53:"Resources/Public/Icons/tx_additionalreports_hooks.png";s:4:"84bb";s:57:"Resources/Public/Icons/tx_additionalreports_logerrors.png";s:4:"84bb";s:55:"Resources/Public/Icons/tx_additionalreports_plugins.png";s:4:"84bb";s:61:"Resources/Public/Icons/tx_additionalreports_realurlerrors.png";s:4:"84bb";s:54:"Resources/Public/Icons/tx_additionalreports_status.png";s:4:"84bb";s:60:"Resources/Public/Icons/tx_additionalreports_websitesconf.png";s:4:"84bb";s:54:"Resources/Public/Icons/tx_additionalreports_xclass.png";s:4:"84bb";s:36:"Resources/Public/Shadowbox/close.png";s:4:"370c";s:38:"Resources/Public/Shadowbox/loading.gif";s:4:"69f7";s:35:"Resources/Public/Shadowbox/next.png";s:4:"1c8c";s:36:"Resources/Public/Shadowbox/pause.png";s:4:"b960";s:35:"Resources/Public/Shadowbox/play.png";s:4:"a404";s:39:"Resources/Public/Shadowbox/previous.png";s:4:"156f";s:40:"Resources/Public/Shadowbox/shadowbox.css";s:4:"7145";s:39:"Resources/Public/Shadowbox/shadowbox.js";s:4:"89d6";s:17:"Tests/phpunit.xml";s:4:"5f50";s:23:"Tests/Unit/MainTest.php";s:4:"4368";s:23:"Tests/Unit/UtilTest.php";s:4:"f5ea";s:14:"doc/manual.sxw";s:4:"6c1f";}',
	'suggests' => array(
	),
);

?>
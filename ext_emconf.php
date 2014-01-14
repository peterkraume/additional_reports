<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "additional_reports".
 *
 * Auto generated 08-01-2014 09:18
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
	'version' => '2.6.3',
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
	'_md5_values_when_last_written' => 'a:74:{s:9:"ChangeLog";s:4:"423a";s:16:"ext_autoload.php";s:4:"55c8";s:12:"ext_icon.gif";s:4:"87d7";s:17:"ext_localconf.php";s:4:"ee41";s:14:"ext_tables.php";s:4:"3f6d";s:13:"locallang.xml";s:4:"5097";s:6:"README";s:4:"4109";s:43:"Classes/class.tx_additionalreports_main.php";s:4:"d983";s:45:"Classes/class.tx_additionalreports_report.php";s:4:"5694";s:43:"Classes/class.tx_additionalreports_util.php";s:4:"3a0d";s:40:"Classes/ViewHelpers/InListViewHelper.php";s:4:"ce3c";s:37:"Classes/ViewHelpers/RawViewHelper.php";s:4:"1035";s:49:"Classes/ViewHelpers/Widget/PaginateViewHelper.php";s:4:"5a31";s:60:"Classes/ViewHelpers/Widget/Controller/PaginateController.php";s:4:"b936";s:66:"Resources/Private/Templates/ViewHelpers/Widget/Paginate/Index.html";s:4:"62e0";s:14:"doc/manual.sxw";s:4:"6c1f";s:33:"eID/class.tx_compareFiles_eID.php";s:4:"6c94";s:14:"libs/close.png";s:4:"370c";s:16:"libs/loading.gif";s:4:"69f7";s:13:"libs/next.png";s:4:"1c8c";s:14:"libs/pause.png";s:4:"b960";s:13:"libs/play.png";s:4:"a404";s:17:"libs/previous.png";s:4:"156f";s:18:"libs/shadowbox.css";s:4:"6b2e";s:17:"libs/shadowbox.js";s:4:"e302";s:56:"reports/reports_ajax/class.tx_additionalreports_ajax.php";s:4:"47fb";s:50:"reports/reports_ajax/tx_additionalreports_ajax.png";s:4:"84bb";s:62:"reports/reports_clikeys/class.tx_additionalreports_clikeys.php";s:4:"6ad2";s:56:"reports/reports_clikeys/tx_additionalreports_clikeys.png";s:4:"84bb";s:62:"reports/reports_dbcheck/class.tx_additionalreports_dbcheck.php";s:4:"2f8a";s:56:"reports/reports_dbcheck/tx_additionalreports_dbcheck.png";s:4:"84bb";s:54:"reports/reports_eid/class.tx_additionalreports_eid.php";s:4:"361e";s:48:"reports/reports_eid/tx_additionalreports_eid.png";s:4:"84bb";s:66:"reports/reports_extdirect/class.tx_additionalreports_extdirect.php";s:4:"48b6";s:60:"reports/reports_extdirect/tx_additionalreports_extdirect.png";s:4:"84bb";s:68:"reports/reports_extensions/class.tx_additionalreports_extensions.php";s:4:"6767";s:62:"reports/reports_extensions/tx_additionalreports_extensions.png";s:4:"84bb";s:58:"reports/reports_hooks/class.tx_additionalreports_hooks.php";s:4:"eae5";s:52:"reports/reports_hooks/tx_additionalreports_hooks.png";s:4:"84bb";s:66:"reports/reports_logerrors/class.tx_additionalreports_logerrors.php";s:4:"620e";s:60:"reports/reports_logerrors/tx_additionalreports_logerrors.png";s:4:"84bb";s:62:"reports/reports_plugins/class.tx_additionalreports_plugins.php";s:4:"186a";s:56:"reports/reports_plugins/tx_additionalreports_plugins.png";s:4:"84bb";s:74:"reports/reports_realurlerrors/class.tx_additionalreports_realurlerrors.php";s:4:"49af";s:68:"reports/reports_realurlerrors/tx_additionalreports_realurlerrors.png";s:4:"84bb";s:60:"reports/reports_status/class.tx_additionalreports_status.php";s:4:"8617";s:54:"reports/reports_status/tx_additionalreports_status.png";s:4:"84bb";s:72:"reports/reports_websitesconf/class.tx_additionalreports_websitesconf.php";s:4:"f8ac";s:66:"reports/reports_websitesconf/tx_additionalreports_websitesconf.png";s:4:"84bb";s:60:"reports/reports_xclass/class.tx_additionalreports_xclass.php";s:4:"b036";s:54:"reports/reports_xclass/tx_additionalreports_xclass.png";s:4:"84bb";s:32:"res/css/tx_additionalreports.css";s:4:"2d6f";s:28:"res/images/control_first.gif";s:4:"04e1";s:37:"res/images/control_first_disabled.gif";s:4:"62ae";s:27:"res/images/control_last.gif";s:4:"78a2";s:36:"res/images/control_last_disabled.gif";s:4:"bcce";s:27:"res/images/control_next.gif";s:4:"7d21";s:36:"res/images/control_next_disabled.gif";s:4:"9fa2";s:31:"res/images/control_previous.gif";s:4:"d0d7";s:40:"res/images/control_previous_disabled.gif";s:4:"9cc0";s:24:"res/images/refresh_n.gif";s:4:"18f6";s:29:"res/templates/ajax-fluid.html";s:4:"ae92";s:32:"res/templates/clikeys-fluid.html";s:4:"0ff6";s:32:"res/templates/dbcheck-fluid.html";s:4:"4ad8";s:28:"res/templates/eid-fluid.html";s:4:"3518";s:34:"res/templates/extdirect-fluid.html";s:4:"6d1f";s:35:"res/templates/extensions-fluid.html";s:4:"07eb";s:30:"res/templates/hooks-fluid.html";s:4:"cb1c";s:34:"res/templates/logerrors-fluid.html";s:4:"a8e6";s:32:"res/templates/plugins-fluid.html";s:4:"9474";s:38:"res/templates/realurlerrors-fluid.html";s:4:"68aa";s:31:"res/templates/status-fluid.html";s:4:"f0df";s:36:"res/templates/websiteconf-fluid.html";s:4:"8bad";s:31:"res/templates/xclass-fluid.html";s:4:"f227";}',
	'suggests' => array(
	),
);

?>
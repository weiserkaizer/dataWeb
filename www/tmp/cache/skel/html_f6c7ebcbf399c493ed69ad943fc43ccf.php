<?php

/*
 * Squelette : ../plugins/auto/verifier/v1.8.0/prive/style_prive_plugin_verifier.html
 * Date :      Wed, 11 Jul 2018 07:49:58 GMT
 * Compile :   Tue, 31 Jul 2018 13:37:51 GMT
 * Boucles :   _verifier, _plugin_yaml
 */ 

function BOUCLE_verifierhtml_f6c7ebcbf399c493ed69ad943fc43ccf(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(appliquer_filtre('verifier','verifier_lister_disponibles'));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_verifier';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle",
		"icone");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('../plugins/auto/verifier/v1.8.0/prive/style_prive_plugin_verifier.html','html_f6c7ebcbf399c493ed69ad943fc43ccf','_verifier',19,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	.navigation_avec_icones .bando2_verifier_' .
interdire_scripts(safehtml($Pile[$SP]['cle'])) .
' { ' .
(($t1 = strval(interdire_scripts(extraire_attribut(filtrer('image_graver', filtrer('image_reduire',safehtml((isset($Pile[$SP]['icone'])?$Pile[$SP]['icone']:(@$Pile[0]['icone']))),'16')),'src'))))!=='' ?
		('background-image: url(' . $t1 . ');') :
		'') .
' }
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_verifier @ ../plugins/auto/verifier/v1.8.0/prive/style_prive_plugin_verifier.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_plugin_yamlhtml_f6c7ebcbf399c493ed69ad943fc43ccf(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = defined('_DIR_PLUGIN_YAML');

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_plugin_yaml';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"CONDITION",
		$command,
		array('../plugins/auto/verifier/v1.8.0/prive/style_prive_plugin_verifier.html','html_f6c7ebcbf399c493ed69ad943fc43ccf','_plugin_yaml',18,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
BOUCLE_verifierhtml_f6c7ebcbf399c493ed69ad943fc43ccf($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_plugin_yaml @ ../plugins/auto/verifier/v1.8.0/prive/style_prive_plugin_verifier.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/verifier/v1.8.0/prive/style_prive_plugin_verifier.html
// Temps de compilation total: 1.904 ms
//

function html_f6c7ebcbf399c493ed69ad943fc43ccf($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>' .
'<'.'?php header(' . _q('Content-Type: text/css; charset=iso-8859-15') . '); ?'.'>' .
'<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>body.verifier_doc {
	background-color: #efefef;
}
' .
(($t1 = BOUCLE_plugin_yamlhtml_f6c7ebcbf399c493ed69ad943fc43ccf($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
' .
	_T('verifier:plugin_yaml_inactif') .
	'
'))));

	return analyse_resultat_skel('html_f6c7ebcbf399c493ed69ad943fc43ccf', $Cache, $page, '../plugins/auto/verifier/v1.8.0/prive/style_prive_plugin_verifier.html');
}
?>
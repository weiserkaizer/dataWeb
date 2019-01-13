<?php

/*
 * Squelette : prive/formulaires/inc-options-langues.html
 * Date :      Wed, 11 Jul 2018 07:42:31 GMT
 * Compile :   Sat, 11 Aug 2018 14:52:41 GMT
 * Boucles :   _langues
 */ 

function BOUCLE_langueshtml_9f0af455f604bd854a9d8e5615e1c8fe(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(interdire_scripts(liste_options_langues(table_valeur(@$Pile[0], (string)'name', null))));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_langues';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
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
		array('prive/formulaires/inc-options-langues.html','html_9f0af455f604bd854a9d8e5615e1c8fe','_langues',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('public|spip|ecrire:info_multi_herit');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
(($t1 = strval(interdire_scripts(((($Pile[$SP]['valeur'] == interdire_scripts(table_valeur(@$Pile[0], (string)'herit', null)))) ?' ' :''))))!=='' ?
		($t1 . (	'
		<option class=\'maj-debut on\' value=\'herit\'' .
	(($t2 = strval(interdire_scripts(((($Pile[$SP]['valeur'] == interdire_scripts(table_valeur(@$Pile[0], (string)'default', null)))) ?' ' :''))))!=='' ?
			($t2 . 'selected="selected"') :
			'') .
	' dir="' .
	interdire_scripts(lang_dir($Pile[$SP]['valeur'],'ltr','rtl')) .
	'">&#91;' .
	interdire_scripts($Pile[$SP]['valeur']) .
	'&#93; ' .
	interdire_scripts(traduire_nom_langue($Pile[$SP]['valeur'])) .
	' (' .
	$l1 .
	')</option>
	')) :
		'') .
(($t1 = strval(interdire_scripts(((($Pile[$SP]['valeur'] == interdire_scripts(table_valeur(@$Pile[0], (string)'herit', null)))) ?'' :' '))))!=='' ?
		($t1 . (	'
		<option value=\'' .
	interdire_scripts($Pile[$SP]['valeur']) .
	'\'' .
	(($t2 = strval(interdire_scripts(((($Pile[$SP]['valeur'] == interdire_scripts(table_valeur(@$Pile[0], (string)'default', null)))) ?' ' :''))))!=='' ?
			($t2 . 'selected="selected"') :
			'') .
	' dir="' .
	interdire_scripts(lang_dir($Pile[$SP]['valeur'],'ltr','rtl')) .
	'">&#91;' .
	interdire_scripts($Pile[$SP]['valeur']) .
	'&#93; ' .
	interdire_scripts(traduire_nom_langue($Pile[$SP]['valeur'])) .
	'</option>
	')) :
		'') .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_langues @ prive/formulaires/inc-options-langues.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette prive/formulaires/inc-options-langues.html
// Temps de compilation total: 57.693 ms
//

function html_9f0af455f604bd854a9d8e5615e1c8fe($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_langueshtml_9f0af455f604bd854a9d8e5615e1c8fe($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_9f0af455f604bd854a9d8e5615e1c8fe', $Cache, $page, 'prive/formulaires/inc-options-langues.html');
}
?>
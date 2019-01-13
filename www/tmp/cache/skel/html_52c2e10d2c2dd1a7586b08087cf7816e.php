<?php

/*
 * Squelette : ../plugins/auto/menus/v1.6.11/saisies/menus_multiple.html
 * Date :      Wed, 11 Jul 2018 07:54:01 GMT
 * Compile :   Wed, 01 Aug 2018 05:51:33 GMT
 * Boucles :   _selection
 */ 

function BOUCLE_selectionhtml_52c2e10d2c2dd1a7586b08087cf7816e(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'menus';
		$command['id'] = '_selection';
		$command['from'] = array('menus' => 'spip_menus');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("menus.titre",
		"menus.identifiant");
		$command['orderby'] = array('menus.titre');
		$command['where'] = 
			array(
			array('=', 'menus.id_menus_entree', 0));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/menus/v1.6.11/saisies/menus_multiple.html','html_52c2e10d2c2dd1a7586b08087cf7816e','_selection',21,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	<option value="' .
interdire_scripts($Pile[$SP]['identifiant']) .
'" ' .
(($t1 = strval(interdire_scripts(((in_array($Pile[$SP]['identifiant'],interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur', null), table_valeur($Pile["vars"], (string)'defaut', null)),true)))) ?' ' :''))))!=='' ?
		($t1 . ' selected="selected"') :
		'') .
'>' .
interdire_scripts(typo(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) .
' (' .
interdire_scripts($Pile[$SP]['identifiant']) .
')</option>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_selection @ ../plugins/auto/menus/v1.6.11/saisies/menus_multiple.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/menus/v1.6.11/saisies/menus_multiple.html
// Temps de compilation total: 16.104 ms
//

function html_52c2e10d2c2dd1a7586b08087cf7816e($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'


' .
vide($Pile['vars'][$_zzz=(string)'defaut'] = interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'defaut', null),true))) .
vide($Pile['vars'][$_zzz=(string)'defaut'] = (is_string(table_valeur($Pile["vars"], (string)'defaut', null)) ? saisies_chaine2tableau(table_valeur($Pile["vars"], (string)'defaut', null)):((($a = table_valeur($Pile["vars"], (string)'defaut', null)) OR (is_string($a) AND strlen($a))) ? $a : array()))) .
'<select name="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'[]" id="champ_' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'" multiple="multiple"' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'class', null),true))))!=='' ?
		(' class="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'disable', null),true))))!=='' ?
		(' disabled="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'readonly', null),true))))!=='' ?
		(' readonly="' . $t1 . '"') :
		'') .
'>
' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'cacher_option_intro', null),true)) ?'' :' '))))!=='' ?
		($t1 . (	'<option value="">' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'option_intro', null),true)) .
	'</option>')) :
		'') .
'
' .
BOUCLE_selectionhtml_52c2e10d2c2dd1a7586b08087cf7816e($Cache, $Pile, $doublons, $Numrows, $SP) .
'
</select>
');

	return analyse_resultat_skel('html_52c2e10d2c2dd1a7586b08087cf7816e', $Cache, $page, '../plugins/auto/menus/v1.6.11/saisies/menus_multiple.html');
}
?>
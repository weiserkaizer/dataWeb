<?php

/*
 * Squelette : ../plugins/auto/saisies/v2.26.5/saisies/selection.html
 * Date :      Tue, 31 Jul 2018 13:38:21 GMT
 * Compile :   Tue, 31 Jul 2018 13:39:13 GMT
 * Boucles :   _optgroup, _cond, _selection
 */ 

function BOUCLE_optgrouphtml_26e8f882b22fdd880f6415c07950a90e(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(interdire_scripts($Pile[$SP-1]['valeur']));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_optgroup';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".cle",
		".valeur");
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
		array('../plugins/auto/saisies/v2.26.5/saisies/selection.html','html_26e8f882b22fdd880f6415c07950a90e','_optgroup',51,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		<option value="' .
interdire_scripts($Pile[$SP]['cle']) .
'"' .
(($t1 = strval(interdire_scripts(((($Pile[$SP]['cle'] == table_valeur($Pile["vars"], (string)'valeur', null))) ?' ' :''))))!=='' ?
		($t1 . 'selected="selected"') :
		'') .
(($t1 = strval(interdire_scripts(((in_any($Pile[$SP]['cle'],table_valeur($Pile["vars"], (string)'disabled', null))) ?' ' :''))))!=='' ?
		($t1 . ' disabled="disabled"') :
		'') .
'>' .
interdire_scripts($Pile[$SP]['valeur']) .
'</option>
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_optgroup @ ../plugins/auto/saisies/v2.26.5/saisies/selection.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_condhtml_26e8f882b22fdd880f6415c07950a90e(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(is_array($Pile[$SP]['valeur']));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_cond';
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
		array('../plugins/auto/saisies/v2.26.5/saisies/selection.html','html_26e8f882b22fdd880f6415c07950a90e','_cond',49,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= BOUCLE_optgrouphtml_26e8f882b22fdd880f6415c07950a90e($Cache, $Pile, $doublons, $Numrows, $SP);
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_cond @ ../plugins/auto/saisies/v2.26.5/saisies/selection.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_selectionhtml_26e8f882b22fdd880f6415c07950a90e(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(table_valeur($Pile["vars"], (string)'data', null));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_selection';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle");
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
		array('../plugins/auto/saisies/v2.26.5/saisies/selection.html','html_26e8f882b22fdd880f6415c07950a90e','_selection',48,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
(($t1 = BOUCLE_condhtml_26e8f882b22fdd880f6415c07950a90e($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
	<optgroup label="' .
		interdire_scripts($Pile[$SP]['cle']) .
		'">
	') . $t1 . '
	</optgroup>
	') :
		((	'
	<option value="' .
	interdire_scripts($Pile[$SP]['cle']) .
	'"' .
	(($t2 = strval(interdire_scripts(((($Pile[$SP]['cle'] == table_valeur($Pile["vars"], (string)'valeur', null))) ?' ' :''))))!=='' ?
			($t2 . 'selected="selected"') :
			'') .
	(($t2 = strval(interdire_scripts(((in_any($Pile[$SP]['cle'],table_valeur($Pile["vars"], (string)'disabled', null))) ?' ' :''))))!=='' ?
			($t2 . ' disabled="disabled"') :
			'') .
	'>' .
	interdire_scripts($Pile[$SP]['valeur']) .
	'</option>
	'))) .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_selection @ ../plugins/auto/saisies/v2.26.5/saisies/selection.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/saisies/v2.26.5/saisies/selection.html
// Temps de compilation total: 9.002 ms
//

function html_26e8f882b22fdd880f6415c07950a90e($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'


' .
vide($Pile['vars'][$_zzz=(string)'data'] = interdire_scripts(saisies_chaine2tableau(sinon(table_valeur(@$Pile[0], (string)'data', null), interdire_scripts(table_valeur(@$Pile[0], (string)'datas', null)))))) .
'
' .
vide($Pile['vars'][$_zzz=(string)'valeur'] = interdire_scripts((is_null(entites_html(table_valeur(@$Pile[0], (string)'valeur_forcee', null),true)) ? interdire_scripts((is_null(entites_html(table_valeur(@$Pile[0], (string)'valeur', null),true)) ? interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'defaut', null),true)):interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'valeur', null),true)))):interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'valeur_forcee', null),true))))) .
vide($Pile['vars'][$_zzz=(string)'disabled'] = interdire_scripts((strlen(entites_html(table_valeur(@$Pile[0], (string)'disable_choix', null),true)) ? interdire_scripts(filtre_explode_dist(entites_html(table_valeur(@$Pile[0], (string)'disable_choix', null),true),',')):(	array() .
		'
')))) .
'<select ' .
(('')  ?
		(' ' . (($t2 = strval(interdire_scripts((((((entites_html(table_valeur(@$Pile[0], (string)'obligatoire', null),true)) AND (interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'obligatoire', null),true) != 'non')))) ?' ' :'')) ?' ' :''))))!=='' ?
			($t2 . ' required="required"') :
			'')) :
		'') .
' name="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'" id="champ_' .
interdire_scripts(saisie_nom2classe(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))),true))) .
'"' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'class', null),true))))!=='' ?
		(' class="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'disable', null),true))))!=='' ?
		(' disabled="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'size', null),true))))!=='' ?
		(' size="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'attributs', null))))!=='' ?
		(' ' . $t1) :
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
BOUCLE_selectionhtml_26e8f882b22fdd880f6415c07950a90e($Cache, $Pile, $doublons, $Numrows, $SP) .
'
</select>
');

	return analyse_resultat_skel('html_26e8f882b22fdd880f6415c07950a90e', $Cache, $page, '../plugins/auto/saisies/v2.26.5/saisies/selection.html');
}
?>
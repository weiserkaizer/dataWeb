<?php

/*
 * Squelette : ../plugins/auto/saisies/v2.26.5/saisies/input.html
 * Date :      Wed, 11 Jul 2018 07:50:00 GMT
 * Compile :   Tue, 31 Jul 2018 13:39:13 GMT
 * Boucles :   _selection
 */ 

function BOUCLE_selectionhtml_bda37bfcc8ae895b6f364b3e3343e73a(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

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
		array('../plugins/auto/saisies/v2.26.5/saisies/input.html','html_bda37bfcc8ae895b6f364b3e3343e73a','_selection',41,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (($t1 = strval(interdire_scripts(attribut_html($Pile[$SP]['valeur']))))!=='' ?
		('	<option value="' . $t1 . '"></option>
') :
		'');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_selection @ ../plugins/auto/saisies/v2.26.5/saisies/input.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/saisies/v2.26.5/saisies/input.html
// Temps de compilation total: 7.487 ms
//

function html_bda37bfcc8ae895b6f364b3e3343e73a($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'

' .
vide($Pile['vars'][$_zzz=(string)'type'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'type', null), 'text'),true))) .
'
' .
vide($Pile['vars'][$_zzz=(string)'data'] = interdire_scripts(sinon(table_valeur(@$Pile[0], (string)'data', null), interdire_scripts(table_valeur(@$Pile[0], (string)'datas', null))))) .
vide($Pile['vars'][$_zzz=(string)'data'] = (is_string(table_valeur($Pile["vars"], (string)'data', null)) ? saisies_chaine2tableau(table_valeur($Pile["vars"], (string)'data', null)):table_valeur($Pile["vars"], (string)'data', null))) .
'
' .
vide($Pile['vars'][$_zzz=(string)'data'] = ('' ? table_valeur($Pile["vars"], (string)'data', null):'')) .
'
' .
vide($Pile['vars'][$_zzz=(string)'val_autocomplete'] = array()) .
vide($Pile['vars'][$_zzz=(string)'val_autocomplete'] = filtre_push(table_valeur($Pile["vars"], (string)'val_autocomplete', null),'on')) .
vide($Pile['vars'][$_zzz=(string)'val_autocomplete'] = filtre_push(table_valeur($Pile["vars"], (string)'val_autocomplete', null),'off')) .
vide($Pile['vars'][$_zzz=(string)'list_id'] = interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'list', null),true))) .
(($t1 = BOUCLE_selectionhtml_bda37bfcc8ae895b6f364b3e3343e73a($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
' .
		vide($Pile['vars'][$_zzz=(string)'list_id'] = sinon(table_valeur($Pile["vars"], (string)'list_id', null), (($t5 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))))!=='' ?
						('champ_' . $t5 . '_data') :
						''))) .
		'
<datalist id="' .
		table_valeur($Pile["vars"], (string)'list_id', null) .
		'">
') . $t1 . '
</datalist>
') :
		'') .
'
<input type="' .
table_valeur($Pile["vars"], (string)'type', null) .
'" name="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'" class="' .
table_valeur($Pile["vars"], (string)'type', null) .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'class', null),true))))!=='' ?
		(' ' . $t1) :
		'') .
'" id="champ_' .
interdire_scripts(saisie_nom2classe(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))),true))) .
'"' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'list_id', null)))!=='' ?
		(' list="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_forcee', null), interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'defaut', null),true))),true))),true))))!=='' ?
		(' value="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'size', null),true))))!=='' ?
		(' size="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'maxlength', null),true))))!=='' ?
		(' maxlength="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'disable', null),true))))!=='' ?
		(' disabled="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'readonly', null),true))))!=='' ?
		(' readonly="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'placeholder', null),true))))!=='' ?
		(' placeholder="' . $t1 . '"') :
		'') .
(('')  ?
		(' ' . (	(($t2 = strval(interdire_scripts((((((entites_html(table_valeur(@$Pile[0], (string)'obligatoire', null),true)) AND (interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'obligatoire', null),true) != 'non')))) ?' ' :'')) ?' ' :''))))!=='' ?
			($t2 . ' required="required"') :
			'') .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'min', null),true))))!=='' ?
			(' min="' . $t2 . '"') :
			'') .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'max', null),true))))!=='' ?
			(' max="' . $t2 . '"') :
			'') .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'step', null),true))))!=='' ?
			(' step="' . $t2 . '"') :
			'') .
	(($t2 = strval(interdire_scripts((((((entites_html(table_valeur(@$Pile[0], (string)'autofocus', null),true)) AND (interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'autofocus', null),true) != 'non')))) ?' ' :'')) ?' ' :''))))!=='' ?
			($t2 . ' autofocus="autofocus"') :
			''))) :
		'') .
((filtre_find(table_valeur($Pile["vars"], (string)'val_autocomplete', null),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'autocomplete', null),true))))  ?
		(' ' . (	' autocomplete="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'autocomplete', null),true)) .
	'"')) :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'describedby', null),true))))!=='' ?
		(' aria-describedby="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'attributs', null))))!=='' ?
		(' ' . $t1) :
		'') .
' />
');

	return analyse_resultat_skel('html_bda37bfcc8ae895b6f364b3e3343e73a', $Cache, $page, '../plugins/auto/saisies/v2.26.5/saisies/input.html');
}
?>
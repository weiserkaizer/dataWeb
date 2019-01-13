<?php

/*
 * Squelette : ../plugins/auto/saisies/v2.26.5/saisies/radio.html
 * Date :      Wed, 11 Jul 2018 07:50:00 GMT
 * Compile :   Tue, 31 Jul 2018 13:39:14 GMT
 * Boucles :   _radio
 */ 

function BOUCLE_radiohtml_816ab4c2cec7bed531e296d0e09b43db(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(table_valeur($Pile["vars"], (string)'data', null));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_radio';
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
		array('../plugins/auto/saisies/v2.26.5/saisies/radio.html','html_816ab4c2cec7bed531e296d0e09b43db','_radio',28,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_radio']['compteur_boucle'] = 0;
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_radio']['compteur_boucle']++;
		$t0 .= (
'
' .
vide($Pile['vars'][$_zzz=(string)'disabled'] = interdire_scripts((is_string(entites_html(table_valeur(@$Pile[0], (string)'disable', null),true)) ? interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'disable', null),true)):interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)(	'disable/' .
			interdire_scripts($Pile[$SP]['cle'])), null),true))))) .
'<div class="' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'choix', null), 'choix'),true)) .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'choix', null), 'choix'),true))))!=='' ?
		(' ' . $t1 . (	'_' .
	interdire_scripts($Pile[$SP]['cle']))) :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'class', null),true))))!=='' ?
		(' ' . $t1) :
		'') .
'">
	<input type="radio" name="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'" class="radio" id="champ_' .
interdire_scripts(saisie_nom2classe(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))),true))) .
'_' .
$Numrows['_radio']['compteur_boucle'] .
'"' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_forcee', null), interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'defaut', null),true))),true))),true) == interdire_scripts($Pile[$SP]['cle']))) ?' ' :''))))!=='' ?
		(' ' . $t1 . 'checked="checked"') :
		'') .
' value="' .
interdire_scripts($Pile[$SP]['cle']) .
'"' .
(((table_valeur($Pile["vars"], (string)'disabled', null)) OR (interdire_scripts(in_array($Pile[$SP]['cle'],table_valeur($Pile["vars"], (string)'disable_choix', null)))))  ?
		(' ' . ' disabled="disabled"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'readonly', null),true))))!=='' ?
		(' readonly="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'describedby', null),true))))!=='' ?
		(' aria-describedby="' . $t1 . '"') :
		'') .
' />
	<label for="champ_' .
interdire_scripts(saisie_nom2classe(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))),true))) .
'_' .
$Numrows['_radio']['compteur_boucle'] .
'"' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_forcee', null), interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'defaut', null),true))),true))),true) == interdire_scripts($Pile[$SP]['cle']))) ?' ' :''))))!=='' ?
		($t1 . 'class="on"') :
		'') .
'>' .
interdire_scripts($Pile[$SP]['valeur']) .
'</label>
</div>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_radio @ ../plugins/auto/saisies/v2.26.5/saisies/radio.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/saisies/v2.26.5/saisies/radio.html
// Temps de compilation total: 6.994 ms
//

function html_816ab4c2cec7bed531e296d0e09b43db($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'


' .
vide($Pile['vars'][$_zzz=(string)'data'] = interdire_scripts(sinon(table_valeur(@$Pile[0], (string)'data', null), interdire_scripts(table_valeur(@$Pile[0], (string)'datas', null))))) .
vide($Pile['vars'][$_zzz=(string)'data'] = (is_string(table_valeur($Pile["vars"], (string)'data', null)) ? saisies_chaine2tableau(table_valeur($Pile["vars"], (string)'data', null)):table_valeur($Pile["vars"], (string)'data', null))) .
vide($Pile['vars'][$_zzz=(string)'disable_choix'] = array()) .
(($t1 = strval(interdire_scripts(((strlen(entites_html(table_valeur(@$Pile[0], (string)'disable_choix', null),true))) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	vide($Pile['vars'][$_zzz=(string)'disable_choix'] = interdire_scripts(filtre_explode_dist(trim(entites_html(table_valeur(@$Pile[0], (string)'disable_choix', null),true)),','))))) :
		'') .
'
' .
BOUCLE_radiohtml_816ab4c2cec7bed531e296d0e09b43db($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_816ab4c2cec7bed531e296d0e09b43db', $Cache, $page, '../plugins/auto/saisies/v2.26.5/saisies/radio.html');
}
?>
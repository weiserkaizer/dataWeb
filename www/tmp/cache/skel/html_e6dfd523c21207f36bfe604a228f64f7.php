<?php

/*
 * Squelette : ../plugins/auto/savecfg/v3.0.7/prive/formulaires_savecfg.html
 * Date :      Fri, 20 Jul 2018 07:20:16 GMT
 * Compile :   Tue, 31 Jul 2018 13:39:13 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/savecfg/v3.0.7/prive/formulaires_savecfg.html
// Temps de compilation total: 4.621 ms
//

function html_e6dfd523c21207f36bfe604a228f64f7($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][$_zzz=(string)'fond'] = match(self(),'(cfg=)(\\w+?)','2')) .
(($t1 = strval(interdire_scripts((((include_spip('inc/config')?lire_config(table_valeur($Pile["vars"], (string)'fond', null),null,false):'')) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	executer_balise_dynamique('FORMULAIRE_SAUVEGARDER_SAVECFG',
	array(),
	array('../plugins/auto/savecfg/v3.0.7/prive/formulaires_savecfg.html','html_e6dfd523c21207f36bfe604a228f64f7','',3,$GLOBALS['spip_lang'])) .
	'
<div class="nettoyeur"></div>
')) :
		'') .
'
' .
executer_balise_dynamique('FORMULAIRE_GERER_SAVECFG',
	array(),
	array('../plugins/auto/savecfg/v3.0.7/prive/formulaires_savecfg.html','html_e6dfd523c21207f36bfe604a228f64f7','',3,$GLOBALS['spip_lang'])) .
'
<div class="nettoyeur"></div>
');

	return analyse_resultat_skel('html_e6dfd523c21207f36bfe604a228f64f7', $Cache, $page, '../plugins/auto/savecfg/v3.0.7/prive/formulaires_savecfg.html');
}
?>
<?php

/*
 * Squelette : ../plugins/auto/savecfg/v3.0.7/prive/formulaire_savecfg_import.html
 * Date :      Fri, 20 Jul 2018 07:20:16 GMT
 * Compile :   Tue, 31 Jul 2018 13:39:13 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/savecfg/v3.0.7/prive/formulaire_savecfg_import.html
// Temps de compilation total: 2.595 ms
//

function html_25a5ec70191df8bffae14e45583d9b49($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
executer_balise_dynamique('FORMULAIRE_IMPORTER_SAVECFG',
	array(),
	array('../plugins/auto/savecfg/v3.0.7/prive/formulaire_savecfg_import.html','html_25a5ec70191df8bffae14e45583d9b49','',1,$GLOBALS['spip_lang'])) .
'
<div class="nettoyeur"></div>

' .
executer_balise_dynamique('FORMULAIRE_EXPORTER_SAVECFG',
	array(),
	array('../plugins/auto/savecfg/v3.0.7/prive/formulaire_savecfg_import.html','html_25a5ec70191df8bffae14e45583d9b49','',4,$GLOBALS['spip_lang'])) .
'
<div class="nettoyeur"></div>
');

	return analyse_resultat_skel('html_25a5ec70191df8bffae14e45583d9b49', $Cache, $page, '../plugins/auto/savecfg/v3.0.7/prive/formulaire_savecfg_import.html');
}
?>
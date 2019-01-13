<?php

/*
 * Squelette : ../plugins/auto/soyezcreateurs/v4.3.16/prive/squelettes/inclure/configurer_soyezcreateurs_google.html
 * Date :      Thu, 26 Jul 2018 13:23:59 GMT
 * Compile :   Wed, 01 Aug 2018 05:49:11 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/soyezcreateurs/v4.3.16/prive/squelettes/inclure/configurer_soyezcreateurs_google.html
// Temps de compilation total: 90.873 ms
//

function html_2ebd58ab37d593176faa105d13c49f53($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = executer_balise_dynamique('FORMULAIRE_CONFIGURER_SOYEZCREATEURS_GOOGLE',
	array(),
	array('../plugins/auto/soyezcreateurs/v4.3.16/prive/squelettes/inclure/configurer_soyezcreateurs_google.html','html_2ebd58ab37d593176faa105d13c49f53','',1,$GLOBALS['spip_lang']));

	return analyse_resultat_skel('html_2ebd58ab37d593176faa105d13c49f53', $Cache, $page, '../plugins/auto/soyezcreateurs/v4.3.16/prive/squelettes/inclure/configurer_soyezcreateurs_google.html');
}
?>
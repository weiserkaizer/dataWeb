<?php

/*
 * Squelette : ../plugins/auto/soyezcreateurs/v4.3.16/prive/squelettes/inclure/configurer_soyezcreateurs_layout.html
 * Date :      Fri, 03 Aug 2018 12:24:31 GMT
 * Compile :   Fri, 03 Aug 2018 14:15:58 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/soyezcreateurs/v4.3.16/prive/squelettes/inclure/configurer_soyezcreateurs_layout.html
// Temps de compilation total: 58.642 ms
//

function html_b7a69ec6b2099a44e1404bdf1782cfcc($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = executer_balise_dynamique('FORMULAIRE_CONFIGURER_SOYEZCREATEURS_LAYOUT',
	array(),
	array('../plugins/auto/soyezcreateurs/v4.3.16/prive/squelettes/inclure/configurer_soyezcreateurs_layout.html','html_b7a69ec6b2099a44e1404bdf1782cfcc','',1,$GLOBALS['spip_lang']));

	return analyse_resultat_skel('html_b7a69ec6b2099a44e1404bdf1782cfcc', $Cache, $page, '../plugins/auto/soyezcreateurs/v4.3.16/prive/squelettes/inclure/configurer_soyezcreateurs_layout.html');
}
?>
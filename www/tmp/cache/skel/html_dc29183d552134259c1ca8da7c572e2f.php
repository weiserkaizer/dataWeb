<?php

/*
 * Squelette : ../plugins/auto/soyezcreateurs/v4.3.16/prive/squelettes/inclure/configurer_soyezcreateurs.html
 * Date :      Thu, 26 Jul 2018 13:23:59 GMT
 * Compile :   Tue, 31 Jul 2018 13:39:13 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/soyezcreateurs/v4.3.16/prive/squelettes/inclure/configurer_soyezcreateurs.html
// Temps de compilation total: 1.114 ms
//

function html_dc29183d552134259c1ca8da7c572e2f($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = executer_balise_dynamique('FORMULAIRE_CONFIGURER_SOYEZCREATEURS',
	array(),
	array('../plugins/auto/soyezcreateurs/v4.3.16/prive/squelettes/inclure/configurer_soyezcreateurs.html','html_dc29183d552134259c1ca8da7c572e2f','',1,$GLOBALS['spip_lang']));

	return analyse_resultat_skel('html_dc29183d552134259c1ca8da7c572e2f', $Cache, $page, '../plugins/auto/soyezcreateurs/v4.3.16/prive/squelettes/inclure/configurer_soyezcreateurs.html');
}
?>
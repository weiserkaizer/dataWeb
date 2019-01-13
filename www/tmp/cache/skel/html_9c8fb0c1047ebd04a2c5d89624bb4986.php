<?php

/*
 * Squelette : ../plugins/auto/soyezcreateurs/v4.3.16/prive/squelettes/inclure/configurer_soyezcreateurs_couleurs.html
 * Date :      Fri, 03 Aug 2018 12:24:31 GMT
 * Compile :   Fri, 03 Aug 2018 12:25:26 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/soyezcreateurs/v4.3.16/prive/squelettes/inclure/configurer_soyezcreateurs_couleurs.html
// Temps de compilation total: 6.410 ms
//

function html_9c8fb0c1047ebd04a2c5d89624bb4986($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = executer_balise_dynamique('FORMULAIRE_CONFIGURER_SOYEZCREATEURS_COULEURS',
	array(),
	array('../plugins/auto/soyezcreateurs/v4.3.16/prive/squelettes/inclure/configurer_soyezcreateurs_couleurs.html','html_9c8fb0c1047ebd04a2c5d89624bb4986','',1,$GLOBALS['spip_lang']));

	return analyse_resultat_skel('html_9c8fb0c1047ebd04a2c5d89624bb4986', $Cache, $page, '../plugins/auto/soyezcreateurs/v4.3.16/prive/squelettes/inclure/configurer_soyezcreateurs_couleurs.html');
}
?>
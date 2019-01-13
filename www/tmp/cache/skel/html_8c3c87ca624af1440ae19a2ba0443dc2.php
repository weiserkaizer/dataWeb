<?php

/*
 * Squelette : plugins/auto/slick/v1.2.7/javascript/slick.spip.js.html
 * Date :      Mon, 16 Jul 2018 13:13:58 GMT
 * Compile :   Sat, 11 Aug 2018 14:48:54 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/slick/v1.2.7/javascript/slick.spip.js.html
// Temps de compilation total: 2.905 ms
//

function html_8c3c87ca624af1440ae19a2ba0443dc2($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'$(function () {
    $("' .
interdire_scripts((include_spip('inc/config')?lire_config('slick/selecteur',null,false):'')) .
'").slick(
        ' .
interdire_scripts(filtre_slick_config_to_json_dist((include_spip('inc/config')?lire_config('slick',null,false):''),array('selecteur', 'charger'))) .
'
    );
});
');

	return analyse_resultat_skel('html_8c3c87ca624af1440ae19a2ba0443dc2', $Cache, $page, 'plugins/auto/slick/v1.2.7/javascript/slick.spip.js.html');
}
?>
<?php

/*
 * Squelette : ../plugins/auto/soyezcreateurs/v4.3.16/prive/style_prive_plugin_soyezcreateurs.html
 * Date :      Thu, 26 Jul 2018 13:23:59 GMT
 * Compile :   Tue, 31 Jul 2018 13:37:50 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/soyezcreateurs/v4.3.16/prive/style_prive_plugin_soyezcreateurs.html
// Temps de compilation total: 0.282 ms
//

function html_8bee2d57ba52518d4bc285ba7954292c($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>' .
'<'.'?php header(' . _q('Content-Type: text/css; charset=utf-8') . '); ?'.'>' .
'<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>.formulaire_spip .editer.associer_mot > label {
    display: block;
    float: none;
    width: auto;
    margin-top: 0;
}');

	return analyse_resultat_skel('html_8bee2d57ba52518d4bc285ba7954292c', $Cache, $page, '../plugins/auto/soyezcreateurs/v4.3.16/prive/style_prive_plugin_soyezcreateurs.html');
}
?>
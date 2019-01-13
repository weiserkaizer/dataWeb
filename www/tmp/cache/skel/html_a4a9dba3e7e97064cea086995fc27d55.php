<?php

/*
 * Squelette : prive/informer_auteur.html
 * Date :      Wed, 11 Jul 2018 07:42:34 GMT
 * Compile :   Sat, 11 Aug 2018 14:52:57 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette prive/informer_auteur.html
// Temps de compilation total: 1.013 ms
//

function html_a4a9dba3e7e97064cea086995fc27d55($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header(' . _q('Content-Type: text/plain') . '); ?'.'>' .
'<'.'?php header("X-Spip-Cache: 0"); ?'.'>'.'<'.'?php header("Cache-Control: no-cache, must-revalidate"); ?'.'><'.'?php header("Pragma: no-cache"); ?'.'>' .
interdire_scripts(informer_auteur(normaliser_date(@$Pile[0]['date']))));

	return analyse_resultat_skel('html_a4a9dba3e7e97064cea086995fc27d55', $Cache, $page, 'prive/informer_auteur.html');
}
?>
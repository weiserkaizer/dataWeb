<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/annuaire.html
 * Date :      Thu, 26 Jul 2018 13:23:58 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:13 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/annuaire.html
// Temps de compilation total: 1.566 ms
//

function html_ca38db5b9f0942d27bce8dc3ad507559($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_layout/affichage_lien_annuaire','affiche',false):'') == 'affiche')) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	(($t2 = strval(interdire_scripts(((filtre_info_plugin_dist("CONTACTS", "est_actif")) ?' ' :''))))!=='' ?
			($t2 . recuperer_fond( 'noisettes/liensnav/annuaire_lien' , array('template' => @$Pile[0]['template'] ), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/annuaire.html','html_ca38db5b9f0942d27bce8dc3ad507559','',2,$GLOBALS['spip_lang'])), _request('connect'))) :
			'') .
	'
')) :
		'') .
'
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_ca38db5b9f0942d27bce8dc3ad507559', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/annuaire.html');
}
?>
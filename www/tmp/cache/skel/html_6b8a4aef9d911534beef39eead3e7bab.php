<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/sites.html
 * Date :      Thu, 26 Jul 2018 13:23:58 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:13 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/sites.html
// Temps de compilation total: 1.634 ms
//

function html_6b8a4aef9d911534beef39eead3e7bab($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_layout/affichage_lien_sites_web','affiche',false):'') == 'affiche')) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	recuperer_fond( 'noisettes/liensnav/sites_lien' , array('template' => @$Pile[0]['template'] ), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/sites.html','html_6b8a4aef9d911534beef39eead3e7bab','',2,$GLOBALS['spip_lang'])), _request('connect')) .
	'
')) :
		'') .
'
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_6b8a4aef9d911534beef39eead3e7bab', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/sites.html');
}
?>
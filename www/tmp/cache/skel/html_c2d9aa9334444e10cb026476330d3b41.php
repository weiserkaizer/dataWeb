<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/documents.html
 * Date :      Thu, 26 Jul 2018 13:23:58 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:13 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/documents.html
// Temps de compilation total: 1.368 ms
//

function html_c2d9aa9334444e10cb026476330d3b41($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_layout/affichage_lien_documents','affiche',false):'') == 'affiche')) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	recuperer_fond( 'noisettes/liensnav/documents_lien' , array('template' => @$Pile[0]['template'] ), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/documents.html','html_c2d9aa9334444e10cb026476330d3b41','',2,$GLOBALS['spip_lang'])), _request('connect')) .
	'
')) :
		'') .
'
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_c2d9aa9334444e10cb026476330d3b41', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/documents.html');
}
?>
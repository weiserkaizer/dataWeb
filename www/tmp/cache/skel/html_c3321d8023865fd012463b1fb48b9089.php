<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/sc_qrcode.html
 * Date :      Thu, 26 Jul 2018 13:23:58 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:13 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/sc_qrcode.html
// Temps de compilation total: 0.490 ms
//

function html_c3321d8023865fd012463b1fb48b9089($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("QRCODE", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . recuperer_fond( 'noisettes/sc_qrcode_affiche' , array_merge($Pile[0],array()), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sc_qrcode.html','html_c3321d8023865fd012463b1fb48b9089','',1,$GLOBALS['spip_lang'])), _request('connect'))) :
		'');

	return analyse_resultat_skel('html_c3321d8023865fd012463b1fb48b9089', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/sc_qrcode.html');
}
?>
<?php

/*
 * Squelette : ../prive/squelettes/extra/dist.html
 * Date :      Wed, 11 Jul 2018 07:42:33 GMT
 * Compile :   Tue, 31 Jul 2018 13:39:13 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/extra/dist.html
// Temps de compilation total: 0.125 ms
//

function html_0eb11097b58b35b6e7c485877dd441f7($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '
<!-- extra -->';

	return analyse_resultat_skel('html_0eb11097b58b35b6e7c485877dd441f7', $Cache, $page, '../prive/squelettes/extra/dist.html');
}
?>
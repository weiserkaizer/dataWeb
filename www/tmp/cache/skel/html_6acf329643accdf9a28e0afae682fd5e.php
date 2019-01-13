<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer_modeportailcognac.html
 * Date :      Thu, 26 Jul 2018 13:23:57 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:12 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer_modeportailcognac.html
// Temps de compilation total: 0.363 ms
//

function html_6acf329643accdf9a28e0afae682fd5e($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'		</div><!-- id="content" -->
	</div><!-- id="wrapper" -->
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_6acf329643accdf9a28e0afae682fd5e', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer_modeportailcognac.html');
}
?>
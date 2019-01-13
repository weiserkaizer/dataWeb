<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/miettesdepain/sommaire_modeportailcognac.html
 * Date :      Thu, 26 Jul 2018 13:23:58 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:06 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/miettesdepain/sommaire_modeportailcognac.html
// Temps de compilation total: 3.333 ms
//

function html_187ad0ad611a6ccd0f2c258a880d1cab($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'	<nav id="miettesdepain">
		<h2 class="nocontent offscreen">Fil d\'Ariane</h2>
		<ul>
			<li><a href="./">' .
_T('soyezcreateurs:accueil') .
'</a></li>
			<li>' .
interdire_scripts(replace(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]),'<br />','')) .
'</li>
		</ul>
	</nav>
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_187ad0ad611a6ccd0f2c258a880d1cab', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/miettesdepain/sommaire_modeportailcognac.html');
}
?>
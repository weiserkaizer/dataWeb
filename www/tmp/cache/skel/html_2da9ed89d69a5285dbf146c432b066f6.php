<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/participer.html
 * Date :      Thu, 26 Jul 2018 13:23:57 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:14 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/participer.html
// Temps de compilation total: 1.839 ms
//

function html_2da9ed89d69a5285dbf146c432b066f6($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(interdire_scripts((((include_spip('inc/config')?lire_config('accepter_inscriptions',null,false):'') == 'oui') ? (	'<a href="' .
	interdire_scripts(eval('return '.'_DIR_RESTREINT_ABS'.';')) .
	'">' .
	_T('soyezcreateurs:participez') .
	'</a>'):''))))!=='' ?
		('<div class="menu_lien_participer">' . $t1 . '</div>') :
		'') .
'
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_2da9ed89d69a5285dbf146c432b066f6', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/participer.html');
}
?>
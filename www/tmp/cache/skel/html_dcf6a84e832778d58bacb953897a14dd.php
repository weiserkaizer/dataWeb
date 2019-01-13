<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_quoideneuf.html
 * Date :      Thu, 26 Jul 2018 14:16:46 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:11 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_quoideneuf.html
// Temps de compilation total: 1.016 ms
//

function html_dcf6a84e832778d58bacb953897a14dd($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
(($t1 = strval(recuperer_fond( 'noisettes/sommaire/sommaire_modeportailcognac_quoideneuf' , array(), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_quoideneuf.html','html_dcf6a84e832778d58bacb953897a14dd','',2,$GLOBALS['spip_lang'])), _request('connect'))))!=='' ?
		((	'<!-- ACTUS -->
<div id="actualites" class="zone-actus">
	<header class="titre-sommaire">
		<h1>' .
	_T('soyezcreateurs:quoideneuf') .
	'</h1>
	</header>
	<div class="row" id="masonry" role="region" aria-label="Actualités">
		<div class="grid">
			<div class="grid-sizer"></div>
			<div class="gutter-sizer"></div>
			') . $t1 . (	'
		</div>
	</div>
	<div class="text-center avec-margin-top avec-margin-bottom">
		<a class="button texte-blanc triadeA" href="' .
	interdire_scripts(generer_url_public('antichrono', '')) .
	'">' .
	_T('soyezcreateurs:actualite_toutes') .
	'</a>
	</div>
</div>
<!-- fin ACTUS -->
')) :
		'') .
'

' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_dcf6a84e832778d58bacb953897a14dd', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_quoideneuf.html');
}
?>
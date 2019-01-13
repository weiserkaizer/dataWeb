<?php

/*
 * Squelette : plugins/noizetier/prive/squelettes/inclure/inc-bouton_voir_noisettes.html
 * Date :      Wed, 11 Jul 2018 07:46:22 GMT
 * Compile :   Mon, 13 Aug 2018 09:58:21 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/noizetier/prive/squelettes/inclure/inc-bouton_voir_noisettes.html
// Temps de compilation total: 5.609 ms
//

function html_c990685744313e232f05a09a6dc94658($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header("X-Spip-Cache: 0"); ?'.'>'.'<'.'?php header("Cache-Control: no-cache, must-revalidate"); ?'.'><'.'?php header("Pragma: no-cache"); ?'.'>' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("minibando", "est_actif")) ?'' :' '))))!=='' ?
		($t1 . (	'
	' .
	(!(match(self(),'voir=noisettes'))  ?
			(' ' . (	'
		' .
		(($t3 = strval(parametre_url(self(),'voir','noisettes')))!=='' ?
				('<a href="' . $t3 . (	'" class="spip-admin-boutons" id="noizetier_voir_noisettes">' .
			_T('noizetier:mode_noisettes') .
			'</a>')) :
				'') .
		'
	')) :
			'') .
	((match(self(),'voir=noisettes'))  ?
			(' ' . (	'
		' .
		(($t3 = strval(parametre_url(self(),'voir','')))!=='' ?
				('<a href="' . $t3 . (	'" class="spip-admin-boutons" id="noizetier_voir_noisettes">' .
			_T('noizetier:quitter_mode_noisettes') .
			'</a>')) :
				'') .
		'
	')) :
			'') .
	'
')) :
		'') .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("minibando", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . (	'
	<li id="minibando_noizetier">
	' .
	(!(match(self(),'voir=noisettes'))  ?
			(' ' . (	'
		' .
		(($t3 = strval(parametre_url(self(),'voir','noisettes')))!=='' ?
				('<a href="' . $t3 . (	'" id="noizetier_voir_noisettes">' .
			_T('noizetier:mode_noisettes') .
			'</a>')) :
				'') .
		'
	')) :
			'') .
	((match(self(),'voir=noisettes'))  ?
			(' ' . (	'
		' .
		(($t3 = strval(parametre_url(self(),'voir','')))!=='' ?
				('<a href="' . $t3 . (	'" id="noizetier_voir_noisettes">' .
			_T('noizetier:quitter_mode_noisettes') .
			'</a>')) :
				'') .
		'
	')) :
			'') .
	'
	<span> </span>
	<ul>
		<li><p>' .
	(match(self(),'voir=noisettes') ? _T('noizetier:quitter_mode_noisettes'):_T('noizetier:mode_noisettes')) .
	'</p></li> 
	</ul>
	<style type="text/css">#minibando #minibando_noizetier > a {background: #F8F8F8 url(' .
	find_in_path('images/bricks.png') .
	') 50% no-repeat;}</style>
	</li>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_c990685744313e232f05a09a6dc94658', $Cache, $page, 'plugins/noizetier/prive/squelettes/inclure/inc-bouton_voir_noisettes.html');
}
?>
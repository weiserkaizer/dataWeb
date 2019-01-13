<?php

/*
 * Squelette : ../plugins/auto/soyezcreateurs/v4.3.16/prive/squelettes/top/configurer_soyezcreateurs.html
 * Date :      Thu, 26 Jul 2018 13:23:59 GMT
 * Compile :   Tue, 31 Jul 2018 13:39:12 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/soyezcreateurs/v4.3.16/prive/squelettes/top/configurer_soyezcreateurs.html
// Temps de compilation total: 4.612 ms
//

function html_103049b4ca58f7a39f619c6da019184f($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<h1 class="grostitre">' .
_T('soyezcreateurs:configurersc') .
'</h1>
<div class=\'onglets_simple\'>
<ul class=\'medias\'>
<li>' .
interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'cfg', null), 'soyezcreateurs'),true) == 'soyezcreateurs') ? (	'<strong>' .
	_T('soyezcreateurs:soyezcreateurs') .
	'</strong>'):(($t2 = strval(generer_url_ecrire('configurer_soyezcreateurs','cfg=soyezcreateurs')))!=='' ?
			('<a href="' . $t2 . (	'">' .
		_T('soyezcreateurs:soyezcreateurs') .
		'</a>')) :
			''))) .
'</li>
<li>' .
interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'cfg', null), 'soyezcreateurs'),true) == 'soyezcreateurs_layout') ? (	'<strong>' .
	_T('soyezcreateurs:soyezcreateurs_layout') .
	'</strong>'):(($t2 = strval(generer_url_ecrire('configurer_soyezcreateurs','cfg=soyezcreateurs_layout')))!=='' ?
			('<a href="' . $t2 . (	'">' .
		_T('soyezcreateurs:soyezcreateurs_layout') .
		'</a>')) :
			''))) .
'</li>
<li>' .
interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'cfg', null), 'soyezcreateurs'),true) == 'soyezcreateurs_couleurs') ? (	'<strong>' .
	_T('soyezcreateurs:soyezcreateurs_couleurs') .
	'</strong>'):(($t2 = strval(generer_url_ecrire('configurer_soyezcreateurs','cfg=soyezcreateurs_couleurs')))!=='' ?
			('<a href="' . $t2 . (	'">' .
		_T('soyezcreateurs:soyezcreateurs_couleurs') .
		'</a>')) :
			''))) .
'</li>
<li>' .
interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'cfg', null), 'soyezcreateurs'),true) == 'soyezcreateurs_google') ? (	'<strong>' .
	_T('soyezcreateurs:soyezcreateurs_google') .
	'</strong>'):(($t2 = strval(generer_url_ecrire('configurer_soyezcreateurs','cfg=soyezcreateurs_google')))!=='' ?
			('<a href="' . $t2 . (	'">' .
		_T('soyezcreateurs:soyezcreateurs_google') .
		'</a>')) :
			''))) .
'</li>
</ul>
<div class="nettoyeur"></div>
</div>');

	return analyse_resultat_skel('html_103049b4ca58f7a39f619c6da019184f', $Cache, $page, '../plugins/auto/soyezcreateurs/v4.3.16/prive/squelettes/top/configurer_soyezcreateurs.html');
}
?>
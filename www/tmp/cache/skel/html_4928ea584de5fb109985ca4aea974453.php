<?php

/*
 * Squelette : ../plugins-dist/porte_plume/css/barre_outils_icones.css.html
 * Date :      Wed, 11 Jul 2018 07:42:54 GMT
 * Compile :   Tue, 31 Jul 2018 13:37:49 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/porte_plume/css/barre_outils_icones.css.html
// Temps de compilation total: 0.289 ms
//

function html_4928ea584de5fb109985ca4aea974453($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
barre_outils_css_icones('') .
'

/* roue ajax */
.ajaxLoad{
		position:relative;
}
.ajaxLoad:after {
		content:"";
		display:block;
		width:40px;
		height:40px;
		border:1px solid #eee;
		background:#fff url(\'' .
protocole_implicite(url_absolue(find_in_path('images/searching.gif'))) .
'\') center no-repeat;
		position:absolute;
		left:50%;
		top:50%;
		margin-left:-20px;
		margin-top:-20px;
}
.fullscreen .ajaxLoad:after {
		position:fixed;
		left:75%;
}
');

	return analyse_resultat_skel('html_4928ea584de5fb109985ca4aea974453', $Cache, $page, '../plugins-dist/porte_plume/css/barre_outils_icones.css.html');
}
?>
<?php

/*
 * Squelette : ../plugins/auto/gisgeom/v1.11.5/prive/style_prive_plugin_gisgeom.html
 * Date :      Wed, 11 Jul 2018 08:11:15 GMT
 * Compile :   Tue, 31 Jul 2018 13:37:50 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/gisgeom/v1.11.5/prive/style_prive_plugin_gisgeom.html
// Temps de compilation total: 0.970 ms
//

function html_24a9c20afbf241f5337817ac176cc027($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>' .
'<'.'?php header(' . _q('Content-Type: text/css; charset=iso-8859-15') . '); ?'.'>' .
'<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>' .
vide($Pile['vars'][$_zzz=(string)'claire'] = (	'#' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'couleur_claire', null), 'edf3fe'),true)))) .
vide($Pile['vars'][$_zzz=(string)'foncee'] = (	'#' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'couleur_foncee', null), '3874b0'),true)))) .
vide($Pile['vars'][$_zzz=(string)'left'] = interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'ltr', null),true),'left','left','right'))) .
vide($Pile['vars'][$_zzz=(string)'right'] = interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'ltr', null),true),'left','right','left'))) .
'/* saisie carte */

.leaflet-control.leaflet-draw ul,
.leaflet-control.leaflet-draw li { padding: 0; }');

	return analyse_resultat_skel('html_24a9c20afbf241f5337817ac176cc027', $Cache, $page, '../plugins/auto/gisgeom/v1.11.5/prive/style_prive_plugin_gisgeom.html');
}
?>
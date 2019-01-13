<?php

/*
 * Squelette : ../plugins/auto/gis/v4.44.19/prive/style_prive_plugin_gis.html
 * Date :      Wed, 11 Jul 2018 08:11:06 GMT
 * Compile :   Tue, 31 Jul 2018 13:37:51 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/gis/v4.44.19/prive/style_prive_plugin_gis.html
// Temps de compilation total: 1.236 ms
//

function html_0de2243d0650ab9bbef5bb46e54bccc0($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>' .
'<'.'?php header(' . _q('Content-Type: text/css; charset=utf-8') . '); ?'.'>' .
'<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>' .
vide($Pile['vars'][$_zzz=(string)'claire'] = (	'#' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'couleur_claire', null), 'edf3fe'),true)))) .
vide($Pile['vars'][$_zzz=(string)'foncee'] = (	'#' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'couleur_foncee', null), '3874b0'),true)))) .
vide($Pile['vars'][$_zzz=(string)'left'] = interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'ltr', null),true),'left','left','right'))) .
vide($Pile['vars'][$_zzz=(string)'right'] = interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'ltr', null),true),'left','right','left'))) .
'/* liste des points exec=gis_tous */
.gis_tous .onglets_simple .formulaire_recherche { margin-bottom: 0; }

/* saisie carte */
.saisie_carte .leaflet-control-layers label { float: none; width: auto; margin-' .
table_valeur($Pile["vars"], (string)'left', null) .
': 0; }
.saisie_carte .leaflet-control.leaflet-draw .leaflet-draw-actions  { margin-' .
table_valeur($Pile["vars"], (string)'left', null) .
': 0; margin-' .
table_valeur($Pile["vars"], (string)'right', null) .
': 0; }

/* pas de souligné sur les boutons de la carte dans le privé sur la vue d’un objet */
#wysiwyg .leaflet-bar a { text-decoration:none; }');

	return analyse_resultat_skel('html_0de2243d0650ab9bbef5bb46e54bccc0', $Cache, $page, '../plugins/auto/gis/v4.44.19/prive/style_prive_plugin_gis.html');
}
?>
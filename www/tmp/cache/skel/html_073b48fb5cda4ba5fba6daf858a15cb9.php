<?php

/*
 * Squelette : ../plugins-dist/mots/prive/style_prive_plugin_mots.html
 * Date :      Wed, 11 Jul 2018 07:43:30 GMT
 * Compile :   Tue, 31 Jul 2018 13:37:51 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/mots/prive/style_prive_plugin_mots.html
// Temps de compilation total: 0.366 ms
//

function html_073b48fb5cda4ba5fba6daf858a15cb9($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
'<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>' .
'<'.'?php header(' . _q('Content-Type: text/css; charset=iso-8859-15') . '); ?'.'>' .
'<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>.mots .groupe_mots .groupe_mots-edit-24 { margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
': 30px; }
.mots .groupe_mots #wysiwyg { clear: none; }');

	return analyse_resultat_skel('html_073b48fb5cda4ba5fba6daf858a15cb9', $Cache, $page, '../plugins-dist/mots/prive/style_prive_plugin_mots.html');
}
?>
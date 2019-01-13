<?php

/*
 * Squelette : plugins/auto/agenda/v3.19.6/squelettes/style_public_plugin_agenda.html
 * Date :      Wed, 11 Jul 2018 08:07:48 GMT
 * Compile :   Sat, 11 Aug 2018 14:48:51 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/agenda/v3.19.6/squelettes/style_public_plugin_agenda.html
// Temps de compilation total: 4.060 ms
//

function html_2cefc646d6d959ad8c5ab29641b7edab($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header("X-Spip-Cache: 0"); ?'.'>'.'<'.'?php header("Cache-Control: no-cache, must-revalidate"); ?'.'><'.'?php header("Pragma: no-cache"); ?'.'>
' .
'<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>' .
'<'.'?php header(' . _q('Content-Type: text/css; charset=iso-8859-15') . '); ?'.'>' .
'<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>' .
vide($Pile['vars'][$_zzz=(string)'claire'] = (	'#' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'couleur_claire', null), 'edf3fe'),true)))) .
vide($Pile['vars'][$_zzz=(string)'foncee'] = (	'#' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'couleur_foncee', null), '3874b0'),true)))) .
vide($Pile['vars'][$_zzz=(string)'left'] = interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'ltr', null),true),'left','left','right'))) .
vide($Pile['vars'][$_zzz=(string)'right'] = interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'ltr', null),true),'left','right','left'))) .
recuperer_fond( 'prive/style_prive_plugin_agenda' , array('couleur_claire' => table_valeur($Pile["vars"], (string)'claire', null) ,
	'couleur_foncee' => table_valeur($Pile["vars"], (string)'foncee', null) ,
	'ltr' => table_valeur($Pile["vars"], (string)'left', null) ), array('compil'=>array('plugins/auto/agenda/v3.19.6/squelettes/style_public_plugin_agenda.html','html_2cefc646d6d959ad8c5ab29641b7edab','',12,$GLOBALS['spip_lang'])), _request('connect')));

	return analyse_resultat_skel('html_2cefc646d6d959ad8c5ab29641b7edab', $Cache, $page, 'plugins/auto/agenda/v3.19.6/squelettes/style_public_plugin_agenda.html');
}
?>
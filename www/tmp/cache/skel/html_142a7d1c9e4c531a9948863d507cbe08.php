<?php

/*
 * Squelette : ../prive/squelettes/navigation/configurer.html
 * Date :      Wed, 11 Jul 2018 07:42:31 GMT
 * Compile :   Tue, 31 Jul 2018 13:37:54 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/navigation/configurer.html
// Temps de compilation total: 3.320 ms
//

function html_142a7d1c9e4c531a9948863d507cbe08($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][$_zzz=(string)'nav'] = recuperer_fond( 'prive/squelettes/inclure/menu-navigation' , array_merge($Pile[0],array('menu' => 'menu_configuration' ,
	'bloc' => 'navigation' )), array('compil'=>array('../prive/squelettes/navigation/configurer.html','html_142a7d1c9e4c531a9948863d507cbe08','',0,$GLOBALS['spip_lang'])), _request('connect'))) .
((match(table_valeur($Pile["vars"], (string)'nav', null),'execfound'))  ?
		(' ' . (	'
' .
	table_valeur($Pile["vars"], (string)'nav', null) .
	boite_ouvrir(wrap(_T('avis_attention'),'<h4>'), 'info') .
	'
<p>' .
	_T('public|spip|ecrire:texte_inc_config') .
	'</p>
' .
	boite_fermer() .
	'
')) :
		''));

	return analyse_resultat_skel('html_142a7d1c9e4c531a9948863d507cbe08', $Cache, $page, '../prive/squelettes/navigation/configurer.html');
}
?>
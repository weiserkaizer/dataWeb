<?php

/*
 * Squelette : ../prive/style_prive.css.html
 * Date :      Wed, 11 Jul 2018 07:42:34 GMT
 * Compile :   Tue, 31 Jul 2018 13:37:50 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/style_prive.css.html
// Temps de compilation total: 0.866 ms
//

function html_e4f149a443beccd60fc8429a1b8eeba1($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
'<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>' .
'<'.'?php header(' . _q('Content-Type: text/css; charset=iso-8859-15') . '); ?'.'>' .
'<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>' .
vide($Pile['vars'][$_zzz=(string)'fond'] = substr(find_in_theme('style_prive.css.html'),strlen((defined('_DIR_RACINE')?constant('_DIR_RACINE'):'')),intval('-5'))) .
'
' .
recuperer_fond( table_valeur($Pile["vars"], (string)'fond', null) , array_merge($Pile[0],array()), array('compil'=>array('../prive/style_prive.css.html','html_e4f149a443beccd60fc8429a1b8eeba1','',2,$GLOBALS['spip_lang'])), _request('connect')));

	return analyse_resultat_skel('html_e4f149a443beccd60fc8429a1b8eeba1', $Cache, $page, '../prive/style_prive.css.html');
}
?>
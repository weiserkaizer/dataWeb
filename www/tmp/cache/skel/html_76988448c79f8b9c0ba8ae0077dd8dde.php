<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/bloc_liensnav.html
 * Date :      Thu, 26 Jul 2018 13:23:58 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:13 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/bloc_liensnav.html
// Temps de compilation total: 4.539 ms
//

function html_76988448c79f8b9c0ba8ae0077dd8dde($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_layout/plansitefooter','generique',false):'') == 'generique')) ?' ' :''))))!=='' ?
		($t1 . (	'<li class="menu_lien_plan">' .
	interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'template', null),true) == 'Plan') ? '<strong>':'')) .
	'<a href="' .
	interdire_scripts(generer_url_public('plan', '')) .
	'" title="' .
	_T('soyezcreateurs:toutleplan') .
	'">' .
	_T('soyezcreateurs:plan_menu') .
	'</a>' .
	interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'template', null),true) == 'Plan') ? '</strong>':'')) .
	'</li>')) :
		'') .
'
' .
recuperer_fond( 'noisettes/liensnav/sites' , array('template' => @$Pile[0]['template'] ), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/bloc_liensnav.html','html_76988448c79f8b9c0ba8ae0077dd8dde','',2,$GLOBALS['spip_lang'])), _request('connect')) .
'
' .
recuperer_fond( 'noisettes/liensnav/documents' , array('template' => @$Pile[0]['template'] ), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/bloc_liensnav.html','html_76988448c79f8b9c0ba8ae0077dd8dde','',2,$GLOBALS['spip_lang'])), _request('connect')) .
'
' .
recuperer_fond( 'noisettes/liensnav/newsletters' , array('template' => @$Pile[0]['template'] ), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/bloc_liensnav.html','html_76988448c79f8b9c0ba8ae0077dd8dde','',2,$GLOBALS['spip_lang'])), _request('connect')) .
'
' .
recuperer_fond( 'noisettes/liensnav/sigles' , array('template' => @$Pile[0]['template'] ), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/bloc_liensnav.html','html_76988448c79f8b9c0ba8ae0077dd8dde','',2,$GLOBALS['spip_lang'])), _request('connect')) .
'
' .
recuperer_fond( 'noisettes/liensnav/annuaire' , array('template' => @$Pile[0]['template'] ), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/bloc_liensnav.html','html_76988448c79f8b9c0ba8ae0077dd8dde','',2,$GLOBALS['spip_lang'])), _request('connect')) .
'
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_76988448c79f8b9c0ba8ae0077dd8dde', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/bloc_liensnav.html');
}
?>
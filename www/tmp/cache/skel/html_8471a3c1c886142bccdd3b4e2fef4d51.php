<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/cadre_recherche.html
 * Date :      Thu, 26 Jul 2018 13:23:57 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:05 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/cadre_recherche.html
// Temps de compilation total: 52.064 ms
//

function html_8471a3c1c886142bccdd3b4e2fef4d51($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div id="cadre_recherche" class="' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id_recherche', null), 'cadreinfo'),true)) .
'">
' .
((find_in_path('noisettes/pre_recherche.html'))  ?
		(' ' . recuperer_fond( 'noisettes/pre_recherche' , array(), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/cadre_recherche.html','html_8471a3c1c886142bccdd3b4e2fef4d51','',2,$GLOBALS['spip_lang'])), _request('connect'))) :
		'') .
'
' .
executer_balise_dynamique('FORMULAIRE_RECHERCHE',
	array(),
	array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/cadre_recherche.html','html_8471a3c1c886142bccdd3b4e2fef4d51','',2,$GLOBALS['spip_lang'])) .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("critere_mots", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . (($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'template', null),true) == 'mots_filtres')) ?'' :' '))))!=='' ?
			($t2 . 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/navigation/frmrechercheparmots') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/cadre_recherche.html\',\'html_8471a3c1c886142bccdd3b4e2fef4d51\',\'\',1,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>') :
			'')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs/geolocalisation','non',false):'') == 'oui')) ?' ' :''))))!=='' ?
		($t1 . recuperer_fond( 'noisettes/extra/ousommesnous' , array(), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/cadre_recherche.html','html_8471a3c1c886142bccdd3b4e2fef4d51','',2,$GLOBALS['spip_lang'])), _request('connect'))) :
		'') .
'
</div>' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_8471a3c1c886142bccdd3b4e2fef4d51', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/cadre_recherche.html');
}
?>
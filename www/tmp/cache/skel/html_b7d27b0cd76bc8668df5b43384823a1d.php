<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/logopage/logopage_aiguilleur.html
 * Date :      Thu, 26 Jul 2018 13:23:58 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:06 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/logopage/logopage_aiguilleur.html
// Temps de compilation total: 12.823 ms
//

function html_b7d27b0cd76bc8668df5b43384823a1d($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][$_zzz=(string)'inclure'] = '') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'template', null),true) == 'Sommaire')) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(((find_in_path((	'noisettes/logopage/logopage_mode' .
		interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/mode_affichage','communiquant',false):'')) .
		'.html'))) ?' ' :'')))!=='' ?
			($t2 . (	'
		' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'noisettes/logopage/logopage_mode' .
			interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/mode_affichage','communiquant',false):'')))) . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/logopage/logopage_aiguilleur.html\',\'html_b7d27b0cd76bc8668df5b43384823a1d\',\'\',3,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		' .
		vide($Pile['vars'][$_zzz=(string)'inclure'] = '1'))) :
			'') .
	'
')) :
		'') .
(!(table_valeur($Pile["vars"], (string)'inclure', null))  ?
		(' ' . (	'
	' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'template', null),true) == 'Sommaire')) ?'' :' '))))!=='' ?
			($t2 . (	'
		' .
		(($t3 = strval(((find_in_path((	'noisettes/logopage/' .
			interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type', null),true)) .
			'.html'))) ?' ' :'')))!=='' ?
				($t3 . (	'
			' .
			(($t4 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'type', null),true)) ?' ' :''))))!=='' ?
					($t4 . 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'noisettes/logopage/' .
					interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type', null),true)))) . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/logopage/logopage_aiguilleur.html\',\'html_b7d27b0cd76bc8668df5b43384823a1d\',\'\',6,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>') :
					'') .
			'
			' .
			vide($Pile['vars'][$_zzz=(string)'inclure'] = '1'))) :
				'') .
		'
	')) :
			'') .
	'
')) :
		'') .
(!(table_valeur($Pile["vars"], (string)'inclure', null))  ?
		(' ' . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/logopage/default') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/logopage/logopage_aiguilleur.html\',\'html_b7d27b0cd76bc8668df5b43384823a1d\',\'\',11,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_b7d27b0cd76bc8668df5b43384823a1d', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/logopage/logopage_aiguilleur.html');
}
?>
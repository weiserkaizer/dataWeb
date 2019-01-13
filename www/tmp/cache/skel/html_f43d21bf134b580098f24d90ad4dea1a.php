<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/miettesdepain/sommaire.html
 * Date :      Thu, 26 Jul 2018 13:23:58 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:06 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/miettesdepain/sommaire.html
// Temps de compilation total: 1.646 ms
//

function html_f43d21bf134b580098f24d90ad4dea1a($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(((find_in_path((	'noisettes/miettesdepain/sommaire_mode' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/mode_affichage','communiquant',false):'')) .
	'.html'))) ?' ' :'')))!=='' ?
		($t1 . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'noisettes/miettesdepain/sommaire_mode' .
		interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/mode_affichage','communiquant',false):'')))) . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/miettesdepain/sommaire.html\',\'html_f43d21bf134b580098f24d90ad4dea1a\',\'\',2,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_f43d21bf134b580098f24d90ad4dea1a', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/miettesdepain/sommaire.html');
}
?>
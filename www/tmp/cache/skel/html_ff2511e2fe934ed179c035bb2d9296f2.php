<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/sommaire.html
 * Date :      Thu, 26 Jul 2018 13:24:02 GMT
 * Compile :   Sat, 11 Aug 2018 14:48:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/sommaire.html
// Temps de compilation total: 45.453 ms
//

function html_ff2511e2fe934ed179c035bb2d9296f2($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
interdire_scripts(@$Pile[0]['fastcache']) .
'
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/header/header') . ', array(\'template\' => ' . argumenter_squelette('Sommaire') . ',
	\'idbody\' => ' . argumenter_squelette((	'sommaire_mode_' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/mode_affichage','communiquant',false):'')))) . ',
	\'type\' => ' . argumenter_squelette('sommaire') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/sommaire.html\',\'html_ff2511e2fe934ed179c035bb2d9296f2\',\'\',2,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'noisettes/sommaire/sommaire_mode' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/mode_affichage','communiquant',false):'')))) . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/sommaire.html\',\'html_ff2511e2fe934ed179c035bb2d9296f2\',\'\',3,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/footer/footer') . ', array(\'template\' => ' . argumenter_squelette('Sommaire') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/sommaire.html\',\'html_ff2511e2fe934ed179c035bb2d9296f2\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_ff2511e2fe934ed179c035bb2d9296f2', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/sommaire.html');
}
?>
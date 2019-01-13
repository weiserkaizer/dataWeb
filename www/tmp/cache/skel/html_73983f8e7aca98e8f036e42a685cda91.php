<?php

/*
 * Squelette : ../prive/squelettes/contenu/navigation.html
 * Date :      Wed, 11 Jul 2018 07:42:33 GMT
 * Compile :   Fri, 03 Aug 2018 12:26:13 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/contenu/navigation.html
// Temps de compilation total: 0.621 ms
//

function html_73983f8e7aca98e8f036e42a685cda91($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/inclure/menu-navigation') . ', array_merge('.var_export($Pile[0],1).',array(\'menu\' => ' . argumenter_squelette(@$Pile[0]['menu']) . ',
	\'bloc\' => ' . argumenter_squelette('contenu') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/contenu/navigation.html\',\'html_73983f8e7aca98e8f036e42a685cda91\',\'\',1,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
');

	return analyse_resultat_skel('html_73983f8e7aca98e8f036e42a685cda91', $Cache, $page, '../prive/squelettes/contenu/navigation.html');
}
?>
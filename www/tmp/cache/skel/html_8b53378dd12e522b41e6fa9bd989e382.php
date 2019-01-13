<?php

/*
 * Squelette : ../plugins/noizetier/prive/squelettes/navigation/noizetier_pages.html
 * Date :      Wed, 11 Jul 2018 07:46:22 GMT
 * Compile :   Mon, 07 Jan 2019 00:56:50 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/noizetier/prive/squelettes/navigation/noizetier_pages.html
// Temps de compilation total: 0.376 ms
//

function html_8b53378dd12e522b41e6fa9bd989e382($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/inclure/inc-nav_noizetier') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/noizetier/prive/squelettes/navigation/noizetier_pages.html\',\'html_8b53378dd12e522b41e6fa9bd989e382\',\'\',2,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
');

	return analyse_resultat_skel('html_8b53378dd12e522b41e6fa9bd989e382', $Cache, $page, '../plugins/noizetier/prive/squelettes/navigation/noizetier_pages.html');
}
?>
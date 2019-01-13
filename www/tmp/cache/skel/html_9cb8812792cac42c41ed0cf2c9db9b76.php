<?php

/*
 * Squelette : ../plugins/auto/soyezcreateurs/v4.3.16/prive/squelettes/navigation/configurer_soyezcreateurs.html
 * Date :      Mon, 13 Aug 2018 13:02:56 GMT
 * Compile :   Mon, 13 Aug 2018 15:08:35 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/soyezcreateurs/v4.3.16/prive/squelettes/navigation/configurer_soyezcreateurs.html
// Temps de compilation total: 0.641 ms
//

function html_9cb8812792cac42c41ed0cf2c9db9b76($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div>
' .
executer_balise_dynamique('FORMULAIRE_IECONFIG_IMPORT',
	array(),
	array('../plugins/auto/soyezcreateurs/v4.3.16/prive/squelettes/navigation/configurer_soyezcreateurs.html','html_9cb8812792cac42c41ed0cf2c9db9b76','',2,$GLOBALS['spip_lang'])) .
'
</div>
<div class="ajax">
' .
executer_balise_dynamique('FORMULAIRE_IECONFIG_EXPORT',
	array(),
	array('../plugins/auto/soyezcreateurs/v4.3.16/prive/squelettes/navigation/configurer_soyezcreateurs.html','html_9cb8812792cac42c41ed0cf2c9db9b76','',5,$GLOBALS['spip_lang'])) .
'
</div>');

	return analyse_resultat_skel('html_9cb8812792cac42c41ed0cf2c9db9b76', $Cache, $page, '../plugins/auto/soyezcreateurs/v4.3.16/prive/squelettes/navigation/configurer_soyezcreateurs.html');
}
?>
<?php

/*
 * Squelette : ../plugins/auto/soyezcreateurs/v4.3.16/prive/squelettes/contenu/configurer_soyezcreateurs.html
 * Date :      Thu, 26 Jul 2018 13:23:59 GMT
 * Compile :   Tue, 31 Jul 2018 13:39:13 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/soyezcreateurs/v4.3.16/prive/squelettes/contenu/configurer_soyezcreateurs.html
// Temps de compilation total: 0.749 ms
//

function html_71ae5e6baf089f5f6a6eb33735d3c228($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('webmestre')?" ":""))) .
'
<div>
' .
recuperer_fond( (	'prive/squelettes/inclure/configurer_' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'cfg', null), 'soyezcreateurs'),true))) , array_merge($Pile[0],array()), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/prive/squelettes/contenu/configurer_soyezcreateurs.html','html_71ae5e6baf089f5f6a6eb33735d3c228','',0,$GLOBALS['spip_lang'])), _request('connect')) .
'
</div>');

	return analyse_resultat_skel('html_71ae5e6baf089f5f6a6eb33735d3c228', $Cache, $page, '../plugins/auto/soyezcreateurs/v4.3.16/prive/squelettes/contenu/configurer_soyezcreateurs.html');
}
?>
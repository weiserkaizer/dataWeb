<?php

/*
 * Squelette : ../plugins/auto/ieconfig/v1.3.2/prive/squelettes/contenu/ieconfig_export.html
 * Date :      Thu, 12 Jul 2018 06:56:10 GMT
 * Compile :   Wed, 01 Aug 2018 05:51:32 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/ieconfig/v1.3.2/prive/squelettes/contenu/ieconfig_export.html
// Temps de compilation total: 3.288 ms
//

function html_909c8e418bfc0d5a1799225277857ffd($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('exporter', 'configuration')?" ":""))) .
'

<h1 class="grostitre">' .
_T('ieconfig:titre_ieconfig') .
'</h1>
' .
barre_onglets('ieconfig','ieconfigexport') .
'
' .
executer_balise_dynamique('FORMULAIRE_IECONFIG_EXPORT',
	array(),
	array('../plugins/auto/ieconfig/v1.3.2/prive/squelettes/contenu/ieconfig_export.html','html_909c8e418bfc0d5a1799225277857ffd','',5,$GLOBALS['spip_lang'])));

	return analyse_resultat_skel('html_909c8e418bfc0d5a1799225277857ffd', $Cache, $page, '../plugins/auto/ieconfig/v1.3.2/prive/squelettes/contenu/ieconfig_export.html');
}
?>
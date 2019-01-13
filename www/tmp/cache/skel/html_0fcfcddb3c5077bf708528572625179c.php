<?php

/*
 * Squelette : ../plugins/auto/ieconfig/v1.3.2/prive/squelettes/contenu/ieconfig_import.html
 * Date :      Thu, 12 Jul 2018 06:56:10 GMT
 * Compile :   Tue, 31 Jul 2018 14:36:58 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/ieconfig/v1.3.2/prive/squelettes/contenu/ieconfig_import.html
// Temps de compilation total: 0.640 ms
//

function html_0fcfcddb3c5077bf708528572625179c($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('importer', 'configuration')?" ":""))) .
'

<h1 class="grostitre">' .
_T('ieconfig:titre_ieconfig') .
'</h1>
' .
barre_onglets('ieconfig','ieconfigimport') .
'
' .
boite_ouvrir('', 'notice') .
'<p>' .
_T('ieconfig:texte_importer_configuration') .
'</p>
' .
boite_fermer() .
'
' .
executer_balise_dynamique('FORMULAIRE_IECONFIG_IMPORT',
	array(),
	array('../plugins/auto/ieconfig/v1.3.2/prive/squelettes/contenu/ieconfig_import.html','html_0fcfcddb3c5077bf708528572625179c','',8,$GLOBALS['spip_lang'])));

	return analyse_resultat_skel('html_0fcfcddb3c5077bf708528572625179c', $Cache, $page, '../plugins/auto/ieconfig/v1.3.2/prive/squelettes/contenu/ieconfig_import.html');
}
?>
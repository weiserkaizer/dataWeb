<?php

/*
 * Squelette : ../plugins/noizetier/prive/squelettes/inclure/inc-raccourcis_ieconfig.html
 * Date :      Wed, 11 Jul 2018 07:46:22 GMT
 * Compile :   Mon, 07 Jan 2019 00:56:50 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/noizetier/prive/squelettes/inclure/inc-raccourcis_ieconfig.html
// Temps de compilation total: 0.922 ms
//

function html_81da43f3b6367e65108f63f686451703($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
boite_ouvrir('', 'raccourcis') .
filtre_icone_horizontale_dist(generer_url_ecrire('ieconfig_export'),_T('noizetier:editer_exporter_configuration'),'config-export') .
'
	' .
filtre_icone_horizontale_dist(generer_url_ecrire('ieconfig_import'),_T('noizetier:editer_importer_configuration'),'config-import') .
'
' .
boite_fermer() .
'
');

	return analyse_resultat_skel('html_81da43f3b6367e65108f63f686451703', $Cache, $page, '../plugins/noizetier/prive/squelettes/inclure/inc-raccourcis_ieconfig.html');
}
?>
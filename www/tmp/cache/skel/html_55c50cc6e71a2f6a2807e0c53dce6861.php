<?php

/*
 * Squelette : ../plugins/noizetier/prive/squelettes/inclure/inc-raccourcis_rechargement.html
 * Date :      Wed, 11 Jul 2018 07:46:22 GMT
 * Compile :   Mon, 07 Jan 2019 00:56:50 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/noizetier/prive/squelettes/inclure/inc-raccourcis_rechargement.html
// Temps de compilation total: 1.502 ms
//

function html_55c50cc6e71a2f6a2807e0c53dce6861($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
boite_ouvrir('', 'raccourcis') .
'
	' .
invalideur_session($Cache, filtre_icone_horizontale_dist(generer_action_auteur('recharger_pages','',invalideur_session($Cache, self())),_T('noizetier:recharger_pages'),'page-maj-24','',invalideur_session($Cache, lang_dir(@$Pile[0]['lang'], 'left','right')))) .
'
	' .
invalideur_session($Cache, filtre_icone_horizontale_dist(generer_action_auteur('recharger_types_noisette','',invalideur_session($Cache, self())),_T('noizetier:recharger_noisettes'),'noisette-maj-24','',invalideur_session($Cache, lang_dir(@$Pile[0]['lang'], 'left','right')))) .
'
' .
boite_fermer() .
'
');

	return analyse_resultat_skel('html_55c50cc6e71a2f6a2807e0c53dce6861', $Cache, $page, '../plugins/noizetier/prive/squelettes/inclure/inc-raccourcis_rechargement.html');
}
?>
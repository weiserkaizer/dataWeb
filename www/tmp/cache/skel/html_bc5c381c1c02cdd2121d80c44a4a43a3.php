<?php

/*
 * Squelette : ../plugins-dist/compagnon/compagnon/accueil.html
 * Date :      Wed, 11 Jul 2018 07:43:25 GMT
 * Compile :   Wed, 01 Aug 2018 05:48:30 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/compagnon/compagnon/accueil.html
// Temps de compilation total: 3.375 ms
//

function html_bc5c381c1c02cdd2121d80c44a4a43a3($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'fermer', null),true)) ?'' :' '))))!=='' ?
		($t1 . (	'
' .
	vide($Pile['vars'][$_zzz=(string)'titre'] = _T('compagnon:c_accueil_bienvenue',array('nom' => interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'nom', null)))))) .
	'
' .
	boite_ouvrir(table_valeur($Pile["vars"], (string)'titre', null), 'compagnon') .
	'<p>' .
	_T('compagnon:c_accueil_texte') .
	'</p>
<p>' .
	_T('compagnon:c_accueil_texte_revenir') .
	'</p>
' .
	boite_pied() .
	'
	<span class="target" data-target="#bando1_menu_accueil"></span>
	' .
	bouton_action(filtre_ok_aleatoire_dist(''),invalideur_session($Cache, generer_action_auteur('compagnon',(	'compris/' .
			interdire_scripts(invalideur_session($Cache, @$Pile[0]['id']))),invalideur_session($Cache, parametre_url(self(),'fermer','oui')))),'ajax') .
	'
' .
	boite_fermer() .
	'
')) :
		'') .
'
');

	return analyse_resultat_skel('html_bc5c381c1c02cdd2121d80c44a4a43a3', $Cache, $page, '../plugins-dist/compagnon/compagnon/accueil.html');
}
?>
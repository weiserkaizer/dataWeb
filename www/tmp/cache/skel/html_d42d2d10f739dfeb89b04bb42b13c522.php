<?php

/*
 * Squelette : ../plugins/noizetier/prive/squelettes/inclure/inc-infos_page.html
 * Date :      Wed, 11 Jul 2018 07:46:22 GMT
 * Compile :   Mon, 07 Jan 2019 01:02:03 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/noizetier/prive/squelettes/inclure/inc-infos_page.html
// Temps de compilation total: 4.124 ms
//

function html_d42d2d10f739dfeb89b04bb42b13c522($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
boite_ouvrir('', 'info') .
'<div class="infos">
	<div class="numero">
		' .
_T('noizetier:label_identifiant') .
'
		<p id="identifiant">' .
interdire_scripts(((($a = entites_html(table_valeur(@$Pile[0], (string)'page', null),true)) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true)))) .
'</p>
	</div>

	' .
(($t1 = strval(interdire_scripts(_T(entites_html(table_valeur(@$Pile[0], (string)'explication', null),true),array('type' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type', null),true)))))))!=='' ?
		('<p class="explication">' . $t1 . '</p>') :
		'') .
'

	' .
(($t1 = strval(interdire_scripts((((((((((entites_html(table_valeur(@$Pile[0], (string)'est_virtuelle', null),true) == 'non')) AND (interdire_scripts(calculer_infos_page(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)"page", null),true)), "est_modifiee")))) ?' ' :'')) AND (interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true)) ?'' :' ')))) ?' ' :'')) ?' ' :''))))!=='' ?
		($t1 . (	'
		' .
	vide($Pile['vars'][$_zzz=(string)'libelle'] = interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'composition', null),true) ? _T('noizetier:recharger_composition'):_T('noizetier:recharger_page')))) .
	'
		<!-- TODO : voir comment ne recharger que la page concernée -->
		
		' .
	invalideur_session($Cache, filtre_icone_horizontale_dist(generer_action_auteur('recharger_pages','',invalideur_session($Cache, self())),invalideur_session($Cache, table_valeur($Pile["vars"], (string)'libelle', null)),'page-maj-24','',invalideur_session($Cache, lang_dir(@$Pile[0]['lang'], 'left','right')))) .
	'
	')) :
		'') .
'

	' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'page', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
		' .
	(($t2 = strval(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('activercomposition', 'noizetier', '', '', invalideur_session($Cache, array('page' => interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'type', null),true))))))?" ":""))))!=='' ?
			($t2 . (	'
			' .
		invalideur_session($Cache, filtre_icone_horizontale_dist(generer_action_auteur('activer_composition',interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'type', null),true))),invalideur_session($Cache, self())),_T('noizetier:activer_composition'),'composition-set-24','',(	invalideur_session($Cache, lang_dir(@$Pile[0]['lang'], 'left','right')) .
			' ajax'))) .
		'
		')) :
			'') .
	'
		' .
	(($t2 = strval(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('supprimercomposition', 'noizetier', '', '', invalideur_session($Cache, array('page' => interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'page', null),true))))))?" ":""))))!=='' ?
			($t2 . (	'
			' .
		invalideur_session($Cache, filtre_icone_horizontale_dist(generer_action_auteur('supprimer_composition',interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'page', null),true))),invalideur_session($Cache, parametre_url(generer_url_ecrire('noizetier_pages'),'est_page_objet',interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'est_page_objet', null),true)))))),_T('noizetier:formulaire_supprimer_page'),'composition','del',invalideur_session($Cache, lang_dir(@$Pile[0]['lang'], 'left','right')))) .
		'
		')) :
			'') .
	'
	')) :
		'') .
'
	' .
invalideur_session($Cache, filtre_icone_horizontale_dist(generer_action_auteur('vider_page',interdire_scripts(invalideur_session($Cache, (entites_html(table_valeur(@$Pile[0], (string)'page', null),true) ? (	'page:' .
		interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'page', null),true)))):(	'objet:' .
		interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true))) .
		':' .
		interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'type', null),true))))))),invalideur_session($Cache, self())),_T('noizetier:formulaire_supprimer_noisettes_page'),'noizetier-24','del',invalideur_session($Cache, lang_dir(@$Pile[0]['lang'], 'left','right')))) .
'
</div>
' .
boite_fermer() .
'
');

	return analyse_resultat_skel('html_d42d2d10f739dfeb89b04bb42b13c522', $Cache, $page, '../plugins/noizetier/prive/squelettes/inclure/inc-infos_page.html');
}
?>
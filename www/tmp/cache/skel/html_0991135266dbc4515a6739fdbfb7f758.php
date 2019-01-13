<?php

/*
 * Squelette : ../plugins/noizetier/prive/squelettes/inclure/inc-nav_noizetier.html
 * Date :      Wed, 11 Jul 2018 07:46:22 GMT
 * Compile :   Mon, 07 Jan 2019 00:56:50 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/noizetier/prive/squelettes/inclure/inc-nav_noizetier.html
// Temps de compilation total: 194.625 ms
//

function html_0991135266dbc4515a6739fdbfb7f758($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
<ul class="liste-items sous_navigation">
	' .
vide($Pile['vars'][$_zzz=(string)'page_exec'] = 'noizetier_pages') .
(($t1 = strval(lien_ou_expose(parametre_url(generer_url_ecrire(table_valeur($Pile["vars"], (string)'page_exec', null)),'est_page_objet','oui'),_T('noizetier:liste_pages_objet_oui'),((((table_valeur($Pile["vars"], (string)'page_exec', null) == interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'exec', null),true)))) AND (interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'est_page_objet', null), 'oui'),true) == 'oui')))) ?' ' :''))))!=='' ?
		('<li class="item">
		' . $t1 . '
	</li>') :
		'') .
'
	' .
(($t1 = strval(lien_ou_expose(parametre_url(generer_url_ecrire(table_valeur($Pile["vars"], (string)'page_exec', null)),'est_page_objet','non'),_T('noizetier:liste_pages_objet_non'),((((table_valeur($Pile["vars"], (string)'page_exec', null) == interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'exec', null),true)))) AND (interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'est_page_objet', null), 'oui'),true) == 'non')))) ?' ' :''))))!=='' ?
		('<li class="item">
		' . $t1 . '
	</li>') :
		'') .
'
	' .
vide($Pile['vars'][$_zzz=(string)'page_exec'] = 'noizetier_objets') .
(($t1 = strval(lien_ou_expose(generer_url_ecrire(table_valeur($Pile["vars"], (string)'page_exec', null)),_T('noizetier:liste_objets'),(table_valeur($Pile["vars"], (string)'page_exec', null) == interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'exec', null),true))))))!=='' ?
		('<li class="item">
		' . $t1 . '
	</li>') :
		'') .
'
	' .
(($t1 = strval(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('configurer', 'noizetier')?" ":""))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars'][$_zzz=(string)'page_exec'] = 'configurer_noizetier') .
	(($t2 = strval(lien_ou_expose(generer_url_ecrire(table_valeur($Pile["vars"], (string)'page_exec', null)),_T('noizetier:configurer_titre'),(table_valeur($Pile["vars"], (string)'page_exec', null) == interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'exec', null),true))))))!=='' ?
			('<li class="item">
		' . $t2 . '
	</li>') :
			'') .
	'
	')) :
		'') .
'
</ul>


' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/inclure/inc-raccourcis_rechargement') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/noizetier/prive/squelettes/inclure/inc-nav_noizetier.html\',\'html_0991135266dbc4515a6739fdbfb7f758\',\'\',12,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>


' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("ieconfig", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/inclure/inc-raccourcis_ieconfig') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/noizetier/prive/squelettes/inclure/inc-nav_noizetier.html\',\'html_0991135266dbc4515a6739fdbfb7f758\',\'\',37,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_0991135266dbc4515a6739fdbfb7f758', $Cache, $page, '../plugins/noizetier/prive/squelettes/inclure/inc-nav_noizetier.html');
}
?>
<?php

/*
 * Squelette : ../plugins/noizetier/prive/squelettes/contenu/noizetier_page_edit.html
 * Date :      Wed, 11 Jul 2018 07:46:22 GMT
 * Compile :   Mon, 07 Jan 2019 01:02:06 GMT
 * Boucles :   _page_concernee
 */ 

function BOUCLE_page_concerneehtml_7a68b25baeac34ec07a3f76527d890e7(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'noizetier_pages';
		$command['id'] = '_page_concernee';
		$command['from'] = array('noizetier_pages' => 'spip_noizetier_pages');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("noizetier_pages.icon",
		"noizetier_pages.est_page_objet",
		"noizetier_pages.nom");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'noizetier_pages.page', sql_quote(table_valeur($Pile["vars"], (string)'page_concernee', null), '', 'varchar(255) NOT NULL DEFAULT \'\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/noizetier/prive/squelettes/contenu/noizetier_page_edit.html','html_7a68b25baeac34ec07a3f76527d890e7','_page_concernee',8,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('noizetier:retour');
	$l2 = _T('noizetier:formulaire_modifier_page');
	$l3 = _T('noizetier:formulaire_creer_composition');
	$l4 = _T('noizetier:formulaire_dupliquer_page_entete');
	$l5 = _T('public|spip|ecrire:info_sans_titre');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'edition', null),true) == 'modifier')) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars'][$_zzz=(string)'redirect'] = parametre_url(generer_url_ecrire('noizetier_page'),'page',interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'page', null),true)))) .
	vide($Pile['vars'][$_zzz=(string)'retour'] = parametre_url(generer_url_ecrire('noizetier_page'),'page',interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'page', null),true)))) .
	vide($Pile['vars'][$_zzz=(string)'icone_retour'] = interdire_scripts($Pile[$SP]['icon'])))) :
		'') .
'
' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'edition', null),true) == 'modifier')) ?'' :' '))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars'][$_zzz=(string)'redirect'] = '') .
	vide($Pile['vars'][$_zzz=(string)'retour'] = parametre_url(generer_url_ecrire('noizetier_pages'),'est_page_objet',interdire_scripts($Pile[$SP]['est_page_objet']))) .
	vide($Pile['vars'][$_zzz=(string)'icone_retour'] = 'noizetier-24.png'))) :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'redirect'] = interdire_scripts(((($a = entites_html(table_valeur(@$Pile[0], (string)'redirect', null),true)) OR (is_string($a) AND strlen($a))) ? $a : table_valeur($Pile["vars"], (string)'redirect', null)))) .
'<div class="cadre-formulaire-editer">
	<div class="entete-formulaire">
		' .
filtre_icone_verticale_dist(table_valeur($Pile["vars"], (string)'retour', null),$l1,table_valeur($Pile["vars"], (string)'icone_retour', null),'',(	'left retour' .
	(($t2 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'retourajax', null), ''),true)) ?' ' :''))))!=='' ?
			($t2 . 'ajax preload') :
			''))) .
'
		' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'edition', null),true) == 'modifier')) ?' ' :''))))!=='' ?
		($t1 . $l2) :
		'') .
'
		' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'edition', null),true) == 'creer')) ?' ' :''))))!=='' ?
		($t1 . $l3) :
		'') .
'
		' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'edition', null),true) == 'dupliquer')) ?' ' :''))))!=='' ?
		($t1 . $l4) :
		'') .
'
		<h1>
			' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'edition', null),true) == 'modifier')) ?' ' :''))))!=='' ?
		($t1 . interdire_scripts(_T_ou_typo($Pile[$SP]['nom']))) :
		'') .
'
			' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'edition', null),true) == 'creer')) ?' ' :''))))!=='' ?
		($t1 . $l5) :
		'') .
'
			' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'edition', null),true) == 'dupliquer')) ?' ' :''))))!=='' ?
		($t1 . _T('noizetier:copie_de', array('source' => interdire_scripts(_T_ou_typo($Pile[$SP]['nom']))))) :
		'') .
'
		</h1>
	</div>

	' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'retourajax', null), ''),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
		' .
	vide($Pile['vars'][$_zzz=(string)'retour'] = 'javascript:if (window.jQuery) jQuery(".entete-formulaire .retour a").followLink();'))) :
		'') .
'
	<div class="ajax">
		' .
executer_balise_dynamique('FORMULAIRE_EDITER_PAGE',
	array(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'edition', null),true)),table_valeur($Pile["vars"], (string)'page_concernee', null),table_valeur($Pile["vars"], (string)'redirect', null)),
	array('../plugins/noizetier/prive/squelettes/contenu/noizetier_page_edit.html','html_7a68b25baeac34ec07a3f76527d890e7','_page_concernee',26,$GLOBALS['spip_lang'])) .
'
	</div>
	' .
(($t1 = strval(interdire_scripts(((eval('return '.'_AJAX'.';')) ?' ' :''))))!=='' ?
		($t1 . (	'
		<script type="text/javascript">/*<![CDATA[*/
			jQuery(\'#chemin\').find(\'>div\').ajaxReload({\'args\':{\'exec\':\'noizetier_page_edit\',\'page\':\'' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'page', null),true)) .
	'\',\'edition\':\'' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'edition', null),true)) .
	'\'}});
			jQuery(\'#navigation\').find(\'>div\').ajaxReload({\'args\':{\'exec\':\'noizetier_page_edit\',\'page\':\'' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'page', null),true)) .
	'\',\'edition\':\'' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'edition', null),true)) .
	'\'}});
		/*]]>*/</script>
	')) :
		'') .
'
</div>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_page_concernee @ ../plugins/noizetier/prive/squelettes/contenu/noizetier_page_edit.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/noizetier/prive/squelettes/contenu/noizetier_page_edit.html
// Temps de compilation total: 42.309 ms
//

function html_7a68b25baeac34ec07a3f76527d890e7($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
interdire_scripts(sinon_interdire_acces(((((((((((entites_html(table_valeur(@$Pile[0], (string)'edition', null),true) == 'modifier')) AND (invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifierpage', 'noizetier', '', '', invalideur_session($Cache, array('page' => interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'page', null),true))))))?" ":"")))) ?' ' :'')) OR (interdire_scripts(((((entites_html(table_valeur(@$Pile[0], (string)'edition', null),true) == 'creer')) AND (invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('creercomposition', 'noizetier', '', '', invalideur_session($Cache, array('page' => interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'source', null),true))))))?" ":"")))) ?' ' :'')))) ?' ' :'')) OR (interdire_scripts(((((entites_html(table_valeur(@$Pile[0], (string)'edition', null),true) == 'dupliquer')) AND (invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('dupliquercomposition', 'noizetier', '', '', invalideur_session($Cache, array('page' => interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'source', null),true))))))?" ":"")))) ?' ' :'')))) ?' ' :''))) .
'
' .
vide($Pile['vars'][$_zzz=(string)'page_concernee'] = interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'page', null),true) ? interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'page', null),true)):interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'source', null),true))))) .
BOUCLE_page_concerneehtml_7a68b25baeac34ec07a3f76527d890e7($Cache, $Pile, $doublons, $Numrows, $SP));

	return analyse_resultat_skel('html_7a68b25baeac34ec07a3f76527d890e7', $Cache, $page, '../plugins/noizetier/prive/squelettes/contenu/noizetier_page_edit.html');
}
?>
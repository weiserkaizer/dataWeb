<?php

/*
 * Squelette : ../plugins/noizetier/prive/squelettes/contenu/noizetier_pages.html
 * Date :      Wed, 11 Jul 2018 07:46:22 GMT
 * Compile :   Mon, 07 Jan 2019 00:56:51 GMT
 * Boucles :   _plugins, _si_inactive, _pages
 */ 

function BOUCLE_pluginshtml_acb0ab5c1f1d88b754cee7a342b223e9(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(interdire_scripts($Pile[$SP-1]['necessite']));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_plugins';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
		$command['orderby'] = array('cle');
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('../plugins/noizetier/prive/squelettes/contenu/noizetier_pages.html','html_acb0ab5c1f1d88b754cee7a342b223e9','_plugins',28,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
					' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist(interdire_scripts(safehtml($Pile[$SP]["valeur"])), "est_actif")) ?'' :' '))))!=='' ?
		($t1 . (	'
						' .
	vide($Pile['vars'][$_zzz=(string)'inactifs'] = filtre_push(table_valeur($Pile["vars"], (string)'inactifs', null),interdire_scripts(safehtml($Pile[$SP]['valeur'])))))) :
		'') .
'
				');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_plugins @ ../plugins/noizetier/prive/squelettes/contenu/noizetier_pages.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_si_inactivehtml_acb0ab5c1f1d88b754cee7a342b223e9(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(($Pile[$SP]['est_active'] == 'non'));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_si_inactive';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"CONDITION",
		$command,
		array('../plugins/noizetier/prive/squelettes/contenu/noizetier_pages.html','html_acb0ab5c1f1d88b754cee7a342b223e9','_si_inactive',26,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
				' .
vide($Pile['vars'][$_zzz=(string)'inactifs'] = array()) .
BOUCLE_pluginshtml_acb0ab5c1f1d88b754cee7a342b223e9($Cache, $Pile, $doublons, $Numrows, $SP) .
'
				' .
vide($Pile['vars'][$_zzz=(string)'inactifs'] = filtre_implode_dist(table_valeur($Pile["vars"], (string)'inactifs', null),', ')) .
boite_ouvrir('', 'notice') .
_T('noizetier:erreur_page_inactive', array('plugins' => table_valeur($Pile["vars"], (string)'inactifs', null))) .
'
				' .
boite_fermer() .
'
			');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_si_inactive @ ../plugins/noizetier/prive/squelettes/contenu/noizetier_pages.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_pageshtml_acb0ab5c1f1d88b754cee7a342b223e9(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['est_page_objet']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'noizetier_pages';
		$command['id'] = '_pages';
		$command['from'] = array('noizetier_pages' => 'spip_noizetier_pages');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("noizetier_pages.necessite",
		"noizetier_pages.est_active",
		"noizetier_pages.type",
		"noizetier_pages.composition",
		"noizetier_pages.est_virtuelle",
		"noizetier_pages.page",
		"noizetier_pages.nom",
		"noizetier_pages.description",
		"noizetier_pages.icon");
		$command['orderby'] = array('noizetier_pages.type', 'noizetier_pages.composition');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array((!(is_array(@$Pile[0]['est_page_objet'])?count(@$Pile[0]['est_page_objet']):strlen(@$Pile[0]['est_page_objet'])) ? '' : ((is_array(@$Pile[0]['est_page_objet'])) ? sql_in('noizetier_pages.est_page_objet',sql_quote($in)) : 
			array('=', 'noizetier_pages.est_page_objet', sql_quote(@$Pile[0]['est_page_objet'], '','varchar(3) NOT NULL DEFAULT \'oui\'')))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/noizetier/prive/squelettes/contenu/noizetier_pages.html','html_acb0ab5c1f1d88b754cee7a342b223e9','_pages',5,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('noizetier:bulle_configurer_page_noisettes');
	$l2 = _T('noizetier:bulle_modifier_composition');
	$l3 = _T('noizetier:bulle_modifier_page');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	<li class="item page' .
(($t1 = strval(interdire_scripts(((($Pile[$SP]['est_virtuelle'] == 'oui')) ?' ' :''))))!=='' ?
		($t1 . ' virtuelle') :
		'') .
'">
		<div' .
(($t1 = strval(interdire_scripts((((($zc=$Pile[$SP]['composition'])?($zc=='-'?'':$zc):compositions_determiner(objet_type('noizetier_pages'), $Pile[$SP]['page'], '', false))) ?' ' :''))))!=='' ?
		($t1 . ' class="composition"') :
		'') .
'>
			
			<div class="resume">
				
				<a' .
(($t1 = strval(parametre_url(generer_url_ecrire('noizetier_page'),'page',interdire_scripts($Pile[$SP]['page']))))!=='' ?
		(' href="' . $t1 . '"') :
		'') .
' title="' .
$l1 .
'">' .
interdire_scripts(_T_ou_typo($Pile[$SP]['nom'])) .
'</a>
				<i>' .
(($t1 = strval(interdire_scripts($Pile[$SP]['page'])))!=='' ?
		(' (' . $t1 . ')') :
		'') .
'</i>
				' .
(($t1 = strval(interdire_scripts(((($a = ptobr(_T_ou_typo($Pile[$SP]['description']))) OR (is_string($a) AND strlen($a))) ? $a : '&nbsp;'))))!=='' ?
		('<br />' . $t1) :
		'') .
'
				
				<div class="icone">
					' .
interdire_scripts(filtre_balise_img_dist(extraire_attribut(filtrer('image_graver', filtrer('image_reduire',chemin_image(interdire_scripts($Pile[$SP]['icon'])),'24')),'src'))) .
'
				</div>
			' .
BOUCLE_si_inactivehtml_acb0ab5c1f1d88b754cee7a342b223e9($Cache, $Pile, $doublons, $Numrows, $SP) .
'
			</div>

			
			<div class="edition">
				' .
(($t1 = strval(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('creercomposition', 'noizetier', '', '', invalideur_session($Cache, array('page' => interdire_scripts(invalideur_session($Cache, $Pile[$SP]['page'])))))?" ":""))))!=='' ?
		($t1 . (	'
					' .
	(($t2 = strval(parametre_url(parametre_url(generer_url_ecrire('noizetier_page_edit'),'edition','creer'),'source',interdire_scripts(typo($Pile[$SP]['type'], "TYPO", $connect, $Pile[0])))))!=='' ?
			('<a href="' . $t2 . (	'"
						title="' .
		_T('noizetier:bulle_creer_composition', array('page' => interdire_scripts(typo($Pile[$SP]['type'], "TYPO", $connect, $Pile[0])))) .
		'">
						' .
		(($t3 = strval(interdire_scripts(chemin_image('composition-add-24.png'))))!=='' ?
				('<img height="24" width="24" src="' . $t3 . '" alt="" />') :
				'') .
		'
					</a>')) :
			'') .
	'
				')) :
		'') .
'
				' .
(($t1 = strval(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('activercomposition', 'noizetier', '', '', invalideur_session($Cache, array('page' => interdire_scripts(invalideur_session($Cache, $Pile[$SP]['page'])))))?" ":""))))!=='' ?
		($t1 . (	'
					' .
	(($t2 = strval(invalideur_session($Cache, generer_action_auteur('activer_composition',interdire_scripts(invalideur_session($Cache, $Pile[$SP]['page'])),invalideur_session($Cache, self())))))!=='' ?
			('<a href="' . $t2 . (	'"
						title="' .
		_T('noizetier:bulle_activer_composition', array('type' => interdire_scripts(typo($Pile[$SP]['type'], "TYPO", $connect, $Pile[0])))) .
		'">
						' .
		(($t3 = strval(interdire_scripts(chemin_image('composition-set-24.png'))))!=='' ?
				('<img height="24" width="24" src="' . $t3 . '" alt="" />') :
				'') .
		'
					</a>')) :
			'') .
	'
				')) :
		'') .
'
				' .
(($t1 = strval(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('dupliquercomposition', 'noizetier', '', '', invalideur_session($Cache, array('page' => interdire_scripts(invalideur_session($Cache, $Pile[$SP]['page'])))))?" ":""))))!=='' ?
		($t1 . (	'
					' .
	(($t2 = strval(parametre_url(parametre_url(generer_url_ecrire('noizetier_page_edit'),'edition','dupliquer'),'source',interdire_scripts($Pile[$SP]['page']))))!=='' ?
			('<a href="' . $t2 . (	'"
						title="' .
		_T('noizetier:bulle_dupliquer_composition', array('page' => interdire_scripts($Pile[$SP]['page']))) .
		'">
						' .
		(($t3 = strval(interdire_scripts(chemin_image('composition-copy-24.png'))))!=='' ?
				('<img height="24" width="24" src="' . $t3 . '" alt="" />') :
				'') .
		'
					</a>')) :
			'') .
	'
				')) :
		'') .
'
				' .
(($t1 = strval(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifierpage', 'noizetier', '', '', invalideur_session($Cache, array('page' => interdire_scripts(invalideur_session($Cache, $Pile[$SP]['page'])))))?" ":""))))!=='' ?
		($t1 . (	'
					' .
	(($t2 = strval(parametre_url(parametre_url(generer_url_ecrire('noizetier_page_edit'),'edition','modifier'),'page',interdire_scripts($Pile[$SP]['page']))))!=='' ?
			('<a href="' . $t2 . (	'"
						title="' .
		interdire_scripts(((($zc=$Pile[$SP]['composition'])?($zc=='-'?'':$zc):compositions_determiner(objet_type('noizetier_pages'), $Pile[$SP]['page'], '', false)) ? $l2:$l3)) .
		'">
						' .
		(($t3 = strval(interdire_scripts(chemin_image('edit-24.png'))))!=='' ?
				('<img height="24" width="24" src="' . $t3 . '" alt="" />') :
				'') .
		'
					</a>')) :
			'') .
	'
				')) :
		'') .
'
			</div>
		</div>
	</li>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_pages @ ../plugins/noizetier/prive/squelettes/contenu/noizetier_pages.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/noizetier/prive/squelettes/contenu/noizetier_pages.html
// Temps de compilation total: 143.152 ms
//

function html_acb0ab5c1f1d88b754cee7a342b223e9($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('noizetier')?" ":""))) .
'
<h1 class="grostitre">
	' .
_T('noizetier:noizetier') .
'
</h1>
' .
(($t1 = BOUCLE_pageshtml_acb0ab5c1f1d88b754cee7a342b223e9($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<p>' .
		_T('noizetier:editer_noizetier_explication') .
		'</p>
<ul class="liste-items liste-pages noizetier-liste-pages">
') . $t1 . '
</ul>
') :
		'') .
'

' .
'
<script type="text/javascript">
/*<![CDATA[*/
	// $(function(){
	// 	$(\'.item.page .edition\').hide();
	// 	$(\'.item.page\')
	// 		.hover(
	// 			function(){
	// 				$(this).find(\'.edition\').show();
	// 			},
	// 			function(){
	// 				$(this).find(\'.edition\').hide();
	// 			}
	// 		);
	// });
/*]]>*/
</script>');

	return analyse_resultat_skel('html_acb0ab5c1f1d88b754cee7a342b223e9', $Cache, $page, '../plugins/noizetier/prive/squelettes/contenu/noizetier_pages.html');
}
?>
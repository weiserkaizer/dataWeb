<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html
 * Date :      Fri, 27 Jul 2018 09:11:08 GMT
 * Compile :   Sat, 11 Aug 2018 14:48:46 GMT
 * Boucles :   _LogoRubrique, _LogoSite, _LogoArticle, _http-equiv, _meta_tags, _SyndicationRubrique, _EstAgenda, _SyndicationRubriqueAgenda, _RubLayout, _RubartLayout, _ArtLayout, _ArtRubLayout
 */ 

function BOUCLE_LogoRubriquehtml_d8e2490aa529236561dfe5c447a5a8b5(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_LogoRubrique';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.lang",
		"rubriques.titre");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_rubrique', sql_quote(@$Pile[0]['id_rubrique'], '','bigint(21) NOT NULL AUTO_INCREMENT')), sql_in('rubriques.id_rubrique', lister_objets_avec_logos('id_rubrique'), ''));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html','html_d8e2490aa529236561dfe5c447a5a8b5','_LogoRubrique',9,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (($t1 = strval(url_absolue(extraire_attribut(filtrer('image_graver', filtrer('image_focus',
((!is_array($l = quete_logo('id_rubrique', 'on', $Pile[$SP]['id_rubrique'],quete_parent($Pile[$SP]['id_rubrique']), 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'200','200')),'src'))))!=='' ?
		('<meta property="og:image" content="' . $t1 . '" />') :
		'');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_LogoRubrique @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_LogoSitehtml_d8e2490aa529236561dfe5c447a5a8b5(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'syndic';
		$command['id'] = '_LogoSite';
		$command['from'] = array('syndic' => 'spip_syndic');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("syndic.id_syndic");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('syndic.statut','publie,prop','publie',''), 
			array('=', 'syndic.id_syndic', sql_quote(@$Pile[0]['id_syndic'], '','bigint(21) NOT NULL AUTO_INCREMENT')), sql_in('syndic.id_syndic', lister_objets_avec_logos('id_syndic'), ''));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html','html_d8e2490aa529236561dfe5c447a5a8b5','_LogoSite',9,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (($t1 = strval(url_absolue(extraire_attribut(filtrer('image_graver', filtrer('image_focus',
((!is_array($l = quete_logo('id_syndic', 'on', $Pile[$SP]['id_syndic'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'200','200')),'src'))))!=='' ?
		('<meta property="og:image" content="' . $t1 . '" />') :
		'');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_LogoSite @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_LogoArticlehtml_d8e2490aa529236561dfe5c447a5a8b5(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_LogoArticle';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_article",
		"articles.lang",
		"articles.titre");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_article', sql_quote(@$Pile[0]['id_article'], '','bigint(21) NOT NULL AUTO_INCREMENT')), sql_in('articles.id_article', lister_objets_avec_logos('id_article'), ''));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html','html_d8e2490aa529236561dfe5c447a5a8b5','_LogoArticle',9,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (($t1 = strval(url_absolue(extraire_attribut(filtrer('image_graver', filtrer('image_focus',
((!is_array($l = quete_logo('id_article', 'on', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'200','200')),'src'))))!=='' ?
		('<meta property="og:image" content="' . $t1 . '" />') :
		'');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_LogoArticle @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_http_equivhtml_d8e2490aa529236561dfe5c447a5a8b5(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_http-equiv';
		$command['from'] = array('mots' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("mots.titre",
		"mots.texte");
		$command['orderby'] = array('mots.titre');
		$command['where'] = 
			array(
			array('=', 'mots.type', "'_HTTP-EQUIV'"));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html','html_d8e2490aa529236561dfe5c447a5a8b5','_http-equiv',15,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (($t1 = strval(interdire_scripts(attribut_html(propre($Pile[$SP]['texte'], $connect, $Pile[0])))))!=='' ?
		((	'<meta' .
	(($t2 = strval(interdire_scripts(attribut_html(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])))))!=='' ?
			(' http-equiv="' . $t2 . '"') :
			'') .
	' content="') . $t1 . '" />') :
		'');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_http-equiv @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_meta_tagshtml_d8e2490aa529236561dfe5c447a5a8b5(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_meta_tags';
		$command['from'] = array('mots' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("mots.titre",
		"mots.texte");
		$command['orderby'] = array('mots.titre');
		$command['where'] = 
			array(
			array('=', 'mots.type', "'_META'"));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html','html_d8e2490aa529236561dfe5c447a5a8b5','_meta_tags',16,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (($t1 = strval(interdire_scripts(attribut_html(propre($Pile[$SP]['texte'], $connect, $Pile[0])))))!=='' ?
		((	'<meta' .
	(($t2 = strval(interdire_scripts(attribut_html(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])))))!=='' ?
			(' name="' . $t2 . '"') :
			'') .
	' content="') . $t1 . '" />') :
		'');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_meta_tags @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_SyndicationRubriquehtml_d8e2490aa529236561dfe5c447a5a8b5(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_SyndicationRubrique';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.titre",
		"rubriques.id_rubrique",
		"rubriques.lang");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_rubrique', sql_quote(@$Pile[0]['id_rubrique'], '','bigint(21) NOT NULL AUTO_INCREMENT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html','html_d8e2490aa529236561dfe5c447a5a8b5','_SyndicationRubrique',28,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
<link rel="alternate" type="application/rss+xml" title="' .
_T('public|spip|ecrire:syndiquer_rubrique') .
' : ' .
interdire_scripts(attribut_html(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) .
'" href="' .
interdire_scripts(url_absolue(generer_url_public('backend', (	'id_rubrique=' .
	$Pile[$SP]['id_rubrique'])))) .
'" />
');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_SyndicationRubrique @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_EstAgendahtml_d8e2490aa529236561dfe5c447a5a8b5(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!($id_rubrique = intval($Pile[$SP]['id_rubrique'])))
		return '';
	include_spip('inc/rubriques');
	$hierarchie = calcul_hierarchie_in($id_rubrique,false);
	if (!$hierarchie) return "";
	
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_EstAgenda';
		$command['from'] = array('rubriques' => 'spip_rubriques','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("rubriques.id_rubrique");
		$command['select'] = array("rubriques.lang",
		"rubriques.titre");
		$command['join'] = array('L1' => array('rubriques','id_objet','id_rubrique','L1.objet='.sql_quote('rubrique')), 'L2' => array('L1','id_mot'));
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['orderby'] = array("FIELD(rubriques.id_rubrique, $hierarchie) DESC");
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'L2.titre', "'Agenda'"), 
			array('IN', 'rubriques.id_rubrique', "($hierarchie)"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html','html_d8e2490aa529236561dfe5c447a5a8b5','_EstAgenda',33,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("AGENDA", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . (	'<link rel="alternate" type="application/rss+xml" title="' .
	_T('soyezcreateurs:syndiquer_agenda') .
	' : ' .
	interdire_scripts(attribut_html(supprimer_numero(typo($Pile[$SP-1]['titre']), "TYPO", $connect, $Pile[0]))) .
	'" href="' .
	interdire_scripts(url_absolue(generer_url_public('backendagenda', (	'id_rubrique=' .
		$Pile[$SP-1]['id_rubrique'])))) .
	'" />')) :
		'') .
'
');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_EstAgenda @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_SyndicationRubriqueAgendahtml_d8e2490aa529236561dfe5c447a5a8b5(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_SyndicationRubriqueAgenda';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.titre",
		"rubriques.id_rubrique",
		"rubriques.lang");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_rubrique', sql_quote(@$Pile[0]['id_rubrique'], '','bigint(21) NOT NULL AUTO_INCREMENT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html','html_d8e2490aa529236561dfe5c447a5a8b5','_SyndicationRubriqueAgenda',33,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= BOUCLE_EstAgendahtml_d8e2490aa529236561dfe5c447a5a8b5($Cache, $Pile, $doublons, $Numrows, $SP);
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_SyndicationRubriqueAgenda @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_RubLayouthtml_d8e2490aa529236561dfe5c447a5a8b5(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_RubLayout';
		$command['from'] = array('mots' => 'spip_mots','L1' => 'spip_mots_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("mots.titre");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('mots','id_mot'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'L1.id_objet', sql_quote(@$Pile[0]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'L1.objet', sql_quote('rubrique')), 
			array('=', 'mots.type', "'_LayoutGala'"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html','html_d8e2490aa529236561dfe5c447a5a8b5','_RubLayout',66,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (($t1 = strval(direction_css(produire_fond_statique( 'layout.css' , array('layoutgala' => interdire_scripts(substr(textebrut($Pile[$SP]['titre']),'0','2')) ), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html','html_d8e2490aa529236561dfe5c447a5a8b5','_RubLayout',0,$GLOBALS['spip_lang'])), _request('connect')))))!=='' ?
		('<link rel="stylesheet" type="text/css" href="' . $t1 . '" media="all" />') :
		'');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_RubLayout @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_RubartLayouthtml_d8e2490aa529236561dfe5c447a5a8b5(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_RubartLayout';
		$command['from'] = array('mots' => 'spip_mots','L1' => 'spip_mots_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("mots.titre");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('mots','id_mot'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'L1.id_objet', sql_quote($Pile[$SP]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'L1.objet', sql_quote('rubrique')), 
			array('=', 'mots.type', "'_LayoutGala'"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html','html_d8e2490aa529236561dfe5c447a5a8b5','_RubartLayout',61,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (($t1 = strval(direction_css(produire_fond_statique( 'layout.css' , array('layoutgala' => interdire_scripts(substr(textebrut($Pile[$SP]['titre']),'0','2')) ), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html','html_d8e2490aa529236561dfe5c447a5a8b5','_RubartLayout',0,$GLOBALS['spip_lang'])), _request('connect')))))!=='' ?
		('<link rel="stylesheet" type="text/css" href="' . $t1 . '" media="all" />') :
		'');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_RubartLayout @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_ArtLayouthtml_d8e2490aa529236561dfe5c447a5a8b5(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_ArtLayout';
		$command['from'] = array('mots' => 'spip_mots','L1' => 'spip_mots_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("mots.titre");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('mots','id_mot'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'L1.id_objet', sql_quote($Pile[$SP]['id_article'], '','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'L1.objet', sql_quote('article')), 
			array('=', 'mots.type', "'_LayoutGala'"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html','html_d8e2490aa529236561dfe5c447a5a8b5','_ArtLayout',58,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (($t1 = strval(direction_css(produire_fond_statique( 'layout.css' , array('layoutgala' => interdire_scripts(substr(textebrut($Pile[$SP]['titre']),'0','2')) ), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html','html_d8e2490aa529236561dfe5c447a5a8b5','_ArtLayout',0,$GLOBALS['spip_lang'])), _request('connect')))))!=='' ?
		('<link rel="stylesheet" type="text/css" href="' . $t1 . '" media="all" />') :
		'');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_ArtLayout @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_ArtRubLayouthtml_d8e2490aa529236561dfe5c447a5a8b5(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_ArtRubLayout';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_rubrique",
		"articles.id_article",
		"articles.lang",
		"articles.titre");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_article', sql_quote(@$Pile[0]['id_article'], '','bigint(21) NOT NULL AUTO_INCREMENT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html','html_d8e2490aa529236561dfe5c447a5a8b5','_ArtRubLayout',57,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (($t1 = BOUCLE_ArtLayouthtml_d8e2490aa529236561dfe5c447a5a8b5($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		(BOUCLE_RubartLayouthtml_d8e2490aa529236561dfe5c447a5a8b5($Cache, $Pile, $doublons, $Numrows, $SP)));
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_ArtRubLayout @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html
// Temps de compilation total: 407.250 ms
//

function html_d8e2490aa529236561dfe5c447a5a8b5($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang="' .
spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" xml:lang="' .
spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" dir="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'" prefix="og: http://ogp.me/ns#">
<head><meta charset="' .
interdire_scripts($GLOBALS['meta']['charset']) .
'" />
<title>' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'title', null),true))))!=='' ?
		($t1 . ' - ') :
		'') .
interdire_scripts(textebrut(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))) .
'</title>

<meta property="og:title" content="' .
interdire_scripts(((($a = entites_html(table_valeur(@$Pile[0], (string)'title', null),true)) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts(attribut_html(textebrut(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])))))) .
'" />
<meta property="og:type" content="article" />
<meta property="og:url" content="' .
url_absolue(self()) .
'" />
' .
(($t1 = BOUCLE_LogoArticlehtml_d8e2490aa529236561dfe5c447a5a8b5($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((($t2 = BOUCLE_LogoSitehtml_d8e2490aa529236561dfe5c447a5a8b5($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
			$t2 :
			((($t3 = BOUCLE_LogoRubriquehtml_d8e2490aa529236561dfe5c447a5a8b5($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
				$t3 :
				((($t4 = strval(url_absolue(extraire_attribut(filtrer('image_graver', filtrer('image_focus',
((!is_array($l = quete_logo('id_syndic', 'on', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'200','200')),'src'))))!=='' ?
					('<meta property="og:image" content="' . $t4 . '" />') :
					''))))))) .
'
<meta property="og:site_name" content="' .
interdire_scripts(textebrut(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))) .
'" />
' .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'metadescription', null), interdire_scripts(attribut_html(supprimer_tags(propre($GLOBALS['meta']['descriptif_site'], $connect, $Pile[0]))))),true))))!=='' ?
		('<meta property="og:description" content="' . $t1 . '" />') :
		'') .
'
<meta property="og:locale" content="' .
strtolower(spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])) .
'_' .
strtoupper(spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])) .
'" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
' .
BOUCLE_http_equivhtml_d8e2490aa529236561dfe5c447a5a8b5($Cache, $Pile, $doublons, $Numrows, $SP) .
'
' .
BOUCLE_meta_tagshtml_d8e2490aa529236561dfe5c447a5a8b5($Cache, $Pile, $doublons, $Numrows, $SP) .
'
' .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'metadescription', null), interdire_scripts(attribut_html(supprimer_tags(propre($GLOBALS['meta']['descriptif_site'], $connect, $Pile[0]))))),true))))!=='' ?
		('<meta name="description" content="' . $t1 . '" />') :
		'') .
'
<meta name="generator" content="SPIP ' .
attribut_html(spip_version()) .
'" />
' .
interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'noindex', null),true) ? '<meta name="robots" content="noindex" />':(	interdire_scripts((((include_spip('inc/config')?lire_config('soyezcreateurs_google/indexation','oui',false):'') == 'oui') ? '<meta name="robots" content="index,follow" />':'<meta name="robots" content="noindex, nofollow" />')) .
	'
'))) .
'
' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'canonical', null),true))))!=='' ?
		('<link rel="canonical" href="' . $t1 . '" />') :
		'') .
'
' .
(($t1 = strval(attribut_html(recuperer_fond('modeles/lesauteurs', array('objet'=>'article','id_objet' => @$Pile[0]['id_article'],'id_article' => @$Pile[0]['id_article']), array('trim'=>true, 'compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html','html_d8e2490aa529236561dfe5c447a5a8b5','',19,$GLOBALS['spip_lang'])), ''))))!=='' ?
		('<meta name="author" content="' . $t1 . '" />') :
		'') .
'
<meta name="DC.title" content="' .
interdire_scripts(attribut_html(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))) .
'" />
<meta name="MSSmartTagsPreventParsing" content="TRUE" />
<!-- Lien vers le backend pour navigateurs eclaires -->
<link rel="alternate" type="application/rss+xml" title="' .
_T('public|spip|ecrire:syndiquer_site') .
' ' .
interdire_scripts(attribut_html(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))) .
'" href="' .
interdire_scripts(url_absolue(generer_url_public('backend', ''))) .
'" />
' .
BOUCLE_SyndicationRubriquehtml_d8e2490aa529236561dfe5c447a5a8b5($Cache, $Pile, $doublons, $Numrows, $SP) .
'
' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('activer_breves',null,false):'') == 'oui')) ?' ' :''))))!=='' ?
		($t1 . (	'<link rel="alternate" type="application/rss+xml" title="' .
	_T('public|spip|ecrire:dernieres_breves') .
	' ' .
	interdire_scripts(attribut_html(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))) .
	'" href="' .
	interdire_scripts(url_absolue(generer_url_public('backend-breves', ''))) .
	'" />')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("AGENDA", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . (	'<link rel="alternate" type="application/rss+xml" title="' .
	_T('soyezcreateurs:syndiquer_agenda') .
	' ' .
	interdire_scripts(attribut_html(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))) .
	'" href="' .
	interdire_scripts(url_absolue(generer_url_public('backendagenda', ''))) .
	'" />')) :
		'') .
'
' .
BOUCLE_SyndicationRubriqueAgendahtml_d8e2490aa529236561dfe5c447a5a8b5($Cache, $Pile, $doublons, $Numrows, $SP) .
'
   
' .
(($t1 = strval(timestamp(direction_css(find_in_path('css/reset.css')))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(timestamp(direction_css(find_in_path('css/clear.css')))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(timestamp(direction_css(find_in_path('css/font.css')))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(timestamp(direction_css(find_in_path('css/links.css')))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(timestamp(direction_css(find_in_path('css/typo.css')))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(timestamp(direction_css(find_in_path('css/media.css')))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(timestamp(direction_css(find_in_path('css/form.css')))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(timestamp(direction_css(find_in_path('css/grid.css')))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'



' .
(($t1 = strval(timestamp(direction_css(find_in_path('css/spip.css')))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
pipeline('insert_head_css','<!-- insert_head_css -->') .
'

' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("agenda", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . (($t2 = strval(direction_css(produire_fond_statique( 'style_public_plugin_agenda' , array('couleur_claire' => interdire_scripts(replace((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/link','#017ca5',false):''),'#','')) ,
	'format' => 'css' ), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html','html_d8e2490aa529236561dfe5c447a5a8b5','',0,$GLOBALS['spip_lang'])), _request('connect')))))!=='' ?
			('<link rel="stylesheet" type="text/css" href="' . $t2 . '" media="all" />') :
			'')) :
		'') .
'

	' .
(($t1 = BOUCLE_ArtRubLayouthtml_d8e2490aa529236561dfe5c447a5a8b5($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((($t2 = BOUCLE_RubLayouthtml_d8e2490aa529236561dfe5c447a5a8b5($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
			$t2 :
			((	(($t3 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'template', null),true) == 'Sommaire')) ?' ' :''))))!=='' ?
				($t3 . (	'<link rel="stylesheet" type="text/css" href="' .
			(($t4 = strval(filtre_compacte_dist(direction_css(produire_fond_statique( 'layout.css' , array('layoutgala' => interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/sommaire_layout','33',false):'')) ), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html','html_d8e2490aa529236561dfe5c447a5a8b5','',0,$GLOBALS['spip_lang'])), _request('connect'))))))!=='' ?
					($t4 . '" media="all" />') :
					''))) :
				'') .
		(($t3 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'template', null),true) == 'Sommaire')) ?'' :' '))))!=='' ?
				($t3 . (($t4 = strval(direction_css(produire_fond_statique( 'layout.css' , array('layoutgala' => interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/default_layout','33',false):'')) ), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html','html_d8e2490aa529236561dfe5c447a5a8b5','',0,$GLOBALS['spip_lang'])), _request('connect')))))!=='' ?
					('<link rel="stylesheet" type="text/css" href="' . $t4 . '" media="all" />') :
					'')) :
				'')))))) .
'
<link rel="stylesheet" type="text/css" href="' .
timestamp(direction_css(find_in_path('css/box.css'))) .
'" media="all" />
' .
(($t1 = strval(direction_css(produire_fond_statique( 'stylessoyezcreateurs.css' , array(), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html','html_d8e2490aa529236561dfe5c447a5a8b5','',71,$GLOBALS['spip_lang'])), _request('connect')))))!=='' ?
		('<link rel="stylesheet" type="text/css" href="' . $t1 . '" media="all" />') :
		'') .
'
' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'template', null),true) == 'Sommaire')) ?' ' :''))))!=='' ?
		($t1 . (($t2 = strval(interdire_scripts(((match((include_spip('inc/config')?lire_config('soyezcreateurs/mode_affichage','communiquant',false):''),'^portail.*')) ?' ' :''))))!=='' ?
			($t2 . (	'<link rel="stylesheet" type="text/css" href="' .
		direction_css(produire_fond_statique( (	'styles' .
			interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/mode_affichage','communiquant',false):'')) .
			'.css') , array(), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html','html_d8e2490aa529236561dfe5c447a5a8b5','',71,$GLOBALS['spip_lang'])), _request('connect'))) .
		'" media="all" />')) :
			'')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'template', null),true) == 'Sommaire')) ?' ' :''))))!=='' ?
		($t1 . (($t2 = strval(interdire_scripts(((match((include_spip('inc/config')?lire_config('soyezcreateurs/mode_affichage','communiquant',false):''),'^communiquant.*')) ?' ' :''))))!=='' ?
			($t2 . (	'<link rel="stylesheet" type="text/css" href="' .
		direction_css(produire_fond_statique( 'stylescommuniquant.css' , array(), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html','html_d8e2490aa529236561dfe5c447a5a8b5','',71,$GLOBALS['spip_lang'])), _request('connect'))) .
		'" media="all" />')) :
			'')) :
		'') .
'
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/presentation/couleurrubrique') . ', array(\'id_article\' => ' . argumenter_squelette(@$Pile[0]['id_article']) . ',
	\'id_rubrique\' => ' . argumenter_squelette(@$Pile[0]['id_rubrique']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html\',\'html_d8e2490aa529236561dfe5c447a5a8b5\',\'\',75,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .
recuperer_fond( 'noisettes/header/logoextra' , array('id_rubrique' => @$Pile[0]['id_rubrique'] ), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html','html_d8e2490aa529236561dfe5c447a5a8b5','',72,$GLOBALS['spip_lang'])), _request('connect')) .
'
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/header/headerbanner') . ', array(\'id_rubrique\' => ' . argumenter_squelette(@$Pile[0]['id_rubrique']) . ',
	\'template\' => ' . argumenter_squelette(@$Pile[0]['template']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html\',\'html_d8e2490aa529236561dfe5c447a5a8b5\',\'\',77,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/header/footerbanner') . ', array(\'id_rubrique\' => ' . argumenter_squelette(@$Pile[0]['id_rubrique']) . ',
	\'template\' => ' . argumenter_squelette(@$Pile[0]['template']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html\',\'html_d8e2490aa529236561dfe5c447a5a8b5\',\'\',78,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/header/fondpage') . ', array(\'id_rubrique\' => ' . argumenter_squelette(@$Pile[0]['id_rubrique']) . ',
	\'template\' => ' . argumenter_squelette(@$Pile[0]['template']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html\',\'html_d8e2490aa529236561dfe5c447a5a8b5\',\'\',79,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
<!--[if IE 6]>' .
(($t1 = strval(timestamp(direction_css(find_in_path('css/ie6.css')))))!=='' ?
		('
	<link rel="stylesheet" href="' . $t1 . '" type="text/css" />
') :
		'') .
'<![endif]-->
<!--[if IE 7]>' .
(($t1 = strval(timestamp(direction_css(find_in_path('css/ie7.css')))))!=='' ?
		('
	<link rel="stylesheet" href="' . $t1 . '" type="text/css" />
') :
		'') .
'<![endif]-->
<!--[if IE]>' .
(($t1 = strval(timestamp(direction_css(produire_fond_statique( 'css/ie.css' , array(), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html','html_d8e2490aa529236561dfe5c447a5a8b5','',78,$GLOBALS['spip_lang'])), _request('connect'))))))!=='' ?
		('
	<link rel="stylesheet" href="' . $t1 . '" type="text/css" /> 
') :
		'') .
'<![endif]-->
' .
(($t1 = strval(timestamp(direction_css(find_in_path('images/printer.css')))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" media="print" />') :
		'') .
'
' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'wdcalendar', null),true) == 'oui')) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	(($t2 = strval(timestamp(direction_css(find_in_path('css/calendar/dailog.css')))))!=='' ?
			('<link rel=\'stylesheet\' href=\'' . $t2 . '\' type=\'text/css\' />') :
			'') .
	'
' .
	(($t2 = strval(timestamp(direction_css(find_in_path('css/calendar/calendar.css')))))!=='' ?
			('<link rel=\'stylesheet\' href=\'' . $t2 . '\' type=\'text/css\' />') :
			'') .
	'
' .
	(($t2 = strval(timestamp(direction_css(find_in_path('css/calendar/dp.css')))))!=='' ?
			('<link rel=\'stylesheet\' href=\'' . $t2 . '\' type=\'text/css\' />') :
			'') .
	'
' .
	(($t2 = strval(timestamp(direction_css(find_in_path('css/calendar/alert.css')))))!=='' ?
			('<link rel=\'stylesheet\' href=\'' . $t2 . '\' type=\'text/css\' />') :
			'') .
	'
' .
	(($t2 = strval(timestamp(direction_css(find_in_path('css/calendar/main.css')))))!=='' ?
			('<link rel=\'stylesheet\' href=\'' . $t2 . '\' type=\'text/css\' />') :
			'') .
	'
')) :
		'') .
'
' .
'
<script type="text/javascript">
  document.documentElement.className += \' hasJS\';
</script>
' .
'<'.'?php header("X-Spip-Filtre: insert_head_css_conditionnel"); ?'.'>'. pipeline('insert_head','<!-- insert_head -->') .
'
' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'wdcalendar', null),true) == 'oui')) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	(($t2 = strval(timestamp(find_in_path('javascript/calendar/Common.js'))))!=='' ?
			('<script src="' . $t2 . '" type="text/javascript"></script>') :
			'') .
	'
' .
	(($t2 = strval(produire_fond_statique( 'datepicker_lang.js' , array(), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html','html_d8e2490aa529236561dfe5c447a5a8b5','',95,$GLOBALS['spip_lang'])), _request('connect'))))!=='' ?
			('<script src="' . $t2 . '" type="text/javascript"></script>') :
			'') .
	'
' .
	(($t2 = strval(timestamp(find_in_path('javascript/calendar/jquery.datepicker.js'))))!=='' ?
			('<script src="' . $t2 . '" type="text/javascript"></script>') :
			'') .
	'
' .
	(($t2 = strval(timestamp(find_in_path('javascript/calendar/jquery.alert.js'))))!=='' ?
			('<script src="' . $t2 . '" type="text/javascript"></script>') :
			'') .
	'
' .
	(($t2 = strval(timestamp(find_in_path('javascript/calendar/jquery.ifrmdailog.js'))))!=='' ?
			('<script src="' . $t2 . '" defer="defer" type="text/javascript"></script>') :
			'') .
	'

' .
	(($t2 = strval(produire_fond_statique( 'wdCalendar_lang.js' , array(), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html','html_d8e2490aa529236561dfe5c447a5a8b5','',100,$GLOBALS['spip_lang'])), _request('connect'))))!=='' ?
			('<script src="' . $t2 . '" type="text/javascript"></script>') :
			'') .
	'
' .
	(($t2 = strval(timestamp(find_in_path('javascript/calendar/jquery.calendar.js'))))!=='' ?
			('<script src="' . $t2 . '" type="text/javascript"></script>') :
			'') .
	'
')) :
		'') .
'
' .
(($t1 = strval(timestamp(find_in_path('javascript/jquery.em.js'))))!=='' ?
		('<script src="' . $t1 . '" type="text/javascript"></script>') :
		'') .
'
' .
(($t1 = strval(timestamp(find_in_path('javascript/jquery-accessible-modal-window-aria/jquery-accessible-modal-window-aria.js'))))!=='' ?
		('<script src="' . $t1 . '" type="text/javascript"></script>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'idbody', null),true) == 'sommaire_mode_international')) ?' ' :''))))!=='' ?
		($t1 . (($t2 = strval(timestamp(find_in_path('javascript/jquery.cycle.all.js'))))!=='' ?
			('<script src="' . $t2 . '" type="text/javascript"></script>') :
			'')) :
		'') .
'
<script type="text/javascript">
CanceladjustLayout = false;
CancelMonitorTextSize = false;
</script>

' .
((find_in_path('noisettes/header/header_perso.html'))  ?
		(' ' . (	'
' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/header/header_perso') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html\',\'html_d8e2490aa529236561dfe5c447a5a8b5\',\'\',112,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'

<link rel="shortcut icon" type="image/x-icon" href="' .
spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'/spip.php?page=favicon.ico" />
' .
recuperer_fond( 'noisettes/googleanalytics' , array(), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html','html_d8e2490aa529236561dfe5c447a5a8b5','',102,$GLOBALS['spip_lang'])), _request('connect')) .
'</head>
<body' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'idbody', null),true))))!=='' ?
		(' id="' . $t1 . '"') :
		'') .
' class="' .
interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/mode_affichage','communiquant',false):'')) .
' ' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_secteur', null),true))))!=='' ?
		('bodysecteur' . $t1 . (	' ' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'id_secteur', null),true) == interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'rubriqueencours', null),true))) ? 'bodysecteur':''))))!=='' ?
			($t2 . ' ') :
			''))) :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'rubriqueencours', null),true))))!=='' ?
		('bodyrubrique' . $t1 . ' bodyrubrique ') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_article', null),true))))!=='' ?
		('bodyarticle' . $t1 . ' bodyarticle') :
		'') .
'">
<div id="container">
  <div id="shadow">
' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("campagnes", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . (	'
  <div id="banheader" class="encart vertical">
	  ' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/encart') . ', array(\'identifiant\' => ' . argumenter_squelette('banheader') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html\',\'html_d8e2490aa529236561dfe5c447a5a8b5\',\'\',118,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>  
  </div>
')) :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'noisetteheader'] = 'header_modeedito') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'template', null),true) == 'Sommaire')) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(((find_in_path((	'noisettes/header/header_mode' .
		interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/mode_affichage','communiquant',false):'')) .
		'.html'))) ?' ' :'')))!=='' ?
			($t2 . (	'
			' .
		vide($Pile['vars'][$_zzz=(string)'noisetteheader'] = (	'header_mode' .
			interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/mode_affichage','communiquant',false):'')))))) :
			'') .
	'
')) :
		'') .
'
<header>
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'noisettes/header/' .
	table_valeur($Pile["vars"], (string)'noisetteheader', null))) . ', array_merge('.var_export($Pile[0],1).',array(\'secteurencours\' => ' . argumenter_squelette(@$Pile[0]['secteurencours']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html\',\'html_d8e2490aa529236561dfe5c447a5a8b5\',\'\',111,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/logopage/logopage_aiguilleur') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html\',\'html_d8e2490aa529236561dfe5c447a5a8b5\',\'\',112,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

</header>
<div id="contenu">
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'noisettes/miettesdepain/' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'type', null), '_default'),true)))) . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html\',\'html_d8e2490aa529236561dfe5c447a5a8b5\',\'\',116,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .
(($t1 = strval(interdire_scripts((((((entites_html(table_valeur(@$Pile[0], (string)'type', null),true)) AND (interdire_scripts(((include_spip('inc/config')?lire_config('soyezcreateurs/mode_affichage','communiquant',false):'') != 'portail')))) ?' ' :'')) ?' ' :''))))!=='' ?
		($t1 . (	(($t2 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_layout/positioncartouchetitre','contenu',false):'') == 'haut')) ?' ' :''))))!=='' ?
			($t2 . 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'noisettes/cartouchetitre/' .
			interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'type', null), '_default'),true)))) . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html\',\'html_d8e2490aa529236561dfe5c447a5a8b5\',\'\',128,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>') :
			'') .
	'
')) :
		'') .
'
	<div id="wrapper">


<div id="content" class="equilibre notstackable">
' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs/menuhautheader','header',false):'') == 'content')) ?' ' :''))))!=='' ?
		($t1 . 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'noisettes/menus/menuhaut' .
		interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/typemenuhaut',null,false):'')))) . ', array(\'secteurencours\' => ' . argumenter_squelette(@$Pile[0]['secteurencours']) . ',
	\'rubriqueencours\' => ' . argumenter_squelette(@$Pile[0]['rubriqueencours']) . ',
	\'id_article\' => ' . argumenter_squelette(@$Pile[0]['id_article']) . ',
	\'id_groupe\' => ' . argumenter_squelette(@$Pile[0]['id_groupe']) . ',
	\'id_mot\' => ' . argumenter_squelette(@$Pile[0]['id_mot']) . ',
	\'mots\' => ' . argumenter_squelette(@$Pile[0]['mots']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html\',\'html_d8e2490aa529236561dfe5c447a5a8b5\',\'\',134,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>') :
		'') .
'
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_d8e2490aa529236561dfe5c447a5a8b5', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header.html');
}
?>
<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer_pied.html
 * Date :      Thu, 26 Jul 2018 13:23:57 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:13 GMT
 * Boucles :   _MenuFooter, _PlanPasMenuHautSsRub, _PlanPasMenuHaut, _PlanMenuHautSsRub, _PlanMenuHaut
 */ 

function BOUCLE_MenuFooterhtml_b15ca9ba90e2ba5162c8bfd9d75c01dc(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_MenuFooter';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("0+articles.titre AS num",
		"articles.id_article",
		"articles.descriptif",
		"articles.titre",
		"articles.lang");
		$command['orderby'] = array('num');
		$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'L2.titre', "'MenuFooter'"));
		$command['join'] = array('L1' => array('articles','id_objet','id_article','L1.objet='.sql_quote('article')), 'L2' => array('L1','id_mot'));
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
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer_pied.html','html_b15ca9ba90e2ba5162c8bfd9d75c01dc','_MenuFooter',5,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t1 = (
'<li>' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'id_article', null),true) == $Pile[$SP]['id_article']) ? '<strong>':'')) .
'<a href="' .

	((($recurs=(isset($Pile[0]['recurs'])?$Pile[0]['recurs']:0))>=5)? '' :
	recuperer_fond('modeles/article_url', array('lang' => $GLOBALS["spip_lang"] ,
	'id_article'=>$Pile[$SP]['id_article'],
	'id'=>$Pile[$SP]['id_article'],
	'recurs'=>(++$recurs)), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer_pied.html','html_b15ca9ba90e2ba5162c8bfd9d75c01dc','_MenuFooter',5,$GLOBALS['spip_lang']), 'trim'=>true), ''))
 .
'" title="' .
interdire_scripts(attribut_html(supprimer_tags(propre($Pile[$SP]['descriptif'], $connect, $Pile[0])))) .
'">' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_layout/logomenufooter','oui',false):'') == 'oui')) ?' ' :''))))!=='' ?
		($t1 . (($t2 = strval(filtre_embarque_fichier(extraire_attribut(filtrer('image_graver', filtrer('image_reduire',
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurlogomenufooter','16',false):'')),interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/hauteurlogomenufooter','16',false):'')))),'src'))))!=='' ?
			('<img class="menu_footer_logo" src="' . $t2 . '" alt="" />') :
			'')) :
		'') .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a>' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'id_article', null),true) == $Pile[$SP]['id_article']) ? '</strong>':'')) .
'</li>');
		$t0 .= ((strlen($t1) && strlen($t0)) ? ' ' : '') . $t1;
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_MenuFooter @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer_pied.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_PlanPasMenuHautSsRubhtml_b15ca9ba90e2ba5162c8bfd9d75c01dc(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_PlanPasMenuHautSsRub';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("0+rubriques.titre AS num",
		"rubriques.id_rubrique",
		"rubriques.descriptif",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array('num');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', sql_quote($Pile[$SP]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT \'0\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer_pied.html','html_b15ca9ba90e2ba5162c8bfd9d75c01dc','_PlanPasMenuHautSsRub',66,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
							<li><a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
'"' .
(($t1 = strval(interdire_scripts(attribut_html(supprimer_tags(propre($Pile[$SP]['descriptif'], $connect, $Pile[0]))))))!=='' ?
		(' title="' . $t1 . '"') :
		'') .
'>' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></li>
							');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_PlanPasMenuHautSsRub @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer_pied.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_PlanPasMenuHauthtml_b15ca9ba90e2ba5162c8bfd9d75c01dc(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(((include_spip('inc/config')?lire_config('soyezcreateurs_layout/plansitefooter','generique',false):'') == 'miniplan'));

	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_PlanPasMenuHaut';
		$command['from'] = array('rubriques' => 'spip_rubriques','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("rubriques.id_rubrique");
		$command['select'] = array("rubriques.id_rubrique",
		"0+rubriques.titre AS num",
		"rubriques.descriptif",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array('num');
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('NOT', 
			array('IN', 'rubriques.id_rubrique', 
			array('SELF', 'rubriques.id_rubrique', 
			array('=', 'L2.titre', "'PasDansMenu'")))));
		$command['join'] = array('L1' => array('rubriques','id_objet','id_rubrique','L1.objet='.sql_quote('rubrique')), 'L2' => array('L1','id_mot'));
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
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer_pied.html','html_b15ca9ba90e2ba5162c8bfd9d75c01dc','_PlanPasMenuHaut',56,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
					<section class="avec-padding-bottom avec-margin-bottom">
						<h2><a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
'"' .
(($t1 = strval(interdire_scripts(attribut_html(supprimer_tags(propre($Pile[$SP]['descriptif'], $connect, $Pile[0]))))))!=='' ?
		(' title="' . $t1 . '"') :
		'') .
'>' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></h2>
						' .
(($t1 = BOUCLE_PlanPasMenuHautSsRubhtml_b15ca9ba90e2ba5162c8bfd9d75c01dc($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
						<ul class="menu vertical">
							' . $t1 . '
						</ul>
						') :
		'') .
'
					</section>
					');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_PlanPasMenuHaut @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer_pied.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_PlanMenuHautSsRubhtml_b15ca9ba90e2ba5162c8bfd9d75c01dc(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_PlanMenuHautSsRub';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("0+rubriques.titre AS num",
		"rubriques.id_rubrique",
		"rubriques.descriptif",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array('num');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', sql_quote($Pile[$SP]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT \'0\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer_pied.html','html_b15ca9ba90e2ba5162c8bfd9d75c01dc','_PlanMenuHautSsRub',43,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
							<li><a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
'"' .
(($t1 = strval(interdire_scripts(attribut_html(supprimer_tags(propre($Pile[$SP]['descriptif'], $connect, $Pile[0]))))))!=='' ?
		(' title="' . $t1 . '"') :
		'') .
'>' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></li>
							');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_PlanMenuHautSsRub @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer_pied.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_PlanMenuHauthtml_b15ca9ba90e2ba5162c8bfd9d75c01dc(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(((include_spip('inc/config')?lire_config('soyezcreateurs_layout/plansitefooter','generique',false):'') == 'miniplan'));

	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_PlanMenuHaut';
		$command['from'] = array('rubriques' => 'spip_rubriques','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("rubriques.id_rubrique");
		$command['select'] = array("rubriques.id_rubrique",
		"0+rubriques.titre AS num",
		"rubriques.descriptif",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array('num');
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'L2.titre', "'MenuHaut'"));
		$command['join'] = array('L1' => array('rubriques','id_objet','id_rubrique','L1.objet='.sql_quote('rubrique')), 'L2' => array('L1','id_mot'));
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
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer_pied.html','html_b15ca9ba90e2ba5162c8bfd9d75c01dc','_PlanMenuHaut',33,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
					<section class="avec-padding-bottom avec-margin-bottom">
						<h2><a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
'"' .
(($t1 = strval(interdire_scripts(attribut_html(supprimer_tags(propre($Pile[$SP]['descriptif'], $connect, $Pile[0]))))))!=='' ?
		(' title="' . $t1 . '"') :
		'') .
'>' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></h2>
						' .
(($t1 = BOUCLE_PlanMenuHautSsRubhtml_b15ca9ba90e2ba5162c8bfd9d75c01dc($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
						<ul class="menu vertical">
							' . $t1 . '
						</ul>
						') :
		'') .
'
					</section>
					');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_PlanMenuHaut @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer_pied.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer_pied.html
// Temps de compilation total: 63.082 ms
//

function html_b15ca9ba90e2ba5162c8bfd9d75c01dc($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'	<footer><div id="footer" class="clearbottom clearfix">
	<div id="footer_inner">
	<h1 class="nocontent offscreen">Pied de page</h1>
' .
vide($Pile['vars'][$_zzz=(string)'div_menufooter'] = '0') .
'
		' .
(($t1 = BOUCLE_MenuFooterhtml_b15ca9ba90e2ba5162c8bfd9d75c01dc($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'<nav><div id="menufooter"><h2 class="nocontent offscreen">Menu transversal secondaire</h2><ul>' .
		vide($Pile['vars'][$_zzz=(string)'div_menufooter'] = '1')) . $t1) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_layout/positionliensnav','menu_footer',false):'') == 'menu_footer')) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	(($t2 = strval(recuperer_fond( 'noisettes/liensnav/bloc_liensnav' , array('template' => @$Pile[0]['template'] ), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer_pied.html','html_b15ca9ba90e2ba5162c8bfd9d75c01dc','',0,$GLOBALS['spip_lang'])), _request('connect'))))!=='' ?
			((	(!(table_valeur($Pile["vars"], (string)'div_menufooter', null))  ?
				(' ' . '<nav><div id="menufooter"><h2 class="nocontent offscreen">Menu transversal secondaire</h2><ul>') :
				'') .
		vide($Pile['vars'][$_zzz=(string)'div_menufooter'] = '1')) . $t2) :
			'') .
	'
')) :
		'') .
'
		' .
((table_valeur($Pile["vars"], (string)'div_menufooter', null))  ?
		(' ' . '</ul></div></nav>') :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("nuage", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . (($t2 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_layout/positionnuage','footer',false):'') == 'footer')) ?' ' :''))))!=='' ?
			($t2 . (	'<div id="nuage">' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/navigation/nuagedemotcle') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer_pied.html\',\'html_b15ca9ba90e2ba5162c8bfd9d75c01dc\',\'\',10,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'></div>')) :
			'')) :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("campagnes", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . (	'
		  <div id="banfooter" class="encart vertical">
			  ' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/encart') . ', array(\'identifiant\' => ' . argumenter_squelette('banfooter') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer_pied.html\',\'html_b15ca9ba90e2ba5162c8bfd9d75c01dc\',\'\',13,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>  
		  </div>')) :
		'') .
'
		
		<div class="row text-center">
		<div class="flexbox-wrap-space-around">
		' .
(($t1 = strval(interdire_scripts((((((filtre_info_plugin_dist("CLEVERMAIL", "est_actif")) ?' ' :'')) OR (interdire_scripts(((filtre_info_plugin_dist("MAILSUBSCRIBERS", "est_actif")) ?' ' :'')))) ?' ' :''))))!=='' ?
		($t1 . (	'
		' .
	(($t2 = strval(interdire_scripts(((((((((include_spip('inc/config')?lire_config('soyezcreateurs_layout/affichage_lien_newsletter','affiche',false):'') == 'bas')) OR (interdire_scripts(((include_spip('inc/config')?lire_config('soyezcreateurs/mode_affichage','communiquant',false):'') == 'portailcognac')))) ?' ' :'')) OR (interdire_scripts(((include_spip('inc/config')?lire_config('soyezcreateurs_layout/pictogrammesoutils','non',false):'') == 'avecoutils')))) ?' ' :''))))!=='' ?
			($t2 . (	'
		<div id="newsletterinscription" class="cadreinfo avec-paddingx">
			<h2>' .
		_T('soyezcreateurs:newsletter_recevoir') .
		'</h2>
			' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/inscription_infolettre') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer_pied.html\',\'html_b15ca9ba90e2ba5162c8bfd9d75c01dc\',\'\',15,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		</div>
		')) :
			''))) :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("AGENDA", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . (($t2 = strval(interdire_scripts(((((((((include_spip('inc/config')?lire_config('soyezcreateurs/miniagenda','on',false):'') == 'bas')) OR (interdire_scripts(((include_spip('inc/config')?lire_config('soyezcreateurs/mode_affichage','communiquant',false):'') == 'portailcognac')))) ?' ' :'')) OR (interdire_scripts(((include_spip('inc/config')?lire_config('soyezcreateurs_layout/pictogrammesoutils','non',false):'') == 'avecoutils')))) ?' ' :''))))!=='' ?
			($t2 . (($t3 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs/homeagenda','on',false):'') == 'on')) ?' ' :''))))!=='' ?
				($t3 . (	'<div id="miniagenda" class="cadreinfo avec-padding">
		' .
			
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/agenda/miniagenda') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer_pied.html\',\'html_b15ca9ba90e2ba5162c8bfd9d75c01dc\',\'\',14,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>
		</div>')) :
				'')) :
			'')) :
		'') .
'
		</div>
		</div>
		' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs/bandeau_contact_extra','bas',false):'') == 'bas')) ?' ' :''))))!=='' ?
		($t1 . (	'
		' .
	(($t2 = strval(interdire_scripts(propre((include_spip('inc/config')?lire_config('soyezcreateurs/bandeau_contact',null,false):'')))))!=='' ?
			((	'<div id="bandeaucontact" class="' .
		classe_boucle_crayon('meta','valeur',str_replace('/', '__', 'soyezcreateurs/bandeau_contact')).' ">') . $t2 . '</div>') :
			'') .
	'
		')) :
		'') .
'
		' .
(($t1 = BOUCLE_PlanMenuHauthtml_b15ca9ba90e2ba5162c8bfd9d75c01dc($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
		<div class="row">
			<div id="miniplan">
				<div class="titre-plan text-center">
					<h1 class="titre-plan-texte"><a href="' .
		interdire_scripts(generer_url_public('plan', '')) .
		'" title="' .
		_T('soyezcreateurs:toutleplan') .
		'">' .
		_T('soyezcreateurs:plan_menu') .
		'</a></h1>
				</div>
				<div class="liste-rubriques flexbox-wrap-space-around">
					') . $t1 . '
				</div>
			</div>
		</div>
		') :
		((	'
		' .
	(($t2 = BOUCLE_PlanPasMenuHauthtml_b15ca9ba90e2ba5162c8bfd9d75c01dc($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
			((	'
		<div class="row">
			<div id="plan" class="avec-margin-bottom avec-padding">
				<div class="titre-plan text-center">
					<h1><a href="' .
			interdire_scripts(generer_url_public('plan', '')) .
			'" title="' .
			_T('soyezcreateurs:toutleplan') .
			'">' .
			_T('soyezcreateurs:plan_menu') .
			'</a></h1>
				</div>
				<div class="liste-rubriques flexbox-wrap-space-around">
					') . $t2 . '
				</div>
			</div>
		</div>
		') :
			'') .
	'
		'))) .
'
		' .
(($t1 = strval(recuperer_fond( 'noisettes/sc_qrcode' , array_merge($Pile[0],array()), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer_pied.html','html_b15ca9ba90e2ba5162c8bfd9d75c01dc','',80,$GLOBALS['spip_lang'])), _request('connect'))))!=='' ?
		('<div id="qrcode" class="centrer_div">' . $t1 . '</div>') :
		'') .
'

		<div id="footerbas">
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/footer/footer_ours') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer_pied.html\',\'html_b15ca9ba90e2ba5162c8bfd9d75c01dc\',\'\',83,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		</div>
		' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs/positiondatemajsite','bottom',false):'') == 'bottom')) ?' ' :''))))!=='' ?
		($t1 . 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/datemajsite') . ', array(\'class\' => ' . argumenter_squelette('footer') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer_pied.html\',\'html_b15ca9ba90e2ba5162c8bfd9d75c01dc\',\'\',85,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>') :
		'') .
'
	</div><!-- id="footer_inner" -->
	</div><!-- id="footer" -->
	</footer>
  </div><!-- id="shadow" -->
  ' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/footer/participer') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer_pied.html\',\'html_b15ca9ba90e2ba5162c8bfd9d75c01dc\',\'\',90,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</div><!-- id="container" -->
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_b15ca9ba90e2ba5162c8bfd9d75c01dc', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer_pied.html');
}
?>
<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/presentation/couleurrubrique.html
 * Date :      Thu, 26 Jul 2018 13:23:58 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:03 GMT
 * Boucles :   _CouleurRubrique, _RubriqueColoree, _CouleurRubriqueArticle, _RubriqueColoreeArticle, _ArticleEnCours
 */ 

function BOUCLE_CouleurRubriquehtml_18fb7de39d5f76f96d19fd62919c77d8(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_CouleurRubrique';
		$command['from'] = array('mots' => 'spip_mots','L1' => 'spip_mots_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("mots.texte");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('mots','id_mot'));
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'L1.id_objet', sql_quote($Pile[$SP]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'L1.objet', sql_quote('rubrique')), 
			array('=', 'mots.type', "'_CouleurRubrique'"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/presentation/couleurrubrique.html','html_18fb7de39d5f76f96d19fd62919c77d8','_CouleurRubrique',15,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/presentation/appliquercouleurrubrique') . ', array(\'couleur\' => ' . argumenter_squelette(interdire_scripts(textebrut(propre($Pile[$SP]['texte'], $connect, $Pile[0])))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/presentation/couleurrubrique.html\',\'html_18fb7de39d5f76f96d19fd62919c77d8\',\'\',16,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_CouleurRubrique @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/presentation/couleurrubrique.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_RubriqueColoreehtml_18fb7de39d5f76f96d19fd62919c77d8(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!($id_rubrique = intval(@$Pile[0]['id_rubrique'])))
		return '';
	include_spip('inc/rubriques');
	$hierarchie = calcul_hierarchie_in($id_rubrique,true);
	if (!$hierarchie) return "";
	
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_RubriqueColoree';
		$command['from'] = array('rubriques' => 'spip_rubriques','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("rubriques.id_rubrique");
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.lang",
		"rubriques.titre");
		$command['join'] = array('L1' => array('rubriques','id_objet','id_rubrique','L1.objet='.sql_quote('rubrique')), 'L2' => array('L1','id_mot'));
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['orderby'] = array("FIELD(rubriques.id_rubrique, $hierarchie) DESC");
	$command['where'] = 
			array(
			array('=', 'L2.type', "'_CouleurRubrique'"), 
			array('IN', 'rubriques.id_rubrique', "($hierarchie)"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/presentation/couleurrubrique.html','html_18fb7de39d5f76f96d19fd62919c77d8','_RubriqueColoree',14,$GLOBALS['spip_lang'])
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
BOUCLE_CouleurRubriquehtml_18fb7de39d5f76f96d19fd62919c77d8($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_RubriqueColoree @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/presentation/couleurrubrique.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_CouleurRubriqueArticlehtml_18fb7de39d5f76f96d19fd62919c77d8(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_CouleurRubriqueArticle';
		$command['from'] = array('mots' => 'spip_mots','L1' => 'spip_mots_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("mots.texte");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('mots','id_mot'));
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'L1.id_objet', sql_quote($Pile[$SP]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'L1.objet', sql_quote('rubrique')), 
			array('=', 'mots.type', "'_CouleurRubrique'"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/presentation/couleurrubrique.html','html_18fb7de39d5f76f96d19fd62919c77d8','_CouleurRubriqueArticle',9,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/presentation/appliquercouleurrubrique') . ', array(\'couleur\' => ' . argumenter_squelette(interdire_scripts(textebrut(propre($Pile[$SP]['texte'], $connect, $Pile[0])))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/presentation/couleurrubrique.html\',\'html_18fb7de39d5f76f96d19fd62919c77d8\',\'\',10,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_CouleurRubriqueArticle @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/presentation/couleurrubrique.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_RubriqueColoreeArticlehtml_18fb7de39d5f76f96d19fd62919c77d8(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!($id_rubrique = intval($Pile[$SP]['id_rubrique'])))
		return '';
	include_spip('inc/rubriques');
	$hierarchie = calcul_hierarchie_in($id_rubrique,true);
	if (!$hierarchie) return "";
	
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_RubriqueColoreeArticle';
		$command['from'] = array('rubriques' => 'spip_rubriques','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("rubriques.id_rubrique");
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.lang",
		"rubriques.titre");
		$command['join'] = array('L1' => array('rubriques','id_objet','id_rubrique','L1.objet='.sql_quote('rubrique')), 'L2' => array('L1','id_mot'));
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['orderby'] = array("FIELD(rubriques.id_rubrique, $hierarchie) DESC");
	$command['where'] = 
			array(
			array('=', 'L2.type', "'_CouleurRubrique'"), 
			array('IN', 'rubriques.id_rubrique', "($hierarchie)"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/presentation/couleurrubrique.html','html_18fb7de39d5f76f96d19fd62919c77d8','_RubriqueColoreeArticle',8,$GLOBALS['spip_lang'])
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
BOUCLE_CouleurRubriqueArticlehtml_18fb7de39d5f76f96d19fd62919c77d8($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_RubriqueColoreeArticle @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/presentation/couleurrubrique.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_ArticleEnCourshtml_18fb7de39d5f76f96d19fd62919c77d8(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_ArticleEnCours';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_rubrique",
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
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/presentation/couleurrubrique.html','html_18fb7de39d5f76f96d19fd62919c77d8','_ArticleEnCours',7,$GLOBALS['spip_lang'])
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
BOUCLE_RubriqueColoreeArticlehtml_18fb7de39d5f76f96d19fd62919c77d8($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_ArticleEnCours @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/presentation/couleurrubrique.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/presentation/couleurrubrique.html
// Temps de compilation total: 15.061 ms
//

function html_18fb7de39d5f76f96d19fd62919c77d8($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
(($t1 = BOUCLE_ArticleEnCourshtml_18fb7de39d5f76f96d19fd62919c77d8($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
' .
	BOUCLE_RubriqueColoreehtml_18fb7de39d5f76f96d19fd62919c77d8($Cache, $Pile, $doublons, $Numrows, $SP) .
	'
'))) .
'
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_18fb7de39d5f76f96d19fd62919c77d8', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/presentation/couleurrubrique.html');
}
?>
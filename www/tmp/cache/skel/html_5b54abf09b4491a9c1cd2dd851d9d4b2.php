<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/modeles/article_url.html
 * Date :      Thu, 26 Jul 2018 13:23:59 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:04 GMT
 * Boucles :   _
 */ 

function BOUCLE_html_5b54abf09b4491a9c1cd2dd851d9d4b2(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.virtuel",
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
		array('plugins/auto/soyezcreateurs/v4.3.16/modeles/article_url.html','html_5b54abf09b4491a9c1cd2dd851d9d4b2','_',1,$GLOBALS['spip_lang'])
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
interdire_scripts(($Pile[$SP]['virtuel'] ? interdire_scripts(entites_html(extraire_attribut(sc_texte2urlspip($Pile[$SP]['virtuel']),'href'))):vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))))) .
'
');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_ @ plugins/auto/soyezcreateurs/v4.3.16/modeles/article_url.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/modeles/article_url.html
// Temps de compilation total: 4.585 ms
//

function html_5b54abf09b4491a9c1cd2dd851d9d4b2($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = BOUCLE_html_5b54abf09b4491a9c1cd2dd851d9d4b2($Cache, $Pile, $doublons, $Numrows, $SP);

	return analyse_resultat_skel('html_5b54abf09b4491a9c1cd2dd851d9d4b2', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/modeles/article_url.html');
}
?>
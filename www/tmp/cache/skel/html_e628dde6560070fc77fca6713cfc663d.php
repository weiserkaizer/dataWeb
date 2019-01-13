<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/liste_auteurs.html
 * Date :      Thu, 26 Jul 2018 13:23:57 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:11 GMT
 * Boucles :   _DevoilerIdentite
 */ 

function BOUCLE_DevoilerIdentitehtml_e628dde6560070fc77fca6713cfc663d(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_DevoilerIdentite';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("articles.id_article",
		"articles.lang",
		"articles.titre");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('articles','id_objet','id_article','L1.objet='.sql_quote('article')), 'L2' => array('L1','id_mot'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_article', sql_quote(@$Pile[0]['id_article'], '','bigint(21) NOT NULL AUTO_INCREMENT')), 
			array('=', 'L2.titre', "'DevoilerIdentite'"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/liste_auteurs.html','html_e628dde6560070fc77fca6713cfc663d','_DevoilerIdentite',1,$GLOBALS['spip_lang'])
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
recuperer_fond( 'noisettes/aff_liste_auteurs' , array('nodiv' => @$Pile[0]['nodiv'] ,
	'nolink' => @$Pile[0]['nolink'] ,
	'id_article' => $Pile[$SP]['id_article'] ,
	'virgule' => @$Pile[0]['virgule'] ), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/liste_auteurs.html','html_e628dde6560070fc77fca6713cfc663d','_DevoilerIdentite',2,$GLOBALS['spip_lang'])), _request('connect')) .
'
');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_DevoilerIdentite @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/liste_auteurs.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/liste_auteurs.html
// Temps de compilation total: 5.692 ms
//

function html_e628dde6560070fc77fca6713cfc663d($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = BOUCLE_DevoilerIdentitehtml_e628dde6560070fc77fca6713cfc663d($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
' .
	(($t2 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs/anonymatglobal','on',false):'') != 'on')) ?' ' :''))))!=='' ?
			($t2 . recuperer_fond( 'noisettes/aff_liste_auteurs' , array('nodiv' => @$Pile[0]['nodiv'] ,
	'nolink' => @$Pile[0]['nolink'] ,
	'id_article' => @$Pile[0]['id_article'] ,
	'virgule' => @$Pile[0]['virgule'] ), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/liste_auteurs.html','html_e628dde6560070fc77fca6713cfc663d','',4,$GLOBALS['spip_lang'])), _request('connect'))) :
			'') .
	'
'))) .
'
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_e628dde6560070fc77fca6713cfc663d', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/liste_auteurs.html');
}
?>
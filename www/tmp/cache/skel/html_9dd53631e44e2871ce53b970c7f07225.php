<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/menus/menu_navhaute.html
 * Date :      Thu, 26 Jul 2018 13:23:58 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:06 GMT
 * Boucles :   _NavHaute
 */ 

function BOUCLE_NavHautehtml_9dd53631e44e2871ce53b970c7f07225(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_NavHaute';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("0+articles.titre AS num",
		"articles.id_article",
		"articles.descriptif",
		"articles.titre",
		"articles.lang");
		$command['orderby'] = array('num');
		$command['join'] = array('L1' => array('articles','id_objet','id_article','L1.objet='.sql_quote('article')), 'L2' => array('L1','id_mot'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'L2.titre', "'NavHaute'"), 
			array('=', 'articles.lang', sql_quote($GLOBALS['spip_lang'], '','varchar(10) NOT NULL DEFAULT \'\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/menus/menu_navhaute.html','html_9dd53631e44e2871ce53b970c7f07225','_NavHaute',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
		<li class="navHaute' .
$Pile[$SP]['id_article'] .
'"><a href="' .

	((($recurs=(isset($Pile[0]['recurs'])?$Pile[0]['recurs']:0))>=5)? '' :
	recuperer_fond('modeles/article_url', array('lang' => $GLOBALS["spip_lang"] ,
	'id_article'=>$Pile[$SP]['id_article'],
	'id'=>$Pile[$SP]['id_article'],
	'recurs'=>(++$recurs)), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/menus/menu_navhaute.html','html_9dd53631e44e2871ce53b970c7f07225','_NavHaute',5,$GLOBALS['spip_lang']), 'trim'=>true), ''))
 .
'" title="' .
interdire_scripts(attribut_html(supprimer_tags(propre($Pile[$SP]['descriptif'], $connect, $Pile[0])))) .
'">' .
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
		spip_log(intval(1000*$timer)."ms BOUCLE_NavHaute @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/menus/menu_navhaute.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/menus/menu_navhaute.html
// Temps de compilation total: 12.523 ms
//

function html_9dd53631e44e2871ce53b970c7f07225($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = BOUCLE_NavHautehtml_9dd53631e44e2871ce53b970c7f07225($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
<div id="navHaute">
	<ul>
		' . $t1 . '
	</ul>
</div>
') :
		'') .
'
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_9dd53631e44e2871ce53b970c7f07225', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/menus/menu_navhaute.html');
}
?>
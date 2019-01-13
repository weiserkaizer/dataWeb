<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_dessousBreves.html
 * Date :      Thu, 26 Jul 2018 14:18:23 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:12 GMT
 * Boucles :   _CouleurRubrique, _RubriqueColoree, _articles_unseul, _articles_plusdun, _DessousBreves
 */ 

function BOUCLE_CouleurRubriquehtml_d16e716dc09e97b0707a6f15d9cba4d5(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

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
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_dessousBreves.html','html_d16e716dc09e97b0707a6f15d9cba4d5','_CouleurRubrique',10,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (($t1 = strval(interdire_scripts(textebrut(propre($Pile[$SP]['texte'], $connect, $Pile[0])))))!=='' ?
		(' style="background-color: #' . $t1 . ';"') :
		'');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_CouleurRubrique @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_dessousBreves.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_RubriqueColoreehtml_d16e716dc09e97b0707a6f15d9cba4d5(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

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
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_dessousBreves.html','html_d16e716dc09e97b0707a6f15d9cba4d5','_RubriqueColoree',10,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= BOUCLE_CouleurRubriquehtml_d16e716dc09e97b0707a6f15d9cba4d5($Cache, $Pile, $doublons, $Numrows, $SP);
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_RubriqueColoree @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_dessousBreves.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_articles_unseulhtml_d16e716dc09e97b0707a6f15d9cba4d5(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_articles_unseul';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_article",
		"articles.lang",
		"articles.titre");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_rubrique', sql_quote($Pile[$SP]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'articles.lang', sql_quote($GLOBALS['spip_lang'], '','varchar(10) NOT NULL DEFAULT \'\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_dessousBreves.html','html_d16e716dc09e97b0707a6f15d9cba4d5','_articles_unseul',12,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'<a href="' .

	((($recurs=(isset($Pile[0]['recurs'])?$Pile[0]['recurs']:0))>=5)? '' :
	recuperer_fond('modeles/article_url', array('lang' => $GLOBALS["spip_lang"] ,
	'id_article'=>$Pile[$SP]['id_article'],
	'id'=>$Pile[$SP]['id_article'],
	'recurs'=>(++$recurs)), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_dessousBreves.html','html_d16e716dc09e97b0707a6f15d9cba4d5','_articles_unseul',12,$GLOBALS['spip_lang']), 'trim'=>true), ''))
 .
'"' .
(($t1 = strval(interdire_scripts(attribut_html(propre($Pile[$SP-1]['descriptif'], $connect, $Pile[0])))))!=='' ?
		(' title="' . $t1 . '"') :
		'') .
'>');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_articles_unseul @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_dessousBreves.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_articles_plusdunhtml_d16e716dc09e97b0707a6f15d9cba4d5(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_articles_plusdun';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_rubrique",
		"articles.lang",
		"articles.titre");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '1,1';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_rubrique', sql_quote($Pile[$SP]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'articles.lang', sql_quote($GLOBALS['spip_lang'], '','varchar(10) NOT NULL DEFAULT \'\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_dessousBreves.html','html_d16e716dc09e97b0707a6f15d9cba4d5','_articles_plusdun',12,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'<a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
'"' .
(($t1 = strval(interdire_scripts(attribut_html(propre($Pile[$SP-1]['descriptif'], $connect, $Pile[0])))))!=='' ?
		(' title="' . $t1 . '"') :
		'') .
'>');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_articles_plusdun @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_dessousBreves.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_DessousBreveshtml_d16e716dc09e97b0707a6f15d9cba4d5(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	$in[]= 'DessousBreves';
	$in[]= 'ZoomSur2';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_DessousBreves';
		$command['from'] = array('rubriques' => 'spip_rubriques','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("rubriques.id_rubrique");
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.descriptif",
		"0+rubriques.titre AS num",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array('num');
		$command['join'] = array('L1' => array('rubriques','id_objet','id_rubrique','L1.objet='.sql_quote('rubrique')), 'L2' => array('L1','id_mot'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), sql_in('L2.titre',sql_quote($in)));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_dessousBreves.html','html_d16e716dc09e97b0707a6f15d9cba4d5','_DessousBreves',2,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_DessousBreves']['compteur_boucle'] = 0;
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_DessousBreves']['compteur_boucle']++;
		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
		<div class="projet idprojet' .
$Numrows['_DessousBreves']['compteur_boucle'] .
' ' .
classe_boucle_crayon('rubriques','titre',$Pile[$SP]['id_rubrique']).' "' .
BOUCLE_RubriqueColoreehtml_d16e716dc09e97b0707a6f15d9cba4d5($Cache, $Pile, $doublons, $Numrows, $SP) .
'>
			<div class="content-projets">
				' .
(($t1 = BOUCLE_articles_plusdunhtml_d16e716dc09e97b0707a6f15d9cba4d5($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((($t2 = BOUCLE_articles_unseulhtml_d16e716dc09e97b0707a6f15d9cba4d5($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
			$t2 :
			((	'<a href="' .
		vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
		'"' .
		(($t3 = strval(interdire_scripts(attribut_html(propre($Pile[$SP]['descriptif'], $connect, $Pile[0])))))!=='' ?
				(' title="' . $t3 . '"') :
				'') .
		'>'))))) .
'
					<h2>' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</h2>
					<div class="suite">
						<span class="icon icon-arrow-right2">&#10140;</span>
					</div>
				</a>
			</div>
		</div>
		');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_DessousBreves @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_dessousBreves.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_dessousBreves.html
// Temps de compilation total: 28.099 ms
//

function html_d16e716dc09e97b0707a6f15d9cba4d5($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
(($t1 = BOUCLE_DessousBreveshtml_d16e716dc09e97b0707a6f15d9cba4d5($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
<!-- PROJETS -->
<div id="lesprojets" class="zone-projets">
	<header class="titre-sommaire">
		<h1>Les projets</h1>
	</header>
	<div id="projets" class="avec-margin-top">
		' . $t1 . '
	</div>
	<div class="clearfix"></div>
</div>
<!-- fin PROJETS -->
') :
		'') .
'

' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_d16e716dc09e97b0707a6f15d9cba4d5', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_dessousBreves.html');
}
?>
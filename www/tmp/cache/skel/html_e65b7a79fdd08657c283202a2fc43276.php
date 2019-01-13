<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_cycloshow.html
 * Date :      Fri, 27 Jul 2018 10:49:30 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:11 GMT
 * Boucles :   _CycloShow
 */ 

function BOUCLE_CycloShowhtml_e65b7a79fdd08657c283202a2fc43276(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_CycloShow';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("0+articles.titre AS num",
		"articles.date",
		"articles.id_article",
		"articles.titre",
		"articles.descriptif",
		"articles.lang");
		$command['orderby'] = array('num', 'articles.date DESC');
		$command['join'] = array('L1' => array('articles','id_objet','id_article','L1.objet='.sql_quote('article')), 'L2' => array('L1','id_mot'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'L2.titre', "'CycloShow'"), 
			array('=', 'articles.lang', sql_quote($GLOBALS['spip_lang'], '','varchar(10) NOT NULL DEFAULT \'\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_cycloshow.html','html_e65b7a79fdd08657c283202a2fc43276','_CycloShow',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
		<div class="slider show-for-medium" role="region" aria-label="Diaporama d\'accueil">
			<div class="slider-diapo-imgfull">
				<a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'" tabindex="-1">
					<img src="' .
extraire_attribut(filtrer('image_graver', filtrer('image_focus',((($a = 
((!is_array($l = quete_logo('id_article', 'on', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />'))) OR (is_string($a) AND strlen($a))) ? $a : find_in_path('images/placeholder.jpg')),interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurconteneur','960',false):'')),interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/hauteur_slider','580',false):'')))),'src') .
'" alt="">
					<div class="slider-content desc-gauche text-center">
						<h3 class="' .
classe_boucle_crayon('articles','titre',$Pile[$SP]['id_article']).' ">' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</h3>
						' .
(($t1 = strval(interdire_scripts(ptobr(propre($Pile[$SP]['descriptif'], $connect, $Pile[0])))))!=='' ?
		((	'<p class="hide-for-small-only ' .
	classe_boucle_crayon('articles','descriptif',$Pile[$SP]['id_article']).' ">') . $t1 . '</p>') :
		'') .
'
						' .
(($t1 = strval(recuperer_fond( 'noisettes/liste_auteurs' , array('id_article' => $Pile[$SP]['id_article'] ,
	'nodiv' => '1' ,
	'nolink' => '1' ), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_cycloshow.html','html_e65b7a79fdd08657c283202a2fc43276','_CycloShow',9,$GLOBALS['spip_lang'])), _request('connect'))))!=='' ?
		('<p class="hide-for-small-only">' . $t1 . '</p>') :
		'') .
'
						' .
(($t1 = strval(recuperer_fond( 'noisettes/aff_datepublication' , array('id_article' => $Pile[$SP]['id_article'] ,
	'lang' => $GLOBALS["spip_lang"] ), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_cycloshow.html','html_e65b7a79fdd08657c283202a2fc43276','_CycloShow',10,$GLOBALS['spip_lang'])), _request('connect'))))!=='' ?
		('<p class="hide-for-small-only">' . $t1 . '</p>') :
		'') .
'
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
		spip_log(intval(1000*$timer)."ms BOUCLE_CycloShow @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_cycloshow.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_cycloshow.html
// Temps de compilation total: 9.650 ms
//

function html_e65b7a79fdd08657c283202a2fc43276($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = BOUCLE_CycloShowhtml_e65b7a79fdd08657c283202a2fc43276($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
<!-- SLIDER -->
<div id="cycloshow" class="zone-slider">
	<div class="slider-slick">
		' . $t1 . '
	</div>
</div>
') :
		'') .
'
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_e65b7a79fdd08657c283202a2fc43276', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_cycloshow.html');
}
?>
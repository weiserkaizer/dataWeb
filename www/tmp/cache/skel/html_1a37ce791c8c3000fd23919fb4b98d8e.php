<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_zoomsur.html
 * Date :      Thu, 26 Jul 2018 14:06:25 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:07 GMT
 * Boucles :   _Slider, _ZoomSur
 */ 

function BOUCLE_Sliderhtml_1a37ce791c8c3000fd23919fb4b98d8e(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	$in[]= 'image';
	$in[]= 'video';
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_Slider';
		$command['from'] = array('documents' => 'spip_documents','L1' => 'spip_documents_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("L1.rang_lien",
		"0+documents.titre AS num1",
		"documents.titre",
		"documents.date",
		"documents.media",
		"documents.fichier",
		"documents.id_document",
		"documents.extension");
		$command['orderby'] = array('L1.rang_lien', 'num1', 'documents.titre', 'documents.date DESC');
		$command['join'] = array('L1' => array('documents','id_document'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('documents.statut','publie,prop,prepa','publie',''), 
quete_condition_postdates('documents.date_publication',''), 
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), 
			array('=', 'L1.id_objet', sql_quote($Pile[$SP]['id_article'], '','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'L1.objet', sql_quote('article')), 
			array('=', 'documents.mode', "'document'"), sql_in('documents.media',sql_quote($in)), 
			array('=', 'L1.vu', "'non'"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_zoomsur.html','html_1a37ce791c8c3000fd23919fb4b98d8e','_Slider',10,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		<div class="slider show-for-medium" role="region" aria-label="Diaporama d\'accueil">
			<div class="slider-diapo-imgfull">
				' .
(($t1 = strval(interdire_scripts(((($Pile[$SP]['media'] == 'image')) ?' ' :''))))!=='' ?
		($t1 . (	'
				<a href="' .
	table_valeur($Pile["vars"], (string)'article_url', null) .
	'"' .
	(($t2 = strval(interdire_scripts(attribut_html(propre($Pile[$SP-1]['descriptif'], $connect, $Pile[0])))))!=='' ?
			(' title="' . $t2 . '"') :
			'') .
	'>
					<img src="' .
	interdire_scripts(extraire_attribut(filtrer('image_graver', filtrer('image_focus',copie_locale(get_spip_doc($Pile[$SP]['fichier'])),'1920',interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/hauteur_slider','580',false):'')))),'src')) .
	'" alt="" />
				</a>')) :
		'') .
'
				' .
(($t1 = strval(interdire_scripts(((($Pile[$SP]['media'] == 'video')) ?' ' :''))))!=='' ?
		($t1 . (	'
				<a href="' .
	table_valeur($Pile["vars"], (string)'article_url', null) .
	'"' .
	(($t2 = strval(interdire_scripts(attribut_html(propre($Pile[$SP-1]['descriptif'], $connect, $Pile[0])))))!=='' ?
			(' title="' . $t2 . '"') :
			'') .
	'>
					' .
	(($t2 = strval(interdire_scripts((((mime_type_oembed($Pile[$SP]['id_document']) == 'text/oembed')) ?'' :' '))))!=='' ?
			($t2 . (	'
					<div style="width: 1920px; height: ' .
		interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/hauteur_slider','580',false):'')) .
		'px;">
						<video autoplay loop muted preload="true" class="autoplay" style="min-width: 100%; height: auto; top: -50%; position: absolute;">
							<source src="' .
		interdire_scripts(get_spip_doc($Pile[$SP]['fichier'])) .
		'" type="' .
		interdire_scripts((in_array($Pile[$SP]['extension'],array('mp4', 'webm', 'ogv')) ? interdire_scripts(replace(mime_type_oembed($Pile[$SP]['id_document']),'application/','video/')):interdire_scripts(mime_type_oembed($Pile[$SP]['id_document'])))) .
		'"/>
						</video>
					</div>')) :
			'') .
	'
					' .
	(($t2 = strval(interdire_scripts((((mime_type_oembed($Pile[$SP]['id_document']) == 'text/oembed')) ?' ' :''))))!=='' ?
			($t2 . (	'
					<div style="position: relative; padding-bottom: ' .
		(($t3 = strval(interdire_scripts(mult(div((include_spip('inc/config')?lire_config('soyezcreateurs/hauteur_slider','580',false):''),'1920'),'100'))))!=='' ?
				($t3 . '%') :
				'') .
		'">
						<div class="mbYTP_wrapper" id="wrapper_mbYTP_bgndVideo" style="position: absolute; z-index: -1; min-width: 100%; min-height: 100%; left: 0; top: 0; overflow: hidden; opacity: 1; -webkit-backface-visibility: hidden;">
							<iframe id="mbYTP_bgndVideo' .
		$Pile[$SP]['id_document'] .
		'" class="playerBox" style="position: absolute; z-index: -1; width: 2380.8px; height: 1080px; top: 0px; left: 0px; overflow: hidden; opacity: 1; margin-top: -199.5px; margin-left: -230.4px;" frameborder="0" allowfullscreen="1" width="' .
		extraire_attribut(charge_scripts(interdire_scripts(get_spip_doc($Pile[$SP]['fichier'])),false),'width') .
		'" height="' .
		extraire_attribut(charge_scripts(interdire_scripts(get_spip_doc($Pile[$SP]['fichier'])),false),'height') .
		'" src="' .
		extraire_attribut(charge_scripts(interdire_scripts(get_spip_doc($Pile[$SP]['fichier'])),false),'src') .
		'&amp;autoplay=1&amp;loop=1&amp;modestbranding=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1&amp;version=3&amp;playerapiid=mbYTP_bgndVideo&amp;allowfullscreen=true&amp;wmode=transparent&amp;iv_load_policy=3&amp;html5=1&amp;mute=1' .
		(($t3 = strval(replace(replace(extraire_attribut(charge_scripts(interdire_scripts(get_spip_doc($Pile[$SP]['fichier'])),false),'src'),'https:\\/\\/www\\.youtube\\.com\\/embed\\/([^\\?]*).*','$1'),'\\?feature=oembed','')))!=='' ?
				('&amp;playlist=' . $t3) :
				'') .
		'"></iframe>
						</div>
					</div>')) :
			'') .
	'
				</a>')) :
		'') .
'
			</div>
		</div>
		');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_Slider @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_zoomsur.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_ZoomSurhtml_1a37ce791c8c3000fd23919fb4b98d8e(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_ZoomSur';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("articles.id_article",
		"articles.descriptif",
		"articles.date",
		"articles.titre",
		"articles.lang");
		$command['orderby'] = array('articles.date DESC');
		$command['join'] = array('L1' => array('articles','id_objet','id_article','L1.objet='.sql_quote('article')), 'L2' => array('L1','id_mot'));
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'L2.titre', "'ZoomSur'"), 
			array('=', 'articles.lang', sql_quote($GLOBALS['spip_lang'], '','varchar(10) NOT NULL DEFAULT \'\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_zoomsur.html','html_1a37ce791c8c3000fd23919fb4b98d8e','_ZoomSur',2,$GLOBALS['spip_lang'])
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
vide($Pile['vars'][$_zzz=(string)'article_url'] = 
	((($recurs=(isset($Pile[0]['recurs'])?$Pile[0]['recurs']:0))>=5)? '' :
	recuperer_fond('modeles/article_url', array('lang' => $GLOBALS["spip_lang"] ,
	'id_article'=>$Pile[$SP]['id_article'],
	'id'=>$Pile[$SP]['id_article'],
	'recurs'=>(++$recurs)), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_zoomsur.html','html_1a37ce791c8c3000fd23919fb4b98d8e','_ZoomSur',0,$GLOBALS['spip_lang']), 'trim'=>true), ''))
) .
'<!-- SLIDER -->
<div id="diaporama" class="zone-slider">
	<header>
		<h1 class="hide">' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</h1>
	</header>
	<div class="slider-slick">
		' .
(($t1 = BOUCLE_Sliderhtml_1a37ce791c8c3000fd23919fb4b98d8e($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
		<div class="slider show-for-medium" role="region" aria-label="Diaporama d\'accueil">
			<div class="slider-diapo-imgfull">
				<a href="' .
	table_valeur($Pile["vars"], (string)'article_url', null) .
	'"' .
	(($t2 = strval(interdire_scripts(attribut_html(propre($Pile[$SP]['descriptif'], $connect, $Pile[0])))))!=='' ?
			(' title="' . $t2 . '"') :
			'') .
	'>
					<img src="' .
	extraire_attribut(filtrer('image_graver', filtrer('image_focus',find_in_path('images/placeholder.jpg'),'1920',interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/hauteur_slider','580',false):'')))),'src') .
	'" alt="" />
				</a>
			</div>
		</div>
		'))) .
'
	</div>
	<div id="liens-diaporama">
		<ul>
			<li class="' .
classe_boucle_crayon('articles','titre',$Pile[$SP]['id_article']).' ">
				<a href="' .

	((($recurs=(isset($Pile[0]['recurs'])?$Pile[0]['recurs']:0))>=5)? '' :
	recuperer_fond('modeles/article_url', array('lang' => $GLOBALS["spip_lang"] ,
	'id_article'=>$Pile[$SP]['id_article'],
	'id'=>$Pile[$SP]['id_article'],
	'recurs'=>(++$recurs)), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_zoomsur.html','html_1a37ce791c8c3000fd23919fb4b98d8e','_ZoomSur',47,$GLOBALS['spip_lang']), 'trim'=>true), ''))
 .
'"' .
(($t1 = strval(interdire_scripts(attribut_html(propre($Pile[$SP]['descriptif'], $connect, $Pile[0])))))!=='' ?
		(' title="' . $t1 . '"') :
		'') .
'>
					<span>' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</span>
					<span class="icon icon-arrow-right2 icon-2x">&#10140;</span>
				</a>
			</li>
			' .
(($t1 = strval(recuperer_fond( 'noisettes/liste_auteurs' , array('id_article' => $Pile[$SP]['id_article'] ,
	'nolink' => '1' ), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_zoomsur.html','html_1a37ce791c8c3000fd23919fb4b98d8e','_ZoomSur',49,$GLOBALS['spip_lang'])), _request('connect'))))!=='' ?
		('<li class="hide-for-small-only">' . $t1 . '</li>') :
		'') .
'
			' .
(($t1 = strval(recuperer_fond( 'noisettes/aff_datepublication' , array('id_article' => $Pile[$SP]['id_article'] ,
	'lang' => $GLOBALS["spip_lang"] ), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_zoomsur.html','html_1a37ce791c8c3000fd23919fb4b98d8e','_ZoomSur',49,$GLOBALS['spip_lang'])), _request('connect'))))!=='' ?
		('<li class="hide-for-small-only">' . $t1 . '</li>') :
		'') .
'
		</ul>
	</div>
</div>
<!-- fin SLIDER -->
');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_ZoomSur @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_zoomsur.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_zoomsur.html
// Temps de compilation total: 109.832 ms
//

function html_1a37ce791c8c3000fd23919fb4b98d8e($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
BOUCLE_ZoomSurhtml_1a37ce791c8c3000fd23919fb4b98d8e($Cache, $Pile, $doublons, $Numrows, $SP) .
'

' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_1a37ce791c8c3000fd23919fb4b98d8e', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_zoomsur.html');
}
?>
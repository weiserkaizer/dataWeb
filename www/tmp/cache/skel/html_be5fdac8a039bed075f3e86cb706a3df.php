<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_goodies.html
 * Date :      Thu, 26 Jul 2018 14:20:02 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:12 GMT
 * Boucles :   _BlocsDefilants, _GroupeBlocsDefilants
 */ 

function BOUCLE_BlocsDefilantshtml_be5fdac8a039bed075f3e86cb706a3df(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_BlocsDefilants';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("0+articles.titre AS num",
		"articles.id_article",
		"articles.descriptif",
		"articles.titre",
		"articles.lang");
		$command['orderby'] = array('num');
		$command['join'] = array();
		$command['limit'] = '';
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
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_goodies.html','html_be5fdac8a039bed075f3e86cb706a3df','_BlocsDefilants',6,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
			<div class="content-pratique ' .
classe_boucle_crayon('articles','titre',$Pile[$SP]['id_article']).' ">
				<a href="' .

	((($recurs=(isset($Pile[0]['recurs'])?$Pile[0]['recurs']:0))>=5)? '' :
	recuperer_fond('modeles/article_url', array('lang' => $GLOBALS["spip_lang"] ,
	'id_article'=>$Pile[$SP]['id_article'],
	'id'=>$Pile[$SP]['id_article'],
	'recurs'=>(++$recurs)), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_goodies.html','html_be5fdac8a039bed075f3e86cb706a3df','_BlocsDefilants',14,$GLOBALS['spip_lang']), 'trim'=>true), ''))
 .
'"' .
(($t1 = strval(interdire_scripts(attribut_html(propre($Pile[$SP]['descriptif'], $connect, $Pile[0])))))!=='' ?
		(' title="' . $t1 . '"') :
		'') .
'>
					<img src="' .
extraire_attribut(filtrer('image_graver', filtrer('image_focus',((($a = ((($a = 
((!is_array($l = quete_logo('id_article', 'off', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />'))) OR (is_string($a) AND strlen($a))) ? $a : 
((!is_array($l = quete_logo('id_article', 'on', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')))) OR (is_string($a) AND strlen($a))) ? $a : find_in_path('images/placeholder.jpg')),'280','190')),'src') .
'" alt="" />
					<div class="h2"><span class="titre-pratique">' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</span>
						<span class="icon icon-arrow-right2 icon-lg">&#10140;</span></div>
				</a>
			</div>
			');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_BlocsDefilants @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_goodies.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_GroupeBlocsDefilantshtml_be5fdac8a039bed075f3e86cb706a3df(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_GroupeBlocsDefilants';
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
			array('=', 'L2.titre', "'Goodies'"));
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
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_goodies.html','html_be5fdac8a039bed075f3e86cb706a3df','_GroupeBlocsDefilants',2,$GLOBALS['spip_lang'])
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
(($t1 = BOUCLE_BlocsDefilantshtml_be5fdac8a039bed075f3e86cb706a3df($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
	<header class="titre-sommaire">
		<h1' .
		(($t3 = strval(interdire_scripts(attribut_html(propre($Pile[$SP]['descriptif'], $connect, $Pile[0])))))!=='' ?
				(' title="' . $t3 . '"') :
				'') .
		' class="' .
		classe_boucle_crayon('rubriques','titre',$Pile[$SP]['id_rubrique']).' ">' .
		interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
		'</h1>
	</header>
	<div role="region" aria-label="' .
		interdire_scripts(attribut_html(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) .
		'">
		<div class="slider-pratique">
			') . $t1 . '
		</div>
	</div>
	') :
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
		spip_log(intval(1000*$timer)."ms BOUCLE_GroupeBlocsDefilants @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_goodies.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_goodies.html
// Temps de compilation total: 12.934 ms
//

function html_be5fdac8a039bed075f3e86cb706a3df($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
(($t1 = BOUCLE_GroupeBlocsDefilantshtml_be5fdac8a039bed075f3e86cb706a3df($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
<!-- PRATIQUE -->
<div id="pratique" class="zone-pratique">
	' . $t1 . '
</div>
<!-- fin PRATIQUE -->
') :
		'') .
'

' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_be5fdac8a039bed075f3e86cb706a3df', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_goodies.html');
}
?>
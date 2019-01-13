<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_sc_edito.html
 * Date :      Thu, 26 Jul 2018 14:14:58 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:11 GMT
 * Boucles :   _EDITO
 */ 

function BOUCLE_EDITOhtml_b61633ce6b9e199cba76da4ae8977bb5(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_EDITO';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("articles.date",
		"articles.id_article",
		"articles.titre",
		"articles.chapo",
		"articles.descriptif",
		"articles.texte",
		"articles.ps",
		"articles.url_site",
		"articles.nom_site",
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
			array('=', 'L2.titre', "'EDITO'"), 
			array('=', 'articles.lang', sql_quote($GLOBALS['spip_lang'], '','varchar(10) NOT NULL DEFAULT \'\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_sc_edito.html','html_b61633ce6b9e199cba76da4ae8977bb5','_EDITO',2,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'

<!-- EDITO -->
<div id="edito" class="zone-edito">
	<header class="titre-sommaire">
		<h1 class="' .
classe_boucle_crayon('articles','titre',$Pile[$SP]['id_article']).' ">' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</h1>
	</header>
	' .
(($t1 = strval(filtre_embarque_fichier(extraire_attribut(filtrer('image_graver', filtrer('image_focus',
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurconteneur','960',false):'')),'200')),'src'))))!=='' ?
		('<img class="editologo" src="' . $t1 . (	'" width="' .
	largeur(filtrer('image_graver', filtrer('image_focus',
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurconteneur','960',false):'')),'200'))) .
	'" height="' .
	hauteur(filtrer('image_graver', filtrer('image_focus',
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurconteneur','960',false):'')),'200'))) .
	'" alt="" />')) :
		'') .
'
	<div id="editotexte">
		<div class="infos">' .
recuperer_fond( 'noisettes/liste_auteurs' , array('id_article' => $Pile[$SP]['id_article'] ,
	'virgule' => '1' ,
	'nodiv' => '1' ), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_sc_edito.html','html_b61633ce6b9e199cba76da4ae8977bb5','_EDITO',4,$GLOBALS['spip_lang'])), _request('connect')) .
recuperer_fond( 'noisettes/aff_datepublication' , array('id_article' => $Pile[$SP]['id_article'] ,
	'lang' => $GLOBALS["spip_lang"] ), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_sc_edito.html','html_b61633ce6b9e199cba76da4ae8977bb5','_EDITO',2,$GLOBALS['spip_lang'])), _request('connect')) .
'</div>
		<div>
			' .
(($t1 = strval(interdire_scripts(((($a = filtrer('image_graver', filtrer('image_reduire',propre($Pile[$SP]['chapo'], $connect, $Pile[0]),interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurconteneur','960',false):'')),'0'))) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts(propre($Pile[$SP]['descriptif'], $connect, $Pile[0]))))))!=='' ?
		((	'<div class="' .
	(($t2 = strval(interdire_scripts(($Pile[$SP]['chapo'] ? classe_boucle_crayon('articles','chapo',$Pile[$SP]['id_article']).' ':classe_boucle_crayon('articles','descriptif',$Pile[$SP]['id_article']).' '))))!=='' ?
			($t2 . ' ') :
			'') .
	'chapo">') . $t1 . '</div>') :
		'') .
'
			' .
(($t1 = strval(interdire_scripts(filtrer('image_graver',filtrer('image_reduire',propre($Pile[$SP]['texte'], $connect, $Pile[0]),interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurconteneur','960',false):'')),'0')))))!=='' ?
		((	'<div class="' .
	classe_boucle_crayon('articles','texte',$Pile[$SP]['id_article']).' entry-content">') . $t1 . '</div>') :
		'') .
'
			' .
(($t1 = strval(interdire_scripts(filtrer('image_graver',filtrer('image_reduire',propre($Pile[$SP]['ps'], $connect, $Pile[0]),interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurconteneur','960',false):'')),'0')))))!=='' ?
		((	'<div class="' .
	classe_boucle_crayon('articles','ps',$Pile[$SP]['id_article']).' ps">') . $t1 . '</div>') :
		'') .
'
			' .
(($t1 = strval(interdire_scripts(calculer_notes())))!=='' ?
		('<div class="notes">' . $t1 . '</div>') :
		'') .
'
			' .
(($t1 = strval(calculer_url($Pile[$SP]['url_site'],'','url', $connect)))!=='' ?
		((	'<p class="' .
	classe_boucle_crayon('articles','hyperlien',$Pile[$SP]['id_article']).' hyperlien">' .
	_T('public|spip|ecrire:voir_en_ligne') .
	' : <a href="') . $t1 . (	'" class="spip_out">' .
	interdire_scripts(((($a = typo(supprimer_numero(calculer_url($Pile[$SP]['url_site'],$Pile[$SP]['nom_site'], 'titre', $connect, false)), "TYPO", $connect, $Pile[0])) OR (is_string($a) AND strlen($a))) ? $a : couper(calculer_url($Pile[$SP]['url_site'],'','url', $connect),'80'))) .
	'</a></p>')) :
		'') .
'
			' .
recuperer_fond( 'noisettes/galerie' , array_merge($Pile[0],array('id_article' => $Pile[$SP]['id_article'] )), array('ajax' => ($v=( @$Pile[0]['ajax'] ))?$v:true,'compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_sc_edito.html','html_b61633ce6b9e199cba76da4ae8977bb5','_EDITO',7,$GLOBALS['spip_lang'])), _request('connect')) .
'
		</div>
	</div>
</div>
<!-- fin EDITO -->
');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_EDITO @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_sc_edito.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_sc_edito.html
// Temps de compilation total: 24.703 ms
//

function html_b61633ce6b9e199cba76da4ae8977bb5($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
BOUCLE_EDITOhtml_b61633ce6b9e199cba76da4ae8977bb5($Cache, $Pile, $doublons, $Numrows, $SP) .
'

' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_b61633ce6b9e199cba76da4ae8977bb5', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire_modeportailcognac_sc_edito.html');
}
?>
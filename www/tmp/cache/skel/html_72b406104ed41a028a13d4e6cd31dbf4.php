<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire/sommaire_modeportailcognac_quoideneuf.html
 * Date :      Thu, 26 Jul 2018 13:23:57 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:11 GMT
 * Boucles :   _articles_recentsAlaUne, _DernierEvenementArticle, _AgendaDerniersAjouts, _Articles_Secteurs_Exclus, _Secteurs_Exclus, _Articles_Exclus, _Rubriques_Exclues, _exclus, _articles_QuoideNeuf
 */ 

function BOUCLE_articles_recentsAlaUnehtml_72b406104ed41a028a13d4e6cd31dbf4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$doublons_index = array();
	static $champs__articles_recentsAlaUne = array('id_article','surtitre','titre','soustitre','id_rubrique','descriptif','chapo','texte','ps','date','statut','id_secteur','maj','export','date_redac','visites','referers','popularite','accepter_forum','date_modif','lang','langue_choisie','id_trad','nom_site','url_site','virtuel','composition','composition_lock');

	// Initialise le(s) critère(s) doublons
	if (!isset($doublons[$d = 'articles'])) { $doublons[$d] = ''; }

	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_articles_recentsAlaUne';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("rand() AS hasard",
		"articles.id_article",
		"articles.descriptif",
		"articles.titre",
		"articles.lang");
		$command['join'] = array('L1' => array('articles','id_objet','id_article','L1.objet='.sql_quote('article')), 'L2' => array('L1','id_mot'));
		$command['limit'] = '0'.','.intval(interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/nombres_alanune','4',false):'')));
		$command['having'] = 
			array();
	}
	$command['orderby'] = array((($x = preg_replace("/\W/",'', interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/ordre_quoideneuf','date_modif',false):'')))) ? (in_array($x, $champs__articles_recentsAlaUne)  ? ('articles.' . $x . ' DESC') :($x . ' DESC')) : ''));
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.lang', sql_quote($GLOBALS['spip_lang'], '','varchar(10) NOT NULL DEFAULT \'\'')), 
			array('=', 'L2.titre', "'AlaUne'"), 
			array(sql_in('articles.id_article', $doublons[$doublons_index[]= ('articles')], 'NOT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire/sommaire_modeportailcognac_quoideneuf.html','html_72b406104ed41a028a13d4e6cd31dbf4','_articles_recentsAlaUne',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

			foreach($doublons_index as $k) $doublons[$k] .= "," . $Pile[$SP]['id_article']; // doublons

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
			' .
vide($Pile['vars'][$_zzz=(string)'logo'] = ((($a = ((($a = 
((!is_array($l = quete_logo('id_article', 'off', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />'))) OR (is_string($a) AND strlen($a))) ? $a : 
((!is_array($l = quete_logo('id_article', 'on', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')))) OR (is_string($a) AND strlen($a))) ? $a : filtrer('image_graver',filtrer('image_focus',find_in_path('images/placeholder.jpg'),'308','340')))) .
'
			' .
vide($Pile['vars'][$_zzz=(string)'largeur'] = ((($a = largeur(table_valeur($Pile["vars"], (string)'logo', null))) OR (is_string($a) AND strlen($a))) ? $a : '1')) .
'
			' .
vide($Pile['vars'][$_zzz=(string)'hauteur'] = ((($a = hauteur(table_valeur($Pile["vars"], (string)'logo', null))) OR (is_string($a) AND strlen($a))) ? $a : '1')) .
'
			' .
vide($Pile['vars'][$_zzz=(string)'ratio'] = div(table_valeur($Pile["vars"], (string)'largeur', null),table_valeur($Pile["vars"], (string)'hauteur', null))) .
'
			' .
vide($Pile['vars'][$_zzz=(string)'facteur'] = '') .
vide($Pile['vars'][$_zzz=(string)'largeur'] = '308') .
((table_valeur($Pile["vars"], (string)'ratio', null) > '1.8764') ? (	vide($Pile['vars'][$_zzz=(string)'facteur'] = '2') .
	vide($Pile['vars'][$_zzz=(string)'largeur'] = '638')):'') .
'
			' .
((table_valeur($Pile["vars"], (string)'ratio', null) > '2.8088') ? (	vide($Pile['vars'][$_zzz=(string)'facteur'] = '3') .
	vide($Pile['vars'][$_zzz=(string)'largeur'] = '969')):'') .
'
			<div class="grid-item' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'facteur', null)))!=='' ?
		(' grid-item-x' . $t1) :
		'') .
'">
				<div class="content-actus alaune ' .
classe_boucle_crayon('articles','titre',$Pile[$SP]['id_article']).' ">
					<a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'"' .
(($t1 = strval(interdire_scripts(attribut_html(propre($Pile[$SP]['descriptif'], $connect, $Pile[0])))))!=='' ?
		(' title="' . $t1 . '"') :
		'') .
'>
						' .
(($t1 = strval(extraire_attribut(filtrer('image_graver', filtrer('image_focus',table_valeur($Pile["vars"], (string)'logo', null),table_valeur($Pile["vars"], (string)'largeur', null),'340')),'src')))!=='' ?
		('<img src="' . $t1 . (	'" alt="" width="' .
	table_valeur($Pile["vars"], (string)'largeur', null) .
	'" height="340" />')) :
		'') .
'
						<div class="h2"><span class="titre-actus">' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</span>
							<span class="icon icon-arrow-right2 icon-lg">&#10140;</span></div>
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
		spip_log(intval(1000*$timer)."ms BOUCLE_articles_recentsAlaUne @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire/sommaire_modeportailcognac_quoideneuf.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_DernierEvenementArticlehtml_72b406104ed41a028a13d4e6cd31dbf4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_DernierEvenementArticle';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_article",
		"articles.descriptif",
		"articles.titre",
		"articles.lang");
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
			array('=', 'articles.id_article', sql_quote($Pile[$SP]['id_article'], '','bigint(21) NOT NULL AUTO_INCREMENT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire/sommaire_modeportailcognac_quoideneuf.html','html_72b406104ed41a028a13d4e6cd31dbf4','_DernierEvenementArticle',22,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
				<div class="content-actus ' .
classe_boucle_crayon('articles','titre',$Pile[$SP]['id_article']).' ">
					<a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'"' .
(($t1 = strval(interdire_scripts(attribut_html(propre($Pile[$SP]['descriptif'], $connect, $Pile[0])))))!=='' ?
		(' title="' . $t1 . '"') :
		'') .
'>
						' .
(($t1 = strval(extraire_attribut(filtrer('image_graver', filtrer('image_focus',((($a = ((($a = 
((!is_array($l = quete_logo('id_article', 'off', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />'))) OR (is_string($a) AND strlen($a))) ? $a : 
((!is_array($l = quete_logo('id_article', 'on', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')))) OR (is_string($a) AND strlen($a))) ? $a : find_in_path('images/placeholder.jpg')),'308',interdire_scripts((((include_spip('inc/config')?lire_config('soyezcreateurs/nombres_agenda_par_bloc','2',false):'') == '1') ? '340':'108')))),'src')))!=='' ?
		('<img src="' . $t1 . (	'" alt="" width="308" height="' .
	interdire_scripts((((include_spip('inc/config')?lire_config('soyezcreateurs/nombres_agenda_par_bloc','2',false):'') == '1') ? '340':'108')) .
	'" />')) :
		'') .
'
						<div class="agenda flexbox-flex">
							<div class="date debutfin">
								<time class="debut ladate" itemprop="startDate" title="' .
interdire_scripts($Pile[$SP-1]['date_debut']) .
'" datetime="' .
interdire_scripts($Pile[$SP-1]['date_debut']) .
'">
									<span class="dateNombre"><strong>' .
interdire_scripts(affdate($Pile[$SP-1]['date_debut'],'d')) .
'</strong>/' .
interdire_scripts(affdate($Pile[$SP-1]['date_debut'],'m')) .
'</span>
									<span class="annee display-block">' .
interdire_scripts(affdate($Pile[$SP-1]['date_debut'],'Y')) .
'</span>
								</time>' .
(($t1 = strval(interdire_scripts((((affdate($Pile[$SP-1]['date_debut'],'Ymd') != interdire_scripts(affdate($Pile[$SP-1]['date_fin'],'Ymd')))) ?' ' :''))))!=='' ?
		($t1 . (	'
								<time class="fin ladate" itemprop="endDate" title="' .
	interdire_scripts($Pile[$SP-1]['date_fin']) .
	'" datetime="' .
	interdire_scripts($Pile[$SP-1]['date_fin']) .
	'">
									<span class="dateNombre"><strong>' .
	interdire_scripts(affdate($Pile[$SP-1]['date_fin'],'d')) .
	'</strong>/' .
	interdire_scripts(affdate($Pile[$SP-1]['date_fin'],'m')) .
	'</span>
									<span class="annee display-block">' .
	interdire_scripts(affdate($Pile[$SP-1]['date_fin'],'Y')) .
	'</span>
								</time>')) :
		'') .
(($t1 = strval(interdire_scripts((((affdate($Pile[$SP-1]['date_debut'],'Ymd') == interdire_scripts(affdate($Pile[$SP-1]['date_fin'],'Ymd')))) ?' ' :''))))!=='' ?
		($t1 . (	'
								<time class="fin ladate">
									<span class="dateNombre"><strong>' .
	interdire_scripts(affdate($Pile[$SP-1]['date_debut'],'H:i')) .
	'</strong></span>' .
	(($t2 = strval(interdire_scripts(((($Pile[$SP-1]['date_debut'] != interdire_scripts($Pile[$SP-1]['date_fin']))) ?' ' :''))))!=='' ?
			($t2 . (	'
									<span class="dateNombre display-block">' .
		interdire_scripts(affdate($Pile[$SP-1]['date_fin'],'H:i')) .
		'</span>')) :
			'') .
	'
								</time>')) :
		'') .
'
							</div>
							<div class="h2"><span class="titre-actus">' .
(($t1 = strval(interdire_scripts(((supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]) != interdire_scripts(supprimer_numero(typo($Pile[$SP-1]['titre']), "TYPO", $connect, $Pile[0]))) ? (	interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
	(($t2 = strval(interdire_scripts(supprimer_numero(typo($Pile[$SP-1]['titre']), "TYPO", $connect, $Pile[0]))))!=='' ?
			('&nbsp;: ' . $t2) :
			'')):interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))))))!=='' ?
		(' ' . $t1) :
		'') .
'</span>
							<span class="icon icon-arrow-right2 icon-lg">&#10140;</span></div>
						</div>
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
		spip_log(intval(1000*$timer)."ms BOUCLE_DernierEvenementArticle @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire/sommaire_modeportailcognac_quoideneuf.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_AgendaDerniersAjoutshtml_72b406104ed41a028a13d4e6cd31dbf4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$doublons_index = array();

	// Initialise le(s) critère(s) doublons
	if (!isset($doublons[$d = 'evenements'])) { $doublons[$d] = ''; }

	if (!isset($command['table'])) {
		$command['table'] = 'evenements';
		$command['id'] = '_AgendaDerniersAjouts';
		$command['from'] = array('evenements' => 'spip_evenements');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("evenements.id_article",
		"evenements.date_debut",
		"evenements.date_fin",
		"evenements.titre",
		"evenements.id_evenement");
		$command['orderby'] = array('evenements.date_debut');
		$command['join'] = array();
		$command['limit'] = '0'.','.intval(interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/nombres_agenda','5',false):'')));
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('>=', 'evenements.date_fin', sql_quote(interdire_scripts(affdate(entites_html(table_valeur(@$Pile[0], (string)'date', null),true),'Y-m-d')), '', 'datetime NOT NULL DEFAULT \'0000-00-00 00:00:00\'')), 
			array('=', 'evenements.statut', "'publie'"), 
			array(sql_in('evenements.id_evenement', $doublons[$doublons_index[]= ('evenements')], 'NOT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire/sommaire_modeportailcognac_quoideneuf.html','html_72b406104ed41a028a13d4e6cd31dbf4','_AgendaDerniersAjouts',19,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_AgendaDerniersAjouts']['compteur_boucle'] = 0;
	$Numrows['_AgendaDerniersAjouts']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_AgendaDerniersAjouts']['compteur_boucle']++;
			foreach($doublons_index as $k) $doublons[$k] .= "," . $Pile[$SP]['id_evenement']; // doublons

		$t0 .= (
'
			' .
BOUCLE_DernierEvenementArticlehtml_72b406104ed41a028a13d4e6cd31dbf4($Cache, $Pile, $doublons, $Numrows, $SP) .
'
			' .
((($Numrows['_AgendaDerniersAjouts']['compteur_boucle'] != $Numrows['_AgendaDerniersAjouts']['total']))  ?
		(' ' . (	'
			' .
	alterner($Numrows['_AgendaDerniersAjouts']['compteur_boucle'],interdire_scripts((match((include_spip('inc/config')?lire_config('soyezcreateurs/nombres_agenda_par_bloc','2',false):''),'^1') ? interdire_scripts((((include_spip('inc/config')?lire_config('soyezcreateurs/nombres_agenda_par_bloc','2',false):'') == '1demie') ? '</div><div class="grid-item grid-item-demie">':'</div><div class="grid-item">')):'')),interdire_scripts((((include_spip('inc/config')?lire_config('soyezcreateurs/nombres_agenda_par_bloc','2',false):'') == '1demie') ? '</div><div class="grid-item grid-item-demie">':'</div><div class="grid-item">'))) .
	'
			')) :
		'') .
'
			');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_AgendaDerniersAjouts @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire/sommaire_modeportailcognac_quoideneuf.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_Articles_Secteurs_Exclushtml_72b406104ed41a028a13d4e6cd31dbf4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$doublons_index = array();

	// Initialise le(s) critère(s) doublons
	if (!isset($doublons[$d = 'articles'])) { $doublons[$d] = ''; }

	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_Articles_Secteurs_Exclus';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_article");
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
			array('=', 'articles.id_secteur', sql_quote($Pile[$SP]['id_secteur'], '','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array(sql_in('articles.id_article', $doublons[$doublons_index[]= ('articles')], 'NOT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire/sommaire_modeportailcognac_quoideneuf.html','html_72b406104ed41a028a13d4e6cd31dbf4','_Articles_Secteurs_Exclus',59,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

			foreach($doublons_index as $k) $doublons[$k] .= "," . $Pile[$SP]['id_article']; // doublons

	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_Articles_Secteurs_Exclus @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire/sommaire_modeportailcognac_quoideneuf.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_Secteurs_Exclushtml_72b406104ed41a028a13d4e6cd31dbf4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_Secteurs_Exclus';
		$command['from'] = array('rubriques' => 'spip_rubriques','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("rubriques.id_rubrique");
		$command['select'] = array("rubriques.id_secteur",
		"rubriques.lang",
		"rubriques.titre");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'L2.titre', "'SecteurPasDansQuoiDeNeuf'"));
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
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire/sommaire_modeportailcognac_quoideneuf.html','html_72b406104ed41a028a13d4e6cd31dbf4','_Secteurs_Exclus',59,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= BOUCLE_Articles_Secteurs_Exclushtml_72b406104ed41a028a13d4e6cd31dbf4($Cache, $Pile, $doublons, $Numrows, $SP);
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_Secteurs_Exclus @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire/sommaire_modeportailcognac_quoideneuf.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_Articles_Exclushtml_72b406104ed41a028a13d4e6cd31dbf4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$doublons_index = array();

	// Initialise le(s) critère(s) doublons
	if (!isset($doublons[$d = 'articles'])) { $doublons[$d] = ''; }

	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_Articles_Exclus';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_article");
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
			array('=', 'articles.id_rubrique', sql_quote($Pile[$SP]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'articles.lang', sql_quote($GLOBALS['spip_lang'], '','varchar(10) NOT NULL DEFAULT \'\'')), 
			array(sql_in('articles.id_article', $doublons[$doublons_index[]= ('articles')], 'NOT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire/sommaire_modeportailcognac_quoideneuf.html','html_72b406104ed41a028a13d4e6cd31dbf4','_Articles_Exclus',60,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

			foreach($doublons_index as $k) $doublons[$k] .= "," . $Pile[$SP]['id_article']; // doublons

	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_Articles_Exclus @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire/sommaire_modeportailcognac_quoideneuf.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_Rubriques_Exclueshtml_72b406104ed41a028a13d4e6cd31dbf4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_Rubriques_Exclues';
		$command['from'] = array('rubriques' => 'spip_rubriques','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("rubriques.id_rubrique");
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.lang",
		"rubriques.titre");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'L2.titre', "'PasDansQuoiDeNeuf'"));
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
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire/sommaire_modeportailcognac_quoideneuf.html','html_72b406104ed41a028a13d4e6cd31dbf4','_Rubriques_Exclues',60,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= BOUCLE_Articles_Exclushtml_72b406104ed41a028a13d4e6cd31dbf4($Cache, $Pile, $doublons, $Numrows, $SP);
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_Rubriques_Exclues @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire/sommaire_modeportailcognac_quoideneuf.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_exclushtml_72b406104ed41a028a13d4e6cd31dbf4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$doublons_index = array();

	// Initialise le(s) critère(s) doublons
	if (!isset($doublons[$d = 'articles'])) { $doublons[$d] = ''; }

	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_exclus';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("articles.id_article");
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
			array('=', 'L2.titre', "'PasDansQuoiDeNeuf'"), 
			array(sql_in('articles.id_article', $doublons[$doublons_index[]= ('articles')], 'NOT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire/sommaire_modeportailcognac_quoideneuf.html','html_72b406104ed41a028a13d4e6cd31dbf4','_exclus',61,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

			foreach($doublons_index as $k) $doublons[$k] .= "," . $Pile[$SP]['id_article']; // doublons

	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_exclus @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire/sommaire_modeportailcognac_quoideneuf.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_articles_QuoideNeufhtml_72b406104ed41a028a13d4e6cd31dbf4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$doublons_index = array();
	static $champs__articles_QuoideNeuf = array('id_article','surtitre','titre','soustitre','id_rubrique','descriptif','chapo','texte','ps','date','statut','id_secteur','maj','export','date_redac','visites','referers','popularite','accepter_forum','date_modif','lang','langue_choisie','id_trad','nom_site','url_site','virtuel','composition','composition_lock');

	// Initialise le(s) critère(s) doublons
	if (!isset($doublons[$d = 'articles'])) { $doublons[$d] = ''; }

	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_articles_QuoideNeuf';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rand() AS hasard",
		"articles.id_article",
		"articles.descriptif",
		"articles.titre",
		"articles.lang");
		$command['join'] = array();
		$command['limit'] = '0'.','.intval(interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/nombres_quoideneuf','5',false):'')));
		$command['having'] = 
			array();
	}
	$command['orderby'] = array((($x = preg_replace("/\W/",'', interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/ordre_quoideneuf','date_modif',false):'')))) ? (in_array($x, $champs__articles_QuoideNeuf)  ? ('articles.' . $x . ' DESC') :($x . ' DESC')) : ''));
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.lang', sql_quote($GLOBALS['spip_lang'], '','varchar(10) NOT NULL DEFAULT \'\'')), 
			array(sql_in('articles.id_article', $doublons[$doublons_index[]= ('articles')], 'NOT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire/sommaire_modeportailcognac_quoideneuf.html','html_72b406104ed41a028a13d4e6cd31dbf4','_articles_QuoideNeuf',62,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

			foreach($doublons_index as $k) $doublons[$k] .= "," . $Pile[$SP]['id_article']; // doublons

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
			' .
vide($Pile['vars'][$_zzz=(string)'logo'] = ((($a = ((($a = 
((!is_array($l = quete_logo('id_article', 'off', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />'))) OR (is_string($a) AND strlen($a))) ? $a : 
((!is_array($l = quete_logo('id_article', 'on', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')))) OR (is_string($a) AND strlen($a))) ? $a : filtrer('image_graver',filtrer('image_focus',find_in_path('images/placeholder.jpg'),'308','340')))) .
'
			' .
vide($Pile['vars'][$_zzz=(string)'largeur'] = ((($a = largeur(table_valeur($Pile["vars"], (string)'logo', null))) OR (is_string($a) AND strlen($a))) ? $a : '1')) .
'
			' .
vide($Pile['vars'][$_zzz=(string)'hauteur'] = ((($a = hauteur(table_valeur($Pile["vars"], (string)'logo', null))) OR (is_string($a) AND strlen($a))) ? $a : '1')) .
'
			' .
vide($Pile['vars'][$_zzz=(string)'ratio'] = div(table_valeur($Pile["vars"], (string)'largeur', null),table_valeur($Pile["vars"], (string)'hauteur', null))) .
'
			' .
vide($Pile['vars'][$_zzz=(string)'facteur'] = '') .
vide($Pile['vars'][$_zzz=(string)'largeur'] = '308') .
((table_valeur($Pile["vars"], (string)'ratio', null) > '1.8764') ? (	vide($Pile['vars'][$_zzz=(string)'facteur'] = '2') .
	vide($Pile['vars'][$_zzz=(string)'largeur'] = '638')):'') .
'
			' .
((table_valeur($Pile["vars"], (string)'ratio', null) > '2.8088') ? (	vide($Pile['vars'][$_zzz=(string)'facteur'] = '3') .
	vide($Pile['vars'][$_zzz=(string)'largeur'] = '969')):'') .
'
			<div class="grid-item' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'facteur', null)))!=='' ?
		(' grid-item-x' . $t1) :
		'') .
'">
				<div class="content-actus quoideneuf ' .
classe_boucle_crayon('articles','titre',$Pile[$SP]['id_article']).' ">
					<a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'"' .
(($t1 = strval(interdire_scripts(attribut_html(propre($Pile[$SP]['descriptif'], $connect, $Pile[0])))))!=='' ?
		(' title="' . $t1 . '"') :
		'') .
'>
						' .
(($t1 = strval(extraire_attribut(filtrer('image_graver', filtrer('image_focus',table_valeur($Pile["vars"], (string)'logo', null),table_valeur($Pile["vars"], (string)'largeur', null),'340')),'src')))!=='' ?
		('<img src="' . $t1 . (	'" alt="" width="' .
	table_valeur($Pile["vars"], (string)'largeur', null) .
	'" height="340" />')) :
		'') .
'
						<div class="h2"><span class="titre-actus">' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</span>
							<span class="icon icon-arrow-right2 icon-lg">&#10140;</span></div>
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
		spip_log(intval(1000*$timer)."ms BOUCLE_articles_QuoideNeuf @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire/sommaire_modeportailcognac_quoideneuf.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire/sommaire_modeportailcognac_quoideneuf.html
// Temps de compilation total: 118.225 ms
//

function html_72b406104ed41a028a13d4e6cd31dbf4($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'			' .
BOUCLE_articles_recentsAlaUnehtml_72b406104ed41a028a13d4e6cd31dbf4($Cache, $Pile, $doublons, $Numrows, $SP) .
'
			' .
(($t1 = BOUCLE_AgendaDerniersAjoutshtml_72b406104ed41a028a13d4e6cd31dbf4($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
			<div class="grid-item' .
		(($t3 = strval(interdire_scripts((((include_spip('inc/config')?lire_config('soyezcreateurs/nombres_agenda_par_bloc','2',false):'') == '1demie') ? 'grid-item-demie':''))))!=='' ?
				(' ' . $t3) :
				'') .
		'">
			') . $t1 . '
			</div>
			') :
		'') .
'
			' .
BOUCLE_Secteurs_Exclushtml_72b406104ed41a028a13d4e6cd31dbf4($Cache, $Pile, $doublons, $Numrows, $SP) .
'
			' .
BOUCLE_Rubriques_Exclueshtml_72b406104ed41a028a13d4e6cd31dbf4($Cache, $Pile, $doublons, $Numrows, $SP) .
'
			' .
BOUCLE_exclushtml_72b406104ed41a028a13d4e6cd31dbf4($Cache, $Pile, $doublons, $Numrows, $SP) .
'
			' .
BOUCLE_articles_QuoideNeufhtml_72b406104ed41a028a13d4e6cd31dbf4($Cache, $Pile, $doublons, $Numrows, $SP) .
'
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_72b406104ed41a028a13d4e6cd31dbf4', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire/sommaire_modeportailcognac_quoideneuf.html');
}
?>
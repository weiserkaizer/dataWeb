<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header_modeedito.html
 * Date :      Thu, 26 Jul 2018 13:23:57 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:04 GMT
 * Boucles :   _MenuHaut, _AccesibiliteLien
 */ 

function BOUCLE_MenuHauthtml_a9519a39f9f20b07ae646882c5f275a4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_MenuHaut';
		$command['from'] = array('rubriques' => 'spip_rubriques','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("rubriques.id_rubrique");
		$command['select'] = array("0+rubriques.titre AS num");
		$command['orderby'] = array('num');
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'L2.titre', "'MenuHaut'"));
		$command['join'] = array('L1' => array('rubriques','id_objet','id_rubrique','L1.objet='.sql_quote('rubrique')), 'L2' => array('L1','id_mot'));
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header_modeedito.html','html_a9519a39f9f20b07ae646882c5f275a4','_MenuHaut',5,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('soyezcreateurs:accessibilite_onglets');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'<li><a href="#menuhaut">' .
$l1 .
'</a></li>');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_MenuHaut @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header_modeedito.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_AccesibiliteLienhtml_a9519a39f9f20b07ae646882c5f275a4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_AccesibiliteLien';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("articles.date",
		"articles.id_article",
		"articles.descriptif",
		"articles.titre",
		"articles.lang");
		$command['orderby'] = array('articles.date DESC');
		$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'L2.titre', "'AccesibiliteLien'"));
		$command['join'] = array('L1' => array('articles','id_objet','id_article','L1.objet='.sql_quote('article')), 'L2' => array('L1','id_mot'));
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header_modeedito.html','html_a9519a39f9f20b07ae646882c5f275a4','_AccesibiliteLien',5,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'<li><a href="' .

	((($recurs=(isset($Pile[0]['recurs'])?$Pile[0]['recurs']:0))>=5)? '' :
	recuperer_fond('modeles/article_url', array('lang' => $GLOBALS["spip_lang"] ,
	'id_article'=>$Pile[$SP]['id_article'],
	'id'=>$Pile[$SP]['id_article'],
	'recurs'=>(++$recurs)), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header_modeedito.html','html_a9519a39f9f20b07ae646882c5f275a4','_AccesibiliteLien',5,$GLOBALS['spip_lang']), 'trim'=>true), ''))
 .
'"' .
(($t1 = strval(interdire_scripts(attribut_html(propre($Pile[$SP]['descriptif'], $connect, $Pile[0])))))!=='' ?
		(' title="' . $t1 . '"') :
		'') .
'>' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></li>');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_AccesibiliteLien @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header_modeedito.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header_modeedito.html
// Temps de compilation total: 24.231 ms
//

function html_a9519a39f9f20b07ae646882c5f275a4($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(interdire_scripts(ptobr(propre(sinoncrayon((include_spip('inc/config')?lire_config('soyezcreateurs/bandeau_annonce',null,false):''),'Vous pouvez mettre une annonce vue sur toutes les pages'))))))!=='' ?
		((	'<div id="bandeau_annonce" class="' .
	classe_boucle_crayon('meta','valeur',str_replace('/', '__', 'soyezcreateurs/bandeau_annonce')).' ">') . $t1 . '</div>') :
		'') .
'
	<div id="header">
	<div id="headerbackground"></div>
	<div id="header_inner">
<div id="escapelinks" class="escapelinks"><ul><li><a href="#main">' .
_T('soyezcreateurs:accessibilite_texte') .
'</a></li>' .
BOUCLE_MenuHauthtml_a9519a39f9f20b07ae646882c5f275a4($Cache, $Pile, $doublons, $Numrows, $SP) .
'<li><a href="#menusite">' .
_T('soyezcreateurs:accessibilite_menu') .
'</a></li><li><a href="#formulaire_recherche">' .
_T('soyezcreateurs:accessibilite_recherche') .
'</a></li>' .
BOUCLE_AccesibiliteLienhtml_a9519a39f9f20b07ae646882c5f275a4($Cache, $Pile, $doublons, $Numrows, $SP) .
'</ul></div>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/menus/menu_navhaute') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header_modeedito.html\',\'html_a9519a39f9f20b07ae646882c5f275a4\',\'\',6,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs/positiondatemajsite','bottom',false):'') == 'header')) ?' ' :''))))!=='' ?
		($t1 . 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/datemajsite') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header_modeedito.html\',\'html_a9519a39f9f20b07ae646882c5f275a4\',\'\',7,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs/logoheader','header',false):'') == 'header')) ?' ' :''))))!=='' ?
		($t1 . recuperer_fond( 'noisettes/logosite' , array(), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header_modeedito.html','html_a9519a39f9f20b07ae646882c5f275a4','',8,$GLOBALS['spip_lang'])), _request('connect'))) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("MLL", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . (($t2 = strval(recuperer_fond( 'formulaires/menu_lang' , array_merge($Pile[0],array()), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header_modeedito.html','html_a9519a39f9f20b07ae646882c5f275a4','',9,$GLOBALS['spip_lang'])), _request('connect'))))!=='' ?
			('<div id="cadre_lang">' . $t2 . '</div>') :
			'')) :
		'') .
'
<a id="' .
interdire_scripts(((($a = entites_html(table_valeur(@$Pile[0], (string)'titretop', null),true)) OR (is_string($a) AND strlen($a))) ? $a : sc_nettoyer_marqueur(_T('soyezcreateurs:sommaire')))) .
'"></a>
<h1 class="' .
classe_boucle_crayon('meta','valeur',str_replace('/', '__', 'nom_site')).' "><a href="' .
spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'" title="' .
attribut_html(_T('public|spip|ecrire:accueil_site')) .
'">' .
interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])) .
(($t1 = strval(interdire_scripts(ptobr(typo($GLOBALS['meta']['slogan_site'], "TYPO", $connect, $Pile[0])))))!=='' ?
		(' <sub>' . $t1 . '</sub>') :
		'') .
'</a></h1>
' .
recuperer_fond( 'noisettes/header/cadre_outils' , array_merge($Pile[0],array()), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header_modeedito.html','html_a9519a39f9f20b07ae646882c5f275a4','',10,$GLOBALS['spip_lang'])), _request('connect')) .
'
' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs/positionrecherche','header',false):'') == 'header')) ?' ' :''))))!=='' ?
		($t1 . recuperer_fond( 'noisettes/header/cadre_recherche' , array_merge($Pile[0],array('id_recherche' => 'cadre_recherche' )), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header_modeedito.html','html_a9519a39f9f20b07ae646882c5f275a4','',10,$GLOBALS['spip_lang'])), _request('connect'))) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs/citationsheader',null,false):'') == 'header')) ?' ' :''))))!=='' ?
		($t1 . recuperer_fond( 'noisettes/extra/citations' , array(), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header_modeedito.html','html_a9519a39f9f20b07ae646882c5f275a4','',10,$GLOBALS['spip_lang'])), _request('connect'))) :
		'') .
'
	<div class="clearing">&nbsp;</div>
	' .
(($t1 = strval(interdire_scripts(ptobr(propre((include_spip('inc/config')?lire_config('soyezcreateurs/bloc_header',null,false):''))))))!=='' ?
		((	'<div id="bloc_header" class="' .
	classe_boucle_crayon('meta','valeur',str_replace('/', '__', 'soyezcreateurs/bloc_header')).' ">') . $t1 . '</div>
	<div class="clearing">&nbsp;</div>') :
		'') .
'
	</div><!-- id="header_inner" -->
	</div><!-- id="header" -->
' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs/citationsheader',null,false):'') == 'citations_bandeau')) ?' ' :''))))!=='' ?
		('<div id="cita_bandeau">' . $t1 . (	recuperer_fond( 'noisettes/extra/citations' , array(), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header_modeedito.html','html_a9519a39f9f20b07ae646882c5f275a4','',14,$GLOBALS['spip_lang'])), _request('connect')) .
	'</div>')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs/menuhautheader','header',false):'') == 'header')) ?' ' :''))))!=='' ?
		($t1 . 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'noisettes/menus/menuhaut' .
		interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/typemenuhaut',null,false):'')))) . ', array(\'secteurencours\' => ' . argumenter_squelette(@$Pile[0]['secteurencours']) . ',
	\'rubriqueencours\' => ' . argumenter_squelette(@$Pile[0]['rubriqueencours']) . ',
	\'id_article\' => ' . argumenter_squelette(@$Pile[0]['id_article']) . ',
	\'id_groupe\' => ' . argumenter_squelette(@$Pile[0]['id_groupe']) . ',
	\'id_mot\' => ' . argumenter_squelette(@$Pile[0]['id_mot']) . ',
	\'mots\' => ' . argumenter_squelette(@$Pile[0]['mots']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header_modeedito.html\',\'html_a9519a39f9f20b07ae646882c5f275a4\',\'\',12,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>') :
		'') .
'
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_a9519a39f9f20b07ae646882c5f275a4', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/header_modeedito.html');
}
?>
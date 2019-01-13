<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/datepublication.html
 * Date :      Thu, 26 Jul 2018 13:23:57 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:11 GMT
 * Boucles :   _DatePublicationDevoilerDate
 */ 

function BOUCLE_DatePublicationDevoilerDatehtml_c9368571aa93273b0ce183147412dc05(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['titre_mot']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_DatePublicationDevoilerDate';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("articles.date",
		"articles.date_modif",
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
			array('=', 'articles.id_article', sql_quote(@$Pile[0]['id_article'], '','bigint(21) NOT NULL AUTO_INCREMENT')), (!(is_array(@$Pile[0]['titre_mot'])?count(@$Pile[0]['titre_mot']):strlen(@$Pile[0]['titre_mot'])) ? '' : ((is_array(@$Pile[0]['titre_mot'])) ? sql_in('L2.titre',sql_quote($in)) : 
			array('=', 'L2.titre', sql_quote(@$Pile[0]['titre_mot'], '','text NOT NULL')))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/datepublication.html','html_c9368571aa93273b0ce183147412dc05','_DatePublicationDevoilerDate',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
(($t1 = strval(interdire_scripts(((match((include_spip('inc/config')?lire_config('soyezcreateurs/aff_datepublication','non',false):''),'last')) ?'' :' '))))!=='' ?
		($t1 . (	'<span class="datepublication"><span>' .
	interdire_scripts(ucfirst(nom_jour(normaliser_date($Pile[$SP]['date'])))) .
	' ' .
	interdire_scripts(affdate(normaliser_date($Pile[$SP]['date']))) .
	(($t2 = strval(interdire_scripts(((affdate(((($a = @$Pile[0]['date_modif_manuelle']) OR (is_string($a) AND strlen($a))) ? $a : normaliser_date($Pile[$SP]['date_modif']))) != interdire_scripts(affdate(normaliser_date($Pile[$SP]['date'])))) ? '&mdash; ':''))))!=='' ?
			(' ' . $t2 . (	_T('public|spip|ecrire:dernier_ajout') .
		' ' .
		(($t3 = strval(interdire_scripts(nom_jour(((($a = @$Pile[0]['date_modif_manuelle']) OR (is_string($a) AND strlen($a))) ? $a : normaliser_date($Pile[$SP]['date_modif']))))))!=='' ?
				($t3 . ' ') :
				'') .
		interdire_scripts(affdate(((($a = @$Pile[0]['date_modif_manuelle']) OR (is_string($a) AND strlen($a))) ? $a : normaliser_date($Pile[$SP]['date_modif'])))))) :
			'') .
	'</span></span>')) :
		'') .
(($t1 = strval(interdire_scripts(((match((include_spip('inc/config')?lire_config('soyezcreateurs/aff_datepublication','non',false):''),'last')) ?' ' :''))))!=='' ?
		($t1 . (	'<span class="datepublication"><span>' .
	interdire_scripts(ucfirst(nom_jour(((($a = @$Pile[0]['date_modif_manuelle']) OR (is_string($a) AND strlen($a))) ? $a : normaliser_date($Pile[$SP]['date_modif']))))) .
	(($t2 = strval(interdire_scripts(affdate(((($a = @$Pile[0]['date_modif_manuelle']) OR (is_string($a) AND strlen($a))) ? $a : normaliser_date($Pile[$SP]['date_modif']))))))!=='' ?
			(' ' . $t2) :
			'') .
	'</span></span>')) :
		''));
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_DatePublicationDevoilerDate @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/datepublication.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/datepublication.html
// Temps de compilation total: 16.124 ms
//

function html_c9368571aa93273b0ce183147412dc05($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_DatePublicationDevoilerDatehtml_c9368571aa93273b0ce183147412dc05($Cache, $Pile, $doublons, $Numrows, $SP) .
'
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_c9368571aa93273b0ce183147412dc05', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/datepublication.html');
}
?>
<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/menus/menuhaut.html
 * Date :      Thu, 26 Jul 2018 13:23:58 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:06 GMT
 * Boucles :   _SubArticlesRacine, _SousMenuHaut, _SubArticlesRacineRecursif, _SsSousMenuhaut, _SousMenuHautRecursif, _LancerRecursion, _MenuHaut
 */ 

function BOUCLE_SubArticlesRacinehtml_fb34040ca735c39bafe9445be8b142a6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(match((include_spip('inc/config')?lire_config('soyezcreateurs/deepmenu','deroulant',false):''),'deroulant|arborescent'));

	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_SubArticlesRacine';
		$command['from'] = array('rubriques' => 'spip_rubriques','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("rubriques.id_rubrique");
		$command['select'] = array("rubriques.id_rubrique");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('rubriques','id_objet','id_rubrique','L1.objet='.sql_quote('rubrique')), 'L2' => array('L1','id_mot'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('NOT', 
			array('IN', 'rubriques.id_rubrique', 
			array('SELF', 'rubriques.id_rubrique', 
			array('=', 'L2.titre', "'PasDansMenuHaut'")))), 
			array('=', 'rubriques.id_rubrique', sql_quote($Pile[$SP]['id_rubrique'], '','bigint(21) NOT NULL AUTO_INCREMENT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/menus/menuhaut.html','html_fb34040ca735c39bafe9445be8b142a6','_SubArticlesRacine',72,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
					' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/menus/menuarticles') . ', array(\'id_rubrique\' => ' . argumenter_squelette($Pile[$SP]['id_rubrique']) . ',
	\'id_article\' => ' . argumenter_squelette(@$Pile[0]['id_article']) . ',
	\'mot\' => ' . argumenter_squelette('AfficherArticlesMenuHaut') . ',
	\'largeurlogomenuhaut\' => ' . argumenter_squelette(interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurlogomenuhautderoulant','16',false):''))) . ',
	\'hauteurlogomenuhaut\' => ' . argumenter_squelette(interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/hauteurlogomenuhautderoulant','16',false):''))) . ',
	\'logomenuderoulant\' => ' . argumenter_squelette(interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/logomenuderoulant','oui',false):''))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/menus/menuhaut.html\',\'html_fb34040ca735c39bafe9445be8b142a6\',\'\',73,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
					');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_SubArticlesRacine @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/menus/menuhaut.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_SousMenuHauthtml_fb34040ca735c39bafe9445be8b142a6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(match((include_spip('inc/config')?lire_config('soyezcreateurs/deepmenu','deroulant',false):''),'deroulant|arborescent'));

	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_SousMenuHaut';
		$command['from'] = array('rubriques' => 'spip_rubriques','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("rubriques.id_rubrique");
		$command['select'] = array("0+rubriques.titre AS num",
		"rubriques.id_rubrique",
		"rubriques.titre",
		"rubriques.descriptif",
		"rubriques.lang");
		$command['orderby'] = array('num');
		$command['join'] = array('L1' => array('rubriques','id_objet','id_rubrique','L1.objet='.sql_quote('rubrique')), 'L2' => array('L1','id_mot'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('NOT', 
			array('IN', 'rubriques.id_rubrique', 
			array('SELF', 'rubriques.id_rubrique', 
			array('=', 'L2.titre', "'PasDansMenuHaut'")))), 
			array('=', 'rubriques.id_parent', sql_quote($Pile[$SP]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT \'0\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/menus/menuhaut.html','html_fb34040ca735c39bafe9445be8b142a6','_SousMenuHaut',51,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
				<li>' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/menus/rubrique_li') . ', array(\'id_rubrique\' => ' . argumenter_squelette($Pile[$SP]['id_rubrique']) . ',
	\'rubriqueencours\' => ' . argumenter_squelette(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'rubriqueencours', null),true))) . ',
	\'letitre\' => ' . argumenter_squelette(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) . ',
	\'ledescriptif\' => ' . argumenter_squelette(interdire_scripts(propre($Pile[$SP]['descriptif'], $connect, $Pile[0]))) . ',
	\'pasmenuarticle\' => ' . argumenter_squelette('1') . ',
	\'langue\' => ' . argumenter_squelette(spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])) . ',
	\'largeurlogomenuhaut\' => ' . argumenter_squelette(interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurlogomenuhautderoulant','16',false):''))) . ',
	\'hauteurlogomenuhaut\' => ' . argumenter_squelette(interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/hauteurlogomenuhautderoulant','16',false):''))) . ',
	\'logomenuderoulant\' => ' . argumenter_squelette(interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/logomenuderoulant','oui',false):''))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/menus/menuhaut.html\',\'html_fb34040ca735c39bafe9445be8b142a6\',\'\',53,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'></li>
				');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_SousMenuHaut @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/menus/menuhaut.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_SubArticlesRacineRecursifhtml_fb34040ca735c39bafe9445be8b142a6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(match((include_spip('inc/config')?lire_config('soyezcreateurs/deepmenu','deroulant',false):''),'deroulant|arborescent'));

	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_SubArticlesRacineRecursif';
		$command['from'] = array('rubriques' => 'spip_rubriques','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("rubriques.id_rubrique");
		$command['select'] = array("rubriques.id_rubrique");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('rubriques','id_objet','id_rubrique','L1.objet='.sql_quote('rubrique')), 'L2' => array('L1','id_mot'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('NOT', 
			array('IN', 'rubriques.id_rubrique', 
			array('SELF', 'rubriques.id_rubrique', 
			array('=', 'L2.titre', "'PasDansMenuHaut'")))), 
			array('=', 'rubriques.id_rubrique', sql_quote($Pile[$SP]['id_rubrique'], '','bigint(21) NOT NULL AUTO_INCREMENT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/menus/menuhaut.html','html_fb34040ca735c39bafe9445be8b142a6','_SubArticlesRacineRecursif',43,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
					' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/menus/menuarticles') . ', array(\'id_rubrique\' => ' . argumenter_squelette($Pile[$SP]['id_rubrique']) . ',
	\'id_article\' => ' . argumenter_squelette(@$Pile[0]['id_article']) . ',
	\'mot\' => ' . argumenter_squelette('AfficherArticlesMenuHaut') . ',
	\'largeurlogomenuhaut\' => ' . argumenter_squelette(interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurlogomenuhautderoulant','16',false):''))) . ',
	\'hauteurlogomenuhaut\' => ' . argumenter_squelette(interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/hauteurlogomenuhautderoulant','16',false):''))) . ',
	\'logomenuderoulant\' => ' . argumenter_squelette(interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/logomenuderoulant','oui',false):''))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/menus/menuhaut.html\',\'html_fb34040ca735c39bafe9445be8b142a6\',\'\',44,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
					');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_SubArticlesRacineRecursif @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/menus/menuhaut.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_SsSousMenuhauthtml_fb34040ca735c39bafe9445be8b142a6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$save_numrows = (isset($Numrows['_SousMenuHautRecursif']) ? $Numrows['_SousMenuHautRecursif'] : array());
	$t0 = (($t1 = BOUCLE_SousMenuHautRecursifhtml_fb34040ca735c39bafe9445be8b142a6($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('<ul>
				' . $t1 . (	'
				' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/menus/menuarticles') . ', array(\'id_rubrique\' => ' . argumenter_squelette($Pile[$SP]['id_rubrique']) . ',
	\'id_article\' => ' . argumenter_squelette(@$Pile[0]['id_article']) . ',
	\'pas2ul\' => ' . argumenter_squelette('1') . ',
	\'mot\' => ' . argumenter_squelette('AfficherArticlesMenuHaut') . ',
	\'largeurlogomenuhaut\' => ' . argumenter_squelette(interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurlogomenuhautderoulant','16',false):''))) . ',
	\'hauteurlogomenuhaut\' => ' . argumenter_squelette(interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/hauteurlogomenuhautderoulant','16',false):''))) . ',
	\'logomenuderoulant\' => ' . argumenter_squelette(interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/logomenuderoulant','oui',false):''))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/menus/menuhaut.html\',\'html_fb34040ca735c39bafe9445be8b142a6\',\'\',36,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
				</ul>
				')) :
		((	'
					
					' .
	BOUCLE_SubArticlesRacineRecursifhtml_fb34040ca735c39bafe9445be8b142a6($Cache, $Pile, $doublons, $Numrows, $SP) .
	'
				')));
	$Numrows['_SousMenuHautRecursif'] = ($save_numrows);
	return $t0;
}


function BOUCLE_SousMenuHautRecursifhtml_fb34040ca735c39bafe9445be8b142a6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(match((include_spip('inc/config')?lire_config('soyezcreateurs/deepmenu','deroulant',false):''),'deroulant|arborescent'));

	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_SousMenuHautRecursif';
		$command['from'] = array('rubriques' => 'spip_rubriques','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("rubriques.id_rubrique");
		$command['select'] = array("rubriques.id_rubrique",
		"0+rubriques.titre AS num",
		"rubriques.titre",
		"rubriques.descriptif",
		"rubriques.lang");
		$command['orderby'] = array('num');
		$command['join'] = array('L1' => array('rubriques','id_objet','id_rubrique','L1.objet='.sql_quote('rubrique')), 'L2' => array('L1','id_mot'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('NOT', 
			array('IN', 'rubriques.id_rubrique', 
			array('SELF', 'rubriques.id_rubrique', 
			array('=', 'L2.titre', "'PasDansMenuHaut'")))), 
			array('=', 'rubriques.id_parent', sql_quote($Pile[$SP]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT \'0\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/menus/menuhaut.html','html_fb34040ca735c39bafe9445be8b142a6','_SousMenuHautRecursif',22,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
				<li>' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/menus/rubrique_li') . ', array(\'id_rubrique\' => ' . argumenter_squelette($Pile[$SP]['id_rubrique']) . ',
	\'rubriqueencours\' => ' . argumenter_squelette(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'rubriqueencours', null),true))) . ',
	\'letitre\' => ' . argumenter_squelette(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) . ',
	\'ledescriptif\' => ' . argumenter_squelette(interdire_scripts(propre($Pile[$SP]['descriptif'], $connect, $Pile[0]))) . ',
	\'pasmenuarticle\' => ' . argumenter_squelette('1') . ',
	\'langue\' => ' . argumenter_squelette(spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])) . ',
	\'largeurlogomenuhaut\' => ' . argumenter_squelette(interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurlogomenuhautderoulant','16',false):''))) . ',
	\'hauteurlogomenuhaut\' => ' . argumenter_squelette(interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/hauteurlogomenuhautderoulant','16',false):''))) . ',
	\'logomenuderoulant\' => ' . argumenter_squelette(interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/logomenuderoulant','oui',false):''))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/menus/menuhaut.html\',\'html_fb34040ca735c39bafe9445be8b142a6\',\'\',24,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>' .
BOUCLE_SsSousMenuhauthtml_fb34040ca735c39bafe9445be8b142a6($Cache, $Pile, $doublons, $Numrows, $SP) .
'</li>
				');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_SousMenuHautRecursif @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/menus/menuhaut.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_LancerRecursionhtml_fb34040ca735c39bafe9445be8b142a6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(((include_spip('inc/config')?lire_config('soyezcreateurs/deepmenu','deroulant',false):'') == 'arborescent'));

	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_LancerRecursion';
		$command['from'] = array('rubriques' => 'spip_rubriques','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("rubriques.id_rubrique");
		$command['select'] = array("rubriques.id_rubrique");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('rubriques','id_objet','id_rubrique','L1.objet='.sql_quote('rubrique')), 'L2' => array('L1','id_mot'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_rubrique', sql_quote($Pile[$SP]['id_rubrique'], '','bigint(21) NOT NULL AUTO_INCREMENT')), 
			array('NOT', 
			array('IN', 'rubriques.id_rubrique', 
			array('SELF', 'rubriques.id_rubrique', 
			array('=', 'L2.titre', "'PasDansMenuHaut'")))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/menus/menuhaut.html','html_fb34040ca735c39bafe9445be8b142a6','_LancerRecursion',21,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
				' .
(($t1 = BOUCLE_SousMenuHautRecursifhtml_fb34040ca735c39bafe9445be8b142a6($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('<ul>
				' . $t1 . (	'
				' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/menus/menuarticles') . ', array(\'id_rubrique\' => ' . argumenter_squelette($Pile[$SP]['id_rubrique']) . ',
	\'id_article\' => ' . argumenter_squelette(@$Pile[0]['id_article']) . ',
	\'pas2ul\' => ' . argumenter_squelette('1') . ',
	\'mot\' => ' . argumenter_squelette('AfficherArticlesMenuHaut') . ',
	\'largeurlogomenuhaut\' => ' . argumenter_squelette(interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurlogomenuhautderoulant','16',false):''))) . ',
	\'hauteurlogomenuhaut\' => ' . argumenter_squelette(interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/hauteurlogomenuhautderoulant','16',false):''))) . ',
	\'logomenuderoulant\' => ' . argumenter_squelette(interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/logomenuderoulant','oui',false):''))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/menus/menuhaut.html\',\'html_fb34040ca735c39bafe9445be8b142a6\',\'\',36,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
				</ul>
				')) :
		((	'
					
					' .
	BOUCLE_SubArticlesRacineRecursifhtml_fb34040ca735c39bafe9445be8b142a6($Cache, $Pile, $doublons, $Numrows, $SP) .
	'
				'))) .
'
			');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_LancerRecursion @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/menus/menuhaut.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_MenuHauthtml_fb34040ca735c39bafe9445be8b142a6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_MenuHaut';
		$command['from'] = array('rubriques' => 'spip_rubriques','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("rubriques.id_rubrique");
		$command['select'] = array("rubriques.id_rubrique",
		"0+rubriques.titre AS num",
		"rubriques.titre",
		"rubriques.descriptif",
		"rubriques.lang");
		$command['orderby'] = array('num');
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'L2.titre', "'MenuHaut'"));
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
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/menus/menuhaut.html','html_fb34040ca735c39bafe9445be8b142a6','_MenuHaut',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'<li class="menuh' .
$Pile[$SP]['id_rubrique'] .
' ' .
classe_boucle_crayon('rubriques','titre',$Pile[$SP]['id_rubrique']).' ">' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/menus/rubrique_li') . ', array(\'id_rubrique\' => ' . argumenter_squelette($Pile[$SP]['id_rubrique']) . ',
	\'rubriqueencours\' => ' . argumenter_squelette(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'secteurencours', null),true))) . ',
	\'letitre\' => ' . argumenter_squelette(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) . ',
	\'ledescriptif\' => ' . argumenter_squelette(interdire_scripts(propre($Pile[$SP]['descriptif'], $connect, $Pile[0]))) . ',
	\'pasmenuarticle\' => ' . argumenter_squelette('1') . ',
	\'classimg\' => ' . argumenter_squelette('menu_haut_logo') . ',
	\'langue\' => ' . argumenter_squelette(spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])) . ',
	\'largeurlogomenuhaut\' => ' . argumenter_squelette(interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurlogomenuhaut','16',false):''))) . ',
	\'hauteurlogomenuhaut\' => ' . argumenter_squelette(interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/hauteurlogomenuhaut','16',false):''))) . ',
	\'menuhautlogo\' => ' . argumenter_squelette(interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/menuhautlogo','logoplustexte',false):''))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/menus/menuhaut.html\',\'html_fb34040ca735c39bafe9445be8b142a6\',\'\',9,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
			' .
(($t1 = BOUCLE_LancerRecursionhtml_fb34040ca735c39bafe9445be8b142a6($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
				' .
	(($t2 = BOUCLE_SousMenuHauthtml_fb34040ca735c39bafe9445be8b142a6($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
			('<ul>
				' . $t2 . (	'
				' .
			
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/menus/menuarticles') . ', array(\'id_rubrique\' => ' . argumenter_squelette($Pile[$SP]['id_rubrique']) . ',
	\'id_article\' => ' . argumenter_squelette(@$Pile[0]['id_article']) . ',
	\'pas2ul\' => ' . argumenter_squelette('1') . ',
	\'mot\' => ' . argumenter_squelette('AfficherArticlesMenuHaut') . ',
	\'largeurlogomenuhaut\' => ' . argumenter_squelette(interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurlogomenuhautderoulant','16',false):''))) . ',
	\'hauteurlogomenuhaut\' => ' . argumenter_squelette(interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/hauteurlogomenuhautderoulant','16',false):''))) . ',
	\'logomenuderoulant\' => ' . argumenter_squelette(interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/logomenuderoulant','oui',false):''))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/menus/menuhaut.html\',\'html_fb34040ca735c39bafe9445be8b142a6\',\'\',65,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
				</ul>
				')) :
			((	'
					
					' .
		BOUCLE_SubArticlesRacinehtml_fb34040ca735c39bafe9445be8b142a6($Cache, $Pile, $doublons, $Numrows, $SP) .
		'
				'))) .
	'
				'))) .
'
		</li>');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_MenuHaut @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/menus/menuhaut.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/menus/menuhaut.html
// Temps de compilation total: 86.607 ms
//

function html_fb34040ca735c39bafe9445be8b142a6($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = BOUCLE_MenuHauthtml_fb34040ca735c39bafe9445be8b142a6($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
' .
		(($t3 = strval(interdire_scripts(((filtre_info_plugin_dist("SIDR", "est_actif")) ?' ' :''))))!=='' ?
				($t3 . (	'<div id="mobile-header">
<a id="responsive-menu-button" href="#sidr-main"><span>' .
			_T('soyezcreateurs:menunavrwd') .
			'</span></a>
</div>')) :
				'') .
		'
<nav id="menuhaut">
	<h2 class="nocontent offscreen">Menu principal</h2>
	<ul id="menuh">
		' .
		(($t3 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs/positionrecherche','header',false):'') == 'menuhaut')) ?' ' :''))))!=='' ?
				('<li class="cadre_recherche">' . $t3 . (	recuperer_fond( 'noisettes/header/cadre_recherche' , array_merge($Pile[0],array('id_recherche' => 'cadre_recherche' )), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/menus/menuhaut.html','html_fb34040ca735c39bafe9445be8b142a6','',6,$GLOBALS['spip_lang'])), _request('connect')) .
			'</li>')) :
				'') .
		'
		') . $t1 . '
	</ul>
</nav>
') :
		'') .
'
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_fb34040ca735c39bafe9445be8b142a6', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/menus/menuhaut.html');
}
?>
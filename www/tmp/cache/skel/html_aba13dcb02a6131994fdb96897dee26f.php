<?php

/*
 * Squelette : ../plugins/noizetier/formulaires/inclure/inc-liste_types_noisette.html
 * Date :      Wed, 11 Jul 2018 07:46:24 GMT
 * Compile :   Mon, 07 Jan 2019 01:02:04 GMT
 * Boucles :   _infos_type, _infos_page, _types_noisette_composition, _si_composition, _types_noisette_page, _types_noisette_communes, _si_type_noisette
 */ 

function BOUCLE_infos_typehtml_aba13dcb02a6131994fdb96897dee26f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'noizetier_pages';
		$command['id'] = '_infos_type';
		$command['from'] = array('noizetier_pages' => 'spip_noizetier_pages');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("noizetier_pages.nom");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'noizetier_pages.page', sql_quote(table_valeur($Pile["vars"], (string)'type', null), '', 'varchar(255) NOT NULL DEFAULT \'\'')), 
			array('=', 'noizetier_pages.composition', "''"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/noizetier/formulaires/inclure/inc-liste_types_noisette.html','html_aba13dcb02a6131994fdb96897dee26f','_infos_type',7,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= vide($Pile['vars'][$_zzz=(string)'nom_type'] = interdire_scripts(_T_ou_typo($Pile[$SP]['nom'])));
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_infos_type @ ../plugins/noizetier/formulaires/inclure/inc-liste_types_noisette.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_infos_pagehtml_aba13dcb02a6131994fdb96897dee26f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'noizetier_pages';
		$command['id'] = '_infos_page';
		$command['from'] = array('noizetier_pages' => 'spip_noizetier_pages');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("noizetier_pages.type",
		"noizetier_pages.composition",
		"noizetier_pages.page",
		"noizetier_pages.nom");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'noizetier_pages.page', sql_quote(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'page', null), interdire_scripts(@$Pile[0]['objet'])),true)), '', 'varchar(255) NOT NULL DEFAULT \'\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/noizetier/formulaires/inclure/inc-liste_types_noisette.html','html_aba13dcb02a6131994fdb96897dee26f','_infos_page',3,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		' .
vide($Pile['vars'][$_zzz=(string)'type'] = interdire_scripts(typo($Pile[$SP]['type'], "TYPO", $connect, $Pile[0]))) .
'
		' .
vide($Pile['vars'][$_zzz=(string)'composition'] = interdire_scripts((($zc=$Pile[$SP]['composition'])?($zc=='-'?'':$zc):compositions_determiner(objet_type('noizetier_pages'), $Pile[$SP]['page'], '', false)))) .
'
		' .
(($t1 = strval(interdire_scripts((((($zc=$Pile[$SP]['composition'])?($zc=='-'?'':$zc):compositions_determiner(objet_type('noizetier_pages'), $Pile[$SP]['page'], '', false))) ?' ' :''))))!=='' ?
		($t1 . vide($Pile['vars'][$_zzz=(string)'nom_composition'] = interdire_scripts(_T_ou_typo($Pile[$SP]['nom'])))) :
		'') .
'
		' .
BOUCLE_infos_typehtml_aba13dcb02a6131994fdb96897dee26f($Cache, $Pile, $doublons, $Numrows, $SP) .
'
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_infos_page @ ../plugins/noizetier/formulaires/inclure/inc-liste_types_noisette.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_types_noisette_compositionhtml_aba13dcb02a6131994fdb96897dee26f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['actif']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'types_noisettes';
		$command['id'] = '_types_noisette_composition';
		$command['from'] = array('types_noisettes' => 'spip_types_noisettes');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("types_noisettes.type_noisette",
		"types_noisettes.nom",
		"types_noisettes.icon");
		$command['orderby'] = array('types_noisettes.type_noisette');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'types_noisettes.plugin', "'noizetier'"), 
			array('=', 'types_noisettes.type', sql_quote(table_valeur($Pile["vars"], (string)'type', null), '', 'varchar(127) NOT NULL DEFAULT \'\'')), 
			array('=', 'types_noisettes.composition', sql_quote(table_valeur($Pile["vars"], (string)'composition', null), '', 'varchar(127) NOT NULL DEFAULT \'\'')), (!(is_array(@$Pile[0]['actif'])?count(@$Pile[0]['actif']):strlen(@$Pile[0]['actif'])) ? '' : ((is_array(@$Pile[0]['actif'])) ? sql_in('types_noisettes.actif',sql_quote($in)) : 
			array('=', 'types_noisettes.actif', sql_quote(@$Pile[0]['actif'], '','varchar(3) NOT NULL DEFAULT \'oui\'')))), ((@$Pile[0]["where"]) ? (@$Pile[0]["where"]) : ''));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/noizetier/formulaires/inclure/inc-liste_types_noisette.html','html_aba13dcb02a6131994fdb96897dee26f','_types_noisette_composition',11,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inclure/inc-input_type_noisette') . ', array(\'type_noisette\' => ' . argumenter_squelette($Pile[$SP]['type_noisette']) . ',
	\'nom\' => ' . argumenter_squelette(interdire_scripts(_T_ou_typo($Pile[$SP]['nom']))) . ',
	\'icon\' => ' . argumenter_squelette($Pile[$SP]['icon']) . ',
	\'input_type\' => ' . argumenter_squelette(@$Pile[0]['input_type']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/noizetier/formulaires/inclure/inc-liste_types_noisette.html\',\'html_aba13dcb02a6131994fdb96897dee26f\',\'\',18,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_types_noisette_composition @ ../plugins/noizetier/formulaires/inclure/inc-liste_types_noisette.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_si_compositionhtml_aba13dcb02a6131994fdb96897dee26f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = table_valeur($Pile["vars"], (string)'composition', null);

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_si_composition';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"CONDITION",
		$command,
		array('../plugins/noizetier/formulaires/inclure/inc-liste_types_noisette.html','html_aba13dcb02a6131994fdb96897dee26f','_si_composition',10,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		' .
(($t1 = BOUCLE_types_noisette_compositionhtml_aba13dcb02a6131994fdb96897dee26f($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
		<div class="editer pleine_largeur editer_type_noisette" id="types_noisette-composition">
			<p class="explication">' .
		_T('noizetier:noisettes_composition', array('composition' => table_valeur($Pile["vars"], (string)'nom_composition', null))) .
		'</p>
		' .
		(($t3 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'input_type', null),true)) ?'' :' '))))!=='' ?
				($t3 . '
			<ul class="liste-items liste-noisettes liste-noisettes-disponibles">
		') :
				'') .
		'
		') . $t1 . (	'
			' .
		(($t3 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'input_type', null),true)) ?'' :' '))))!=='' ?
				($t3 . '</ul>') :
				'') .
		'
		</div>
		')) :
		'') .
'
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_si_composition @ ../plugins/noizetier/formulaires/inclure/inc-liste_types_noisette.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_types_noisette_pagehtml_aba13dcb02a6131994fdb96897dee26f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['actif']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'types_noisettes';
		$command['id'] = '_types_noisette_page';
		$command['from'] = array('types_noisettes' => 'spip_types_noisettes');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("types_noisettes.type_noisette",
		"types_noisettes.nom",
		"types_noisettes.icon");
		$command['orderby'] = array('types_noisettes.type_noisette');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'types_noisettes.plugin', "'noizetier'"), 
			array('=', 'types_noisettes.type', sql_quote(table_valeur($Pile["vars"], (string)'type', null), '', 'varchar(127) NOT NULL DEFAULT \'\'')), 
			array('=', 'types_noisettes.composition', "''"), (!(is_array(@$Pile[0]['actif'])?count(@$Pile[0]['actif']):strlen(@$Pile[0]['actif'])) ? '' : ((is_array(@$Pile[0]['actif'])) ? sql_in('types_noisettes.actif',sql_quote($in)) : 
			array('=', 'types_noisettes.actif', sql_quote(@$Pile[0]['actif'], '','varchar(3) NOT NULL DEFAULT \'oui\'')))), ((@$Pile[0]["where"]) ? (@$Pile[0]["where"]) : ''));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/noizetier/formulaires/inclure/inc-liste_types_noisette.html','html_aba13dcb02a6131994fdb96897dee26f','_types_noisette_page',29,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inclure/inc-input_type_noisette') . ', array(\'type_noisette\' => ' . argumenter_squelette($Pile[$SP]['type_noisette']) . ',
	\'nom\' => ' . argumenter_squelette(interdire_scripts(_T_ou_typo($Pile[$SP]['nom']))) . ',
	\'icon\' => ' . argumenter_squelette($Pile[$SP]['icon']) . ',
	\'input_type\' => ' . argumenter_squelette(@$Pile[0]['input_type']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/noizetier/formulaires/inclure/inc-liste_types_noisette.html\',\'html_aba13dcb02a6131994fdb96897dee26f\',\'\',36,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_types_noisette_page @ ../plugins/noizetier/formulaires/inclure/inc-liste_types_noisette.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_types_noisette_communeshtml_aba13dcb02a6131994fdb96897dee26f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['actif']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'types_noisettes';
		$command['id'] = '_types_noisette_communes';
		$command['from'] = array('types_noisettes' => 'spip_types_noisettes');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("types_noisettes.type_noisette",
		"types_noisettes.nom",
		"types_noisettes.icon");
		$command['orderby'] = array('types_noisettes.type_noisette');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'types_noisettes.plugin', "'noizetier'"), 
			array('=', 'types_noisettes.type', "''"), 
			array('=', 'types_noisettes.composition', "''"), (!(is_array(@$Pile[0]['actif'])?count(@$Pile[0]['actif']):strlen(@$Pile[0]['actif'])) ? '' : ((is_array(@$Pile[0]['actif'])) ? sql_in('types_noisettes.actif',sql_quote($in)) : 
			array('=', 'types_noisettes.actif', sql_quote(@$Pile[0]['actif'], '','varchar(3) NOT NULL DEFAULT \'oui\'')))), ((@$Pile[0]["where"]) ? (@$Pile[0]["where"]) : ''));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/noizetier/formulaires/inclure/inc-liste_types_noisette.html','html_aba13dcb02a6131994fdb96897dee26f','_types_noisette_communes',46,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inclure/inc-input_type_noisette') . ', array(\'type_noisette\' => ' . argumenter_squelette($Pile[$SP]['type_noisette']) . ',
	\'nom\' => ' . argumenter_squelette(interdire_scripts(_T_ou_typo($Pile[$SP]['nom']))) . ',
	\'icon\' => ' . argumenter_squelette($Pile[$SP]['icon']) . ',
	\'input_type\' => ' . argumenter_squelette(@$Pile[0]['input_type']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/noizetier/formulaires/inclure/inc-liste_types_noisette.html\',\'html_aba13dcb02a6131994fdb96897dee26f\',\'\',53,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_types_noisette_communes @ ../plugins/noizetier/formulaires/inclure/inc-liste_types_noisette.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_si_type_noisettehtml_aba13dcb02a6131994fdb96897dee26f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = table_valeur($Pile["vars"], (string)'compteurs/total', null);

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_si_type_noisette';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"CONDITION",
		$command,
		array('../plugins/noizetier/formulaires/inclure/inc-liste_types_noisette.html','html_aba13dcb02a6131994fdb96897dee26f','_si_type_noisette',2,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('noizetier:noisettes_toutes_pages');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
BOUCLE_infos_pagehtml_aba13dcb02a6131994fdb96897dee26f($Cache, $Pile, $doublons, $Numrows, $SP) .
'

	' .
BOUCLE_si_compositionhtml_aba13dcb02a6131994fdb96897dee26f($Cache, $Pile, $doublons, $Numrows, $SP) .
'

	' .
(($t1 = BOUCLE_types_noisette_pagehtml_aba13dcb02a6131994fdb96897dee26f($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
		<div class="editer pleine_largeur editer_type_noisette" id="types_noisette-page">
			<p class="explication">' .
		_T('noizetier:noisettes_page', array('type' => table_valeur($Pile["vars"], (string)'nom_type', null))) .
		'</p>
		' .
		(($t3 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'input_type', null),true)) ?'' :' '))))!=='' ?
				($t3 . '
			<ul class="liste-items liste-noisettes liste-noisettes-disponibles">
		') :
				'') .
		'
	') . $t1 . (	'
			' .
		(($t3 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'input_type', null),true)) ?'' :' '))))!=='' ?
				($t3 . '</ul>') :
				'') .
		'
		</div>
	')) :
		'') .
'

	' .
(($t1 = BOUCLE_types_noisette_communeshtml_aba13dcb02a6131994fdb96897dee26f($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
		<div class="editer pleine_largeur editer_type_noisette" id="types_noisette-communs">
			<p class="explication">' .
		$l1 .
		'</p>
		' .
		(($t3 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'input_type', null),true)) ?'' :' '))))!=='' ?
				($t3 . '
			<ul class="liste-items liste-noisettes liste-noisettes-disponibles">
		') :
				'') .
		'
	') . $t1 . (	'
			' .
		(($t3 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'input_type', null),true)) ?'' :' '))))!=='' ?
				($t3 . '</ul>') :
				'') .
		'
		</div>
	')) :
		'') .
'
	</div>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_si_type_noisette @ ../plugins/noizetier/formulaires/inclure/inc-liste_types_noisette.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/noizetier/formulaires/inclure/inc-liste_types_noisette.html
// Temps de compilation total: 12.091 ms
//

function html_aba13dcb02a6131994fdb96897dee26f($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][$_zzz=(string)'compteurs'] = interdire_scripts(calculer_infos_page(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)"page", null), interdire_scripts(@$Pile[0]["objet"])),true)), "compteurs_type_noisette"))) .
(($t1 = BOUCLE_si_type_noisettehtml_aba13dcb02a6131994fdb96897dee26f($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
	' .
	_T('noizetier:aucun_type_noisette') .
	'
'))) .
'
');

	return analyse_resultat_skel('html_aba13dcb02a6131994fdb96897dee26f', $Cache, $page, '../plugins/noizetier/formulaires/inclure/inc-liste_types_noisette.html');
}
?>
<?php

/*
 * Squelette : ../plugins/noizetier/prive/squelettes/hierarchie/noizetier_page.html
 * Date :      Wed, 11 Jul 2018 07:46:22 GMT
 * Compile :   Mon, 07 Jan 2019 01:02:03 GMT
 * Boucles :   _si_page, _page_hierarchie
 */ 

function BOUCLE_si_pagehtml_2eca74b9c5013f984cae310275ff067a(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'noizetier_pages';
		$command['id'] = '_si_page';
		$command['from'] = array('noizetier_pages' => 'spip_noizetier_pages');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("noizetier_pages.est_page_objet",
		"noizetier_pages.nom");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'noizetier_pages.page', sql_quote(@$Pile[0]['page'], '','varchar(255) NOT NULL DEFAULT \'\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/noizetier/prive/squelettes/hierarchie/noizetier_page.html','html_2eca74b9c5013f984cae310275ff067a','_si_page',2,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		
		<a href="' .
parametre_url(generer_url_ecrire('noizetier_pages'),'est_page_objet',interdire_scripts($Pile[$SP]['est_page_objet'])) .
'">
			' .
_T(concat('noizetier:liste_pages_objet_',interdire_scripts($Pile[$SP]['est_page_objet']))) .
'
		</a> &gt;
		<strong class="on">' .
(($t1 = strval(interdire_scripts(_T_ou_typo($Pile[$SP]['nom']))))!=='' ?
		(' ' . $t1) :
		'') .
'</strong>
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_si_page @ ../plugins/noizetier/prive/squelettes/hierarchie/noizetier_page.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_page_hierarchiehtml_2eca74b9c5013f984cae310275ff067a(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'exec', null),true) == 'noizetier_page'));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_page_hierarchie';
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
		array('../plugins/noizetier/prive/squelettes/hierarchie/noizetier_page.html','html_2eca74b9c5013f984cae310275ff067a','_page_hierarchie',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('noizetier:liste_objets');
	$l2 = _T('ecrire:info_sans_titre');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
(($t1 = BOUCLE_si_pagehtml_2eca74b9c5013f984cae310275ff067a($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
		
		<a href="' .
	generer_url_ecrire('noizetier_objets') .
	'">' .
	$l1 .
	'</a> &gt;
		' .
	interdire_scripts(changer_typo(generer_info_entite(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true)), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)), 'lang'))) .
	'
		<strong class="on">' .
	(($t2 = strval(interdire_scripts(((($a = couper(generer_info_entite(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true)), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)), 'titre'),'80')) OR (is_string($a) AND strlen($a))) ? $a : $l2))))!=='' ?
			(' ' . $t2) :
			'') .
	'</strong>
		' .
	changer_typo('') .
	'
	'))) .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_page_hierarchie @ ../plugins/noizetier/prive/squelettes/hierarchie/noizetier_page.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/noizetier/prive/squelettes/hierarchie/noizetier_page.html
// Temps de compilation total: 40.736 ms
//

function html_2eca74b9c5013f984cae310275ff067a($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = BOUCLE_page_hierarchiehtml_2eca74b9c5013f984cae310275ff067a($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
	' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'exec', null),true) == 'noisette_edit')) ?' ' :''))))!=='' ?
			($t2 . 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/hierarchie/noisette_edit') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/noizetier/prive/squelettes/hierarchie/noizetier_page.html\',\'html_2eca74b9c5013f984cae310275ff067a\',\'\',16,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>') :
			'') .
	'
	' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'exec', null),true) == 'noisette_add')) ?' ' :''))))!=='' ?
			($t2 . 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/hierarchie/noisette_add') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/noizetier/prive/squelettes/hierarchie/noizetier_page.html\',\'html_2eca74b9c5013f984cae310275ff067a\',\'\',17,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>') :
			'') .
	'
	' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'exec', null),true) == 'noizetier_page_edit')) ?' ' :''))))!=='' ?
			($t2 . 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/hierarchie/noizetier_page_edit') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/noizetier/prive/squelettes/hierarchie/noizetier_page.html\',\'html_2eca74b9c5013f984cae310275ff067a\',\'\',18,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>') :
			'') .
	'
'))) .
'
');

	return analyse_resultat_skel('html_2eca74b9c5013f984cae310275ff067a', $Cache, $page, '../plugins/noizetier/prive/squelettes/hierarchie/noizetier_page.html');
}
?>
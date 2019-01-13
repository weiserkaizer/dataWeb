<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/sigles_lien.html
 * Date :      Thu, 26 Jul 2018 13:23:58 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:13 GMT
 * Boucles :   _Dictionnaire
 */ 

function BOUCLE_Dictionnairehtml_abcdca707d6cfe2c797129bd7d2aed06(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'definitions';
		$command['id'] = '_Dictionnaire';
		$command['from'] = array('definitions' => 'spip_definitions');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
		$command['orderby'] = array();
		$command['where'] = 
			array(
			array('=', 'definitions.statut', "'publie'"), 
			array('=', 'definitions.type', "'abbr'"));
		$command['join'] = array();
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
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/sigles_lien.html','html_abcdca707d6cfe2c797129bd7d2aed06','_Dictionnaire',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('definition:bulledaide_definitions');
	$l2 = _T('definition:titre_definitions');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
<li class="menu_lien_sigles">' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'template', null),true) == 'Sigles') ? '<strong>':'')) .
'<a href="' .
interdire_scripts(generer_url_public('sigles', '')) .
'" title="' .
$l1 .
'">' .
$l2 .
'</a>' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'template', null),true) == 'Sigles') ? '</strong>':'')) .
'</li>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_Dictionnaire @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/sigles_lien.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/sigles_lien.html
// Temps de compilation total: 4.120 ms
//

function html_abcdca707d6cfe2c797129bd7d2aed06($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_Dictionnairehtml_abcdca707d6cfe2c797129bd7d2aed06($Cache, $Pile, $doublons, $Numrows, $SP) .
'
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_abcdca707d6cfe2c797129bd7d2aed06', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/sigles_lien.html');
}
?>
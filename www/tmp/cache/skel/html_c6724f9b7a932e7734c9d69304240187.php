<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/logoextra.html
 * Date :      Thu, 26 Jul 2018 13:23:57 GMT
 * Compile :   Sat, 11 Aug 2018 14:48:53 GMT
 * Boucles :   _LogoExtra, _RubriqueAvecLogo
 */ 

function BOUCLE_LogoExtrahtml_c6724f9b7a932e7734c9d69304240187(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_LogoExtra';
		$command['from'] = array('mots' => 'spip_mots','L1' => 'spip_mots_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rand() AS hasard",
		"mots.id_mot",
		"mots.texte");
		$command['orderby'] = array('hasard');
		$command['join'] = array('L1' => array('mots','id_mot'));
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'L1.id_objet', sql_quote($Pile[$SP]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'L1.objet', sql_quote('rubrique')), 
			array('=', 'mots.type', "'_LogosExtra'"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/logoextra.html','html_c6724f9b7a932e7734c9d69304240187','_LogoExtra',2,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
<style type="text/css">
/*<![CDATA[*/
#extra {
	background-image: url(' .
(($t1 = strval(extraire_attribut(
((!is_array($l = quete_logo('id_mot', 'on', $Pile[$SP]['id_mot'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'src')))!=='' ?
		('/' . $t1) :
		'') .
');
	background-repeat: no-repeat;
	background-position: bottom right !important;
}' .
(($t1 = strval(extraire_attribut(
((!is_array($l = quete_logo('id_mot', 'off', $Pile[$SP]['id_mot'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'src')))!=='' ?
		('
#content {
	background-image: url(/' . $t1 . (	');
	background-repeat: no-repeat;
	background-position: ' .
	interdire_scripts(((($a = propre($Pile[$SP]['texte'], $connect, $Pile[0])) OR (is_string($a) AND strlen($a))) ? $a : 'top right')) .
	';
}')) :
		'') .
'
/*]]>*/
</style>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_LogoExtra @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/logoextra.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_RubriqueAvecLogohtml_c6724f9b7a932e7734c9d69304240187(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!($id_rubrique = intval(@$Pile[0]['id_rubrique'])))
		return '';
	include_spip('inc/rubriques');
	$hierarchie = calcul_hierarchie_in($id_rubrique,true);
	if (!$hierarchie) return "";
	
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_RubriqueAvecLogo';
		$command['from'] = array('rubriques' => 'spip_rubriques','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("rubriques.id_rubrique");
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.lang",
		"rubriques.titre");
		$command['join'] = array('L1' => array('rubriques','id_objet','id_rubrique','L1.objet='.sql_quote('rubrique')), 'L2' => array('L1','id_mot'));
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['orderby'] = array("FIELD(rubriques.id_rubrique, $hierarchie) DESC");
	$command['where'] = 
			array(
			array('=', 'L2.type', "'_LogosExtra'"), 
			array('IN', 'rubriques.id_rubrique', "($hierarchie)"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/logoextra.html','html_c6724f9b7a932e7734c9d69304240187','_RubriqueAvecLogo',1,$GLOBALS['spip_lang'])
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
BOUCLE_LogoExtrahtml_c6724f9b7a932e7734c9d69304240187($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_RubriqueAvecLogo @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/logoextra.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/logoextra.html
// Temps de compilation total: 8.841 ms
//

function html_c6724f9b7a932e7734c9d69304240187($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_RubriqueAvecLogohtml_c6724f9b7a932e7734c9d69304240187($Cache, $Pile, $doublons, $Numrows, $SP) .
'
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_c6724f9b7a932e7734c9d69304240187', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/logoextra.html');
}
?>
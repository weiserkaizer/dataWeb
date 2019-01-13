<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/fondpage.html
 * Date :      Thu, 26 Jul 2018 13:23:57 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:04 GMT
 * Boucles :   _ExclureBannieresRubriques, _FondPage, _FondPageTemplate, _LogoPage, _FondPageRubrique
 */ 

function BOUCLE_ExclureBannieresRubriqueshtml_b7b536a4be6bbf25b7fa691ab131335c(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_ExclureBannieresRubriques';
		$command['from'] = array('rubriques' => 'spip_rubriques','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("rubriques.id_rubrique",
		"id_mot");
		$command['select'] = array("id_mot",
		"L1.id_mot",
		"rubriques.lang",
		"rubriques.titre");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'L2.type', "'_FondPage'"));
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
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/fondpage.html','html_b7b536a4be6bbf25b7fa691ab131335c','_ExclureBannieresRubriques',24,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= ((unique($Pile[$SP]['id_mot']))  ?
		(' ' . vide($Pile['vars'][$_zzz=(string)'ExclureBannieresRubriques'] = filtre_push(table_valeur($Pile["vars"], (string)'ExclureBannieresRubriques', null),$Pile[$SP]['id_mot']))) :
		'');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_ExclureBannieresRubriques @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/fondpage.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_FondPagehtml_b7b536a4be6bbf25b7fa691ab131335c(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (table_valeur($Pile["vars"], (string)'ExclureBannieresRubriques', null)))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_FondPage';
		$command['from'] = array('mots' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("mots.id_mot");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'mots.type', "'_FondPage'"), 
			array('=', 'mots.descriptif', "''"), sql_in('mots.id_mot',sql_quote($in),'NOT'));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/fondpage.html','html_b7b536a4be6bbf25b7fa691ab131335c','_FondPage',25,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
<?php
$fonds[] = array(
	\'fond\' => \'' .
url_absolue(timestamp(extraire_attribut(filtrer('image_graver', filtrer('image_reduire',
((!is_array($l = quete_logo('id_mot', 'on', $Pile[$SP]['id_mot'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'1920','0')),'src'))) .
'\',
	\'couleur\' => \'' .
(($t1 = strval(filtrer('couleur_extraire',filtrer('image_graver', filtrer('image_reduire',
((!is_array($l = quete_logo('id_mot', 'on', $Pile[$SP]['id_mot'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'30','0')),'15','5')))!=='' ?
		('#' . $t1) :
		'') .
'\',
	\'hachures\' => \'' .
url_absolue(timestamp(extraire_attribut(
((!is_array($l = quete_logo('id_mot', 'off', $Pile[$SP]['id_mot'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'src'))) .
'\'
	);
?>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_FondPage @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/fondpage.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_FondPageTemplatehtml_b7b536a4be6bbf25b7fa691ab131335c(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_FondPageTemplate';
		$command['from'] = array('mots' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("mots.id_mot");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'mots.type', "'_FondPage'"), 
			array('NOT', 
			array('=', 'mots.descriptif', "''")), 
			array('=', 'mots.descriptif', sql_quote(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'template', null),true)), '', 'text NOT NULL')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/fondpage.html','html_b7b536a4be6bbf25b7fa691ab131335c','_FondPageTemplate',15,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
<?php
$fonds[] = array(
	\'fond\' => \'' .
url_absolue(timestamp(extraire_attribut(filtrer('image_graver', filtrer('image_reduire',
((!is_array($l = quete_logo('id_mot', 'on', $Pile[$SP]['id_mot'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'1920','0')),'src'))) .
'\',
	\'couleur\' => \'' .
(($t1 = strval(filtrer('couleur_extraire',filtrer('image_graver', filtrer('image_reduire',
((!is_array($l = quete_logo('id_mot', 'on', $Pile[$SP]['id_mot'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'30','0')),'15','5')))!=='' ?
		('#' . $t1) :
		'') .
'\',
	\'hachures\' => \'' .
url_absolue(timestamp(extraire_attribut(
((!is_array($l = quete_logo('id_mot', 'off', $Pile[$SP]['id_mot'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'src'))) .
'\'
	);
?>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_FondPageTemplate @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/fondpage.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_LogoPagehtml_b7b536a4be6bbf25b7fa691ab131335c(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_LogoPage';
		$command['from'] = array('mots' => 'spip_mots','L1' => 'spip_mots_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("mots.id_mot");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('mots','id_mot'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'L1.id_objet', sql_quote($Pile[$SP]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'L1.objet', sql_quote('rubrique')), 
			array('=', 'mots.type', "'_FondPage'"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/fondpage.html','html_b7b536a4be6bbf25b7fa691ab131335c','_LogoPage',5,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
<?php
$fonds[] = array(
	\'fond\' => \'' .
url_absolue(timestamp(extraire_attribut(filtrer('image_graver', filtrer('image_reduire',
((!is_array($l = quete_logo('id_mot', 'on', $Pile[$SP]['id_mot'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'1920','0')),'src'))) .
'\',
	\'couleur\' => \'' .
(($t1 = strval(filtrer('couleur_extraire',filtrer('image_graver', filtrer('image_reduire',
((!is_array($l = quete_logo('id_mot', 'on', $Pile[$SP]['id_mot'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'30','0')),'15','5')))!=='' ?
		('#' . $t1) :
		'') .
'\',
	\'hachures\' => \'' .
url_absolue(timestamp(extraire_attribut(
((!is_array($l = quete_logo('id_mot', 'off', $Pile[$SP]['id_mot'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'src'))) .
'\'
	);
?>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_LogoPage @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/fondpage.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_FondPageRubriquehtml_b7b536a4be6bbf25b7fa691ab131335c(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

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
		$command['id'] = '_FondPageRubrique';
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
			array('=', 'L2.type', "'_FondPage'"), 
			array('IN', 'rubriques.id_rubrique', "($hierarchie)"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/fondpage.html','html_b7b536a4be6bbf25b7fa691ab131335c','_FondPageRubrique',4,$GLOBALS['spip_lang'])
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
BOUCLE_LogoPagehtml_b7b536a4be6bbf25b7fa691ab131335c($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_FondPageRubrique @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/fondpage.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/fondpage.html
// Temps de compilation total: 33.512 ms
//

function html_b7b536a4be6bbf25b7fa691ab131335c($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<?php
	$fonds= array();
?>
' .
(($t1 = BOUCLE_FondPageRubriquehtml_b7b536a4be6bbf25b7fa691ab131335c($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
' .
	(($t2 = BOUCLE_FondPageTemplatehtml_b7b536a4be6bbf25b7fa691ab131335c($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
			$t2 :
			((	'
' .
		vide($Pile['vars'][$_zzz=(string)'ExclureBannieresRubriques'] = array()) .
		BOUCLE_ExclureBannieresRubriqueshtml_b7b536a4be6bbf25b7fa691ab131335c($Cache, $Pile, $doublons, $Numrows, $SP) .
		'
' .
		BOUCLE_FondPagehtml_b7b536a4be6bbf25b7fa691ab131335c($Cache, $Pile, $doublons, $Numrows, $SP))))))) .
'
<?php
if (count($fonds) > 0) {
$fond = $fonds[mt_rand(0, count($fonds) - 1)];;
if ($fond[\'fond\']!=\'\') {
?><style type="text/css">
/*<![CDATA[*/
@media only screen and (min-width: ' .
interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurconteneur','960',false):'')) .
'px) {
html {
	background-color:<?php echo($fond[\'couleur\']); ?>;
	background-image:url("<?php echo($fond[\'fond\']); ?>");
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-position: center; 
    -webkit-background-size: cover; /* pour Chrome et Safari */
    -moz-background-size: cover; /* pour Firefox */
    -o-background-size: cover; /* pour Opera */
    background-size: cover; /* version standardisée */
}
<?php 
if ($fond[\'hachures\']!=\'\') { ?>/* Combinaison de http://www.dreevoo.com/content.php?id=2270 et https://gist.github.com/omurphy27/5243251 avec http://www.patternify.com/ */
html:after { background: url("<?php echo($fond[\'hachures\']); ?>") center repeat;
	content: "";
	position: fixed;
	bottom: 0;
	left: 0;
	right: 0;
	top: 0;
	opacity: 0.5;
	z-index: -2;
}<?php } ?>
}
/*]]>*/
</style><?php }
} ?>
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_b7b536a4be6bbf25b7fa691ab131335c', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/fondpage.html');
}
?>
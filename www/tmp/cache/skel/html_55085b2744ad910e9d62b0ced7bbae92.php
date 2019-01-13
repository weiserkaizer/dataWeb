<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/headerbanner.html
 * Date :      Thu, 26 Jul 2018 13:23:57 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:03 GMT
 * Boucles :   _ExclureBannieresRubriques, _HeaderBanner, _HeaderBannerTemplate, _LogoHeader, _HeaderBannerRubrique
 */ 

function BOUCLE_ExclureBannieresRubriqueshtml_55085b2744ad910e9d62b0ced7bbae92(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

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
			array('=', 'L2.type', "'_HeaderBanner'"));
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
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/headerbanner.html','html_55085b2744ad910e9d62b0ced7bbae92','_ExclureBannieresRubriques',27,$GLOBALS['spip_lang'])
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
		spip_log(intval(1000*$timer)."ms BOUCLE_ExclureBannieresRubriques @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/headerbanner.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_HeaderBannerhtml_55085b2744ad910e9d62b0ced7bbae92(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (table_valeur($Pile["vars"], (string)'ExclureBannieresRubriques', null)))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_HeaderBanner';
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
			array('=', 'mots.type', "'_HeaderBanner'"), 
			array('=', 'mots.descriptif', "''"), sql_in('mots.id_mot',sql_quote($in),'NOT'));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/headerbanner.html','html_55085b2744ad910e9d62b0ced7bbae92','_HeaderBanner',28,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
<?php
$bannieres[] = array(
	\'banniere\' => \'' .
url_absolue(timestamp(extraire_attribut(filtrer('image_graver', filtrer('image_reduire',
((!is_array($l = quete_logo('id_mot', 'on', $Pile[$SP]['id_mot'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'1920','0')),'src'))) .
'\',
	\'hauteur\' => \'' .
hauteur(filtrer('image_graver', filtrer('image_reduire',
((!is_array($l = quete_logo('id_mot', 'on', $Pile[$SP]['id_mot'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'1920','0'))) .
'\',
	\'hauteurrelative\' => \'' .
mult(div(hauteur(filtrer('image_graver', filtrer('image_reduire',
((!is_array($l = quete_logo('id_mot', 'on', $Pile[$SP]['id_mot'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'1920','0'))),interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurconteneur','960',false):''))),'100') .
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
		spip_log(intval(1000*$timer)."ms BOUCLE_HeaderBanner @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/headerbanner.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_HeaderBannerTemplatehtml_55085b2744ad910e9d62b0ced7bbae92(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_HeaderBannerTemplate';
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
			array('=', 'mots.type', "'_HeaderBanner'"), 
			array('NOT', 
			array('=', 'mots.descriptif', "''")), 
			array('=', 'mots.descriptif', sql_quote(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'template', null),true)), '', 'text NOT NULL')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/headerbanner.html','html_55085b2744ad910e9d62b0ced7bbae92','_HeaderBannerTemplate',17,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
<?php
$bannieres[] = array(
	\'banniere\' => \'' .
url_absolue(timestamp(extraire_attribut(filtrer('image_graver', filtrer('image_reduire',
((!is_array($l = quete_logo('id_mot', 'on', $Pile[$SP]['id_mot'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'1920','0')),'src'))) .
'\',
	\'hauteur\' => \'' .
hauteur(filtrer('image_graver', filtrer('image_reduire',
((!is_array($l = quete_logo('id_mot', 'on', $Pile[$SP]['id_mot'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'1920','0'))) .
'\',
	\'hauteurrelative\' => \'' .
mult(div(hauteur(filtrer('image_graver', filtrer('image_reduire',
((!is_array($l = quete_logo('id_mot', 'on', $Pile[$SP]['id_mot'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'1920','0'))),interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurconteneur','960',false):''))),'100') .
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
		spip_log(intval(1000*$timer)."ms BOUCLE_HeaderBannerTemplate @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/headerbanner.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_LogoHeaderhtml_55085b2744ad910e9d62b0ced7bbae92(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_LogoHeader';
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
			array('=', 'mots.type', "'_HeaderBanner'"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/headerbanner.html','html_55085b2744ad910e9d62b0ced7bbae92','_LogoHeader',6,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
<?php
$bannieres[] = array(
	\'banniere\' => \'' .
url_absolue(timestamp(extraire_attribut(filtrer('image_graver', filtrer('image_reduire',
((!is_array($l = quete_logo('id_mot', 'on', $Pile[$SP]['id_mot'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'1920','0')),'src'))) .
'\',
	\'hauteur\' => \'' .
hauteur(filtrer('image_graver', filtrer('image_reduire',
((!is_array($l = quete_logo('id_mot', 'on', $Pile[$SP]['id_mot'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'1920','0'))) .
'\',
	\'hauteurrelative\' => \'' .
mult(div(hauteur(filtrer('image_graver', filtrer('image_reduire',
((!is_array($l = quete_logo('id_mot', 'on', $Pile[$SP]['id_mot'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'1920','0'))),interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurconteneur','960',false):''))),'100') .
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
		spip_log(intval(1000*$timer)."ms BOUCLE_LogoHeader @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/headerbanner.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_HeaderBannerRubriquehtml_55085b2744ad910e9d62b0ced7bbae92(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

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
		$command['id'] = '_HeaderBannerRubrique';
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
			array('=', 'L2.type', "'_HeaderBanner'"), 
			array('IN', 'rubriques.id_rubrique', "($hierarchie)"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/headerbanner.html','html_55085b2744ad910e9d62b0ced7bbae92','_HeaderBannerRubrique',5,$GLOBALS['spip_lang'])
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
BOUCLE_LogoHeaderhtml_55085b2744ad910e9d62b0ced7bbae92($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_HeaderBannerRubrique @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/headerbanner.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/headerbanner.html
// Temps de compilation total: 48.505 ms
//

function html_55085b2744ad910e9d62b0ced7bbae92($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][$_zzz=(string)'LargeurContaineur'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurconteneur','960',false):''))) .
'<?php
	$bannieres= array();
?>
' .
(($t1 = BOUCLE_HeaderBannerRubriquehtml_55085b2744ad910e9d62b0ced7bbae92($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
' .
	(($t2 = BOUCLE_HeaderBannerTemplatehtml_55085b2744ad910e9d62b0ced7bbae92($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
			$t2 :
			((	'
' .
		vide($Pile['vars'][$_zzz=(string)'ExclureBannieresRubriques'] = array()) .
		BOUCLE_ExclureBannieresRubriqueshtml_55085b2744ad910e9d62b0ced7bbae92($Cache, $Pile, $doublons, $Numrows, $SP) .
		'
' .
		BOUCLE_HeaderBannerhtml_55085b2744ad910e9d62b0ced7bbae92($Cache, $Pile, $doublons, $Numrows, $SP))))))) .
'
<?php
if (count($bannieres) > 0) {
$banniere = $bannieres[mt_rand(0, count($bannieres) - 1)];;
if ($banniere[\'banniere\']!=\'\') {
?><style type="text/css">
/*<![CDATA[*/
#header { position: relative; }
#header:before {
	background-image: <?php if ($banniere[\'hachures\']!=\'\') { ?>url("<?php echo($banniere[\'hachures\']); ?>"), <?php } ?>url("<?php echo($banniere[\'banniere\']); ?>");
	background-repeat: <?php if ($banniere[\'hachures\']!=\'\') { ?>repeat, <?php } ?>no-repeat;
	background-position-x: center;
	display: block;
	content: "";
	width: 100%;
	background-size: <?php if ($banniere[\'hachures\']!=\'\') { ?>initial, <?php } ?>cover;
	<?php if(' .
interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/hauteurbannierre','0',false):'')) .
'==0){ ?>
	padding-top: <?php echo($banniere[\'hauteurrelative\']); ?>%;
	<?php } ?>
}
@media screen and (min-width:' .
table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
'px) {
	#header:before {
		<?php if(' .
interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/hauteurbannierre','0',false):'')) .
'==0){ ?>
		padding-top: <?php echo($banniere[\'hauteurrelative\']); ?>%;
		<?php } ?>
		' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs/hauteurbannierre','0',false):'') == '0')) ?'' :' '))))!=='' ?
		($t1 . (	'
		padding-top: ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/hauteurbannierre','0',false):'')) .
	'px;
		')) :
		'') .
'
	}
}
#headerbackground {
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
}
<?php if(' .
interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/hauteurbannierre','0',false):'')) .
'==0){ ?>
#header_inner{ 
	position:relative;
	margin-top: -<?php echo($banniere[\'hauteurrelative\']); ?>%; 
	min-height: <?php echo($banniere[\'hauteur\']); ?>px;
}
<?php } ?>
' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs/hauteurbannierre','0',false):'') == '0')) ?'' :' '))))!=='' ?
		($t1 . (	' 
#header_inner { 
	position:relative;
	min-height: ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/hauteurbannierre',null,false):'')) .
	'px;
	height: ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/hauteurbannierre',null,false):'')) .
	'px;
	margin-top: -' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/hauteurbannierre',null,false):'')) .
	'px;
}
')) :
		'') .
'

' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs/afficher_titre','visible',false):'') == 'invisible')) ?' ' :''))))!=='' ?
		($t1 . '
#header h1 { position:absolute !important; overflow:hidden !important; top:-2000px !important; left:-2000px !important; height:0 !important; width:0 !important; }
') :
		'') .
'
/*]]>*/
</style><?php }
} ?>
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_55085b2744ad910e9d62b0ced7bbae92', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/headerbanner.html');
}
?>
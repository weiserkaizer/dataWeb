<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/stylessoyezcreateurs.css.html
 * Date :      Thu, 26 Jul 2018 13:23:59 GMT
 * Compile :   Sat, 11 Aug 2018 14:48:52 GMT
 * Boucles :   _HeaderBanner
 */ 

function BOUCLE_HeaderBannerhtml_2bc49e1c46721810c1dfb9822505203e(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_HeaderBanner';
		$command['from'] = array('mots' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
		$command['orderby'] = array();
		$command['where'] = 
			array(
			array('=', 'mots.type', "'_HeaderBanner'"));
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
		array('plugins/auto/soyezcreateurs/v4.3.16/stylessoyezcreateurs.css.html','html_2bc49e1c46721810c1dfb9822505203e','_HeaderBanner',539,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_HeaderBanner']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat(' ', $Numrows['_HeaderBanner']['total']);
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_HeaderBanner @ plugins/auto/soyezcreateurs/v4.3.16/stylessoyezcreateurs.css.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/stylessoyezcreateurs.css.html
// Temps de compilation total: 171.052 ms
//

function html_2bc49e1c46721810c1dfb9822505203e($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header("X-Spip-Cache: 86400"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=86400"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>' .
'<'.'?php header(' . _q('Content-Type: text/css; charset=iso-8859-15') . '); ?'.'>' .
'<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>
' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("comments", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . filtre_compacte_dist(charge_scripts(url_absolue_css(find_in_path('comments.css')),false),'css')) :
		'') .
'


*, *:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
body { background: transparent; }

/* layout */

' .
vide($Pile['vars'][$_zzz=(string)'LargeurContaineur'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurconteneur','960',false):''))) .
vide($Pile['vars'][$_zzz=(string)'LargeurMenuGauche'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurmenugauche','180',false):''))) .
vide($Pile['vars'][$_zzz=(string)'LargeurMenuDroit'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurmenudroit','180',false):''))) .
interdire_scripts((((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurcolonnes','0',false):'') == '0') ? (	vide($Pile['vars'][$_zzz=(string)'Largeurcontent_central'] = moins(floor(div(moins(table_valeur($Pile["vars"], (string)'LargeurContaineur', null),table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null)),'3')),'24')) .
	'
	'):(	vide($Pile['vars'][$_zzz=(string)'Largeurcontent_central'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurcolonnes',null,false):''))) .
	'
	'))) .
'
' .
interdire_scripts((((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurvideoaccueil','0',false):'') == '0') ? (	vide($Pile['vars'][$_zzz=(string)'LargeurArretSurImg'] = moins(table_valeur($Pile["vars"], (string)'Largeurcontent_central', null),'2')) .
	'
	'):(	vide($Pile['vars'][$_zzz=(string)'LargeurArretSurImg'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurvideoaccueil',null,false):''))) .
	'
	'))) .
'
' .
interdire_scripts((((include_spip('inc/config')?lire_config('soyezcreateurs_layout/hauteurvideoaccueil','0',false):'') == '0') ? (	vide($Pile['vars'][$_zzz=(string)'HauteurArretSurImg'] = floor(div(table_valeur($Pile["vars"], (string)'LargeurArretSurImg', null),'1.245'))) .
	'
	'):(	vide($Pile['vars'][$_zzz=(string)'HauteurArretSurImg'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/hauteurvideoaccueil',null,false):''))) .
	'
	'))) .
'
' .
vide($Pile['vars'][$_zzz=(string)'margescolonnes'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/margescolonnes','12',false):''))) .
vide($Pile['vars'][$_zzz=(string)'largeurtotale'] = mult(plus(plus(table_valeur($Pile["vars"], (string)'Largeurcontent_central', null),table_valeur($Pile["vars"], (string)'margescolonnes', null)),table_valeur($Pile["vars"], (string)'margescolonnes', null)),'3')) .
'
' .
vide($Pile['vars'][$_zzz=(string)'largeurMenu'] = moins(plus(table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null),table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null)),'20')) .
'

' .
vide($Pile['vars'][$_zzz=(string)'c_body_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/body_bk','#eceded',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_triadea'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/triadea','#be1621',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_triadeb'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/triadeb','#129b9b',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_triadec'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/triadec','#c38f06',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_logo_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/logo_bk','transparent',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_header'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/header','#262626',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_header_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/header_bk','#ffffff',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_outils'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/outils',interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/header','#262626',false):'')),false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_fildariane'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/fildariane',interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/container','#02265a',false):'')),false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_fildariane_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/fildariane_bk',interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/container_bk','#02265a',false):'')),false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_fildarianehome'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/fildarianehome','#EA5044',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_chevrons'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/fildarianehome_bk','#EA5044',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_footer'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/footer','#595959',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_footer_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/footer_bk','#ffffff',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_navigation'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/navigation','#017ca5',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_navigation_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/navigation_bk','#ffffff',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_menuhaut'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/menuhaut','#017ca5',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_menuhaut_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/menuhaut_bk','#ffffff',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_menubas'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/menubase','#017ca5',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_menubas_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/menubas_bk','#ffffff',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_extra'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/extra','#017ca5',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_extra_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/extra_bk','#ffffff',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_datemajsite'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/datemajsite','#595959',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_datemajsite_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/datemajsite_bk','#ffffff',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_menu_a'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/menu_a','#005e7a',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_menu_a_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/menu_a_bk','#ffffff',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_menu_a_hover'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/menu_a_hover','#ffffff',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_menu_a_hover_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/menu_a_hover_bk','#0b7899',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_menu_a_active'] = (	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/menu_a_active','#ffffff',false):'')) .
	'!important')) .
vide($Pile['vars'][$_zzz=(string)'c_menu_a_active_bk'] = (	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/menu_a_active_bk','#0b7899',false):'')) .
	'!important')) .
vide($Pile['vars'][$_zzz=(string)'c_menu_a_strong'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/menu_a_strong','#ffffff',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_menu_a_strong_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/menu_a_strong_bk','#0b7899',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_container'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/container','#02265a',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_container_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/container_bk','#f6f6f6',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_fildariane'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/fildariane','#02265a',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_fildariane_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/fildariane_bk','#f6f6f6',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_titraille'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/titraille','#005e7a',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_titraille_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/titraille_bk','#f6f6f6',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_titraille_ssniveaux'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/titraille_ssniveaux','#005e7a',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_titraille_ssniveaux_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/titraille_ssniveaux_bk','#f6f6f6',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_link'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/link','#017ca5',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_visited'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/visited','#595959',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_hover'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/hover','#02265a',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_active'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/active','#595959',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_cadrestexte'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/cadrestexte','#02265a',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_cadrestexte_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/cadrestexte_bk','#eceded',false):''))) .
vide($Pile['vars'][$_zzz=(string)'f_navigation'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/fontsnavigation','Verdana, Arial, Geneva, sans-serif',false):''))) .
vide($Pile['vars'][$_zzz=(string)'f_content'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/fontscontent','Verdana, Arial, Geneva, sans-serif',false):''))) .
vide($Pile['vars'][$_zzz=(string)'d_body_degrade'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/body_degrade','on',false):''))) .
vide($Pile['vars'][$_zzz=(string)'d_footer_degrade'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/footer_degrade','on',false):''))) .
vide($Pile['vars'][$_zzz=(string)'d_titraille_degrade'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/titraille_degrade','on',false):''))) .
vide($Pile['vars'][$_zzz=(string)'d_menuhaut_degrade'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/menuhaut_degrade','on',false):''))) .
vide($Pile['vars'][$_zzz=(string)'d_menubas_degrade'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/menubas_degrade','on',false):''))) .
vide($Pile['vars'][$_zzz=(string)'d_cartouche_degrade'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/cartouche_degrade','on',false):''))) .
vide($Pile['vars'][$_zzz=(string)'d_cadreinfo_degrade'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/cadreinfo_degrade','on',false):''))) .
vide($Pile['vars'][$_zzz=(string)'d_citations_degrade'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/citations_degrade','on',false):''))) .
'/** Polices pour avoir des pictos utilisables */
@font-face {
  font-family: \'picto-soyezcreateurs\';
  src:  url(\'' .
timestamp(find_in_path('fonts/picto-soyezcreateurs.eot')) .
'\');
  src:  url(\'' .
timestamp(find_in_path('fonts/picto-soyezcreateurs.eot')) .
'#iefix\') format(\'embedded-opentype\'),
    url(\'' .
timestamp(find_in_path('fonts/picto-soyezcreateurs.woff2')) .
'\') format(\'woff2\'),
    url(\'' .
timestamp(find_in_path('fonts/picto-soyezcreateurs.woff')) .
'\') format(\'woff\'),
    url(\'' .
timestamp(find_in_path('fonts/picto-soyezcreateurs.ttf')) .
'\') format(\'truetype\'),
    url(\'' .
timestamp(find_in_path('fonts/picto-soyezcreateurs.svg')) .
'#picto-soyezcreateurs\') format(\'svg\');
  font-weight: normal;
  font-style: normal;
}

[class^="icon-"], [class*=" icon-"] {
  /* use !important to prevent issues with browser extensions that change fonts */
  font-family: \'picto-soyezcreateurs\' !important;
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;

  /* Better Font Rendering =========== */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.icon-chevron-thin-right:before {
  content: "\\276D";
}
.icon-chevron-thin-left:before {
  content: "\\276C";
}
.icon-menu:before {
  content: "\\2630";
}
.icon-phone:before {
  content: "\\260E";
}
.icon-location:before {
  content: "\\2316";
}
.icon-information:before {
  content: "\\24D8";
}
.icon-calendar:before {
  content: "\\1F5D3";
}
.icon-envelope:before {
  content: "\\2709";
}
.icon-paperplane:before {
  content: "\\2708";
}
.icon-home:before {
  content: "\\2302";
}
.icon-search:before {
  content: "\\1F50D";
}
.icon-arrow-right2:before {
  content: "\\279C";
}
.icon-share2:before {
  content: "\\21C4";
}
.icon-language:before {
  content: "\\1F5FA";
}
.icon-lock:before {
  content: "\\1F512";
}
.icon-fax:before {
  content: "\\1F5B7";
}
.icon-partenaires:before {
  content: "\\1F91D";
}

.triadeA {
	background-color: ' .
table_valeur($Pile["vars"], (string)'c_triadea', null) .
';
	color: ' .
((filtrer('couleur_extreme',table_valeur($Pile["vars"], (string)'c_triadea', null)) == '000000') ? '#FFFFFF':'#000000') .
';
}
.texte-triadeA {
	color:' .
table_valeur($Pile["vars"], (string)'c_triadea', null) .
';
}
.triadeB {
	background-color: ' .
table_valeur($Pile["vars"], (string)'c_triadeb', null) .
';
	color: ' .
((filtrer('couleur_extreme',table_valeur($Pile["vars"], (string)'c_triadeb', null)) == '000000') ? '#FFFFFF':'#000000') .
';
}
.texte-triadeB {
	color:' .
table_valeur($Pile["vars"], (string)'c_triadeb', null) .
';
}
.triadeC {
	background-color: ' .
table_valeur($Pile["vars"], (string)'c_triadec', null) .
';
	color: ' .
((filtrer('couleur_extreme',table_valeur($Pile["vars"], (string)'c_triadec', null)) == '000000') ? '#FFFFFF':'#000000') .
';
}
.texte-triadeC {
	color:' .
table_valeur($Pile["vars"], (string)'c_triadec', null) .
';
}


/*************** DEFAULT DEFINITION */
html, body { padding: 0; margin: 0; font-family: ' .
table_valeur($Pile["vars"], (string)'f_content', null) .
'; }
html { background-color: ' .
table_valeur($Pile["vars"], (string)'c_body_bk', null) .
'; ' .
((((((table_valeur($Pile["vars"], (string)'c_body_bk', null) != 'transparent')) ?' ' :'')) AND (((table_valeur($Pile["vars"], (string)'d_body_degrade', null)) ?'' :' ')))  ?
		(' ' . (	' background: ' .
	table_valeur($Pile["vars"], (string)'c_body_bk', null) .
	(($t2 = strval(filtre_embarque_fichier(extraire_attribut(filtrer('image_graver', filtrer('image_aplatir',filtrer('image_sepia',find_in_path('images/fond_degrade_fonce_en_haut3.png'),table_valeur($Pile["vars"], (string)'c_body_bk', null)),'jpg')),'src'))))!=='' ?
			(' url(' . $t2 . ') repeat-x top') :
			'') .
	';')) :
		'') .
' color: #' .
filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_body_bk', null),'80') .
'; font-size: ' .
interdire_scripts((((include_spip('inc/config')?lire_config('soyezcreateurs/mode_affichage','communiquant',false):'') == 'portailcognac') ? '100%':'62.7%')) .
'; }
#header, #menuhaut, #navHaute, #navigation, #extra, #footer { font-family: ' .
table_valeur($Pile["vars"], (string)'f_navigation', null) .
'; }
div { margin: 0; padding: 0; border: 0; }
img { z-index: 0; border: none; image-rendering:optimizeQuality; }
p { margin-bottom: 10px; margin-top: 20px; font-size: 1em; text-align: left; }
strong, b { font-weight: bold; }
ol { color: #' .
filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_container', null),'10') .
'; font-size: 1em; list-style-type: decimal; list-style-image: none; }
ul ul, ol ul, ul ol, ol ol { padding-left: 12px; }
/* Suivre les recommandations de http://romy.tetue.net/signaler-les-abreviations - Merci !*/
acronym, abbr { border-bottom: .1em dotted; cursor: help; }
iframe  { border: none; width: 100%;}
a[hreflang]:after { content: ""; }
/* Liens externes */
a.spip_out:after, a.external:after { content: ""; }
a[hreflang].spip_out:after, a[hreflang].external:after { content: ""; }
img { box-sizing: content-box; }
ul.spip { margin-left: 2em; }
ol.spip { margin-left: 2.5em; }
ul.spip ul.spip, ol.spip ol.spip { margin-left: .25em; margin-bottom: 0; margin-top: 0.5em;}
ul.spip li, ol.spip li { margin-bottom: 0.5em; }
.table caption, table.spip caption { border-bottom: none; }

@media print {
 abbr:after, acronym:after { content: " ("attr(title)")"; }
 abbr, acronym {  border-bottom: 0; }
}

/*************** FORMS */


/* Style des formulaires d\'edition
----------------------------------------------- */
#content .formulaire_spip {
	padding:0 10px 0;
	border: 1px solid ' .
table_valeur($Pile["vars"], (string)'c_cadrestexte', null) .
';
	color: ' .
table_valeur($Pile["vars"], (string)'c_cadrestexte', null) .
';
	background-color: ' .
table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null) .
';
	margin: 0 0;
	position:relative; /* pour positionner le ajaxload en automatique */
}

.cadre-formulaire-editer .formulaire_spip { margin-top:0; }
.cadre-formulaire-editer {color: #444; margin-top:1.5em;position:relative;}
.cadre-formulaire-editer.popin {margin-top:0}
.cadre-formulaire-editer .image_loading {position:absolute;right:0;}

.entete-formulaire{ background:white; border:1px solid ' .
table_valeur($Pile["vars"], (string)'c_cadrestexte', null) .
'; border-bottom:0; padding:.5em 10px; overflow:hidden;}
.ie6 .entete-formulaire {zoom:1; /* correction IE6 */}
.formulaire_spip .cadre{border: 1px solid ' .
table_valeur($Pile["vars"], (string)'c_cadrestexte', null) .
';}

/* dans les formulaires de configuration */
h3.titrem {position:relative;}
.formulaire_spip h3.titrem {background-color: ' .
(($t1 = strval(filtrer('couleur_eclaircir',table_valeur($Pile["vars"], (string)'c_cadrestexte', null))))!=='' ?
		('#' . $t1) :
		'') .
';color: #4A4A4A;}

/* ul li -----*/
.formulaire_spip fieldset {padding-left:10px;padding-right:10px;margin-bottom:.25em}
.formulaire_spip .editer-groupe {padding: .25em 0;}
.formulaire_spip .editer-groupe .editer-groupe,.formulaire_spip .fieldset fieldset {margin:0;}
.formulaire_spip .editer-groupe,
.formulaire_spip fieldset,
.formulaire_spip fieldset .editer-groupe,
.formulaire_spip .boutons,
.formulaire_spip .titrem,
.formulaire_spip .legend {margin-left: -10px;margin-right: -10px;}

.formulaire_spip .editer {padding: .5em 10px;clear:both;overflow:hidden;}

/* label -----*/

/* Formulaires alignes a gauche c\'est le par defaut des formulaires de Spip */
.formulaire_spip .editer,
.formulaire_spip .editer.gauche {padding-left:140px;}

.formulaire_spip .editer label,
.formulaire_spip .editer.gauche label {
	color: #444;
	width: 114px;
	float:left;
	margin-left:-130px;
	text-align: left;
	/*vertical-align: top;*/
}
.ie6 .formulaire_spip .editer label,.ie6 .formulaire_spip .editer.gauche label {position:relative;display:inline;}

.formulaire_spip .long_label {padding-left:270px;}
.formulaire_spip .long_label label {width: 250px;margin-left:-260px;}

/* Formulaires avec label en haut */
/* les cas particuliers des edition pleines largeur */
.formulaire_spip .editer_parent,
.formulaire_spip .editer_groupe_mot,
.formulaire_spip .editer_descriptif,
.formulaire_spip .editer_chapo,
.formulaire_spip .editer_texte,
.formulaire_spip .editer_ps,
.formulaire_spip .haut,
.formulaire_spip .pleine_largeur { padding-left:10px;}

.formulaire_spip .editer_parent label,
.formulaire_spip .editer_groupe_mot label,
.formulaire_spip .editer_descriptif label,
.formulaire_spip .editer_chapo label,
.formulaire_spip .editer_texte label,
.formulaire_spip .editer_ps label,
.formulaire_spip .haut label,
.formulaire_spip .pleine_largeur label {display: block;float: none;width:auto;margin-left: 0;}

.formulaire_spip .editer.obligatoire label,
.formulaire_spip .editer.obligatoire.gauche label {color: black;font-weight: bold;}

/* cas exotique d\'un label dans une erreur (ie confirmez que vous etes sur ) */
.formulaire_spip .erreur_message label { float:none;display:inline;font-weight:normal;margin-left: 0;}


/* elements du formulaire */
.formulaire_spip input.text,
.formulaire_spip input.email,
.formulaire_spip input.password,
.formulaire_spip textarea,
.formulaire_spip select { font-size:1em;padding: 3px; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box;-ms-box-sizing: border-box; box-sizing: border-box;}

.lte7 .formulaire_spip input.text,
.lte7 .formulaire_spip input.email,
.lte7 .formulaire_spip input.password,
.lte7 .formulaire_spip textarea,
.lte7 .formulaire_spip select { width: 96%;margin:0;display: inline;margin-left:0;}
.lte7 .formulaire_spip textarea {margin-left: 10px;}

.formulaire_spip input.text,
.formulaire_spip input.email,
.formulaire_spip input.password,
.formulaire_spip input.file,
.formulaire_spip select { font-size: inherit;font-family:inherit}
.formulaire_spip textarea {padding: .25em 5px;overflow: auto;font-size: inherit;font-family:inherit;line-height: inherit;}

.formulaire_spip input.placeholder,
.formulaire_spip textarea.placeholder {color:#888;}
.formulaire_spip .editer.obligatoire input.text {font-weight: bold;}


.formulaire_spip .erreur {background-color:#FBE3E4;}
.formulaire_spip .editer .erreur_message {	display: block;color: #8A1F11;font-weight:bold;}
.formulaire_spip .erreur input.text,
.formulaire_spip .erreur input.password,
.formulaire_spip .erreur textarea {border:2px solid #FBC2C4;}

/* sous choix */
.formulaire_spip .choix label {font-weight:normal;text-transform: none;float:none;display:inline;margin-left: 5px;color: #666666;}
.formulaire_spip .choix .radio,
.formulaire_spip .choix .checkbox {width:auto;}

/* reponses succes/erreur */

.formulaire_spip .reponse_formulaire,
.error,.success,.notice,.information {border:2px solid;color:#333;font-weight: normal;padding:.5em 10px;padding-left:40px;min-height:24px;background-repeat:no-repeat;background-position: 2px 5px;margin-bottom:1em;margin-top:1em;}
.formulaire_spip .reponse_formulaire_ok, .success {color: #264409;border-color: #C6D880;background-color:#E6EFC2;background-image:url(' .
interdire_scripts(chemin_image('ok-24.png')) .
');}
.formulaire_spip .reponse_formulaire_erreur, .error {color: #8A1F11;border-color: #FBC2C4;background-color:#FBE3E4;background-image:url(' .
interdire_scripts(chemin_image('erreur-24.png')) .
');}
.notice {color: #514721;border-color: #FFD324;background-color:#FFF6BF;background-image:url(' .
interdire_scripts(chemin_image('warning-24.png')) .
');}
.information {color: #1e556b;border-color: #2f96b4;background-color: #e2f6fd;}

/* Explications */
.formulaire_spip p {}
.formulaire_spip .explication {display:block;padding: 5px;background-color: #e9e9e9;}
.formulaire_spip .editer .explication {margin-bottom: 0;margin-top: 0;}
.formulaire_spip .editer .explication>:last-child {margin-bottom: 0}
.formulaire_spip .editer .explication a {}

/* Remarques importantes */
.formulaire_spip .attention { display: block; margin-bottom: 1em; font-weight: normal; }



.formulaire_spip input.submit,
.formulaire_spip input.reset,
.formulaire_spip input.button {
	width: auto;
}

/* icone d\'aide */
.formulaire_spip .editer .aide {padding-top: 0px;}


/* Fieldset */
.formulaire_spip .editer.fieldset {padding:0;}
.formulaire_spip fieldset {border: 0;width:auto;border-top: 1px solid #ccc;margin-top: .25em;padding-bottom:.25em;}

.formulaire_spip h3.legend,
.formulaire_spip legend {display: block;padding-top: 7px;padding-bottom: 7px;background-color: #eee;color: black;font-weight: normal;padding-left: 10px;padding-right: 5px;margin-bottom:.5em}

.formulaire_spip .editer fieldset label {color: #444444;}

/* boutons */
.formulaire_spip .boutons { margin-bottom:0;clear:both;padding: .5em 10px;text-align: right;background-color: transparent; }

#navigation .formulaire_spip .boutons,
#extra .formulaire_spip .boutons { padding: .25em 5px}

.formulaire_spip .boutons .image_loading {float:none;}
/* Bouton de validation */
input[type="file"] {border: none;background-color: transparent;}
/* Pour IE, qui grossit le bouton submit */
input[type="submit"],input[type="reset"] {font-size: inherit;}

/* Date picker */
#ui-datepicker-div {z-index: 1001 !important;}



.formulaire_spip {-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;position:relative;}
.formulaire_spip h3.titrem {background-color: ' .
table_valeur($Pile["vars"], (string)'c_cadrestexte', null) .
';color: white;}
.formulaire_spip input.text,
.formulaire_spip input.email,
.formulaire_spip input.password,
.formulaire_spip textarea {border: 1px solid #ddd;padding: 5px;/*font-size: 1.1em;*/-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;position:relative;z-index:2;}
.formulaire_spip img.ui-datepicker-trigger {-webkit-border-radius:0px;-moz-border-radius:0px;border-radius:0px;position:relative;}
.formulaire_spip .editer fieldset input.text {border: 1px solid #ddd;}
.formulaire_spip .editer fieldset input.password {border: 1px solid #ddd;}
.formulaire_spip .editer fieldset textarea {border: 1px solid #ddd;}
.formulaire_spip label {color: #666;/*font-size: 90%;line-height: 120%;*/}
.formulaire_spip .editer fieldset label {color: #777;}
.formulaire_spip label[for] {cursor: pointer;}
.formulaire_spip .explication {padding: 5px 10px;font-size: 90%;line-height: 125%;color: #444;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;background-color: #ddd;position:relative;}
.formulaire_spip .explication+.editer-groupe {margin-top:-.5em}
.formulaire_spip .editer .explication {-webkit-border-bottom-left-radius:0px;-moz-border-radius-bottomleft:0px;border-bottom-left-radius:0px;-webkit-border-bottom-right-radius:0px;-moz-border-radius-bottomright:0px;border-bottom-right-radius:0px;}
.formulaire_spip .editer .explication:last-child{-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;}
.formulaire_spip .explication + input.text,
.formulaire_spip .explication + textarea,
.formulaire_spip .explication + input.password,
.formulaire_spip .explication +.choix:first-of-type {margin-top: 0px;-webkit-border-top-left-radius:0px;-moz-border-radius-topleft:0px;border-top-left-radius:0px;-webkit-border-top-right-radius:0px;-moz-border-radius-topright:0px;border-top-right-radius:0px;position:relative;}
.formulaire_spip input.text + .explication,
.formulaire_spip input.email + .explication,
.formulaire_spip textarea + .explication,
.formulaire_spip input.password+.explication,
.formulaire_spip select+.explication,
.formulaire_spip .choix:last-of-type+.explication{-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;-webkit-border-top-left-radius:0px;-moz-border-radius-topleft:0px;border-top-left-radius:0px;-webkit-border-top-right-radius:0px;-moz-border-radius-topright:0px;border-top-right-radius:0px;position: relative}
.formulaire_spip input.text + .explication:before,
.formulaire_spip input.email + .explication:before,
.formulaire_spip textarea + .explication:before,
.formulaire_spip input.password+.explication:before,
.formulaire_spip select+.explication:before,
.formulaire_spip .choix:last-of-type+.explication:before{content:"";display: block;position: absolute;top:-5px;height:5px;width:100%;left:0;background:#ddd;}

.formulaire_spip .choix {background-color: white;padding: 3px 10px;border: 1px solid #ddd;-webkit-border-top-left-radius:5px;-moz-border-radius-topleft:5px;border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topright:5px;border-top-right-radius:5px;border-bottom: 0px}
.formulaire_spip .choix + .choix {padding-top: 0px;border-top: 0px;border-bottom: 0px;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;}
.formulaire_spip .choix + .explication {margin-top: 0px;-webkit-border-top-left-radius:0px;-moz-border-radius-topleft:0px;border-top-left-radius:0px;-webkit-border-top-right-radius:0px;-moz-border-radius-topright:0px;border-top-right-radius:0px;position:relative;}
.formulaire_spip .choix:last-of-type,.formulaire_spip .choix:last-child {-webkit-border-bottom-left-radius:5px;-moz-border-radius-bottomleft:5px;border-bottom-left-radius:5px;-webkit-border-bottom-right-radius:5px;-moz-border-radius-bottomright:5px;border-bottom-right-radius:5px;border-bottom: 1px solid #ddd;position:relative;}
.formulaire_spip .choix:first-of-type {-webkit-border-top-left-radius:5px;-moz-border-radius-topleft:5px;border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topright:5px;border-top-right-radius:5px;border-top: 1px solid #ddd;position:relative;}
.formulaire_spip span.choix,.formulaire_spip span.choix:first-of-type,.formulaire_spip span.choix:last-of-type,.formulaire_spip span.choix:last-child{display:inline-block;background: transparent;padding: 0;border:0;}
.formulaire_spip .submit,.bouton_action_post .submit {background-color: ' .
table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null) .
';color: #' .
filtrer('couleur_luminance',table_valeur($Pile["vars"], (string)'c_cadrestexte', null),'0.7') .
';-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;border: 0;padding: 3px 7px;font-size: 90%;position:relative;}
.formulaire_spip .submit:hover,.bouton_action_post .submit:hover {background-color: ' .
table_valeur($Pile["vars"], (string)'c_cadrestexte', null) .
';color: white;position:relative;}
.formulaire_spip .submit:focus,.bouton_action_post .submit:focus {background-color: ' .
table_valeur($Pile["vars"], (string)'c_cadrestexte', null) .
';color: white;position:relative;}
.formulaire_spip .submit:active,.bouton_action_post .submit:active {background-color: #' .
filtrer('couleur_luminance',table_valeur($Pile["vars"], (string)'c_cadrestexte', null),'0.7') .
';}
.formulaire_spip .toggle_box_link {-webkit-opacity:0.6;-moz-opacity:0.6;opacity:0.6;filter:alpha(opacity=60);;z-index: 1;font-size: 10px;color: ' .
table_valeur($Pile["vars"], (string)'lien', null) .
';}
.formulaire_spip .toggle_box_link button {font-size: 10px;color: ' .
table_valeur($Pile["vars"], (string)'lien', null) .
';}
.formulaire_spip:hover .toggle_box_link {-webkit-opacity:1.0;-moz-opacity:1.0;opacity:1.0;filter:alpha(opacity=100);}
.formulaire_editer_liens .associer_mot .submit {margin-top:3px;}
.formulaire_editer_logo .editer_logo_on.logo_upload,
.formulaire_editer_logo .editer_logo_off.logo_upload.open {background: #fff;} 
#chemin {}
#chemin .bouton_deplacer {font-size: 10px;color: ' .
table_valeur($Pile["vars"], (string)'lien', null) .
';-webkit-opacity:0.6;-moz-opacity:0.6;opacity:0.6;filter:alpha(opacity=60);}
#chemin:hover .bouton_deplacer {-webkit-opacity:1.0;-moz-opacity:1.0;opacity:1.0;filter:alpha(opacity=100);}
.box, .box .inner  {-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;}
.box .inner .hd  {border-top-left-radius:5px; border-top-right-radius:5px;}
.note {border: 0;}
.box.error,.box.success,.box.notice {border: 0;}

/**************** Recherche par mot clef */
#mots_filtres { padding: 8px; }
#formulaire_recherche_par_mot .searchfield { width: auto; }
#formulaire_recherche_par_mot { float:right; }
#formulaire_recherche_par_mot label { vertical-align:middle; }
#postDetailInfos { float: left; }
#mots_filtres p { margin:0; padding:0; }
a.tags, a.tags:link, a.tags:visited { background: #fff url(' .
filtre_embarque_fichier(find_in_path('images/croix-rouge.gif')) .
') no-repeat 5px center; color: #000; padding:2px; padding-left: 16px; padding-right: 4px; border: 1px solid ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_container_bk', null),'10')))!=='' ?
		('#' . $t1) :
		'') .
';}
a.tags:hover, a.tags:focus, a.tags:active { color: #f00; background-color: #ddd; text-decoration:none; }
a.tags.ajouter, a.tags.ajouter:link, a.tags.ajouter:visited { background: #fff url(' .
filtre_embarque_fichier(find_in_path('images/tags_ajouter.gif')) .
') no-repeat 3px center; display:inline-block; padding:2px; padding-left: 16px; margin:2px 0 4px; padding-right: 4px; }


/*************** LINKS */
a { color: ' .
table_valeur($Pile["vars"], (string)'c_link', null) .
'; font-weight: bold; text-decoration: none; }
a:visited { color: ' .
table_valeur($Pile["vars"], (string)'c_visited', null) .
'; }
a:hover, a:focus { color: ' .
table_valeur($Pile["vars"], (string)'c_hover', null) .
'; text-decoration: underline; }
/* Une idée trouvée sur http://userstyles.org/styles/1183/cursor-indicator */
a[href$=".pdf"]:hover { cursor:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAhCAYAAADK6cvnAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAO1SURBVHjarFfPTxNBFH6zP7qttAVtwZgYEjACBySKJphoTfAfQAwcuIGJ8Z+AcIBw1H8Ab8bEpNGzHIgREmIg9ATqQUkkxqRQpEoLZbcd32zfNtt1u90WXvLlTdmZ/fa9ed+bgYG77ZHvRCg0NhA6oojg4MM4/38acyMTExFMkiTx/Cb9/RiRQxQQpfMmjJsPGTtA94D+foQ4JFKjWUKlzhrxQSEa6zRfgjOYn8UyEakEi5Q1Q1gvpb9tc4YppUe0nwYVUImKiJ/HHpqLdF3PBgIBa7XwNxCnlOZTIjecxE0T2seGYRyqqmoR36FoTwhVsvEiZASxN7+8CK0xRm0R3yfSv4g8yaZY5nMn3LONuxA7ODFWj9CR6mHa2z9EbGq1FiEnoWdI6AzHFz0rzUGOdo+iyyIOaKzX0uE+LYyLCfSCRgUt3hMgKF6SEXvW7ofEh54l0qynRhXbV2eQOOaWBntkAsVisTImU0mPGkUpPMf3cVsBcWeVpkulEhOkbmQzMzO+w52fn79KhWOQTgWKzrIVqdjnNWx6eprXM2uO8PiuPkQ34jIibO2tvXlzCj1jj9KROljf2ABZkkGWLUigyApspjYrc+bm5oT7jJHetm2bSPkJc5FJ2hL++Pi47zROTExAKpVypjZBEjkkueScxxO3F5AYP02+xyrgJoL4kcJr9FszfwM8G3sEiqLA0NBdM2LUM6yurlonjWqXi9t52IEL0lYaW7HIxMtv8Tx8Yxpc4wVIMxU6uG4+LzDZ9IlEopxiTPfapzV7xiy5sFqEVZXUhoS9/AR+sgBE6VEYIztluHdmlKQvRUXIIJqVIG34AMaUZoSP0vUlgj5M45BIKS9VLVZVxSSUsYBEpHWF77B2eqZHMcICRtOCJHL5S8ridXQnsYciOgmj8+pcXncaM5zJsce+qlRE5adFehHyZDIpU5tqQTHvCX3lcnmQFaxELJb861cQGH4IuQ8foZjJgBKPn42QUHUPVXCvZKlc+rmtLWibnAJpoB9+jIwAi0RAD4Vgv6cXhaC6F43VSWqBSPVKcVCHyb59B8FwBApfvoLU2gpdy8twZWEBgpdisLu01Pw1kdpkJUIJyb5PPYHsxjrEZmdB6+uFQHc3ME2D4OAgdL5chIEXz5tKqau9GR2F3PY2XF9chN2VlZoFdC6E5hHV329ixyNtNisQdOv+yrwOXJdmoNLVP4q4QH2ynunUwMUF67hRQolINPJ+/lUoEakZaaOE1v1Vtt1l69Ydwbxq/BNgAOua/yDPR/j0AAAAAElFTkSuQmCC"), pointer; }

a[href$=".doc"]:hover { cursor:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAhCAYAAADK6cvnAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAQKSURBVHjarFdLbFRVGP7uY6bSUpXQIhgk5WHiQoxaYjEyQwgh7GpK7IINRBeocaUbSWxXbUy3mpjAkgQXJi4MJMqCXQtIgE7GoIY0PEqbDu102pl2pjNzX8f/3Pnv5HK986R/8uWc3jnnfvd/fOf8VRBuaR73EHSeWwSTYBMEmjAh/r9MCSOTCwmKqqry93f5eZFQIJQJzmYT9rg/KsoKDXF+nidkmdRql1BvsEd+0Baem7xexQtYM5s1JoowPFKlHcJGIV31rTnGIc1zPi0uIIeLSGxGDt1NpmnmotGot1uOBwkGh9lgcitI3Dahf25ZVjYSiXjEh9jbEuM52dQjVBgyN6l6hN6cvPaIjzDpOmGDZWNX+MIJ0775XsJjWri9EWEg1Mc4t2tM7Gq1FqFgoWdY6ArNt9WttAA52UfsXY6wwnOzlg6XeWOPXMAvaFXQ8j1Rhl5PMjJnvc2QNKFnlTVbV6O676szRLw9LAx+zyRs267O2SKsxw72Uo6C3id8BSSCVbrkOI4iScPIRkdHm3Z3fHx8NxeOxTqVsINlK0OxLGrYyMiIaGTeGjnSu94i7CO8Rtjq5dZ/eAt2PeP3MhA63Ll7F5qqQdM8qNA1HdOJ6eqasbExOfxLnvb70iZDXlJCZLLkCX94eLipECaTSUxMTCCRSARDG2OJZFkuheD1JPwFJOdf/HAJNn2bRb/YjkMFI+cCBcPGStHG0oaJ5Gdx6LqOgYHDrsekZ0xNTXk3TcQvl7DraQdtqMaQOHDyjS44NlUnPR3a3421so3FDQvf9Pfg6ZrhrovFYojHCbE4NF3zR8yTixLM4XNeVgk5fw49HtrbjYv3V/Esb+K7gR345MoTzOXMir70CEGDPKxkjlu+gCmkGbi1zA2N6eCnZAafv70Ns+TV4G9P8OtgHxbyFQ//uJHCtz/ex7nvp/HL9fmWCXsJOyv5BC4/yOFZwcT8uolPr81hjgjncwb2XPgHmaLtbujb1YFXuyjHxgMMHX0dDU+aEHNk9X194r2aCzr4y6T9fDWJv56Wcf7MQXSKYluEYmZmRuP3dpGY01JftxOz+P3PVcwvpKFGu5EtWMisWfh7wcIrnQs4fngIt27dbKuJEizWMt9x1R0lS0VJ7cV6bhYvUddYMqNIpRdx7tT7buHUPeW9k6QWmNj0neBYLwjMphZxdvAd5A36O5dGX08GJ4/0v3ibyMdktdOOUluRXX6IgTcNHP1gP4xSClu1JL46/SHJoXHXqbd68eVXHuHLjyulcu/ObZw/fYBmB9weanJycnMJW7mi2MoM0+tflXoXbshhEOHW/2VCJ5+TjczkA1w2WMVWCVUm6eCxmX8VHCZ1PW2V0OtfNV8v27DuGG6r8Z8AAwDI6GDvEVo0SwAAAABJRU5ErkJggg=="), pointer; }

a[href$=".xls"]:hover { cursor:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAhCAYAAADK6cvnAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAPvSURBVHjatFdbaFRXFN33MYk6MT6aqBBFaTQq2CjYkoAkKEr90LZQzIfmw28RKQiiH0klJB/59dHSQv1UWiGK+iOtUGiGSnwPjYhJi88gZDKdGE0y93m692Efvbm5mbmT2A2Lc+6Zc8+6+3n26BAtGcZ8xEIGzU2EBjFFCDENehQZ/eD7Ph38ErGYkUQkSiGMEnOG9SpNk+f+i6jkNfo4h+F/aEIlGpsSmMhk4llLnJcNJkowFKn2f2hIcp3HHYh5CJfJaPTYvIIxZ8IlFECO47wuKyv7XQUf4hOEzWa2mdyNQxxHQ0gkEotUmLuuO4rP/Xzwp4hJRJ7hsNaimA81nhf9ANM0ZZqg1vTOXcRSsgSiAlHOPtcKEVKCDzPmxw0GIrZtm/amOHUWxclV0qiKq0BW1/Wnwc20HjUPmxplAY9kTov96c9EOCJtqmmSmBO+aMmKOKeMYRYzaXUckhj5rLP/9GImVV+dReKPokwXLsae572bK+uyCctZSxoFnidU1ArerAWidJgKNpFGkbW3t8dWt6ura2XAlzbDEyFtyBQjYgZpa2sTxUTtoRHP2oD4GLGcU0b6Nph3glXPBrUMmQ5u37kDhm6AYSjoYBom3Lt/792ezs5OGh6hplsDbiOT58OEyzA1hhVBS0vLFFOFn5Wk02no7u6OMr1KF5dN7IQriwgGEM1PffcZeh8DxffA8VywfRss3wHLsyFPcC048qUsBNDQ0Cg1xo+GVCqlbppEMF2irifSUrz/AgErl50AGw9fW3NSkkx6Fkwi0fZ13+M8L/c1NTVBczOiqRkM04BQyVTlTouqnVMiyREuDAydlFqREBmR7qz7AS71t8pnkh//OAvZzAisr9kEtfPWln4Bo0mzNJJmdTUd8uDU30dgW+1p1C4PPX8dgK83nZemJRnVR+DR6wFILqmQwVQqYTViBU3yrg23nhyVviLSaw8PSkKan7v7hfyd5MnzV3Bo12HY37i/YHksdB35FH37dqVjJXtjbSPs2bx3Tje+GBwcNLhMJTGZM5Rfb8fH4deB63Ax/TNMWhNQv2YjPM8NQd/Lm9D3rA8aVjfMuokSnKwUFW/UYs+DX+C3x5dhVWUVmL4Jj1/8A9XJpeCLHHx79Ru4PXCrsIaFijUHj+DWQUrvnzcg92wYxvVx6Dl9Ra59dWYvWJlRmMjkoOPhCTje2jH7noYLrlAV5KdjF6bt+XzdbujP3Qe3wgJTK59zmzhFent7p63VJ7dA/Y4tH6wvndUVxWKpGqr6V62YD0P+THCjVcmFORHjNSKbQIxRoSrVpKpJGuN+NM5fBZ9J6T2vVEIRME8+ZkupunHZavwnwACP4QGyKLrGhgAAAABJRU5ErkJggg=="), pointer; }

a[href$=".txt"]:hover { cursor:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAhCAYAAADK6cvnAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAANnSURBVHjatFdLa1NBFD4z95E+bGpfCiJFXIgiglClgqTgxrZZt2j9Be7cKUKLSPtXBBf9AaYYKTQ7a7MUXHUhLtpGaqWv3Md4ZnomTm9vkrnGTvg409658+V85zETBuljm+wowqV5iAgQEUKAxRDi7DKeRiYXxnHMcP4dcZHQi/AQDDoYbpP/DzOm9v2JyBtfLiDE/5tQD8naTfOA1vNOPLR52SEij6BJ2Xl4KMcHso8QXZQ8jGxE8grbRGJNkmZYPcQ4ygQKguCX7/t6Q2nvIOokc53IwyRxWpZaEZrzMAx3Pc/TxPcQh4gjwqmyaVUWjOZtJXZdV5UJei3f+YIYRAwgLiByFHPWKmlkkW8Rum2TQRLX63W5tkKl029Tq9KjYek6osY53zQXm5KkyYPS9tO0h6yU85jiGTcj3KEYKWIq+KwtS+7jE9x2ko7YkFjUM6f48XaS6m9dQ+KhNOlMzySiKGrMtbokYY68lFbgfkJnraDFzMjSLdmwJWka2cLCgrW7S0tLV41Y1gmRSHgjpdgRTcb8/LxoN/QaaXGvm4jriMtUMiq2Zt0Jcr1mepmQDj6vr4PDHXAcDQ6u48JGdaOxZnFxUZqv6OmYETYp+RFL6TxbutPMzs5ayzg3NwfVajUpbQHNAWKXjrr9ZGcRZgLJ+bvX9xuhxuaGH/bXOpgbXg88e1OSjQDGxx8oj7GeoVKp6JPGM8sl7Xi6hC8I0+Xc2Es198deKRJped8o+HdfAB+4pZ4VCgWYmEAUJsBxHUi0TN3uWFrvFKf/IO+6BiH49h68G08h/FEB5p80GYcIV1dXVUwnJx+rGGc+D1HS2szMzBDPjzY2dq48hGhvE5z8NRDh4cnCrkFlpqenlZwMRZPEWQlH6FnAB25D/HsTtehDEjyBUFKdtWb2lstljB1D4mLL9tjqOFLN98nzt1ZZWiwWrfpwK0KxvLzsUJvqxWLelvW1v38A5U8fgaN0HAkY54qoVCqpl6ampv6dkHBsHjWu50IRZeNElLXxu62aNSWPoKvDSZfGhCitrDQl6sRDnRjKU928ORLKjDyvi/CZsba21tHBmYkwyxFF45igfx4I1i6GiXh6dNHK0z3Gs3gtoAa+J6+UWQk5keTI2vxUiIlUeZqVkFETbjRjm5+JBHXV+CPAAGp0hz54qr33AAAAAElFTkSuQmCC"), pointer; }

a[href$=".zip"]:hover { cursor:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAhCAYAAADK6cvnAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAOuSURBVHjatFfNTxNBFH8zuwsiBEQ+1MRo4glJTDCawEGaGBpiJAEkcvbgvwHxAIfqQRL5iMZ4IB5MPNKIaLxRTyKVxMRELh48FaootrS77Y5vhrd1WbbtLuCQX96wnZnfvu9ZBv5jg+Q5hE7zAsJCFBECAgwh9i/jfmRyoW3bDOffEScI9QgDweAQQy/zvJUxde4PRKPr5SyCfdSEzpCsdTS3aD0/jIZBNmtEZBAcUvY/NJRjieR1xDEKHkaySOYVQQOJlQmaVvUj+lEGkGVZv2pqapwDpbyEMMnMJpEXvMR+URqI0D0vFApbhmE4xFcRO4gcYU/aVEoLRvOqJtZ1XaUJai33fEScRDQjGhC15HNWKWhkkqcIdUGDQRKbpinXJih1moLkqtSoVaqOSHPOv7kXu03iZx40bRNNj5OU5syTP+1yhJvkI0VMCR+2ZMlzagh6NZO2BSEJkM+c/MermdR56zQSt/iZzq2ZRLFYLM0d65IJa0lLKQWeJ5yoFbSYuaI0JQu2JPUjGx8fD6zu5OTkWZcvTUJReLSRptgUZcbY2JioNpw1UuJZHYgLiFOUMsq37rwTpHraraXHdPBhZQU0roGmOeCgazqsJldLayYmJqT4gppecblNmjzHfCpPyqk0o6OjgUy4trYGsVgMksmk17S9KLKILWp1GW9lEe4AkvOX8y3AHHerko0BY2EcWBYIE12Ut6BjQBUC6O7uURpjPkMikXA6jeFOF7/21I4bxD+V8a/hCeIxHm4Ca3oKIpsHfuY5aOdfgP0nq9Y9nJqCSKQXIr0R0HQNPCXTKXe+hHvzwsbrxs+7YKfuKCI1MlmwPg3szrd3lIgvxGF4ZAR0Q1M+Dt2A0aRpNcmZwJufAW+fBzuze7iNJEbXKzDfXQOxnVHPhm4Nw5vXi2hSXQVTWMI2xGl1eDYHxa+3ofB5CA/fAet9Hwg0o7nYg/9nSy/xdmkJbtwcUL6sVLkqtSNbRl9HNFiyz87NwdDgIDyanobLXV0HIhTr6+salal6TOYNmV8Z9J+mYyQy6SsMKIzKmZlZ6Oy8qDbF7j+oSFjpEiUoWWWkbJfe0NBVousYiRx9xSnuon1Rhap9tFKxpuARdHXYrdJIwjDPDtpheIDeJ0epmUqtvGQL8ThE+/sVjuKauGcsLy/ve3YvRCcJRRimRdHIE5zPA8Gq+dDjT4MuWo10jzECbLOogP+WV8qwhJxIakkG+VSwiVRpGpaQUREuFeMgn4kEddX4K8AAMiq/YTumS/oAAAAASUVORK5CYII="), pointer; }

a[href$=".exe"]:hover { cursor:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAhCAYAAADK6cvnAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAQDSURBVHjarFddaFRHFP7mzty9+TNF158K0tpGsKUGCrakUDdgHnwRUoRGCkIp9kFbaLVW9MHkKQFTSkEfSqhoaUV98MmXQJH2oWQpSoNxQ1u1qU1ppf7EjYman/Xu7u2ZybnLze3u3R8z8DFz756535wz5zszK1C8TXD/HEHxOEtwCTmChwqa5/3fTBQj04YEYVmW/v1Vfj9HmCFkCPmlJlxpfhRikrp2fv+YMMWk2VoJVZk5ekH1PHbZ3sJTtEomSyayGT6pqIWwXEgfBGy2ckgf835mOYHynETeUuyhmeS67nQsFvNn676V8ITD/ITJs2HimgmD42w2O2Xbtk/8Gns7z1gkmyhCwdB7czuK0B+T1z7xFiZ9RJhl2eQW+IoTTgTGLxDGyTBejjAU6q28tw+Z2Gi1FKHHQk+z0AWNl0dmWoic2pvs3TRhksduKR3e54krtQF/oFpB6+/EGCpKMnrPVlVCUoGeLdZspEZVYNVpIo4XC0PQM41cLlcYc7NZjw57qXuPvucFEsgLZ+m9fD4vNGkxsp6enord7evrW8eJk2WdauTCaatDcd8r0bq7u71yzbfRPX3rJcKLhDWEJn9vg8XbY9fTQS9DocPPw8OQloSUPiwoqXBl5ErBpre3V3fXyNPNgW3TIZ8XRWRyzxd+V1dXRSFMpVLo7+/HyMhIOLQJlsgUy2UmfDx5wQQyR8Wyd2A5Nqx6QoMD1ejAaqyDaqqDbHIgaZz6pANKKbS1vWE8Jj0jmUz6J40dlEux42k1TSjEUNgK5wY6IZ0YTvd1EHEMJz/eDEH9lzs3mMXolkgk0N5OSLRDKhmMmC8XUYpwcSY5Eu8evghRZ+P9Ly7j5P7X8cHZG5D0vO/ibQgmVMqGrq3KlmaPqz6AKaRpYxCzcfqzbSakpz5tw95vf8PAro3G0+Pb1kLEFnZl+Or3RKqTSJlkqpZwFeFZY0Ce7D76EyQR7Pn6V/LMwUeDt0woD1yaogUtEDb/shPJ8zvMXkZVrqg7TV5nH1J7K8rUv/+x0fL8d7h04S0gfrAmQm9sbExymWokMU9ofc3MzOLHr/Zg/TM30fJyHHfmVuP6jb+wwpvGw/QcRv+4g9bO2i5RHos1w2fcwgopa+db3kOmYT3ujt+CmBxG61pKnswsZHMcH35+ObrK+5WkFJjYLVRpSogdnR24+aeFgcEVGB1fhqu/1+PMaCeGRjc+/TWRy2Thpm0RoU6Kt4+cwdFzP2CieRcG/92OY9+cxaETybKEqtqDb2hoaNHzhlc2GYTfLwlhNUcUtwzD9e+vIurALVIMbL76NxMauE6Way4XcH3BmquW0GISh/tK/irkmdR4Wi2hf3+Vgbts2bxjmKvGfwIMAM2pC9auZ2FqAAAAAElFTkSuQmCC"), pointer; }

a[href*="mailto"]:hover { cursor:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAhCAYAAADK6cvnAAAABGdBTUEAAK%2FINwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAALNSURBVHja7FbLbtpAFL0ztqH0kfRB6K5%2FUMEClhBVjdT8GWsQSz6ELliUVgosKmDdTRddpCFQGiRa41fvnVyjCTXGJmmlSh3p6I7sGZ859zUWED0mbF8gTJ67CAfhIQJIMILg92UyiowW%2Br4vcP4F8ZjxAGEhBNximFue54VQ350hDrTDOQz%2FrgnDQaw5nju8Xt5GYZLNBhNZjJBU%2FAmFNDpsXyHucfIIth67N0iaSGJL0uTVS4wjJZDjON8zmUz4QbIvESt284rJ3U3iqCxNRKjPXdedW5YVEpcRPxA%2FGTfKJq4sBM93utg0TVUmqJr2fEQ8RTxBPERkOeYiLmmoyC8YuaTJQMSr1YrWfuDSOUxSq6QoT9IRUynlZ32x7pIo96BrD3l6ny250%2BZ4%2BtsILzlGipgLPm3Lou9kGOYulx4lIUlQz5LjJ3e5NDz1FImfRblOV0bwPG89D73LLsyyymyY2VopETyhZekFNWwijSIrlUp7SR%2BPxwU%2BDJWMbWoneI5JcxGnkMZoNEpEpB2wwGRLxJXeS4NrrwXTODL60PnXc5hMJjCbzmA%2Bn8NisYDlcgm2bYPruGpNs9kMtx1wjVImW5uEBVQZK%2FFtpwOnb04xPhKEIUBKAwxDokWgLVfKMBwO9fhlGRRnuXlbhC1pq0qBW7rdLpycvAZjTWaiNaBSriiyuN4R1coKcbFUSvD09XodarXajXeNRuO656a8nmJdSoT9wQCq1Sqc9c%2BUSnpGStHB8K7Xg%2BNaNf0FjCelupwhviHm4fPBoK%2FIDKXUUHEjQoopiACO8V2v9z71BXzE73KcZWQ%2FtVotKBaLHKeYSxbdivWX%2Bsb3%2BXK94jsP2u32PrVvM9TPl9jxNyC0Pik4tUnto7CuOOb6b0ZUDqwLX%2BzRpC29rhLuW7c2sauVbcQmVG1oHkj0E75u3mkI72JI%2BMvjP%2BG%2FT%2FhLgAEA%2Ff0XigMr7vMAAAAASUVORK5CYII%3D"), pointer; }

a:active { color: ' .
table_valeur($Pile["vars"], (string)'c_active', null) .
'; }
.retourtop { clear: both; padding: 1.5em 1em 2em; font-style: italic; text-align: right; }

/*************** STRUCTURE - GENERAL */
#shadow { position: relative; margin: ' .
interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/pagemargehaute','3em',false):'')) .
' 0 ' .
interdire_scripts((((include_spip('inc/config')?lire_config('accepter_inscriptions',null,false):'') == 'oui') ? '0':interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/pagemargebasse','3em',false):'')))) .
' 0; ' .
(($t1 = strval(interdire_scripts((((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrepagenon',null,false):'')) ?'' :' '))))!=='' ?
		($t1 . (	'-webkit-box-shadow: ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrepageparametres','0px 0px 10px 0px',false):'')) .
	' rgba(' .
	interdire_scripts(sc_rgb((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrepagecouleur','#aaaaaa',false):''))) .
	', ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrepagetransparence','1',false):'')) .
	'); -moz-box-shadow: ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrepageparametres','0px 0px 10px 0px',false):'')) .
	' rgba(' .
	interdire_scripts(sc_rgb((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrepagecouleur','#aaaaaa',false):''))) .
	', ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrepagetransparence','1',false):'')) .
	'); box-shadow: ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrepageparametres','0px 0px 10px 0px',false):'')) .
	' rgba(' .
	interdire_scripts(sc_rgb((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrepagecouleur','#aaaaaa',false):''))) .
	', ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrepagetransparence','1',false):'')) .
	');')) :
		'') .
' }
#clearbottom { height: 0; }

/*************** STRUCTURE - HEADER */
#banheader { background-color: ' .
table_valeur($Pile["vars"], (string)'c_header_bk', null) .
';' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/transparenceheader','1',false):'') != '1')) ?' ' :''))))!=='' ?
		($t1 . (	'background-color: rgba(' .
	sc_rgb(table_valeur($Pile["vars"], (string)'c_header_bk', null)) .
	', ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/transparenceheader','1',false):'')) .
	');')) :
		'') .
' color: ' .
table_valeur($Pile["vars"], (string)'c_header', null) .
'; }
.encart.vertical { padding: 0; position: relative; text-align: center; }
.vertical .encart-label { top: 6em; }
.encart.vertical a { display: inline-block!important; box-sizing: content-box; padding: 3em 0; }
.encart-label {
    background-color: #efc439;
    border-radius: 6px 6px 0 0;
    color: #fff;
    display: block;
    font-size: 1em;
    padding: 2px 6px;
    width: 8em;
}
.vertical .encart-label {
    border-radius: 0 0 6px 6px;
    display: inline-block;
    transform: rotate(90deg);
    transform-origin: 0 0;
    position: absolute;
	top: 3em;
}
#header { position: relative; background-color: ' .
table_valeur($Pile["vars"], (string)'c_header_bk', null) .
';' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/transparenceheader','1',false):'') != '1')) ?' ' :''))))!=='' ?
		($t1 . (	'background-color: rgba(' .
	sc_rgb(table_valeur($Pile["vars"], (string)'c_header_bk', null)) .
	', ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/transparenceheader','1',false):'')) .
	');')) :
		'') .
' color: ' .
table_valeur($Pile["vars"], (string)'c_header', null) .
'; 
	font-size: ' .
interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/fontsizeheader','1.2',false):'')) .
'em;
	' .
(($t1 = BOUCLE_HeaderBannerhtml_2bc49e1c46721810c1dfb9822505203e($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
	' .
	(($t2 = strval(url_absolue(extraire_attribut(
((!is_array($l = quete_logo('id_syndic', 'off', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'src'))))!=='' ?
			((	'min-height: ' .
		hauteur(
((!is_array($l = quete_logo('id_syndic', 'off', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />'))) .
		'px;
	_height: ' .
		hauteur(
((!is_array($l = quete_logo('id_syndic', 'off', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />'))) .
		'px;
	background: ' .
		table_valeur($Pile["vars"], (string)'c_header_bk', null) .
		' url(') . $t2 . ') no-repeat;') :
			'') .
	'
	' .
	(($t2 = strval(((
((!is_array($l = quete_logo('id_syndic', 'off', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />'))) ?'' :' ')))!=='' ?
			($t2 . (	'
		' .
		(($t3 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs/default_banniere','lentilles',false):'') == 'degrade')) ?' ' :''))))!=='' ?
				($t3 . (	'
			min-height: 100px;
			_height: 100px;
			' .
			(((table_valeur($Pile["vars"], (string)'c_header_bk', null) != 'transparent'))  ?
					(' ' . (	'
			background: ' .
				table_valeur($Pile["vars"], (string)'c_header_bk', null) .
				(($t5 = strval(filtre_embarque_fichier(extraire_attribut(filtrer('image_graver', filtrer('image_aplatir',filtrer('image_sepia',find_in_path('images/fond_degrade_fonce_en_bas2.png'),table_valeur($Pile["vars"], (string)'c_header_bk', null)),'jpg')),'src'))))!=='' ?
						(' url(' . $t5 . ') repeat-x bottom') :
						'') .
				';')) :
					'') .
			'
		')) :
				'') .
		'
		' .
		(($t3 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs/default_banniere','lentilles',false):'') == 'metal')) ?' ' :''))))!=='' ?
				($t3 . (	'
			min-height: 100px;
			_height: 100px;
			' .
			(((table_valeur($Pile["vars"], (string)'c_header_bk', null) != 'transparent'))  ?
					(' ' . (	'
			background: ' .
				table_valeur($Pile["vars"], (string)'c_header_bk', null) .
				(($t5 = strval(filtre_embarque_fichier(extraire_attribut(filtrer('image_graver', filtrer('image_aplatir',filtrer('image_sepia',find_in_path('images/trame_metal.jpg'),table_valeur($Pile["vars"], (string)'c_header_bk', null)),'jpg')),'src'))))!=='' ?
						(' url(' . $t5 . ') repeat') :
						'') .
				';')) :
					'') .
			'
		')) :
				'') .
		'
		' .
		(($t3 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs/default_banniere','lentilles',false):'') == 'lentilles')) ?' ' :''))))!=='' ?
				($t3 . (	'
			' .
			(($t4 = strval(filtre_embarque_fichier(extraire_attribut(filtrer('image_graver', filtrer('image_aplatir',filtrer('image_sepia',find_in_path('images/bandeauhaut_soyezcreateur.png'),table_valeur($Pile["vars"], (string)'c_header_bk', null)),'jpg')),'src'))))!=='' ?
					((	'min-height: ' .
				hauteur(find_in_path('images/bandeauhaut_soyezcreateur.png')) .
				'px;
			_height: ' .
				hauteur(find_in_path('images/bandeauhaut_soyezcreateur.png')) .
				'px;
			background: ' .
				table_valeur($Pile["vars"], (string)'c_header_bk', null) .
				' url(') . $t4 . ') no-repeat;') :
					'') .
			'
		')) :
				'') .
		'
	')) :
			'') .
	'
	'))) .
'
}
/* Label de la recherche masqué */
.searchfrm label, #formulaire_recherche_par_mot label { overflow: hidden !important; position: absolute !important; top: -2000px !important; left: -2000px !important; height: 0 !important; width: 0 !important; }
/* cadre recherche dans le header */
#header .cadre_recherche { text-align:right; bottom:.5em; right:1em; clear:right; float: right; margin-top: 1em; padding-bottom: .5em;}
#header .cadre_recherche #form_rech { padding:4px; }
#header .cadre_recherche #form_rech .searchfield { width: ' .
moins(table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null),'60') .
'px; }
#header .cadre_recherche form { display: inline; }
#header .cadre_recherche form div { display: inline; }

' .
(($t1 = strval((((
((!is_array($l = quete_logo('id_syndic', 'off', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />'))) ?' ' :'') ? interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs/afficher_titre','visible',false):'') == 'invisible')) ?' ' :'')):'')))!=='' ?
		($t1 . '
#header h1 { position:absolute !important; overflow:hidden !important; top:-2000px !important; left:-2000px !important; height:0 !important; width:0 !important; }
') :
		'') .
'

' .
(($t1 = strval(interdire_scripts((((((include_spip('inc/config')?lire_config('soyezcreateurs/afficher_titre','visible',false):'') == 'visible')) ?' ' :'') ? ' ':((
((!is_array($l = quete_logo('id_syndic', 'off', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />'))) ?'' :' ')))))!=='' ?
		($t1 . (	'
#header h1 { float:left; margin:0; padding:0 1em; text-shadow: 2px 2px 2px #7f7f7f; background-color: rgba(' .
	sc_rgb(table_valeur($Pile["vars"], (string)'c_header_bk', null)) .
	',0.7); border-radius: 0 2.5em;
	' .
	(($t2 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs/logoheader','header',false):'') == 'header')) ?' ' :''))))!=='' ?
			($t2 . (	'
	padding-top:' .
		interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/logoheadery','20',false):'')) .
		'px;
	')) :
			'') .
	'
	margin-top: 1em; margin-left: 1em; padding-bottom: .5em;
}
#header h1, #header h1 a, #header h1 a:link, #header h1 a:visited, #header h1 a:hover, #header h1 a:focus, #header h1 a:active { color: ' .
	table_valeur($Pile["vars"], (string)'c_header', null) .
	'; }
')) :
		'') .
'
#header h1 sup, #header h1 sub {line-height:normal;}
#header h1 sub { display: block; padding-left: 8px; margin-left: 2em; border-left: 1.2em solid ' .
table_valeur($Pile["vars"], (string)'c_datemajsite_bk', null) .
'; font-size: 50%; font-weight: normal; line-height:normal;}
a#logo { display: block; clear: right; margin-left: 80px; }
#logo {
	background-color: ' .
table_valeur($Pile["vars"], (string)'c_logo_bk', null) .
'; height: auto;
	' .
interdire_scripts((((include_spip('inc/config')?lire_config('soyezcreateurs/logoheader','header',false):'') != 'header') ? 'text-align: center;':'')) .
'
	' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs/logoheader','header',false):'') == 'header')) ?' ' :''))))!=='' ?
		($t1 . (	'
	position: relative; left:' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/logoheaderx','20',false):'')) .
	'px; top:' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/logoheadery','20',false):'')) .
	'px;
	margin-right: 20px;
	' .
	(($t2 = strval(largeur(
((!is_array($l = quete_logo('id_syndic', 'on', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')))))!=='' ?
			('width: ' . $t2 . 'px;') :
			'') .
	'
	')) :
		'') .
'
}
/* date de maj du site */
#menu_lang { background-color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_bk', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a', null) .
'; float:right; clear:right; font-size:.9em; margin-right:10px; padding: 2px 0; }
#menu_lang a { padding: 2px 8px; background-color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_bk', null) .
'; color:' .
table_valeur($Pile["vars"], (string)'c_menu_a', null) .
'; text-decoration: none;}
#menu_lang a[hreflang]:after { content: none; }
#menu_lang a:hover, #menu_lang a:focus {background-color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_hover_bk', null) .
'; color:' .
table_valeur($Pile["vars"], (string)'c_menu_a_hover', null) .
'}
#menu_lang a:active {background-color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_active_bk', null) .
'; color:' .
table_valeur($Pile["vars"], (string)'c_menu_a_active', null) .
'}
#menu_lang strong { background-color: ' .
table_valeur($Pile["vars"], (string)'c_datemajsite_bk', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'c_datemajsite', null) .
'; padding: 2px 8px; }
#datemajsite { float: right; background-color: ' .
table_valeur($Pile["vars"], (string)'c_datemajsite_bk', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'c_datemajsite', null) .
'; font-size:.9em; padding: .2em 10px; }
/* cadre outils dans le header */
#cadre_outils { text-align:right; position:relative; clear:right; }
#cadre_outils ul { background-color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_bk', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a', null) .
'; float:right; margin:1em 0; padding:0; width:' .
table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null) .
'px; }
#cadre_outils li { display:block; min-height:' .
interdire_scripts(plus((include_spip('inc/config')?lire_config('soyezcreateurs_layout/hauteurlogooutils','16',false):''),'4')) .
'px; list-style: none; list-style-image: none; }
#cadre_outils a { display: block; padding: 5px 24px 5px 4px; background-color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_bk', null) .
';  border-left: none; color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a', null) .
'; font-size: 1em; font-weight: bold; min-height: 16px; text-align: left; text-decoration: none; }
#cadre_outils img { float: right; margin:0; position: absolute; right: 4px; }

/* bandeau d\'annonce et citations dans le header */
#bandeau_annonce, #cita_bandeau { padding: .5em 1em; text-align: center; font-size:2em; }
#cita_bandeau { background-color: ' .
table_valeur($Pile["vars"], (string)'c_container_bk', null) .
';' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/transparenceheader','1',false):'') != '1')) ?' ' :''))))!=='' ?
		($t1 . (	'background-color: rgba(' .
	sc_rgb(table_valeur($Pile["vars"], (string)'c_container_bk', null)) .
	', ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/transparenceheader','1',false):'')) .
	');')) :
		'') .
' color: ' .
table_valeur($Pile["vars"], (string)'c_container', null) .
'; }
#bandeau_annonce {
	background-color: ' .
table_valeur($Pile["vars"], (string)'c_header_bk', null) .
';' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/transparenceheader','1',false):'') != '1')) ?' ' :''))))!=='' ?
		($t1 . (	'background-color: rgba(' .
	sc_rgb(table_valeur($Pile["vars"], (string)'c_header_bk', null)) .
	', ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/transparenceheader','1',false):'')) .
	');')) :
		'') .
' color: ' .
table_valeur($Pile["vars"], (string)'c_header', null) .
';
    position: relative;
	animation: fadein 5s;
    transform-origin:50% 50%;
    animation-iteration-count: 3;
    animation-timing-function: linear;
    -moz-animation: fadein 5s; /* Firefox */
    -moz-transform-origin:50% 50%;
    -moz-animation-iteration-count: 3;
    -moz-animation-timing-function: linear;
    -webkit-animation: fadein 5s; /* Safari and Chrome */
    -webkit-transform-origin:50% 50%;
    -webkit-animation-iteration-count: 3;
    -webkit-animation-timing-function: linear;
    -o-animation: fadein 2s; /* Opera */
    -o-transform-origin:50% 50%;
    -o-animation-iteration-count: 3;
    -o-animation-timing-function: linear;
}
@keyframes fadein {
    0% { background-color: #FA8; }
    50% { background-color: ' .
table_valeur($Pile["vars"], (string)'c_header_bk', null) .
'; }
    100% { background-color: #FA8; }
}
@-moz-keyframes fadein { /* Firefox */
    0% { background-color: #FA8; }
    50% { background-color: ' .
table_valeur($Pile["vars"], (string)'c_header_bk', null) .
'; }
    100% { background-color: #FA8; }
}
@-webkit-keyframes fadein { /* Safari and Chrome */
    0% { background-color: #FA8; }
    50% { background-color: ' .
table_valeur($Pile["vars"], (string)'c_header_bk', null) .
'; }
    100% { background-color: #FA8; }
}
@-o-keyframes fadein { /* Opera */
    0% { background-color: #FA8; }
    50% { background-color: ' .
table_valeur($Pile["vars"], (string)'c_header_bk', null) .
'; }
    100% { background-color: #FA8; }
}
#cita_bandeau #citations { margin: 0 10px; }
#cita_bandeau #citations dl { margin: 0; }

#escapelinks { margin-left:2.625em; }
#escapelinks ul { display: inline; padding:0; margin:0; }
#escapelinks li { display: inline; padding: 0 .8em; background: ' .
table_valeur($Pile["vars"], (string)'c_header_bk', null) .
'; list-style: none; list-style-image: none; }
#escapelinks a { color:' .
table_valeur($Pile["vars"], (string)'c_header', null) .
'; display: inline-block; }
#escapelinks a:link, #escapelinks a:visited { color:#' .
filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_header', null),'20') .
'; }
#escapelinks a:hover, #escapelinks a:focus, #escapelinks a:active { color:' .
table_valeur($Pile["vars"], (string)'c_header', null) .
'; }

/*************** STRUCTURE - CONTENT */
#content' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_layout/positioncartouchetitre','contenu',false):'') == 'haut')) ?' ' :''))))!=='' ?
		($t1 . ', .cartouche') :
		'') .
' { background-color: ' .
table_valeur($Pile["vars"], (string)'c_container_bk', null) .
';' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/transparencecontent','1',false):'') != '1')) ?' ' :''))))!=='' ?
		($t1 . (	'background-color: rgba(' .
	sc_rgb(table_valeur($Pile["vars"], (string)'c_container_bk', null)) .
	', ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/transparencecontent','1',false):'')) .
	');')) :
		'') .
' color: ' .
table_valeur($Pile["vars"], (string)'c_container', null) .
'; }
#miettesdepain { background-color: ' .
table_valeur($Pile["vars"], (string)'c_fildariane_bk', null) .
';' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/transparencefildariane','1',false):'') != '1')) ?' ' :''))))!=='' ?
		($t1 . (	'background-color: rgba(' .
	sc_rgb(table_valeur($Pile["vars"], (string)'c_fildariane_bk', null)) .
	', ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/transparencefildariane','1',false):'')) .
	');')) :
		'') .
' color: ' .
table_valeur($Pile["vars"], (string)'c_fildariane', null) .
'; }
/* Astuce : https://www.fourfront.us/blog/css-shadow-borders-with-curved-box-shadows */
#content { position:relative; overflow:hidden; }
' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrecontentbefore','none',false):'') != 'none')) ?' ' :''))))!=='' ?
		($t1 . (	'
  #content:before {
  content: " "; 
  position:absolute;
  z-index: 1; 
' .
	(($t2 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrecontentbefore','none',false):'') == 'left')) ?' ' :''))))!=='' ?
			($t2 . '
  top: 0;
  height:100%;  
  left: -10px; 
  width: 10px; 
  border-radius: 5px / 100px;
') :
			'') .
	'
' .
	(($t2 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrecontentbefore','none',false):'') == 'top')) ?' ' :''))))!=='' ?
			($t2 . '
  left: 0;
  width:100%;  
  top: -10px; 
  height: 10px; 
  border-radius: 100px / 5px;
') :
			'') .
	'
' .
	(($t2 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrecontentbefore','none',false):'') == 'right')) ?' ' :''))))!=='' ?
			($t2 . '
  top: 0;
  height:100%;  
  right: -10px; 
  width: 10px;
  border-radius: 5px / 100px;
') :
			'') .
	'
' .
	(($t2 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrecontentbefore','none',false):'') == 'bottom')) ?' ' :''))))!=='' ?
			($t2 . '
  left: 0;
  width:100%;  
  bottom: -10px; 
  height: 10px; 
  border-radius: 100px / 5px;
') :
			'') .
	'
  -webkit-box-shadow: ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrecontentbeforeparametres','0px 0px 13px 0px',false):'')) .
	' rgba(' .
	interdire_scripts(sc_rgb((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrecontentbeforecouleur','#000000',false):''))) .
	', ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrecontentbeforetransparence','0.6',false):'')) .
	');
  -moz-box-shadow: ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrecontentbeforeparametres','0px 0px 13px 0px',false):'')) .
	' rgba(' .
	interdire_scripts(sc_rgb((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrecontentbeforecouleur','#000000',false):''))) .
	', ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrecontentbeforetransparence','0.6',false):'')) .
	');
  box-shadow: ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrecontentbeforeparametres','0px 0px 13px 0px',false):'')) .
	' rgba(' .
	interdire_scripts(sc_rgb((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrecontentbeforecouleur','#000000',false):''))) .
	', ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrecontentbeforetransparence','0.6',false):'')) .
	');
}
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrecontentafter','none',false):'') != 'none')) ?' ' :''))))!=='' ?
		($t1 . (	'
  #content:after {
  content: " "; 
  position:absolute;
  z-index: 1;
' .
	(($t2 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrecontentafter','none',false):'') == 'left')) ?' ' :''))))!=='' ?
			($t2 . '
  top: 0;
  height:100%;  
  left: -10px; 
  width: 10px; 
  border-radius: 5px / 100px;
') :
			'') .
	'
' .
	(($t2 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrecontentafter','none',false):'') == 'top')) ?' ' :''))))!=='' ?
			($t2 . '
  left: 0;
  width:100%;  
  top: -10px; 
  height: 10px; 
  border-radius: 100px / 5px;
') :
			'') .
	'
' .
	(($t2 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrecontentafter','none',false):'') == 'right')) ?' ' :''))))!=='' ?
			($t2 . '
  top: 0;
  height:100%;  
  right: -10px; 
  width: 10px;
  border-radius: 5px / 100px;
') :
			'') .
	'
' .
	(($t2 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrecontentafter','none',false):'') == 'bottom')) ?' ' :''))))!=='' ?
			($t2 . '
  left: 0;
  width:100%;  
  bottom: -10px; 
  height: 10px; 
  border-radius: 100px / 5px;
') :
			'') .
	'
  -webkit-box-shadow: ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrecontentafterparametres','0px 0px 13px 0px',false):'')) .
	' rgba(' .
	interdire_scripts(sc_rgb((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrecontentaftercouleur','#000000',false):''))) .
	', ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrecontentaftertransparence','0.6',false):'')) .
	');
  -moz-box-shadow: ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrecontentafterparametres','0px 0px 13px 0px',false):'')) .
	' rgba(' .
	interdire_scripts(sc_rgb((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrecontentaftercouleur','#000000',false):''))) .
	', ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrecontentaftertransparence','0.6',false):'')) .
	');
  box-shadow: ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrecontentafterparametres','0px 0px 13px 0px',false):'')) .
	' rgba(' .
	interdire_scripts(sc_rgb((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrecontentaftercouleur','#000000',false):''))) .
	', ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/ombrecontentaftertransparence','0.6',false):'')) .
	');
}
')) :
		'') .
'

#content .nivoSlider img { padding: 0; }

.clearing { clear: both; height: 0; line-height:0; }

/*************** STRUCTURE - MAIN SIDEBAR */
#navigation { color: ' .
table_valeur($Pile["vars"], (string)'c_navigation', null) .
'; background-color: ' .
table_valeur($Pile["vars"], (string)'c_navigation_bk', null) .
';' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/transparencenavigation','1',false):'') != '1')) ?' ' :''))))!=='' ?
		($t1 . (	'background-color: rgba(' .
	sc_rgb(table_valeur($Pile["vars"], (string)'c_navigation_bk', null)) .
	', ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/transparencenavigation','1',false):'')) .
	');')) :
		'') .
'font-size: ' .
interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/fontsizenavigation','1.4',false):'')) .
'em; }
#navigation ul, #navigation li, #extra ul, #extra li { list-style-image: none; }
#menu { 
' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_layout/positioncartouchetitre','contenu',false):'') == 'haut')) ?'' :' '))))!=='' ?
		($t1 . '
	margin-top: 6em;
') :
		'') .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_layout/positioncartouchetitre','contenu',false):'') == 'haut')) ?' ' :''))))!=='' ?
		($t1 . '
	margin-top: 1.5rem;
') :
		'') .
'
	overflow: hidden; background-color: transparent; }
#menu ul img.menu_plus, #menu ul img.menu_minus { float: left; position: absolute; z-index: 100; width: 9px; height: 9px; margin: .7em 0 0; margin-right:0; margin-left:5px; border: 0; background-repeat: no-repeat; }
#menu ul ul img.menu_plus, #menu ul ul img.menu_minus { margin: .3em 0 0; margin-right:0; margin-left:5px;}
#menu img.menu_plus { background-image: url(' .
filtre_embarque_fichier(find_in_path('images/menu_plus.gif')) .
'); }
#menu img.menu_minus { background-image: url(' .
filtre_embarque_fichier(find_in_path('images/menu_minus.gif')) .
'); }
#menu ul { padding: 0; margin: 0; }
#menu li { padding: 0; background: transparent; list-style: none; list-style-image: none; }
#menu ul ul { padding: 0; margin: 0; margin-left:10px;}
#menu li a { display: block; padding: 5px 0 5px 20px; padding-right:0; padding-left:20px; margin: 4px 0; background-color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_bk', null) .
'; border-left: none; color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a', null) .
'; font-size: 1em; font-weight: bold; text-align: left; text-decoration: none; }
#menu ul ul li a { padding: 2px 0 2px 20px; padding-right:0; padding-left:20px; background-color: #' .
filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null),'10','true') .
'; font-size: 1em; text-decoration: none; }
#menu strong li a, #menuhaut strong li a, #menufooter strong li a { background: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_strong_bk', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_strong', null) .
'; }
#menu li strong a:visited, #menu li strong a:link, #menufooter li strong a:visited, #menufooter li strong a:link {
	margin-left: 2px; background: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_strong_bk', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_strong', null) .
';
}
#menu li a:hover, #menu li a:focus, #cadre_outils li a:hover, #cadre_outils li a:focus, #menuhaut li a:hover, #menuhaut li a:focus, #menufooter li a:hover, #menufooter li a:focus, #artrecents a:hover, #artrecents a:focus, #artrecents .odd a:hover, #artrecents .odd a:focus { background-color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_hover_bk', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_hover', null) .
'; text-decoration: none; }
#menu li a:active, #cadre_outils li a:active, #menuhaut li a:active, #menufooter li a:active, #artrecents a:active { background-color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_active_bk', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_active', null) .
'; }
#menu form { padding: 0; margin: 0; }
#menu h2 { ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null),'20','true')))!=='' ?
		('background: #' . $t1 . ';') :
		'') .
' color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a', null) .
'; border-left: none; padding: 5px 10px 5px 2px; padding-right:10px; padding-left:2px; margin-top: 5px; margin-bottom: 5px; font-size: 1.2em; font-weight: bold; text-align: left; }
/* selects dans zone de recherche */
#recherchemot { width: 100%; }
#navigation #bandeaucontact {
	background: url(' .
filtre_embarque_fichier(find_in_path('images/contact.png')) .
') no-repeat right bottom transparent;
	padding: 1em 5px;
} 
#navigation #bandeaucontact p {
	text-align: right;
} 

/*************** STRUCTURE - EXTRA SIDEBAR */
#extra { background-color: ' .
table_valeur($Pile["vars"], (string)'c_extra_bk', null) .
';' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/transparenceextra','1',false):'') != '1')) ?' ' :''))))!=='' ?
		($t1 . (	'background-color: rgba(' .
	sc_rgb(table_valeur($Pile["vars"], (string)'c_extra_bk', null)) .
	', ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/transparenceextra','1',false):'')) .
	');')) :
		'') .
' color: ' .
table_valeur($Pile["vars"], (string)'c_extra', null) .
'; font-size: ' .
interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/fontsizenavigation','1.4',false):'')) .
'em; }
#extra ul ul li { padding: 0; padding-right:0; padding-left:10px; margin: 0; }
#extra ul ul li a { overflow: hidden; padding: 0; padding-right:0; padding-left:15px; margin: 1px 0 0; }
.rightmenu li a { display: block; padding: 5px 0; padding-right:0; padding-left:15px; margin: 3px 0; background: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_bk', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a', null) .
'; font-weight: bold; text-decoration: none; }
.rightmenu li a:link { }
.rightmenu li a:visited { }
.rightmenu li a:hover, .rightmenu li a:focus { background: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_hover_bk', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_hover', null) .
'; }
.rightmenu li a:active { background-color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_strong_bk', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_strong', null) .
'; }
.rightmenu li { display: block; padding-left: 0; margin-left: 0; margin-right: 0; }
.rightmenu ul { padding-left: 0; margin-bottom: 1.5em; margin-left: 0; margin-top: 0.5em; color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a', null) .
'; list-style: none; list-style-image: none; font-size: .9em; }
.rightmenu ul ul { margin-bottom: 0.5em; margin-left: 0; margin-top: 0.5em; padding-left: 10px; color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a', null) .
'; font-size: 1em; }
.rightmenu li strong a { display: block; padding: 5px 0; padding-right:0; padding-left:15px; margin: 3px 5px 3px; margin-left:0; background-color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_strong_bk', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_strong', null) .
'; font-weight: bold; text-decoration: none; -moz-border-radius-bottomright: 24px; -webkit-border-bottom-right-radius: 24px; }
.rightmenu li strong a:link, .rightmenu li strong a:visited { background-color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_strong_bk', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_strong', null) .
'; }
.rightmenu h2 { padding: .2em 0; margin: .7em 0; ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null),'20','true')))!=='' ?
		('background: #' . $t1 . ';') :
		'') .
' color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a', null) .
'; font-size: 1.4em; text-align: center; }
/* Contenu RSS */
#extra ul ul li a { font-weight:normal; }

#splickr { margin: 1em auto 0 auto; }

/*************** STRUCTURE - FOOTER */
#footer { width: 100%; background-color: ' .
table_valeur($Pile["vars"], (string)'c_footer_bk', null) .
';' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/transparencefooter','1',false):'') != '1')) ?' ' :''))))!=='' ?
		($t1 . (	'background-color: rgba(' .
	sc_rgb(table_valeur($Pile["vars"], (string)'c_footer_bk', null)) .
	', ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/transparencefooter','1',false):'')) .
	');')) :
		'') .
'
	' .
((((((table_valeur($Pile["vars"], (string)'c_footer_bk', null) != 'transparent')) ?' ' :'')) AND (((table_valeur($Pile["vars"], (string)'d_footer_degrade', null)) ?'' :' ')))  ?
		(' ' . (	'
	background: ' .
	table_valeur($Pile["vars"], (string)'c_footer_bk', null) .
	(($t2 = strval(filtre_embarque_fichier(extraire_attribut(filtrer('image_graver', filtrer('image_aplatir',filtrer('image_sepia',find_in_path('images/fond_degrade_fonce_en_bas4.png'),table_valeur($Pile["vars"], (string)'c_footer_bk', null)),'jpg')),'src'))))!=='' ?
			(' url(' . $t2 . ') repeat-x bottom') :
			'') .
	';')) :
		'') .
'
	color: ' .
table_valeur($Pile["vars"], (string)'c_footer', null) .
'; font-size: ' .
interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/fontsizefooter','0.9',false):'')) .
'em;
}
#footerbas { padding: 4px 10px; text-align: center; }
#footerbas div { display: inline; }
#footer span.right { display: block; padding: 2em 0 0.5em; font-size: 0.8em; font-style: italic; text-align: right; }
#footerbas img { width: 4px; height: 4px; padding: 0 .5em; vertical-align: middle; background-color: ' .
table_valeur($Pile["vars"], (string)'c_footer_bk', null) .
';
	' .
(((table_valeur($Pile["vars"], (string)'c_footer_bk', null) != 'transparent'))  ?
		(' ' . (	'
	background:' .
	(($t2 = strval(filtre_embarque_fichier(extraire_attribut(filtrer('image_graver', filtrer('image_aplatir',filtrer('image_sepia',find_in_path('images/pucebleue.gif'),filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_footer', null),'80')),'jpg')),'src'))))!=='' ?
			(' url(' . $t2 . ') no-repeat center') :
			'') .
	';')) :
		'') .
'
}
#datemajsitefooter { text-align: center; margin-top: 2em; }
#datemajsitefooter span { background-color: ' .
table_valeur($Pile["vars"], (string)'c_datemajsite_bk', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'c_datemajsite', null) .
'; padding: 0.7em 2.5em; border-radius: 10em 10em 0px 0px; display: inline-block; }
.cadreinfo a { ' .
(($t1 = strval(filtrer('couleur_extreme',filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a', null),'20','true'))))!=='' ?
		('color: #' . $t1 . ';') :
		'') .
' font-weight: bold; text-decoration: none; }
.cadreinfo a:visited { ' .
(($t1 = strval(filtrer('couleur_extreme',filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a', null),'20','true'))))!=='' ?
		('color: #' . $t1 . ';') :
		'') .
' text-decoration: none; }
.cadreinfo a:hover, .cadreinfo a:focus { ' .
(($t1 = strval(filtrer('couleur_extreme',filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a', null),'20','true'))))!=='' ?
		('color: #' . $t1 . ';') :
		'') .
' text-decoration: underline; }
.cadreinfo a:active { color: #f00; }
#footer a { ' .
(($t1 = strval(filtrer('couleur_extreme',filtrer('couleur_inverser',table_valeur($Pile["vars"], (string)'c_footer_bk', null)))))!=='' ?
		('color: #' . $t1 . '; ') :
		'') .
'font-weight: bold; text-decoration: none; }
#footer a:visited { ' .
(($t1 = strval(filtrer('couleur_extreme',filtrer('couleur_inverser',table_valeur($Pile["vars"], (string)'c_footer_bk', null)))))!=='' ?
		('color: #' . $t1 . '; ') :
		'') .
'text-decoration: none; }
#footer a:hover, #footer a:focus { ' .
(($t1 = strval(filtrer('couleur_extreme',filtrer('couleur_inverser',table_valeur($Pile["vars"], (string)'c_footer_bk', null)))))!=='' ?
		('color: #' . $t1 . '; ') :
		'') .
'text-decoration: underline; }
#footer a:active { color: #f00; }
#footer .leaflet-control-zoom a, #footer .leaflet-control-zoom a:visited  { color: #666; }
#citations a { ' .
(($t1 = strval(filtrer('couleur_extreme',filtrer('couleur_foncerluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null)))))!=='' ?
		('color: #' . $t1 . '; ') :
		'') .
'font-weight: bold; text-decoration: none; }
#citations a:visited { ' .
(($t1 = strval(filtrer('couleur_extreme',filtrer('couleur_foncerluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null)))))!=='' ?
		('color: #' . $t1 . '; ') :
		'') .
'text-decoration: none; }
#citations a:hover, #citations a:focus { ' .
(($t1 = strval(filtrer('couleur_extreme',filtrer('couleur_foncerluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null)))))!=='' ?
		('color: #' . $t1 . '; ') :
		'') .
'text-decoration: underline; }
#citations a:active { color: #f00; }
/* ?? */
#menufooter { background-color: ' .
table_valeur($Pile["vars"], (string)'c_menubas_bk', null) .
';
	' .
(!(table_valeur($Pile["vars"], (string)'d_menubas_degrade', null))  ?
		(' ' . (	'
	background: ' .
	table_valeur($Pile["vars"], (string)'c_menubas_bk', null) .
	(($t2 = strval(filtre_embarque_fichier(extraire_attribut(filtrer('image_graver', filtrer('image_aplatir',filtrer('image_sepia',find_in_path('images/fond_degrade_fonce_en_bas_menu.png'),table_valeur($Pile["vars"], (string)'c_menubas_bk', null)),'jpg')),'src'))))!=='' ?
			(' url(' . $t2 . ') repeat-x bottom') :
			'') .
	';')) :
		'') .
'
	text-align:right;
	font-size: 1.4em;
}
#menufooter ul { padding: 0; margin: 0; list-style-type: none; }
#menufooter ul li { display: inline; margin: 0; list-style: none; }
#menufooter li a, #menufooter li a:visited { display: inline-block; padding: 0.5em 1em; text-decoration: none; white-space: nowrap; }
#menufooter li a:hover, #menufooter li a:focus { background-color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_hover_bk', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_hover', null) .
'; }
/* bandeau de contact dans le footer */
#footer #bandeaucontact { padding: 1px 10px; color: ' .
table_valeur($Pile["vars"], (string)'c_footer', null) .
'; text-align: center; }
#footer #bandeaucontact p { text-align: center; font-size: 1.2em; }
.menu_lien_participer { text-align: right; margin-bottom: ' .
(($t1 = strval(interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/pagemargebasse','3em',false):''))))!=='' ?
		($t1 . ';') :
		'') .
' }
.menu_lien_participer a { background-color: ' .
table_valeur($Pile["vars"], (string)'c_datemajsite_bk', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'c_datemajsite', null) .
'; padding: 0.7em 2.5em; border-radius: 0 0 50% 50%; display: inline-block; opacity: 0.1; }
.menu_lien_participer a:hover { opacity: 1; }

/* Nuage de mot clé dans le footer */
#nuage { padding: 2em .5em; text-align: center; line-height: 1em;}
#nuage .nuage a.nuage { font-size:1em;}
#nuage .nuage li a { font-variant: normal; padding: 0 .5em; vertical-align:middle; }
#footer #nuage .nuage li a { white-space: nowrap; }
#nuage .nuage a.nuage0 { font-size:0.9em; opacity:0.5; -ms-filter: "alpha(opacity=50)"; filter: alpha(opacity=50); }
#nuage .nuage a.nuage1 { font-size:1em; opacity:0.55; -ms-filter: "alpha(opacity=55)"; filter: alpha(opacity=55); }
#nuage .nuage a.nuage2 { font-size:1.1em; opacity:0.60; -ms-filter: "alpha(opacity=60)"; filter: alpha(opacity=60); }
#nuage .nuage a.nuage3 { font-size:1.2em; opacity:0.65; -ms-filter: "alpha(opacity=65)"; filter: alpha(opacity=65); }
#nuage .nuage a.nuage4 { font-size:1.3em; opacity:0.70; -ms-filter: "alpha(opacity=70)"; filter: alpha(opacity=70); }
#nuage .nuage a.nuage5 { font-size:1.4em; opacity:0.75; -ms-filter: "alpha(opacity=75)"; filter: alpha(opacity=75); }
#nuage .nuage a.nuage6 { font-size:1.5em; opacity:0.80; -ms-filter: "alpha(opacity=80)"; filter: alpha(opacity=80); }
#nuage .nuage a.nuage7 { font-size:1.6em; opacity:0.85; -ms-filter: "alpha(opacity=85)"; filter: alpha(opacity=85); }
#nuage .nuage a.nuage8 { font-size:1.7em; opacity:0.90; -ms-filter: "alpha(opacity=90)"; filter: alpha(opacity=90); }
#nuage .nuage a.nuage9 { font-size:1.8em; opacity:0.95; -ms-filter: "alpha(opacity=95)"; filter: alpha(opacity=95); }
#nuage .nuage a.nuage10 { font-size:1.9em; opacity:1.0; -ms-filter: "alpha(opacity=100)"; filter: alpha(opacity=100); }
#nuage .nuage a:hover { opacity:1.0; -ms-filter: "alpha(opacity=100)"; filter: alpha(opacity=100); }

#qrcode {
    display: block;
    text-align: right;
    margin: 0;
}
#qrcode img { height: 37px; width: 37px; padding: 0.5em; }



/*************** STRUCTURE - bouton "participer à la vie du site" */
#participer { background-color: transparent; font-size:1em; text-align: right;  }
#participer div { display:inline; }
#participer div span { padding: 2px 10px; background-color: ' .
table_valeur($Pile["vars"], (string)'c_footer_bk', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'c_footer', null) .
'; }
#participer a, #participer a:link, #participer a:visited, #participer a:hover, #participer a:focus, #participer a:active { background-color: transparent; color: ' .
table_valeur($Pile["vars"], (string)'c_footer', null) .
'; font-size:1em; }

/*************** GENERAL - CONTENT */
#content img { padding: 0 1.5em; }
#content img.smiley { padding: 0; }
#content img.fullwidth { margin:0; padding: 0; }
#content img.groslogo { float:left; }
#contenu h1 { clear: both; padding-left: 1em; background-color: ' .
table_valeur($Pile["vars"], (string)'c_titraille_bk', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'c_titraille', null) .
';
	' .
((((((table_valeur($Pile["vars"], (string)'c_titraille_bk', null) != 'transparent')) ?' ' :'')) AND (((table_valeur($Pile["vars"], (string)'d_titraille_degrade', null)) ?'' :' ')))  ?
		(' ' . (	'
	background: ' .
	table_valeur($Pile["vars"], (string)'c_titraille_bk', null) .
	(($t2 = strval(filtre_embarque_fichier(extraire_attribut(filtrer('image_graver', filtrer('image_aplatir',filtrer('image_sepia',find_in_path('images/fond_degrade_fonce_en_bas4.png'),table_valeur($Pile["vars"], (string)'c_titraille_bk', null)),'jpg')),'src'))))!=='' ?
			(' url(' . $t2 . ') repeat-x top') :
			'') .
	';')) :
		'') .
'
	font-family: ' .
table_valeur($Pile["vars"], (string)'f_content', null) .
'; font-weight: bold; border-bottom: 4px solid ' .
(($t1 = strval(filtrer('couleur_foncerluminosite',table_valeur($Pile["vars"], (string)'c_titraille_bk', null))))!=='' ?
		('#' . $t1) :
		'') .
';
}
#content h2, .h2 { clear: left; color: ' .
table_valeur($Pile["vars"], (string)'c_titraille_ssniveaux', null) .
'; border-bottom: 2px solid ' .
table_valeur($Pile["vars"], (string)'c_titraille_ssniveaux_bk', null) .
'; font-family: ' .
table_valeur($Pile["vars"], (string)'f_content', null) .
'; font-weight: bold; }
#content h2, #content h3, #content h4, #content h5, #content h6  { margin-top: 3em; }
#content h2 a:link, #content h2 a:visited { color: ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_titraille_ssniveaux', null),'5','true')))!=='' ?
		('#' . $t1) :
		'') .
'; }
#content h3, .h3, #content h4, .h4, #content h5, .h5, #content h6, .h6 { clear: left; padding-left: .25em; border-left: 2px solid ' .
table_valeur($Pile["vars"], (string)'c_titraille_ssniveaux_bk', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'c_titraille_ssniveaux', null) .
'; font-family: ' .
table_valeur($Pile["vars"], (string)'f_content', null) .
'; font-weight: bold; text-align: left; }
#content h4, .h4 { border-left-color: ' .
table_valeur($Pile["vars"], (string)'c_titraille_ssniveaux_bk', null) .
'; clear: left; }
#content h5, .h5, #content h6, .h6 { border-left-width: 1px; }
#content h6, .h6 { border-left: none; font-style:italic; }
#content hr { padding: 0; margin: 2em 0; border: none; border-bottom: 1px solid ' .
table_valeur($Pile["vars"], (string)'c_titraille_ssniveaux_bk', null) .
'; height: 1px; width: 90%; text-align: left; clear: both; }
#content ul.spip { 
	list-style-type:none;
	color: #' .
filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_container', null),'10') .
'; font-size: 1em; 
	text-align: left;
	margin-left: 1.25em;
}
#content ul.spip li {
	' .
(($t1 = strval(filtre_embarque_fichier(extraire_attribut(filtrer('image_graver', filtrer('image_sepia',find_in_path('images/pucebleue.gif'),filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_container', null),'10'))),'src'))))!=='' ?
		('background-image: url(' . $t1 . ');
	background-repeat: no-repeat;
	background-position: 0 0.5em;') :
		'') .
'
	padding-left: 1.25em;
}
#content ul.spip ul.spip { margin-left: 0; padding-left: 0; }
#content img.gallerie { float: left; padding: 2px; margin: .5em 2em; background-color: #000; border: 3px solid #ebeff8; }
#content img.galleriebig { padding: 4px; margin: .5em 2em; background-color: #000; }

#content .contenu_chapitres { padding-left: 3em; border-left: 1px solid #39f; font-size: 80%; }
#content .contenu_chapitres h2, #content .contenu_chapitres h3, #content .contenu_chapitres h4, #content .contenu_chapitres h5, #content .contenu_chapitres h6 { color: #39f; font-size: 80%; text-align: left; }

/* tableaux */
#content table, table.spip { margin: 2em auto; width: auto; border-collapse: collapse; background-color: ' .
table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null) .
'; border: 1px solid ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null)))!=='' ?
		(' ' . $t1) :
		'') .
'; font-size: 1em; }
#content table.tableaudocs, table.spip.tableaudocs { width: 100%; }
#content tbody { width: auto; }
#content td, #content tr { font-size: 1em; }
#content table tr td h2 { padding: 0; margin: 0; background-color: none; }
#content table tr td .retoursommaire { padding: 0; margin: 0; float: right; text-align: inherit; }
#content table tr td .retoursommaire img { padding: 0; margin: 0; }
#content .spip td, #content .spip th { width: auto; vertical-align: top; padding: 5px; border: 1px solid ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null),'20','true')))!=='' ?
		(' #' . $t1) :
		'') .
'; text-align: left; }
#content thead, table.spip tr.row_first, table.spip thead th { width: auto; background-color: ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null),'10')))!=='' ?
		(' #' . $t1) :
		'') .
'; border: 1px solid ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null),'20','true')))!=='' ?
		(' #' . $t1) :
		'') .
'; color: ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_cadrestexte', null),'20','true')))!=='' ?
		(' #' . $t1) :
		'') .
'; font-size: 1.1em; text-align: center; }
#content tr.alt, table.spip tr.row_odd { background-color: ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null),'80','true')))!=='' ?
		(' #' . $t1) :
		'') .
'; color: ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_cadrestexte', null),'20','true')))!=='' ?
		(' #' . $t1) :
		'') .
'; }
#content tr.row_even { background-color: ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null),'5','true')))!=='' ?
		(' #' . $t1) :
		'') .
'; color: ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_cadrestexte', null),'5','true')))!=='' ?
		(' #' . $t1) :
		'') .
'; }
/* date picker de F&t */
#content div.popup-calendar h3 { margin-left:1em; }
#content div.popup-calendar td, #content div.popup-calendar th { padding:0; width:21px; }
html > body div.popup-calendar { left:auto; right:40px; }

.columns2 { -webkit-column-count: 2; -webkit-column-gap: 3em; -webkit-column-rule: 1px dotted #bbb; -moz-column-count: 2; -moz-column-gap: 3em; -moz-column-rule: 1px dotted #bbb; column-count: 2; column-gap: 3em; column-rule: 1px dotted #bbb; }
.columns2 div { -webkit-column-break-inside:avoid; break-inside:avoid; }
#content .columns2 h2 { margin-top:0; }

/* Agenda Programmation */
table.programmation caption { text-align: left; }
.programmation_nav { text-align: right; }
.programmation_agenda { margin-bottom: 1em; }
#content .programmation_agenda thead, .programmation_agenda table.spip tr.row_first, .programmation_agenda table.spip thead th { font-size: 1em; }

/*************** BLOCKS - CONTENT */
/* "popup" de connexion */
#connexion { padding: 0 1em; margin: 0; font-size:1.5em; background-color: #ffffff; border: 4px solid #777777; color: #000000; }
#connexion fieldset { padding-left: .25em; padding-right: .25em; padding-bottom: 3px; margin-top: 3px; margin-bottom: 5px; border: 1px solid #990000; }

/* ancre cachée pour "retour haut de page" */
#sommaire { clear: left; position: relative; width: auto; background-color: ' .
table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null) .
'; font-size: .9em; margin: 2em 0; padding-bottom: 1em; }
#sommaire h2 { width: auto; padding: 0 1em; margin-bottom: 0.6em; background-color: ' .
table_valeur($Pile["vars"], (string)'c_titraille_bk', null) .
'; color: ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'c_titraille', null)))!=='' ?
		(' ' . $t1) :
		'') .
';}
#sommaire > ul { margin-left: 3em; margin-bottom: 0;}
#sommaire > ul > li { list-style-type: initial; }

/* menu en haut du contenu (onglets) */
#menuhaut { background-color: ' .
table_valeur($Pile["vars"], (string)'c_menuhaut_bk', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'c_menuhaut', null) .
';
	' .
((((((table_valeur($Pile["vars"], (string)'c_menuhaut_bk', null) != 'transparent')) ?' ' :'')) AND (((table_valeur($Pile["vars"], (string)'d_menuhaut_degrade', null)) ?'' :' ')))  ?
		(' ' . (	'
	padding-top: 8px; padding-left: 8px; background: ' .
	table_valeur($Pile["vars"], (string)'c_menuhaut_bk', null) .
	(($t2 = strval(filtre_embarque_fichier(extraire_attribut(filtrer('image_graver', filtrer('image_aplatir',filtrer('image_sepia',find_in_path('images/fond_degrade_fonce_en_bas_menu.png'),table_valeur($Pile["vars"], (string)'c_menuhaut_bk', null)),'jpg')),'src'))))!=='' ?
			(' url(' . $t2 . ') repeat-x bottom') :
			'') .
	';')) :
		'') .
'
	font-size: ' .
interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/fontsizemenuhaut','1.2',false):'')) .
'em;
}

/* Menu Navigation Haute */
#navHaute { float: left; }
#navHaute ul { padding:0; }
#navHaute ul li { display: inline; padding-left: 2em; }
/* Menu Déroulant du haut */
#menuhaut ul { text-align: center; }
#menuhaut ul ul { text-align: left; padding-left: 0;}
#menuh > li a {background: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_bk', null) .
'; color:' .
table_valeur($Pile["vars"], (string)'c_menu_a', null) .
'; }
#menuh strong a, #menuh ul strong a {background: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_strong_bk', null) .
';color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_strong', null) .
'; text-shadow:none;}
#menuh ul a {background:' .
table_valeur($Pile["vars"], (string)'c_menu_a_bk', null) .
';color:' .
table_valeur($Pile["vars"], (string)'c_menu_a', null) .
';font-size:1.2em; text-transform:none}
.arrows-sprite, #menuh.drop .sf-sub-indicator, #menuh.drop ul li > a .sf-sub-indicator, #menuh.drop li.hover > a .sf-sub-indicator, #menuh.drop ul li.hover > a .sf-sub-indicator { background: url(' .
filtre_embarque_fichier(find_in_path('images/arrows_menuh.png')) .
') no-repeat; }
#menuh, #menuh ul { list-style: none; margin: 0; position: relative; }
#menuh li { position: relative; margin-top: 1%; }
#menuh li li { margin-top: auto; }
#menuh li li:first-child { border-top: 1px ' .
table_valeur($Pile["vars"], (string)'c_menu_a_hover_bk', null) .
'solid; }
#menuh li li a { border-left: 1px solid ' .
table_valeur($Pile["vars"], (string)'c_menu_a_hover_bk', null) .
'; border-bottom: 1px solid ' .
table_valeur($Pile["vars"], (string)'c_menu_a_hover_bk', null) .
'; border-right: 1px solid ' .
table_valeur($Pile["vars"], (string)'c_menu_a_hover_bk', null) .
'; }
#menuh li li li a { padding-left: 24px; }
#menuh li li li li a { padding-left: 32px; }
#menuh > li { display:inline-block;line-height: 1.7em; margin-right:0.4em; position:relative; vertical-align:middle; }
#menuh > li:first-child { margin-left: 0; }
#menuh > li > a { background: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_bk', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a', null) .
'; font-weight: bold; }
#menuh ul a { color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a', null) .
'; }
#menuh a { display: block; font-size: 1.2em; padding: 8px 16px; position: relative; text-decoration: none; }
#menuh li.hover > a { background: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_active_bk', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_active', null) .
'; }
#menuh li.hover > a, #menuh li > a:focus, #menuh a:hover, #menuh a:focus { background: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_hover_bk', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_hover', null) .
'; }
#menuh .active > a, #menuh a:active, #menuh li > a:active { background: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_active_bk', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_active', null) .
'; }
#menuh.drop { padding: 0 1%; }
#menuh.drop ul, .hasJS #menuh ul { width: 200px; position: absolute; margin-top: -99999px; z-index: 999; }
#menuh.drop ul ul { left: 200px; top: 0; }
#menuh.drop li a { padding-left: 16px; }
#menuh.drop li.hover > ul, #menuh.drop li > a:focus + ul { margin-top: 0; }
#menuh.drop .sf-sub-indicator { background-position: 0 -22px; display: block; overflow: hidden; height: 10px; width: 10px; position: absolute; right: 0.75em; top: 10px; }
#menuh.drop a.sf-with-ul { padding-right: 24px; }
#menuh.drop ul li > a .sf-sub-indicator { background-position: 0 0; }
#menuh.drop li.hover > a .sf-sub-indicator { background-position: 0 -33px; }
#menuh.drop ul li.hover > a .sf-sub-indicator { background-position: 0 -11px; }
#menuhaut li.cadre_recherche { float: right; }

@media screen and (max-width:' .
table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
'px) {
  ' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("SIDR", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . '#menuhaut { display: none; }
  .sidr ul li a, .sidr ul li span { display: inline-block; }
  .sidr ul li span { padding-left: 0; }
  .sidr ul li a { padding-left: 15px;}
  .sidr ul li img { position: relative; float: left; top: 18px; padding-right: 8px; }
  .sidr ul li ul li span { padding-left: 0; }
  .sidr ul li ul li a { padding-left: 39px;}
  .sidr ul li ul li img { position: relative; float: left; top: 12px; padding-right: 8px; }
  .sidr ul li ul li ul li a { padding-left: 63px;}
  .sidr ul li ul li ul li ul li a { padding-left: 87px;}
  .sidr ul li ul li ul li ul li ul li a { padding-left: 111px;}
  ') :
		'') .
'
  #menuhaut ul { text-align: left; }
  #menuh > li { display: block; float: none; margin-top: 0.4em; margin-left: 0; }
  #menuh.drop { padding: 1%; }
  #menuh.drop ul { width: auto !important; position: relative; margin-top: 0; }
  #menuh.drop ul ul { left: auto !important; }
  #menuh.drop li li .menuarticles { background-position: 17px 50% !important; }
  #menuh.drop li li a.menuarticles { padding-left: 27px; }
  #menuh.drop li li li a { padding-left: 24px; }
  #menuh.drop li li li .menuarticles { background-position: 17px 50% !important; }
  #menuh.drop li li li li a { padding-left: 32px; }
  #menuh.drop li li li li .menuarticles { background-position: 29px 50% !important; }
  #menuh.drop li li li li li a { padding-left: 48px; }
  #menuh.drop li li li li li .menuarticles { background-position: 41px 50% !important; }
  #menuh.drop li.hover > a { background:' .
table_valeur($Pile["vars"], (string)'c_menu_a_hover_bk', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_hover', null) .
'; }
  #menuh.drop > li.hover > a { background:  ' .
table_valeur($Pile["vars"], (string)'c_menu_a_active_bk', null) .
'; color:  ' .
table_valeur($Pile["vars"], (string)'c_menu_a_active', null) .
'; }
  #menuh.drop li a:hover,
  #menuh.drop li a:focus { background:' .
table_valeur($Pile["vars"], (string)'c_menu_a_hover_bk', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_hover', null) .
'; }
  #menuh.drop .sf-sub-indicator { display: none; }
  #menuh.drop li li li {display:none;} /* n\'afficher que le premier niveau du menu déroulant */
}

@media screen and (max-width:640px) {
  #menuh.drop li li {display:none;} /* cacher tous les éléments déroulant */
}

/* Breadcrumbs/Ariane */
#miettesdepain { padding: .25em 88px 1em 1em; color: ' .
table_valeur($Pile["vars"], (string)'c_fildariane', null) .
'; font-size: .9em; font-style: italic; min-height: 40px; }
#miettesdepain img { width: 8px; height: 11px; padding: 0; background: url(' .
filtre_embarque_fichier(extraire_attribut(filtrer('image_graver', filtrer('image_sepia',find_in_path('images/chevrons.gif'),table_valeur($Pile["vars"], (string)'c_chevrons', null))),'src')) .
') no-repeat center; }
#miettesdepain ul { margin: 0; }
#miettesdepain ul li { display: inline; }
#miettesdepain ul li a { padding-right: 14px; background: url(' .
filtre_embarque_fichier(extraire_attribut(filtrer('image_graver', filtrer('image_sepia',find_in_path('images/chevrons.gif'),table_valeur($Pile["vars"], (string)'c_chevrons', null))),'src')) .
') right no-repeat; }

/* Onglets de la page de téléchargement */

.onglets ul { border-bottom:1px solid ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null),'30')))!=='' ?
		('#' . $t1) :
		'') .
'; padding-bottom:5px; text-align:right; }
.onglets li { display: inline; margin:0 5px;}
.onglets li a, .onglets li strong { border:1px solid ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null),'30')))!=='' ?
		('#' . $t1) :
		'') .
'; padding:5px 10px; }
.onglets li strong { background: ' .
table_valeur($Pile["vars"], (string)'c_container_bk', null) .
'; border-bottom-color: ' .
table_valeur($Pile["vars"], (string)'c_container_bk', null) .
';}
#telecharger .highlight_anchor {
  background: transparent;
  border: none;
  padding: inherit;
}

/* sommaire en début d\'article/de page */
#artrecents {
	display: inline; overflow: auto; float: right; position: relative; z-index: 100; width: 160px; max-height: 350px; padding: 0; margin: 0 8px; color: ' .
table_valeur($Pile["vars"], (string)'c_navigation', null) .
'; font-size: 1em;
	' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null)))!=='' ?
		('background: ' . $t1 . ';') :
		'') .
' ' .
((((((table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null) != 'transparent')) ?' ' :'')) AND (((table_valeur($Pile["vars"], (string)'d_cartouche_degrade', null)) ?'' :' ')))  ?
		(' ' . (	' background: ' .
	table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null) .
	(($t2 = strval(filtre_embarque_fichier(extraire_attribut(filtrer('image_graver', filtrer('image_aplatir',filtrer('image_sepia',find_in_path('images/fond_degrade_fonce_en_bas3.png'),table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null)),'jpg')),'src'))))!=='' ?
			(' url(' . $t2 . ') repeat-x top') :
			'') .
	'; ')) :
		'') .
'
	border: 1px solid ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null),'30')))!=='' ?
		('#' . $t1) :
		'') .
';
	border-bottom-color: ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null),'70')))!=='' ?
		('#' . $t1) :
		'') .
';
	border-right-color: ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null),'70')))!=='' ?
		('#' . $t1) :
		'') .
';
	font-size: ' .
interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/fontsizeartrecents','1.1',false):'')) .
'em;
}
#artrecents a { display: block; background: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_bk', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a', null) .
'; font-weight: normal; text-align: left; text-decoration: none; }
#artrecents .odd { background-color: transparent; color: ' .
table_valeur($Pile["vars"], (string)'c_cadrestexte', null) .
';}
#artrecents .odd a { background-color: transparent; color: inherit;}
#artrecents ul { margin-left: 1em; margin-bottom: 0; }
#artrecents li, #artrecents li.odd { margin-right:2px; list-style-type: disc; }
/* documents dans sommaire début d\'article */
.docjoints { clear: left; }
.docjoints ul { padding: 0; padding-right:5px; padding-left:25px; margin: 0; }
.docjoints img { float: left; padding-left: 0.5em; padding-right: 0.5em; }

/* agenda */
table.agenda, table.agenda tr, table.agenda th, table.agenda td, table.agenda caption, table.agenda caption h2 { padding: 0; margin: 0; color: #000000; text-align: center; }
table.agenda caption { width: 100%; margin: auto; background-color: ' .
table_valeur($Pile["vars"], (string)'c_container_bk', null) .
'; border: none; color: ' .
table_valeur($Pile["vars"], (string)'c_container', null) .
'; }
table.agenda th { width:14% !important; padding: .2em 0; font-size: 1.1em; }
table.agenda tr, table.agenda th { border-collapse: collapse; border: 1px solid ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null),'90')))!=='' ?
		(' #' . $t1) :
		'') .
'; }
table.agenda td { width:14% !important; border-collapse: collapse; border: 1px solid ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null),'90')))!=='' ?
		(' #' . $t1) :
		'') .
'; font-size: 1em; }
table.agenda { background: transparent; border-collapse: collapse; border: 2px solid ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null),'20','true')))!=='' ?
		(' #' . $t1) :
		'') .
'; }
table.agenda em { background-color:' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null),'90')))!=='' ?
		(' #' . $t1) :
		'') .
'; }
table.agenda td a, table.agenda td a:link, table.agenda td a:visited, table.agenda td a:active { display: block; background:' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null),'90')))!=='' ?
		(' #' . $t1) :
		'') .
' url(' .
filtre_embarque_fichier(find_in_path('images/coinagenda.gif')) .
') top right no-repeat; color: ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null),'20','true')))!=='' ?
		(' #' . $t1) :
		'') .
'; font-weight: bold; text-decoration: none; }
table.agenda td a:hover, table.agenda td a:focus { background-color:' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null),'20','true')))!=='' ?
		(' #' . $t1) :
		'') .
'; color:' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null),'90')))!=='' ?
		(' #' . $t1) :
		'') .
'; font-weight: bold; }
table.agenda td.agendathisday, table.agenda td.agendathismonth, table.agenda td.agendanotthismonth { width:14% !important; background-color:' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'c_menu_a_bk', null)))!=='' ?
		(' ' . $t1) :
		'') .
'; border: 2px solid' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'c_menu_a_bk', null)))!=='' ?
		(' ' . $t1) :
		'') .
'; color:' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'c_menu_a', null)))!=='' ?
		(' ' . $t1) :
		'') .
'; }
table.agenda td.agendathismonth { background-color:' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null),'20')))!=='' ?
		(' #' . $t1) :
		'') .
'; border-width: 1px; color:' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null),'80')))!=='' ?
		(' #' . $t1) :
		'') .
'; }
table.agenda td.agendanotthismonth { background-color: ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',filtrer('couleur_foncerluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null)),'80')))!=='' ?
		(' #' . $t1) :
		'') .
'; border-width: 1px; color: ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',filtrer('couleur_foncerluminosite',table_valeur($Pile["vars"], (string)'c_menu_a', null)),'80')))!=='' ?
		(' #' . $t1) :
		'') .
'; }
.agendahead { width:14% !important; padding: 1px 1em; background-color:' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null),'30')))!=='' ?
		(' #' . $t1) :
		'') .
'; border: 1px solid' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null),'20','true')))!=='' ?
		(' #' . $t1) :
		'') .
'; color:' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null),'20','true')))!=='' ?
		(' #' . $t1) :
		'') .
'; font-size: 1.1em; }
/* jour avec événement */
dl.event { padding: 0; margin: 2em 0; }
.event dt { position: relative; left: 0; top: 1.1em; width: 7em; font-weight: bold; }
.event dd { padding: 0 0 .5em; padding-right:0; padding-left:.5em; margin: 0; margin-left:8em; border-left: 1px solid #000000; }
.highlight_anchor { background: ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_titraille_bk', null),'60','true')))!=='' ?
		('#' . $t1) :
		'') .
'; border: 1px solid ' .
(($t1 = strval(filtrer('couleur_foncerluminosite',table_valeur($Pile["vars"], (string)'c_titraille_bk', null))))!=='' ?
		('#' . $t1) :
		'') .
'; padding: .5em; }
.ical { float:right; }

/* Proposition d\'evenement */
p.proposer_evenement_explication {margin:0 10px; border: 1px dotted; padding: 2px;}
.formulaire_proposer_evenement {margin:0 10px !important;}
.formulaire_proposer_evenement .editer_horaire {margin-top:0 !important;}
.formulaire_proposer_evenement p.boutons {text-align: right !important; margin-right: 10px;}


/* google */
#googlesearch { padding: 5px; margin: 0 10px 10px; margin-right:10px; margin-left:5px; background-color: #fff; color: #000; font-size: .9em; text-decoration: none; }
#googleadsense { padding-top: 1em; text-align:center; }
#google_picasa { margin: 1em 0 .2em; text-align: center; }

/* barre d\'outils pour publication dans forum */
#content table.spip_barre a img { padding: 3px; background-color: #ffddaa; border: 1px solid #ffffff; border-right-color: #aa9966; border-bottom-color: #aa9966; }
#content table.spip_barre a:hover img, #content table.spip_barre a:focus img { padding: 3px; margin: 0; background-color: #f8f8f4; border: 1px solid #808080; }

/* liste de bougies */
#graversonnom { margin: 1em 0; }
#graversonnom ul { list-style: none; }
#graversonnom img { float: left; padding: 0; margin: 0; }

/*************** HOME - MODE NEWS */
.modenews dt { padding: .3em; padding-right:0; padding-left:1em; font-size: 120%; }
.modenews .datepublication { font-size: .6em; font-weight: normal; }
.modenews .savoirplus { clear: right; margin-bottom: 1em; font-style: italic; text-align: right; }
/* articles "signalés" */
.alaune dl { background: url(' .
filtre_embarque_fichier(find_in_path('images/star.png')) .
') no-repeat left .6em transparent; }
#sommaire_mode_actualites .alaune dl { background-image: none; }
#sommaire_mode_actualites .alaune dd { margin-left: 0; }
#sommaire_mode_actualites #col2 ul { padding-left: 1em; }
ul.alaune li { list-style-image: url(' .
filtre_embarque_fichier(find_in_path('images/star.png')) .
'); }
.alaune dd p { margin-bottom: 0; margin-top: 0; }

/*************** HOME - MODE Actualités */
.modeactualites #col1 { width:50%; float:left;}
.modeactualites #col2 { margin-left:5%; width:45%; float:left; }
#content .modeactualites h2 { margin-left:0; }

/*************** HOME - MODE Blog */
/** Derniers Articles */
.modeblog_art dl { margin-top: 10px;}
.modeblog_art dt { 
  padding: 0.8em 0 0.3em 10px;
  font-size: 120%; 
  float: right;
  width: 480px;
  margin-right: 10px;
}
.modeblog_art dt.quiquand { text-align: right; padding: 10px 0; }
.modeblog_art dd {margin-left: 0px; padding: 5px 5px 5px 0px; }
#content .modeblog_art img {
  padding: 10px 0 0 20px;
  position: absolute;
}
.modeblog_art .datepublication { 
  font-size: .5em; 
  font-weight: normal;
  float: none;
  padding: 0;
}
.modeblog_art span {
  font-size: .7em;
}
.modeblog_art p { margin-left:200px; margin-right: 10px;
}

/** A La Une **/
.blog_alaune {
  font-size: 1em
}
.blog_alaune dl {
  float: left;
  width: 49%;
  height: 100px;
  padding: 10px 0 5px 0;
  background-color: ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_container_bk', null),'10')))!=='' ?
		('#' . $t1) :
		'') .
';
}
.blog_alaune dt {
  float: right;
  width: 215px;
  padding: 10px 7px 15px 0px;
}
#content .blog_alaune img {
  padding: 0 0 0 0;
  margin-left: -30px;
}
.blog_alaune .une_gauche {
   margin-right: 2%;
}

/** Menu Droit Blog **/
/*.forum { padding: 2px 0; }
.forum-auteur-blog { float: left; padding-right: 5px; color: #000000; font-size: 11px; padding-top: 2px; }
.forum-item-blog { font-size: 11px; padding-top: 2px; } */
.forum_sommaire .datepublication {
    float: none;
    display: inline;
}


/*************** PAGE DE RUBRIQUE - LISTE D\'ARTICLES */
/* liste d\'articles dans page de rubriques */
dl#listearticlerubrique { clear:left; padding: 0; margin: .5em 0 1.5em; }
#listearticlerubrique dt { clear:right; padding: 4px 0 2px; padding-right:0; padding-left:.5em; border-left: 4px solid ' .
(($t1 = strval(filtrer('couleur_foncerluminosite',table_valeur($Pile["vars"], (string)'c_titraille_bk', null))))!=='' ?
		('#' . $t1) :
		'') .
'; border-bottom: 1px solid ' .
(($t1 = strval(filtrer('couleur_foncerluminosite',table_valeur($Pile["vars"], (string)'c_titraille_bk', null))))!=='' ?
		('#' . $t1) :
		'') .
'; }
#listearticlerubrique dt.h2 { margin-bottom: 0; }
#listearticlerubrique dt.nogap { border-bottom: none; }
#listearticlerubrique dt .datepublication, #listearticlerubrique dt .liste_auteurs { margin-right: 0; padding-right: 0; background: transparent; font-size: 0.5em; }
#listearticlerubrique dt .liste_auteurs { color: ' .
(($t1 = strval(filtrer('couleur_saturer',filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_container', null),'30'),'0')))!=='' ?
		('#' . $t1) :
		'') .
'; font-weight: normal; font-style: italic; }
#listearticlerubrique dt .liste_auteurs:first-letter { text-transform: uppercase; }
#listearticlerubrique dt.haslogo img.logo { padding: 0; }
#listearticlerubrique dd { padding: 2px .5em 4px 1em; padding-right:.5em; padding-left:1em; margin-left: 2em; margin-bottom: 1.5em; border-left: 2px solid ' .
(($t1 = strval(filtrer('couleur_foncerluminosite',table_valeur($Pile["vars"], (string)'c_titraille_bk', null))))!=='' ?
		('#' . $t1) :
		'') .
'; }
#content dd p:first-of-type { margin-top: 0.25rem; }

/*************** ARTICLE - CONTENT */
.surtitre, .soustitre, .datepublication { color: inherit; font-size: .9em; font-weight: bold; padding: 0 1em;}
.surtitre { float: left; }
.datepublication { float: right; display: block; background-color: ' .
table_valeur($Pile["vars"], (string)'c_container_bk', null) .
'; color: ' .
(($t1 = strval(filtrer('couleur_saturer',filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_container', null),'30'),'0')))!=='' ?
		('#' . $t1) :
		'') .
'; font-weight: normal; font-style: italic; }
.lienarchives { float: right; margin-right: 1em; }

blockquote.spip { padding: .3em 1em .4em; padding-right:1em; padding-left:70px; margin: 1em 1.5em 1.5em 1.5em; background: ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null)))!=='' ?
		(' ' . $t1) :
		'') .
' url(' .
filtre_embarque_fichier(find_in_path('images/quoteleft.gif')) .
') no-repeat top left; border: none; color: ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'c_cadrestexte', null)))!=='' ?
		(' ' . $t1) :
		'') .
'; overflow: auto; }
blockquote.spip_poesie { padding: .5em; padding-right:50px; padding-left:1em; margin: 1em 2em; margin-right:2em; margin-left:1em; background: ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null)))!=='' ?
		(' ' . $t1) :
		'') .
' top right url(' .
filtre_embarque_fichier(find_in_path('images/poesie.gif')) .
') no-repeat; border:none; border-right: 1px solid ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null))))!=='' ?
		(' #' . $t1) :
		'') .
'; border-top: 1px solid ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null),'40')))!=='' ?
		(' #' . $t1) :
		'') .
'; -moz-border-radius-bottomleft: 1em; -webkit-border-bottom-left-radius: 1em; color: ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'c_cadrestexte', null)))!=='' ?
		(' ' . $t1) :
		'') .
'; }
div.spip_poesie div { margin-left: 60px; text-indent: -60px; }

.spip_documents_center { margin: auto; text-align: center; }
.spip_documents_left { clear: left; margin-right: 15px; text-align: center; }
.spip_documents_right { clear: right; margin-left: 15px; text-align: center; }
.spip_documents img { padding: 0 !important; border: none; }
.spip_documents { text-align: center; }

.texte, #footer #bandeaucontact { font-size: ' .
interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/fontsizecontenu','1.3',false):'')) .
'em; }
/* Les césures ne sont pas encore au point : 
    - elles se font dans FF10 sur des paragraphe de moins de 2 lignes, 
    - et il peut y en avoir sur 2 lignes consécutives
-moz-hyphens : auto; -webkit-hyphens : auto; -ms-hyphens : auto; hyphens : auto;
*/

.right { text-align: right; }

/* bloc d\'intro */
#letexte { clear: right; padding: 0 30px; font-size: 1.1em; line-height: 120%; }
#letexteblog { clear: left; padding: 0 10px 0 10px; font-size: 1.1em; line-height: 120%; }
#letexte ul { font-size: 1em; line-height: 120%; }

/* Rectification pour la météo sur 5 jours */
.rainette_previsions_24h {
	width:22%;
	margin: .4em 2% 2em 0;
	-webkit-box-shadow: 2px 2px 10px -2px rgba(170,170,170,1);
    -moz-box-shadow: 2px 2px 10px -2px rgba(170,170,170,1);
    box-shadow: 2px 2px 10px -2px rgba(170,170,170,1);
}
.rainette_previsions_24h .jour, .rainette_previsions_24h .date,.rainette_previsions_24h .contenu {
	width:100%;
}

.cadreinfo { padding: 5px; margin: 20px 10px 10px; ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a', null),'20','true')))!=='' ?
		('color: #' . $t1 . ';') :
		'') .
' ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null),'20','true')))!=='' ?
		('background: #' . $t1 . ';') :
		'') .
' text-decoration: none; font-size: 1em;
	' .
((((((table_valeur($Pile["vars"], (string)'c_menu_a_bk', null) != 'transparent')) ?' ' :'')) AND (((table_valeur($Pile["vars"], (string)'d_cadreinfo_degrade', null)) ?'' :' ')))  ?
		(' ' . (	' 
	background: ' .
	(($t2 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null),'20','true')))!=='' ?
			('#' . $t2) :
			'') .
	(($t2 = strval(filtre_embarque_fichier(extraire_attribut(filtrer('image_graver', filtrer('image_aplatir',filtrer('image_sepia',find_in_path('images/fond_degrade_fonce_en_bas3.png'),filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null),'20','true')),'jpg')),'src'))))!=='' ?
			(' url(' . $t2 . ') repeat-x top') :
			'') .
	';')) :
		'') .
'
}

.hasJS .escapelinks, .hidden { position:absolute !important; overflow:hidden !important; top:-2000px !important; left:-2000px !important; height:0 !important; width:0 !important; }
.clearfix:after { content: "\\0020"; display: block; height: 0; clear: both; visibility: hidden; overflow: hidden; }
.espaceavant { margin-top: 10px; }

.centrer_div { clear: both; margin-top: 1em; margin-bottom: .5em; text-align: center; }

.texteencadre-spip { position: relative; padding: .25em; margin: 1em 0; background-color: ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null)))!=='' ?
		(' ' . $t1) :
		'') .
'; border: 2px solid ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null))))!=='' ?
		(' #' . $t1) :
		'') .
'; border-left: 1px solid ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null),'70')))!=='' ?
		(' #' . $t1) :
		'') .
'; border-top: 1px solid ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null),'70')))!=='' ?
		(' #' . $t1) :
		'') .
'; color: ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'c_cadrestexte', null)))!=='' ?
		(' ' . $t1) :
		'') .
'; }
.caractencadre-spip { color: #f60; font-weight: bold; background-color: transparent; }
.caractencadre2-spip { color: #009; font-weight: bold;  background-color: transparent; }

' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_layout/positioncartouchetitre','contenu',false):'') == 'haut')) ?'' :' '))))!=='' ?
		($t1 . '
.cartouche { position: relative; padding-top: 2em; padding-bottom: 3em; }
') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_layout/positioncartouchetitre','contenu',false):'') == 'haut')) ?' ' :''))))!=='' ?
		($t1 . '
#contenu h1 {
	font-size: 3em;
	margin-bottom: 0;
}
') :
		'') .
'
#miettesdepain ul {
	border-bottom: none;
}

.chapo, .ps, #artrecents.artrecent_bas, .notes { clear: both; background-color: ' .
table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null) .
';  color: ' .
table_valeur($Pile["vars"], (string)'c_cadrestexte', null) .
'; overflow: auto; -webkit-border-radius: 1em; -moz-border-radius: 1em; border-radius: 1em; border: none;margin: 0 0 1em 0; padding: 0 1em .5em 1em; }
.ps { margin: 0 0 1em 0; padding: .5em 1em; }
#artrecents.artrecent_bas { display: block; overflow: auto; float: none; position: relative; z-index: auto; width: auto; max-height: none; margin: 3em 2.2em; }
#artrecents h2, #signature h2 { color: ' .
table_valeur($Pile["vars"], (string)'c_cadrestexte', null) .
'; background-image: none; border-bottom: none; padding: 0.5em 0 0 0; text-align: left; margin: 0; }

.retoursommaire { float: right; }
#content .retoursommaire img { margin:0; padding: 1em 0 0 1em; }

.menuarticles { background-image: url(' .
filtre_embarque_fichier(extraire_attribut(filtrer('image_graver', filtrer('image_sepia',find_in_path('images/chevrons.gif'),table_valeur($Pile["vars"], (string)'c_chevrons', null))),'src')) .
') !important; background-position: 5px !important; background-repeat: no-repeat !important; }

.rubriques_chapitres { padding-left: 1em; border-left: 2px solid #076b8b; }

/* forum en bas d\'un article */

/* comments */
#content .comments h2 { background-color: ' .
table_valeur($Pile["vars"], (string)'c_titraille_bk', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'c_titraille', null) .
';
	' .
((((((table_valeur($Pile["vars"], (string)'c_titraille_bk', null) != 'transparent')) ?' ' :'')) AND (((table_valeur($Pile["vars"], (string)'d_titraille_degrade', null)) ?'' :' ')))  ?
		(' ' . (	'
	background: ' .
	table_valeur($Pile["vars"], (string)'c_titraille_bk', null) .
	(($t2 = strval(filtre_embarque_fichier(extraire_attribut(filtrer('image_graver', filtrer('image_aplatir',filtrer('image_sepia',find_in_path('images/fond_degrade_fonce_en_bas4.png'),table_valeur($Pile["vars"], (string)'c_titraille_bk', null)),'jpg')),'src'))))!=='' ?
			(' url(' . $t2 . ') repeat-x top') :
			'') .
	';')) :
		'') .
'
	font-family: ' .
table_valeur($Pile["vars"], (string)'f_content', null) .
'; font-size: 2em; font-weight: bold; letter-spacing: 1px; margin-bottom: 0em; margin-top: 0em; margin-right: 0; margin-left: 0; padding-top: 0.7em; padding-left: .5em; padding-bottom: 0.5em; padding-right: 0; border-bottom: 4px solid ' .
(($t1 = strval(filtrer('couleur_foncerluminosite',table_valeur($Pile["vars"], (string)'c_titraille_bk', null))))!=='' ?
		('#' . $t1) :
		'') .
'; line-height: 1.5em;
}
#content .comments h2{ background-image: none; border: none; }
.comments-list { margin: .5em 0 0 0; background: ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_container_bk', null),'5')))!=='' ?
		(' #' . $t1) :
		'') .
'; color: ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_container', null),'5')))!=='' ?
		(' #' . $t1) :
		'') .
'; }
.comments-list ul, .comments-thread ul { padding-left: 0; }
.comments-list ul ul, .comments-thread ul ul { padding-left: 16px; }
.odd {background: ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_container_bk', null),'5')))!=='' ?
		(' #' . $t1) :
		'') .
';}
p.comment-meta { position:relative; padding-left: 5px; background-color: ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_titraille_bk', null),'5','true')))!=='' ?
		(' #' . $t1) :
		'') .
'; border-bottom: 1px solid ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_titraille_bk', null))))!=='' ?
		(' #' . $t1) :
		'') .
'; color: ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_titraille', null),'5','true')))!=='' ?
		(' #' . $t1) :
		'') .
';text-align: right; height:2.4em;}
.comment-meta img.avatar { vertical-align:top;}
.comment-content, .modererforum { padding-left: 1%; }
#formulaire_forum li { clear : none; }
#formulaire_forum li input.text { border: 0.06em solid ' .
(($t1 = strval(filtrer('couleur_foncerluminosite',table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null))))!=='' ?
		(' #' . $t1) :
		'') .
'; border-bottom-color: ' .
(($t1 = strval(filtrer('couleur_eclaircirluminosite',table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null))))!=='' ?
		(' #' . $t1) :
		'') .
'; border-right-color: ' .
(($t1 = strval(filtrer('couleur_eclaircirluminosite',table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null))))!=='' ?
		(' #' . $t1) :
		'') .
'; }
fieldset.qui p , .comments-feed{ padding-left: 0.75em; }
.modererforum button { background-color: ' .
table_valeur($Pile["vars"], (string)'c_titraille_bk', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'c_titraille', null) .
';}

#cadreforum { margin: .5em 0 0 0; background: ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_container_bk', null),'5')))!=='' ?
		(' #' . $t1) :
		'') .
'; color: ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_container', null),'5')))!=='' ?
		(' #' . $t1) :
		'') .
'; }
#cadreforum h1 { padding-right: 0; margin-right: 0; margin-left: 0; background-image: none; border: none; }
#cadreforum ul { list-style-image: none; list-style-type: none; padding-left: 0; }
#cadreforum ul ul { padding-left: 16px; }
.forum-auteur { float: right; font-style: italic; padding-right: 5px; }
.logo-auteur { float: right; }
.forum-chapo { position:relative; padding-left: 5px; background-color: ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_titraille_bk', null),'5','true')))!=='' ?
		(' #' . $t1) :
		'') .
'; border-bottom: 1px solid ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_titraille_bk', null))))!=='' ?
		(' #' . $t1) :
		'') .
'; color: ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_titraille', null),'5','true')))!=='' ?
		(' #' . $t1) :
		'') .
'; }
.forum-item { padding-left: 1%; padding-right: 1%; margin-bottom: 5px; }
.forum-repondre, p.repondre { clear: both; margin: 0.5em 1em; margin-right:1em; margin-left:4em; border-top: 1px solid ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_titraille_bk', null))))!=='' ?
		(' #' . $t1) :
		'') .
'; text-align: right; }
.forum-repondre a { padding: 0 1em; background-color:' .
table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null) .
'; border: 1px solid ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null),'30')))!=='' ?
		(' #' . $t1) :
		'') .
'; -moz-border-radius-bottomleft: .5em; -webkit-border-bottom-left-radius: .5em; -moz-border-radius-bottomright: .5em; -webkit-border-bottom-right-radius: .5em; }
.forum-repondre-message { padding-right: 5px; margin-top: 3px; text-align: right; }

/* mise en forme spip */
#content a.spip_out { padding-right: 14px; background: transparent url(' .
filtre_embarque_fichier(find_in_path('images/out.gif')) .
') no-repeat scroll right center; color: ' .
table_valeur($Pile["vars"], (string)'c_link', null) .
'; }
.spip_bouton { margin: 0; width: auto; font-size: .9em; font-weight: bold; text-align: right; }
.okfield, .spip_bouton input { border: none; background-color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_bk', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a', null) .
'; }
#letexte form .spip_bouton { text-align: right; }
.spip_surligne { background: #ffcc00; color: #293778; }
.spip_code { color: ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_container', null),'30')))!=='' ?
		('#' . $t1) :
		'') .
' }
.hyperlien { clear: left; }
#carto { clear: both; color: #000000; }
#content .carte_gis img { padding:0; }

/* logos (?!) */
.logo_modenews { float: right; clear: right; }
.logo_modeblog { float :left; clear: left; }
#content .logo_auteur { margin: 0; padding: 0 1.5em 0 0; float: right; position: relative; z-index: 2; }
#content .logo_article, #content .logo_rubrique, #content .logo_breve { float:left; padding-left: 0; padding-right: 0.5em; }
#content .cartouche .logo_article, #content .cartouche .logo_rubrique, #content .cartouche .logo_breve { padding-bottom: 1em; }
.logo_agenda { float: left; padding: .2em 0.5em !important; }
.menu_right_logo { margin: 3px 0; }
.menu_haut_logo { padding: 0 4px 0 0; margin: 0; vertical-align: middle; }
.menu_gauche_logo { clear: right; float: right; margin: 0 4px; }
#menuhaut .cadena { float: right; margin: 0; }
.menu_footer_logo { padding: 0 4px 0 0; margin: 0; vertical-align: bottom; }

/* pétition */
#signature { padding: 5px; padding-right:5px; padding-left:15px; margin-bottom: 5px; background: #eee; border: 2px solid #999999; border-left: 1px solid #eeeeee; border-top: 1px solid #eeeeee; font-size: .9em; }

/* notes de bas de page */
.notes p { padding: 0; padding-left: 1.9em; margin: .3em 0; text-indent: -1.9em; }

/* dates d\'événements */
#ArticleAgendaDetail li { margin-bottom: .5em; }
#ArticleAgendaDetail ul.spip li { margin-bottom: 0; margin-left: .5em; }
#ArticleAgendaDetail dt { border-bottom: 1px solid ' .
(($t1 = strval(filtrer('couleur_foncerluminosite',table_valeur($Pile["vars"], (string)'c_titraille_bk', null))))!=='' ?
		('#' . $t1) :
		'') .
'; }
#ArticleAgendaDetail dd { padding-left: 1em; margin-left: 1.2em; margin-bottom: 0; padding-bottom: .5em; padding-top: 0.5em; border-left: 1px solid ' .
(($t1 = strval(filtrer('couleur_foncerluminosite',table_valeur($Pile["vars"], (string)'c_titraille_bk', null))))!=='' ?
		('#' . $t1) :
		'') .
'; }
#ArticleAgendaDetail dd:last-child { border-bottom-left-radius: 10px; }
#ArticleAgendaDetail .notes { background-color: ' .
table_valeur($Pile["vars"], (string)'c_container_bk', null) .
'; border-bottom: none; border-right: none; border-top: none; color: ' .
table_valeur($Pile["vars"], (string)'c_container', null) .
';  line-height: 1em; margin-top:0; padding-bottom: 0; }

/* Favoris */
.formulaire_favori { float: right; position: relative; top: -21px; }
.googleplusun { float: right; position: relative; top: -10px; }
.formulaire_favori form button.ajouter_favori span { position:absolute !important; overflow:hidden !important; top:-2000px !important; left:-2000px !important; height:0 !important; width:0 !important; }
.formulaire_favori form button.ajouter_favori:hover span { visibility: hidden; }
#content .formulaire_favori form button.ajouter_favori img { padding: 0; }

/*************** AGENDA - CONTENT */
/* statut de l\'événement */
dd.agendastatut { margin-left: -2em; padding: .3em 0; }
strong.agendastatut { padding: .1em 1em; margin-right: 1em; border: 1px solid #FF0000; border-left-width: 4px; border-right-width: 4px; }

/*************** GALLERY - CONTENT */
/* si pas de JS (?) */
#document_actif { padding: .5em 0 1em; margin: 1em 0; text-align: center; }
#document_actif h2 { margin-left: 0; }
#document_actif dl { margin: 1em 0; color: inherit; }
#document_actif dt { padding: 0; margin: 0; color: inherit; font-weight: bold; font-size: 120%; }
#document_actif dd { padding: 0; margin: 0 0 .5em; color: inherit; font-style: italic; }
/* photos sous la grande */
#documents_portfolio { clear: both; }
#documents_portfolio img { padding: 0; margin: 0 1em .5em; margin-right:1em; margin-left:0; border: 2px solid #' .
filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_cadrestexte_bk', null),'0') .
'; }
/* ?? */
#galerie { margin: 3em 0; }
#galerie dd { padding: 0.2em 1em; margin:0.5em 1em 0 1em; background-color: ' .
table_valeur($Pile["vars"], (string)'c_container_bk', null) .
'; border: 1px solid ' .
(($t1 = strval(filtrer('couleur_foncerluminosite',table_valeur($Pile["vars"], (string)'c_container_bk', null))))!=='' ?
		('#' . $t1) :
		'') .
'; color: ' .
table_valeur($Pile["vars"], (string)'c_container', null) .
'; text-align: left; }

/*************** LISTE DOCUMENTS - CONTENT */
#listedocuments ul { margin-top: 2em; }
#listedocuments ul { margin-bottom:0; }
#content table.tableaudocs, table.spip.tableaudocs { margin-top: 0; }

/*************** SIGLES - CONTENT */
#sigles dt { margin-top: 1em; font-size: 1.2em; font-weight: bold; }
#sigles dd p { margin-top: 0; }

/*************** CONTENT - MAIN SIDEBAR */
#menu .cadreinfo { padding: 10px 5px; margin-left: 5px; margin-right: 5px; margin-bottom: 0; border: none; ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null),'20','true')))!=='' ?
		('color: #' . $t1 . ';') :
		'') .
' ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null),'30')))!=='' ?
		('background: #' . $t1 . ';') :
		'') .
'
	' .
((((((table_valeur($Pile["vars"], (string)'c_menu_a_bk', null) != 'transparent')) ?' ' :'')) AND (((table_valeur($Pile["vars"], (string)'d_cadreinfo_degrade', null)) ?'' :' ')))  ?
		(' ' . (	'
	background: ' .
	(($t2 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null),'30')))!=='' ?
			('#' . $t2) :
			'') .
	(($t2 = strval(filtre_embarque_fichier(extraire_attribut(filtrer('image_graver', filtrer('image_aplatir',filtrer('image_sepia',find_in_path('images/fond_degrade_fonce_en_bas3.png'),filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null),'30')),'jpg')),'src'))))!=='' ?
			(' url(' . $t2 . ') repeat-x top') :
			'') .
	';')) :
		'') .
'
}
#menu .cadreinfo p { margin: .5em 0 0; text-align: left; }

/*************** CONTENT - EXTRA SIDEBAR */
/* mini-agenda */
.miniagenda { text-align: center; }
.miniagenda table.agenda { width: 100%; margin: auto; }
/* derniers ajouts dans agenda */
.agendaderniersajouts { text-align: left; }
.agendaderniersajouts li a { margin:0; }
/* bloc citations */
#citations { position: relative; overflow: hidden; padding: 0; margin-top:2em; margin-right: 5px; margin-bottom: .5em; margin-left: 5px; }
#citations dt { overflow: hidden; padding: .25em .5em; margin: 0; background-color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a_bk', null) .
'; border-bottom: solid 1px' .
(($t1 = strval(filtrer('couleur_foncerluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null))))!=='' ?
		(' #' . $t1) :
		'') .
'; -moz-border-radius-topright: .5em; -webkit-border-top-right-radius: .5em; -moz-border-radius-topleft: .5em; -webkit-border-top-left-radius: .5em; color: ' .
table_valeur($Pile["vars"], (string)'c_menu_a', null) .
'; font-family: ' .
table_valeur($Pile["vars"], (string)'f_content', null) .
'; font-size: 1.1em; font-weight: bold; }
#citations dd { background-color:' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null),'80')))!=='' ?
		(' #' . $t1) :
		'') .
';
	' .
((((((table_valeur($Pile["vars"], (string)'c_menu_a_bk', null) != 'transparent')) ?' ' :'')) AND (((table_valeur($Pile["vars"], (string)'d_citations_degrade', null)) ?'' :' ')))  ?
		(' ' . (	'
	background: ' .
	(($t2 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null),'80')))!=='' ?
			('#' . $t2) :
			'') .
	(($t2 = strval(filtre_embarque_fichier(extraire_attribut(filtrer('image_graver', filtrer('image_aplatir',filtrer('image_sepia',find_in_path('images/fond_degrade_fonce_en_bas3.png'),filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null),'80')),'jpg')),'src'))))!=='' ?
			(' url(' . $t2 . ') repeat-x top') :
			'') .
	';')) :
		'') .
' border-bottom: solid 1px' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null),'20','true')))!=='' ?
		(' #' . $t1) :
		'') .
'; border-right: solid 1px' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null),'20','true')))!=='' ?
		(' #' . $t1) :
		'') .
'; -moz-border-radius-bottomright: .5em; -webkit-border-bottom-right-radius: .5em; -moz-border-radius-bottomleft: .5em; -webkit-border-bottom-left-radius: .5em; color:' .
(($t1 = strval(filtrer('couleur_foncerluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null))))!=='' ?
		(' #' . $t1) :
		'') .
'; font-size: 1em; overflow: hidden; padding: .5em .6em; margin: 0;
}
#citations dd p { margin-bottom: 0;margin-top: 0; }
/* bloc citations dans le header */
#header #citations { margin: 0; float: right; clear: right;' .
(($t1 = strval(plus(table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null),table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null))))!=='' ?
		(' width: ' . $t1 . 'px;') :
		'') .
'
/* Fallback for web browsers that doesn\'t support RGBa */
background: ' .
table_valeur($Pile["vars"], (string)'c_header_bk', null) .
';
/* RGBa with 0.6 opacity */
background: rgba(' .
table_valeur(filtrer('couleur_hexa_to_dec',table_valeur($Pile["vars"], (string)'c_header_bk', null)),'red','0') .
', ' .
table_valeur(filtrer('couleur_hexa_to_dec',table_valeur($Pile["vars"], (string)'c_header_bk', null)),'green','0') .
', ' .
table_valeur(filtrer('couleur_hexa_to_dec',table_valeur($Pile["vars"], (string)'c_header_bk', null)),'blue','0') .
', 0.6);
/* For IE 5.5 - 7*/
filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99' .
replace(table_valeur($Pile["vars"], (string)'c_header_bk', null),'#','') .
', endColorstr=#99' .
replace(table_valeur($Pile["vars"], (string)'c_header_bk', null),'#','') .
');
/* For IE 8*/
-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99' .
replace(table_valeur($Pile["vars"], (string)'c_header_bk', null),'#','') .
', endColorstr=#99' .
replace(table_valeur($Pile["vars"], (string)'c_header_bk', null),'#','') .
')";
 }
#header #citations dt, #header #citations dd { background: transparent; color: ' .
table_valeur($Pile["vars"], (string)'c_header', null) .
'; }
#header #citations dt { text-align:right;  border-bottom: solid 1px ' .
table_valeur($Pile["vars"], (string)'c_datemajsite_bk', null) .
'; }
#header #citations dd { border-bottom: none; border-right: none; }
#header #citations dd p { text-align:right; }
#header #logo { clear: left; float: left; height: 50px; }
#header #logo a, #header #logo a, #header #logo a { transform: scale(0.95); display: inline-block;}
#header #logo a:hover, #header #logo a:focus, #header #logo a:active { background-color: transparent !important; display: inline-block; transform: scale(1.00); }

/* xiti et compteurs */
#xiti { position: absolute; bottom: 10px; left: 18px; z-index: -1; }
#compteurs { padding: 0; margin: 20px 5px 10px; background-color: #fc0; color: #f60; text-align: center; text-decoration: none; }
#compteurs a { display: block; padding-top: 5px; padding-bottom: 5px; text-align: center; }

/* lettre d\'info */
#lettre h2 { padding: 10px 1px 0; padding-right:1px; padding-left:10px; margin: 0; }
#lettre img { border: none; padding: 0 0.5em 0; }

/* Bouton texte, pour permettre a direction_css de fonctionner */
.boutonstexte { float: none; display: block; position: absolute; right: 0; text-align: right; z-index: 1; }
.boutonstexte a { display: inline-block; padding: 4px; height: 40px; width: 40px; position: initial; top: initial; text-align: center; }
.boutonstexte a:hover { background-color: #333; }
.boutonstexte img { padding: 0; }

/* Newsletter */
#inscriptionlettre h2 { font-size:1em; margin: 0; padding-bottom: 4px; background-color: transparent; }
#inscriptionlettre ul { margin: 0; padding:0; }
#sub_email, #lst_ids { width: 97%; }
#inscriptionlettre p.boutons { margin:0; padding-top:8px; text-align:right;}
#navigation .formulaire_newsletter_subscribe input.submit { display: inline-block; white-space: normal; width: 100%; }
#navigation .formulaire_spip .editer label,
#navigation .formulaire_spip .editer.gauche label {
	width: auto;
	float:none;
	margin-left:0;
}

.formulaire_participer_evenement fieldset { border: none; font-size: 1.5em;}

#content .socialtags { clear: left; height: 18px; text-align: right; }
#content .socialtags img { padding:0; }

/* **************** BLOCK SKINS ***************** */
/* ====== Contour blocks ====== */
/* remove *background-image:" to default to square corners for IE */
/* ----- simple (extends box) ----- */
.simple .inner {border:1px solid #dddddd;background-color:#fcfcfc;}
.simple .inner .hd {}
.simple b{}
/* ----- info (extends box) ----- */
.info .inner {border:2px solid #46839B;}
.info .inner .hd {}
.info b{}
/* ----- note (extends box) ----- */
.note,.note .inner{border:1px solid #c2c2c2;}
.note .inner{border-color:#fff; border-width:4px; background-color:#f0f0f0;}
.note .inner .hd {}

/* ----- important (extends box) ----- */
.important .inner{border: 3px solid #00477a; border-bottom-width:10px;}
.important b{}

/* ----- basic (extends box) ----- */
.basic {overflow: hidden;}
.basic .inner {padding-bottom: 1px;margin-bottom: -1px;}
.basic .inner .hd {}
.basic b{}

/* ----- basic (extends box) ----- */
.basic {overflow: hidden;}
.basic .inner {padding-bottom: 1px;margin-bottom: -1px;}
.basic .inner .hd {}
.basic b{}

/* ----- error, success, notice (extends box) ----- */
.error .inner,.success .inner,.notice .inner{border:2px solid;font-weight: normal;color:#333;padding-left:40px;min-height:24px;background-repeat:no-repeat;background-position: 5px 5px;}
.success .inner{color: #264409;border-color: #C6D880;background-color:#E6EFC2;background-image:url(' .
find_in_path('img_pack/box/message_ok-24.png') .
');}
.error .inner{color: #8A1F11;border-color: #FBC2C4;background-color:#FBE3E4;background-image:url(' .
find_in_path('img_pack/box/message_erreur-24.png') .
');}
.notice .inner{color: #514721;border-color: #FFD324;background-color:#FFF6BF;background-image:url(' .
find_in_path('img_pack/box/message_notice-24.png') .
');}

/* ====== Background blocks ====== */
.highlight .inner{background-color:#e3e36f;}
.inverse .inner{background-color:#333333;color:#ffffff}

/* ====== Block headers and footers ====== */
/*
.section{background: #e9e9e9; color:#70617E;font-size:120%;padding:5px 10px;}
.section h1,.section h2,.section h3,.section h4,.section h5,.section h6{font-size:100%;color:#70617E;padding:0;}

.bam{background: #46839B;color: #fff;font-size:120%;padding:5px 10px;}
.bam h1,.bam h2,.bam h3,.bam h4,.bam h5,.bam h6{font-size:100%;color:#fff;padding:0;}
.topper{background: #fff;color: #4D4D4D;font-size:120%;padding:5px 10px;border:1px solid #eee;}
.topper h1,.topper h2,.topper h3,.topper h4,.topper h5,.topper h6{font-size:100%;color:#4D4D4D;padding:0;}

.act{background-color:#e9e9e9;}
*/

.hd {
    padding: 0;
}
#sommaire_mode_international .bam.h1{ padding:2px 1em; border-bottom: 2px solid ' .
table_valeur($Pile["vars"], (string)'c_titraille_ssniveaux_bk', null) .
'; font-weight: bold; font-size:1.2em; }
#sommaire_mode_international .archives{ padding:2px 1em; text-align:right }

.troistiers { float:left; padding:0 ' .
table_valeur($Pile["vars"], (string)'margescolonnes', null) .
'px; width:' .
table_valeur($Pile["vars"], (string)'Largeurcontent_central', null) .
'px; height:650px; }
.troistiers .bd { overflow-y:auto; }
.hauteur1 { margin-bottom:10px; height: 400px; }
.hauteur1 .bd { height: 350px; }
.hauteur2 { height: 240px; }
.hauteur2 .bd { height: 190px; }
.hauteur3 { margin-bottom:10px; height: ' .
plus(table_valeur($Pile["vars"], (string)'HauteurArretSurImg', null),'35') .
'px; }
.hauteur3 .bd { height: ' .
table_valeur($Pile["vars"], (string)'HauteurArretSurImg', null) .
'px; }
.hauteur4 { margin-bottom:10px; height: 85px; }
.hauteur4 .bd { height: 70px; overflow-y:hidden; }
.hauteur5 { margin-bottom:10px; height: 650px; }
.hauteur5 .bd { height: 600px; }

/* ====== Horloge Flash ====== */
.horlogeflash { float:left; font-size:.7em; font-weight:bold; text-align:center; }

/* Mode International */
#sommaire_mode_international #agenda h2, #sommaire_mode_international .rightmenu, #sommaire_mode_international .retourtop { position:absolute !important; overflow:hidden !important; top:-2000px !important; left:-2000px !important; height:0 !important; width:0 !important; }
#sommaire_mode_international #content #agenda td, th { padding: 0; }
#sommaire_mode_international #content #agenda table, #sommaire_mode_international #agenda table.spip { width: 50%; }
#sommaire_mode_international .miniagenda table.agenda { float:left; }
#sommaire_mode_international .outerinternational, .tickercontainer { margin:0 auto; width: ' .
table_valeur($Pile["vars"], (string)'largeurtotale', null) .
'px }
.tickercontainer .mask { width: ' .
moins(table_valeur($Pile["vars"], (string)'largeurtotale', null),'20') .
'px }
ul.newsticker { width: ' .
plus(table_valeur($Pile["vars"], (string)'largeurtotale', null),'12') .
'px }


/*************** ARRET SUR IMAGE */
#image .bd { padding: 0; }
#arretSurImg { background-color: #000; color:#fff; position: relative; width: ' .
table_valeur($Pile["vars"], (string)'LargeurArretSurImg', null) .
'px; height: ' .
table_valeur($Pile["vars"], (string)'HauteurArretSurImg', null) .
'px; }
  #arretSurImg2 { margin-top: 15px; background-color: #000; color:#fff; position: relative; width: 120px; height: 120px; }
#arretSurImg ul, #arretSurImg li, #arretSurImg ul ul, #arretSurImg li li, #arretSurImg2 ul, #arretSurImg2 li, #arretSurImg2 ul ul, #arretSurImg2 li li { padding-left: 0 !important; }
#arretSurImg img { padding: 0 !important; width: ' .
table_valeur($Pile["vars"], (string)'LargeurArretSurImg', null) .
'px; height: ' .
table_valeur($Pile["vars"], (string)'HauteurArretSurImg', null) .
'px; }
   #arretSurImg2 img { padding: 0 !important; width: 120px; height: 120px; }
#arretSurImg h2, #arretSurImg2 h2 { border: none !important; clear: none !important; padding: 0 !important; margin: 0 !important; }
#arretSurImg h2 a:link, #arretSurImg h2 a:visited, #arretSurImg h2 a:focus, #arretSurImg h2 a:hover, #arretSurImg2 h2 a:link, #arretSurImg2 h2 a:visited, #arretSurImg2 h2 a:focus, #arretSurImg2 h2 a:hover { display: block; color: #FFFFFF; text-decoration: none; padding: 4px; }
#arretSurImg .archives, #arretSurImg2 .archives { position: absolute; z-index: 1; bottom: 0; right: 0; }
#arretSurImg .mainCarousels, #arretSurImg2 .mainCarousels2 { position: absolute; z-index: 1; bottom: 0; left: 0; margin: 0; }
#arretSurImg li.mainCarousel, #arretSurImg2 li.mainCarousel2 { float :left; margin: 0 0 0 10px; background-color: #292929; }
#arretSurImg .mainCarousels li.active, #arretSurImg .mainCarousels li.hover, #arretSurImg2 .mainCarousels2 li.active, #arretSurImg2 .mainCarousels2 li.hover { background-color: #1666A8; }
#arretSurImg .smallCarousels { position: absolute; z-index: 0; top: 0; left: 0; width: ' .
table_valeur($Pile["vars"], (string)'LargeurArretSurImg', null) .
'px; height: ' .
table_valeur($Pile["vars"], (string)'HauteurArretSurImg', null) .
'px; margin: 0; }
  #arretSurImg2 .smallCarousels2 { position: absolute; z-index: 0; top: 0; left: 0; width: 120px; height: 120px; margin: 0; }
#arretSurImg li.smallCarousel { display: block; position: absolute; z-index: 0; top: 0; left: 0; overflow: hidden; width: ' .
table_valeur($Pile["vars"], (string)'LargeurArretSurImg', null) .
'px; height: ' .
table_valeur($Pile["vars"], (string)'HauteurArretSurImg', null) .
'px; text-align: center; }
  #arretSurImg2 li.smallCarousel2 { display: block; position: absolute; z-index: 0; top: 0; left: 0; overflow: hidden; width: 120px; height: 120px; text-align: center; }
#arretSurImg .smallCarousel li { width: ' .
table_valeur($Pile["vars"], (string)'LargeurArretSurImg', null) .
'px; height: ' .
table_valeur($Pile["vars"], (string)'HauteurArretSurImg', null) .
'px; }
  #arretSurImg2 .smallCarousel2 li { width: 120px; height: 120px; }
#arretSurImg .diapoControls, #arretSurImg2 .diapoControls2 { position: absolute; top: 200px; right: 30px; z-index: 1; }
.hasJS #arretSurImg .diapoNext, .hasJS #arretSurImg .diapoPrev, .hasJS #arretSurImg2 .diapoNext, .hasJS #arretSurImg2 .diapoPrev { display: block; float: left; width: 36px; height: 65px; background: transparent url(' .
find_in_path('images/diapo_prev.png') .
') top left no-repeat; cursor: pointer; }
.hasJS #arretSurImg .diapoNext, .hasJS #arretSurImg2 .diapoNext { margin-left: 35px; background-image: url(' .
find_in_path('images/diapo_next.png') .
'); }
#arretSurImg .highlight_anchor, #arretSurImg2 .highlight_anchor { background: none; border: none; padding: 0; }
.hasJS #arretSurImg .smallCarousels, .hasJS #arretSurImg2 .smallCarousels2 { overflow: hidden; }
#arretSurImg .archives, #arretSurImg2 .archives { background-color: #292929; }
#arretSurImg .archives a, #arretSurImg2 .archives a { color: #fff; }
#arretSurImg li.smallCarousel a span, #arretSurImg2 li.smallCarousel2 a span { color: #fff; display: block; font-size: 1.5em; margin: 1.5em 1em; }

*:first-child+html .hasJS #arretSurImg .smallCarousels, *:first-child+html .hasJS #arretSurImg2 .smallCarousels2 { overflow: visible; }

/*************** multicolonnes */
#troiscolonnes div.innermulticolonnes { float: left; margin-right: 1%; width: 32%; }

/*************** SuperFish */
.sf-sub-indicator {
	background:		url(\'' .
find_in_path('images/arrows-ffffff.png') .
'\') no-repeat -10px -100px; /* 8-bit indexed alpha png. IE6 gets solid image only */
}


/*** adding sf-vertical in addition to sf-menu creates a vertical menu ***/
.sf-vertical, .sf-vertical li {
	width:	' .
table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
'px !important; clear: left;
}
/* this lacks ul at the start of the selector, so the styles from the main CSS file override it where needed */
.sf-vertical li:hover ul,
.sf-vertical li.sfHover ul {
	left:	' .
table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
'px !important; /* match ul width */
	top:	-1px !important;
}

/*** alter arrow directions ***/
.sf-vertical .sf-sub-indicator { background-position: -10px 0 !important; } /* IE6 gets solid image only */
.sf-vertical a > .sf-sub-indicator { background-position: 0 0 !important; } /* use translucent arrow for modern browsers*/

/* hover arrow direction for modern browsers*/
.sf-vertical a:focus > .sf-sub-indicator,
.sf-vertical a:hover > .sf-sub-indicator,
.sf-vertical a:active > .sf-sub-indicator,
.sf-vertical li:hover > a > .sf-sub-indicator,
.sf-vertical li.sfHover > a > .sf-sub-indicator {
	background-position: -10px 0 !important; /* arrow hovers for modern browsers*/
}

/*************** MAGAZINES */
#content dl.magazines { border: 1px solid' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_titraille_bk', null),'10')))!=='' ?
		(' #' . $t1) :
		'') .
'; background-color: transparent; width: 160px; text-align: center; padding: 10px; float: left; margin-right: 1em; }
#content .magazines dt { font-weight: bold; background-color: ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_titraille_bk', null),'10')))!=='' ?
		(' #' . $t1) :
		'') .
'; color: ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_titraille', null),'20','true')))!=='' ?
		(' #' . $t1) :
		'') .
'; padding: 4px;}
#content .magazines dd img { background-color: ' .
table_valeur($Pile["vars"], (string)'c_container_bk', null) .
'; margin:0; padding:8px 0; }
#content .magazines dd { margin: 0; padding: 0; }

/*************** PORTAIL MAIRIE */
' .
vide($Pile['vars'][$_zzz=(string)'Largeurmairie_central'] = moins(moins(moins(table_valeur($Pile["vars"], (string)'LargeurContaineur', null),table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null)),table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null)),'48')) .
vide($Pile['vars'][$_zzz=(string)'Largeurmairie_video'] = div(table_valeur($Pile["vars"], (string)'Largeurmairie_central', null),'3')) .
vide($Pile['vars'][$_zzz=(string)'Largeurmairie_edito'] = moins(moins(table_valeur($Pile["vars"], (string)'Largeurmairie_central', null),table_valeur($Pile["vars"], (string)'Largeurmairie_video', null)),'24')) .
'#sommaire_mode_mairie #content { width: 100%; }
#mairie_content_left { width: ' .
table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
'px; float:left; }
#mairie_content_left select { width: ' .
moins(table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null),'30') .
'px; }
#mairie_content_left img, #mairie_content_extra img { padding:0; }
#mairie_content_central { width: ' .
table_valeur($Pile["vars"], (string)'Largeurmairie_central', null) .
'px; margin-left: 24px; margin-right: 24px; float:left; }
#sommaire_mode_mairie .Edito { width: ' .
table_valeur($Pile["vars"], (string)'Largeurmairie_edito', null) .
'px; float:left; }
#sommaire_mode_mairie .VideoALaUne { width: ' .
table_valeur($Pile["vars"], (string)'Largeurmairie_video', null) .
'px; float:left; margin-left:24px;}
#sommaire_mode_mairie .miniagenda table.agenda { width: 134px; }
#sommaire_mode_mairie .logo_actualite  { float:left; padding-left: 0; }
#sommaire_mode_mairie #homequoideneuf ul, #sommaire_mode_mairie #mairie_content_left ul, #sommaire_mode_mairie #mairie_content_extra ul { list-style:none; padding:0;}
#sommaire_mode_mairie #homequoideneuf li { margin: 4px 0; paddind-left: 56px; min-height: 56px; }
#sommaire_mode_mairie #homequoideneuf img { padding: 4px; }
#sommaire_mode_mairie .datepublication { margin-right: 0;}
#sommaire_mode_mairie #content .socialtags { float:left; position: relative; text-align: left; top: 18px;}
#mairie_content_extra { width: ' .
table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null) .
'px; float:left; }
#sommaire_mode_mairie .dessousbreves { float:left; width:' .
moins(div(mult(table_valeur($Pile["vars"], (string)'Largeurmairie_central', null),'2'),'6'),'16') .
'px;padding: 0 8px;}
#sommaire_mode_mairie .dessousbreves.oddbreves {clear:left;}
#sommaire_mode_mairie #homecadre_outils { clear:both; }
#sommaire_mode_mairie #homecadre_outils li { display: inline; float:left; text-align:center; }
#sommaire_mode_mairie .goody { clear: left;  height: 48px; }
#sommaire_mode_mairie #content img.logo_goody { float:left; padding:0 1em 0 0; }

#content .VideoALaUne img { padding-right: 20px; max-width:  ' .
table_valeur($Pile["vars"], (string)'largeurMenu', null) .
'px; }

/*************** Player Multimedia */
.spip_documents_player { clear: both; margin: 0.5em 0 0; padding: 0; width: 100%; }
.spip_documents_player .spip_doc_titre { float: left; padding-right: 10px; text-align: right; width: ' .
moins(moins(moins(table_valeur($Pile["vars"], (string)'LargeurContaineur', null),table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null)),table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null)),'270') .
'px !important; }
.spip_documents_player .spip_doc_descriptif { clear: none; float: left; text-align: left; }

/*************** Liste de lecture */
#contenu .radiobox { width: ' .
interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/maxlargeurimage','720',false):'')) .
'px; }
#contenu #scroller_container, #contenu div#now_playing { width: ' .
interdire_scripts(moins((include_spip('inc/config')?lire_config('soyezcreateurs_layout/maxlargeurimage','720',false):''),'80')) .
'px; line-height: 13px; }
#content .radiobox img { padding: 0; }
#content ul.playliste { font-size: 1.2em; }

/*************** LOCUTIONS ETRANGERES */
div [lang], span [lang] { font-style: italic; }

/*************** RUBRIQUES AUTOMATIQUES, SITES */
#content .listesites img.logo_site { float:left; padding:0; margin-left: -' .
interdire_scripts(plus((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurlogolistessites','48',false):''),'8')) .
'px; }
#content .listesites img.rss_site { padding:0 0 0 1em; vertical-align: middle; clear: right; float: right}
#content .listesitesssrub li { clear: left; list-style-image: url(' .
filtre_embarque_fichier(find_in_path('images/menu_plus.gif')) .
'); padding-bottom: 1em; }
#content .listesitesssrub li ul { padding-top: 1em; }
#content .listesites li { clear: left; list-style: none; margin-bottom: 2em; }
#content .listesites li div { margin-left: ' .
interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurlogolistessites','48',false):'')) .
'px; padding-left: 8px; }
#content .listesites li p { margin-top: 0.5em; }
#content .listesites .blocliendirect { display: inline-block; font-style: italic; }
#content .listesites .liendirect, #content .listesites .spip_out { opacity: 0.5; display: inherit; }
#content .listesites a.spip_out:hover { opacity: 1; }
.listesitesssrub { padding-left: 2em; }

#mobile-header { display: none; position: fixed; top: 0; }

/************* Mini plan du site */
#miniplan {
  margin-bottom: 1.5em;
  padding: 1em;
}
#miniplan .flexbox-wrap-space-around {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
}
#miniplan .avec-padding-bottom {
  padding-bottom: 1em!important;
}
#miniplan .avec-margin-bottom {
  margin-bottom: 1.5em!important;
}
#miniplan .menu {
  margin: 0;
  list-style-type: none;
}
#miniplan .menu > li {
  display: table-cell;
  vertical-align: middle;
}
#miniplan .vertical > li {
  display: block;
  vertical-align: middle;
}

/* Pour les mobiles, inspiré de http://www.alsacreations.com/astuce/lire/1177 */
@media (max-width: ' .
table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
'px) {

 /* passer tous les éléments de largeur fixe en largeur automatique */
 body, #container, #shadow, #content {
   width: 100% !important;
   margin: auto !important;
   padding: 0 !important;
 }
 #menu {
   width: auto !important;
 }
/* #header { background-image: none !important; min-height: inherit !important; } */
#mobile-header { background-color: #333333; display: block; height: 32px; width: 32px; z-index: 1000; }
#responsive-menu-button { background: url("' .
filtre_embarque_fichier(find_in_path('images/nav-icon.svg')) .
'") no-repeat scroll center center transparent; display: block; height: 32px; width: 32px; }
#responsive-menu-button span { position:absolute !important; overflow:hidden !important; top:-2000px !important; left:-2000px !important; height:0 !important; width:0 !important; }

 /* Afficher les liens d\'évitement */
 /* .hasJS .escapelinks { position:relative !important; overflow:auto !important; top:auto !important; left:auto !important; height:auto !important; width:auto !important; } */

 /* fixer une largeur maximale  de 100 % aux éléments potentiellement problématiques */
 img, table, td, blockquote, code, pre, textarea, input, iframe, object, embed, video {
   max-width: 100% !important;
 }

 /* gestion des mots longs */
 textarea, table, td, th, code, pre, samp {
   word-wrap: break-word; /* césure forcée */
 }
 code, pre, samp {
   white-space: pre-line; /* passage à la ligne spécifique pour les éléments à châsse fixe */
 }

 #navigation, #extra, #content {
   height: auto !important;
 }

 #navigation, #extra {
   width: 50% !important;
   margin: auto !important;
   padding: 0 !important;
 }
 #mairie_content_left, #mairie_content_extra {
   width: 100%;
   margin: auto !important;
   padding: 0 !important;
 }
 #mairie_content_central {
	width: 100%;
	margin:0;
 }

 /* masquer les éléments superflus */
 .hide_mobile {
   display: none !important;
 }
  #sommaire_mode_mairie .dessousbreves {
	width: 31%;
	padding:0 1%;
 }
 #sommaire_mode_mairie #content .socialtags {
	top:0;
 }
 .encart a, .encart img { 
	width: 100%!important; 
	height: auto!important;
 }
 .vertical .encart-label {
    border-radius: 6px 6px 0 0;
    display: inherit;
    transform: inherit;
    position: inherit;
 }
 .rainette_previsions_24h {
	width:31%;
 }
 #cef-root, #cef_navigation { display:none !important }
}
@media (max-width: 640px) {

#spip-admin { top: 0; }

 /* passer tous les éléments de largeur fixe en largeur automatique */
 #artrecents {
   width: auto !important;
   margin: auto !important;
   padding: 0 !important;
   display: block;
   max-height: inherit;
 }

 /* Passer à une seule colonne (à appliquer aux éléments multi-colonnes) */
 #wrapper, #content, #navigation, #navHaute, #extra, #artrecents, #escapelinks  {
   float: none !important;
   width: auto !important
 }
#escapelinks { margin: 0 0 1em; color: #000; background-color: rgba(255, 255, 255, 0.8); }
#escapelinks li { background: transparent; }
#escapelinks li, #navHaute li { display: block; text-align: center; }
#escapelinks li a,#navHaute li a { display: block; padding: .6em 0; font-size: 1.2em; }

 #header #logo {
	height: auto;
	left: 0;
	top: 0;
	max-width: 100vw;
	box-sizing: border-box;
 }
 #header h1 {
    clear: right; float: inherit;
 }
 
 #cadre_outils { clear: both; }
 #cadre_outils ul { float: none; padding: 0 1em; width: inherit; }
 
 #header #citations { width: inherit; }

 #menufooter {
	padding-left: 0;
	text-align: center;
 }
 #menufooter ul li, #menufooter ul li a {
	display: block;
 }
 #menufooter ul li {
	padding: 0 24px 4px 24px;
 }
 #menufooter ul li a {
	margin-right: 0;
	padding: 4px 1em;
	text-align: center;
 }
 .menu_haut_logo {
	vertical-align: middle;
 }
 .modeactualites #col1, .modeactualites #col2 {
	float:none;
	margin-left:0;
	width:100%;
 }
 #sommaire_mode_mairie .dessousbreves {
	width: 100%;
	float: none;
 }
 body {
    margin-top: 0 !important;
 }
 .columns2 { -moz-column-count: 1; -webkit-column-count: 1; column-count: 1;  }
 .rainette_previsions_24h {
	width:47%;
	margin: .4em 1% 2em 1%;
 }
}

@media screen and (max-width:640px) and (orientation: landscape) {
  body {
   -webkit-text-size-adjust: 70%;
  }
}

/* Mode d\'affichage Cognac, éléments communs à toutes les pages */
.portailcognac body {
  font-size: 1rem;
  line-height: 1.75em;
}
@media screen and (max-width: 70em) {
  .portailcognac body {
    font-size: 0.89473685rem;
  }
}
.portailcognac #mobile-header {
    position: absolute;
    top: 18px;
    z-index: initial;
}
.portailcognac #header #logo a:hover,
.portailcognac #header #logo a:focus,
.portailcognac #header #logo a:active {
  background-color: transparent;
  display: inline-block;
  border: none;
}
.portailcognac #header .searchfrm label {
  overflow: hidden;
  position: relative;
  top: auto;
  left: auto;
  height: auto;
  width: auto;
}

.portailcognac [type="text"],
.portailcognac [type="password"],
.portailcognac [type="date"],
.portailcognac [type="datetime"],
.portailcognac [type="datetime-local"],
.portailcognac [type="month"],
.portailcognac [type="week"],
.portailcognac [type="email"],
.portailcognac [type="number"],
.portailcognac [type="search"],
.portailcognac [type="tel"],
.portailcognac [type="time"],
.portailcognac [type="url"],
.portailcognac [type="color"],
.portailcognac textarea {
  box-shadow: none;
}

.portailcognac body {
  background-color: ' .
table_valeur($Pile["vars"], (string)'c_container_bk', null) .
';
  font-family: \'Open Sans\', sans-serif;
  font-size: 1em;
  color: ' .
table_valeur($Pile["vars"], (string)'c_container', null) .
';
  line-height: 1.75em;
}
@media screen and (max-width: 80em) {
  .portailcognac body {
    font-size: 1.0625rem;
  }
}
@media screen and (max-width: 64em) {
  .portailcognac body {
    font-size: 1rem;
  }
}
a[href]:hover,
a[href]:focus {
  -webkit-transition: all .3s ease;
  transition: all .3s ease;
}
.portailcognac a[href]:hover,
.portailcognac a[href]:focus {
  color: ' .
table_valeur($Pile["vars"], (string)'c_container', null) .
';
  text-decoration: none;
}
.portailcognac a[href]:focus {
  background-color: #ddd;
}
.portailcognac #spip-admin a[href]:hover {
  color: white!important;
}

.portailcognac .spip-admin-float {
  top: 104px;
  right: 0px;
}

.portailcognac #header #logo a:hover,
.portailcognac #header #logo a:focus,
.portailcognac #header #logo a:active {
  background-color: transparent;
  display: inline-block;
  border: none;
}

.text-center {
  text-align: center;
}
.text-right {
  text-align: right;
}
.text-left {
  text-align: left;
}
.flexbox-flex {
  display: flex;
  align-items: unset;
}
.flexbox-center-center {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
}
.flexbox-center-top {
  display: flex;
  align-items: stretch;
  justify-content: center;
  flex-wrap: wrap;
}
.flexbox--center {
  display: flex;
  align-items: center;
}
.flexbox-flex-row-reverse {
  display: flex;
  flex-direction: row-reverse;
}
.flex-nowrap {
  flex-wrap: nowrap;
}
.flexbox-wrap-space-between {
  display: flex;
  flex-wrap: wrap;
  align-content: space-between;
}
.flexbox-wrap-space-around {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
}
.flexbox-center-space-between {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.flexbox-start-space-between {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
}
@media screen and (max-width: 47.9375em) {
  .flex-nowrap {
    flex-wrap: wrap;
  }
}
.flexbox-stretch {
  display: flex;
  align-items: stretch;
}
@media screen and (max-width: 40em) {
  .flexbox-stretch {
    display: block;
  }
}
.portailcognac .label-input {
  font-size: 1.25rem;
  font-weight: 300;
}
.sans-border {
  border: 0;
}
.avec-border {
  border: 1px solid #be1621 ;
}
.avec-border-top {
  border-top: 1px solid #be1621 ;
}
.avec-border-bottom {
  border-bottom: 1px solid #be1621 ;
}
.avec-border-left {
  border-left: 1px solid #be1621 ;
}
.sans-margin {
  margin: 0;
}
.avec-margin {
  margin: 1.5em;
}
.avec-margin-top {
  margin-top: 1.5em;
}
.avec-margin-right {
  margin-right: 1.5em;
}
.avec-margin-bottom {
  margin-bottom: 1.5em;
}
.avec-margin-bottom05 {
  margin-bottom: .5em;
}
.avec-margin-bottom015 {
  margin-bottom: .15em;
}
.avec-margin-left {
  margin-left: 1.5em;
}
@media screen and (min-width: 40em) {
  .avec-margin-bottom-for-medium {
    margin-bottom: 1.5em;
  }
}
.sans-padding {
  padding: 0;
}
@media screen and (max-width: 40em) {
  .sans-padding-for-small {
    padding: 0;
  }
}
.avec-padding {
  padding: 1em;
}
.avec-padding05 {
  padding: .5em;
}
.avec-padding-top {
  padding-top: 1em;
}
.avec-padding-top05 {
  padding-top: .5em;
}
.avec-padding-top15 {
  padding-top: 1.5em;
}
.avec-padding-right {
  padding-right: 1em;
}
.avec-padding-right05 {
  padding-right: .5em;
}
.avec-padding-bottom {
  padding-bottom: 1em;
}
.avec-padding-left {
  padding-left: 1em;
}
.avec-padding-leftright {
  display: block;
  padding-right: 1em;
  padding-left: 1em;
}
.display-block {
  display: block;
}
.text-transform-none {
  text-transform: none;
}
.text-uppercase {
  text-transform: uppercase;
}
.font-style-italic {
  font-style: italic;
}
.position-relative {
  position: relative;
}
.float-left {
  float: left ;
}
.float-right {
  float: right ;
}
.float-center {
  display: table;
  margin-right: auto ;
  margin-left: auto ;
}
.z-index-999 {
  z-index: 999;
}
.cursor-pointer {
  cursor: pointer;
}





.portailcognac #header .searchfrm label {
  overflow: hidden;
  position: relative;
  top: auto;
  left: auto;
  height: auto;
  width: auto;
}
.portailcognac #contenu h1,
.portailcognac #content h2,
.portailcognac #content h3,
.portailcognac #content h4,
.portailcognac #content h5,
.portailcognac #content h6 {
  margin: 0;
  font-weight: 400;
  border-width: 0;
}
.portailcognac p,
.portailcognac ul,
.portailcognac ol,
.portailcognac dl {
  font-weight: 300;
}
.portailcognac p {
  margin-bottom: 1rem;
  font-size: inherit;
  line-height: 1.6;
  text-rendering: optimizeLegibility;
}
.portailcognac a {
  text-decoration: none;
  font-weight: 300;
}
a,
li,
button {
  -webkit-transition: all .3s ease;
  transition: all .3s ease;
}
.portailcognac img {
  display: inline-block;
  vertical-align: middle;
  max-width: 100%;
  height: auto;
  -ms-interpolation-mode: bicubic;
}
.portailcognac select {
  cursor: pointer;
}
.portailcognac .spip_logo {
  max-width: 100%;
}
.portailcognac .ariaformprop {
  padding: 0;
  margin: 0;
  position: relative;
  z-index: 99;
  background-color: white;
  font-size: 80%;
}
.portailcognac .erreur_message {
  padding: 0 1em;
  text-align: left;
  display: inline-block;
  line-height: 1.1;
}
.portailcognac .reponse_formulaire {
  margin-bottom: .1em;
}
.portailcognac .ajaxbloc {
  height: 100%;
}
.row {
  margin-right: auto;
  margin-left: auto;
  max-width: ' .
table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
'px;
}
.button,
button {
  padding: .55rem 1.5rem .625rem;
  font-size: 1.2em;
  border: 1px solid transparent;
  border-radius: 4px;
}
.button:hover,
.button:focus,
a.button:hover,
a.button:focus,
#footer a.button:hover,
#footer a.button:focus,
button:hover,
button:focus {
  background-color: white;
  border: 1px solid ' .
table_valeur($Pile["vars"], (string)'c_triadea', null) .
';
  color: #333;
}
.triadeA:hover,
.triadeA:focus,
a.triadeA:hover,
a.triadeA:focus,
#footer a.triadeA:hover,
#footer a.triadeA:focus {
  background-color: ' .
((filtrer('couleur_extreme',table_valeur($Pile["vars"], (string)'c_triadea', null)) == '000000') ? '#000000':'#FFFFFF') .
';
  border: 1px solid ' .
table_valeur($Pile["vars"], (string)'c_triadea', null) .
';
  color: ' .
((filtrer('couleur_extreme',table_valeur($Pile["vars"], (string)'c_triadea', null)) == '000000') ? '#FFFFFF':'#000000') .
';
}
.triadeB:hover,
.triadeB:focus,
a.triadeB:hover,
a.triadeB:focus,
#footer a.triadeB:hover,
#footer a.triadeB:focus {
  background-color: ' .
((filtrer('couleur_extreme',table_valeur($Pile["vars"], (string)'c_triadeb', null)) == '000000') ? '#000000':'#FFFFFF') .
';
  border: 1px solid ' .
table_valeur($Pile["vars"], (string)'c_triadeb', null) .
';
  color: ' .
((filtrer('couleur_extreme',table_valeur($Pile["vars"], (string)'c_triadeb', null)) == '000000') ? '#FFFFFF':'#000000') .
';
}
.button.triadeC:hover,
.button.triadeC:focus,
a.button.triadeC:hover,
a.button.triadeC:focus,
#footer a.button.triadeC:hover,
#footer a.button.triadeC:focus {
  background-color: ' .
((filtrer('couleur_extreme',table_valeur($Pile["vars"], (string)'c_triadec', null)) == '000000') ? '#000000':'#FFFFFF') .
';
  border: 1px solid ' .
table_valeur($Pile["vars"], (string)'c_triadec', null) .
';
  color: ' .
((filtrer('couleur_extreme',table_valeur($Pile["vars"], (string)'c_triadec', null)) == '000000') ? '#FFFFFF':'#000000') .
';
}

.portailcognac #container {
  width: 100%;
}
.portailcognac #contenu {
  max-width: ' .
table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
'px;
  margin: 0 auto;
  position: relative;
}
@media screen and (max-width: 960px) {
  .portailcognac #content {
    max-width: 100%;
    width: 100%;
  }
}
@media screen and (max-width: 768px) {
  .portailcognac #content .cartouche {
    margin-top: 1em;
  }
}

.hide {
  display: none!important;
}
.portailcognac #header #logo {
  position: relative;
  left: auto;
  margin: 0 20px;
  z-index: 2;
}

' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs/centrerlogo','non',false):'') == 'oui')) ?' ' :''))))!=='' ?
		($t1 . (	'
.portailcognac #header #logo {
  position: absolute;
  left: calc(50% - ' .
	div(largeur(
((!is_array($l = quete_logo('id_syndic', 'on', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />'))),'2') .
	'px);
  margin: 0;
  z-index: 2;
}')) :
		'') .
'
.portailcognac #mobile-header {
  top: 18px;
}
.portailcognac #mobile-header #responsive-menu-button {
  background: ' .
table_valeur($Pile["vars"], (string)'c_header_bk', null) .
';
  width: 100px;
  height: 3.75em;
}
.portailcognac #mobile-header #responsive-menu-button:before {
  display: inline-block;
  padding: 7px 30px;
  font-family: \'picto-soyezcreateurs\' !important;
  content: "\\2630";
  color: ' .
table_valeur($Pile["vars"], (string)'c_header', null) .
';
  font-size: 2.75em;
  font-style: normal;
  font-weight: 400;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  speak: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

@media screen and (max-width: 670px) {
  .portailcognac #mobile-header {
    top: 22px;
  }
  .portailcognac #mobile-header #responsive-menu-button {
    width: 70px;
    height: 50px;
  }
  .portailcognac #mobile-header #responsive-menu-button:before {
    padding: 7px 10px 7px 15px;
    font-size: 2.35em;
  }
}

.portailcognac #menuhaut {
  text-align: center;
  max-width: 100%;
  position: relative;
}
.portailcognac #menuhaut #menuh {
  display: inline-block;
  text-align: center;
  padding: .5rem 0 .2em 0;
}

.portailcognac #menuhaut #menuh a {
  background-color: ' .
table_valeur($Pile["vars"], (string)'c_menuhaut_bk', null) .
';
  padding: 0 2rem .35rem;
  font-size: 27px;
  color: ' .
table_valeur($Pile["vars"], (string)'c_menuhaut', null) .
';
  font-weight: 400;
  border-bottom: 3px solid transparent;
}
.portailcognac #menuhaut #menuh strong a,
.portailcognac #menuhaut #menuh a:hover {
  border-bottom: 3px solid ' .
((filtrer('couleur_extreme',table_valeur($Pile["vars"], (string)'c_header_bk', null)) == '000000') ? table_valeur($Pile["vars"], (string)'c_header_bk', null):table_valeur($Pile["vars"], (string)'c_header', null)) .
';;
}
.portailcognac #menuhaut #menuh ul li {
  line-height: 1em;
}
.portailcognac #menuhaut #menuh ul a {
  margin: 0;
  padding: .5em .5em .5em 1.5em;
  text-transform: inherit;
  font-size: 19px;
  font-family: inherit;
  font-weight: 300;
}
.portailcognac #menuhaut #menuh.drop ul {
  width: 300px;
  box-shadow: -4px 4px 4px rgba(170, 170, 170, 0.3);
}
.portailcognac #menuhaut #menuh > li:not(:first-child) {
  border-left: 1px solid #222;
}
.portailcognac #menuhaut #menuh .sf-sub-indicator {
  display: none;
}
.portailcognac #menuh li li a {
	border-left-color: #FFF;
	border-right-color: #FFF;
}
.portailcognac #menuhaut #menuh li li a {
	background-color: #FFF;
	color: #333;
}


' .
(($t1 = strval(interdire_scripts((((((include_spip('inc/config')?lire_config('soyezcreateurs/mode_affichage','communiquant',false):'') == 'portailcognac')) OR (interdire_scripts(((include_spip('inc/config')?lire_config('soyezcreateurs_layout/pictogrammesoutils','non',false):'') == 'avecoutils')))) ?' ' :''))))!=='' ?
		($t1 . (	'
#header #cadre_outils {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  height: 100px;
  padding-top: 20px;
  padding-right: 20px;
  z-index: 1;
}
#header #cadre_outils .icon {
  padding-right: .5rem;
  padding-left: .5rem;
  font-size: 30px;
}
#header #cadre_outils ul {
  margin: 0;
}
#header #cadre_outils ul > li {
  display: table-cell;
  vertical-align: middle;
}
#header #cadre_outils ul,
#header #cadre_outils ul a {
  background-color: transparent;
  width: auto;
}
#header #cadre_outils a {
  padding: 8px .5vw 8px;
  border-bottom: 3px solid transparent;
  background-color: transparent;
  color: ' .
	table_valeur($Pile["vars"], (string)'c_outils', null) .
	';
}
#header #cadre_outils a:hover, #header #cadre_outils a:focus {
  background-color: transparent;
  border-bottom: 3px solid ' .
	table_valeur($Pile["vars"], (string)'c_outils', null) .
	';
}
')) :
		'') .
'
.portailcognac #content {
  padding-left: 1.5rem;
  padding-right: 1.5rem;
}
.portailcognac #content, .portailcognac #navigation {
  padding-top: 0.5em;
}
.portailcognac .boutonstexte,
.portailagence .boutonstexte {
	right: calc(50% - ' .
div(table_valeur($Pile["vars"], (string)'LargeurContaineur', null),'2') .
'px);
}
.portailcognac .boutonstexte a {
  height: 38px;
  width: 32px;
}
.portailcognac .boutonstexte a.textsizeup img {
  width: 32px;
}
.portailcognac .boutonstexte a.textsizedown img {
  width: 16px;
}
#miettesdepain ul {
  text-align: left;
  font-size: 15px;
  font-style: normal;
  color: ' .
table_valeur($Pile["vars"], (string)'c_fildariane', null) .
';
}

#miettesdepain ul li a {
  padding-right: 16px;
}
#miettesdepain ul li:first-child {
  display: inline-block;
  width: 37px;
  height: 23px;
}
#miettesdepain ul li:first-child a {
  position: absolute;
  font-size: 0;
  line-height: 1.7;
  color: ' .
table_valeur($Pile["vars"], (string)'c_fildarianehome', null) .
';
}
#miettesdepain ul li:first-child a:before {
  font-family: \'picto-soyezcreateurs\' !important;
  content: "\\2302";
  font-size: 20px;
  vertical-align: middle;
  color: ' .
table_valeur($Pile["vars"], (string)'c_fildarianehome', null) .
';
}
#miettesdepain ul li:first-child a:hover:before,
#miettesdepain ul li:first-child a:focus:before {
  color: ' .
(($t1 = strval(filtrer('couleur_saturation',table_valeur($Pile["vars"], (string)'c_fildarianehome', null),'1')))!=='' ?
		('#' . $t1) :
		'') .
';
}
.portailcognac #sommaire {
  clear: both!important;
  background-color: rgba(' .
sc_rgb(table_valeur($Pile["vars"], (string)'c_titraille_ssniveaux_bk', null)) .
', 0.1);
  margin: 2em 0 1em;
  border-bottom: 1px rgba(' .
sc_rgb(table_valeur($Pile["vars"], (string)'c_titraille_ssniveaux', null)) .
', 0.5);
}
.portailcognac #sommaire h2 {
  background-color: rgba(' .
sc_rgb(table_valeur($Pile["vars"], (string)'c_titraille_ssniveaux_bk', null)) .
', 0.75);
  padding: .5em;
  color: white;
}
.portailcognac #sommaire > ul {
  margin-left: 1.5rem;
  padding: 1rem;
}
.portailcognac .cartouche .logo_article,
.portailcognac .cartouche .logo_rubrique {
  float: right;
  padding: 0 0 1rem 2rem;
}
.portailcognac .cartouche .titrepage h1 {
  padding-left: 0;
  font-size: 2.35em;
  color: ' .
table_valeur($Pile["vars"], (string)'c_titraille', null) .
';
  line-height: 1;
}
.portailcognac #letexte {
  display: inline;
  padding: 0;
  font-size: inherit;
}
.portailcognac #content h2,
.portailcognac #content h3 {
  padding: 1em 0 .5em;
  color: ' .
table_valeur($Pile["vars"], (string)'c_titraille_ssniveaux', null) .
';
  border-bottom: 1px solid rgba(' .
sc_rgb(table_valeur($Pile["vars"], (string)'c_titraille_ssniveaux_bk', null)) .
', 0.5);
}

@media screen and (max-width: ' .
table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
'px) {
' .
(($t1 = strval(interdire_scripts((((((include_spip('inc/config')?lire_config('soyezcreateurs/mode_affichage','communiquant',false):'') == 'portailcognac')) OR (interdire_scripts(((include_spip('inc/config')?lire_config('soyezcreateurs_layout/pictogrammesoutils','non',false):'') == 'avecoutils')))) ?' ' :''))))!=='' ?
		($t1 . (	'
  #header #cadre_outils {
    margin-top: 0;
    position: absolute;
    right: 0;
    top: 25px;
    display: inline-block;
    padding-top: 0;
    padding-right: 0;
	height: auto;
	' .
	(($t2 = strval(interdire_scripts(((filtre_info_plugin_dist("SIDR", "est_actif")) ?' ' :''))))!=='' ?
			($t2 . '
	margin-left:70px;
	') :
			'') .
	'
	' .
	(($t2 = strval(interdire_scripts(((filtre_info_plugin_dist("SIDR", "est_actif")) ?'' :' '))))!=='' ?
			($t2 . '
	margin-left:0;
	') :
			'') .
	'
  }
  #header #cadre_outils ul {
    padding-left: 1em;
    padding-right: 1em;
  }
  #header #cadre_outils ul li {
    display: inline-block;
  }
  #header #cadre_outils ul li.last {
    display: table-cell;
  }
')) :
		'') .
'
  .portailcognac #header #logo {
	position: initial;
	margin-top: 4em;
	margin-bottom: .5em;
	text-align: center;
	margin-left:0;
	width: 100%;
	height: inherit;
  }
  .portailcognac #header #logo img {
    display: inline-block;
	width:80%;
  }
  #header_inner {
    min-height: auto!important;
	margin-top: 0!important;
  }
  #header:before, #content:before, #content:after { display: none!important; }
  #menu .logo_rubrique { width: 100%; }
  #content, #navigation, #extra { min-height: auto!important; }
  #footer {
        background: ' .
table_valeur($Pile["vars"], (string)'c_footer_bk', null) .
'!important;
		min-height: auto!important;
		height: auto!important;
  }
  .portailcognac #letexte {
    display: block;
    padding: 0 0.75em;
  }
  .portailcognac .boutonstexte, .portailagence .boutonstexte {
    right: 0;
  }
}
#footer #bandeaucontact p {
  margin: 0;
  padding-left: 1em;
  font-size: 19px;
  text-align: left;
}
#footer #bandeaucontact p a {
  font-size: 19px;
}
#footer #bandeaucontact p .icon-envelope {
  font-size: 1.75em;
  vertical-align: text-bottom;
}
.portailcognac #footer #footerbas {
  margin: 0;
  padding: 0;
}
.portailcognac #footer #footerbas div {
  display: block;
}

.portailcognac #footer p {
  font-weight: 300;
}
.portailcognac #footer #copymentions {
  padding: 1em;
}
.portailcognac #footer #w3cgohome {
  font-size: 70%;
}
.portailcognac #footer #footerbas div#droitsauteurs {
  display: none;
}

@media screen and (min-width: 768px) {
  #footer #informations {
    display: flex;
    justify-content: space-between;
  }
  #footer #informations #coordonnees {
    margin-top: 1rem;
    width: 60%;
  }
  #footer #informations #coordonnees .adresse,
  #footer #informations #coordonnees .telephone,
  #footer #informations #coordonnees .accueil {
    margin-bottom: 1em;
  }
  #footer #informations #carte {
    width: 40%;
  }
}
.portailcognac #letexte .innermulticolonnes h2 {
  border: none;
}

.portailcognac #letexte .innermulticolonnes h2 a {
  display: block;
  width: 100%;
  margin: 0;
  padding: .75rem 0 .75rem 1.3rem;
  font-size: 2rem;
  line-height: 1em;
}
.portailcognac #letexte #listearticlerubrique dt {
  padding: 0;
  border: none;
}
.portailcognac #letexte #listearticlerubrique dt a {
  display: block;
  width: 100%;
  margin: 1em 0 0;
  padding: .75rem 0 .75rem 1.3rem;
  font-weight: 400;
  font-size: 2rem;
  line-height: 1em;
}
.portailcognac #letexte #listearticlerubrique dd {
  padding: 0;
  margin: 0;
  border: none;
}
.portailcognac #letexte #listearticlerubrique dt { padding: .75rem 1.3rem; }
.portailcognac #letexte #listearticlerubrique dd { padding: .75rem 1.3rem; }
.portailcognac #content dt.h2 { margin-top: 1.6em; margin-bottom: 0; }
.portailcognac #letexte #listearticlerubrique dt a { padding: 0; margin: 0; } 
.portailcognac #content dd p:first-of-type { margin-top: 0; }

.portailcognac #letexte .ps,
.portailcognac #letexte #artrecents.artrecent_bas,
.portailcognac #letexte .notes {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.portailcognac #letexte hr.spip {
  width: 100%;
}
.portailcognac #letexte thead,
.portailcognac #letexte table.spip tr.row_first,
.portailcognac #letexte table.spip thead th {
  font-size: inherit;
}
.portailcognac #letexte .spip td,
.portailcognac #letexte .spip th {
  padding: 10px 15px;
}
.portailcognac #letexte ul {
  margin: 1rem;
  line-height: 1.6;
}
.portailcognac #letexte .texteencadre-spip {
  padding: .5em 1em;
  border: none;
  border-top: 1px solid;
  border-bottom: 1px solid;
}
@media screen and (max-width: 768px) {
  .portailcognac #letexte .logo_modenews {
    display: none;
  }
}
.portailcognac.bodyarticle .surtitre,
.portailcognac.bodyarticle .soustitre,
.portailcognac.bodyarticle .datepublication {
  padding: 0;
  font-size: 1em;
  font-weight: 400;
}
.portailcognac.bodyarticle .datepublication {
	float: none;
	text-align: right;
	padding-left: 0.5em;
	padding-right: 0.5em;
}
.portailcognac.bodyarticle .surtitre {
  padding-bottom: .5rem;
}
.portailcognac.bodyarticle .soustitre {
  padding-top: .5rem;
}
.portailcognac.bodyarticle .chapo p {
  font-weight: 700;
}
.portailcognac.bodyarticle .cartouche .titrepage h1 {
  display: block;
  width: 100%;
  margin: 1em 0 0;
  padding: .75rem 0 .75rem 1.3rem;
  font-weight: 400;
  font-size: 2rem;
  line-height: 1em;
}
@media screen and (max-width: 640px) {
  .portailcognac.bodyarticle .cartouche .titrepage h1 {
    display: flex;
    background: none;
    padding: 0;
    justify-content: center;
    flex-direction: column-reverse;
    align-items: flex-start;
    border: none;
  }
  .portailcognac.bodyarticle .cartouche .titrepage h1 .logo_article,
  .portailcognac.bodyarticle .cartouche .titrepage h1 .logo_rubrique {
    float: none;
    margin: 0;
    padding: 1rem 0 0 0;
  }
}
.portailcognac.bodyarticle .cartouche .notation .ariaformprop {
  background-color: transparent;
}
.portailcognac.bodyarticle .cartouche .notation .notation_note {
  display: inline-block;
}
.portailcognac.bodyarticle .cartouche .notation .note {
  padding-left: 7px;
  font-size: 1rem;
  font-weight: 300;
  border: none;
}
.portailcognac #artrecents {
  margin: 1em 0 0 0;
  padding-bottom: 1em;
  border-radius: 0;
}
.portailcognac #artrecents h2 {
  padding-bottom: 1rem;
}
.portailcognac #artrecents ul {
  line-height: 2;
}

.portailcognac #extra .rss_bottom a {
  margin: 0 .5rem;
}
.portailcognac #documents_portfolio img {
  margin: 0 .75em .75em 0;
}
.portailcognac #navigation .navstuff {
  margin-top: .65rem;
  padding-right: 1rem;
  padding-left: 1rem;
}
.portailcognac #navigation .navstuff .espaceavant {
  margin-top: 0;
}
.portailcognac #navigation .navstuff li img + a span,
.portailcognac #navigation .navstuff li img + strong a span {
  padding-left: 10px;
}
.portailcognac #navigation .navstuff img.menu_plus,
.portailcognac #navigation .navstuff img.menu_minus {
  cursor: pointer;
}
.portailcognac #navigation a {
  margin: 0;
  padding: .5rem 1rem;
  border-top: 1px solid #ccc;
}
.portailcognac #navigation strong a,
.portailcognac #navigation a:hover {
  margin: 0;
}
.portailcognac .titre-plan {
  margin-top: 4em;
}
.portailcognac .titre-plan:before {
  content: "";
  display: block;
  background-color: ' .
table_valeur($Pile["vars"], (string)'c_footer', null) .
';
  width: 100%;
  height: 1px;
}
.portailcognac .titre-plan h1 {
  display: table;
  background-color: ' .
table_valeur($Pile["vars"], (string)'c_footer_bk', null) .
';
  margin: -1.1em 1em 1em 0.75em;
  padding: .25em .8em .3em!important;
  color: ' .
table_valeur($Pile["vars"], (string)'c_footer', null) .
';
  font-size: 2rem;
  border-left: 1px solid ' .
table_valeur($Pile["vars"], (string)'c_footer', null) .
';
}
.portailcognac #footer .menu > li > a {
  padding-left: 0;
}

.portailcognac #footer h2 a {
  padding-bottom: 7px;
  font-weight: 300;
  font-size: .85em;
  border-bottom: 2px dotted transparent;
}
#footer .liste-rubriques section {
  max-width: 300px;
  padding: 0 0 0 1em;
}
#footer .liste-rubriques a,
#footer .liste-rubriques a:hover {
  color: ' .
table_valeur($Pile["vars"], (string)'c_footer', null) .
';
}
#footer .liste-rubriques li {
  line-height: 1.25em;
  border-bottom: 2px dotted transparent;
}
#footer .liste-rubriques li:hover {
  border-bottom: 2px dotted ' .
table_valeur($Pile["vars"], (string)'c_footer', null) .
';
}
#footer .liste-rubriques li a {
  display: inline-block;
  padding: .35em 0!important;
}

@media screen and (max-width: 800px) {
  #footer .liste-rubriques section {
    border-bottom: 1px solid ' .
table_valeur($Pile["vars"], (string)'c_footer', null) .
';
  }
}
@media screen and (max-width: 400px) {
  #footer .liste-rubriques section {
    width: 100%;
  }
}
[class^="icon-"],
[class*=" icon-"] {
  display: inline-block;
}
.icon-lg {
  font-size: 2.33333333em;
  line-height: 0.75em;
}
.portailcognac .icon-lg {
  font-size: 1.33333333em;
}
.icon-2x {
  font-size: 2em;
  vertical-align: middle;
}
.icon-25x {
  font-size: 2.5em;
}
.icon-3x {
  font-size: 3em;
}
.icon-4x {
  font-size: 4em;
}
.icon-5x {
  font-size: 5em;
}
.icon-fw {
  width: 1.28571429em;
  text-align: center;
}
.portailcognac .formulaire_spip legend,
.portailcognac .formulaire_spip label {
  font-size: 1.1875rem;
}
.portailcognac .formulaire_spip .boutons {
  text-align: center;
}



#js-modal.sombre-modal {
  position: fixed;
  background-color: rgba(34, 34, 34, 0.95);
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: 0;
  padding: 0;
  width: auto;
  height: auto;
  z-index: 9999;
}
#js-modal #form_rech {
  max-width: 640px;
  margin: 0 auto;
}
#js-modal.sombre-modal > div {
  max-width: 640px;
  margin: 25vh auto;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a', null),'20','true')))!=='' ?
		('color: #' . $t1 . ';') :
		'') .
'
  ' .
(($t1 = strval(filtrer('couleur_inverserluminosite',table_valeur($Pile["vars"], (string)'c_menu_a_bk', null),'20','true')))!=='' ?
		('background: #' . $t1 . ';') :
		'') .
'
}
#js-modal #menu_lang {
  float: none;
  font-size: 3em;
  background-color: transparent;
}
#js-modal #form_rech label {
  width: 100%;
  text-align: center;
  color: white;
  font-size: 2em;
  font-weight: 300;
  padding: 1em;
}
#js-modal #form_rech .searchfield {
  width: 70%;
  padding: .5rem 1rem;
  font-size: 2rem;
  font-weight: 300;
  border: none;
  border-right: 1px solid;
}
#js-modal #sendsearch {
  padding: .85rem;
  font-size: 1.5rem;
  border: none;
  cursor: pointer;
  -webkit-appearance: none;
  border-radius: 0;
}
@media screen and (max-width: 640px) {
  #js-modal #form_rech label,
  #js-modal #form_rech .searchfield {
    font-size: 1.5em;
  }
  #js-modal #form_rech .sendsearch {
    font-size: 1.2em;
  }
}
#js-modal .socialtags ul {
  background: #fff;
  padding: 2em 3em !important;
  border: 3px solid #000;
}
#js-modal-close {
  position: absolute;
  right: 1em;
  top: .5em;
  width: 70px;
  height: 70px;
  opacity: 0.75;
  z-index: 9999;
  background-color: transparent;
  border: none;
}
#js-modal-close .sombre-modal-close__text {
  display: none;
}
#js-modal-close:hover {
  opacity: 1;
}
#js-modal-close:hover:before {
  background-color: #e5222e;
  transform: rotate(-45deg);
  -webkit-transition: all .5s ease!important;
  transition: all .5s ease!important;
}
#js-modal-close:hover:after {
  background-color: #e5222e;
  transform: rotate(45deg);
  -webkit-transition: all .5s ease!important;
  transition: all .5s ease!important;
}
#js-modal-close:before,
#js-modal-close:after {
  position: absolute;
  top: 0;
  left: 35px;
  content: \' \';
  height: 70px;
  width: 2px;
  background-color: #fff;
}
#js-modal-close:before {
  transform: rotate(45deg);
  -webkit-transition: all .5s ease!important;
  transition: all .5s ease!important;
}
#js-modal-close:after {
  transform: rotate(-45deg);
  -webkit-transition: all .5s ease!important;
  transition: all .5s ease!important;
}
#js-modal .socialtags {
  height: auto!important;
  margin-bottom: 1rem;
}
#js-modal .socialtags img {
  width: auto;
  height: auto;
  margin: 0 5px;
}
#js-modal .socialtags img:hover,
#js-modal socialtags img:focus {
  -webkit-transition: all .3s ease!important;
  transition: all .3s ease!important;
  -webkit-transform: scale(1.05, 1.05) !important;
  transform: scale(1.05, 1.05) !important;
}
@media screen and (max-width: 40em) {
  #js-modal .socialtags {
    text-align: center;
  }
}
#js-modal .socialtags-hovers,
#js-modal .socialtags-hovers:hover,
#js-modal .socialtags-hovers:focus {
  -webkit-transition: all .3s ease!important;
  transition: all .3s ease!important;
}
' .
(($t1 = strval(interdire_scripts((((((include_spip('inc/config')?lire_config('soyezcreateurs/mode_affichage','communiquant',false):'') == 'portailcognac')) OR (interdire_scripts(((include_spip('inc/config')?lire_config('soyezcreateurs_layout/pictogrammesoutils','non',false):'') == 'avecoutils')))) ?' ' :''))))!=='' ?
		($t1 . '
.hasJS #socialtags,
.hasJS #cadre_lang,
.hasJS #cadre_recherche,
.hasJS #miniagenda,
.hasJS #newsletterinscription,
.call-js-modal {
	display: none;
}
#js-modal-content #socialtags,
#js-modal-content #cadre_lang,
#js-modal-content #cadre_recherche,
#js-modal-content #miniagenda,
#js-modal-content #newsletterinscription {
	display: block;
}
') :
		'') .
'
.hasJS .call-js-modal {
	display: initial;
}

@media screen and (max-width: 768px) {
  #miettesdepain,
  .boutonstexte,
  .socialtags {
    display: none;
  }
}

.portailcognac .menu {
  margin: 0;
  list-style-type: none;
}
.portailcognac .menu > li {
  display: table-cell;
  vertical-align: middle;
}
.portailcognac .vertical > li {
  display: block;
  vertical-align: middle;
}
.portailcognac .title-bar-center .menu > li:hover,
.portailcognac .title-bar-center .menu > li:focus,
.portailcognac .title-bar-center .menu > li.rubActive {
  font-weight: normal;
}
.portailcognac .rubActive strong {
  font-weight: inherit;
}
.portailcognac h1,
.portailcognac h2,
.portailcognac h3,
.portailcognac h4,
.portailcognac h5,
.portailcognac h6,
.portailcognac .h1,
.portailcognac .h2,
.portailcognac .h3,
.portailcognac .h4,
.portailcognac .h5,
.portailcognac .h6 {
  font-weight: 400;
  letter-spacing: .02rem;
}



' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("lesscss", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	(find_in_path('images/stylessoyezcreateurs_perso.less.html')  ?
			('/* Surcharge eventuelle */' . (	'
	
		' .
		(($t3 = strval(file_get_contents(appliquer_filtre(supprimer_timestamp(produire_fond_statique( 'images/stylessoyezcreateurs_perso.less' , array('format' => 'less' ), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/stylessoyezcreateurs.css.html','html_2bc49e1c46721810c1dfb9822505203e','',837,$GLOBALS['spip_lang'])), _request('connect'))),'less_css'))))!=='' ?
				($t3 . (	'
		' .
			vide($Pile['vars'][$_zzz=(string)'lessdone'] = '1'))) :
				'') .
		'
	')) :
			'') .
	'
')) :
		'') .
'
' .
(!(table_valeur($Pile["vars"], (string)'lessdone', null))  ?
		(' ' . (	'
' .
	(find_in_path('images/stylessoyezcreateurs_perso.css')  ?
			('/* Surcharge eventuelle */' . (	'
' .
		filtre_compacte_dist(charge_scripts(url_absolue_css(find_in_path('images/stylessoyezcreateurs_perso.css')),false),'css') .
		'
')) :
			'') .
	'
')) :
		''));

	return analyse_resultat_skel('html_2bc49e1c46721810c1dfb9822505203e', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/stylessoyezcreateurs.css.html');
}
?>
<?php

/*
 * Squelette : ../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html
 * Date :      Thu, 26 Jul 2018 13:23:59 GMT
 * Compile :   Tue, 31 Jul 2018 13:39:14 GMT
 * Boucles :   _HeaderBanner
 */ 

function BOUCLE_HeaderBannerhtml_4262d173f824fb58c799f5955dd36f6f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_HeaderBanner';
		$command['from'] = array('mots' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("mots.id_mot");
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
		array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','_HeaderBanner',215,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= vide($Pile['vars'][$_zzz=(string)'headerbanner'] = filtrer('image_graver',filtrer('image_reduire',
((!is_array($l = quete_logo('id_mot', 'on', $Pile[$SP]['id_mot'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'300','0')));
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_HeaderBanner @ ../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html
// Temps de compilation total: 86.223 ms
//

function html_4262d173f824fb58c799f5955dd36f6f($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<?php // Contournement du bug https://core.spip.net/issues/3712
if (!function_exists(\'sc_ouinon_default\')) {
	function sc_ouinon_default($cfg) {
		if (is_null(lire_config($cfg))) {
			ecrire_config($cfg,\'on\');
		}
		return true;
	}
}
?>
<div class="formulaire_spip formulaire_configurer_sc">
	' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_ok', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_ok">' . $t1 . '</p>') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_erreur', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_erreur">' . $t1 . '</p>') :
		'') .
'
	<form method="post" action="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
'">
		<div>
			' .
	'<div>' .
	form_hidden(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(!empty($Pile[0]['_hidden']) ? @$Pile[0]['_hidden'] : '') .
	'</div><fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_mode_affichage') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'mode_affichage', null)) ,
	'nom' => 'mode_affichage' ,
	'label' => _T('soyezcreateursprive:cfg_mode_affichage_label') ,
	'datas' => array('edito' => _T('soyezcreateursprive:cfg_mode_edito'), 'news' => _T('soyezcreateursprive:cfg_mode_nouveautes'), 'portail' => _T('soyezcreateursprive:cfg_mode_portail'), 'actualites' => _T('soyezcreateursprive:cfg_mode_portail_actu'), 'communiquant' => _T('soyezcreateursprive:cfg_mode_communiquant'), 'international' => _T('soyezcreateursprive:cfg_mode_international'), 'mairie' => _T('soyezcreateursprive:cfg_mode_mairie'), 'blog' => _T('soyezcreateursprive:cfg_mode_blog'), 'portailcognac' => _T('soyezcreateursprive:cfg_mode_cognac'), 'portailagence' => _T('soyezcreateursprive:cfg_mode_agence')) ,
	'defaut' => 'communiquant' ,
	'cacher_option_intro' => 'oui' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',14,$GLOBALS['spip_lang'])), _request('connect')) .
'
					
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'tri_slideshow_communiquant', null)) ,
	'nom' => 'tri_slideshow_communiquant' ,
	'label' => _T('soyezcreateursprive:cfg_tri_slideshow_communiquant_label') ,
	'datas' => array('parnum' => _T('soyezcreateursprive:cfg_tri_slideshow_communiquant_parnum'), 'antichrono' => _T('soyezcreateursprive:cfg_tri_slideshow_communiquant_antichrono')) ,
	'defaut' => 'parnum' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',15,$GLOBALS['spip_lang'])), _request('connect')) .
'
					
					' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs/mode_affichage','communiquant',false):'') == 'communiquant')) ?' ' :''))))!=='' ?
		($t1 . (	'
					' .
	recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'largeur_slideshow_communiquant', null)) ,
	'nom' => 'largeur_slideshow_communiquant' ,
	'label' => _T('soyezcreateursprive:cfg_largeur_slideshow_communiquant_label') ,
	'datas' => array('etroite' => _T('soyezcreateursprive:cfg_largeur_slideshow_communiquant_etroite'), 'large' => _T('soyezcreateursprive:cfg_largeur_slideshow_communiquant_large')) ,
	'defaut' => 'etroite' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',16,$GLOBALS['spip_lang'])), _request('connect')) .
	'
					<?php sc_ouinon_default(\'soyezcreateurs/dessousbreves_communiquant_liens\'); ?>
					' .
	recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'oui_non' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'dessousbreves_communiquant_liens', null)) ,
	'nom' => 'dessousbreves_communiquant_liens' ,
	'label' => _T('soyezcreateursprive:cfg_dessousbreves_communiquant_liens_label') ,
	'defaut' => 'on' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',15,$GLOBALS['spip_lang'])), _request('connect')) .
	'
					' .
	recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'dessousbreves_communiquant_blocs', null)) ,
	'nom' => 'dessousbreves_communiquant_blocs' ,
	'label' => _T('soyezcreateursprive:cfg_dessousbreves_communiquant_blocs') ,
	'datas' => array('liste' => _T('soyezcreateursprive:cfg_affichage_liste'), 'block' => _T('soyezcreateursprive:cfg_affichage_block')) ,
	'defaut' => 'liste' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',14,$GLOBALS['spip_lang'])), _request('connect')) .
	'
					')) :
		'') .
'
					' .
(($t1 = strval(interdire_scripts(((match((include_spip('inc/config')?lire_config('soyezcreateurs/mode_affichage','communiquant',false):''),'communiquant|portailcognac')) ?' ' :''))))!=='' ?
		($t1 . (	'
					' .
	recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'vitesse_slider', null)) ,
	'nom' => 'vitesse_slider' ,
	'label' => _T('soyezcreateursprive:cfg_vitesse_slider_label') ,
	'size' => '5' ,
	'defaut' => '10000' ,
	'explication' => _T('soyezcreateursprive:cfg_vitesse_slider_label_ex') ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',16,$GLOBALS['spip_lang'])), _request('connect')) .
	'
					')) :
		'') .
'
					
					' .
(($t1 = strval(interdire_scripts(((match((include_spip('inc/config')?lire_config('soyezcreateurs/mode_affichage','communiquant',false):''),'portailcognac')) ?' ' :''))))!=='' ?
		($t1 . (	'
					' .
	recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'hauteur_slider', null)) ,
	'nom' => 'hauteur_slider' ,
	'label' => _T('soyezcreateursprive:cfg_hauteur_slider_label') ,
	'size' => '4' ,
	'defaut' => '580' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',17,$GLOBALS['spip_lang'])), _request('connect')) .
	'
					')) :
		'') .
'
					
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'nouveautes_web', null)) ,
	'nom' => 'nouveautes_web' ,
	'label' => _T('public|spip|ecrire:nouveautes_web') ,
	'datas' => array('oui' => _T('soyezcreateursprive:cfg_affichage_affiche'), 'non' => _T('soyezcreateursprive:cfg_affichage_masquer')) ,
	'defaut' => 'oui' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',16,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'case' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'native_tooltips', null)) ,
	'nom' => 'native_tooltips' ,
	'label' => _T('soyezcreateursprive:cfg_bulle_aide_label') ,
	'label_case' => _T('ecrire:item_oui') ,
	'defaut' => '' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',14,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'tooltip_delay', null)) ,
	'nom' => 'tooltip_delay' ,
	'label' => _T('soyezcreateursprive:cfg_bulle_aide_delay_label') ,
	'size' => '5' ,
	'defaut' => '1000' ,
	'explication' => _T('soyezcreateursprive:cfg_bulle_aide_delay_ex') ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',14,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'typemenuhaut', null)) ,
	'nom' => 'typemenuhaut' ,
	'label' => _T('soyezcreateursprive:cfg_typemenuhaut_label') ,
	'datas' => array('' => _T('soyezcreateursprive:cfg_typemenuhaut_rubriques'), 'mots' => _T('soyezcreateursprive:cfg_typemenuhaut_mots')) ,
	'defaut' => '' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',14,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs/mode_affichage','communiquant',false):'') == 'communiquant')) ?' ' :''))))!=='' ?
		($t1 . (	'
			<fieldset>
				<h3 class="legend">' .
	_T('soyezcreateursprive:cfg_affichagelistedocuments_label_bloc') .
	'</h3>	     
				<' .
	saisie_balise_structure_formulaire('ul') .
	' class="editer-groupe">
					' .
	recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'positiongoodies', null)) ,
	'nom' => 'positiongoodies' ,
	'label' => _T('soyezcreateursprive:cfg_goodies') ,
	'datas' => array('underedito' => _T('soyezcreateursprive:cfg_affichage_zone_underedito'), 'content' => _T('soyezcreateursprive:cfg_affichage_zone_content'), 'extra' => _T('soyezcreateursprive:cfg_affichage_zone_secondaire')) ,
	'defaut' => 'extra' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',14,$GLOBALS['spip_lang'])), _request('connect')) .
	'
					' .
	recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'positionquoi2neuf', null)) ,
	'nom' => 'positionquoi2neuf' ,
	'label' => _T('soyezcreateurs:quoideneuf') ,
	'datas' => array('content' => _T('soyezcreateursprive:cfg_affichage_zone_content'), 'extra' => _T('soyezcreateursprive:cfg_affichage_zone_secondaire')) ,
	'defaut' => 'content' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',14,$GLOBALS['spip_lang'])), _request('connect')) .
	'
					' .
	recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'positionvideo', null)) ,
	'nom' => 'positionvideo' ,
	'label' => _T('soyezcreateursprive:cfg_videoalaune') ,
	'datas' => array('content' => _T('soyezcreateursprive:cfg_affichage_zone_content'), 'extra' => _T('soyezcreateursprive:cfg_affichage_zone_secondaire')) ,
	'defaut' => 'extra' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',14,$GLOBALS['spip_lang'])), _request('connect')) .
	'
					' .
	recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'positionnouveautes', null)) ,
	'nom' => 'positionnouveautes' ,
	'label' => _T('soyezcreateursprive:cfg_nouveautes') ,
	'datas' => array('content' => _T('soyezcreateursprive:cfg_affichage_zone_content'), 'extra' => _T('soyezcreateursprive:cfg_affichage_zone_secondaire')) ,
	'defaut' => 'extra' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',14,$GLOBALS['spip_lang'])), _request('connect')) .
	'
				</' .
	saisie_balise_structure_formulaire('ul') .
	'>
			</fieldset>
			')) :
		'') .
'
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_position_datemajsite') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'positiondatemajsite', null)) ,
	'nom' => 'positiondatemajsite' ,
	'label' => _T('soyezcreateursprive:cfg_affichagelistedocuments_label') ,
	'datas' => array('header' => _T('soyezcreateursprive:cfg_mode_affichage_bandeau'), 'bottom' => _T('soyezcreateursprive:cfg_menu_footer_liens')) ,
	'defaut' => 'bottom' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',14,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			
			<p class="boutons">
				<input type="submit" name="enregistrer" value="' .
attribut_html(_T('public|spip|ecrire:bouton_enregistrer')) .
'" />
			</p>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_position_flux_rss') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'positionfluxrss', null)) ,
	'nom' => 'positionfluxrss' ,
	'label' => _T('soyezcreateursprive:cfg_position_flux_rss_label') ,
	'datas' => array('bottom' => _T('soyezcreateursprive:cfg_colonne_sec'), 'header' => _T('soyezcreateursprive:cfg_colonne_date'), 'masque' => _T('soyezcreateursprive:cfg_masque')) ,
	'defaut' => 'bottom' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',14,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'nombres_rssaccueil', null)) ,
	'nom' => 'nombres_rssaccueil' ,
	'label' => _T('soyezcreateursprive:cfg_rssaccueil_label') ,
	'size' => '3' ,
	'defaut' => '6' ,
	'explication' => _T('soyezcreateursprive:cfg_rssaccueil_label_ex') ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',14,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'nombres_rss', null)) ,
	'nom' => 'nombres_rss' ,
	'label' => _T('soyezcreateursprive:cfg_rss_label') ,
	'size' => '3' ,
	'defaut' => '0' ,
	'explication' => _T('soyezcreateursprive:cfg_rss_label_ex') ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',14,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_apparence_header') .
'</h3>
					' .
BOUCLE_HeaderBannerhtml_4262d173f824fb58c799f5955dd36f6f($Cache, $Pile, $doublons, $Numrows, $SP) .
'
					' .
(($t1 = strval((((((
((!is_array($l = quete_logo('id_syndic', 'off', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />'))) ?'' :' ')) AND (((table_valeur($Pile["vars"], (string)'headerbanner', null)) ?'' :' '))) ?' ' :'')))!=='' ?
		($t1 . (	'
						' .
	vide($Pile['vars'][$_zzz=(string)'c_header_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/header_bk','#ffffff',false):''))) .
	'
						' .
	vide($Pile['vars'][$_zzz=(string)'bandeg'] = (	_T('soyezcreateursprive:cfg_banniere_degrade') .
		'<span style="display:block; height:150px;border:1px solid #888;background: ' .
		table_valeur($Pile["vars"], (string)'c_header_bk', null) .
		(($t3 = strval(extraire_attribut(filtrer('image_graver', filtrer('image_aplatir',filtrer('image_sepia',find_in_path('images/fond_degrade_fonce_en_bas2.png'),table_valeur($Pile["vars"], (string)'c_header_bk', null)),'jpg')),'src')))!=='' ?
				(' url(' . $t3 . ') repeat-x bottom') :
				'') .
		';">&nbsp;</span>')) .
	'
						' .
	vide($Pile['vars'][$_zzz=(string)'banmet'] = (	_T('soyezcreateursprive:cfg_banniere_metal') .
		'<span style="display:block; height:150px;border:1px solid #888;background: ' .
		table_valeur($Pile["vars"], (string)'c_header_bk', null) .
		(($t3 = strval(extraire_attribut(filtrer('image_graver', filtrer('image_aplatir',filtrer('image_sepia',find_in_path('images/trame_metal.jpg'),table_valeur($Pile["vars"], (string)'c_header_bk', null)),'jpg')),'src')))!=='' ?
				(' url(' . $t3 . ') repeat') :
				'') .
		';">&nbsp;</span>')) .
	'
						' .
	vide($Pile['vars'][$_zzz=(string)'banlen'] = (	_T('soyezcreateursprive:cfg_banniere_lentilles') .
		'<span style="display:block; ' .
		(($t3 = strval(extraire_attribut(filtrer('image_graver', filtrer('image_aplatir',filtrer('image_sepia',find_in_path('images/bandeauhaut_soyezcreateur.png'),table_valeur($Pile["vars"], (string)'c_header_bk', null)),'jpg')),'src')))!=='' ?
				((	'height: ' .
			hauteur(find_in_path('images/bandeauhaut_soyezcreateur.png')) .
			'px; background: ' .
			table_valeur($Pile["vars"], (string)'c_header_bk', null) .
			' url(/') . $t3 . ') no-repeat right;') :
				'') .
		'">&nbsp;</span>')) .
	'
						' .
	(($t2 = strval(recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'default_banniere', null)) ,
	'nom' => 'default_banniere' ,
	'label' => _T('soyezcreateursprive:cfg_choix_banniere_label') ,
	'datas' => array('degrade' => table_valeur($Pile["vars"], (string)'bandeg', null), 'metal' => table_valeur($Pile["vars"], (string)'banmet', null), 'lentilles' => table_valeur($Pile["vars"], (string)'banlen', null)) ,
	'defaut' => 'lentilles' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',0,$GLOBALS['spip_lang'])), _request('connect'))))!=='' ?
			((	'<' .
		saisie_balise_structure_formulaire('ul') .
		' class="editer-groupe">') . $t2 . (	'</' .
		saisie_balise_structure_formulaire('ul') .
		'>')) :
			'') .
	'
					')) :
		'') .
'
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
(($t1 = strval((((((
((!is_array($l = quete_logo('id_syndic', 'off', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />'))) ?' ' :'')) OR (((table_valeur($Pile["vars"], (string)'headerbanner', null)) ?' ' :''))) ?' ' :'')))!=='' ?
		($t1 . (	'
					' .
	recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'afficher_titre', null)) ,
	'nom' => 'afficher_titre' ,
	'label' => _T('soyezcreateursprive:cfg_afficher_titre_label') ,
	'datas' => array('invisible' => _T('soyezcreateursprive:cfg_afficher_titre_invisible'), 'visible' => _T('soyezcreateursprive:cfg_afficher_titre_visible')) ,
	'explication' => (	(($t3 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'afficher_titre', null),true) == 'visible') ? interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])):''))))!=='' ?
				($t3 . '<br />') :
				'') .
		((($a = filtrer('image_graver', filtrer('image_reduire',
((!is_array($l = quete_logo('id_syndic', 'off', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'300','0'))) OR (is_string($a) AND strlen($a))) ? $a : table_valeur($Pile["vars"], (string)'headerbanner', null))) ,
	'defaut' => 'visible' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',0,$GLOBALS['spip_lang'])), _request('connect')) .
	'
					')) :
		'') .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'hauteurbannierre', null)) ,
	'nom' => 'hauteurbannierre' ,
	'label' => _T('soyezcreateursprive:cfg_hauteur_banner') ,
	'explication' => _T('soyezcreateursprive:cfg_hauteur_banner_explication') ,
	'size' => '3' ,
	'defaut' => '0' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',227,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'citationsheader', null)) ,
	'nom' => 'citationsheader' ,
	'label' => _T('soyezcreateursprive:cfg_mode_affichage_citations_label') ,
	'datas' => array('extra' => _T('soyezcreateursprive:cfg_affichage_zone_secondaire'), 'header' => _T('soyezcreateursprive:cfg_affichage_zone_bandeau'), 'citations_bandeau' => _T('soyezcreateursprive:cfg_affichage_zone_bandeau_annonce')) ,
	'defaut' => 'extra' ,
	'cacher_option_intro' => 'oui' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'logoheader', null)) ,
	'nom' => 'logoheader' ,
	'label' => _T('soyezcreateursprive:cfg_mode_affichage_logo_label') ,
	'datas' => array('navigation' => _T('soyezcreateursprive:cfg_affichage_zone_principale'), 'header' => _T('soyezcreateursprive:cfg_affichage_zone_bandeau'), 'jamais' => _T('soyezcreateursprive:cfg_pas_affichage_rss')) ,
	'defaut' => 'header' ,
	'cacher_option_intro' => 'oui' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'centrerlogo', null)) ,
	'nom' => 'centrerlogo' ,
	'label' => _T('soyezcreateursprive:cfg_centrerlogo') ,
	'datas' => array('oui' => _T('soyezcreateursprive:cfg_centrerlogo_oui'), 'non' => _T('soyezcreateursprive:cfg_centrerlogo_non')) ,
	'defaut' => 'non' ,
	'cacher_option_intro' => 'oui' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'logoheaderx', null)) ,
	'nom' => 'logoheaderx' ,
	'label' => _T('soyezcreateursprive:cfg_decalage_droite_label') ,
	'size' => '3' ,
	'defaut' => '20' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'logoheadery', null)) ,
	'nom' => 'logoheadery' ,
	'label' => _T('soyezcreateursprive:cfg_decalage_bas_label') ,
	'size' => '3' ,
	'defaut' => '20' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_menuderoulant') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'menuhautheader', null)) ,
	'nom' => 'menuhautheader' ,
	'label' => _T('soyezcreateursprive:cfg_mode_affichage_haut_label') ,
	'datas' => array('content' => _T('soyezcreateursprive:cfg_mode_affichage_dessus_contenu'), 'header' => _T('soyezcreateursprive:cfg_mode_affichage_bandeau')) ,
	'defaut' => 'header' ,
	'cacher_option_intro' => 'oui' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'deepmenu', null)) ,
	'nom' => 'deepmenu' ,
	'label' => _T('soyezcreateursprive:cfg_mode_affichage_deepmenu_label') ,
	'datas' => array('rien' => _T('soyezcreateursprive:cfg_mode_affichage_deepmenu_rien'), 'deroulant' => _T('soyezcreateursprive:cfg_mode_affichage_deepmenu_deroulant'), 'arborescent' => _T('soyezcreateursprive:cfg_mode_affichage_deepmenu_arborescent')) ,
	'defaut' => 'deroulant' ,
	'cacher_option_intro' => 'oui' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<p class="boutons">
				<input type="submit" name="enregistrer" value="' .
attribut_html(_T('public|spip|ecrire:bouton_enregistrer')) .
'" />
			</p>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_sousmenulocaux') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'sousmenulocaux', null)) ,
	'nom' => 'sousmenulocaux' ,
	'label' => _T('soyezcreateursprive:cfg_sousmenulocaux_label') ,
	'datas' => array('systematique' => _T('soyezcreateursprive:cfg_systematiquement'), 'local' => _T('soyezcreateursprive:cfg_localement')) ,
	'defaut' => 'systematique' ,
	'cacher_option_intro' => 'oui' ,
	'explication' => _T('soyezcreateursprive:cfg_sousmenulocaux_ex') ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_nombres_quoideneuf') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'nombres_alanune', null)) ,
	'nom' => 'nombres_alanune' ,
	'label' => _T('soyezcreateursprive:cfg_alaune_label') ,
	'size' => '2' ,
	'defaut' => '4' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'nombres_goodies', null)) ,
	'nom' => 'nombres_goodies' ,
	'label' => _T('soyezcreateursprive:cfg_goodies_label') ,
	'size' => '2' ,
	'defaut' => '5' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'age_goodies', null)) ,
	'nom' => 'age_goodies' ,
	'label' => _T('soyezcreateursprive:cfg_age_goodies') ,
	'size' => '3' ,
	'defaut' => '30' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'nombres_quoideneuf', null)) ,
	'nom' => 'nombres_quoideneuf' ,
	'label' => _T('soyezcreateursprive:cfg_quoideneuf_label') ,
	'size' => '2' ,
	'defaut' => '5' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'nombres_zoomsur', null)) ,
	'nom' => 'nombres_zoomsur' ,
	'label' => _T('soyezcreateursprive:cfg_zoomsur_label') ,
	'size' => '2' ,
	'defaut' => '1' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'nombres_dessousbreves', null)) ,
	'nom' => 'nombres_dessousbreves' ,
	'label' => _T('soyezcreateursprive:cfg_nombres_dessousbreves_label') ,
	'size' => '2' ,
	'defaut' => '10' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'nombres_sitesaccueil', null)) ,
	'nom' => 'nombres_sitesaccueil' ,
	'label' => _T('soyezcreateursprive:cfg_nombres_sitesaccueil_label') ,
	'size' => '2' ,
	'defaut' => '6' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'ordre_quoideneuf', null)) ,
	'nom' => 'ordre_quoideneuf' ,
	'label' => _T('soyezcreateursprive:cfg_ordre_quoideneuf_label') ,
	'datas' => array('date_modif' => _T('soyezcreateursprive:cfg_ordre_quoideneuf_date_modif'), 'date' => _T('soyezcreateursprive:cfg_ordre_quoideneuf_date')) ,
	'defaut' => 'date_modif' ,
	'cacher_option_intro' => 'oui' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
					<?php sc_ouinon_default(\'soyezcreateurs/affichage_lien_antichrono\'); ?>
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'oui_non' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'affichage_lien_antichrono', null)) ,
	'nom' => 'affichage_lien_antichrono' ,
	'label' => _T('soyezcreateursprive:cfg_affichage_plan_label') ,
	'defaut' => 'on' ,
	'explication' => _T('soyezcreateursprive:cfg_affichage_plan_ex') ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',225,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'oui_non' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'nouveauteparbranche', null)) ,
	'nom' => 'nouveauteparbranche' ,
	'label' => _T('soyezcreateursprive:cfg_affichage_nouveautes_label') ,
	'defaut' => '' ,
	'explication' => _T('soyezcreateursprive:cfg_affichage_nouveautes_ex') ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_navigationtransversalelocale') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'navigationtransversalelocale', null)) ,
	'nom' => 'navigationtransversalelocale' ,
	'label' => _T('soyezcreateursprive:cfg_navigationtransversale_label') ,
	'datas' => array('locale' => _T('soyezcreateursprive:cfg_locale_menu'), 'globale' => _T('soyezcreateursprive:cfg_globale')) ,
	'defaut' => 'locale' ,
	'cacher_option_intro' => 'oui' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'	
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<p class="boutons">
				<input type="submit" name="enregistrer" value="' .
attribut_html(_T('public|spip|ecrire:bouton_enregistrer')) .
'" />
			</p>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_affichagelistedocuments') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'checkbox' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'affichagelistedocuments', null)) ,
	'nom' => 'affichagelistedocuments' ,
	'label' => _T('soyezcreateursprive:cfg_affichagelistedocuments_label') ,
	'datas' => array('enbas' => _T('soyezcreateursprive:cfg_affichagelistedocuments_enbas'), 'cartouche' => _T('soyezcreateursprive:cfg_affichagelistedocuments_cartouche'), 'nulpart' => _T('soyezcreateursprive:cfg_affichagelistedocuments_nulpart'), 'redirectsiunique' => _T('soyezcreateursprive:cfg_affichagelistedocuments_redirectsiunique'), 'listeravecarticles' => _T('soyezcreateursprive:cfg_affichagelistedocuments_listeravecarticles'), 'noicon' => _T('soyezcreateursprive:cfg_affichagelistedocuments_noicon'), 'masquerdocumentsvus' => _T('soyezcreateursprive:cfg_affichagelistedocuments_masquervus')) ,
	'defaut' => 'enbas' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'	
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_formulaire_recherche') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'geolocalisation', null)) ,
	'nom' => 'geolocalisation' ,
	'label' => _T('soyezcreateursprive:cfg_geolocalisation_label') ,
	'datas' => array('oui' => _T('public|spip|ecrire:item_oui'), 'non' => _T('soyezcreateursprive:cfg_non_secondaire')) ,
	'defaut' => 'non' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'positionrecherche', null)) ,
	'nom' => 'positionrecherche' ,
	'label' => _T('soyezcreateursprive:cfg_zone_recherche_label') ,
	'datas' => array('navigation' => _T('soyezcreateursprive:cfg_bas_principale'), 'header' => _T('soyezcreateursprive:cfg_bandeau_page'), 'menuhaut' => _T('soyezcreateursprive:cfg_menu_haut')) ,
	'defaut' => 'header' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_ephemeride') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'affichage_ephemeride', null)) ,
	'nom' => 'affichage_ephemeride' ,
	'label' => _T('soyezcreateursprive:cfg_ephemeride_label') ,
	'datas' => array('oui' => _T('soyezcreateursprive:cfg_ephemeride_label'), 'non' => _T('soyezcreateursprive:cfg_pas_ephemeride')) ,
	'defaut' => 'oui' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("RAINETTE", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'rainette_ville', null)) ,
	'nom' => 'rainette_ville' ,
	'label' => _T('soyezcreateursprive:cfg_rainette_ville') ,
	'defaut' => 'FRXX0076' ,
	'explication' => _T('soyezcreateursprive:cfg_inf_rainette_ville') ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect'))) :
		'') .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<p class="boutons">
				<input type="submit" name="enregistrer" value="' .
attribut_html(_T('public|spip|ecrire:bouton_enregistrer')) .
'" />
			</p>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_blocslibres') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'textarea' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'bloc_header', null)) ,
	'nom' => 'bloc_header' ,
	'label' => _T('soyezcreateursprive:cfg_texte_bloc_header') ,
	'rows' => '3' ,
	'cols' => '40' ,
	'class' => 'inserer_barre_edition' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_bandeau_annonce') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'textarea' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'bandeau_annonce', null)) ,
	'nom' => 'bandeau_annonce' ,
	'label' => _T('soyezcreateursprive:cfg_texte_bandeau_annonce') ,
	'rows' => '3' ,
	'cols' => '40' ,
	'class' => 'inserer_barre_edition' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_bandeau_contact') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'textarea' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'bandeau_contact', null)) ,
	'nom' => 'bandeau_contact' ,
	'label' => _T('soyezcreateursprive:cfg_texte_bandeau_label') ,
	'rows' => '3' ,
	'cols' => '40' ,
	'class' => 'inserer_barre_edition' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'bandeau_contact_extra', null)) ,
	'nom' => 'bandeau_contact_extra' ,
	'label' => _T('soyezcreateursprive:cfg_mode_bandeau_contact_label') ,
	'datas' => array('bas' => _T('soyezcreateursprive:cfg_menu_footer_liens'), 'navigation' => _T('soyezcreateursprive:cfg_affichage_zone_principale'), 'extra' => _T('soyezcreateursprive:cfg_affichage_zone_secondaire')) ,
	'defaut' => 'bas' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("ACCESRESTREINT", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . (	'<p class="boutons">
				<input type="submit" name="enregistrer" value="' .
	attribut_html(_T('public|spip|ecrire:bouton_enregistrer')) .
	'" />
			</p>
			<fieldset>
				<h3 class="legend">' .
	_T('soyezcreateursprive:cfg_explicationslogin') .
	'</h3>
				<' .
	saisie_balise_structure_formulaire('ul') .
	' class="editer-groupe">
					' .
	recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'textarea' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'explicationslogin', null)) ,
	'nom' => 'explicationslogin' ,
	'label' => _T('soyezcreateursprive:cfg_texte_explicationslogin') ,
	'rows' => '10' ,
	'cols' => '40' ,
	'class' => 'inserer_barre_edition' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
	'
				</' .
	saisie_balise_structure_formulaire('ul') .
	'>
			</fieldset>')) :
		'') .
'
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_numero_cnil') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'numero_cnil', null)) ,
	'nom' => 'numero_cnil' ,
	'label' => _T('soyezcreateursprive:cfg_numero_cnil_label') ,
	'size' => '20' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_datepublication') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'aff_datepublication', null)) ,
	'nom' => 'aff_datepublication' ,
	'label' => _T('soyezcreateursprive:cfg_datepublication_label') ,
	'explication' => _T('soyezcreateursprive:cfg_datepublication_ex') ,
	'datas' => array('oui' => _T('soyezcreateursprive:cfg_datepublication'), 'last' => _T('soyezcreateursprive:cfg_datepublication_maj'), 'non' => _T('soyezcreateursprive:cfg_pas_datepublication'), 'non_last' => (	_T('soyezcreateursprive:cfg_pas_datepublication_maj') .
		'
						')) ,
	'defaut' => 'non' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
					<?php sc_ouinon_default(\'soyezcreateurs/aff_datepublicationgoodies\'); ?>
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'oui_non' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'aff_datepublicationgoodies', null)) ,
	'nom' => 'aff_datepublicationgoodies' ,
	'label' => _T('soyezcreateursprive:cfg_datepublicationgoodies_label') ,
	'explication' => _T('soyezcreateursprive:cfg_datepublicationgoodies_ex') ,
	'defaut' => 'on' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',225,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<p class="boutons">
				<input type="submit" name="enregistrer" value="' .
attribut_html(_T('public|spip|ecrire:bouton_enregistrer')) .
'" />
			</p>
			<?php if (lire_config(\'soyezcreateurs/mode_affichage\')==\'portailcognac\') { ?>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateurs:agenda') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'nombres_agenda_par_bloc', null)) ,
	'nom' => 'nombres_agenda_par_bloc' ,
	'label' => _T('soyezcreateursprive:cfg_nombres_agenda_par_bloc') ,
	'explication' => _T('soyezcreateursprive:cfg_nombres_agenda_par_bloc_explication') ,
	'datas' => array('1' => _T('soyezcreateursprive:cfg_nombres_agenda_par_bloc_1'), '1demie' => _T('soyezcreateursprive:cfg_nombres_agenda_par_bloc_1demi'), '2' => (	_T('soyezcreateursprive:cfg_nombres_agenda_par_bloc_2') .
		'
						')) ,
	'defaut' => '2' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<?php } ?>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_miniagenda') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'miniagenda', null)) ,
	'nom' => 'miniagenda' ,
	'label' => _T('soyezcreateursprive:cfg_miniagenda_label') ,
	'datas' => array('on' => _T('soyezcreateursprive:cfg_affichage_zone_secondaire'), 'bas' => _T('soyezcreateursprive:cfg_menu_footer_liens'), 'non' => _T('ecrire:item_non')) ,
	'defaut' => 'on' ,
	'cacher_option_intro' => 'oui' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
					<?php sc_ouinon_default(\'soyezcreateurs/homeagenda\'); ?>
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'oui_non' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'homeagenda', null)) ,
	'nom' => 'homeagenda' ,
	'label' => _T('soyezcreateursprive:cfg_homeagenda_label') ,
	'explication' => _T('soyezcreateursprive:cfg_homeagenda_ex') ,
	'defaut' => 'on' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',225,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'nombres_agenda', null)) ,
	'nom' => 'nombres_agenda' ,
	'label' => _T('soyezcreateursprive:cfg_max_agenda_label') ,
	'size' => '2' ,
	'defaut' => '5' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_agendathematique') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'oui_non' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'agendathematique', null)) ,
	'nom' => 'agendathematique' ,
	'label' => _T('soyezcreateursprive:cfg_agendathematique_label') ,
	'defaut' => '' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_agenda_futurseul') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'agendafuturseul', null)) ,
	'nom' => 'agendafuturseul' ,
	'label' => _T('soyezcreateursprive:cfg_evenements_label') ,
	'datas' => array('oui' => _T('soyezcreateursprive:cfg_futur_seul'), 'non' => _T('soyezcreateursprive:cfg_tous_evenements')) ,
	'defaut' => 'oui' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_agendascolaire') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'agendascolaire', null)) ,
	'nom' => 'agendascolaire' ,
	'label' => _T('soyezcreateursprive:cfg_type_agenda_label') ,
	'datas' => array('annuel' => _T('soyezcreateursprive:cfg_annuel'), 'scolaire' => _T('soyezcreateursprive:cfg_scolaire')) ,
	'defaut' => 'annuel' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_agenda_inscription') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'oui_non' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'agenda_inscription', null)) ,
	'nom' => 'agenda_inscription' ,
	'label' => _T('soyezcreateursprive:cfg_agenda_inscription_label') ,
	'defaut' => '' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_agenda_ical_masque') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'oui_non' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'agenda_ical_masque', null)) ,
	'nom' => 'agenda_ical_masque' ,
	'label' => _T('soyezcreateursprive:cfg_agenda_ical_masque_label') ,
	'defaut' => '' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<p class="boutons">
				<input type="submit" name="enregistrer" value="' .
attribut_html(_T('public|spip|ecrire:bouton_enregistrer')) .
'" />
			</p>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_anonymatglobal') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					<?php sc_ouinon_default(\'soyezcreateurs/anonymatglobal\'); ?>
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'oui_non' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'anonymatglobal', null)) ,
	'nom' => 'anonymatglobal' ,
	'label' => _T('soyezcreateursprive:cfg_anonymatglobal_label') ,
	'defaut' => 'on' ,
	'explication' => _T('soyezcreateursprive:cfg_anonymatglobal_ex') ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',225,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_textesiplanvide') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'textarea' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'textesiplanvide', null)) ,
	'nom' => 'textesiplanvide' ,
	'label' => _T('soyezcreateursprive:cfg_textesiplanvide_label') ,
	'rows' => '3' ,
	'cols' => '40' ,
	'class' => 'inserer_barre_edition' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_affichage_impression') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'oui_non' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'aff_complet_pour_impression', null)) ,
	'nom' => 'aff_complet_pour_impression' ,
	'label' => _T('soyezcreateursprive:cfg_affichage_impression_label') ,
	'defaut' => '' ,
	'explication' => _T('soyezcreateursprive:cfg_affichage_impression_ex') ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<p class="boutons">
				<input type="submit" name="enregistrer" value="' .
attribut_html(_T('public|spip|ecrire:bouton_enregistrer')) .
'" />
			</p>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_realisation') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'textarea' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'realisation', null)) ,
	'nom' => 'realisation' ,
	'label' => _T('soyezcreateursprive:cfg_realisation') ,
	'rows' => '3' ,
	'cols' => '40' ,
	'defaut' => '&#91;pyrat.net|Visiter le site du créateur de ce squelette->https://www.pyrat.net/&#93;' ,
	'class' => 'inserer_barre_edition' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_zone_forum') .
'</h3>
				<p>' .
_T('soyezcreateursprive:cfg_zone_forum_laisser_vide') .
'</p>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'zone_forum_titre', null)) ,
	'nom' => 'zone_forum_titre' ,
	'label' => _T('soyezcreateursprive:cfg_zone_forum_titre') ,
	'defaut' => '' ,
	'explication' => (	'(' .
	_T('soyezcreateurs:forum_vosreponses') .
	')') ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'zone_forum_invite', null)) ,
	'nom' => 'zone_forum_invite' ,
	'label' => _T('soyezcreateursprive:cfg_zone_forum_invite') ,
	'defaut' => '' ,
	'explication' => (	'(' .
	_T('soyezcreateurs:forum_repondre') .
	')') ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'affiche_forum_sommaire', null)) ,
	'nom' => 'affiche_forum_sommaire' ,
	'label' => _T('soyezcreateursprive:cfg_affiche_forum_sommaire') ,
	'datas' => array('oui' => _T('soyezcreateursprive:cfg_affichage_affiche'), 'non' => _T('soyezcreateursprive:cfg_affichage_masquer')) ,
	'defaut' => 'oui' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html','html_4262d173f824fb58c799f5955dd36f6f','',224,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<p class="boutons">
				<input type="submit" name="enregistrer" value="' .
attribut_html(_T('public|spip|ecrire:bouton_enregistrer')) .
'" />
			</p>
		</div>
	</form>
</div>');

	return analyse_resultat_skel('html_4262d173f824fb58c799f5955dd36f6f', $Cache, $page, '../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs.html');
}
?>
<?php

/*
 * Squelette : ../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html
 * Date :      Thu, 26 Jul 2018 13:23:59 GMT
 * Compile :   Wed, 01 Aug 2018 05:48:49 GMT
 * Boucles :   _Layouts
 */ 

function BOUCLE_Layoutshtml_3ac82971255aa661fd83c2ef4ece7d84(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_Layouts';
		$command['from'] = array('mots' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("0+mots.titre AS num",
		"mots.titre",
		"mots.id_mot");
		$command['orderby'] = array('num');
		$command['where'] = 
			array(
			array('=', 'mots.type', "'_LayoutGala'"));
		$command['join'] = array();
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
		array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','_Layouts',549,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
								<tr>
									<td style="border:1px solid #888;"><img src="' .
find_in_path((	'img_pack/layout0' .
	interdire_scripts(substr($Pile[$SP]['titre'],'0','2')) .
	'.gif')) .
'" /> ' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</td>
									<td style="border:1px solid #888;"><input type="radio" name="default_layout" id="sc_default_layout' .
$Pile[$SP]['id_mot'] .
'" value="' .
interdire_scripts(substr($Pile[$SP]['titre'],'0','2')) .
'"' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'default_layout', null), '33'),true) == interdire_scripts(substr($Pile[$SP]['titre'],'0','2'))) ? 'checked':''))))!=='' ?
		(' checked="' . $t1 . '"') :
		'') .
' /><label style="margin-left:1px;" for="sc_default_layout' .
$Pile[$SP]['id_mot'] .
'">&nbsp;' .
interdire_scripts(substr($Pile[$SP]['titre'],'0','2')) .
'</label></td>
									<td style="border:1px solid #888;"><input type="radio" name="sommaire_layout" id="sc_sommaire_layout' .
$Pile[$SP]['id_mot'] .
'" value="' .
interdire_scripts(substr($Pile[$SP]['titre'],'0','2')) .
'"' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'sommaire_layout', null), '33'),true) == interdire_scripts(substr($Pile[$SP]['titre'],'0','2'))) ? 'checked':''))))!=='' ?
		(' checked="' . $t1 . '"') :
		'') .
' /><label style="margin-left:1px;"  for="sc_sommaire_layout' .
$Pile[$SP]['id_mot'] .
'">&nbsp;' .
interdire_scripts(substr($Pile[$SP]['titre'],'0','2')) .
'</label></td>
								</tr>
								');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_Layouts @ ../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html
// Temps de compilation total: 54.000 ms
//

function html_3ac82971255aa661fd83c2ef4ece7d84($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_configurer_sc">
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
_T('soyezcreateursprive:cfg_largeurs_colonnes') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'largeurconteneur', null)) ,
	'nom' => 'largeurconteneur' ,
	'label' => _T('soyezcreateursprive:cfg_largeur_conteneur') ,
	'defaut' => '960' ,
	'size' => '4' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'largeurombre', null)) ,
	'nom' => 'largeurombre' ,
	'label' => _T('soyezcreateursprive:cfg_largeur_ombre') ,
	'defaut' => '0' ,
	'size' => '2' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'largeurmenugauche', null)) ,
	'nom' => 'largeurmenugauche' ,
	'label' => _T('soyezcreateursprive:cfg_largeur_menu_p') ,
	'defaut' => '180' ,
	'size' => '3' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'largeurmenudroit', null)) ,
	'nom' => 'largeurmenudroit' ,
	'label' => _T('soyezcreateursprive:cfg_largeur_menu_sec') ,
	'defaut' => '180' ,
	'size' => '3' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("SPLICKR", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . (	'
					' .
	recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'largeursplickrbox', null)) ,
	'nom' => 'largeursplickrbox' ,
	'label' => _T('soyezcreateursprive:cfg_largeur_splickrbox') ,
	'defaut' => '140' ,
	'size' => '3' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',5,$GLOBALS['spip_lang'])), _request('connect')) .
	'
					')) :
		'') .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'maxlargeurimage', null)) ,
	'nom' => 'maxlargeurimage' ,
	'label' => _T('soyezcreateursprive:cfg_largeur_max_img') ,
	'defaut' => '720' ,
	'size' => '3' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',5,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'largeurvideoaccueil', null)) ,
	'nom' => 'largeurvideoaccueil' ,
	'label' => _T('soyezcreateursprive:cfg_largeur_videoaccueil') ,
	'defaut' => '0' ,
	'size' => '3' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs/mode_affichage','communiquant',false):'') == 'international')) ?' ' :''))))!=='' ?
		($t1 . (	'
					' .
	recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'hauteurvideoaccueil', null)) ,
	'nom' => 'hauteurvideoaccueil' ,
	'label' => _T('soyezcreateursprive:cfg_hauteur_videoaccueil') ,
	'defaut' => '0' ,
	'size' => '3' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',5,$GLOBALS['spip_lang'])), _request('connect')) .
	'
					' .
	recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'largeurcolonnes', null)) ,
	'nom' => 'largeurcolonnes' ,
	'label' => _T('soyezcreateursprive:cfg_largeur_colonnes_centrales') ,
	'defaut' => '0' ,
	'size' => '3' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
	'
					' .
	recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'margescolonnes', null)) ,
	'nom' => 'margescolonnes' ,
	'label' => _T('soyezcreateursprive:cfg_marges_colonnes_centrales') ,
	'defaut' => '12' ,
	'size' => '2' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
	'
					')) :
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
_T('soyezcreateursprive:cfg_taille_logos_max_menuprincipal') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'largeurlogomenuprincipal', null)) ,
	'nom' => 'largeurlogomenuprincipal' ,
	'label' => _T('soyezcreateursprive:cfg_largeur') ,
	'defaut' => '16' ,
	'size' => '2' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'hauteurlogomenuprincipal', null)) ,
	'nom' => 'hauteurlogomenuprincipal' ,
	'label' => _T('soyezcreateursprive:cfg_hauteur') ,
	'defaut' => '16' ,
	'size' => '2' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'logomenuprincipal', null)) ,
	'nom' => 'logomenuprincipal' ,
	'label' => _T('soyezcreateursprive:cfg_menu_affichagelogo_label') ,
	'datas' => array('oui' => _T('soyezcreateursprive:cfg_menu_haut_affichagelogo_logoplustexte'), 'non' => _T('soyezcreateursprive:cfg_menu_haut_affichagelogo_deroulant_non')) ,
	'defaut' => 'oui' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_taille_logos_max_menufooter') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'largeurlogomenufooter', null)) ,
	'nom' => 'largeurlogomenufooter' ,
	'label' => _T('soyezcreateursprive:cfg_largeur') ,
	'defaut' => '16' ,
	'size' => '2' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'hauteurlogomenufooter', null)) ,
	'nom' => 'hauteurlogomenufooter' ,
	'label' => _T('soyezcreateursprive:cfg_hauteur') ,
	'defaut' => '16' ,
	'size' => '2' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'logomenufooter', null)) ,
	'nom' => 'logomenufooter' ,
	'label' => _T('soyezcreateursprive:cfg_menu_affichagelogo_label') ,
	'datas' => array('oui' => _T('soyezcreateursprive:cfg_menu_haut_affichagelogo_logoplustexte'), 'non' => _T('soyezcreateursprive:cfg_menu_haut_affichagelogo_deroulant_non')) ,
	'defaut' => 'oui' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
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
_T('soyezcreateursprive:cfg_taille_logos_max') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'largeurlogomenuhaut', null)) ,
	'nom' => 'largeurlogomenuhaut' ,
	'label' => _T('soyezcreateursprive:cfg_largeur') ,
	'defaut' => '16' ,
	'size' => '2' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'hauteurlogomenuhaut', null)) ,
	'nom' => 'hauteurlogomenuhaut' ,
	'label' => _T('soyezcreateursprive:cfg_hauteur') ,
	'defaut' => '16' ,
	'size' => '2' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'menuhautlogo', null)) ,
	'nom' => 'menuhautlogo' ,
	'label' => _T('soyezcreateursprive:cfg_menu_affichagelogo_label') ,
	'datas' => array('logoonly' => _T('soyezcreateursprive:cfg_menu_haut_affichagelogo_logoonly'), 'logoplustexte' => _T('soyezcreateursprive:cfg_menu_haut_affichagelogo_logoplustexte'), 'non' => _T('soyezcreateursprive:cfg_menu_haut_affichagelogo_deroulant_non')) ,
	'defaut' => 'logoplustexte' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_menu_haut_affichagelogo_deroulant') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'largeurlogomenuhautderoulant', null)) ,
	'nom' => 'largeurlogomenuhautderoulant' ,
	'label' => _T('soyezcreateursprive:cfg_largeur') ,
	'defaut' => '16' ,
	'size' => '2' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'hauteurlogomenuhautderoulant', null)) ,
	'nom' => 'hauteurlogomenuhautderoulant' ,
	'label' => _T('soyezcreateursprive:cfg_hauteur') ,
	'defaut' => '16' ,
	'size' => '2' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'logomenuderoulant', null)) ,
	'nom' => 'logomenuderoulant' ,
	'label' => _T('soyezcreateursprive:cfg_menu_affichagelogo_label') ,
	'datas' => array('oui' => _T('soyezcreateursprive:cfg_menu_haut_affichagelogo_logoplustexte'), 'non' => _T('soyezcreateursprive:cfg_menu_haut_affichagelogo_deroulant_non')) ,
	'defaut' => 'oui' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
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
_T('soyezcreateursprive:cfg_taille_logos_max_goody') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'largeurlogogoody', null)) ,
	'nom' => 'largeurlogogoody' ,
	'label' => _T('soyezcreateursprive:cfg_largeur') ,
	'defaut' => '48' ,
	'size' => '2' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'hauteurlogogoody', null)) ,
	'nom' => 'hauteurlogogoody' ,
	'label' => _T('soyezcreateursprive:cfg_hauteur') ,
	'defaut' => '48' ,
	'size' => '2' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_taille_logos_max_outils') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'largeurlogooutils', null)) ,
	'nom' => 'largeurlogooutils' ,
	'label' => _T('soyezcreateursprive:cfg_largeur') ,
	'defaut' => '16' ,
	'size' => '2' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'hauteurlogooutils', null)) ,
	'nom' => 'hauteurlogooutils' ,
	'label' => _T('soyezcreateursprive:cfg_hauteur') ,
	'defaut' => '16' ,
	'size' => '2' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'positionlogooutils', null)) ,
	'nom' => 'positionlogooutils' ,
	'label' => _T('soyezcreateursprive:cfg_position_logooutils_label') ,
	'datas' => array('haut' => _T('soyezcreateursprive:cfg_position_logooutils_toutletempshaut'), 'mixte' => _T('soyezcreateursprive:cfg_position_logooutils_mixte')) ,
	'defaut' => 'mixte' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'pictogrammesoutils', null)) ,
	'nom' => 'pictogrammesoutils' ,
	'label' => _T('soyezcreateursprive:cfg_pictogrammesoutils_label') ,
	'datas' => array('non' => _T('soyezcreateursprive:cfg_pictogrammesoutils_non'), 'avecoutils' => _T('soyezcreateursprive:cfg_pictogrammesoutils_avecoutils')) ,
	'defaut' => 'non' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_taille_logos_max_contenu_automatique') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'largeurlogocontenuautomatique', null)) ,
	'nom' => 'largeurlogocontenuautomatique' ,
	'label' => _T('soyezcreateursprive:cfg_largeur') ,
	'defaut' => '64' ,
	'size' => '2' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'hauteurlogocontenuautomatique', null)) ,
	'nom' => 'hauteurlogocontenuautomatique' ,
	'label' => _T('soyezcreateursprive:cfg_hauteur') ,
	'defaut' => '64' ,
	'size' => '2' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'cadragelogocontenuautomatique', null)) ,
	'nom' => 'cadragelogocontenuautomatique' ,
	'label' => _T('soyezcreateursprive:cfg_cadragelogocontenuautomatique_label') ,
	'datas' => array('entier' => _T('soyezcreateursprive:cfg_cadragelogocontenuautomatique_entier'), 'recadre' => _T('soyezcreateursprive:cfg_cadragelogocontenuautomatique_recadre')) ,
	'defaut' => 'entier' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_taille_logocontenuprincipal') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'largeurlogocontenuprincipal', null)) ,
	'nom' => 'largeurlogocontenuprincipal' ,
	'label' => _T('soyezcreateursprive:cfg_largeur') ,
	'defaut' => interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurlogocontenuautomatique','64',false):'')) ,
	'size' => '2' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'hauteurlogocontenuprincipal', null)) ,
	'nom' => 'hauteurlogocontenuprincipal' ,
	'label' => _T('soyezcreateursprive:cfg_hauteur') ,
	'defaut' => interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/hauteurlogocontenuautomatique','64',false):'')) ,
	'size' => '2' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'cadragelogocontenuprincipal', null)) ,
	'nom' => 'cadragelogocontenuprincipal' ,
	'label' => _T('soyezcreateursprive:cfg_cadragelogocontenuautomatique_label') ,
	'datas' => array('entier' => _T('soyezcreateursprive:cfg_cadragelogocontenuautomatique_entier'), 'recadre' => _T('soyezcreateursprive:cfg_cadragelogocontenuautomatique_recadre')) ,
	'defaut' => interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/cadragelogocontenuautomatique','entier',false):'')) ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_taille_logos_max_listes_sites') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'largeurlogolistessites', null)) ,
	'nom' => 'largeurlogolistessites' ,
	'label' => _T('soyezcreateursprive:cfg_largeur') ,
	'defaut' => '48' ,
	'size' => '2' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'hauteurlogolistessites', null)) ,
	'nom' => 'hauteurlogolistessites' ,
	'label' => _T('soyezcreateursprive:cfg_hauteur') ,
	'defaut' => '48' ,
	'size' => '2' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
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
_T('soyezcreateursprive:cfg_taille_logos_derniers_art_blog') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'largeurlogodernartblog', null)) ,
	'nom' => 'largeurlogodernartblog' ,
	'label' => _T('soyezcreateursprive:cfg_largeur') ,
	'defaut' => '150' ,
	'size' => '2' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'hauteurlogodernartblog', null)) ,
	'nom' => 'hauteurlogodernartblog' ,
	'label' => _T('soyezcreateursprive:cfg_hauteur') ,
	'defaut' => '200' ,
	'size' => '2' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_taille_logos_alaune_blog') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'largeurlogoalauneblog', null)) ,
	'nom' => 'largeurlogoalauneblog' ,
	'label' => _T('soyezcreateursprive:cfg_largeur') ,
	'defaut' => '96' ,
	'size' => '2' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'hauteurlogoalauneblog', null)) ,
	'nom' => 'hauteurlogoalauneblog' ,
	'label' => _T('soyezcreateursprive:cfg_hauteur') ,
	'defaut' => '96' ,
	'size' => '2' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
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
_T('soyezcreateursprive:cfg_logolocal') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'logolocal', null)) ,
	'nom' => 'logolocal' ,
	'label' => _T('soyezcreateursprive:cfg_logolocal_label') ,
	'datas' => array('local' => _T('soyezcreateursprive:cfg_logolocal_local'), 'herite' => _T('soyezcreateursprive:cfg_logolocal_herite')) ,
	'defaut' => 'local' ,
	'cacher_option_intro' => 'oui' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_menuderoulantgauche') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'menuderoulant', null)) ,
	'nom' => 'menuderoulant' ,
	'label' => _T('soyezcreateursprive:cfg_menuderoulant_label') ,
	'datas' => array('replie' => _T('soyezcreateursprive:cfg_menuderoulant_replie'), 'deroule' => _T('soyezcreateursprive:cfg_menuderoulant_deroule')) ,
	'defaut' => 'replie' ,
	'cacher_option_intro' => 'oui' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'logorubriquenavigation', null)) ,
	'nom' => 'logorubriquenavigation' ,
	'label' => _T('soyezcreateursprive:cfg_logorubriquenavigation_label') ,
	'datas' => array('header' => _T('soyezcreateursprive:cfg_logonavigation_header'), 'navigation' => _T('soyezcreateursprive:cfg_logonavigation_navigation'), 'contenthauttitre' => _T('soyezcreateursprive:cfg_logonavigation_hauttitre'), 'content' => _T('soyezcreateursprive:cfg_logonavigation_content'), 'contentbastitre' => _T('soyezcreateursprive:cfg_logonavigation_bastitre'), 'never' => _T('soyezcreateursprive:cfg_logonavigation_never')) ,
	'defaut' => 'content' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'logoarticlenavigation', null)) ,
	'nom' => 'logoarticlenavigation' ,
	'label' => _T('soyezcreateursprive:cfg_logoarticlenavigation_label') ,
	'datas' => array('header' => _T('soyezcreateursprive:cfg_logonavigation_header'), 'navigation' => _T('soyezcreateursprive:cfg_logonavigation_navigation'), 'contenthauttitre' => _T('soyezcreateursprive:cfg_logonavigation_hauttitre'), 'content' => _T('soyezcreateursprive:cfg_logonavigation_content'), 'contentbastitre' => _T('soyezcreateursprive:cfg_logonavigation_bastitre'), 'never' => _T('soyezcreateursprive:cfg_logonavigation_never')) ,
	'defaut' => 'content' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
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
_T('soyezcreateursprive:cfg_logoarticlerubrique') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'logoarticlerubrique', null)) ,
	'nom' => 'logoarticlerubrique' ,
	'label' => _T('soyezcreateursprive:cfg_logoarticlenavigation_label') ,
	'datas' => array('contenthauttitre' => _T('soyezcreateursprive:cfg_logonavigation_hauttitre'), 'content' => _T('soyezcreateursprive:cfg_logonavigation_content'), 'contentbastitre' => _T('soyezcreateursprive:cfg_logonavigation_bastitre'), 'never' => _T('soyezcreateursprive:cfg_logonavigation_never')) ,
	'defaut' => 'content' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'largeurlogoarticlerubrique', null)) ,
	'nom' => 'largeurlogoarticlerubrique' ,
	'label' => _T('soyezcreateursprive:cfg_largeur') ,
	'defaut' => '870' ,
	'size' => '4' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'hauteurlogoarticlerubrique', null)) ,
	'nom' => 'hauteurlogoarticlerubrique' ,
	'label' => _T('soyezcreateursprive:cfg_hauteur') ,
	'defaut' => '200' ,
	'size' => '4' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'cadragelogoarticlerubrique', null)) ,
	'nom' => 'cadragelogoarticlerubrique' ,
	'label' => _T('soyezcreateursprive:cfg_cadragelogocontenuautomatique_label') ,
	'datas' => array('entier' => _T('soyezcreateursprive:cfg_cadragelogocontenuautomatique_entier'), 'recadre' => _T('soyezcreateursprive:cfg_cadragelogocontenuautomatique_recadre')) ,
	'defaut' => interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/cadragelogocontenuautomatique','entier',false):'')) ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
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
_T('soyezcreateursprive:cfg_position_cartouchetitre') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'positioncartouchetitre', null)) ,
	'nom' => 'positioncartouchetitre' ,
	'label' => _T('soyezcreateursprive:cfg_affichagelistedocuments_label') ,
	'datas' => array('haut' => _T('soyezcreateursprive:cfg_position_cartouchetitre_haut'), 'contenu' => _T('soyezcreateursprive:cfg_position_cartouchetitre_contenu')) ,
	'defaut' => 'contenu' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_position_cartouche') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'positioncartouche', null)) ,
	'nom' => 'positioncartouche' ,
	'label' => _T('soyezcreateursprive:cfg_affichagelistedocuments_label') ,
	'datas' => array('haut' => _T('soyezcreateursprive:cfg_debut_contenu'), 'bas' => _T('soyezcreateursprive:cfg_fin_contenu')) ,
	'defaut' => 'bas' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("nuage", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . (	'
			<fieldset>
				<h3 class="legend">' .
	_T('soyezcreateursprive:cfg_position_nuage') .
	'</h3>
				<' .
	saisie_balise_structure_formulaire('ul') .
	' class="editer-groupe">
					' .
	recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'positionnuage', null)) ,
	'nom' => 'positionnuage' ,
	'label' => _T('soyezcreateursprive:cfg_affichagelistedocuments_label') ,
	'datas' => array('footer' => _T('soyezcreateursprive:cfg_menu_footer_liens'), 'extra' => _T('soyezcreateursprive:cfg_affichage_zone_secondaire')) ,
	'defaut' => 'footer' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
	'
				</' .
	saisie_balise_structure_formulaire('ul') .
	'>
			</fieldset>
			')) :
		'') .
'
			' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("GIS", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . (	'
			<fieldset>
				<h3 class="legend">' .
	_T('soyezcreateursprive:cfg_hauteur_gis') .
	'</h3>
				<' .
	saisie_balise_structure_formulaire('ul') .
	' class="editer-groupe">
					' .
	recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'hauteurgisrubriques', null)) ,
	'nom' => 'hauteurgisrubriques' ,
	'label' => _T('ecrire:info_rubriques') ,
	'defaut' => '400px' ,
	'size' => '7' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
	'
					' .
	recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'hauteurgisarticles', null)) ,
	'nom' => 'hauteurgisarticles' ,
	'label' => _T('ecrire:info_articles_2') ,
	'defaut' => '400px' ,
	'size' => '7' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
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
_T('soyezcreateursprive:cfg_position_liens_nav') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'positionliensnav', null)) ,
	'nom' => 'positionliensnav' ,
	'label' => _T('soyezcreateursprive:cfg_position_liens_nav_label') ,
	'datas' => array('nav' => _T('soyezcreateursprive:cfg_colonne_nav_liens'), 'menu_footer' => _T('soyezcreateursprive:cfg_menu_footer_liens')) ,
	'defaut' => 'menu_footer' ,
	'cacher_option_intro' => 'oui' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'affichage_lien_sites_web', null)) ,
	'nom' => 'affichage_lien_sites_web' ,
	'label' => _T('public|spip|ecrire:sites_web') ,
	'datas' => array('affiche' => _T('soyezcreateursprive:cfg_affichage_affiche'), 'masque' => _T('soyezcreateursprive:cfg_affichage_masquer')) ,
	'defaut' => 'affiche' ,
	'cacher_option_intro' => 'oui' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'affichage_lien_documents', null)) ,
	'nom' => 'affichage_lien_documents' ,
	'label' => _T('medias:info_documents') ,
	'datas' => array('affiche' => _T('soyezcreateursprive:cfg_affichage_affiche'), 'masque' => _T('soyezcreateursprive:cfg_affichage_masquer')) ,
	'defaut' => 'affiche' ,
	'cacher_option_intro' => 'oui' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'affichage_lien_sigles', null)) ,
	'nom' => 'affichage_lien_sigles' ,
	'label' => _T('acronymessigles:type_des_tables') ,
	'datas' => array('affiche' => _T('soyezcreateursprive:cfg_affichage_affiche'), 'masque' => _T('soyezcreateursprive:cfg_affichage_masquer')) ,
	'defaut' => 'affiche' ,
	'cacher_option_intro' => 'oui' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'affichage_lien_newsletter', null)) ,
	'nom' => 'affichage_lien_newsletter' ,
	'label' => _T('soyezcreateurs:newsletter') ,
	'datas' => array('affiche' => _T('soyezcreateursprive:cfg_affichage_affiche'), 'bas' => (	_T('soyezcreateursprive:cfg_menu_footer_liens') .
		' (formulaire)'), 'masque' => _T('soyezcreateursprive:cfg_affichage_masquer')) ,
	'defaut' => 'affiche' ,
	'cacher_option_intro' => 'oui' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'affichage_lien_annuaire', null)) ,
	'nom' => 'affichage_lien_annuaire' ,
	'label' => _T('soyezcreateurs:annuaire') ,
	'datas' => array('affiche' => _T('soyezcreateursprive:cfg_affichage_affiche'), 'masque' => _T('soyezcreateursprive:cfg_affichage_masquer')) ,
	'defaut' => 'affiche' ,
	'cacher_option_intro' => 'oui' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'plansitefooter', null)) ,
	'nom' => 'plansitefooter' ,
	'label' => _T('soyezcreateursprive:cfg_plansitefooter_label') ,
	'datas' => array('generique' => _T('soyezcreateursprive:cfg_plansitefootergenerique'), 'miniplan' => _T('soyezcreateursprive:cfg_plansitefooterminiplan')) ,
	'defaut' => 'masquer' ,
	'cacher_option_intro' => 'oui' ,
	'explication' => '' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html','html_3ac82971255aa661fd83c2ef4ece7d84','',4,$GLOBALS['spip_lang'])), _request('connect')) .
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
_T('soyezcreateursprive:cfg_layout_gala') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					<' .
saisie_balise_structure_formulaire('li') .
' class="editer">
						' .
_T('soyezcreateursprive:cfg_layout_gala_intro') .
'
						' .
_T('soyezcreateursprive:cfg_layout_gala_explications') .
'
						<table style="border:1px solid #888;border-collapse:collapse;">
							<thead>
								<tr>
									<th style="border:1px solid #888;">' .
_T('soyezcreateursprive:cfg_layout_agencement') .
'</th>
									<th style="border:1px solid #888;" title="' .
_T('soyezcreateurs:layout_defaut_title') .
'">' .
_T('soyezcreateursprive:cfg_layout_defaut') .
'</th>
									<th style="border:1px solid #888;" title="' .
_T('soyezcreateurs:layout_accueil_title') .
'">' .
_T('soyezcreateursprive:cfg_layout_accueil') .
'</th>
								</tr>
							</thead>
							<tbody>
								' .
BOUCLE_Layoutshtml_3ac82971255aa661fd83c2ef4ece7d84($Cache, $Pile, $doublons, $Numrows, $SP) .
'
							</tbody>
						</table>
					</' .
saisie_balise_structure_formulaire('li') .
'>
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

	return analyse_resultat_skel('html_3ac82971255aa661fd83c2ef4ece7d84', $Cache, $page, '../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_layout.html');
}
?>
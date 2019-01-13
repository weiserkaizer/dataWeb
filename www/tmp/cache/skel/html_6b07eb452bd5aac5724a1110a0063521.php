<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/cadre_outils.html
 * Date :      Thu, 26 Jul 2018 13:23:57 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:04 GMT
 * Boucles :   _Outils
 */ 

function BOUCLE_Outilshtml_6b07eb452bd5aac5724a1110a0063521(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_Outils';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("0+articles.titre AS num",
		"articles.id_article",
		"articles.descriptif",
		"articles.titre",
		"articles.lang");
		$command['orderby'] = array('num');
		$command['join'] = array('L1' => array('articles','id_objet','id_article','L1.objet='.sql_quote('article')), 'L2' => array('L1','id_mot'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'L2.titre', "'Outils'"), 
			array('=', 'articles.lang', sql_quote($GLOBALS['spip_lang'], '','varchar(10) NOT NULL DEFAULT \'\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/cadre_outils.html','html_6b07eb452bd5aac5724a1110a0063521','_Outils',2,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_Outils']['compteur_boucle'] = 0;
	$Numrows['_Outils']['total'] = @intval($iter->count());
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_Outils']['compteur_boucle']++;
		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
	<li id="cadre_outil_' .
$Pile[$SP]['id_article'] .
'"' .
(($Numrows['_Outils']['compteur_boucle'] == '1')  ?
		(' class="' . 'first' . '"') :
		'') .
(($Numrows['_Outils']['compteur_boucle'] == $Numrows['_Outils']['total'])  ?
		(' class="' . 'last' . '"') :
		'') .
'><a href="' .

	((($recurs=(isset($Pile[0]['recurs'])?$Pile[0]['recurs']:0))>=5)? '' :
	recuperer_fond('modeles/article_url', array('lang' => $GLOBALS["spip_lang"] ,
	'id_article'=>$Pile[$SP]['id_article'],
	'id'=>$Pile[$SP]['id_article'],
	'recurs'=>(++$recurs)), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/cadre_outils.html','html_6b07eb452bd5aac5724a1110a0063521','_Outils',6,$GLOBALS['spip_lang']), 'trim'=>true), ''))
 .
'"' .
(($t1 = strval(interdire_scripts(attribut_html(propre($Pile[$SP]['descriptif'], $connect, $Pile[0])))))!=='' ?
		(' title="' . $t1 . '"') :
		'') .
'>' .
(($t1 = strval(filtre_embarque_fichier(extraire_attribut(filtrer('image_graver', filtrer('image_reduire',
((!is_array($l = quete_logo('id_article', 'on', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurlogooutils','16',false):'')),interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/hauteurlogooutils','16',false):'')))),'src'))))!=='' ?
		('<img src="' . $t1 . (	'" class="logo_outil" alt="" width="' .
	largeur(filtrer('image_graver', filtrer('image_reduire',
((!is_array($l = quete_logo('id_article', 'on', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurlogooutils','16',false):'')),interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/hauteurlogooutils','16',false):''))))) .
	'" height="' .
	hauteur(filtrer('image_graver', filtrer('image_reduire',
((!is_array($l = quete_logo('id_article', 'on', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurlogooutils','16',false):'')),interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/hauteurlogooutils','16',false):''))))) .
	'" />')) :
		'') .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></li>
	' .
vide($Pile['vars'][$_zzz=(string)'vu'] = '1'));
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_Outils @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/cadre_outils.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/cadre_outils.html
// Temps de compilation total: 68.993 ms
//

function html_6b07eb452bd5aac5724a1110a0063521($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][$_zzz=(string)'vu'] = '') .
(($t1 = BOUCLE_Outilshtml_6b07eb452bd5aac5724a1110a0063521($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
<div id="cadre_outils">
	<ul>
' . $t1 . '
') :
		'') .
'
' .
(($t1 = strval(interdire_scripts((((((include_spip('inc/config')?lire_config('soyezcreateurs/mode_affichage','communiquant',false):'') == 'portailcognac')) OR (interdire_scripts(((include_spip('inc/config')?lire_config('soyezcreateurs_layout/pictogrammesoutils','non',false):'') == 'avecoutils')))) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	(!(table_valeur($Pile["vars"], (string)'vu', null))  ?
			(' ' . '<div id="cadre_outils">
	<ul>') :
			'') .
	'
' .
	vide($Pile['vars'][$_zzz=(string)'vu'] = '1') .
	(($t2 = strval(interdire_scripts(((filtre_info_plugin_dist("AGENDA", "est_actif")) ?' ' :''))))!=='' ?
			($t2 . (($t3 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs/miniagenda','on',false):'') != 'non')) ?' ' :''))))!=='' ?
				($t3 . 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/header/cadre_outils_agenda') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/cadre_outils.html\',\'html_6b07eb452bd5aac5724a1110a0063521\',\'\',13,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>') :
				'')) :
			'') .
	'
' .
	(($t2 = strval(interdire_scripts((((((filtre_info_plugin_dist("CLEVERMAIL", "est_actif")) ?' ' :'')) OR (interdire_scripts(((filtre_info_plugin_dist("MAILSUBSCRIBERS", "est_actif")) ?' ' :'')))) ?' ' :''))))!=='' ?
			($t2 . (	'	<li id="cadre_outil_newsletter" class="call-js-modal"><a href="#newsletterinscription" title="' .
		_T('soyezcreateurs:newsletter_recevoir') .
		'" class="js-modal" data-modal-prefix-class="sombre" data-modal-focus-id="js-modal-content .socialtags a:first" data-modal-content-id="newsletterinscription" data-modal-close-text="' .
		_T('ecrire:bouton_fermer') .
		'"
 data-modal-close-title="' .
		_T('ecrire:bouton_fermer') .
		'"><span class="icon icon-paperplane icon-lg texte-blanc"></span><span class="hide">' .
		_T('socialtags:noisette_action_recommand') .
		'</span></a></li>')) :
			'') .
	'
' .
	(($t2 = strval(interdire_scripts(((filtre_info_plugin_dist("SOCIALTAGS", "est_actif")) ?' ' :''))))!=='' ?
			($t2 . (	'	<li id="cadre_outil_socialtags" class="call-js-modal"><a href="#socialtags" title="' .
		_T('socialtags:noisette_action_recommand') .
		'" class="js-modal" data-modal-prefix-class="sombre" data-modal-focus-id="js-modal-content .socialtags a:first" data-modal-content-id="socialtags" data-modal-close-text="' .
		_T('ecrire:bouton_fermer') .
		'"
 data-modal-close-title="' .
		_T('ecrire:bouton_fermer') .
		'"><span class="icon icon-share2 icon-lg texte-blanc"></span><span class="hide">' .
		_T('socialtags:noisette_action_recommand') .
		'</span></a></li>')) :
			'') .
	'
' .
	(($t2 = strval(interdire_scripts(((filtre_info_plugin_dist("MLL", "est_actif")) ?' ' :''))))!=='' ?
			($t2 . (	'	<li id="cadre_outil_language"><a href="#menu_lang" title="Choisir la langue d\'affichage du site" class="js-modal" data-modal-prefix-class="sombre" data-modal-focus-id="menu_lang > a:first" data-modal-content-id="cadre_lang" data-modal-close-text="' .
		_T('ecrire:bouton_fermer') .
		'"
 data-modal-close-title="' .
		_T('ecrire:bouton_fermer') .
		'"><span class="icon icon-language icon-lg texte-blanc"></span><span class="hide">Langues</span></a></li>')) :
			'') .
	'
' .
	(($t2 = strval(interdire_scripts((((include_spip('inc/config')?lire_config('soyezcreateurs/bandeau_contact',null,false):'')) ?' ' :''))))!=='' ?
			($t2 . (	(($t3 = strval(interdire_scripts((((include_spip('inc/config')?lire_config('soyezcreateurs/bandeau_contact',null,false):'')) ?' ' :''))))!=='' ?
				($t3 . (	'	<li id="cadre_outil_envelope"><a href="#bandeaucontact" title="' .
			_T('public|spip|ecrire:contact') .
			'"><span class="icon icon-envelope  icon-lg texte-blanc"></span><span class="hide">' .
			_T('public|spip|ecrire:contact') .
			'</span></a></li>')) :
				'') .
		'
')) :
			'') .
	'
	<li id="cadre_outil_search"><a href="#formulaire_recherche" title="' .
	_T('soyezcreateurs:accessibilite_recherche') .
	'" class="js-modal" data-modal-prefix-class="sombre" data-modal-focus-id="formulaire_recherche" data-modal-content-id="cadre_recherche" data-modal-close-text="' .
	_T('ecrire:bouton_fermer') .
	'"
 data-modal-close-title="' .
	_T('ecrire:bouton_fermer') .
	'"><span class="icon icon-search icon-lg texte-blanc"></span><span class="hide">' .
	_T('soyezcreateurs:accessibilite_recherche') .
	'</span></a></li>
')) :
		'') .
'
' .
((table_valeur($Pile["vars"], (string)'vu', null))  ?
		(' ' . '	</ul>
</div>') :
		'') .
'
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_6b07eb452bd5aac5724a1110a0063521', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/cadre_outils.html');
}
?>
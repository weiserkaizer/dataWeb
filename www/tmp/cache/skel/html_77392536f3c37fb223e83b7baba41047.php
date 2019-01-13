<?php

/*
 * Squelette : ../plugins/noizetier/prive/style_prive_plugin_noizetier.html
 * Date :      Wed, 11 Jul 2018 07:46:23 GMT
 * Compile :   Tue, 31 Jul 2018 13:37:50 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/noizetier/prive/style_prive_plugin_noizetier.html
// Temps de compilation total: 1.611 ms
//

function html_77392536f3c37fb223e83b7baba41047($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
'<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>' .
'<'.'?php header(' . _q('Content-Type: text/css; charset=iso-8859-15') . '); ?'.'>' .
'<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>/* Styles de la liste des pages liées ou non à un objet et des objets configurés (noizetier_pages, noizetier_objets) */
ul.noizetier-liste-pages li.page,
ul.noizetier-liste-objets li.objet {padding-left: 30px; padding-right: 60px; position:relative;}
ul.noizetier-liste-pages li.page .icone,
ul.noizetier-liste-objets li.objet .icone {
	position: absolute;
	top: .6925em;
	left: 0;
	width: 24px;
	height: 24px;
	overflow: hidden;}
ul.noizetier-liste-pages li.page .edition {
	position: absolute;
	right: 0;
	top: .6925em;
	text-align: right;}
ul.noizetier-liste-pages li.page .edition a {margin-left: 2px; text-decoration: none;}
ul.noizetier-liste-pages li.page.virtuelle {
	background-image:url(' .
interdire_scripts(chemin_image('fond-page_virtuelle.png')) .
') !important;
	background-repeat: repeat;
	background-attachment: fixed;
	background-position: 0 0;
	opacity: 0.8;}
ul.noizetier-liste-pages li.page .composition {margin-left: 30px;}
ul.noizetier-liste-pages li.page .composition .icone {left: 30px;}

/* Styles de la page de configuration des noisettes d\'une page donnée (noizetier_page) */
/* -- Boite d\'infos */
.infos .numero p#identifiant {font-size: 1.2em;}
.infos p.explication {margin-top: 0.5em;}

/* -- Liste des noisettes disponibles */
.noisettes_disponibles.is-stuck {
	position: fixed;
	top: 0;
	max-height: calc(100vh - 2.0775em); /* prendre en compte l\'offset */
	overflow-y: auto;
}
ul.liste-noisettes-disponibles li.noisette {padding-left: 30px; position:relative; min-height: 28px;}
ul.liste-noisettes-disponibles li.noisette .icone {
	position: absolute;
	margin: 0;
	top: .6925em;
	left: 0;
	width: 24px;
	height: 24px;
	overflow: hidden;}
ul.liste-noisettes-disponibles li.noisette label {float: none; margin-left: 0;}

/* -- Liste des noisettes incluses dans un bloc */
ul.liste-noisettes-bloc {overflow: visible;}
ul.liste-noisettes-bloc li.noisette {padding-left: 30px; padding-right: 120px; position:relative; min-height: 36px; overflow: visible;}
ul.liste-noisettes-bloc li.noisette .resume .icone {
	position: absolute;
	margin: 0;
	top: .6925em;
	left: 0;
	width: 24px;
	height: 24px;
	overflow: hidden;}
ul.liste-noisettes-bloc li.noisette .conteneur-1 {margin-left: 30px;}
ul.liste-noisettes-bloc li.noisette .conteneur-1 .icone {left: 30px;}
ul.liste-noisettes-bloc li.noisette .conteneur-2 {margin-left: 60px;}
ul.liste-noisettes-bloc li.noisette .conteneur-2 .icone {left: 60px;}
ul.liste-noisettes-bloc li.noisette .edition {
	position: absolute;
	right: 0;
	top: .6925em;
	text-align: right;}
ul.liste-noisettes-bloc li.noisette .edition a {margin-left: 2px; text-decoration: none;}
ul.liste-noisettes-bloc li.noisette .edition ul.menu-edition:not(.visible) {display: none;}
ul.liste-noisettes-bloc li.noisette .edition ul.menu-edition.visible {
	position: relative;
	top: -5px;
	left: 295px;
	min-width: 250px;
	z-index: 5000;
	float: left;
	text-align: left;
	padding: 5px;
	/*border: 1px solid #ccc;*/
	background-color: white;
	box-shadow: 3px 3px 3px #ccc; -moz-box-shadow: 3px 3px 3px #ccc; -webkit-box-shadow: 3px 3px 3px #ccc;
	border-radius: 2px; -moz-border-radius: 2px; -webkit-border-radius: 2px;
	font-size: 0.90em;
}
ul.liste-noisettes-bloc li.noisette .edition ul.menu-edition.visible li {padding-top: 2px; padding-bottom: 2px;}
ul.liste-noisettes-bloc li.noisette .edition ul.menu-edition.visible li:hover {background-color: #eee; text-decoration: underline;}
ul.liste-noisettes-bloc li.noisette .edition ul.menu-edition.visible li.groupe {border-top: 1px solid #ccc;}
ul.liste-noisettes-bloc li.noisette .edition ul.menu-edition.visible a {color: #333;}

/* Styles du formulaire d\'édition d\'une page (editer_page) */
/* -- choix et aperçu de l\'icone */
.formulaire_editer_page div#aide_choix_icone,
.formulaire_editer_page div#suggestions_icones {display: none;}
.formulaire_editer_page div#afficher_suggestions,
.formulaire_editer_page div#bouton_suggestion {float: right;}
.formulaire_editer_page .suggestion_icone {
	float:left;
	width:75px;
	text-align:center;
	height:75px;
	font-size:10px;
	line-height:12px;
	cursor:pointer;}

/* Styles du formulaire ajouter_noisette */
.formulaire_ajouter_noisette ul.liste-noisettes-disponibles {margin: 10px;}

/* Styles du formulaire editer_noisette */
.formulaire_editer_noisette li.fieldset {margin-left:10px; margin-right:10px; border-left: solid 1px #CCC; border-right: solid 1px #CCC; border-bottom: solid 1px #CCC;}
.formulaire_editer_noisette li.editer_description_code, .formulaire_editer_noisette li.editer_code {padding-left:10px;}
.formulaire_editer_noisette li.editer_description_code label, .formulaire_editer_noisette li.editer_code label {width:100%; margin-left:0; float:none;}
');

	return analyse_resultat_skel('html_77392536f3c37fb223e83b7baba41047', $Cache, $page, '../plugins/noizetier/prive/style_prive_plugin_noizetier.html');
}
?>
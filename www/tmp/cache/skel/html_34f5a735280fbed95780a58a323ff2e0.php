<?php

/*
 * Squelette : ../plugins/auto/compositions/v3.7.3/prive/style_prive_plugin_compositions.html
 * Date :      Thu, 12 Jul 2018 06:55:29 GMT
 * Compile :   Tue, 31 Jul 2018 13:37:51 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/compositions/v3.7.3/prive/style_prive_plugin_compositions.html
// Temps de compilation total: 0.937 ms
//

function html_34f5a735280fbed95780a58a323ff2e0($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'

.formulaire_editer_composition_objet .editer_composition .choix {min-height:24px; padding-top:4px;overflow: hidden }
.formulaire_editer_composition_objet .editer_composition .choix input {display:block;float: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';}
.formulaire_editer_composition_objet .editer_composition .choix label {display:block;float: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
'; width: 80%; padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
': 34px; margin-bottom: 0.5em;}
.formulaire_editer_composition_objet .editer_composition .choix img.logo {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
': -34px;margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
':5px;}
.formulaire_editer_composition_objet .editer_composition .choix .exemple img.logo { padding-bottom:2px; border-bottom:1px dotted #666; }
.formulaire_editer_composition_objet .editer_composition .choix .exemple img.logo:hover { border-bottom:1px solid #666; }

.formulaire_editer_composition_objet h4 {
	padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
': 30px;
	background: url(' .
interdire_scripts(chemin_image('composition-24.png')) .
') no-repeat ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';
	background-size: contain;
	min-height: 24px;
	padding-top: 4px;
	margin-bottom: 0;
}
.formulaire_editer_composition_objet h4 .precision {font-size: 85%;}

.formulaire_editer_composition_objet .detail {
	padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
': 30px;
}

.formulaire_editer_composition_objet h4 span.composition_actuelle {font-weight: normal;}

.formulaire_editer_composition_objet span.descriptif {font-style: italic; font-size: 0.875em;}

body.compositions #contenu .item .logo {margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
':1em; float: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
'; }
body.compositions #contenu .item .exemple .logo { padding-bottom:2px; border-bottom:1px dotted #666; }
body.compositions #contenu .item .exemple .logo:hover { border-bottom:1px solid #666; }
body.compositions #contenu .item .presentation { overflow:auto; }
body.compositions #contenu .item .presentation h4 {margin-bottom:0; }
body.compositions #contenu .item .raccourcis ul {margin-bottom:0; }

body.compositions #contenu .compositions { border-top:none; margin-bottom:0; }
body.compositions #contenu .compositions > .item + .item { margin-top:.5em; }
body.compositions #contenu .compositions .item:last-child { border-bottom:none; }

');

	return analyse_resultat_skel('html_34f5a735280fbed95780a58a323ff2e0', $Cache, $page, '../plugins/auto/compositions/v3.7.3/prive/style_prive_plugin_compositions.html');
}
?>
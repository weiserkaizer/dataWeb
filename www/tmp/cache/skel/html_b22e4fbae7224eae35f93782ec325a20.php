<?php

/*
 * Squelette : ../plugins/auto/corbeille/v3.1.2/prive/style_prive_plugin_corbeille.html
 * Date :      Wed, 11 Jul 2018 08:07:09 GMT
 * Compile :   Tue, 31 Jul 2018 13:37:51 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/corbeille/v3.1.2/prive/style_prive_plugin_corbeille.html
// Temps de compilation total: 1.540 ms
//

function html_b22e4fbae7224eae35f93782ec325a20($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
'<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>' .
'<'.'?php header(' . _q('Content-Type: text/css; charset=iso-8859-15') . '); ?'.'>' .
'<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>.formulaire_editer_corbeille {background:none;border:none;}
.formulaire_editer_corbeille ul.checkables h4 {margin-bottom:0;}
.formulaire_editer_corbeille ul.checkables li {padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':30px;}
.formulaire_editer_corbeille ul.checkables li label {position:absolute;top:-10000px;left:-2000px;float:none;margin:0;padding:0;}
.formulaire_editer_corbeille ul.checkables li input {margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':-30px;float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';position:relative;display:inline;}

.liste.corbeille-articles >h3 {padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':30px;background-image:url(' .
interdire_scripts(chemin_image('article-16')) .
');background-repeat:no-repeat;background-position: center left;}
.liste.corbeille-auteurs >h3 {padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':30px;background-image:url(' .
interdire_scripts(chemin_image('auteur-16')) .
');background-repeat:no-repeat;background-position: center left;}
.liste.corbeille-breves >h3 {padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':30px;background-image:url(' .
interdire_scripts(chemin_image('breve-16')) .
');background-repeat:no-repeat;background-position: center left;}
.liste.corbeille-messages >h3 {padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':30px;background-image:url(' .
interdire_scripts(chemin_image('message-16')) .
');background-repeat:no-repeat;background-position: center left;}
.liste.corbeille-forum >h3 {padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':30px;background-image:url(' .
interdire_scripts(chemin_image('forum-16')) .
');background-repeat:no-repeat;background-position: center left;}
.liste.corbeille-sites >h3 {padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':30px;background-image:url(' .
interdire_scripts(chemin_image('site-16')) .
');background-repeat:no-repeat;background-position: center left;}
.liste.corbeille-signatures >h3 {padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':30px;background-image:url(' .
interdire_scripts(chemin_image('petition-16')) .
');background-repeat:no-repeat;background-position: center left;}
');

	return analyse_resultat_skel('html_b22e4fbae7224eae35f93782ec325a20', $Cache, $page, '../plugins/auto/corbeille/v3.1.2/prive/style_prive_plugin_corbeille.html');
}
?>
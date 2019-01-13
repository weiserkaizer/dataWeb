<?php

/*
 * Squelette : ../plugins/auto/inserer_modeles/v1.3.3/prive/style_prive_plugin_inserer_modeles.html
 * Date :      Wed, 11 Jul 2018 08:05:53 GMT
 * Compile :   Tue, 31 Jul 2018 13:37:51 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/inserer_modeles/v1.3.3/prive/style_prive_plugin_inserer_modeles.html
// Temps de compilation total: 0.896 ms
//

function html_771facb9f9e06102123cafe417afa275($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
'<'.'?php header(' . _q('Content-Type: text/css; charset=utf-8') . '); ?'.'>' .
'<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>' .
vide($Pile['vars'][$_zzz=(string)'claire'] = (	'#' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'couleur_claire', null), 'c5e41c'),true)))) .
vide($Pile['vars'][$_zzz=(string)'foncee'] = (	'#' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'couleur_foncee', null), '9dba00'),true)))) .
'/*============================
  === BOITE AFFICHE GAUCHE ===
  ============================*/
.choix.modele {margin-bottom: 0.25em;}
.choix.modele img {vertical-align: middle;}
.choix.modele .radio {margin-left: 0; margin-right: 0;}
/* code balise */
.code_modele {
		background-color: ' .
(($t1 = strval(filtrer('couleur_luminance',table_valeur($Pile["vars"], (string)'claire', null),'.1')))!=='' ?
		('#' . $t1) :
		'') .
';
		border: 1px solid ' .
table_valeur($Pile["vars"], (string)'claire', null) .
';
		color: ' .
(($t1 = strval(filtrer('couleur_foncer',table_valeur($Pile["vars"], (string)'foncee', null))))!=='' ?
		('#' . $t1) :
		'') .
';;
		}
');

	return analyse_resultat_skel('html_771facb9f9e06102123cafe417afa275', $Cache, $page, '../plugins/auto/inserer_modeles/v1.3.3/prive/style_prive_plugin_inserer_modeles.html');
}
?>
<?php

/*
 * Squelette : prive/formulaires/inc-logo_auteur.html
 * Date :      Wed, 11 Jul 2018 07:42:31 GMT
 * Compile :   Sat, 11 Aug 2018 14:53:07 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette prive/formulaires/inc-logo_auteur.html
// Temps de compilation total: 17.704 ms
//

function html_93f26411b8d83690b69b8ff3c26b456e($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header(' . _q((	'Content-type:text/html;charset=' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'charset', null),true)))) . '); ?'.'>' .
filtrer('image_graver',filtrer('image_reduire',
((!is_array($l = quete_logo('id_auteur', 'ON', @$Pile[0]['id_auteur'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'40','*')) .
'
');

	return analyse_resultat_skel('html_93f26411b8d83690b69b8ff3c26b456e', $Cache, $page, 'prive/formulaires/inc-logo_auteur.html');
}
?>
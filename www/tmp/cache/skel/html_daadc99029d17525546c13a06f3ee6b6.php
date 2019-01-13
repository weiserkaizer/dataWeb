<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/newsletters_lien.html
 * Date :      Thu, 26 Jul 2018 13:23:58 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:13 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/newsletters_lien.html
// Temps de compilation total: 8.856 ms
//

function html_daadc99029d17525546c13a06f3ee6b6($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(interdire_scripts((((((filtre_info_plugin_dist("CLEVERMAIL", "est_actif")) ?' ' :'')) OR (interdire_scripts(((filtre_info_plugin_dist("MAILSUBSCRIBERS", "est_actif")) ?' ' :'')))) ?' ' :''))))!=='' ?
		($t1 . (	'
<li class="menu_lien_newsletter">' .
	interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'template', null),true) == 'inscription_infolettre') ? '<strong>':'')) .
	'<a href="' .
	interdire_scripts(generer_url_public('inscription_infolettre', '')) .
	'" title="' .
	_T('soyezcreateurs:newsletter_recevoir') .
	'">' .
	_T('soyezcreateurs:newsletter') .
	'</a>' .
	interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'template', null),true) == 'inscription_infolettre') ? '</strong>':'')) .
	'</li>')) :
		'') .
'
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_daadc99029d17525546c13a06f3ee6b6', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/newsletters_lien.html');
}
?>
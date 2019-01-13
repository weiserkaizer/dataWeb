<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/logosite.html
 * Date :      Thu, 26 Jul 2018 13:23:58 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:04 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/logosite.html
// Temps de compilation total: 2.576 ms
//

function html_760561e6a8c6770c9b32237a1aaa292a($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(extraire_attribut(
((!is_array($l = quete_logo('id_syndic', 'on', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'src')))!=='' ?
		((	'<div id="logo">
	<a href="./" title="' .
	_T('soyezcreateurs:accueil_site') .
	' ' .
	interdire_scripts(attribut_html(supprimer_tags(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])))) .
	'">
		<img src="') . $t1 . (	'" width="' .
	largeur(
((!is_array($l = quete_logo('id_syndic', 'on', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />'))) .
	'" height="' .
	hauteur(
((!is_array($l = quete_logo('id_syndic', 'on', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />'))) .
	'" alt="' .
	interdire_scripts(attribut_html(supprimer_tags(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])))) .
	'" />
	</a>
</div>')) :
		'') .
'
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_760561e6a8c6770c9b32237a1aaa292a', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/logosite.html');
}
?>
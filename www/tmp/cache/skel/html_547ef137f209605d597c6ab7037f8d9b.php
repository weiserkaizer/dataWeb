<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/favicon.ico.html
 * Date :      Thu, 26 Jul 2018 13:24:02 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:20 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/favicon.ico.html
// Temps de compilation total: 5.701 ms
//

function html_547ef137f209605d597c6ab7037f8d9b($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header(' . _q('Content-Type: image/x-icon') . '); ?'.'>' .
'<'.'?php header(' . _q('Content-Transfer-Encoding: binary') . '); ?'.'><?php
$file="' .
((($a = ((($a = find_in_path('images/favicon.ico')) OR (is_string($a) AND strlen($a))) ? $a : extraire_attribut(filtrer('image_graver', filtrer('image_format',filtrer('image_recadre',filtrer('image_passe_partout',
((!is_array($l = quete_logo('id_syndic', 'on', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'32','32'),'32','32','center'),'ico')),'src'))) OR (is_string($a) AND strlen($a))) ? $a : find_in_path('images/soyezcreateurs.ico')) .
'";
if ($cl = filesize($file=preg_replace(\',[?].*$,\',\'\',$file)))
	header("Content-Length: ". $cl);

readfile($file);');

	return analyse_resultat_skel('html_547ef137f209605d597c6ab7037f8d9b', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/favicon.ico.html');
}
?>
<?php

/*
 * Squelette : ../plugins/auto/saisies/v2.26.5/inclure/fieldset_legend.html
 * Date :      Wed, 11 Jul 2018 07:50:01 GMT
 * Compile :   Tue, 31 Jul 2018 13:39:13 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/saisies/v2.26.5/inclure/fieldset_legend.html
// Temps de compilation total: 1.304 ms
//

function html_79006d4dd7ac3b51e8165de5c1e1abe7($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'icone', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	vide($Pile['vars'][$_zzz=(string)'icone'] = '') .
	((version_compare(spip_version(),'2.9','>'))  ?
			(' ' . vide($Pile['vars'][$_zzz=(string)'icone'] = interdire_scripts(chemin_image(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'icone', null),true)))))) :
			'') .
	'
' .
	(($t2 = strval(extraire_attribut(filtrer('image_graver', filtrer('image_reduire',((($a = table_valeur($Pile["vars"], (string)'icone', null)) OR (is_string($a) AND strlen($a))) ? $a : find_in_path(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'icone', null),true)))),interdire_scripts(((($a = entites_html(table_valeur(@$Pile[0], (string)'taille_icone', null),true)) OR (is_string($a) AND strlen($a))) ? $a : '16')))),'src')))!=='' ?
			('<img src="' . $t2 . (	'" alt="' .
		interdire_scripts(table_valeur(@$Pile[0], (string)'label', null)) .
		'" /> ')) :
			'') .
	'
')) :
		'') .
'
<span>' .
interdire_scripts(table_valeur(@$Pile[0], (string)'label', null)) .
'</span>
');

	return analyse_resultat_skel('html_79006d4dd7ac3b51e8165de5c1e1abe7', $Cache, $page, '../plugins/auto/saisies/v2.26.5/inclure/fieldset_legend.html');
}
?>
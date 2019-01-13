<?php

/*
 * Squelette : ../plugins/auto/soyezcreateurs/v4.3.16/formulaires/inc/config_couleurs.html
 * Date :      Thu, 26 Jul 2018 13:23:59 GMT
 * Compile :   Tue, 31 Jul 2018 14:03:50 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/soyezcreateurs/v4.3.16/formulaires/inc/config_couleurs.html
// Temps de compilation total: 2.184 ms
//

function html_67065b37e8e26988cf2e03a45e222fcc($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][$_zzz=(string)'color'] = interdire_scripts(ajuster_couleur_input(entites_html(table_valeur(@$Pile[0], (string)'color', null),true)))) .
'
' .
vide($Pile['vars'][$_zzz=(string)'color_bk'] = interdire_scripts(ajuster_couleur_input(entites_html(table_valeur(@$Pile[0], (string)'color_bk', null),true),'background'))) .
'
									' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'nocell', null),true)) ?'' :' '))))!=='' ?
		($t1 . '<td>') :
		'') .
'
										' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'color', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'<input type="text" name="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'name', null),true)) .
	'" id="sc_' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'name', null),true)) .
	'" value="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'color', null),true)) .
	'" size="7" class="fondl' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'color', null),true) != 'transparent') ? 'palette':''))))!=='' ?
			(' ' . $t2) :
			'') .
	'" />')) :
		'') .
'
									' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'nocell', null),true)) ?'' :' '))))!=='' ?
		($t1 . '</td>') :
		'') .
'
									' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'nobk', null),true)) ?'' :' '))))!=='' ?
		($t1 . (	'<td>
										' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'color_bk', null),true)) ?' ' :''))))!=='' ?
			($t2 . (	'<input type="text" name="' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'name', null),true)) .
		'_bk" id="sc_' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'name', null),true)) .
		'_bk" value="' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'color_bk', null),true)) .
		'" size="7" class="fondl' .
		(($t3 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'color_bk', null),true) != 'transparent') ? 'palette':''))))!=='' ?
				(' ' . $t3) :
				'') .
		'" />')) :
			'') .
	'
									</td>')) :
		'') .
'
									' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'nosample', null),true)) ?'' :' '))))!=='' ?
		($t1 . (	'<td style="' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'color', null)))!=='' ?
			('color:' . $t2) :
			'') .
	';' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'color_bk', null)))!=='' ?
			('background-color:' . $t2) :
			'') .
	'">' .
	_T('soyezcreateursprive:cfg_exemple') .
	'</td>')) :
		''));

	return analyse_resultat_skel('html_67065b37e8e26988cf2e03a45e222fcc', $Cache, $page, '../plugins/auto/soyezcreateurs/v4.3.16/formulaires/inc/config_couleurs.html');
}
?>
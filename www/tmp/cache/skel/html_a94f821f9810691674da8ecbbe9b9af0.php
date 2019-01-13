<?php

/*
 * Squelette : ../plugins/noizetier/formulaires/inclure/inc-input_type_noisette.html
 * Date :      Wed, 11 Jul 2018 07:46:24 GMT
 * Compile :   Mon, 07 Jan 2019 01:02:04 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/noizetier/formulaires/inclure/inc-input_type_noisette.html
// Temps de compilation total: 1.440 ms
//

function html_a94f821f9810691674da8ecbbe9b9af0($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'input_type', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
	<div class="choix">
		' .
	vide($Pile['vars'][$_zzz=(string)'id'] = uniqid('noisettes_')) .
	'
		<input type="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'input_type', null),true)) .
	'" class="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'input_type', null),true)) .
	'" name="' .
	interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'input_type', null),true) == 'radio') ? 'type_noisette':'type_noisette[]')) .
	'" value="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type_noisette', null),true)) .
	'" id="' .
	table_valeur($Pile["vars"], (string)'id', null) .
	'" />
		<label for="' .
	table_valeur($Pile["vars"], (string)'id', null) .
	'">
			' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
	'
			' .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type_noisette', null),true))))!=='' ?
			('<i>(' . $t2 . ')</i>') :
			'') .
	'
		</label>
	</div>
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'input_type', null),true)) ?'' :' '))))!=='' ?
		($t1 . (	'
	<li class="item noisette">
		' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
	'
		<div class="icone">
			' .
	interdire_scripts(filtre_balise_img_dist(extraire_attribut(filtrer('image_graver', filtrer('image_reduire',chemin_image(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'icon', null),true))),'24')),'src'))) .
	'
		</div>
		<input type="hidden" name="ordre[]" value="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type_noisette', null),true)) .
	'" />
	</li>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_a94f821f9810691674da8ecbbe9b9af0', $Cache, $page, '../plugins/noizetier/formulaires/inclure/inc-input_type_noisette.html');
}
?>
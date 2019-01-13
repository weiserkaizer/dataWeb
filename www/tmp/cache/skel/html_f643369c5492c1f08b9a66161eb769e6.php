<?php

/*
 * Squelette : ../plugins/auto/saisies/v2.26.5/saisies/explication.html
 * Date :      Wed, 11 Jul 2018 07:50:00 GMT
 * Compile :   Tue, 31 Jul 2018 13:39:13 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/saisies/v2.26.5/saisies/explication.html
// Temps de compilation total: 1.335 ms
//

function html_f643369c5492c1f08b9a66161eb769e6($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'saisies_base_conteneur', null), ((($a = 'div') OR (is_string($a) AND strlen($a))) ? $a : 'li')),true)) .
' class="editer pleine_largeur editer_explication' .
(($t1 = strval(interdire_scripts(saisie_nom2classe(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)))))!=='' ?
		(' explication_' . $t1) :
		'') .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'conteneur_class', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'li_class', null),true))),true))))!=='' ?
		(' ' . $t1) :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type_saisie', null),true))))!=='' ?
		(' saisie_' . $t1) :
		'') .
'"' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_saisie', null),true))))!=='' ?
		(' data-id="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'afficher_si', null),true))))!=='' ?
		(' data-afficher_si="' . $t1 . '"') :
		'') .
'>
	' .
interdire_scripts(table_valeur(@$Pile[0], (string)'inserer_debut', null)) .
'<div class="explication">
		' .
interdire_scripts(propre(table_valeur(@$Pile[0], (string)'texte', null))) .
'
	</div>
	' .
interdire_scripts(table_valeur(@$Pile[0], (string)'inserer_fin', null)) .
'</' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'saisies_base_conteneur', null), ((($a = 'div') OR (is_string($a) AND strlen($a))) ? $a : 'li')),true)) .
'>
');

	return analyse_resultat_skel('html_f643369c5492c1f08b9a66161eb769e6', $Cache, $page, '../plugins/auto/saisies/v2.26.5/saisies/explication.html');
}
?>
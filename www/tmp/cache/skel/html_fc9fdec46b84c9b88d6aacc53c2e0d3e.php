<?php

/*
 * Squelette : ../plugins/auto/saisies/v2.26.5/saisies/textarea.html
 * Date :      Wed, 11 Jul 2018 07:50:00 GMT
 * Compile :   Tue, 31 Jul 2018 13:39:13 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/saisies/v2.26.5/saisies/textarea.html
// Temps de compilation total: 7.803 ms
//

function html_fc9fdec46b84c9b88d6aacc53c2e0d3e($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'


' .
vide($Pile['vars'][$_zzz=(string)'valeur'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_forcee', null), interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'defaut', null),true))),true))),true))) .
vide($Pile['vars'][$_zzz=(string)'valeur'] = (is_array(table_valeur($Pile["vars"], (string)'valeur', null)) ? saisies_tableau2chaine(table_valeur($Pile["vars"], (string)'valeur', null)):table_valeur($Pile["vars"], (string)'valeur', null))) .
(($t1 = strval(interdire_scripts(((intval(entites_html(table_valeur(@$Pile[0], (string)'longueur_max', null),true))) ?' ' :''))))!=='' ?
		($t1 . (	'<div id="compteur_' .
	interdire_scripts(saisie_nom2classe(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))),true))) .
	'" class="small"></div>')) :
		'') .
'
<textarea name="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'" class="' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'class', null),true))))!=='' ?
		($t1 . ' ') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'inserer_barre', null),true))))!=='' ?
		('inserer_barre_' . $t1 . ' ') :
		'') .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'previsualisation', null),true)) ?' ' :''))))!=='' ?
		($t1 . 'inserer_previsualisation') :
		'') .
'" id="champ_' .
interdire_scripts(saisie_nom2classe(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))),true))) .
'" rows="' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'rows', null), '20'),true)) .
'" cols="' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'cols', null), '40'),true)) .
'"' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'disable', null),true))))!=='' ?
		(' disabled="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'readonly', null),true))))!=='' ?
		(' readonly="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'placeholder', null),true))))!=='' ?
		(' placeholder="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(((((((((entites_html(table_valeur(@$Pile[0], (string)'obligatoire', null),true)) AND (interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'obligatoire', null),true) != 'non')))) ?' ' :'')) AND ('')) ?' ' :'')) ?' ' :''))))!=='' ?
		($t1 . ' required="required"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'describedby', null),true))))!=='' ?
		(' aria-describedby="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'attributs', null))))!=='' ?
		(' ' . $t1) :
		'') .
'>
' .
table_valeur($Pile["vars"], (string)'valeur', null) .
'</textarea>

' .
(($t1 = strval(interdire_scripts(((intval(entites_html(table_valeur(@$Pile[0], (string)'longueur_max', null),true))) ?' ' :''))))!=='' ?
		($t1 . (	'
<script type="text/javascript">
	$(document).ready(function() {
		var max = ' .
	interdire_scripts(intval(entites_html(table_valeur(@$Pile[0], (string)'longueur_max', null),true))) .
	';
		var field = $(\'#champ_' .
	interdire_scripts(saisie_nom2classe(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))),true))) .
	'\');
		var compteur = $(\'#compteur_' .
	interdire_scripts(saisie_nom2classe(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))),true))) .
	'\');
		function update_compteur_textarea_' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
	'(jqObj) {
			jqObj.val(jqObj.val().substring(0,max));
			var saisi = jqObj.val().length;
			msg       = \'Il vous reste \' + (max - saisi) + \' caractères sur \' + max;
			compteur.html(msg);
		}
		field.keyup(function() {
			update_compteur_textarea_' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
	'($(this));
		});
		field.each(function() {
			update_compteur_textarea_' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
	'($(this));
		});
	});
</script>
')) :
		''));

	return analyse_resultat_skel('html_fc9fdec46b84c9b88d6aacc53c2e0d3e', $Cache, $page, '../plugins/auto/saisies/v2.26.5/saisies/textarea.html');
}
?>
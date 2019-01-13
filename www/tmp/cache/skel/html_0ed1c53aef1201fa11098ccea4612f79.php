<?php

/*
 * Squelette : ../plugins/auto/saisies/v2.26.5/saisies/oui_non.html
 * Date :      Wed, 11 Jul 2018 07:50:00 GMT
 * Compile :   Tue, 31 Jul 2018 13:39:14 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/saisies/v2.26.5/saisies/oui_non.html
// Temps de compilation total: 4.345 ms
//

function html_0ed1c53aef1201fa11098ccea4612f79($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
vide($Pile['vars'][$_zzz=(string)'valeur'] = interdire_scripts((is_null(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_forcee', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'valeur', null),true))),true)) ? interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'defaut', null),true)):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_forcee', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'valeur', null),true))),true))))) .
'<div class="choix' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'class', null),true))))!=='' ?
		(' ' . $t1) :
		'') .
'">
	<input type="radio" name="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'" class="radio" id="champ_' .
interdire_scripts(saisie_nom2classe(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))),true))) .
'_oui"' .
(((table_valeur($Pile["vars"], (string)'valeur', null) == interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_oui', null), 'on'),true))))  ?
		(' ' . ' ' . 'checked="checked"') :
		'') .
' value="' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_oui', null), 'on'),true)) .
'" ' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'disable', null),true))))!=='' ?
		(' disabled="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'readonly', null),true))))!=='' ?
		(' readonly="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'describedby', null),true))))!=='' ?
		(' aria-describedby="' . $t1 . '"') :
		'') .
' />
	<label for="champ_' .
interdire_scripts(saisie_nom2classe(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))),true))) .
'_oui"' .
(((table_valeur($Pile["vars"], (string)'valeur', null) == interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_oui', null), 'on'),true))))  ?
		(' ' . 'class="on"') :
		'') .
'>' .
_T('public|spip|ecrire:item_oui') .
'</label>
</div>
<div class="choix' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'class', null),true))))!=='' ?
		(' ' . $t1) :
		'') .
'">
	<input type="radio" name="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'" class="radio" id="champ_' .
interdire_scripts(saisie_nom2classe(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))),true))) .
'_non"' .
((((table_valeur($Pile["vars"], (string)'valeur', null) == interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_non', null), ''),true)))) OR (((table_valeur($Pile["vars"], (string)'valeur', null)) ?'' :' ')))  ?
		(' ' . ' ' . 'checked="checked"') :
		'') .
' value="' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_non', null), ''),true)) .
'" ' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'disable', null),true))))!=='' ?
		(' disabled="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'readonly', null),true))))!=='' ?
		(' readonly="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'describedby', null),true))))!=='' ?
		(' aria-describedby="' . $t1 . '"') :
		'') .
' />
	<label for="champ_' .
interdire_scripts(saisie_nom2classe(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))),true))) .
'_non"' .
((((table_valeur($Pile["vars"], (string)'valeur', null) == interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_non', null), ''),true)))) OR (((table_valeur($Pile["vars"], (string)'valeur', null)) ?'' :' ')))  ?
		(' ' . 'class="on"') :
		'') .
'>' .
_T('public|spip|ecrire:item_non') .
'</label>
</div>
');

	return analyse_resultat_skel('html_0ed1c53aef1201fa11098ccea4612f79', $Cache, $page, '../plugins/auto/saisies/v2.26.5/saisies/oui_non.html');
}
?>
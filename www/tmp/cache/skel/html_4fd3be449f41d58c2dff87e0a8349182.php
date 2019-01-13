<?php

/*
 * Squelette : ../plugins/auto/savecfg/v3.0.7/formulaires/sauvegarder_savecfg.html
 * Date :      Fri, 20 Jul 2018 07:20:16 GMT
 * Compile :   Tue, 31 Jul 2018 13:39:13 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/savecfg/v3.0.7/formulaires/sauvegarder_savecfg.html
// Temps de compilation total: 4.270 ms
//

function html_4fd3be449f41d58c2dff87e0a8349182($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_savecfg formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'">
	<h3 class="titrem">' .
_T('savecfg:sauvegarder_savecfg') .
'</h3>
	' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_ok', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_ok">' . $t1 . '</p>') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_erreur', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_erreur">' . $t1 . '</p>') :
		'') .
'
	<form method="post" action="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
'">
		<div>
			' .
	'<div>' .
	form_hidden(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(!empty($Pile[0]['_hidden']) ? @$Pile[0]['_hidden'] : '') .
	'</div><input type="hidden" name="fondcfg" value="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'" />
			<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
				<' .
saisie_balise_structure_formulaire('li') .
' class="editer">
					<label for="champ_nom">' .
_T('savecfg:titre_sauvegarde') .
(($t1 = strval(((($a = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'nom')) OR (is_string($a) AND strlen($a))) ? $a : (	'<em>' .
	_T('ecrire:info_obligatoire_02') .
	'</em>'))))!=='' ?
		(' ' . $t1) :
		'') .
'</label>
					<input type="text" size="10" class="text" name="titre" id="champ_nom" value="" />
					' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'nom')))!=='' ?
		('<p>' . $t1 . '</p>') :
		'') .
'
				</' .
saisie_balise_structure_formulaire('li') .
'>
			</' .
saisie_balise_structure_formulaire('ul') .
'>
			<p class="boutons">
				<input type="submit" value="' .
_T('savecfg:sauvegarder') .
'" />
			</p>
		</div>
	</form>
</div>');

	return analyse_resultat_skel('html_4fd3be449f41d58c2dff87e0a8349182', $Cache, $page, '../plugins/auto/savecfg/v3.0.7/formulaires/sauvegarder_savecfg.html');
}
?>
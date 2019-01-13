<?php

/*
 * Squelette : ../plugins/auto/savecfg/v3.0.7/formulaires/importer_savecfg.html
 * Date :      Fri, 20 Jul 2018 07:20:16 GMT
 * Compile :   Tue, 31 Jul 2018 13:39:13 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/savecfg/v3.0.7/formulaires/importer_savecfg.html
// Temps de compilation total: 1.671 ms
//

function html_32b64b98a72017b9bea3f5e989416618($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_savecfg formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'">
	<h3 class="titrem">' .
_T('savecfg:importer_savecfg') .
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
'" enctype="multipart/form-data">
		<div>
			' .
	'<div>' .
	form_hidden(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(!empty($Pile[0]['_hidden']) ? @$Pile[0]['_hidden'] : '') .
	'</div>' .
vide($Pile['vars'][$_zzz=(string)'fond'] = match(self(),'(cfg=)(\\w+?)','2')) .
'<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
				<' .
saisie_balise_structure_formulaire('li') .
' class="editer">
					<label for="champ_fichier">' .
_T('savecfg:fichier_import') .
(($t1 = strval(((($a = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'nom')) OR (is_string($a) AND strlen($a))) ? $a : (	'<em>' .
	_T('ecrire:info_obligatoire_02') .
	'</em>'))))!=='' ?
		(' ' . $t1) :
		'') .
'</label>
					<input type="file" size="8" name="fichier" class="form1" id="champ_fichier" />
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
_T('savecfg:importer') .
'" />
			</p>
		</div>
	</form>
</div>');

	return analyse_resultat_skel('html_32b64b98a72017b9bea3f5e989416618', $Cache, $page, '../plugins/auto/savecfg/v3.0.7/formulaires/importer_savecfg.html');
}
?>
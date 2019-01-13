<?php

/*
 * Squelette : ../plugins/auto/ieconfig/v1.3.2/formulaires/ieconfig_import.html
 * Date :      Thu, 12 Jul 2018 06:56:10 GMT
 * Compile :   Tue, 31 Jul 2018 13:39:12 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/ieconfig/v1.3.2/formulaires/ieconfig_import.html
// Temps de compilation total: 3.787 ms
//

function html_bfcba66f0d9947a34af78a01db0dfc94($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_ieconfig_import">
<h3 class="titrem">' .
_T('ieconfig:titre_import') .
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
<form action="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
'" method="post" enctype="multipart/form-data"><div>
	' .
	'<div>' .
	form_hidden(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(!empty($Pile[0]['_hidden']) ? @$Pile[0]['_hidden'] : '') .
	'</div><' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
		' .
recuperer_fond( 'inclure/generer_saisies' , array_merge($Pile[0],array('saisies' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_saisies', null),true)) )), array('compil'=>array('../plugins/auto/ieconfig/v1.3.2/formulaires/ieconfig_import.html','html_bfcba66f0d9947a34af78a01db0dfc94','',8,$GLOBALS['spip_lang'])), _request('connect')) .
'</' .
saisie_balise_structure_formulaire('ul') .
'>
	' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_code_yaml', null),true))))!=='' ?
		('<textarea name="_code_yaml" id="_code_yaml" style="display:none;">' . $t1 . '</textarea>') :
		'') .
'
	<p class="boutons">
		' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_code_yaml', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
		<input type="submit" class="submit link" name="annuler" value="' .
	_T('public|spip|ecrire:bouton_annuler') .
	'" />
		<input type="submit" class="submit" name="importer" value="' .
	_T('ieconfig:titre_import') .
	'" />')) :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_code_yaml', null),true)) ?'' :' '))))!=='' ?
		($t1 . (	'
		<input type="submit" class="submit" name="suivant" value="' .
	_T('ieconfig:titre_import') .
	'" />')) :
		'') .
'
	</p>
</div></form>
</div>');

	return analyse_resultat_skel('html_bfcba66f0d9947a34af78a01db0dfc94', $Cache, $page, '../plugins/auto/ieconfig/v1.3.2/formulaires/ieconfig_import.html');
}
?>
<?php

/*
 * Squelette : ../plugins/auto/soyezcreateurs/v4.3.16/formulaires/export_soyezcreateurs.html
 * Date :      Thu, 26 Jul 2018 13:23:59 GMT
 * Compile :   Tue, 31 Jul 2018 13:39:13 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/soyezcreateurs/v4.3.16/formulaires/export_soyezcreateurs.html
// Temps de compilation total: 1.359 ms
//

function html_0d32d40a18e923404531651e4b83946c($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_export_soyezcreateur">
<h3 class="titrem">' .
_T('ieconfig:titre_export') .
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
'" method="post"><div>
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
recuperer_fond( 'inclure/generer_saisies' , array_merge($Pile[0],array('saisies' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_saisies', null),true)) )), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/export_soyezcreateurs.html','html_0d32d40a18e923404531651e4b83946c','',5,$GLOBALS['spip_lang'])), _request('connect')) .
'
	</' .
saisie_balise_structure_formulaire('ul') .
'>
	<p class="boutons"><input type="submit" class="submit" value="' .
_T('ieconfig:titre_export') .
'" /></p>
</div></form>
</div>');

	return analyse_resultat_skel('html_0d32d40a18e923404531651e4b83946c', $Cache, $page, '../plugins/auto/soyezcreateurs/v4.3.16/formulaires/export_soyezcreateurs.html');
}
?>
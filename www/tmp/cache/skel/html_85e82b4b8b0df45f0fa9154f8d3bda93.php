<?php

/*
 * Squelette : ../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_google.html
 * Date :      Thu, 26 Jul 2018 13:23:59 GMT
 * Compile :   Wed, 01 Aug 2018 05:49:11 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_google.html
// Temps de compilation total: 11.275 ms
//

function html_85e82b4b8b0df45f0fa9154f8d3bda93($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_configurer_sc">
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
	'</div><fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_indexation') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'indexation', null)) ,
	'nom' => 'indexation' ,
	'label' => _T('soyezcreateursprive:cfg_indexation_info') ,
	'datas' => array('oui' => _T('soyezcreateursprive:cfg_indexation_oui'), 'non' => _T('soyezcreateursprive:cfg_indexation_non')) ,
	'defaut' => 'oui' ,
	'explication' => _T('soyezcreateursprive:cfg_sponsor', array('id' => 'pub-8531732540995542')) ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_google.html','html_85e82b4b8b0df45f0fa9154f8d3bda93','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'	
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_parametres_addthis') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'addthis', null)) ,
	'nom' => 'addthis' ,
	'label' => _T('soyezcreateursprive:cfg_identifiant_addthis') ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_google.html','html_85e82b4b8b0df45f0fa9154f8d3bda93','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_notfoundorg') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'notfoundorg', null)) ,
	'nom' => 'notfoundorg' ,
	'label' => _T('soyezcreateursprive:cfg_notfoundorg_key') ,
	'explication' => _T('soyezcreateursprive:cfg_notfoundorg_explication') ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_google.html','html_85e82b4b8b0df45f0fa9154f8d3bda93','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_parametres_google') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'google_pub', null)) ,
	'nom' => 'google_pub' ,
	'label' => _T('soyezcreateursprive:cfg_code_pub_google') ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_google.html','html_85e82b4b8b0df45f0fa9154f8d3bda93','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'google_search', null)) ,
	'nom' => 'google_search' ,
	'label' => _T('soyezcreateursprive:cfg_code_recherche_google') ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_google.html','html_85e82b4b8b0df45f0fa9154f8d3bda93','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'google_analytics', null)) ,
	'nom' => 'google_analytics' ,
	'label' => _T('soyezcreateursprive:cfg_code_stats_google') ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_google.html','html_85e82b4b8b0df45f0fa9154f8d3bda93','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'googleplusun', null)) ,
	'nom' => 'googleplusun' ,
	'label' => _T('soyezcreateursprive:cfg_googleplusun_info') ,
	'datas' => array('oui' => _T('soyezcreateursprive:cfg_googleplusun_oui'), 'non' => _T('soyezcreateursprive:cfg_googleplusun_non')) ,
	'defaut' => 'non' ,
	'explication' => _T('soyezcreateursprive:cfg_googleplusun_explication') ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_google.html','html_85e82b4b8b0df45f0fa9154f8d3bda93','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'	
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_parametres_xiti') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'xiti_id', null)) ,
	'nom' => 'xiti_id' ,
	'label' => _T('soyezcreateursprive:cfg_numero_xiti') ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_google.html','html_85e82b4b8b0df45f0fa9154f8d3bda93','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'xiti_url', null)) ,
	'nom' => 'xiti_url' ,
	'label' => _T('soyezcreateursprive:cfg_url_xiti') ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_google.html','html_85e82b4b8b0df45f0fa9154f8d3bda93','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_redirection_ancien_site') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'redirection_ancien_site', null)) ,
	'nom' => 'redirection_ancien_site' ,
	'label' => _T('soyezcreateursprive:cfg_url_redirection') ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_google.html','html_85e82b4b8b0df45f0fa9154f8d3bda93','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_feedflare') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'feedflare', null)) ,
	'nom' => 'feedflare' ,
	'label' => _T('soyezcreateursprive:cfg_url_feedflare') ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_google.html','html_85e82b4b8b0df45f0fa9154f8d3bda93','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<p class="boutons">
				<input type="submit" name="enregistrer" value="' .
attribut_html(_T('public|spip|ecrire:bouton_enregistrer')) .
'" />
			</p>
		</div>
	</form>
</div>');

	return analyse_resultat_skel('html_85e82b4b8b0df45f0fa9154f8d3bda93', $Cache, $page, '../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_google.html');
}
?>
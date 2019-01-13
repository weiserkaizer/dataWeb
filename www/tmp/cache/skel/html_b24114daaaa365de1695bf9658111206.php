<?php

/*
 * Squelette : ../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html
 * Date :      Thu, 26 Jul 2018 13:23:59 GMT
 * Compile :   Tue, 31 Jul 2018 14:03:46 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html
// Temps de compilation total: 64.337 ms
//

function html_b24114daaaa365de1695bf9658111206($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

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
_T('soyezcreateursprive:cfg_couleurs_css') .
'</h3>
				<table style="width:100%;">
					<tbody>
						<tr>
							<th></th>
							<th>' .
_T('ecrire:info_texte') .
'</th>
							<th>' .
_T('soyezcreateursprive:cfg_fond') .
'</th>
							<th style="width:50%">' .
_T('soyezcreateursprive:cfg_exemple_rendu') .
'</th>
							<th>' .
_T('soyezcreateursprive:cfg_fond_degrade') .
'</th>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_page') .
'</th>
							' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color_bk\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'body_bk', null), '#eceded'),true))) . ',
	\'name\' => ' . argumenter_squelette('body') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',20,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
							<td><div class="choix">' .
vide($Pile['vars'][$_zzz=(string)'valeur'] = interdire_scripts((is_null(entites_html(table_valeur(@$Pile[0], (string)'body_degrade', null),true)) ? 'on':interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'body_degrade', null),true))))) .
'<input type="hidden" name="body_degrade" value="" /><input type="checkbox" name="body_degrade" class="checkbox" id=\'champ_body_degrade\'' .
(((table_valeur($Pile["vars"], (string)'valeur', null) == 'on'))  ?
		(' ' . ' ' . 'checked=\'checked\'') :
		'') .
' value=\'on\' /><label for="champ_body_degrade">' .
_T('ecrire:item_non') .
'</label></div></td>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_triadea') .
'</th>
							' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'triadea', null), '#be1621'),true))) . ',
	\'name\' => ' . argumenter_squelette('triadea') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',27,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
							<td></td>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_triadeb') .
'</th>
							' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'triadeb', null), '#129b9b'),true))) . ',
	\'name\' => ' . argumenter_squelette('triadeb') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',32,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
							<td></td>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_triadec') .
'</th>
							' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'triadec', null), '#c38f06'),true))) . ',
	\'name\' => ' . argumenter_squelette('triadec') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',37,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
							<td></td>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_entete_page') .
'</th>
							' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'header', null), '#262626'),true))) . ',
	\'color_bk\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'header_bk', null), '#ffffff'),true))) . ',
	\'name\' => ' . argumenter_squelette('header') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',42,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
							<td></td>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_entete_outils') .
'</th>
							' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'outils', null), interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'header', null), '#262626'),true))),true))) . ',
	\'name\' => ' . argumenter_squelette('outils') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',47,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
							<td></td>
						</tr>
						<tr>
							<th colspan="2">Transparence en-tête</th>
							<td><input type="text" name="transparenceheader" value="' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'transparenceheader', null), '1'),true)) .
'" id="sc_transparenceheader" size="4" class="fondl" /></td>
							<td style="' .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'body_bk', null), '#eceded'),true))))!=='' ?
		('background-color:' . $t1 . ';') :
		'') .
'"><div style="' .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'header', null), '#262626'),true))))!=='' ?
		('color:' . $t1 . ';') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'header_bk', null), '#ffffff'),true))))!=='' ?
		('background-color:' . $t1 . ';') :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'transparenceheader', null), '1'),true) != '1')) ?' ' :''))))!=='' ?
		($t1 . (	'background-color: rgba(' .
	interdire_scripts(sc_rgb(entites_html(sinon(table_valeur(@$Pile[0], (string)'header_bk', null), '#ffffff'),true))) .
	', ' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'transparenceheader', null), '1'),true)) .
	');')) :
		'') .
'">' .
_T('soyezcreateursprive:cfg_exemple') .
' ' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'transparenceheader', null), '1'),true)) .
'</div></td>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_fildariane') .
'</th>
							' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'fildariane', null), interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'container', null), '#02265a'),true))),true))) . ',
	\'color_bk\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'fildariane_bk', null), interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'container_bk', null), '#f6f6f6'),true))),true))) . ',
	\'name\' => ' . argumenter_squelette('fildariane') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',68,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>' .
'
							<td></td>
						</tr>
						<tr>
							<th colspan="2">Transparence Fil d\'Ariane</th>
							<td><input type="text" name="transparencefildariane" value="' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'transparencefildariane', null), '1'),true)) .
'" id="sc_transparencefildariane" size="4" class="fondl" /></td>
							<td style="' .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'fildariane_bk', null), interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'container_bk', null), '#f6f6f6'),true))),true))))!=='' ?
		('background-color:' . $t1 . ';') :
		'') .
'"><div style="' .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'fildariane', null), interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'container', null), '#02265a'),true))),true))))!=='' ?
		('color:' . $t1 . ';') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'fildariane_bk', null), interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'container_bk', null), '#f6f6f6'),true))),true))))!=='' ?
		('background-color:' . $t1 . ';') :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'transparencefildariane', null), '1'),true) != '1')) ?' ' :''))))!=='' ?
		($t1 . (	'background-color: rgba(' .
	interdire_scripts(sc_rgb(entites_html(sinon(table_valeur(@$Pile[0], (string)'fildariane_bk', null), interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'container_bk', null), '#f6f6f6'),true))),true))) .
	', ' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'transparencefildariane', null), '1'),true)) .
	');')) :
		'') .
'">' .
_T('soyezcreateursprive:cfg_exemple') .
' ' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'transparencefildariane', null), '1'),true)) .
'</div></td>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_fildarianehome') .
'</th>
							' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'fildarianehome', null), '#EA5044'),true))) . ',
	\'color_bk\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'fildarianehome_bk', null), '#EA5044'),true))) . ',
	\'name\' => ' . argumenter_squelette('fildarianehome') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',81,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
							<td></td>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_maj') .
'</th>
							' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'datemajsite', null), '#595959'),true))) . ',
	\'color_bk\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'datemajsite_bk', null), '#ffffff'),true))) . ',
	\'name\' => ' . argumenter_squelette('datemajsite') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',86,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
							<td></td>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_pied') .
'</th>
							' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'footer', null), '#595959'),true))) . ',
	\'color_bk\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'footer_bk', null), '#ffffff'),true))) . ',
	\'name\' => ' . argumenter_squelette('footer') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',91,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
							<td><div class="choix">' .
vide($Pile['vars'][$_zzz=(string)'valeur'] = interdire_scripts((is_null(entites_html(table_valeur(@$Pile[0], (string)'footer_degrade', null),true)) ? 'on':interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'footer_degrade', null),true))))) .
'<input type="hidden" name="footer_degrade" value="" /><input type="checkbox" name="footer_degrade" class="checkbox" id=\'champ_footer_degrade\'' .
(((table_valeur($Pile["vars"], (string)'valeur', null) == 'on'))  ?
		(' ' . ' ' . 'checked=\'checked\'') :
		'') .
' value=\'on\' /><label for="champ_footer_degrade">' .
_T('ecrire:item_non') .
'</label></div></td>
						</tr>
						<tr>
							<th colspan="2">Transparence pied</th>
							<td><input type="text" name="transparencefooter" value="' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'transparencefooter', null), '1'),true)) .
'" id="sc_transparencefooter" size="4" class="fondl" /></td>
							<td style="' .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'body_bk', null), '#eceded'),true))))!=='' ?
		('background-color:' . $t1 . ';') :
		'') .
'"><div style="' .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'footer', null), '#595959'),true))))!=='' ?
		('color:' . $t1 . ';') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'footer_bk', null), '#ffffff'),true))))!=='' ?
		('background-color:' . $t1 . ';') :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'transparencefooter', null), '1'),true) != '1')) ?' ' :''))))!=='' ?
		($t1 . (	'background-color: rgba(' .
	interdire_scripts(sc_rgb(entites_html(sinon(table_valeur(@$Pile[0], (string)'footer_bk', null), '#ffffff'),true))) .
	', ' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'transparencefooter', null), '1'),true)) .
	');')) :
		'') .
'">' .
_T('soyezcreateursprive:cfg_exemple') .
' ' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'transparencefooter', null), '1'),true)) .
'</div></td>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_menu_haut') .
'</th>
							' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'menuhaut', null), '#017ca5'),true))) . ',
	\'color_bk\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'menuhaut_bk', null), '#ffffff'),true))) . ',
	\'name\' => ' . argumenter_squelette('menuhaut') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',110,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
							<td><div class="choix">' .
vide($Pile['vars'][$_zzz=(string)'valeur'] = interdire_scripts((is_null(entites_html(table_valeur(@$Pile[0], (string)'menuhaut_degrade', null),true)) ? 'on':interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'menuhaut_degrade', null),true))))) .
'<input type="hidden" name="menuhaut_degrade" value="" /><input type="checkbox" name="menuhaut_degrade" class="checkbox" id=\'champ_menuhaut_degrade\'' .
(((table_valeur($Pile["vars"], (string)'valeur', null) == 'on'))  ?
		(' ' . ' ' . 'checked=\'checked\'') :
		'') .
' value=\'on\' /><label for="champ_menuhaut_degrade">' .
_T('ecrire:item_non') .
'</label></div></td>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_menu_bas') .
'</th>
							' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'menubas', null), interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'menuhaut', null), '#017ca5'),true))),true))) . ',
	\'color_bk\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'menubas_bk', null), interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'menuhaut_bk', null), '#ffffff'),true))),true))) . ',
	\'name\' => ' . argumenter_squelette('menubas') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',118,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
							<td><div class="choix">' .
vide($Pile['vars'][$_zzz=(string)'valeur'] = interdire_scripts((is_null(entites_html(table_valeur(@$Pile[0], (string)'menubas_degrade', null),true)) ? 'on':interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'menubas_degrade', null),true))))) .
'<input type="hidden" name="menubas_degrade" value="" /><input type="checkbox" name="menubas_degrade" class="checkbox" id=\'champ_menubas_degrade\'' .
(((table_valeur($Pile["vars"], (string)'valeur', null) == 'on'))  ?
		(' ' . ' ' . 'checked=\'checked\'') :
		'') .
' value=\'on\' /><label for="champ_menubas_degrade">' .
_T('ecrire:item_non') .
'</label></div></td>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_logo') .
'</th>
							' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color_bk\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'logo_bk', null), 'transparent'),true))) . ',
	\'name\' => ' . argumenter_squelette('logo') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',126,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
							<td></td>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_nav_p') .
'</th>
							' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'navigation', null), '#017ca5'),true))) . ',
	\'color_bk\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'navigation_bk', null), '#ffffff'),true))) . ',
	\'name\' => ' . argumenter_squelette('navigation') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',131,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
							<td></td>
						</tr>
						<tr>
							<th colspan="2">Transparence nav princ</th>
							<td><input type="text" name="transparencenavigation" value="' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'transparencenavigation', null), '1'),true)) .
'" id="sc_transparencenavigation" size="4" class="fondl" /></td>
							<td style="' .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'body_bk', null), '#eceded'),true))))!=='' ?
		('background-color:' . $t1 . ';') :
		'') .
'"><div style="' .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'navigation', null), '#017ca5'),true))))!=='' ?
		('color:' . $t1 . ';') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'navigation_bk', null), '#ffffff'),true))))!=='' ?
		('background-color:' . $t1 . ';') :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'transparencenavigation', null), '1'),true) != '1')) ?' ' :''))))!=='' ?
		($t1 . (	'background-color: rgba(' .
	interdire_scripts(sc_rgb(entites_html(sinon(table_valeur(@$Pile[0], (string)'navigation_bk', null), '#ffffff'),true))) .
	', ' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'transparencenavigation', null), '1'),true)) .
	');')) :
		'') .
'">' .
_T('soyezcreateursprive:cfg_exemple') .
' ' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'transparencenavigation', null), '1'),true)) .
'</div></td>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_nav_sec') .
'</th>
							' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'extra', null), '#017ca5'),true))) . ',
	\'color_bk\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'extra_bk', null), '#ffffff'),true))) . ',
	\'name\' => ' . argumenter_squelette('extra') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',146,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
							<td></td>
						</tr>
						<tr>
							<th colspan="2">Transparence nav sec</th>
							<td><input type="text" name="transparenceextra" value="' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'transparenceextra', null), '1'),true)) .
'" id="sc_transparenceextra" size="4" class="fondl" /></td>
							<td style="' .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'body_bk', null), '#eceded'),true))))!=='' ?
		('background-color:' . $t1 . ';') :
		'') .
'"><div style="' .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'extra', null), '#017ca5'),true))))!=='' ?
		('color:' . $t1 . ';') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'extra_bk', null), '#ffffff'),true))))!=='' ?
		('background-color:' . $t1 . ';') :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'transparenceextra', null), '1'),true) != '1')) ?' ' :''))))!=='' ?
		($t1 . (	'background-color: rgba(' .
	interdire_scripts(sc_rgb(entites_html(sinon(table_valeur(@$Pile[0], (string)'extra_bk', null), '#ffffff'),true))) .
	', ' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'transparenceextra', null), '1'),true)) .
	');')) :
		'') .
'">' .
_T('soyezcreateursprive:cfg_exemple') .
' ' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'transparenceextra', null), '1'),true)) .
'</div></td>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_menu_inactif') .
'</th>
							' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'menu_a', null), '#005e7a'),true))) . ',
	\'color_bk\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'menu_a_bk', null), '#ffffff'),true))) . ',
	\'name\' => ' . argumenter_squelette('menu_a') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',159,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
							<td></td>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_menu_survol') .
'</th>
							' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'menu_a_hover', null), '#ffffff'),true))) . ',
	\'color_bk\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'menu_a_hover_bk', null), '#0b7899'),true))) . ',
	\'name\' => ' . argumenter_squelette('menu_a_hover') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',164,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
							<td></td>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_menu_clic') .
'</th>
							' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'menu_a_active', null), '#ffffff'),true))) . ',
	\'color_bk\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'menu_a_active_bk', null), '#0b7899'),true))) . ',
	\'name\' => ' . argumenter_squelette('menu_a_active') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',169,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
							<td></td>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_menu_actif') .
'</th>
							' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'menu_a_strong', null), '#ffffff'),true))) . ',
	\'color_bk\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'menu_a_strong_bk', null), '#0b7899'),true))) . ',
	\'name\' => ' . argumenter_squelette('menu_a_strong') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',174,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
							<td></td>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_cadre_vignettes') .
'</th>
							' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color_bk\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'vignettes_bk', null), '#ffffff'),true))) . ',
	\'name\' => ' . argumenter_squelette('vignettes') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',179,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
							<td></td>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_cadreinfo') .
'</th>
							<td colspan="3" style="' .
(($t1 = strval(interdire_scripts(filtrer('couleur_inverserluminosite',entites_html(sinon(table_valeur(@$Pile[0], (string)'menu_a_bk', null), '#ffffff'),true),'20','true'))))!=='' ?
		('color: #' . $t1 . ';') :
		'') .
' ' .
(($t1 = strval(interdire_scripts(filtrer('couleur_inverserluminosite',entites_html(sinon(table_valeur(@$Pile[0], (string)'menu_a_bk', null), '#ffffff'),true),'30'))))!=='' ?
		('background: #' . $t1 . ';') :
		'') .
'">' .
_T('soyezcreateursprive:cfg_menu_inactif') .
'(' .
_T('soyezcreateursprive:cfg_fond') .
')|couleur_inverserluminosite{20,true}<br />' .
_T('soyezcreateursprive:cfg_menu_inactif') .
'(' .
_T('soyezcreateursprive:cfg_fond') .
')|couleur_inverserluminosite{30}</td>
							<td><div class="choix">' .
vide($Pile['vars'][$_zzz=(string)'valeur'] = interdire_scripts((is_null(entites_html(table_valeur(@$Pile[0], (string)'cadreinfo_degrade', null),true)) ? 'on':interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'cadreinfo_degrade', null),true))))) .
'<input type="hidden" name="cadreinfo_degrade" value="" /><input type="checkbox" name="cadreinfo_degrade" class="checkbox" id=\'champ_cadreinfo_degrade\'' .
(((table_valeur($Pile["vars"], (string)'valeur', null) == 'on'))  ?
		(' ' . ' ' . 'checked=\'checked\'') :
		'') .
' value=\'on\' /><label for="champ_cadreinfo_degrade">' .
_T('ecrire:item_non') .
'</label></div></td>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_citations') .
'</th>
							<td colspan="3" style="' .
(($t1 = strval(interdire_scripts(filtrer('couleur_foncerluminosite',entites_html(sinon(table_valeur(@$Pile[0], (string)'menu_a_bk', null), '#ffffff'),true)))))!=='' ?
		('color: #' . $t1 . ';') :
		'') .
' ' .
(($t1 = strval(interdire_scripts(filtrer('couleur_inverserluminosite',entites_html(sinon(table_valeur(@$Pile[0], (string)'menu_a_bk', null), '#ffffff'),true),'80'))))!=='' ?
		('background: #' . $t1 . ';') :
		'') .
'">' .
_T('soyezcreateursprive:cfg_menu_inactif') .
'(' .
_T('soyezcreateursprive:cfg_fond') .
')|couleur_foncerluminosite<br />' .
_T('soyezcreateursprive:cfg_menu_inactif') .
'(' .
_T('soyezcreateursprive:cfg_fond') .
')|couleur_inverserluminosite{80}</td>
							<td><div class="choix">' .
vide($Pile['vars'][$_zzz=(string)'valeur'] = interdire_scripts((is_null(entites_html(table_valeur(@$Pile[0], (string)'citations_degrade', null),true)) ? 'on':interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'citations_degrade', null),true))))) .
'<input type="hidden" name="citations_degrade" value="" /><input type="checkbox" name="citations_degrade" class="checkbox" id=\'champ_citations_degrade\'' .
(((table_valeur($Pile["vars"], (string)'valeur', null) == 'on'))  ?
		(' ' . ' ' . 'checked=\'checked\'') :
		'') .
' value=\'on\' /><label for="champ_citations_degrade">' .
_T('ecrire:item_non') .
'</label></div></td>
						</tr>
					</tbody>
				</table>
			</fieldset>
			<p class="boutons">
				<input type="submit" name="enregistrer" value="' .
attribut_html(_T('public|spip|ecrire:bouton_enregistrer')) .
'" />
			</p>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_couleurs_css_contenu') .
'</h3>
				<table style="width:100%;">
					<tbody>
						<tr>
							<th></th>
							<th>' .
_T('ecrire:info_texte') .
'</th>
							<th>' .
_T('soyezcreateursprive:cfg_fond') .
'</th>
							<th style="width:50%">' .
_T('soyezcreateursprive:cfg_exemple_rendu') .
'</th>
							<th>' .
_T('soyezcreateursprive:cfg_fond_degrade') .
'</th>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_texte_central') .
'</th>
							' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'container', null), '#02265a'),true))) . ',
	\'color_bk\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'container_bk', null), '#f6f6f6'),true))) . ',
	\'name\' => ' . argumenter_squelette('container') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',225,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
							<td></td>
						</tr>
						<tr>
							<th colspan="2">Transparence contenu</th>
							<td><input type="text" name="transparencecontent" value="' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'transparencecontent', null), '1'),true)) .
'" id="sc_transparencecontent" size="4" class="fondl" /></td>
							<td style="' .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'body_bk', null), '#eceded'),true))))!=='' ?
		('background-color:' . $t1 . ';') :
		'') .
'"><div style="' .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'container', null), '#02265a'),true))))!=='' ?
		('color:' . $t1 . ';') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'container_bk', null), '#f6f6f6'),true))))!=='' ?
		('background-color:' . $t1 . ';') :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'transparencecontent', null), '1'),true) != '1')) ?' ' :''))))!=='' ?
		($t1 . (	'background-color: rgba(' .
	interdire_scripts(sc_rgb(entites_html(sinon(table_valeur(@$Pile[0], (string)'container_bk', null), '#f6f6f6'),true))) .
	', ' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'transparencecontent', null), '1'),true)) .
	');')) :
		'') .
'">' .
_T('soyezcreateursprive:cfg_exemple') .
' ' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'transparencecontent', null), '1'),true)) .
'</div></td>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_slideshow') .
'</th>
							' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color_bk\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'slideshow_bk', null), 'transparent'),true))) . ',
	\'name\' => ' . argumenter_squelette('slideshow') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',238,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
							<td></td>
						</tr>
						<tr>
							<th colspan="3">' .
_T('soyezcreateursprive:cfg_cartouche') .
'</th>
							<td style="' .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'navigation', null), '#017ca5'),true))))!=='' ?
		('color:' . $t1) :
		'') .
';' .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'navigation_bk', null), '#ffffff'),true))))!=='' ?
		('background-color:' . $t1) :
		'') .
'">' .
_T('soyezcreateursprive:cfg_nav_p') .
'</td>
							<td><div class="choix">' .
vide($Pile['vars'][$_zzz=(string)'valeur'] = interdire_scripts((is_null(entites_html(table_valeur(@$Pile[0], (string)'cartouche_degrade', null),true)) ? 'on':interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'cartouche_degrade', null),true))))) .
'<input type="hidden" name="cartouche_degrade" value="" /><input type="checkbox" name="cartouche_degrade" class="checkbox" id=\'champ_cartouche_degrade\'' .
(((table_valeur($Pile["vars"], (string)'valeur', null) == 'on'))  ?
		(' ' . ' ' . 'checked=\'checked\'') :
		'') .
' value=\'on\' /><label for="champ_cartouche_degrade">' .
_T('ecrire:item_non') .
'</label></div></td>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_titraille') .
'</th>
							' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'titraille', null), '#005e7a'),true))) . ',
	\'color_bk\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'titraille_bk', null), '#f6f6f6'),true))) . ',
	\'name\' => ' . argumenter_squelette('titraille') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',250,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
							<td><div class="choix">' .
vide($Pile['vars'][$_zzz=(string)'valeur'] = interdire_scripts((is_null(entites_html(table_valeur(@$Pile[0], (string)'titraille_degrade', null),true)) ? 'on':interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'titraille_degrade', null),true))))) .
'<input type="hidden" name="titraille_degrade" value="" /><input type="checkbox" name="titraille_degrade" class="checkbox" id=\'champ_titraille_degrade\'' .
(((table_valeur($Pile["vars"], (string)'valeur', null) == 'on'))  ?
		(' ' . ' ' . 'checked=\'checked\'') :
		'') .
' value=\'on\' /><label for="champ_titraille_degrade">' .
_T('ecrire:item_non') .
'</label></div></td>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_titraille_ssniveaux') .
'</th>
							' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'titraille_ssniveaux', null), '#005e7a'),true))) . ',
	\'color_bk\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'titraille_ssniveaux_bk', null), '#f6f6f6'),true))) . ',
	\'name\' => ' . argumenter_squelette('titraille_ssniveaux') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',258,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
							<td></td>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_lien_non_visite') .
'</th>
							' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'link', null), '#017ca5'),true))) . ',
	\'name\' => ' . argumenter_squelette('link') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',263,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
							<td></td>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_lien_visite') .
'</th>
							' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'visited', null), '#595959'),true))) . ',
	\'name\' => ' . argumenter_squelette('visited') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',268,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
							<td></td>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_lien_survol') .
'</th>
							' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'hover', null), '#02265a'),true))) . ',
	\'name\' => ' . argumenter_squelette('hover') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',273,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
							<td></td>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_lien_clic') .
'</th>
							' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'active', null), '#595959'),true))) . ',
	\'name\' => ' . argumenter_squelette('active') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',278,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
							<td></td>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_cadrestexte') .
'</th>
							' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'cadrestexte', null), '#02265a'),true))) . ',
	\'color_bk\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'cadrestexte_bk', null), '#eceded'),true))) . ',
	\'name\' => ' . argumenter_squelette('cadrestexte') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',283,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
							<td></td>
						</tr>
					</tbody>
				</table>
			</fieldset>
			<p class="boutons">
				<input type="submit" name="enregistrer" value="' .
attribut_html(_T('public|spip|ecrire:bouton_enregistrer')) .
'" />
			</p>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_ombres') .
'</h3>
				<p>' .
_T('soyezcreateursprive:cfg_ombres_explications') .
'</p>
				<style>#cfgsccontent { position:relative; overflow:hidden; }
' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentbefore', null), 'none'),true) != 'none')) ?' ' :''))))!=='' ?
		($t1 . (	'
  #cfgsccontent:before {
  content: " "; position:absolute; z-index: 1; 
' .
	(($t2 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentbefore', null), 'none'),true) == 'left')) ?' ' :''))))!=='' ?
			($t2 . '
  top: 0; height:100%; left: -10px; width: 10px; border-radius: 5px / 100px;
') :
			'') .
	'
' .
	(($t2 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentbefore', null), 'none'),true) == 'top')) ?' ' :''))))!=='' ?
			($t2 . '
  left: 0; width:100%; top: -10px; height: 10px; border-radius: 100px / 5px;
') :
			'') .
	'
' .
	(($t2 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentbefore', null), 'none'),true) == 'right')) ?' ' :''))))!=='' ?
			($t2 . '
  top: 0; height:100%; right: -10px; width: 10px; border-radius: 5px / 100px;
') :
			'') .
	'
' .
	(($t2 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentbefore', null), 'none'),true) == 'bottom')) ?' ' :''))))!=='' ?
			($t2 . '
  left: 0; width:100%; bottom: -10px; height: 10px; border-radius: 100px / 5px;
') :
			'') .
	'
  -webkit-box-shadow: ' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentbeforeparametres', null), '0px 0px 13px 0px'),true)) .
	' rgba(' .
	interdire_scripts(sc_rgb(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentbeforecouleur', null), '#000000'),true))) .
	', ' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentbeforetransparence', null), '0.6'),true)) .
	');
  -moz-box-shadow: ' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentbeforeparametres', null), '0px 0px 13px 0px'),true)) .
	' rgba(' .
	interdire_scripts(sc_rgb(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentbeforecouleur', null), '#000000'),true))) .
	', ' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentbeforetransparence', null), '0.6'),true)) .
	');
  box-shadow: ' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentbeforeparametres', null), '0px 0px 13px 0px'),true)) .
	' rgba(' .
	interdire_scripts(sc_rgb(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentbeforecouleur', null), '#000000'),true))) .
	', ' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentbeforetransparence', null), '0.6'),true)) .
	');
}
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentafter', null), 'none'),true) != 'none')) ?' ' :''))))!=='' ?
		($t1 . (	'
  #cfgsccontent:after {
  content: " "; position:absolute; z-index: 1; 
' .
	(($t2 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentafter', null), 'none'),true) == 'left')) ?' ' :''))))!=='' ?
			($t2 . '
  top: 0; height:100%; left: -10px; width: 10px; border-radius: 5px / 100px;
') :
			'') .
	'
' .
	(($t2 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentafter', null), 'none'),true) == 'top')) ?' ' :''))))!=='' ?
			($t2 . '
  left: 0; width:100%; top: -10px; height: 10px; border-radius: 100px / 5px;
') :
			'') .
	'
' .
	(($t2 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentafter', null), 'none'),true) == 'right')) ?' ' :''))))!=='' ?
			($t2 . '
  top: 0; height:100%; right: -10px; width: 10px; border-radius: 5px / 100px;
') :
			'') .
	'
' .
	(($t2 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentafter', null), 'none'),true) == 'bottom')) ?' ' :''))))!=='' ?
			($t2 . '
  left: 0; width:100%; bottom: -10px; height: 10px; border-radius: 100px / 5px;
') :
			'') .
	'
  -webkit-box-shadow: ' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentafterparametres', null), '0px 0px 13px 0px'),true)) .
	' rgba(' .
	interdire_scripts(sc_rgb(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentaftercouleur', null), '#000000'),true))) .
	', ' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentaftertransparence', null), '0.6'),true)) .
	');
  -moz-box-shadow: ' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentafterparametres', null), '0px 0px 13px 0px'),true)) .
	' rgba(' .
	interdire_scripts(sc_rgb(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentaftercouleur', null), '#000000'),true))) .
	', ' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentaftertransparence', null), '0.6'),true)) .
	');
  box-shadow: ' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentafterparametres', null), '0px 0px 13px 0px'),true)) .
	' rgba(' .
	interdire_scripts(sc_rgb(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentaftercouleur', null), '#000000'),true))) .
	', ' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentaftertransparence', null), '0.6'),true)) .
	');
}
')) :
		'') .
'
				</style>
				<div style="' .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'body_bk', null), '#eceded'),true))))!=='' ?
		('background-color:' . $t1 . ';') :
		'') .
' height: auto;padding:1em;box-sizing:border-box;"><table style="box-sizing:border-box; height:100%; width:100%; ' .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'container', null), '#02265a'),true))))!=='' ?
		('color:' . $t1 . ';') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'container_bk', null), '#f6f6f6'),true))))!=='' ?
		('background-color:' . $t1 . ';') :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'transparencecontent', null), '1'),true) != '1')) ?' ' :''))))!=='' ?
		($t1 . (	'background-color: rgba(' .
	interdire_scripts(sc_rgb(entites_html(sinon(table_valeur(@$Pile[0], (string)'container_bk', null), '#f6f6f6'),true))) .
	', ' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'transparencecontent', null), '1'),true)) .
	');')) :
		'') .
' ' .
(!((table_valeur($Pile["vars"], (string)'valeur', null) == 'on'))  ?
		(' ' . (	'-webkit-box-shadow: ' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrepageparametres', null), '0px 0px 10px 0px'),true)) .
	' rgba(' .
	interdire_scripts(sc_rgb(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrepagecouleur', null), '#aaaaaa'),true))) .
	', ' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrepagetransparence', null), '1'),true)) .
	'); -moz-box-shadow: ' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrepageparametres', null), '0px 0px 10px 0px'),true)) .
	' rgba(' .
	interdire_scripts(sc_rgb(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrepagecouleur', null), '#aaaaaa'),true))) .
	', ' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrepagetransparence', null), '1'),true)) .
	'); box-shadow: ' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrepageparametres', null), '0px 0px 10px 0px'),true)) .
	' rgba(' .
	interdire_scripts(sc_rgb(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrepagecouleur', null), '#aaaaaa'),true))) .
	', ' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrepagetransparence', null), '1'),true)) .
	');')) :
		'') .
'">
					<tr><td>' .
_T('soyezcreateursprive:cfg_exemple_rendu') .
'</td></tr>
					<tr><td id="cfgsccontent">' .
_T('soyezcreateursprive:cfg_exemple') .
' ' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'transparencecontent', null), '1'),true)) .
'</td></tr>
					<tr><td></td></tr>
					</table>
				</div>
				<table style="width:100%;">
					<tbody>
							<th>' .
_T('soyezcreateursprive:cfg_zone') .
'</th>
							<th>' .
_T('soyezcreateursprive:cfg_couleur') .
' / ' .
_T('soyezcreateursprive:cfg_transparence') .
' /' .
_T('soyezcreateursprive:cfg_parametres') .
' </th>
						</tr>
						<tr>' .
vide($Pile['vars'][$_zzz=(string)'valeur'] = interdire_scripts((is_null(entites_html(table_valeur(@$Pile[0], (string)'ombrepagenon', null),true)) ? 'on':interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'ombrepagenon', null),true))))) .
'<th>' .
_T('soyezcreateursprive:cfg_page') .
' : <input type="hidden" name="ombrepagenon" value="" /><input type="checkbox" name="ombrepagenon" class="checkbox" id=\'champ_ombrepagenon\'' .
(((table_valeur($Pile["vars"], (string)'valeur', null) == 'on'))  ?
		(' ' . ' ' . 'checked=\'checked\'') :
		'') .
' value=\'on\' /><label for="champ_ombrepagenon">' .
_T('soyezcreateursprive:cfg_ombrenon') .
'</label></th>
							
							<td>' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrepagecouleur', null), '#aaaaaa'),true))) . ',
	\'nobk\' => ' . argumenter_squelette('oui') . ',
	\'nosample\' => ' . argumenter_squelette('oui') . ',
	\'nocell\' => ' . argumenter_squelette('oui') . ',
	\'name\' => ' . argumenter_squelette('ombrepagecouleur') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',327,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
								<input type="text" name="ombrepagetransparence" value="' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrepagetransparence', null), '1'),true)) .
'" id="sc_ombrepagetransparence" size="4" class="fondl" />
								<input type="text" name="ombrepageparametres" value="' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrepageparametres', null), '0px 0px 10px 0px'),true)) .
'" id="sc_ombrepageparametres" size="20" class="fondl" />
							</td>
						</tr>
						<tr>
							<td>' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'pagemargehaute', null)) ,
	'nom' => 'pagemargehaute' ,
	'label' => _T('soyezcreateursprive:cfg_pagemargehaute_label') ,
	'size' => '10' ,
	'defaut' => '3em' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html','html_b24114daaaa365de1695bf9658111206','',247,$GLOBALS['spip_lang'])), _request('connect')) .
'
							</td>
							<td>' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'pagemargebasse', null)) ,
	'nom' => 'pagemargebasse' ,
	'label' => _T('soyezcreateursprive:cfg_pagemargebasse_label') ,
	'size' => '10' ,
	'defaut' => '3em' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html','html_b24114daaaa365de1695bf9658111206','',239,$GLOBALS['spip_lang'])), _request('connect')) .
'
							</td>
						</tr>
						<tr>
							<th>
								' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'ombrecontentbefore', null)) ,
	'nom' => 'ombrecontentbefore' ,
	'label' => _T('ecrire:onglet_contenu') ,
	'datas' => array('none' => _T('soyezcreateursprive:cfg_ombrenon'), 'left' => _T('soyezcreateursprive:cfg_contenu_gauche'), 'top' => _T('soyezcreateursprive:cfg_contenu_haut'), 'right' => _T('soyezcreateursprive:cfg_contenu_droit'), 'bottom' => _T('soyezcreateursprive:cfg_contenu_bas')) ,
	'defaut' => 'none' ,
	'cacher_option_intro' => 'oui' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html','html_b24114daaaa365de1695bf9658111206','',242,$GLOBALS['spip_lang'])), _request('connect')) .
'
							</th>
							<td>' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentbeforecouleur', null), '#000000'),true))) . ',
	\'nobk\' => ' . argumenter_squelette('oui') . ',
	\'nosample\' => ' . argumenter_squelette('oui') . ',
	\'nocell\' => ' . argumenter_squelette('oui') . ',
	\'name\' => ' . argumenter_squelette('ombrecontentbeforecouleur') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',344,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
								<input type="text" name="ombrecontentbeforetransparence" value="' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentbeforetransparence', null), '0.6'),true)) .
'" id="sc_ombrecontentbeforetransparence" size="4" class="fondl" />
								<input type="text" name="ombrecontentbeforeparametres" value="' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentbeforeparametres', null), '0px 0px 13px 0px'),true)) .
'" id="sc_ombrecontentbeforeparametres" size="20" class="fondl" />
							</td>
						</tr>
						<tr>
							<th>
								' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'ombrecontentafter', null)) ,
	'nom' => 'ombrecontentafter' ,
	'label' => _T('ecrire:onglet_contenu') ,
	'datas' => array('none' => _T('soyezcreateursprive:cfg_ombrenon'), 'left' => _T('soyezcreateursprive:cfg_contenu_gauche'), 'top' => _T('soyezcreateursprive:cfg_contenu_haut'), 'right' => _T('soyezcreateursprive:cfg_contenu_droit'), 'bottom' => _T('soyezcreateursprive:cfg_contenu_bas')) ,
	'defaut' => 'none' ,
	'cacher_option_intro' => 'oui' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html','html_b24114daaaa365de1695bf9658111206','',248,$GLOBALS['spip_lang'])), _request('connect')) .
'
							</th>
							<td>' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentaftercouleur', null), '#000000'),true))) . ',
	\'nobk\' => ' . argumenter_squelette('oui') . ',
	\'nosample\' => ' . argumenter_squelette('oui') . ',
	\'nocell\' => ' . argumenter_squelette('oui') . ',
	\'name\' => ' . argumenter_squelette('ombrecontentaftercouleur') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',355,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
								<input type="text" name="ombrecontentaftertransparence" value="' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentaftertransparence', null), '0.6'),true)) .
'" id="sc_ombrecontentaftertransparence" size="4" class="fondl" />
								<input type="text" name="ombrecontentafterparametres" value="' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'ombrecontentafterparametres', null), '0px 0px 13px 0px'),true)) .
'" id="sc_ombrecontentafterparametres" size="20" class="fondl" />
							</td>
						</tr>
					</tbody>
				</table>
			</fieldset>
			<p class="boutons">
				<input type="submit" name="enregistrer" value="' .
attribut_html(_T('public|spip|ecrire:bouton_enregistrer')) .
'" />
			</p>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_couleurs_css_lettre') .
'</h3>
				<table style="width:100%;">
					<tbody>
						<tr>
							<th></th>
							<th>' .
_T('ecrire:info_texte') .
'</th>
							<th>' .
_T('soyezcreateursprive:cfg_fond') .
'</th>
							<th style="width:50%">' .
_T('soyezcreateursprive:cfg_exemple_rendu') .
'</th>
							<th>' .
_T('soyezcreateursprive:cfg_fond_degrade') .
'</th>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_entete_page') .
'</th>
							' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'header_lettre', null), '#02265a'),true))) . ',
	\'color_bk\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'header_lettre_bk', null), '#ffffff'),true))) . ',
	\'name\' => ' . argumenter_squelette('header_lettre') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',379,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
							<td></td>
						</tr>
						<tr>
							<th>' .
_T('soyezcreateursprive:cfg_titraille') .
'</th>
							' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc/config_couleurs') . ', array(\'color\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'titraille_lettre', null), '#02265a'),true))) . ',
	\'name\' => ' . argumenter_squelette('titraille_lettre') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html\',\'html_b24114daaaa365de1695bf9658111206\',\'\',384,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
							<td></td>
						</tr>
						<tr>
							<td colspan="5">
								<img src="' .
extraire_attribut(filtrer('image_graver', filtrer('image_reduire',appliquer_filtre(filtrer('image_graver', filtrer('image_masque',filtrer('image_masque',appliquer_filtre(filtrer('image_graver', filtrer('image_sepia',find_in_path('lettres/header.jpg'),interdire_scripts(replace(entites_html(sinon(table_valeur(@$Pile[0], (string)'header_lettre_bk', null), '#ffffff'),true),'#','')))),'image_smush_debrayer','force=true'),interdire_scripts(extraire_attribut(filtrer('image_graver', filtrer('image_recadre',filtrer('image_recadre',filtrer('image_format',image_typo(replace(replace(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]),'<sub>.*</sub>',''),'<sup>.*</sup>',''),'police=AndBasR.ttf','largeur=460',(	'couleur=' .
		interdire_scripts(replace(entites_html(sinon(table_valeur(@$Pile[0], (string)'header_lettre', null), '#02265a'),true),'#',''))),'taille=32','padding=20'),'png'),'580','110','center left','transparent'),'580','130','top left','transparent')),'src')),'mode=normal'),extraire_attribut(filtrer('image_graver', filtrer('image_recadre',filtrer('image_recadre',filtrer('image_reduire',filtrer('image_aplatir',
((!is_array($l = quete_logo('id_syndic', 'on', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'png',interdire_scripts(replace(entites_html(sinon(table_valeur(@$Pile[0], (string)'header_lettre_bk', null), '#ffffff'),true),'#',''))),'0','100'),'570','105','bottom right','transparent'),'580','130','top left','transparent')),'src'),'mode=normal')),'image_smush_embrayer','force=true'),'516','0')),'src') .
'" alt="" />
							</td>
						</tr>
					</tbody>
				</table>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_nombres_quoideneuf_lettres') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'nombres_alanune', null)) ,
	'nom' => 'nombres_alanune' ,
	'label' => _T('soyezcreateursprive:cfg_alaune_label') ,
	'size' => '2' ,
	'defaut' => '4' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html','html_b24114daaaa365de1695bf9658111206','',238,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'nombres_quoideneuf', null)) ,
	'nom' => 'nombres_quoideneuf' ,
	'label' => _T('soyezcreateursprive:cfg_quoideneuf_label') ,
	'size' => '2' ,
	'defaut' => '10' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html','html_b24114daaaa365de1695bf9658111206','',238,$GLOBALS['spip_lang'])), _request('connect')) .
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
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_polices_affichage') .
'</h3>
				<p' .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'fontsnavigation', null), 'Verdana, Arial, Geneva, sans-serif'),true))))!=='' ?
		(' style=\'font-family:' . $t1 . ';border:1px solid #aaa;\'') :
		'') .
'>
					' .
_T('spip:icone_voir_en_ligne') .
' : <a href="http://www.angelfire.com/al4/rcollins/style/fonts.html">Fonts for the Web</a>
					et <a href="http://www.ampsoft.net/webdesign-l/WindowsMacFonts.html">Common fonts to all versions of Windows &amp; Mac equivalents</a>.
					<br /><em>' .
_T('soyezcreateursprive:cfg_texte_police_choisie') .
'</em>.
				</p>
				' .
vide($Pile['vars'][$_zzz=(string)'fonts'] = array('Arial, Helvetica, sans-serif' => 'Arial, Helvetica, sans-serif', 'Calibri,Tahoma,Arial,Helvetica, sans-serif' => 'Calibri,Tahoma,Arial,Helvetica, sans-serif', '&quot;Courier New&quot;, Courier, monospace' => '"Courier New", Courier, monospace', 'Georgia, serif' => 'Georgia, serif', 'Impact, Charcoal, sans-serif' => 'Impact, Charcoal, sans-serif', '&quot;Lucida Console&quot;, Monaco, monospace' => '"Lucida Console", Monaco, monospace', '&quot;Times New Roman&quot;, Times, serif' => '"Times New Roman", Times, serif', 'Verdana, Arial, Geneva, sans-serif' => 'Verdana, Arial, Geneva, sans-serif', '&quot;Trebuchet MS&quot;, Helvetica, sans-serif' => '"Trebuchet MS", Helvetica, sans-serif')) .
vide($Pile['vars'][$_zzz=(string)'font_defaut'] = 'Verdana, Arial, Geneva, sans-serif') .
'<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'fontsnavigation', null)) ,
	'nom' => 'fontsnavigation' ,
	'label' => _T('soyezcreateursprive:cfg_police_nav') ,
	'defaut' => table_valeur($Pile["vars"], (string)'font_defaut', null) ,
	'datas' => table_valeur($Pile["vars"], (string)'fonts', null) ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html','html_b24114daaaa365de1695bf9658111206','',245,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'fontscontent', null)) ,
	'nom' => 'fontscontent' ,
	'label' => _T('soyezcreateursprive:cfg_police_texte') ,
	'defaut' => table_valeur($Pile["vars"], (string)'font_defaut', null) ,
	'datas' => table_valeur($Pile["vars"], (string)'fonts', null) ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html','html_b24114daaaa365de1695bf9658111206','',245,$GLOBALS['spip_lang'])), _request('connect')) .
'
				</' .
saisie_balise_structure_formulaire('ul') .
'>
			</fieldset>
			<fieldset>
				<h3 class="legend">' .
_T('soyezcreateursprive:cfg_polices_tailles') .
'</h3>
				<' .
saisie_balise_structure_formulaire('ul') .
' class="editer-groupe">
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'fontsizeheader', null)) ,
	'nom' => 'fontsizeheader' ,
	'label' => _T('soyezcreateursprive:cfg_header') ,
	'explication' => _T('soyezcreateursprive:cfg_em') ,
	'defaut' => '1.2' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html','html_b24114daaaa365de1695bf9658111206','',245,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'fontsizemenuhaut', null)) ,
	'nom' => 'fontsizemenuhaut' ,
	'label' => _T('soyezcreateursprive:cfg_menu_haut') ,
	'explication' => _T('soyezcreateursprive:cfg_em') ,
	'defaut' => '1.2' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html','html_b24114daaaa365de1695bf9658111206','',245,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'fontsizefooter', null)) ,
	'nom' => 'fontsizefooter' ,
	'label' => _T('soyezcreateursprive:cfg_footer') ,
	'explication' => _T('soyezcreateursprive:cfg_em') ,
	'defaut' => '0.9' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html','html_b24114daaaa365de1695bf9658111206','',245,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'fontsizenavigation', null)) ,
	'nom' => 'fontsizenavigation' ,
	'label' => _T('soyezcreateursprive:cfg_nav') ,
	'explication' => _T('soyezcreateursprive:cfg_em') ,
	'defaut' => '1.4' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html','html_b24114daaaa365de1695bf9658111206','',245,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'fontsizecontenu', null)) ,
	'nom' => 'fontsizecontenu' ,
	'label' => _T('ecrire:onglet_contenu') ,
	'explication' => _T('soyezcreateursprive:cfg_em') ,
	'defaut' => '1.3' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html','html_b24114daaaa365de1695bf9658111206','',245,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'fontsizeartrecents', null)) ,
	'nom' => 'fontsizeartrecents' ,
	'label' => _T('soyezcreateursprive:cfg_cartouche') ,
	'explication' => _T('soyezcreateursprive:cfg_em') ,
	'defaut' => '1.1' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html','html_b24114daaaa365de1695bf9658111206','',245,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'radio' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'autovignettes', null)) ,
	'nom' => 'autovignettes' ,
	'label' => _T('soyezcreateursprive:cfg_vignettesauto') ,
	'datas' => array('auto' => _T('soyezcreateursprive:cfg_vignettes_choix_auto'), 'graphiste' => _T('soyezcreateursprive:cfg_vignettes_choix_graphiste')) ,
	'defaut' => 'auto' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html','html_b24114daaaa365de1695bf9658111206','',245,$GLOBALS['spip_lang'])), _request('connect')) .
'
					' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'autovignettes', null), 'auto'),true) == 'auto')) ?' ' :''))))!=='' ?
		($t1 . (	'
					' .
	recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'fontsizevignettes', null)) ,
	'nom' => 'fontsizevignettes' ,
	'label' => _T('soyezcreateursprive:cfg_vignettes') ,
	'explication' => _T('soyezcreateursprive:cfg_px') ,
	'defaut' => '16' ), array('compil'=>array('../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html','html_b24114daaaa365de1695bf9658111206','',246,$GLOBALS['spip_lang'])), _request('connect')) .
	'
					')) :
		'') .
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
</div>
');

	return analyse_resultat_skel('html_b24114daaaa365de1695bf9658111206', $Cache, $page, '../plugins/auto/soyezcreateurs/v4.3.16/formulaires/configurer_soyezcreateurs_couleurs.html');
}
?>
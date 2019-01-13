<?php

/*
 * Squelette : ../plugins/noizetier/formulaires/editer_page.html
 * Date :      Wed, 11 Jul 2018 07:46:24 GMT
 * Compile :   Mon, 07 Jan 2019 01:02:07 GMT
 * Boucles :   _suggestions_icones, _est_virtuelle, _heritage, _editable
 */ 

function BOUCLE_suggestions_iconeshtml_b9185b06583a25645f42072bea0ea0e2(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(interdire_scripts(calculer_liste_icones("24")));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_suggestions_icones';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle");
		$command['orderby'] = array('cle');
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('../plugins/noizetier/formulaires/editer_page.html','html_b9185b06583a25645f42072bea0ea0e2','_suggestions_icones',60,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
								<div class="suggestion_icone" onclick="jQuery(\'input#icon\').val(\'' .
interdire_scripts(safehtml($Pile[$SP]['cle'])) .
'\');maj_apercu_icone();jQuery(\'#suggestions_icones\').hide(500);jQuery(\'#afficher_suggestions\').show(500);return false;">
									' .
(($t1 = strval(interdire_scripts(filtre_balise_img_dist(chemin_image(interdire_scripts(safehtml($Pile[$SP]['cle'])))))))!=='' ?
		($t1 . '<br />') :
		'') .
'
									' .
interdire_scripts(safehtml($Pile[$SP]['cle'])) .
'
								</div>
						');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_suggestions_icones @ ../plugins/noizetier/formulaires/editer_page.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_est_virtuellehtml_b9185b06583a25645f42072bea0ea0e2(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'est_virtuelle', null),true) == 'oui'));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_est_virtuelle';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"CONDITION",
		$command,
		array('../plugins/noizetier/formulaires/editer_page.html','html_b9185b06583a25645f42072bea0ea0e2','_est_virtuelle',31,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('noizetier:formulaire_nom');
	$l2 = _T('noizetier:formulaire_nom_explication');
	$l3 = _T('noizetier:formulaire_description');
	$l4 = _T('noizetier:formulaire_description_explication');
	$l5 = _T('noizetier:formulaire_icon');
	$l6 = _T('noizetier:formulaire_icon_explication');
	$l7 = _T('noizetier:suggestions');
	$l8 = _T('noizetier:apercu');
	$l9 = _T('noizetier:masquer');
	$l10 = _T('noizetier:suggestions');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
				' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'nom', null)) ,
	'nom' => 'nom' ,
	'label' => $l1 ,
	'explication' => $l2 ,
	'size' => '40' ,
	'obligatoire' => 'oui' ), array('compil'=>array('../plugins/noizetier/formulaires/editer_page.html','html_b9185b06583a25645f42072bea0ea0e2','_est_virtuelle',32,$GLOBALS['spip_lang'])), _request('connect')) .
'

				
				' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'textarea' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'description', null)) ,
	'nom' => 'description' ,
	'label' => $l3 ,
	'explication' => $l4 ,
	'rows' => '3' ), array('compil'=>array('../plugins/noizetier/formulaires/editer_page.html','html_b9185b06583a25645f42072bea0ea0e2','_est_virtuelle',34,$GLOBALS['spip_lang'])), _request('connect')) .
'

				' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'icon') .
vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
'<div class="editer editer_' .
table_valeur($Pile["vars"], (string)'name', null) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
		(' ' . $t1) :
		'') .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
					<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'">' .
$l5 .
'</label>
					<div class="explication">' .
$l6 .
'</div>
					' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>') :
		'') .
'
					<input type="text" class="text" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" size="40" value="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)) .
'" />
					<div id="aide_choix_icone">
						<div id="afficher_suggestions">
							[<a href="#" onclick="jQuery(\'#suggestions_icones\').show(500);jQuery(\'#afficher_suggestions\').hide(500);return false;" >' .
$l7 .
'</a>]
						</div>
						<strong>' .
$l8 .
'</strong><br />
						<span id="apercu_icone">' .
interdire_scripts(filtre_balise_img_dist(chemin_image(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'icon', null),true))))) .
'</span>
						' .
(($t1 = BOUCLE_suggestions_iconeshtml_b9185b06583a25645f42072bea0ea0e2($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
						<div id="suggestions_icones">
							<div id="bouton_suggestion">
								[<a href="#" onclick="jQuery(\'#suggestions_icones\').hide(500);jQuery(\'#afficher_suggestions\').show(500);return false;">' .
		$l9 .
		'</a>]
							</div>
							<p><strong>' .
		$l7 .
		'</strong></p>
						') . $t1 . '
						</div>
						') :
		'') .
'
					</div>
					<script type="text/javascript">/*<![CDATA[*/
						jQuery(\'#aide_choix_icone\').show();
						maj_apercu_icone = function(){
							i = jQuery(\'input#icon\').val();
							jQuery.get(\'' .
interdire_scripts(generer_url_public('icone_preview', '')) .
'&icone=\'+i, function(data) {
								jQuery(\'span#apercu_icone\').html(data);
							});
						};
						jQuery(\'input#icon\').change(function(){
							maj_apercu_icone();
						});
					/*]]>*/</script>
				</div>
			');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_est_virtuelle @ ../plugins/noizetier/formulaires/editer_page.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_heritagehtml_b9185b06583a25645f42072bea0ea0e2(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_heritiers', null),true)));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_heritage';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		"erreurs",
		".cle");
		$command['orderby'] = array('cle');
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('../plugins/noizetier/formulaires/editer_page.html','html_b9185b06583a25645f42072bea0ea0e2','_heritage',111,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('noizetier:ne_pas_definir_d_heritage');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
				' .
recuperer_fond( 'saisies/_base' , array('erreurs' => (isset($Pile[$SP]['erreurs'])?$Pile[$SP]['erreurs']:(@$Pile[0]['erreurs'])) ,
	'type_saisie' => 'selection' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)(	'heritage-' .
		interdire_scripts(safehtml($Pile[$SP]['cle']))), null)) ,
	'nom' => (	'heritage-' .
	interdire_scripts(safehtml($Pile[$SP]['cle']))) ,
	'label' => interdire_scripts(_T(objet_info(safehtml($Pile[$SP]['cle']),'texte_objet'))) ,
	'option_intro' => $l1 ,
	'datas' => interdire_scripts(safehtml($Pile[$SP]['valeur'])) ), array('compil'=>array('../plugins/noizetier/formulaires/editer_page.html','html_b9185b06583a25645f42072bea0ea0e2','_heritage',0,$GLOBALS['spip_lang'])), _request('connect')) .
'
		');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_heritage @ ../plugins/noizetier/formulaires/editer_page.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_editablehtml_b9185b06583a25645f42072bea0ea0e2(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_editable';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"CONDITION",
		$command,
		array('../plugins/noizetier/formulaires/editer_page.html','html_b9185b06583a25645f42072bea0ea0e2','_editable',5,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('noizetier:formulaire_type');
	$l2 = _T('noizetier:formulaire_composition_explication');
	$l3 = _T('noizetier:formulaire_composition');
	$l4 = _T('noizetier:formulaire_blocs_exclus');
	$l5 = _T('noizetier:formulaire_description_blocs_exclus');
	$l6 = _T('noizetier:formulaire_description_peuplement');
	$l7 = _T('noizetier:formulaire_modifier_composition_heritages');
	$l8 = _T('public|spip|ecrire:bouton_enregistrer');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		
		' .
	'<div>' .
	form_hidden(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(!empty($Pile[0]['_hidden']) ? @$Pile[0]['_hidden'] : '') .
	'</div><input type="hidden" name="est_virtuelle" value="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'est_virtuelle', null),true)) .
'" />
		<div class="editer-groupe">
			
			' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'type_page', null)) ,
	'nom' => 'type_page' ,
	'label' => $l1 ,
	'readonly' => 'oui' ), array('compil'=>array('../plugins/noizetier/formulaires/editer_page.html','html_b9185b06583a25645f42072bea0ea0e2','_editable',11,$GLOBALS['spip_lang'])), _request('connect')) .
'

			
			' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'composition', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
				' .
	vide($Pile['vars'][$_zzz=(string)'disable'] = interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'edition', null),true) == 'modifier') ? 'oui':''))) .
	vide($Pile['vars'][$_zzz=(string)'explication'] = interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'edition', null),true) != 'modifier') ? $l2:''))) .
	'
				' .
	recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'composition', null)) ,
	'nom' => 'composition' ,
	'label' => $l3 ,
	'explication' => table_valeur($Pile["vars"], (string)'explication', null) ,
	'readonly' => table_valeur($Pile["vars"], (string)'disable', null) ,
	'obligatoire' => ((table_valeur($Pile["vars"], (string)'disable', null)) ?'' :' ') ), array('compil'=>array('../plugins/noizetier/formulaires/editer_page.html','html_b9185b06583a25645f42072bea0ea0e2','_editable',0,$GLOBALS['spip_lang'])), _request('connect')) .
	'
			')) :
		'') .
'
			' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'composition', null),true)) ?'' :' '))))!=='' ?
		($t1 . (	'<input type="hidden" name="composition" value="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'composition', null),true)) .
	'" />')) :
		'') .
'

			
			' .
BOUCLE_est_virtuellehtml_b9185b06583a25645f42072bea0ea0e2($Cache, $Pile, $doublons, $Numrows, $SP) .
'

			
			' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'checkbox' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'blocs_exclus', null)) ,
	'nom' => 'blocs_exclus' ,
	'label' => $l4 ,
	'explication' => $l5 ,
	'datas' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_blocs', null),true)) ,
	'defaut' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_blocs_defaut', null),true)) ), array('compil'=>array('../plugins/noizetier/formulaires/editer_page.html','html_b9185b06583a25645f42072bea0ea0e2','_editable',91,$GLOBALS['spip_lang'])), _request('connect')) .
'

			
			' .
vide($Pile['vars'][$_zzz=(string)'label'] = _T('noizetier:formulaire_peuplement',array('page' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type_page', null),true))))) .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'edition', null),true) == 'creer')) ?' ' :''))))!=='' ?
		($t1 . (	'
				' .
	recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'case' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'peupler', null)) ,
	'nom' => 'peupler' ,
	'label_case' => table_valeur($Pile["vars"], (string)'label', null) ,
	'explication' => $l6 ,
	'defaut' => 'on' ), array('compil'=>array('../plugins/noizetier/formulaires/editer_page.html','html_b9185b06583a25645f42072bea0ea0e2','_editable',95,$GLOBALS['spip_lang'])), _request('connect')) .
	'
			')) :
		'') .
'
		</div>

		' .
(($t1 = BOUCLE_heritagehtml_b9185b06583a25645f42072bea0ea0e2($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
		<fieldset>
			<legend>' .
		$l7 .
		'</legend>
			<p class="explication">' .
		_T('noizetier:explication_heritages_composition', array('type' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type_page', null),true)))) .
		'</p>
			<div class="editer-groupe">
		') . $t1 . '
			</div>
		</fieldset>
		') :
		'') .
'


		' .
'
		<!--extra-->
		<p class=\'boutons\'>
			<input type=\'submit\' name="save" class=\'submit\' value=\'' .
$l8 .
'\' />
		</p>
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_editable @ ../plugins/noizetier/formulaires/editer_page.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/noizetier/formulaires/editer_page.html
// Temps de compilation total: 29.136 ms
//

function html_b9185b06583a25645f42072bea0ea0e2($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_editer formulaire_editer_page formulaire_editer_page-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'edition', null),true)) .
'">
	' .
(($t1 = strval(table_valeur(@$Pile[0], (string)'message_ok', null)))!=='' ?
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
'"><div>
	' .
BOUCLE_editablehtml_b9185b06583a25645f42072bea0ea0e2($Cache, $Pile, $doublons, $Numrows, $SP) .
'
	</div></form>
</div>
');

	return analyse_resultat_skel('html_b9185b06583a25645f42072bea0ea0e2', $Cache, $page, '../plugins/noizetier/formulaires/editer_page.html');
}
?>
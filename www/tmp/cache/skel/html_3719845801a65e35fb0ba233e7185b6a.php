<?php

/*
 * Squelette : ../plugins/auto/saisies/v2.26.5/saisies/checkbox.html
 * Date :      Wed, 11 Jul 2018 07:50:00 GMT
 * Compile :   Tue, 31 Jul 2018 13:39:14 GMT
 * Boucles :   _checkbox
 */ 

function BOUCLE_checkboxhtml_3719845801a65e35fb0ba233e7185b6a(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(table_valeur($Pile["vars"], (string)'data', null));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_checkbox';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".cle",
		".valeur");
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
		"DATA",
		$command,
		array('../plugins/auto/saisies/v2.26.5/saisies/checkbox.html','html_3719845801a65e35fb0ba233e7185b6a','_checkbox',50,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_checkbox']['compteur_boucle'] = 0;
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_checkbox']['compteur_boucle']++;
		$t0 .= (
'
<div class="' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'choix', null), 'choix'),true)) .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'choix', null), 'choix'),true))))!=='' ?
		(' ' . $t1 . (	'_' .
	interdire_scripts($Pile[$SP]['cle']))) :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'class', null),true))))!=='' ?
		(' ' . $t1) :
		'') .
'">' .
vide($Pile['vars'][$_zzz=(string)'id'] = (	'champ_' .
	interdire_scripts(saisie_nom2classe(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))),true))) .
	'_' .
	md5(concat($Numrows['_checkbox']['compteur_boucle'],'-',interdire_scripts($Pile[$SP]['cle']))))) .
'
	<input type="checkbox" name="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'[]" class="checkbox checkbox_' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'" id="' .
table_valeur($Pile["vars"], (string)'id', null) .
'"' .
(($t1 = strval(interdire_scripts(((in_array($Pile[$SP]['cle'],interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_forcee', null), sinon(table_valeur($Pile["vars"], (string)'valeur', null), table_valeur($Pile["vars"], (string)'defaut', null))),true)))) ?' ' :''))))!=='' ?
		(' ' . $t1 . 'checked="checked"') :
		'') .
' value="' .
interdire_scripts($Pile[$SP]['cle']) .
'"' .
(($t1 = strval(interdire_scripts(((in_array($Pile[$SP]['cle'],table_valeur($Pile["vars"], (string)'disabled', null))) ?' ' :''))))!=='' ?
		($t1 . ' disabled="disabled"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'describedby', null),true))))!=='' ?
		(' aria-describedby="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'attributs', null))))!=='' ?
		(' ' . $t1) :
		'') .
' />
	<label for="' .
table_valeur($Pile["vars"], (string)'id', null) .
'"' .
(($t1 = strval(interdire_scripts(((in_array($Pile[$SP]['cle'],interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_forcee', null), sinon(table_valeur($Pile["vars"], (string)'valeur', null), table_valeur($Pile["vars"], (string)'defaut', null))),true)))) ?' ' :''))))!=='' ?
		($t1 . 'class="on"') :
		'') .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'attribut_title', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	' title="' .
	interdire_scripts($Pile[$SP]['cle']) .
	'"')) :
		'') .
'>' .
interdire_scripts($Pile[$SP]['valeur']) .
'</label>
</div>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_checkbox @ ../plugins/auto/saisies/v2.26.5/saisies/checkbox.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/saisies/v2.26.5/saisies/checkbox.html
// Temps de compilation total: 11.410 ms
//

function html_3719845801a65e35fb0ba233e7185b6a($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'


' .
vide($Pile['vars'][$_zzz=(string)'data'] = interdire_scripts(saisies_chaine2tableau(sinon(table_valeur(@$Pile[0], (string)'data', null), interdire_scripts(table_valeur(@$Pile[0], (string)'datas', null)))))) .
'
' .
vide($Pile['vars'][$_zzz=(string)'defaut'] = interdire_scripts(saisies_chaine2tableau(entites_html(table_valeur(@$Pile[0], (string)'defaut', null),true)))) .
'
' .
vide($Pile['vars'][$_zzz=(string)'valeur'] = interdire_scripts(saisies_valeur2tableau(entites_html(table_valeur(@$Pile[0], (string)'valeur', null),true)))) .
'
' .
vide($Pile['vars'][$_zzz=(string)'disabled'] = interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'disable', null),true))) .
((is_string(table_valeur($Pile["vars"], (string)'disabled', null)))  ?
		(' ' . (	'
	' .
	(!(strlen(table_valeur($Pile["vars"], (string)'disabled', null)))  ?
			(' ' . (	' ' .
		vide($Pile['vars'][$_zzz=(string)'disabled'] = array()))) :
			'') .
	'
	' .
	((table_valeur($Pile["vars"], (string)'disabled', null))  ?
			(' ' . (	' ' .
		vide($Pile['vars'][$_zzz=(string)'disabled'] = filtre_push(array(),table_valeur($Pile["vars"], (string)'disabled', null))))) :
			'') .
	'
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((strlen(entites_html(table_valeur(@$Pile[0], (string)'disable_choix', null),true))) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars'][$_zzz=(string)'disabled'] = interdire_scripts(filtre_explode_dist(entites_html(table_valeur(@$Pile[0], (string)'disable_choix', null),true),','))))) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'tout_selectionner', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
	<div class="' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'choix', null), 'choix'),true)) .
	(($t2 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'choix', null), 'choix'),true))))!=='' ?
			(' ' . $t2 . '_tout_selectionner ') :
			'') .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'class', null),true))))!=='' ?
			(' ' . $t2 . ' ') :
			'') .
	'none-nojs">
		<input type="checkbox" name="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
	'_tout" class="checkbox" id="champ_' .
	interdire_scripts(saisie_nom2classe(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))),true))) .
	'_tout" value="on" onChange="if (jQuery(this).prop(\'checked\')==true) jQuery(this).parent(\'div\').parent().find(\'input\').prop(\'checked\',true); else jQuery(this).parent(\'div\').parent().find(\'input\').prop(\'checked\',false);"/>
		<label for="champ_' .
	interdire_scripts(saisie_nom2classe(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))),true))) .
	'_tout"' .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'label_class', null),true))))!=='' ?
			(' class="' . $t2 . '"') :
			'') .
	'>' .
	_T('saisies:tout_selectionner') .
	'</label>
	</div>
')) :
		'') .
'

' .
(($t1 = BOUCLE_checkboxhtml_3719845801a65e35fb0ba233e7185b6a($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		($t1 . (	'
' .
		(($t3 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'choix_alternatif', null),true)) ?' ' :''))))!=='' ?
				($t3 . (	'
<div class="' .
			(($t4 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'choix', null), 'choix'),true))))!=='' ?
					($t4 . ' ') :
					'') .
			'choix_alternatif' .
			(($t4 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'choix', null),true)) ?' ' :''))))!=='' ?
					($t4 . (($t5 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'choix', null),true))))!=='' ?
						(' ' . $t5 . '_alternatif') :
						'')) :
					'') .
			(($t4 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'class', null),true))))!=='' ?
					(' ' . $t4) :
					'') .
			'">
    <input name="' .
			interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
			'[choix_alternatif]" id="' .
			(($t4 = strval(interdire_scripts(saisie_nom2classe(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))),true)))))!=='' ?
					('champ_' . $t4 . '_choix_alternatif') :
					'') .
			'"' .
			(($t4 = strval(interdire_scripts(saisies_trouver_choix_alternatif(table_valeur(@$Pile[0], (string)'data', null),table_valeur($Pile["vars"], (string)'valeur', null)))))!=='' ?
					(' value="' . $t4 . '"') :
					'') .
			' />
    
    <label for="' .
			(($t4 = strval(interdire_scripts(saisie_nom2classe(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))),true)))))!=='' ?
					('champ_' . $t4 . '_choix_alternatif') :
					'') .
			'"' .
			(($t4 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'label_class', null),true))))!=='' ?
					(' class="' . $t4 . '"') :
					'') .
			'>
         ' .
			interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'choix_alternatif_label', null), _T('saisies:option_choix_alternatif_label_defaut')),true)) .
			'
    </label>
    ' .
			(($t4 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'choix_alternatif_explication', null),true))))!=='' ?
					('<p class="explication">
      ' . $t4 . '
    </p>') :
					'') .
			'
</div>
')) :
				'') .
		'
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((intval(entites_html(table_valeur(@$Pile[0], (string)'maximum_choix', null),true))) ?' ' :''))))!=='' ?
		($t1 . (	'
<script type="text/javascript">
	$(\'input.checkbox_' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
	'\').on(\'change\', function() {
		if($(\'input.checkbox_' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
	':checked\').length > ' .
	interdire_scripts(intval(entites_html(table_valeur(@$Pile[0], (string)'maximum_choix', null),true))) .
	') {
			this.checked = false;
		}
	});
</script>	
')) :
		''));

	return analyse_resultat_skel('html_3719845801a65e35fb0ba233e7185b6a', $Cache, $page, '../plugins/auto/saisies/v2.26.5/saisies/checkbox.html');
}
?>
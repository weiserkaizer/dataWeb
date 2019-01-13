<?php

/*
 * Squelette : ../plugins/auto/saisies/v2.26.5/saisies/fieldset.html
 * Date :      Wed, 11 Jul 2018 07:50:00 GMT
 * Compile :   Tue, 31 Jul 2018 13:39:13 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/saisies/v2.26.5/saisies/fieldset.html
// Temps de compilation total: 5.606 ms
//

function html_bb24a82d9ffa97f838d5f4f5bba387af($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][$_zzz=(string)'pliable'] = interdire_scripts(((((entites_html(table_valeur(@$Pile[0], (string)'pliable', null),true)) AND (interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'pliable', null),true) != 'non')))) ?' ' :'') ? 'pliable':''))) .
vide($Pile['vars'][$_zzz=(string)'plie'] = interdire_scripts(((((entites_html(table_valeur(@$Pile[0], (string)'plie', null),true)) AND (interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'plie', null),true) != 'non')))) ?' ' :'') ? 'plie':''))) .
'
' .
vide($Pile['vars'][$_zzz=(string)'champs_internes'] = interdire_scripts(saisies_lister_par_nom(entites_html(table_valeur(@$Pile[0], (string)'saisies', null),true)))) .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = ((($a = table_valeur(@$Pile[0], (string)'erreurs', null)) OR (is_string($a) AND strlen($a))) ? $a : array())) .
vide($Pile['vars'][$_zzz=(string)'erreurs_fieldset'] = array_intersect_key(table_valeur($Pile["vars"], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'champs_internes', null))) .
((table_valeur($Pile["vars"], (string)'erreurs_fieldset', null))  ?
		(' ' . (	'
	' .
	vide($Pile['vars'][$_zzz=(string)'plie'] = ''))) :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'erreur_ici'] = table_valeur(@$Pile[0], (string)(	'erreurs/' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))), null)) .
'<' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'saisies_base_conteneur', null), ((($a = 'div') OR (is_string($a) AND strlen($a))) ? $a : 'li')),true)) .
' class="fieldset' .
(($t1 = strval(interdire_scripts(saisie_nom2classe(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)))))!=='' ?
		(' fieldset_' . $t1) :
		'') .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'conteneur_class', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'li_class', null),true))),true))))!=='' ?
		(' ' . $t1) :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type_saisie', null),true))))!=='' ?
		(' saisie_' . $t1) :
		'') .
(($t1 = strval(table_valeur($Pile["vars"], (string)'pliable', null)))!=='' ?
		(' ' . $t1 . (($t2 = strval(table_valeur($Pile["vars"], (string)'plie', null)))!=='' ?
			(' ' . $t2) :
			'')) :
		'') .
'"' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_saisie', null),true))))!=='' ?
		(' data-id="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'afficher_si', null),true))))!=='' ?
		(' data-afficher_si="' . $t1 . '"') :
		'') .
'>
	' .
interdire_scripts(table_valeur(@$Pile[0], (string)'inserer_debut', null)) .
'<fieldset>

		' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'label', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
			
			' .
	vide($Pile['vars'][$_zzz=(string)'tag_titre_defaut'] = (($t3 = strval(replace(replace(propre('{{{ titre }}}'),'\\n',''),'<(\\S*).*>','$1','i')))!=='' ?
				('<' . $t3 . '>') :
				'')) .
	'
			' .
	vide($Pile['vars'][$_zzz=(string)'tag'] = interdire_scripts(inserer_attribut(sinon(table_valeur(@$Pile[0], (string)'tagfield', null), table_valeur($Pile["vars"], (string)'tag_titre_defaut', null)),'class','legend'))) .
	'
			' .
	wrap(recuperer_fond( 'inclure/fieldset_legend' , array_merge($Pile[0],array()), array('compil'=>array('../plugins/auto/saisies/v2.26.5/saisies/fieldset.html','html_bb24a82d9ffa97f838d5f4f5bba387af','',15,$GLOBALS['spip_lang'])), _request('connect')),table_valeur($Pile["vars"], (string)'tag', null)) .
	'
		')) :
		'') .
'

		' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreur_ici', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>') :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'explication', null))))!=='' ?
		('<p class=\'explication\'>' . $t1 . '</p>') :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'attention', null))))!=='' ?
		('<em class=\'attention\'>' . $t1 . '</em>') :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(((is_array(entites_html(table_valeur(@$Pile[0], (string)'saisies', null),true))) ?' ' :''))))!=='' ?
		($t1 . (	'
		<' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'saisies_base_conteneur', null), ((($a = 'div') OR (is_string($a) AND strlen($a))) ? $a : 'ul')),true)) .
	' class="editer-groupe">
			' .
	recuperer_fond( interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'fond_generer', null), 'inclure/generer_saisies'),true)) , array_merge($Pile[0],array('saisies' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'saisies', null),true)) ,
	'from_fieldset' => 'on' )), array('compil'=>array('../plugins/auto/saisies/v2.26.5/saisies/fieldset.html','html_bb24a82d9ffa97f838d5f4f5bba387af','',20,$GLOBALS['spip_lang'])), _request('connect')) .
	'</' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'saisies_base_conteneur', null), ((($a = 'div') OR (is_string($a) AND strlen($a))) ? $a : 'ul')),true)) .
	'>
		')) :
		'') .
'
	</fieldset>
	' .
interdire_scripts(table_valeur(@$Pile[0], (string)'inserer_fin', null)) .
'</' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'saisies_base_conteneur', null), ((($a = 'div') OR (is_string($a) AND strlen($a))) ? $a : 'li')),true)) .
'>
');

	return analyse_resultat_skel('html_bb24a82d9ffa97f838d5f4f5bba387af', $Cache, $page, '../plugins/auto/saisies/v2.26.5/saisies/fieldset.html');
}
?>
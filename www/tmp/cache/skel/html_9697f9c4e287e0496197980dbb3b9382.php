<?php

/*
 * Squelette : ../plugins/auto/saisies/v2.26.5/saisies/_base.html
 * Date :      Wed, 11 Jul 2018 07:50:00 GMT
 * Compile :   Tue, 31 Jul 2018 13:39:13 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/saisies/v2.26.5/saisies/_base.html
// Temps de compilation total: 10.972 ms
//

function html_9697f9c4e287e0496197980dbb3b9382($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'

' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars'][$_zzz=(string)'obligatoire'] = interdire_scripts(((((entites_html(table_valeur(@$Pile[0], (string)'obligatoire', null),true)) AND (interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'obligatoire', null),true) != 'non')))) ?' ' :'') ? 'obligatoire':''))) .
	vide($Pile['vars'][$_zzz=(string)'disable'] = interdire_scripts(((((entites_html(sinon(table_valeur(@$Pile[0], (string)'disable', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'disable_avec_post', null),true))),true)) AND (interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'disable', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'disable_avec_post', null),true))),true) != 'non')))) ?' ' :'') ? interdire_scripts((is_array(entites_html(table_valeur(@$Pile[0], (string)'disable', null),true)) ? interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'disable', null), array()),true)):'disabled')):''))) .
	vide($Pile['vars'][$_zzz=(string)'readonly'] = interdire_scripts(((((entites_html(table_valeur(@$Pile[0], (string)'readonly', null),true)) AND (interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'readonly', null),true) != 'non')))) ?' ' :'') ? 'readonly':''))) .
	vide($Pile['vars'][$_zzz=(string)'saisies_autonomes'] = saisies_autonomes('')) .
	(($t2 = strval(interdire_scripts(((in_array(entites_html(table_valeur(@$Pile[0], (string)'type_saisie', null),true),table_valeur($Pile["vars"], (string)'saisies_autonomes', null))) ?' ' :''))))!=='' ?
			($t2 . (	'
		' .
		recuperer_fond( (	'saisies/' .
			interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type_saisie', null),true))) , array_merge($Pile[0],array('obligatoire' => table_valeur($Pile["vars"], (string)'obligatoire', null) ,
	'disable' => table_valeur($Pile["vars"], (string)'disable', null) ,
	'readonly' => table_valeur($Pile["vars"], (string)'readonly', null) )), array('compil'=>array('../plugins/auto/saisies/v2.26.5/saisies/_base.html','html_9697f9c4e287e0496197980dbb3b9382','',12,$GLOBALS['spip_lang'])), _request('connect')) .
		'
	')) :
			'') .
	'
	' .
	(($t2 = strval(interdire_scripts(((in_array(entites_html(table_valeur(@$Pile[0], (string)'type_saisie', null),true),table_valeur($Pile["vars"], (string)'saisies_autonomes', null))) ?'' :' '))))!=='' ?
			($t2 . (	'
    ' .
		vide($Pile['vars'][$_zzz=(string)'nom_slash'] = interdire_scripts(rtrim(replace(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true),'[\\[\\]]+?','/'),'/'))) .
		'
		' .
		vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(@$Pile[0], (string)(	'erreurs/' .
				table_valeur($Pile["vars"], (string)'nom_slash', null)), null)) .
		vide($Pile['vars'][$_zzz=(string)'conteneur_class'] = interdire_scripts(((substr(entites_html(table_valeur(@$Pile[0], (string)'type_saisie', null),true),'0','9') == 'selecteur') ? 'selecteur_item':''))) .
		'<!--!inserer_saisie_editer-->
		<' .
		interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'saisies_base_conteneur', null), ((($a = 'div') OR (is_string($a) AND strlen($a))) ? $a : 'li')),true)) .
		' class="editer editer_' .
		interdire_scripts(saisie_nom2classe(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))) .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'obligatoire', null)))!=='' ?
				(' ' . $t3) :
				'') .
		((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
				(' ' . ' ' . 'erreur') :
				'') .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'conteneur_class', null)))!=='' ?
				(' ' . $t3) :
				'') .
		(($t3 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'conteneur_class', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'li_class', null),true))),true))))!=='' ?
				(' ' . $t3) :
				'') .
		(($t3 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type_saisie', null),true))))!=='' ?
				(' saisie_' . $t3) :
				'') .
		'"' .
		(($t3 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_saisie', null),true))))!=='' ?
				(' data-id="' . $t3 . '"') :
				'') .
		(($t3 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'afficher_si', null),true))))!=='' ?
				(' data-afficher_si="' . $t3 . '"') :
				'') .
		'>
			' .
		interdire_scripts(table_valeur(@$Pile[0], (string)'inserer_debut', null)) .
		(($t3 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'label', null))))!=='' ?
				((	'<label' .
			(($t4 = strval(interdire_scripts(((match(entites_html(table_valeur(@$Pile[0], (string)'type_saisie', null),true),'oui_non|radio|checkbox|fichiers')) ?'' :' '))))!=='' ?
					($t4 . (	' for="champ_' .
				interdire_scripts(saisie_nom2classe(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))),true))) .
				'"')) :
					'') .
			(($t4 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'label_class', null),true))))!=='' ?
					(' class="' . $t4 . '"') :
					'') .
			'>') . $t3 . (	((table_valeur($Pile["vars"], (string)'obligatoire', null))  ?
					('<span class=\'obligatoire\'>' . ' ' . (	interdire_scripts((is_null(table_valeur(@$Pile[0], (string)'info_obligatoire', null)) ? _T('public|spip|ecrire:info_obligatoire_02'):interdire_scripts(table_valeur(@$Pile[0], (string)'info_obligatoire', null)))) .
				'</span>')) :
					'') .
			'</label>')) :
				'') .
		'
			' .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
				('<span class=\'erreur_message\'>' . $t3 . '</span>') :
				'') .
		'
			' .
		(($t3 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'explication', null))))!=='' ?
				((	'<p class="explication" id="' .
			(($t4 = strval(interdire_scripts(saisie_nom2name(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)))))!=='' ?
					('explication_' . $t4) :
					'') .
			'">') . $t3 . '</p>') :
				'') .
		'
			' .
		(($t3 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'attention', null))))!=='' ?
				('<em class=\'attention\'>' . $t3 . '</em>') :
				'') .
		'
			' .
		recuperer_fond( (	'saisies/' .
			interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type_saisie', null),true))) , array_merge($Pile[0],array('nom' => interdire_scripts(saisie_nom2name(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))) ,
	'disable' => table_valeur($Pile["vars"], (string)'disable', null) ,
	'readonly' => table_valeur($Pile["vars"], (string)'readonly', null) ,
	'describedby' => interdire_scripts((table_valeur(@$Pile[0], (string)'explication', null) ? (($t5 = strval(interdire_scripts(saisie_nom2name(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)))))!=='' ?
						('explication_' . $t5) :
						''):'')) )), array('compil'=>array('../plugins/auto/saisies/v2.26.5/saisies/_base.html','html_9697f9c4e287e0496197980dbb3b9382','',0,$GLOBALS['spip_lang'])), _request('connect')) .
		'
			' .
		(($t3 = strval(interdire_scripts((((((entites_html(table_valeur(@$Pile[0], (string)'disable_avec_post', null),true)) AND (interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'disable_avec_post', null),true) != 'non')))) ?' ' :'')) ?' ' :''))))!=='' ?
				($t3 . (	'<input type=\'hidden\' name=\'' .
			interdire_scripts(saisie_nom2name(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))) .
			'\' value="' .
			interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'defaut', null),true))),true)) .
			'" />')) :
				'') .
		'
			' .
		table_valeur(@$Pile[0], (string)'inserer_fin', null) .
		'</' .
		interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'saisies_base_conteneur', null), ((($a = 'div') OR (is_string($a) AND strlen($a))) ? $a : 'li')),true)) .
		'>
	')) :
			'') .
	'
')) :
		'') .
'
');

	return analyse_resultat_skel('html_9697f9c4e287e0496197980dbb3b9382', $Cache, $page, '../plugins/auto/saisies/v2.26.5/saisies/_base.html');
}
?>
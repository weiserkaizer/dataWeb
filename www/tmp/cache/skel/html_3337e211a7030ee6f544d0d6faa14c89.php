<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/logopage/default.html
 * Date :      Thu, 26 Jul 2018 13:23:58 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:06 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/logopage/default.html
// Temps de compilation total: 30.070 ms
//

function html_3337e211a7030ee6f544d0d6faa14c89($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_layout/logoarticlenavigation','content',false):'') == 'header')) ?' ' :''))))!=='' ?
		($t1 . (	(($t2 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_layout/cadragelogocontenuprincipal','entier',false):'') == 'recadre')) ?' ' :''))))!=='' ?
			($t2 . vide($Pile['vars'][$_zzz=(string)'logo_article'] = filtrer('image_graver',filtrer('image_focus',
((!is_array($l = quete_logo('id_article', 'on', @$Pile[0]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurlogocontenuprincipal',interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurlogocontenuautomatique','1920',false):'')),false):'')),interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/hauteurlogocontenuprincipal',interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/hauteurlogocontenuautomatique','590',false):'')),false):'')))))) :
			'') .
	(($t2 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_layout/cadragelogocontenuprincipal','entier',false):'') == 'entier')) ?' ' :''))))!=='' ?
			($t2 . vide($Pile['vars'][$_zzz=(string)'logo_article'] = filtrer('image_graver',filtrer('image_reduire',
((!is_array($l = quete_logo('id_article', 'on', @$Pile[0]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurlogocontenuprincipal',interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurlogocontenuautomatique','1920',false):'')),false):'')),interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/hauteurlogocontenuprincipal',interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/hauteurlogocontenuautomatique','590',false):'')),false):'')))))) :
			'') .
	(($t2 = strval(extraire_attribut(table_valeur($Pile["vars"], (string)'logo_article', null),'src')))!=='' ?
			('<img src="' . $t2 . (	'" class="logo_article" alt="" width="' .
		largeur(table_valeur($Pile["vars"], (string)'logo_article', null)) .
		'" height="' .
		hauteur(table_valeur($Pile["vars"], (string)'logo_article', null)) .
		'" />' .
		vide($Pile['vars'][$_zzz=(string)'logovu'] = '1'))) :
			'') .
	'
')) :
		'') .
(!(table_valeur($Pile["vars"], (string)'logovu', null))  ?
		(' ' . (($t2 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_layout/logorubriquenavigation','content',false):'') == 'header')) ?' ' :''))))!=='' ?
			($t2 . (	(($t3 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_layout/cadragelogocontenuprincipal','entier',false):'') == 'recadre')) ?' ' :''))))!=='' ?
				($t3 . vide($Pile['vars'][$_zzz=(string)'logo_rubrique'] = filtrer('image_graver',filtrer('image_focus',((($a = 
((!is_array($l = quete_logo('id_rubrique', 'on', @$Pile[0]['id_rubrique'],quete_parent(@$Pile[0]['id_rubrique']), 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />'))) OR (is_string($a) AND strlen($a))) ? $a : find_in_path('images/nature-2683474_1920.jpg')),interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurlogocontenuprincipal',interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurlogocontenuautomatique','1920',false):'')),false):'')),interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/hauteurlogocontenuprincipal',interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/hauteurlogocontenuautomatique','590',false):'')),false):'')))))) :
				'') .
		(($t3 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_layout/cadragelogocontenuprincipal','entier',false):'') == 'entier')) ?' ' :''))))!=='' ?
				($t3 . vide($Pile['vars'][$_zzz=(string)'logo_rubrique'] = filtrer('image_graver',filtrer('image_reduire',((($a = 
((!is_array($l = quete_logo('id_rubrique', 'on', @$Pile[0]['id_rubrique'],quete_parent(@$Pile[0]['id_rubrique']), 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />'))) OR (is_string($a) AND strlen($a))) ? $a : find_in_path('images/nature-2683474_1920.jpg')),interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurlogocontenuprincipal',interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurlogocontenuautomatique','1920',false):'')),false):'')),interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/hauteurlogocontenuprincipal',interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/hauteurlogocontenuautomatique','590',false):'')),false):'')))))) :
				'') .
		(($t3 = strval(extraire_attribut(table_valeur($Pile["vars"], (string)'logo_rubrique', null),'src')))!=='' ?
				('<img src="' . $t3 . (	'" class="logo_rubrique" alt="" width="' .
			largeur(table_valeur($Pile["vars"], (string)'logo_rubrique', null)) .
			'" height="' .
			hauteur(table_valeur($Pile["vars"], (string)'logo_rubrique', null)) .
			'" />')) :
				'') .
		'
')) :
			'')) :
		'') .
'
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_3337e211a7030ee6f544d0d6faa14c89', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/logopage/default.html');
}
?>
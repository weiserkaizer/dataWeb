<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/formulaires/recherche.html
 * Date :      Thu, 26 Jul 2018 13:23:59 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:06 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/formulaires/recherche.html
// Temps de compilation total: 2.987 ms
//

function html_261bde9d34c6fb44aab901d936fe748b($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div itemscope itemtype="http://schema.org/WebSite">
<meta itemprop="url" content="' .
spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'"/>
<form action=\'' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
'\' method=\'get\' id=\'form_rech\' class=\'searchfrm\' itemprop="potentialAction" itemscope itemtype="http://schema.org/SearchAction">
<meta itemprop="target" content="' .
interdire_scripts(url_absolue(replace(replace(parametre_url(generer_url_public('recherche', ''),'recherche','{recherche}'),'%7B','{'),'%7D','}'))) .
'"/>
<div>
	' .
interdire_scripts(form_hidden(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
'
	' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'lang', null),true))))!=='' ?
		('<input type="hidden" name="lang" value="' . $t1 . '" />') :
		'') .
'
	<label for="formulaire_recherche" title="' .
_T('soyezcreateurs:recherche_title') .
'">' .
_T('soyezcreateurs:recherche_label') .
'</label>
	<input itemprop="query-input" name=\'recherche\' type=\'search\' id=\'formulaire_recherche\' class="searchfield" title="' .
_T('soyezcreateurs:recherche_title') .
'"' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'recherche', null),true))))!=='' ?
		(' value="' . $t1 . '"') :
		'') .
' placeholder="' .
_T('soyezcreateurs:recherche_value') .
'" autocapitalize="off" autocorrect="off" />
	<input type="submit" id="sendsearch" class="okfield form_submit" title="' .
_T('soyezcreateurs:recherche_title_ok') .
'" value="' .
_T('public|spip|ecrire:pass_ok') .
'" />
</div>
</form>
</div>');

	return analyse_resultat_skel('html_261bde9d34c6fb44aab901d936fe748b', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/formulaires/recherche.html');
}
?>
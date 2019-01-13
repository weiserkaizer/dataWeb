<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer_ours.html
 * Date :      Thu, 26 Jul 2018 13:23:57 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:14 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer_ours.html
// Temps de compilation total: 3.277 ms
//

function html_8f163a5ed88320ff2a9119306f0e864b($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'			<div id="copymentions"><abbr lang="en" title="Copyright">&copy;</abbr> ' .
interdire_scripts(annee(normaliser_date(@$Pile[0]['date']))) .
(($t1 = strval(interdire_scripts(supprimer_tags(propre(sc_supprimer_slogan($GLOBALS['meta']['nom_site']))))))!=='' ?
		(', ' . $t1) :
		'') .
'<span class="navstuff">&nbsp;<img src="' .
find_in_path('images/1.gif') .
'" alt="" width="1" height="1" /> ' .
recuperer_fond( 'noisettes/footer/footer_link_mentions' , array(), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer_ours.html','html_8f163a5ed88320ff2a9119306f0e864b','',1,$GLOBALS['spip_lang'])), _request('connect')) .
'</span></div>
			<div id="droitsauteurs" class="navstuff">&nbsp;<img src="' .
find_in_path('images/1.gif') .
'" alt="" width="1" height="1" /> </div>
			<div id="w3cgohome" class="navstuff"><span class="' .
classe_boucle_crayon('meta','valeur',str_replace('/', '__', 'soyezcreateurs/realisation')).' ">' .
_T('soyezcreateurs:copyright_realisation') .
(($t1 = strval(interdire_scripts(ptobr(propre(((($a = trim((include_spip('inc/config')?lire_config('soyezcreateurs/realisation',null,false):''))) OR (is_string($a) AND strlen($a))) ? $a : '<a href="https://www.pyrat.net/" title="Visiter le site du créateur de ce squelette">pyrat.net</a>'))))))!=='' ?
		($t1 . '</span>') :
		'') .
'&nbsp;<img src="' .
find_in_path('images/1.gif') .
'" alt="" width="1" height="1" /> ' .
_T('soyezcreateurs:copyright_spip') .
(($t1 = strval(interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/numero_cnil',null,false):''))))!=='' ?
		((	'&nbsp;<img src="' .
	find_in_path('images/1.gif') .
	'" alt="" width="1" height="1" /> ' .
	_T('soyezcreateurs:copyright_cnil')) . $t1) :
		'') .
'</div>
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_8f163a5ed88320ff2a9119306f0e864b', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer_ours.html');
}
?>
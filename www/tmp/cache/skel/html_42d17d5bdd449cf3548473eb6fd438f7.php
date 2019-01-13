<?php

/*
 * Squelette : plugins/auto/ppp/v1.0.8/barre_generalisee.js.html
 * Date :      Wed, 11 Jul 2018 08:05:07 GMT
 * Compile :   Tue, 31 Jul 2018 13:37:55 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/ppp/v1.0.8/barre_generalisee.js.html
// Temps de compilation total: 2.279 ms
//

function html_42d17d5bdd449cf3548473eb6fd438f7($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header(' . _q((	'Content-Type: text/javascript; charset=' .
	interdire_scripts($GLOBALS['meta']['charset']))) . '); ?'.'>' .
'(function($){
$(document).ready(function(){
	function addbarre(){
	$(\'.formulaire_spip\').not(\'.formulaire_spip_compact\')
		.find(\'' .
trim(trim((	(($t2 = strval(interdire_scripts((((include_spip('inc/config')?lire_config('ppp/ps_ppp','on',false):'')) ?' ' :''))))!=='' ?
			($t2 . '.editer_ps,') :
			'') .
	(($t2 = strval(interdire_scripts((((include_spip('inc/config')?lire_config('ppp/descriptif_ppp','on',false):'')) ?' ' :''))))!=='' ?
			($t2 . '.editer_descriptif,') :
			'') .
	(($t2 = strval(interdire_scripts((((include_spip('inc/config')?lire_config('ppp/chapo_ppp','on',false):'')) ?' ' :''))))!=='' ?
			($t2 . '.editer_chapo,') :
			'') .
	(($t2 = strval(interdire_scripts((((include_spip('inc/config')?lire_config('ppp/auteurs_quietesvous_ppp','on',false):'')) ?' ' :''))))!=='' ?
			($t2 . '.editer_bio') :
			''))),',') .
'\')
		.find(\'textarea\')
		.barre_outils(\'edition\');
	' .
(($t1 = strval(interdire_scripts((((strlen((include_spip('inc/config')?lire_config('ppp/selecteur_ppp',null,false):'')) > '1')) ?' ' :''))))!=='' ?
		($t1 . (	'$(\'.formulaire_spip\').not(\'.formulaire_spip_compact\')
		.find(\'' .
	interdire_scripts((include_spip('inc/config')?lire_config('ppp/selecteur_ppp',null,false):'')) .
	'\')
		.barre_outils(\'edition\');')) :
		'') .
'
	' .
(($t1 = strval(interdire_scripts((((include_spip('inc/config')?lire_config('ppp/configuration_description_ppp','on',false):'')) ?' ' :''))))!=='' ?
		($t1 . '$(\'#descriptif_site\')
		.barre_outils(\'edition\');') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts((((include_spip('inc/config')?lire_config('ppp/hauteurtexte_ppp','on',false):'')) ?' ' :''))))!=='' ?
		($t1 . '$(\'#text_area\').height(($(window).height()/2.2)+\'px\');') :
		'') .
'
   $(\'textarea[class~=porte_plume_partout]\').barre_outils(\'edition\');
	}
	addbarre();
	onAjaxLoad(addbarre);
});
})(jQuery);
');

	return analyse_resultat_skel('html_42d17d5bdd449cf3548473eb6fd438f7', $Cache, $page, 'plugins/auto/ppp/v1.0.8/barre_generalisee.js.html');
}
?>
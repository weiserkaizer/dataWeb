<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/aff_datepublication.html
 * Date :      Thu, 26 Jul 2018 13:23:57 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:11 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/aff_datepublication.html
// Temps de compilation total: 2.180 ms
//

function html_431d3bea8a3e7026b12d9f6f465a9a01($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(interdire_scripts(((match((include_spip('inc/config')?lire_config('soyezcreateurs/aff_datepublication','non',false):''),'oui|^last')) ?' ' :''))))!=='' ?
		($t1 . recuperer_fond( 'noisettes/datepublication' , array('id_article' => @$Pile[0]['id_article'] ,
	'lang' => $GLOBALS["spip_lang"] ), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/aff_datepublication.html','html_431d3bea8a3e7026b12d9f6f465a9a01','',1,$GLOBALS['spip_lang'])), _request('connect'))) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((match((include_spip('inc/config')?lire_config('soyezcreateurs/aff_datepublication','non',false):''),'oui|^last')) ?'' :' '))))!=='' ?
		($t1 . recuperer_fond( 'noisettes/datepublication' , array('id_article' => @$Pile[0]['id_article'] ,
	'titre_mot' => 'DevoilerDate' ,
	'lang' => $GLOBALS["spip_lang"] ), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/aff_datepublication.html','html_431d3bea8a3e7026b12d9f6f465a9a01','',2,$GLOBALS['spip_lang'])), _request('connect'))) :
		'') .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_431d3bea8a3e7026b12d9f6f465a9a01', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/aff_datepublication.html');
}
?>
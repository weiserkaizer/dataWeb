<?php

/*
 * Squelette : plugins/auto/crayons/v1.26.17/crayons.js.html
 * Date :      Wed, 11 Jul 2018 08:06:59 GMT
 * Compile :   Tue, 31 Jul 2018 13:38:42 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/crayons/v1.26.17/crayons.js.html
// Temps de compilation total: 2.892 ms
//

function html_52ed583159beb3c5bd4f9ebe8fae5247($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
'<'.'?php header(' . _q('Content-Type: text/javascript') . '); ?'.'>' .
(table_valeur(@$Pile[0], (string)'debug_crayons', null) ? '<'.'?php header("X-Spip-Cache: 0"); ?'.'>'.'<'.'?php header("Cache-Control: no-cache, must-revalidate"); ?'.'><'.'?php header("Pragma: no-cache"); ?'.'>':'<'.'?php header("X-Spip-Cache: 604800"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=604800"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>') .
'

/* cQuery est jQuery, renommee pour eviter tout conflit */

' .
pack_cQuery(find_in_path('js/jquery.js')) .
'

cQuery.noConflict();

' .
pack_cQuery(find_in_path('js/jquery.form.js')) .
'

' .
pack_cQuery(find_in_path('js/crayons.js')) .
'

' .
pack_cQuery(find_in_path('js/resizehandle.js')) .
'

' .
pack_cQuery(find_in_path('js/jquery.html5uploader.js')) .
'

' .
(($t1 = strval(interdire_scripts((match((include_spip('inc/config')?lire_config('crayons',null,false):''),'s:11:"yellow_fade";s:2:"on";') ? ' ':''))))!=='' ?
		($t1 . (	'
	' .
	pack_cQuery(find_in_path('js/crayons-fade.js')) .
	'
')) :
		'') .
'


' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'callback', null),true))))!=='' ?
		($t1 . '();') :
		'') .
'
');

	return analyse_resultat_skel('html_52ed583159beb3c5bd4f9ebe8fae5247', $Cache, $page, 'plugins/auto/crayons/v1.26.17/crayons.js.html');
}
?>
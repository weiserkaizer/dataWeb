<?php

/*
 * Squelette : plugins/noizetier/bloc_compiler.html
 * Date :      Thu, 26 Jul 2018 07:28:14 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:07 GMT
 * Boucles :   _noisettes_descendants, _noisettes_enfants, _noisettes
 */ 

function BOUCLE_noisettes_descendantshtml_0fbe41f806adf10e68d1934b6fb53b8e(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$save_numrows = (isset($Numrows['_noisettes_enfants']) ? $Numrows['_noisettes_enfants'] : array());
	$t0 = (($t1 = BOUCLE_noisettes_enfantshtml_0fbe41f806adf10e68d1934b6fb53b8e($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
		' .
		vide($Pile['vars'][$_zzz=(string)'balise'] = interdire_scripts(((($a = table_valeur(unserialize($Pile[$SP]['parametres']),'conteneur_balise')) OR (is_string($a) AND strlen($a))) ? $a : 'div'))) .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'balise', null)))!=='' ?
				('<' . $t3 . (	' class="noisette noisette_' .
			interdire_scripts($Pile[$SP]['type_noisette']) .
			(($t4 = strval(interdire_scripts(table_valeur(unserialize($Pile[$SP]['parametres']),'conteneur_css'))))!=='' ?
					(' ' . $t4) :
					'') .
			'">')) :
				'') .
		'
	') . $t1 . (	'
		' .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'balise', null)))!=='' ?
				('</' . $t3 . '>') :
				'') .
		'
	')) :
		'');
	$Numrows['_noisettes_enfants'] = ($save_numrows);
	return $t0;
}


function BOUCLE_noisettes_enfantshtml_0fbe41f806adf10e68d1934b6fb53b8e(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'noisettes';
		$command['id'] = '_noisettes_enfants';
		$command['from'] = array('noisettes' => 'spip_noisettes');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("noisettes.parametres",
		"noisettes.type_noisette",
		"noisettes.rang_noisette",
		"noisettes.id_noisette",
		"noisettes.balise",
		"noisettes.id_conteneur",
		"noisettes.plugin",
		"noisettes.css");
		$command['orderby'] = array('noisettes.rang_noisette');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'noisettes.plugin', "'noizetier'"), 
			array('=', 'noisettes.id_conteneur', sql_quote(interdire_scripts(calculer_identifiant_conteneur("noizetier", table_valeur($Pile["vars"], (string)"conteneur", null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)"stockage", null),true)))), '', 'varchar(255) NOT NULL DEFAULT \'\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/noizetier/bloc_compiler.html','html_0fbe41f806adf10e68d1934b6fb53b8e','_noisettes_enfants',3,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		' .
vide($Pile['vars'][$_zzz=(string)'conteneur'] = array('type_noisette' => interdire_scripts($Pile[$SP]['type_noisette']), 'id_noisette' => $Pile[$SP]['id_noisette'])) .
BOUCLE_noisettes_descendantshtml_0fbe41f806adf10e68d1934b6fb53b8e($Cache, $Pile, $doublons, $Numrows, $SP) .
'
		' .
vide($Pile['vars'][$_zzz=(string)'avec_div'] = interdire_scripts((($Pile[$SP]['balise'] == 'defaut') ? interdire_scripts((include_spip('inc/config')?lire_config('noizetier/balise_noisette',null,false):'')):interdire_scripts($Pile[$SP]['balise'])))) .
(($t1 = strval(((!$Pile[$SP]['id_noisette']) ? _T('zbug_champ_hors_motif', array('champ'=>'ID_NOISETTE', 'motif'=>'NOISETTES')) : ((type_noisette_dynamiser($Pile[$SP]['plugin'], $Pile[$SP]['type_noisette'], "")) ? "<?php echo recuperer_fond(
		".type_noisette_localiser($Pile[$SP]['plugin'], $Pile[$SP]['type_noisette']).",
		".var_export(array_merge(unserialize($Pile[$SP]['parametres']), noisette_contextualiser($Pile[$SP]['plugin'], array(
		'id_noisette' => $Pile[$SP]['id_noisette'],
		'id_conteneur' => $Pile[$SP]['id_conteneur'],
		'rang_noisette' => $Pile[$SP]['rang_noisette']
	), $Pile[$SP]['type_noisette'], $Pile[0], "")),true).",
		".var_export(array('ajax'=>(type_noisette_ajaxifier($Pile[$SP]['plugin'], $Pile[$SP]['type_noisette'], ""))),true)."
	);?>" : recuperer_fond(
		type_noisette_localiser($Pile[$SP]['plugin'], $Pile[$SP]['type_noisette']),
		array_merge(unserialize($Pile[$SP]['parametres']), noisette_contextualiser($Pile[$SP]['plugin'], array(
		'id_noisette' => $Pile[$SP]['id_noisette'],
		'id_conteneur' => $Pile[$SP]['id_conteneur'],
		'rang_noisette' => $Pile[$SP]['rang_noisette']
	), $Pile[$SP]['type_noisette'], $Pile[0], "")),
		array('ajax'=>(type_noisette_ajaxifier($Pile[$SP]['plugin'], $Pile[$SP]['type_noisette'], "")))
	)))))!=='' ?
		((	((table_valeur($Pile["vars"], (string)'avec_div', null))  ?
			(' ' . (	'<div class="noisette noisette_' .
		interdire_scripts($Pile[$SP]['type_noisette']) .
		(($t3 = strval(interdire_scripts($Pile[$SP]['css'])))!=='' ?
				(' ' . $t3) :
				'') .
		'">')) :
			'') .
	'
			') . $t1 . (	'
		' .
	((table_valeur($Pile["vars"], (string)'avec_div', null))  ?
			(' ' . '</div>') :
			''))) :
		'') .
'
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_noisettes_enfants @ plugins/noizetier/bloc_compiler.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_noisetteshtml_0fbe41f806adf10e68d1934b6fb53b8e(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'noisettes';
		$command['id'] = '_noisettes';
		$command['from'] = array('noisettes' => 'spip_noisettes');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("noisettes.rang_noisette",
		"noisettes.type_noisette",
		"noisettes.id_noisette",
		"noisettes.parametres",
		"noisettes.balise",
		"noisettes.id_conteneur",
		"noisettes.plugin",
		"noisettes.css");
		$command['orderby'] = array('noisettes.rang_noisette');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'noisettes.plugin', "'noizetier'"), 
			array('=', 'noisettes.id_conteneur', sql_quote(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_conteneur', null),true)), '', 'varchar(255) NOT NULL DEFAULT \'\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/noizetier/bloc_compiler.html','html_0fbe41f806adf10e68d1934b6fb53b8e','_noisettes',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
vide($Pile['vars'][$_zzz=(string)'conteneur'] = array('type_noisette' => interdire_scripts($Pile[$SP]['type_noisette']), 'id_noisette' => $Pile[$SP]['id_noisette'])) .
(($t1 = BOUCLE_noisettes_enfantshtml_0fbe41f806adf10e68d1934b6fb53b8e($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
		' .
		vide($Pile['vars'][$_zzz=(string)'balise'] = interdire_scripts(((($a = table_valeur(unserialize($Pile[$SP]['parametres']),'conteneur_balise')) OR (is_string($a) AND strlen($a))) ? $a : 'div'))) .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'balise', null)))!=='' ?
				('<' . $t3 . (	' class="noisette noisette_' .
			interdire_scripts($Pile[$SP]['type_noisette']) .
			(($t4 = strval(interdire_scripts(table_valeur(unserialize($Pile[$SP]['parametres']),'conteneur_css'))))!=='' ?
					(' ' . $t4) :
					'') .
			'">')) :
				'') .
		'
	') . $t1 . (	'
		' .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'balise', null)))!=='' ?
				('</' . $t3 . '>') :
				'') .
		'
	')) :
		'') .
'
	' .
vide($Pile['vars'][$_zzz=(string)'avec_div'] = interdire_scripts((($Pile[$SP]['balise'] == 'defaut') ? interdire_scripts((include_spip('inc/config')?lire_config('noizetier/balise_noisette',null,false):'')):interdire_scripts($Pile[$SP]['balise'])))) .
(($t1 = strval(((!$Pile[$SP]['id_noisette']) ? _T('zbug_champ_hors_motif', array('champ'=>'ID_NOISETTE', 'motif'=>'NOISETTES')) : ((type_noisette_dynamiser($Pile[$SP]['plugin'], $Pile[$SP]['type_noisette'], "")) ? "<?php echo recuperer_fond(
		".type_noisette_localiser($Pile[$SP]['plugin'], $Pile[$SP]['type_noisette']).",
		".var_export(array_merge(unserialize($Pile[$SP]['parametres']), noisette_contextualiser($Pile[$SP]['plugin'], array(
		'id_noisette' => $Pile[$SP]['id_noisette'],
		'id_conteneur' => $Pile[$SP]['id_conteneur'],
		'rang_noisette' => $Pile[$SP]['rang_noisette']
	), $Pile[$SP]['type_noisette'], $Pile[0], "")),true).",
		".var_export(array('ajax'=>(type_noisette_ajaxifier($Pile[$SP]['plugin'], $Pile[$SP]['type_noisette'], ""))),true)."
	);?>" : recuperer_fond(
		type_noisette_localiser($Pile[$SP]['plugin'], $Pile[$SP]['type_noisette']),
		array_merge(unserialize($Pile[$SP]['parametres']), noisette_contextualiser($Pile[$SP]['plugin'], array(
		'id_noisette' => $Pile[$SP]['id_noisette'],
		'id_conteneur' => $Pile[$SP]['id_conteneur'],
		'rang_noisette' => $Pile[$SP]['rang_noisette']
	), $Pile[$SP]['type_noisette'], $Pile[0], "")),
		array('ajax'=>(type_noisette_ajaxifier($Pile[$SP]['plugin'], $Pile[$SP]['type_noisette'], "")))
	)))))!=='' ?
		((	((table_valeur($Pile["vars"], (string)'avec_div', null))  ?
			(' ' . (	'<div class="noisette noisette_' .
		interdire_scripts($Pile[$SP]['type_noisette']) .
		(($t3 = strval(interdire_scripts($Pile[$SP]['css'])))!=='' ?
				(' ' . $t3) :
				'') .
		'">')) :
			'') .
	'
		') . $t1 . (	'
	' .
	((table_valeur($Pile["vars"], (string)'avec_div', null))  ?
			(' ' . '</div>') :
			''))) :
		'') .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_noisettes @ plugins/noizetier/bloc_compiler.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/noizetier/bloc_compiler.html
// Temps de compilation total: 58.418 ms
//

function html_0fbe41f806adf10e68d1934b6fb53b8e($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_noisetteshtml_0fbe41f806adf10e68d1934b6fb53b8e($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_0fbe41f806adf10e68d1934b6fb53b8e', $Cache, $page, 'plugins/noizetier/bloc_compiler.html');
}
?>
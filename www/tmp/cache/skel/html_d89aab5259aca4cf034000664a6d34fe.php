<?php

/*
 * Squelette : ../plugins-dist/svp/prive/squelettes/navigation/svp_admin_plugin.html
 * Date :      Wed, 11 Jul 2018 07:43:38 GMT
 * Compile :   Tue, 31 Jul 2018 13:37:54 GMT
 * Boucles :   _libs
 */ 

function BOUCLE_libshtml_d89aab5259aca4cf034000664a6d34fe(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(svp_lister_librairies(''));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_libs';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle");
		$command['orderby'] = array('cle');
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
		array('../plugins-dist/svp/prive/squelettes/navigation/svp_admin_plugin.html','html_d89aab5259aca4cf034000664a6d34fe','_libs',3,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	<dt>' .
interdire_scripts(safehtml($Pile[$SP]['cle'])) .
'</dt>
	' .
(($t1 = strval(interdire_scripts(joli_repertoire(safehtml($Pile[$SP]['valeur'])))))!=='' ?
		('<dd>' . $t1 . '</dd>') :
		'') .
'
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_libs @ ../plugins-dist/svp/prive/squelettes/navigation/svp_admin_plugin.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/svp/prive/squelettes/navigation/svp_admin_plugin.html
// Temps de compilation total: 1.932 ms
//

function html_d89aab5259aca4cf034000664a6d34fe($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
recuperer_fond( 'prive/squelettes/navigation/configurer' , array('exec' => 'admin_plugin' ), array('compil'=>array('../plugins-dist/svp/prive/squelettes/navigation/svp_admin_plugin.html','html_d89aab5259aca4cf034000664a6d34fe','',1,$GLOBALS['spip_lang'])), _request('connect')) .
'

' .
(($t1 = BOUCLE_libshtml_d89aab5259aca4cf034000664a6d34fe($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
' .
		boite_ouvrir(_T('public|spip|ecrire:plugin_librairies_installees'), 'basic highlight') .
		'
<dl>
	') . $t1 . (	'
</dl>
' .
		boite_fermer() .
		'
')) :
		'') .
'
');

	return analyse_resultat_skel('html_d89aab5259aca4cf034000664a6d34fe', $Cache, $page, '../plugins-dist/svp/prive/squelettes/navigation/svp_admin_plugin.html');
}
?>
<?php

/*
 * Squelette : ../plugins/noizetier/prive/squelettes/inclure/inc-nav_blocs.html
 * Date :      Wed, 11 Jul 2018 07:46:22 GMT
 * Compile :   Mon, 07 Jan 2019 01:02:04 GMT
 * Boucles :   _blocs
 */ 

function BOUCLE_blocshtml_e6e3ae4babfc9fd2e3dce01a37e9d8b6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'blocs', null),true)));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_blocs';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
		$command['orderby'] = array();
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
		array('../plugins/noizetier/prive/squelettes/inclure/inc-nav_blocs.html','html_e6e3ae4babfc9fd2e3dce01a37e9d8b6','_blocs',8,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		' .
vide($Pile['vars'][$_zzz=(string)'nb_noisettes'] = ((($a = table_valeur($Pile["vars"], (string)(	'blocs_decompte/' .
		interdire_scripts(safehtml($Pile[$SP]['valeur']))), null)) OR (is_string($a) AND strlen($a))) ? $a : '0')) .
(($t1 = strval(lien_ou_expose(parametre_url(self(),'bloc',interdire_scripts(safehtml($Pile[$SP]['valeur']))),(	interdire_scripts(calculer_infos_bloc(interdire_scripts(safehtml($Pile[$SP]["valeur"])), "nom")) .
	'&nbsp;(' .
	table_valeur($Pile["vars"], (string)'nb_noisettes', null) .
	')'),interdire_scripts((safehtml($Pile[$SP]['valeur']) == interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'bloc_affiche', null),true)))))))!=='' ?
		('<li>
			' . $t1 . '
		</li>') :
		'') .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_blocs @ ../plugins/noizetier/prive/squelettes/inclure/inc-nav_blocs.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/noizetier/prive/squelettes/inclure/inc-nav_blocs.html
// Temps de compilation total: 2.265 ms
//

function html_e6e3ae4babfc9fd2e3dce01a37e9d8b6($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
vide($Pile['vars'][$_zzz=(string)'blocs_decompte'] = interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'page', null),true) ? interdire_scripts(calculer_infos_page(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)"page", null),true)), "compteurs_noisette")):interdire_scripts(calculer_infos_objet(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)"objet", null),true)), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true)), "compteurs_noisette"))))) .
(($t1 = BOUCLE_blocshtml_e6e3ae4babfc9fd2e3dce01a37e9d8b6($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
<div class="onglets_simple second clearfix">
	<ul class="blocs">
' . $t1 . '
	</ul>
</div>
') :
		'') .
'
');

	return analyse_resultat_skel('html_e6e3ae4babfc9fd2e3dce01a37e9d8b6', $Cache, $page, '../plugins/noizetier/prive/squelettes/inclure/inc-nav_blocs.html');
}
?>
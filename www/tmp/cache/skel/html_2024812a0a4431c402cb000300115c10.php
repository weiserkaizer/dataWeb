<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/documents_lien.html
 * Date :      Thu, 26 Jul 2018 13:23:58 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:13 GMT
 * Boucles :   _AuMoinsUnDoc
 */ 

function BOUCLE_AuMoinsUnDochtml_2024812a0a4431c402cb000300115c10(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	$in[]= 'gif';
	$in[]= 'jpg';
	$in[]= 'png';
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_AuMoinsUnDoc';
		$command['from'] = array('documents' => 'spip_documents');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('documents.statut','publie,prop,prepa','publie',''), 
quete_condition_postdates('documents.date_publication',''), 
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), 
			array('=', 'documents.mode', "'document'"), sql_in('documents.extension',sql_quote($in),'NOT'));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/documents_lien.html','html_2024812a0a4431c402cb000300115c10','_AuMoinsUnDoc',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('soyezcreateurs:docatelecharger');
	$l2 = _T('medias:info_documents');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'<li class="menu_lien_documents">' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'template', null),true) == 'Documents') ? '<strong>':'')) .
'<a href="' .
interdire_scripts(generer_url_public('telecharger', '')) .
'" title="' .
attribut_html($l1) .
'">' .
$l2 .
'</a>' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'template', null),true) == 'Documents') ? '</strong>':'')) .
'</li>');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_AuMoinsUnDoc @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/documents_lien.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/documents_lien.html
// Temps de compilation total: 5.960 ms
//

function html_2024812a0a4431c402cb000300115c10($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_AuMoinsUnDochtml_2024812a0a4431c402cb000300115c10($Cache, $Pile, $doublons, $Numrows, $SP) .
'
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_2024812a0a4431c402cb000300115c10', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/documents_lien.html');
}
?>
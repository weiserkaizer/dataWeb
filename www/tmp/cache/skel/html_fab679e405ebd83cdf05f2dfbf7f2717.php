<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/cadre_outils_agenda.html
 * Date :      Thu, 26 Jul 2018 13:23:57 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:05 GMT
 * Boucles :   _AuMoinsUnEvenement
 */ 

function BOUCLE_AuMoinsUnEvenementhtml_fab679e405ebd83cdf05f2dfbf7f2717(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'evenements';
		$command['id'] = '_AuMoinsUnEvenement';
		$command['from'] = array('evenements' => 'spip_evenements');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
		$command['orderby'] = array();
		$command['where'] = 
			array(
			array('=', 'evenements.statut', "'publie'"));
		$command['join'] = array();
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/cadre_outils_agenda.html','html_fab679e405ebd83cdf05f2dfbf7f2717','_AuMoinsUnEvenement',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('soyezcreateurs:agenda');
	$l2 = _T('ecrire:bouton_fermer');
	$l3 = _T('ecrire:bouton_fermer');
	$l4 = _T('socialtags:noisette_action_recommand');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'	<li id="cadre_outil_miniagenda" class="call-js-modal"><a href="#miniagenda" title="' .
$l1 .
'" class="js-modal" data-modal-prefix-class="sombre" data-modal-content-id="miniagenda" data-modal-close-text="' .
$l2 .
'"
 data-modal-close-title="' .
$l2 .
'"><span class="icon icon-calendar icon-lg texte-blanc"></span><span class="hide">' .
$l4 .
'</span></a></li>');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_AuMoinsUnEvenement @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/cadre_outils_agenda.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/cadre_outils_agenda.html
// Temps de compilation total: 2.226 ms
//

function html_fab679e405ebd83cdf05f2dfbf7f2717($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = BOUCLE_AuMoinsUnEvenementhtml_fab679e405ebd83cdf05f2dfbf7f2717($Cache, $Pile, $doublons, $Numrows, $SP);

	return analyse_resultat_skel('html_fab679e405ebd83cdf05f2dfbf7f2717', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/header/cadre_outils_agenda.html');
}
?>
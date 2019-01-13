<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/sites_lien.html
 * Date :      Thu, 26 Jul 2018 13:23:58 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:13 GMT
 * Boucles :   _AuMoinsUnSite
 */ 

function BOUCLE_AuMoinsUnSitehtml_c26af5d7611fb9acc74c8e665f123aca(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'syndic';
		$command['id'] = '_AuMoinsUnSite';
		$command['from'] = array('syndic' => 'spip_syndic','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("syndic.id_syndic");
		$command['select'] = array("1");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('syndic.statut','publie,prop','publie',''), 
			array('NOT', 
			array('IN', 'syndic.id_syndic', 
			array('SELF', 'syndic.id_syndic', 
			array('=', 'L2.titre', "'ReseauxSociaux'")))));
		$command['join'] = array('L1' => array('syndic','id_objet','id_syndic','L1.objet='.sql_quote('site')), 'L2' => array('L1','id_mot'));
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
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/sites_lien.html','html_c26af5d7611fb9acc74c8e665f123aca','_AuMoinsUnSite',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('sites:icone_voir_sites_references');
	$l2 = _T('public|spip|ecrire:sites_web');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'<li class="menu_lien_sites">' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'template', null),true) == 'Sites') ? '<strong>':'')) .
'<a href="' .
interdire_scripts(generer_url_public('site', '')) .
'" title="' .
attribut_html($l1) .
'">' .
$l2 .
'</a>' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'template', null),true) == 'Sites') ? '</strong>':'')) .
'</li>');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_AuMoinsUnSite @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/sites_lien.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/sites_lien.html
// Temps de compilation total: 6.609 ms
//

function html_c26af5d7611fb9acc74c8e665f123aca($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_AuMoinsUnSitehtml_c26af5d7611fb9acc74c8e665f123aca($Cache, $Pile, $doublons, $Numrows, $SP) .
'
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_c26af5d7611fb9acc74c8e665f123aca', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/liensnav/sites_lien.html');
}
?>
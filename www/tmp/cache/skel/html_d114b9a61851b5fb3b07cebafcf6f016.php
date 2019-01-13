<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/datemajsite.html
 * Date :      Thu, 26 Jul 2018 13:23:58 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:14 GMT
 * Boucles :   _datemajsite
 */ 

function BOUCLE_datemajsitehtml_d114b9a61851b5fb3b07cebafcf6f016(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_datemajsite';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.date_modif",
		"articles.lang",
		"articles.titre");
		$command['orderby'] = array('articles.date_modif DESC');
		$command['join'] = array();
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.lang', sql_quote($GLOBALS['spip_lang'], '','varchar(10) NOT NULL DEFAULT \'\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/datemajsite.html','html_d114b9a61851b5fb3b07cebafcf6f016','_datemajsite',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
_T('soyezcreateurs:dernieremaj') .
' ' .
nom_jour(normaliser_date($Pile[$SP]['date_modif'])) .
' ' .
affdate(normaliser_date($Pile[$SP]['date_modif'])));
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_datemajsite @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/datemajsite.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/datemajsite.html
// Temps de compilation total: 2.541 ms
//

function html_d114b9a61851b5fb3b07cebafcf6f016($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div id="datemajsite' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'class', null),true)) .
'"><span>' .
BOUCLE_datemajsitehtml_d114b9a61851b5fb3b07cebafcf6f016($Cache, $Pile, $doublons, $Numrows, $SP) .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs/positionfluxrss','bottom',false):'') == 'header')) ?' ' :''))))!=='' ?
		($t1 . 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/liensnav/reseaux_sociaux') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/datemajsite.html\',\'html_d114b9a61851b5fb3b07cebafcf6f016\',\'\',1,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>') :
		'') .
'</span></div>' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_d114b9a61851b5fb3b07cebafcf6f016', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/datemajsite.html');
}
?>
<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer.html
 * Date :      Thu, 26 Jul 2018 13:23:57 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:12 GMT
 * Boucles :   _Mot_TypeRubrique, _TypeRubrique, _TheRub, _HasMenuHaut
 */ 

function BOUCLE_Mot_TypeRubriquehtml_a7ec08cb1eeb50322075eb5d04c6b496(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_Mot_TypeRubrique';
		$command['from'] = array('mots' => 'spip_mots','L1' => 'spip_mots_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("mots.titre",
		"L1.id_objet AS id_rubrique",
		"L1.id_objet AS id_article");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('mots','id_mot'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'mots.type', "'_TypeRubrique'"), 
			array('=', 'L1.id_objet', sql_quote($Pile[$SP]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'L1.objet', sql_quote('rubrique')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer.html','html_a7ec08cb1eeb50322075eb5d04c6b496','_Mot_TypeRubrique',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (($t1 = strval(((find_in_path((	'noisettes/footer/footer_typerubrique_' .
	interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
	'.html'))) ?' ' :'')))!=='' ?
		($t1 . (	'
' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'template', null),true) == 'Sommaire')) ?'' :' '))))!=='' ?
			($t2 . 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'noisettes/footer/footer_typerubrique_' .
			interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])))) . ', array_merge('.var_export($Pile[0],1).',array(\'id_rubrique\' => ' . argumenter_squelette($Pile[$SP]['id_rubrique']) . ',
	\'id_article\' => ' . argumenter_squelette($Pile[$SP]['id_article']) . ',
	\'rubriqueencours\' => ' . argumenter_squelette(@$Pile[0]['rubriqueencours']) . ',
	\'template\' => ' . argumenter_squelette(@$Pile[0]['template']) . ',
	\'secteurencours\' => ' . argumenter_squelette(@$Pile[0]['secteurencours']) . ',
	\'racinetype\' => ' . argumenter_squelette($Pile[$SP-1]['id_rubrique']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer.html\',\'html_a7ec08cb1eeb50322075eb5d04c6b496\',\'\',2,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>') :
			'') .
	'
')) :
		'');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_Mot_TypeRubrique @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_TypeRubriquehtml_a7ec08cb1eeb50322075eb5d04c6b496(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!($id_rubrique = intval($Pile[$SP]['id_rubrique'])))
		return '';
	include_spip('inc/rubriques');
	$hierarchie = calcul_hierarchie_in($id_rubrique,true);
	if (!$hierarchie) return "";
	
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_TypeRubrique';
		$command['from'] = array('rubriques' => 'spip_rubriques','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("rubriques.id_rubrique");
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.lang",
		"rubriques.titre");
		$command['join'] = array('L1' => array('rubriques','id_objet','id_rubrique','L1.objet='.sql_quote('rubrique')), 'L2' => array('L1','id_mot'));
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['orderby'] = array("FIELD(rubriques.id_rubrique, $hierarchie) DESC");
	$command['where'] = 
			array(
			array('=', 'L2.type', "'_TypeRubrique'"), 
			array('IN', 'rubriques.id_rubrique', "($hierarchie)"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer.html','html_a7ec08cb1eeb50322075eb5d04c6b496','_TypeRubrique',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= BOUCLE_Mot_TypeRubriquehtml_a7ec08cb1eeb50322075eb5d04c6b496($Cache, $Pile, $doublons, $Numrows, $SP);
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_TypeRubrique @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_TheRubhtml_a7ec08cb1eeb50322075eb5d04c6b496(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_TheRub';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.lang",
		"rubriques.titre");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_rubrique', sql_quote(@$Pile[0]['id_rubrique'], '','bigint(21) NOT NULL AUTO_INCREMENT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer.html','html_a7ec08cb1eeb50322075eb5d04c6b496','_TheRub',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
(($t1 = BOUCLE_TypeRubriquehtml_a7ec08cb1eeb50322075eb5d04c6b496($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'template', null),true) == 'Sommaire')) ?'' :' '))))!=='' ?
			($t2 . 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/footer/footer_modeedito') . ', array_merge('.var_export($Pile[0],1).',array(\'id_rubrique\' => ' . argumenter_squelette($Pile[$SP]['id_rubrique']) . ',
	\'id_article\' => ' . argumenter_squelette(@$Pile[0]['id_article']) . ',
	\'rubriqueencours\' => ' . argumenter_squelette(@$Pile[0]['rubriqueencours']) . ',
	\'template\' => ' . argumenter_squelette(@$Pile[0]['template']) . ',
	\'secteurencours\' => ' . argumenter_squelette(@$Pile[0]['secteurencours']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer.html\',\'html_a7ec08cb1eeb50322075eb5d04c6b496\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>') :
			'') .
	'
'))) .
'
');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_TheRub @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_HasMenuHauthtml_a7ec08cb1eeb50322075eb5d04c6b496(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_HasMenuHaut';
		$command['from'] = array('rubriques' => 'spip_rubriques','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("rubriques.id_rubrique");
		$command['select'] = array("0+rubriques.titre AS num");
		$command['orderby'] = array('num');
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'L2.titre', "'MenuHaut'"));
		$command['join'] = array('L1' => array('rubriques','id_objet','id_rubrique','L1.objet='.sql_quote('rubrique')), 'L2' => array('L1','id_mot'));
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
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer.html','html_a7ec08cb1eeb50322075eb5d04c6b496','_HasMenuHaut',18,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("SIDR", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	(($t2 = strval(timestamp(find_in_path('javascript/jquery.sidr.js'))))!=='' ?
			('<script src="' . $t2 . '" type="text/javascript"></script>') :
			'') .
	'
<script type="text/javascript">/* <![CDATA[ */
jQuery(document).ready(function() {
	jQuery("#responsive-menu-button").sidr({
	name: "sidr-main",
	source: "#menuhaut"
	});
});
/* ]]> */</script>')) :
		'') .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_HasMenuHaut @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer.html
// Temps de compilation total: 61.686 ms
//

function html_a7ec08cb1eeb50322075eb5d04c6b496($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = BOUCLE_TheRubhtml_a7ec08cb1eeb50322075eb5d04c6b496($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
' .
	vide($Pile['vars'][$_zzz=(string)'noisettefooter'] = 'footer_modeedito') .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'template', null),true) == 'Sommaire')) ?' ' :''))))!=='' ?
			($t2 . (	'
	' .
		(($t3 = strval(((find_in_path((	'noisettes/footer/footer_mode' .
			interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/mode_affichage','communiquant',false):'')) .
			'.html'))) ?' ' :'')))!=='' ?
				($t3 . (	'
			' .
			vide($Pile['vars'][$_zzz=(string)'noisettefooter'] = (	'footer_mode' .
				interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/mode_affichage','communiquant',false):'')))))) :
				'') .
		'
')) :
			'') .
	'
' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'noisettes/footer/' .
		table_valeur($Pile["vars"], (string)'noisettefooter', null))) . ', array_merge('.var_export($Pile[0],1).',array(\'id_rubrique\' => ' . argumenter_squelette(@$Pile[0]['id_rubrique']) . ',
	\'id_article\' => ' . argumenter_squelette(@$Pile[0]['id_article']) . ',
	\'rubriqueencours\' => ' . argumenter_squelette(@$Pile[0]['rubriqueencours']) . ',
	\'template\' => ' . argumenter_squelette(@$Pile[0]['template']) . ',
	\'secteurencours\' => ' . argumenter_squelette(@$Pile[0]['secteurencours']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer.html\',\'html_a7ec08cb1eeb50322075eb5d04c6b496\',\'\',9,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
'))) .
'
</div><!-- id="contenu" -->	
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/footer/footer_pied') . ', array_merge('.var_export($Pile[0],1).',array(\'id_rubrique\' => ' . argumenter_squelette(@$Pile[0]['id_rubrique']) . ',
	\'id_article\' => ' . argumenter_squelette(@$Pile[0]['id_article']) . ',
	\'rubriqueencours\' => ' . argumenter_squelette(@$Pile[0]['rubriqueencours']) . ',
	\'template\' => ' . argumenter_squelette(@$Pile[0]['template']) . ',
	\'secteurencours\' => ' . argumenter_squelette(@$Pile[0]['secteurencours']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer.html\',\'html_a7ec08cb1eeb50322075eb5d04c6b496\',\'\',16,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .
(($t1 = strval(produire_fond_statique( 'javascripts.js' , array(), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer.html','html_a7ec08cb1eeb50322075eb5d04c6b496','',17,$GLOBALS['spip_lang'])), _request('connect'))))!=='' ?
		('<script src="' . $t1 . '" type="text/javascript"></script>') :
		'') .
'
' .
BOUCLE_HasMenuHauthtml_a7ec08cb1eeb50322075eb5d04c6b496($Cache, $Pile, $doublons, $Numrows, $SP) .
'

' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_google/googleplusun','non',false):'') == 'oui')) ?' ' :''))))!=='' ?
		($t1 . (	'
<script type="text/javascript">
window.___gcfg = {lang: \'' .
	spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
	'\'};
  (function() {
    var po = document.createElement(\'script\'); po.type = \'text/javascript\'; po.async = true;
    po.src = \'https://apis.google.com/js/plusone.js\';
    var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(@$Pile[0]['insert_nav_cef'])))!=='' ?
		('<h2 class="nocontent offscreen">Catholique.fr</h2>' . $t1) :
		'') .
'
</body>
</html>
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_a7ec08cb1eeb50322075eb5d04c6b496', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/footer/footer.html');
}
?>
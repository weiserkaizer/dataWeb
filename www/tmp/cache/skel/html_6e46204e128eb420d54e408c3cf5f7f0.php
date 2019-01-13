<?php

/*
 * Squelette : ../plugins/noizetier/prive/squelettes/navigation/noizetier_page.html
 * Date :      Wed, 11 Jul 2018 07:46:22 GMT
 * Compile :   Mon, 07 Jan 2019 01:02:03 GMT
 * Boucles :   _si_page, _page_navigation
 */ 

function BOUCLE_si_pagehtml_6e46204e128eb420d54e408c3cf5f7f0(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'noizetier_pages';
		$command['id'] = '_si_page';
		$command['from'] = array('noizetier_pages' => 'spip_noizetier_pages');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("noizetier_pages.composition",
		"noizetier_pages.page",
		"noizetier_pages.est_virtuelle",
		"noizetier_pages.est_page_objet",
		"noizetier_pages.type");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'noizetier_pages.page', sql_quote(@$Pile[0]['page'], '','varchar(255) NOT NULL DEFAULT \'\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/noizetier/prive/squelettes/navigation/noizetier_page.html','html_6e46204e128eb420d54e408c3cf5f7f0','_si_page',4,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		' .
(($t1 = strval(interdire_scripts((((($zc=$Pile[$SP]['composition'])?($zc=='-'?'':$zc):compositions_determiner(objet_type('noizetier_pages'), $Pile[$SP]['page'], '', false))) ?' ' :''))))!=='' ?
		($t1 . (	'
			' .
	interdire_scripts((($Pile[$SP]['est_virtuelle'] == 'oui') ? vide($Pile['vars'][$_zzz=(string)'explication'] = 'noizetier:explication_composition_virtuelle'):vide($Pile['vars'][$_zzz=(string)'explication'] = 'noizetier:explication_composition'))) .
	'
		')) :
		'') .
'
		' .
(($t1 = strval(interdire_scripts((((($zc=$Pile[$SP]['composition'])?($zc=='-'?'':$zc):compositions_determiner(objet_type('noizetier_pages'), $Pile[$SP]['page'], '', false))) ?'' :' '))))!=='' ?
		($t1 . (	'
			' .
	interdire_scripts((($Pile[$SP]['est_page_objet'] == 'oui') ? vide($Pile['vars'][$_zzz=(string)'explication'] = 'noizetier:explication_page_objet'):vide($Pile['vars'][$_zzz=(string)'explication'] = 'noizetier:explication_page'))) .
	'
		')) :
		'') .
'
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/inclure/inc-infos_page') . ', array_merge('.var_export($Pile[0],1).',array(\'page\' => ' . argumenter_squelette(interdire_scripts($Pile[$SP]['page'])) . ',
	\'explication\' => ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'explication', null)) . ',
	\'type\' => ' . argumenter_squelette($Pile[$SP]['type']) . ',
	\'composition\' => ' . argumenter_squelette($Pile[$SP]['composition']) . ',
	\'est_virtuelle\' => ' . argumenter_squelette($Pile[$SP]['est_virtuelle']) . ',
	\'est_page_objet\' => ' . argumenter_squelette($Pile[$SP]['est_page_objet']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/noizetier/prive/squelettes/navigation/noizetier_page.html\',\'html_6e46204e128eb420d54e408c3cf5f7f0\',\'\',7,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_si_page @ ../plugins/noizetier/prive/squelettes/navigation/noizetier_page.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_page_navigationhtml_6e46204e128eb420d54e408c3cf5f7f0(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(((((entites_html(table_valeur(@$Pile[0], (string)'exec', null),true) == 'noizetier_page')) AND (interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'page', null),true)) OR (interdire_scripts((((@$Pile[0]['objet']) AND (@$Pile[0]['id_objet'])) ?' ' :'')))) ?' ' :'')))) ?' ' :''));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_page_navigation';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
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
		"CONDITION",
		$command,
		array('../plugins/noizetier/prive/squelettes/navigation/noizetier_page.html','html_6e46204e128eb420d54e408c3cf5f7f0','_page_navigation',2,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	
	' .
(($t1 = BOUCLE_si_pagehtml_6e46204e128eb420d54e408c3cf5f7f0($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
		' .
	vide($Pile['vars'][$_zzz=(string)'explication'] = 'noizetier:explication_objet') .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/inclure/inc-infos_page') . ', array_merge('.var_export($Pile[0],1).',array(\'id_objet\' => ' . argumenter_squelette(@$Pile[0]['id_objet']) . ',
	\'explication\' => ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'explication', null)) . ',
	\'type\' => ' . argumenter_squelette(interdire_scripts(@$Pile[0]['objet'])) . ',
	\'est_virtuelle\' => ' . argumenter_squelette('non') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/noizetier/prive/squelettes/navigation/noizetier_page.html\',\'html_6e46204e128eb420d54e408c3cf5f7f0\',\'\',25,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	'))) .
'

	
	' .
boite_ouvrir(_T('noizetier:noisettes_disponibles'), 'info noisettes_disponibles none') .
'
		<p>' .
_T('noizetier:explication_glisser_deposer') .
'</p>
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inclure/inc-liste_types_noisette') . ', array(\'page\' => ' . argumenter_squelette(@$Pile[0]['page']) . ',
	\'objet\' => ' . argumenter_squelette(@$Pile[0]['objet']) . ',
	\'id_objet\' => ' . argumenter_squelette(@$Pile[0]['id_objet']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/noizetier/prive/squelettes/navigation/noizetier_page.html\',\'html_6e46204e128eb420d54e408c3cf5f7f0\',\'\',36,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	' .
boite_fermer() .
'
	<br class="clear">
	<script type="text/javascript">/*<![CDATA[*/
		jQuery(\'.noisettes_disponibles\').show();
		jQuery(\'ul.liste-noisettes-disponibles li.noisette\').draggable({
			connectToSortable: \'ul.liste-noisettes-bloc\',
			containment: "ul.liste-noisettes-bloc",
			helper: \'clone\',
			revert: \'invalid\',
			cursor: \'move\',
			opacity: 0.5
		});
		// Position fixe lors du scroll
		noisettes_dispos_sticky = function(){
			var container = $(".noisettes_disponibles");
			var limite = container.offset().top;
			var largeur = container.width()+\'px\';
			$(window).scroll(function() {
				if($(this).scrollTop() > limite)
					container.addClass(\'is-stuck\').css({\'width\': largeur});
				if($(this).scrollTop() < limite)
					container.removeClass(\'is-stuck\').css({\'width\': \'auto\'});
			});
		}
//		noisettes_dispos_sticky();
	/*]]>*/</script>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_page_navigation @ ../plugins/noizetier/prive/squelettes/navigation/noizetier_page.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/noizetier/prive/squelettes/navigation/noizetier_page.html
// Temps de compilation total: 6.687 ms
//

function html_6e46204e128eb420d54e408c3cf5f7f0($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('configurerpage', 'noizetier', '', '', interdire_scripts(invalideur_session($Cache, (entites_html(table_valeur(@$Pile[0], (string)'page', null),true) ? invalideur_session($Cache, array('page' => interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'page', null),true))))):invalideur_session($Cache, array('objet' => interdire_scripts(invalideur_session($Cache, @$Pile[0]['objet'])), 'id_objet' => invalideur_session($Cache, @$Pile[0]['id_objet'])))))))?" ":""))) .
'
' .
(($t1 = BOUCLE_page_navigationhtml_6e46204e128eb420d54e408c3cf5f7f0($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
	' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'exec', null),true) == 'noisette_edit')) ?' ' :''))))!=='' ?
			($t2 . 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/navigation/noisette_edit') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/noizetier/prive/squelettes/navigation/noizetier_page.html\',\'html_6e46204e128eb420d54e408c3cf5f7f0\',\'\',67,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>') :
			'') .
	'
	' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'exec', null),true) == 'noisette_add')) ?' ' :''))))!=='' ?
			($t2 . 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/navigation/noisette_add') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/noizetier/prive/squelettes/navigation/noizetier_page.html\',\'html_6e46204e128eb420d54e408c3cf5f7f0\',\'\',68,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>') :
			'') .
	'
	' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'exec', null),true) == 'noizetier_page_edit')) ?' ' :''))))!=='' ?
			($t2 . 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/navigation/noizetier_page_edit') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/noizetier/prive/squelettes/navigation/noizetier_page.html\',\'html_6e46204e128eb420d54e408c3cf5f7f0\',\'\',69,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>') :
			'') .
	'
'))) .
'
');

	return analyse_resultat_skel('html_6e46204e128eb420d54e408c3cf5f7f0', $Cache, $page, '../plugins/noizetier/prive/squelettes/navigation/noizetier_page.html');
}
?>
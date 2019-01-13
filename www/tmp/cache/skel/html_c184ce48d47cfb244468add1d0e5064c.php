<?php

/*
 * Squelette : ../plugins/noizetier/prive/squelettes/contenu/noizetier_page.html
 * Date :      Thu, 26 Jul 2018 07:28:02 GMT
 * Compile :   Mon, 07 Jan 2019 01:02:04 GMT
 * Boucles :   _si_page, _page_contenu
 */ 

function BOUCLE_si_pagehtml_c184ce48d47cfb244468add1d0e5064c(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'noizetier_pages';
		$command['id'] = '_si_page';
		$command['from'] = array('noizetier_pages' => 'spip_noizetier_pages');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("noizetier_pages.page",
		"noizetier_pages.composition",
		"noizetier_pages.nom",
		"noizetier_pages.icon",
		"noizetier_pages.description");
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
		array('../plugins/noizetier/prive/squelettes/contenu/noizetier_page.html','html_c184ce48d47cfb244468add1d0e5064c','_si_page',3,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('noizetier:formulaire_modifier_composition');
	$l2 = _T('noizetier:formulaire_modifier_page');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
boite_ouvrir((	(($t2 = strval(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifierpage', 'noizetier', '', '', invalideur_session($Cache, array('page' => interdire_scripts(invalideur_session($Cache, $Pile[$SP]['page'])))))?" ":""))))!=='' ?
			($t2 . (	'
			' .
		filtre_icone_verticale_dist(parametre_url(parametre_url(generer_url_ecrire('noizetier_page_edit'),'edition','modifier'),'page',interdire_scripts($Pile[$SP]['page'])),interdire_scripts(((($zc=$Pile[$SP]['composition'])?($zc=='-'?'':$zc):compositions_determiner(objet_type('noizetier_pages'), $Pile[$SP]['page'], '', false)) ? $l1:$l2)),'page','edit','right ajax preload') .
		'
		')) :
			'') .
	'

		<h1>
			' .
	interdire_scripts(_T_ou_typo($Pile[$SP]['nom'])) .
	'
			' .
	interdire_scripts(filtre_balise_img_dist(chemin_image(interdire_scripts($Pile[$SP]['icon'])),'page','cadre-icone')) .
	'
		</h1>
	'), 'simple fiche_objet') .
'
		<br class="clear" />
		<div id="wysiwyg">
			' .
(($t1 = strval(interdire_scripts(_T_ou_typo($Pile[$SP]['description']))))!=='' ?
		((	'<div class="champ contenu_description' .
	(($t2 = strval(interdire_scripts((strlen(_T_ou_typo($Pile[$SP]['description'])) ? '':'vide'))))!=='' ?
			(' ' . $t2) :
			'') .
	'">
				<div dir=\'' .
	lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
	'\' class="texte">') . $t1 . '</div>
			</div>') :
		'') .
'
		</div>
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_si_page @ ../plugins/noizetier/prive/squelettes/contenu/noizetier_page.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_page_contenuhtml_c184ce48d47cfb244468add1d0e5064c(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(((((entites_html(table_valeur(@$Pile[0], (string)'exec', null),true) == 'noizetier_page')) AND (interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'page', null),true)) OR (interdire_scripts((((@$Pile[0]['objet']) AND (@$Pile[0]['id_objet'])) ?' ' :'')))) ?' ' :'')))) ?' ' :''));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_page_contenu';
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
		array('../plugins/noizetier/prive/squelettes/contenu/noizetier_page.html','html_c184ce48d47cfb244468add1d0e5064c','_page_contenu',2,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
(($t1 = BOUCLE_si_pagehtml_c184ce48d47cfb244468add1d0e5064c($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
	' .
	vide($Pile['vars'][$_zzz=(string)'informations'] = interdire_scripts(calculer_infos_objet(interdire_scripts(@$Pile[0]["objet"]), @$Pile[0]['id_objet'], ""))) .
	boite_ouvrir(interdire_scripts(filtre_balise_img_dist(chemin_image((	interdire_scripts(@$Pile[0]['objet']) .
			'-24.png')),interdire_scripts(@$Pile[0]['objet']),'cadre-icone')), 'simple fiche_objet') .
	'
		<h1><a' .
	(($t2 = strval(generer_url_entite(@$Pile[0]['id_objet'],interdire_scripts(@$Pile[0]['objet']))))!=='' ?
			(' href="' . $t2 . '"') :
			'') .
	'>' .
	table_valeur($Pile["vars"], (string)'informations/titre', null) .
	'</a></h1>
	'))) .
'
	' .
boite_fermer() .
'

	
	<br class="clear" />
	<h3>' .
_T('noizetier:menu_blocs') .
'</h3>
	' .
vide($Pile['vars'][$_zzz=(string)'blocs'] = interdire_scripts(table_valeur(calculer_infos_page(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)"page", null), interdire_scripts(@$Pile[0]["objet"])),true)), ""),'blocs'))) .
vide($Pile['vars'][$_zzz=(string)'bloc_affiche'] = interdire_scripts(((($a = entites_html(table_valeur(@$Pile[0], (string)'bloc', null),true)) OR (is_string($a) AND strlen($a))) ? $a : filtre_reset(table_valeur($Pile["vars"], (string)'blocs', null))))) .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/inclure/inc-nav_blocs') . ', array_merge('.var_export($Pile[0],1).',array(\'blocs\' => ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'blocs', null)) . ',
	\'bloc_affiche\' => ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'bloc_affiche', null)) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/noizetier/prive/squelettes/contenu/noizetier_page.html\',\'html_c184ce48d47cfb244468add1d0e5064c\',\'\',35,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

	
	<div class="ajax">
		' .
executer_balise_dynamique('FORMULAIRE_LISTER_NOISETTES_BLOC',
	array(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'page', null), array('objet' => interdire_scripts(@$Pile[0]['objet']), 'id_objet' => @$Pile[0]['id_objet'])),true)),table_valeur($Pile["vars"], (string)'bloc_affiche', null)),
	array('../plugins/noizetier/prive/squelettes/contenu/noizetier_page.html','html_c184ce48d47cfb244468add1d0e5064c','_page_contenu',42,$GLOBALS['spip_lang'])) .
'</div>

	' .
(((defined('_AJAX')?constant('_AJAX'):''))  ?
		(' ' . (	'
		<script type="text/javascript">/*<![CDATA[*/
			reloadExecPage(\'' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'exec', null),true)) .
	'\',\'#navigation,#chemin\');
		/*]]>*/</script>
	')) :
		'') .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_page_contenu @ ../plugins/noizetier/prive/squelettes/contenu/noizetier_page.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/noizetier/prive/squelettes/contenu/noizetier_page.html
// Temps de compilation total: 23.900 ms
//

function html_c184ce48d47cfb244468add1d0e5064c($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('configurerpage', 'noizetier', '', '', interdire_scripts(invalideur_session($Cache, (entites_html(table_valeur(@$Pile[0], (string)'page', null),true) ? invalideur_session($Cache, array('page' => interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'page', null),true))))):invalideur_session($Cache, array('objet' => interdire_scripts(invalideur_session($Cache, @$Pile[0]['objet'])), 'id_objet' => invalideur_session($Cache, @$Pile[0]['id_objet'])))))))?" ":""))) .
'
' .
(($t1 = BOUCLE_page_contenuhtml_c184ce48d47cfb244468add1d0e5064c($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
	' .
	(((table_valeur(@$Pile[0], (string)'exec', null) == 'noisette_edit'))  ?
			(' ' . recuperer_fond( 'prive/squelettes/contenu/noisette_edit' , array_merge($Pile[0],array('redirect' => '' ,
	'retourajax' => 'oui' )), array('compil'=>array('../plugins/noizetier/prive/squelettes/contenu/noizetier_page.html','html_c184ce48d47cfb244468add1d0e5064c','',51,$GLOBALS['spip_lang'])), _request('connect'))) :
			'') .
	'
	' .
	(((table_valeur(@$Pile[0], (string)'exec', null) == 'noisette_add'))  ?
			(' ' . recuperer_fond( 'prive/squelettes/contenu/noisette_add' , array_merge($Pile[0],array('redirect' => '' ,
	'retourajax' => 'oui' )), array('compil'=>array('../plugins/noizetier/prive/squelettes/contenu/noizetier_page.html','html_c184ce48d47cfb244468add1d0e5064c','',52,$GLOBALS['spip_lang'])), _request('connect'))) :
			'') .
	'
	' .
	(((table_valeur(@$Pile[0], (string)'exec', null) == 'noizetier_page_edit'))  ?
			(' ' . recuperer_fond( 'prive/squelettes/contenu/noizetier_page_edit' , array_merge($Pile[0],array('redirect' => '' ,
	'retourajax' => 'oui' )), array('compil'=>array('../plugins/noizetier/prive/squelettes/contenu/noizetier_page.html','html_c184ce48d47cfb244468add1d0e5064c','',53,$GLOBALS['spip_lang'])), _request('connect'))) :
			'') .
	'
	' .
	(!((((((((table_valeur(@$Pile[0], (string)'exec', null) == 'noisette_edit')) OR ((table_valeur(@$Pile[0], (string)'exec', null) == 'noisette_add'))) ?' ' :'')) OR ((table_valeur(@$Pile[0], (string)'exec', null) == 'noizetier_page_edit'))) ?' ' :''))  ?
			(' ' . sinon_interdire_acces('')) :
			'') .
	'
'))) .
'
');

	return analyse_resultat_skel('html_c184ce48d47cfb244468add1d0e5064c', $Cache, $page, '../plugins/noizetier/prive/squelettes/contenu/noizetier_page.html');
}
?>
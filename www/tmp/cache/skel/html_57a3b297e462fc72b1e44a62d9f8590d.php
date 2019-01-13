<?php

/*
 * Squelette : ../plugins-dist/svp/formulaires/inc-admin_plugin.html
 * Date :      Wed, 11 Jul 2018 07:43:38 GMT
 * Compile :   Tue, 31 Jul 2018 13:37:55 GMT
 * Boucles :   _plugins
 */ 

function BOUCLE_pluginshtml_57a3b297e462fc72b1e44a62d9f8590d(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['actif']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'constante', null),true))))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'paquets';
		$command['id'] = '_plugins';
		$command['from'] = array('paquets' => 'spip_paquets','L1' => 'spip_plugins');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['orderby'] = array('multi', 'paquets.prefixe', 'paquets.constante DESC', 'paquets.actif DESC');
		$command['join'] = array('L1' => array('paquets','id_plugin'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("".sql_multi('L1.nom', $GLOBALS['spip_lang'])."",
		"paquets.prefixe",
		"paquets.constante",
		"paquets.actif",
		"paquets.compatibilite_spip",
		"paquets.attente",
		"paquets.obsolete",
		"paquets.id_paquet",
		"paquets.maj_version",
		"L1.nom",
		"paquets.version",
		"paquets.etat",
		"L1.slogan",
		"paquets.description",
		"paquets.logo",
		"paquets.src_archive",
		"paquets.installe");
	$command['where'] = 
			array(
			array('=', 'paquets.id_depot', "0"), (!(is_array(@$Pile[0]['actif'])?count(@$Pile[0]['actif']):strlen(@$Pile[0]['actif'])) ? '' : ((is_array(@$Pile[0]['actif'])) ? sql_in('paquets.actif',sql_quote($in)) : 
			array('=', 'paquets.actif', sql_quote(@$Pile[0]['actif'], '','varchar(3) NOT NULL DEFAULT \'non\'')))), (@$Pile[0]['constante'] ? sql_in('paquets.constante',sql_quote($in1)) : ''));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/svp/formulaires/inc-admin_plugin.html','html_57a3b297e462fc72b1e44a62d9f8590d','_plugins',7,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_plugins']['compteur_boucle'] = 0;
	
	$l1 = _T('svp:info_plugin_obsolete');
	$l2 = _T('svp:bouton_desactiver');
	$l3 = _T('svp:bouton_desinstaller');
	$l4 = _T('svp:bouton_activer');
	$l5 = _T('svp:bouton_up');
	$l6 = _T('svp:bouton_activer');
	$l7 = _T('svp:bouton_supprimer');
	$l8 = _T('svp:info_verrouille');
	$l9 = _T('svp:plugin_info_actif');
	$l10 = _T('svp:plugin_info_actif');
	$l11 = _T('svp:plugin_info_up');
	$l12 = _T('svp:info_plugin_obsolete');
	$l13 = _T('svp:info_plugin_incompatible');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_plugins']['compteur_boucle']++;
		$t0 .= (
'
		' .
vide($Pile['vars'][$_zzz=(string)'incompatible'] = interdire_scripts(((plugin_version_compatible($Pile[$SP]['compatibilite_spip'],table_valeur($Pile["vars"], (string)'vspip', null),'spip')) ?'' :' '))) .
vide($Pile['vars'][$_zzz=(string)'verrou'] = interdire_scripts(((($Pile[$SP]['constante'] == '_DIR_PLUGINS_DIST')) ?' ' :''))) .
vide($Pile['vars'][$_zzz=(string)'actif'] = interdire_scripts(((($Pile[$SP]['actif'] == 'oui')) ?' ' :''))) .
vide($Pile['vars'][$_zzz=(string)'attente'] = interdire_scripts(((($Pile[$SP]['attente'] == 'oui')) ?' ' :''))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'incompatible', null)))!=='' ?
		($t1 . vide($Pile['vars'][$_zzz=(string)'incompatibles'] = ' ')) :
		'') .
'
		' .
((((((((((((((table_valeur($Pile["vars"], (string)'incompatible', null)) ?'' :' ')) OR (interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'afficher_incompatibles', null), ''),true)))) ?' ' :'')) OR (table_valeur($Pile["vars"], (string)'verrou', null))) ?' ' :'')) OR (table_valeur($Pile["vars"], (string)'actif', null))) ?' ' :'')) OR (table_valeur($Pile["vars"], (string)'attente', null)))  ?
		(' ' . (	'
		' .
	vide($Pile['vars'][$_zzz=(string)'obsolete'] = interdire_scripts(((($Pile[$SP]['obsolete'] == 'oui')) ?' ' :''))) .
	vide($Pile['vars'][$_zzz=(string)'details'] = interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'id_paquet', null), ''),true) == $Pile[$SP]['id_paquet'])) ?' ' :''))) .
	'<li class="item' .
	(($t2 = strval((table_valeur($Pile["vars"], (string)'actif', null) ? 'actif':'inactif')))!=='' ?
			(' ' . $t2) :
			'') .
	((((((((table_valeur($Pile["vars"], (string)'obsolete', null)) OR (table_valeur($Pile["vars"], (string)'attente', null))) ?' ' :'')) OR (table_valeur($Pile["vars"], (string)'incompatible', null))) ?' ' :''))  ?
			(' ' . ' disabled') :
			'') .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'incompatible', null)))!=='' ?
			($t2 . ' incompatible') :
			'') .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'verrou', null)))!=='' ?
			($t2 . ' verrou') :
			'') .
	(($t2 = strval(interdire_scripts((((((((denormaliser_version($Pile[$SP]['maj_version'])) ?' ' :'')) AND (((table_valeur($Pile["vars"], (string)'autoriser_plugins_ajouter', null)) ?' ' :''))) ?' ' :'')) ?' ' :''))))!=='' ?
			($t2 . 'up') :
			'') .
	'"' .
	(($t2 = strval(interdire_scripts(strtolower($Pile[$SP]['prefixe']))))!=='' ?
			('
			id="' . $t2 . (	'-' .
		$Numrows['_plugins']['compteur_boucle'] .
		'"')) :
			'') .
	(($t2 = strval($Pile[$SP]['id_paquet']))!=='' ?
			(' data-id_paquet="' . $t2 . '"') :
			'') .
	'>
			' .
	((((((((table_valeur($Pile["vars"], (string)'incompatible', null)) ?'' :' ')) OR (table_valeur($Pile["vars"], (string)'attente', null))) ?' ' :'')) AND (((table_valeur($Pile["vars"], (string)'verrou', null)) ?'' :' ')))  ?
			(' ' . (	'
				' .
		(!(table_valeur($Pile["vars"], (string)'obsolete', null))  ?
				(' ' . (	'
				<div class="check">
					<input type="checkbox" class="checkbox select_plugin" name="ids_paquet[]" value="' .
			$Pile[$SP]['id_paquet'] .
			'"
						' .
			(($t4 = strval(in_any($Pile[$SP]['id_paquet'],interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'ids_paquet', null),true)))))!=='' ?
					($t4 . ' checked="checked"') :
					'') .
			' />
				</div>')) :
				'') .
		'
				
				' .
		(((table_valeur($Pile["vars"], (string)'obsolete', null)) AND (((table_valeur($Pile["vars"], (string)'incompatible', null)) ?'' :' ')))  ?
				(' ' . (	'
					' .
			(($t4 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('svp/autoriser_activer_paquets_obsoletes',null,false):'') == 'oui')) ?' ' :''))))!=='' ?
					($t4 . (	'
						<div class="check">
							<input type="checkbox" class="checkbox select_plugin" name="ids_paquet[]" value="' .
				$Pile[$SP]['id_paquet'] .
				'"
								' .
				(($t5 = strval(in_any($Pile[$SP]['id_paquet'],interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'ids_paquet', null),true)))))!=='' ?
						($t5 . ' checked="checked"') :
						'') .
				' />
						</div>
					')) :
					'') .
			'
				')) :
				'') .
		'
			')) :
			'') .
	'

			
			<div class="resume">
				<h3 class="nom"><a href="' .
	parametre_url(self(),'id_paquet',(table_valeur($Pile["vars"], (string)'details', null) ? '':$Pile[$SP]['id_paquet'])) .
	'" rel="info">' .
	interdire_scripts(svp_importer_charset(extraire_multi(supprimer_numero(typo($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0])))) .
	'</a></h3>
				<span class="version">' .
	interdire_scripts(denormaliser_version($Pile[$SP]['version'])) .
	'</span>
				<span class="etat">' .
	(($t2 = strval(interdire_scripts($Pile[$SP]['etat'])))!=='' ?
			(' - ' . $t2) :
			'') .
	'</span>
				' .
	vide($Pile['vars'][$_zzz=(string)'erreur'] = (($t3 = strval(table_valeur($Pile["vars"], (string)'obsolete', null)))!=='' ?
				('<span class="svp_message">' . $t3 . (	$l1 .
			'</span> ')) :
				'')) .
	'
				' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'attente', null)))!=='' ?
			($t2 . (	' ' .
		vide($Pile['vars'][$_zzz=(string)'erreur'] = concat(table_valeur($Pile["vars"], (string)'erreur', null),table_valeur($Pile["vars"], (string)'erreur_attente', null))) .
		'   ')) :
			'') .
	'
				' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'incompatible', null)))!=='' ?
			($t2 . vide($Pile['vars'][$_zzz=(string)'erreur'] = concat(table_valeur($Pile["vars"], (string)'erreur', null),table_valeur($Pile["vars"], (string)'erreur_incompatible', null)))) :
			'') .
	'
				' .
	vide($Pile['vars'][$_zzz=(string)'slogan'] = trim(ltrim(table_valeur($Pile["vars"], (string)'erreur', null),'-'))) .
	'
				' .
	(!(table_valeur($Pile["vars"], (string)'slogan', null))  ?
			(' ' . vide($Pile['vars'][$_zzz=(string)'slogan'] = interdire_scripts(typo(extraire_multi($Pile[$SP]['slogan']))))) :
			'') .
	'
				' .
	(!(table_valeur($Pile["vars"], (string)'slogan', null))  ?
			(' ' . vide($Pile['vars'][$_zzz=(string)'slogan'] = interdire_scripts(filtre_reset(filtre_explode_dist(PtoBR(propre(extraire_multi(propre($Pile[$SP]['description'], $connect, $Pile[0])))),'<br />'))))) :
			'') .
	'
				<div class="short">' .
	svp_importer_charset(couper(table_valeur($Pile["vars"], (string)'slogan', null),'80')) .
	'</div>
				' .
	(($t2 = strval(interdire_scripts(((($Pile[$SP]['logo']) AND (((table_valeur($Pile["vars"], (string)'incompatible', null)) ?'' :' '))) ?' ' :''))))!=='' ?
			($t2 . (	'<div class="icon">
					' .
		filtre_balise_img_dist(concat((defined(interdire_scripts($Pile[$SP]['constante']))?constant(interdire_scripts($Pile[$SP]['constante'])):''),(	interdire_scripts($Pile[$SP]['src_archive']) .
			'/' .
			interdire_scripts($Pile[$SP]['logo'])))) .
		'
				</div>')) :
			'') .
	'
			</div>

			<div class="actions">
			
			' .
	(((((((table_valeur($Pile["vars"], (string)'verrou', null)) ?'' :' ')) AND (((table_valeur($Pile["vars"], (string)'incompatible', null)) ?'' :' '))) ?' ' :''))  ?
			(' ' . (	'
				' .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'actif', null)))!=='' ?
				($t3 . (	'
					<input type="submit" name="' .
			filtre_svp_nom_action($Pile[$SP]['id_paquet'],'off') .
			'" class="submit" value="' .
			$l2 .
			'" />
					' .
			(($t4 = strval(interdire_scripts((((((($Pile[$SP]['installe'] == 'oui')) AND (table_valeur($Pile["vars"], (string)'autoriser_webmestre', null))) ?' ' :'')) ?' ' :''))))!=='' ?
					($t4 . (	'
						<input type="submit" name="' .
				filtre_svp_nom_action($Pile[$SP]['id_paquet'],'stop') .
				'" class="submit" value="' .
				$l3 .
				'" />
					')) :
					'') .
			'
				')) :
				'') .
		'
			')) :
			'') .
	'
			' .
	((((((((((table_valeur($Pile["vars"], (string)'obsolete', null)) ?'' :' ')) AND (((table_valeur($Pile["vars"], (string)'verrou', null)) ?'' :' '))) ?' ' :'')) AND (((table_valeur($Pile["vars"], (string)'incompatible', null)) ?'' :' '))) ?' ' :''))  ?
			(' ' . (	'
				' .
		(((((table_valeur($Pile["vars"], (string)'actif', null)) ?'' :' ')) OR (table_valeur($Pile["vars"], (string)'attente', null)))  ?
				(' ' . (	'
					' .
			(((((((table_valeur($Pile["vars"], (string)'actif', null)) ?'' :' ')) OR ((((table_valeur($Pile["vars"], (string)'attente', null)) AND (((table_valeur($Pile["vars"], (string)'autoriser_plugins_ajouter', null)) ?' ' :''))) ?' ' :''))) ?' ' :''))  ?
					(' ' . (	'
					<input type="submit" name="' .
				filtre_svp_nom_action($Pile[$SP]['id_paquet'],'on') .
				'" class="submit" value="' .
				$l4 .
				'" />')) :
					'') .
			'
				')) :
				'') .
		'
			')) :
			'') .
	'
			' .
	(((((((table_valeur($Pile["vars"], (string)'obsolete', null)) ?'' :' ')) AND (((table_valeur($Pile["vars"], (string)'verrou', null)) ?'' :' '))) ?' ' :''))  ?
			(' ' . (	'
				' .
		(($t3 = strval(interdire_scripts((((((((denormaliser_version($Pile[$SP]['maj_version'])) ?' ' :'')) AND (((table_valeur($Pile["vars"], (string)'autoriser_plugins_ajouter', null)) ?' ' :''))) ?' ' :'')) ?' ' :''))))!=='' ?
				($t3 . (	'
					<input type="submit" name="' .
			filtre_svp_nom_action($Pile[$SP]['id_paquet'],'up') .
			'" class="submit" value="' .
			$l5 .
			'" />
				')) :
				'') .
		'
			')) :
			'') .
	'
			
			' .
	((((((((table_valeur($Pile["vars"], (string)'obsolete', null)) AND (((table_valeur($Pile["vars"], (string)'verrou', null)) ?'' :' '))) ?' ' :'')) AND (((table_valeur($Pile["vars"], (string)'incompatible', null)) ?'' :' '))) ?' ' :''))  ?
			(' ' . (	'
				' .
		(((((table_valeur($Pile["vars"], (string)'actif', null)) ?'' :' ')) AND (interdire_scripts(((include_spip('inc/config')?lire_config('svp/autoriser_activer_paquets_obsoletes',null,false):'') == 'oui'))))  ?
				(' ' . (	'
					<input type="submit" name="' .
			filtre_svp_nom_action($Pile[$SP]['id_paquet'],'on') .
			'" class="submit" value="' .
			$l4 .
			'" />
				')) :
				'') .
		'
			')) :
			'') .
	'
			' .
	(((((table_valeur($Pile["vars"], (string)'actif', null)) ?'' :' ')) AND (interdire_scripts((couper($Pile[$SP]['src_archive'],'5') == 'auto/'))))  ?
			(' ' . (	'
				<input type="submit" name="' .
		filtre_svp_nom_action($Pile[$SP]['id_paquet'],'kill') .
		'" class="submit" value="' .
		$l7 .
		'" />
			')) :
			'') .
	'
			' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'verrou', null)))!=='' ?
			($t2 . (	'
				<span class="svp_message">' .
		$l8 .
		'</span>
			')) :
			'') .
	'
			</div>
			' .
	(((((table_valeur($Pile["vars"], (string)'actif', null)) AND (((table_valeur($Pile["vars"], (string)'attente', null)) ?'' :' '))) ?' ' :''))  ?
			(' ' . (	' ' .
		vide($Pile['vars'][$_zzz=(string)'prefixe'] = interdire_scripts(strtolower($Pile[$SP]['prefixe']))) .
		interdire_scripts(inserer_attribut(filtre_balise_img_dist(chemin_image('ok-16.png'),$l9,'picto_actif'),'title',$l9)) .
		'
				' .
		recuperer_fond( 'prive/squelettes/inclure/cfg' , array('script' => (	'configurer_' .
			table_valeur($Pile["vars"], (string)'prefixe', null)) ,
	'nom' => interdire_scripts(supprimer_numero(typo($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0])) ), array('compil'=>array('../plugins-dist/svp/formulaires/inc-admin_plugin.html','html_57a3b297e462fc72b1e44a62d9f8590d','_plugins',54,$GLOBALS['spip_lang'])), _request('connect')) .
		'
			')) :
			'') .
	'
			' .
	(table_valeur($Pile["vars"], (string)'verrou', null) ? table_valeur($Pile["vars"], (string)'image_verrou', null):'') .
	'
			' .
	(($t2 = strval(interdire_scripts((((((((denormaliser_version($Pile[$SP]['maj_version'])) ?' ' :'')) AND (((table_valeur($Pile["vars"], (string)'autoriser_plugins_ajouter', null)) ?' ' :''))) ?' ' :'')) ?' ' :''))))!=='' ?
			($t2 . (	'
			' .
		interdire_scripts(inserer_attribut(filtre_balise_img_dist(chemin_image('update-16.png'),$l11,'picto_up'),'title',_T('svp:plugin_info_up', array('version' => interdire_scripts(denormaliser_version($Pile[$SP]['maj_version'])))))) .
		'
			')) :
			'') .
	'
			' .
	((((((((table_valeur($Pile["vars"], (string)'obsolete', null)) OR (table_valeur($Pile["vars"], (string)'incompatible', null))) ?' ' :'')) OR (table_valeur($Pile["vars"], (string)'attente', null))) ?' ' :''))  ?
			(' ' . (	'
				' .
		vide($Pile['vars'][$_zzz=(string)'image'] = (table_valeur($Pile["vars"], (string)'attente', null) ? 'erreur-16.png':'plugin-dis-16.png')) .
		'
				' .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'obsolete', null)))!=='' ?
				($t3 . (	' ' .
			vide($Pile['vars'][$_zzz=(string)'err'] = $l1))) :
				'') .
		'
				' .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'incompatible', null)))!=='' ?
				($t3 . (	' ' .
			vide($Pile['vars'][$_zzz=(string)'err'] = $l13))) :
				'') .
		'
				' .
		interdire_scripts(inserer_attribut(filtre_balise_img_dist(chemin_image(table_valeur($Pile["vars"], (string)'image', null)),table_valeur($Pile["vars"], (string)'err', null),'picto_err'),'title',table_valeur($Pile["vars"], (string)'err', null))) .
		'
			')) :
			'') .
	'
			' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'details', null)))!=='' ?
			($t2 . (	'
				' .
		recuperer_fond( 'prive/squelettes/inclure/plugin_detail' , array_merge($Pile[0],array('id_paquet' => $Pile[$SP]['id_paquet'] )), array('ajax' => ($v=( (	'detail_' .
			$Pile[$SP]['id_paquet']) ))?$v:true,'compil'=>array('../plugins-dist/svp/formulaires/inc-admin_plugin.html','html_57a3b297e462fc72b1e44a62d9f8590d','_plugins',56,$GLOBALS['spip_lang'])), _request('connect')) .
		'
			')) :
			'') .
	'
			')) :
		'') .
'
		</li>
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_plugins @ ../plugins-dist/svp/formulaires/inc-admin_plugin.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/svp/formulaires/inc-admin_plugin.html
// Temps de compilation total: 42.341 ms
//

function html_57a3b297e462fc72b1e44a62d9f8590d($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][$_zzz=(string)'vspip'] = interdire_scripts(eval('return '.'$GLOBALS[\'spip_version_branche\']'.';'))) .
vide($Pile['vars'][$_zzz=(string)'autoriser_plugins_ajouter'] = invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('plugins_ajouter')?" ":""))) .
vide($Pile['vars'][$_zzz=(string)'autoriser_webmestre'] = invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('webmestre')?" ":""))) .
vide($Pile['vars'][$_zzz=(string)'image_verrou'] = interdire_scripts(inserer_attribut(filtre_balise_img_dist(chemin_image('cadenas-16.png'),_T('svp:plugin_info_verrouille'),'picto_verrou'),'title',_T('svp:plugin_info_verrouille')))) .
'
' .
vide($Pile['vars'][$_zzz=(string)'erreur_attente'] = (($t2 = strval((table_valeur($Pile["vars"], (string)'autoriser_plugins_ajouter', null) ? _T('svp:info_plugin_attente_dependance'):_T('svp:info_plugin_attente_dependance_interdit'))))!=='' ?
			('- <span class="svp_message">' . $t2 . '</span> ') :
			'')) .
'
' .
vide($Pile['vars'][$_zzz=(string)'erreur_incompatible'] = (	'- <span class="svp_message">' .
	_T('svp:info_plugin_incompatible') .
	'</span>')) .
'
' .
(($t1 = BOUCLE_pluginshtml_57a3b297e462fc72b1e44a62d9f8590d($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
' .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'incompatibles', null)))!=='' ?
				($t3 . (	'
	' .
			(($t4 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'afficher_incompatibles', null), ''),true)) ?'' :' '))))!=='' ?
					($t4 . (	'
	<a id="afficher_incompatibles" href="' .
				parametre_url(self(),'afficher_incompatibles','1') .
				'">' .
				_T('svp:afficher_les_plugins_incompatibles') .
				'</a>
	')) :
					'') .
			'
	' .
			(($t4 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'afficher_incompatibles', null), ''),true)) ?' ' :''))))!=='' ?
					($t4 . (	'
	<a id="afficher_incompatibles" href="' .
				parametre_url(self(),'afficher_incompatibles','') .
				'">' .
				_T('svp:cacher_les_plugins_incompatibles') .
				'</a>
	')) :
					'') .
			'
')) :
				'') .
		'
<div class="liste plugins" id="liste_plugins">
	<ul class="liste-items">
	') . $t1 . '
	</ul>
</div>
') :
		'') .
'

<script type="text/javascript">
/*<![CDATA[*/
	(function($){
		$(\'#liste_plugins\').on(\'click\',\'li.item a[rel=info]\',function(){
			var li = $(this).parents(\'li\').eq(0);
			var id_paquet = li.data(\'id_paquet\');
			// premier clic, on charge le contenu du bloc details en ajax
			if (!$(\'div.details\',li).html()) {
				$(this).ajaxReload({args: {\'id_paquet\':id_paquet}}, {callback:function(){
					li.addClass(\'on\');
				}});
			}
			// clics suivants, masquer ou afficher les details
			if ($(\'div.details\',li).toggle().is(\':visible\'))
				li.addClass(\'on\');
			else
				li.removeClass(\'on\');
			return false;
		});
		$(\'.plugins li.item input.checkbox\').change(function(){
			$(this).parents(\'form\').eq(0).find(\'.boutons\').slideDown();
		});
	})(jQuery);
/*]]>*/
</script>
');

	return analyse_resultat_skel('html_57a3b297e462fc72b1e44a62d9f8590d', $Cache, $page, '../plugins-dist/svp/formulaires/inc-admin_plugin.html');
}
?>
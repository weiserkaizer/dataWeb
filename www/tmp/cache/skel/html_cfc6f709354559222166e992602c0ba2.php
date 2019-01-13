<?php

/*
 * Squelette : ../plugins/noizetier/formulaires/inclure/inc-resume_noisette.html
 * Date :      Wed, 11 Jul 2018 07:46:24 GMT
 * Compile :   Mon, 07 Jan 2019 01:02:05 GMT
 * Boucles :   _type_noisette, _noisette
 */ 

function BOUCLE_type_noisettehtml_cfc6f709354559222166e992602c0ba2(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'types_noisettes';
		$command['id'] = '_type_noisette';
		$command['from'] = array('types_noisettes' => 'spip_types_noisettes');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("types_noisettes.nom",
		"types_noisettes.icon",
		"types_noisettes.actif",
		"types_noisettes.necessite");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'types_noisettes.type_noisette', sql_quote($Pile[$SP]['type_noisette'], '','varchar(255) NOT NULL DEFAULT \'\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/noizetier/formulaires/inclure/inc-resume_noisette.html','html_cfc6f709354559222166e992602c0ba2','_type_noisette',5,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		' .
vide($Pile['vars'][$_zzz=(string)'type_noisette_nom'] = interdire_scripts(_T_ou_typo(_T_ou_typo($Pile[$SP]['nom'])))) .
vide($Pile['vars'][$_zzz=(string)'type_noisette_icone'] = interdire_scripts($Pile[$SP]['icon'])) .
vide($Pile['vars'][$_zzz=(string)'type_noisette_actif'] = interdire_scripts($Pile[$SP]['actif'])) .
vide($Pile['vars'][$_zzz=(string)'type_noisette_necessite'] = $Pile[$SP]['necessite']) .
vide($Pile['vars'][$_zzz=(string)'type_noisette_disponible'] = 'oui'));
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_type_noisette @ ../plugins/noizetier/formulaires/inclure/inc-resume_noisette.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_noisettehtml_cfc6f709354559222166e992602c0ba2(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'noisettes';
		$command['id'] = '_noisette';
		$command['from'] = array('noisettes' => 'spip_noisettes');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("noisettes.type_noisette",
		"noisettes.id_noisette",
		"noisettes.id_conteneur",
		"noisettes.rang_noisette",
		"noisettes.parametres",
		"noisettes.plugin",
		"noisettes.est_conteneur");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'noisettes.id_noisette', sql_quote(@$Pile[0]['id_noisette'], '','bigint(21) NOT NULL AUTO_INCREMENT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/noizetier/formulaires/inclure/inc-resume_noisette.html','html_cfc6f709354559222166e992602c0ba2','_noisette',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('noizetier:label_menu_ouvrir');
	$l2 = _T('noizetier:formulaire_modifier_noisette');
	$l3 = _T('noizetier:formulaire_supprimer_noisette');
	$l4 = _T('noizetier:formulaire_etendre_noisette');
	$l5 = _T('noizetier:formulaire_deplacer_haut');
	$l6 = _T('noizetier:formulaire_deplacer_bas');
	$l7 = _T('noizetier:formulaire_ajouter_noisette_conteneur');
	$l8 = _T('noizetier:formulaire_supprimer_noisettes_noisette');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
<div' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'classe', null),true))))!=='' ?
		(' class="' . $t1 . '"') :
		'') .
'>
	<div class="resume">
	' .
vide($Pile['vars'][$_zzz=(string)'type_noisette_disponible'] = '') .
BOUCLE_type_noisettehtml_cfc6f709354559222166e992602c0ba2($Cache, $Pile, $doublons, $Numrows, $SP) .
'
	' .
((table_valeur($Pile["vars"], (string)'type_noisette_disponible', null))  ?
		(' ' . (	'
		' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'type_noisette_nom', null)))!=='' ?
			('<div class="nom">' . $t2 . '</div>') :
			'') .
	'
		
		<div class="icone">
			' .
	interdire_scripts(filtre_balise_img_dist(extraire_attribut(filtrer('image_graver', filtrer('image_reduire',chemin_image(table_valeur($Pile["vars"], (string)'type_noisette_icone', null)),'24')),'src'))) .
	'
		</div>
		' .
	calculer_preview_noisette(
		$Pile[$SP]['plugin'], 
		array_merge(array(
		'id_noisette' => $Pile[$SP]["id_noisette"],
		'id_conteneur' => $Pile[$SP]['id_conteneur'],
		'rang_noisette' => $Pile[$SP]['rang_noisette'],
		'type_noisette' => $Pile[$SP]['type_noisette'],
	), unserialize($Pile[$SP]['parametres'])), 
		table_valeur($Pile["vars"], (string)"type_noisette_actif", null),
		table_valeur($Pile["vars"], (string)"type_noisette_necessite", null)) .
	'
	')) :
		'') .
'
	' .
(!(table_valeur($Pile["vars"], (string)'type_noisette_disponible', null))  ?
		(' ' . (	'
		' .
	boite_ouvrir('', 'error') .
	_T('noizetier:erreur_type_noisette_indisponible', array('type_noisette' => interdire_scripts($Pile[$SP]['type_noisette']))) .
	'
		' .
	boite_fermer() .
	'
	')) :
		'') .
'
	</div>

	<ul class="edition">
		<li>
			<a class="bouton-edition"' .
(($t1 = strval($Pile[$SP]['id_noisette']))!=='' ?
		(' href="#bouton-' . $t1 . '"') :
		'') .
' title="' .
$l1 .
'">
				' .
(($t1 = strval(interdire_scripts(chemin_image('menu-24.png'))))!=='' ?
		('<img height="24" width="24" src="' . $t1 . '" alt="" />') :
		'') .
'
			</a>
			<ul class="menu-edition">
			' .
((table_valeur($Pile["vars"], (string)'type_noisette_disponible', null))  ?
		(' ' . (	'
				' .
	(($t2 = strval(parametre_url(generer_url_ecrire('noisette_edit'),'id_noisette',$Pile[$SP]['id_noisette'])))!=='' ?
			('<li>
					<a href="' . $t2 . (	'">
						' .
		$l2 .
		'
					</a>
				</li>')) :
			'') .
	'
			')) :
		'') .
'
				' .
(($t1 = strval(invalideur_session($Cache, generer_action_auteur('supprimer_noisette',invalideur_session($Cache, $Pile[$SP]['id_noisette']),(	interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'url_page', null),true))) .
	'#bloc-' .
	interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'bloc', null),true))))))))!=='' ?
		('<li>
					<a href="' . $t1 . (	'">
						' .
	$l3 .
	'
					</a>
				</li>')) :
		'') .
'
				' .
(($t1 = strval(parametre_url(parametre_url(generer_url_ecrire('noisette_copy'),'id_noisette',$Pile[$SP]['id_noisette']),'bloc',interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'bloc', null),true)))))!=='' ?
		('<li>
					<a href="' . $t1 . (	'">
						' .
	$l4 .
	'
					</a>
				</li>')) :
		'') .
'
			' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'nb_noisettes', null),true) > '1')) ?' ' :''))))!=='' ?
		($t1 . (	'
				' .
	(($t2 = strval(invalideur_session($Cache, generer_action_auteur('deplacer_noisette',(($t3 = strval(invalideur_session($Cache, $Pile[$SP]['id_noisette'])))!=='' ?
				('haut:' . $t3 . (	':' .
			interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'nb_noisettes', null),true))))) :
				''),interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'url_page', null),true)))))))!=='' ?
			('<li class="groupe">
					<a href="' . $t2 . (	'">
						' .
		$l5 .
		'
					</a>
				</li>')) :
			'') .
	'
				' .
	(($t2 = strval(invalideur_session($Cache, generer_action_auteur('deplacer_noisette',(($t3 = strval(invalideur_session($Cache, $Pile[$SP]['id_noisette'])))!=='' ?
				('bas:' . $t3 . (	':' .
			interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'nb_noisettes', null),true))))) :
				''),interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'url_page', null),true)))))))!=='' ?
			('<li>
					<a href="' . $t2 . (	'">
						' .
		$l6 .
		'
					</a>
				</li>')) :
			'') .
	'
			')) :
		'') .
'
			' .
(($t1 = strval(interdire_scripts((((((($Pile[$SP]['est_conteneur'] == 'oui')) AND (table_valeur($Pile["vars"], (string)'type_noisette_disponible', null))) ?' ' :'')) ?' ' :''))))!=='' ?
		($t1 . (	'
				' .
	vide($Pile['vars'][$_zzz=(string)'conteneur'] = interdire_scripts(calculer_identifiant_conteneur("noizetier", array("type_noisette" => interdire_scripts($Pile[$SP]["type_noisette"]), "id_noisette" => $Pile[$SP]["id_noisette"]), ""))) .
	(($t2 = strval(interdire_scripts(parametre_url(parametre_url(parametre_url(entites_html(table_valeur(@$Pile[0], (string)'url_add', null),true),'type_noisette',interdire_scripts($Pile[$SP]['type_noisette'])),'id_noisette',$Pile[$SP]['id_noisette']),'profondeur',interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'profondeur', null),true))))))!=='' ?
			('<li class="groupe">
					<a href="' . $t2 . (	'">
						' .
		$l7 .
		'
					</a>
				</li>')) :
			'') .
	'
				' .
	(($t2 = strval(invalideur_session($Cache, generer_action_auteur('vider_conteneur',invalideur_session($Cache, table_valeur($Pile["vars"], (string)'conteneur', null)),(	interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'url_page', null),true))) .
		'#bloc-' .
		interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'bloc', null),true))))))))!=='' ?
			('<li>
					<a href="' . $t2 . (	'">
						' .
		$l8 .
		'
					</a>
				</li>')) :
			'') .
	'
			')) :
		'') .
'
			</ul>
		</li>
	</ul>
</div>
<input type="hidden" name="ordre[]" value="' .
$Pile[$SP]['id_noisette'] .
'" />
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_noisette @ ../plugins/noizetier/formulaires/inclure/inc-resume_noisette.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/noizetier/formulaires/inclure/inc-resume_noisette.html
// Temps de compilation total: 8.587 ms
//

function html_cfc6f709354559222166e992602c0ba2($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_noisettehtml_cfc6f709354559222166e992602c0ba2($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_cfc6f709354559222166e992602c0ba2', $Cache, $page, '../plugins/noizetier/formulaires/inclure/inc-resume_noisette.html');
}
?>
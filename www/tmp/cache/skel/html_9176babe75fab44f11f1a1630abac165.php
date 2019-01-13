<?php

/*
 * Squelette : ../plugins/noizetier/formulaires/lister_noisettes_bloc.html
 * Date :      Wed, 11 Jul 2018 07:46:24 GMT
 * Compile :   Mon, 07 Jan 2019 01:02:05 GMT
 * Boucles :   _noisettes_petits_enfants, _noisettes_enfants, _noisettes
 */ 

function BOUCLE_noisettes_petits_enfantshtml_9176babe75fab44f11f1a1630abac165(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$save_numrows = (isset($Numrows['_noisettes_enfants']) ? $Numrows['_noisettes_enfants'] : array());
	$t0 = (($t1 = BOUCLE_noisettes_enfantshtml_9176babe75fab44f11f1a1630abac165($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
			<ul class="liste-noisettes-conteneur">
			' . $t1 . '
			</ul>
			') :
		'');
	$Numrows['_noisettes_enfants'] = ($save_numrows);
	return $t0;
}


function BOUCLE_noisettes_enfantshtml_9176babe75fab44f11f1a1630abac165(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'noisettes';
		$command['id'] = '_noisettes_enfants';
		$command['from'] = array('noisettes' => 'spip_noisettes');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("noisettes.rang_noisette",
		"noisettes.id_noisette",
		"noisettes.id_conteneur",
		"noisettes.bloc",
		"noisettes.type_noisette");
		$command['orderby'] = array('noisettes.rang_noisette');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'noisettes.plugin', "'noizetier'"), 
			array('=', 'noisettes.id_conteneur', sql_quote(table_valeur($Pile["vars"], (string)'conteneur', null), '', 'varchar(255) NOT NULL DEFAULT \'\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/noizetier/formulaires/lister_noisettes_bloc.html','html_9176babe75fab44f11f1a1630abac165','_noisettes_enfants',40,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_noisettes_enfants']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
				' .
vide($Pile['vars'][$_zzz=(string)'profondeur'] = plus(table_valeur($Pile["vars"], (string)'profondeur', null),'1')) .
'<li class="editer item noisette" id="noisette-' .
$Pile[$SP]['id_noisette'] .
'">
					' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inclure/inc-resume_noisette') . ', array(\'id_noisette\' => ' . argumenter_squelette($Pile[$SP]['id_noisette']) . ',
	\'id_conteneur\' => ' . argumenter_squelette($Pile[$SP]['id_conteneur']) . ',
	\'rang_noisette\' => ' . argumenter_squelette($Pile[$SP]['rang_noisette']) . ',
	\'nb_noisettes\' => ' . argumenter_squelette($Numrows['_noisettes_enfants']['total']) . ',
	\'classe\' => ' . argumenter_squelette((	'conteneur-' .
	table_valeur($Pile["vars"], (string)'profondeur', null))) . ',
	\'profondeur\' => ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'profondeur', null)) . ',
	\'url_page\' => ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'self', null)) . ',
	\'url_add\' => ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'url_add', null)) . ',
	\'bloc\' => ' . argumenter_squelette($Pile[$SP]['bloc']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/noizetier/formulaires/lister_noisettes_bloc.html\',\'html_9176babe75fab44f11f1a1630abac165\',\'\',45,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
					' .
vide($Pile['vars'][$_zzz=(string)'conteneur'] = interdire_scripts(calculer_identifiant_conteneur("noizetier", array("type_noisette" => interdire_scripts($Pile[$SP]["type_noisette"]), "id_noisette" => $Pile[$SP]["id_noisette"]), ""))) .
'</li>
				' .
BOUCLE_noisettes_petits_enfantshtml_9176babe75fab44f11f1a1630abac165($Cache, $Pile, $doublons, $Numrows, $SP) .
'
				' .
vide($Pile['vars'][$_zzz=(string)'profondeur'] = moins(table_valeur($Pile["vars"], (string)'profondeur', null),'1')));
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_noisettes_enfants @ ../plugins/noizetier/formulaires/lister_noisettes_bloc.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_noisetteshtml_9176babe75fab44f11f1a1630abac165(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['id_conteneur']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'noisettes';
		$command['id'] = '_noisettes';
		$command['from'] = array('noisettes' => 'spip_noisettes');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("noisettes.rang_noisette",
		"noisettes.id_noisette",
		"noisettes.id_conteneur",
		"noisettes.bloc",
		"noisettes.type_noisette");
		$command['orderby'] = array('noisettes.rang_noisette');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'noisettes.plugin', "'noizetier'"), (!(is_array(@$Pile[0]['id_conteneur'])?count(@$Pile[0]['id_conteneur']):strlen(@$Pile[0]['id_conteneur'])) ? '' : ((is_array(@$Pile[0]['id_conteneur'])) ? sql_in('noisettes.id_conteneur',sql_quote($in)) : 
			array('=', 'noisettes.id_conteneur', sql_quote(@$Pile[0]['id_conteneur'], '','varchar(255) NOT NULL DEFAULT \'\'')))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/noizetier/formulaires/lister_noisettes_bloc.html','html_9176babe75fab44f11f1a1630abac165','_noisettes',23,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_noisettes']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
			' .
vide($Pile['vars'][$_zzz=(string)'profondeur'] = '0') .
'<li class="editer item noisette" id="noisette-' .
$Pile[$SP]['id_noisette'] .
'">
				' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inclure/inc-resume_noisette') . ', array(\'id_noisette\' => ' . argumenter_squelette($Pile[$SP]['id_noisette']) . ',
	\'id_conteneur\' => ' . argumenter_squelette($Pile[$SP]['id_conteneur']) . ',
	\'rang_noisette\' => ' . argumenter_squelette($Pile[$SP]['rang_noisette']) . ',
	\'nb_noisettes\' => ' . argumenter_squelette($Numrows['_noisettes']['total']) . ',
	\'profondeur\' => ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'profondeur', null)) . ',
	\'url_page\' => ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'self', null)) . ',
	\'url_add\' => ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'url_add', null)) . ',
	\'bloc\' => ' . argumenter_squelette($Pile[$SP]['bloc']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/noizetier/formulaires/lister_noisettes_bloc.html\',\'html_9176babe75fab44f11f1a1630abac165\',\'\',28,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
				' .
vide($Pile['vars'][$_zzz=(string)'conteneur'] = interdire_scripts(calculer_identifiant_conteneur("noizetier", array("type_noisette" => interdire_scripts($Pile[$SP]["type_noisette"]), "id_noisette" => $Pile[$SP]["id_noisette"]), ""))) .
'</li>

			' .
(($t1 = BOUCLE_noisettes_enfantshtml_9176babe75fab44f11f1a1630abac165($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
			<ul class="liste-noisettes-conteneur">
			' . $t1 . '
			</ul>
			') :
		'') .
'
		');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_noisettes @ ../plugins/noizetier/formulaires/lister_noisettes_bloc.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/noizetier/formulaires/lister_noisettes_bloc.html
// Temps de compilation total: 14.185 ms
//

function html_9176babe75fab44f11f1a1630abac165($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
vide($Pile['vars'][$_zzz=(string)'self'] = parametre_url(self(),'objet',interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)))) .
vide($Pile['vars'][$_zzz=(string)'self'] = parametre_url(table_valeur($Pile["vars"], (string)'self', null),'id_objet',interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true)))) .
vide($Pile['vars'][$_zzz=(string)'self'] = parametre_url(table_valeur($Pile["vars"], (string)'self', null),'page',interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'page', null),true)))) .
vide($Pile['vars'][$_zzz=(string)'self'] = parametre_url(table_valeur($Pile["vars"], (string)'self', null),'bloc',interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'bloc', null),true)))) .
'<form method="post" action="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
'">
	
	' .
	'<div>' .
	form_hidden(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(!empty($Pile[0]['_hidden']) ? @$Pile[0]['_hidden'] : '') .
	'</div><input type="hidden" name="conteneur_id" value="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_conteneur', null),true)) .
'" />

	' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_erreur', null))))!=='' ?
		(boite_ouvrir('', 'error') . $t1 . boite_fermer()) :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_ok', null))))!=='' ?
		(boite_ouvrir('', 'success') . $t1 . boite_fermer()) :
		'') .
'

	' .
interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'page', null),true) ? vide($Pile['vars'][$_zzz=(string)'url_add'] = generer_url_ecrire('noisette_add',(	'page=' .
			interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'page', null),true)) .
			'&bloc=' .
			interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'bloc', null),true))))):vide($Pile['vars'][$_zzz=(string)'url_add'] = generer_url_ecrire('noisette_add',(	'objet=' .
			interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)) .
			'&id_objet=' .
			interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true)) .
			'&bloc=' .
			interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'bloc', null),true))))))) .
'

	' .
vide($Pile['vars'][$_zzz=(string)'infos_bloc'] = interdire_scripts(calculer_infos_bloc(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)"bloc", null),true)), ""))) .
'<a name="bloc-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'bloc', null),true)) .
'"></a>
	' .
boite_ouvrir(table_valeur($Pile["vars"], (string)'infos_bloc/nom', null), 'simple', 'titrem') .
'
		' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'infos_bloc/description', null)))!=='' ?
		('<p>' . $t1 . '</p>') :
		'') .
'
		' .
(($t1 = BOUCLE_noisetteshtml_9176babe75fab44f11f1a1630abac165($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
		<ul class="editer-groupe liste-items liste-noisettes liste-noisettes-bloc">
		' . $t1 . (	'
			<input type="hidden" name="nb_noisettes" value="' .
		$Numrows['_noisettes']['total'] .
		'" />
		</ul>
		' .
		invalideur_session($Cache, filtre_icone_verticale_dist(generer_action_auteur('vider_conteneur',interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'id_conteneur', null),true))),invalideur_session($Cache, table_valeur($Pile["vars"], (string)'self', null))),_T('noizetier:formulaire_supprimer_noisettes_bloc'),'noizetier-24','del',invalideur_session($Cache, lang_dir(@$Pile[0]['lang'], 'left','right')))) .
		'
		')) :
		((	'
		<ul class="editer-groupe liste-items liste-noisettes liste-noisettes-bloc">
			<li class="editer item">
				' .
	boite_ouvrir('', 'notice') .
	_T('noizetier:bloc_sans_noisette') .
	boite_fermer() .
	'
			</li>
			<input type="hidden" name="nb_noisettes" value="0" />
		</ul>
		'))) .
'
		' .
filtre_icone_verticale_dist(table_valeur($Pile["vars"], (string)'url_add', null),_T('noizetier:formulaire_ajouter_noisette_bloc'),'noisette','add','right preload') .
'
	' .
boite_fermer() .
'

	
	<!--extra-->
</form>
<script type="text/javascript">
/*<![CDATA[*/
	' .
'
	// jQuery(\'ul.liste-noisettes-bloc\').sortable({
	// 	items: \'li.noisette\',
	// 	axis: \'y\',
	// 	opacity: 0.5,
	// 	connectWith: \'ul.liste-noisettes-bloc\',
	// 	forcePlaceholderSize: true,
	// 	cursor: \'move\',
	// 	update: function(event, ui) {
	// 		form = $(this).closest(\'form\');
	// 		form.submit();
	// 	}
	// });

	' .
'
	$(function() {
		function afficherMenu (bouton) {
			$(bouton).parents(\'ul\').children(\'li\').children(\'ul\').addClass(\'visible\');
		}

		function masquerMenu (bouton) {
			$(bouton).parents(\'ul\').children(\'li\').children(\'ul\').removeClass(\'visible\');
		}

		function toggleMenu (bouton) {
			$(bouton).parents(\'ul\').children(\'li\').children(\'ul\').toggleClass(\'visible\');
		}

		$(\'a.bouton-edition\')
			// .focusin(
			// 	function() {
			// 		afficherMenu(this);
			// 	}
			// )
			// .focusout(
			// 	function() {
			// 		masquerMenu(this);
			// 	}
			// )
			// .hover(
			// 	function() {
			// 		afficherMenu(this);
			// 	},
			// 	function() {
			// 		masquerMenu(this);
			// 	}
			// )
			.click(
				function(event) {
					event.preventDefault();
					toggleMenu(this);
				}
			);
	});
/*]]>*/
</script>
');

	return analyse_resultat_skel('html_9176babe75fab44f11f1a1630abac165', $Cache, $page, '../plugins/noizetier/formulaires/lister_noisettes_bloc.html');
}
?>
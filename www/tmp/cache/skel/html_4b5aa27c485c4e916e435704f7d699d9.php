<?php

/*
 * Squelette : ../plugins/auto/savecfg/v3.0.7/formulaires/gerer_savecfg.html
 * Date :      Fri, 20 Jul 2018 07:20:16 GMT
 * Compile :   Tue, 31 Jul 2018 13:39:13 GMT
 * Boucles :   _savecfg
 */ 

function BOUCLE_savecfghtml_4b5aa27c485c4e916e435704f7d699d9(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'savecfg';
		$command['id'] = '_savecfg';
		$command['from'] = array('savecfg' => 'spip_savecfg');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("savecfg.titre",
		"savecfg.id_savecfg");
		$command['orderby'] = array('savecfg.titre');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'savecfg.fond', sql_quote(table_valeur($Pile["vars"], (string)'fond', null), '', 'text NOT NULL')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/savecfg/v3.0.7/formulaires/gerer_savecfg.html','html_4b5aa27c485c4e916e435704f7d699d9','_savecfg',2,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
						<option value="' .
$Pile[$SP]['id_savecfg'] .
'"' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'fond_id', null),true) == $Pile[$SP]['id_savecfg'])) ?' ' :''))))!=='' ?
		($t1 . 'selected=\'selected\'') :
		'') .
'>' .
interdire_scripts(supprimer_tags(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) .
'</option>
					');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_savecfg @ ../plugins/auto/savecfg/v3.0.7/formulaires/gerer_savecfg.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/savecfg/v3.0.7/formulaires/gerer_savecfg.html
// Temps de compilation total: 14.629 ms
//

function html_4b5aa27c485c4e916e435704f7d699d9($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][$_zzz=(string)'fond'] = match(self(),'(cfg=)(\\w+?)','2')) .
(($t1 = BOUCLE_savecfghtml_4b5aa27c485c4e916e435704f7d699d9($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<div class="formulaire_spip formulaire_savecfg formulaire_' .
		interdire_scripts(@$Pile[0]['form']) .
		'">
	<h3 class="titrem">' .
		_T('savecfg:gerer_restauration') .
		'</h3>
	' .
		(($t3 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_ok', null))))!=='' ?
				('<p class="reponse_formulaire reponse_formulaire_ok">' . $t3 . '</p>') :
				'') .
		'
	' .
		(($t3 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_erreur', null))))!=='' ?
				('<p class="reponse_formulaire reponse_formulaire_erreur">' . $t3 . '</p>') :
				'') .
		'
	<form method="post" action="' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
		'">
		<div>
			' .
			'<div>' .
	form_hidden(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(!empty($Pile[0]['_hidden']) ? @$Pile[0]['_hidden'] : '') .
	'</div><' .
		saisie_balise_structure_formulaire('ul') .
		' class="editer-groupe">
				<' .
		saisie_balise_structure_formulaire('li') .
		' class="editer">
					<select name="fond_id">
						<option value="none"' .
		(($t3 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'fond_id', null),true) == 'none')) ?' ' :''))))!=='' ?
				($t3 . 'selected=\'selected\'') :
				'') .
		'>&nbsp;</option>
					') . $t1 . (	'
					</select>
				</' .
		saisie_balise_structure_formulaire('li') .
		'>
			</' .
		saisie_balise_structure_formulaire('ul') .
		'>
			<p class="boutons">
				<input type="submit" name="_restaurer_" value="' .
		_T('savecfg:restaurer') .
		'" />
				<input type="submit" name="_supprimer_" value="Supprimer" />
			</p>
		</div>
	</form>
</div>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_4b5aa27c485c4e916e435704f7d699d9', $Cache, $page, '../plugins/auto/savecfg/v3.0.7/formulaires/gerer_savecfg.html');
}
?>
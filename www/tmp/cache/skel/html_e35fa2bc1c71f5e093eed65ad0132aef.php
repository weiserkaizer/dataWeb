<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/agenda/miniagenda_global.html
 * Date :      Thu, 26 Jul 2018 13:23:57 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:14 GMT
 * Boucles :   _DatePassee, _DateFuture, _ArticleAssocie, _evenement, _Evenements
 */ 

function BOUCLE_DatePasseehtml_e35fa2bc1c71f5e093eed65ad0132aef(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = (table_valeur($Pile["vars"], (string)'currentmonth', null) < table_valeur($Pile["vars"], (string)'date_th', null));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_DatePassee';
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
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/agenda/miniagenda_global.html','html_e35fa2bc1c71f5e093eed65ad0132aef','_DatePassee',10,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('public|spip|ecrire:precedent');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		' .
(($t1 = strval(parametre_url(self(),'mini_date_ev',Agenda_moisdecal(table_valeur($Pile["vars"], (string)'date', null),'-1','Y-m-d'))))!=='' ?
		('<a href="' . $t1 . (	'" title="' .
	ucfirst($l1) .
	'" class=\'ajax\' rel="nofollow">&#171;</a>')) :
		'') .
'
		');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_DatePassee @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/agenda/miniagenda_global.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_DateFuturehtml_e35fa2bc1c71f5e093eed65ad0132aef(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'evenements';
		$command['id'] = '_DateFuture';
		$command['from'] = array('evenements' => 'spip_evenements');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('evenements.statut','!','publie',''), 
			array('>=', 'evenements.date_fin', sql_quote(affdate(Agenda_moisdecal(table_valeur($Pile["vars"], (string)'date', null),'1','Y-m-d'),'Y-m-01'), '', 'datetime NOT NULL DEFAULT \'0000-00-00 00:00:00\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/agenda/miniagenda_global.html','html_e35fa2bc1c71f5e093eed65ad0132aef','_DateFuture',15,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('public|spip|ecrire:suivant');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		' .
(($t1 = strval(parametre_url(self(),'mini_date_ev',Agenda_moisdecal(table_valeur($Pile["vars"], (string)'date', null),'1','Y-m-d'))))!=='' ?
		('<a href="' . $t1 . (	'" title="' .
	ucfirst($l1) .
	'" class=\'ajax\' rel="nofollow">&#187;</a>')) :
		'') .
'
		');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_DateFuture @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/agenda/miniagenda_global.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_ArticleAssociehtml_e35fa2bc1c71f5e093eed65ad0132aef(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_ArticleAssocie';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.titre",
		"articles.descriptif",
		"articles.id_article",
		"articles.lang");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_article', sql_quote($Pile[$SP]['id_article'], '','bigint(21) NOT NULL AUTO_INCREMENT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/agenda/miniagenda_global.html','html_e35fa2bc1c71f5e093eed65ad0132aef','_ArticleAssocie',32,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
				' .
interdire_scripts(sc_Agenda_memo_full($Pile[$SP-1]['date_debut'],interdire_scripts($Pile[$SP-1]['date_fin']),interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])),interdire_scripts(propre($Pile[$SP]['descriptif'], $connect, $Pile[0])),interdire_scripts(expanser_liens(typo($Pile[$SP-1]['lieu'], "TYPO", $connect, $Pile[0]))),$Pile[$SP]['id_article'],interdire_scripts($Pile[$SP-1]['horaire']))) .
'
			');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_ArticleAssocie @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/agenda/miniagenda_global.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_evenementhtml_e35fa2bc1c71f5e093eed65ad0132aef(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'evenements';
		$command['id'] = '_evenement';
		$command['from'] = array('evenements' => 'spip_evenements');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("evenements.id_article",
		"evenements.date_debut",
		"evenements.date_fin",
		"evenements.lieu",
		"evenements.horaire");
		$command['orderby'] = array('evenements.date_debut');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('>', 'evenements.date_debut', sql_quote(sc_DateAdd(affdate(table_valeur($Pile["vars"], (string)'date', null),'Y-m-01'),'-6'), '', 'datetime NOT NULL DEFAULT \'0000-00-00 00:00:00\'')), 
			array('<', 'evenements.date_debut', sql_quote(sc_DateAdd(affdate(table_valeur($Pile["vars"], (string)'date', null),'Y-m-01'),'35'), '', 'datetime NOT NULL DEFAULT \'0000-00-00 00:00:00\'')), 
			array('=', 'evenements.statut', "'publie'"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/agenda/miniagenda_global.html','html_e35fa2bc1c71f5e093eed65ad0132aef','_evenement',31,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
			' .
BOUCLE_ArticleAssociehtml_e35fa2bc1c71f5e093eed65ad0132aef($Cache, $Pile, $doublons, $Numrows, $SP) .
'
			');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_evenement @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/agenda/miniagenda_global.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_Evenementshtml_e35fa2bc1c71f5e093eed65ad0132aef(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'evenements';
		$command['id'] = '_Evenements';
		$command['from'] = array('evenements' => 'spip_evenements');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("evenements.titre");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('evenements.statut','!','publie',''));
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
		array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/agenda/miniagenda_global.html','html_e35fa2bc1c71f5e093eed65ad0132aef','_Evenements',5,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
<div class="miniagenda">
	<h2>' .
_T('soyezcreateurs:agenda') .
'</h2>
	<table class="agenda">
		<caption>
		' .
BOUCLE_DatePasseehtml_e35fa2bc1c71f5e093eed65ad0132aef($Cache, $Pile, $doublons, $Numrows, $SP) .
'
		' .
ucfirst(nom_mois(table_valeur($Pile["vars"], (string)'date', null))) .
'
		' .
annee(table_valeur($Pile["vars"], (string)'date', null)) .
'
		' .
BOUCLE_DateFuturehtml_e35fa2bc1c71f5e093eed65ad0132aef($Cache, $Pile, $doublons, $Numrows, $SP) .
'
		</caption>
		<thead>
			<tr>
				<th class="agendahead" scope="col"><abbr title="' .
ucfirst(_T('public|spip|ecrire:date_jour_2')) .
'">' .
strtoupper(spip_substr(_T('public|spip|ecrire:date_jour_2'),'0','1')) .
'</abbr></th>
				<th class="agendahead" scope="col"><abbr title="' .
ucfirst(_T('public|spip|ecrire:date_jour_3')) .
'">' .
strtoupper(spip_substr(_T('public|spip|ecrire:date_jour_3'),'0','1')) .
'</abbr></th>
				<th class="agendahead" scope="col"><abbr title="' .
ucfirst(_T('public|spip|ecrire:date_jour_4')) .
'">' .
strtoupper(spip_substr(_T('public|spip|ecrire:date_jour_4'),'0','1')) .
'</abbr></th>
				<th class="agendahead" scope="col"><abbr title="' .
ucfirst(_T('public|spip|ecrire:date_jour_5')) .
'">' .
strtoupper(spip_substr(_T('public|spip|ecrire:date_jour_5'),'0','1')) .
'</abbr></th>
				<th class="agendahead" scope="col"><abbr title="' .
ucfirst(_T('public|spip|ecrire:date_jour_6')) .
'">' .
strtoupper(spip_substr(_T('public|spip|ecrire:date_jour_6'),'0','1')) .
'</abbr></th>
				<th class="agendahead" scope="col"><abbr title="' .
ucfirst(_T('public|spip|ecrire:date_jour_7')) .
'">' .
strtoupper(spip_substr(_T('public|spip|ecrire:date_jour_7'),'0','1')) .
'</abbr></th>
				<th class="agendahead" scope="col"><abbr title="' .
ucfirst(_T('public|spip|ecrire:date_jour_1')) .
'">' .
strtoupper(spip_substr(_T('public|spip|ecrire:date_jour_1'),'0','1')) .
'</abbr></th>
			</tr>
		</thead>
		<tbody>
			' .
BOUCLE_evenementhtml_e35fa2bc1c71f5e093eed65ad0132aef($Cache, $Pile, $doublons, $Numrows, $SP) .
'
			' .
sc_agenda_mini(table_valeur($Pile["vars"], (string)'date', null)) .
'
		</tbody>
	</table>
	' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("propevent", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . (	'
	<a href="' .
	interdire_scripts(generer_url_public('proposer_evenement', '')) .
	'" title="' .
	_T('soyezcreateurs:agenda_proposer_evenement_title') .
	'" 	class="lien_proposer_evenement">' .
	_T('soyezcreateurs:agenda_proposer_evenement') .
	'</a>')) :
		'') .
'
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/agenda/miniagenda_liste_prochains') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/soyezcreateurs/v4.3.16/noisettes/agenda/miniagenda_global.html\',\'html_e35fa2bc1c71f5e093eed65ad0132aef\',\'\',45,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs/positionfluxrss','bottom',false):'') == 'bottom')) ?' ' :''))))!=='' ?
		($t1 . (	'<div class="centrer_div rss_agenda">
		<a href="' .
	interdire_scripts(url_absolue(parametre_url(generer_url_public('backendagenda', ''),'id_rubrique',@$Pile[0]['id_secteur']))) .
	'">
			<img src="' .
	find_in_path('images/fairytale_date_rss_24.png') .
	'" alt="' .
	_T('soyezcreateurs:syndiquer_agenda') .
	'&nbsp;: ' .
	interdire_scripts(attribut_html(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) .
	'" title="' .
	_T('soyezcreateurs:syndiquer_agenda') .
	'&nbsp;: ' .
	interdire_scripts(attribut_html(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) .
	'" width="52" height="24" />
		</a>
	</div>')) :
		'') .
'
</div><!-- class="miniagenda" -->
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_Evenements @ plugins/auto/soyezcreateurs/v4.3.16/noisettes/agenda/miniagenda_global.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/agenda/miniagenda_global.html
// Temps de compilation total: 143.983 ms
//

function html_e35fa2bc1c71f5e093eed65ad0132aef($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header("X-Spip-Cache: 900"); ?'.'>' .
vide($Pile['vars'][$_zzz=(string)'currentmonth'] = interdire_scripts(affdate(entites_html(table_valeur(@$Pile[0], (string)'date', null),true),'Y-m-01'))) .
vide($Pile['vars'][$_zzz=(string)'date'] = interdire_scripts(concat(affdate(((($a = entites_html(table_valeur(@$Pile[0], (string)'mini_date_ev', null),true)) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'date', null),true))),'Y-m-01'),' 00:00:00'))) .
vide($Pile['vars'][$_zzz=(string)'date_th'] = interdire_scripts(affdate(((($a = entites_html(table_valeur(@$Pile[0], (string)'mini_date_ev', null),true)) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'date', null),true))),'Y-m-01'))) .
BOUCLE_Evenementshtml_e35fa2bc1c71f5e093eed65ad0132aef($Cache, $Pile, $doublons, $Numrows, $SP) .
'
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_e35fa2bc1c71f5e093eed65ad0132aef', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/agenda/miniagenda_global.html');
}
?>
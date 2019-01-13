<?php

/*
 * Squelette : ../plugins-dist/revisions/prive/objets/liste/versions.html
 * Date :      Wed, 11 Jul 2018 07:43:07 GMT
 * Compile :   Wed, 01 Aug 2018 05:48:31 GMT
 * Boucles :   _auteur, _liste_rev
 */ 

function BOUCLE_auteurhtml_8f533f826c9782c03a70fd1266935b35(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = is_numeric($Pile[$SP]['id_auteur']);

	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_auteur';
		$command['from'] = array('auteurs' => 'spip_auteurs');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("auteurs.id_auteur",
		"auteurs.nom");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('auteurs.statut','!5poubelle','!5poubelle',''), 
			array('=', 'auteurs.id_auteur', sql_quote($Pile[$SP]['id_auteur'], '','bigint(21) NOT NULL AUTO_INCREMENT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/revisions/prive/objets/liste/versions.html','html_8f533f826c9782c03a70fd1266935b35','_auteur',22,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
vide($Pile['vars'][$_zzz=(string)'td_auteur'] = (	'<a href="' .
	generer_url_entite($Pile[$SP]['id_auteur'],'auteur') .
	'">' .
	interdire_scripts(supprimer_numero(typo($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0])) .
	'</a>')) .
'
		');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_auteur @ ../plugins-dist/revisions/prive/objets/liste/versions.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_liste_revhtml_8f533f826c9782c03a70fd1266935b35(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['id_auteur']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (@$Pile[0]['id_objet']))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	$in2 = array();
	if (!(is_array($a = (@$Pile[0]['objet']))))
		$in2[]= $a;
	else $in2 = array_merge($in2, $a);
	$senstri = '';
	$tri = (($t=(isset($Pile[0]['tri'.'_liste_rev']))?$Pile[0]['tri'.'_liste_rev']:((strncmp('_liste_rev','session',7)==0 AND session_get('tri'.'_liste_rev'))?session_get('tri'.'_liste_rev'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true))))?tri_protege_champ($t):'');
	if ($tri){
		$senstri = ((intval($t=(isset($Pile[0]['sens'.'_liste_rev']))?$Pile[0]['sens'.'_liste_rev']:((strncmp('_liste_rev','session',7)==0 AND session_get('sens'.'_liste_rev'))?session_get('sens'.'_liste_rev'):(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_rev']))?$Pile[0]['tri'.'_liste_rev']:((strncmp('_liste_rev','session',7)==0 AND session_get('tri'.'_liste_rev'))?session_get('tri'.'_liste_rev'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1);
		$senstri = ($senstri<0)?' DESC':'';
	};
	
	$command['pagination'] = array((isset($Pile[0]['debut_liste_rev']) ? $Pile[0]['debut_liste_rev'] : null), (($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10));
	if (!isset($command['table'])) {
		$command['table'] = 'versions';
		$command['id'] = '_liste_rev';
		$command['from'] = array('versions' => 'spip_versions');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("versions.id_auteur",
		"".tri_champ_select($tri)."",
		"versions.objet",
		"versions.id_objet",
		"versions.id_version",
		"versions.titre_version",
		"versions.date");
	$command['orderby'] = array(tri_champ_order($tri,$command['from']).$senstri);
	$command['where'] = 
			array(
			array('>', 'versions.id_version', "1"), 
			array('NOT', 
			array('=', 'versions.objet', "''")), (!(is_array(@$Pile[0]['id_auteur'])?count(@$Pile[0]['id_auteur']):strlen(@$Pile[0]['id_auteur'])) ? '' : ((is_array(@$Pile[0]['id_auteur'])) ? sql_in('versions.id_auteur',sql_quote($in)) : 
			array('=', 'versions.id_auteur', sql_quote(@$Pile[0]['id_auteur'], '','varchar(23) NOT NULL DEFAULT \'\'')))), (!(is_array(@$Pile[0]['id_objet'])?count(@$Pile[0]['id_objet']):strlen(@$Pile[0]['id_objet'])) ? '' : ((is_array(@$Pile[0]['id_objet'])) ? sql_in('versions.id_objet',sql_quote($in1)) : 
			array('=', 'versions.id_objet', sql_quote(@$Pile[0]['id_objet'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['objet'])?count(@$Pile[0]['objet']):strlen(@$Pile[0]['objet'])) ? '' : ((is_array(@$Pile[0]['objet'])) ? sql_in('versions.objet',sql_quote($in2)) : 
			array('=', 'versions.objet', sql_quote(@$Pile[0]['objet'], '','varchar(25) NOT NULL DEFAULT \'\'')))), ((@$Pile[0]["where"]) ? (@$Pile[0]["where"]) : ''));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/revisions/prive/objets/liste/versions.html','html_8f533f826c9782c03a70fd1266935b35','_liste_rev',5,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_liste_rev']['compteur_boucle'] = 0;
	$Numrows['_liste_rev']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_liste_rev']) ? $Pile[0]['debut_liste_rev'] : _request('debut_liste_rev');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_liste_rev'] = quete_debut_pagination('id_version,id_objet,objet',$Pile[0]['@id_version,id_objet,objet'] = substr($debut_boucle,1),(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10),$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_liste_rev']['total']-1)/((($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10)))*((($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10))));
	$debut_boucle = intval($debut_boucle);
	$fin_boucle = min(($tout ? $Numrows['_liste_rev']['total'] : $debut_boucle+(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10) - 1), $Numrows['_liste_rev']['total'] - 1);
	$Numrows['_liste_rev']['grand_total'] = $Numrows['_liste_rev']['total'];
	$Numrows['_liste_rev']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_liste_rev']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_liste_rev']['compteur_boucle'] = $debut_boucle;
	
	
	$l1 = _T('revisions:voir_differences');
	$l2 = _T('revisions:voir_differences');
	$l3 = _T('info_sans_titre');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_liste_rev']['compteur_boucle']++;
		if ($Numrows['_liste_rev']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_liste_rev']['compteur_boucle']-1 > $fin_boucle) break;
		$t0 .= (
'
		' .
(($t1 = BOUCLE_auteurhtml_8f533f826c9782c03a70fd1266935b35($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		(vide($Pile['vars'][$_zzz=(string)'td_auteur'] = $Pile[$SP]['id_auteur']))) .
'
		' .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('voirrevisions', interdire_scripts(invalideur_session($Cache, $Pile[$SP]['objet'])), invalideur_session($Cache, $Pile[$SP]['id_objet']))?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'
			<tr class="' .
	alterner($Numrows['_liste_rev']['compteur_boucle'],'row_odd','row_even') .
	'">
				<td class=\'statut\'>' .
	interdire_scripts(filtre_puce_statut_dist(generer_info_entite($Pile[$SP]['id_objet'], interdire_scripts($Pile[$SP]['objet']), 'statut'),interdire_scripts($Pile[$SP]['objet']))) .
	'</td>
				<td class="type">' .
	interdire_scripts(objet_icone($Pile[$SP]['objet'],'16')) .
	'</td>
				<td class=\'diff\'>
				' .
	((table_valeur($Pile["vars"], (string)'diff', null))  ?
			((	'<a href="#" onclick="$(this).parent().next().find(\'.diff\').toggle(\'fast\');return false;" title="' .
		attribut_html($l1) .
		'">' .
		interdire_scripts(filtre_balise_img_dist(chemin_image('diff-16.png'),$l1)) .
		'</a>
				') . ' ') :
			'') .
	'
				</td>
				<td class=\'titre principale\'><a ' .
	vide($Pile['vars'][$_zzz=(string)'titre'] = interdire_scripts(((($a = generer_info_entite($Pile[$SP]['id_objet'], interdire_scripts($Pile[$SP]['objet']), 'titre')) OR (is_string($a) AND strlen($a))) ? $a : (	$l3 .
			' (' .
			interdire_scripts($Pile[$SP]['objet']) .
			(($t4 = strval($Pile[$SP]['id_objet']))!=='' ?
					(' #' . $t4) :
					'') .
			')')))) .
	'
					href="' .
	interdire_scripts(parametre_url(parametre_url(parametre_url(entites_html(sinon(table_valeur(@$Pile[0], (string)'url_modif', null), generer_url_ecrire('revision')),true),'id_objet',$Pile[$SP]['id_objet']),'objet',interdire_scripts($Pile[$SP]['objet'])),'id_version',$Pile[$SP]['id_version'])) .
	'" 
					title="' .
	attribut_html(_T('revisions:voir_revisions', array('objet' => interdire_scripts($Pile[$SP]['objet']),
'id_objet' => $Pile[$SP]['id_objet'],
'titre' => table_valeur($Pile["vars"], (string)'titre', null)))) .
	'">' .
	table_valeur($Pile["vars"], (string)'titre', null) .
	'</a>' .
	(($t2 = strval(interdire_scripts($Pile[$SP]['titre_version'])))!=='' ?
			(' (' . $t2 . ')') :
			'') .
	'
					' .
	(($t2 = strval(safehtml(table_valeur($Pile["vars"], (string)'diff', null))))!=='' ?
			('<div class="none-js diff">
					' . $t2 . '
					</div>') :
			'') .
	'
				</td>
				<td class=\'auteur\'>' .
	table_valeur($Pile["vars"], (string)'td_auteur', null) .
	'</td>
				<td class=\'date secondaire\'>' .
	interdire_scripts(date_relative(normaliser_date($Pile[$SP]['date']))) .
	'</td>
			</tr>
		')) :
		'') .
'
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_liste_rev @ ../plugins-dist/revisions/prive/objets/liste/versions.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/revisions/prive/objets/liste/versions.html
// Temps de compilation total: 16.069 ms
//

function html_8f533f826c9782c03a70fd1266935b35($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(vide($Pile['vars'][$_zzz=(string)'defaut_tri'] = array('date' => interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'date_sens', null), '-1'),true)), 'points' => '-1
'))))!=='' ?
		($t1 . '
') :
		'') .
(($t1 = BOUCLE_liste_revhtml_8f533f826c9782c03a70fd1266935b35($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
' .
		filtre_pagination_dist($Numrows["_liste_rev"]["grand_total"],
 		'_liste_rev',
		isset($Pile[0]['debut_liste_rev'])?$Pile[0]['debut_liste_rev']:intval(_request('debut_liste_rev')),
		(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10), false, '', '', array()) .
		'
<div class="liste-objets versions">
<table class=\'spip liste\'>
' .
		(($t3 = strval(interdire_scripts(sinon(table_valeur(@$Pile[0], (string)'titre', null), singulier_ou_pluriel((isset($Numrows['_liste_rev']['grand_total'])
			? $Numrows['_liste_rev']['grand_total'] : $Numrows['_liste_rev']['total']),'revisions:info_1_revision','revisions:info_nb_revisions')))))!=='' ?
				('<caption><strong class="caption">' . $t3 . '</strong></caption>') :
				'') .
		'
	<thead>
		<tr class=\'first_row\'>
			<th class=\'statut\' scope=\'col\'><span title="' .
		attribut_html(_T('public|spip|ecrire:lien_trier_statut')) .
		'">#</span></th>
			<th class=\'type\' scope=\'col\'>' .
		_T('revisions:objet_editorial') .
		'</th>
			<th class=\'diff\' scope=\'col\'></th>
			<th class=\'titre principale\' scope=\'col\'>' .
		_T('public|spip|ecrire:info_titre') .
		'</th>
			<th class=\'auteur\' scope=\'col\'>' .
		_T('public|spip|ecrire:auteur') .
		'</th>
			<th class=\'date secondaire\' scope=\'col\'>' .
		lien_ou_expose(parametre_url(parametre_url(self(),(($s=in_array('date',array('>','<')))?'sens':'tri').'_liste_rev',$s?(strpos('< >','date')-1):'date'),'var_memotri',strncmp('_liste_rev','session',7)==0?(($s=in_array('date',array('>','<')))?'sens':'tri').'_liste_rev':''),_T('public|spip|ecrire:date'),$s?(((intval($t=(isset($Pile[0]['sens'.'_liste_rev']))?$Pile[0]['sens'.'_liste_rev']:((strncmp('_liste_rev','session',7)==0 AND session_get('sens'.'_liste_rev'))?session_get('sens'.'_liste_rev'):(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_rev']))?$Pile[0]['tri'.'_liste_rev']:((strncmp('_liste_rev','session',7)==0 AND session_get('tri'.'_liste_rev'))?session_get('tri'.'_liste_rev'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','date')-1)):((($t=(isset($Pile[0]['tri'.'_liste_rev']))?$Pile[0]['tri'.'_liste_rev']:((strncmp('_liste_rev','session',7)==0 AND session_get('tri'.'_liste_rev'))?session_get('tri'.'_liste_rev'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true))))?tri_protege_champ($t):'')=='date'),'ajax') .
		'</th>
		</tr>
	</thead>
	<tbody>
	') . $t1 . (	'
	</tbody>
</table>
' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_liste_rev"]["grand_total"],
 		'_liste_rev',
		isset($Pile[0]['debut_liste_rev'])?$Pile[0]['debut_liste_rev']:intval(_request('debut_liste_rev')),
		(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10), true, 'prive', '', array())))!=='' ?
				('<p class=\'pagination\'>' . $t3 . '</p>') :
				'') .
		'
</div>
')) :
		((($t2 = strval(interdire_scripts(sinon(table_valeur(@$Pile[0], (string)'sinon', null), ''))))!=='' ?
			('
<div class="liste-objets versions caption-wrap"><strong class="caption">' . $t2 . '</strong></div>
') :
			''))) .
'
');

	return analyse_resultat_skel('html_8f533f826c9782c03a70fd1266935b35', $Cache, $page, '../plugins-dist/revisions/prive/objets/liste/versions.html');
}
?>
<?php

/*
 * Squelette : ../plugins/auto/agenda/v3.19.6/prive/objets/liste/evenements.html
 * Date :      Wed, 11 Jul 2018 08:07:48 GMT
 * Compile :   Wed, 01 Aug 2018 05:48:30 GMT
 * Boucles :   _liste_evt
 */ 

function BOUCLE_liste_evthtml_45df8c563851e5160d059a5f1dd35f98(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['id_evenement']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (@$Pile[0]['id_article']))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	$in2 = array();
	if (!(is_array($a = (@$Pile[0]['id_rubrique']))))
		$in2[]= $a;
	else $in2 = array_merge($in2, $a);
	$in3 = array();
	if (!(is_array($a = (@$Pile[0]['id_mot']))))
		$in3[]= $a;
	else $in3 = array_merge($in3, $a);
	$in4 = array();
	if (!(is_array($a = (@$Pile[0]['id_evenement_source']))))
		$in4[]= $a;
	else $in4 = array_merge($in4, $a);
	$in5 = array();
	if (!(is_array($a = (@$Pile[0]['statut']))))
		$in5[]= $a;
	else $in5 = array_merge($in5, $a);
	// RECHERCHE
	if (!strlen((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")))){
		list($rech_select, $rech_where) = array("0 as points","");
	} else
	{
		$prepare_recherche = charger_fonction('prepare_recherche', 'inc');
		list($rech_select, $rech_where) = $prepare_recherche((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")), "evenements", "?","",array (
  'criteres' => 
  array (
    'id_evenement' => true,
    'id_article' => true,
    'id_evenement_source' => true,
    'statut' => true,
  ),
  'lien' => true,
),"id_evenement");
	}
	
	$senstri = '';
	$tri = (($t=(isset($Pile[0]['tri'.'_liste_evt']))?$Pile[0]['tri'.'_liste_evt']:((strncmp('_liste_evt','session',7)==0 AND session_get('tri'.'_liste_evt'))?session_get('tri'.'_liste_evt'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date_debut'),true))))?tri_protege_champ($t):'');
	if ($tri){
		$senstri = ((intval($t=(isset($Pile[0]['sens'.'_liste_evt']))?$Pile[0]['sens'.'_liste_evt']:((strncmp('_liste_evt','session',7)==0 AND session_get('sens'.'_liste_evt'))?session_get('sens'.'_liste_evt'):(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_evt']))?$Pile[0]['tri'.'_liste_evt']:((strncmp('_liste_evt','session',7)==0 AND session_get('tri'.'_liste_evt'))?session_get('tri'.'_liste_evt'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date_debut'),true))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1);
		$senstri = ($senstri<0)?' DESC':'';
	};
	
	$command['pagination'] = array((isset($Pile[0]['debut_liste_evt']) ? $Pile[0]['debut_liste_evt'] : null), (($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '15'),true)))) ? $a : 10));
	if (!isset($command['table'])) {
		$command['table'] = 'evenements';
		$command['id'] = '_liste_evt';
		$command['from'] = array('evenements' => 'spip_evenements','L1' => 'spip_articles','L2' => 'spip_mots_liens','resultats' => 'spip_resultats');
		$command['type'] = array();
		$command['groupby'] = array("evenements.id_evenement");
		$command['join'] = array('L1' => array('evenements','id_article'), 'L2' => array('evenements','id_objet','id_evenement','L2.objet='.sql_quote('evenement')), 'resultats' => array('evenements','id','id_evenement'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("evenements.id_evenement",
		"$rech_select",
		"".tri_champ_select($tri)."",
		"evenements.id_evenement_source",
		"evenements.statut",
		"evenements.date_debut",
		"evenements.id_article",
		"evenements.titre AS titre_rang",
		"evenements.titre",
		"evenements.date_fin",
		"evenements.horaire",
		"evenements.lieu");
	$command['orderby'] = array(tri_champ_order($tri,$command['from']).$senstri);
	$command['where'] = 
			array((!(is_array(@$Pile[0]['id_evenement'])?count(@$Pile[0]['id_evenement']):strlen(@$Pile[0]['id_evenement'])) ? '' : ((is_array(@$Pile[0]['id_evenement'])) ? sql_in('evenements.id_evenement',sql_quote($in)) : 
			array('=', 'evenements.id_evenement', sql_quote(@$Pile[0]['id_evenement'], '','bigint(21) NOT NULL AUTO_INCREMENT')))), (!(is_array(@$Pile[0]['id_article'])?count(@$Pile[0]['id_article']):strlen(@$Pile[0]['id_article'])) ? '' : ((is_array(@$Pile[0]['id_article'])) ? sql_in('evenements.id_article',sql_quote($in1)) : 
			array('=', 'evenements.id_article', sql_quote(@$Pile[0]['id_article'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_rubrique'])?count(@$Pile[0]['id_rubrique']):strlen(@$Pile[0]['id_rubrique'])) ? '' : ((is_array(@$Pile[0]['id_rubrique'])) ? sql_in('L1.id_rubrique',sql_quote($in2)) : 
			array('=', 'L1.id_rubrique', sql_quote(@$Pile[0]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_mot'])?count(@$Pile[0]['id_mot']):strlen(@$Pile[0]['id_mot'])) ? '' : ((is_array(@$Pile[0]['id_mot'])) ? sql_in('L2.id_mot',sql_quote($in3)) : 
			array('=', 'L2.id_mot', sql_quote(@$Pile[0]['id_mot'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_evenement_source'])?count(@$Pile[0]['id_evenement_source']):strlen(@$Pile[0]['id_evenement_source'])) ? '' : ((is_array(@$Pile[0]['id_evenement_source'])) ? sql_in('evenements.id_evenement_source',sql_quote($in4)) : 
			array('=', 'evenements.id_evenement_source', sql_quote(@$Pile[0]['id_evenement_source'], '','bigint(21) NOT NULL')))), ((@$Pile[0]["where"]) ? (@$Pile[0]["where"]) : ''), (!(is_array(@$Pile[0]['statut'])?count(@$Pile[0]['statut']):strlen(@$Pile[0]['statut'])) ? '' : ((is_array(@$Pile[0]['statut'])) ? sql_in('evenements.statut',sql_quote($in5)) : 
			array('=', 'evenements.statut', sql_quote(@$Pile[0]['statut'], '','varchar(10) NOT NULL DEFAULT \'0\'')))), $rech_where?$rech_where:'');
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/agenda/v3.19.6/prive/objets/liste/evenements.html','html_45df8c563851e5160d059a5f1dd35f98','_liste_evt',7,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_liste_evt']['compteur_boucle'] = 0;
	$Numrows['_liste_evt']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_liste_evt']) ? $Pile[0]['debut_liste_evt'] : _request('debut_liste_evt');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_liste_evt'] = quete_debut_pagination('id_evenement',$Pile[0]['@id_evenement'] = substr($debut_boucle,1),(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '15'),true)))) ? $a : 10),$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_liste_evt']['total']-1)/((($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '15'),true)))) ? $a : 10)))*((($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '15'),true)))) ? $a : 10))));
	$debut_boucle = intval($debut_boucle);
	$fin_boucle = min(($tout ? $Numrows['_liste_evt']['total'] : $debut_boucle+(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '15'),true)))) ? $a : 10) - 1), $Numrows['_liste_evt']['total'] - 1);
	$Numrows['_liste_evt']['grand_total'] = $Numrows['_liste_evt']['total'];
	$Numrows['_liste_evt']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_liste_evt']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_liste_evt']['compteur_boucle'] = $debut_boucle;
	
	
	$l1 = _T('public|spip|ecrire:info_numero_abbreviation');
	$l2 = _T('agenda:repetition');
	$l3 = _T('agenda:repetition');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_liste_evt']['compteur_boucle']++;
		if ($Numrows['_liste_evt']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_liste_evt']['compteur_boucle']-1 > $fin_boucle) break;
		$t0 .= (
'
		<tr class="' .
alterner($Numrows['_liste_evt']['compteur_boucle'],'row_odd','row_even') .
(calcul_exposer($Pile[$SP]['id_evenement'], 'id_evenement', $Pile[0], '', 'id_evenement', '')  ?
		(' ' . 'on') :
		'') .
(($Pile[$SP]['id_evenement_source'])  ?
		(' ' . 'repetition') :
		'') .
'">
			<td class=\'statut\'>' .
interdire_scripts(filtre_puce_statut_dist($Pile[$SP]['statut'],'evenement',$Pile[$SP]['id_evenement'])) .
'</td>
			<td class=\'date\'>' .
interdire_scripts(unique(affdate_jourcourt($Pile[$SP]['date_debut']),'liste_evt')) .
'</td>
			<td class=\'article secondaire\'>' .
(($Pile[$SP]['id_article'])  ?
		('<a ' . ' ' . (	' href="' .
	generer_url_entite($Pile[$SP]['id_article'],'article') .
	'" title="' .
	interdire_scripts(attribut_html(generer_info_entite($Pile[$SP]['id_article'], 'article', 'titre'))) .
	'">' .
	interdire_scripts(filtre_balise_img_dist(chemin_image('article-16.png'),interdire_scripts(generer_info_entite($Pile[$SP]['id_article'], 'article', 'titre')))) .
	'</a>')) :
		'') .
'</td>
			<td class=\'titre principale\'><a href="' .
generer_url_entite(($Pile[$SP]['id_evenement_source'] ? $Pile[$SP]['id_evenement_source']:$Pile[$SP]['id_evenement']),'evenement') .
'" title="' .
attribut_html($l1) .
' ' .
$Pile[$SP]['id_evenement'] .
'">' .
(($t1 = strval(recuperer_numero($Pile[$SP]['titre_rang'])))!=='' ?
		($t1 . '. ') :
		'') .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a>
				<p class="date">' .
interdire_scripts(affdate_debut_fin($Pile[$SP]['date_debut'],interdire_scripts($Pile[$SP]['date_fin']),interdire_scripts($Pile[$SP]['horaire']))) .
'</p>
			</td>
			<td class=\'lieu secondaire\'>' .
interdire_scripts(expanser_liens(typo($Pile[$SP]['lieu'], "TYPO", $connect, $Pile[0]))) .
'</td>
			' .
vide($Pile['vars'][$_zzz=(string)'id_evenement'] = ($Pile[$SP]['id_evenement_source'] ? $Pile[$SP]['id_evenement_source']:$Pile[$SP]['id_evenement'])) .
'<td class=\'id\'>' .
(($Pile[$SP]['id_evenement_source'])  ?
		(' ' . (	'
				' .
	interdire_scripts(inserer_attribut(filtre_balise_img_dist(chemin_image('repetition-16.png'),$l2,''),'title',$l2)) .
	'
				')) :
		'') .
invalideur_session($Cache, (((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifier', 'evenement', invalideur_session($Cache, table_valeur($Pile["vars"], (string)'id_evenement', null)))?" ":"") ? (($t2 = strval(invalideur_session($Cache, table_valeur($Pile["vars"], (string)'id_evenement', null))))!=='' ?
			((	'
				<a href="' .
		invalideur_session($Cache, parametre_url(parametre_url(generer_url_ecrire('evenement_edit'),'id_evenement',invalideur_session($Cache, table_valeur($Pile["vars"], (string)'id_evenement', null))),'redirect',invalideur_session($Cache, self()))) .
		'">') . $t2 . '</a>') :
			''):(	invalideur_session($Cache, table_valeur($Pile["vars"], (string)'id_evenement', null)) .
	'
			'))) .
'
			</td>
		</tr>
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_liste_evt @ ../plugins/auto/agenda/v3.19.6/prive/objets/liste/evenements.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/agenda/v3.19.6/prive/objets/liste/evenements.html
// Temps de compilation total: 37.724 ms
//

function html_45df8c563851e5160d059a5f1dd35f98($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(vide($Pile['vars'][$_zzz=(string)'defaut_tri'] = array('date_debut' => interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'date_sens', null), '1'),true)), 'titre' => '1', 'id_evenement' => '1', 'points' => '-1
'))))!=='' ?
		($t1 . '
') :
		'') .
(($t1 = BOUCLE_liste_evthtml_45df8c563851e5160d059a5f1dd35f98($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
' .
		filtre_pagination_dist($Numrows["_liste_evt"]["grand_total"],
 		'_liste_evt',
		isset($Pile[0]['debut_liste_evt'])?$Pile[0]['debut_liste_evt']:intval(_request('debut_liste_evt')),
		(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '15'),true)))) ? $a : 10), false, '', '', array()) .
		'
<div class="liste-objets evenements">
<table class=\'spip liste\'>
' .
		(($t3 = strval(interdire_scripts(sinon(table_valeur(@$Pile[0], (string)'titre', null), singulier_ou_pluriel((isset($Numrows['_liste_evt']['grand_total'])
			? $Numrows['_liste_evt']['grand_total'] : $Numrows['_liste_evt']['total']),'agenda:info_un_evenement','agenda:info_nombre_evenements')))))!=='' ?
				('<caption><strong class="caption">' . $t3 . '</strong></caption>') :
				'') .
		'
	<thead>
		<tr class=\'first_row\'>
			<th class=\'statut\' scope=\'col\'>' .
		lien_ou_expose(parametre_url(parametre_url(self(),(($s=in_array('statut',array('>','<')))?'sens':'tri').'_liste_evt',$s?(strpos('< >','statut')-1):'statut'),'var_memotri',strncmp('_liste_evt','session',7)==0?(($s=in_array('statut',array('>','<')))?'sens':'tri').'_liste_evt':''),(	'<span title="' .
			attribut_html(_T('public|spip|ecrire:lien_trier_statut')) .
			'">#</span>'),$s?(((intval($t=(isset($Pile[0]['sens'.'_liste_evt']))?$Pile[0]['sens'.'_liste_evt']:((strncmp('_liste_evt','session',7)==0 AND session_get('sens'.'_liste_evt'))?session_get('sens'.'_liste_evt'):(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_evt']))?$Pile[0]['tri'.'_liste_evt']:((strncmp('_liste_evt','session',7)==0 AND session_get('tri'.'_liste_evt'))?session_get('tri'.'_liste_evt'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date_debut'),true))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','statut')-1)):((($t=(isset($Pile[0]['tri'.'_liste_evt']))?$Pile[0]['tri'.'_liste_evt']:((strncmp('_liste_evt','session',7)==0 AND session_get('tri'.'_liste_evt'))?session_get('tri'.'_liste_evt'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date_debut'),true))))?tri_protege_champ($t):'')=='statut'),'ajax') .
		'</th>
			<th class=\'date\' scope=\'col\'>' .
		lien_ou_expose(parametre_url(parametre_url(self(),(($s=in_array('date_debut',array('>','<')))?'sens':'tri').'_liste_evt',$s?(strpos('< >','date_debut')-1):'date_debut'),'var_memotri',strncmp('_liste_evt','session',7)==0?(($s=in_array('date_debut',array('>','<')))?'sens':'tri').'_liste_evt':''),_T('public|spip|ecrire:date'),$s?(((intval($t=(isset($Pile[0]['sens'.'_liste_evt']))?$Pile[0]['sens'.'_liste_evt']:((strncmp('_liste_evt','session',7)==0 AND session_get('sens'.'_liste_evt'))?session_get('sens'.'_liste_evt'):(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_evt']))?$Pile[0]['tri'.'_liste_evt']:((strncmp('_liste_evt','session',7)==0 AND session_get('tri'.'_liste_evt'))?session_get('tri'.'_liste_evt'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date_debut'),true))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','date_debut')-1)):((($t=(isset($Pile[0]['tri'.'_liste_evt']))?$Pile[0]['tri'.'_liste_evt']:((strncmp('_liste_evt','session',7)==0 AND session_get('tri'.'_liste_evt'))?session_get('tri'.'_liste_evt'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date_debut'),true))))?tri_protege_champ($t):'')=='date_debut'),'ajax') .
		'</th>
			<th class=\'article secondaire\' scope=\'col\'></th>
			<th class=\'titre principale\' scope=\'col\'>' .
		lien_ou_expose(parametre_url(parametre_url(self(),(($s=in_array('titre',array('>','<')))?'sens':'tri').'_liste_evt',$s?(strpos('< >','titre')-1):'titre'),'var_memotri',strncmp('_liste_evt','session',7)==0?(($s=in_array('titre',array('>','<')))?'sens':'tri').'_liste_evt':''),_T('public|spip|ecrire:info_titre'),$s?(((intval($t=(isset($Pile[0]['sens'.'_liste_evt']))?$Pile[0]['sens'.'_liste_evt']:((strncmp('_liste_evt','session',7)==0 AND session_get('sens'.'_liste_evt'))?session_get('sens'.'_liste_evt'):(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_evt']))?$Pile[0]['tri'.'_liste_evt']:((strncmp('_liste_evt','session',7)==0 AND session_get('tri'.'_liste_evt'))?session_get('tri'.'_liste_evt'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date_debut'),true))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','titre')-1)):((($t=(isset($Pile[0]['tri'.'_liste_evt']))?$Pile[0]['tri'.'_liste_evt']:((strncmp('_liste_evt','session',7)==0 AND session_get('tri'.'_liste_evt'))?session_get('tri'.'_liste_evt'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date_debut'),true))))?tri_protege_champ($t):'')=='titre'),'ajax') .
		'</th>
			<th class=\'lieu\' scope=\'col secondaire\'>' .
		_T('agenda:evenement_lieu') .
		'</th>
			<th class=\'id\' scope=\'col\'>' .
		lien_ou_expose(parametre_url(parametre_url(self(),(($s=in_array('id_evenement',array('>','<')))?'sens':'tri').'_liste_evt',$s?(strpos('< >','id_evenement')-1):'id_evenement'),'var_memotri',strncmp('_liste_evt','session',7)==0?(($s=in_array('id_evenement',array('>','<')))?'sens':'tri').'_liste_evt':''),_T('public|spip|ecrire:info_numero_abbreviation'),$s?(((intval($t=(isset($Pile[0]['sens'.'_liste_evt']))?$Pile[0]['sens'.'_liste_evt']:((strncmp('_liste_evt','session',7)==0 AND session_get('sens'.'_liste_evt'))?session_get('sens'.'_liste_evt'):(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_evt']))?$Pile[0]['tri'.'_liste_evt']:((strncmp('_liste_evt','session',7)==0 AND session_get('tri'.'_liste_evt'))?session_get('tri'.'_liste_evt'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date_debut'),true))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','id_evenement')-1)):((($t=(isset($Pile[0]['tri'.'_liste_evt']))?$Pile[0]['tri'.'_liste_evt']:((strncmp('_liste_evt','session',7)==0 AND session_get('tri'.'_liste_evt'))?session_get('tri'.'_liste_evt'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date_debut'),true))))?tri_protege_champ($t):'')=='id_evenement'),'ajax') .
		'</th>
		</tr>
	</thead>
	<tbody>
	') . $t1 . (	'
	</tbody>
</table>
' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_liste_evt"]["grand_total"],
 		'_liste_evt',
		isset($Pile[0]['debut_liste_evt'])?$Pile[0]['debut_liste_evt']:intval(_request('debut_liste_evt')),
		(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '15'),true)))) ? $a : 10), true, 'prive', '', array())))!=='' ?
				('<p class=\'pagination\'>' . $t3 . '</p>') :
				'') .
		'
</div>
')) :
		((($t2 = strval(interdire_scripts(sinon(table_valeur(@$Pile[0], (string)'sinon', null), ''))))!=='' ?
			('
<div class="liste-objets evenements caption-wrap"><strong class="caption">' . $t2 . '</strong></div>
') :
			''))) .
'
');

	return analyse_resultat_skel('html_45df8c563851e5160d059a5f1dd35f98', $Cache, $page, '../plugins/auto/agenda/v3.19.6/prive/objets/liste/evenements.html');
}
?>
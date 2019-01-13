<?php

/*
 * Squelette : ../plugins-dist/sites/prive/objets/liste/syndic.html
 * Date :      Wed, 11 Jul 2018 07:43:00 GMT
 * Compile :   Wed, 01 Aug 2018 05:48:29 GMT
 * Boucles :   _articlesyndic, _liste_sites
 */ 

function BOUCLE_articlesyndichtml_d49cc0e807d49dc314fc9aa64fb88b40(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'syndic_articles';
		$command['id'] = '_articlesyndic';
		$command['from'] = array('syndic_articles' => 'spip_syndic_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("count(*)");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'syndic_articles.id_syndic', sql_quote($Pile[$SP]['id_syndic'], '','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('REGEXP', 'syndic_articles.statut', "'.*'"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/sites/prive/objets/liste/syndic.html','html_d49cc0e807d49dc314fc9aa64fb88b40','_articlesyndic',31,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_articlesyndic']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_articlesyndic @ ../plugins-dist/sites/prive/objets/liste/syndic.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_liste_siteshtml_d49cc0e807d49dc314fc9aa64fb88b40(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['id_syndic']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (@$Pile[0]['id_mot']))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	$in2 = array();
	if (!(is_array($a = (@$Pile[0]['id_rubrique']))))
		$in2[]= $a;
	else $in2 = array_merge($in2, $a);
	$in3 = array();
	if (!(is_array($a = (@$Pile[0]['statut']))))
		$in3[]= $a;
	else $in3 = array_merge($in3, $a);
	$in4 = array();
	if (!(is_array($a = (@$Pile[0]['syndication']))))
		$in4[]= $a;
	else $in4 = array_merge($in4, $a);
	// RECHERCHE
	if (!strlen((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")))){
		list($rech_select, $rech_where) = array("0 as points","");
	} else
	{
		$prepare_recherche = charger_fonction('prepare_recherche', 'inc');
		list($rech_select, $rech_where) = $prepare_recherche((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")), "syndic", "?","",array (
  'criteres' => 
  array (
    'id_syndic' => true,
    'id_rubrique' => true,
  ),
  'lien' => true,
),"id_syndic");
	}
	
	$senstri = '';
	$tri = (($t=(isset($Pile[0]['tri'.'_liste_sites']))?$Pile[0]['tri'.'_liste_sites']:((strncmp('_liste_sites','session',7)==0 AND session_get('tri'.'_liste_sites'))?session_get('tri'.'_liste_sites'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true))))?tri_protege_champ($t):'');
	if ($tri){
		$senstri = ((intval($t=(isset($Pile[0]['sens'.'_liste_sites']))?$Pile[0]['sens'.'_liste_sites']:((strncmp('_liste_sites','session',7)==0 AND session_get('sens'.'_liste_sites'))?session_get('sens'.'_liste_sites'):(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_sites']))?$Pile[0]['tri'.'_liste_sites']:((strncmp('_liste_sites','session',7)==0 AND session_get('tri'.'_liste_sites'))?session_get('tri'.'_liste_sites'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1);
		$senstri = ($senstri<0)?' DESC':'';
	};
	
	$command['pagination'] = array((isset($Pile[0]['debut_liste_sites']) ? $Pile[0]['debut_liste_sites'] : null), (($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10));
	if (!isset($command['table'])) {
		$command['table'] = 'syndic';
		$command['id'] = '_liste_sites';
		$command['from'] = array('syndic' => 'spip_syndic','L1' => 'spip_mots_liens','resultats' => 'spip_resultats');
		$command['type'] = array();
		$command['groupby'] = array("syndic.id_syndic");
		$command['join'] = array('L1' => array('syndic','id_objet','id_syndic','L1.objet='.sql_quote('site')), 'resultats' => array('syndic','id','id_syndic'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("syndic.id_syndic",
		"$rech_select",
		"".tri_champ_select($tri)."",
		"syndic.statut",
		"syndic.id_rubrique",
		"syndic.url_site",
		"syndic.nom_site",
		"syndic.syndication",
		"syndic.date");
	$command['orderby'] = array(tri_champ_order($tri,$command['from']).$senstri);
	$command['where'] = 
			array((!(is_array(@$Pile[0]['id_syndic'])?count(@$Pile[0]['id_syndic']):strlen(@$Pile[0]['id_syndic'])) ? '' : ((is_array(@$Pile[0]['id_syndic'])) ? sql_in('syndic.id_syndic',sql_quote($in)) : 
			array('=', 'syndic.id_syndic', sql_quote(@$Pile[0]['id_syndic'], '','bigint(21) NOT NULL AUTO_INCREMENT')))), (!(is_array(@$Pile[0]['id_mot'])?count(@$Pile[0]['id_mot']):strlen(@$Pile[0]['id_mot'])) ? '' : ((is_array(@$Pile[0]['id_mot'])) ? sql_in('L1.id_mot',sql_quote($in1)) : 
			array('=', 'L1.id_mot', sql_quote(@$Pile[0]['id_mot'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_rubrique'])?count(@$Pile[0]['id_rubrique']):strlen(@$Pile[0]['id_rubrique'])) ? '' : ((is_array(@$Pile[0]['id_rubrique'])) ? sql_in('syndic.id_rubrique',sql_quote($in2)) : 
			array('=', 'syndic.id_rubrique', sql_quote(@$Pile[0]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), ((@$Pile[0]["where"]) ? (@$Pile[0]["where"]) : ''), $rech_where?$rech_where:'', (!(is_array(@$Pile[0]['statut'])?count(@$Pile[0]['statut']):strlen(@$Pile[0]['statut'])) ? '' : ((is_array(@$Pile[0]['statut'])) ? sql_in('syndic.statut',sql_quote($in3)) : 
			array('=', 'syndic.statut', sql_quote(@$Pile[0]['statut'], '','varchar(10) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['syndication'])?count(@$Pile[0]['syndication']):strlen(@$Pile[0]['syndication'])) ? '' : ((is_array(@$Pile[0]['syndication'])) ? sql_in('syndic.syndication',sql_quote($in4)) : 
			array('=', 'syndic.syndication', sql_quote(@$Pile[0]['syndication'], '','varchar(3) NOT NULL DEFAULT \'\'')))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/sites/prive/objets/liste/syndic.html','html_d49cc0e807d49dc314fc9aa64fb88b40','_liste_sites',7,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_liste_sites']['compteur_boucle'] = 0;
	$Numrows['_liste_sites']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_liste_sites']) ? $Pile[0]['debut_liste_sites'] : _request('debut_liste_sites');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_liste_sites'] = quete_debut_pagination('id_syndic',$Pile[0]['@id_syndic'] = substr($debut_boucle,1),(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10),$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_liste_sites']['total']-1)/((($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10)))*((($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10))));
	$debut_boucle = intval($debut_boucle);
	$fin_boucle = min(($tout ? $Numrows['_liste_sites']['total'] : $debut_boucle+(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10) - 1), $Numrows['_liste_sites']['total'] - 1);
	$Numrows['_liste_sites']['grand_total'] = $Numrows['_liste_sites']['total'];
	$Numrows['_liste_sites']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_liste_sites']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_liste_sites']['compteur_boucle'] = $debut_boucle;
	
	
	$l1 = _T('public|spip|ecrire:info_numero_abbreviation');
	$l2 = _T('public|spip|ecrire:lien_visite_site');
	$l3 = _T('sites:info_panne_site_syndique');
	$l4 = _T('sites:info_probleme_grave');
	$l5 = _T('sites:info_syndication_articles');
	$l6 = _T('sites:info_a_valider');
	$l7 = _T('sites:icone_modifier_site');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_liste_sites']['compteur_boucle']++;
		if ($Numrows['_liste_sites']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_liste_sites']['compteur_boucle']-1 > $fin_boucle) break;
		$t0 .= (
'
		<tr class="' .
alterner($Numrows['_liste_sites']['compteur_boucle'],'row_odd','row_even') .
'">
			<td class=\'statut\'>' .
(($t1 = strval(interdire_scripts(filtre_puce_statut_dist($Pile[$SP]['statut'],'site',$Pile[$SP]['id_syndic'],$Pile[$SP]['id_rubrique']))))!=='' ?
		($t1 . ' ') :
		'') .
'</td>
			<td class=\'nom_site principale\'>' .
filtrer('image_graver',filtrer('image_reduire',
((!is_array($l = quete_logo('id_syndic', 'ON', $Pile[$SP]['id_syndic'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'26','20')) .
'
				<a href="' .
generer_url_entite($Pile[$SP]['id_syndic'],'site') .
'"
					title="' .
attribut_html($l1) .
' ' .
$Pile[$SP]['id_syndic'] .
'">' .
interdire_scripts(typo(supprimer_numero(calculer_url($Pile[$SP]['url_site'],$Pile[$SP]['nom_site'], 'titre', $connect, false)), "TYPO", $connect, $Pile[0])) .
'</a> ' .
(($t1 = strval(calculer_url($Pile[$SP]['url_site'],'','url', $connect)))!=='' ?
		('<span class=\'visiter\'>&#91;<a href=\'' . $t1 . (	'\'>' .
	$l2 .
	'</a>&#93;</span>')) :
		'') .
'
			</td>
			<td class=\'syndication\'>' .
(($t1 = strval(interdire_scripts(((match($Pile[$SP]['syndication'],'off|sus')) ?' ' :''))))!=='' ?
		($t1 . (	'
				<span class="etat ' .
	interdire_scripts($Pile[$SP]['syndication']) .
	'">' .
	(($t2 = strval(inserer_attribut(filtre_balise_img_dist(find_in_path('puce-orange-anim.gif')),'alt',$l3)))!=='' ?
			($t2 . $l4) :
			'') .
	'</span>
			')) :
		'') .
BOUCLE_articlesyndichtml_d49cc0e807d49dc314fc9aa64fb88b40($Cache, $Pile, $doublons, $Numrows, $SP)
. (($t2 = strval(interdire_scripts(((match($Pile[$SP]['syndication'],'oui|off|sus')) ?' ' :''))))!=='' ?
			('
				' . $t2 . (	'
				' .
		$Numrows['_articlesyndic']['total'] .
		' ' .
		$l5 .
		'
			')) :
			'') .
'
			</td>
			<td class=\'date secondaire\'>' .
(($t1 = strval(interdire_scripts(((($Pile[$SP]['statut'] == 'prop')) ?'' :' '))))!=='' ?
		('
				' . $t1 . (	' ' .
	interdire_scripts(affdate_jourcourt(normaliser_date($Pile[$SP]['date']))))) :
		'') .
(($t1 = strval(interdire_scripts(((($Pile[$SP]['statut'] == 'prop')) ?' ' :''))))!=='' ?
		('
				' . $t1 . (	' ' .
	$l6 .
	'
			')) :
		'') .
'</td>
			<td class=\'id\'>' .
invalideur_session($Cache, (((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifier', 'site', invalideur_session($Cache, $Pile[$SP]['id_syndic']))?" ":"") ? (	'<a href="' .
	invalideur_session($Cache, generer_url_ecrire('site_edit',(	'id_syndic=' .
		invalideur_session($Cache, $Pile[$SP]['id_syndic'])))) .
	'" title="' .
	attribut_html($l7) .
	'">' .
	invalideur_session($Cache, $Pile[$SP]['id_syndic']) .
	'</a>'):(	invalideur_session($Cache, $Pile[$SP]['id_syndic']) .
	'
			'))) .
'</td>
		</tr>
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_liste_sites @ ../plugins-dist/sites/prive/objets/liste/syndic.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/sites/prive/objets/liste/syndic.html
// Temps de compilation total: 11.633 ms
//

function html_d49cc0e807d49dc314fc9aa64fb88b40($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(vide($Pile['vars'][$_zzz=(string)'defaut_tri'] = array('date' => interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'date_sens', null), '-1'),true)), 'nom_site' => '1', 'id_syndic' => '1', 'points' => '-1
'))))!=='' ?
		($t1 . '
') :
		'') .
(($t1 = BOUCLE_liste_siteshtml_d49cc0e807d49dc314fc9aa64fb88b40($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
' .
		filtre_pagination_dist($Numrows["_liste_sites"]["grand_total"],
 		'_liste_sites',
		isset($Pile[0]['debut_liste_sites'])?$Pile[0]['debut_liste_sites']:intval(_request('debut_liste_sites')),
		(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10), false, '', '', array()) .
		'
<div class="liste-objets sites syndic">
<table class=\'spip liste\'>
' .
		(($t3 = strval(interdire_scripts(sinon(table_valeur(@$Pile[0], (string)'titre', null), singulier_ou_pluriel((isset($Numrows['_liste_sites']['grand_total'])
			? $Numrows['_liste_sites']['grand_total'] : $Numrows['_liste_sites']['total']),'sites:info_1_site','sites:info_nb_sites')))))!=='' ?
				('<caption><strong class="caption">' . $t3 . '</strong></caption>') :
				'') .
		'
	<thead>
		<tr class=\'first_row\'>
			<th class=\'statut\' scope=\'col\'>' .
		lien_ou_expose(parametre_url(parametre_url(self(),(($s=in_array('statut',array('>','<')))?'sens':'tri').'_liste_sites',$s?(strpos('< >','statut')-1):'statut'),'var_memotri',strncmp('_liste_sites','session',7)==0?(($s=in_array('statut',array('>','<')))?'sens':'tri').'_liste_sites':''),(	'<span title="' .
			attribut_html(_T('public|spip|ecrire:lien_trier_statut')) .
			'">#</span>'),$s?(((intval($t=(isset($Pile[0]['sens'.'_liste_sites']))?$Pile[0]['sens'.'_liste_sites']:((strncmp('_liste_sites','session',7)==0 AND session_get('sens'.'_liste_sites'))?session_get('sens'.'_liste_sites'):(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_sites']))?$Pile[0]['tri'.'_liste_sites']:((strncmp('_liste_sites','session',7)==0 AND session_get('tri'.'_liste_sites'))?session_get('tri'.'_liste_sites'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','statut')-1)):((($t=(isset($Pile[0]['tri'.'_liste_sites']))?$Pile[0]['tri'.'_liste_sites']:((strncmp('_liste_sites','session',7)==0 AND session_get('tri'.'_liste_sites'))?session_get('tri'.'_liste_sites'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true))))?tri_protege_champ($t):'')=='statut'),'ajax') .
		'</th>
			<th class=\'nom_site\' scope=\'col\'>' .
		lien_ou_expose(parametre_url(parametre_url(self(),(($s=in_array('nom_site',array('>','<')))?'sens':'tri').'_liste_sites',$s?(strpos('< >','nom_site')-1):'nom_site'),'var_memotri',strncmp('_liste_sites','session',7)==0?(($s=in_array('nom_site',array('>','<')))?'sens':'tri').'_liste_sites':''),_T('sites:form_prop_nom_site'),$s?(((intval($t=(isset($Pile[0]['sens'.'_liste_sites']))?$Pile[0]['sens'.'_liste_sites']:((strncmp('_liste_sites','session',7)==0 AND session_get('sens'.'_liste_sites'))?session_get('sens'.'_liste_sites'):(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_sites']))?$Pile[0]['tri'.'_liste_sites']:((strncmp('_liste_sites','session',7)==0 AND session_get('tri'.'_liste_sites'))?session_get('tri'.'_liste_sites'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','nom_site')-1)):((($t=(isset($Pile[0]['tri'.'_liste_sites']))?$Pile[0]['tri'.'_liste_sites']:((strncmp('_liste_sites','session',7)==0 AND session_get('tri'.'_liste_sites'))?session_get('tri'.'_liste_sites'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true))))?tri_protege_champ($t):'')=='nom_site'),'ajax') .
		'</th>
			<th class=\'syndication\' scope=\'col\'>' .
		_T('sites:info_syndication') .
		'</th>
			<th class=\'date\' scope=\'col\'>' .
		lien_ou_expose(parametre_url(parametre_url(self(),(($s=in_array('date',array('>','<')))?'sens':'tri').'_liste_sites',$s?(strpos('< >','date')-1):'date'),'var_memotri',strncmp('_liste_sites','session',7)==0?(($s=in_array('date',array('>','<')))?'sens':'tri').'_liste_sites':''),_T('public|spip|ecrire:date'),$s?(((intval($t=(isset($Pile[0]['sens'.'_liste_sites']))?$Pile[0]['sens'.'_liste_sites']:((strncmp('_liste_sites','session',7)==0 AND session_get('sens'.'_liste_sites'))?session_get('sens'.'_liste_sites'):(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_sites']))?$Pile[0]['tri'.'_liste_sites']:((strncmp('_liste_sites','session',7)==0 AND session_get('tri'.'_liste_sites'))?session_get('tri'.'_liste_sites'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','date')-1)):((($t=(isset($Pile[0]['tri'.'_liste_sites']))?$Pile[0]['tri'.'_liste_sites']:((strncmp('_liste_sites','session',7)==0 AND session_get('tri'.'_liste_sites'))?session_get('tri'.'_liste_sites'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true))))?tri_protege_champ($t):'')=='date'),'ajax') .
		'</th>
			<th class=\'id\' scope=\'col\'>' .
		lien_ou_expose(parametre_url(parametre_url(self(),(($s=in_array('id_syndic',array('>','<')))?'sens':'tri').'_liste_sites',$s?(strpos('< >','id_syndic')-1):'id_syndic'),'var_memotri',strncmp('_liste_sites','session',7)==0?(($s=in_array('id_syndic',array('>','<')))?'sens':'tri').'_liste_sites':''),_T('public|spip|ecrire:info_numero_abbreviation'),$s?(((intval($t=(isset($Pile[0]['sens'.'_liste_sites']))?$Pile[0]['sens'.'_liste_sites']:((strncmp('_liste_sites','session',7)==0 AND session_get('sens'.'_liste_sites'))?session_get('sens'.'_liste_sites'):(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_sites']))?$Pile[0]['tri'.'_liste_sites']:((strncmp('_liste_sites','session',7)==0 AND session_get('tri'.'_liste_sites'))?session_get('tri'.'_liste_sites'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','id_syndic')-1)):((($t=(isset($Pile[0]['tri'.'_liste_sites']))?$Pile[0]['tri'.'_liste_sites']:((strncmp('_liste_sites','session',7)==0 AND session_get('tri'.'_liste_sites'))?session_get('tri'.'_liste_sites'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true))))?tri_protege_champ($t):'')=='id_syndic'),'ajax') .
		'</th>
		</tr>
	</thead>
	<tbody>
	') . $t1 . (	'
	</tbody>
</table>
' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_liste_sites"]["grand_total"],
 		'_liste_sites',
		isset($Pile[0]['debut_liste_sites'])?$Pile[0]['debut_liste_sites']:intval(_request('debut_liste_sites')),
		(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10), true, 'prive', '', array())))!=='' ?
				('<p class=\'pagination\'>' . $t3 . '</p>') :
				'') .
		'
</div>
')) :
		((($t2 = strval(interdire_scripts(sinon(table_valeur(@$Pile[0], (string)'sinon', null), ''))))!=='' ?
			('
<div class="liste-objets sites caption-wrap"><strong class="caption">' . $t2 . '</strong></div>
') :
			''))) .
'
');

	return analyse_resultat_skel('html_d49cc0e807d49dc314fc9aa64fb88b40', $Cache, $page, '../plugins-dist/sites/prive/objets/liste/syndic.html');
}
?>
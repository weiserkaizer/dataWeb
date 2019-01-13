<?php
if (!defined('_ECRIRE_INC_VERSION')) return;

// Pour la mutualisation, metas à regarder
$GLOBALS['mutualisation_afficher_config'] = (isset($GLOBALS['mutualisation_afficher_config'])?$GLOBALS['mutualisation_afficher_config'].',':'').'soyezcreateurs/mode_affichage,slogan_site';


// Optimisation du chargement des JS (SPIP 3.1 requis, cf https://core.spip.net/issues/3497)
//define('_JS_ASYNC_LOAD',true);

if (!defined('_IMG_GD_QUALITE'))
	define('_IMG_GD_QUALITE', 95); // Haute qualité pour les images réduites ; voir https://contrib.spip.net/Astuces-SPIP

if (!defined('_ACCESSIBILITE_CONSERVER_BULLE'))
	define('_ACCESSIBILITE_CONSERVER_BULLE', true); // Pour conserver les bulles d'aide volontaire sur les liens vers les documents
if (!defined('_MEDIAS_RESPONSIVE_MASQUER_LEGENDE'))
	define('_MEDIAS_RESPONSIVE_MASQUER_LEGENDE', true); // Pour ne pas afficher les légendes sur les <img> avec le plugin https://www.paris-beyrouth.org/Plugin-SPIP-Insertion-avancee-d-images
#if (!defined('_BONUX_STYLE'))
#	define('_BONUX_STYLE',1); // https://zone.spip.org/trac/spip-zone/changeset/35480
if (!defined('_LARGEUR_MODE_IMAGE'))
	define('_LARGEUR_MODE_IMAGE', 799); //  Voir http://permalink.gmane.org/gmane.comp.web.spip.zone/16461
if (!defined('_TITRER_DOCUMENTS'))
	define('_TITRER_DOCUMENTS', true); // Le titre des documents joints est automatiquement pris à partir du nom du fichier (avec mediatheque) ; Voir https://zone.spip.org/trac/spip-zone/changeset/41565 et https://zone.spip.net/trac/spip-zone/changeset/108693
if (!defined('_MOTS_CREATION_RETOUR_MOT_CREE'))
	define('_MOTS_CREATION_RETOUR_MOT_CREE', true); // Revenir au mot clef nouvellement créé. Cf https://zone.spip.net/trac/spip-zone/changeset/110686/spip-zone
if (!defined('_AGENDA_CHOIX_RUBRIQUE_OUVERT'))
	define('_AGENDA_CHOIX_RUBRIQUE_OUVERT', false); // Ne pas pouvoir choisir qu'une rubrique puisse être parmis les seules à recevoir des événements. Cf : https://zone.spip.org/trac/spip-zone/changeset/110827

// Pour forcer le mode écran large
$GLOBALS['spip_ecran']=$_COOKIE['spip_ecran']='large';

// Activer HTML5 depuis le squelette uniquement dans le public, et jamais dans le privé
// Cf https://contrib.spip.net/Formidable-le-generateur-de-formulaires#forum488975
if (!test_espace_prive()) {
    $GLOBALS['meta']['version_html_max'] = 'html5';
} else {
	$GLOBALS['meta']['version_html_max'] = 'html4';
}

// Pour avoir un affichage compact des Saisies (admin et mails), cf https://zone.spip.org/trac/spip-zone/changeset/99576
if (!defined('_SAISIES_AFFICHAGE_COMPACT'))
	define('_SAISIES_AFFICHAGE_COMPACT', 'oui');

// Demander au compresseur CSS d'embarquer les images : cf https://core.spip.net/issues/3425 et https://core.spip.net/issues/4164
#$GLOBALS['compresseur_filtres_css'] = array('compresseur_embarquer_images_css');

$GLOBALS['toujours_paragrapher'] = true;
$GLOBALS['barre_typo_pas_de_fork_typo'] = false; // Pour tenir compte de https://zone.spip.org/trac/spip-zone/changeset/22723 et disposer des raccourcis typo supplémentaires !
if (!defined('_AUTOBR'))
	define('_AUTOBR', ''); // cf https://www.spip.net/fr_article5427.html (TextWheel)

// Recalculer le cache si la config du site change
// Ne marche pas sur les CSS et JS calculés avec #PRODUIRE, cf https://core.spip.net/issues/3696
$GLOBALS['marqueur'] = (isset($GLOBALS['marqueur'])?$GLOBALS['marqueur']:'').':sc'.md5(
	(isset($GLOBALS['meta']['boutonstexte'])?$GLOBALS['meta']['boutonstexte']:'').
	(isset($GLOBALS['meta']['btv2'])?$GLOBALS['meta']['btv2']:'').
	(isset($GLOBALS['meta']['bte'])?$GLOBALS['meta']['bte']:'').
	$GLOBALS['meta']['nom_site'].
	$GLOBALS['meta']['slogan_site'].
	$GLOBALS['meta']['descriptif_site'].
	$GLOBALS['meta']['email_webmaster']
); // Sur un conseil de Cedric : http://permalink.gmane.org/gmane.comp.web.spip.zone/6258
if (!defined('_TRI_GROUPES_MOTS'))
	define('_TRI_GROUPES_MOTS', '0+titre,titre');  // cf http://trac.rezo.net/trac/spip/changeset/14712
if (!defined('_DUREE_CACHE_DEFAUT'))
	define('_DUREE_CACHE_DEFAUT', 12*3600); // pris en compte à partir de http://trac.rezo.net/trac/spip/changeset/10121
if (!defined('_URLS_PROPRES_MAX'))
	define('_URLS_PROPRES_MAX', 60); // pris en compte à partire de http://trac.rezo.net/trac/spip/changeset/10346
# FBI : si on trie sur les titre puis sur les dates, les dates ne classent que ceux qui ont le même titre ==> inutile
# TODO later : quand les rang seront gérés, 'rang, date DESC' fonctionnera
#define('_TRI_ARTICLES_RUBRIQUE', '0+titre,date DESC'); // cf http://trac.rezo.net/trac/spip/changeset/11492
if (!defined('_CLEVERMAIL_NOUVEAUTES_HTML'))
	define("_CLEVERMAIL_NOUVEAUTES_HTML", 'lettre_libre');
// Doit être à vide depuis que CM gère la génération automatique du format texte à partir du format HTML
if (!defined('_CLEVERMAIL_NOUVEAUTES_TEXT'))
	define("_CLEVERMAIL_NOUVEAUTES_TEXT", '');

if (!defined('_CLEVERMAIL_DISTANT'))
	define("_CLEVERMAIL_DISTANT", false); // Pour que CM ne calcule pas l'URL publique du squelette
if (!defined('_SKEL_HORS_TRAVAUX'))
	define("_SKEL_HORS_TRAVAUX", 'clevermail_do,gis_json'); // Pour que le plugin en travaux laisse passer les inscriptions à la NL

if (!defined('_SIDR_PERSO'))
	define('_SIDR_PERSO', true); // Pour avoir sa propre insertion des scripts de sidr

if (!defined('_PREVIEW_TOKEN'))
	define('_PREVIEW_TOKEN', true); // https://core.spip.net/projects/spip/repository/revisions/21077 et https://core.spip.net/projects/spip/repository/revisions/21084

/*
	Le truc pour disposer dans #ENV{marker_icon_name} dans les squelettes.
	Merci à ARNO* : http://permalink.gmane.org/gmane.comp.web.spip.devel/55856
*/
#$_GET['marker_icon_name'] = '_Marker_icon'; // Pas utilisé

// Tous ces parametres sont inutiles et non pris en compte si le plugin cfg est installe
$GLOBALS['barre_typo_pas_de_fausses_puces'] = true;
$GLOBALS['BarreTypoEnrichie_Preserve_Header'] = true;
$GLOBALS['config_intertitre'] = true; // Necessaire pour empécher la configuration par CFG
$GLOBALS['debut_intertitre'] = '<h2 class="spip">';
$GLOBALS['fin_intertitre'] = '</h2>';
$GLOBALS['debut_intertitre_2'] = '<h3 class="spip">';
$GLOBALS['fin_intertitre_2'] = '</h3>';
$GLOBALS['debut_intertitre_3'] = '<h4 class="spip">';
$GLOBALS['fin_intertitre_3'] = '</h4>';
$GLOBALS['debut_intertitre_4'] = '<h5 class="spip">';
$GLOBALS['fin_intertitre_4'] = '</h5>';
$GLOBALS['debut_intertitre_5'] = '<h6 class="spip">';
$GLOBALS['fin_intertitre_5'] = '</h6>';

// Pour suivre les recommandations du RGAA :
$GLOBALS['debut_italique'] = '<em class="spip">';
$GLOBALS['fin_italique'] = '</em>';

// Pour pouvoir styler en appliquant : http://www.sovavsiti.cz/css/hr.html
$GLOBALS['ligne_horizontale'] = "\n<div class='hrspip'><hr class='spip' /></div>\n";

# Envoi de mail aux contributeurs d'un forum si reponse a leur message
if (!defined('_SUIVI_FORUM_THREAD'))
	define('_SUIVI_FORUM_THREAD', true);

// Gere l'inscription aux evenements
// cf https://zone.spip.org/trac/spip-zone/changeset/33103
#include_spip('inc/config');
#$GLOBALS['agenda_affiche_inscription'] = (lire_config('soyezcreateurs/agenda_inscription', '') == 'on') ? 'oui' : 'non';

if (!defined('_CS_OUTILS_CACHES'))
	define('_CS_OUTILS_CACHES', 'dossier_squelettes:type_urls:filtrer_javascript:corbeille:SPIP_tailles:webmestres:spam:maj_auto:moderation_moderee:paragrapher2:auteur_forum:no_IP:flock:previsualisation:spip_cache:en_travaux:suivi_forums:forum_lgrmaxi:simpl_interface:boites_privees:icone_visiter:spip_ecran:tri_articles:auteurs:brouteur:set_options:soft_scroller:f_jQuery:desactiver_flash:forcer_langue:jcorner:SPIP_liens:class_spip:supprimer_numero:xml:visiteurs_connectes:insert_head:introduction:titre_parent:horloge:liens_en_clair:masquer:orientation:trousse_balises:verstexte:liens_orphelins:pucesli:citations_bb:insertions:typo_exposants:glossaire:guillemets:titres_typo:mailcrypt:smileys:sommaire:blocs:toutmulti:decoration:decoupe:filets_sep:couleurs:cs_comportement:taches_cron:titres_typographies:autobr:ecran_securite:autorisations:meme_rubrique:liens_internes:aff_tout:alerte_urgence:spip_log:balise_set:devdebug:timezone:profiling:test_i18n');

// désactiver l'héritage des logos de rubriques (cf https://www.spip.net/fr_article5691.html)
if (!function_exists('lire_config')) {
	include_spip('inc/config');
}
if (lire_config('soyezcreateurs_layout/logolocal','local') == 'local') {
	define('_LOGO_RUBRIQUE_DESACTIVER_HERITAGE', true);
}

function balise_SECTEUR_PDF_dist($p) {
	if (!is_array($p->param))
		$p->param=array();
	
	// Produire le premier argument {secteur_pdf}
	$texte = new Texte;
	$texte->type='texte';
	$texte->texte='secteur_pdf';
	$param = array(0=>NULL, 1=>array(0=>$texte));
	array_unshift($p->param, $param);
	
	// Transformer les filtres en arguments
	for ($i=1; $i<count($p->param); $i++) {
		if ($p->param[$i][0]) {
			if (!strstr($p->param[$i][0], '='))
				break;# on a rencontre un vrai filtre, c'est fini
			$texte = new Texte;
			$texte->type='texte';
			$texte->texte=$p->param[$i][0];
			$param = array(0=>$texte);
			$p->param[$i][1] = $param;
			$p->param[$i][0] = NULL;
		}
	}
	
	// Appeler la balise #MODELE{secteur_pdf}{arguments}
	if (!function_exists($f = 'balise_modele'))
		$f = 'balise_modele_dist';
	return $f($p);
}

if (!defined('_DIR_PLUGIN_CRITERE_MOTS')) {
	function critere_mots_dist($idb, &$boucles, $crit){
		return true;
	}
	function critere_mots_selon_id_dist($idb, &$boucles, $crit){
		return true;
	}
	function critere_mots_selon_titre_dist($idb, &$boucles, $crit){
		return true;
	}
}

define('_NOIZETIER_REPERTOIRE_PAGES','contenu/');
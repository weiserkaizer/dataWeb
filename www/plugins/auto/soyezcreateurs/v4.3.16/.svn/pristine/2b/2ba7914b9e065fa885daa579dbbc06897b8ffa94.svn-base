<?php
/*
* Configuration de SPIP pour SoyezCreateurs
* Realisation : RealET : real3t@gmail.com
* Attention, fichier en UTF-8 sans BOM
*/

if (!defined('_ECRIRE_INC_VERSION')) return;

include_spip('inc/meta');

/*
 * Fonction d'installation, mise a jour de la base
 *
 * @param unknown_type $nom_meta_base_version
 * @param unknown_type $version_cible
 */
function soyezcreateurs_upgrade($nom_meta_base_version,$version_cible){
	if (defined('_BYPASS_SC_INSTALL')) return;
	include_spip('base/soyezcreateurs');
	$current_version = 0.0;
	if ((!isset($GLOBALS['meta'][$nom_meta_base_version])) || (($current_version = $GLOBALS['meta'][$nom_meta_base_version])!=$version_cible)){
		if (version_compare($current_version,'3.0.20','<')) {
			spip_log("SoyezCreateurs maj 3.0.20 Début", 'soyezcreateurs_install'._LOG_INFO_IMPORTANTE);
			soyezcreateurs_config_site();
			soyezcreateurs_config_motsclefs();
			// Installation des index FullText si le plugin est présent
			$f = chercher_filtre('info_plugin');
			if($f('Fulltext', 'est_actif')) {
				include_spip('inc/fulltext_creer_index');
				fulltext_liste_creer_index('all');
			}
			spip_log("SoyezCreateurs maj 3.0.20 Faite", 'soyezcreateurs_install'._LOG_INFO_IMPORTANTE);
			ecrire_meta($nom_meta_base_version,$current_version='3.0.20','non');
		}

		if (version_compare($current_version,'3.0.24','<')) {
			spip_log("SoyezCreateurs maj 3.0.24 Début", 'soyezcreateurs_install'._LOG_INFO_IMPORTANTE);
			// Initialisation Sigles du dictionnaire
			if (defined('_DIR_PLUGIN_DICTIONNAIRES')) {
				include_spip('action/editer_dictionnaire');
				$id_dictionnaire = sql_fetsel("id_dictionnaire", "spip_dictionnaires", "titre='"._T('dictionnaire:importer_acronymes_titre')."'");
				if (is_array($id_dictionnaire)) {
					$id_dictionnaire = $id_dictionnaire['id_dictionnaire'];
				}
				if (!$id_dictionnaire) {
					if ($id_dictionnaire = insert_dictionnaire()){
						autoriser_exception('modifier', 'dictionnaire', $id_dictionnaire);
						// On lui met des champs par défaut
						dictionnaire_set($id_dictionnaire, array(
							'titre' => _T('dictionnaire:importer_acronymes_titre'),
							'statut' => 'actif',
							'descriptif' => _T('dictionnaire:importer_acronymes_descriptif'),
							'type_defaut' => 'abbr',
						));
						autoriser_exception('modifier', 'dictionnaire', $id_dictionnaire, false);
					}
				}
				if ($id_dictionnaire) {
					// 0 et pas $id_dictionnaire 
					// car insert_definition a utilisé les valeurs par défaut
					autoriser_exception('publierdans', 'dictionnaire', 0);
					$definition = array(
						'id_dictionnaire' => $id_dictionnaire,
						'titre' => 'SPIP',
						'texte' => 'Système de Publication pour un Internet Participatif',
						'type' => 'abbr',
						'casse' => 1,
						'statut' => 'publie',
						'lang' => 'fr'
					);
					$id_definition = sql_fetsel("id_definition", "spip_definitions", "titre='".$definition['titre']."' AND id_dictionnaire=$id_dictionnaire");
					if (!$id_definition) {
						// On crée la définition dans la base SANS calculer le cache
						include_spip('action/editer_definition');
						if ($id_definition = insert_definition()){
							autoriser_exception('modifier', 'definition', $id_definition);
							definition_set($id_definition, $definition, false);
							autoriser_exception('modifier', 'definition', $id_definition, false);
						}
					}
					$definition = array(
						'id_dictionnaire' => $id_dictionnaire,
						'titre' => 'RGAA',
						'texte' => 'Référentiel Général pour l\'Accessibilité des Administrations',
						'type' => 'abbr',
						'casse' => 1,
						'statut' => 'publie',
						'lang' => 'fr'
					);
					$id_definition = sql_fetsel("id_definition", "spip_definitions", "titre='".$definition['titre']."' AND id_dictionnaire=$id_dictionnaire");
					if (!$id_definition) {
						// On crée la définition dans la base SANS calculer le cache
						include_spip('action/editer_definition');
						if ($id_definition = insert_definition()){
							autoriser_exception('modifier', 'definition', $id_definition);
							definition_set($id_definition, $definition, false);
							autoriser_exception('modifier', 'definition', $id_definition, false);
						}
					autoriser_exception('publierdans', 'dictionnaire', 0, false);
					}
				}
				// On calcule le cache des définitions une seule fois à la fin
				include_spip('inc/dictionnaires');
				dictionnaires_lister_definitions(true);
				
			}
			spip_log("SoyezCreateurs maj 3.0.24 Faite", 'soyezcreateurs_install'._LOG_INFO_IMPORTANTE);
			ecrire_meta($nom_meta_base_version,$current_version='3.0.24','non');
		}
		if (version_compare($current_version,'3.0.28','<')) {
			spip_log("SoyezCreateurs maj 3.0.28 Début", 'soyezcreateurs_install'._LOG_INFO_IMPORTANTE);
			// Au cas où : remttre au carré les id_secteur des articles et rubriques.
			include_spip('inc/rubriques');
			calculer_rubriques();
			propager_les_secteurs();
			effacer_meta("date_calcul_rubriques");
			
			spip_log("SoyezCreateurs maj 3.0.28 Faite", 'soyezcreateurs_install'._LOG_INFO_IMPORTANTE);
			ecrire_meta($nom_meta_base_version,$current_version='3.0.28','non');
		}
		
		if (version_compare($current_version,'3.0.30','<')) {
			spip_log("SoyezCreateurs maj 3.0.30 Début", 'soyezcreateurs_install'._LOG_INFO_IMPORTANTE);
			$id_mot = create_mot("_ModePortail", "ZoomSur2_Variante1", "Affecter ce mot clef à l’objet que vous voulez placer dans le cadre « Zoom sur secondaire » (facultatif).\n\nLe site prendra le dernier article ayant ce mot clef.", "Variante sur 2 colonnes : \n-* Titre de la rubrique contenant l’article\n-* 1re colonne :\n-** Document joint (de type autre média, PowerPoint par exemple) affiché avec son logo\n-** Chapo de l'article en dessous (permet de faire un lien)\n-* 2e colonne :\n-** Logo de l’article\n-** faisant un lien vers l’article (et si c’est une redirection, ça peut conduire à une autre page");
			spip_log("SoyezCreateurs maj 3.0.30 Faite", 'soyezcreateurs_install'._LOG_INFO_IMPORTANTE);
			ecrire_meta($nom_meta_base_version,$current_version='3.0.30','non');
		}
		if (version_compare($current_version,'3.0.31','<')) {
			spip_log("SoyezCreateurs maj 3.0.31 Début", 'soyezcreateurs_install'._LOG_INFO_IMPORTANTE);
			$id_mot = create_mot("_ModePortail", "ZoomSur2_Variante2", "Affecter ce mot clef à l’objet que vous voulez placer dans le cadre « Zoom sur secondaire » (facultatif).\n\nLe site prendra le dernier article ayant ce mot clef.", "Variante sur 2 colonnes : \n-* Titre de la rubrique contenant l’article\n-* 1re colonne :\n-** Fonctionne comme le Cycloshow avec les articles de la sous rubriques de la rubrique de l'article\n-* 2e colonne :\n-** Logo de l’article\n-** faisant un lien vers l’article (et si c’est une redirection, ça peut conduire à une autre page");
			ecrire_meta($nom_meta_base_version,$current_version='3.0.31','non');
		}
		if (version_compare($current_version,'3.0.33','<')) {
			spip_log("SoyezCreateurs maj 3.0.33 Début", 'soyezcreateurs_install'._LOG_INFO_IMPORTANTE);
			$id_mot = create_mot("_Specialisation_Rubrique", "ClassementAlpha", "Mettre ce mot clef à la rubrique pour classer son contenu alphabétiquement.", "");
			ecrire_meta($nom_meta_base_version,$current_version='3.0.33','non');
		}
		
		if (version_compare($current_version,'3.0.34','<')) {
			spip_log("SoyezCreateurs maj 3.0.34 Début", 'soyezcreateurs_install'._LOG_INFO_IMPORTANTE);
			$sites['nom_site'] = "90. Flux RSS du site";
			$sites['url_site'] = "?page=backend";
			$sites['descriptif'] = "public:syndiquer_site";
			$sites['url_syndic'] = "";
			$sites['statut'] = 'publie';
			$id_site = create_site($sites, "80. Réseaux sociaux");
				if ($id_site > 0) {
					create_logo('documents/siteon5.png', $type='site', $id_site, 'png');
					create_site_mot($id_site, "ReseauxSociaux", "_Specialisation_Sites");
				}
			ecrire_meta($nom_meta_base_version,$current_version='3.0.34','non');
		}
		if (version_compare($current_version,'3.1.35','<')) {
			spip_log("SoyezCreateurs maj 3.1.35 Début", 'soyezcreateurs_install'._LOG_INFO_IMPORTANTE);
			supprimer_mot_groupe("_Specialisation_Rubrique", "GisSecteur");
			ecrire_meta($nom_meta_base_version,$current_version='3.1.35','non');
		}
		if (version_compare($current_version,'3.1.36','<')) {
			spip_log("SoyezCreateurs maj 3.1.36 Début", 'soyezcreateurs_install'._LOG_INFO_IMPORTANTE);
			ecrire_config('boutonstexte/skin','soyezcreateurs');
			ecrire_meta($nom_meta_base_version,$current_version='3.1.36','non');
		}
		if (version_compare($current_version,'3.1.39','<')) {
			spip_log("SoyezCreateurs maj 3.1.39 Début", 'soyezcreateurs_install'._LOG_INFO_IMPORTANTE);
			ecrire_meta('orthotypo',"a:7:{s:10:\"guillemets\";s:1:\"1\";s:9:\"exposants\";s:1:\"1\";s:4:\"mois\";s:1:\"1\";s:4:\"caps\";s:1:\"1\";s:5:\"fines\";s:1:\"1\";s:11:\"corrections\";s:1:\"1\";s:18:\"corrections_regles\";s:319:\"oeuf = œuf\ncceuil = ccueil\n(a priori) = {a priori}\n(([hH])uits) = $1uit\n/([cC]h?)oeur/ = $1œur\n/oeuvre/ = œuvre\n(O[Ee]uvre([rs]?)) = Œuvre$1\n/\b([cC]|[mM].c|[rR]ec)on+ais+a((?:n(?:ce|te?)|ble)s?)\b/ = $1onnaissa$2\nCO2 = <abbr title=\"CO2, Dioxyde de carbone, O=C=O\">CO<sub>2</sub></abbr>\noeil = œil\n(O[Ee]il) = Œil\";}", 'non');
			ecrire_meta($nom_meta_base_version,$current_version='3.1.39','non');
		}
		if (version_compare($current_version,'3.1.40','<')) {
			create_groupe("_TypeArticle", "Pour indiquer un type spécifique d'article", "Il faut choisir un mot clef dans cette liste pour obtenir un affichage spécifique d'article.\n\nNB : pour rajouter un mot clef \"mc1\", il faut aussi rajouter les squelettes correspondants :\n-* noisettes/articles/typearticle_mc1.html", 'oui', 'non', 'articles', 'oui', 'non', 'non');
			ecrire_meta($nom_meta_base_version,$current_version='3.1.40','non');
		}
		if (version_compare($current_version,'3.1.41','<')) {
			ecrire_meta('auto_compress_css', 'oui', 'non');
			ecrire_meta('auto_compress_js', 'oui', 'non');
			ecrire_meta('forum_prive', 'non', 'non');
			ecrire_meta('forum_prive_objets', 'spip_articles,spip_auteurs,spip_breves,spip_dictionnaires,spip_definitions,spip_rubriques,spip_syndic,', 'non');
			ecrire_meta('objets_versions', 'a:10:{i:0;s:13:"spip_articles";i:1;s:12:"spip_auteurs";i:2;s:14:"spip_rubriques";i:3;s:9:"spip_mots";i:4;s:17:"spip_groupes_mots";i:5;s:11:"spip_syndic";i:6;s:16:"spip_definitions";i:7;s:11:"spip_breves";i:8;s:14:"spip_documents";i:9;s:15:"spip_evenements";}', 'non');
			ecrire_meta('urls_activer_controle', 'oui', 'non');
			ecrire_meta('facteur_filtre_iso_8859', '0', 'non');
			ecrire_meta('calendriermini', 'a:4:{s:11:"format_jour";s:8:"initiale";s:19:"affichage_hors_mois";s:1:"1";s:17:"changement_rapide";s:1:"1";s:5:"jour1";s:1:"1";}', 'non');
			ecrire_meta('inserer_modeles', 'a:1:{s:6:"objets";a:2:{i:0;s:13:"spip_articles";i:1;s:0:"";}}', 'non');
			ecrire_meta('notifications', 'a:19:{s:17:"limiter_rubriques";s:0:"";s:17:"moderateurs_forum";s:0:"";s:24:"forums_limiter_rubriques";s:0:"";s:12:"forums_liste";s:0:"";s:23:"moderateurs_forum_prive";s:0:"";s:22:"moderateurs_signatures";s:0:"";s:11:"inscription";s:10:"webmestres";s:5:"suivi";s:1:"1";s:25:"prevenir_auteurs_articles";s:2:"on";s:31:"prevenir_auteurs_articles_refus";s:2:"on";s:21:"pas_prevenir_publieur";s:2:"on";s:26:"prevenir_admins_restreints";s:2:"on";s:16:"prevenir_auteurs";s:2:"on";s:12:"thread_forum";s:2:"on";s:13:"forum_article";s:2:"on";s:24:"forums_admins_restreints";s:2:"on";s:22:"prevenir_auteurs_prive";s:2:"on";s:18:"thread_forum_prive";s:2:"on";s:10:"messagerie";s:2:"on";}', 'non');
			ecrire_config('uploadhtml5/max_file_size','32');
			ecrire_meta($nom_meta_base_version,$current_version='3.1.41','non');
		}
		if (version_compare($current_version,'3.1.42','<')) {
			supprimer_mot_groupe('_HTTP-EQUIV','pics-label');
			ecrire_meta($nom_meta_base_version,$current_version='3.1.42','non');
		}
		if (version_compare($current_version,'3.1.43','<')) {
			spip_log("SoyezCreateurs maj 3.1.43 Début", 'soyezcreateurs_install'._LOG_INFO_IMPORTANTE);
			create_groupe("_FondPage", "Images en fond de page :\n-* Créer autant de mots clefs que de fonds de page désirés\n-* Mettre un logo à ces mots clefs\n-* Possibilité de fixer un fond de page pour :\n-** Une rubrique (et la branche en dessous)\n-** Un type de page particulier (Sommaire, Plan)\n\nSe reporter à la documentation sur [Personnalisation graphique du squelette SoyezCreateurs->https://contrib.spip.net/Personnalisation-graphique-du-squelette-SoyezCreateurs].\n\nPour mettre une trame de fond, utiliser le logo de survol.\n\nUn site pour [créer des trames de fond->http://www.patternify.com/].", "", 'oui', 'non', 'rubriques', 'oui', 'non', 'non');
			spip_log("SoyezCreateurs maj 3.1.43 Faite", 'soyezcreateurs_install'._LOG_INFO_IMPORTANTE);
			ecrire_meta($nom_meta_base_version,$current_version='3.1.43','non');
		}
		if (version_compare($current_version,'3.1.44','<')) {
			spip_log("SoyezCreateurs maj 3.1.44 Début", 'soyezcreateurs_install'._LOG_INFO_IMPORTANTE);
			$id_mot = create_mot("_ModePortail", "Goodies2", "Affecter ce mot clef aux objets SPIP devant apparaitre dans la zone des Goodies (en mode international, sous la Une).", "");
			ecrire_meta($nom_meta_base_version,$current_version='3.1.44','non');
		}
		if (version_compare($current_version,'3.1.45','<')) {
			spip_log("SoyezCreateurs maj 3.1.45 Début", 'soyezcreateurs_install'._LOG_INFO_IMPORTANTE);
			create_groupe("_HeaderBanner", "Pour définir plusieurs bannières pour le site.", "Il faut créer un mot clef par bannière (le titre n'a pas d'importance).\n\nC'est le logo du mot clef qui est utilisé comme bannière du site.\n\n{{Attention}} : si vous avez déjà défini une bannière avec le logo de survol du site, alors, cette dernière n'est plus utilisée ; seuls les logos des mots clefs de ce groupe seront pris en compte.\n\nLes mots clefs affectés à une rubrique restreignent le choix des bannières pour la branche entière à celles affectées à la rubrique. Le fonctionnement pour le reste du site est inchangé ({{toutes}} les bannières sont disponibles pour le reste du site).\n\nSe reporter à la documentation sur [Personnalisation graphique du squelette SoyezCreateurs->https://contrib.spip.net/Personnalisation-graphique-du-squelette-SoyezCreateurs].\n\nPour mettre une trame de fond, utiliser le logo de survol.\n\nUn site pour [créer des trames de fond->http://www.patternify.com/].", 'non', 'non', 'rubriques', 'oui', 'non', 'non');			
			create_groupe("_FooterBanner", "Pour définir plusieurs fonds de pied de page pour le site.", "Il faut créer un mot clef par fond (le titre n'a pas d'importance).\n\nC'est le logo du mot clef qui est utilisé comme fond de pied du site.\n\nLes mots clefs affectés à une rubrique restreignent le choix des fonds pour la branche entière à celles affectées à la rubrique. Le fonctionnement pour le reste du site est inchangé ({{tous}} les fonds sont disponibles pour le reste du site).\n\nSe reporter à la documentation sur [Personnalisation graphique du squelette SoyezCreateurs->https://contrib.spip.net/Personnalisation-graphique-du-squelette-SoyezCreateurs].\n\nPour mettre une trame de fond, utiliser le logo de survol.\n\nUn site pour [créer des trames de fond->http://www.patternify.com/].", 'non', 'non', 'rubriques', 'oui', 'non', 'non');			
			spip_log("SoyezCreateurs maj 3.1.45 Faite", 'soyezcreateurs_install'._LOG_INFO_IMPORTANTE);
			ecrire_meta($nom_meta_base_version,$current_version='3.1.45','non');
		}
		if (version_compare($current_version,'3.1.46','<')) {
			spip_log("SoyezCreateurs maj 3.1.46 Début", 'soyezcreateurs_install'._LOG_INFO_IMPORTANTE);
			ecrire_meta('version_html_max', 'html4', 'non');
			ecrire_meta($nom_meta_base_version,$current_version='3.1.46','non');
		}
		if (version_compare($current_version,'3.1.47','<')) {
			spip_log("SoyezCreateurs maj 3.1.47 Début", 'soyezcreateurs_install'._LOG_INFO_IMPORTANTE);
			$id_mot = create_mot("_Specialisation_Rubrique", "PasDansMenuHaut", "Pour interdire que la rubrique (et ses sous-rubriques) soi(en)t dans le menu du haut", "");
			ecrire_meta($nom_meta_base_version,$current_version='3.1.47','non');
		}
		if (version_compare($current_version,'3.1.49','<')) {
			spip_log("SoyezCreateurs maj 3.1.49 Début", 'soyezcreateurs_install'._LOG_INFO_IMPORTANTE);
			ecrire_config('boutonstexte/selector','#contenu');
			ecrire_meta($nom_meta_base_version,$current_version='3.1.49','non');
		}
		if (version_compare($current_version,'3.1.50','<')) {
			spip_log("SoyezCreateurs maj 3.1.50 Début", 'soyezcreateurs_install'._LOG_INFO_IMPORTANTE);
			if (lire_config('soyezcreateurs/mode_affichage') == 'portailcognac') {
				spip_log("SoyezCreateurs maj 3.1.50 Portailcognac", 'soyezcreateurs_install'._LOG_INFO_IMPORTANTE);
				$id_zoomsur = id_mot('ZoomSur',id_groupe('_ModePortail'));
				$id_edito = id_mot('EDITO',id_groupe('_Specialisation'));
				// Trouver les articles attachés à EDITO et ZoomSur
				$Articles_ZoomSur = sql_allfetsel('id_objet', "spip_mots_liens", "id_mot=$id_zoomsur AND objet='article'");
				$Articles_EDITO = sql_allfetsel('id_objet', "spip_mots_liens", "id_mot=$id_edito AND objet='article'");
				if ($Articles_ZoomSur) {
					foreach ($Articles_ZoomSur as $Article_ZoomSur) {
						create_lien_mot($id_edito, $Article_ZoomSur['id_objet'], 'article');
						delete_lien_mot($id_zoomsur, $Article_ZoomSur['id_objet'], 'article');
					}
				}
				if ($Articles_EDITO) {
					foreach ($Articles_EDITO as $Article_EDITO) {
						create_lien_mot($id_zoomsur, $Article_EDITO['id_objet'], 'article');
						delete_lien_mot($id_edito, $Article_EDITO['id_objet'], 'article');
					}
				}
			}
			ecrire_meta($nom_meta_base_version,$current_version='3.1.50','non');
		}
		
		if (version_compare($current_version,'3.1.51','<')) {
			spip_log("SoyezCreateurs maj 3.1.51 Début", 'soyezcreateurs_install'._LOG_INFO_IMPORTANTE);
						
			$id_groupe_origine = id_groupe('_Specialisation');
			$id_mot = id_mot('PasDansRecherche', $id_groupe_origine);
			$id_groupe_dest = id_groupe('_Specialisation_Rubrique_ou_Article');
			$id_mot = id_mot('PasDansRecherche', $id_groupe_origine);
			remplacer_mot($id_mot, 'PasDansRecherche', 'Permet de masquer un article, ou le contenu d’une rubrique des résultats de la recherche', 'À affecter aux articles ou aux rubriques qui ne doivent pas être affichés dans les résultats de la recherche', $id_groupe_dest, '_Specialisation_Rubrique_ou_Article');
		
			ecrire_meta($nom_meta_base_version,$current_version='3.1.51','non');
		}
		if (version_compare($current_version,'3.1.52','<')) {
			spip_log("SoyezCreateurs maj 3.1.51 Début", 'soyezcreateurs_install'._LOG_INFO_IMPORTANTE);
			if (lire_config('soyezcreateurs/mode_affichage') == 'portailcognac') {
				ecrire_config('soyezcreateurs/centrerlogo','oui');
			}
			// On termine en invalidant les caches
			include_spip('inc/invalideur');
			suivre_invalideur("soyezcreateurs");
			ecrire_meta($nom_meta_base_version,$current_version='3.1.52','non');
			
		}
		
		
		/*if (version_compare($current_version,'3.0.10','<')) {
			create_document('documents/image.jpg', array('objet' => 'article', 'id_objet' => 3), 'image', array('titre' => 'Mon image', 'descriptif' => 'Superbe image'));
		}
		*/
	}
}

function soyezcreateurs_changer_cfg($cfg) {
	include_spip('inc/cfg_config'); 
	foreach ($cfg as $conf => $faire) {
		$recherche_conf = lire_config('soyezcreateurs/'.$conf);
		spip_log('cfg = '.$conf.' = '.$recherche_conf.' go','soyezcreateurs_install');
		if ($faire == 'radio') {
			if ($recherche_conf == 'Oui') {
				$res = ecrire_config('soyezcreateurs/'.$conf, 'oui');
				spip_log('cfg go to '.$faire.'= '.$recherche_conf.' ok','soyezcreateurs_install');
			}
			else if ($recherche_conf == 'Non') {
				$res = ecrire_config('soyezcreateurs/'.$conf, 'non');
				spip_log('cfg go to '.$faire.'= '.$recherche_conf.' ok','soyezcreateurs_install');
			}
		}
		else if ($faire == 'oui_non') {
			if ($recherche_conf == 'Non') {
				$res = ecrire_config('soyezcreateurs/'.$conf, '');
				spip_log('cfg go to '.$faire.'= '.$recherche_conf.' ok','soyezcreateurs_install');
			}
			else if ($recherche_conf == 'Oui') {
				$res = ecrire_config('soyezcreateurs/'.$conf, 'on');
				spip_log('cfg go to '.$faire.'= '.$recherche_conf.' ok','soyezcreateurs_install');
			}
		}
	}
	return true;
}

/*
 * Fonction de desinstallation
 *
 * @param unknown_type $nom_meta_base_version
 */
function soyezcreateurs_vider_tables($nom_meta_base_version) {
	effacer_meta('soyezcreateurs');
	effacer_meta('soyezcreateurs_couleurs');
	effacer_meta('soyezcreateurs_google');
	effacer_meta('soyezcreateurs_layout');
	effacer_meta($nom_meta_base_version);
}

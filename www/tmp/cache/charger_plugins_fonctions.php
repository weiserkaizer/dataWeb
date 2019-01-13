<?php

if (defined('_ECRIRE_INC_VERSION')) {
include_once_check(_ROOT_PLUGINS_DIST.'compagnon/compagnon_fonctions.php');
include_once_check(_ROOT_PLUGINS_DIST.'filtres_images/images_fonctions.php');
include_once_check(_ROOT_PLUGINS_DIST.'forum/forum_fonctions.php');
include_once_check(_ROOT_PLUGINS_DIST.'organiseur/organiseur_fonctions.php');
include_once_check(_ROOT_PLUGINS_DIST.'petitions/petitions_fonctions.php');
include_once_check(_ROOT_PLUGINS_DIST.'plan/plan_fonctions.php');
include_once_check(_ROOT_PLUGINS_DIST.'porte_plume/porte_plume_fonctions.php');
include_once_check(_ROOT_PLUGINS_DIST.'sites/sites_fonctions.php');
include_once_check(_ROOT_PLUGINS_DIST.'svp/svp_fonctions.php');
include_once_check(_ROOT_PLUGINS.'auto/typo_guillemets/v1.5.6/typo_guillemets_fonctions.php');
include_once_check(_ROOT_PLUGINS.'auto/spip_bonux/v3.4.6/spip_bonux_fonctions.php');
include_once_check(_ROOT_PLUGINS.'auto/orthotypo/v1.4.5/orthotypo_fonctions.php');
include_once_check(_ROOT_PLUGINS.'auto/mailcrypt/v2.4.5/mailcrypt_fonctions.php');
include_once_check(_ROOT_PLUGINS.'auto/fonctions_images/v0.6.13/fonctions_images_fonctions.php');
include_once_check(_ROOT_PLUGINS.'auto/facteur/v3.5.2/facteur_fonctions.php');
include_once_check(_ROOT_PLUGINS.'auto/corbeille/v3.1.2/corbeille_fonctions.php');
include_once_check(_ROOT_PLUGINS.'auto/calendriermini/v2.4.1/calendriermini_fonctions.php');
include_once_check(_ROOT_PLUGINS.'auto/compositions/v3.7.3/compositions_fonctions.php');
include_once_check(_ROOT_PLUGINS.'auto/crayons/v1.26.17/crayons_fonctions.php');
include_once_check(_ROOT_PLUGINS_DIST.'compresseur/compresseur_fonctions.php');
include_once_check(_ROOT_PLUGINS_DIST.'medias/medias_fonctions.php');
include_once_check(_ROOT_PLUGINS.'yaml/yaml_fonctions.php');
include_once_check(_ROOT_PLUGINS.'auto/verifier/v1.8.0/verifier_fonctions.php');
include_once_check(_ROOT_PLUGINS.'n-core/ncore_fonctions.php');
include_once_check(_ROOT_PLUGINS.'auto/fulltext/v1.2.0/fulltext_fonctions.php');
include_once_check(_ROOT_PLUGINS.'auto/saisies/v2.26.5/saisies_fonctions.php');
include_once_check(_ROOT_PLUGINS.'auto/agenda/v3.19.6/agenda_fonctions.php');
include_once_check(_ROOT_PLUGINS.'auto/menus/v1.6.11/menus_fonctions.php');
include_once_check(_ROOT_PLUGINS.'auto/gis/v4.44.19/gis_fonctions.php');
include_once_check(_ROOT_PLUGINS.'auto/gisgeom/v1.11.5/gisgeom_fonctions.php');
include_once_check(_ROOT_PLUGINS.'auto/fabrique/v2.3.12/fabrique_fonctions.php');
include_once_check(_ROOT_PLUGINS.'noizetier/noizetier_fonctions.php');
include_once_check(_ROOT_PLUGINS.'auto/slick/v1.2.7/slick_fonctions.php');
include_once_check(_ROOT_PLUGINS.'auto/savecfg/v3.0.7/savecfg_fonctions.php');
include_once_check(_ROOT_PLUGINS.'auto/dictionnaires/v1.1.11/dictionnaires_fonctions.php');
include_once_check(_ROOT_PLUGINS.'auto/oembed/v2.0.7/oembed_fonctions.php');
if (!function_exists('boutons_plugins')) {
function boutons_plugins(){return defined('_UPDATED_boutons_plugins')?unserialize(_UPDATED_boutons_plugins):unserialize('a:75:{s:12:"menu_accueil";a:4:{s:3:"nom";s:12:"menu_accueil";s:5:"titre";s:13:"icone_accueil";s:5:"icone";s:21:"images/accueil-48.png";s:6:"action";s:7:"accueil";}s:12:"menu_edition";a:5:{s:3:"nom";s:12:"menu_edition";s:5:"titre";s:13:"icone_edition";s:5:"icone";s:21:"images/edition-48.png";s:6:"action";s:10:"navigation";s:10:"parametres";s:17:"menu=menu_edition";}s:7:"auteurs";a:4:{s:3:"nom";s:7:"auteurs";s:5:"titre";s:13:"icone_auteurs";s:6:"parent";s:12:"menu_edition";s:5:"icone";s:20:"images/auteur-16.png";}s:9:"rubriques";a:5:{s:3:"nom";s:9:"rubriques";s:5:"titre";s:14:"info_rubriques";s:6:"parent";s:12:"menu_edition";s:5:"icone";s:22:"images/rubrique-16.png";s:6:"action";s:9:"rubriques";}s:8:"articles";a:4:{s:3:"nom";s:8:"articles";s:5:"titre";s:15:"info_articles_2";s:6:"parent";s:12:"menu_edition";s:5:"icone";s:21:"images/article-16.png";}s:16:"menu_publication";a:5:{s:3:"nom";s:16:"menu_publication";s:5:"titre";s:17:"icone_publication";s:5:"icone";s:25:"images/publication-48.png";s:6:"action";s:10:"navigation";s:10:"parametres";s:21:"menu=menu_publication";}s:11:"suivi_edito";a:4:{s:3:"nom";s:11:"suivi_edito";s:5:"titre";s:23:"icone_suivi_publication";s:6:"parent";s:16:"menu_publication";s:5:"icone";s:19:"images/suivi-16.png";}s:7:"synchro";a:4:{s:3:"nom";s:7:"synchro";s:5:"titre";s:20:"icone_suivi_activite";s:6:"parent";s:16:"menu_publication";s:5:"icone";s:17:"images/rss-16.png";}s:13:"menu_activite";a:5:{s:3:"nom";s:13:"menu_activite";s:5:"titre";s:14:"icone_activite";s:5:"icone";s:22:"images/activite-48.png";s:6:"action";s:10:"navigation";s:10:"parametres";s:18:"menu=menu_activite";}s:9:"visiteurs";a:5:{s:3:"nom";s:9:"visiteurs";s:5:"titre";s:24:"icone_afficher_visiteurs";s:6:"parent";s:13:"menu_activite";s:5:"icone";s:27:"images/auteur-6forum-16.png";s:6:"action";s:9:"visiteurs";}s:14:"menu_squelette";a:5:{s:3:"nom";s:14:"menu_squelette";s:5:"titre";s:15:"icone_squelette";s:5:"icone";s:23:"images/squelette-48.png";s:6:"action";s:10:"navigation";s:10:"parametres";s:19:"menu=menu_squelette";}s:19:"menu_administration";a:5:{s:3:"nom";s:19:"menu_administration";s:5:"titre";s:20:"icone_administration";s:5:"icone";s:28:"images/administration-48.png";s:6:"action";s:10:"navigation";s:10:"parametres";s:24:"menu=menu_administration";}s:11:"admin_vider";a:4:{s:3:"nom";s:11:"admin_vider";s:5:"titre";s:18:"onglet_vider_cache";s:6:"parent";s:19:"menu_administration";s:5:"icone";s:25:"images/cache-empty-16.png";}s:15:"admin_maintenir";a:5:{s:3:"nom";s:15:"admin_maintenir";s:5:"titre";s:16:"titre_admin_tech";s:6:"parent";s:19:"menu_administration";s:5:"icone";s:30:"images/base-maintenance-16.png";s:6:"action";s:10:"admin_tech";}s:9:"job_queue";a:4:{s:3:"nom";s:9:"job_queue";s:5:"titre";s:11:"queue_titre";s:6:"parent";s:19:"menu_administration";s:5:"icone";s:27:"images/queue-process-16.png";}s:8:"phpinfos";a:5:{s:3:"nom";s:8:"phpinfos";s:5:"titre";s:7:"phpinfo";s:6:"parent";s:19:"menu_administration";s:5:"icone";s:17:"images/php-16.png";s:6:"action";s:4:"info";}s:18:"menu_configuration";a:5:{s:3:"nom";s:18:"menu_configuration";s:5:"titre";s:19:"icone_configuration";s:5:"icone";s:27:"images/configuration-48.png";s:6:"action";s:10:"navigation";s:10:"parametres";s:23:"menu=menu_configuration";}s:19:"configurer_identite";a:5:{s:3:"nom";s:19:"configurer_identite";s:5:"titre";s:19:"titre_identite_site";s:6:"parent";s:18:"menu_configuration";s:5:"icone";s:22:"images/identite-16.png";s:6:"action";s:19:"configurer_identite";}s:17:"configurer_langue";a:4:{s:3:"nom";s:17:"configurer_langue";s:5:"titre";s:22:"info_langue_principale";s:6:"parent";s:18:"menu_configuration";s:5:"icone";s:20:"images/langue-16.png";}s:25:"configurer_multilinguisme";a:4:{s:3:"nom";s:25:"configurer_multilinguisme";s:5:"titre";s:19:"info_multilinguisme";s:6:"parent";s:18:"menu_configuration";s:5:"icone";s:24:"images/traduction-16.png";}s:18:"configurer_contenu";a:4:{s:3:"nom";s:18:"configurer_contenu";s:5:"titre";s:19:"onglet_contenu_site";s:6:"parent";s:18:"menu_configuration";s:5:"icone";s:28:"images/config-contenu-16.png";}s:23:"configurer_interactions";a:4:{s:3:"nom";s:23:"configurer_interactions";s:5:"titre";s:20:"onglet_interactivite";s:6:"parent";s:18:"menu_configuration";s:5:"icone";s:32:"images/config-interaction-16.png";}s:19:"configurer_avancees";a:4:{s:3:"nom";s:19:"configurer_avancees";s:5:"titre";s:24:"onglet_fonctions_avances";s:6:"parent";s:18:"menu_configuration";s:5:"icone";s:27:"images/configuration-16.png";}s:12:"admin_plugin";a:5:{s:3:"nom";s:12:"admin_plugin";s:5:"titre";s:18:"icone_admin_plugin";s:6:"parent";s:18:"menu_configuration";s:8:"position";s:2:"-1";s:5:"icone";s:20:"images/plugin-16.png";}s:18:"menu_developpement";a:5:{s:3:"nom";s:18:"menu_developpement";s:5:"titre";s:19:"icone_developpement";s:5:"icone";s:27:"images/developpement-48.png";s:6:"action";s:10:"navigation";s:10:"parametres";s:23:"menu=menu_developpement";}s:20:"outils_collaboratifs";a:2:{s:3:"nom";s:20:"outils_collaboratifs";s:5:"titre";s:26:"icone_outils_collaboratifs";}s:14:"outils_rapides";a:2:{s:3:"nom";s:14:"outils_rapides";s:5:"titre";s:19:"icone_outil_rapides";}s:14:"rubrique_creer";a:6:{s:3:"nom";s:14:"rubrique_creer";s:5:"titre";s:22:"icone_creer_rubrique_2";s:6:"parent";s:14:"outils_rapides";s:5:"icone";s:26:"images/rubrique-new-16.png";s:6:"action";s:13:"rubrique_edit";s:10:"parametres";s:31:"new=oui&id_parent=@id_rubrique@";}s:13:"article_creer";a:6:{s:3:"nom";s:13:"article_creer";s:5:"titre";s:20:"icone_ecrire_article";s:6:"parent";s:14:"outils_rapides";s:5:"icone";s:25:"images/article-new-16.png";s:6:"action";s:12:"article_edit";s:10:"parametres";s:33:"new=oui&id_rubrique=@id_rubrique@";}s:12:"auteur_creer";a:6:{s:3:"nom";s:12:"auteur_creer";s:5:"titre";s:25:"icone_creer_nouvel_auteur";s:6:"parent";s:14:"outils_rapides";s:5:"icone";s:24:"images/auteur-new-16.png";s:6:"action";s:11:"auteur_edit";s:10:"parametres";s:7:"new=oui";}s:11:"sauvegarder";a:6:{s:3:"nom";s:11:"sauvegarder";s:5:"titre";s:26:"dump:texte_sauvegarde_base";s:6:"parent";s:19:"menu_administration";s:8:"position";s:1:"1";s:5:"icone";s:25:"images/base-backup-16.png";s:6:"action";s:11:"sauvegarder";}s:9:"restaurer";a:6:{s:3:"nom";s:9:"restaurer";s:5:"titre";s:26:"dump:bouton_restaurer_base";s:6:"parent";s:19:"menu_administration";s:8:"position";s:1:"2";s:5:"icone";s:26:"images/base-restore-16.png";s:6:"action";s:9:"restaurer";}s:15:"forum_reactions";a:5:{s:3:"nom";s:15:"forum_reactions";s:5:"titre";s:24:"forum:icone_suivi_forums";s:6:"parent";s:13:"menu_activite";s:5:"icone";s:19:"images/forum-16.png";s:6:"action";s:15:"controler_forum";}s:16:"configurer_forum";a:4:{s:3:"nom";s:16:"configurer_forum";s:5:"titre";s:17:"forum:titre_forum";s:6:"parent";s:18:"menu_configuration";s:5:"icone";s:19:"images/forum-16.png";}s:19:"forum_interne_suivi";a:5:{s:3:"nom";s:19:"forum_interne_suivi";s:5:"titre";s:31:"forum:titre_cadre_forum_interne";s:6:"parent";s:20:"outils_collaboratifs";s:5:"icone";s:27:"images/forum-interne-16.png";s:6:"action";s:5:"forum";}s:8:"mediabox";a:5:{s:3:"nom";s:8:"mediabox";s:5:"titre";s:23:"mediabox:titre_menu_box";s:6:"parent";s:14:"menu_squelette";s:5:"icone";s:22:"images/mediabox-16.png";s:6:"action";s:19:"configurer_mediabox";}s:4:"mots";a:5:{s:3:"nom";s:4:"mots";s:5:"titre";s:20:"mots:icone_mots_cles";s:6:"parent";s:12:"menu_edition";s:5:"icone";s:17:"images/mot-16.png";s:6:"action";s:4:"mots";}s:9:"mot_creer";a:6:{s:3:"nom";s:9:"mot_creer";s:5:"titre";s:29:"mots:icone_creation_mots_cles";s:6:"parent";s:14:"outils_rapides";s:5:"icone";s:21:"images/mot-new-16.png";s:6:"action";s:8:"mot_edit";s:10:"parametres";s:29:"new=oui&id_groupe=@id_groupe@";}s:10:"calendrier";a:4:{s:3:"nom";s:10:"calendrier";s:5:"titre";s:30:"organiseur:info_agenda_interne";s:6:"parent";s:20:"outils_collaboratifs";s:5:"icone";s:24:"images/calendrier-16.png";}s:10:"messagerie";a:5:{s:3:"nom";s:10:"messagerie";s:5:"titre";s:23:"info_messagerie_interne";s:6:"action";s:8:"messages";s:6:"parent";s:20:"outils_collaboratifs";s:5:"icone";s:24:"images/messagerie-16.png";}s:18:"controler_petition";a:5:{s:3:"nom";s:18:"controler_petition";s:5:"titre";s:31:"petitions:icone_suivi_petitions";s:6:"parent";s:13:"menu_activite";s:8:"position";s:2:"-1";s:5:"icone";s:22:"images/petition-16.png";}s:9:"revisions";a:4:{s:3:"nom";s:9:"revisions";s:5:"titre";s:31:"revisions:info_historique_titre";s:6:"parent";s:16:"menu_publication";s:5:"icone";s:22:"images/revision-16.png";}s:20:"configurer_revisions";a:4:{s:3:"nom";s:20:"configurer_revisions";s:5:"titre";s:25:"revisions:titre_revisions";s:6:"parent";s:18:"menu_configuration";s:5:"icone";s:22:"images/revision-16.png";}s:5:"sites";a:5:{s:3:"nom";s:5:"sites";s:5:"titre";s:22:"icone_sites_references";s:6:"parent";s:12:"menu_edition";s:5:"icone";s:18:"images/site-16.png";s:6:"action";s:5:"sites";}s:10:"site_creer";a:6:{s:3:"nom";s:10:"site_creer";s:5:"titre";s:35:"sites:icone_referencer_nouveau_site";s:6:"parent";s:14:"outils_rapides";s:5:"icone";s:22:"images/site-new-16.png";s:6:"action";s:9:"site_edit";s:10:"parametres";s:33:"new=oui&id_rubrique=@id_rubrique@";}s:21:"controler_syndication";a:5:{s:3:"nom";s:21:"controler_syndication";s:5:"titre";s:33:"sites:icone_controler_syndication";s:6:"parent";s:16:"menu_publication";s:8:"position";s:2:"-1";s:5:"icone";s:18:"images/site-16.png";}s:12:"statistiques";a:5:{s:3:"nom";s:12:"statistiques";s:5:"titre";s:39:"statistiques:icone_statistiques_visites";s:6:"parent";s:13:"menu_activite";s:5:"icone";s:25:"images/statistique-16.png";s:6:"action";s:13:"stats_visites";}s:15:"configurer_urls";a:5:{s:3:"nom";s:15:"configurer_urls";s:5:"titre";s:26:"urls:icone_configurer_urls";s:6:"parent";s:18:"menu_configuration";s:8:"position";s:2:"-1";s:5:"icone";s:17:"images/url-16.png";}s:14:"controler_urls";a:5:{s:3:"nom";s:14:"controler_urls";s:5:"titre";s:27:"urls:titre_gestion_des_urls";s:6:"parent";s:16:"menu_publication";s:8:"position";s:2:"-1";s:5:"icone";s:17:"images/url-16.png";}s:9:"vertebres";a:5:{s:3:"nom";s:9:"vertebres";s:5:"titre";s:22:"vertebres:titre_tables";s:6:"parent";s:18:"menu_developpement";s:5:"icone";s:20:"images/tables-16.png";s:6:"action";s:9:"vertebres";}s:24:"configurer_typoenluminee";a:4:{s:3:"nom";s:24:"configurer_typoenluminee";s:5:"titre";s:37:"enlumtypo:configuration_typoenluminee";s:6:"parent";s:14:"menu_squelette";s:5:"icone";s:27:"images/typoenluminee-16.png";}s:18:"configurer_facteur";a:4:{s:3:"nom";s:18:"configurer_facteur";s:5:"titre";s:29:"facteur:configuration_facteur";s:6:"parent";s:18:"menu_configuration";s:5:"icone";s:21:"images/facteur-16.png";}s:9:"corbeille";a:4:{s:3:"nom";s:9:"corbeille";s:5:"titre";s:19:"corbeille:corbeille";s:6:"parent";s:20:"bando_administration";s:5:"icone";s:24:"images/trash-full-16.png";}s:12:"compositions";a:5:{s:3:"nom";s:12:"compositions";s:5:"titre";s:25:"compositions:compositions";s:6:"parent";s:14:"menu_squelette";s:5:"icone";s:25:"images/composition-16.png";s:6:"action";s:12:"compositions";}s:6:"breves";a:4:{s:3:"nom";s:6:"breves";s:5:"titre";s:19:"breves:icone_breves";s:6:"parent";s:12:"menu_edition";s:5:"icone";s:19:"images/breve-16.png";}s:11:"breve_creer";a:6:{s:3:"nom";s:11:"breve_creer";s:5:"titre";s:27:"breves:icone_nouvelle_breve";s:6:"parent";s:14:"outils_rapides";s:5:"icone";s:23:"images/breve-new-16.png";s:6:"action";s:10:"breve_edit";s:10:"parametres";s:32:"new=oui&id_rubrique=@id_secteur@";}s:9:"documents";a:4:{s:3:"nom";s:9:"documents";s:5:"titre";s:21:"medias:info_documents";s:6:"parent";s:12:"menu_edition";s:5:"icone";s:23:"images/portfolio-16.png";}s:12:"verifier_doc";a:4:{s:3:"nom";s:12:"verifier_doc";s:5:"titre";s:32:"verifier:titre_page_verifier_doc";s:6:"parent";s:18:"menu_developpement";s:5:"icone";s:22:"images/verifier-16.png";}s:8:"fulltext";a:4:{s:3:"nom";s:8:"fulltext";s:5:"titre";s:23:"fulltext:fulltext_index";s:6:"parent";s:18:"menu_configuration";s:5:"icone";s:22:"images/fulltext-16.png";}s:17:"fulltext_document";a:4:{s:3:"nom";s:17:"fulltext_document";s:5:"titre";s:27:"fulltext:fulltext_documents";s:6:"parent";s:18:"menu_configuration";s:5:"icone";s:22:"images/fulltext-16.png";}s:11:"saisies_doc";a:4:{s:3:"nom";s:11:"saisies_doc";s:5:"titre";s:30:"saisies:titre_page_saisies_doc";s:6:"parent";s:18:"menu_developpement";s:5:"icone";s:21:"images/saisies-16.png";}s:10:"evenements";a:4:{s:3:"nom";s:10:"evenements";s:5:"titre";s:17:"agenda:evenements";s:6:"parent";s:12:"menu_edition";s:5:"icone";s:23:"images/evenement-16.png";}s:15:"evenement_creer";a:5:{s:3:"nom";s:15:"evenement_creer";s:5:"titre";s:22:"agenda:creer_evenement";s:6:"parent";s:14:"outils_rapides";s:6:"action";s:14:"evenement_edit";s:5:"icone";s:27:"images/evenement-new-16.png";}s:10:"menus_tous";a:4:{s:3:"nom";s:10:"menus_tous";s:5:"titre";s:24:"menus:editer_menus_titre";s:6:"parent";s:14:"menu_squelette";s:5:"icone";s:18:"images/menu-16.png";}s:8:"gis_tous";a:4:{s:3:"nom";s:8:"gis_tous";s:5:"titre";s:18:"gis:icone_gis_tous";s:6:"parent";s:12:"menu_edition";s:5:"icone";s:17:"images/gis-16.png";}s:11:"gis_nouveau";a:6:{s:3:"nom";s:11:"gis_nouveau";s:5:"titre";s:22:"gis:editer_gis_nouveau";s:6:"parent";s:14:"outils_rapides";s:5:"icone";s:21:"images/gis-new-16.png";s:6:"action";s:8:"gis_edit";s:10:"parametres";s:7:"new=oui";}s:14:"ieconfigexport";a:5:{s:3:"nom";s:14:"ieconfigexport";s:5:"titre";s:21:"ieconfig:titre_export";s:6:"parent";s:19:"menu_administration";s:5:"icone";s:27:"images/config-export-16.png";s:6:"action";s:15:"ieconfig_export";}s:14:"ieconfigimport";a:5:{s:3:"nom";s:14:"ieconfigimport";s:5:"titre";s:21:"ieconfig:titre_import";s:6:"parent";s:19:"menu_administration";s:5:"icone";s:27:"images/config-import-16.png";s:6:"action";s:15:"ieconfig_import";}s:8:"fabrique";a:4:{s:3:"nom";s:8:"fabrique";s:5:"titre";s:23:"fabrique:fabrique_titre";s:6:"parent";s:18:"menu_developpement";s:5:"icone";s:22:"images/fabrique-16.png";}s:9:"noizetier";a:6:{s:3:"nom";s:9:"noizetier";s:5:"titre";s:32:"noizetier:editer_noizetier_titre";s:6:"parent";s:14:"menu_squelette";s:5:"icone";s:23:"images/noizetier-16.png";s:6:"action";s:15:"noizetier_pages";s:10:"parametres";s:18:"est_page_objet=oui";}s:16:"configurer_slick";a:4:{s:3:"nom";s:16:"configurer_slick";s:5:"titre";s:17:"slick:slick_titre";s:6:"parent";s:14:"menu_squelette";s:5:"icone";s:19:"images/slick-16.png";}s:13:"dictionnaires";a:5:{s:3:"nom";s:13:"dictionnaires";s:5:"titre";s:32:"dictionnaire:titre_dictionnaires";s:6:"parent";s:13:"bando_edition";s:5:"icone";s:26:"images/dictionnaire-16.png";s:6:"action";s:13:"dictionnaires";}s:16:"definition_creer";a:6:{s:3:"nom";s:16:"definition_creer";s:5:"titre";s:33:"definition:titre_definition_creer";s:6:"parent";s:14:"outils_rapides";s:5:"icone";s:28:"images/definition-add-16.png";s:6:"action";s:15:"definition_edit";s:10:"parametres";s:41:"new=oui&id_dictionnaire=@id_dictionnaire@";}s:27:"dictionnaires_configuration";a:5:{s:3:"nom";s:27:"dictionnaires_configuration";s:5:"titre";s:32:"dictionnaire:titre_dictionnaires";s:6:"parent";s:19:"bando_configuration";s:5:"icone";s:26:"images/dictionnaire-16.png";s:6:"action";s:24:"configurer_dictionnaires";}s:17:"configurer_oembed";a:4:{s:3:"nom";s:17:"configurer_oembed";s:5:"titre";s:19:"oembed:titre_oembed";s:6:"parent";s:19:"bando_configuration";s:5:"icone";s:20:"images/oembed-16.png";}}');}
function md5_boutons_plugins(){return defined('_UPDATED_md5_boutons_plugins')?_UPDATED_md5_boutons_plugins:'df8ea114a449a85015187f7064530653';}
}
if (!function_exists('onglets_plugins')) {
function onglets_plugins(){return defined('_UPDATED_onglets_plugins')?unserialize(_UPDATED_onglets_plugins):unserialize('a:14:{s:11:"infos_perso";a:4:{s:3:"nom";s:11:"infos_perso";s:5:"titre";s:15:"icone_mes_infos";s:6:"parent";s:11:"infos_perso";s:5:"icone";s:31:"images/information-perso-24.png";}s:18:"configurer_langage";a:4:{s:3:"nom";s:18:"configurer_langage";s:5:"titre";s:15:"icone_ma_langue";s:6:"parent";s:11:"infos_perso";s:5:"icone";s:23:"images/ma_langue-24.png";}s:22:"configurer_preferences";a:4:{s:3:"nom";s:22:"configurer_preferences";s:5:"titre";s:21:"icone_mes_preferences";s:6:"parent";s:11:"infos_perso";s:5:"icone";s:29:"images/mes_preferences-24.png";}s:14:"plugins_actifs";a:5:{s:3:"nom";s:14:"plugins_actifs";s:5:"titre";s:21:"plugin_titre_modifier";s:6:"parent";s:7:"plugins";s:5:"icone";s:20:"images/plugin-24.png";s:6:"action";s:12:"admin_plugin";}s:13:"stats_visites";a:5:{s:3:"nom";s:13:"stats_visites";s:5:"titre";s:39:"statistiques:icone_statistiques_visites";s:6:"parent";s:12:"statistiques";s:5:"icone";s:25:"images/statistique-24.png";s:6:"action";s:13:"stats_visites";}s:14:"stats_referers";a:5:{s:3:"nom";s:14:"stats_referers";s:5:"titre";s:33:"statistiques:titre_liens_entrants";s:6:"parent";s:12:"statistiques";s:5:"icone";s:22:"images/referers-24.png";s:6:"action";s:14:"stats_referers";}s:17:"stats_repartition";a:5:{s:3:"nom";s:17:"stats_repartition";s:5:"titre";s:38:"statistiques:icone_repartition_visites";s:6:"parent";s:12:"statistiques";s:5:"icone";s:25:"images/repartition-24.png";s:6:"action";s:17:"stats_repartition";}s:10:"stats_lang";a:5:{s:3:"nom";s:10:"stats_lang";s:5:"titre";s:36:"statistiques:onglet_repartition_lang";s:6:"parent";s:12:"statistiques";s:5:"icone";s:20:"images/langue-24.png";s:6:"action";s:10:"stats_lang";}s:8:"fulltext";a:4:{s:3:"nom";s:8:"fulltext";s:5:"titre";s:8:"Fulltext";s:6:"parent";s:13:"configuration";s:5:"icone";s:22:"images/fulltext-24.png";}s:14:"ieconfigexport";a:5:{s:3:"nom";s:14:"ieconfigexport";s:5:"titre";s:21:"ieconfig:titre_export";s:6:"parent";s:8:"ieconfig";s:5:"icone";s:27:"images/config-export-24.png";s:6:"action";s:15:"ieconfig_export";}s:14:"ieconfigimport";a:5:{s:3:"nom";s:14:"ieconfigimport";s:5:"titre";s:21:"ieconfig:titre_import";s:6:"parent";s:8:"ieconfig";s:5:"icone";s:27:"images/config-import-24.png";s:6:"action";s:15:"ieconfig_import";}s:8:"fabrique";a:4:{s:3:"nom";s:8:"fabrique";s:5:"titre";s:24:"fabrique:onglet_fabrique";s:6:"parent";s:8:"fabrique";s:5:"icone";s:22:"images/fabrique-24.png";}s:18:"fabrique_restaurer";a:4:{s:3:"nom";s:18:"fabrique_restaurer";s:5:"titre";s:34:"fabrique:onglet_fabrique_restaurer";s:6:"parent";s:8:"fabrique";s:5:"icone";s:32:"images/fabrique_restaurer-24.png";}s:15:"fabrique_outils";a:4:{s:3:"nom";s:15:"fabrique_outils";s:5:"titre";s:31:"fabrique:onglet_fabrique_outils";s:6:"parent";s:8:"fabrique";s:5:"icone";s:29:"images/fabrique_outils-24.png";}}');}
function md5_onglets_plugins(){return defined('_UPDATED_md5_onglets_plugins')?_UPDATED_md5_onglets_plugins:'7388a98e29023a6f71d4bade945e570e';}
}
}
?>
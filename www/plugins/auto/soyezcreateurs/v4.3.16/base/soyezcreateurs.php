<?php
/*
* Configuration de SPIP pour SoyezCreateurs
* Configurateur de mots clefs et de rubriques bas'e sur
* Configurateur Squelette Epona - 2004 Nov 10 - Marc Lebas.
* Realisation : RealET : real3t@gmail.com
* Attention, fichier en UTF-8 sans BOM
*/

if (!defined('_ECRIRE_INC_VERSION')) return;

include_spip("inc/lang");
include_spip('inc/meta');

//fonction qui permet de créer les métas de config du site
function soyezcreateurs_config_site() {
	ecrire_meta('activer_logos_survol', 'oui','non');
	ecrire_meta('config_precise_groupes', 'oui','non');
	ecrire_meta('articles_surtitre', 'oui','non');
	ecrire_meta('articles_soustitre', 'oui','non');
	ecrire_meta('articles_descriptif', 'oui','non');
	ecrire_meta('articles_chapeau', 'oui','non');
	ecrire_meta('articles_ps', 'oui','non');
	ecrire_meta('articles_mots', 'oui','non');
	ecrire_meta('articles_urlref', 'oui','non');
	ecrire_meta('articles_redirection', 'oui','non');
	ecrire_meta('creer_preview', 'oui','non');
	ecrire_meta('articles_modif', 'oui','non');
	ecrire_meta('rubriques_descriptif', 'oui','non');
	ecrire_meta('forums_urlref', 'oui','non');
	ecrire_meta('activer_sites', 'oui','non');
	ecrire_meta('forums_publics', 'non','non');
	ecrire_meta('accepter_inscriptions', 'oui','non');
	ecrire_meta('prevenir_auteurs', ',pos,pri,abo,','non');
	ecrire_meta('messagerie_agenda', 'non','non');
	ecrire_meta('articles_versions', 'oui','non');
	ecrire_meta('activer_statistiques', 'oui','non');
	ecrire_meta('documents_objets', 'spip_articles,spip_rubriques,','non');
	ecrire_meta('preview', ',0minirezo,1comite,','non');
	ecrire_meta('image_process', 'gd2', 'non');
	ecrire_meta('gd_formats_read', 'gif,jpg,png', 'non');
	ecrire_meta('gd_formats', 'gif,jpg,png', 'non');
	ecrire_meta('formats_graphiques', 'gif,jpg,png', 'non');
	ecrire_meta('btv2', 'a:1:{s:7:"avancee";s:3:"Oui";}', 'non');
	ecrire_meta('bte', 'a:14:{s:5:"puces";s:3:"Oui";s:14:"titraille1open";s:17:"<h2 class="spip">";s:15:"titraille1close";s:5:"</h2>";s:14:"titraille2open";s:17:"<h3 class="spip">";s:15:"titraille2close";s:5:"</h3>";s:14:"titraille3open";s:17:"<h4 class="spip">";s:15:"titraille3close";s:5:"</h4>";s:14:"titraille4open";s:17:"<h5 class="spip">";s:15:"titraille4close";s:5:"</h5>";s:14:"titraille5open";s:17:"<h6 class="spip">";s:15:"titraille5close";s:5:"</h6>";s:9:"insertcss";s:3:"Non";s:17:"defaultbarrestyle";s:5:"close";s:14:"mode_titraille";N;}', 'non');
	ecrire_meta('barre_typo_generalisee', 'a:6:{s:38:\"rubriques_texte_barre_typo_generalisee\";s:2:\"on\";s:40:\"groupesmots_texte_barre_typo_generalisee\";s:2:\"on\";s:33:\"mots_texte_barre_typo_generalisee\";s:2:\"on\";s:40:\"sites_description_barre_typo_generalisee\";s:2:\"on\";s:48:\"configuration_description_barre_typo_generalisee\";s:2:\"on\";s:42:\"auteurs_quietesvous_barre_typo_generalisee\";s:2:\"on\";}','non');
	ecrire_meta('socialtags', 'a:5:{s:4:"tags";a:7:{i:0;s:0:"";i:1;s:9:"blogmarks";i:2;s:9:"delicious";i:3;s:4:"digg";i:4;s:6:"google";i:5;s:7:"twitter";i:6;s:6:"viadeo";}s:10:"jsselector";s:11:"#socialtags";s:5:"badge";s:0:"";s:7:"badgejs";s:0:"";s:9:"ifreferer";N;}','non');
	ecrire_meta('ppp', 'a:5:{s:14:"descriptif_ppp";s:0:"";s:9:"chapo_ppp";s:2:"on";s:6:"ps_ppp";s:2:"on";s:29:"configuration_description_ppp";s:2:"on";s:23:"auteurs_quietesvous_ppp";s:2:"on";}', 'non');
	ecrire_meta('gis', 'a:11:{s:25:"champ_map_config_geocoder";s:0:"";s:3:"lat";s:2:"45";s:3:"lon";s:1:"1";s:4:"zoom";s:2:"10";s:12:"api_key_bing";s:0:"";s:8:"geocoder";s:2:"on";s:7:"adresse";s:2:"on";s:23:"geolocaliser_user_html5";s:0:"";s:10:"gis_objets";a:5:{i:0;s:13:"spip_articles";i:1;s:12:"spip_auteurs";i:2;s:14:"spip_documents";i:3;s:11:"spip_syndic";i:4;s:0:"";}s:12:"layer_defaut";s:16:"openstreetmap_fr";s:6:"layers";a:5:{i:0;s:16:"openstreetmap_fr";i:1;s:14:"google_roadmap";i:2;s:16:"google_satellite";i:3;s:14:"google_terrain";i:4;s:17:"stamen_watercolor";}}', 'non');

	// Activer les crayons dans ecrire, et la barre typo sur les crayons, réduire les images à 400 px de large (au cas où)
	ecrire_config('crayons/barretypo','on');
	ecrire_config('crayons/reduire_logo',400);
	ecrire_config('crayons/espaceprive','on');
	ecrire_config('crayons/exec_autorise','*');
	//pré-configuration du plugin microblog
	ecrire_config('microblog/evt_publierarticles', 'on');
	ecrire_config('microblog/evt_publierarticlesfutur', 'publication');
	//Le mode texte seul de bouton texte bug au retour dans la page avec MediaBox
	ecrire_config('boutonstexte/txtOnly','_');
	// Permettre aux webmestres d'éditer les forums (dans le privé et le public, avec les crayons).
	ecrire_config('autorite/editer_forums',1);

	include_spip('inc/filtres');
	$f = chercher_filtre('info_plugin');
	if ($f('savecfg', 'est_actif')) {
		include_spip('inc/sauvegarder_savecfg');
		sauvegarder_savecfg('soyezcreateurs_couleurs','Violet','a:39:{s:7:"body_bk";s:7:"#a16e9e";s:6:"header";s:7:"#ffffff";s:9:"header_bk";s:7:"#664e3b";s:11:"datemajsite";s:7:"#ffffff";s:14:"datemajsite_bk";s:7:"#402816";s:6:"footer";s:7:"#ffffff";s:9:"footer_bk";s:7:"#664e3b";s:10:"navigation";s:7:"#013067";s:13:"navigation_bk";s:7:"#3fa3d7";s:8:"menuhaut";s:7:"#ffffff";s:11:"menuhaut_bk";s:7:"#a1856e";s:7:"logo_bk";s:11:"transparent";s:5:"extra";s:7:"#013067";s:8:"extra_bk";s:7:"#3fa3d7";s:6:"menu_a";s:7:"#ffffff";s:9:"menu_a_bk";s:7:"#5599cd";s:12:"menu_a_hover";s:7:"#ffffff";s:15:"menu_a_hover_bk";s:7:"#66aade";s:13:"menu_a_active";s:7:"#5599cd";s:16:"menu_a_active_bk";s:7:"#ffffff";s:13:"menu_a_strong";s:7:"#013067";s:16:"menu_a_strong_bk";s:7:"#ffffff";s:12:"vignettes_bk";s:7:"#3fa3d7";s:9:"container";s:7:"#013067";s:12:"container_bk";s:7:"#ffffff";s:9:"titraille";s:7:"#013067";s:12:"titraille_bk";s:7:"#a6cbec";s:4:"link";s:7:"#5599cd";s:7:"visited";s:7:"#66aade";s:5:"hover";s:7:"#a1856e";s:6:"active";s:7:"#402816";s:15:"fontsnavigation";s:34:"Verdana, Arial, Geneva, sans-serif";s:12:"fontscontent";s:34:"Verdana, Arial, Geneva, sans-serif";s:14:"fontsizeheader";s:3:"1.2";s:14:"fontsizefooter";s:3:"1.2";s:18:"fontsizenavigation";s:3:"1.2";s:15:"fontsizecontenu";s:3:"1.2";s:13:"autovignettes";s:4:"auto";s:17:"fontsizevignettes";s:2:"16";}');
		sauvegarder_savecfg('soyezcreateurs_couleurs','Bleu & marron ','a:35:{s:7:"body_bk";s:7:"#d2e0eb";s:6:"header";s:4:"#fff";s:9:"header_bk";s:7:"#7c4617";s:11:"datemajsite";s:7:"#ffffff";s:14:"datemajsite_bk";s:7:"#7c4617";s:6:"footer";s:7:"#ffffff";s:9:"footer_bk";s:7:"#7c4617";s:10:"navigation";s:7:"#7c4617";s:13:"navigation_bk";s:7:"#d2e0eb";s:7:"logo_bk";s:11:"transparent";s:5:"extra";s:7:"#7c4617";s:8:"extra_bk";s:7:"#ffffff";s:6:"menu_a";s:7:"#7c4617";s:9:"menu_a_bk";s:7:"#d2e0eb";s:12:"menu_a_hover";s:7:"#ffffff";s:15:"menu_a_hover_bk";s:7:"#7c4617";s:13:"menu_a_active";s:7:"#7c4617";s:16:"menu_a_active_bk";s:7:"#ffffff";s:13:"menu_a_strong";s:7:"#7c4617";s:16:"menu_a_strong_bk";s:7:"#b7cde1";s:9:"container";s:7:"#321d0b";s:12:"container_bk";s:7:"#ffffff";s:9:"titraille";s:7:"#7c4617";s:12:"titraille_bk";s:7:"#b7cde1";s:4:"link";s:7:"#273e54";s:7:"visited";s:7:"#321d0b";s:5:"hover";s:7:"#7c4617";s:6:"active";s:7:"#321d0b";s:15:"fontsnavigation";s:31:""Times New Roman", Times, serif";s:12:"fontscontent";s:34:"Verdana, Arial, Geneva, sans-serif";s:14:"fontsizeheader";s:3:"1.4";s:14:"fontsizefooter";s:3:"1.3";s:18:"fontsizenavigation";s:3:"1.5";s:15:"fontsizecontenu";s:3:"1.2";s:12:"vignettes_bk";s:7:"#9dba00";}');
		sauvegarder_savecfg('soyezcreateurs_couleurs','Vert anis','a:54:{s:7:"body_bk";s:7:"#e5eacc";s:6:"header";s:7:"#005500";s:9:"header_bk";s:7:"#c5e41c";s:11:"datemajsite";s:7:"#ffffff";s:14:"datemajsite_bk";s:7:"#7d9a00";s:6:"footer";s:7:"#c5e41c";s:9:"footer_bk";s:7:"#7d9a00";s:10:"navigation";s:7:"#005500";s:13:"navigation_bk";s:7:"#c5e41c";s:7:"logo_bk";s:11:"transparent";s:5:"extra";s:7:"#005500";s:8:"extra_bk";s:7:"#c5e41c";s:6:"menu_a";s:7:"#ffffff";s:9:"menu_a_bk";s:7:"#7d9a00";s:12:"menu_a_hover";s:7:"#ffffff";s:15:"menu_a_hover_bk";s:7:"#9dba00";s:13:"menu_a_active";s:7:"#7d9a00";s:16:"menu_a_active_bk";s:7:"#ffffff";s:13:"menu_a_strong";s:7:"#ff8800";s:16:"menu_a_strong_bk";s:7:"#ffffff";s:9:"container";s:7:"#3e4d00";s:12:"container_bk";s:7:"#ffffff";s:9:"titraille";s:7:"#7d9a00";s:12:"titraille_bk";s:7:"#c5e41c";s:4:"link";s:7:"#7d9a00";s:7:"visited";s:7:"#9dba00";s:5:"hover";s:7:"#ff8c00";s:6:"active";s:7:"#b672a3";s:15:"fontsnavigation";s:34:"Verdana, Arial, Geneva, sans-serif";s:12:"fontscontent";s:34:"Verdana, Arial, Geneva, sans-serif";s:14:"fontsizeheader";s:3:"1.2";s:14:"fontsizefooter";s:3:"1.2";s:18:"fontsizenavigation";s:3:"1.2";s:15:"fontsizecontenu";s:3:"1.2";s:12:"vignettes_bk";s:7:"#9dba00";s:12:"body_degrade";N;s:14:"footer_degrade";N;s:8:"menuhaut";s:7:"#005500";s:11:"menuhaut_bk";s:7:"#c5e41c";s:16:"menuhaut_degrade";N;s:17:"cadreinfo_degrade";N;s:17:"citations_degrade";N;s:17:"cartouche_degrade";N;s:17:"titraille_degrade";N;s:19:"titraille_ssniveaux";s:7:"#7d9a00";s:22:"titraille_ssniveaux_bk";s:7:"#3e4d00";s:11:"cadrestexte";s:7:"#3e4d00";s:14:"cadrestexte_bk";s:7:"#c5e41c";s:13:"header_lettre";s:7:"#005500";s:16:"header_lettre_bk";s:7:"#c5e41c";s:16:"titraille_lettre";s:7:"#7d9a00";s:18:"fontsizeartrecents";s:1:"1";s:13:"autovignettes";s:4:"auto";s:17:"fontsizevignettes";s:2:"16";}');
		sauvegarder_savecfg('soyezcreateurs_couleurs','Rouge bordeaux','a:54:{s:7:"body_bk";s:7:"#872D3F";s:6:"header";s:7:"#F8F2EC";s:9:"header_bk";s:7:"#872D3F";s:11:"datemajsite";s:7:"#872D3F";s:14:"datemajsite_bk";s:7:"#F8F2EC";s:6:"footer";s:7:"#F8F2EC";s:9:"footer_bk";s:7:"#872D3F";s:10:"navigation";s:7:"#F8F2EC";s:13:"navigation_bk";s:7:"#872D3F";s:8:"menuhaut";s:7:"#F8F2EC";s:11:"menuhaut_bk";s:11:"transparent";s:7:"logo_bk";s:7:"#872D3F";s:5:"extra";s:7:"#F8F2EC";s:8:"extra_bk";s:7:"#872D3F";s:6:"menu_a";s:7:"#F8F2EC";s:9:"menu_a_bk";s:7:"#872D3F";s:12:"menu_a_hover";s:7:"#8edbf6";s:15:"menu_a_hover_bk";s:7:"#872D3F";s:13:"menu_a_active";s:7:"#F8F2EC";s:16:"menu_a_active_bk";s:7:"#872D3F";s:13:"menu_a_strong";s:7:"#8edbf6";s:16:"menu_a_strong_bk";s:7:"#872D3F";s:12:"vignettes_bk";s:7:"#872D3F";s:9:"container";s:7:"#872D3F";s:12:"container_bk";s:7:"#F8F2EC";s:9:"titraille";s:7:"#6c3742";s:12:"titraille_bk";s:7:"#F8F2EC";s:4:"link";s:7:"#872D3F";s:7:"visited";s:7:"#6c3742";s:5:"hover";s:7:"#6c3742";s:6:"active";s:7:"#6c3742";s:15:"fontsnavigation";s:34:"Verdana, Arial, Geneva, sans-serif";s:12:"fontscontent";s:34:"Verdana, Arial, Geneva, sans-serif";s:14:"fontsizeheader";s:3:"1.0";s:14:"fontsizefooter";s:3:"1.2";s:18:"fontsizenavigation";s:3:"1.2";s:15:"fontsizecontenu";s:3:"1.2";s:18:"fontsizeartrecents";s:3:"1.2";s:13:"autovignettes";s:4:"auto";s:17:"fontsizevignettes";s:2:"16";s:12:"body_degrade";N;s:14:"footer_degrade";N;s:16:"menuhaut_degrade";N;s:17:"cadreinfo_degrade";N;s:17:"citations_degrade";N;s:17:"cartouche_degrade";N;s:17:"titraille_degrade";N;s:19:"titraille_ssniveaux";s:7:"#6c3742";s:22:"titraille_ssniveaux_bk";s:7:"#872D3F";s:11:"cadrestexte";s:7:"#872D3F";s:14:"cadrestexte_bk";s:7:"#F8F2EC";s:13:"header_lettre";s:7:"#F8F2EC";s:16:"header_lettre_bk";s:7:"#872D3F";s:16:"titraille_lettre";s:7:"#6c3742";}');
		sauvegarder_savecfg('soyezcreateurs_couleurs','(Par défaut)','a:54:{s:7:"body_bk";s:7:"#a1856e";s:6:"header";s:7:"#ffffff";s:9:"header_bk";s:7:"#664e3b";s:11:"datemajsite";s:7:"#ffffff";s:14:"datemajsite_bk";s:7:"#402816";s:6:"footer";s:7:"#ffffff";s:9:"footer_bk";s:7:"#664e3b";s:10:"navigation";s:7:"#013067";s:13:"navigation_bk";s:7:"#3fa3d7";s:8:"menuhaut";s:7:"#ffffff";s:11:"menuhaut_bk";s:7:"#a1856e";s:7:"logo_bk";s:11:"transparent";s:5:"extra";s:7:"#013067";s:8:"extra_bk";s:7:"#3fa3d7";s:6:"menu_a";s:7:"#ffffff";s:9:"menu_a_bk";s:7:"#5599cd";s:12:"menu_a_hover";s:7:"#ffffff";s:15:"menu_a_hover_bk";s:7:"#66aade";s:13:"menu_a_active";s:7:"#5599cd";s:16:"menu_a_active_bk";s:7:"#ffffff";s:13:"menu_a_strong";s:7:"#013067";s:16:"menu_a_strong_bk";s:7:"#ffffff";s:12:"vignettes_bk";s:7:"#3fa3d7";s:9:"container";s:7:"#013067";s:12:"container_bk";s:7:"#ffffff";s:9:"titraille";s:7:"#013067";s:12:"titraille_bk";s:7:"#a6cbec";s:4:"link";s:7:"#5599cd";s:7:"visited";s:7:"#66aade";s:5:"hover";s:7:"#a1856e";s:6:"active";s:7:"#402816";s:15:"fontsnavigation";s:34:"Verdana, Arial, Geneva, sans-serif";s:12:"fontscontent";s:34:"Verdana, Arial, Geneva, sans-serif";s:14:"fontsizeheader";s:3:"1.2";s:14:"fontsizefooter";s:3:"1.2";s:18:"fontsizenavigation";s:3:"1.2";s:15:"fontsizecontenu";s:3:"1.2";s:13:"autovignettes";s:4:"auto";s:17:"fontsizevignettes";s:2:"16";s:12:"body_degrade";N;s:14:"footer_degrade";N;s:16:"menuhaut_degrade";N;s:17:"cadreinfo_degrade";N;s:17:"citations_degrade";N;s:17:"cartouche_degrade";N;s:17:"titraille_degrade";N;s:19:"titraille_ssniveaux";s:7:"#013067";s:22:"titraille_ssniveaux_bk";s:7:"#a6cbec";s:11:"cadrestexte";s:7:"#002652";s:14:"cadrestexte_bk";s:7:"#e4eff9";s:13:"header_lettre";s:7:"#ffffff";s:16:"header_lettre_bk";s:7:"#664e3b";s:16:"titraille_lettre";s:7:"#013067";s:18:"fontsizeartrecents";s:1:"1";}');
		sauvegarder_savecfg('soyezcreateurs_couleurs','Bleu & orange','a:54:{s:7:"body_bk";s:7:"#6e73a1";s:6:"header";s:7:"#ffb014";s:9:"header_bk";s:7:"#3b4266";s:11:"datemajsite";s:7:"#ffffff";s:14:"datemajsite_bk";s:7:"#161e40";s:6:"footer";s:7:"#ffffff";s:9:"footer_bk";s:7:"#3b4066";s:10:"navigation";s:7:"#674d01";s:13:"navigation_bk";s:7:"#cda555";s:8:"menuhaut";s:7:"#ffffff";s:11:"menuhaut_bk";s:7:"#6e7aa1";s:7:"logo_bk";s:11:"transparent";s:5:"extra";s:7:"#674401";s:8:"extra_bk";s:7:"#cda555";s:6:"menu_a";s:7:"#ffffff";s:9:"menu_a_bk";s:7:"#d79c3f";s:12:"menu_a_hover";s:7:"#ffffff";s:15:"menu_a_hover_bk";s:7:"#deb566";s:13:"menu_a_active";s:7:"#cda955";s:16:"menu_a_active_bk";s:7:"#ffffff";s:13:"menu_a_strong";s:7:"#674f01";s:16:"menu_a_strong_bk";s:7:"#d4dcf2";s:12:"vignettes_bk";s:7:"#d7b23f";s:9:"container";s:7:"#674701";s:12:"container_bk";s:7:"#e1e3f4";s:9:"titraille";s:7:"#674c01";s:12:"titraille_bk";s:7:"#eccea6";s:4:"link";s:7:"#cda355";s:7:"visited";s:7:"#deb566";s:5:"hover";s:7:"#6e79a1";s:6:"active";s:7:"#aa8a41";s:15:"fontsnavigation";s:34:"Verdana, Arial, Geneva, sans-serif";s:12:"fontscontent";s:34:"Verdana, Arial, Geneva, sans-serif";s:14:"fontsizeheader";s:3:"1.2";s:14:"fontsizefooter";s:3:"1.2";s:18:"fontsizenavigation";s:3:"1.2";s:15:"fontsizecontenu";s:3:"1.2";s:18:"fontsizeartrecents";s:1:"1";s:13:"autovignettes";s:4:"auto";s:17:"fontsizevignettes";s:2:"16";s:12:"body_degrade";N;s:14:"footer_degrade";N;s:16:"menuhaut_degrade";N;s:17:"cadreinfo_degrade";N;s:17:"citations_degrade";N;s:17:"cartouche_degrade";N;s:17:"titraille_degrade";N;s:19:"titraille_ssniveaux";s:7:"#013067";s:22:"titraille_ssniveaux_bk";s:7:"#a6cbec";s:11:"cadrestexte";s:7:"#002652";s:14:"cadrestexte_bk";s:7:"#f9f2e4";s:13:"header_lettre";s:7:"#ffb014";s:16:"header_lettre_bk";s:7:"#3b4266";s:16:"titraille_lettre";s:7:"#013067";}');
		sauvegarder_savecfg('soyezcreateurs_couleurs','Bleu blanc rouge','a:54:{s:7:"body_bk";s:7:"#6e74a1";s:6:"header";s:7:"#000000";s:9:"header_bk";s:7:"#ffffff";s:11:"datemajsite";s:7:"#ffffff";s:14:"datemajsite_bk";s:7:"#ce6f69";s:6:"footer";s:7:"#ffffff";s:9:"footer_bk";s:7:"#3b3d66";s:10:"navigation";s:7:"#013067";s:13:"navigation_bk";s:7:"#f7eded";s:8:"menuhaut";s:7:"#ffffff";s:11:"menuhaut_bk";s:7:"#cf3c3a";s:7:"logo_bk";s:11:"transparent";s:5:"extra";s:7:"#013067";s:8:"extra_bk";s:7:"#f7eded";s:6:"menu_a";s:7:"#000000";s:9:"menu_a_bk";s:7:"#ffffff";s:12:"menu_a_hover";s:7:"#000000";s:15:"menu_a_hover_bk";s:7:"#de6c66";s:13:"menu_a_active";s:7:"#ffffff";s:16:"menu_a_active_bk";s:7:"#e5bdbd";s:13:"menu_a_strong";s:7:"#670301";s:16:"menu_a_strong_bk";s:7:"#ffffff";s:12:"vignettes_bk";s:7:"#3b3d66";s:9:"container";s:7:"#013067";s:12:"container_bk";s:7:"#7eb4ce";s:9:"titraille";s:7:"#013067";s:12:"titraille_bk";s:7:"#e9bdba";s:4:"link";s:7:"#cd5559";s:7:"visited";s:7:"#de666a";s:5:"hover";s:7:"#a16f6e";s:6:"active";s:7:"#6a2526";s:15:"fontsnavigation";s:34:"Verdana, Arial, Geneva, sans-serif";s:12:"fontscontent";s:34:"Verdana, Arial, Geneva, sans-serif";s:14:"fontsizeheader";s:3:"1.2";s:14:"fontsizefooter";s:3:"1.2";s:18:"fontsizenavigation";s:3:"1.2";s:15:"fontsizecontenu";s:3:"1.2";s:18:"fontsizeartrecents";s:1:"1";s:13:"autovignettes";s:4:"auto";s:17:"fontsizevignettes";s:2:"16";s:12:"body_degrade";N;s:14:"footer_degrade";N;s:16:"menuhaut_degrade";N;s:17:"cadreinfo_degrade";N;s:17:"citations_degrade";N;s:17:"cartouche_degrade";N;s:17:"titraille_degrade";N;s:19:"titraille_ssniveaux";s:7:"#013067";s:22:"titraille_ssniveaux_bk";s:7:"#a6cbec";s:11:"cadrestexte";s:7:"#002652";s:14:"cadrestexte_bk";s:7:"#e4eff9";s:13:"header_lettre";s:7:"#000000";s:16:"header_lettre_bk";s:7:"#ffffff";s:16:"titraille_lettre";s:7:"#013067";}');
		sauvegarder_savecfg('soyezcreateurs_couleurs','Gris & jaune','a:54:{s:7:"body_bk";s:7:"#828282";s:6:"header";s:7:"#e03838";s:9:"header_bk";s:7:"#504f4e";s:11:"datemajsite";s:7:"#ffffff";s:14:"datemajsite_bk";s:7:"#262626";s:6:"footer";s:7:"#ffffff";s:9:"footer_bk";s:7:"#504f4e";s:10:"navigation";s:7:"#676001";s:13:"navigation_bk";s:7:"#d7d13f";s:8:"menuhaut";s:7:"#ffffff";s:11:"menuhaut_bk";s:7:"#a19e6e";s:7:"logo_bk";s:11:"transparent";s:5:"extra";s:7:"#675e01";s:8:"extra_bk";s:7:"#d7c63f";s:6:"menu_a";s:7:"#ffffff";s:9:"menu_a_bk";s:7:"#cdc655";s:12:"menu_a_hover";s:7:"#ffffff";s:15:"menu_a_hover_bk";s:7:"#ded766";s:13:"menu_a_active";s:7:"#8c8c87";s:16:"menu_a_active_bk";s:7:"#ffffff";s:13:"menu_a_strong";s:7:"#2f2f2d";s:16:"menu_a_strong_bk";s:7:"#f5f3e0";s:12:"vignettes_bk";s:7:"#d7c93f";s:9:"container";s:7:"#383838";s:12:"container_bk";s:7:"#f5f3e0";s:9:"titraille";s:7:"#313335";s:12:"titraille_bk";s:7:"#ece7a6";s:4:"link";s:7:"#8f8f8f";s:7:"visited";s:7:"#9fa1a3";s:5:"hover";s:7:"#868483";s:6:"active";s:7:"#272726";s:15:"fontsnavigation";s:34:"Verdana, Arial, Geneva, sans-serif";s:12:"fontscontent";s:34:"Verdana, Arial, Geneva, sans-serif";s:14:"fontsizeheader";s:3:"1.2";s:14:"fontsizefooter";s:3:"1.2";s:18:"fontsizenavigation";s:3:"1.2";s:15:"fontsizecontenu";s:3:"1.2";s:18:"fontsizeartrecents";s:1:"1";s:13:"autovignettes";s:4:"auto";s:17:"fontsizevignettes";s:2:"16";s:12:"body_degrade";N;s:14:"footer_degrade";N;s:16:"menuhaut_degrade";N;s:17:"cadreinfo_degrade";N;s:17:"citations_degrade";N;s:17:"cartouche_degrade";N;s:17:"titraille_degrade";N;s:19:"titraille_ssniveaux";s:7:"#013067";s:22:"titraille_ssniveaux_bk";s:7:"#c5cace";s:11:"cadrestexte";s:7:"#002652";s:14:"cadrestexte_bk";s:7:"#dadbdc";s:13:"header_lettre";s:7:"#e03838";s:16:"header_lettre_bk";s:7:"#504f4e";s:16:"titraille_lettre";s:7:"#013067";}');
		sauvegarder_savecfg('soyezcreateurs_couleurs','Noir & blanc','a:54:{s:7:"body_bk";s:7:"#ffffff";s:6:"header";s:7:"#ffffff";s:9:"header_bk";s:7:"#312f2f";s:11:"datemajsite";s:7:"#ffffff";s:14:"datemajsite_bk";s:7:"#000000";s:6:"footer";s:7:"#ffffff";s:9:"footer_bk";s:7:"#000000";s:10:"navigation";s:7:"#000000";s:13:"navigation_bk";s:7:"#9e9a9b";s:8:"menuhaut";s:7:"#ffffff";s:11:"menuhaut_bk";s:7:"#000000";s:7:"logo_bk";s:11:"transparent";s:5:"extra";s:7:"#000000";s:8:"extra_bk";s:7:"#9e9a9b";s:6:"menu_a";s:7:"#ffffff";s:9:"menu_a_bk";s:7:"#000000";s:12:"menu_a_hover";s:7:"#000000";s:15:"menu_a_hover_bk";s:7:"#ffffff";s:13:"menu_a_active";s:7:"#000000";s:16:"menu_a_active_bk";s:7:"#ffffff";s:13:"menu_a_strong";s:7:"#000000";s:16:"menu_a_strong_bk";s:7:"#ffffff";s:12:"vignettes_bk";s:7:"#000000";s:9:"container";s:7:"#000000";s:12:"container_bk";s:7:"#dedede";s:9:"titraille";s:7:"#000000";s:12:"titraille_bk";s:7:"#9e9a9b";s:4:"link";s:7:"#000000";s:7:"visited";s:7:"#9e9a9b";s:5:"hover";s:7:"#000000";s:6:"active";s:7:"#000000";s:15:"fontsnavigation";s:34:"Verdana, Arial, Geneva, sans-serif";s:12:"fontscontent";s:34:"Verdana, Arial, Geneva, sans-serif";s:14:"fontsizeheader";s:3:"1.2";s:14:"fontsizefooter";s:3:"1.2";s:18:"fontsizenavigation";s:3:"1.2";s:15:"fontsizecontenu";s:3:"1.2";s:18:"fontsizeartrecents";s:1:"1";s:13:"autovignettes";s:4:"auto";s:17:"fontsizevignettes";s:2:"16";s:12:"body_degrade";N;s:14:"footer_degrade";N;s:16:"menuhaut_degrade";N;s:17:"cadreinfo_degrade";N;s:17:"citations_degrade";N;s:17:"cartouche_degrade";N;s:17:"titraille_degrade";N;s:19:"titraille_ssniveaux";s:7:"#000000";s:22:"titraille_ssniveaux_bk";s:7:"#ffffff";s:11:"cadrestexte";s:7:"#000000";s:14:"cadrestexte_bk";s:7:"#ffffff";s:13:"header_lettre";s:7:"#ffffff";s:16:"header_lettre_bk";s:7:"#000000";s:16:"titraille_lettre";s:7:"#000000";}');
		sauvegarder_savecfg('soyezcreateurs_couleurs','Pastel bleu','a:54:{s:7:"body_bk";s:7:"#ffffff";s:6:"header";s:7:"#94abe0";s:9:"header_bk";s:7:"#ebe8e5";s:11:"datemajsite";s:7:"#96abe3";s:14:"datemajsite_bk";s:7:"#e3ddd9";s:6:"footer";s:7:"#9bb3df";s:9:"footer_bk";s:7:"#e9e5e2";s:10:"navigation";s:7:"#4a9cfc";s:13:"navigation_bk";s:7:"#d2e8f4";s:8:"menuhaut";s:7:"#9db2e1";s:11:"menuhaut_bk";s:7:"#ebe5e0";s:7:"logo_bk";s:11:"transparent";s:5:"extra";s:7:"#3e94f9";s:8:"extra_bk";s:7:"#c3e3f3";s:6:"menu_a";s:7:"#1a2d65";s:9:"menu_a_bk";s:7:"#d5e5f1";s:12:"menu_a_hover";s:7:"#293366";s:15:"menu_a_hover_bk";s:7:"#c1dcf0";s:13:"menu_a_active";s:7:"#83b4d8";s:16:"menu_a_active_bk";s:7:"#ffffff";s:13:"menu_a_strong";s:7:"#3b95fc";s:16:"menu_a_strong_bk";s:7:"#ffffff";s:12:"vignettes_bk";s:7:"#bcdff1";s:9:"container";s:7:"#4d9cf9";s:12:"container_bk";s:7:"#ffffff";s:9:"titraille";s:7:"#5ba5fb";s:12:"titraille_bk";s:7:"#e6f0fa";s:4:"link";s:7:"#77add4";s:7:"visited";s:7:"#7db5e3";s:5:"hover";s:7:"#a18872";s:6:"active";s:7:"#cc8f61";s:15:"fontsnavigation";s:34:"Verdana, Arial, Geneva, sans-serif";s:12:"fontscontent";s:34:"Verdana, Arial, Geneva, sans-serif";s:14:"fontsizeheader";s:3:"1.2";s:14:"fontsizefooter";s:3:"1.2";s:18:"fontsizenavigation";s:3:"1.2";s:15:"fontsizecontenu";s:3:"1.2";s:18:"fontsizeartrecents";s:1:"1";s:13:"autovignettes";s:4:"auto";s:17:"fontsizevignettes";s:2:"16";s:12:"body_degrade";N;s:14:"footer_degrade";N;s:16:"menuhaut_degrade";N;s:17:"cadreinfo_degrade";N;s:17:"citations_degrade";N;s:17:"cartouche_degrade";N;s:17:"titraille_degrade";N;s:19:"titraille_ssniveaux";s:7:"#013067";s:22:"titraille_ssniveaux_bk";s:7:"#a6cbec";s:11:"cadrestexte";s:7:"#002652";s:14:"cadrestexte_bk";s:7:"#e4eff9";s:13:"header_lettre";s:7:"#94abe0";s:16:"header_lettre_bk";s:7:"#ebe8e5";s:16:"titraille_lettre";s:7:"#013067";}');
		sauvegarder_savecfg('soyezcreateurs_couleurs','Pastel ocre','a:54:{s:7:"body_bk";s:7:"#e4ba86";s:6:"header";s:7:"#e4ab72";s:9:"header_bk";s:7:"#664e3b";s:11:"datemajsite";s:7:"#ffffff";s:14:"datemajsite_bk";s:7:"#402816";s:6:"footer";s:7:"#ffffff";s:9:"footer_bk";s:7:"#664e3b";s:10:"navigation";s:7:"#e17b14";s:13:"navigation_bk";s:7:"#bea68e";s:8:"menuhaut";s:7:"#ffffff";s:11:"menuhaut_bk";s:7:"#a1856e";s:7:"logo_bk";s:11:"transparent";s:5:"extra";s:7:"#e17b14";s:8:"extra_bk";s:7:"#bea68e";s:6:"menu_a";s:7:"#ffffff";s:9:"menu_a_bk";s:7:"#cd9a55";s:12:"menu_a_hover";s:7:"#ffffff";s:15:"menu_a_hover_bk";s:7:"#deb466";s:13:"menu_a_active";s:7:"#cd8f55";s:16:"menu_a_active_bk";s:7:"#eadecd";s:13:"menu_a_strong";s:7:"#000000";s:16:"menu_a_strong_bk";s:7:"#e9e1d3";s:12:"vignettes_bk";s:7:"#d78d3f";s:9:"container";s:7:"#673901";s:12:"container_bk";s:7:"#f9f3e4";s:9:"titraille";s:7:"#673601";s:12:"titraille_bk";s:7:"#ecd2a6";s:4:"link";s:7:"#cd9a55";s:7:"visited";s:7:"#dea466";s:5:"hover";s:7:"#a1926e";s:6:"active";s:7:"#403016";s:15:"fontsnavigation";s:34:"Verdana, Arial, Geneva, sans-serif";s:12:"fontscontent";s:34:"Verdana, Arial, Geneva, sans-serif";s:14:"fontsizeheader";s:3:"1.2";s:14:"fontsizefooter";s:3:"1.2";s:18:"fontsizenavigation";s:3:"1.2";s:15:"fontsizecontenu";s:3:"1.2";s:18:"fontsizeartrecents";s:1:"1";s:13:"autovignettes";s:4:"auto";s:17:"fontsizevignettes";s:2:"16";s:12:"body_degrade";N;s:14:"footer_degrade";N;s:16:"menuhaut_degrade";N;s:17:"cadreinfo_degrade";N;s:17:"citations_degrade";N;s:17:"cartouche_degrade";N;s:17:"titraille_degrade";N;s:19:"titraille_ssniveaux";s:7:"#673f01";s:22:"titraille_ssniveaux_bk";s:7:"#eccea6";s:11:"cadrestexte";s:7:"#523000";s:14:"cadrestexte_bk";s:7:"#f9f3e4";s:13:"header_lettre";s:7:"#e4ab72";s:16:"header_lettre_bk";s:7:"#664e3b";s:16:"titraille_lettre";s:7:"#673601";}');
		sauvegarder_savecfg('soyezcreateurs_couleurs','Rouge & jaune','a:54:{s:7:"body_bk";s:7:"#efca6c";s:6:"header";s:7:"#ffffff";s:9:"header_bk";s:7:"#a71716";s:11:"datemajsite";s:7:"#ffffff";s:14:"datemajsite_bk";s:7:"#881114";s:6:"footer";s:7:"#ffffff";s:9:"footer_bk";s:7:"#881114";s:10:"navigation";s:7:"#e3d98c";s:13:"navigation_bk";s:7:"#853839";s:8:"menuhaut";s:7:"#ffffff";s:11:"menuhaut_bk";s:7:"#853839";s:7:"logo_bk";s:11:"transparent";s:5:"extra";s:7:"#ffffff";s:8:"extra_bk";s:7:"#853839";s:6:"menu_a";s:7:"#ffffff";s:9:"menu_a_bk";s:7:"#cd7113";s:12:"menu_a_hover";s:7:"#ffffff";s:15:"menu_a_hover_bk";s:7:"#c1103b";s:13:"menu_a_active";s:7:"#000000";s:16:"menu_a_active_bk";s:7:"#ffffff";s:13:"menu_a_strong";s:7:"#c32234";s:16:"menu_a_strong_bk";s:7:"#ffffff";s:12:"vignettes_bk";s:7:"#ffffff";s:9:"container";s:7:"#c32234";s:12:"container_bk";s:7:"#f7e8d9";s:9:"titraille";s:7:"#c32234";s:12:"titraille_bk";s:7:"#efca6c";s:4:"link";s:7:"#ec3927";s:7:"visited";s:7:"#ec3927";s:5:"hover";s:7:"#da552f";s:6:"active";s:7:"#a7432f";s:15:"fontsnavigation";s:34:"Verdana, Arial, Geneva, sans-serif";s:12:"fontscontent";s:34:"Verdana, Arial, Geneva, sans-serif";s:14:"fontsizeheader";s:3:"1.2";s:14:"fontsizefooter";s:3:"1.2";s:18:"fontsizenavigation";s:3:"1.2";s:15:"fontsizecontenu";s:3:"1.2";s:18:"fontsizeartrecents";s:1:"1";s:13:"autovignettes";s:4:"auto";s:17:"fontsizevignettes";s:2:"16";s:12:"body_degrade";N;s:14:"footer_degrade";N;s:16:"menuhaut_degrade";N;s:17:"cadreinfo_degrade";N;s:17:"citations_degrade";N;s:17:"cartouche_degrade";N;s:17:"titraille_degrade";N;s:19:"titraille_ssniveaux";s:7:"#674b01";s:22:"titraille_ssniveaux_bk";s:7:"#ecaaa6";s:11:"cadrestexte";s:7:"#523100";s:14:"cadrestexte_bk";s:7:"#f9e4e4";s:13:"header_lettre";s:7:"#ffffff";s:16:"header_lettre_bk";s:7:"#a71716";s:16:"titraille_lettre";s:7:"#c32234";}');
		sauvegarder_savecfg('soyezcreateurs_couleurs','Vert été','a:54:{s:7:"body_bk";s:7:"#d0ef6c";s:6:"header";s:7:"#f1f7d9";s:9:"header_bk";s:7:"#25a716";s:11:"datemajsite";s:7:"#ffffff";s:14:"datemajsite_bk";s:7:"#1f8811";s:6:"footer";s:7:"#ffffff";s:9:"footer_bk";s:7:"#148811";s:10:"navigation";s:7:"#bce38c";s:13:"navigation_bk";s:7:"#3d8538";s:8:"menuhaut";s:7:"#ffffff";s:11:"menuhaut_bk";s:7:"#38853d";s:7:"logo_bk";s:11:"transparent";s:5:"extra";s:7:"#ffffff";s:8:"extra_bk";s:7:"#38853d";s:6:"menu_a";s:7:"#ffffff";s:9:"menu_a_bk";s:7:"#3d8538";s:12:"menu_a_hover";s:7:"#ffffff";s:15:"menu_a_hover_bk";s:7:"#12c110";s:13:"menu_a_active";s:7:"#000000";s:16:"menu_a_active_bk";s:7:"#ffffff";s:13:"menu_a_strong";s:7:"#29c322";s:16:"menu_a_strong_bk";s:7:"#ffffff";s:12:"vignettes_bk";s:7:"#ffffff";s:9:"container";s:7:"#25c322";s:12:"container_bk";s:7:"#f1f7d9";s:9:"titraille";s:7:"#22c324";s:12:"titraille_bk";s:7:"#c4ef6c";s:4:"link";s:7:"#32ec27";s:7:"visited";s:7:"#27ec27";s:5:"hover";s:7:"#34da2f";s:6:"active";s:7:"#32a72f";s:15:"fontsnavigation";s:34:"Verdana, Arial, Geneva, sans-serif";s:12:"fontscontent";s:34:"Verdana, Arial, Geneva, sans-serif";s:14:"fontsizeheader";s:3:"1.2";s:14:"fontsizefooter";s:3:"1.2";s:18:"fontsizenavigation";s:3:"1.2";s:15:"fontsizecontenu";s:3:"1.2";s:18:"fontsizeartrecents";s:1:"1";s:13:"autovignettes";s:4:"auto";s:17:"fontsizevignettes";s:2:"16";s:12:"body_degrade";N;s:14:"footer_degrade";N;s:16:"menuhaut_degrade";N;s:17:"cadreinfo_degrade";N;s:17:"citations_degrade";N;s:17:"cartouche_degrade";N;s:17:"titraille_degrade";N;s:19:"titraille_ssniveaux";s:7:"#01673e";s:22:"titraille_ssniveaux_bk";s:7:"#a6eccd";s:11:"cadrestexte";s:7:"#002652";s:14:"cadrestexte_bk";s:7:"#f6f9e4";s:13:"header_lettre";s:7:"#f1f7d9";s:16:"header_lettre_bk";s:7:"#25a716";s:16:"titraille_lettre";s:7:"#01673e";}');
		sauvegarder_savecfg('soyezcreateurs_couleurs','Violet & vert','a:54:{s:7:"body_bk";s:7:"#9ed897";s:6:"header";s:7:"#ffffff";s:9:"header_bk";s:7:"#663b62";s:11:"datemajsite";s:7:"#ffffff";s:14:"datemajsite_bk";s:7:"#164017";s:6:"footer";s:7:"#ffffff";s:9:"footer_bk";s:7:"#663b64";s:10:"navigation";s:7:"#c982c2";s:13:"navigation_bk";s:7:"#69c975";s:8:"menuhaut";s:7:"#ffffff";s:11:"menuhaut_bk";s:7:"#70a16e";s:7:"logo_bk";s:11:"transparent";s:5:"extra";s:7:"#8a0f81";s:8:"extra_bk";s:7:"#69c975";s:6:"menu_a";s:7:"#af12a2";s:9:"menu_a_bk";s:7:"#f6daf5";s:12:"menu_a_hover";s:7:"#a4569f";s:15:"menu_a_hover_bk";s:7:"#61b757";s:13:"menu_a_active";s:7:"#cd55c7";s:16:"menu_a_active_bk";s:7:"#ffffff";s:13:"menu_a_strong";s:7:"#670165";s:16:"menu_a_strong_bk";s:7:"#ffffff";s:12:"vignettes_bk";s:7:"#663b62";s:9:"container";s:7:"#cc6cd0";s:12:"container_bk";s:7:"#c5f2d1";s:9:"titraille";s:7:"#670161";s:12:"titraille_bk";s:7:"#c08cd4";s:4:"link";s:7:"#c055cd";s:7:"visited";s:7:"#de66d4";s:5:"hover";s:7:"#a16ea0";s:6:"active";s:7:"#40163f";s:15:"fontsnavigation";s:34:"Verdana, Arial, Geneva, sans-serif";s:12:"fontscontent";s:34:"Verdana, Arial, Geneva, sans-serif";s:14:"fontsizeheader";s:3:"1.2";s:14:"fontsizefooter";s:3:"1.2";s:18:"fontsizenavigation";s:3:"1.2";s:15:"fontsizecontenu";s:3:"1.2";s:18:"fontsizeartrecents";s:1:"1";s:13:"autovignettes";s:4:"auto";s:17:"fontsizevignettes";s:2:"16";s:12:"body_degrade";N;s:14:"footer_degrade";N;s:16:"menuhaut_degrade";N;s:17:"cadreinfo_degrade";N;s:17:"citations_degrade";N;s:17:"cartouche_degrade";N;s:17:"titraille_degrade";N;s:19:"titraille_ssniveaux";s:7:"#013067";s:22:"titraille_ssniveaux_bk";s:7:"#eca6e6";s:11:"cadrestexte";s:7:"#002652";s:14:"cadrestexte_bk";s:7:"#f9e4f4";s:13:"header_lettre";s:7:"#ffffff";s:16:"header_lettre_bk";s:7:"#663b62";s:16:"titraille_lettre";s:7:"#670161";}');
	}

	spip_log("1. (soyezcreateurs_config_site) metas du plugins ecrite", _LOG_DEBUG);
	return true;
}

// fonction qui permet de trouver si un groupe de mots clés existe à partir du titre
function find_groupe($titre) {
	$titre = sql_quote($titre);
	spip_log("1. (find_groupe) recherche des occurences dans la table spip_groupes_mots de l'id de : $titre", _LOG_DEBUG);
	$count = sql_countsel("spip_groupes_mots", "titre=$titre");
	spip_log("2. (find_groupe) resultat de la recherche : $count occurences pour $titre", _LOG_DEBUG);
	return $count;
}

// fonction pour trouver l'id du groupe de mots clés à partir du titre du groupe
function id_groupe($titre) {
	$titre = sql_quote($titre);
	spip_log("1. (id_groupe) selection dans la table spip_groupes_mots de l'id de : $titre", _LOG_DEBUG);
	$result = sql_fetsel("id_groupe", "spip_groupes_mots", "titre=$titre");
	$resultat = $result['id_groupe'];
	spip_log("2. (id_groupe) selection = $resultat pour $titre", _LOG_DEBUG);
	return $resultat;
}

//fonction qui permet de créer un groupe de mots clés
function create_groupe($groupe, $descriptif='', $texte='', $unseul='non', $obligatoire='non', $tables_liees='', $minirezo='oui', $comite='oui', $forum='non') {
	$id_groupe = find_groupe($groupe);
	spip_log("1. (create_groupe) pret a creer groupe : titre = $groupe. retour de find_groupe = $id_groupe", _LOG_DEBUG);
	if ($id_groupe == 0) {
		$id_insert = sql_insertq(
			"spip_groupes_mots", array(
				"id_groupe" => '',
				"titre" => $groupe,
				"descriptif" => $descriptif,
				"texte" => $texte,
				"unseul" => $unseul,
				"obligatoire" => $obligatoire,
				"tables_liees" => $tables_liees,
				"minirezo" => $minirezo,
				"comite" => $comite,
				"forum" => $forum
			)
		);
		spip_log("2. (create_groupe) retour de find_groupe : $id_groupe, donc insertion avec id = $id_insert et titre = $groupe", _LOG_DEBUG);
	}
	else if ($id_groupe > 0) {
		$id_insert = remplacer_groupe($groupe, $descriptif, $texte, $unseul, $obligatoire, $tables_liees, $minirezo, $comite, $forum);
		spip_log("2. (create_groupe) retour de find_groupe : $id_groupe... passage a remplacer_groupe", _LOG_DEBUG);
	}
	return $id_insert;
}

function supprimer_mot_groupe($nom_groupe,$nom_mot) {
	$id_groupe = id_groupe($nom_groupe);
	if ($id_groupe>0) {
		$id_mot = id_mot($nom_mot, $id_groupe);
		if ($id_mot>0) {
			sql_delete("spip_mots", "id_mot=$id_mot");
			sql_delete("spip_mots_liens", "id_mot=$id_mot");
		}
	}
}

function vider_groupe($nom_groupe) {
	$id_groupe = id_groupe($nom_groupe);
	if ($id_groupe>0) {
		$id_mots = sql_select('id_mot',  'spip_mots',  'id_groupe='.sql_quote($id_groupe));
		while($id_mot = sql_fetch($id_mots)){
			sql_delete("spip_mots", "id_mot=".$id_mot['id_mot']);
			sql_delete("spip_mots_liens", "id_mot=".$id_mot['id_mot']);
		}
		sql_delete("spip_groupes_mots", "id_groupe=$id_groupe");
	}
}

//fonction qui mets à jour un groupe de mots clés
function remplacer_groupe($titre, $descriptif, $texte, $unseul, $obligatoire, $tables_liees, $minirezo, $comite, $forum) {
	$id_groupe = id_groupe($titre);
	sql_updateq(
		"spip_groupes_mots", array(
			"descriptif" => $descriptif,
			"texte" => $texte,
			"unseul" => $unseul,
			"obligatoire" => $obligatoire,
			"tables_liees" => $tables_liees,
			"minirezo" => $minirezo,
			"comite" => $comite,
			"forum" => $forum
		), "id_groupe=$id_groupe"
	);
	return true;
}

// fonction qui permet de trouver si un mot clé existe à partir du titre et de l'id du groupe
function find_mot($titre, $id_groupe) {
	$titre = sql_quote($titre);
	$count = sql_countsel(
		"spip_mots",
		"titre=$titre AND id_groupe = $id_groupe"
	);
	return $count;
}

//fonction qui permet de trouver l'id du mot clé à partir du titre et de l'id du groupe
function id_mot($titre, $id_groupe) {
	spip_log("1. (id_mot) debut de recherche de l'id de $titre avec $id_groupe", _LOG_DEBUG);
	$titre = sql_quote($titre);
	$result = sql_fetsel(
		"id_mot",
		"spip_mots",
		"titre=$titre AND id_groupe=$id_groupe"
	);
	$id_mot = $result['id_mot'];
	spip_log("2. (id_mot) retour de la fonction id_mot = $id_mot", _LOG_DEBUG);
	return $id_mot;
}

//fonction qui permet de créer un mot clé
function create_mot($groupe, $mot, $descriptif='', $texte='') {
	$id_groupe = id_groupe($groupe);
	$find_mot = find_mot($mot, $id_groupe);
	if ($find_mot == 0) {
		spip_log("1. (create_mot) debut create_mot. mot inexistant donc creation : $id_groupe - $mot", _LOG_DEBUG);
		$id_mot = sql_insertq(
			"spip_mots", array(
				"id_mot" => '',
				"titre" => $mot,
				"descriptif" => $descriptif,
				"texte" => $texte,
				"id_groupe" => $id_groupe,
				"type" => $groupe
			)
		);
		spip_log("2. (create_mot) mot cle $mot insere sous l'id $id_mot dans la table avec groupe = $id_groupe", _LOG_DEBUG);
	}
	else if ($find_mot > 0) {
		$id_mot = id_mot($mot, $id_groupe);
		spip_log("1. (create_mot) mise a jour dans la table du mot cle : $mot", _LOG_DEBUG);
		remplacer_mot($id_mot, $mot, $descriptif, $texte, $id_groupe, $groupe);
	}
	else {
		spip_log("insertion impossible ! debug : groupe = $groupe --- id_groupe = $id_groupe", _LOG_DEBUG);
	}
	return $id_mot;
}

//fonction qui permet de mettre à jour un mot clé 
function remplacer_mot($id_mot, $mot, $descriptif, $texte, $id_groupe, $groupe) {
	sql_updateq(
			"spip_mots", array(
				"titre" => $mot,
				"descriptif" => $descriptif,
				"texte" => $texte,
				"id_groupe" => $id_groupe,
				"type" => $groupe
			), "id_mot=$id_mot"
		);
	return true;
}

//fonction qui permet de changer un mot clé de groupe
function deplacer_mot($id_mot, $id_groupe) {
	sql_updateq(
			"spip_mots", array(
				"id_groupe" => $id_groupe
			), "id_mot=$id_mot"
		);
	return true;
}

// fonction qui permet de trouver si une rubrique existe à partir du titre
function find_rubrique($titre) {
	$titre = sql_quote($titre);
	$count = sql_countsel(
		"spip_rubriques",
		"titre=$titre"
	);
	return $count;
}

//fonction qui permet de trouver l'id d'une rubrique à partir du titre
function id_rubrique($titre) {
	$titre = sql_quote($titre);
	$result = sql_fetsel(
		"id_rubrique",
		"spip_rubriques",
		"titre=$titre"
	);
	$resultat = $result['id_rubrique'];
	spip_log("1. (id_rubrique) recherche de l'id_rubrique de $titre = $resultat", _LOG_DEBUG);
	return $resultat;
}

// fonction qui permet de supprimer une rubrique à partir du titre
function delete_rubrique($titre) {
	$id_rubrique = id_rubrique($titre);
	if ($id_rubrique>0) {
		sql_delete("spip_rubriques", "id_rubrique=$id_rubrique");
		sql_delete("spip_mots_liens", "id_objet=$id_rubrique AND objet = 'rubrique'");
	}
	return $id_rubrique;
}

// fonction qui permet de renommer une rubrique à partir du titre
function rename_rubrique($titre, $nouveau_titre) {
	$id_rubrique = id_rubrique($titre);
	if ($id_rubrique) {
		sql_updateq(
			"spip_rubriques", array(
				"titre" => $nouveau_titre
			), "id_rubrique=$id_rubrique"
		);
		spip_log("rename_rubrique) renommage de $titre en $nouveau_titre", _LOG_DEBUG);
	}
	return true;
}


//fonction qui permet de créer une rubrique
function create_rubrique($titre, $id_parent='0', $descriptif='') {
	$id_rubrique = find_rubrique($titre);
	if ($id_rubrique == 0) {
		$id_rubrique = sql_insertq(
			"spip_rubriques", array(
				"titre" => $titre,
				"id_parent" => $id_parent,
				"descriptif" => $descriptif,
				"lang" => 'fr'
			)
		);
		sql_updateq(
			"spip_rubriques", array(
				"id_secteur" => $id_rubrique
			), "id_rubrique=$id_rubrique"
		);
		spip_log("1. (create_rubrique) rubrique cree : id = $id_rubrique, titre = $titre", _LOG_DEBUG);
	}
	else if ($id_rubrique > 0) {
		$id_rubrique = id_rubrique($titre);
		remplacer_rubrique($id_rubrique, $id_parent, $descriptif);
	}
	return $id_rubrique;
}

//fonction qui mets à jour une rubrique
function remplacer_rubrique($id_rubrique, $id_parent, $descriptif) {
	sql_updateq(
		"spip_rubriques", array(
			"id_parent" => $id_parent,
			"descriptif" => $descriptif
		), "id_rubrique=$id_rubrique"
	);
	return true;
}

// fonction qui permet de trouver si un article existe à partir du titre
function find_article($titre, $id_rubrique) {
	$titre = sql_quote($titre);
	$count = sql_countsel(
		"spip_articles",
		"titre=$titre AND id_rubrique=$id_rubrique"
	);
	return $count;
}

//fonction qui permet de trouver l'id d'un article à partir du titre
function id_article($titre, $id_rubrique) {
	$titre = sql_quote($titre);
	$result = sql_fetsel(
		"id_article",
		"spip_articles",
		"titre=$titre AND id_rubrique=$id_rubrique"
	);
	$resultat = $result['id_article'];
	spip_log("1. (id_article) recherche de l'id_article de '$titre' = $resultat", _LOG_DEBUG);
	return $resultat;
}

//fonction qui permet de créer un article
function create_article($texte, $rubrique, $lang='fr') {
	$id_rubrique = id_rubrique($rubrique);
	$count_articles = find_article($texte['titre'], $id_rubrique);
	if ($count_articles == 0) {
		spip_log("1. (create_article) insertion d'un article : ".$texte['titre'], _LOG_DEBUG);
		$statut = 'publie';
		$date = date("Y-m-d H:i:s");
		$id_article = sql_insertq(
			"spip_articles", array(
				"id_article" => '',
				"surtitre" => $texte['surtitre'],
				"titre" => $texte['titre'],
				"soustitre" => $texte['soustitre'],
				"id_rubrique" => $id_rubrique,
				"descriptif" => $texte['descriptif'],
				"chapo" => $texte['chapo'],
				"texte" => $texte['texte'],
				"ps" => $texte['ps'],
				"date" => $date,
				"statut" => $statut,
				"id_secteur" => $id_rubrique,
				"maj" => $date,
				"export" => '',
				"date_redac" => '0000-00-00 00:00:00',
				"visites" => 0,
				"referers" => 0,
				"popularite" => 0,
				"accepter_forum" => '',
				"date_modif" => $date,
				"lang" => $lang,
				"langue_choisie" => 'non',
				"id_trad" => 0,
				"nom_site" => $texte['nom_site'],
				"url_site" => $texte['url_site'],
				"virtuel" => $texte['virtuel']
			)
		);
		sql_insertq(
			"spip_auteurs_liens", array(
				"id_auteur" => 1,
				"id_objet" => $id_article,
				"objet" => 'article'
			)
		);
		include_spip('inc/rubriques');
		calculer_rubriques();
		propager_les_secteurs();
		effacer_meta("date_calcul_rubriques");
		spip_log("2. (create_article) article insere : $id_article", _LOG_DEBUG);
	}
	else if ($count_articles > 0) {
		$id_article = id_article($texte['titre'], $id_rubrique);
		spip_log("2. (create_article) maj de l'article : ".$texte['titre'], _LOG_DEBUG);
		remplacer_article($id_article, $id_rubrique, $texte);
	}
	return $id_article;
}

//fonction qui permet de mettre à jour un article
function remplacer_article($id_article, $id_rubrique, $texte) {
	sql_updateq(
		"spip_articles", array(
			"surtitre" => $texte['surtitre'],
			"soustitre" => $texte['soustitre'],
			"descriptif" => $texte['descriptif'],
			"chapo" => $texte['chapo'],
			"texte" => $texte['texte'],
			"ps" => $texte['ps'],
			"nom_site" => $texte['nom_site'],
			"url_site" => $texte['url_site'],
			"virtuel" => $texte['virtuel']
		), "id_article=$id_article AND id_rubrique=$id_rubrique"
	);
	return true;
}

function poubelle_article($titre_article, $titre_rubrique) {
	$id_rubrique = id_rubrique($titre_rubrique);
	if ($id_rubrique) {
		$id_article = id_article($titre_article, $id_rubrique);
		if ($id_article) {
			include_spip('action/editer_objet');
			objet_modifier(
				'article',
				$id_article, 
				array(
					'statut'	=> 'poubelle'
				)
			);
		}
	}
}

// fonction qui permet de trouver si une liaison entre un article et un mot clé existe
function find_article_mot($id_mot, $id_article) {
	$count = sql_countsel(
		"spip_mots_liens",
		"id_mot=$id_mot AND id_objet=$id_article AND objet='article'"
	);
	return $count;
}

//fonction qui permet de créer une relation entre un article et un mot clé
function create_article_mot($article, $rubrique, $mot, $groupe) {
	spip_log("1. (create_article_mot) demande de creation de liaison : $article avec $mot", _LOG_DEBUG);
	$id_rubrique = id_rubrique($rubrique);
	$id_groupe = id_groupe($groupe);
	$id_mot = id_mot($mot, $id_groupe);
	$id_article = id_article($article, $id_rubrique);
	$count = find_article_mot($id_mot, $id_article);
	if ($count == 0) {
		sql_insertq(
			"spip_mots_liens",
			array(
				"id_mot"=> $id_mot,
				"id_objet" => $id_article,
				"objet" => 'article'
			)
		);
		spip_log("2. (create_article_mot) liaison mise en place (article = $id_article - mot = $id_mot)", _LOG_DEBUG);
	}
	else {
		spip_log("2. (create_article_mot) liaison deja existante ! (article = $id_article - mot = $id_mot)", _LOG_DEBUG);
	}
}

function find_lien_mot($id_mot, $id_objet, $type='article') {
	$count = sql_countsel(
		"spip_mots_liens",
		"id_mot=$id_mot AND id_objet=$id_objet AND objet='$type'"
	);
	return $count;
}

function create_lien_mot($id_mot, $id_objet, $type='article') {
	$count = find_lien_mot($id_mot, $id_objet, $type);
	if ($count == 0) {
		sql_insertq(
			"spip_mots_liens",
			array(
				"id_mot"=> $id_mot,
				"id_objet" => $id_objet,
				"objet" => $type
			)
		);
		spip_log("2. (create_lien_mot) liaison mise en place (article = $id_objet - mot = $id_mot - $type)", _LOG_DEBUG);
	}
	else {
		spip_log("2. (create_lien_mot) liaison deja existante ! (article = $id_objet - mot = $id_mot - $type)", _LOG_DEBUG);
	}	
}

function delete_lien_mot($id_mot, $id_objet, $type='article') {
	sql_delete("spip_mots_liens", "id_mot=$id_mot AND id_objet=$id_objet AND objet = '$type'");
	spip_log("2. (delete_lien_mot) liaison supprimée (article = $id_objet - mot = $id_mot - $type)", _LOG_DEBUG);
}

//fonction qui permet de trouver des liaisons entre rubrique et mot clé
function find_rubrique_mot($id_mot, $id_rubrique) {
	$count = sql_countsel(
		"spip_mots_liens",
		"id_mot = $id_mot AND id_objet = $id_rubrique AND objet = 'rubrique'"
	);
	return $count;
}

//fonction qui permet de créer une relation entre une rubrique et un mot clé
function create_rubrique_mot($rubrique, $mot, $groupe) {
	$id_rubrique = id_rubrique($rubrique);
	$id_groupe = id_groupe($groupe);
	$id_mot = id_mot($mot, $id_groupe);
	spip_log("1. (create_rubrique_mot) creation : rubrique = $id_rubrique ($rubrique) - mot = $id_mot ($mot) - groupe = $id_groupe ($groupe)", _LOG_DEBUG);
	$count = find_rubrique_mot($id_mot, $id_rubrique);
	if ($count == 0) {
		sql_insertq(
			"spip_mots_liens", array(
				"id_mot" => $id_mot,
				"id_objet" => $id_rubrique,
				"objet" => 'rubrique'
			)
		);
	}
	return true;
}

function create_evenement($rubrique, $article, $titre_evenement, $debut, $fin, $descriptif = '',$lieu ='', $horaire='oui') {
	$id_rubrique = id_rubrique($rubrique);
	if ($id_rubrique > 0) {
		$id_article = id_article($article, $id_rubrique );
		if ($id_article > 0) {
			sql_insertq(
					"spip_evenements", array(
						"id_article" => $id_article,
						"titre" => $titre_evenement,
						"date_debut" => $debut,
						"date_fin" => $fin,
						"descriptif" => $descriptif,
						"lieu" => $lieu,
						"horaire" => $horaire,
						"statut" => 'publie',
					));
		}
	}
}

function create_encart($titre, $identifiant, $largeur=0, $hauteur=0) {
	$titre = sql_quote($titre);
	$result = sql_fetsel(
		"id_encart",
		"spip_encarts",
		"titre=$titre"
	);
	$id_encart = $result['id_encart'];
	if ($id_encart > 0) {
		sql_updateq(
			"spip_encarts", array(
				"titre" => $titre,
				"identifiant" => $identifiant,
				"largeur" => $largeur,
				"hauteur" => $hauteur
			), "id_encart=$id_encart"
		);
	} else {
		$id_encart = sql_insertq(
			"spip_encarts", array(
				"titre" => $titre,
				"identifiant" => $identifiant,
				"largeur" => $largeur,
				"hauteur" => $hauteur,
			));
	}
	return $id_encart;
}

//fonction qui permet de trouver l'id d'un auteur à partir de son nom
function find_auteur($nom) {
	$result = sql_fetsel(
		"id_auteur",
		"spip_auteurs",
		"nom='$nom'"
	);
	$resultat = $result['id_auteur'];
	spip_log("1. (id_auteur) recherche de l'id_auteur de $nom = $resultat", _LOG_DEBUG);
	return $resultat;
}

//fonction qui permet de trouver l'email d'un auteur à partir de son id
function find_auteur_email($id_auteur) {
	$result = sql_fetsel(
		"email",
		"spip_auteurs",
		"id_auteur=$id_auteur"
	);
	$resultat = $result['email'];
	spip_log("1. (email) recherche de l'email de $id_auteur = $resultat", _LOG_DEBUG);
	return $resultat;
}

//fonction qui permet de créer un auteur (sans login ni mot de passe)
function create_auteur($nom, $email='', $bio='') {
	$id_auteur = find_auteur($nom);
	if ($id_auteur > 0) {
		sql_updateq(
			"spip_auteurs", array(
				"email" => $email,
				"bio" => $bio
			), "id_auteur=$id_auteur"
		);
	} else {
		$id_auteur = sql_insertq(
			"spip_auteurs", array(
				"nom" => $nom,
				"email" => $email,
				"bio" => $bio,
				"statut" => '1comite'
			)
		);
	}
	spip_log("1. (create_auteur) auteur cree : id = $id_auteur, nom = $nom", _LOG_DEBUG);
	return $id_auteur;
}


function create_document($chemin, $objet, $mode, $champs='non', $id_document='non') {
	include_spip('action/ajouter_documents');
	$chemin = find_in_path($chemin);
	$type = $objet['type'];
	$id_objet = $objet['id_objet'];
	spip_log(array('tmp_name' => $chemin, 'name' => basename($chemin)), 'docusc');
	if ($id_document = 'non' AND $chemin) {
		$id_document = action_ajouter_un_document_dist('non', array('tmp_name' => $chemin, 'name' => basename($chemin)), $type, $id_objet, $mode);
		if (is_array($champs))
		sql_updateq("spip_documents", $champs, "id_document=$id_document");
		return $id_document;
	}
	else
		return false;
}

function create_logo($chemin, $type='art', $id, $ext, $onoff='on') {
	include_spip('inc/getdocument');
	$file = deplacer_fichier_upload(find_in_path($chemin), _DIR_LOGOS . $type . $onoff . $id . '.' .$ext);
	return $file;
}

//fonction qui permet de trouver l'id d'un site à partir du titre
function id_site($titre, $id_rubrique) {
	$titre = sql_quote($titre);
	$result = sql_fetsel(
		"id_syndic",
		"spip_syndic",
		"nom_site=$titre AND id_rubrique=$id_rubrique"
	);
	$resultat = $result['id_syndic'];
	return $resultat;
}

function create_site($site, $rubrique) {
	$id_rubrique = id_rubrique($rubrique);
	if ($id_rubrique > 0) {
		$id_site = id_site($site['nom_site'], $id_rubrique);
		if ($id_site > 0) {
			sql_updateq(
				"spip_syndic", array(
					"url_site" => $site['url_site'],
					"url_syndic" => $site['url_syndic'],
					"descriptif" => $site['descriptif'],
					"statut" => $site['statut'] ? $site['statut']:'prop',
					"syndication" => $site['url_syndic'] ? 'oui':'non'
				), "id_syndic=$id_site"
			);
		} else {
			$id_site = sql_insertq(
				"spip_syndic", array(
					"id_rubrique" => $id_rubrique,
					"nom_site" => $site['nom_site'],
					"url_site" => $site['url_site'],
					"url_syndic" => $site['url_syndic'],
					"descriptif" => $site['descriptif'],
					"statut" => $site['statut'] ? $site['statut']:'prop',
					"syndication" => $site['url_syndic'] ? 'oui':'non'
				)
			);
			include_spip('inc/rubriques');
			calculer_rubriques();
			propager_les_secteurs();
			effacer_meta("date_calcul_rubriques");
		}
	return $id_site;
	}
}

//fonction qui permet de trouver l'id d'un formulaire à partir de l'id textuel
function id_formidable($identifiant) {
	$identifiant = sql_quote($identifiant);
	$result = sql_fetsel(
		"id_formulaire",
		"spip_formulaires",
		"identifiant=$identifiant"
	);
	$resultat = $result['id_formulaire'];
	return $resultat;
}

function create_formidable($formidable) {
	$id_formulaire = id_formidable($formidable['identifiant']);
	if ($id_formulaire > 0) {
		sql_updateq(
			"spip_formulaires", array(
				"titre" => $formidable['titre'],
				"descriptif" => $formidable['descriptif'],
				"message_retour" => $formidable['message_retour'],
				"saisies" => $formidable['saisies'],
				"traitements" => $formidable['traitements'],
				"public" => $formidable['public'],
				"statut" => $formidable['statut'],
				"apres" => $formidable['apres'],
				"url_redirect" => $formidable['url_redirect']
			), "id_formulaire='$id_formulaire'"
		);
	} else {
		$id_formulaire = sql_insertq(
			"spip_formulaires", array(
				"identifiant" => $formidable['identifiant'],
				"titre" => $formidable['titre'],
				"descriptif" => $formidable['descriptif'],
				"message_retour" => $formidable['message_retour'],
				"saisies" => $formidable['saisies'],
				"traitements" => $formidable['traitements'],
				"public" => $formidable['public'],
				"statut" => $formidable['statut'],
				"apres" => $formidable['apres'],
				"url_redirect" => $formidable['url_redirect']
			)
		);
		include_spip('inc/rubriques');
	}
	return $id_formulaire;
}

function poubelle_site($titre_site, $titre_rubrique) {
	$id_rubrique = id_rubrique($titre_rubrique);
	if ($id_rubrique) {
		$id_syndic = id_site($titre_site, $id_rubrique);
		if ($id_syndic > 0) {
			sql_updateq(
				"spip_syndic", array(
					"statut" => 'refuse',
				), "id_syndic=$id_syndic"
			);
		}
	}
}
//fonction qui permet de trouver des liaisons entre site et mot clé
function find_site_mot($id_mot, $id_syndic) {
	$count = sql_countsel(
		"spip_mots_liens",
		"id_mot = $id_mot AND id_objet = $id_syndic AND objet = 'site'"
	);
	return $count;
}

function create_site_mot($id_syndic, $mot, $groupe) {
	$id_groupe = id_groupe($groupe);
	$id_mot = id_mot($mot, $id_groupe);
	$count = find_site_mot($id_mot, $id_syndic);
	if ($count == 0) {
		sql_insertq(
			"spip_mots_liens", array(
				"id_mot" => $id_mot,
				"id_objet" => $id_syndic,
				"objet" => 'site'
			)
		);
	}
	return true;
}

//fonction qui permet de créer le tout
function soyezcreateurs_config_motsclefs() {
	//les groupes puis mots
	create_groupe("Thèmes de l'Agenda", "Détermine la liste des éléments pouvant être présentés en liste déroulante dans l'Agenda du site", "Un événement de l'Agenda peut avoir un ou {{plusieurs}} mot clefs ratachés (les sélectionner avec maj-clic).", 'non', 'non', 'evenements', 'oui', 'oui', 'non');

	create_groupe("_AgendaStatut", "Statut d'un événement dans l'Agenda", "Permet de spécifier un statut d'un événement dans l'Agenda.\n\nL'événement sera affiché dans la couleur spécifiée par le {Texte} du Mot Clef.\n\nLe {Descriptif rapide} sera quant à lui utilisé en bulle d'aide.", 'oui', 'oui', 'evenements', 'oui', 'oui', 'non');

	create_groupe("_ClasseRubriqueMenu", "Pour affecter une classe spécifique aux éléments du menu", "", 'oui', 'non', 'rubriques', 'oui', 'non', 'non');
		$id_mot = create_mot("_ClasseRubriqueMenu", "separation", "Affecter ce mot clef aux rubriques qui doivent être affichée avec une séparation dans le menu.", "");

	create_groupe("_CouleurRubrique", "Permet de changer la couleur d'une Rubrique.", "Affecter un mot clef de ce groupe à une rubrique (et ses descendants) pour en changer la tonalité de couleur.\n\nPour chacun des mots clefs, mettre en titre quelque chose d'intelligible, un éventuel descriptif rapide sur l'usage à en faire et le code hexadecimal de la couleur dans le texte. \n\nExemple : \n-* Titre: Orange\n-* Texte : f78221", 'oui', 'non', 'rubriques', 'oui', 'non', 'non');
		$id_mot = create_mot("_CouleurRubrique", "Bleu", "", "6392A9");
		$id_mot = create_mot("_CouleurRubrique", "Marron clair", "", "9F7561");
		$id_mot = create_mot("_CouleurRubrique", "Turkoise pastel", "", "89A699");

	create_groupe("_EnDirect", "En direct", "Affecter un mot clef de ce groupe à chaque article devant apparaître dans la Zone En Direct du mode internationnal.\n\nLe Premier mot clef permet de donner le logo et le titre de la première zone qui affiche les quoi de neuf du site.\n\nLe Descriptif du groupe donne le titre de la zone.", 'oui', 'non', 'articles', 'oui', 'oui', 'non');
		$id_mot = create_mot("_EnDirect", "00. Quoi de neuf ?", "", "");
			create_logo('documents/moton100.png', $type='mot', $id_mot, 'png');

	create_groupe("_HeaderBanner", "Pour définir plusieurs bannières pour le site.", "Il faut créer un mot clef par bannière (le titre n'a pas d'importance).\n\nC'est le logo du mot clef qui est utilisé comme bannière du site.\n\n{{Attention}} : si vous avez déjà défini une bannière avec le logo de survol du site, alors, cette dernière n'est plus utilisée ; seuls les logos des mots clefs de ce groupe seront pris en compte.\n\nLes mots clefs affectés à une rubrique restreignes le choix des bannières pour la branche entière à celles affectées à la rubrique. Le fonctionnement pour le reste du site est inchangé ({{toutes}} les bannières sont disponibles pour le reste du site).", 'non', 'non', 'rubriques', 'oui', 'non', 'non');
		$id_mot = create_mot("_HeaderBanner", "Ban1", "", "");
			create_logo('documents/moton110.jpg', $type='mot', $id_mot, 'jpg');
		$id_mot = create_mot("_HeaderBanner", "Ban2", "", "");
			create_logo('documents/moton111.jpg', $type='mot', $id_mot, 'jpg');
		$id_mot = create_mot("_HeaderBanner", "Ban3", "", "");
			create_logo('documents/moton112.jpg', $type='mot', $id_mot, 'jpg');
		$id_mot = create_mot("_HeaderBanner", "Ban4", "", "");
			create_logo('documents/moton113.jpg', $type='mot', $id_mot, 'jpg');
		$id_mot = create_mot("_HeaderBanner", "Ban5", "", "");
			create_logo('documents/moton114.jpg', $type='mot', $id_mot, 'jpg');

	create_groupe("_HTTP-EQUIV", "Paramétrage du site", "Paramétrage des entêtes HTML HTTP-EQUIV.\n\nÀ utiliser en sachant pourquoi.", 'non', 'non', '', 'oui', 'non', 'non');

	create_groupe("_LayoutGala", "Permet de faire appel à l'une des 40 mises en page disponibles sur [Layout Gala->https://blog.html.it/layoutgala/index.html]", "Mode d'emploi : affecter un des mots mots clefs de ce groupe à un objet de SPIP (Articles, Rubriques, Brèves, Sites) permet de lui affecter la mise en page associée", 'oui', 'non', 'articles,breves,rubriques,syndic', 'oui', 'non', 'non');
		$id_mot = create_mot("_LayoutGala", "01. Three percentage columns", "", "");
		$id_mot = create_mot("_LayoutGala", "02. Three percentage columns (InverseColor)", "", "");
		$id_mot = create_mot("_LayoutGala", "03. Three percentage columns (Right)", "", "");
		$id_mot = create_mot("_LayoutGala", "04. Three percentage columns (Right InverseColor)", "", "");
		$id_mot = create_mot("_LayoutGala", "05. Three percentage columns (Left)", "", "");
		$id_mot = create_mot("_LayoutGala", "06. Three percentage columns (Left InverseColor)", "", "");
		$id_mot = create_mot("_LayoutGala", "07. Three fixed columns", "", "");
		$id_mot = create_mot("_LayoutGala", "08. Three fixed columns (InverseColor)", "", "");
		$id_mot = create_mot("_LayoutGala", "09. Three fixed columns (Right)", "", "");
		$id_mot = create_mot("_LayoutGala", "10. Three fixed columns (Right InverseColor)", "", "");
		$id_mot = create_mot("_LayoutGala", "11. Three fixed columns (Left)", "", "");
		$id_mot = create_mot("_LayoutGala", "12. Three fixed columns (Left InverseColor)", "", "");
		$id_mot = create_mot("_LayoutGala", "13. Liquid, secondary columns fixed-width", "", "");
		$id_mot = create_mot("_LayoutGala", "14. Liquid, secondary columns fixed-width (InverseColor)", "", "");
		$id_mot = create_mot("_LayoutGala", "15. Liquid, secondary columns fixed-width (Right)", "", "");
		$id_mot = create_mot("_LayoutGala", "16. Liquid, secondary columns fixed-width (Right InverseColor)", "", "");
		$id_mot = create_mot("_LayoutGala", "17. Liquid, secondary columns fixed-width (Left)", "", "");
		$id_mot = create_mot("_LayoutGala", "18. Liquid, secondary columns fixed-width (Left InverseColor)", "", "");
		$id_mot = create_mot("_LayoutGala", "19. Liquid, three columns, hybrid widths", "", "");
		$id_mot = create_mot("_LayoutGala", "20. Liquid, three columns, hybrid widths (InverseColor)", "", "");
		$id_mot = create_mot("_LayoutGala", "21. Liquid, three columns, hybrid widths (Right)", "", "");
		$id_mot = create_mot("_LayoutGala", "22. Liquid, three columns, hybrid widths (Right InverseColor)", "", "");
		$id_mot = create_mot("_LayoutGala", "23. Two columns liquid, side fixed", "", "");
		$id_mot = create_mot("_LayoutGala", "24. Two columns liquid, side fixed", "", "");
		$id_mot = create_mot("_LayoutGala", "25. Two percentage columns", "", "");
		$id_mot = create_mot("_LayoutGala", "26. Two percentage columns", "", "");
		$id_mot = create_mot("_LayoutGala", "27. One column liquid and two halves", "", "");
		$id_mot = create_mot("_LayoutGala", "28. One column liquid and two halves (InverseColor)", "", "");
		$id_mot = create_mot("_LayoutGala", "29. Two percentage columns and one larger", "", "");
		$id_mot = create_mot("_LayoutGala", "30. Two percentage columns and one larger (Right)", "", "");
		$id_mot = create_mot("_LayoutGala", "31. Two columns liquid, fixed side and large one", "", "");
		$id_mot = create_mot("_LayoutGala", "32. Two columns liquid, fixed side and large one (Right)", "", "");
		$id_mot = create_mot("_LayoutGala", "33. Two colums fixed (Right)", "", "");
		$id_mot = create_mot("_LayoutGala", "34. Two colums fixed", "", "");
		$id_mot = create_mot("_LayoutGala", "35. Two colums fixed (ShortLeft)", "", "");
		$id_mot = create_mot("_LayoutGala", "36. Two colums fixed (ShortRight)", "", "");
		$id_mot = create_mot("_LayoutGala", "37. Two colums fixed (Right)", "", "");
		$id_mot = create_mot("_LayoutGala", "38. Two colums fixed", "", "");
		$id_mot = create_mot("_LayoutGala", "39. One column fixed and two halves (Right)", "", "");
		$id_mot = create_mot("_LayoutGala", "40. One column fixed and two halves", "", "");

	create_groupe("_LogosExtra", "Permet de placer une image en fond de la colonne Extra (c'est-à-dire, soit la colonne secondaire qui peut être afichée soit de l'autre côté du menu, soit en dessous de celui-ci).", "{{Utilisation}} : affecter un ou plusieurs mots clefs de ce groupe aux rubriques (héritage automatique) qui doivent avoir une ou plusieurs image en fond. L'image est choisie aléatoirement parmis celles disponibles.\n\n{{Configuration}} : \n-* créer des mots clefs dans ce groupe et leur donner un logo de mot clef.\n-* il est possible de mettre un logo de survol qui sera alors utilisé en fond de texte (en plus de l'autre logo) et positionné en haut à droite sauf si le texte contient les ordres CSS de positionnement ({bottom left} par exemple)", 'non', 'non', 'rubriques', 'oui', 'non', 'non');

	create_groupe("_META", "Paramètrage du site", "Permet de spécifier des META pour le site.\n\nIl est possible de rajouter des METAs non encore présents, mais, comme d'habitude en la matière : sachez ce que vous faites !", 'non', 'non', '', 'oui', 'non', 'non');
		$id_mot = create_mot("_META", "ICBM", "Mettre la latitude et la longitude du lieu sous la forme : XX.XXXXX,XX.XXXXX (ex: 44.330445,-1.225561)\n_ Pour trouver vos coordonnées : [Multimap->http://www.multimap.com/]\n_ Et [vous référencer sur GeoURL->http://geourl.org/ping/]", "44.330445,-1.225561");
		$id_mot = create_mot("_META", "Keywords", "Mettre ci-dessous les mots clef du site séparés par des virgules", "");

	create_groupe("_ModePortail", "Les mots clefs de ce groupe permettent de gérer les éléments qui s'affichent sur la page d'accueil du site si celui-ci est en mode portail.", "Les mots clefs numérotés dans leur titre de 0. à 9. verront leur logo utilisé dans les colonnes de gauche et de droite de la page d'accueil (respectivement pour les numéros impairs et pairs).", 'oui', 'non', 'articles,rubriques', 'oui', 'non', 'non');
		$id_mot = create_mot("_ModePortail", "1. Mot1", "", "");
		$id_mot = create_mot("_ModePortail", "2. Mot2", "", "");
		$id_mot = create_mot("_ModePortail", "CycloShow", "Affecter ce mot clef à la rubrique de SPIP dont les articles doivent apparaitre dans la zone du cycle d'images.\n\nIndiquer dans le texte du mot clef le nombre d'articles de la rubrique à prendre en compte.", "");
		$id_mot = create_mot("_ModePortail", "Defilant", "Affecter ce mot clef à la rubrique de SPIP dont les brèves doivent apparaitre dans la zone de texte défilant en haut de la page.\n\n", "");
		$id_mot = create_mot("_ModePortail", "Goodies", "Affecter ce mot clef aux objets SPIP devant apparaitre dans la zone des Goodies (en bas du sommaire du mode portail, sur une colonne).", "");
		$id_mot = create_mot("_ModePortail", "ZoomSur", "Affecter ce mot clef à l'objet que vous voulez placer dans le cadre « Zoom sur » (facultatif).\n\nLe site prendra le dernier article ayant ce mot clef", "S'applique aux articles uniquement.");
		$id_mot = create_mot("_ModePortail", "ZoomSur2", "Affecter ce mot clef à l'objet que vous voulez placer dans le cadre « Zoom sur secondaire » (facultatif)./n/nLe site prendra le dernier article ayant ce mot clef", "");

	create_groupe("_Specialisation", "Spécialisation d'un article ", "Un mot clef pris dans ce groupe permettra de modifier\n\n-* le comportement d'un article particulier\n", 'non', 'non', 'articles', 'oui', 'oui', 'non');
		$id_mot = create_mot("_Specialisation", "AccesibiliteLien", "Affecter ce mot clef à l'article traitant de la politique d'accessibilité du site.", "Un fois l'article écrit, lui affecter ce mot clef pour qu'il soit disponible en lien en haut de la page (caché pour les voyants, sauf sur la page d'accueil).");
		$id_mot = create_mot("_Specialisation", "ALaUne", "Article qui doit rester à la une du site (soit dans quoi de neuf, soit dans la liste des articles en ModeNews, Soit dans le cartouche À la une en ModePortail)", "");
		$id_mot = create_mot("_Specialisation", "Courrier_libre", "Affecter ce mot clef à l'article utilisé comme courrier libre.", "Concerne les articles qui servent à l'envoi de courriers libres");
		$id_mot = create_mot("_Specialisation", "DevoilerDate", "Mettre ce mot clef à un article dont on veut afficher la date de publication.", "");
		$id_mot = create_mot("_Specialisation", "DevoilerIdentite", "Mettre ce mot clef à un article dont on veut afficher le nom du ou des auteurs (au sens de SPIP)", "");
		$id_mot = create_mot("_Specialisation", "EDITO", "Sert à dire que l'article est un éditorial.", "{{Attention}} : le site utilisera l'article le plus récent ayant ce mot clef pour l'afficher en tant qu'éditorial.\n\n[*Conséquence*] : ne changez pas le contenu d'un éditorial par le nouvel éditorial, créez un nouvel article éditorial!");
		$id_mot = create_mot("_Specialisation", "EDITO_Restreint", "Pour un article d'Edito ne s'affichant qu'en mode restreint", "Permet donc d'avoir un Edito pour le grand public et un Edito pour la zone restreinte.\n\nMieux encore, avec 2 EDITO_Restreint, un en libre accès et un en zone restreinte, on pourra avoir :\n-* un Edito d'accueil après inscription au site\n-* Un Edito d'accueil après rattachement à une zone restreinte.");
		$id_mot = create_mot("_Specialisation", "GraverSonNom", "Un article avec ce mot clef permettra aux visiteurs de laisser leur nom sur le site en tant que bulle d'aide sur l'image (Logo du mot) et de faire parvenir un texte aux administrateurs", "Il faut pour que ça fonctionne:\n\n-* un article\n-* un forum modéré a posteriori\n-* ce mot mot clef attaché à cet article\n-* un logo à ce mot clef\n\nÀ partir de là, l'article permet aux visiteurs de «graver leur nom» dans le site. Leur nom aparaitra en bulle d'aide sur une image (le logo de ce mot clef).");
		$id_mot = create_mot("_Specialisation", "Livre d'Or", "Pour empécher que l'on puisse répondre à un forum", "Ce mot clef appliqué à un article ayant un forum fait que ce forum n'a qu'un niveau (pas possible de répondre à une intervention, seulement d'en rajouter)");
		$id_mot = create_mot("_Specialisation", "MentionsLegales", "Mention légales obligatoire ([CNIL|Commision Nationale Informatique et Liberté->http://www.cnil.fr/] et [LcEN|Loi sur la confiance en l'économie Numérique->http://www.legifrance.gouv.fr/WAspad/UnTexteDeJorf?numjo=ECOX0200175L]). Tout ce qu'[il faut savoir->http://www.juriblogsphere.net/2009/12/04/les-informations-legales-a-faire-figurer-sur-un-site-internet/]. [Décryptage des obligations légales->http://www.maitre-eolas.fr/post/2008/03/24/905-blogueurs-et-responsabilite-reloaded].", "Affecter ce mot clef à l'article destiné à afficher les mentions légales du site.");
		$id_mot = create_mot("_Specialisation", "MenuFooter", "Affecter ce mot clef aux articles devant être affichés dans le menu de pied de page.", "Les liens vers les articles seront faits triés par numéro de titre.\n\nIl est bien sûr possible de faire des articles de redirection...");
		$id_mot = create_mot("_Specialisation", "MENURACINE", "Doit s'afficher en dessous de Accueil", "Pour dire que l'article s'affiche en dessous de Accueil dans le menu de gauche avant les rubriques du site");
		$id_mot = create_mot("_Specialisation", "MENURACINEBAS", "Pour dire que l'article s'affiche au dessus de Plan", "Permet de placer dans le menu de gauche un (ou plusieurs) article(s) en bas de menu, avant le plan du site.");
		$id_mot = create_mot("_Specialisation", "MENURACINEBAS_Systematique", "Affichage systématique dans le menu de gauche en bas", "Affecter ce mot clef à un article qui devra être présent dans le menu de gauche, en bas, que l'on soit dans un secteur avec MenuHaut ou non.");
		$id_mot = create_mot("_Specialisation", "MENURACINE_Systematique", "Affichage systématique dans le menu de gauche en haut", "Affecter ce mot clef à un article qui devra être présent dans le menu de gauche, en haut, que l'on soit dans un secteur avec MenuHaut ou non.");
		$id_mot = create_mot("_Specialisation", "NavHaute", "Affecter ce mot clef aux articles devant être affichés dans le menu de navigation haute tout en haut du site.", "Les liens vers les articles seront faits triés par numéro de titre.\n\nIl est bien sûr possible de faire des articles de redirection...");
		$id_mot = create_mot("_Specialisation", "Outils", "Affecter ce mot clef aux articles devant être affichés dans le cadre Outils dans le bandeau du haut de la page.", "Les liens vers les articles seront faits triés par numéro de titre.\n\nIl est bien sûr possible de faire des articles de redirection...\n\nLe logo de l'article sera utilisé comme picto à droite du titre.");
		$id_mot = create_mot("_Specialisation", "PasdeSiteDansForums", "Pour que les sites référencés n'apparaissent pas dans un forum (mesure anti SPAM)", "Pour décourager ceux qui utiliseraient vos forums pour faire de la pub pour leurs site (généralement, des sonneries de téléphone)");
		$id_mot = create_mot("_Specialisation", "VideoALaUne", "Pour afficher une vidéo À la Une dans certains mode d'affichage de la page d'accueil.", "Affecter ce mot clef aux articles contenant une vidéo à afficher À la Une. C'est le dernier article en date qui est pris en compte, et la première vidéo qui est affichée.");

	create_groupe("_Specialisation_Rubrique", "Spécialisation d'une rubrique", "Un mot clef pris dans ce groupe permettra de modifier\n\n-* le comportement d'une rubrique et de ses articles\n", 'non', 'non', 'rubriques', 'oui', 'oui', 'non');
		$id_mot = create_mot("_Specialisation_Rubrique", "AfficherArticlesMenu", "Affichage des articles de la rubrique dans le menu de gauche", "Affecter ce mot clef aux rubriques dont la liste des articles doit être affichée dans le menu de gauche.");
		$id_mot = create_mot("_Specialisation_Rubrique", "AfficherArticlesMenuHaut", "Affichage des articles de la rubrique dans le menu déroulant", "Affecter ce mot clef aux rubriques dont la liste des articles doit être affichée dans le menu déroulant.");
		$id_mot = create_mot("_Specialisation_Rubrique", "Citations", "Rubrique destinée à recevoir de courtes citations (une par article) affichées en haut à droite des pages du site de manière alléatoire (une nouvelle citation toutes les heures)", "Créer un article par citation avec :\n\n-* La citation dans le corps du texte (entourée de guillemets si nécessaires)\n-* L'auteur dans le sous-titre\n-* Le titre de l'article sert d'accroche pour le lecteur\n");
		$id_mot = create_mot("_Specialisation_Rubrique", "DessousBreves", "Pour placer une rubrique et ses articles qui sont placés sous les brèves (dans la colonne de droite du site)", "[*Attention*] : une rubrique qui a ce mot clef ne doit pas avoir de sous-rubrique !\n\nLe titre de la rubrique sera affiché sur la droite et la liste de ses articles en dessous.\n\nSeuls les articles sont clicables pour accéder à leur contenu.");
		$id_mot = create_mot("_Specialisation_Rubrique", "MenuHaut", "Pour qu'un secteur soit dans un menu horizontal en haut du site", "Affecter ce mot clef aux secteurs (rubriques rattachées à la racine du site) qui doivent être dans le menu horizontal en haut du site.");
		$id_mot = create_mot("_Specialisation_Rubrique", "PasDansFildAriane", "Pour interdire que la rubrique soit affichée dans le fil d'ariane du site.", "Affecter ce mot clef aux rubriques qui ne doivent pas figurer dans le fil d'ariane.");
		$id_mot = create_mot("_Specialisation_Rubrique", "PasDansMenu", "Pour interdire que la rubrique (et ses sous-rubriques) soi(en)t dans le menu de gauche", "");
		$id_mot = create_mot("_Specialisation_Rubrique", "PasDansMenuExtra", "Pour interdire que la rubrique soit dans le menu des extra (menu droit)", "");
		$id_mot = create_mot("_Specialisation_Rubrique", "PlanLocal", "Affecter ce mot clef aux rubriques où vous voulez afficher le plan local à la place de la liste des articles.", "");
		$id_mot = create_mot("_Specialisation_Rubrique", "SecteurPasDansQuoiDeNeuf", "Pour interdire que les articles d'un secteur entier soit dans «Quoi de Neuf» sur la page d'accueil", "Un secteur, c'est une rubrique rattachée à la racine du site et toutes ses sous-rubriques");

	create_groupe("_Specialisation_Rubrique_ou_Article", "Spécialisation d'une rubrique ou d'un article", "Un mot clef pris dans ce groupe permettra de modifier\n\n-* le comportement d'une rubrique et de ses articles\n-* le comportement d'un article particulier", 'non', 'non', 'articles,rubriques', 'oui', 'oui', 'non');
		$id_mot = create_mot("_Specialisation_Rubrique_ou_Article", "Archives", "Pour dire la rubrique ayant ce mot clef ou les articles de la rubrique doivent être considérés comme archivés.", "Affecter ce mot clef à chaque rubrique concernée ou à chaque article individuellement.");
		$id_mot = create_mot("_Specialisation_Rubrique_ou_Article", "GrosLogo", "Pour dire la rubrique ayant ce mot clef ou les articles de la rubrique doit afficher le logo de l'article ou de la rubrique en grand (flottant à gauche du texte de l'article).", "Affecter ce mot clef à chaque rubrique concernée ou à chaque article individuellement.");
		$id_mot = create_mot("_Specialisation_Rubrique_ou_Article", "PasDansPlan", "Permet de masquer une rubrique, et tout son contenu (y compris les sous-rubriques) du plan du site et des documents à télécharger.\n\nPermet aussi de le faire article par article.", "À affecter aux rubriques ou articles qui ne doivent pas être affichés dans le plan du site et dans la liste des documents à télécharger.");
		$id_mot = create_mot("_Specialisation_Rubrique_ou_Article", "PasDansPlanLocal", "Permet de masquer une rubrique, et tout son contenu (y compris les sous-rubriques) des plan locaux du site (ceux affichés quand une rubrique n'a ni texte, ni article, ni site).\n\nPermet aussi de le faire article par article.", "À affecter aux rubriques ou articles qui ne doivent pas être affichés dans les plan locaux du site.");
		$id_mot = create_mot("_Specialisation_Rubrique_ou_Article", "PasDansQuoiDeNeuf", "Pour interdire que l'article ou la rubrique soit dans «Quoi de Neuf» sur la page d'accueil", "À mettre soit:\n\n-* pour un article précis\n-* pour une rubrique particulière\n\nRemarque : si elle a des sous rubriques, il faut aussi le faire pour chacunes de celles-ci si on veut les exclure aussi...");
		$id_mot = create_mot("_Specialisation_Rubrique_ou_Article", "PasDansRecherche", "Permet de masquer un article, ou le contenu d’une rubrique des résultats de la recherche", "À affecter aux articles ou aux rubriques qui ne doivent pas être affichés dans les résultats de la recherche");
		$id_mot = create_mot("_Specialisation_Rubrique_ou_Article", "Sommaire", "Pour dire que les articles de cette rubrique ont un sommaire ou que l'article a un sommaire", "Un sommaire automatique sera placé en début d'article.\n\nCe sommaire sera bati à partir des titres et sous-titres du texte de l'article.");

	create_groupe("_Specialisation_Sites", "Groupe permettant de spécifier un rôle particulier pour des sites", "", 'non', 'non', 'syndic', 'oui', 'non', 'non');
		$id_mot = create_mot("_Specialisation_Sites", "LienDirect", "Mettre ce mot clef aux sites pour faire des liens directs aux sites sans passer par une page intermédiaire.", "");
		$id_mot = create_mot("_Specialisation_Sites", "NoIndex", "Pour ne pas indexer les articles syndiqués d'un site.", "Affecter ce mot clef aux sites dont les articles syndiqués ne doivent pas être affichés dans l'index des moteurs de recherche.\n\nÀ noter : les liens seront quand même suivis. But : éviter du duplicate content.\n\nVoir la documentation de Google webmaster Central sur les [Meta tags->http://www.google.com/support/webmasters/bin/answer.py?hl=en&answer=79812].");
		$id_mot = create_mot("_Specialisation_Sites", "PortailActualites", "Mettre ce mot clef aux sites à afficher sur le portail actualités", "En mettant un numéro point espace aux titres des sites concernés, on choisi l'ordre d'affichage.");
		$id_mot = create_mot("_Specialisation_Sites", "ReseauxSociaux", "Mettre ce mot clef aux sites servant de liens vers les réseaux sociaux du site.\n\nMettre un texte dans ce mot clef pour qu'il soit affiché devant les icones des sites", "");
		$id_mot = create_mot("_Specialisation_Sites", "SaintDuJour", "Mettre ce mot clef au site donnant le Saint du jour", "");

	create_groupe("_TypeRubrique", "Pour indiquer un type spécifique de rubrique", "Il faut choisir un mot clef dans cette liste pour obtenir un affichage spécifique de rubrique.\n\nNB : pour rajouter un mot clef \"mc1\", il faut aussi rajouter les squelettes correspondants :\n-* noisettes/rubriques/typerubrique_mc1.html\n-* noisettes/footer/footer_typerubrique_mc1.html (facultatif)\n-* noisettes/articles/typearticle_mc1.html (facultatif)", 'oui', 'non', 'rubriques', 'oui', 'non', 'non');
		$id_mot = create_mot("_TypeRubrique", "ArticlesParAnnees", "Pour dire que la rubrique ayant ce mot clef doit utiliser le squelette type des ArticlesParAnnees.", "Affecter ce mot clef à chaque rubrique racine concernée. À la place de la rubrique, on aura le contenu de tous les articles de cette rubrique, par années, par mois, par ordre antichronologique dans chaque mois.");
		$id_mot = create_mot("_TypeRubrique", "ContenuArticles", "Pour dire que la rubrique ayant ce mot clef doit utiliser le squelette type des ContenuArticles.", "Affecter ce mot clef à chaque rubrique racine concernée. À la place de la rubrique, on aura le contenu de tous les articles de cette rubrique, par ordre antichronologique, ou par numéro de titre.");
		$id_mot = create_mot("_TypeRubrique", "ListeArticlesParAnnees", "Pour dire que la rubrique ayant ce mot clef doit utiliser le squelette type des ListeArticlesParAnnees.", "Affecter ce mot clef à chaque rubrique racine concernée. À la place de la rubrique, on aura la liste des articles de cette rubrique, par années, par mois, par ordre antichronologique dans chaque mois.");
		$id_mot = create_mot("_TypeRubrique", "Magazines", "Pour dire que la rubrique ayant ce mot clef doit utiliser le squelette type des Magazines.", "Affecter ce mot clef à chaque rubrique racine concernée. À la place de la rubrique, on aura la liste des documents joints aux articles, avec la vignette associée.");
		$id_mot = create_mot("_TypeRubrique", "multicolonnes", "Pour dire que la rubrique ayant ce mot clef doit utiliser le squelette type multicolonnes.", "Affecter ce mot clef à chaque rubrique racine concernée. À la place de la rubrique, on aura une colonne par sous rubrique, avec la liste des articles par ordre antichronologique, ou par numéro de titre.");

	include_spip("inc/sc_article");
	// Structure et contenu du site
	$nouvelle_installation = false;
	if ( $GLOBALS['meta']['nom_site'] == _T('info_mon_site_spip') ) {
		ecrire_meta('nom_site', 'Votre site SPIP','non');
		ecrire_meta('slogan_site', '[Todo : Slogan du site]','non');
		ecrire_meta('descriptif_site', '[ToDo : descriptif du site en 20 mots = 2 lignes max ]','non');
		ecrire_meta('email_webmaster', 'vous@domaine.tld','non');
		create_logo('documents/siteon0.jpg', $type='site', 0, 'jpg');
		$nouvelle_installation = true;
	}

	$id_rubrique = create_rubrique("000. Fourre-tout", '0', "Vous trouverez dans cette rubrique:\n\n-* Les Éditos\n-* Des articles concernant le site lui-même\n");
		create_rubrique_mot("000. Fourre-tout", "AfficherArticlesMenu", "_Specialisation_Rubrique");
		create_rubrique_mot("000. Fourre-tout", "PasDansMenu", "_Specialisation_Rubrique");
		create_rubrique_mot("000. Fourre-tout", "PasDansPlan", "_Specialisation_Rubrique_ou_Article");
		create_rubrique_mot("000. Fourre-tout", "SecteurPasDansQuoiDeNeuf", "_Specialisation_Rubrique");
		create_rubrique_mot("000. Fourre-tout", "PasDansFildAriane", "_Specialisation_Rubrique");
		$id_article = create_article(trouve_article_sc("Contact"), "000. Fourre-tout");
			create_article_mot("Contact", "000. Fourre-tout", "MENURACINEBAS_Systematique", "_Specialisation");
			ecrire_config('soyezcreateurs/bandeau_contact',"<div id=\"informations\" class=\"row\">
	<div id=\"coordonnees\" class=\"avec-padding\">
		<div class=\"adresse flexbox-flex\">
			<span class=\"icon-location icon-lg icon-fw texte-blanc\"></span>
			<p>
				Rue du bonheur<br />
				01777 - SoyezCréateurs
			</p>
		</div>
		<div class=\"telephone flexbox-flex\">
			<span class=\"icon-phone icon-lg icon-fw texte-blanc\"></span>
			<p>
				[01~23~45~67~89->tel:+33.123456789]
			</p>
		</div>
		<div class=\"telephone flexbox-flex\">
			<span class=\"icon-fax icon-lg icon-fw texte-blanc\"></span>
			<p>
				01~23~45~67~89 (fax)
			</p>
		</div>
		<div class=\"accueil flexbox-flex\">
			<span class=\"icon-information icon-lg icon-fw texte-blanc\"></span>
			<p>
				Information complémentaires.<br />
 
			</p>
		</div>
		<p><a class=\"button triadeC texte-blanc float-center avec-margin\" href=\"/$id_article\"><span class=\"icon-envelope icon-lg avec-padding-right05\"></span>Nous écrire</a></p>
	</div>
	<div id=\"carte\" class=\"avec-padding\">
		<html><!-- Begin Exclude NewsLetter --></html><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d365312.326488903!2d-1.5056982671874777!3d44.33045219999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5380bbec6fa8d3%3A0x2cd88d7991f88ca4!2sPerdu..!5e0!3m2!1sfr!2sfr!4v1508413717844\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen=\"true\"></iframe><html><!-- End Exclude NewsLetter --></html>
	</div>
</div>");
		$id_article = create_article(trouve_article_sc("Politique d'accessibilité du site"), "000. Fourre-tout");
			create_article_mot("Politique d'accessibilité du site", "000. Fourre-tout", "AccesibiliteLien", "_Specialisation");
			create_article_mot("Politique d'accessibilité du site", "000. Fourre-tout", "Sommaire", "_Specialisation_Rubrique_ou_Article");
		$id_article = create_article(trouve_article_sc("Mentions légales"), "000. Fourre-tout");
			create_article_mot("Mentions légales", "000. Fourre-tout", "MentionsLegales", "_Specialisation");
		$id_article = create_article(trouve_article_sc("10. Premiers pas dans le squelette SoyezCreateurs"), "000. Fourre-tout");
			create_logo('documents/arton1.jpg', $type='art', $id_article, 'jpg');
			create_article_mot("10. Premiers pas dans le squelette SoyezCreateurs", "000. Fourre-tout", "ALaUne", "_Specialisation");
			create_article_mot("10. Premiers pas dans le squelette SoyezCreateurs", "000. Fourre-tout", "EDITO", "_Specialisation");
		$id_doc = create_document('documents/contact.jpg',
			null,
			'image',
			array('titre' => 'Contactez-nous', 'descriptif' => 'Clavier de téléphone...'));
		$article = trouve_article_sc("20. Raccourcis Typographiques de SPIP, mode d'emploi");
		$article['texte'] = str_replace('<img1', "<img$id_doc", $article['texte']);
		$article['texte'] = str_replace('<doc1', "<doc$id_doc", $article['texte']);
		$article['texte'] = str_replace('<emb1', "<emb$id_doc", $article['texte']);
		$id_doc2 = create_document('documents/arton1.jpg',
			null,
			'image',
			array('titre' => 'Exemple d\'image', 'descriptif' => 'Avec un descriptif de l\'image en dessous.'));
		$article['texte'] = str_replace("<img$id_doc|center", "<img$id_doc2|center", $article['texte']);
		$article['texte'] = str_replace("<doc$id_doc|center", "<doc$id_doc2|center", $article['texte']);
		$article['texte'] = str_replace("<emb$id_doc|center", "<emb$id_doc2|center", $article['texte']);
		$id_article = create_article($article, "000. Fourre-tout");
			$id_doc = create_document('documents/spip_decroche_la_lune.jpg',
				array('type' => 'article', 'id_objet' => $id_article),
				'document',
				array('titre' => 'Décrochez la lune avec SPIP !', 'statut' => 'publie'));
			$id_doc = create_document('documents/arton1.jpg',
				array('type' => 'article', 'id_objet' => $id_article),
				'document',
				array('titre' => 'Arbre dans la lumière', 'statut' => 'publie'));
			$id_doc = create_document('documents/arton7.png',
				array('type' => 'article', 'id_objet' => $id_article),
				'document',
				array('titre' => 'Casier de typographe avec lettres au plomb', 'statut' => 'publie'));
			create_logo('documents/arton7.png', $type='art', $id_article, 'png');
			create_article_mot("20. Raccourcis Typographiques de SPIP, mode d'emploi", "000. Fourre-tout", "ALaUne", "_Specialisation");
			create_article_mot("20. Raccourcis Typographiques de SPIP, mode d'emploi", "000. Fourre-tout", "Courrier_libre", "_Specialisation");
			create_article_mot("20. Raccourcis Typographiques de SPIP, mode d'emploi", "000. Fourre-tout", "Sommaire", "_Specialisation_Rubrique_ou_Article");
			if ($nouvelle_installation) {
				$sites = array();
				$sites['nom_site'] = "MàJ SoyezCréateurs";
				$sites['url_site'] = "https://zone.spip.org/trac/spip-zone/log/_squelettes_/soyezcreateurs_net?action=follow_copy&amp;mode=follow_copy&amp;rev=&amp;stop_rev=&amp;limit=100";
				$sites['descriptif'] = "Les dernières mises à jour de SoyezCréateurs sur la Zone de SPIP.";
				$sites['url_syndic'] = "https://zone.spip.org/trac/spip-zone/log/_squelettes_/soyezcreateurs_net?format=rss&amp;stop_rev=&amp;limit=100&amp;mode=follow_copy";
				$sites['statut'] = 'publie';
				$id_site = create_site($sites, "000. Fourre-tout");
				$sites = array();
				$sites['nom_site'] = "SoyezCréateurs";
				$sites['url_site'] = "https://contrib.spip.net/?rubrique1237";
				$sites['descriptif'] = "La documentation sur le squelette SoyezCreateurs disponible sur la zone.";
				$sites['url_syndic'] = "https://contrib.spip.net/spip.php?page=backend&amp;id_rubrique=1237";
				$sites['statut'] = 'publie';
				$id_site = create_site($sites, "000. Fourre-tout");
			}

		$id_parent = $id_rubrique;

		$id_rubrique = create_rubrique("05. Saint du jour", $id_parent, "Rubrique destinée à recevoir le site référencé utilisé pour l'affichage du Saint du jour.");
				$sites = array();
				$sites['nom_site'] = "Nominis (Saint du jour)";
				$sites['url_site'] = "http://nominis.cef.fr/";
				$sites['descriptif'] = "Nominis : Origine et étymologie des prénoms, des fêtes, des saints, la vie des saints.";
				$sites['url_syndic'] = "http://nominis.cef.fr/rss/nominis.php";
				$sites['statut'] = 'prop';
				$id_site = create_site($sites, "05. Saint du jour");
					create_site_mot($id_site, "SaintDuJour", "_Specialisation_Sites");

		$id_rubrique = create_rubrique("10. Navigation haute", $id_parent, "Pour éviter que les articles servant à la création du menu de navigation haute se retrouvent dans la navigation du site, placez-les dans cette rubrique.\n\nVoir [->mot106] pour la documentation.");
			create_rubrique_mot("10. Navigation haute", "AfficherArticlesMenu", "_Specialisation_Rubrique");
			create_rubrique_mot("10. Navigation haute", "PasDansFildAriane", "_Specialisation_Rubrique");

		$id_rubrique = create_rubrique("20. NewsLetter", $id_parent, "Pour éviter que les articles servant à la création de vos lettres se retrouvent dans la navigation du site, placez-les dans cette rubrique.\n\nPour faire une lettre, il vous faudra le plugin [CleverMail->https://contrib.spip.net/CleverMail], et utiliser les squelettes : {{lettre_libre}} et {{lettre_libre_txt}}. Utilisez le mot clef {Courrier_libre} pour désigner l'article servant pour le prochain courrier.");

		$id_rubrique = create_rubrique("30. Outils", $id_parent, "Navigations par les outils : un article de redirection par outil, numérotés.\nChaque article doit avoir le mot clef de _Specialisation : Outils");
		if ($nouvelle_installation) {
			$id_article = create_article(trouve_article_sc("10. Outil 1"), "30. Outils");
				create_logo('documents/arton13.jpg', $type='art', $id_article, 'jpg');
				create_logo('documents/artoff13.jpg', $type='art', $id_article, 'jpg','off');
				create_article_mot("10. Outil 1", "30. Outils", "Outils", "_Specialisation");
			$id_article = create_article(trouve_article_sc("20. Outil 2"), "30. Outils");
				create_logo('documents/arton17.jpg', $type='art', $id_article, 'jpg');
				create_logo('documents/artoff17.jpg', $type='art', $id_article, 'jpg','off');
				create_article_mot("20. Outil 2", "30. Outils", "Outils", "_Specialisation");
			$id_article = create_article(trouve_article_sc("30. Outil 3"), "30. Outils");
				create_logo('documents/arton18.jpg', $type='art', $id_article, 'jpg');
				create_logo('documents/artoff18.jpg', $type='art', $id_article, 'jpg','off');
				create_article_mot("30. Outil 3", "30. Outils", "Outils", "_Specialisation");
			$id_article = create_article(trouve_article_sc("40. Outil 4"), "30. Outils");
				create_logo('documents/arton19.jpg', $type='art', $id_article, 'jpg');
				create_logo('documents/artoff19.jpg', $type='art', $id_article, 'jpg','off');
				create_article_mot("40. Outil 4", "30. Outils", "Outils", "_Specialisation");
			$id_article = create_article(trouve_article_sc("50. Documentation"), "30. Outils");
				create_logo('documents/arton20.jpg', $type='art', $id_article, 'jpg');
				create_logo('documents/artoff20.jpg', $type='art', $id_article, 'jpg','off');
				create_article_mot("50. Documentation", "30. Outils", "Outils", "_Specialisation");
		}

		$id_rubrique = create_rubrique("80. Réseaux sociaux", $id_parent, "Rubrique destinée à recevoir les sites référencés utilisés pour l'affichage des réseaux sociaux.");
				$sites = array();
				$sites['nom_site'] = "10. Facebook";
				$sites['url_site'] = "https://www.facebook.com/";
				$sites['descriptif'] = "Retrouvez-nous sur Facebook";
				$sites['url_syndic'] = "";
				$sites['statut'] = 'prop';
				$id_site = create_site($sites, "80. Réseaux sociaux");
					create_logo('documents/siteon2.png', $type='site', $id_site, 'png');
					create_site_mot($id_site, "ReseauxSociaux", "_Specialisation_Sites");
				$sites = array();
				$sites['nom_site'] = "15. Google+";
				$sites['url_site'] = "https://plus.google.com/GGGGGGGGGG?rel=author";
				$sites['descriptif'] = "Retrouvez-nous sur Google+";
				$sites['url_syndic'] = "";
				$sites['statut'] = 'prop';
				$id_site = create_site($sites, "80. Réseaux sociaux");
					create_logo('documents/siteon9.png', $type='site', $id_site, 'png');
					create_site_mot($id_site, "ReseauxSociaux", "_Specialisation_Sites");
				$sites = array();
				$sites['nom_site'] = "20. Twitter";
				$sites['url_site'] = "https://twitter.com/";
				$sites['descriptif'] = "Retrouvez-nous sur Twitter";
				$sites['url_syndic'] = "";
				$sites['statut'] = 'prop';
				$id_site = create_site($sites, "80. Réseaux sociaux");
					create_logo('documents/siteon3.png', $type='site', $id_site, 'png');
					create_site_mot($id_site, "ReseauxSociaux", "_Specialisation_Sites");
				$sites = array();
				$sites['nom_site'] = "30. Viadeo";
				$sites['url_site'] = "http://www.viadeo.com/fr/";
				$sites['descriptif'] = "Retrouvez-nous sur Viadeo";
				$sites['url_syndic'] = "";
				$sites['statut'] = 'prop';
				$id_site = create_site($sites, "80. Réseaux sociaux");
					create_logo('documents/siteon4.png', $type='site', $id_site, 'png');
					create_site_mot($id_site, "ReseauxSociaux", "_Specialisation_Sites");
				$sites = array();
				$sites['nom_site'] = "90. Flux RSS du site";
				$sites['url_site'] = "?page=backend";
				$sites['descriptif'] = "public:syndiquer_site";
				$sites['url_syndic'] = "";
				$sites['statut'] = 'publie';
				$id_site = create_site($sites, "80. Réseaux sociaux");
					create_logo('documents/siteon5.png', $type='site', $id_site, 'png');
					create_site_mot($id_site, "ReseauxSociaux", "_Specialisation_Sites");


	if ($nouvelle_installation) {
		$id_rubrique = create_rubrique("100. Rubriques", '0', "Clementer adsurgit, Hierapoli, vetere Nino et Samosata civitatibus amplis inlustris.");
			create_rubrique_mot("100. Rubriques", "MenuHaut", "_Specialisation_Rubrique");

		$id_parent = $id_rubrique;

			$id_rubrique = create_rubrique("10. DessousBreves 1", $id_parent, "Avec le mot clef \"DessousBreves\".\n_ Affiche: titre, bulle d'aide, liste des article");
				create_rubrique_mot("10. DessousBreves 1", "DessousBreves", "_Specialisation_Rubrique");
				$id_article = create_article(trouve_article_sc("20. Et prima post Osdroenam quam"), "10. DessousBreves 1");
				$id_article = create_article(trouve_article_sc("30. Ideo urbs venerabilis"), "10. DessousBreves 1");

			$id_rubrique = create_rubrique("20. DessousBreves 2", $id_parent, "Sur 2 colonnes.\n_ non limité en nombre");
				create_rubrique_mot("20. DessousBreves 2", "DessousBreves", "_Specialisation_Rubrique");
				$id_article = create_article(trouve_article_sc("10. Nos obsecuturos"), "20. DessousBreves 2");
				$id_article = create_article(trouve_article_sc("20. Mensarum enim"), "20. DessousBreves 2");
				$id_article = create_article(trouve_article_sc("30. Iamque non umbratis"), "20. DessousBreves 2");



		$id_rubrique = create_rubrique("200. Avec le mot-clé", '0', "Quare talis improborum consensio non modo excusatione amicitiae tegenda non est sed potius supplicio omni.");
			create_rubrique_mot("200. Avec le mot-clé", "MenuHaut", "_Specialisation_Rubrique");
			$id_article = create_article(trouve_article_sc("Le nombre d'article affiché est administrable"), "200. Avec le mot-clé");
				create_logo('documents/arton33.jpg', $type='art', $id_article, 'jpg');
				create_logo('documents/artoff33.jpg', $type='art', $id_article, 'jpg','off');
			$id_article = create_article(trouve_article_sc("Un sourire peut changer une vie"), "200. Avec le mot-clé");
				create_article_mot("Un sourire peut changer une vie", "200. Avec le mot-clé", "VideoALaUne", "_Specialisation");
			$id_article = create_article(trouve_article_sc("30. Articles avec le Mot clef : \"ALaUne\""), "200. Avec le mot-clé");
				create_logo('documents/arton22.jpg', $type='art', $id_article, 'jpg');
				create_article_mot("30. Articles avec le Mot clef : \"ALaUne\"", "200. Avec le mot-clé", "ALaUne", "_Specialisation");
			$id_article = create_article(trouve_article_sc("40. Image = logo"), "200. Avec le mot-clé");
				create_logo('documents/arton24.jpg', $type='art', $id_article, 'jpg');
				create_article_mot("40. Image = logo", "200. Avec le mot-clé", "ALaUne", "_Specialisation");



		$id_rubrique = create_rubrique("300. MenuHaut", '0', "Libano monti Phoenice, regio plena gratiarum et venustatis");
			create_rubrique_mot("300. MenuHaut", "MenuHaut", "_Specialisation_Rubrique");
			$id_article = create_article(trouve_article_sc("Les derniers articles modifiés"), "300. MenuHaut");
				create_logo('documents/arton32.jpg', $type='art', $id_article, 'jpg');
				create_logo('documents/artoff32.jpg', $type='art', $id_article, 'jpg','off');
			$id_article = create_article(trouve_article_sc("10. Urbibus decorata"), "300. MenuHaut");
			$id_article = create_article(trouve_article_sc("20. Rogatus ad ultimum"), "300. MenuHaut");



		$id_rubrique = create_rubrique("400. Classées par numéro de titre", '0', "Subsidiis patrimonii aut amicorum liberalitate sustentant hos perire patiemur.");
			create_rubrique_mot("400. Classées par numéro de titre", "MenuHaut", "_Specialisation_Rubrique");
			$id_article = create_article(trouve_article_sc("10. Oportunum est"), "400. Classées par numéro de titre");
			$id_article = create_article(trouve_article_sc("20. Quis enim"), "400. Classées par numéro de titre");
			$id_article = create_article(trouve_article_sc("30. Altera sententia est"), "400. Classées par numéro de titre");



		$id_rubrique = create_rubrique("800. Rubrique \"Goodies\"", '0', "Si post exsudatos labores itinerum longos congestosque adfatim.");
			create_rubrique_mot("800. Rubrique \"Goodies\"", "Goodies", "_ModePortail");
			create_rubrique_mot("800. Rubrique \"Goodies\"", "SecteurPasDansQuoiDeNeuf", "_Specialisation_Rubrique");
			$id_article = create_article(trouve_article_sc("Logo de survol"), "800. Rubrique \"Goodies\"");
				create_logo('documents/arton14.jpg', $type='art', $id_article, 'jpg');
				create_logo('documents/artoff14.jpg', $type='art', $id_article, 'jpg','off');
			$id_article = create_article(trouve_article_sc("Derniers articles"), "800. Rubrique \"Goodies\"");
				create_logo('documents/arton30.jpg', $type='art', $id_article, 'jpg');
				create_logo('documents/artoff30.jpg', $type='art', $id_article, 'jpg','off');
			$id_article = create_article(trouve_article_sc("Titre de la rubrique"), "800. Rubrique \"Goodies\"");
				create_logo('documents/arton31.jpg', $type='art', $id_article, 'jpg');
				create_logo('documents/artoff31.jpg', $type='art', $id_article, 'jpg','off');
	}

	$id_rubrique = create_rubrique("999. Citations", '0', "Mettre dans cette rubrique une citation par article");
		create_rubrique_mot("999. Citations", "Citations", "_Specialisation_Rubrique");
		create_rubrique_mot("999. Citations", "PasDansMenu", "_Specialisation_Rubrique");
		create_rubrique_mot("999. Citations", "PasDansPlan", "_Specialisation_Rubrique_ou_Article");
		create_rubrique_mot("999. Citations", "SecteurPasDansQuoiDeNeuf", "_Specialisation_Rubrique");
		create_rubrique_mot("999. Citations", "PasDansFildAriane", "_Specialisation_Rubrique");
		if ($nouvelle_installation) {
			$id_article = create_article(trouve_article_sc("Conseil n°3"), "999. Citations");
			$id_article = create_article(trouve_article_sc("Conseil n°2"), "999. Citations");
			$id_article = create_article(trouve_article_sc("Conseil n°1"), "999. Citations");
			$id_article = create_article(trouve_article_sc("Conseil n°4"), "999. Citations");
		}

	return true;
}

function soyezcreateurs_vider($tout=false) {
	poubelle_article("10. Premiers pas dans le squelette SoyezCreateurs","000. Fourre-tout");
	#poubelle_article("Contact","000. Fourre-tout");
	poubelle_article("20. Raccourcis Typographiques de SPIP, mode d'emploi","000. Fourre-tout");
	#poubelle_article("Politique d'accessibilité du site","000. Fourre-tout");
	#poubelle_article("Mentions légales","000. Fourre-tout");
	poubelle_article("Conseil n°3","999. Citations");
	poubelle_article("Conseil n°4","999. Citations");
	poubelle_article("Conseil n°2","999. Citations");
	poubelle_article("Conseil n°1","999. Citations");
	poubelle_article("50. Documentation","30. Outils");
	poubelle_article("Logo de survol","800. Rubrique \"Goodies\"");
	poubelle_article("Derniers articles","800. Rubrique \"Goodies\"");
	poubelle_article("Titre de la rubrique","800. Rubrique \"Goodies\"");
	poubelle_article("30. Articles avec le Mot clef : \"ALaUne\"","200. Avec le mot-clé");
	poubelle_article("40. Image = logo","200. Avec le mot-clé");
	poubelle_article("Le nombre d'article affiché est administrable","200. Avec le mot-clé");
	poubelle_article("Un sourire peut changer une vie","200. Avec le mot-clé");
	poubelle_article("20. Et prima post Osdroenam quam","10. DessousBreves 1");
	poubelle_article("30. Ideo urbs venerabilis","10. DessousBreves 1");
	poubelle_article("10. Nos obsecuturos","20. DessousBreves 2");
	poubelle_article("20. Mensarum enim","20. DessousBreves 2");
	poubelle_article("30. Iamque non umbratis","20. DessousBreves 2");
	poubelle_article("Les derniers articles modifiés","300. MenuHaut");
	poubelle_article("10. Urbibus decorata","300. MenuHaut");
	poubelle_article("20. Rogatus ad ultimum","300. MenuHaut");
	poubelle_article("10. Oportunum est","400. Classées par numéro de titre");
	poubelle_article("20. Quis enim","400. Classées par numéro de titre");
	poubelle_article("30. Altera sententia est","400. Classées par numéro de titre");
	poubelle_article("Historique des versions de SPIP","10. SPIP");

	poubelle_site("MàJ SoyezCréateurs", "000. Fourre-tout");
	poubelle_site("SoyezCréateurs", "000. Fourre-tout");

	if ($tout===true) {
		poubelle_article("10. Outil 1","30. Outils");
		poubelle_article("20. Outil 2","30. Outils");
		poubelle_article("30. Outil 3","30. Outils");
		poubelle_article("40. Outil 4","30. Outils");
		delete_rubrique("100. Rubriques");
		delete_rubrique("10. DessousBreves 1");
		delete_rubrique("20. DessousBreves 2");
		delete_rubrique("200. Avec le mot-clé");
		delete_rubrique("300. MenuHaut");
		delete_rubrique("400. Classées par numéro de titre");
		delete_rubrique("800. Rubrique \"Goodies\"");
	}

	delete_rubrique("10. SPIP");
	delete_rubrique("20. Linux");

	// Au cas où : remttre au carré les id_secteur des articles et rubriques.
	include_spip('inc/rubriques');
	calculer_rubriques();
	propager_les_secteurs();
	effacer_meta("date_calcul_rubriques");

	return true;
}

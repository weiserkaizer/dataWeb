<?php
/*
* Pipeline pour SoyezCreateurs
* Realisation : RealET : real3t@gmail.com
* Attention, fichier en UTF-8 sans BOM
*/

if (!defined('_ECRIRE_INC_VERSION')) return;

function soyezcreateurs_jqueryui_plugins($scripts) {
	if (lire_config('soyezcreateurs/native_tooltips') !== 'on') {
		$scripts[] = "jquery.ui.tooltip";
	}
	return $scripts;
}

function soyezcreateurs_formulaire_traiter($flux){
	if(strpos($flux['args']['form'], 'configurer_soyezcreateurs') !== false){
		include_spip('inc/invalideur');
		purger_repertoire(_DIR_VAR.'cache-css');
		purger_repertoire(_DIR_VAR.'cache-js');
		suivre_invalideur('configurer_soyezcreateurs');
	}
	return $flux;
}

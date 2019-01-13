<?php

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

function soyezcreateurs_saisies_export() {
	include_spip('soyezcreateurs_fonctions_ieconfig');
	$url = getURI();
	if (strpos($url, '&cfg=soyezcreateurs_layout')) {
		$nom = array(
					'saisie' => 'input',
					'options' => array(
						'nom' => 'ieconfig_export_nom',
						'label' => '<:ieconfig:label_ieconfig_export_nom:>',
						'obligatoire' => 'oui',
						'defaut' => 'soyezcreateurs_layout_' . date('Y/m/d')
					)
				);
	}
	elseif (strpos($url, '&cfg=soyezcreateurs_couleurs')) {
		$nom = array(
					'saisie' => 'input',
					'options' => array(
						'nom' => 'ieconfig_export_nom',
						'label' => '<:ieconfig:label_ieconfig_export_nom:>',
						'obligatoire' => 'oui',
						'defaut' => 'soyezcreateurs_couleurs_' . date('Y/m/d')
					)
				);
	}
	elseif (strpos($url, '&cfg=soyezcreateurs_google')) {
		$nom = array(
					'saisie' => 'input',
					'options' => array(
						'nom' => 'ieconfig_export_nom',
						'label' => '<:ieconfig:label_ieconfig_export_nom:>',
						'obligatoire' => 'oui',
						'defaut' => 'soyezcreateurs_google_' . date('Y/m/d')
					)
				);
	}
	elseif (strpos($url, '&cfg=soyezcreateurs')) {
		$nom = array(
					'saisie' => 'input',
					'options' => array(
						'nom' => 'ieconfig_export_nom',
						'label' => '<:ieconfig:label_ieconfig_export_nom:>',
						'obligatoire' => 'oui',
						'defaut' => 'soyezcreateurs_' . date('Y/m/d')
					)
				);
	}
	$saisies = array(
		// Options d'export
		array(
			'saisie' => 'fieldset',
			'options' => array(
				'nom' => 'ieconfig_export',
				'label' => '<:ieconfig:label_ieconfig_export:>',
				'icone' => 'img/ieconfig-export.png'
			),
			'saisies' => array(
				$nom,
				array(
					'saisie' => 'textarea',
					'options' => array(
						'nom' => 'ieconfig_export_description',
						'label' => '<:ieconfig:label_ieconfig_export_description:>',
						'rows' => 4
					)
				),
				array(
					'saisie' => 'explication',
					'options' => array(
						'nom' => 'ieconfig_export_explication',
						'texte' => '<:ieconfig:texte_ieconfig_export_explication:>'
					)
				),
				array(
					'saisie' => 'selection',
					'options' => array(
						'nom' => 'ieconfig_export_choix',
						'label' => '<:ieconfig:label_ieconfig_export_choix:>',
						'cacher_option_intro' => 'oui',
						'defaut' => 'telecharger',
						'datas' => array(
							'sauvegarder' => '<:ieconfig:item_sauvegarder:>',
							'telecharger' => '<:ieconfig:item_telecharger:>'
						)
					)
				)
			)
		)
	);
	return $saisies;
}

function formulaires_export_soyezcreateurs_charger_dist() {
	$saisies = soyezcreateurs_saisies_export();
	$contexte = array(
		'_saisies' => $saisies
	);
	
	$export = array_merge(saisies_charger_champs($saisies), $contexte);
	
	return $export;
}

function formulaires_export_soyezcreateurs_verifier_dist() {
	include_spip('inc/saisies');

	return saisies_verifier(soyezcreateurs_saisies_export());
}

function formulaires_export_soyezcreateurs_traiter_dist() {
	
	include_spip('soyezcreateurs_fonctions_ieconfig');
	$export = array();
	$export['nom'] = _request('ieconfig_export_nom');
	$nom = $export['nom'];
	if (_request('ieconfig_export_description') != '') {
		$export['description'] = _request('ieconfig_export_description');
	}

	// On créé le tableau en fonction de l'entête de la page
	$url = getURI();
	if (strpos($url, '&cfg=soyezcreateurs_layout')) {
		$export['soyezcreateurs']['soyezcreateurs_layout'] = soyezcreateurs_tableau_export_spe('soyezcreateurs_layout')['soyezcreateurs_layout'];
		$site = 'soyezcreateurs_layout';
	}
	elseif (strpos($url, '&cfg=soyezcreateurs_couleurs')) {
		$export['soyezcreateurs']['soyezcreateurs_couleurs'] = soyezcreateurs_tableau_export_spe('soyezcreateurs_couleurs')['soyezcreateurs_couleurs'];
		if (strpos($nom, 'police')) {
			$site = 'soyezcreateurs_police';
		}
		else {
			$site = 'soyezcreateurs_couleurs';
		}
		
	}
	elseif (strpos($url, '&cfg=soyezcreateurs_google')) {
		$export['soyezcreateurs']['soyezcreateurs_google'] = soyezcreateurs_tableau_export_spe('soyezcreateurs_google')['soyezcreateurs_google'];
		$site = 'soyezcreateurs_google';
	}
	elseif (strpos($url, '&cfg=soyezcreateurs')) {
		$export['soyezcreateurs']['soyezcreateurs'] = soyezcreateurs_tableau_export_spe('soyezcreateurs')['soyezcreateurs'];
		$site = 'soyezcreateurs_layout';
	}

	
	
	// On encode en yaml
	include_spip('inc/yaml');
	$export = yaml_encode($export, array('inline' => 20));

	// Nom du fichier
	include_spip('inc/texte');
	$filename = $site . '_' . date('Y-m-d_H-i') . '.yaml';

	// Si telechargement
	if (_request('ieconfig_export_choix') == 'telecharger') {
		refuser_traiter_formulaire_ajax();
		set_request('action', 'courcircuiter_affichage_usage_memoire'); // Pour empêcher l'extension dev d'ajouter un div avec l'usage mémoire.
		header('Content-Type: text/x-yaml;');
		header("Content-Disposition: attachment; filename=$filename");
		header('Content-Length: ' . strlen($export));
		echo $export;
		exit;
	} else {
		sous_repertoire(_DIR_TMP, 'ieconfig');
		if (ecrire_fichier(_DIR_TMP . 'ieconfig/' . $filename, $export)) {
			return array('message_ok' => _T('ieconfig:message_ok_export', array('filename' => $filename)));
		} else {
			return array('message_erreur' => _T('ieconfig:message_erreur_export', array('filename' => $filename)));
		}
	}
}

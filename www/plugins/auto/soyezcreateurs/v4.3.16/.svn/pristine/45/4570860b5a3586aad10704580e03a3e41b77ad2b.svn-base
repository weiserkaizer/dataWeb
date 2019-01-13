<?php
include_spip('soyezcreateurs_fonctions_ieconfig');
function soyezcreateurs_ieconfig($flux){
	$action = $flux['args']['action'];
	
	//formulaire d'export
	if ($action == 'form_export'){
		$saisies = array(form_export());
		$flux['data'] = array_merge($flux['data'], $saisies);
	}
	
	
	// Tableau d'export
	if ($action == 'export' && _request('soyezcreateurs_export_option') == 'on') {			
		$flux['data']['soyezcreateurs'] = soyezcreateurs_tableau_export(_request('soyezcreateurs_export_choix'));
	}
	
	// Formulaire d'import
		if ($action == 'form_import' && isset($flux['args']['config']['soyezcreateurs'])) {
		$url = getURI();
		$saisies = array(
				array(
					'saisie' => 'fieldset',
					'options' => array(
						'nom' => 'soyezcreateurs_import',
						'label' => '<:soyezcreateursprive:soyezcreateurs:>',
						'icone' => 'soyezcreateurs-16.png',
					),
				),
			);
			$s1 = array();
	//on détermine quelles configuration sont effectivement sauvegarder

			if (strpos($url, '?exec=ieconfig_import')) {
				foreach ($flux['args']['config']['soyezcreateurs'] as $section=>$exist){
				
				$s1[] = array(
					'saisie' => 'radio',
					'options' => array(
						'nom' => 'soyezcreateurs_import_choix_'.$section,
						'label' => '<:soyezcreateursprive:ieconfig_soyezcreateurs_import_explication_'.$section.':>',
						'datas' => array(
							'rien' => '<:soyezcreateursprive:soyezcreateurs_import_soyezcreateurs_rien:>',
							'fusion' => '<:soyezcreateursprive:soyezcreateurs_import_soyezcreateurs_fusionner:>',
							'ecrase' => '<:soyezcreateursprive:soyezcreateurs_import_ecraser:>',
							'fusion_inv' => '<:soyezcreateursprive:soyezcreateurs_import_soyezcreateurs_fusionner_inv:>',						
							),
						'defaut' => 'fusion',
						)
					);
				}
			}
			elseif (strpos($url, '?exec=sc_import')) {
				foreach ($flux['args']['config']['soyezcreateurs'] as $section=>$exist){
				$s1[] = array(
					'saisie' => 'radio',
					'options' => array(
						'nom' => 'soyezcreateurs_import_choix_'.$section,
						'label' => '<:soyezcreateursprive:ieconfig_soyezcreateurs_import_explication_'.$section.':>',
						'datas' => array(
							'rien' => '<:soyezcreateursprive:soyezcreateurs_import_soyezcreateurs_rien:>',
							'fusion' => '<:soyezcreateursprive:soyezcreateurs_import_soyezcreateurs_fusionner:>',
							'ecrase' => '<:soyezcreateursprive:soyezcreateurs_import_ecraser:>',
							'fusion_inv' => '<:soyezcreateursprive:soyezcreateurs_import_soyezcreateurs_fusionner_inv:>',						
							),
						'defaut' => 'fusion',
						)
					);
				}
			}
			elseif (strpos($url, '&cfg=soyezcreateurs_layout') and isset($flux['args']['config']['soyezcreateurs'])) {
				$s1[] = array(
					'saisie' => 'radio',
					'options' => array(
						'nom' => 'soyezcreateurs_import_choix_soyezcreateurs_layout',
						'label' => '<:soyezcreateursprive:ieconfig_soyezcreateurs_import_explication_soyezcreateurs_layout:>',
						'datas' => array(
							'rien' => '<:soyezcreateursprive:soyezcreateurs_import_soyezcreateurs_rien:>',
							'fusion' => '<:soyezcreateursprive:soyezcreateurs_import_soyezcreateurs_fusionner:>',
							'ecrase' => '<:soyezcreateursprive:soyezcreateurs_import_ecraser:>',
							'fusion_inv' => '<:soyezcreateursprive:soyezcreateurs_import_soyezcreateurs_fusionner_inv:>',						
							),
						'defaut' => 'fusion',
						)
					);
			}
			elseif (strpos($url, '&cfg=soyezcreateurs_couleurs') and isset($flux['args']['config']['soyezcreateurs'])) {
				$s1[] = array(
					'saisie' => 'radio',
					'options' => array(
						'nom' => 'soyezcreateurs_import_choix_soyezcreateurs_couleurs',
						'label' => '<:soyezcreateursprive:ieconfig_soyezcreateurs_import_explication_soyezcreateurs_couleurs:>',
						'datas' => array(
							'rien' => '<:soyezcreateursprive:soyezcreateurs_import_soyezcreateurs_rien:>',
							'fusion' => '<:soyezcreateursprive:soyezcreateurs_import_soyezcreateurs_fusionner:>',
							'ecrase' => '<:soyezcreateursprive:soyezcreateurs_import_ecraser:>',
							'fusion_inv' => '<:soyezcreateursprive:soyezcreateurs_import_soyezcreateurs_fusionner_inv:>',						
							),
						'defaut' => 'fusion',
						)
					);
			}
			elseif (strpos($url, '&cfg=soyezcreateurs_google') and isset($flux['args']['config']['soyezcreateurs'])) {
				$s1[] = array(
					'saisie' => 'radio',
					'options' => array(
						'nom' => 'soyezcreateurs_import_choix_soyezcreateurs_google',
						'label' => '<:soyezcreateursprive:ieconfig_soyezcreateurs_import_explication_soyezcreateurs_google:>',
						'datas' => array(
							'rien' => '<:soyezcreateursprive:soyezcreateurs_import_soyezcreateurs_rien:>',
							'fusion' => '<:soyezcreateursprive:soyezcreateurs_import_soyezcreateurs_fusionner:>',
							'ecrase' => '<:soyezcreateursprive:soyezcreateurs_import_ecraser:>',
							'fusion_inv' => '<:soyezcreateursprive:soyezcreateurs_import_soyezcreateurs_fusionner_inv:>',						
							),
						'defaut' => 'fusion',
						)
					);
			}
			elseif (strpos($url, '&cfg=soyezcreateurs') and isset($flux['args']['config']['soyezcreateurs'])) {
				$s1[] = array(
					'saisie' => 'radio',
					'options' => array(
						'nom' => 'soyezcreateurs_import_choix_soyezcreateurs',
						'label' => '<:soyezcreateursprive:ieconfig_soyezcreateurs_import_explication_soyezcreateurs:>',
						'datas' => array(
							'rien' => '<:soyezcreateursprive:soyezcreateurs_import_soyezcreateurs_rien:>',
							'fusion' => '<:soyezcreateursprive:soyezcreateurs_import_soyezcreateurs_fusionner:>',
							'ecrase' => '<:soyezcreateursprive:soyezcreateurs_import_ecraser:>',
							'fusion_inv' => '<:soyezcreateursprive:soyezcreateurs_import_soyezcreateurs_fusionner_inv:>',						
							),
						'defaut' => 'fusion',
						)
					);
			}
			else {
				$s1[] = array(
					'saisie' => 'explication',
					'options' => array(
						'nom' => 'soyezcreateurs_nofound_explication',
						'texte' => '<:soyezcreateursprive:ieconfig_soyezcreateurs_import_nofound_explication:>',
						)
					);
			}
						
		$saisies[0]['saisies'] = $s1;
		$flux['data'] = array_merge($flux['data'], $saisies);
	}
	
	// Import de la configuration
	if ($action == 'import' && isset($flux['args']['config']['soyezcreateurs'])) {
		if (!soyezcreateurs_importer_configuration(
		_request('soyezcreateurs_import_choix_soyezcreateurs'),
		_request('soyezcreateurs_import_choix_soyezcreateurs_layout'),
		_request('soyezcreateurs_import_choix_soyezcreateurs_couleurs'),
		_request('soyezcreateurs_import_choix_soyezcreateurs_google'),
		$flux['args']['config']['soyezcreateurs'])) 
		{
			$flux['data'] .= _T('soyezcreateursprive_fr:ieconfig_probleme_import_config').'<br />';
		}
	}

	return($flux);
}	
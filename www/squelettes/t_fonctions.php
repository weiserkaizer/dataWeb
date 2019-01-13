<?php
function hello($bloc) {
	include_spip('inc/noizetier_conteneur');
	include_spip('inc/config');
	include_spip('inc/ncore_type_noisette');
	include_spip('inc/ncore_noisette');
	include_spip('ncore/ncore');
	include_spip('ncore/noizetier');
	$conteneur = array();
	//Liste tous les noisettes de tous les conteneurs existant
	$liste_noisettes = noizetier_noisette_lister('noizetier', $conteneur, '', $cle = 'rang_noisette');
	if (!isset($liste_noisettes['contenu/corps'])) {//S'il n'y a pas de noisettes dans contenu/corps
		//Liste des noisettes à inserer
		$noisettes = array('sommaire_modeportailcognac_zoomsur', 'sommaire_modeportailcognac_cycloshow', 'sommaire_modeportailcognac_sc_edito', 'sommaire_modeportailcognac_quoideneuf', 'sommaire_modeportailcognac_dessousBreves', 'sommaire_modeportailcognac_goodies');
		$conteneur = noizetier_conteneur_decomposer('contenu/corps_sommaire_modecognac');

		//Insersion des noisettes
		foreach ($noisettes as $noisette) {
			$id_noisette = noisette_ajouter('noizetier', $noisette, $conteneur);
		}
	}
	var_dump($liste_noisettes);
}
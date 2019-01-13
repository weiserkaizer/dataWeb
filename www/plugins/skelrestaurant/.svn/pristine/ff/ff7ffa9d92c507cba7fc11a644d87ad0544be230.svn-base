<?php

function sc_listenoisettes($bloc) {
	include_spip('inc/config');
	include_spip('inc/ncore_type_noisette');
	include_spip('inc/ncore_noisette');
	include_spip('ncore/ncore');
	include_spip('ncore/noizetier');
	$conteneur = array();
	$liste_noisettes = noizetier_noisette_lister('noizetier', $conteneur, '', $cle = 'rang_noisette')[$bloc];
	$liste_noisettes_id = array();
	foreach ($liste_noisettes as $noisette) {
		$liste_noisettes_id[] = $noisette['type_noisette'];
	}
	return $liste_noisettes_id;
}

function sc_construire_noisette_menu($liste_noissetes_id) {
	include_spip('inc/noizetier_conteneur');
	include_spip('ncore/noizetier');
	include_spip('inc/config');
	include_spip('inc/ncore_type_noisette');
	include_spip('inc/ncore_noisette');
	include_spip('ncore/ncore');
	include_spip('ncore/noizetier');
	include_spip('inc/ncore_conteneur');
	conteneur_vider('noizetier', 'contenu/menu');
	$conteneur = array();
	$conteneur = noizetier_conteneur_decomposer('contenu/menu');
	foreach ($liste_noissetes_id as $noisette) {
		
		$id_noisette = noisette_ajouter('noizetier', $noisette, $conteneur);
		
	}
} 
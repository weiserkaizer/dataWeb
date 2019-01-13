<?php

if (!defined("_ECRIRE_INC_VERSION")) return;

// Permet de recadrer une image en la centrant sur son focus (plugin Centre Image)
function image_focus($img, $largeur, $hauteur, $position = 'center') {
	if (!$img) return('');
	
	if (strncmp($img, '<img', 4) !==0) {
		$img = "<img src='$img' />";
	}
	
	include_spip('filtres_images_lib_mini');
	include_spip('filtres/images_transforme');
	if ((largeur($img) <= $largeur) AND (hauteur($img) <= $hauteur)) {
		$img = filtrer('image_recadre', $img, "$largeur:$hauteur", '-', 'focus', 'transparent');
		$img = filtrer('image_graver', $img);
		$img = filtrer('image_recadre', $img, $largeur, $hauteur, $position, 'transparent');
	} else  {
		$img = filtrer('image_recadre', $img, "$largeur:$hauteur", '-', 'focus', 'transparent');
		$img = filtrer('image_graver', $img);
		$img = filtrer('image_reduire', $img, $largeur, $hauteur, $position, 'transparent');
		$img = filtrer('image_graver', $img);
		$img = filtrer('image_recadre', $img, $largeur, $hauteur, $position, 'transparent');
	}
	
	// Pas la peine, c'est fait automatiquement quand c'est un vrai filtre d'image comme ici
	// Par contre, il en faut pour les images intermédiaires !!!!
	//$img = filtrer('image_graver', $img);
	
	return $img;
}

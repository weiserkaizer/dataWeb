<?php
// Pour gérer la couleur transparente avec palette
// Repris de https://zone.spip.org/trac/spip-zone/changeset/74267 
function ajuster_couleur_input($couleur, $type='') {
	$transparent = ($type == 'background') ? '#ffffff' : '#000000';
	if (strtolower($couleur) == 'transparent')
		$couleur_calculee = $transparent;
	else
		$couleur_calculee = $couleur;

	return $couleur_calculee;
}

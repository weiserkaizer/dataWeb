<?php
if (!defined('_ECRIRE_INC_VERSION')) return;

function inc_titrer_document_dist($titre) {
	$titre = substr($titre, 0, strrpos($titre, '.')); // Enlever l'extension du nom du fichier
	$titre = preg_replace(',[[:space:]]+,u', ' ', $titre);
	$titre = safehtml($titre);
	return $titre;
}
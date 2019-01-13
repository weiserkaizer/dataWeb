<?php
//
// Configurateur de mots clefs et de rubriques bas'e sur
// Configurateur Squelette Epona - 2004 Nov 10 - Marc Lebas.
// Realisation : RealET : real3t@gmail.com
//
if (!defined('_ECRIRE_INC_VERSION')) return;
function refus($msg) {
  echo "<b><font color=red>$msg</font></b><br>";
  echo "Action non commencée; rectifier les conditions initiales avant de reprendre<br>";
}

function abandon($msg) {
  echo "<b><font color=red>$msg</font></b><br>";
  echo "Action abandonnée en cours d'éxécution<br>";
  echo "Rectifier le problème et rétablir des conditions initiales avant de reprendre<br>";
}

function avertir($msg) { echo "<font color=orange>$msg</font><br>"; }

//
// Fonctions pour mot-clés
//
function id_groupe($titre) {
	$result = spip_query("SELECT id_groupe FROM spip_groupes_mots WHERE titre='$titre'");
	if ($row = spip_fetch_array($result)) return $row['id_groupe'];
	return 0;
}

function id_mot($titre) {
	$result = spip_query("SELECT id_mot FROM spip_mots WHERE titre='$titre'");
	if ($row = spip_fetch_array($result)) return $row['id_mot'];
	return 0;
}

function id_rubrique($titre) {
	$result = spip_query("SELECT id_rubrique FROM spip_rubriques WHERE titre='$titre'");
	if ($row = spip_fetch_array($result)) return $row['id_rubrique'];
	return 0;
}

function create_groupe($groupe, $descriptif='', $texte='', $unseul='non', $obligatoire='non', $articles='oui', $breves='non', $rubriques='non', $syndic='non', $evenements='non', $minirezo='oui', $comite='oui', $forum='non') {
	$groupe = importer_charset($groupe);
	$id_groupe=id_groupe($groupe);
	$texte = importer_charset($texte);
	$descriptif = importer_charset($descriptif);
	if ($id_groupe == 0) {
		//Création groupe + mots clé
		$query = "INSERT INTO spip_groupes_mots SET titre='$groupe', descriptif='$descriptif', texte='$texte', unseul='$unseul', obligatoire='$obligatoire',
			articles='$articles', breves='$breves', rubriques='$rubriques', syndic='$syndic', evenements='$evenements',
			minirezo='$minirezo', comite='$comite', forum='$forum'";
		spip_query($query);
		$id_groupe = spip_insert_id();
	} else {
		// Mise à jour
		spip_query("UPDATE spip_groupes_mots SET descriptif='$descriptif', texte='$texte', unseul='$unseul', obligatoire='$obligatoire',
			articles='$articles', breves='$breves', rubriques='$rubriques', syndic='$syndic', evenements='$evenements',
			minirezo='$minirezo', comite='$comite', forum='$forum' WHERE id_groupe=$id_groupe");
	}
	$groupe = stripslashes($groupe);
	echo "<h2>Groupe: $groupe (<a href='?exec=mots_type&id_groupe=$id_groupe'>$id_groupe</a>)</h2>";
	return $id_groupe;
}

function rename_groupe($groupe, $newgroupe) {
	$groupe = importer_charset($groupe);
	$id_groupe=id_groupe($groupe);
	$newgroupe = importer_charset($newgroupe);
	if ($id_groupe != 0) {
		// Mise à jour
		spip_query("UPDATE spip_groupes_mots SET groupe='$newgroupe' WHERE id_groupe=$id_groupe");
	}
	$newgroupe = stripslashes($newgroupe);
	echo "<h2>Groupe: $newgroupe (<a href='?exec=mots_type&id_groupe=$id_groupe'>$id_groupe</a>)</h2>";
	return $id_groupe;
}

function create_mot($groupe, $mot, $descriptif='', $texte='') {
	$groupe = importer_charset($groupe);
	$id_groupe=id_groupe($groupe);
	$mot = importer_charset($mot);
	$texte = importer_charset($texte);
	$descriptif = importer_charset($descriptif);
	if ($id_groupe != 0) {
		$id_mot=id_mot($mot);
		if ($id_mot == 0 ) {
			spip_query("INSERT INTO spip_mots (type, titre, id_groupe, descriptif, texte) VALUES ('$groupe', '$mot', '$id_groupe', '$descriptif', '$texte')");
			$id_mot = spip_insert_id();
		} else {
			// Mise à jour
			spip_query("UPDATE spip_mots SET type='$groupe', id_groupe='$id_groupe', descriptif='$descriptif', texte='$texte' WHERE id_mot=$id_mot");
		}
	}
	$mot = stripslashes($mot);
	echo "<li>Mot: $mot (<a href='?exec=mots_edit&id_mot=$id_mot&redirect=%3Fexec%3Dmots_tous'>$id_mot</a>)</li>";
	return $id_mot;
}

function create_rubrique($titre, $id_parent='0', $descriptif='') {
	$id_rubrique = id_rubrique($titre);
	if ($id_rubrique==0) {
		$titre = importer_charset($titre);
		$descriptif = importer_charset($descriptif);
		$query="INSERT INTO spip_rubriques (titre, id_parent, descriptif) VALUES ('$titre', '$id_parent', '$descriptif')";
		spip_query($query);
		$id_rubrique = spip_insert_id();
	}
	$titre = stripslashes($titre);
	echo "<li>Rubrique: $titre (<a href='?exec=naviguer&id_rubrique=$id_rubrique'>$id_rubrique</a>)</li>";
	return $id_rubrique;
}

function create_rubrique_mot($rubrique, $mot) {
	$id_rubrique = id_rubrique($rubrique);
	$id_mot=id_mot($mot);
	if ($id_rubrique!=0 && $id_mot!=0) {
		$query="SELECT count(*) as nb_rub_mot FROM spip_mots_rubriques WHERE id_mot='$id_mot' AND id_rubrique='$id_rubrique'";
		$result=spip_query($query);
		if ($row = spip_fetch_array($result)) {
			if ($row['nb_rub_mot']==0) {
				$query="INSERT INTO spip_mots_rubriques (id_mot, id_rubrique) VALUES ('$id_mot', '$id_rubrique')";
				spip_query($query);
			}
		}
	}
	echo "<li>Liaison entre Rubrique (<a href='?exec=naviguer&id_rubrique=$id_rubrique'>$id_rubrique</a>) et Mot (<a href='?exec=mots_edit&id_mot=$id_mot&redirect=%3Fexec%3Dmots_tous'>$id_mot</a>)</li>";
	return TRUE;
}

function config_site() {
	// Autorisations dates antérieures et gestion avancée des mots clé
	spip_query("INSERT INTO spip_evenements (id_article,titre,date_debut,date_fin,horaire) SELECT id_article,titre,date_redac, date_redac as date_fin, 'non' as horaire FROM spip_articles WHERE date_redac!='0000-00-00 00:00:00'");
	spip_query("UPDATE spip_articles SET date_redac='0000-00-00 00:00:00' WHERE date_redac!='0000-00-00 00:00:00'");
	spip_query("INSERT INTO spip_mots_evenements (id_mot,id_evenement) SELECT MA.id_mot, EV.id_evenement FROM spip_mots_articles AS MA, spip_evenements AS EV WHERE EV.id_article=MA.id_article");
	spip_query("DELETE FROM spip_mots_articles AS MA USING  spip_mots_articles AS MA, spip_evenements AS EV WHERE EV.id_article=MA.id_article");

	rename_groupe("", "Thèmes de l\'Agenda");
}

function exec_agenda_upgrade() {
	include_spip("inc/presentation");
	include_spip("inc/lang");
	include_spip("inc/charsets");

	install_debut_html("Mise &agrave; jour de l'Agenda du site");
	config_site();

	echo "<h1>Migration termin&eacute;</h1><p>Vous pouvez revenir &agrave; l'<a href='./'>administration du site</a></p>";
	install_fin_html();
}

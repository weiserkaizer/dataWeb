<?php

/*
 * Squelette : ../plugins/auto/soyezcreateurs/v4.3.16/prive/exec/sc_import.html
 * Date :      Mon, 13 Aug 2018 16:34:12 GMT
 * Compile :   Sun, 06 Jan 2019 23:35:28 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/soyezcreateurs/v4.3.16/prive/exec/sc_import.html
// Temps de compilation total: 0.387 ms
//

function html_153d078b56edfc779613452d8bf3e64b($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<h1>' .
_T('soyezcreateursprive:ieconfig_import_spe') .
'</h1>

<ul >
	' .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('webmestre')?" ":"")) ?' ' :''))))!=='' ?
		('
	' . $t1 . '<li><a href="./?exec=sc_import&nom=C:/wamp64/www/plugins/auto/soyezcreateurs/v4.3.16/cfg_config/soyezcreateurs_couleurs_seul_bleu_blanc_rouge.yaml&option=fusion">Activer mode Cognac de SoyezCréateurs</a> (attention, ne pas le faire maintenant, ça n\'est pas terminé de coder)</li>
	') :
		'') .
'



<?php
	$nom = _request(\'nom\');
	$option = _request(\'option\');
	if (isset($nom) and isset($option)) {
		include_spip(\'soyezcreateurs_fonctions_ieconfig\');
		if(!preg_match(\'[.a-zA-Z0-9_/]\', $nom)) {
			$ok = sc_ieconfig_importer_fichier($nom,$option);
		}
	}
?>
</ul>');

	return analyse_resultat_skel('html_153d078b56edfc779613452d8bf3e64b', $Cache, $page, '../plugins/auto/soyezcreateurs/v4.3.16/prive/exec/sc_import.html');
}
?>
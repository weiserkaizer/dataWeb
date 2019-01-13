<?php
/**
 * Plugin mailsubscribers
 * (c) 2012 Cédric Morin
 * Licence GNU/GPL v3
 */

if (!defined('_ECRIRE_INC_VERSION')) return;

// Gérer un appel par texte alors qu'on a désactivé le plugin mailsubscribers
// Exemple : <formulaire_inscription_newsletter|liste=nl,test>
if(defined('_DIR_PLUGIN_MAILSUBSCRIBERS')) {
	$GLOBALS['formulaires_no_spam'][] = 'newsletter_subscribe';
	include_spip('inc/mailsubscribers');


	/**
	 * Declarer les champs postes et y integrer les valeurs par defaut
	 */
	function formulaires_newsletter_subscribe_charger_dist($listes=''){
		$valeurs = array(
			'session_email' => ''
		);

		$valeurs['listes'] = explode(',',$listes);
		$valeurs['_listes_dispo'] = mailsubscribers_listes();

		if (isset($GLOBALS['visiteur_session']['email']))
			$valeurs['session_email'] = $GLOBALS['visiteur_session']['email'];
		elseif (isset($GLOBALS['visiteur_session']['session_email']))
			$valeurs['session_email'] = $GLOBALS['visiteur_session']['session_email'];
		return $valeurs;
	}

	/**
	 * Verifier les champs postes et signaler d'eventuelles erreurs
	 */
	function formulaires_newsletter_subscribe_verifier_dist(){
		$listes = _request('listes');
		if ($listes AND is_array($listes))
			set_request('listes',implode(',',$listes));
		if (!$listes)
			$listes = array();

		$erreurs = array();
		if (!$email = _request('session_email')){
			$erreurs['session_email'] = _T('info_obligatoire');
		}
		else {
			// verifier que l'email est valide
			if (!email_valide($email))
				$erreurs['session_email'] = _T('info_email_invalide');
		}
		if (count($erreurs))
			set_request('listes',$listes);
		return $erreurs;
	}

	/**
	 * Traiter les champs postes
	 */
	function formulaires_newsletter_subscribe_traiter_dist(){

		// langue par defaut lors de l'inscription : la langue courante dans la page
		$options = array('lang'=>$GLOBALS['spip_lang']);
		$email = _request('session_email');
		$listes = _request('listes');
		if ($listes AND is_string($listes))
			$listes = explode(',',$listes);
		if ($listes AND is_array($listes) AND count($listes))
			$options['listes'] = $listes;

		$res = array(
			'editable'=>true
		);

		$newsletter_subscribe = charger_fonction("subscribe","newsletter");
		if ($newsletter_subscribe($email,$options)){
			if (lire_config('mailsubscribers/double_optin',0))
				$res['message_ok'] = _T('newsletter:subscribe_message_ok_confirm',array('email'=>"<b>$email</b>"));
			else
				$res['message_ok'] = _T('newsletter:subscribe_message_ok',array('email'=>"<b>$email</b>"));
		}
		else
			$res['message_erreur'] = _T('mailsubscriber:erreur_technique_subscribe');
		set_request('email');
		return $res;
	}
}
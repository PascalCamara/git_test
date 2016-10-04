<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function mail_confirmation_add_register($user) {

	require_once('lib/envoimail.php');

	$lien = URL_SITE. "?module=user&action=accept_register&key=".$user['user_key'];

	$nom_expediteur = PROJECT_NAME;
	$email_expediteur = PROJECT_EMAIL;
	$email_reply = PROJECT_EMAIL;
	$destinataire = $user['user_email'];
	$sujet = "Confirmation d'inscription ".$nom_expediteur;
	$message_texte = $sujet;
	$message_html = "<!DOCTYPE html>
	<html>
	<head>
		<title>".$sujet."</title>
	</head>
	<body>
		<h1>".$user['user_firstname']."</h1>
		<h2>Bienvenu sur le ".$nom_expediteur." </h2>

		<p>lien de confirmation :</p>
		<a href='".$lien."'>Confirmer mon inscription</a>
	</body>
	</html>";
	$fichiers = false;

	return envoiMail($nom_expediteur, $email_expediteur, $email_reply, $message_texte, $destinataire, $sujet, $message_html, $fichiers);
}
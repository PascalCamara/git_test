<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
if ( isset($_SESSION['user']) )
	header('Location: ?module=blog&action=home');
// POST
if (isset($_POST['user_password']) && $_POST['user_password'] == $_POST['user_password_confirm']) {
	$_POST['user_key'] =  md5( uniqid( mt_rand() ) );
	// models & mail
	require_once 'models/user/add_register.php';
	require_once 'mails/mail_confirmation_add_register.php';
	if ( add_register($_POST) && mail_confirmation_add_register($_POST) ) 
		header("Location:?module=blog&action=home&success=add_register_ok&info=add_register_info");
	else
		header("Location:?module=blog&action=home&warning=add_register_nok");
} elseif (isset($_POST['user_password']) && $_POST['user_password'] != $_POST['user_password_confirm']) {
	header("Location:?module=user&action=register&danger=register");
} 
include_once 'views/user/register.php';
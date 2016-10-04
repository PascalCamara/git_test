<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
if ( isset($_SESSION['user']) )
	header('Location: ?module=blog&action=home');

//models
require_once 'models/user/select_user.php';
require_once 'mails/mail_confirmation_add_register.php';

if ( isset( $_POST['user_login'] ) )  {
	$user = select_user($_POST);
	if ($user) {
		//compte innactif 
		if ($user['user_key'] != '') {
			if ( mail_confirmation_add_register($user) )
			 	header('Location: ?module=user&action=login&info=mail_confirm_ok');
		} else {
			//cookie
			if (isset($_POST['remember']) && $_POST['remember'] == 'on' ) 
				if ( !setcookie ("remember-me", serialize($_POST), time()+5*60) ) 
					die('erreur cookie');
			$_SESSION['user'] = $user;
			header('Location: ?module=blog&action=home&success=login_ok');
		}
	} else {
		header('Location: ?module=user&action=login&danger=login_nok');
	}
} else {
	include_once 'views/user/login.php';
}
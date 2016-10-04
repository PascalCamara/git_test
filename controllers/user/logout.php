<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
require 'helpers/helper_user.php';
session_unset();
if (isset($_COOKIE['remember-me']) && !setcookie('remember-me' , '', time()-60) ) {
	die('impossible de détruire le cookie');
}
header('Location: ?module=blog&action=home&success=logout_ok');
exit();
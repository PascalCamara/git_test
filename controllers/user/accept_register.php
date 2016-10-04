<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

require_once 'models/user/accept_register.php';

if ( isset($_GET['key']) && accept_register($_GET['key']) )
	header("Location:?module=user&action=login&success=accept_register_ok");
else
	include_once('vue/probleme.php');

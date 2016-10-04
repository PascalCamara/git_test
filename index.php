<?php
define("_BASE_URL", "");

// Paramétrage des erreurs en mode dev
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Paramétrage des erreurs en mode prod
//ini_set('display_errors', 0);
//error_reporting(0);

include_once('config/config.inc.php');
include_once('config/messages.inc.php');
include_once('core/core.php');

if(!secu_session_start(SESSION_NAME)) {
	die("Session corrompue !");
}

// Etablissement de la connexion à la BD
include_once('models/mysql.inc.php');

// session user cookie 
if (!isset($_SESSION["user"]) && isset($_COOKIE["remember-me"])) {
	include_once('models/user/select_user.php');
    $_SESSION['user'] = select_user(unserialize($_COOKIE['remember-me']));
}

// Routage en fonction de l'URL
if(!isset($_GET['module'])) {
	$module = DEFAULT_MODULE;
} else {
	$module = $_GET['module'];
}
if(!isset($_GET['action'])) {
	$action = DEFAULT_ACTION;
} else {
	$action = $_GET['action'];
}

// Enregistrement du module/action dans la session
$_SESSION["module"]= $module;
$_SESSION["action"]= $action;

// Construction du chemin du controllers secondaire
$url = 'controllers/' . $module. '/' .$action . '.php';

// Détection page 404
if(!file_exists($url)) {
    $url = 'controllers/static/404.php';
}

// Chargement du controllers demandé
if(file_exists($url)) {
	include_once($url);
} else {
	include_once('views/probleme.php');
}

<?php
define("_BASE_URL", "");
include_once('config/config.inc.php');
session_name(SESSION_NAME);
session_start();
var_dump($_SESSION);
var_dump($_COOKIE);
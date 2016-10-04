<?php
try
	{
		$dns = "mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME;
		$utilisateur = DB_LOGIN;
		$motDePasse = DB_PASSWORD;
		
		$option = array(
						PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
						PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		
		$connexion = new PDO ( $dns, $utilisateur, $motDePasse, $option );
	}
	catch(Exception $e)
	{
		die("Problème MySQL !");
	}
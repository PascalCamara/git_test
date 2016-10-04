<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

function accept_register($user_key) {
	global $connexion;
	try {
		$query = "update " . DB_PREFIX . "users
				set user_key=''
				where user_key = :user_key";
		$select = $connexion->prepare($query);
		$select->bindParam(':user_key', $user_key, PDO::PARAM_STR);
		$select->execute();
		$select->closeCursor();
		return true;
	} catch (Exception $e) {
		$select->closeCursor();
		return false;
	}
}
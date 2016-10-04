<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");

function add_register($user){
	global $connexion;
	$user['user_password'] = md5($user["user_password"]);
	try {
		$query = "INSERT INTO " . DB_PREFIX . "users
			(user_lastname, user_firstname, user_login, user_password, user_email, user_key)
			VALUES
			(:user_lastname, :user_firstname, :user_login, :user_password, :user_email, :user_key)";

		$select = $connexion->prepare($query);
		$select->bindValue(':user_password', $user['user_password'] , PDO::PARAM_STR);
		$select->bindValue(':user_lastname', $user['user_lastname'] , PDO::PARAM_STR);
		$select->bindValue(':user_firstname', $user['user_firstname'] , PDO::PARAM_STR);
		$select->bindValue(':user_login', $user['user_login'] , PDO::PARAM_STR);
		$select->bindValue(':user_email',  $user['user_email'] , PDO::PARAM_STR);
		$select->bindValue(':user_key',  $user['user_key'] , PDO::PARAM_STR);

		$retour = $select->execute();
		return true;
	} catch (Exception $e) {
		return false;
	}
}
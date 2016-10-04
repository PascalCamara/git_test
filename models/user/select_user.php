<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");

function select_user($user){
	global $connexion;
	$user['user_password'] = md5($user["user_password"]);
	try {
		$query = "SELECT * FROM ".DB_PREFIX."users
						WHERE user_login = :user_login
						AND user_password = :user_password";
		$select = $connexion->prepare($query);
		$select->bindValue(':user_password', $user['user_password'] , PDO::PARAM_STR);
		$select->bindValue(':user_login', $user['user_login'] , PDO::PARAM_STR);
		$select->execute();
		$user = $select->fetch(PDO::FETCH_ASSOC);
		return $user;
	} catch (Exception $e) {
		die($e->getMessage());
	}
}
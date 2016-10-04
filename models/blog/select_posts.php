<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

function select_posts(){
	global $connexion;

	try {
		$query = "SELECT * FROM ".DB_PREFIX."users INNER JOIN ".DB_PREFIX."posts on ".DB_PREFIX."users.user_id = ".DB_PREFIX."posts.user_id";
		$select = $connexion->prepare($query);
		$select->execute();
		$posts = $select->fetch(PDO::FETCH_ASSOC);
		return $posts;
	} catch (Exception $e) {
		die($e->getMessage());
	}
}

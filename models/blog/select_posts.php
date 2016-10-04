<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

function select_posts($posts){
	global $connexion;

	try {
		$query = "SELECT * FROM ".DB_PREFIX."posts INNER JOIN ".DB_PREFIX."users
    in ".DB_PREFIX."users.id = ".DB_PREFIX."posts.id";
		$select = $connexion->prepare($query);
		$select->execute();
		$posts = $select->fetch(PDO::FETCH_ASSOC);
		return $posts;
	} catch (Exception $e) {
		die($e->getMessage());
	}
}

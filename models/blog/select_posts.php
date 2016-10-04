<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

function select_posts($posts){
	global $connexion;

	try {
		$query = "SELECT * FROM ".DB_PREFIX."posts as posts
    INNER JOINT ".DB_PREFIX."users as users
    in users.id = posts.id";
		$select = $connexion->prepare($query);
		$select->execute();
		$posts = $select->fetch(PDO::FETCH_ASSOC);
		return $posts;
	} catch (Exception $e) {
		die($e->getMessage());
	}
}

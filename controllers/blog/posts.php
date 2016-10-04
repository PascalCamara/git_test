<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

require_once 'models/blog/select_posts.php';

$posts = select_posts();

include_once 'views/blog/posts.php';

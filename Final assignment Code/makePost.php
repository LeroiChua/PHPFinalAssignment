<?php
session_save_path("./");
session_start();
require_once("MySQLDB.php");
require_once('db.php');

require_once("post.php");

$userName = $_SESSION['userName'];

if (isset($_POST['postContent']) && isset($_POST['postTitle']))
{
	$postTitle = $_POST['postTitle'];
    $postContent = $_POST['postContent'];
	$aPost = new Post($db, $userName, $postTitle, $postContent);
	$aPost->createPost($db);
	// var_dump($aPost);
	header('Location: BaghChal_feature.php');
}  

?>
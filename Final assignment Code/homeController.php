<?php
session_save_path("./");
session_start();
require_once("MySQLDB.php");
require_once("db.php");
require_once("postwall.php");
// require_once("commentSection.php");

$userName = $_SESSION['userName'];
$postwall = new PostWall($db, $userName);
// $commentBox = $commentSection;
// $postwallContent = $postwall->displayAllPosts($db);




?>
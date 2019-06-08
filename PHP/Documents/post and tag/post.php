<?php
/*
post.php gathers the inputs from the postform.php form.
It then adds the post to the post table.
*/
session_save_path(./);
session_start();

// check to see that user is logged in
if(isset($_SESSION['user']))
{
  //get the variables from the session. Sanitize the title and post.
  $userid = $_SESSION['user'];
  $theTitle = filter_var($_SESSION['theTitle'], FILTER_SANITIZE_SPECIAL_CHARS);
  $thePost = filter_var($_SESSION['thePost'], FILTER_SANITIZE_SPECIAL_CHARS);

  $newPost = new CreatePost($userid, $theTitle, $theContent);
  $newPost->addPostToDB();

  //send back to post form
  header('Location:postform.php')

}
else
{
  //send to login page if not logged in. Uses query params to send a refereal back to this page.
  header("Location:login.php?location=" . urlencode($_SERVER['REQUEST_URI']));
}
?>

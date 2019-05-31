<?php

session_save_path(./);
session_start();

// check to see that user is logged in
if(isset($_SESSION['user']))
{
  //get the variables from the session. Sanitize the title and post.
  $userid = $_SESSION['user'];
  $theTitle = filter_var($_SESSION['theTitle'], FILTER_SANITIZE_SPECIAL_CHARS);
  $thePost = filter_var()$_SESSION['thePost'], FILTER_SANITIZE_SPECIAL_CHARS);
  if(isset($_SESSION['taggedUser']))
  {
    $taggedUserId = $_SESSION['taggedUser'];
    //prepend tagged user name to the post.
    $taggedUserName = getUserName($db, $taggedUserId);
    $thePost = addTagtoPost($taggedUserName, $thePost);
  }

  //make the post. The make post function should return the post id for use in tag user.
  $postId = makePost($db, $userid, $theTitle, $thePost);
  // add tag to database.
  tagUser($db, $taggedUser, $postId);
  //send back to post form 
  header('Location:postform.php')

}
else
{
  //send to login page if not logged in.
  header('Location:login.php');
}
?>

<?php

session_save_path(./);
session_start();



function isValidForm ( $theWords  )
{
    $result = true;
    if ( $theWords == ""  )
    {
       $result = false;
    }
return $result;
}


if( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
  //check to see if user is logged in
  if(isset($_SESSION['user']))
  {
    $theTitle = $_POST["theTitle"];
    $thePost = $_POST["thePost"];
    // check to see that there is a title and some post text.
    if(isValidForm($theTitle) and isValidForm($thePost))
    {
      // check for a tagged user
      if(isset($_POST['taggedUser']))
      {
        $taggedUser = $_POST['taggedUser'];
        $_SESSION['taggedUser'] = $taggedUser;
      }
      // check for $hashTag
      if(isset($_POST['hashTag']))
      {
          $hashTag = $_POST['hashTag'];
          $_SESSION['hashTag'] = $hashTag;
      }
      $_SESSION['theTitle'] = $theTitle;
      $_SESSION['thePost'] = $thePost;

      header('Location:post.php');
    }

  }
  else
  {
    // If the user is not set send to the login page
    header('Location:login.php');
  }

}

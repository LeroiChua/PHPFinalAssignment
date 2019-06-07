<?php
/*
Functions that are used in post.php
*/
function getUserName($db, $UserId)
{
    // get the full username associated with a user id.
    $sql = "SELECT firstName, LastName FROM users WHERE UID = $UserId";
    $result = $db->query($sql);
    $UserName = $result['firstName']." ".$result['lastName'];
    return $UserName;
}

function addUserTagToPost($taggedUserName, $thePost)
{
    // prepends the username (with @ prefix) to the post.
    $thePost = "@".$taggedUserName." ".$thePost;
    return $thePost;
}

function addHashTagToPost($hashTag, $thePost)
{
    //append the hash tag (with # prefix) to the post.
    $thePost = $thePost." #".$hashTag;
    return $thePost;
}

function makePost($db, $userid, $theTitle, $thePost)
{
    // add the post to the post mysql_list_table
    $date = date("Y-m-d");
    $sql = "INSERT INTO post (UID, title, postTime, postContent) Values ($userid, $theTitle, $date, $thePost)";
    $result = $db->query($sql);
    return $result;
}

function tagUser($db, $userid, $postid)
{
    $sql = "INSERT INTO tag (UID, postID) VALUES ($userid, $postid)";
    $result = $db->query($sql);
    return $result;
}

?>

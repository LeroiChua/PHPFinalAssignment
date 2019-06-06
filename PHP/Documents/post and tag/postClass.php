<?php
Class Post
{
    private $userId;
    private $theTitle;
    private $thePost;
    private $taggedUser;
    private $hashTag;
    private $postId;
    public function __construct($db, $id, $title, $content, $userTag="", $postTag="")
    {
        $this->userId = $id;
        $this->theTitle = $title;
        $this->thePost = $content;
        $this->taggedUser = $userTag;
        $this->hashTag = $postTag;
        if($taggedUser != "")
        {
            $this->thePost = $this->addUserTagToPost($this->taggedUser, $this->$thePost);
        }
        return $this->makePost($db);
    }

    private function addUserTagToPost($taggedUserName, $thePost)
    {
        // prepends the username (with @ prefix) to the post.
        $thePost = "@".$taggedUserName." ".$thePost;
        return $thePost;
    }

    private function addHashTagToPost($hashTag, $thePost)
    {
        //append the hash tag (with # prefix) to the post.
        $thePost = $thePost." #".$hashTag;
        return $thePost;
    }

    private function makePost($db)
    {
        // add the post to the post mysql_list_table
        $date = date("Y-m-d");
        $sql = "INSERT INTO post (UID, title, postTime, postContent) Values ($this->userId, $this->theTitle, $date, $this->thePost)";
        $result = $db->query($sql);
        return $result;
    }

}
?>

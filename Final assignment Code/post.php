<?php

Class Post
{
	private $postID;
    private $userName;
    private $thePost;    
    private $title;
    private $date;
    
    public function __construct($db, $userName, $title, $content)
    {
        $this->postID = null;
        $this->userName = $userName;
        $this->title = $title;
        $this->thePost = $content;
    }

    public function createPost($db)
    {
        // add the post to the post mysql_list_table
        $sql = "INSERT INTO post Values ('$this->postID', '$this->userName', '$this->title','$this->thePost', now())";
        $result = $db->query($sql);
        
        return $result;
    }
    
    public function addComment($db, $postID, $userName)
    {
        // for the button
    }
    
    public function getPostID()
    {
        return $this->postID;
    }
    
    public function getUserName()
    {
        return $this->userName;
    }
    
    public function getContent()
    {
        return $this->thePost;
    }
    
    public function getTitle()
    {
        return $this->title;
    }
    
    public function getTheDate()
    {
        return $this->date;
    }
    
    public function setID($ID)
    {
        $this->postID = $ID;
    }
    
    public function setDate($date)
    {
        $this->date = $date;
    }
    
    // public function deletePost($db)
    // {
        // $sql = "delete from $post where postID = $this->postID";
        // $result = $db->query($sql);
        // return $result;
    // }

}
?>

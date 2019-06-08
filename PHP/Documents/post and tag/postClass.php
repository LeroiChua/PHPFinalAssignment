<?php
Class Post
{
    protected $userId;
    protected $theTitle;
    protected $thePost;
    protected $postId; // used if this is a comment on a post. is the id of the post it is reffering to.
    protected $date;
    public function __construct($id, $title, $content, $postId = null)
    {
        $this->userId = $id;
        $this->theTitle = $title;
        $this->thePost = $content;
        $this->date = date("Y-m-d");
        $this->postId = $postId;
    }

}



Class CreatePost extends Post
{
    public function addPostToDB()
    {
        $sql = "INSERT INTO post (UID, title, postTime, postContent)
        Values ($this->userid, $this->theTitle, $this->date, $this->thePost)";
        $result = $db->insert($sql);// assuming there is an insert method.
        return $result;
    }
}
?>

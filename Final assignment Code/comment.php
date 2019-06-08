<?php

class Comment
{
   protected $commentID;
   protected $parentID;
   protected $userName;
   protected $commentContent;
   protected $date;
   
   public function __construct($db, $parentID, $userName, $commentContent)
   {
       $this->commentID = null;
       $this->parentID = $parentID;
       $this->userName = $userName;
       $this->commentContent = $commentContent;
   }
   
   public function createComment($db)
   {
       $sql = "INSERT into comment values('$this->commentID', '$this->parentID', 'this->$userName', $this->commentContent, now())";
   }
   
   
}


?>
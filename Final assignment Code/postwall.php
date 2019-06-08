<?php
require_once("post.php");

// require_once("commentSection.php");

// echo $commentSection;
class PostWall
{
    protected $userName;
    protected $allMyPosts = array();  
    protected $db;
    
    public function __construct($db, $userName)
    {
        $this->userName = $userName;
        $this->db = $db;
    }
    
    public function displayAllPosts()
    {
        $this->retrieveAllPosts();
        return $this->allMyPosts; 
        // $html = "";
        // foreach ($this->allMyPosts as $post)
        // {        
            // $html .= "  
            // <div style='border: thin solid black'>
                // <h1>POST TITLE: " . $post->getTitle() . "</h1>
                // <br/>
                // <p>POST CONTENT:" . $post->getContent() ."</p>
                // <p>POSTID: " . $post->getPostID() .  "USERNAME: " . $post->getUserName()   . "Date: " . $post->getTheDate() . "</p>
            // </div>	
            // <div>
                // <button data-toggle='collapse' data-target='#commentSection".$post->getPostID()."'>Add Comment</button>

                // <div id='commentSection".$post->getPostID()."' class='collapse'>
                    // <form class='uk-form uk-form-stacked' action='makeComment.php' method='POST'>
                        // <div class='uk-form-row'>                      
                            // <div class='uk-form-controls'>
                            // <!-- PHP commentContent -->
                                // <textarea name='commentContent' class='uk-width-1-1' id='form-h-t' placeholder='make a comment' cols='100'
                                    // rows='9'></textarea>
                            // </div>
                        // </div>
                        // <div class='uk-form-row'>
                            // <div class='uk-form-controls'>
                                // <button type='submit' class='uk-button uk-button-primary'>Comment</button>
                            // </div>
                        // </div>
                    // </form> 
                // </div>
                // <br/>
                
            // </div>
            // ";  
        // }
        // return $html;
    }
    
    public function displayPostsByOldest($db)
    {
        // Do sql query to arrange post by date;
    }
    
    public function displayPostsbyRecent($db)
    {
        // Do SQL query to arrange by most recent;
    }
    
    
    
    
    private function retrieveAllPosts()
    {
        $sql = "select * from post";
        $post = $this->db->query($sql);
        $result = "";
        while ($aRow = $post->fetch())
        {
            $postID = $aRow['postID'];
            $postTitle = $aRow['postTitle'];
            $userName = $aRow['userName'];
            $content = $aRow['content'];
            $date = $aRow['date'];
            $aPost = new Post($this->db, $userName, $postTitle, $content);
            $aPost->setID($postID);
            $aPost->setDate($date);
            
            $this->allMyPosts[] = $aPost;
            
        }
    }
    
    
}


?>
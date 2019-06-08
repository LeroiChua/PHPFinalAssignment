<?php
// require_once("MySQLDB.php");
// require_once("db.php");
require_once("homeController.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Assignment 1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/uikit.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="js/uikit.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/uikit-icons.min.js"></script>
</head>

<body>
    <div class="uk-container uk-container-small">
        <nav class="uk-navbar-container" uk-navbar>
            <div class="uk-navbar-left">
                <ul class="uk-navbar-nav">
                    <li class="uk-active"><a href="home.html">Home</a></li>
					<h1><?php
						echo $userName; 
					?></h1>
                </ul>
            </div>
        </nav>
        <div class="uk-width-medium-2-3">
            <h2 class="uk-panel-title">Bagchal Post</h2>
            <div class="uk-panel uk-panel-header">
                <form class='uk-form uk-form-stacked' action="makePost.php" method="POST">
                    <div class="uk-form-row">
                        <label class='uk-form-label'>Your post</label>
                        <div class="uk-form-controls">
                            <!-- PHP Posttitle -->
                            <input name="postTitle" class="uk-width-1-1" id="form-h-t" placeholder="Title of Post" cols="100"
                                rows="9"></input>
                        </div>                        
                        <div class="uk-form-controls">
                        <!-- PHP PostContent -->
                            <textarea name="postContent" class="uk-width-1-1" id="form-h-t" placeholder="What's on your mind?" cols="100"
                                rows="9"></textarea>
                        </div>
                    </div>
                    <div class="uk-form-row">
                        <div class="uk-form-controls">
                            <button type="submit" class="uk-button uk-button-primary">Post</button>
                        </div>
                    </div>
                </form>
                <!-- PHP POST WALL -->
				<?php foreach($postwall->displayAllPosts() as $aPost): ?>
                    <div style='border: thin solid black'>
                        <h1><?php echo $aPost->getTitle(); ?></h1>
                        <br/>
                        <p><?php echo $aPost->getContent();?></p>
                        <p><?php echo $aPost->getPostID(); ?></p>
                        <p><?php echo $aPost->getUserName();?></p> 
                        <p><?php echo $aPost->getTheDate();?></p>
                    </div>
                    <!-- PHP AddComment Section -->
                    <button data-toggle="collapse" data-target="#commentSection">Add Comment</button>
                    <div id="commentSection" class="collapse">
                        <form class="uk-form uk-form-stacked" action="makeComment.php" method="POST">
                            <div class="uk-form-row">                      
                                <div class="uk-form-controls">
                                <!-- PHP commentContent -->
                                    <textarea name="commentContent" class="uk-width-1-1" id="form-h-t" placeholder="make a comment" cols="100"
                                        rows="9"></textarea>
                                </div>
                            </div>
                            <div class="uk-form-row">
                                <div class="uk-form-controls">
                                    <button type="submit" class="uk-button uk-button-primary">Comment</button>
                                </div>
                            </div>
                        </form> 
                    </div>  
              
                <?php endforeach;?>    
            </div>			
        </div>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Bagh Chal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
</head>

<body>
    <div class="uk-container uk-container-small">
        <nav class="uk-navbar-container" uk-navbar>
            <div class="uk-navbar-left">
                <ul class="uk-navbar-nav">
                    <li class="uk-active"><a href="home.html">Home</a></li>
                </ul>
            </div>
        </nav>
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid
            style="padding-top:13px;">
            <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                <img class="uk-transition-scale-up uk-transition-opaque" src="images/themelogo.jpg" alt="">
            </div>
            <div class="uk-card-body">
                <h4 class="uk-heading-bullet"><b>Welcome to Bagh Chal Community</b></h4>
                <hr class="uk-divider-icon">
				
				
                <!-- php coding below-->
                <form action="entryController.php" method="POST">
                    <!-- call the entrycontroller -->

                    <div class="uk-margin">
                        <div class="uk-inline uk-width-1-1">
                            <span class="uk-form-icon" uk-icon="icon: mail"></span>
                            <input name="userEmail" class="uk-input uk-form-large" type="text">
                            <!-- userEmail for php-->
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-inline uk-width-1-1">
                            <span class="uk-form-icon" uk-icon="icon: lock"></span>
                            <input name="userPassword" class="uk-input uk-form-large" type="password">
                            <!-- userPassword for php-->
                        </div>
                    </div>
                    <!-- ink to another page -->
                    <div class="uk-margin">
                        <button type="submit" class="uk-width-1-1 uk-button uk-button-primary uk-button-large">
						Login
						</button>
                    </div>

                </form>
                <!-- php coding end-->
            </div>
        </div>
    </div>
</body>

</html>

<?php

session_start();

if (!isset($_SESSION["cUser"])) {
    header('Location: login.php');
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>About Us - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">Web Security</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="Blog.php">Blog</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-lowercase" href="https://github.com/RahalAmrith/CSRF-Protection-Synchronizer-Token-Pattern-">github</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="notes.php">Notes</a></li>
                    
                    <?php
                        if(isset($_SESSION["cUser"])){
                            echo '<li class="nav-item" role="presentation"><a class="nav-link" href="logOut.php">Log Out</a></li>';
                        }
                        else{
                            echo '<li class="nav-item" role="presentation"><a class="nav-link" href="Login.php">Log in</a></li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page">
        <section class="clean-block about-us" style="padding-bottom: 0px;">
            <section class="clean-block clean-form dark" style="height: 606px;padding-bottom: 0px;">
                <div class="container">
                    <div class="block-heading" style="padding-top: 40px;margin-bottom: 18px;">
                        <h2 class="text-info">Create Note</h2>
                        <p>create a note for future usees</p>
                    </div>
                    <form>
                        <div class="form-group"><label for="name">Title</label><input class="form-control item" type="text" id="name"></div>
                        <div class="form-group"><label>Content</label><textarea class="form-control" style="height: 193px;"></textarea></div><button class="btn btn-primary btn-block" type="button">Save</button></form>
                </div>
            </section>
        </section>
    </main>
    <div class="article-list">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="padding-top: 60px;margin-bottom: 28px;">Recent Notes</h2>
            </div>
            <div class="row articles">
                <div class="col-sm-6 col-md-4 col-xl-6 item" style="padding-top: 3px;padding-bottom: 20px;">
                    <div style="padding: 10px;box-shadow: 3px 3px 10px #d1d1d1;padding-top: 9px;background-color: rgba(217,217,217,0.3);border-radius: 5px;">
                        <h1 class="name" style="font-size: 25px;filter: saturate(141%);margin-bottom: 25px;">Note title</h1>
                        <div class="card">
                            <div class="card-body" style="height: 350px;background-color: rgba(255,255,255,0.27);background-image: url(&quot;assets/img/facebook-post-background-texture_911782.jpg&quot;);background-size: cover;color: rgb(27,108,188);">
                                <p class="card-text" style="height: 310px;color: rgb(255,255,255);font-size: 28px;">This is your note content. this can be anything on your mind. bla bla bla.</p>
                            </div>
                        </div>
                        <p style="margin-top: 22px;margin-bottom: 3px;">15 - sep - 2019</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="page-footer dark">
        <div class="footer-copyright">
            <p>IT 18 0152 18 - SLIIT CS Weekend</p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
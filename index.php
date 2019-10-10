<?php
session_start(); 
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
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
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="https://digitalcustode.blogspot.com/2019/10/csrf-protection-synchronizer-token_10.html">Blog</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-lowercase" href="https://github.com/RahalAmrith/CSRF-Protection-Synchronizer-Token-Pattern-">github</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="notes.php">Notes</a></li>
                    
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
    <main class="page landing-page">
        <section class="clean-block clean-hero" style="background-image: url(&quot;assets/img/protect-your-server.jpeg&quot;);background-attachment: fixed;color: rgba(0,0,0,0.9);height: calc(100vh - 80px);">
            <div class="text">
                <h2>CSRF protection in web applications</h2>
                <p>This Project describeds how to protect a web application from<strong> Cross-Site Request Forgery</strong> by using <strong>Synchronizer Token Pattern</strong></p><button class="btn btn-outline-light btn-lg" type="button">Log in</button></div>
        </section>
        <section class="clean-block clean-info dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">What is CSRF</h2>
                    <p style="max-width: 767px;"><br>Cross-site request forgery, also known as one-click attack or session riding and abbreviated as CSRF or XSRF, is a type of malicious exploit of a website where unauthorized commands are transmitted from a user that the web application
                        trusts.&nbsp;<a href="https://en.wikipedia.org/wiki/Cross-site_request_forgery">Wikipedia</a><br><br></p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6"><img class="img-thumbnail" src="assets/img/cross-site%20request%20forgery.svg"></div>
                    <div class="col-md-6">
                        <h3>Synchronizer Token Pattern</h3>
                        <div class="getting-started-info">
                            <p><br>This is a very simple concept to mitigate the risk of being attacked through CSRF. In most web applications, servers are using HTTP session objects to identify the logged in users. In this case, session is generated in
                                the server side and pass the session ID to the client. This session ID is most of the time is saved in a client side cookie file.<br><br></p>
                        </div><button class="btn btn-outline-primary btn-lg" type="button">Read More</button></div>
                </div>
            </div>
        </section>
        <section class="clean-block features">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Used Technologies</h2>
                    <p></p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5 feature-box"><i class="fa fa-mobile-phone icon"></i>
                        <h4>Bootstrap 4</h4>
                        <p>For responsive website design</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="fab fa-css3-alt icon"></i>
                        <h4>CSS 3</h4>
                        <p>For Styling</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="fab fa-html5 icon"></i>
                        <h4>HTML 5</h4>
                        <p>For develop the front end</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="fab fa-php icon"></i>
                        <h4>PHP</h4>
                        <p>As Server Side programming language</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-layers icon"></i>
                        <h4>Bootstrap Studio</h4>
                        <p>For develop Responsive design</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="fas fa-server icon"></i>
                        <h4>AJAX</h4>
                        <p>For Synchronize token</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block about-us">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">About Me</h2>
                    <p style="max-width: 440px;">IT 18 0152 18<br>Rahal Amrith Sarathchandra<br>2nd Year - Cyber Security - Weekend Batch<br>Sri Lanka Institute of Information Technology - Malabe</p>
                </div>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="footer-copyright">
            <p>SLIIT - CS - Web Security Assignment</p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
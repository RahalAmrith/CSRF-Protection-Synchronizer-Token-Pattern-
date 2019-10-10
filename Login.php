<?php

session_start();

require_once 'Token.php';

if (isset($_SESSION["cUser"])) {
    header('Location: notes.php');
}

$errorMsg = ""; // variable to store error msg

if (isset($_POST["login"])) {
    print_r($_POST);

    // checking for required fields
    if (($_POST["uName"] == null) || ($_POST["uPass"] == "")) {
        $errorMsg = "Please enter the user name and password.!";
    } else {

        $userName = $_POST["uName"];
        $userPass = $_POST["uPass"];

        if ($userName == "csrftest" && $userPass == "letmein") {
            $_SESSION["cUser"] = $userName;

            // generate csrf token
            $sessionIdentifier = base64_encode(openssl_random_pseudo_bytes(32));
            setcookie("sessionID", $sessionIdentifier);
            
            Token::generateToken($sessionIdentifier);

            header('Location: notes.php');
        } else {

            $errorMsg = "Please enter a valid username and password..!";
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>LOG in</title>
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
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="https://digitalcustode.blogspot.com/2019/10/csrf-protection-synchronizer-token_10.html">Blog</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-lowercase" href="https://github.com/RahalAmrith/CSRF-Protection-Synchronizer-Token-Pattern-">github</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="notes.php">Notes</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="Login.php">Log in</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Log in</h2>
                    <p>Please log in to Continue...</p>
                    <br />
                    <p style="color : #ff0000"> <?php echo $errorMsg; ?></p>
                </div>
                <form method="POST" action="Login.php">
                    <div class="form-group">
                        <label>User name</label>
                        <input type="text" name="uName" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="uPass" class="form-control" />
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit" name="login" value="loggedin">
                            Log in
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </main>
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
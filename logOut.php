<?php
    
session_start();

unset($_SESSION["cUser"]);

session_destroy();


header('Location: index.php');

?>
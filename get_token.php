<?php
session_start();
require_once 'Token.php';

// get the session id from cookie cookie
$sessionID = $_COOKIE['sessionID'];

// het the csrf token related to session id
$csrfToken = Token::getTokenBySession($sessionID);

// return the token
echo json_encode(array("token" => $csrfToken));
?>
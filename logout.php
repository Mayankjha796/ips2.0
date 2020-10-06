<?php //login
include("mechcon.php");

session_start();
unset($_SESSION["loggedin"]);
unset($_SESSION["username"]);

header("Location:homepage.php");


?>
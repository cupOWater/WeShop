<?php
    // If user is currently logged in, unset loggedIn and userData in $_SESSION
    session_start();
    unset($_SESSION["loggedIn"]);
    unset($_SESSION["userData"]);
    header("Location: my_account.php");
?>
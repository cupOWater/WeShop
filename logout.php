<?php
    session_start();
    unset($_SESSION["loggedIn"]);
    unset($_SESSION["userData"]);
    header("Location: my_account.php");
?>
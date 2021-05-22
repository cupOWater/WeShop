<?php
    session_start();
    if(isset($_SESSION["admin"])){
        header("Location: cms.php");
    }
    require "global_function.php";
    $admin_file = file_get_contents("../data.txt");
    $admin_data = explode(",", $admin_file);
    if (isset($_POST["submit"])){
        if($_POST["a_name"] == $admin_data[0]){
            if(password_verify($_POST["a_password"], $admin_data[1])){
                $_SESSION["admin"] = true;
                header("Location: cms.php");
            }
        }
    }
?>

<form action="cms_login.php" method="post">
    <label for="a_name">Admin Name</label>
    <input type="text" name="a_name"> <br>
    <label for="a_password">Password</label>
    <input type="password" name="a_password"><br>
    <input type="submit" name="submit">
</form>
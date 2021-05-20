<?php
    if (isset($_GET["error"])){
        echo "Need installation first";
    }
    
    if (isset($_POST["install"])){
        if ($_POST["admin_password"] == $_POST["admin_repassword"]){
            $data_file = fopen("../data.txt", "w", true);
            fwrite($data_file, "$_POST[admin_name]\n$_POST[admin_password]");
        }
        else {
            echo "Password does not match";
        }
    }
?>

<form action="install.php" method="post">
    <label for="admin_name">Username</label>
    <input type="text" name="admin_name"> <br>
    <label for="admin_password">Password</label>
    <input type="password" name="admin_password"> <br>
    <label for="admin_repassword">Re-type password</label>
    <input type="password" name="admin_repassword">
    <input type="submit" name="install">
</form>
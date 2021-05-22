<?php
    session_start();
    require "global_function.php";
    if (!isset($_SESSION["admin"])){
        header("Location: cms_login.php");
    }
    $pdf_path = "others_file/tos_copyright.pdf";
    $ltt_pfp = "profile_pics/ltt.jpg";
    $hkt_pfp = "profile_pics/hkt.jpg";
    $dma_pfp = "profile_pics/dma.jpg";
    $tht_pfp = "profile_pics/tht.jpg";
    function get_file_type($file){
        return strtolower(pathinfo($file,PATHINFO_EXTENSION));
    }
?>

<style>
    body{
        margin: 20px;
    }
    .tos input{
        margin: 10px;
    }
    .pfp input{
        margin: 10px;
        display: block;
    }

    .pfp form{
        border: 1px solid grey;
        padding: 10px;
    }

    .alert {
        color: red;
    }
</style>

<html>
    <body> 
        <h1>Admin Dashboard</h1>
        <hr>
        <div class="tos">
            <h3>Upload a pdf as Copyright, Term of Service and Privacy document:</h3>
            <form action="cms.php" method="post" enctype="multipart/form-data">
                <input type="file" name="legalDoc"><br>
                <input type="submit" value="Save" name="savepdf">
            </form>
            <?php
                if(isset($_POST["savepdf"])){
                    $file_type = get_file_type($_FILES["legalDoc"]["name"]);
                    if ($file_type == "pdf"){
                        move_uploaded_file($_FILES['legalDoc']['tmp_name'], $pdf_path);
                        echo "<p class='alert'>Done</p>";
                    }
                    else{
                        echo("<p class='alert'>This is not a pdf file</p>");
                    }

                }
            ?>
        </div>
        <hr>
        <div class="pfp">
            <h3>Upload photos for about us:</h3>
            <form action="cms.php" method="post" enctype="multipart/form-data">
                <label for="LTT">Le Trung Tin</label>
                <input type="file" name="LTT">
                <input type="submit" value="Save" name="savepfp0">
            </form>
            <?php
                if(isset($_POST["savepfp0"])){
                    $file_type = get_file_type($_FILES["LTT"]["name"]);
                    if($file_type == "jpg" || $file_type == "png" || $file_type == "jpeg"){
                        move_uploaded_file($_FILES['LTT']['tmp_name'], $ltt_pfp);
                        echo "<p class='alert'>Done</p>";
                    }else{
                        echo("<p class='alert'>Wrong file type</p>");
                    }
                }
            ?>
            <form action="cms.php" method="post" enctype="multipart/form-data">
                <label for="HKT">Huynh Ky Thanh</label>
                <input type="file" name="HKT">
                <input type="submit" value="Save" name="savepfp1">
            </form>
            <?php
                if(isset($_POST["savepfp1"])){
                    $file_type = get_file_type($_FILES["HKT"]["name"]);
                    if($file_type == "jpg" || $file_type == "png" || $file_type == "jpeg"){
                        move_uploaded_file($_FILES['HKT']['tmp_name'], $hkt_pfp);
                        echo "<p class='alert'>Done</p>";
                    }else{
                        echo("<p class='alert'>Wrong file type</p>");
                    }
                }
            ?>

            <form action="cms.php" method="post" enctype="multipart/form-data">
                <label for="DMA">Doan Duong Minh Anh</label>
                <input type="file" name="DMA">
                <input type="submit" value="Save" name="savepfp2">
            </form>
            <?php
                if(isset($_POST["savepfp2"])){
                    $file_type = get_file_type($_FILES["DMA"]["name"]);
                    if($file_type == "jpg" || $file_type == "png" || $file_type == "jpeg"){
                        move_uploaded_file($_FILES['DMA']['tmp_name'], $dma_pfp);
                        echo "<p class='alert'>Done</p>";
                    }else{
                        echo("<p class='alert'>Wrong file type</p>");
                    }
                }
            ?>

            <form action="cms.php" method="post" enctype="multipart/form-data">
                <label for="THT">Tang Hue Thy</label>
                <input type="file" name="THT">
                <input type="submit" value="Save" name="savepfp3">
            </form>
            <?php
                if(isset($_POST["savepfp3"])){
                    $file_type = get_file_type($_FILES["THT"]["name"]);
                    if($file_type == "jpg" || $file_type == "png" || $file_type == "jpeg"){
                        move_uploaded_file($_FILES['THT']['tmp_name'], $tht_pfp);
                        echo "<p class='alert'>Done</p>";
                    }else{
                        echo("<p class='alert'>Wrong file type</p>");
                    }
                }
            ?>
        </div>
    </body>
</html>
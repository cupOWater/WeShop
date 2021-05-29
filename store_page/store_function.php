<?php
    require "../read_data.php";
    $products = read_csv_data("../data/products.csv");
    $stores = read_csv_data("../data/stores.csv");
    if(!isset($_GET["id"])){
    header("Location: ../index.php");
    }
    $id = $_GET["id"];
    $store_data = get_single_item($stores, $id);
?>
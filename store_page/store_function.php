<?php
require "../global_function.php";
require "../read_data.php";
$products = read_csv_data("../data/products.csv");
$stores = read_csv_data("../data/stores.csv");
$string_one = "Newest First";
$string_two = "Oldest First";
if (!isset($_GET["id"])) {
    header("Location: ../index.php");
}
$id = $_GET["id"];
$store_data = get_single_item($stores, $id);

function add_item($prod_id)
{
    $item["id"] = $prod_id;
    if (isset($_SESSION["cart"])) {
        $found = false;
        foreach ($_SESSION["cart"] as $k => $v) {
            if ($_SESSION["cart"][$k]["id"] == $prod_id) {
                $found = true;
                $_SESSION["cart"][$k]["quant"]++;
                break;
            }
        }
        if (!$found) {
            $item["quant"] = 1;
            $_SESSION["cart"][] = $item;
        }
    }
    if (!isset($_SESSION["cart"])) {
        $item["quant"] = 1;
        $_SESSION["cart"][] = $item;
    } 
    
}

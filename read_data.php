<?php
    function read_csv_data($path) {
        // Read data and store in associative array. Use first line of csv as keys.
        if (!file_exists($path)){
            return false;
        }
        $file = fopen($path, 'r');
        $first = fgetcsv($file);
        $items = [];
        while ($row = fgetcsv($file)) {
          $i = 0;
          $item = [];
          foreach ($first as $col_name) {
            $item[$col_name] =  $row[$i];
            $i++;
          }
          $items[] = $item;
        }
        return $items;
    }
    
    function compare_date($i1, $i2){
        // Compare using created_time key of an element
        // Newest to oldest
        $date1 = strtotime($i1["created_time"]);
        $date2 = strtotime($i2["created_time"]);
        return $date2 - $date1;
    }
    function compare_date1($i1, $i2){
        // Compare using created_time key of an element
        // Oldest to newest
        $date1 = strtotime($i1["created_time"]);
        $date2 = strtotime($i2["created_time"]);
        return -($date2 - $date1);
    }

    function get_featured($stores_list, $col_name){
        // Return an array of items which are featured, name of feature column needs to be inputted
        $featured = [];
        foreach ($stores_list as $s){
            if ($s[$col_name] == "TRUE"){
                $featured[] = $s;
            }
        }
        return $featured;
    }
    function get_single_item($array, $item_id){
        // Associative array of items $array
        // Each item has id $item_id
        foreach ($array as $i){
            if($i['id'] == $item_id){
                return $i;
            }
        }
        return false;
    }
    function get_single_product($array, $product_id){
        // Associative array of products $array
        // Each item has id $product_id
        foreach ($array as $i){
            if($i['id'] == $product_id){
                return $i;
            }
        }
        return false;
    }

?>
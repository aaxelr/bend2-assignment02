<?php

class App
{
    public static function render_products($show, $category)
    {
        // Handle errors
        $errors = [];
        $categories = ["Accessories", "Food", "Jewelry", "Pets"];

        // Check if category is set and is a valid category.
        if ($category && !in_array($category, $categories)) {
            $error_msg = ["category" => "No such category."];
            $errors[] = $error_msg;
        }

        // Check if show is in a valid range.
        if ($show < 1 || $show > 20) {
            $error_msg = ["show" => "Show must be an integer between 1 and 20."];
            $errors[] = $error_msg;
        }

        // print error(s) and exit
        if (count($errors) > 0) {
            echo json_encode($errors);
            exit();
        }

        //require $products_array from products.php
        require_once "../products.php";

        // Filter products if category is provided
        if ($category) {
            $filtered_array = [];
            foreach ($products_array as $index => $product) {
                if ($product['category'] === $category)
                    $filtered_array[] = $product;
            }
            $products_array = $filtered_array;

            // Check if the number of items to show is greater than items of chosen category
            $show = $show < count($filtered_array) ? $show : count($filtered_array);
        }

        // Shuffle and populate array with $show number of items
        shuffle($products_array);
        $selected_products = [];
        for ($i = 0; $i < $show; $i++) {
            $selected_products[] = $products_array[$i];
        }

        // JSON
        $json = json_encode($selected_products);
        echo $json;
    }
}

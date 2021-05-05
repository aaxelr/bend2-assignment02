<?php

class App
{
    public static function main()
    {
        self::render_products();
    }

    public static function render_products()
    {
        require_once "products.php";
        $products_array = [];
        foreach ($products as $object) {
            $products_array[] = $object->to_array();
        }

        $json = json_encode($products_array);
        echo $json;
    }
}

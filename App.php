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

        $json = json_encode($products_array, JSON_UNESCAPED_UNICODE);
        echo $json;
    }
}

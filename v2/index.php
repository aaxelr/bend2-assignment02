<?php
header("Access-Control-Allow-Origins: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Content-Type: Application/json; charset=UTF-8");
header("Referrer-Policy: no-referrer");

require_once "App.php";

$show = isset($_GET['show']) ? htmlspecialchars($_GET['show']) : 10;
$category = isset($_GET['category']) ? ucfirst(htmlspecialchars($_GET['category'])) : false;

App::render_products($show, $category);

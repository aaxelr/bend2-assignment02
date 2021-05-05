<?php
header("Access-Control-Allow-Origins: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Content-Type: Application/json; charset=UTF-8");
header("Referrer-Policy: no-referrer");

require_once "App.php";

App::main();

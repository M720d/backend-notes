<?php 
use Core\Responses;
function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($status = 404){
    http_response_code(404);
    $txt = basePath("Views/Partials/errorPage/" . $status . ".php");
    require $txt;
    // dd($txt);
    die();
}
function autorization($condition, $status = Responses::FORBIDDEN){
    if($condition){
        abort($status);
    }
}

function basePath($path){
    return BASE_PATH . $path;
}

function view($path, $arr = []){
    extract($arr);
    require basePath("Views/".$path);
}
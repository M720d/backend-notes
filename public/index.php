<?php 
// use Core\Router;

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . "Core/functions.php";

spl_autoload_register(function($class){
    $class = str_replace ('\\', DIRECTORY_SEPARATOR, $class);
    require basePath("{$class}.php");
});

require basePath('Core/Response.php');

require basePath('bootstrap.php');
$router = new \Core\Router();

$routes = require basePath('routes.php');


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
// dd($uri." ".$method);
$router->route($uri, $method);






<?php
// dd("destroy here");
use Core\App;
use Core\Database;
use Core\Responses;
use Core\Router;
// require basePath('bootstrap.php');
$config = require basePath('config.php');
$db = new Database($config['database'], '', '');
// $db = App::resolve(\Core\Database::class);
// $db = $container->resolve('Core\Database');
// dd($db);

$heading = 'Note';
$currentUser = 1;

$id = $_GET['id'];

// dd($_POST);

    $note = $db->myquery('select * from user where id = :id', ['id' => $id])->FindOrFail();
    
    autorization($note[0]['user_id'] !== $currentUser);
// 
    $db->myquery('delete from user where id = :id', [
        'id' => $_POST['id'],
    ]);

    header('location: /notes');
    exit();
    

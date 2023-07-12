<?php 
use Core\Database;
// dd("index here");
$config = require basePath('config.php');
$db = new Database($config['database'], '', '');
$heading = 'MyNotes';

// dd($db);
// require "functions.php";
$notes = $db->myquery('select * from user where user_id=1')->FindOrFail();
// dd($notes['body']);

view ('notes/index.view.php',[
    'heading' => $heading,
    'notes' => $notes,
]);




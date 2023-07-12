<?php
use Core\Database;
use Core\Validator;

require basePath('Core/Validator.php');
$config = require basePath('config.php');
$db = new Database($config['database'], '', '');

$heading = 'Create a new Note to your task';
// dd($_SERVER);
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    

    if (!Validator::stringCheck($_POST['body'], 1 , 5)) {
        $errors['body'] = "A body is Required";
        
        // $errors['text'] = "trial";
        // dd($errors);
    }

    if (empty($errors)) {
        $db->myquery('INSERT INTO user(body,user_id) values (:body, :user_id)', [
            ':body' => $_POST['body'],
            ':user_id' => 1
        ]);
    }

    // dd($_POST);
}



view ('notes/create.view.php',[
    'heading' => $heading,
    'errors' => $errors,
]);
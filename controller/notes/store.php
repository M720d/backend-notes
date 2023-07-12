<?php
use Core\Database;
use Core\Validator;
use Core\Router;

// dd("store here");
require basePath('Core/Validator.php');
$config = require basePath('config.php');
$db = new Database($config['database'], '', '');
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

        header('location: /notes');
    exit();
    }

    // dd($_POST);
}
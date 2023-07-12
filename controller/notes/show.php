<?php

use Core\Database;
use Core\Responses;

$config = require basePath('config.php');
$db = new Database($config['database'], '', '');
$heading = 'Note';
$currentUser = 1;

$id = $_GET['id'];

// dd($_POST);


    $note = $db->myquery('select * from user where id = :id', ['id' => $id])->FindOrFail();
    // dd($note[0]['user_id']);
    if (!$note) {
        abort();
    }

    autorization($note[0]['user_id'] !== $currentUser);
    view('notes/show.view.php', [
        'heading' => $heading,
        'note' => $note,
    ]);


// dd($note[0]['user_id']);
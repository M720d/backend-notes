<?php

// return [
//     '/' => 'controller/index.php',
//     '/about' => 'controller/about.php',
//     '/contact' => 'controller/contact.php',
//     '/notes' => 'controller/notes/index.php',
//     '/note' => 'controller/notes/show.php',
//     '/note/create' => 'controller/notes/create.php'
// ];

$router->get('/', 'controller/index.php');
$router->get ('/about', 'controller/about.php');
$router->get ('/contact', 'controller/contact.php');

$router->get ('/notes', 'controller/notes/index.php');

$router->get('/note','controller/notes/show.php');
$router->delete('/note','controller/notes/destory.php');

$router->get('/note/edit','controller/notes/edit.php');

$router->get ('/note/create','controller/notes/create.php');
$router->post('/note/create','controller/notes/store.php');



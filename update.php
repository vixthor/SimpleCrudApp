<?php

include './partials/header.php';
require __DIR__.'/Users.php';

$userId = $_GET['id']; 
$user = getUserById($userId);
if (!$user){
    include './partials/Not_found.php';
    exit;
    
}
if (!isset($_GET['id'])){
    include './partials/Not_found.php';
    exit;
}

 echo '<pre>';
 var_dump($user);
 echo '</pre>';
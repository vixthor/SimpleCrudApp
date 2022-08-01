<?php 


function getUser()
{
   $users = json_decode(file_get_contents(__DIR__.'./Users.json'), true);
   echo '<pre>';
      var_dump($users);
   echo '<pre>';
}


function getUserById($id)
{

}


function createUser($data)
{

}


function updateUser($data, $id)
{

}


function deleteUser($id)
{

}
 <?php 


function getUsers()
{
   return json_decode(file_get_contents(__DIR__."/user.json"), true);
}


function getUserById($id)
{
    $users = getUsers();
    foreach ($users as $user)
    {
      if($user['id'] == $id){
         return $user;
      }
      
    }
    
}


function createUser($data)
{
   
}


function updateUser($data, $id)
{
   $users = getUsers();
   foreach($users as $i => $user){
      if($user['id'] == $id){
        $user[$i] = array_merge($data, $user);
      }
   }
  $encodeUsers = json_encode($users);
   file_put_contents('user.json', $encodeUsers);
}


function deleteUser($id)
{

}
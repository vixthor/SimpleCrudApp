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
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
    updateUser($_POST, $userId);
     //header("Location: index.php");
}

 ?>
 <div class="container bg-secondary p-3 mt-3 rounded ">
    <div class="card">
        <div class="card-header">
            <h3>Update User: <?php echo $user['name'] ?></h3>
        </div>
        <div class="card-body">
            <form class="" method="POST" action="" enctype="multipart/form-data">
                <div class=" form-group">
                    <label for="name" class="form-label">Name</label>
                    <input  name="name" class="form-control" value="<?php echo $user['name'] ?>">
                </div>
                <div class=" form-group">
                    <label for="username" class="form-label">Username</label>
                    <input  name="username" class="form-control" value="<?php echo $user['username'] ?>">
                </div>
                <div class=" form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $user['email'] ?>">
                </div>
                <div class=" form-group">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" value="<?php echo $user['phone'] ?>">
                </div>
                <div class=" form-group mb-3">
                    <label for="website" class="form-label">Website</label>
                    <input  name="website" class="form-control" value="<?php echo $user['website'] ?>">
                </div>
                <div class=" form-group mb-3">
                    <label for="website" class="form-label">Image</label>
                    <input type="file" name="picture" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
 </div>
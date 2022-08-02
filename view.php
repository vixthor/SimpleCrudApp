<?php 
 include './partials/header.php';
require __DIR__.'/Users.php';


if (!isset($_GET['id'])){
    include './partials/Not_found.php';
    exit;
}
$userId = $_GET['id']; 
$user = getUserById($userId);



?>
<div class="bg-gradient bg-primary p-3 rounded m-3">
    <div class="mt-5 p-2 d-flex justify-content-center">
    <h1 class=" ms-3 text-decoration-underline fst-italic fw-bold">User <?php echo $user['id'] ?> Table</h1>
    </div>
    <table class="table">
        <tbody>
            <tr>
            <th>Name:</th>
            <td><?php echo $user['name'] ?></td>
            </tr>
            <tr>
            <th>Username:</th>
            <td><?php echo $user['username']?></td>
            </tr>
            <tr>
            <th>Email:</th>
            <td><?php echo $user['email']?></td>
            </tr>
            <tr>
            <th>Phone:</th>
            <td><?php echo $user['phone']?></td>
        </tr>
            <tr>
            <th>Website:</th>
            <td><?php echo $user['website']?></td>
            </tr>
        
        </tbody>
    </table>
</div>

<?php include './partials/footer.php'?>

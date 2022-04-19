<?php 
    $connection = mysqli_connect('localhost','root', '', 'usersDB');
    $id=$_GET['id'];

    $sql="delete from users where id='$id'";
	mysqli_query($connection, $sql);

    header('location: ../view/user_list.php');
?>
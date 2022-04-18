<?php 
    $connection = mysqli_connect('localhost','root', '', 'usersDB');
    session_start();
    if(isset($_POST['submit'])){

        $username=$_POST['username'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $id=$_SESSION['id'];

        $sql="update users set username='$username', password='$password', email='$email' where id='$id'";
        mysqli_query($connection, $sql);
        header('location: ../view/home.php');

    }

?>
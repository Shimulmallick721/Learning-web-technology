<?php
session_start();
$values = true;
$username = $email = $password = $repass =  "";
$passworderror =  "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $repass = $_POST["repass"];
    if ($password != $repass) {
        $values = false;
        $passworderror = "Password mismatch";
        $_SESSION["wrong"] = "wrong password";
        header("location: ../view/signup.php");
    } else {
        $conn = new mysqli("localhost", "root", "", "usersDB");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT INTO Users (username,email,password)
        VALUES ('$username','$email','$password')";
        echo $sql;
        $res = $conn->query($sql);
        if ($res) {
            echo "Registration Successful!";
        } else {
            echo "Try Again";
        }
        $conn->close();
        header("location: ../view/login.php");
    }
}
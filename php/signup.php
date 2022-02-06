<?php
session_start();
require('.\dbconfig.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['username']) && isset($_POST['address']) && $_POST['email'] != '' && $_POST['password'] != '' && $_POST['username'] != '' && $_POST['address'] != '') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $username = $_POST['username'];
        $address = $_POST['address'];

        // Hash the password
        $password = md5($password);
        $sql = "INSERT INTO user (username,email, address,password) VALUES ('$username','$email','$address','$password')";
        if ($conn->query($sql)===TRUE) {
            $_SESSION['userid'] = $conn->insert_id;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['address'] = $address;
            header('Location: ./dashboard.php');
        } 

        $conn->close();
    }
}

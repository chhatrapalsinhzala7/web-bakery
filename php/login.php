<?php
session_start();
require('./dbconfig.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['email']) && isset($_POST['password']) && $_POST['email'] != '' && $_POST['password'] != '') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM user WHERE email like '$email'";
        $result = $conn->query($sql);
        
        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            if ($row['Password'] == md5($password)) {
                $_SESSION['userid'] = $row['Id'];
                $_SESSION['username'] = $row['Username'];
                $_SESSION['email'] = $row['Email'];
                $_SESSION['address'] = $row['Address'];
                header('Location: ./dashboard.html');
            }    
        }
        
        $conn->close();
    }
}

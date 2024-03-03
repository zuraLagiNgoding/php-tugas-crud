<?php
    include "../config/connect.php";

    if (isset($_POST['save'])) {
        if (isset($_POST['username'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
        
            $query = mysqli_query($connect, "INSERT INTO tb_user VALUES('$username', '$email', '$password')");
    
            if ($query) {
                header('Location: ../?page=data_user');
            }
        }
    }
?>
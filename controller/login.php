<?php 
    session_start();

    include "../config/connect.php";
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($connect, "SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
    $is_exist = mysqli_num_rows($query);

    
    if ($is_exist > 0) {
        if (!$query) {
            header("Location: ../login.php?status=error");
        } else {
            $data = mysqli_fetch_array($query);
            $_SESSION['username'] = $data['username'];
            $_SESSION['email'] = $data['email'];
    
            $_SESSION['status'] = 'login';
    
            header("Location: ../index.php");
        }
    } else {
        header("Location: ../login.php?status=failed");
    }
?>
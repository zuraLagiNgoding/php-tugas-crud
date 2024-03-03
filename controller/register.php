<?php 
    include "../config/connect.php";

    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $select_query = mysqli_query($connect, "SELECT * FROM tb_user WHERE username='$username' OR email='$email'");
        $is_exist = mysqli_num_rows($select_query);
    
        if ($is_exist == 0) {
            $query = mysqli_query($connect, "INSERT INTO tb_user VALUES ('$username', '$email', '$password')");
            if ($query) {
                header("Location: ../login.php");
            }
        } else {
            header("Location: ../register.php?status=failed");
        }
    } else if (isset($_POST['save'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $select_query = mysqli_query($connect, "SELECT * FROM tb_user WHERE username='$username' OR email='$email'");
        $is_exist = mysqli_num_rows($select_query);
    
        if ($is_exist == 0) {
            $query = mysqli_query($connect, "INSERT INTO tb_user VALUES ('$username', '$email', '$password')");
            if ($query) {
                header("Location: ../?page=data_user");
            }
        } else {
            header("Location: ../?page=data_user&status=failed");
        }
    }
?>
<?php
    include "../config/connect.php";

    if (isset($_POST['edit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $select_query = mysqli_query($connect, "SELECT * FROM tb_user WHERE username='$username' OR email='$email'");
        $is_exist = mysqli_num_rows($select_query);
        
        if ($is_exist == 0) {
            if ($query) {
                $query = mysqli_query($connect, "UPDATE tb_user SET username='$username', email='$email', password='$password' WHERE username='$username'");
                header('Location: ../?page=data_user');
            }
        } else {
            header('Location: ../?page=data_user&status=failed');
        }
    }
?>
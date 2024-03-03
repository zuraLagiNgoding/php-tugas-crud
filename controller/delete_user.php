<?php
    include "../config/connect.php";

    if (isset($_POST['delete'])) {
        $username = $_GET['id'];
    
        $query = mysqli_query($connect, "DELETE FROM tb_user WHERE username='$username'");

        if ($query) {
            header('Location: ../?page=data_user');
        }
    }
?>
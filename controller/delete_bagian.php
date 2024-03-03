<?php
    include "../config/connect.php";

    if (isset($_POST['delete'])) {
        $id_bagian = $_GET['id'];
    
        $query = mysqli_query($connect, "DELETE FROM tb_bagian WHERE id_bagian='$id_bagian'");

        if ($query) {
            header('Location: ../?page=data_bagian');
        }
    }
?>
<?php
    include "../config/connect.php";

    if (isset($_POST['delete'])) {
        $id_pegawai = $_GET['id'];
    
        $query = mysqli_query($connect, "DELETE FROM tb_pegawai WHERE id_pegawai='$id_pegawai'");

        if ($query) {
            header('Location: ../?page=data_pegawai');
        }
    }
?>
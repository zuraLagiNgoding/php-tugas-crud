<?php
    include "../config/connect.php";

    if (isset($_POST['save'])) {
        if (isset($_POST['id_bagian'])) {
            $id_bagian = $_POST['id_bagian'];
            $nama_bagian = $_POST['nama_bagian'];
            
            $select_query = mysqli_query($connect, "SELECT * FROM tb_bagian WHERE id_bagian='$id_bagian' OR nama_bagian='$nama_bagian'");
            $check = mysqli_num_rows($select_query);
            
            if ($check == 0) {
                $query = mysqli_query($connect, "INSERT INTO tb_bagian VALUES('$id_bagian', '$nama_bagian')");
                if ($query) {
                    header('Location: ../?page=data_bagian');
                }
            } else {
                header('Location: ../?page=save_bagian&status=failed');
            }
        }
    }
?>
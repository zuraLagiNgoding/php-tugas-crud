<?php
    include "../config/connect.php";

    if (isset($_POST['edit'])) {
        $id_bagian = $_POST['id_bagian'];
        $nama_bagian = $_POST['nama_bagian'];
    
        $select_query = mysqli_query($connect, "SELECT * FROM tb_bagian WHERE id_bagian='$id_bagian' OR nama_bagian='$nama_bagian'");
        $check = mysqli_num_rows($select_query);
        
        if ($check == 0) {
            $query = mysqli_query($connect, "UPDATE tb_bagian SET nama_bagian='$nama_bagian' WHERE id_bagian='$id_bagian'");
            if ($query) {
                header('Location: ../?page=data_bagian');
            }
        } else {
            header('Location: ../?page=edit_bagian&status=failed');
        }
    }
?>
<?php
    include "../config/connect.php";

    if (isset($_POST['edit'])) {
        $id_pegawai = $_POST['id_pegawai'];
        $nama_pegawai = $_POST['nama_pegawai'];
        $alamat = $_POST['alamat'];
        $no_telp = $_POST['no_telp'];
        $golongan = $_POST['golongan'];
        $nama_bagian = $_POST['nama_bagian'];
    
        $select_query = mysqli_query($connect, "SELECT * FROM tb_pegawai WHERE id_pegawai='$id_pegawai'");
        $check = mysqli_num_rows($select_query);

        if ($check == 0) {
            $query = mysqli_query($connect, "UPDATE tb_pegawai SET nama_pegawai='$nama_pegawai', alamat='$alamat', no_telp='$no_telp', golongan='$golongan', id_bagian='$nama_bagian' WHERE id_pegawai='$id_pegawai'");
            if ($query) {
                header('Location: ../?page=data_pegawai');
            }
        } else {
            header('Location: ../?page=edit_pegawai&status=failed');
        }
    }
?>
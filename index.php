<?php include "./config/connect.php"?>

<?php 
 session_start();
 if ($_SESSION['status'] != "login"){
    header("location: login.php?status=logout");
 }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body style="font-family: 'Inter', sans-serif;" class="bg-[#EEF2F5] w-full">
    <div class="flex min-h-screen w-full relative">
        <?php 
            if (empty($_GET['delete'])){
                echo '';
            } else if ($_GET['delete'] == 1) {
                if (isset($_GET['id'])) {
                    $id_pegawai = $_GET['id'];
                    $query = mysqli_query($connect, "SELECT * FROM tb_pegawai WHERE id_pegawai = '$id_pegawai'") or die('Query Error : '.mysqli_error($connect));
                    while ($data = mysqli_fetch_assoc($query)) {
                        $id_pegawai = $data['id_pegawai'];
                        echo "
                        <form method='POST' action='controller/delete_pegawai.php?id=$data[id_pegawai]' class='w-full h-full absolute z-10'>
                            <div class='flex w-full h-full justify-center items-center bg-black bg-opacity-15'>
                                <div class='bg-white px-6 py-4 shadow-lg rounded-xl'>
                                    <h1 class='mb-3' >You're about to delete <b>$data[id_pegawai]</b> record.</h1> 
                                    <div class='flex text-white gap-1 float-right'>
                                        <button type='submit' name='delete' class='py-1 px-3 bg-blue-500 rounded-lg'>Ok</button>
                                        <a href='?page=data_pegawai' class='py-1 px-3 bg-red-500 rounded-lg'>Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        ";
                    }
                }  
            } else if ($_GET['delete'] == 2) {
                if (isset($_GET['id'])) {
                    $id_bagian = $_GET['id'];
                    $query = mysqli_query($connect, "SELECT * FROM tb_bagian WHERE id_bagian = '$id_bagian'") or die('Query Error : '.mysqli_error($connect));
                    while ($data = mysqli_fetch_assoc($query)) {
                        $id_bagian = $data['id_bagian'];
                        echo "
                        <form method='POST' action='controller/delete_bagian.php?id=$data[id_bagian]' class='w-full h-full absolute z-10'>
                            <div class='flex w-full h-full justify-center items-center bg-black bg-opacity-15'>
                                <div class='bg-white px-6 py-4 shadow-lg rounded-xl'>
                                    <h1 class='mb-3' >You're about to delete <b>$data[id_bagian]</b> record.</h1> 
                                    <div class='flex text-white gap-1 float-right'>
                                        <button type='submit' name='delete' class='py-1 px-3 bg-blue-500 rounded-lg'>Ok</button>
                                        <a href='?page=data_bagian' class='py-1 px-3 bg-red-500 rounded-lg'>Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        ";
                    }
                }  
            } else if ($_GET['delete'] == 3) {
                if (isset($_GET['id'])) {
                    $username = $_GET['id'];
                    $query = mysqli_query($connect, "SELECT * FROM tb_user WHERE username = '$username'") or die('Query Error : '.mysqli_error($connect));
                    while ($data = mysqli_fetch_assoc($query)) {
                        $username = $data['username'];
                        echo "
                        <form method='POST' action='controller/delete_user.php?id=$data[username]' class='w-full h-full absolute z-10'>
                            <div class='flex w-full h-full justify-center items-center bg-black bg-opacity-15'>
                                <div class='bg-white px-6 py-4 shadow-lg rounded-xl'>
                                    <h1 class='mb-3' >You're about to delete <b>$data[username]</b> account.</h1> 
                                    <div class='flex text-white gap-1 float-right'>
                                        <button type='submit' name='delete' class='py-1 px-3 bg-blue-500 rounded-lg'>Ok</button>
                                        <a href='?page=data_user' class='py-1 px-3 bg-red-500 rounded-lg'>Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        ";
                    }
                }  
            }
            
            ?>
        <?php include ("./layout/sidebar.php")?>
        <div class="basis-[77%] flex flex-col max-h-full">           
            <?php 
            include ("./layout/header.php")
            ?>
            <div class="p-6 flex flex-col gap-6 h-full">
                <?php 
                if (empty($_GET["page"])) {
                    include "./partials/dashboard.php";
                } else if ($_GET["page"] == "data_pegawai") {
                    include "./partials/pegawai/index.php";
                } else if ($_GET["page"] == "save_pegawai") {
                    include "./partials/pegawai/save.php";
                } else if ($_GET["page"] == "edit_pegawai") {
                    include "./partials/pegawai/edit.php";
                } else if ($_GET["page"] == "data_bagian") {
                    include "./partials/bagian/index.php";
                } else if ($_GET["page"] == "save_bagian") {
                    include "./partials/bagian/save.php";
                } else if ($_GET["page"] == "edit_bagian") {
                    include "./partials/bagian/edit.php";
                } else if ($_GET["page"] == "data_user") {
                    include "./partials/user/index.php";
                } else if ($_GET["page"] == "save_user") {
                    include "./partials/user/save.php";
                } else if ($_GET["page"] == "edit_user") {
                    include "./partials/user/edit.php";
                } 
                ?>
                <div class="p-4 bg-white rounded-xl">
                    SMKN 4 Kota Tangerang
                </div>
            </div>
        </div>
    </div>
</body>

</html>
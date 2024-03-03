<?php 
if (isset($_GET['id'])) {
    $id_bagian = $_GET['id'];
    $query = mysqli_query($connect, "SELECT * FROM tb_bagian WHERE id_bagian = '$id_bagian'") or die('Query Error : '.mysqli_error($connect));

    while ($data = mysqli_fetch_assoc($query)) {
        $id_bagian = $data['id_bagian'];
        $nama_bagian = $data['nama_bagian'];
    }
}   
?>

<form method="POST" action="controller/edit_bagian.php" class="shadow-xl flex flex-col justify-between bg-white rounded-2xl p-8 h-full">
    <div class="flex flex-col gap-4">
        <?php 
        if(isset($_GET['status'])){
            if ($_GET['status'] == "failed"){
                echo '
                <p class="flex items-center gap-3 py-2 px-3 bg-red-400 rounded-lg text-white text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                    </svg>
                    Id Bagian or Nama Bagian Already Exist!!
                </p>
                ';
            } 
        }
        ?>    
        <div class="flex gap-12">
            <div class="basis-1/2 flex items-center gap-4">
                <label for="id_bagian" class="basis-1/5 font-semibold">Id Bagian</label>
                <input type="text" name="id_bagian" class="basis-4/5 border border-slate-500 py-1 px-2 !outline-none rounded-lg" value="<?php echo $id_bagian; ?>" readonly>
            </div>
            <div class="basis-1/2 flex items-center gap-4">
                <label for="nama_bagian" class="basis-1/5 font-semibold">Nama Bagian</label>
                <input type="text" name="nama_bagian" class="basis-4/5 border border-slate-500 py-1 px-2 !outline-none rounded-lg" value="<?php echo $nama_bagian; ?>">
            </div>
        </div>
    </div>
    <div class="w-full">
        <button type="submit" name="edit" class="bg-blue-500 px-4 py-2 rounded-lg text-white">Save</button>
        <a href='?page=data_bagian' class='py-2 px-4 bg-red-500 rounded-lg text-white'>Cancel</a>
    </div>
</form>
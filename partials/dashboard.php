<?php 
    $query_pegawai = mysqli_query($connect, "SELECT * FROM tb_pegawai, tb_bagian WHERE tb_pegawai.id_bagian = tb_bagian.id_bagian LIMIT 5");
    $row_pegawai = mysqli_num_rows($query_pegawai);
    $query_bagian = mysqli_query($connect, "SELECT * FROM tb_bagian");
    $row_bagian = mysqli_num_rows($query_bagian);

?>

<div class="flex flex-col gap-4 p-8 h-full relative overflow-hidden">
    <h1 class="text-3xl font-semibold">Welcome, <?php echo $_SESSION['username'];?>!</h1>
    <div class="flex gap-8">
        <a href="?page=data_pegawai" class="transition hover:scale-105 flex items-center gap-4 px-5 py-5 w-64 h-28 bg-blue-400 text-white rounded-2xl ">
            <div class="flex flex-col gap-2">
                <h1 class="text-lg font-semibold">Jumlah Pegawai</h1>
                <h1 class="text-lg font-medium text-neutral-200"><?php echo $row_pegawai;?></h1>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-14 h-14 opacity-30">
                <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
            </svg>
        </a>
        <a href="?page=data_bagian" class="transition hover:scale-105 flex items-center gap-4 px-5 py-5 w-64 h-28 bg-blue-400 text-white rounded-2xl ">
            <div class="flex flex-col gap-2">
                <h1 class="text-lg font-semibold">Jumlah Bagian</h1>
                <h1 class="text-lg font-medium text-neutral-200"><?php echo $row_bagian;?></h1>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-14 h-14 opacity-30">
                <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z" clip-rule="evenodd" />
                <path d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
            </svg>
        </a>
    </div>
    <div class="flex flex-col mt-8 gap-8 ">
        <div class="flex justify-between">
            <h1 class="text-xl font-semibold">Recent Pegawai</h1>
            <a href="?page=data_pegawai" class="transition hover:scale-105 hover:opacity-75">See All</a>
        </div>
        <table class="w-full rounded-t-lg overflow-hidden font-medium">
            <tbody class="text-slate-500">
            <?php 
                while ($data = mysqli_fetch_array($query_pegawai)) {
                    echo "<tr class='border-t border-slate-300'>";
                    echo "<td class='px-4 py-2'>".$data['id_pegawai']."</td>";
                    echo "<td class='px-4 py-2'>".$data['nama_pegawai']."</td>";
                    echo "<td class='px-4 py-2'>".$data['nama_bagian']."</td>";
                    echo "</tr>";
                }
            ?>    
            </tbody>
        </table>
    </div>
</div>
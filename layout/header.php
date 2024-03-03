<header class="flex justify-between p-6 pr-8 bg-white">
    <h1 class="text-xl font-bold">
    <?php 
    if (empty($_GET["page"])) {
        echo "Dashboard";
    } else if ($_GET["page"] == "data_pegawai") {
        echo "Data Pegawai";
    } else if ($_GET["page"] == "save_pegawai") {
        echo "Add New Data Pegawai";
    } else if ($_GET["page"] == "edit_pegawai") {
        echo "Update Data Pegawai";
    } else if ($_GET["page"] == "data_bagian") {
        echo "Data Bagian";
    } else if ($_GET["page"] == "save_bagian") {
        echo "Add New Data Bagian";
    } else if ($_GET["page"] == "edit_bagian") {
        echo "Update Data Bagian";
    } else if ($_GET["page"] == "data_user") {
        echo "Data User";
    } else if ($_GET["page"] == "save_user") {
        echo "Add New Data User";
    } else if ($_GET["page"] == "edit_user") {
        echo "Update Data User";
    }
    ?>
    </h1>
    <a href="controller/logout.php">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd" d="M3 4.25A2.25 2.25 0 0 1 5.25 2h5.5A2.25 2.25 0 0 1 13 4.25v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 0-.75-.75h-5.5a.75.75 0 0 0-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 0 0 .75-.75v-2a.75.75 0 0 1 1.5 0v2A2.25 2.25 0 0 1 10.75 18h-5.5A2.25 2.25 0 0 1 3 15.75V4.25Z" clip-rule="evenodd" />
            <path fill-rule="evenodd" d="M6 10a.75.75 0 0 1 .75-.75h9.546l-1.048-.943a.75.75 0 1 1 1.004-1.114l2.5 2.25a.75.75 0 0 1 0 1.114l-2.5 2.25a.75.75 0 1 1-1.004-1.114l1.048-.943H6.75A.75.75 0 0 1 6 10Z" clip-rule="evenodd" />
        </svg>
    </a>
</header>
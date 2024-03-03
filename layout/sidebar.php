<nav class="basis-[23%] flex flex-col p-8 w-full gap-6 bg-white">
    <div class="flex items-center w-full justify-center">
        <h1 class="text-2xl font-bold text-neutral-700">CRUD PEGAWAI</h1>
    </div>
    <ul class="flex flex-col gap-3">
        <li class="">
            <a href="./" class="flex gap-3 items-center text-slate-500 font-medium py-3 px-6 rounded-xl cursor-pointer <?php if (empty($_GET["page"])) {echo "bg-blue-400 !text-white shadow-xl";}?>">
                <svg xmlns="http://www.w3.org/2000/svg" fill="<?php if (empty($_GET["page"])) {echo "currentColor";} else {echo "none";}?>" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                </svg>
                
                Dashboard
            </a>
        </li>
        <li class="">
            <a href="?page=data_pegawai" class="flex gap-3 items-center  text-slate-500 font-medium py-3 px-6 rounded-xl cursor-pointer <?php if (empty($_GET["page"])) {echo "";} else if ($_GET["page"] == "data_pegawai" || $_GET["page"] == "save_pegawai" || $_GET["page"] == "edit_pegawai")  {echo "bg-blue-400 !text-white shadow-xl";} else {echo "";}?>">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
    
                Data Pegawai
            </a>
        </li>
        <li class="">
            <a href="?page=data_bagian" class="flex gap-3 items-center  text-slate-500 font-medium py-3 px-6 rounded-xl cursor-pointer <?php if (empty($_GET["page"])) {echo "";} else if ($_GET["page"] == "data_bagian" || $_GET["page"] == "save_bagian" || $_GET["page"] == "edit_bagian") {echo "bg-blue-400 !text-white shadow-xl";} else {echo "";}?>">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                </svg>
    
                Data Bagian
            </a>
        </li>
        <li class="">
            <a href="?page=data_user" class="flex gap-3 items-center  text-slate-500 font-medium py-3 px-6 rounded-xl cursor-pointer <?php if (empty($_GET["page"])) {echo "";} else if ($_GET["page"] == "data_user")  {echo "bg-blue-400 !text-white shadow-xl";} else {echo "";}?>">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>  
                Data User
            </a>
        </li>
    </ul>
    <div class="flex gap-2 mt-auto items-center ml-6">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12 text-blue-500">
        <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
        </svg>

        <div class="flex flex-col">
            <h1 class="font-semibold"><?php echo $_SESSION['username'];?></h1>
            <h1 class="text-slate-500"><?php echo $_SESSION['email'];?></h1>
        </div>
    </div>
</nav>
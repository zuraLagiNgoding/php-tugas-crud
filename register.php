<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <form style="font-family: 'Inter', sans-serif;" action="controller/register.php" method="post" class="w-full h-screen flex justify-center items-center bg-[#EEF2F5]">
        <div class="flex bg-white rounded-2xl p-16 min-w-[50rem] h-[30rem] items-center">
            <div class="basis-2/4">
                <img src="asset/Woman-1.png" alt="woman" class="w-56">
            </div>
            <div class="basis-2/4 flex flex-col gap-4 justify-center">
                <h1 class="text-3xl font-bold">Register</h1>
                <?php 
                if(isset($_GET['status'])){
                    if ($_GET['status'] == "failed"){
                        echo '
                        <p class="flex items-center gap-3 py-2 px-3 bg-red-400 rounded-lg text-white text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                            </svg>
                            Username or Email Already Exist!!
                        </p>
                        ';
                    } 
                }
                ?> 
                <div class="flex flex-col gap-2">
                    <label for="username" class="font-medium text-slate-500">Username</label>
                    <input type="text" name="username" placeholder="" class=" !outline-none  bg-slate-200 px-3 py-1.5 rounded-lg">
                    <label for="email" class="font-medium text-slate-500">Email</label>
                    <input type="email" name="email" placeholder="" class=" !outline-none  bg-slate-200 px-3 py-1.5 rounded-lg">
                    <label for="password" class="font-medium text-slate-500">Password</label>                    
                    <input type="password" name="password" placeholder="" class=" !outline-none  bg-slate-200 px-3 py-1.5 rounded-lg">
                </div>
                <div class="flex flex-col gap-4 text-center mt-4">
                    <input type="submit" value="Register" name="register" class="transition hover:opacity-75 bg-blue-500 py-2 px-4 rounded-lg text-white font-medium ">
                    <p class="text-sm">already have an account? <a href="login.php" class="text-blue-500 ">login now</a></p>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
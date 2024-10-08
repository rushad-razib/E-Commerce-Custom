<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../output.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

    <section id="admin_login" class="bg-gradient-to-t from-cyan-200 to-blue-500 h-[100vh] w-full">
        <div class="w-5/6 lg:max-w-container mx-auto flex justify-center items-center h-full">
            <div class="card flex flex-col bg-white p-4 lg:p-8 shadow-xl border rounded">
                <h3 class="text-lg font-bold text-center">Admin Panel</h3>
                <h3 class="text-sm font-normal text-center pb-1">Enter Your Login Credentials</h3>
                <form action="" method="POST"">
                    <div class="py-1">
                        <label for="name" class="text-base font-semibold">Admin Email</label>
                        <input type="email" class="border rounded w-full my-2 px-4 py-2 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Enter Email">
                    </div>
                    <div class="py-1">
                        <label for="password" class="text-base font-semibold">Password</label>
                        <div class="relative my-2">
                            <input type="password" class="border rounded w-full px-4 py-2 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Enter Password">
                            <i class="fas fa-eye p-[13px] rounded bg-blue-500 text-white absolute right-0 bottom-0"></i>
                        </div>
                    </div>
                    <div class="py-1">
                        <button type="submit" class="px-4 py-2 bg-blue-500 shadow-lg rounded text-white font-semibold w-full hover:bg-cyan-500 transition-all duration-300">Login</button>
                    </div>
                </form>
                <h3 class="text-sm font-normal text-center pt-4">Don't have an account? <a class="text-red-800 font-semibold hover:text-blue-600" href="register.php">Register</a></h3>
                <h3 class="text-sm font-normal text-center"><a class="text-red-800 font-semibold hover:text-blue-600" href="">Forgot Password?</a></h3>
            </div>
        </div>
    </section>

    <script src="https://kit.fontawesome.com/c732b25177.js" crossorigin="anonymous"></script>
</body>
</html>
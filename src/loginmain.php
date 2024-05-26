<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-900">
    <section class="">
        <div class="">
            <div class="min-h-screen flex items-center justify-center">
                <div class="bg-gray-500 p-8 rounded shadow-md w-96">
                    <h2 class="text-2xl font-semibold mb-4 text-white">Log in</h2>
                    <form action="./handlersave.php" method="POST">
                        <div class="mb-4">
                            <span for="email" class="block text-white">Email</span>
                            <input type="email" id="email" name="email" class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-400" placeholder="Enter Your Email Address" required>
                        </div>
                        <div class="mb-4">
                            <span for="password" class="block text-white">Password</span>
                            <input type="password" id="password" name="password" class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-400" placeholder="Enter Your Password"  required>
                        </div>
                        <div class="mb-4 flex items-center">
                            <input type="checkbox" id="remember" name="remember" class="mr-2">
                            <label for="remember" class="text-white">Remember Me</label>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="w-full bg-yellow-500 text-white py-2 rounded-md hover:bg-blue-600">Log in</button>
                        </div>
                    </form>
                    <hr class="my-4">
                    <div>
                        <button class="w-full bg-red-500 text-white py-2  rounded-md hover:bg-red-600">Log in with Google</button>
                    </div>
                    <div class="text-center pt-3">
                        <a href="#"  target="_blank" class="text-yellow-400 hover:underline  ">Forgot password?</a>
                    </div>
                    <div class="block text-white text-center pt-2">
                        Don't have an Account?
                    </div>
                    <div class="py-4">
                        <button class="w-full bg-red-500 text-white py-2  rounded-md hover:bg-red-600">
                            <div class="text-center">
                                <a href="signupmain.php" class="">Sign Up</a>
                            </div>
                         </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>


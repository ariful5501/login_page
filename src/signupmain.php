<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-blue-900">
    <section class="">
        <div class="">
            <form action="./handler.php" method="POST">
                <div class="min-h-screen flex items-center justify-center ">
                    <div class="bg-gray-500 p-8 rounded shadow-md w-96">
                        <h2 class="text-2xl font-semibold mb-4 text-white">Sign Up</h2>
                        <div>
                            <button class="w-full bg-red-500 text-white py-2 rounded-md hover:bg-red-600">Sign Up with
                                Google</button>
                        </div>
                        <hr class="my-4">
                        <div class="mb-4">
                            <span for="username" class="block text-white">Name</span>
                            <input type="text" id="username" name="username"
                                class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-400"
                                placeholder="Enter Your Full Name" required>
                        </div>
                        <div class="mb-4">
                            <span for="email" class="block text-white">Email</span>
                            <input type="email" id="email" name="email"
                                class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-400"
                                placeholder="Enter Your Email Address" required>
                        </div>
                        <div class="mb-4">
                            <span for="password" class="block text-white">Password</span>
                            <input type="password" id="password" name="password"
                                class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-400"
                                placeholder="At least 8 caracters" required>
                        </div>
                        <div class="mb-4 flex items-center">
                            <input type="checkbox" id="terms" name="terms" class="mr-2">
                            <label for="terms" class="text-white">I accept the <a href="#"
                                    class="text-yellow-400 underline underline-offset-1 ">
                                    terms
                                </a> and
                                <a href="#" class="text-yellow-400 underline underline-offset-1 ">
                                    conditions
                                </a></label>
                        </div>
                        <div class="mb-4">
                            <button type="submit"
                                class="w-full bg-yellow-500 text-white py-2 rounded-md hover:bg-yellow-600">Sign
                                Up</button>
                        </div>
                        <hr class="mt-4">
                        <div class="block text-white text-center pt-2">
                            Already have an Account?
                        </div>
                        <div class="py-4">
                            <button class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-800">
                                <a href="./loginmain.php">Log In</a>
                            </button>
                        </div>


                    </div>
                </div>
            </form>

        </div>
    </section>
</body>

</html>
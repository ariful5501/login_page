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
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="min-h-screen flex items-center justify-center ">
                <div class="bg-gray-500 p-8 rounded shadow-md w-96">
                    <h2 class="text-2xl font-semibold mb-4 text-white">Sign Up</h2>
                    <form action="signup.php" method="POST">
                        <div class="mb-4">
                            <span for="username" class="block text-white">Name</span>
                            <input type="text" id="username" name="username" class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-400" placeholder="Enter Your Full Name" required>
                        </div>
                        <div class="mb-4">
                            <span for="email" class="block text-white">Email</span>
                            <input type="email" id="email" name="email" class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-400" placeholder="Enter Your Email Address"  required>
                        </div>
                        <div class="mb-4">
                            <span for="password" class="block text-white">Password</span>
                            <input type="password" id="password" name="password" class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-400" placeholder="At least 8 caracters" required>
                        </div>
                        <div class="mb-4 flex items-center">
                            <input type="checkbox" id="terms" name="terms" class="mr-2">
                            <span for="terms" class="text-white">I accept the <a href="#" class="text-yellow-400 underline underline-offset-1 ">
                                terms
                            </a> and 
                            <a href="#" class="text-yellow-400 underline underline-offset-1 ">
                                conditions
                            </a></span>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="w-full bg-yellow-500 text-white py-2 rounded-md hover:bg-blue-600">Sign Up</button>
                        </div>
                    </form>
                    <hr class="my-4">
                    <div>
                        <button class="w-full bg-red-500 text-white py-2 rounded-md hover:bg-red-600">Sign Up with Google</button>
                    </div>
                    <div class="block text-white text-center pt-2">
                        Already have an Account?
                    </div>
                    <div class="block text-yellow-400 text-xl font-black text-center pt-2 hover:text-yellow-700">
                        <a href="#"> Log in</a>
                    </div>
                </div>
            </div>
            <div class="min-h-screen flex items-center justify-center">
                <div class="bg-gray-500 p-8 rounded shadow-md w-96">
                    <h2 class="text-2xl font-semibold mb-4 text-white">Login</h2>
                    <form action="login.php" method="POST">
                        <div class="mb-4">
                            <span for="email" class="block text-white">Email Address</span>
                            <input type="email" id="email" name="email" class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-400" placeholder="Type Your Email Address" required>
                        </div>
                        <div class="mb-4">
                            <span for="password" class="block text-white">Password</span>
                            <input type="password" id="password" name="password" class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-400" placeholder="Type Your Password"  required>
                        </div>
                        <div class="mb-4 flex items-center">
                            <input type="checkbox" id="remember" name="remember" class="mr-2">
                            <span for="remember" class="text-white">Remember me</span>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="w-full bg-yellow-500 text-white py-2 rounded-md hover:bg-blue-600">Login</button>
                        </div>
                    </form>
                    <hr class="my-4">
                    <div>
                        <button class="w-full bg-red-500 text-white py-2  rounded-md hover:bg-red-600">Log in with Google</button>
                    </div>
                    <div class="text-center">
                        <a href="#" class="text-blue-500 hover:underline  ">Forgot password?</a>
                    </div>
                    <div class="block text-white text-center pt-2">
                        Don't have an Account?
                    </div>
                    <div class="block text-yellow-400 text-xl font-black text-center pt-2 hover:text-yellow-700">
                        <a href="#"> Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Process your form data here, e.g., save to database

    // For demonstration, let's just print the received data
    echo "<h1>Thank you for signing up!</h1>";
    echo "<p>Username: $username</p>";
    echo "<p>Email: $email</p>";
    // Do not display the password in real-life scenarios
}
?>
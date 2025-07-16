<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - SDMD Equipment Management System</title>
    <link rel="icon" href="{{ asset('images/icon.png') }}" sizes="any">
    <link href="https://cdn.jsdelivr.net/npm/boxicons/css/boxicons.min.css" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            background-color: #041643;
        }
    </style>
</head>

<body class="min-h-screen flex flex-col items-center justify-center font-sans">

<div class="flex w-full max-w-6xl mx-auto p-4 min-h-[80vh]">
    <!-- Left Section (Image + Text) -->
    <div class="w-1/2 relative flex flex-col justify-center px-8 text-white">
        <img src="{{ asset('images/backpic.png') }}" alt="Logo" class="absolute inset-0 w-full h-full object-contain opacity-10 pointer-events-none">

        <div class="relative z-10">
            <h1 class="text-4xl font-bold leading-snug">
                Login into <br>
                <span class="text-cyan-400">your account</span>
            </h1>
            <p class="mt-4 text-sm tracking-widest">SDMD Equipment Management System</p>
        </div>
    </div>

    <!-- Right Section (Login Form) -->
    <div class="w-1/2 flex items-center justify-center">
        <div class="bg-white rounded-lg p-8 shadow-xl w-full max-w-sm">
            <h2 class="text-gray-900 text-xl font-bold">Hello</h2>
            <p class="text-sm text-gray-600 mb-2 font-semibold">Welcome Back!</p>
            <h3 class="text-blue-900 text-lg font-semibold mb-4">Login your account</h3>

            <form>
                <!-- Email -->
                <div class="mb-4">
                    <label class="block text-sm text-gray-700">Email</label>
                    <input type="email" placeholder="Enter your email"
                           class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-400">
                </div>
                <!-- Password -->
                <div class="mb-4">
                    <label class="block text-sm text-gray-700">Password</label>
                    <div class="relative">
                        <input type="password" placeholder="Enter your password"
                               class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-400">
                        <i class='bx bx-hide absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 cursor-pointer'></i>
                    </div>
                </div>
                <!-- Remember Me + Forgot Password -->
                <div class="flex justify-between items-center mb-4 text-sm">
                    <label class="flex items-center text-gray-600">
                        <input type="checkbox" class="mr-2"> Remember Me
                    </label>
                    <a href="#" class="text-gray-600 underline">Forgot password?</a>
                </div>
                <!-- Login Button -->
                <button type="submit"
                        class="w-full bg-blue-900 hover:bg-blue-800 text-white py-2 rounded transition">Log in</button>
            </form>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="text-white text-xs text-center mt-6 px-4">
    Copyright © 2025. All Rights Reserved.
    <span class="mx-2">|</span>
    <a href="#" class="hover:underline">Terms of Use</a>
    <span class="mx-2">|</span>
    <a href="#" class="hover:underline">Privacy Policy</a>
</footer>

</body>

</html>


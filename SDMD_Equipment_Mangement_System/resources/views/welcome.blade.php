<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">



<head>



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - SDMD Equipment Management System</title>
    <link rel="icon" href="{{ asset('images/mesh_icon.png') }}" sizes="any">

    <!-- Custom styles for exact colors -->
    <style>
        .bg-gradient-custom {
            background: linear-gradient(to bottom, #1A2A44, #0F1A2A);
        }
        .text-custom-purple {
            color: #A78BFA;
        }
        .bg-custom-purple {
            background-color: #A78BFA;
        }
        .text-custom-dark {
            color: #1A2A44;
        }
        .text-custom-gray {
            color: #4A4A4A;
        }
        .bg-custom-dark {
            background-color: #1A2A44;
        }
    </style>

    <!-- Include Vite assets (Tailwind CSS and JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-custom flex flex-col min-h-screen">
<main class="flex flex-col lg:flex-row items-center justify-center flex-grow p-6">
    <!-- Left Section -->
    <div class="flex-1 p-6 relative">
        <!-- Decorative Circles -->
        <div class="absolute top-0 left-0 w-64 h-64 bg-custom-purple opacity-20 rounded-full"></div>
        <div class="absolute top-20 left-20 w-48 h-48 bg-custom-purple opacity-20 rounded-full"></div>
        <!-- Text -->
        <div class="relative z-10">
            <h1 class="text-5xl font-bold text-white">Login into <span class="text-custom-purple">your</span> account</h1>
            <p class="text-lg text-white mt-2">SDMD EQUIPMENT MANAGEMENT SYSTEM</p>
        </div>
    </div>

    <!-- Right Section (Login Form) -->
    <div class="w-full lg:w-96 p-6">
        <div class="bg-white p-6 rounded-lg shadow-md max-w-sm mx-auto">
            <h2 class="text-custom-dark text-2xl font-bold">Hello Back!</h2>
            <p class="text-custom-dark mt-2">Welcome back!</p>
            <form class="mt-4">
                <!-- Email Field -->
                <div class="mb-4">
                    <label class="text-custom-gray block text-sm">Email</label>
                    <input type="email" class="w-full p-2 border border-gray-300 rounded" placeholder="Enter your email">
                </div>
                <!-- Password Field -->
                <div class="mb-4">
                    <label class="text-custom-gray block text-sm">Password</label>
                    <div class="relative">
                        <input type="password" class="w-full p-2 border border-gray-300 rounded" placeholder="Enter your password">
                        <span class="absolute right-2 top-1/2 transform -translate-y-1/2 text-custom-gray cursor-pointer">👁️</span>
                    </div>
                </div>
                <!-- Remember Me and Forgot Password -->
                <div class="flex justify-between items-center mb-4">
                    <label class="flex items-center">
                        <input type="checkbox" class="mr-2">
                        <span class="text-custom-gray">Remember Me</span>
                    </label>
                    <a href="#" class="text-custom-gray text-sm underline">Forgot password?</a>
                </div>
                <!-- Login Button -->
                <button class="w-full py-2 rounded bg-custom-dark text-white">Log In</button>
            </form>
        </div>
    </div>
</main>

<!-- Footer -->
<footer class="text-center text-white text-sm py-2">
    COPYRIGHT © 2025 ALL RIGHTS RESERVED. |
    <a href="#" class="text-white hover:underline">TERMS OF USE</a> |
    <a href="#" class="text-white hover:underline">PRIVACY POLICY</a>
</footer>
</body>
</html>

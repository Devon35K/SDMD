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
            font-family: Arial, sans-serif;
            margin: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .left-section {
            flex: 1;
            position: relative;
            color: #fff;
            padding: 40px;
            text-align: center;
        }
        .left-section h1 {
            font-size: 2.5rem;
            font-weight: bold;
            line-height: 1.2;
        }
        .left-section span {
            color: #06b6d4;
        }
        .left-section p {
            font-size: 0.875rem;
            margin-top: 10px;
            letter-spacing: 2px;
        }
        .right-section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-card {
            background: #fff;
            border-radius: 15px;
            padding: 30px;
            width: 100%;
            max-width: 350px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .login-card h2 {
            font-size: 1.25rem;
            color: #1e293b;
            font-weight: bold;
        }
        .login-card p {
            font-size: 0.875rem;
            color: #64748b;
            margin: 5px 0;
        }
        .login-card h3 {
            font-size: 1rem;
            color: #1e40af;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .login-card input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #d1d5db;
            border-radius: 5px;
            font-size: 0.875rem;
        }
        .login-card .password-container {
            position: relative;
        }
        .login-card .password-container i {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            cursor: pointer;
        }
        .login-card .options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 10px 0;
            font-size: 0.75rem;
            color: #64748b;
        }
        .login-card button {
            width: 100%;
            padding: 10px;
            background-color: #1e40af;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 0.875rem;
            cursor: pointer;
        }
        .login-card button:hover {
            background-color: #1e3a8a;
        }
        footer {
            text-align: center;
            color: #fff;
            font-size: 0.75rem;
            padding: 10px;
        }
        footer a {
            color: #fff;
            text-decoration: underline;
            margin: 0 5px;
        }
    </style>
</head>

<body>
<div class="container">
    <!-- Left Section (Image + Text) -->
    <div class="left-section">
        <h1>Login into <br><span>your account</span></h1>
        <p>SDMD Equipment Management System</p>
    </div>

    <!-- Right Section (Login Form) -->
    <div class="right-section">
        <div class="login-card">
            <h2>Hello</h2>
            <p>Welcome Back!</p>
            <h3>Login your account</h3>

            <form>
                <!-- Email -->
                <div class="mb-4">
                    <label class="block text-sm text-gray-700">Email</label>
                    <input type="email" placeholder="Enter your email">
                </div>
                <!-- Password -->
                <div class="mb-4 password-container">
                    <label class="block text-sm text-gray-700">Password</label>
                    <input type="password" placeholder="Enter your password">
                    <i class='bx bx-hide'></i>
                </div>
                <!-- Remember Me + Forgot Password -->
                <div class="options">
                    <label>
                        <input type="checkbox"> Remember Me
                    </label>
                    <a href="#">Forgot password?</a>
                </div>
                <!-- Login Button -->
                <button type="submit">Log in</button>
            </form>
        </div>
    </div>
</div>

<!-- Footer -->
<footer>
    Copyright © 2025. All Rights Reserved. | <a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a>
</footer>
</body>

</html>

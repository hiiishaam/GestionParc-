<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ParcAutomobile</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        @import url('https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css');
        body {
            font-family: 'Figtree', sans-serif;
        }
        .background-image {
            background-image: url('images/background.jpg');
            background-size: cover;
            background-position: center;
        }
        .btn {
            background-color: transparent;
            border: 2px solid black;
            color: black;
            padding: 0.5rem 1rem;
            font-weight: bold;
            transition: background-color 0.3s, color 0.3s;
        }
        .btn:hover {
            background-color: black;
            color: white;
        }
    </style>
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50 background-image min-h-screen flex items-center justify-center">
    <div class="relative w-full max-w-lg p-6 bg-white bg-opacity-90 dark:bg-opacity-90 rounded-lg shadow-lg">
        <header class="text-center mb-6">
            <svg class="h-12 w-auto mx-auto text-black dark:text-[#FF2D20]" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- SVG Content -->
            </svg>
            <h1 class="text-3xl font-semibold text-black dark:text-white">Welcome to ParcAutomobile</h1>
        </header>
        <div class="flex justify-center space-x-4">
            <a href="{{ route('login') }}" class="btn">LOGIN</a>
            <a href="{{ route('register') }}" class="btn">REGISTER</a>
        </div>
    </div>
</body>
</html>

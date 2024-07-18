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
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Figtree', sans-serif;
            background-color: #f0f0f0;
            background-image: url('images/background.jpg');
            background-size: cover;
            background-position: center;
        }
        .container {
            display: flex;
            width: 600px;
            height: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: rgba(255, 255, 255, 0.5); /* Changed to 50% transparency */
            border-radius: 10px;
            overflow: hidden;
        }
        .left-side, .right-side {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            flex-direction: column;
        }
        .left-side {
            background-color: rgba(255, 255, 255, 1); /* Changed to 50% transparency */
        }
        .left-side h2 {
            margin-bottom: 20px;
            color: black;
        }
        .left-side input {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .left-side button {
            padding: 10px 20px;
            background-color: black;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .left-side button:hover {
            background-color: #333;
        }
        .right-side {
            background-color: rgba(31, 63, 86, 0.5); /* Changed to 50% transparency */
            color: #fff;
            text-align: center;
        }
        .right-side h2 {
            margin: 0;
        }
        .right-side h3 {
            margin: 10px 0;
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
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="container">
        <div class="left-side">
            <header class="text-center mb-6">
                <svg class="h-12 w-auto mx-auto text-black dark:text-[#FF2D20]" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <!-- SVG Content -->
                </svg>
                <h2>Welcome to ParcAutomobile</h2>
            </header>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="mb-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="block mb-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
                <div class="flex items-center justify-end mb-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    <x-primary-button class="ms-3">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
        <div class="right-side">
            <h2>Bienvenue</h2>
            <h3>dans notre application</h3>
            <h2>E~PARK</h2>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CapTrack</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans text-gray-900 min-h-screen flex flex-col">

    <header class="bg-white shadow">
        <div class="max-w-4xl mx-auto p-6 flex justify-between items-center">
            <h1 class="text-3xl font-bold text-blue-700">CapTrack</h1>
            <nav>
                <a href="{{ route('login') }}" class="text-blue-600 hover:underline mr-4">Login</a>
                <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Register</a>
            </nav>
        </div>
    </header>

    <main class="flex-grow max-w-4xl mx-auto p-6 flex flex-col justify-center items-center text-center">
        <h2 class="text-5xl font-extrabold mb-4">Welcome to CapTrack</h2>
        <p class="text-lg text-gray-700 mb-8">
            Your all-in-one Capstone Project Tracking & Scheduling System.
        </p>
        <a href="{{ route('register') }}" class="bg-blue-600 text-white px-6 py-3 rounded shadow hover:bg-blue-700 transition">
            Get Started
        </a>
    </main>

    <footer class="bg-white shadow mt-auto">
        <div class="max-w-4xl mx-auto p-6 text-center text-gray-500 text-sm">
            &copy; {{ date('Y') }} CapTrack. All rights reserved.
        </div>
    </footer>

</body>
</html>

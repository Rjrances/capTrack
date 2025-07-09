<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Register - CapTrack</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-center">Student Registration</h1>

        @if ($errors->any())
            <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <div>
                <label for="name" class="block font-medium mb-1">Name</label>
                <input id="name" name="name" type="text" required autofocus
                       value="{{ old('name') }}"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600" />
            </div>

            <div>
                <label for="email" class="block font-medium mb-1">School Email</label>
                <input id="email" name="email" type="email" required
                       placeholder="your_school_email@school.edu"
                       value="{{ old('email') }}"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600" />
                <p class="text-sm text-gray-500 mt-1">Please use your school email only</p>
            </div>

            <div>
                <label for="password" class="block font-medium mb-1">Password</label>
                <input id="password" name="password" type="password" required
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600" />
            </div>

            <div>
                <label for="password_confirmation" class="block font-medium mb-1">Confirm Password</label>
                <input id="password_confirmation" name="password_confirmation" type="password" required
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600" />
            </div>

            <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
                Register
            </button>
        </form>
    </div>
</body>
</html>

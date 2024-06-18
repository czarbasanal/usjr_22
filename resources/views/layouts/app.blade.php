<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>USJ-R Student Information</title>
</head>

<body class="bg-gray-100 text-gray-900">
    <nav class="bg-white p-4 shadow">
        <div class="container mx-auto">
            <div class="flex justify-center">
                <ul class="flex space-x-4">
                    <li><a class="{{ request()->is('show/students/all') ? 'text-blue-500' : 'text-gray-700' }}" href="{{ url('/show/students/all') }}">Students</a></li>
                    <li><a class="{{ request()->is('show/colleges') ? 'text-blue-500' : 'text-gray-700' }}" href="{{ url('/show/colleges') }}">Colleges</a></li>
                    <li><a class="{{ request()->is('show/departments') ? 'text-blue-500' : 'text-gray-700' }}" href="{{ url('/show/departments') }}">Departments</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mx-auto mt-5">
        @yield('content')
    </div>

    @vite('resources/js/app.js')
</body>

</html>
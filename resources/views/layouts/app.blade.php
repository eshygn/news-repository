<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li>
                <a href="" class="p-3">Home</a>
            </li>
            <li><a href="" class="p-3">Dashboard</a></li>
        </ul>

        <ul class="flex items-center">
            @auth
                {{-- if user signed in show below if not show @guest part --}}
                <li>
                    <a href="" class="p-3">Profile</a>
                </li>
                <li><a href="" class="p-3">Logout</a></li>
            @endauth
            @guest
                <li><a href="{{ route('login') }}" class="p-3">Login</a></li>
                <li><a href="{{ route('register') }}" class="p-3">Register</a></li>
            @endguest
        </ul>
    </nav>
    @yield('content')

</body>

</html>

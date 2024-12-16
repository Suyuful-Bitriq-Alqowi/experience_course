<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Experience')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <!-- Navbar -->
    <nav class="bg-white shadow-md py-4">
        <div class="container mx-auto flex justify-between items-center px-6">
            <!-- Logo -->
            <div class="text-2xl font-bold text-gray-800 hover:text-blue-600 transition duration-300">
                <a href="/">Experience.</a>
            </div>

            <!-- Menu -->
            <div class="hidden md:flex space-x-8">
                <a href="/" class="text-gray-700 hover:text-blue-600 transition duration-300">Home</a>
                <a href="/courses" class="text-gray-700 hover:text-blue-600 transition duration-300">Courses</a>
                <a href="/contact" class="text-gray-700 hover:text-blue-600 transition duration-300">Contact</a>
            </div>

            @guest
                <!-- Auth Buttons (for guests) -->
                <div class="flex items-center space-x-4">
                    <a href="{{ route('login') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-700 transition duration-300">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="bg-gray-100 text-blue-600 px-4 py-2 rounded-lg shadow-md hover:bg-gray-200 transition duration-300">
                        Register
                    </a>
                </div>
            @endguest

            @auth
                <!-- Authenticated Navbar (for logged in users) -->
                <div class="flex items-center space-x-4">
                    <!-- Logout Button -->
                    <a href="{{ route('logout') }}" 
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                       class="text-red-600 hover:text-red-800 transition duration-300">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>

                    <!-- Profile Image (Simple Circle without route) -->
                    <img src="https://i.pinimg.com/originals/d6/ce/15/d6ce15f247d94bde7d2d8fb5fb7d4c3c.png" 
                         alt="Profile" class="w-8 h-8 rounded-full border-2 border-gray-300">
                </div>
            @endauth

            <!-- Hamburger Menu (Mobile) -->
            <button id="menu-toggle" class="block md:hidden text-gray-700 focus:outline-none">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>

        <!-- Dropdown Menu (for Mobile) -->
        <div id="mobile-menu" class="hidden md:hidden">
            <div class="flex flex-col space-y-2 mt-4 px-6">
                <a href="/" class="text-gray-700 hover:text-blue-600 transition duration-300">Home</a>
                <a href="/courses" class="text-gray-700 hover:text-blue-600 transition duration-300">Courses</a>
                <a href="/contact" class="text-gray-700 hover:text-blue-600 transition duration-300">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <x-footer></x-footer>
</body>
</html>

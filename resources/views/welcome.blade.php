<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BhSystem</title>
    <script src="https://cdn.tailwindcss.com"></script>
      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <style>
            header{
                background-image: url('storage/rooms/logo.jpg');
            }
        </style>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <!-- Navigation Bar -->
    <nav class="bg-white shadow-lg">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center bg-orange-700">
            <div class="text-2xl font-semibold font-serif text-white">BoardingHouse Booking System</div>
            
            
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-cover bg-center h-screen"
     >
        <div class="bg-black bg-opacity-50 h-full flex items-center justify-center">
            <div class="text-center text-white">
                <h1 class="text-4xl md:text-6xl font-bold mb-4">Find Your Perfect Stay</h1>
                <p class="text-lg mb-8">Experience comfort, convenience, and affordability.</p>
                <a href="{{route('login')}}"
                    class="bg-orange-600 px-6 py-3 rounded-lg text-lg font-medium hover:bg-orange-700 transition">Book
                    Now</a>
            </div>
        </div>
    </header>

    <!-- Features Section -->
    <section id="features" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Why Choose Us?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="p-6 bg-white shadow-lg rounded-lg">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Comfortable Rooms</h3>
                    <p>Spacious and well-maintained rooms to suit all your needs.</p>
                </div>
                <!-- Feature 2 -->
                <div class="p-6 bg-white shadow-lg rounded-lg">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-wallet"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Affordable Rates</h3>
                    <p>Great prices that fit your budget without compromising quality.</p>
                </div>
                <!-- Feature 3 -->
                <div class="p-6 bg-white shadow-lg rounded-lg">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-location-arrow"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Prime Locations</h3>
                    <p>Close to schools, offices, and public transport for easy access.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 py-8">
        <div class="container mx-auto px-4 text-center text-orange-400">
            <p>&copy; 2024 BoardingHouse. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>

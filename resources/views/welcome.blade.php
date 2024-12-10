<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TACLOBAN TOURIST DESTINATIONS VR TOUR EXPERIENCE</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans leading-normal tracking-normal">

    <!-- Navbar -->
    <nav class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-gray-700">TACLOBAN VR TOUR</h1>

            <!-- Authentication Links -->
            @if (Route::has('login'))
                <div class="-mx-3 flex flex-1 justify-end space-x-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-black hover:text-[#FF2D20] transition duration-300">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-black hover:text-[#FF2D20] transition duration-300">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-black hover:text-[#FF2D20] transition duration-300">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>

    <!-- Hero Section with Custom Background Image -->
    <section class="flex items-center justify-center bg-cover bg-center h-screen" style="background-image: url('https://i0.wp.com/www.projectlupad.com/wp-content/uploads/2020/04/Longest-Bridge-in-the-Philippines-Connecting-Samar-and-Leyte-Aerial-View-Project-LUPAD-3-1.jpg?resize=1536%2C864&ssl=1');">
        <div class="text-center text-white bg-black bg-opacity-50 p-6 rounded-lg">
            <h2 class="text-5xl font-semibold mb-4">Welcome to Tacloban's VR Tour</h2>
            <p class="text-xl mb-8">Experience Tacloban's beautiful tourist destinations like never before with our immersive 360° VR tour.</p>
            <a href="#explore" class="bg-[#FF2D20] text-white rounded-full py-2 px-6 text-lg hover:bg-[#ff5722] transition-all duration-300">Start Your Journey</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="explore" class="container mx-auto py-16 px-4 text-center">
        <h2 class="text-3xl font-semibold text-gray-700 mb-6">Explore Tacloban</h2>
        <p class="text-xl text-gray-500 mb-8">Discover stunning landmarks, cultural sites, and historical destinations through an immersive virtual reality experience. Explore the beauty of Tacloban from the comfort of your own home.</p>
        
        <!-- Sample Features or Tourist Spots -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="https://www.example.com/your-image-1.jpg" alt="Spot 1" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-700">Tourist Spot 1</h3>
                    <p class="text-gray-500 mt-2">Experience this famous landmark through our VR tour.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="https://www.example.com/your-image-2.jpg" alt="Spot 2" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-700">Tourist Spot 2</h3>
                    <p class="text-gray-500 mt-2">A breathtaking view of the natural wonders of Tacloban.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="https://www.example.com/your-image-3.jpg" alt="Spot 3" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-700">Tourist Spot 3</h3>
                    <p class="text-gray-500 mt-2">Step into Tacloban’s rich cultural heritage through VR.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 TACLOBAN VR TOUR. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>

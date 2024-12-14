<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TACLOBAN TOURIST DESTINATIONS VR TOUR EXPERIENCE</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</head>
<body class="bg-gray-50 font-sans leading-normal tracking-normal">

    <!-- Navbar -->
    <nav class="bg-white shadow-md px-8 py-6">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-semibold text-gray-900">Tacloban VR Tour</h1>
            <div class="flex space-x-8">
                <a href="{{ route('login') }}" class="text-gray-900 hover:text-[#FF2D20] transition duration-300">Log in</a>
                <a href="{{ route('register') }}" class="text-gray-900 hover:text-[#FF2D20] transition duration-300">Register</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Carousel -->
    <section id="explore" class="bg-gray-100 py-12">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-semibold text-gray-800">Explore Tacloban's Best Destinations</h2>
        <p class="text-gray-600 mt-4">Discover the beauty of Tacloban through our curated list of destinations with immersive VR tours.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-10">
            <!-- Destination Card 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <iframe 
                        src="https://cdn.pannellum.org/2.5/pannellum.htm#panorama=https://pannellum.org/images/lascar.jpg&amp;autoLoad=true" 
                        loading="lazy"
                        allowfullscreen  
                        frameborder="0" 
                        class="w-full h-80">
                    </iframe>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800">San Juanico Bridge</h3>
                    <p class="text-gray-600 mt-2">The iconic San Juanico Bridge offers breathtaking views and connects Leyte and Samar.</p>
                </div>
            </div>

            <!-- Destination Card 2 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <iframe 
                        src="https://cdn.pannellum.org/2.5/pannellum.htm#panorama=https://pannellum.org/images/lascar.jpg&amp;autoLoad=true" 
                        loading="lazy"
                        allowfullscreen  
                        frameborder="0" 
                        class="w-full h-80">
                    </iframe>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800">Tacloban City Hall</h3>
                    <p class="text-gray-600 mt-2">A historical landmark showcasing Tacloban's rich cultural heritage.</p>
                </div>
            </div>

            <!-- Destination Card 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <iframe 
                        src="https://cdn.pannellum.org/2.5/pannellum.htm#panorama=https://pannellum.org/images/lascar.jpg&amp;autoLoad=true" 
                        loading="lazy"
                        allowfullscreen  
                        frameborder="0" 
                        class="w-full h-80">
                    </iframe>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800">Sto. Niño Shrine</h3>
                    <p class="text-gray-600 mt-2">The Santo Niño Shrine and Heritage Museum, colloquially referred to as the Imelda Marcos Museum, is a building in Tacloban, the Philippines.</p>
                </div>
            </div>
        </div>

        <a href="{{ route('login') }}" class="mt-8 inline-block px-8 py-3 text-white bg-[#FF2D20] rounded-full hover:bg-red-600 transition duration-300">
            See All Destinations
        </a>
    </div>
</section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12 text-center">
        <p class="text-lg">© 2024 Tacloban VR Tour. All rights reserved.</p>
    </footer>

</body>
</html>

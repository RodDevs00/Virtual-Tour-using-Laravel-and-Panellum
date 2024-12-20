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
    <section id="explore" class="bg-gray-100 py-12" x-data="carousel()">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-semibold text-gray-800">Explore Tacloban's Best Destinations</h2>
            <p class="text-gray-600 mt-4">Discover the beauty of Tacloban through our curated list of destinations with immersive VR tours.</p>
          
          
            <div class="relative mt-10">
    <!-- Carousel Container -->
    <div class="flex justify-center items-center space-x-6 overflow-visible">
    <template x-for="(card, index) in cards" :key="index">
        <div class="relative flex-shrink-0 transform transition-transform duration-500 cursor-pointer"
             :class="{'scale-110 z-10': selected === index, 'scale-100': selected !== index}"
             @mouseenter="selected = index">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden w-80">
                <iframe
                    :src="card.src"
                    loading="lazy"
                    allowfullscreen
                    frameborder="0"
                    class="w-full h-80">
                </iframe>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800" x-text="card.title"></h3>
                    <p class="text-gray-600 mt-2" x-text="card.description"></p>
                </div>
            </div>
        </div>
    </template>
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

    <script>
    function carousel() {
    return {
        selected: 1, // Set this to the middle card index (0-based)
        interval: null,
        cards: [
            {
                title: "San Juanico Bridge",
                description: "The iconic San Juanico Bridge offers breathtaking views and connects Leyte and Samar.",
                src: "https://cdn.pannellum.org/2.5/pannellum.htm#panorama=https://pannellum.org/images/lascar.jpg&autoLoad=true",
            },
            {
                title: "Tacloban City Hall",
                description: "A historical landmark showcasing Tacloban's rich cultural heritage.",
                src: "https://cdn.pannellum.org/2.5/pannellum.htm#panorama=https://pannellum.org/images/lascar.jpg&autoLoad=true",
            },
            {
                title: "Sto. Niño Shrine",
                description: "The Santo Niño Shrine and Heritage Museum is a historical building in Tacloban.",
                src: "https://cdn.pannellum.org/2.5/pannellum.htm#panorama=https://pannellum.org/images/lascar.jpg&autoLoad=true",
            },
        ],
        init() {
            this.startAutoRotation();
        },
        startAutoRotation() {
            this.interval = setInterval(() => {
                this.selected = (this.selected + 1) % this.cards.length;
            }, 5000);
        },
        stopAutoRotation() {
            clearInterval(this.interval);
        },
    };
}


    </script>
</body>
</html>

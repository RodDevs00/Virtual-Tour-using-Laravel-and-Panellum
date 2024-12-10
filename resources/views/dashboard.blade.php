<x-app-layout>
    <!-- Include Vite and FontAwesome -->
    @vite(['resources/js/script.js'])
    <link 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" 
        rel="stylesheet"
    >
    <link 
        rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-dyTf1+uIO1bU5FYNStBlB1J8QVyzMbNjG+4HhU54UocdrI1a0LbBUzz8A1JsTVA48O7sy3I+wL+m9pAvb+BFaw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />

    <!-- CSS Styling -->
    <style>
        /* Default color for stars */
        .star-rating i,
        #average-rating i {
            color: gray;
            font-size: 24px;
        }

        /* Highlighted stars */
        .star-rating i.text-yellow-500,
        #average-rating i.text-yellow-500 {
            color: gold;
        }
    </style>

    <!-- Header Section -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-full mx-auto px-4 lg:px-8">
            <!-- Greeting and Search Card -->
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6 max-w-5xl mx-auto">
    <div class="p-4 text-gray-900 flex justify-between items-center">
        <!-- Greeting -->
        <div>
            {{ __("Hello, ") }}<span class="font-bold">{{ Auth::user()->name }}</span>
        </div>

        <!-- Search Bar -->
        <div class="flex items-center space-x-3">
            <div class="relative">
                <i class="fas fa-search text-gray-500 absolute left-3 top-1/2 transform -translate-y-1/2"></i>
                <input 
                    type="text" 
                    id="search-input" 
                    class="w-full p-2 pl-10 pr-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-200 ease-in-out hover:border-blue-400"
                    placeholder="Search..."
                >
            </div>
        </div>
    </div>
</div>


            <!-- Full-Width Panellum Card -->
            <div class="bg-white border rounded-lg shadow-lg w-full mb-6">
                <div class="p-6" data-title="Panorama Full View" data-description="Immerse yourself in a full-width panoramic experience.">
                    <!-- Header -->
                    <div class="flex justify-between items-center">
                        <!-- Title -->
                        <h3 class="text-2xl font-semibold">
                            San Juanico Bridge
                        </h3>
                        <!-- Average Rating -->
                        <div class="flex items-center space-x-1" id="average-rating">
                            <i class="fas fa-star text-gray-400"></i>
                            <i class="fas fa-star text-gray-400"></i>
                            <i class="fas fa-star text-gray-400"></i>
                            <i class="fas fa-star text-gray-400"></i>
                            <i class="fas fa-star text-gray-400"></i>
                            <span id="average-text" class="text-sm text-gray-600 ml-2">(0 ratings)</span>
                        </div>
                    </div>

                    <!-- Description -->
                    <p class="text-gray-600 mt-4">
                        Enjoy an immersive and interactive panoramic experience with this full-width viewer.
                    </p>

                    <!-- Panellum Viewer -->
                    <div class="mt-6" style="height: 500px; overflow: hidden;">
                        <iframe 
                            src="https://cdn.pannellum.org/2.5/pannellum.htm#panorama=https://pannellum.org/images/lascar.jpg&amp;autoLoad=true" 
                            loading="lazy"
                            allowfullscreen  
                            frameborder="0" 
                            class="w-full h-full"
                            style="padding: 0; border: none;">
                        </iframe>
                    </div>

                    <!-- Toggle Button for Reviews and Rating -->
                    <button class="text-blue-500 mt-4 toggle-reviews-rate-btn" data-target="reviews-rate-section-full">
                        Rate & Reviews
                    </button>

                    <!-- Reviews and Rating Section -->
                    <div id="reviews-rate-section-full" class="reviews-rate-section mt-4 hidden">
                        <!-- Star Rating -->
                        <div>
                            <h4 class="text-lg font-semibold">Rate this Panorama</h4>
                            <div class="flex space-x-1 star-rating" data-rating="0">
                                <i class="fas fa-star text-gray-400 cursor-pointer" data-value="1"></i>
                                <i class="fas fa-star text-gray-400 cursor-pointer" data-value="2"></i>
                                <i class="fas fa-star text-gray-400 cursor-pointer" data-value="3"></i>
                                <i class="fas fa-star text-gray-400 cursor-pointer" data-value="4"></i>
                                <i class="fas fa-star text-gray-400 cursor-pointer" data-value="5"></i>
                            </div>
                            <input type="hidden" id="rating-value" name="rating-value" value="0">
                        </div>

                        <!-- Write a Review -->
                        <div class="mt-4">
                            <h4 class="text-lg font-semibold">Write a Review</h4>
                            <textarea class="w-full p-3 border rounded mt-2" rows="3" placeholder="Write your review here..."></textarea>
                            <button class="bg-blue-500 text-white p-3 rounded mt-3 w-full">
                                Post Review
                            </button>
                        </div>

                        <!-- Reviews Display -->
                        <div id="review-display-full" class="mt-6">
                            <div class="border-t pt-4">
                                <p class="text-sm text-gray-600"><strong>John Doe:</strong> What a fantastic view!</p>
                                <p class="text-sm text-gray-600"><strong>Jane Smith:</strong> Simply breathtaking!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

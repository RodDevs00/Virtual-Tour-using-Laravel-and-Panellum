<x-app-layout>
    <!-- Include Vite and FontAwesome -->
    @vite(['resources/js/script.js','resources/css/style.css'])
    <link 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" 
        rel="stylesheet"
    >

    <style>
.hidden {
    display: none; /* Removes the card from the layout */
}



</style>

    <x-slot name="header">
    <div class="text-center">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Tacloban Day Out') }}
        </h2>
        <p class="text-lg text-gray-600 mt-2">
            {{ __('Choose a Destination to Explore') }}
        </p>
    </div>
</x-slot>


<div class="py-12">
    <div class="w-full mx-auto px-4 lg:px-8">

     <!-- Greeting and Search Card -->
     <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6 max-w-full mx-auto">
            <div class="p-4 text-gray-900 flex justify-between items-center mb-6">
                <div>{{ __("Hello, ") }}<span class="font-bold">{{ Auth::user()->name }}</span></div>
                <div class="flex items-center space-x-3">
                    <div class="relative">
                        <i class="fas fa-search text-gray-500 absolute left-3 top-1/2 transform -translate-y-1/2"></i>
                        <input 
                            type="text" 
                            id="search-input" 
                            class="w-full p-2 pl-10 pr-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-200 ease-in-out hover:border-blue-400"
                            placeholder="Search...">
                    </div>
                </div>
            </div>


      
        <!-- Grid Layout for Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="cards-container">
        <div class="panellum-card">
    <div class="viewer-container">
        <iframe 
            src="https://cdn.pannellum.org/2.5/pannellum.htm#panorama=https%3A//i.imgur.com/hE7LBg3.jpeg&autoLoad=true" 
            loading="lazy"
            allowfullscreen  
            frameborder="0" 
            class="w-full h-full">
        </iframe>
    </div>
    <div class="content">
        <h3 class="card-title">San Juanico Bridge</h3>
        <div>
            <div class="flex items-center">
                <div class="flex items-center space-x-1 average-rating">
                    <!-- Star rating will be updated dynamically -->
                </div>
                <span class="text-sm ml-2 rating-count">(4 ratings)</span> <!-- Added ml-2 for spacing -->
            </div>
            <button 
                class="text-white mt-4 toggle-reviews-rate-btn" 
                id="open-modal-btn"
                data-card-title="San Juanico Bridge">
                Rate & Reviews
            </button>
        </div>
    </div>
</div>

<!-- Second Card -->
<div class="panellum-card">
    <div class="viewer-container">
        <iframe 
            src="https://cdn.pannellum.org/2.5/pannellum.htm#panorama=https%3A//i.imgur.com/wB4hnUG.jpeg&amp;autoLoad=true" 
            loading="lazy"
            allowfullscreen  
            frameborder="0" 
            class="w-full h-full">
        </iframe>
    </div>
    <div class="content">
        <h3 class="card-title">Rizal Park Tacloban City</h3>
        <div>
            <div class="flex items-center">
                <div class="flex items-center space-x-1 average-rating">
                    <!-- Star rating will be updated dynamically -->
                </div>
                <span class="text-sm ml-2 rating-count">(4 ratings)</span> <!-- Added ml-2 for spacing -->
            </div>
            <button 
                class="text-white mt-4 toggle-reviews-rate-btn" 
                id="open-modal-btn"
                data-card-title="Rizal Park">
                Rate & Reviews
            </button>
        </div>
    </div>
</div>



<!-- 3rd Card -->
<div class="panellum-card">
    <div class="viewer-container">
        <iframe 
            src="https://aimthree.bitbucket.io/capitol/" 
            loading="lazy"
            allowfullscreen  
            frameborder="0" 
            class="w-full h-full">
        </iframe>
    </div>
    <div class="content">
        <h3 class="card-title">Leyte Provincial Capitol (Old)</h3>
        <div>
            <div class="flex items-center">
                <div class="flex items-center space-x-1 average-rating">
                    <!-- Star rating will be updated dynamically -->
                </div>
                <span class="text-sm ml-2 rating-count">(4 ratings)</span> <!-- Added ml-2 for spacing -->
            </div>
            <button 
                class="text-white mt-4 toggle-reviews-rate-btn" 
                id="open-modal-btn"
                data-card-title="Leyte Provincial Capitol (Old)">
                Rate & Reviews
            </button>
        </div>
    </div>
</div>

<!-- 4th Card -->
<div class="panellum-card">
    <div class="viewer-container">
        <iframe 
            src="https://aimthree.bitbucket.io/stoninochurch/" 
            loading="lazy"
            allowfullscreen  
            frameborder="0" 
            class="w-full h-full">
        </iframe>
    </div>
    <div class="content">
        <h3 class="card-title">Sto. Niño Church</h3>
        <div>
            <div class="flex items-center">
                <div class="flex items-center space-x-1 average-rating">
                    <!-- Star rating will be updated dynamically -->
                </div>
                <span class="text-sm ml-2 rating-count">(4 ratings)</span> <!-- Added ml-2 for spacing -->
            </div>
            <button 
                class="text-white mt-4 toggle-reviews-rate-btn" 
                id="open-modal-btn"
                data-card-title="Sto. Niño Church">
                Rate & Reviews
            </button>
        </div>
    </div>
</div>
        <!--  -->
    </div>


        </div>

 

       

</div>



</div><!-- Modal for Rate and Reviews -->
<div id="review-modal" class="modal fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50 hidden">
    <div class="modal-content bg-white rounded-lg p-6 max-w-md w-full">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-xl font-semibold text-gray-800" id="modal-card-title">Rate & Review</h3>
            <span id="close-modal-btn" class="text-gray-800 text-3xl font-bold cursor-pointer">&times;</span>
        </div>

       

        <!-- Star Rating -->
        <div>
            <h4 class="text-lg font-semibold text-gray-800">Rate this Panorama</h4>
            <div class="flex space-x-1 star-rating" data-rating="0">
                <i class="fas fa-star text-gray-400 cursor-pointer" data-value="1"></i>
                <i class="fas fa-star text-gray-400 cursor-pointer" data-value="2"></i>
                <i class="fas fa-star text-gray-400 cursor-pointer" data-value="3"></i>
                <i class="fas fa-star text-gray-400 cursor-pointer" data-value="4"></i>
                <i class="fas fa-star text-gray-400 cursor-pointer" data-value="5"></i>
            </div>
        </div>

                        <!-- Review Display Container -->
        <div id="reviews-container" class="mt-4">
            <!-- Reviews will be inserted here -->
            <div id="reviews-list" class="max-h-60 overflow-y-auto"></div> <!-- Set a max height and make it scrollable -->
            <button id="see-more-btn" class="text-blue-500 mt-4 hidden">See More</button>
            <button id="see-less-btn" class="text-blue-500 mt-4 hidden">See Less</button>
        </div>



        <!-- Review Text Area -->
        <div>
            <h4 class="text-lg font-semibold text-gray-800 mt-4">Leave a Review</h4>
            <textarea id="review-text" placeholder="Write your review here..." rows="4" class="resize-none"></textarea>
        </div>

        <!-- Submit Button -->
        <button class="w-full bg-blue-500 text-white py-2 rounded mt-6" id="submit-review-btn">Submit Review</button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    const panoramaCards = document.querySelectorAll('.panellum-card');

    panoramaCards.forEach(card => {
        const destinationTitle = card.querySelector('.card-title').textContent.trim();

        fetch(`/reviews/${encodeURIComponent(destinationTitle)}`)
            .then(response => response.json())
            .then(reviews => {
                const averageRatingElement = card.querySelector('.average-rating');
                const ratingCountElement = card.querySelector('.rating-count');

                if (reviews.length > 0) {
                    const totalRating = reviews.reduce((sum, review) => sum + review.rating, 0);
                    const averageRating = (totalRating / reviews.length).toFixed(1);

                    const fullStars = Math.floor(averageRating);
                    const emptyStars = 5 - fullStars;

                    let starsHtml = '';
                    for (let i = 0; i < fullStars; i++) {
                        starsHtml += '<i class="fas fa-star text-yellow-500"></i>';
                    }
                    for (let i = 0; i < emptyStars; i++) {
                        starsHtml += '<i class="fas fa-star text-gray-400"></i>';
                    }
                    averageRatingElement.innerHTML = starsHtml;

                    // Update the rating count next to the stars
                    ratingCountElement.textContent = `(${reviews.length} ratings)`;
                } else {
                    averageRatingElement.innerHTML = '<i class="fas fa-star text-gray-400"></i>'.repeat(5);
                    ratingCountElement.textContent = '(0 ratings)';
                }
            })
            .catch(error => {
                console.error('Error fetching reviews:', error);
            });
    });
});

// Search functionality
const searchInput = document.getElementById('search-input');
const cardsContainer = document.getElementById('cards-container');
const cards = cardsContainer.getElementsByClassName('panellum-card');

searchInput.addEventListener('input', function () {
    const query = searchInput.value.toLowerCase();
    
    Array.from(cards).forEach(card => {
        const cardTitle = card.querySelector('.card-title').textContent.toLowerCase();
        // Add or remove the 'hidden' class based on the search query
        if (cardTitle.includes(query)) {
            card.classList.remove('hidden');
        } else {
            card.classList.add('hidden');
        }
    });
});



// Modal toggle functionality
const openModalBtns = document.querySelectorAll('#open-modal-btn');
const modal = document.getElementById('review-modal');
const closeModalBtn = document.getElementById('close-modal-btn');
const reviewsContainer = document.getElementById('reviews-container');  // Reviews container

openModalBtns.forEach(button => {
 button.addEventListener('click', function () {
     const cardTitle = this.getAttribute('data-card-title');
     document.getElementById('modal-card-title').textContent = `Rate & Review: ${cardTitle}`;
     
     fetch(`/reviews/${cardTitle}`)
 .then(response => response.json())
 .then(reviews => {
     const maxReviewsToShow = 3; // Number of reviews to show initially
     const maxReviewsOnSeeMore = 9999; // Number of reviews to show when "See More" is clicked
     const reviewsContainer = document.getElementById('reviews-list');
     const seeMoreBtn = document.getElementById('see-more-btn');
     const seeLessBtn = document.getElementById('see-less-btn');
     
     let reviewsHtml = '';
     let reviewsToDisplay = reviews.slice(0, maxReviewsToShow);
     let remainingReviews = reviews.slice(maxReviewsToShow, maxReviewsOnSeeMore);

     // Function to render reviews
     const renderReviews = (reviews) => {
         reviewsHtml = '';
         reviews.forEach(review => {
             const stars = Array.from({ length: 5 }, (_, index) => 
                 index < review.rating ? '★' : '☆'
             ).join('');
             reviewsHtml += `
                 <div class="review mb-4">
                     <div class="flex items-center space-x-1">
                         <span class="text-yellow-500">${stars}</span>
                         <span class="text-sm">by ${review.user.name}</span>
                     </div>
                     <p class="mt-2">${review.review}</p>
                 </div>
             `;
         });
         reviewsContainer.innerHTML = reviewsHtml;
     };

     // Render initial reviews
     renderReviews(reviewsToDisplay);

     // Show "See More" or "See Less" buttons based on remaining reviews
     if (reviews.length > maxReviewsToShow) {
         seeMoreBtn.classList.remove('hidden');
     }
     seeLessBtn.classList.add('hidden'); // Initially hidden

     // Add event listener for "See More"
     seeMoreBtn.addEventListener('click', function () {
         // Add remaining reviews to the list
         renderReviews([...reviewsToDisplay, ...remainingReviews]);
         seeMoreBtn.classList.add('hidden');
         seeLessBtn.classList.remove('hidden');
     });

     // Add event listener for "See Less"
     seeLessBtn.addEventListener('click', function () {
         renderReviews(reviewsToDisplay); // Show only initial reviews
         seeMoreBtn.classList.remove('hidden');
         seeLessBtn.classList.add('hidden');
     });
 })
 .catch(error => {
     console.error('Error fetching reviews:', error);
     reviewsContainer.innerHTML = '<p class="text-red-500">Error fetching reviews.</p>';
 });

  // Show modal
     modal.style.display = 'flex';  // Show the modal
 });
});




 closeModalBtn.addEventListener('click', function () {
     // Hide modal
     modal.style.display = 'none'; // This hides the modal
 });

 // Rating stars functionality
 const stars = document.querySelectorAll('.modal .star-rating i');
 
 stars.forEach(star => {
     star.addEventListener('click', function () {
         const rating = parseInt(this.getAttribute('data-value'));
         const currentStars = this.parentElement;
         const allStars = currentStars.querySelectorAll('i');
         
         allStars.forEach((star, index) => {
             if (index < rating) {
                 star.classList.add('text-yellow-500');
                 star.classList.remove('text-gray-400');
             } else {
                 star.classList.add('text-gray-400');
                 star.classList.remove('text-yellow-500');
             }
         });

         currentStars.setAttribute('data-rating', rating);
     });
 });

 // Submit review

    // Submit review
const submitReviewBtn = document.getElementById('submit-review-btn');

submitReviewBtn.addEventListener('click', function () {
 const rating = parseInt(document.querySelector('.modal .star-rating').getAttribute('data-rating'));
 const reviewText = document.getElementById('review-text').value.trim();
 const destination = document.getElementById('modal-card-title').textContent.replace("Rate & Review: ", "");

 if (rating && reviewText) {
     const data = {
         rating: rating,
         review: reviewText,
         destination: destination,
     };

     // Send the AJAX request
     fetch("{{ route('reviews.store') }}", {
         method: 'POST',
         headers: {
             'Content-Type': 'application/json',
             'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
         },
         body: JSON.stringify(data)
     })
     .then(response => response.json())
     .then(data => {
         if (data.message === 'Review submitted successfully!') {
             alert('Review submitted successfully!');
             modal.style.display = 'none'; // Close modal after submission
         } else {
             alert('Failed to submit review. Please try again.');
         }
     })
     .catch(error => {
         console.error('Error:', error);
         alert('An error occurred. Please try again later.');
     });
 } else {
     alert('Please fill out the review text and rating.');
 }
});
</script>

</x-app-layout>

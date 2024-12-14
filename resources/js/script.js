

document.addEventListener("DOMContentLoaded", function () {
    // Toggle reviews and rating section visibility
    const toggleButtons = document.querySelectorAll(".toggle-reviews-rate-btn");
    toggleButtons.forEach((btn) => {
        btn.addEventListener("click", function () {
            const target = document.getElementById(btn.dataset.target);
            target.classList.toggle("hidden");
        });
    });


    // Handle review posting
    const postReviewButtons = document.querySelectorAll(".post-review-btn");
    postReviewButtons.forEach((btn) => {
        btn.addEventListener("click", function () {
            const target = document.getElementById(btn.dataset.target);
            const textarea = btn.previousElementSibling;
            const reviewText = textarea.value.trim();

            if (reviewText) {
                // Create new review element
                const newReview = document.createElement("p");
                newReview.classList.add("text-sm", "text-gray-600");
                newReview.innerHTML = `<strong>You:</strong> ${reviewText}`;
                
                // Add to reviews display
                target.appendChild(newReview);

                // Clear textarea
                textarea.value = "";
            }
        });
    });
});

    // Search functionality
    document.getElementById('search-input').addEventListener('input', function() {
        const searchText = this.value.toLowerCase();
        const cards = document.querySelectorAll('.card');
        cards.forEach(card => {
            const title = card.querySelector('h3').textContent.toLowerCase();
            const description = card.querySelector('p').textContent.toLowerCase();
            if (title.includes(searchText) || description.includes(searchText)) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    });


    document.addEventListener("DOMContentLoaded", function () {
        const stars = document.querySelectorAll(".star-rating i");
        const ratingInput = document.getElementById("rating-value");
        const averageStars = document.querySelectorAll("#average-rating i");
        const averageText = document.getElementById("average-text");

        // Mock backend data for average rating and number of ratings
        let totalRating = 0;
        let totalUsers = 0;

        stars.forEach((star) => {
            // Add hover effect
            star.addEventListener("mouseover", function () {
                const rating = this.getAttribute("data-value");
                highlightStars(rating);
            });

            // Remove hover effect
            star.addEventListener("mouseout", function () {
                const rating = ratingInput.value || 0;
                highlightStars(rating);
            });

            // Handle star click
            star.addEventListener("click", function () {
                const rating = parseInt(this.getAttribute("data-value"));
                ratingInput.value = rating; // Set the selected rating
                totalRating += rating; // Update total ratings
                totalUsers += 1; // Increment user count
                highlightStars(rating); // Highlight stars
                updateAverageRating(); // Update average rating display
            });
        });

        // Highlight stars function
        function highlightStars(rating) {
            stars.forEach((star) => {
                if (star.getAttribute("data-value") <= rating) {
                    star.classList.remove("text-gray-400");
                    star.classList.add("text-yellow-500");
                } else {
                    star.classList.remove("text-yellow-500");
                    star.classList.add("text-gray-400");
                }
            });
        }

        // Update the average rating display
        function updateAverageRating() {
            const averageRating = totalUsers ? (totalRating / totalUsers).toFixed(1) : 0;

            // Highlight stars for average rating
            averageStars.forEach((star, index) => {
                if (index < Math.floor(averageRating)) {
                    star.classList.remove("text-gray-400");
                    star.classList.add("text-yellow-500");
                } else if (index < averageRating) {
                    // Half-star logic (optional, add class if desired)
                    star.classList.remove("text-gray-400");
                    star.classList.add("text-yellow-500");
                } else {
                    star.classList.remove("text-yellow-500"); 
                    star.classList.add("text-gray-400");
                }
            });

            // Update text with the average rating and count
            averageText.textContent = `${averageRating} stars (${totalUsers} ratings)`;
        }
    });
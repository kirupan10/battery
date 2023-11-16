$(document).ready(function() {
    let currentSlide = 1;
    const totalSlides = $('.slide').length;
    const sliderContainer = $('.slider-container');

    function nextSlide() {
        currentSlide = (currentSlide % totalSlides) + 1;
        sliderContainer.animate({ marginLeft: -100 * (currentSlide - 1) + 'vw' }, 500);
    }

    function autoSlide() {
        setInterval(function() {
            nextSlide();
        }, 3000); // Change slide every 3 seconds (adjust as needed)
    }

    // Use jQuery to handle click events on the slider
    $('.slide').on('click', function() {
        window.location.href = 'index.php';
    });

    // Start the automatic sliding
    autoSlide();
});
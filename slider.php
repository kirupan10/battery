<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slider</title>
    <style>
        /* Add your CSS styles here */
        .slider-container {
            display: flex;
            transition: margin-left 0.8s ease-in-out; /* Change easing function and duration */
        }
        .slide {
            width: 100vw;
            height: 100vh;
            overflow: hidden;
        }
        img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>

<div class="slider-container">
    <div class="slide"><img src="assets/img/slider/image1.jpg" alt="Slide 1"></div>
    <div class="slide"><img src="assets/img/slider/image2.jpg" alt="Slide 2"></div>
    <div class="slide"><img src="assets/img/slider/image3.jpg" alt="Slide 3"></div>
    <!-- Add more slides as needed -->
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        let currentSlide = 0; // Start from the first slide
        const totalSlides = $('.slide').length;
        const sliderContainer = $('.slider-container');

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            sliderContainer.css('margin-left', -100 * currentSlide + 'vw');
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
</script>

</body>
</html>

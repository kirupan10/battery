<?php
include_once('assets/configsys.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Auto Refresh Example</title>
  <style>
  body {
    background: #fff;
  }

  .preloader-2 {
    margin: 200px auto 0;
    font-size: 30px; /* Adjust the font size */
  }

  div {
    color: #000;
    margin: 15px 0; /* Adjust the margin */
    text-transform: uppercase;
    text-align: center;
    font-family: 'Arial', sans-serif;
    font-size: 24px; /* Adjust the font size */
    letter-spacing: 4px; /* Adjust the letter spacing */
  }

  .preloader-2 .line {
    width: 3px; /* Adjust the width */
    height: 30px; /* Adjust the height */
    background: #000;
    margin: 0 3px; /* Adjust the margin */
    display: inline-block;
    animation: opacity-2 1000ms infinite ease-in-out;
  }

  .preloader-1 .line-1,
  .preloader-2 .line-1 { animation-delay: 800ms; }
  .preloader-1 .line-2,
  .preloader-2 .line-2 { animation-delay: 600ms; }
  .preloader-1 .line-3,
  .preloader-2 .line-3 { animation-delay: 400ms; }
  .preloader-1 .line-4,
  .preloader-2 .line-4 { animation-delay: 200ms; }
  .preloader-1 .line-6,
  .preloader-2 .line-6 { animation-delay: 200ms; }
  .preloader-1 .line-7,
  .preloader-2 .line-7 { animation-delay: 400ms; }
  .preloader-1 .line-8,
  .preloader-2 .line-8 { animation-delay: 600ms; }
  .preloader-1 .line-9,
  .preloader-2 .line-9 { animation-delay: 800ms; }

  @keyframes opacity-1 {
    0% {
      opacity: 1;
    }
    50% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }

  @keyframes opacity-2 {
    0% {
      opacity: 1;
      height: 40px; /* Adjust the height */
    }
    50% {
      opacity: 0;
      height: 30px; /* Adjust the height */
    }
    100% {
      opacity: 1;
      height: 40px; /* Adjust the height */
    }
  }
</style>
</head>
<body>

<div id="content-container">
  <!-- Content loaded via Ajax will be placed here -->
  <div class="preloader-2">
    <span class="line line-1"></span>
    <span class="line line-2"></span>
    <span class="line line-3"></span>
    <span class="line line-4"></span>
    <span class="line line-5"></span>
    <span class="line line-6"></span>
    <span class="line line-7"></span>
    <span class="line line-8"></span>
    <span class="line line-9"></span>
    <div>Close the gates</div>
  </div>
</div>

<script>
  function loadData() {
    // Simulate an Ajax request
    // Replace this with your actual Ajax call
    // For simplicity, a timeout function is used here
    setTimeout(function () {
      // Replace the content with the loaded data
      document.getElementById('content-container').innerHTML = `
        <div class="preloader-2">
          <span class="line line-1"></span>
          <span class="line line-2"></span>
          <span class="line line-3"></span>
          <span class="line line-4"></span>
          <span class="line line-5"></span>
          <span class="line line-6"></span>
          <span class="line line-7"></span>
          <span class="line line-8"></span>
          <span class="line line-9"></span>
          <div>Close the gates</div>
        </div>
      `;
    }, 2000); // Simulated delay of 2 seconds
  }

  function refreshData() {
    // Load data initially
    loadData();

    // Refresh data every 5 seconds
    setInterval(function () {
      loadData();
    }, 2000);
  }

  // Call the refreshData function when the page loads
  window.onload = function () {
    refreshData();
  };
</script>

</body>
</html>

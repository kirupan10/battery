<script>

    // Initialize Firebase
var firebaseConfig = {
    apiKey: "AIzaSyDIohXgNNi7bUVynBkuv1yhd05Iwx6OXTE",
  authDomain: "battery-serving-station.firebaseapp.com",
  databaseURL: "https://battery-serving-station-default-rtdb.firebaseio.com",
  projectId: "battery-serving-station",
  storageBucket: "battery-serving-station.appspot.com",
  messagingSenderId: "1081020094421",
  appId: "1:1081020094421:web:92075e641dbb8800d64f5c"
};

firebase.initializeApp(firebaseConfig);

// Assuming 'https://battery-serving-station-default-rtdb.firebaseio.com/' is your Realtime Database URL
var database = firebase.database();
var ref = database.ref('https://battery-serving-station-default-rtdb.firebaseio.com/fromnode'); // Replace 'your_collection' with your actual collection name

// Assuming 'isgate' is the field you want to check and '1' is the value you are looking for
ref.orderByChild('isgate').equalTo('1').once('value')
    .then(function(snapshot) {
        if (snapshot.exists()) {
            // Records with the specified condition exist
            snapshot.forEach(function(childSnapshot) {
                console.log("Key: " + childSnapshot.key, childSnapshot.val());
            });
        } else {
            // No records matching the condition found
            console.log("No records found with the specified condition");
        }
    })
    .catch(function(error) {
        console.error("Error getting data: ", error);
    });
</script>


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

</body>
</html>

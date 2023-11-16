<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Page Title</title>
  <!-- Include the Firebase SDK (v8) -->
  <script src="https://www.gstatic.com/firebasejs/8.9.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.9.1/firebase-database.js"></script>
  <!-- Add other scripts and styles here -->
</head>
<body>

<!-- Your HTML content -->

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

// Assuming 'fromnode' is your collection name in the Realtime Database
var database = firebase.database();
var ref = database.ref('fromnode'); 

// Assuming 'isgate' is the field you want to check and '1' is the value you are looking for
ref.orderByChild('isgate').equalTo('1').once('value')
    .then(function(snapshot) {
        if (snapshot.exists()) {
            // Records with the specified condition exist
            snapshot.forEach(function(childSnapshot) {
                console.log(" records found with the specified condition");
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

</body>
</html>

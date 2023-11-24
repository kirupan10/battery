import {
  getDatabase,
  ref,
  set,
  get,
  onValue,
  update,
} from "https://www.gstatic.com/firebasejs/10.6.0/firebase-database.js";

import { app } from "./firebase.js";
const db = getDatabase(app);

var batteryopenclose = true;
document.getElementById("btnopenclose").addEventListener("click", openclose);
document.getElementById("btnopenclose").innerHTML = "Open Battry Tray";

// $("#btnopenclose").on("click", function () {
//   // Get the number from the URL using the URLSearchParams API
// });

function openclose() {
  batteryopenclose = !batteryopenclose;

  document.getElementById("loading_img").innerHTML =
    '<img class="d-block card-img" src="assets/img/Animation - 1699777874314.gif" style="width: 149.328px;"/>;';

  var urlParams = new URLSearchParams(window.location.search);
  var numberToPass = urlParams.get("bn"); // Assuming the parameter name is 'number'

  // Make an AJAX request
  $.ajax({
    type: "GET",
    url: "./led.php",
    data: { number: numberToPass }, // Pass the number as a parameter
    success: function (response) {
      // Handle the success response here
      console.log(response);

      update(ref(db, "fromnode/" + "node" + numberToPass), {
        gate: 0, // Replace 2 with the new value you want to set for "gate"
      })
        .then(() => {
          console.log("Update successful.");
          document.getElementById("btnopenclose").innerHTML =
            "Opened Battry Tray";

            // Redirect to Thankyou.php with the bn parameter
      window.location.href = "Thankyou.php?bn=" + numberToPass;
            
        })
        .catch((error) => {
          console.log("Update failed: " + error.message);
          batteryopenclose = !batteryopenclose;
        });

      setTimeout(function () {
        document.getElementById("loading_img").innerHTML = "";
      }, 2000);
    },
    error: function (error) {
      // Handle errors here
      console.error(error);
    },
  });

  
}

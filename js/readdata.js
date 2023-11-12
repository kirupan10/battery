import {
  getDatabase,
  ref,
  set,
  onValue,
} from "https://www.gstatic.com/firebasejs/10.6.0/firebase-database.js";

import { app } from "./firebase.js";

const db = getDatabase(app);

// set(ref(db, "users/" + "userId"), {
//   username: "name",
//   email: "dineth",
//   profile_picture: "imageUrl",
// });

const starCountRef = ref(db, "fromnode/node" + batteryno);
onValue(starCountRef, (snapshot) => {
  const data = snapshot.val();
  // updateStarCount(postElement, data);
  console.log(data);
  // change data of evenry class = battery1p to data
  document.getElementById("battry_charging").innerHTML = data["charge"] + "%";
  document.getElementById("battry_charging1").innerHTML = data["charge"] + "%";
  document.getElementById("battry_temp").innerHTML = data["temp"] + " C";
  document.getElementById("soc").innerHTML = data["soc"] + "";
  document.getElementById("soh").innerHTML = data["soh"] + "";
  document.getElementById("status").innerHTML = data["status"] + "";
  //   document.getElementsByClassName("battry_charging").innerHTML =
  //     data["charge"] + "%";
});

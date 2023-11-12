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

function openclose() {
  batteryopenclose = !batteryopenclose;

  document.getElementById("loading_img").innerHTML =
    '<img class="d-block card-img" src="assets/img/Animation - 1699777874314.gif" style="width: 149.328px;"/>;';

  update(ref(db, "fromnode/" + "node1"), {
    gate: batteryopenclose ? 0 : 1, // Replace 2 with the new value you want to set for "gate"
  })
    .then(() => {
      console.log("Update successful.");
      if (batteryopenclose) {
        document.getElementById("btnopenclose").innerHTML = "Open Battry Tray";
      } else {
        document.getElementById("btnopenclose").innerHTML = "Close Battry Tray";
      }
    })
    .catch((error) => {
      console.log("Update failed: " + error.message);
      batteryopenclose = !batteryopenclose;
    });

  setTimeout(function () {
    document.getElementById("loading_img").innerHTML = "";
  }, 2000);
}

const getTrayData = ref(db, "fromnode/node1");

get(getTrayData)
  .then((snapshot) => {
    const data = snapshot.val();
    if (data["gate"] == 0) {
      document.getElementById("btnopenclose").innerHTML = "Open Battry Tray";
      batteryopenclose = !batteryopenclose;
    } else {
      document.getElementById("btnopenclose").innerHTML = "Close Battry Tray";
      batteryopenclose = !batteryopenclose;
    }
  })
  .catch((error) => {
    console.error("Error reading data:", error);
  });

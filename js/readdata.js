import {
  getDatabase,
  ref,
  set,
  onValue,
} from "https://www.gstatic.com/firebasejs/10.6.0/firebase-database.js";

import { app } from "./firebase.js";

const db = getDatabase(app);

const getData = ref(db, "fromnode/node" + batteryno);

onValue(getData, (snapshot) => {
  const data = snapshot.val();

  console.log(data);

  document.getElementById("battry_charging").innerHTML = data["charge"] + "%";
  document.getElementById("battry_charging1").innerHTML = data["charge"] + "%";
  document.getElementById("battry_temp").innerHTML = data["temp"] + " C";
  document.getElementById("soc").innerHTML = data["soc"] + "";
  document.getElementById("soh").innerHTML = data["soh"] + "";
  document.getElementById("status").innerHTML = data["status"] + "";
});

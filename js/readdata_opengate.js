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

  //   console.log(data);

  document.getElementById("alldata").innerHTML =
    "Health " + data["soh"] + "%, Percentage " + data["soh"] + " %";
});

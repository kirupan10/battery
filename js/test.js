import {
  getDatabase,
  ref,
  set,
  onValue,
} from "https://www.gstatic.com/firebasejs/10.6.0/firebase-database.js";

import { app } from "./firebase.js";

const db = getDatabase(app);

const node1 = ref(db, "fromnode/node1");
onValue(node1, (snapshot) => {
  const data = snapshot.val();
  // updateStarCount(postElement, data);
  console.log(data["charge"]);
  // change data of id = battery1p to data
  document.getElementById("battery1p").innerHTML = data["charge"] + "%";
});
const node2 = ref(db, "fromnode/node2");
onValue(node2, (snapshot) => {
  const data = snapshot.val();
  // updateStarCount(postElement, data);
  console.log(data["charge"]);
  // change data of id = battery1p to data
  document.getElementById("battery2p").innerHTML = data["charge"] + "%";
});
const node3 = ref(db, "fromnode/node3");
onValue(node3, (snapshot) => {
  const data = snapshot.val();
  // updateStarCount(postElement, data);
  console.log(data["charge"]);
  // change data of id = battery1p to data
  document.getElementById("battery3p").innerHTML = data["charge"] + "%";
});

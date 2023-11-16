import {
  getAuth,
  signInWithEmailAndPassword,
  createUserWithEmailAndPassword,
} from "https://www.gstatic.com/firebasejs/10.6.0/firebase-auth.js";

import {
  getDatabase,
  ref,
  set,
  get,
  onValue,
  update,
} from "https://www.gstatic.com/firebasejs/10.6.0/firebase-database.js";

import { app } from "./firebase.js";

document.getElementById("signupbtn").addEventListener("click", signup);

function signup() {
  const auth = getAuth();
  const email = document.forms["signupform"]["user_Email"].value;
  const password = document.forms["signupform"]["user_Pass"].value;
  const name = document.forms["signupform"]["user_Name"].value;
  const user_PhoneNumber =
    document.forms["signupform"]["user_PhoneNumber"].value;
  createUserWithEmailAndPassword(auth, email, password)
    .then((userCredential) => {
      // Signed up
      const user = userCredential.user.uid;
      console.log(user);
      setCookie("user", user, 2);
      wirteUserData(user, name, email, user_PhoneNumber);
    })
    .catch((error) => {
      console.log(error);

      // ..
    });
}

function wirteUserData(userId, name, email, user_PhoneNumber) {
  const db = getDatabase(app);
  set(ref(db, "users/" + userId), {
    username: name,
    email: email,
    phone: user_PhoneNumber,
  });
}

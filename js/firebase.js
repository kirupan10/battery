import { initializeApp } from "https://www.gstatic.com/firebasejs/10.6.0/firebase-app.js";

// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyDIohXgNNi7bUVynBkuv1yhd05Iwx6OXTE",
  authDomain: "battery-serving-station.firebaseapp.com",
  databaseURL: "https://battery-serving-station-default-rtdb.firebaseio.com",
  projectId: "battery-serving-station",
  storageBucket: "battery-serving-station.appspot.com",
  messagingSenderId: "1081020094421",
  appId: "1:1081020094421:web:92075e641dbb8800d64f5c",
};

// Initialize Firebase
export const app = initializeApp(firebaseConfig);

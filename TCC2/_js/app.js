
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-analytics.js";
  import { getAuth } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-auth.js";

  const firebaseConfig = {
    apiKey: "AIzaSyAdYba-Ftj2EpHen-gFTAzKQdTKl--C-jk",
    authDomain: "beardhub-b6fac.firebaseapp.com",
    projectId: "beardhub-b6fac",
    storageBucket: "beardhub-b6fac.appspot.com",
    messagingSenderId: "733189049588",
    appId: "1:733189049588:web:8b584e571fdd6bd08ae2a1",
    measurementId: "G-4ZVF5D2FMS"
  };

  // Initialize Firebase
  export const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
  export const auth = getAuth(app);


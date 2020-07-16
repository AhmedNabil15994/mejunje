var firebaseConfig = {
    apiKey: "AIzaSyABT2CyTYpOeQPhBSmA_rSgbO_mjZlXBVU",
    authDomain: "mejunje.firebaseapp.com",
    databaseURL: "https://mejunje.firebaseio.com",
    projectId: "mejunje",
    storageBucket: "mejunje.appspot.com",
    messagingSenderId: "120580915213",
    appId: "1:120580915213:web:5acc9851829e00b3",
    measurementId: "G-X0SJFZW94Z"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
firebase.analytics();

var database = firebase.database().ref();
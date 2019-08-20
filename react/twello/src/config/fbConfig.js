import firebase from 'firebase/app'
import 'firebase/firestore'
import 'firebase/auth'

// Your web app's Firebase configuration
var firebaseConfig = {
    apiKey: "AIzaSyASLnpR7e2ACtOW4aWhN87K0v1i8UrY0KY",
    authDomain: "twello-write.firebaseapp.com",
    databaseURL: "https://twello-write.firebaseio.com",
    projectId: "twello-write",
    storageBucket: "",
    messagingSenderId: "625403888969",
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.firestore().settings({ timestampsInSnapshots: true });

  export default firebase;
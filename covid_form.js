// Your web app's Firebase configuration
var firebaseConfig = {
  apiKey: "AIzaSyC05256MINRTc1KNrrwFMjHoaPEoym_OG8",
  authDomain: "artech-covid-form.firebaseapp.com",
  databaseURL: "https://artech-covid-form.firebaseio.com",
  projectId: "artech-covid-form",
  storageBucket: "artech-covid-form.appspot.com",
  messagingSenderId: "862428008696",
  appId: "1:862428008696:web:45e9396ff569f23da3eb0d"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);

const auth = firebase.auth();


function signOut(){
  if(document.getElementById("myCheck").unchecked) {
      alert("Please accept the Terms and Conditions");
  }
}



function signOut(){
  alert("By clicking OK you are verifying your answers are correct.");
  if(document.getElementById("pass").checked) {
      window.location.href = 'pass.html';
  }
  if(document.getElementById("fail").checked) {
      window.location.href = 'fail.html';
  }

    auth.signOut();
}

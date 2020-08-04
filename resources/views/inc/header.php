<script src="https://www.gstatic.com/firebasejs/7.17.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.17.1/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.17.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.17.1/firebase-firestore.js"></script>

<div>
  <nav>
    <a class="nav-links" id="studentReg" href="/studentRegister">Student</a>
    <a class="nav-links" id="companyReg" href="/companyRegister">Company</a>
    <a class="nav-links" id="about" href="/about">About</a>
    <a class="nav-links" id="contact" href="/contact">Contact</a>
    <a class="nav-links" id="signIn" href="/signIn">Sign In</a>
    <a class="nav-links" id="dashboard" href="/dashboard">Dashboard</a>
    <a class="nav-links" id="signOut" href="/" onclick="signOut()">Sign Out</a>
  </nav>
</div>

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyAJJps330a5Q9PM3sF7VHXY6OIwwdEkLhI",
    authDomain: "swivel-5fbcc.firebaseapp.com",
    databaseURL: "https://swivel-5fbcc.firebaseio.com",
    projectId: "swivel",
    storageBucket: "swivel.appspot.com",
    messagingSenderId: "653573960641",
    appId: "1:653573960641:web:c0e189ae8f43dcd3f0b540",
    measurementId: "G-55XEZZV1WZ"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();

  // if the user is signed in, display certain buttons
  var signOut = document.getElementById("signOut");
  var signIn = document.getElementById("signIn");
  var studentReg = document.getElementById("studentReg");
  var companyReg = document.getElementById("companyReg");
  var dashboard = document.getElementById("dashboard");

  var user = firebase.auth().currentUser;

  if(user){
    signOut.style.display = 'inline';
    dashboard.style.display = 'inline';

    studentReg.style.display = 'none';
    companyReg.style.display = 'none';
    signIn.style.display = 'none';
  } else {
    signOut.style.display = 'none';
    dashboard.style.display = 'none';

    studentReg.style.display = 'inline';
    companyReg.style.display = 'inline';
    signIn.style.display = 'inline';
  }

  function signOut(){
    firebase.auth().signOut().then(function() {
      // Sign-out successful.
    }).catch(function(error) {
      // An error happened.
    });
  }

</script>

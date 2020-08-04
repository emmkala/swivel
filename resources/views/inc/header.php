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
      var errorCode = error.code;
      var errorMessage = error.message;
      console.log(errorMessage);
      console.log(errorCode);
    });
  }

</script>

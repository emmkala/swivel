<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <!-- Bootstrap 4 StyleSheet -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../../../stylesheets/global.css">
<link rel="stylesheet" href="../../../stylesheets/style.css">
</head>
<body>
<nav class="navbar navbar-expand-md">
  <div class="container">
  <a class="navbar-brand" href="#">
    <img src="../../../images/Logo.png" alt="" class="logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Students</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Startups</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
    <ul class="ml-auto navbar-nav">
      <li class="nav-item">
        <a class="nav-logIn" href="#">Log In</a>
      </li>
    </ul>
  </div>
  </div>
</nav>





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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

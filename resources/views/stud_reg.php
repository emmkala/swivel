<?php
include 'inc\firebase_init.php';
include 'inc\header.php';
ob_start();
?>

<h2> Student Sign-Up </h2>

<!-- register form, simple email password for testing -->
<div class="register">
  <!-- <form> -->
  <form method="POST" enctype="multipart/form-data">
    <input type="text" id="fname" placeholder="First Name">
    <input type="text" id="lname" placeholder="Last Name">
    <!-- Can get school from email, not super important -->
    <!-- <input type="text" id="university" placeholder="School"> Might change to drop down-->
    <input type="text" id="email" placeholder="School Email">
    <input type="password" id="password" placeholder="Password">
    <input type="password" id="passwordCheck" placeholder="Confirm Password">
    <input type="submit" value="submit" onclick="register()" >
  </form>
</div>

<script>
  function register(){

    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    // can get uni from email parse
    // var uni = document.getElementById("university").value;
    var email = document.getElementById("email").value;
    var pass = document.getElementById("password").value;
    var dup = document.getElementById("passwordCheck").value;

    if(pass != dup){
      // "Passwords don't match
      // Figure out how to do this without pressing submit
    }

    // Create a user account
    firebase.auth().createUserWithEmailAndPassword(email, pass).then(function() {
      console.log("Account Created");
      // On account creation success, sign in
      firebase.auth().signInWithEmailAndPassword(email, pass).then(function() {
        // On sign in success, go to profile setup
        var user = firebase.auth().currentUser;
        console.log(user.email, " signed in");
        window.location = '/studentSetup';
      }).catch(function(error) {
        var errorCode = error.code;
        var errorMessage = error.message;
        console.log("Not logged in", errorMessage);
      });
    }).catch(function(error) {
      var errorCode = error.code;
      var errorMessage = error.message;
      console.log("Account not created", errorMessage);
    });
  }

</script>

<?php
include 'inc\footer.php';
 ?>

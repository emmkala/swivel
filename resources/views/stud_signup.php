<?php
include 'inc\header.php';
ob_start();
?>

<h2> Student Sign-Up </h2>

<!-- register form, simple email password for testing -->
<div class="register">
  <input type="text" id="fname" placeholder="First Name">
  <input type="text" id="lname" placeholder="Last Name">
  <!-- Can get school from email, not super important -->
  <!-- <input type="text" id="university" placeholder="School"> Might change to drop down-->
  <input type="text" id="email" placeholder="School Email">
  <input type="password" id="password" placeholder="Password">
  <input type="password" id="passwordCheck" placeholder="Confirm Password">
  <input type="button" value="submit" onclick="register()">
</div>

<script>
  function register(){
    console.log("onclick");

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

    firebase.auth().createUserWithEmailAndPassword(email, pass).catch(function(error) {
  // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;
    });

    var user = firebase.auth().currentUser;
    var name = fname + lname;

    user.updateProfile({
      displayName: name,
    }).then(function() {
      console.log("Name set successful");
      // Update successful.
    }).catch(function(error) {
      console.log(error);
    });
  }


</script>

<?php
include 'inc\footer.php';
 ?>

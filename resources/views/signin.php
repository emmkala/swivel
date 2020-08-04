<!-- Global sign in page -->
<?php
include 'inc\firebase_init.php';
include 'inc\header.php';
 ?>

 <div class="signin">
   <input type="text" id="email" placeholder="School Email">
   <input type="password" id="password" placeholder="Password">
   <input type="button" value="submit" onclick="signin()">
 </div>

<script>

function signin(){
  var email = document.getElementById("email").value;
  var pass = document.getElementById("password").value;

  firebase.auth().signInWithEmailAndPassword(email, pass).catch(function(error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;
    // ...
  });
}

</script>


 <?php
 include "inc\footer.php";
  ?>

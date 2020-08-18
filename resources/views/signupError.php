<?php
include 'inc/firebase_init.php';
 ?>
 <head>
   <link rel="stylesheet" href="../../stylesheets/style.css">
 </head>

<div class="errorpage">
  <img src="..\images\SadSwivelBot.png" alt="Swivel Bot">
  <h3 class="student">Sign up error! You need to choose the correct amount of values indicated in each step of the onboarding. Please go back
  to your homepage and signup with a different email to complete the onboarding process. </h3>
  <input type="button" onclick="signout()" value="Go to Home" />
</div>

<script>
  function signout(){
      firebase.auth().signOut().then(function() {
        window.location = "/";
      }).catch(function(error) {
        window.location = "/error";
      });
  }
</script>

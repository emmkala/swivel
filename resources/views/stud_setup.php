<?php
include 'inc/firebase_init.php';
?>

<h2> Welcome, <span id="currUser"></span>!</h1>




<script>

firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    document.getElementById("currUser").innerHTML = user.email;
  } else {
    // Go to error page if no current user
    //window.location = '/error';
    var errorCode = error.code;
    var errorMessage = error.message;
    console.log(errorMessage);
  }
});

</script>

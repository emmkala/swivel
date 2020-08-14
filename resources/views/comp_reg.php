<?php
include 'inc/firebase_init.php';
//include 'inc/header.php';
ob_start();
?>

<h2> Startup Sign-Up </h2>

<!-- register form, simple email password for testing -->
<div class="register">
  <!-- <form> -->
  <!-- <form method="POST" enctype="multipart/form-data"> -->
    <input type="text" id="fname" name="fname" placeholder="First Name">
    <input type="text" id="lname" name="lname" placeholder="Last Name">
    <!-- Can get company from email, not super important -->
    <input type="text" id="company" placeholder="Company Name">
    <input type="text" id="email" name="email" placeholder="Company Email">
    <input type="password" id="password" name="email" placeholder="Password">
    <input type="password" id="passwordCheck" placeholder="Confirm Password">
    <input type="submit" value="submit" onclick="register()" >
  <!-- </form> -->
</div>

<script>
  var db = firebase.firestore();
  function register(){

    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    // can get uni from email parse
    var comp = document.getElementById("company").value;
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
        var uid = user.uid;

        db.collection("reg").doc(uid).set({
          fname: fname,
          lname: lname,
          email: email,
          company: comp,
        });

        var interests = [];
        var skips = [];
        // set empty interested collection
        db.collection("interested").doc(uid).set({
          interests: interests
        });
        // est empty skipped colletion
        db.collection("skipped").doc(uid).set({
          skips: skips
        });

        // get all of the current company documents
        var studentIds = [];
        db.collection("student").get().then(function(querySnapshot) {
          querySnapshot.forEach(function(doc) {
            studentIds.push(doc.id);
          });
        }).then(function() {
          // set the notSeen array
          db.collection("notSeen").doc(uid).set({
            notSeenIds: studentIds,
          }).then(function() {
            //go to the next page
            var url = '/companySetup/'+uid;
            window.location = url;
            // end of successful path

        }).catch(function(error) {
          var errorCode = error.code;
          var errorMessage = error.message;
          console.log(errorMessage);
        });

        }).catch(function(error) {
          var errorCode = error.code;
          var errorMessage = error.message;
          console.log("Doc not created", errorMessage);
        });

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
include 'inc/footer.php';
 ?>

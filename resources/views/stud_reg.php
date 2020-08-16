<?php
include 'inc/firebase_init.php';
ob_start();
?>
<head>
  <link rel="stylesheet" href="/stylesheets/style.css">
</head>

<div class="Container">
  <!--Header Icon -->
  <div class="Signin_header">
      <a href="/"><img src="../../images/LogoFinal_Cropped.png" alt="Swivel Logo"></a>
      <p id="LoginBar">Already have an account? <a class="linkyes company" href="/studentCompany">Log in.</a></p>
  </div>

  <!--Main Graphic-->
    <div class="block1"><img src="../../images/Untitled_Artwork5copy4.png" alt="Swivel Login Logo" width="90%"></div>
  <!--Main Text Area-->
    <div class="block1">
        <h1 class="studentTitle">Let's find new opportunities.</h1>
        <h3>Create a free account in just a few steps.</h3>
        <!--Form Area-->
        <form class="formgroup1">
          <div class="register_formnames">
            <input type="text" id="fname" name="fname" placeholder="First Name">
            <input type="text" id="lname" name="lname" placeholder="Last Name">
          </div>
            <!-- Can get school from email, not super important -->
          <div class="register_form1">
              <input type="text" id="university" placeholder="School">
          </div>
          <div class="register_form1">
              <input type="text" id="email" name="email" placeholder="School Email">
          </div>
          <div class="register_form1">
            <input type="password" id="password" name="email" placeholder="Password">
          </div>
          <div class="register_form1">
            <input type="password" id="passwordCheck" placeholder="Confirm Password">
          </div>
          <!--<div class="register_form1">
            <input type="checkbox" name="terms" value="I agree with terms and conditions.">   <label for="">I agree with the terms and conditions</label>
          </div>-->
          <div class="register_form1">
            <input type="button" value="Join now." onclick="register()" >
          </div>
        </form>
        <!-- <h4>Or</h4>
        <h4>Sign up via <a class="linkyes company" href="swivelsignup.html">LinkedIn.</a></h4> -->

    </div> <!--End of sign-in block -->


<!--Footer-->
  <div class="Signin_footer">
    <footer>
      <a class="linkno" href="">Thanks so much</a>
      <a class="linkno" href="">For being a user!</a>
    </footer>
  </div>
</div>


<script>
  var db = firebase.firestore();
  function register(){

    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    // can get uni from email parse
    var uni = document.getElementById("university").value;
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
          school: uni,
        });
        // move create time to php

        var interests = [];
        var skips = [];
        // set empty interested collection
        db.collection("interested").doc(uid).set({
          interests: interests
        });
        // set empty skipped colletion
        db.collection("skipped").doc(uid).set({
          skips: skips
        });
        // get all of the current company documents
        var companyIds = [];
        db.collection("company").get().then(function(querySnapshot) {
          querySnapshot.forEach(function(doc) {
            companyIds.push(doc.id);
          });
        }).then(function() {
          // set the notSeen array
          db.collection("notSeen").doc(uid).set({
            notSeenIds: companyIds,
          }).then(function() {
            //go to the next page
            var url = '/studentSetup/'+uid;
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

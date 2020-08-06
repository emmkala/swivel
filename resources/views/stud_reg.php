<?php
include 'inc/firebase_init.php';
include 'inc/header.php';
ob_start();
?>

<h2> Student Sign-Up </h2>

<!-- register form, simple email password for testing -->
<div class="register">
  <!-- <form> -->
  <!-- <form method="POST" enctype="multipart/form-data"> -->
    <input type="text" id="fname" name="fname" placeholder="First Name">
    <input type="text" id="lname" name="lname" placeholder="Last Name">
    <!-- Can get school from email, not super important -->
    <!-- <input type="text" id="university" placeholder="School"> Might change to drop down-->
    <input type="text" id="email" name="email" placeholder="School Email">
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
        var uid = user.uid;

        var primary = {prim1: "", prim2: "", prim3: ""};
        var secondary = {sec1: "", sec2: "", sec3: "", sec4: "", sec5: ""};
        var employer = {emp1: "", emp2: "", emp3: ""};

        var tech = {tech1: "", tech2: "", tech3: "", tech4: "", tech5: ""};
        var soft = {soft1: "", soft2: "", soft3: "", soft4: "", soft5: ""};
        var work = {work1: "", work2: "", work3: ""};

        var exp = {exp1: "", exp2: "", exp3: ""};


        db.collection("student").doc(uid).set({
          FName: fname,
          LName: lname,
          Email: email,
          Primary: primary,
          Secondary: secondary,
          Employer: employer,
          Tech: tech,
          Soft: soft,
          WorkType: work,
          Experience: exp
        }).then(() => {
          var url = '/studentSetup/'+uid;
            window.location = url;

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

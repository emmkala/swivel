<!-- Global sign in page -->
<?php
include 'inc/firebase_init.php';
 ?>

 <head>
   <link rel="stylesheet" href="../../stylesheets/style.css">
 </head>

 <div class="Container">
   <!--Header Icon -->
   <div class="Signin_header">
     <a href="/"><img src="../../images/LogoFinal_Cropped.png" alt="Swivel Logo"></a>
   </div>
   <!--Main Graphic-->
     <div class="block1"><img src="../../images/Untitled_Artwork 4copy7.png" alt="Swivel Browsing" width="90%"></div>
   <!--Main Text Area-->
     <div class="block1">
         <h1 class="student">Welcome back.</h1>

         <h3>Ready to start swiveling?</h3>
         <!--Form Area-->
         <form class="formgroup1">
           <div class="signin_form1">
              <input type="text" id="email" placeholder="Email">
           </div>
           <div class="signin_form1">
              <input type="password" id="password" placeholder="Password">
           </div>
           <div class="signin_form1">
               <input type="button" value="Login" onclick="signin()">
           </div>
         </form>
         <h5 id="error"></h4>

         <h6 id="forget" onclick="forget()">Forgot your password?</h6>
         <h6>Don't have an account? Join <a class="linkyes company" href="/studentCompany">here.</a></h6>

     </div> <!--End of sign-in block -->

     <div class="forgetPassword" id="popup-div-forget" style="display: none;">
       <center>
         <h3> Enter your email </h3>
         <form>
           <input type="text" id="emailPass" placeholder="email">
           <input type="button" id="forgetSubmit" value="Submit" onclick="forgottenPass()">
         </form>
         <h2 id="response"></h2>
         <h5> You will recieve an email with instructions to reset your password. </h5>
         <h5> Come back and refresh the page after resetting. </h5>
      </center>
      </div>


 <!--Footer-->
   <div class="Signin_footer">
     <footer>
       <a class="linkno" href="SwivelTerms.html">Thank you so much</a>
       <a class="linkno" href="SwivelPrivacy.html">For being a tester!</a>
     </footer>
   </div>
 </div>

<script>

  function signin(){
    var email = document.getElementById("email").value;
    var pass = document.getElementById("password").value;

    firebase.auth().signInWithEmailAndPassword(email, pass).then(function() {

      var user = firebase.auth().currentUser;
      var uid = user.uid;
      var url = "/curated/"+uid;
      window.location = url;

    }).catch(function(error){
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        document.getElementById("error").innerHTML = errorMessage;
        // ...
    });
  }

  function forget(){
    document.getElementById("popup-div-forget").style.display = "inline";
  }

  function forgottenPass(){
    var auth = firebase.auth();
    var emailAddress = document.getElementById("emailPass").value;

    auth.sendPasswordResetEmail(emailAddress).then(function() {
      document.getElementById("response").innerHTML = "Email sent";
    }).catch(function(error) {
      var errorMessage = error.message;
      document.getElementById("response").innerHTML = errorMessage;
    });

  }


</script>

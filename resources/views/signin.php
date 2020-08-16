<!-- Global sign in page -->
<?php
include 'inc\firebase_init.php';
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
              <input type="text" id="email" placeholder="School Email">
           </div>
           <div class="signin_form1">
              <input type="password" id="password" placeholder="Password">
           </div>
           <div class="signin_form1">
               <input type="button" value="Login" onclick="signin()">
           </div>
         </form>
         <!-- <h4><a class="linkno" href="/signin">Forgot Password?</a></h4>-->
         <h5>Don't have an account? Join <a class="linkyes company" href="/studentCompany">here.</a></h5>

     </div> <!--End of sign-in block -->



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
    var url = "/matching/"+uid;
    window.location = url;

  }).catch(function(error){
      // Handle Errors here.
      var errorCode = error.code;
      var errorMessage = error.message;
      // ...
  });

}

</script>


 <?php
 include 'inc\footer.php';
  ?>

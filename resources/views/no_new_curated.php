<!-- when there's no new matches to view, show this page which has a
listener for changes to student or company collection -->
<?php
include 'inc/firebase_init.php';
 ?>

<head>
 <link rel="stylesheet" type="text/css" href="../../stylesheets/style.css">
 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 <!-- <link rel="stylesheet" href="<https://use.typekit.net/qhr5ddp.css">-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="matchingBody">

  <!-- <button type="button" id="matches_button" onclick="matches('')">Matches</button> -->
  <div id="side_nav">
    <form action="/matches/<?= $userId ?>">
      <!-- <i class="material-icons">group</i> -->
        <input type="submit" value="Matches">
    </form>

    <form action="/matching/<?= $userId ?>">
     <!-- <i class="material-icons">redo</i> -->
        <input type="submit" value="General Network">
    </form>

    <form action="/curated/<?= $userId ?>">
     <!-- <i class="material-icons">redo</i> -->
        <input type="submit" value="Curated Matches">
    </form>

    <form>
      <input type="button" onclick="logout()" value="Log Out">
    </form>
  </div>

  <div id="no_new">
    <center>
      <img src="../../images/swivellogo.png">
      <h2 id="header">No new curated matches!</h2>
      <p id="message">Come back in a few days for more, or swipe through 'general networking' to see other users </p>
      <p> Thank you for being a swivel tester, any feedback is greatly appriciated! </p>
      <a id="feedback">Feedback form</a>
    </center>
  </div>
</body>

<script>

var type = "<?php echo $type ?>";

if(type == "Student"){
  document.getElementById("side_nav").className = "sidenavStud";
  document.getElementById("feedback").href = "https://forms.gle/LCRJsAddWSTTsm428";
} else if(type == "Company") {
  document.getElementById("side_nav").className = "sidenavComp";
  document.getElementById("feedback").href = "https://forms.gle/ouoBT7vopPFwnu6i6";
}

function logout(){
  firebase.auth().signOut().then(function() {
    window.location = "/";
  }).catch(function(error) {
    window.location = "/error";
  });
}

firebase.auth().onAuthStateChanged(function(user) {
  if(user){
    console.log("Logged In");

  } else {
    window.location('/error');
  }


});


</script>

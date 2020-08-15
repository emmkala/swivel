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
        <input type="submit" value="Matching">
    </form>
  </div>

  <div id="no_new">
    <center>
      <img src="../../images/swivellogo.png">
      <h2 id="header">You're all Swivelled Out!</h2>
      <p id="message">Come back later when more users have joined the platform, or check on your current matches!</p>
      <p> Thank you for being a swivel tester, any feedback is greatly appriciated! </p>
      <a href="GOOGLE FORM">Feedback form</a>
    </center>
  </div>
</body>

<script>

var type = "<?php echo $type ?>";

if(type == "Student"){
  document.getElementById("side_nav").className = "sidenavStud";
} else if(type == "Company") {
  document.getElementById("side_nav").className = "sidenavComp";
}

firebase.auth().onAuthStateChanged(function(user) {
  if(user){
    console.log("Logged In");

  } else {
    window.location('/error');
  }


});


/*
  var db = firebase.firestore();
  var studCollection = db.collection("student");
  var compCollection = db.collection("company");
  //var currTime = firebase.firestore.Timestamp.now();

  // get currentUser
  //var user = firebase.auth().currentUser;
  firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
      var uid = user.uid;
      // check if theyre a student or a companyIds
      studCollection.doc(uid).get().then(function(studDoc){
        // user is a student
        if(studDoc.exists){
          var docData = studDoc.data();
          var userLatest = docData.latestSeen;

          compCollection.where('created', '>', userLatest).onSnapshot(function(querySnapshot){
            // empty list for new comp
            querySnapshot.forEach(function(doc) {
              db.collection("notSeen").doc(uid).update({
                notSeenIds: firebase.firestore.FieldValue.arrayUnion(doc.id)
              });
            });
            var url = "/matching/"+uid;
            window.location = url;
          });
        } else {
          db.collection("company").doc(uid).get().then(function(compDoc){
            // user is a company
            if(compDoc.exists){
              var docData = compDoc.data();
              var userLatest = docData.latestSeen;

              studCollection.where('created', '>', userLatest).onSnapshot(function(querySnapshot){
                // empty list for new comp
                querySnapshot.forEach(function(doc) {
                  db.collection("notSeen").doc(uid).update({
                    notSeenIds: firebase.firestore.FieldValue.arrayUnion(doc.id)
                  });
                  var url = "/matching/"+uid;
                  window.location = url;
              });
            });

            } else {
              var url = "/noNewMatches/"+uid;
              window.location = url;
            }
          });
        }

    });

    } else {
      // Go to error page if no current user
      //window.location = '/error';
      var errorCode = error.code;
      var errorMessage = error.message;
      console.log("Not logged in");
    }
  });


*/

</script>

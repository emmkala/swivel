<!-- when there's no new matches to view, show this page which has a
listener for changes to student or company collection -->
<?php
include 'inc/firebase_init.php';
 ?>


<div id="no_new">
  <h3 id="header">You're all Swivelled Out!</h3>
  <h4 id="message"></h4>
  <!-- <a><href id="feedback_link"></a> -->
</div>

<script>
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




</script>

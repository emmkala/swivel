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
      studCollection.doc(uid).get().then(function(doc){
        // user is a student
        if(doc.exists){
          // listen for change in company collection
          // var userLatest = get latest of currentUser
          // compCollection.where("created", ">", "")
          compCollection.onSnapshot(function(querySnapshot){
            // empty list for new comp
            var newComp = [];

            querySnapshot.forEach(function(doc) {
              // get latest of current userId
              // get current doc created
              // query
              newComp.push(doc.id);
            });
            console.log("Current cities in CA: ", newComp.join(", "));
          });
        } else {
          db.collection("company").doc(uid).get().then(function(doc){
            // user is a company
            if(doc.exists){
              // create event listener for new students
                // add new student to company notSeen
                // redirect back to matching

            } else {
              console.log("User isn't in student or company");
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

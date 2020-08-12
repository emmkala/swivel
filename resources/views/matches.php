<!-- Shows all matches, allows time picking and shows info -->
<?php
include 'inc/firebase_init.php';
 ?>
<h5> Matches </h5>
<?php foreach($allMatches as $i => $match):?>
<div class="matchInfo">

</div>
<?php endforeach; ?>


<script>

var db = firebase.firestore();
//var matchCollection = db.collection("matches");

firebase.auth().onAuthStateChanged(function(user){
  if(user){
    var uid = user.uid;
    //matchCollection.doc(uid).get().then(function(doc){
    //  if(doc.exists){


    //  } else {
        // no Matches
    //  }

    });

  } else {
    console.log("error");
  }
});


</script>

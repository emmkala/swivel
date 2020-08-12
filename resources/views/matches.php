<!-- Shows all matches, allows time picking and shows info -->
<?php
include 'inc/firebase_init.php';
 ?>
<body>
<h5> Matches </h5>
<?php foreach($allMatches as $i => $match):?>
<div class="matchInfo">
  <p class="matchName"> <?= $match->get('matchName') ?> </p>
  <p class="matchEmail"> <?= $match->get('matchEmail') ?> </p>
  <!-- If the user didn't initiate the match and a meeting time hasn't be scheduled -->
  <?php if(!$match->get('init') && $match->get('meeting') == ""): ?>
    <button type="button" class="getTimes" onclick="getTimes('<?= $match->id() ?>', '<?= $userId ?>');">Schedule Meeting</button>
  <?php endif ?>
  <!-- If the user initiated the match and a meeting time hasn't be scheduled -->
  <?php if($match->get('init') && $match->get('meeting') == ""): ?>
    <p> A meeting time wil be set when <?= $match->get('matchName') ?> confirms with your schedule. </p>
  <?php endif ?>
  <!-- If a meeting as been set -->
  <?php if($match->get('meeting') != ""): ?>
    <p class="meetingTime">Meeting Time: <?= $match->get('meeting') ?> </p>
  <?php endif ?>

  <p class="zoomLink"> Zoom Link: <?= $match->get('zoomLink') ?> </p>
</div>
<!-- overlay with a z value -->
<div id="<?= $match->id() ?>" style="display: none;">
  <form method="post" id="time_form" enctype="multipart/form-data">
    <div id="time_input">
      <input type="password" name="matchId" value=<?= $match->id() ?> style="display: none;">
      <!-- Create radio button for each time suggested -->
      <p> If no times work, please email your match <?= $match->get('matchName') ?> at <?= $match->get('matchEmail') ?> to discuss alternate times </p>
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
<?php endforeach ?>

</body>

<script>

var db = firebase.firestore();
var type = "<?php echo $type ?>";

function getTimes(matchId, uid){
  if(type == "Student"){
    db.collection("student").doc(uid).collection("matches").doc(matchId).get().then(function(doc){
      if(doc.exists){
        var docData = doc.data();
        var times = docData.times;
        document.getElementById(matchId).style.display = "inline";
        var timeForm = document.getElementById("time_input");
        for(var i =0; i < times.length; i++){
          var newTime = document.createElement("input");
          var timeId = "time"+i;
          var timeLabel = document.createElement("Label");

          newTime.setAttribute("name", "time");
          newTime.setAttribute("type", "radio");
          newTime.id = timeId;
          newTime.setAttribute("value", times[i]);

          timeLabel.setAttribute("for", timeId);
          timeLabel.innerHTML = times[i];
          timeForm.appendChild(timeLabel);
          timeForm.appendChild(newTime);
        }
      }
    });
  } else if (type == "Company"){
    db.collection("company").doc(uid).collection("matches").doc(matchId).get().then(function(doc){
      if(doc.exists){
        var docData = doc.data();
        var times = docData.times;
        document.getElementById(matchId).style.display = "inline";
        var timeForm = document.getElementById("time_input");
        for(var i =0; i < times.length; i++){
          var newTime = document.createElement("input");
          var timeId = "time"+i;
          var timeLabel = document.createElement("Label");

          newTime.setAttribute("name", "time");
          newTime.setAttribute("type", "radio");
          newTime.id = timeId;
          newTime.setAttribute("value", times[i]);

          timeLabel.setAttribute("for", timeId);
          timeLabel.innerHTML = times[i];
          timeForm.appendChild(timeLabel);
          timeForm.appendChild(newTime);
        }
      }
    });
  }
}

firebase.auth().onAuthStateChanged(function(user){
  if(user){
    var uid = user.uid;
    console.log("Logged In");

  } else {
    console.log("error");
  }
});



</script>

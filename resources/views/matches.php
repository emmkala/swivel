<!-- Shows all matches, allows time picking and shows info -->
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

<?php $count = 0; ?>

<div class="matchCardComp" id="user_comp" style="display: none">
  <div class="matchesComp">
    <?php if($type == "Company"): ?>
    <?php foreach($allMatches as $i => $match):?>
      <?php $count++; ?>
    <div class="matchInfoComp">
      <p class="matchNameComp"> <?= $match->get('matchName') ?> </p>
      <p class="matchEmailComp"> <?= $match->get('matchEmail') ?> </p>

      <!-- If the user didn't initiate the match and a meeting time hasn't be scheduled -->
      <?php if(!$match->get('init') && $match->get('meeting') == ""): ?>
        <button type="button" class="getTimes" onclick="getTimes('<?= $match->id() ?>', '<?= $userId ?>');">Schedule Meeting</button>
      <?php endif ?>
      <!-- If the user initiated the match and a meeting time hasn't be scheduled -->
      <?php if($match->get('init') && $match->get('meeting') == ""): ?>
        <p class="waiting"> A meeting time wil be set when <?= $match->get('matchName') ?> confirms with your schedule. </p>
      <?php endif ?>
      <!-- If a meeting as been set -->
      <?php if($match->get('meeting') != ""): ?>
        <p class="meetingTime">Meeting Time: <?= $match->get('meeting') ?> </p>
      <?php endif ?>

    </div>
    <!-- overlay with a z value -->
    <div class="timeSelection" id="<?= $match->id() ?>" style="display: none;">
      <i class="material-icons" id="close_time" onclick="exitTime()">close</i>
      <form method="post" id="time_form" enctype="multipart/form-data">
        <div id="time_input">
          <p> Please choose a time below that works to meet with <?= $match->get('matchName') ?> </p>
          <input type="password" name="matchId" value=<?= $match->id() ?> style="display: none;">
          <!-- Create radio button for each time suggested -->
          <p> If no times work, please email your match <?= $match->get('matchName') ?> at <?= $match->get('matchEmail') ?> to discuss alternate times </p>
          <input type="submit" id="schedule_meeting" value="Submit">
        </div>
      </form>
    </div>
    <?php endforeach ?>
  <?php endif ?>
  </div>

  <div class="userInfoComp">
    <p id="info_title"> Meeting Link: </p>
    <img id="nav_logo" src="../../images/swivellogo.png">
    <a class="zoomLink" href="<?= $compZoom ?>"> Zoom Link: <?= $compZoom ?></a>
    <p id="link_descr">This is your own personal zoom link. You can use it for all your scheduled meetings during the testing period </p>
    <br> <br> <br> <br> <br> <br> <br> <br> <br>
    <a class="feedback" href="#"> Give us any feedback you have on the MVP</a>
    <p class="thanks">Thanks so much for being a test user! We hope you met some interesting people and hopefully expanded your network</p>
  </div>
</div>


<div class="matchCardStud" id="user_stud" style="display: none">
  <div class="matchesStud">
    <?php if($type == "Student"): ?>
    <?php foreach($allMatches as $i => $match):?>
      <?php $count++; ?>
    <div class="matchInfoStud">
      <p class="matchNameStud"> <?= $match->get('matchName') ?> </p>
      <p class="matchEmailStud"> <?= $match->get('matchEmail') ?> </p>
      <a class="zoomLink" href="<?= $match->get('zoomLink') ?>"> Zoom Link: <?= $match->get('zoomLink') ?></a>

      <!-- If the user didn't initiate the match and a meeting time hasn't be scheduled -->
      <?php if(!$match->get('init') && $match->get('meeting') == ""): ?>
        <button type="button" class="getTimes" onclick="getTimes('<?= $match->id() ?>', '<?= $userId ?>');">Schedule Meeting</button>
      <?php endif ?>
      <!-- If the user initiated the match and a meeting time hasn't be scheduled -->
      <?php if($match->get('init') && $match->get('meeting') == ""): ?>
        <p class="waiting"> A meeting time wil be set when <?= $match->get('matchName') ?> confirms with your schedule. </p>
      <?php endif ?>
      <!-- If a meeting as been set -->
      <?php if($match->get('meeting') != ""): ?>
        <p class="meetingTime">Meeting Time: <?= $match->get('meeting') ?> </p>
      <?php endif ?>

    </div>
    <!-- overlay with a z value -->
    <div class="timeSelection" id="<?= $match->id() ?>" style="display: none;">
      <i class="material-icons" id="close_time" onclick="exitTime()">close</i>
      <form method="post" id="time_form" enctype="multipart/form-data">
        <div id="time_input">
          <p> Please choose a time below that works to meet with <?= $match->get('matchName') ?> for 15 minutes </p>
          <input type="password" name="matchId" value=<?= $match->id() ?> style="display: none;">
          <!-- Create radio button for each time suggested -->
          <p> If no times work, please email your match <?= $match->get('matchName') ?> at <?= $match->get('matchEmail') ?> to discuss alternate times </p>
          <input type="submit" id="schedule_meeting" value="Submit">
        </div>
      </form>
    </div>
    <?php endforeach ?>
  <?php endif ?>
  </div>

  <div class="userInfoStud">
    <img id="nav_logo" src="../../images/swivellogo.png">
    <a class="feedback" href="#"> Give us any feedback you have on the MVP</a>
    <p class="thanks">Thanks so much for being a test user! We hope you met some interesting people and hopefully expanded your network</p>
  </div>

</div>

<div id="no_matches" style="display: none;">
  <img src="../../images/swivellogo.png">
  <p> No matches yet! Keep Swiveling and come back later when more users sign up! </p>
</div>

</body>

<script>


var db = firebase.firestore();
var type = "<?php echo $type ?>";
var count = "<?php echo $count ?>";

if(count == 0){
  document.getElementById("no_matches").style.display = "inline";
}

if(type == "Student"){
  document.getElementById("side_nav").className = "sidenavStud";
  document.getElementById("user_stud").style.display = "flex";
} else if(type == "Company") {
  document.getElementById("side_nav").className = "sidenavComp";
  document.getElementById("user_comp").style.display = "flex";
}

// Exit the schedule div
function exitTime(){
  document.getElementsByClassName("timeSelection")[0].style.display = "none";
}

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

<!-- Shows all matches, allows time picking and shows info -->
<?php
include 'inc/firebase_init.php';
 ?>
<body>
<h5> Matches </h5>

<head>
  <link rel="stylesheet" type="text/css" href="../../stylesheets/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!-- <link rel="stylesheet" href="<https://use.typekit.net/qhr5ddp.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="matchingBody">
  <div class="matchCardStud" id="user_stud" style="display: none">
    <div class="matchesStud">
      <?php if($type == "Student"): ?>
      <?php foreach($allMatches as $i => $match):?>
      <div class="matchInfoStud">
        <p class="matchNameStud"> MatchName </p>
        <p class="matchEmailStud"> MatchEmail </p>
        <a class="zoomLink" href="#"> Zoom Link: MATCHZOOMLINK</a>

        <!-- If the user didn't initiate the match and a meeting time hasn't be scheduled -->
        <?php if(!$match->get('init') && $match->get('meeting') == ""): ?>
          <button type="button" class="getTimesStud" onclick="getTimes('<?= $match->id() ?>', '<?= $userId ?>');">Schedule Meeting</button>
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

  </div>
</body>

<script>
var type = "Company";

if(type == "Student"){
  document.getElementById("side_nav").className = "sidenavStud";
  document.getElementById("matchCardComp").style.display = "flex";
} else if(type == "Company") {
  document.getElementById("side_nav").className = "sidenavComp";
  document.getElementById("user_comp").style.display = "flex";
}

function showTimes(){
  var timeDiv = document.getElementsByClassName("timeSelection");
  timeDiv[0].style.display = "inline";
}

// Exit the schedule div
function exitTime(){
  document.getElementsByClassName("timeSelection")[0].style.display = "none";
}

</script>

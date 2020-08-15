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
  <div id="side_nav">
    <form action="/matches">
      <!-- <i class="material-icons">group</i> -->
        <input type="submit" value="Matches">
    </form>

    <form action="/matching/">
     <!-- <i class="material-icons">redo</i> -->
        <input type="submit" value="Matching">
    </form>
  </div>


  <div class="matchCardStud" id="user_stud" style="display: none">
    <div class="matchesStud">
      <div class="matchInfoStud">
        <p class="matchNameStud"> MatchName </p>
        <p class="matchEmailStud"> MatchEmail </p>
        <a class="zoomLink" href="#"> Zoom Link: MATCHZOOMLINK</a>

        <!-- If the user didn't initiate the match and a meeting time hasn't be scheduled -->
          <button type="button" class="getTimes" >Schedule Meeting</button>
        <!-- If the user initiated the match and a meeting time hasn't be scheduled
          <p class="waiting"> A meeting time wil be set when MATCHNAME confirms with your schedule. </p> -->
        <!-- If a meeting as been set
          <p class="meetingTime">Meeting Time: MEETINGTIME </p> -->

      </div>

      <div class="matchInfoStud">
        <p class="matchNameStud"> MatchName </p>
        <p class="matchEmailStud"> MatchEmail </p>
        <a class="zoomLink" href="#"> Zoom Link: MATCHZOOMLINK</a>

        <!-- If the user didn't initiate the match and a meeting time hasn't be scheduled -->
        <!-- If the user initiated the match and a meeting time hasn't be scheduled -->
          <p class="waiting"> A meeting time wil be set when MATCHNAME confirms with your schedule. </p>
        <!-- If a meeting as been set
          <p class="meetingTime">Meeting Time: MEETINGTIME </p> -->

      </div>

      <div class="matchInfoStud">
        <p class="matchNameStud"> MatchName </p>
        <p class="matchEmailStud"> MatchEmail </p>
        <a class="zoomLink" href="#"> Zoom Link: MATCHZOOMLINK</a>

        <!-- If the user didn't initiate the match and a meeting time hasn't be scheduled -->
        <!-- If the user initiated the match and a meeting time hasn't be scheduled
          <p class="waiting"> A meeting time wil be set when MATCHNAME confirms with your schedule. </p> -->
        <!-- If a meeting as been set -->
          <p class="meetingTime">Meeting Time: MEETINGTIME </p>

      </div>
      <!-- overlay with a z value -->
      <!--
      <div class="timeSelection" id="id" style="display: none;">
        <i class="material-icons" id="close_time" onclick="exitTime()">close</i>
        <form method="post" id="time_form" enctype="multipart/form-data">
          <div id="time_input">
            <p> Please choose a time below that works to meet with for 15 minutes </p>
            <input type="password" name="matchId" value= style="display: none;">
            <p> If no times work, please email your match  to discuss alternate times </p>
            <input type="submit" id="schedule_meeting" value="Submit">
          </div>
        </form>
      </div>
-->
    </div>

  </div>
</body>

<script>
var type = "Student";

if(type == "Student"){
  document.getElementById("side_nav").className = "sidenavStud";
  document.getElementById("user_stud").style.display = "flex";
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

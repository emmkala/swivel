<!-- when there's no new matches to view, show this page which has a
listener for changes to student or company collection -->
<?php
include 'inc/firebase_init.php';
 ?>

<head>
 <link rel="stylesheet" type="text/css" href="../../stylesheets/match.css">
 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 <!-- <link rel="stylesheet" href="<https://use.typekit.net/qhr5ddp.css">-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="matchingBody">
  <div id="side_nav">
    <form action="/matches/<?= $userId ?>">
      <!-- <i class="material-icons">group</i> -->
        <input type="button" value="Matches">
    </form>

    <form action="/matching/<?= $userId ?>">
     <!-- <i class="material-icons">redo</i> -->
        <input type="button" value="Matching">
    </form>
  </div>

<div id="match_display">
  <center>

  <h2> You and <?= $matchName ?> Want to Meet!</h2>

  <h3> Please indicate the times you're available to have a 20 minute coffee chat!</h3>

  <form class="submitTimes" method="post" enctype="multipart/form-data">
    <!-- dummy times, will change -->
    <div class="days">
      <div class="timeTab" id="day_7">
        <h4 class="day">Monday, September 14th at:</h4>
        <input type="checkbox" name="day7_0" value="September 14th 9:30am EST">
          <label for="day7_1"> 9:30am EST </label>
        <input type="checkbox" name="day7_1" value="September 14th 10:00am EST">
          <label for="day7_1"> 10:00am EST </label>
        <input type="checkbox" name="day7_2" value="September 14th 10:30am EST">
          <label for="day7_2"> 10:30am EST </label>
        <input type="checkbox" name="day7_3" value="September 14th 11:00am EST">
          <label for="day7_3"> 11:00am EST </label>
        <input type="checkbox" name="day7_4" value="September 14th 11:30am EST">
          <label for="day7_4"> 11:30am EST </label>
        <input type="checkbox" name="day7_5" value="September 14th 12:00pm EST">
          <label for="day7_5"> 12:00pm EST </label>
        <input type="checkbox" name="day7_6" value="September 14th 12:30pm EST">
          <label for="day7_6"> 12:30pm EST </label>
        <input type="checkbox" name="day7_7" value="September 14th 1:00pm EST">
          <label for="day7_7"> 1:00pm EST </label>
        <input type="checkbox" name="day7_8" value="September 14th 1:30pm EST">
          <label for="day7_8"> 1:30pm EST </label>
        <input type="checkbox" name="day7_9" value="September 14th 2:00pm EST">
          <label for="day7_9"> 2:00pm EST </label>
        <input type="checkbox" name="day7_10" value="September 14th 2:30pm EST">
          <label for="day7_10"> 2:30pm EST </label>
        <input type="checkbox" name="day7_11" value="September 14th 3:00pm EST">
          <label for="day7_11"> 3:00pm EST </label>
        <input type="checkbox" name="day7_12" value="September 14th 3:30pm EST">
          <label for="day7_12"> 3:30pm EST </label>
        <input type="checkbox" name="day7_13" value="September 14th 4:00pm EST">
          <label for="day7_13"> 4:00pm EST </label>
      </div>
      <div class="timeTab" id="day_3">
        <h4 class="day">Tuesday, September 15th at:</h4>
        <input type="checkbox" name="day3_0" value="September 15th 9:30am EST">
          <label for="day3_1"> 9:30am EST </label>
        <input type="checkbox" name="day3_1" value="September 15th 10:00am EST">
          <label for="day3_1"> 10:00am EST </label>
        <input type="checkbox" name="day3_2" value="September 15th 10:30am EST">
          <label for="day3_2"> 10:30am EST </label>
        <input type="checkbox" name="day3_3" value="September 15th 11:00am EST">
          <label for="day3_3"> 11:00am EST </label>
        <input type="checkbox" name="day3_4" value="September 15th 11:30am EST">
          <label for="day3_4"> 11:30am EST </label>
        <input type="checkbox" name="day3_5" value="September 15th 12:00pm EST">
          <label for="day3_5"> 12:00pm EST </label>
        <input type="checkbox" name="day3_6" value="September 15th 12:30pm EST">
          <label for="day3_6"> 12:30pm EST </label>
        <input type="checkbox" name="day3_7" value="September 15th 1:00pm EST">
          <label for="day3_7"> 1:00pm EST </label>
        <input type="checkbox" name="day3_8" value="September 15th 1:30pm EST">
          <label for="day3_8"> 1:30pm EST </label>
        <input type="checkbox" name="day3_9" value="September 15th 2:00pm EST">
          <label for="day3_9"> 2:00pm EST </label>
        <input type="checkbox" name="day3_10" value="September 15th 2:30pm EST">
          <label for="day3_10"> 2:30pm EST </label>
        <input type="checkbox" name="day3_11" value="September 15th 3:00pm EST">
          <label for="day3_11"> 3:00pm EST </label>
        <input type="checkbox" name="day3_12" value="September 15th 3:30pm EST">
          <label for="day3_12"> 3:30pm EST </label>
        <input type="checkbox" name="day3_13" value="September 15th 4:00pm EST">
          <label for="day3_13"> 4:00pm EST </label>
      </div>
      <div class="timeTab" id="day_6">
        <h4 class="day">Wednesday, September 16th at:</h4>
        <input type="checkbox" name="day6_0" value="September 16th 9:30am EST">
          <label for="day6_1"> 9:30am EST </label>
        <input type="checkbox" name="day6_1" value="September 16th 10:00am EST">
          <label for="day6_1"> 10:00am EST </label>
        <input type="checkbox" name="day6_2" value="September 16th 10:30am EST">
          <label for="day6_2"> 10:30am EST </label>
        <input type="checkbox" name="day6_3" value="September 16th 11:00am EST">
          <label for="day6_3"> 11:00am EST </label>
        <input type="checkbox" name="day6_4" value="September 16th 11:30am EST">
          <label for="day6_4"> 11:30am EST </label>
        <input type="checkbox" name="day6_5" value="September 16th 12:00pm EST">
          <label for="day6_5"> 12:00pm EST </label>
        <input type="checkbox" name="day6_6" value="September 16th 12:30pm EST">
          <label for="day6_6"> 12:30pm EST </label>
        <input type="checkbox" name="day6_7" value="September 16th 1:00pm EST">
          <label for="day6_7"> 1:00pm EST </label>
        <input type="checkbox" name="day6_8" value="September 16th 1:30pm EST">
          <label for="day6_8"> 1:30pm EST </label>
        <input type="checkbox" name="day6_9" value="September 16th 2:00pm EST">
          <label for="day6_9"> 2:00pm EST </label>
        <input type="checkbox" name="day6_10" value="September 16th 2:30pm EST">
          <label for="day6_10"> 2:30pm EST </label>
        <input type="checkbox" name="day6_11" value="September 16th 3:00pm EST">
          <label for="day6_11"> 3:00pm EST </label>
        <input type="checkbox" name="day6_12" value="September 16th 3:30pm EST">
          <label for="day6_12"> 3:30pm EST </label>
        <input type="checkbox" name="day6_13" value="September 16th 4:00pm EST">
          <label for="day6_13"> 4:00pm EST </label>
      </div>
      <div class="timeTab" id="day_4">
        <h4 class="day">Thursday, September 17th at:</h4>
        <input type="checkbox" name="day4_0" value="September 17th 9:30am EST">
          <label for="day4_1"> 9:30am EST </label>
        <input type="checkbox" name="day4_1" value="September 17th 10:00am EST">
          <label for="day4_1"> 10:00am EST </label>
        <input type="checkbox" name="day4_2" value="September 17th 10:30am EST">
          <label for="day4_2"> 10:30am EST </label>
        <input type="checkbox" name="day4_3" value="September 17th 11:00am EST">
          <label for="day4_3"> 11:00am EST </label>
        <input type="checkbox" name="day4_4" value="September 17th 11:30am EST">
          <label for="day4_4"> 11:30am EST </label>
        <input type="checkbox" name="day4_5" value="September 17th 12:00pm EST">
          <label for="day4_5"> 12:00pm EST </label>
        <input type="checkbox" name="day4_6" value="September 17th 12:30pm EST">
          <label for="day4_6"> 12:30pm EST </label>
        <input type="checkbox" name="day4_7" value="September 17th 1:00pm EST">
          <label for="day4_7"> 1:00pm EST </label>
        <input type="checkbox" name="day4_8" value="September 17th 1:30pm EST">
          <label for="day4_8"> 1:30pm EST </label>
        <input type="checkbox" name="day4_9" value="September 17th 2:00pm EST">
          <label for="day4_9"> 2:00pm EST </label>
        <input type="checkbox" name="day4_10" value="September 17th 2:30pm EST">
          <label for="day4_10"> 2:30pm EST </label>
        <input type="checkbox" name="day4_11" value="September 17th 3:00pm EST">
          <label for="day4_11"> 3:00pm EST </label>
        <input type="checkbox" name="day4_12" value="September 17th 3:30pm EST">
          <label for="day4_12"> 3:30pm EST </label>
        <input type="checkbox" name="day4_13" value="September 17th 4:00pm EST">
          <label for="day4_13"> 4:00pm EST </label>
      </div>
      <div class="timeTab" id="day_5">
        <h4 class="day">Friday, September 18th at:</h4>
        <input type="checkbox" name="day5_0" value="September 18th 9:30am EST">
          <label for="day5_1"> 9:30am EST </label>
        <input type="checkbox" name="day5_1" value="September 18th 10:00am EST">
          <label for="day5_1"> 10:00am EST </label>
        <input type="checkbox" name="day5_2" value="September 18th 10:30am EST">
          <label for="day5_2"> 10:30am EST </label>
        <input type="checkbox" name="day5_3" value="September 18th 11:00am EST">
          <label for="day5_3"> 11:00am EST </label>
        <input type="checkbox" name="day5_4" value="September 18th 11:30am EST">
          <label for="day5_4"> 11:30am EST </label>
        <input type="checkbox" name="day5_5" value="September 18th 12:00pm EST">
          <label for="day5_5"> 12:00pm EST </label>
        <input type="checkbox" name="day5_6" value="September 18th 12:30pm EST">
          <label for="day5_6"> 12:30pm EST </label>
        <input type="checkbox" name="day5_7" value="September 18th 1:00pm EST">
          <label for="day5_7"> 1:00pm EST </label>
        <input type="checkbox" name="day5_8" value="September 18th 1:30pm EST">
          <label for="day5_8"> 1:30pm EST </label>
        <input type="checkbox" name="day5_9" value="September 18th 2:00pm EST">
          <label for="day5_9"> 2:00pm EST </label>
        <input type="checkbox" name="day5_10" value="September 18th 2:30pm EST">
          <label for="day5_10"> 2:30pm EST </label>
        <input type="checkbox" name="day5_11" value="September 18th 3:00pm EST">
          <label for="day5_11"> 3:00pm EST </label>
        <input type="checkbox" name="day5_12" value="September 18th 3:30pm EST">
          <label for="day5_12"> 3:30pm EST </label>
        <input type="checkbox" name="day5_13" value="September 18th 4:00pm EST">
          <label for="day5_13"> 4:00pm EST </label>
      </div>
    </div>
    <br>

    <label for="other"> If none of these times work, please indicate a time: </label>
    <input type="text" name="other" placeholder="August 19th at 12:15pm EST"><br><br>
    <input class="submitTimes" type="submit">
  </form>

</center>

</div>

</body>

<script>

var type = "<?php echo $userType ?>";

if(type == "Student"){
  document.getElementById("side_nav").className = "sidenavStud";
  document.getElementById("match_display").className = "displayStud";

} else if(type == "Company") {
  document.getElementById("side_nav").className = "sidenavComp";
  document.getElementById("match_display").className = "displayComp";

}


</script>

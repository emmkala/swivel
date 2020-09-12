<!-- when there's no new matches to view, show this page which has a
listener for changes to student or company collection -->

<head>
 <link rel="stylesheet" type="text/css" href="../../stylesheets/match.css">
 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 <!-- <link rel="stylesheet" href="<https://use.typekit.net/qhr5ddp.css">-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="matchingBody">
  <div id="side_nav">
    <form action="/matches/">
      <!-- <i class="material-icons">group</i> -->
        <input type="button" value="Matches">
    </form>

    <form action="/matching/">
     <!-- <i class="material-icons">redo</i> -->
        <input type="button" value="Matching">
    </form>
  </div>

<div id="match_display">
  <center>

  <h2> You and  Want to Meet!</h2>

  <h3> Please indicate the times you're available to have a 20 minute coffee chat!</h3>

  <form class="submitTimes" method="post" enctype="multipart/form-data">
    <!-- dummy times, will change -->
    <div class="days">
      <div class="timeTab" id="day_2">
        <h4 class="day">Tuesday, August 18th at:</h4>
        <input type="checkbox" name="day2_0" value="August 18th 9:30am EST">
          <label for="day2_1"> 9:30am EST </label>
        <input type="checkbox" name="day2_1" value="August 18th 10:00am EST">
          <label for="day2_1"> 10:00am EST </label>
        <input type="checkbox" name="day2_2" value="August 18th 10:30am EST">
          <label for="day2_2"> 10:30am EST </label>
        <input type="checkbox" name="day2_3" value="August 18th 11:00am EST">
          <label for="day2_3"> 11:00am EST </label>
        <input type="checkbox" name="day2_4" value="August 18th 11:30am EST">
          <label for="day2_4"> 11:30am EST </label>
        <input type="checkbox" name="day2_5" value="August 18th 12:00pm EST">
          <label for="day2_5"> 12:00pm EST </label>
        <input type="checkbox" name="day2_6" value="August 18th 12:30pm EST">
          <label for="day2_6"> 12:30pm EST </label>
        <input type="checkbox" name="day2_7" value="August 18th 1:00pm EST">
          <label for="day2_7"> 1:00pm EST </label>
        <input type="checkbox" name="day2_8" value="August 18th 1:30pm EST">
          <label for="day2_8"> 1:30pm EST </label>
        <input type="checkbox" name="day2_9" value="August 18th 2:00pm EST">
          <label for="day2_9"> 2:00pm EST </label>
        <input type="checkbox" name="day2_10" value="August 18th 2:30pm EST">
          <label for="day2_10"> 2:30pm EST </label>
        <input type="checkbox" name="day2_11" value="August 18th 3:00pm EST">
          <label for="day2_11"> 3:00pm EST </label>
        <input type="checkbox" name="day2_12" value="August 18th 3:30pm EST">
          <label for="day2_12"> 3:30pm EST </label>
        <input type="checkbox" name="day2_13" value="August 18th 4:00pm EST">
          <label for="day2_13"> 4:00pm EST </label>
      </div>
      <div class="timeTab" id="day_3">
        <h4 class="day">Wednesday, August 19th at:</h4>
        <input type="checkbox" name="day3_0" value="August 19th 9:30am EST">
          <label for="day3_1"> 9:30am EST </label>
        <input type="checkbox" name="day3_1" value="August 19th 10:00am EST">
          <label for="day3_1"> 10:00am EST </label>
        <input type="checkbox" name="day3_2" value="August 19th 10:30am EST">
          <label for="day3_2"> 10:30am EST </label>
        <input type="checkbox" name="day3_3" value="August 19th 11:00am EST">
          <label for="day3_3"> 11:00am EST </label>
        <input type="checkbox" name="day3_4" value="August 19th 11:30am EST">
          <label for="day3_4"> 11:30am EST </label>
        <input type="checkbox" name="day3_5" value="August 19th 12:00pm EST">
          <label for="day3_5"> 12:00pm EST </label>
        <input type="checkbox" name="day3_6" value="August 19th 12:30pm EST">
          <label for="day3_6"> 12:30pm EST </label>
        <input type="checkbox" name="day3_7" value="August 19th 1:00pm EST">
          <label for="day3_7"> 1:00pm EST </label>
        <input type="checkbox" name="day3_8" value="August 19th 1:30pm EST">
          <label for="day3_8"> 1:30pm EST </label>
        <input type="checkbox" name="day3_9" value="August 19th 2:00pm EST">
          <label for="day3_9"> 2:00pm EST </label>
        <input type="checkbox" name="day3_10" value="August 19th 2:30pm EST">
          <label for="day3_10"> 2:30pm EST </label>
        <input type="checkbox" name="day3_11" value="August 19th 3:00pm EST">
          <label for="day3_11"> 3:00pm EST </label>
        <input type="checkbox" name="day3_12" value="August 19th 3:30pm EST">
          <label for="day3_12"> 3:30pm EST </label>
        <input type="checkbox" name="day3_13" value="August 19th 4:00pm EST">
          <label for="day3_13"> 4:00pm EST </label>
      </div>
      <div class="timeTab" id="day_4">
        <h4 class="day">Thursday, August 20th at:</h4>
        <input type="checkbox" name="day4_0" value="August 20th 9:30am EST">
          <label for="day4_1"> 9:30am EST </label>
        <input type="checkbox" name="day4_1" value="August 20th 10:00am EST">
          <label for="day4_1"> 10:00am EST </label>
        <input type="checkbox" name="day4_2" value="August 20th 10:30am EST">
          <label for="day4_2"> 10:30am EST </label>
        <input type="checkbox" name="day4_3" value="August 20th 11:00am EST">
          <label for="day4_3"> 11:00am EST </label>
        <input type="checkbox" name="day4_4" value="August 20th 11:30am EST">
          <label for="day4_4"> 11:30am EST </label>
        <input type="checkbox" name="day4_5" value="August 20th 12:00pm EST">
          <label for="day4_5"> 12:00pm EST </label>
        <input type="checkbox" name="day4_6" value="August 20th 12:30pm EST">
          <label for="day4_6"> 12:30pm EST </label>
        <input type="checkbox" name="day4_7" value="August 20th 1:00pm EST">
          <label for="day4_7"> 1:00pm EST </label>
        <input type="checkbox" name="day4_8" value="August 20th 1:30pm EST">
          <label for="day4_8"> 1:30pm EST </label>
        <input type="checkbox" name="day4_9" value="August 20th 2:00pm EST">
          <label for="day4_9"> 2:00pm EST </label>
        <input type="checkbox" name="day4_10" value="August 20th 2:30pm EST">
          <label for="day4_10"> 2:30pm EST </label>
        <input type="checkbox" name="day4_11" value="August 20th 3:00pm EST">
          <label for="day4_11"> 3:00pm EST </label>
        <input type="checkbox" name="day4_12" value="August 20th 3:30pm EST">
          <label for="day4_12"> 3:30pm EST </label>
        <input type="checkbox" name="day4_13" value="August 20th 4:00pm EST">
          <label for="day4_13"> 4:00pm EST </label>
      </div>
      <div class="timeTab" id="day_4">
        <h4 class="day">Thursday, August 20th at:</h4>
        <input type="checkbox" name="day4_0" value="August 20th 9:30am EST">
          <label for="day4_1"> 9:30am EST </label>
        <input type="checkbox" name="day4_1" value="August 20th 10:00am EST">
          <label for="day4_1"> 10:00am EST </label>
        <input type="checkbox" name="day4_2" value="August 20th 10:30am EST">
          <label for="day4_2"> 10:30am EST </label>
        <input type="checkbox" name="day4_3" value="August 20th 11:00am EST">
          <label for="day4_3"> 11:00am EST </label>
        <input type="checkbox" name="day4_4" value="August 20th 11:30am EST">
          <label for="day4_4"> 11:30am EST </label>
        <input type="checkbox" name="day4_5" value="August 20th 12:00pm EST">
          <label for="day4_5"> 12:00pm EST </label>
        <input type="checkbox" name="day4_6" value="August 20th 12:30pm EST">
          <label for="day4_6"> 12:30pm EST </label>
        <input type="checkbox" name="day4_7" value="August 20th 1:00pm EST">
          <label for="day4_7"> 1:00pm EST </label>
        <input type="checkbox" name="day4_8" value="August 20th 1:30pm EST">
          <label for="day4_8"> 1:30pm EST </label>
        <input type="checkbox" name="day4_9" value="August 20th 2:00pm EST">
          <label for="day4_9"> 2:00pm EST </label>
        <input type="checkbox" name="day4_10" value="August 20th 2:30pm EST">
          <label for="day4_10"> 2:30pm EST </label>
        <input type="checkbox" name="day4_11" value="August 20th 3:00pm EST">
          <label for="day4_11"> 3:00pm EST </label>
        <input type="checkbox" name="day4_12" value="August 20th 3:30pm EST">
          <label for="day4_12"> 3:30pm EST </label>
        <input type="checkbox" name="day4_13" value="August 20th 4:00pm EST">
          <label for="day4_13"> 4:00pm EST </label>
      </div>
      <div class="timeTab" id="day_4">
        <h4 class="day">Thursday, August 20th at:</h4>
        <input type="checkbox" name="day4_0" value="August 20th 9:30am EST">
          <label for="day4_1"> 9:30am EST </label>
        <input type="checkbox" name="day4_1" value="August 20th 10:00am EST">
          <label for="day4_1"> 10:00am EST </label>
        <input type="checkbox" name="day4_2" value="August 20th 10:30am EST">
          <label for="day4_2"> 10:30am EST </label>
        <input type="checkbox" name="day4_3" value="August 20th 11:00am EST">
          <label for="day4_3"> 11:00am EST </label>
        <input type="checkbox" name="day4_4" value="August 20th 11:30am EST">
          <label for="day4_4"> 11:30am EST </label>
        <input type="checkbox" name="day4_5" value="August 20th 12:00pm EST">
          <label for="day4_5"> 12:00pm EST </label>
        <input type="checkbox" name="day4_6" value="August 20th 12:30pm EST">
          <label for="day4_6"> 12:30pm EST </label>
        <input type="checkbox" name="day4_7" value="August 20th 1:00pm EST">
          <label for="day4_7"> 1:00pm EST </label>
        <input type="checkbox" name="day4_8" value="August 20th 1:30pm EST">
          <label for="day4_8"> 1:30pm EST </label>
        <input type="checkbox" name="day4_9" value="August 20th 2:00pm EST">
          <label for="day4_9"> 2:00pm EST </label>
        <input type="checkbox" name="day4_10" value="August 20th 2:30pm EST">
          <label for="day4_10"> 2:30pm EST </label>
        <input type="checkbox" name="day4_11" value="August 20th 3:00pm EST">
          <label for="day4_11"> 3:00pm EST </label>
        <input type="checkbox" name="day4_12" value="August 20th 3:30pm EST">
          <label for="day4_12"> 3:30pm EST </label>
        <input type="checkbox" name="day4_13" value="August 20th 4:00pm EST">
          <label for="day4_13"> 4:00pm EST </label>
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

var type = "Student";

if(type == "Student"){
  document.getElementById("side_nav").className = "sidenavStud";
  document.getElementById("match_display").className = "displayStud";

} else if(type == "Company") {
  document.getElementById("side_nav").className = "sidenavComp";
  document.getElementById("match_display").className = "displayComp";

}


</script>

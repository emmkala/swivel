<!-- Show on match init -->

<h5> MATCH </h5>

<h3> You and <?= $matchName ?> Matched!</h3>
<h4> Here's your Zoom Link! (You'll be able to come back to it on you Matches page) </h4>
<?= $zoomLink ?>

<h2> Please indicate the times you're available to have a 20 minute coffee chat!</h2>

<form method="post" enctype="multipart/form-data">
  <!-- dummy times, will change -->
  <div id="day_1">
    <h6 class="day">Saturday, August 15th at:</h6>
    <input type="checkbox" name="day1_1" value="10:30am_EST">
      <label for="day1_1"> 10:30am EST </label>
    <input type="checkbox" name="day1_2" value="11:00am_EST">
      <label for="day1_2"> 11:00am EST </label>
    <input type="checkbox" name="day1_3" value="11:30am_EST">
      <label for="day1_3"> 11:30am EST </label>
    <input type="checkbox" name="day1_4" value="12:00pm_EST">
      <label for="day1_4"> 12:00pm EST </label>
    <input type="checkbox" name="day1_5" value="12:30pm_EST">
      <label for="day1_5"> 12:30pm EST </label>
    <input type="checkbox" name="day1_6" value="1:00pm_EST">
      <label for="day1_6"> 1:00pm EST </label>
    <input type="checkbox" name="day1_7" value="1:30pm_EST">
      <label for="day1_7"> 1:30pm EST </label>
    <input type="checkbox" name="day1_8" value="2:00pm_EST">
      <label for="day1_8"> 2:00pm EST </label>
    <input type="checkbox" name="day1_9" value="2:30pm_EST">
      <label for="day1_9"> 2:30pm EST </label>
    <input type="checkbox" name="day1_10" value="3:00pm_EST">
      <label for="day1_10"> 3:00pm EST </label>
    <input type="checkbox" name="day1_11" value="3:30pm_EST">
      <label for="day1_11"> 3:30pm EST </label>
    <input type="checkbox" name="day1_12" value="4:00pm_EST">
      <label for="day1_12"> 4:00pm EST </label>
  </div>
  <div id="day_2">
    <h6 class="day">Sunday, August 16th at:</h6>
    <input type="checkbox" name="day2_1" value="10:30am_EST">
      <label for="day2_1"> 10:30am EST </label>
    <input type="checkbox" name="day2_2" value="11:00am_EST">
      <label for="day2_2"> 11:00am EST </label>
    <input type="checkbox" name="day2_3" value="11:30am_EST">
      <label for="day2_3"> 11:30am EST </label>
    <input type="checkbox" name="day2_4" value="12:00pm_EST">
      <label for="day2_4"> 12:00pm EST </label>
    <input type="checkbox" name="day2_5" value="12:30pm_EST">
      <label for="day2_5"> 12:30pm EST </label>
    <input type="checkbox" name="day2_6" value="1:00pm_EST">
      <label for="day2_6"> 1:00pm EST </label>
    <input type="checkbox" name="day2_7" value="1:30pm_EST">
      <label for="day2_7"> 1:30pm EST </label>
    <input type="checkbox" name="day2_8" value="2:00pm_EST">
      <label for="day2_8"> 2:00pm EST </label>
    <input type="checkbox" name="day2_9" value="2:30pm_EST">
      <label for="day2_9"> 2:30pm EST </label>
    <input type="checkbox" name="day2_10" value="3:00pm_EST">
      <label for="day2_10"> 3:00pm EST </label>
    <input type="checkbox" name="day2_11" value="3:30pm_EST">
      <label for="day2_11"> 3:30pm EST </label>
    <input type="checkbox" name="day2_12" value="4:00pm_EST">
      <label for="day2_12"> 4:00pm EST </label>
  </div>
  <div id="day_3">
    <h6 class="day">Monday, August 17th at:</h6>
    <input type="checkbox" name="day3_1" value="10:30am_EST">
      <label for="day3_1"> 10:30am EST </label>
    <input type="checkbox" name="day3_2" value="11:00am_EST">
      <label for="day3_2"> 11:00am EST </label>
    <input type="checkbox" name="day3_3" value="11:30am_EST">
      <label for="day3_3"> 11:30am EST </label>
    <input type="checkbox" name="day3_4" value="12:00pm_EST">
      <label for="day3_4"> 12:00pm EST </label>
    <input type="checkbox" name="day3_5" value="12:30pm_EST">
      <label for="day3_5"> 12:30pm EST </label>
    <input type="checkbox" name="day3_6" value="1:00pm_EST">
      <label for="day3_6"> 1:00pm EST </label>
    <input type="checkbox" name="day3_7" value="1:30pm_EST">
      <label for="day3_7"> 1:30pm EST </label>
    <input type="checkbox" name="day3_8" value="2:00pm_EST">
      <label for="day3_8"> 2:00pm EST </label>
    <input type="checkbox" name="day3_9" value="2:30pm_EST">
      <label for="day3_9"> 2:30pm EST </label>
    <input type="checkbox" name="day3_10" value="3:00pm_EST">
      <label for="day3_10"> 3:00pm EST </label>
    <input type="checkbox" name="day3_11" value="3:30pm_EST">
      <label for="day3_11"> 3:30pm EST </label>
    <input type="checkbox" name="day3_12" value="4:00pm_EST">
      <label for="day3_12"> 4:00pm EST </label>
  </div>
  <!-- maybe later
  <input type="button" onClick="nextPrev(1)" value="Next">
  <input type="button" onClick="nextPrev(-1)" value="Back">
  -->
  <input type="text" name="other" placeholder="August 19th at 12:15pm EST">
    <label for="other"> If none of these times work, please indicate a time: </label>
  <input type="submit">
</form>

<p> Check back on your matches page after <?= $matchName ?> indicates their avalabilities! </p>

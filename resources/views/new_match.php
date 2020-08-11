<!-- Show on match init -->

<h5> MATCH </h5>

<h3> You and <?php $matchName ?> Matched!</h3>
<h2> Please indicate the times you're available to have a 20 minute coffee chat!</h2>

<form method="post" enctype="multipart/form-data">
  <!-- dummy times, will change -->
  <div id="day_1">
    <h6 class="day">Saturday, August 15th at:</h6>
  <input type="checkbox" name="day1_1" value="10:30am_EST">
    <label for="prim1"> 10:30am EST </label>
  <input type="checkbox" name="day1_2" value="11:00am_EST">
    <label for="prim2"> 11:00am EST </label>
  <input type="checkbox" name="day1_3" value="11:30am_EST">
    <label for="prim3"> 11:30am EST </label>
  <input type="checkbox" name="day1_4" value="12:00pm_EST">
    <label for="prim4"> 12:00pm EST </label>
  <input type="checkbox" name="day1_5" value="12:30pm_EST">
    <label for="prim5"> 12:30pm EST </label>
  <input type="checkbox" name="day1_6" value="1:00pm_EST">
    <label for="prim6"> 1:00pm EST </label>
  <input type="checkbox" name="day1_7" value="1:30pm_EST">
    <label for="prim7"> 1:30pm EST </label>
  <input type="checkbox" name="day1_8" value="2:00pm_EST">
    <label for="prim8"> 2:00pm EST </label>
  <input type="checkbox" name="day1_9" value="2:30pm_EST">
    <label for="prim9"> 2:30pm EST </label>
  <input type="checkbox" name="pday1_10" value="3:00pm_EST">
    <label for="prim10"> 3:00pm EST </label>
  <input type="checkbox" name="pday1_11" value="3:30pm_EST">
    <label for="prim11"> 3:30pm EST </label>
  <input type="checkbox" name="pday1_12" value="4:00pm_EST">
    <label for="prim12"> 4:00pm EST </label>
  </div>

</form>

<p> Check bake on your matches page after <?php $matchName ?> indicates their avalabilities! </p>

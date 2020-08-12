<!-- first page seen after sign up/sign in -->
<?php
include "inc/firebase_init.php";
 ?>

<html>
  <body>
    <form action="/matches/<?= $uid ?>">
        <input type="submit" value="Matches" />
    </form>

    <div id="show_companies" style="display: none;">
        <h2>Student page - showing companies</h2>
        <!-- Match cards -->
        <div class="compCard">
          <div id="comp_overview">
          <!-- <img> -->
            <h4 id="comp_name"></h4>
            <h5 id="position_company"></h5>
            <h6 id="comp_location"></h6>
            <p id="about"></p>
          </div>

          <div id="general">
            <h6 class="compTitle" id="general_title">General Info</h6>
            <div id="general_info">
              <p id="size"></p>
              <p id="site"></p>
            </div>
          </div>

          <div id="purpose">
            <h6 class="compTitle" id="purpose_title">Company Purpose</h6>
            <p id="purpose_info"></p>
          </div>

          <div id="comp_skills_vals">
            <div id="somp_skills">
              <h6 class="compTitle" id="skills_title">Looking For:</h6>
              <div id="tech">
                <!-- Add p tag for every skill listed-->
              </div>
              <div id="soft">
                <!-- Add p tag for every skill listed-->
              </div>
            </div>

            <div id="comp_values">
              <h6 class="compTitle" id="looking_title">Company Values</h6>
              <div id="values">
                <!-- Add p tag for every value listed-->
              </div>
            </div>
          </div>


          <div id="life">
            <h6 class="compTitle" id="life_title">Life At </h6> <!-- Company name -->
            <p id="life_info"></p>
            <div id="special">
              <!-- Add p tag for every "differentiator" listed-->
            </div>
          </div>

          <form method="post" enctype="multipart/form-data">
            <input type="password" name="prospectId" id="compId" value="" style="display: none;">
            <input type="submit" name="choice" value="Interested">
            <input type="submit" name="choice" value="Skip">
          </form>

      </div>
    </div>


    <div id="show_students" style="display: none;">
      <h2>Company page - showing students</h2>
      <div class="studCard">
        <div id="stud_overview">
        <!-- <img> -->
          <h4 id="stud_name"></h4>
          <h5 id="school"></h4>
          <h6 id="degree_major"></h6>
          <p id="stud_location"></p>
        </div>

        <div id="experience">
          <h6 class="studTitle" id="experience_title">Experience Highlights</h6>
          <div id="experience_details">
            <p id="exp1"></p>
            <p id="exp2"></p>
            <p id="exp3"></p>
            <p id="magic"></p>
          </div>
        </div>

        <div id="stud_skills_vals">
          <div id="stud_skills">
            <h6 class="studTitle" id="skills_title">Skills</h6>
            <div id="tech">
              <!-- Add p tag for every skill listed-->
            </div>
            <div id="soft">
              <!-- Add p tag for every skill listed-->
            </div>
          </div>

          <div id="stud_values">
            <h6 class="studTitle" id="values_title">Personal Values</h6>
            <div id="values">
              <!-- Add p tag for every value listed-->
            </div>
          </div>

        </div>

        <div id="work">
          <div id="type">
            <h6 class="studTitle" id="work_title">Looking For</h6> <!-- Company name -->
            <div id="workType">
            <!-- Add p tag for every "differentiator" listed-->
            </div>
          </div>

          <div id="wants">
            <!-- add a p tag for every emp -->
          </div>
        </div>

        <form method="post" enctype="multipart/form-data">
          <input type="password" name="prospectId" id="studId" value="" style="display: none;">
          <input type="submit" name="choice" value="Interested">
          <input type="submit" name="choice" value="Skip">
        </form>

      </div>
    </div>

  </body>
</html>


<script>

var db = firebase.firestore();
var studCollection = db.collection("student");
var compCollection = db.collection("company");

var uid = "<?php echo $uid ?>"
var type = "<?php echo $type ?>";

<?php
  $js_array = json_encode($show);
  echo "var notSeen = ". $js_array . ";\n";
?>

if(type == "Student"){
  document.getElementById("show_companies").style.display = "inline";
} else {
  document.getElementById("show_students").style.display = "inline";
}

firebase.auth().onAuthStateChanged(function(user) {
  if(user){
    if(type == "Student"){
      document.getElementById("compId").value = notSeen.notSeenIds[0];

      // loop for all elements in notSeen
      compCollection.doc(notSeen.notSeenIds[0]).get().then(function(doc){
        if(doc.exists){
          var docData = doc.data();
          // set all card data
          document.getElementById("comp_name").innerHTML = docData.fname;

          // only set latest if the curr docs creation is older than the curr users latest
          var compCreationTime = docData.created;

          studCollection.doc(user.uid).get().then(function(userDoc) {
            // get curr users latest
            var userData = userDoc.data();
            var currLatest = userData.latestSeen;

            // if curr company was created after curr latest, or there isnt a current one listed
            if(currLatest == "" || (compCreationTime >= currLatest)){
              // set new curr latest
              studCollection.doc(user.uid).update({
                latestSeen: compCreationTime,
              });

            }
          });


        } else {
          console.log("Nope");
        }
      });

    } else if(type == "Company"){
      console.log("Company Side");

      document.getElementById("studId").value = notSeen.notSeenIds[0];

      // loop for all elements in notSeen
      studCollection.doc(notSeen.notSeenIds[0]).get().then(function(doc){
        if(doc.exists){
          var docData = doc.data();

          // set all card data
          document.getElementById("stud_name").innerHTML = docData.fname;

          var studCreationTime = docData.created;

          compCollection.doc(user.uid).get().then(function(userDoc) {
            // get curr users latest
            var userData = userDoc.data();
            var currLatest = userData.latestSeen;

            // if curr company was created after curr latest, or there isnt a current one listed
            if(currLatest == "" || (studCreationTime >= currLatest)){
              // set new curr latest
              var newLatest = docData.created;
              compCollection.doc(user.uid).update({
                latestSeen: newLatest,
              });

            }
          });
        } else {
          console.log("Nope");
        }
      });
    }

  } else {
    console.log(error);
  }
});


 </script>

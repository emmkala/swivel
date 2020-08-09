<!-- first page seen after sign up/sign in -->
<?php
include "inc/firebase_init.php";
 ?>

<html>
  <body>

    <div id="showCompanies">
    <h2>Student page - showing companies</h2>
    <!-- Match cards -->
    <div class="card">
      <div id="overview">
      <!-- <img> -->
        <h4 id="name"></h4>
        <h5 id="position_company"></h5>
        <h6 id="location"></h6>
        <p id="about"></p>
      </div>

      <div id="general">
        <h6 class="title" id="general_title">General Info</h6>
        <div id="general_info">
          <p id="size"></p>
          <p id="site"></p>
        </div>
      </div>

      <div id="purpose">
        <h6 class="title" id="purpose_title">Company Purpose</h6>
        <p id="purpose_info"></p>
      </div>

      <div id="skills">
        <h6 class="title" id="skills_title">Looking For:</h6>
        <div id="tech">
          <!-- Add p tag for every skill listed-->
        </div>
        <div id="soft">
          <!-- Add p tag for every skill listed-->
        </div>
      </div>

      <div id="values">
        <h6 class="title" id="looking_title">Company Values</h6>
        <div id="values">
          <!-- Add p tag for every value listed-->
        </div>
      </div>

      <div id="life">
        <h6 class="title" id="life_title">Life At </h6> <!-- Company name -->
        <p id="life_info"></p>
        <div id="special">
          <!-- Add p tag for every "differentiator" listed-->
        </div>
      </div>

    </div>


    <div id="showStudents">
    <h2>Company page - showing students</h2>

    </div>

  </body>
</html>


<script>

var db = firebase.firestore();

var type = "<?php echo $type ?>";
if(type == "Student"){
  document.getElementById("showStudents").style.display = "none";

  <?php
    $js_array = json_encode($notSeen);
    echo "var notSeen = ". $js_array . ";\n";
  ?>
  // loop for all elements in notSeen
  db.collection("company").doc(notSeen.compIds[0]).get().then(function(doc){
    if(doc.exists){
      var docData = doc.data();
      // set all card data
      document.getElementById("name").innerHTML = docData.FName;

      // use callback() function to continue looping when someone chooses interested or skip

    } else {
      console.log("Nope");
    }
  });

  // onClick() interested button
    // interested(userId, companyId);

  //onClick() skip button
    // skip(userId, companyId)




} else if(type == "Company"){
  document.getElementById("showCompanies").style.display = "none";
}

// removes company/student id from notSeen array into interested array
// function interested(userId, interestedId) {}

// removes company/student id from notSeen array into skip array
// function skip(userId, skipId) {}



 </script>

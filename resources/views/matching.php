<!-- first page seen after sign up/sign in -->
<?php
include "inc/firebase_init.php";
 ?>

<html>
  <body>

    <div id="show_companies">
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

        <form method="post" enctype="multipart/form-data">
          <input type="password" name="prospectId" id="compId" value="" style="display: none;">
          <input type="submit" name="choice" value="Interested">
          <input type="submit" name="choice" value="Skip">
        </form>

    </div>


    <div id="show_students">
      <h2>Company page - showing students</h2>

    </div>

  </body>
</html>


<script>

var db = firebase.firestore();

var type = "<?php echo $type ?>";

<?php
  $js_array = json_encode($show);
  echo "var notSeen = ". $js_array . ";\n";
?>

if(type == "Student"){
  document.getElementById("show_students").style.display = "none";

  document.getElementById("compId").value = notSeen.notSeenIds[0];

  // loop for all elements in notSeen
  db.collection("company").doc(notSeen.notSeenIds[0]).get().then(function(doc){
    if(doc.exists){
      var docData = doc.data();
      // set all card data
      document.getElementById("name").innerHTML = docData.fname;


    } else {
      console.log("Nope");
    }
  });

} else if(type == "Company"){
  document.getElementById("show_companies").style.display = "none";
}

 </script>

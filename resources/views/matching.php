<!-- first page seen after sign up/sign in -->
<?php
include "inc/firebase_init.php";
 ?>

 <head>
   <link rel="stylesheet" type="text/css" href="../../stylesheets/style.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <!-- <link rel="stylesheet" href="<https://use.typekit.net/qhr5ddp.css">-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 </head>

<html>
  <body class="matchingBody">
    <img id="nav_logo" src="../../images/swivellogo.png">

    <div class="cardsView">
     <div id="show_companies" style="display: none">
       <div class="sidenavStud">
         <form action="/matches/<?= $uid ?>">
           <!-- <i class="material-icons">group</i> -->
             <input type="submit" value="Matches">
         </form>

         <form action="/matching/<?= $uid ?>">
          <!-- <i class="material-icons">redo</i> -->
             <input type="submit" value="Matching">
         </form>
         <form>
          <!-- <i class="material-icons">redo</i> -->
             <input type="button" onclick="logout()" value="Log Out">
         </form>
       </div>
         <!-- Match cards -->
         <div class="compCard">
           <img id="comp_pic" src="../../images/startup.png">
           <div class="infoDiv">
             <div id="comp_overview">
               <p id="comp_name"></p>
               <p id="position_company"></p>
               <p id="comp_location"></p>
               <p id="about"></p>
             </div>


             <div class="second">
               <div class="general">
                 <h6 class="compTitle" id="general_title">General Info</h6>
                 <div id="general_info">
                   <p id="size"></p>
                   <p id="site"></p>
                 </div>
               </div>

               <div class="compBio">
                 <h6 class="compTitle" id="comp_bio_title">Company Bio</h6>
                 <p id="comp_bio"></p>
               </div>
            </div>

             <div class="compSkillsVals">
               <div id="comp_skills">
                 <h6 class="compTitle" id="skills_title">Looking For:</h6>
                 <div id="comp_tech">
                   <!-- I dont wanna make it dynamic right now so im not goona-->
                   <p id="comp_tech1"></p>
                   <p id="comp_tech2"></p>
                   <p id="comp_tech3"></p>
                   <p id="comp_tech4"></p>
                   <p id="comp_tech5"></p>
                 </div>
                 <div id="comp_soft">
                   <p id="comp_soft1"></p>
                   <p id="comp_soft2"></p>
                   <p id="comp_soft3"></p>
                   <p id="comp_soft4"></p>
                   <p id="comp_soft5"></p>
                 </div>
               </div>

               <div id="comp_values">
                 <h6 class="compTitle" id="values_title">Company Values</h6>
                 <div id="prim_values">
                   <p id="comp_prim1"></p>
                   <p id="comp_prim2"></p>
                   <p id="comp_prim3"></p>
                 </div>
                 <div id="sec_values">
                   <p id="comp_sec1"></p>
                   <p id="comp_sec2"></p>
                   <p id="comp_sec3"></p>
                   <p id="comp_sec4"></p>
                   <p id="comp_sec5"></p>
                 </div>
               </div>
             </div>

             <h6 class="compTitle" id="life_title"></h6> <!-- Company name -->
             <div class="life">
               <p id="life_info"></p>
               <div class="specialDiv">
                 <div id="special">
                   <p id="diff1"></p>
                   <p id="diff2"></p>
                   <p id="diff3"></p>
                 </div>
               </div>
             </div>

             <form method="post" enctype="multipart/form-data">
               <input type="password" name="prospectId" id="compId" value="" style="display: none;">
               <div class="swipeButtons">
                 <input type="submit" id="stud_skip" name="choice" value="Skip">
                 <input type="submit" id="stud_interest" name="choice" value="Interested">
               </div>
             </form>

         </div>

       </div>
     </div>


    <div id="show_students" style="display: none;">
      <div class="sidenavComp">
        <form action="/matches/<?= $uid ?>">
          <!-- <i class="material-icons">group</i> -->
            <input type="submit" value="Matches">
        </form>

        <form action="/matching/<?= $uid ?>">
         <!-- <i class="material-icons">redo</i> -->
            <input type="submit" value="Matching">
        </form>
        <form>
         <!-- <i class="material-icons">redo</i> -->
            <input type="button" onclick="logout()" value="Log Out">
        </form>
      </div>
      <div class="studCard">
        <img id="stud_pic" src="../../images/student.png">

        <div class="infoDiv">
          <div id="stud_overview">
          <!-- <img> -->
            <p id="stud_name"></p>
            <p id="school"></p>
            <p id="degree_major"></p>
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

          <div class="studSkillsVals">
            <div id="stud_skills">
              <h6 class="studTitle" id="skills_title">Skills</h6>
              <div id="stud_tech">
                <p id="stu_tech1"></p>
                <p id="stu_tech2"></p>
                <p id="stu_tech3"></p>
                <p id="stu_tech4"></p>
                <p id="stu_tech5"></p>
              </div>
              <div id="stud_soft">
                <p id="stu_soft1"></p>
                <p id="stu_soft2"></p>
                <p id="stu_soft3"></p>
                <p id="stu_soft4"></p>
                <p id="stu_soft5"></p>
              </div>
            </div>

            <div id="stud_values">
              <h6 class="studTitle" id="values_title">Personal Values</h6>
                <div id="prim_values">
                  <p id="stu_prim1"></p>
                  <p id="stu_prim2"></p>
                  <p id="stu_prim3"></p>
                </div>
                <div id="sec_values">
                  <p id="stu_sec1"></p>
                  <p id="stu_sec2"></p>
                  <p id="stu_sec3"></p>
                  <p id="stu_sec4"></p>
                  <p id="stu_sec5"></p>
                </div>
              </div>
            </div>

          <div class="work">
            <div id="type">
              <h6 class="studTitle" id="work_title">Looking For</h6> <!-- Company name -->
              <div id="workType">
                <p id="internship"></p>
                <p id="full"></p>
                <p id="contract"></p>
              </div>
            </div>

            <div id="wants">
              <p id="stu_emp1"></p>
              <p id="stu_emp2"></p>
              <p id="stu_emp3"></p>
            </div>
          </div>

          <form method="post" enctype="multipart/form-data">
            <input type="password" name="prospectId" id="studId" value="" style="display: none;">
            <div class="swipeButtons">
              <input type="submit" id="comp_skip" name="choice" value="Skip">
              <input type="submit" id="comp_interest" name="choice" value="Interested">
            </div>
          </form>
        </div>
      </div>

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

function logout(){
  firebase.auth().signOut().then(function() {
    window.location = "/";
  }).catch(function(error) {
    window.location = "/error";
  });
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
          var name = docData.fname + " " + docData.lname;
          var posComp = docData.position + ", " + docData.company;
          var size = "Company Size: "+docData.size;
          var about = docData.Info.personalBio;
          var compBio = docData.Info.compBio;
          var lifeTitle = "Life at "+docData.company;
          var life = docData.Info.life;

          var techSkill = docData.Tech;
          //var techDiv = document.getElementById("comp_tech");
          var softSkill = docData.Soft;
          //var softDiv = document.getElementById("comp_soft");
          var primVals = docData.Primary;
          //var primDiv = document.getElementById("prim_values");
          var secVals = docData.Secondary;
          //var secDiv = document.getElementById("sec_values");
          var apart = docData.Apart;
          //var apartDiv = document.getElementById("special");
          // only set latest if the curr docs creation is older than the curr users latest
          var compCreationTime = docData.created;

          var apartIcon1 = "<i class='material-icons'>flare</i>"+apart.diff1;
          var apartIcon2 = "<i class='material-icons'>free_breakfast</i>"+apart.diff2;
          var apartIcon3 = "<i class='material-icons'>insert_emoticon</i>"+apart.diff3;


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


          document.getElementById("comp_name").innerHTML = name;
          document.getElementById("comp_location").innerHTML = docData.loc;
          document.getElementById("position_company").innerHTML = posComp;
          document.getElementById("about").innerHTML = about;
          document.getElementById("size").innerHTML = size;
          document.getElementById("site").innerHTML = docData.site;
          document.getElementById("comp_bio").innerHTML = compBio;

          //setting tech skills
          document.getElementById("comp_tech1").innerHTML = techSkill.tech1;
          document.getElementById("comp_tech2").innerHTML = techSkill.tech2;
          document.getElementById("comp_tech3").innerHTML = techSkill.tech3;
          document.getElementById("comp_tech4").innerHTML = techSkill.tech4;
          document.getElementById("comp_tech5").innerHTML = techSkill.tech5;

          //setting soft skills
          document.getElementById("comp_soft1").innerHTML = softSkill.soft1;
          document.getElementById("comp_soft2").innerHTML = softSkill.soft2;
          document.getElementById("comp_soft3").innerHTML = softSkill.soft3;
          document.getElementById("comp_soft4").innerHTML = softSkill.soft4;
          document.getElementById("comp_soft5").innerHTML = softSkill.soft5;

          //setting primary values
          document.getElementById("comp_prim1").innerHTML = primVals.prim1;
          document.getElementById("comp_prim2").innerHTML = primVals.prim2;
          document.getElementById("comp_prim3").innerHTML = primVals.prim3;

          //setting secondary values
          document.getElementById("comp_sec1").innerHTML = secVals.sec1;
          document.getElementById("comp_sec2").innerHTML = secVals.sec2;
          document.getElementById("comp_sec3").innerHTML = secVals.sec3;
          document.getElementById("comp_sec4").innerHTML = secVals.sec4;
          document.getElementById("comp_sec5").innerHTML = secVals.sec5;


          document.getElementById("life_title").innerHTML = lifeTitle;
          document.getElementById("life_info").innerHTML =life;

          // add "apart" data as p tags
          document.getElementById("diff1").innerHTML = apartIcon1;
          document.getElementById("diff2").innerHTML = apartIcon2;
          document.getElementById("diff3").innerHTML = apartIcon3;


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

          // set all card data
          var name = docData.fname + " " + docData.lname;
          var degMaj = docData.degree + ", " + docData.major;
          //var about = docData.Info.personalBio;
          //var compBio = docData.Info.compBio;
          var lifeTitle = "Life at "+docData.company;
          //var life = docData.Info.life;

          var techSkill = docData.Tech;
          var softSkill = docData.Soft;
          var primVals = docData.Primary;
          var secVals = docData.Secondary;
          var employer = docData.Employer;
          var exp = docData.Experience;

          var emp1Icon = "<i class='material-icons'>flare</i>"+employer.emp1;
          var emp2Icon = "<i class='material-icons'>free_breakfast</i>"+employer.emp2;
          var emp3Icon = "<i class='material-icons'>insert_emoticon</i>"+employer.emp3;

          document.getElementById("stud_name").innerHTML = name;
          document.getElementById("stud_location").innerHTML = docData.loc;
          document.getElementById("degree_major").innerHTML = degMaj;
          //document.getElementById("about").innerHTML = about;
          document.getElementById("school").innerHTML = docData.school;

          // add "apart" data as p tags
          document.getElementById("exp1").innerHTML = exp.exp1;
          document.getElementById("exp2").innerHTML = exp.exp2;
          document.getElementById("exp3").innerHTML = exp.exp3;
          document.getElementById("magic").innerHTML = docData.magic;

          //document.getElementById("comp_bio").innerHTML = compBio;

          //setting tech skills
          document.getElementById("stu_tech1").innerHTML = techSkill.tech1;
          document.getElementById("stu_tech2").innerHTML = techSkill.tech2;
          document.getElementById("stu_tech3").innerHTML = techSkill.tech3;
          document.getElementById("stu_tech4").innerHTML = techSkill.tech4;
          document.getElementById("stu_tech5").innerHTML = techSkill.tech5;

          //setting soft skills
          document.getElementById("stu_soft1").innerHTML = softSkill.soft1;
          document.getElementById("stu_soft2").innerHTML = softSkill.soft2;
          document.getElementById("stu_soft3").innerHTML = softSkill.soft3;
          document.getElementById("stu_soft4").innerHTML = softSkill.soft4;
          document.getElementById("stu_soft5").innerHTML = softSkill.soft5;

          //setting primary values
          document.getElementById("stu_prim1").innerHTML = primVals.prim1;
          document.getElementById("stu_prim2").innerHTML = primVals.prim2;
          document.getElementById("stu_prim3").innerHTML = primVals.prim3;

          //setting secondary values
          document.getElementById("stu_sec1").innerHTML = secVals.sec1;
          document.getElementById("stu_sec2").innerHTML = secVals.sec2;
          document.getElementById("stu_sec3").innerHTML = secVals.sec3;
          document.getElementById("stu_sec4").innerHTML = secVals.sec4;
          document.getElementById("stu_sec5").innerHTML = secVals.sec5;

          if(docData.WorkType.work1 == "Internship"){
            document.getElementById("internship").innerHTML = "Internship/Co-Op";
          } else if (docData.WorkType.work2 == "Full Time"){
            document.getElementById("full").innerHTML = "Full Time";
          } else if(docData.WorkType.work3 == "Contract"){
            document.getElementById("contract").innerHTML = "Contract";
          }

          document.getElementById("stu_emp1").innerHTML = emp1Icon;
          document.getElementById("stu_emp2").innerHTML = emp2Icon;
          document.getElementById("stu_emp3").innerHTML = emp3Icon;
          //document.getElementById("life_info").innerHTML =life;

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

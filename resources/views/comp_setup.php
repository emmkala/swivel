<?php
include 'inc/firebase_init.php';
?>

<head>
  <link rel="stylesheet" type="text/css" href="../../stylesheets/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
  <form id="regForm" method="post" enctype="multipart/form-data">

  <h2 class="regTitle" id="regSecond">Let's start </h2>
  <p class="regTitle" id="regSub">Take 2 minutes to fill out your profile to help us find the best startups for you to connect with</p>

  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>

  <!-- One "tab" for each step in the form: -->

  <!-- Company Information -->
  <div class="tab">
    <p>What is your position?
      <input placeholder="CEO & Co-Founder" id="position" oninput="this.className = ''" name="position" value="CTO">
    </p>
    <p>What is your company size?
      <input placeholder="15" oninput="this.className = ''" name="size" value="15">
    </p>
    <p>Where are you located?
      <input placeholder="Toronto, ON" oninput="this.className = ''" name="loc" value="Toronto">
    </p>
    <p>What is you company's website?
      <input placeholder="www.swivelnetwork.com" oninput="this.className = ''" name="site" value="www.swivelnetwork.com">
    </p>
    <p>Where post secondary/graduate school did you attend?
      <input placeholder="Queen's University" oninput="this.className = ''" name="alma" value="Queen's">
    </p>
  </div>

  <!-- Values -->
  <div class="tab">

    <!-- Future, these emps will be populated from the db, adding
     new emps when enough people add them in other-->
    <p>What are your company's primary values?
      <span>Choose 3 values from the list</span>
      <input type="checkbox" oninput="this.className = 'prim'" name="prim1" value="Creativity" value="primCheck1" checked>
        <label for="prim1"> Creativity </label>
      <input type="checkbox" oninput="this.className = 'prim'" name="prim2" value="Adventure" value="primCheck2" checked>
        <label for="prim2"> Adventure </label>
      <input type="checkbox" oninput="this.className = 'prim'" name="prim3" value="Achievement" value="primCheck3" checked>
        <label for="prim3"> Achievement </label>
      <input type="checkbox" oninput="this.className = 'prim'" name="prim4" value="Learning">
        <label for="prim4"> Learning </label>
      <input type="checkbox" oninput="this.className = 'prim'" name="prim5" value="Security">
        <label for="prim5"> Security </label>
      <input type="checkbox" oninput="this.className = 'prim'" name="prim6" value="Social_Impact">
        <label for="prim6"> Social Impact </label>
      <input type="checkbox" oninput="this.className = 'prim'" name="prim7" value="Intelligence">
        <label for="prim7"> Intelligence </label>
      <input type="checkbox" oninput="this.className = 'prim'" name="prim8" value="Honesty">
        <label for="prim8"> Honesty </label>
      <input type="checkbox" oninput="this.className = 'prim'" name="prim9" value="Health">
        <label for="prim9"> Health </label>
      <input type="checkbox" oninput="this.className = 'prim'" name="prim10" value="Family">
        <label for="prim10"> Family </label>
      <input type="checkbox" oninput="this.className = 'prim'" name="prim11" value="Peace">
        <label for="prim11"> Peace </label>
      <input type="checkbox" oninput="this.className = 'prim'" name="prim12" value="Wealth">
        <label for="prim12"> Wealth </label>
      <input type="checkbox" oninput="this.className = 'prim'" name="prim13" value="Accountability">
        <label for="prim13"> Accountability </label>
      <input type="checkbox" oninput="this.className = 'prim'" name="prim14" value="Innovation">
        <label for="prim14"> Innovation </label>
      <input type="checkbox" oninput="this.className = 'prim'" name="prim15" value="Team_Work">
        <label for="prim15"> Team Work </label>
      <input type="checkbox" oninput="this.className = 'prim'" name="prim16" value="Quality">
        <label for="prim16"> Quality </label>
      <input type="checkbox" oninput="this.className = 'prim'" name="prim17" value="Fun">
        <label for="prim17"> Fun </label>
      <input type="checkbox" oninput="this.className = 'prim'" name="prim18" value="People">
        <label for="prim18"> People </label>
      <input type="checkbox" oninput="this.className = 'prim'" name="prim19" value="Equality">
        <label for="prim19"> Equality </label>
      <input type="checkbox" oninput="this.className = 'prim'" name="prim20" value="Balance">
        <label for="prim20"> Balance </label>
      <input placeholder="Other" oninput="this.className = 'prim'" name="primOther">
    </p>
    <p>What are your company's secondary values?
      <span>Choose 5 values from the list</span>
      <input type="checkbox" oninput="this.className = ''" name="sec1" value="Creativity" value="secCheck1" checked>
        <label for="sec1"> Creativity </label>
      <input type="checkbox" oninput="this.className = ''" name="sec2" value="Adventure" value="secCheck2" checked>
        <label for="sec2"> Adventure </label>
      <input type="checkbox" oninput="this.className = ''" name="sec3" value="Achievement" value="secCheck3" checked>
        <label for="sec3"> Achievement </label>
      <input type="checkbox" oninput="this.className = ''" name="sec4" value="Learning" value="secCheck4" checked>
        <label for="sec4"> Learning </label>
      <input type="checkbox" oninput="this.className = ''" name="sec5" value="Security" value="secCheck5" checked>
        <label for="sec5"> Security </label>
      <input type="checkbox" oninput="this.className = ''" name="sec6" value="Social_Impact">
        <label for="sec6"> Social Impact </label>
      <input type="checkbox" oninput="this.className = ''" name="sec7" value="Intelligence">
        <label for="sec7"> Intelligence </label>
      <input type="checkbox" oninput="this.className = ''" name="sec8" value="Honesty">
        <label for="sec8"> Honesty </label>
      <input type="checkbox" oninput="this.className = ''" name="sec9" value="Health">
        <label for="sec9"> Health </label>
      <input type="checkbox" oninput="this.className = ''" name="sec10" value="Family">
        <label for="sec10"> Family </label>
      <input type="checkbox" oninput="this.className = ''" name="sec11" value="Peace">
        <label for="sec11"> Peace </label>
      <input type="checkbox" oninput="this.className = ''" name="sec12" value="Wealth">
        <label for="sec12"> Wealth </label>
      <input type="checkbox" oninput="this.className = ''" name="sec13" value="Accountability">
        <label for="sec13"> Accountability </label>
      <input type="checkbox" oninput="this.className = ''" name="sec14" value="Innovation">
        <label for="sec14"> Innovation </label>
      <input type="checkbox" oninput="this.className = ''" name="sec15" value="Team_Work">
        <label for="sec15"> Team Work </label>
      <input type="checkbox" oninput="this.className = ''" name="sec16" value="Quality">
        <label for="sec16"> Quality </label>
      <input type="checkbox" oninput="this.className = ''" name="sec17" value="Fun">
        <label for="sec17"> Fun </label>
      <input type="checkbox" oninput="this.className = ''" name="sec18" value="People">
        <label for="sec18"> People </label>
      <input type="checkbox" oninput="this.className = ''" name="sec19" value="Equality">
        <label for="sec19"> Equality </label>
      <input type="checkbox" oninput="this.className = ''" name="sec20" value="Balance">
        <label for="sec20"> Balance </label>
      <input placeholder="Other" oninput="this.className = ''" name="secOther">
    </p>
    <!-- These are gonna change based on Al's mockup-->
    <p>What are some aspects of your company that set you apart?
      <span>Choose 3 attributes from the list</span>
      <input type="checkbox" oninput="this.className = ''" name="diff1" value="Flexible" value="empCheck1" checked>
        <label for="diff1"> Flexible Work Hours </label>
      <input type="checkbox" oninput="this.className = ''" name="diff2" value="Purpose" value="empCheck2" checked>
        <label for="diff2"> Purposeful Work </label>
      <input type="checkbox" oninput="this.className = ''" name="diff3" value="Company_Rep" value="empCheck3" checked>
        <label for="diff3"> Company Reputation </label>
      <input type="checkbox" oninput="this.className = ''" name="diff4" value="Sustainable">
        <label for="diff4"> Sustainable Practices </label>
      <input type="checkbox" oninput="this.className = ''" name="diff5" value="Office">
        <label for="diff5"> Office Space </label>
      <input type="checkbox" oninput="this.className = ''" name="diff6" value="Fun">
        <label for="diff6"> Fun Culture </label>
      <input type="checkbox" oninput="this.className = ''" name="diff7" value="Benefits">
        <label for="diff7"> Benefits </label>
      <input type="checkbox" oninput="this.className = ''" name="diff8" value="Team">
        <label for="diff8"> The Team </label>
      <input type="checkbox" oninput="this.className = ''" name="diff8" value="Location">
        <label for="diff8"> Location </label>
      <input placeholder="Other" oninput="this.className = ''" name="diffOther">
    </p>
  </div>

  <!-- Skills -->
  <div class="tab">
    <p>What technical skills are you looking for?
      <span>Choose 5 skills from the list</span>
      <input type="checkbox" oninput="this.className = ''" name="tech1" value="Web_Dev" value="techCheck1" checked>
        <label for="tech1"> Web Development </label>
      <input type="checkbox" oninput="this.className = ''" name="tech2" value="Android" value="techCheck2" checked>
        <label for="tech2"> Andriod Development </label>
      <input type="checkbox" oninput="this.className = ''" name="tech3" value="iOS" value="techCheck3" checked>
        <label for="tech3"> iOS Development </label>
      <input type="checkbox" oninput="this.className = ''" name="tech4" value="Front_End" value="techCheck4" checked>
        <label for="tech4"> Front End </label>
      <input type="checkbox" oninput="this.className = ''" name="tech5" value="Back_End" value="techCheck5" checked>
        <label for="tech5"> Back End </label>
      <input type="checkbox" oninput="this.className = ''" name="tech6" value="Data_Science">
        <label for="tech6"> Data Science </label>
      <input type="checkbox" oninput="this.className = ''" name="tech7" value="DevOps">
        <label for="tech7"> DevOps </label>
      <input type="checkbox" oninput="this.className = ''" name="tech8" value="Machine_Learning">
        <label for="tech8"> Machine Learning </label>
      <input type="checkbox" oninput="this.className = ''" name="tech9" value="Cloud_Computing">
        <label for="tech9"> Cloud Computing </label>
      <input type="checkbox" oninput="this.className = ''" name="tech10" value="Blockchain">
        <label for="tech10"> Blockchain </label>
      <input type="checkbox" oninput="this.className = ''" name="tech11" value="Operating_Systems">
        <label for="tech11"> Operating Systems </label>
      <input type="checkbox" oninput="this.className = ''" name="tech12" value="Network_Security">
        <label for="tech12"> Network and Info Security </label>
      <input type="checkbox" oninput="this.className = ''" name="tech13" value="Machining">
        <label for="tech13"> Machining </label>
      <input type="checkbox" oninput="this.className = ''" name="tech14" value="CAD">
        <label for="tech14"> Computer Aided Design </label>
      <input type="checkbox" oninput="this.className = ''" name="tech15" value="Databases">
        <label for="tech15"> Databases </label>
      <input type="checkbox" oninput="this.className = ''" name="tech16" value="Robotics">
        <label for="tech16"> Sensors/Applied Robotics </label>
      <input type="checkbox" oninput="this.className = ''" name="tech17" value="QA">
        <label for="tech17"> Quality Assurance </label>
      <input type="checkbox" oninput="this.className = ''" name="tech18" value="UI">
        <label for="tech18"> UI/UX </label>
      <input type="checkbox" oninput="this.className = ''" name="tech19" value="Computer_Vision">
        <label for="tech19"> Computer Vision </label>
      <input type="checkbox" oninput="this.className = ''" name="tech20" value="eCommerce">
        <label for="tech20"> eCommerce </label>
      <input placeholder="Other" oninput="this.className = ''" name="techOther">
    </p>
    <p>What soft skills are you looking for?
      <span>Choose 5 skills from the list</span>
      <input type="checkbox" oninput="this.className = ''" name="soft1" value="Leadership" value="softCheck1" checked>
        <label for="soft1"> Leadership </label>
      <input type="checkbox" oninput="this.className = ''" name="soft2" value="Adaptability" value="softCheck2" checked>
        <label for="soft2"> Adaptability </label>
      <input type="checkbox" oninput="this.className = ''" name="soft3" value="Innovation" value="softCheck3" checked>
        <label for="soft3"> Innovation </label>
      <input type="checkbox" oninput="this.className = ''" name="soft4" value="Presenting" value="softCheck4" checked>
        <label for="soft4"> Presenting </label>
      <input type="checkbox" oninput="this.className = ''" name="soft5" value="Communication" value="softCheck5" checked>
        <label for="soft5"> Communication </label>
      <input type="checkbox" oninput="this.className = ''" name="soft6" value="Team_Work">
        <label for="soft6"> Team Work </label>
      <input type="checkbox" oninput="this.className = ''" name="soft7" value="Conflict_Res">
        <label for="soft7"> Conflict Resolution </label>
      <input type="checkbox" oninput="this.className = ''" name="soft8" value="Decision_Making">
        <label for="soft8"> Decision Making </label>
      <input type="checkbox" oninput="this.className = ''" name="soft9" value="Critical_Thinkng">
        <label for="soft9"> Critical Thinking </label>
      <input type="checkbox" oninput="this.className = ''" name="soft10" value="Persuasion">
        <label for="soft10"> Persuasion </label>
      <input type="checkbox" oninput="this.className = ''" name="soft11" value="Collaboration">
        <label for="soft11"> Collaboration </label>
      <input type="checkbox" oninput="this.className = ''" name="soft12" value="Organization">
        <label for="soft12"> Organization </label>
      <input type="checkbox" oninput="this.className = ''" name="soft13" value="Problem_Solving">
        <label for="soft13"> Problem Solving </label>
      <input type="checkbox" oninput="this.className = ''" name="soft14" value="Learning">
        <label for="soft14"> Willingness to Learn </label>
      <input type="checkbox" oninput="this.className = ''" name="soft15" value="Open_Mindness">
        <label for="soft15"> Open-Mindedness </label>
      <input placeholder="Other" oninput="this.className = ''" name="softOther">
    </p>
    <p> Employment Type?
      <span> Choose all that apply </span>
      <input type="checkbox" oninput="this.className = ''" name="work1" value="Internship" value="typeCheck1" checked>
        <label for="work1"> Internship/Co-op </label>
      <input type="checkbox" oninput="this.className = ''" name="work2" value="Full_Time">
        <label for="work2"> Full Time </label>
      <input type="checkbox" oninput="this.className = ''" name="work3" value="Contract">
        <label for="work3"> Contract Work </label>
    </p>
  </div>

  <!-- Descriptions -->
  <div class="tab">
    <span> Give us a brief description of your company </span>
    <span> In 50 words or less </span>
    <p><textarea placeholder="Swivels purpose is to..." oninput="this.className = ''" name="info1" value="purpose"></textarea></p>

    <span> Give us a brief description of life at your company </span>
    <span> In 50 words or less </span>
    <p><textarea placeholder="Life at Swivel is filled with learning, teamwork and ..." oninput="this.className = ''" name="info2" value="life"></textarea></p>

    <span> Give us a brief description of yourself </span>
    <span> In 50 words or less </span>
    <p><textarea placeholder="I am an entrepreneur at heart ..." oninput="this.className = ''" name="info3" value="bio"></textarea></p>

  </div>

  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  </form>
<body>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].childNodes;
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}


</script>


<script>

/*
var user = firebase.auth().currentUser;
if(user){
  document.getElementById("currUser").innerHTML = user.email;
}
else {
  // Go to error page if no current user
  //window.location = '/error'; <-- Maybe do this with security rules ?
  var errorCode = error.code;
  var errorMessage = error.message;
  console.log(errorMessage);
}
*/

firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    //document.getElementById("uid").value = user.uid;
    console.log("Logged in");
  } else {
    // Go to error page if no current user
    //window.location = '/error';
    var errorCode = error.code;
    var errorMessage = error.message;
    console.log(errorMessage);
  }
});

</script>

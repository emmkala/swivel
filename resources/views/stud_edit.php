<!-- View after initial profile set up, option to edit and set new info (ie picture and video (?))-->
<?php
include 'inc/firebase_init.php';
include 'inc/header.php';
ob_start();
?>

<div class="confirm">

  <div id="basic">
    <?php
    if ($imgUrl = $data->get('imgURL')) : ($imgUrl = "../../images/test.jpg");
    ?>
    <img src="<?= $imgUrl ?>">
    <h5 id="name"><?= $data->get("fname"); $data->get("lname"); ?></h5>

    <div id="small_info">
      <p><b>School: <b><?= $data->get("school") ?></p>
      <p><b>Degree: <b><?= $data->get("degree") ?></p>
      <p><b>Major: <b><?= $data->get("major") ?></p>
      <p><b>Grad Year: <b><?= $data->get("year") ?></p>
      <p><b>Location: <b><?= $data->get("loc") ?></p>
    </div>
  </div>

  <div id="highlights">
    <h5 class="title" id="high">Highlights</h5>
    <?php
    $expArr = $data->get("Experience");
    foreach($expArr as $exp):
    ?>
      <p class="highList"><?= $exp ?></p>
    <?php endforeach ?>
  </div>

  <div id="values">

  </div>

  <div id="wants">

  </div>

  <div id="skills">

  </div>

  <div id="goals">

  </div>



</div>



<!-- Show this if they choose to edit -->
<div class="edit">
  <form method="post" enctype="multipart/form-data">
    <div class="tab">
      <p>What is your degree?
        <input placeholder="Bachelor of Applied Sciences" oninput="this.className = ''" name="degree">
      </p>
      <p>What is you major/specification?
        <input placeholder="Mechanincal Engineering" oninput="this.className = ''" name="major">
      </p>
      <p>Where are you located?
        <input placeholder="Toronto, ON" oninput="this.className = ''" name="loc">
      </p>
      <p>What is your graduation year?
        <select oninput="this.className = ''" name="year">
          <option value="2019">2019</option>
          <option value="2019">2020</option>
          <option value="2019">2021</option>
          <option value="2019">2022</option>
          <option value="2019">2023</option>
        </select>
      </p>
    </div>

    <!-- Values -->
    <div class="tab">

      <!-- Future, these emps will be populated from the db, adding
       new emps when enough people add them in other-->
      <p>What are some of you primary values and motivations?
        <span>Choose up to 3</span>
        <input type="checkbox" oninput="this.className = 'prim'" name="prim1" value="Creativity">
          <label for="prim1"> Creativity </label>
        <input type="checkbox" oninput="this.className = 'prim'" name="prim2" value="Adventure">
          <label for="prim2"> Adventure </label>
        <input type="checkbox" oninput="this.className = 'prim'" name="prim3" value="Achievement">
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
      <p>What are some of you secondary values and motivations?
        <span>Choose up to 5</span>
        <input type="checkbox" oninput="this.className = ''" name="sec1" value="Creativity">
          <label for="sec1"> Creativity </label>
        <input type="checkbox" oninput="this.className = ''" name="sec2" value="Adventure">
          <label for="sec2"> Adventure </label>
        <input type="checkbox" oninput="this.className = ''" name="sec3" value="Achievement">
          <label for="sec3"> Achievement </label>
        <input type="checkbox" oninput="this.className = ''" name="sec4" value="Learning">
          <label for="sec4"> Learning </label>
        <input type="checkbox" oninput="this.className = ''" name="sec5" value="Security">
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
      <p>What are some important aspects to you when considering an employer?
        <span>Choose up to 3</span>
        <input type="checkbox" oninput="this.className = ''" name="emp1" value="Flexible">
          <label for="emp1"> Flexible Work Hours </label>
        <input type="checkbox" oninput="this.className = ''" name="emp2" value="Purpose">
          <label for="emp2"> Purposeful Work </label>
        <input type="checkbox" oninput="this.className = ''" name="emp3" value="Company_Rep">
          <label for="emp3"> Company Reputation </label>
        <input type="checkbox" oninput="this.className = ''" name="emp4" value="Sustainable">
          <label for="emp4"> Sustainable Practices </label>
        <input type="checkbox" oninput="this.className = ''" name="emp5" value="Office">
          <label for="emp5"> Office Space </label>
        <input type="checkbox" oninput="this.className = ''" name="emp6" value="Fun">
          <label for="emp6"> Fun Culture </label>
        <input type="checkbox" oninput="this.className = ''" name="emp7" value="Benefits">
          <label for="emp7"> Benefits </label>
        <input type="checkbox" oninput="this.className = ''" name="emp8" value="Team">
          <label for="emp8"> The Team </label>
        <input type="checkbox" oninput="this.className = ''" name="emp8" value="Location">
          <label for="emp8"> Location </label>
        <input placeholder="Other" oninput="this.className = ''" name="empOther">
      </p>
    </div>

    <!-- Skills -->
    <div class="tab">
      <p>What are some of your technical skills?
        <span>Choose up to 5</span>
        <input type="checkbox" oninput="this.className = ''" name="tech1" value="Web_Dev">
          <label for="tech1"> Web Development </label>
        <input type="checkbox" oninput="this.className = ''" name="tech2" value="Android">
          <label for="tech2"> Andriod Development </label>
        <input type="checkbox" oninput="this.className = ''" name="tech3" value="iOS">
          <label for="tech3"> iOS Development </label>
        <input type="checkbox" oninput="this.className = ''" name="tech4" value="Front_End">
          <label for="tech4"> Front End </label>
        <input type="checkbox" oninput="this.className = ''" name="tech5" value="Back_End">
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
      <p>What are some of your soft skills?
        <span>Choose up to 5</span>
        <input type="checkbox" oninput="this.className = ''" name="soft1" value="Leadership">
          <label for="soft1"> Leadership </label>
        <input type="checkbox" oninput="this.className = ''" name="soft2" value="Adaptability">
          <label for="soft2"> Adaptability </label>
        <input type="checkbox" oninput="this.className = ''" name="soft3" value="Innovation">
          <label for="soft3"> Innovation </label>
        <input type="checkbox" oninput="this.className = ''" name="soft4" value="Presenting">
          <label for="soft4"> Presenting </label>
        <input type="checkbox" oninput="this.className = ''" name="soft5" value="Communication">
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
      <p> What type of work are you looking for?
        <span> Choose all that apply </span>
        <input type="checkbox" oninput="this.className = ''" name="work1" value="Internship">
          <label for="work1"> Internship/Co-op </label>
        <input type="checkbox" oninput="this.className = ''" name="work2" value="Full_Time">
          <label for="work2"> Full Time </label>
        <input type="checkbox" oninput="this.className = ''" name="work3" value="Contract">
          <label for="work3"> Contract Work </label>
      </p>
    </div>

    <!-- Experience -->
    <div class="tab">
      <span> What are your top 3 resume highlights? </span>
      <span> Please write 1 sentence about 3 experiences listed on your resume </span>
      <!-- Very hack probably unsafe way to do this, see if you can figure it out with security rules -->
      <!-- <p><input type="text" id="uid" name="uid" value="" style="display:none;"></p> -->
      <p><textarea placeholder="Summer Data Science internship with RBC" oninput="this.className = ''" name="exp1"></textarea></p>
      <p><textarea placeholder="Research Assistant with Queen's University" oninput="this.className = ''" name="exp2"></textarea></p>
      <p><textarea placeholder="Varsity soccer team captian" oninput="this.className = ''" name="exp3"></textarea></p>

      <span> Tell us something that isn't on your resume. </span>
      <span> This is your space to wow! What is something that helps you stand out? </span>
      <p><textarea placeholder="I've travelled to 25 different countries" oninput="this.className = ''" name="magic"></textarea></p>
    </div>
  </form>
</div>

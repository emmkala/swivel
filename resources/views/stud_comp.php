<!-- user chooses student or company and routes them to the correct sign up -->
<link rel="stylesheet" href="../../stylesheets/style.css">

<html>
  <body>

  <div class="fakeNav">
    <img src="../../images/swivellogo.png">
    <h1> I am a... </h1>
    <a href="/signin">Or Log In if you already have an account</a>
  </div>

  <div class="choice">
    <div class="studentChoice" onclick="student()">
      <br><br><br><br>
        <img src="../../images/student.png">
        <h1> A Student. </h1>
        <p> I'm a current student or recent grad looking to expand my network and find interesting, impactful startups where I can do meaningful work. </p>
    </div>

    <div class="companyChoice" onclick="company()">
      <br><br><br><br>
        <img src="../../images/startup.png">
        <h1> A Startup. </h1>
        <p> I am an employee at a startup that is looking to find students and recent grads that will fit in at our company and become a important part of our operation. </p>
    </div>
  </div>

  </body>
</html>


<script>

function student(){
  window.location = "/studentRegister";
}

function company(){
  window.location = "/companyRegister";
}

</script>

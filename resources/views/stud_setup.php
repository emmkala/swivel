<?php
include 'inc/firebase_init.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From</title>
    <link rel="stylesheet" href="../../stylesheets/studon.css">
    <link rel="stylesheet" href="../../stylesheets/globalstud.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</head>

<body>
    <!-- header section -->
    <section class="top_header">
        <div class="container">
            <div class="col-md-12 text-center">
                <h2 class="regTitle" id="regSecond">Let's start </h2>
                <p id="regSub">Take 2 minutes to fill out your profile to help us find the best
                    startups for you to connect with</p>

            </div>
        </div>
    </section>

    <section class="signup-step-container">
        <div class="container-fluid">
            <div class="row top-strip pt-3 pb-1">
                <div class="offset-md-2"></div>
                <div class="col-md-8 wizard">
                    <div class="wizard-inner">
                        <div class="connecting-line"></div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab"
                                    aria-expanded="true"><span class="round-tab">1 </span> <i>Step 1</i></a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab"
                                    aria-expanded="false"><span class="round-tab">2</span> <i>Step 2</i></a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span
                                        class="round-tab">3</span> <i>Step 3</i></a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"><span
                                        class="round-tab">4</span> <i>Step 4</i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="offset-md-2"></div>
            </div>
        </div>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="wizard">
                        <form role="form" method="post" class="login-box">
                            <div class="tab-content" id="main_form">
                                <!-- Step 1 -->
                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h6>What is your Degree?</h6>
                                                <input class="form-control" placeholder="Bachelor of Applied Sciences"
                                                    oninput="this.className = ''" name="degree">

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h6>What is you major/specification?</h6>
                                                <input class="form-control" placeholder="Mechanical Engineering"
                                                    oninput="this.className = ''" name="major">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h6>Where are you located?</h6>
                                                <input class="form-control" placeholder="Toronto, ON"
                                                    oninput="this.className = ''" name="loc">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h6>What is your graduation year?</h6>
                                                <div class="custom-select" style="width: 200px;">
                                                  <select oninput="this.className = ''" name="year">
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                  </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 text-center">
                                            <p>Terms of use. Privacy policy</p>
                                        </div>


                                    </div>
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn next-step">Continue to next
                                                step</button></li>
                                    </ul>
                                </div>
                                <!-- Step 2 -->
                                <div class="tab-pane" role="tabpanel" id="step2">
                                    <div class="row">
                                        <div class="col-md-12" id="primDiv">
                                            <div class="form-group">
                                                <h3 class="text-center">What are some of you primary values and motivations?</h3>
                                                <p id="primInstruct" class="text-center">Choose up to 3 values.</p>
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="prim1" onclick="onCheck('prim1', 'prim')"
                                                                    name="prim1" value="Creativity"><span id="prim1span"
                                                                    class="text-center">Creativity</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="prim2" onclick="onCheck('prim2', 'prim')"
                                                                    name="prim2" value="Adventure"><span id="prim2span"
                                                                    class="text-center">Adventure</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="prim3" onclick="onCheck('prim3', 'prim')"
                                                                    name="prim3" value="Achievement"><span id="prim3span"
                                                                    class="text-center">Achievement</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="prim4" onclick="onCheck('prim4', 'prim')"
                                                                    name="prim4" value="Learning"><span id="prim4span"
                                                                    class="text-center">Learning</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="prim5" onclick="onCheck('prim5', 'prim')"
                                                                    name="prim5" value="Security"><span id="prim5span"
                                                                    class="text-center">Security</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="prim6" onclick="onCheck('prim6', 'prim')"
                                                                    name="prim6" value="Social Impact"><span id="prim6span"
                                                                    class="text-center">Social Impact</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="prim7" onclick="onCheck('prim7', 'prim')"
                                                                    name="prim7" value="Intelligence"><span id="prim7span"
                                                                    class="text-center">Intelligence</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="prim8" onclick="onCheck('prim8', 'prim')"
                                                                    name="prim8" value="Honesty"><span id="prim8span"
                                                                    class="text-center">Honesty</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="prim9" onclick="onCheck('prim9', 'prim')"
                                                                    name="prim9" value="Health"><span id="prim9span"
                                                                    class="text-center">Health</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="prim10" onclick="onCheck('prim10', 'prim')"
                                                                    name="prim10" value="Family"><span id="prim10span"
                                                                    class="text-center">Family</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="prim11" onclick="onCheck('prim11', 'prim')"
                                                                    name="prim11" value="Peace"><span id="prim11span"
                                                                    class="text-center">Peace</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="prim12" onclick="onCheck('prim12', 'prim')"
                                                                    name="prim12" value="Wealth"><span id="prim12span"
                                                                    class="text-center">Wealth</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="prim13" onclick="onCheck('prim13', 'prim')"
                                                                    name="prim13" value="Accountability"><span id="prim13span"
                                                                    class="text-center">Accountability</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="prim14" onclick="onCheck('prim14', 'prim')"
                                                                    name="prim14" value="Innovation"><span id="prim14span"
                                                                    class="text-center">Innovation</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="prim15" onclick="onCheck('prim15', 'prim')"
                                                                    name="prim15" value="Team Work"><span id="prim15span"
                                                                    class="text-center">Team Work</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="prim16" onclick="onCheck('prim16', 'prim')"
                                                                    name="prim16" value="Quality"><span id="prim16span"
                                                                    class="text-center">Quality</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="prim17" onclick="onCheck('prim17', 'prim')"
                                                                    name="prim17" value="Fun"><span id="prim17span"
                                                                    class="text-center">Fun</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="prim18" onclick="onCheck('prim18', 'prim')"
                                                                    name="prim18" value="People"><span id="prim18span"
                                                                    class="text-center">People</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="offset-md-4"></div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="prim19" onclick="onCheck('prim19', 'prim')"
                                                                    name="prim19" value="Equality"><span id="prim19span"
                                                                    class="text-center">Equality</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="prim20" onclick="onCheck('prim20', 'prim')"
                                                                    name="prim20" value="Balance"><span id="prim20span"
                                                                    class="text-center">Balance</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="offset-md-4"></div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                              <span id="primOtherspan">
                                                <input class="form-control w-80" placeholder="Other:"
                                                    id="primOther" onblur="onCheck('primOther', 'prim')" name="primOther">
                                              </span>
                                            </div>
                                        </div>
                                        <input type="password" id="primVals" name="primVals" style="display: none;">

                                        <div class="col-md-12" id="secDiv">
                                            <div class="form-group">
                                                <h3 class="text-center">What are some of you secondary values and motivations?</h3>
                                                <p id="secInstruct" class="text-center">Choose up to 5 values.</p>
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="sec1" onclick="onCheck('sec1', 'sec')"
                                                                    name="sec1" value="Creativity"><span id="sec1span"
                                                                    class="text-center">Creativity</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="sec2" onclick="onCheck('sec2', 'sec')"
                                                                    name="sec2" value="Adventure"><span id="sec2span"
                                                                    class="text-center">Adventure</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="sec3" onclick="onCheck('sec3', 'sec')"
                                                                    name="sec3" value="Achievement"><span id="sec3span"
                                                                    class="text-center">Achievement</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="sec4" onclick="onCheck('sec4', 'sec')"
                                                                    name="sec4" value="Learning"><span id="sec4span"
                                                                    class="text-center">Learning</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="sec5" onclick="onCheck('sec5', 'sec')"
                                                                    name="sec5" value="Security"><span id="sec5span"
                                                                    class="text-center">Security</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="sec6" onclick="onCheck('sec6', 'sec')"
                                                                    name="sec6" value="Social Impact"><span id="sec6span"
                                                                    class="text-center">Social Impact</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="sec7" onclick="onCheck('sec7', 'sec')"
                                                                    name="sec7" value="Intelligence"><span id="sec7span"
                                                                    class="text-center">Intelligence</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="sec8" onclick="onCheck('sec8', 'sec')"
                                                                    name="sec8" value="Honesty"><span id="sec8span"
                                                                    class="text-center">Honesty</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="sec9" onclick="onCheck('sec9', 'sec')"
                                                                    name="sec9" value="Health"><span id="sec9span"
                                                                    class="text-center">Health</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="sec10" onclick="onCheck('sec10', 'sec')"
                                                                    name="sec10" value="Family"><span id="sec10span"
                                                                    class="text-center">Family</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="sec11" onclick="onCheck('sec11', 'sec')"
                                                                    name="sec11" value="Peace"><span id="sec11span"
                                                                    class="text-center">Peace</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="sec12" onclick="onCheck('sec12', 'sec')"
                                                                    name="sec12" value="Wealth"><span id="sec12span"
                                                                    class="text-center">Wealth</span>
                                                            </label>
                                                        </div>
                                                    </div>


                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="sec13" onclick="onCheck('sec13', 'sec')"
                                                                    name="sec13" value="Accountability"><span id="sec13span"
                                                                    class="text-center">Accountability</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="sec14" onclick="onCheck('sec14', 'sec')"
                                                                    name="sec14" value="Innovation"><span id="sec14span"
                                                                    class="text-center">Innovation</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="sec15" onclick="onCheck('sec15', 'sec')"
                                                                    name="sec15" value="Team Work"><span id="sec15span"
                                                                    class="text-center">Team Work</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="sec16" onclick="onCheck('sec16', 'sec')"
                                                                    name="sec16" value="Quality"><span id="sec16span"
                                                                    class="text-center">Quality</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="sec17" onclick="onCheck('sec17', 'sec')"
                                                                    name="sec17" value="Fun"><span id="sec17span"
                                                                    class="text-center">Fun</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="sec18" onclick="onCheck('sec18', 'sec')"
                                                                    name="sec18" value="People"><span id="sec18span"
                                                                    class="text-center">People</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="offset-md-4"></div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="sec19" onclick="onCheck('sec19', 'sec')"
                                                                    name="sec19" value="Equality"><span id="sec19span"
                                                                    class="text-center">Equality</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="sec20" onclick="onCheck('sec20', 'sec')"
                                                                    name="sec20" value="Balance"><span id="sec20span"
                                                                    class="text-center">Balance</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="offset-md-4"></div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                              <span id="secOtherspan">
                                                <input class="form-control w-80" placeholder="Other:"
                                                    id="secOther" onblur="onCheck('secOther', 'sec')" name="secOther"></span>
                                            </div>
                                        </div>
                                        <input type="password" id="secVals" name="secVals" style="display: none;">
                                        <!-- Skills -->
                                        <div class="col-md-12" id="techDiv">
                                            <div class="form-group">
                                                <h3 class="text-center">What are some of your technical skills?</h3>
                                                <p id="techInstruct" class="text-center">Choose up to 5 skills</p>
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="tech1" onclick="onCheck('tech1', 'tech')"
                                                                    name="tech1" value="Web Dev"><span id="tech1span"
                                                                    class="text-center">Web Development</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="tech2" onclick="onCheck('tech2', 'tech')"
                                                                    name="tech2" value="Android"><span id="tech2span"
                                                                    class="text-center">Andriod Development</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="tech3" onclick="onCheck('tech3', 'tech')"
                                                                    name="tech3" value="iOS"><span id="tech3span"
                                                                    class="text-center">iOS
                                                                    Development</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="tech4" onclick="onCheck('tech4', 'tech')"
                                                                    name="tech4" value="Front End"><span id="tech4span"
                                                                    class="text-center">Front End</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="tech5" onclick="onCheck('tech5', 'tech')"
                                                                    name="tech5" value="Back End"><span id="tech5span"
                                                                    class="text-center">Back End</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="tech6" onclick="onCheck('tech6', 'tech')"
                                                                    name="tech6" value="Data Science"><span id="tech6span"
                                                                    class="text-center">Data Science</span>
                                                            </label>
                                                        </div>
                                                    </div>


                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="tech7" onclick="onCheck('tech7', 'tech')"
                                                                    name="tech7" value="DevOps"><span id="tech7span"
                                                                    class="text-center">DevOps</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="tech8" onclick="onCheck('tech8', 'tech')"
                                                                    name="tech8" value="Machine Learning"><span id="tech8span"
                                                                    class="text-center">Machine Learning</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="tech9" onclick="onCheck('tech9', 'tech')"
                                                                    name="tech9" value="Cloud Computing"><span id="tech9span"
                                                                    class="text-center">Cloud Computing</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="tech10" onclick="onCheck('tech10', 'tech')"
                                                                    name="tech10" value="Blockchain"><span id="tech10span"
                                                                    class="text-center">Blockchain</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="tech11" onclick="onCheck('tech11', 'tech')"
                                                                    name="tech11" value="Operating Systems"><span id="tech11span"
                                                                    class="text-center">Operating Systems</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="tech12" onclick="onCheck('tech12', 'tech')"
                                                                    name="tech12" value="Network Security"><span id="tech12span"
                                                                    class="text-center">Network & Info Security</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="tech13" onclick="onCheck('tech13', 'tech')"
                                                                    name="tech13" value="Machining"><span id="tech13span"
                                                                    class="text-center">Machining</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="tech14" onclick="onCheck('tech14', 'tech')"
                                                                    name="tech14" value="CAD"><span id="tech14span"
                                                                    class="text-center">CAD</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="tech15" onclick="onCheck('tech15', 'tech')"
                                                                    name="tech15" value="Databases"><span id="tech15span"
                                                                    class="text-center">DB (MySQL/NoSQL)</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="tech16" onclick="onCheck('tech16', 'tech')"
                                                                    name="tech16" value="Robotics"><span id="tech16span"
                                                                    class="text-center">Applied Robotics</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="tech17" onclick="onCheck('tech17', 'tech')"
                                                                    name="tech17" value="Quality Assurance"><span id="tech17span"
                                                                    class="text-center">Quality Assurance</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="tech18" onclick="onCheck('tech18', 'tech')"
                                                                    name="tech18" value="UI/UX"><span id="tech18span"
                                                                    class="text-center">UI/UX</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="tech19" onclick="onCheck('tech19', 'tech')"
                                                                    name="tech19" value="Unit Testing"><span id="tech19span"
                                                                    class="text-center">Unit Testing</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="tech20" onclick="onCheck('tech20', 'tech')"
                                                                    name="tech20" value="Java"><span id="tech20span"
                                                                    class="text-center">Java</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="tech21" onclick="onCheck('tech21', 'tech')"
                                                                    name="tech21" value="Python"><span id="tech21span"
                                                                    class="text-center">Python</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="tech22" onclick="onCheck('tech22', 'tech')"
                                                                    name="tech22" value="C"><span id="tech22span"
                                                                    class="text-center">C</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="tech23" onclick="onCheck('tech23', 'tech')"
                                                                    name="tech23" value="Command Line"><span id="tech23span"
                                                                    class="text-center">Command Line</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="tech24" onclick="onCheck('tech24', 'tech')"
                                                                    name="tech24" value="Mathematics"><span id="tech24span"
                                                                    class="text-center">Mathematics</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="offset-md-4"></div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="tech25" onclick="onCheck('tech25', 'tech')"
                                                                    name="tech25" value="Computer Vision"><span id="tech25span"
                                                                    class="text-center">Computer Vision</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="tech26" onclick="onCheck('tech26', 'tech')"
                                                                    name="tech26" value="eCommerce"><span id="tech26span"
                                                                    class="text-center">eCommerce</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="offset-md-4"></div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                              <span id="techOtherspan">
                                                <input class="form-control w-80" placeholder="Other:"
                                                     id="techOther" onblur="onCheck('techOther', 'tech')" name="techOther"></span>
                                            </div>
                                        </div>
                                        <input type="password" id="techSkills" name="techSkills" style="display: none;">


                                    </div>


                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn prev-step">Back</button></li>
                                        <li><button type="button" class="default-btn next-step">Continue</button></li>
                                    </ul>
                                </div>

                                <!-- Step 3 -->
                                <div class="tab-pane" role="tabpanel" id="step3">
                                    <div class="row">
                                        <div class="col-md-12" id="diffDiv">
                                            <div class="form-group">
                                                <h3 class="text-center">What are some important aspects to you when
                                                    considering an employer?</h3>
                                                <p id="diffInstruct" class="text-center">Choose up to 3.</p>
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="diff1" onclick="onCheck('diff1', 'diff')"
                                                                    name="diff1" value="Flexible Work Hours"><span id="diff1span"
                                                                    class="text-center">Flexible Work Hours</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="diff2" onclick="onCheck('diff2', 'diff')"
                                                                    name="diff2" value="Purposeful Work"><span id="diff2span"
                                                                    class="text-center">Purposeful Work</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="diff3" onclick="onCheck('diff3', 'diff')"
                                                                    name="diff3" value="Company Reputation"><span id="diff3span"
                                                                    class="text-center">Company Reputation</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="diff4" onclick="onCheck('diff4', 'diff')"
                                                                    name="diff4" value="Sustainable Practices"><span id="diff4span"
                                                                    class="text-center">Sustainable Practices</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="diff5" onclick="onCheck('diff5', 'diff')"
                                                                    name="diff5" value="Office Space"><span id="diff5span"
                                                                    class="text-center">Office Space</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="diff6" onclick="onCheck('diff6', 'diff')"
                                                                    name="diff6" value="Fun"><span id="diff6span"
                                                                    class="text-center">Fun
                                                                    Culture</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="row">
                                                    <div class="offset-md-2"></div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="diff7" onclick="onCheck('diff7', 'diff')"
                                                                    name="diff7" value="Benefits"><span id="diff7span"
                                                                    class="text-center">Benefits</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="diff8" onclick="onCheck('diff8', 'diff')"
                                                                    name="diff8" value="Team"><span id="diff8span"
                                                                    class="text-center">The
                                                                    Team</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="diff9" onclick="onCheck('diff9', 'diff')"
                                                                    name="diff9" value="Location"><span id="diff9span"
                                                                    class="text-center">Location</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="diff10" onclick="onCheck('diff10', 'diff')"
                                                                    name="diff10" value="Challenging Work"><span id="diff10span"
                                                                    class="text-center">Challenging Work</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="offset-md-2"></div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                              <span id="diffOtherspan">
                                                <input class="form-control w-80" placeholder="Other:"
                                                    id="diffOther" onblur="onCheck('diffOther', 'diff')" name="diffOther"></span>
                                            </div>
                                        </div>
                                        <input type="password" id="diffVals" name="diffVals" style="display: none;">


                                        <!-- Soft Skills -->
                                        <div class="col-md-12" id="softDiv">
                                            <div class="form-group">
                                                <h3 class="text-center">What are some of your soft skills?</h3>
                                                <p id="softInstruct" class="text-center">Choose up to 5 skills.</p>
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="soft1" onclick="onCheck('soft1', 'soft')"
                                                                    name="soft1" value="Leadership"><span id="soft1span"
                                                                    class="text-center">Leadership</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="soft2" onclick="onCheck('soft2', 'soft')"
                                                                    name="soft2" value="Adaptability"><span id="soft2span"
                                                                    class="text-center">Adaptability</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="soft3" onclick="onCheck('soft3', 'soft')"
                                                                    name="soft3" value="Innovation"><span id="soft3span"
                                                                    class="text-center">Innovation</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="soft4" onclick="onCheck('soft4', 'soft')"
                                                                    name="soft4" value="Presenting"><span id="soft4span"
                                                                    class="text-center">Presenting</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="soft5" onclick="onCheck('soft5', 'soft')"
                                                                    name="soft5" value="Communication"><span id="soft5span"
                                                                    class="text-center">Communication</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="soft6" onclick="onCheck('soft6', 'soft')"
                                                                    name="soft6" value="Team Work"><span id="soft6span"
                                                                    class="text-center">Team Work</span>
                                                            </label>
                                                        </div>
                                                    </div>



                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="soft7" onclick="onCheck('soft7', 'soft')"
                                                                    name="soft7" value="Conflict Resolution"><span id="soft7span"
                                                                    class="text-center">Conflict Resolution</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="soft8" onclick="onCheck('soft8', 'soft')"
                                                                    name="soft8" value="Decision Making"><span id="soft8span"
                                                                    class="text-center">Decision Making</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="soft9" onclick="onCheck('soft9', 'soft')"
                                                                    name="soft9" value="Critical Thinkng"><span id="soft9span"
                                                                    class="text-center">Critical Thinking</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="soft10" onclick="onCheck('soft10', 'soft')"
                                                                    name="soft10" value="Persuasion"><span id="soft10span"
                                                                    class="text-center">Persuasion</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="soft11" onclick="onCheck('soft11', 'soft')"
                                                                    name="soft11" value="Collaboration"><span id="soft11span"
                                                                    class="text-center">Collaboration</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="soft12" onclick="onCheck('soft12', 'soft')"
                                                                    name="soft12" value="Organization"><span id="soft12span"
                                                                    class="text-center">Organization</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="soft13" onclick="onCheck('soft13', 'soft')"
                                                                    name="soft13" value="Problem Solving"><span id="soft13span"
                                                                    class="text-center">Problem Solving</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="soft14" onclick="onCheck('soft14', 'soft')"
                                                                    name="soft14" value="Learning"><span id="soft14span"
                                                                    class="text-center">Willingness to Learn</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="soft15" onclick="onCheck('soft15', 'soft')"
                                                                    name="soft15" value="Open Mindedness"><span id="soft15span"
                                                                    class="text-center">Open-Mindedness</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="offset-md-4">


                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                              <span id="softOtherspan">
                                                <input class="form-control w-80" placeholder="Other:"
                                                     id="softOther" onblur="onCheck('softOther', 'soft')"name="softOther"></span>
                                            </div>
                                        </div>
                                        <input type="password" id="softSkills" name="softSkills" style="display: none;">


                                        <div class="col-md-12" id="workDiv">
                                            <div class="form-group">
                                                <h3 class="text-center"> What type of work are you looking for?</h3>
                                                <p id="workInstruct" class="text-center">Choose all that apply</p>
                                                <div class="row">
                                                    <div class="col-md-4 justify-content-center d-flex mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="work1" onclick="onCheck('work1', 'workType')"
                                                                    name="work1" value="Internship"><span id="work1span"
                                                                    class="text-center">Internship</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" id="work2" onclick="onCheck('work2', 'workType')"
                                                                    name="work2" value="Full Time"><span id="work2span"
                                                                    class="text-center">Full Time</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" id="work3" onclick="onCheck('work3', 'workType')"
                                                                    name="work3" value="Contract"><span id="work3span"
                                                                    class="text-center">Contract Work</span>
                                                            </label>
                                                        </div>
                                                        <!--<div id="ck-button" style="border: none">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="" value="Contract"><span
                                                                    class="text-center"></span>
                                                            </label>
                                                        </div>-->
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <input type="password" id="workTypeList" name="workTypeList" style="display: none;">


                                    </div>
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn prev-step">Back</button></li>
                                        <li><button type="button" class="default-btn next-step">Continue</button></li>
                                    </ul>
                                </div>
                                <!-- Step 4 -->
                                <div class="tab-pane" role="tabpanel" id="step4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h3 class="text-center">What are your top 3 resume highlights?
                                                </h3>
                                                <p class="text-center"><span>Please write 1 sentence about 3 experiences listed on your resume</span></p>
                                                <div class="d-flex justify-content-center">
                                                    <textarea placeholder="Summer Data Science internship with RBC"
                                                        oninput="this.className = ''" name="exp1" max="50"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="d-flex justify-content-center">
                                                    <textarea
                                                        placeholder="Research Assistant with Queen's University"
                                                        oninput="this.className = ''" name="exp2" max="50"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="d-flex justify-content-center">
                                                    <textarea placeholder="Varsity soccer team captian"
                                                        oninput="this.className = ''" name="exp3" max="50"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h3 class="text-center">Tell us something that isn't on your resume.
                                                </h3>
                                                <p class="text-center"><span>This is your space to wow! What is something that helps you stand out? </span></p>
                                                <div class="d-flex justify-content-center">
                                                    <textarea placeholder="I've travelled to 25 different countries"
                                                        oninput="this.className = ''" name="magic" max="50"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn prev-step">Back</button></li>
                                        <li><button type="submit" class="default-btn next-step">Finish</button></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
    var x, i, j, l, ll, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName("custom-select");
    l = x.length;
    for (i = 0; i < l; i++) {
      selElmnt = x[i].getElementsByTagName("select")[0];
      ll = selElmnt.length;
      /*for each element, create a new DIV that will act as the selected item:*/
      a = document.createElement("DIV");
      a.setAttribute("class", "select-selected");
      a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
      x[i].appendChild(a);
      /*for each element, create a new DIV that will contain the option list:*/
      b = document.createElement("DIV");
      b.setAttribute("class", "select-items select-hide");
      for (j = 1; j < ll; j++) {
        /*for each option in the original select element,
        create a new DIV that will act as an option item:*/
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function(e) {
            /*when an item is clicked, update the original select box,
            and the selected item:*/
            var y, i, k, s, h, sl, yl;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            sl = s.length;
            h = this.parentNode.previousSibling;
            for (i = 0; i < sl; i++) {
              if (s.options[i].innerHTML == this.innerHTML) {
                s.selectedIndex = i;
                h.innerHTML = this.innerHTML;
                y = this.parentNode.getElementsByClassName("same-as-selected");
                yl = y.length;
                for (k = 0; k < yl; k++) {
                  y[k].removeAttribute("class");
                }
                this.setAttribute("class", "same-as-selected");
                break;
              }
            }
            h.click();
        });
        b.appendChild(c);
      }
      x[i].appendChild(b);
      a.addEventListener("click", function(e) {
          /*when the select box is clicked, close any other select boxes,
          and open/close the current select box:*/
          e.stopPropagation();
          closeAllSelect(this);
          this.nextSibling.classList.toggle("select-hide");
          this.classList.toggle("select-arrow-active");
        });
    }
    function closeAllSelect(elmnt) {
      /*a function that will close all select boxes in the document,
      except the current select box:*/
      var x, y, i, xl, yl, arrNo = [];
      x = document.getElementsByClassName("select-items");
      y = document.getElementsByClassName("select-selected");
      xl = x.length;
      yl = y.length;
      for (i = 0; i < yl; i++) {
        if (elmnt == y[i]) {
          arrNo.push(i)
        } else {
          y[i].classList.remove("select-arrow-active");
        }
      }
      for (i = 0; i < xl; i++) {
        if (arrNo.indexOf(i)) {
          x[i].classList.add("select-hide");
        }
      }
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);
  </script>

    <script>
    // ------------step-wizard-------------
    $(document).ready(function() {
        $('.nav-tabs > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {

            var target = $(e.target);

            if (target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $(".next-step").click(function(e) {

            var active = $('.wizard .nav-tabs li.active');
            active.next().removeClass('disabled');
            nextTab(active);

        });
        $(".prev-step").click(function(e) {

            var active = $('.wizard .nav-tabs li.active');
            prevTab(active);

        });
    });

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }

    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }


    $('.nav-tabs').on('click', 'li', function() {
        $('.nav-tabs li.active').removeClass('active');
        $(this).addClass('active');
    });

    // global arrays for each choice topic
    // max len 3
    var primArr = [];
    // max len 5
    var secArr = [];
    // max len 3
    var diffArr = [];
    // max len 5
    var techArr = [];
    // max len 5
    var softArr = [];
    // max len 3
    var workTypeArr = [];

    function onCheck(element, type){
      var typeArr = [];
      var maxLen;
      var setElem;
      var instruction;
      var scrollDiv;

      var choice = document.getElementById(element);
      var value = choice.value;

      switch (type){
        case "prim":
          typeArr = primArr;
          maxLen = 3;
          setElem = document.getElementById("primVals");
          instruction = document.getElementById("primInstruct");
          scrollDiv = document.getElementById("primDiv");
          break;
        case "sec":
          typeArr = secArr;
          maxLen = 5;
          setElem = document.getElementById("secVals");
          instruction = document.getElementById("secInstruct");
          scrollDiv = document.getElementById("secDiv");
          break;
        case "diff":
          typeArr = diffArr;
          maxLen = 3;
          setElem = document.getElementById("diffVals");
          instruction = document.getElementById("diffInstruct");
          scrollDiv = document.getElementById("diffDiv");
          break;
        case "tech":
          typeArr = techArr;
          maxLen = 5;
          setElem = document.getElementById("techSkills");
          instruction = document.getElementById("techInstruct");
          scrollDiv = document.getElementById("techDiv");
          break;
        case "soft":
          typeArr = softArr;
          maxLen = 5;
          setElem = document.getElementById("softSkills");
          instruction = document.getElementById("softInstruct");
          scrollDiv = document.getElementById("softDiv");
          break;
        case "workType":
          typeArr = workTypeArr;
          maxLen = 3;
          setElem = document.getElementById("workTypeList");
          instruction = document.getElementById("workInstruct");
          scrollDiv = document.getElementById("workDiv");
          break;
      }

      // check if choice is a checkbox
      if(choice.type == "checkbox"){
        // if the choice is being unchecked
        if(!document.getElementById(element).checked){
          // remove it from the array
          if(typeArr.includes(value)){
            var i = typeArr.indexOf(value);
            typeArr.splice(i, 1);
            // reset the element that will be sent
            setElem.value = typeArr;
            return;
          }
        }
        // choice is a textField (other)
      } else {
        /*
        if it's a textField and this has been triggered, either it's the users first time entering (for this section) or they've deleted something
        if it's their first time, nothing will happen here because nothing in otherArr will be in typeArr
        if they've deleted something, everything that has been added to typeArr from other should be deleted (because they're erasing it from the form)
        */

        var pastInputs = [];
        // some checks for everything in the otherArr that appears in typeArr
        otherArr.some(function (v) {
          if(typeArr.indexOf(v) >= 0){
            // create a list of anything in other thats in type (should only be 1 thing atm)
            pastInputs.push(typeArr[typeArr.indexOf(v)]);
          }
        });

        // if there are things in other that are in pastInputs
        if(pastInputs.length > 0){
          for(var i = 0; i < pastInputs.length; i++){
            var j = typeArr.indexOf(pastInputs[i]);
            // delete everything in typeArr and set it in the form arr
            typeArr.splice(j, 1);
            setElem.value = typeArr;
          }

        }

      // choice is being picked for the first time
      // havent reached max amount of choices
      if(typeArr.length < maxLen){
        typeArr.push(value);
        setElem.value = typeArr;
      } else {
        // user is trying to choose more than allowed
        // shake instructions to bring attention
        // turn choice red for 3 seconds
        instruction.classList.add("animated");
        var spanId = choice.id+"span";
        var span = document.getElementById(spanId);

        span.style.backgroundColor = "#ab2f2e";
        span.style.color = "white";
        span.style.borderColor = "#ab2f2e";
        span.style.borderRadius = "4px";


        setTimeout(function(){
          instruction.classList.remove("animated");
          span.style = "none";

        }, 1000);

        // uncheck or clear textArea (and scroll to that section to bring attention)
        choice.type == "checkbox" ? choice.checked = false : (choice.value = "", scrollDiv.scrollIntoView() );

      }

    }


    </script>
</body>

</html>

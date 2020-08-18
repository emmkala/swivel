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
                                                    <option value="2019">2020</option>
                                                    <option value="2019">2021</option>
                                                    <option value="2019">2022</option>
                                                    <option value="2019">2023</option>
                                                  </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 text-center">
                                            <p>Term of use. Privacy policy</p>
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
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h3 class="text-center">What are some of you primary values and motivations?</h3>
                                                <p class="text-center">Choose <b> exactly </b> 3.</p>
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="prim1" value="Creativity"><span
                                                                    class="text-center">Creativity</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="prim2" value="Adventure"><span
                                                                    class="text-center">Adventure</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="prim3" value="Achievement"><span
                                                                    class="text-center">Achievement</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="prim4" value="Learning"><span
                                                                    class="text-center">Learning</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="prim5" value="Security"><span
                                                                    class="text-center">Security</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="prim6" value="Social Impact"><span
                                                                    class="text-center">Social Impact</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="prim7" value="Intelligence"><span
                                                                    class="text-center">Intelligence</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="prim8" value="Honesty"><span
                                                                    class="text-center">Honesty</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="prim9" value="Health"><span
                                                                    class="text-center">Health</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="prim10" value="Family"><span
                                                                    class="text-center">Family</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="prim11" value="Peace"><span
                                                                    class="text-center">Peace</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="prim12" value="Wealth"><span
                                                                    class="text-center">Wealth</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="prim13" value="Accountability"><span
                                                                    class="text-center">Accountability</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="prim14" value="Innovation"><span
                                                                    class="text-center">Innovation</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="prim15" value="Team Work"><span
                                                                    class="text-center">Team Work</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="prim16" value="Quality"><span
                                                                    class="text-center">Quality</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="prim17" value="Fun"><span
                                                                    class="text-center">Fun</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="prim18" value="People"><span
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
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="prim19" value="Equality"><span
                                                                    class="text-center">Equality</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="prim20" value="Balance"><span
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
                                                <input class="form-control w-80" placeholder="Other:"
                                                    oninput="this.className = 'prim'" name="primOther">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h3 class="text-center">What are some of you secondary values and motivations?</h3>
                                                <p class="text-center">Choose <b> exactly </b> 5.</p>
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="sec1" value="Creativity"><span
                                                                    class="text-center">Creativity</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="sec2" value="Adventure"><span
                                                                    class="text-center">Adventure</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="sec3" value="Achievement"><span
                                                                    class="text-center">Achievement</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="sec4" value="Learning"><span
                                                                    class="text-center">Learning</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="sec5" value="Security"><span
                                                                    class="text-center">Security</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="sec6" value="Social Impact"><span
                                                                    class="text-center">Social Impact</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="sec7" value="Intelligence"><span
                                                                    class="text-center">Intelligence</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="sec8" value="Honesty"><span
                                                                    class="text-center">Honesty</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="sec9" value="Health"><span
                                                                    class="text-center">Health</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="sec10" value="Family"><span
                                                                    class="text-center">Family</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="sec11" value="Peace"><span
                                                                    class="text-center">Peace</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="sec12" value="Wealth"><span
                                                                    class="text-center">Wealth</span>
                                                            </label>
                                                        </div>
                                                    </div>


                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="sec13" value="Accountability"><span
                                                                    class="text-center">Accountability</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="sec14" value="Innovation"><span
                                                                    class="text-center">Innovation</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="sec15" value="Team Work"><span
                                                                    class="text-center">Team Work</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="sec16" value="Quality"><span
                                                                    class="text-center">Quality</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="sec17" value="Fun"><span
                                                                    class="text-center">Fun</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="sec18" value="People"><span
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
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="sec19" value="Equality"><span
                                                                    class="text-center">Equality</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = 'prim'"
                                                                    name="sec20" value="Balance"><span
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
                                                <input class="form-control w-80" placeholder="Other:"
                                                    oninput="this.className = 'prim'" name="secOther">
                                            </div>
                                        </div>
                                        <!-- Skills -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h3 class="text-center">What are some of your technical skills?</h3>
                                                <p class="text-center">Choose <b> exactly </b> 5. (Don't worry if you're not an expert in 5, just choose the ones you have the best understanding of)</p>
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="tech1" value="Web Dev"><span
                                                                    class="text-center">Web Development</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="tech2" value="Android"><span
                                                                    class="text-center">Andriod Development</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="tech3" value="iOS"><span
                                                                    class="text-center">iOS
                                                                    Development</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="tech4" value="Front End"><span
                                                                    class="text-center">Front End</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="tech5" value="Back End"><span
                                                                    class="text-center">Back End</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="tech6" value="Data Science"><span
                                                                    class="text-center">Data Science</span>
                                                            </label>
                                                        </div>
                                                    </div>


                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="tech7" value="DevOps"><span
                                                                    class="text-center">DevOps</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="tech8" value="Machine Learning"><span
                                                                    class="text-center">Machine Learning</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="tech9" value="Cloud Computing"><span
                                                                    class="text-center">Cloud Computing</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="tech10" value="Blockchain"><span
                                                                    class="text-center">Blockchain</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="tech11" value="Operating Systems"><span
                                                                    class="text-center">Operating Systems</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="tech12" value="Network Security"><span
                                                                    class="text-center">Network & Info Security</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="tech13" value="Machining"><span
                                                                    class="text-center">Machining</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="tech14" value="CAD"><span
                                                                    class="text-center">CAD</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="tech15" value="Databases"><span
                                                                    class="text-center">DB (MySQL/NoSQL)</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="tech16" value="Robotics"><span
                                                                    class="text-center">Applied Robotics</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="tech17" value="Quality Assurance"><span
                                                                    class="text-center">Quality Assurance</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="tech18" value="UI/UX"><span
                                                                    class="text-center">UI/UX</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="tech19" value="Unit Testing"><span
                                                                    class="text-center">Unit Testing</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="tech20" value="Java"><span
                                                                    class="text-center">Java</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="tech21" value="Python"><span
                                                                    class="text-center">Python</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="tech23" value="C"><span
                                                                    class="text-center">C</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="tech24" value="Command Line"><span
                                                                    class="text-center">Command Line</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="tech25" value="Mathematics"><span
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
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="tech26" value="Computer Vision"><span
                                                                    class="text-center">Computer Vision</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="tech27" value="eCommerce"><span
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
                                                <input class="form-control w-80" placeholder="Other:"
                                                    oninput="this.className = 'prim'" name="techOther">
                                            </div>
                                        </div>


                                    </div>


                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn prev-step">Back</button></li>
                                        <li><button type="button" class="default-btn next-step">Continue</button></li>
                                    </ul>
                                </div>

                                <!-- Step 3 -->
                                <div class="tab-pane" role="tabpanel" id="step3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h3 class="text-center">What are some important aspects to you when
                                                    considering an employer?</h3>
                                                <p class="text-center">Choose <b> exactly </b> 3.</p>
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="diff1" value="Flexible Work Hours"><span
                                                                    class="text-center">Flexible Work Hours</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="diff2" value="Purposeful Work"><span
                                                                    class="text-center">Purposeful Work</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="diff3" value="Company Reputation"><span
                                                                    class="text-center">Company Reputation</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="diff4" value="Sustainable Practices"><span
                                                                    class="text-center">Sustainable Practices</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="diff5" value="Office Space"><span
                                                                    class="text-center">Office Space</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="diff6" value="Fun"><span
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
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="diff7" value="Benefits"><span
                                                                    class="text-center">Benefits</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="diff8" value="Team"><span
                                                                    class="text-center">The
                                                                    Team</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="diff8" value="Location"><span
                                                                    class="text-center">Location</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="diff9" value="Challenging Work"><span
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
                                                <input class="form-control w-80" placeholder="Other:"
                                                    oninput="this.className = 'prim'" name="diffOther">
                                            </div>
                                        </div>

                                        <!-- Soft Skills -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h3 class="text-center">What are some of your soft skills?</h3>
                                                <p class="text-center">Choose <b> exactly </b> 5.</p>
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="soft1" value="Leadership"><span
                                                                    class="text-center">Leadership</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="soft2" value="Adaptability"><span
                                                                    class="text-center">Adaptability</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="soft3" value="Innovation"><span
                                                                    class="text-center">Innovation</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="soft4" value="Presenting"><span
                                                                    class="text-center">Presenting</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="soft5" value="Communication"><span
                                                                    class="text-center">Communication</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="soft6" value="Team Work"><span
                                                                    class="text-center">Team Work</span>
                                                            </label>
                                                        </div>
                                                    </div>



                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="soft7" value="Conflict Resolution"><span
                                                                    class="text-center">Conflict Resolution</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="soft8" value="Decision Making"><span
                                                                    class="text-center">Decision Making</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="soft9" value="Critical Thinkng"><span
                                                                    class="text-center">Critical Thinking</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="soft10" value="Persuasion"><span
                                                                    class="text-center">Persuasion</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="soft11" value="Collaboration"><span
                                                                    class="text-center">Collaboration</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="soft12" value="Organization"><span
                                                                    class="text-center">Organization</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="soft13" value="Problem Solving"><span
                                                                    class="text-center">Problem Solving</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="soft14" value="Learning"><span
                                                                    class="text-center">Willingness to Learn</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="soft15" value="Open Mindedness"><span
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
                                                <input class="form-control w-80" placeholder="Other:"
                                                    oninput="this.className = 'prim'" name="softOther">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h3 class="text-center"> What type of work are you looking for?</h3>
                                                <p class="text-center">Choose all that apply</p>
                                                <div class="row">
                                                    <div class="col-md-4 justify-content-center d-flex mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="work1" value="Internship"><span
                                                                    class="text-center">Internship</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="work2" value="Full Time"><span
                                                                    class="text-center">Full Time</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center mt-2">
                                                        <div id="ck-button" class="mr-2">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="work3" value="Contract"><span
                                                                    class="text-center">Contract Work</span>
                                                            </label>
                                                        </div>
                                                        <div id="ck-button" style="border: none">
                                                            <label>
                                                                <input type="checkbox" oninput="this.className = ''"
                                                                    name="" value="Contract"><span
                                                                    class="text-center"></span>
                                                            </label>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>

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
    </script>
</body>

</html>

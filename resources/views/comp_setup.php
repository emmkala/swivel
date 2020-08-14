<?php
include 'inc/firebase_init.php';
 ?>


<head>
    <link rel="stylesheet" type="text/css" href="../../stylesheets/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../stylesheets/global.css">
    <link rel="stylesheet" href="../../stylesheets/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body>

    <!-- header section -->
    <section class="top_header">
        <div class="container">
            <div class="col-md-12 text-center">
                <h2 class="regTitle" id="regSecond">Let's start </h2>
                <p class="regTitle" id="regSub">Take 2 minutes to fill out your profile to help us find the best
                    startups for you to connect with</p>

            </div>
        </div>
        <a href="#" class="log_out_btn">Log out</a>
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
                <div class="col-md-9">
                    <div class="wizard">
                        <form role="form" method="post" class="login-box">
                            <div class="tab-content" id="main_form">

                                <!----- Step1 ----->
                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h6>What is your position?</h6>
                                                <input class="form-control" placeholder="CEO & Co-Founder" id="position"
                                                    oninput="this.className = ''" name="position">

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h6>What is your company size?</h6>
                                                <input class="form-control" placeholder="15"
                                                    oninput="this.className = ''" name="size">
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
                                                <h6>What is you company's website?</h6>
                                                <input class="form-control" placeholder="www.swivelnetwork.com"
                                                    oninput="this.className = ''" name="site">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h6>Where post secondary/graduate school did you attend?</h6>
                                                <input class="form-control" placeholder="Queen's University"
                                                    oninput="this.className = ''" name="alma">
                                            </div>
                                        </div>

                                        <div class="col-md-12 text-center">
                                            <p>Term of use. Privacy policy</p>
                                        </div>

                                    </div>
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn next-step" id="#step2">Next</button></li>
                                    </ul>
                                </div>

                                <!----- Step2 ----->
                                <div class="tab-pane" role="tabpanel" id="step2">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h3 class="text-center">What are your company’s primary values?</h3>
                                                <p class="text-center">Choose 3.</p>
                                                <div class="d-flex justify-content-center">
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = 'prim'"
                                                                name="prim1" value="Creativity"><span
                                                                class="text-center">Creativity</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = 'prim'"
                                                                name="prim2" value="Adventure"><span
                                                                class="text-center">Adventure</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = 'prim'"
                                                                name="prim3" value="Achievement"><span
                                                                class="text-center">Achievement</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = 'prim'"
                                                                name="prim4" value="Learning"><span
                                                                class="text-center">Learning</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = 'prim'"
                                                                name="prim5" value="Security"><span
                                                                class="text-center">Security</span>
                                                        </label>
                                                    </div>

                                                </div>


                                                <div class="d-flex justify-content-center mt-2">
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = 'prim'"
                                                                name="prim6" value="Social Impact"><span
                                                                class="text-center">Social Impact</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = 'prim'"
                                                                name="prim7" value="Intelligence"><span
                                                                class="text-center">Intelligence</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = 'prim'"
                                                                name="prim8" value="Honesty"><span
                                                                class="text-center">Honesty</span>
                                                        </label>
                                                    </div>
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


                                                <div class="d-flex justify-content-center mt-2">
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = 'prim'"
                                                                name="prim11" value="Peace"><span
                                                                class="text-center">Peace</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = 'prim'"
                                                                name="prim12" value="Wealth"><span
                                                                class="text-center">Wealth</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = 'prim'"
                                                                name="prim13" value="Accountability"><span
                                                                class="text-center">Accountability</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = 'prim'"
                                                                name="prim14" value="Innovation"><span
                                                                class="text-center">Innovation</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = 'prim'"
                                                                name="prim15" value="Team Work"><span
                                                                class="text-center">Team Work</span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-center mt-2">
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = 'prim'"
                                                                name="prim16" value="Quality"><span
                                                                class="text-center">Quality</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = 'prim'"
                                                                name="prim17" value="Fun"><span
                                                                class="text-center">Fun</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = 'prim'"
                                                                name="prim18" value="People"><span
                                                                class="text-center">People</span>
                                                        </label>
                                                    </div>
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
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control w-80" placeholder="Other:"
                                                    oninput="this.className = 'prim'" name="primOther">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h3 class="text-center">What are your company’s secondary values?</h3>
                                                <p class="text-center">Choose 5.</p>
                                                <div class="d-flex justify-content-center">
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="sec1" value="Creativity"><span
                                                                class="text-center">Creativity</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="sec2" value="Adventure"><span
                                                                class="text-center">Adventure</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = 'prim'"
                                                                name="sec3" value="Achievement"><span
                                                                class="text-center">Achievement</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = 'prim'"
                                                                name="sec4" value="Learning"><span
                                                                class="text-center">Learning</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = 'prim'"
                                                                name="sec5" value="Security"><span
                                                                class="text-center">Security</span>
                                                        </label>
                                                    </div>

                                                </div>


                                                <div class="d-flex justify-content-center mt-2">
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = 'prim'"
                                                                name="sec6" value="Social Impact"><span
                                                                class="text-center">Social Impact</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = 'prim'"
                                                                name="sec7" value="Intelligence"><span
                                                                class="text-center">Intelligence</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = 'prim'"
                                                                name="sec8" value="Honesty"><span
                                                                class="text-center">Honesty</span>
                                                        </label>
                                                    </div>
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


                                                <div class="d-flex justify-content-center mt-2">
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = 'prim'"
                                                                name="sec11" value="Peace"><span
                                                                class="text-center">Peace</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = 'prim'"
                                                                name="sec12" value="Wealth"><span
                                                                class="text-center">Wealth</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = 'prim'"
                                                                name="sec13" value="Accountability"><span
                                                                class="text-center">Accountability</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = 'prim'"
                                                                name="sec14" value="Innovation"><span
                                                                class="text-center">Innovation</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = 'prim'"
                                                                name="sec15" value="Team Work"><span
                                                                class="text-center">Team Work</span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-center mt-2">
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = 'prim'"
                                                                name="sec16" value="Quality"><span
                                                                class="text-center">Quality</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = 'prim'"
                                                                name="sec17" value="Fun"><span
                                                                class="text-center">Fun</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = 'prim'"
                                                                name="sec18" value="People"><span
                                                                class="text-center">People</span>
                                                        </label>
                                                    </div>
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
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control w-80" placeholder="Other:"
                                                    oninput="this.className = 'prim'" name="secOther">
                                            </div>
                                        </div>
                                    </div>




                                    <!-- Skill -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h3 class="text-center">What technical skills are you looking for?</h3>
                                                <p class="text-center">Choose 5 skills from the list</p>
                                                <div class="d-flex justify-content-center">
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="tech1" value="Web Dev"><span
                                                                class="text-center">Web Development</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="tech2" value="Android"><span
                                                                class="text-center">Andriod Development</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="tech3" value="iOS"><span class="text-center">iOS
                                                                Development</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="tech4" value="Front End"><span
                                                                class="text-center">Front End</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="tech5" value="Back End"><span
                                                                class="text-center">Back End</span>
                                                        </label>
                                                    </div>

                                                </div>


                                                <div class="d-flex justify-content-center mt-2">
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="tech6" value="Data Science"><span
                                                                class="text-center">Data Science</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="tech7" value="DevOps"><span
                                                                class="text-center">DevOps</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="tech8" value="Machine Learning"><span
                                                                class="text-center">Machine Learning</span>
                                                        </label>
                                                    </div>
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


                                                <div class="d-flex justify-content-center mt-2">
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="tech11" value="Operating Systems"><span
                                                                class="text-center">Operating Systems</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="tech12" value="Network Security"><span
                                                                class="text-center">Network & Info Security</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="tech13" value="Machining"><span
                                                                class="text-center">Machining</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="tech14" value="CAD"><span
                                                                class="text-center">CAD</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="tech15" value="Databases"><span
                                                                class="text-center">Databases</span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-center mt-2">
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="tech16" value="Robotics"><span
                                                                class="text-center">Applied Robotics</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="tech17" value="QA"><span
                                                                class="text-center">Quality Assurance</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="tech18" value="UI"><span
                                                                class="text-center">UI/UX</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="tech19" value="Computer Vision"><span
                                                                class="text-center">Computer Vision</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="tech20" value="eCommerce"><span
                                                                class="text-center">eCommerce</span>
                                                        </label>
                                                    </div>
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
                                        <li><button type="button" class="default-btn prev-step" id="#step1">Back</button></li>
                                        <li><button type="button" class="default-btn next-step" id="#step3">Continue</button></li>
                                    </ul>
                                </div>

                                <!----- Step3 ----->
                                <div class="tab-pane" role="tabpanel" id="step3">
                                <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h3 class="text-center">What are some important aspects to you when
                                                    considering an employer?</h3>
                                                <p class="text-center">Choose 3 attributes from the list</p>
                                                <div class="d-flex justify-content-center">
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="diff1" value="Flexible Work Hours"><span
                                                                class="text-center">Flexible Work Hours</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="diff2" value="Purposeful Work"><span
                                                                class="text-center">Purposeful Work</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="diff3" value="Company Reputation"><span
                                                                class="text-center">Company Reputation</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="diff4" value="Sustainable Practices"><span
                                                                class="text-center">Sustainable Practices</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="diff5" value="Office"><span
                                                                class="text-center">Office Space</span>
                                                        </label>
                                                    </div>

                                                </div>


                                                <div class="d-flex justify-content-center mt-2">

                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="diff6" value="Fun"><span class="text-center">Fun
                                                                Culture</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="diff7" value="Benefits"><span
                                                                class="text-center">Benefits</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="diff8" value="Team"><span class="text-center">The
                                                                Team</span>
                                                        </label>
                                                    </div>
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
                                                                name="diff8" value="Location"><span
                                                                class="text-center">Location</span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control w-80" placeholder="Other:"
                                                    oninput="this.className = 'prim'" name="diffOther">
                                            </div>
                                        </div>
                                    </div>
                                       <!-- Soft Skills -->
                                       <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h3 class="text-center">What soft skills are you looking for?</h3>
                                                <p class="text-center">Choose 5 skills from the list</p>
                                                <div class="d-flex justify-content-center">
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="soft1" value="Leadership"><span
                                                                class="text-center">Leadership</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="soft2" value="Adaptability"><span
                                                                class="text-center">Adaptability</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="soft3" value="Innovation"><span
                                                                class="text-center">Innovation</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="soft4" value="Presenting"><span
                                                                class="text-center">Presenting</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="soft5" value="Communication"><span
                                                                class="text-center">Communication</span>
                                                        </label>
                                                    </div>

                                                </div>


                                                <div class="d-flex justify-content-center mt-2">
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="soft6" value="Team_Work"><span
                                                                class="text-center">Team Work</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="soft7" value="Conflict_Res"><span
                                                                class="text-center">Conflict Resolution</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="soft8" value="Decision_Making"><span
                                                                class="text-center">Decision Making</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="soft9" value="Critical_Thinkng"><span
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


                                                <div class="d-flex justify-content-center mt-2">
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="soft11" value="Collaboration"><span
                                                                class="text-center">Collaboration</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="soft12" value="Organization"><span
                                                                class="text-center">Organization</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="soft13" value="Problem_Solving"><span
                                                                class="text-center">Problem Solving</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="soft14" value="Learning"><span
                                                                class="text-center">Willingness to Learn</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="soft15" value="Open_Mindness"><span
                                                                class="text-center">Open-Mindedness</span>
                                                        </label>
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
                                    </div>


                                    <!-- Employment Type -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h3 class="text-center">Employment Type?</h3>
                                                <p class="text-center">Choose all that apply</p>
                                                <div class="d-flex justify-content-center">
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="work1" value="Internship"><span
                                                                class="text-center">Internship/Co-op</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="work2" value="Full_Time"><span
                                                                class="text-center">Full Time</span>
                                                        </label>
                                                    </div>
                                                    <div id="ck-button" class="mr-2">
                                                        <label>
                                                            <input type="checkbox" oninput="this.className = ''"
                                                                name="work3" value="Contract"><span
                                                                class="text-center">Contract Work</span>
                                                        </label>
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
                                <!----- Step 4 ----->
                                <div class="tab-pane" role="tabpanel" id="step4">
                                <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h3 class="text-center">Give us a brief description of your company.
                                                </h3>
                                                <p class="text-center"><span>In 50 words or less.</span></p>
                                                <div class="d-flex justify-content-center">
                                                    <textarea placeholder="Swivels purpose is to..."
                                                        oninput="this.className = ''" name="info1" max="50"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h3 class="text-center">Give us a brief description of life at your
                                                    company.</h3>
                                                <p class="text-center"><span>In 50 words or less.</span></p>
                                                <div class="d-flex justify-content-center">
                                                    <textarea
                                                        placeholder="Life at Swivel is filled with learning, teamwork and ..."
                                                        oninput="this.className = ''" name="info2" max="50"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h3 class="text-center">Give us a brief description of yourself.</h3>
                                                <p class="text-center"><span>In 50 words or less.</span></p>
                                                <div class="d-flex justify-content-center">
                                                    <textarea placeholder="I am an entrepreneur at heart ..."
                                                        oninput="this.className = ''" name="info3" max="50"></textarea>
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


    <img src="../../images/searching.png" alt="" class="searching-img">

    <!-- already made form -->

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

        <script>
          // ------------step-wizard-------------
$(document).ready(function () {
    $('.nav-tabs > li a[title]').tooltip();

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

        var target = $(e.target);

        if (target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".prev-step").click(function (e) {

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
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>

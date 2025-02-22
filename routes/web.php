<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Google\Cloud\Core\Exception\FailedPreconditionException;

use Google\Cloud\Firestore\FirestoreClient;
use Google\Cloud\Storage\StorageClient;
use Google\Cloud\Firestore\FieldValue;
use Google\Cloud\Core\Timestamp;

/*
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

$loader = new Twig_Loader_FileSystem('resources/views');
$twig = new Twig_Environment($loader);
$twig->render('landing.html', array(
  'test' => 'Pls_work',
));
*/

$projectid = getenv('GOOGLE_CLOUD_PROJECT');

$firestore = new FirestoreClient([
  'projectid' => $projectid,
]);
$studCollection = $firestore->collection('student');
$compCollection = $firestore->collection('company');
$notSeenCollection = $firestore->collection('notSeen');
$interestCollection = $firestore->collection('interested');
$skipCollection = $firestore->collection('skipped');
$regCollection = $firestore->collection('reg');
$zoomCollection = $firestore->collection('zoomLinks');
$curatedCollection = $firestore->collection('curated');


$storage = new StorageClient([
  'projectid' => $projectid,
]);
//$gcsBucket = $storage->bucket($projectid.'_bucket';);

// Landing page, student
$router->get('/', function(){
  return view('landing', [
    'test' => null,
  ]);
});

// Company Info
$router->get('/startups', function(){
  return view('comp_info', [
    'test' => null,
  ]);
});

// Global Sign In
$router->get('/signin', function(){
  return view('signin', [
    'test' => null,
  ]);
});

// Global Sign In
$router->get('/studentCompany', function(){
  return view('stud_comp', [
    'test' => null,
  ]);
});

// Student sign up
$router->get('/studentRegister', function(){
  return view('stud_reg', [
    'test' => null,
  ]);
});

// Student profile set up
$router->get('/studentSetup/{userId}', function(){
  return view('stud_setup', [
    'test' => null,
  ]);
});

// Student profile post
$router->post('/studentSetup/{userId}', function (Request $request, $userId) use ($studCollection, $curatedCollection, $regCollection) {
  $rawData = $request->all();
  $regData = $regCollection->document($userId)->snapshot()->data();

  $school = $regData["school"];
  $fname = $regData["fname"];
  $lname = $regData["lname"];
  $email = $regData["email"];

  $primVals = array_pad(explode(',', $rawData["primVals"]), 3, "");
  $secVals = array_pad(explode(',', $rawData["secVals"]), 5, "");
  $diffVals = array_pad(explode(',', $rawData["diffVals"]), 3, "");
  $techSkills = array_pad(explode(',', $rawData["techSkills"]), 5, "");
  $softSkills = array_pad(explode(',', $rawData["softSkills"]), 5, "");
  $workType = array_pad(explode(',', $rawData["workTypeList"]), 3, "");

  $regCollection->document($userId)->delete();

  // segmenting the raw data
  // raw data in associative array, use array keys
  /*
  degree - 0
  major - 1
  loc - 2
  year - 3

 // force 5/3
 can do something with array_keys and array_key_exists to find ?
  primary (3)
  sec (5)
  emp (3)

  tech (5)
  soft (5)
  work (3)

  exp1
  exp2
  exp3
  magic
  */

  $keys = array_keys($rawData);

  //$workTypes = workTypes($rawData, "stud");

  $currTime = time();

  /*if(count($rawData) < 33){
    return redirect("/signupError");
  }*/

  // set data
  $profileData = [
    'fname' => $fname,
    'lname' => $lname,
    'email' => $email,
    'school' => $school,
    'degree' => $rawData['degree'],
    'major' => $rawData['major'],
    'loc' => $rawData['loc'],
    'year' => $rawData['year'],
    'latestSeen' => '',
    'created' => $currTime,
    'Primary' => ['prim1' => $primVals[0], 'prim2' =>  $primVals[1], 'prim3' => $primVals[2]],
    'Secondary' => ['sec1'=> $secVals[0], 'sec2'=> $secVals[1], 'sec3' => $secVals[2], 'sec4'=> $secVals[3], 'sec5'=> $secVals[4]],
    'Tech' => ['tech1' => $techSkills[0], 'tech2' => $techSkills[1], 'tech3' => $techSkills[2], 'tech4' => $techSkills[3], 'tech5' => $techSkills[4]],
    'Employer' => ['emp1' => $diffVals[0], 'emp2' => $diffVals[1], 'emp3' => $diffVals[2]],
    'Soft' => ['soft1' => $softSkills[0], 'soft2' => $softSkills[1], 'soft3' => $softSkills[2], 'soft4' => $softSkills[3], 'soft5' => $softSkills[4]],
    'Experience' => ['exp1' => $rawData['exp1'], 'exp2' => $rawData['exp2'], 'exp3' => $rawData['exp3']],
    'WorkType' => ['work1' => $workType[0], 'work2' => $workType[1], 'work3' => $workType[2]],
    'magic' => $rawData['magic'],
  ];

  $studCollection->document($userId)->set($profileData);

  $curated = [
    'curatedMatches' => array()
  ];
  $curatedCollection->document($userId)->set($curated);

  // redirect to edit page when matching is working
  return redirect('/curated/' . $userId);
});

// Universal ?? For now student and comp come back to this
$router->get('/editStudentProfile/{userId}', function($userId) use ($studCollection) {
  $studDoc = $studCollection->document($userId);
  $studData = $studDoc->snapshot();

  if (!$studData->exists()) {
    return new Response('', Response::HTTP_NOT_FOUND);
  }

  return view('stud_edit', [
    'data' => $studData,
  ]);
});

// Company sign up
$router->get('/companyRegister', function(){
  return view('comp_reg', [
    'test' => null,
  ]);
});

// Company profile setup
$router->get('/companySetup/{userId}', function(){
  return view('comp_setup', [
    'test' => null,
  ]);
});

// Company profile post
$router->post('/companySetup/{userId}', function (Request $request, $userId) use ($compCollection, $curatedCollection, $regCollection, $zoomCollection) {
  $rawData = $request->all();
  $regData = $regCollection->document($userId)->snapshot()->data();

  $company = $regData["company"];
  $fname = $regData["fname"];
  $lname = $regData["lname"];
  $email = $regData["email"];

  $primVals = array_pad(explode(',', $rawData["primVals"]), 3, "");
  $secVals = array_pad(explode(',', $rawData["secVals"]), 5, "");
  $diffVals = array_pad(explode(',', $rawData["diffVals"]), 3, "");
  $techSkills = array_pad(explode(',', $rawData["techSkills"]), 5, "");
  $softSkills = array_pad(explode(',', $rawData["softSkills"]), 5, "");
  $workType = array_pad(explode(',', $rawData["workTypeList"]), 3, "");

  $regCollection->document($userId)->delete();
  // segmenting the raw data
  // raw data in associative array, use array keys
  /*
  degree - 0
  major - 1
  loc - 2
  year - 3

 // force 5/3
 can do something with array_keys and array_key_exists to find ?
  primary (3)
  sec (5)
  emp (3)

  tech (5)
  soft (5)
  work (3)

  exp1
  exp2
  exp3
  magic
  */

  /*$workTypes = workTypes($rawData, "comp");

  $keys = array_keys($rawData);

  if(count($rawData) < 33){
    return redirect("/signupError");
  }*/

  // Get the first link in the zoom collection, set it to company collection and delete
  $allLinks = $zoomCollection->documents();
  // doing it as foreach cause i dont wanna figure it out the other way
  foreach($allLinks as $link){
    if($link->exists()){
      $firstLinkId = $link->id();
      $compZoom = $link["link"];
      $zoomCollection->document($firstLinkId)->delete();
      break;
    }
  }


  $currTime = time();

  $profileData = [
    'fname' => $fname,
    'lname' => $lname,
    'email' => $email,
    'company' => $company,
    'position' => $rawData['position'],
    'size' => $rawData['size'],
    'loc' => $rawData['loc'],
    'site' => $rawData['site'],
    'alma' => $rawData['alma'],
    'latestSeen' => '',
    'created' => $currTime,
    'companyZoom' => $compZoom,
    'Primary' => ['prim1' => $primVals[0], 'prim2' =>  $primVals[1], 'prim3' => $primVals[2]],
    'Secondary' => ['sec1'=> $secVals[0], 'sec2'=> $secVals[1], 'sec3' => $secVals[2], 'sec4'=> $secVals[3], 'sec5'=> $secVals[4]],
    'Tech' => ['tech1' => $techSkills[0], 'tech2' => $techSkills[1], 'tech3' => $techSkills[2], 'tech4' => $techSkills[3], 'tech5' => $techSkills[4]],
    'Apart' => ['diff1' => $diffVals[0], 'diff2' => $diffVals[1], 'diff3' => $diffVals[2]],
    'Soft' => ['soft1' => $softSkills[0], 'soft2' => $softSkills[1], 'soft3' => $softSkills[2], 'soft4' => $softSkills[3], 'soft5' => $softSkills[4]],
    'Info' => ['compBio' => $rawData['info1'], 'life' => $rawData['info2'], 'personalBio' => $rawData['info3']],
    'WorkType' => ['work1' => $workType[0], 'work2' => $workType[1], 'work3' => $workType[2]],
  ];

  $curated = [
    'curatedMatches' => array()
  ];

  $compCollection->document($userId)->set($profileData);
  $curatedCollection->document($userId)->set($curated);

  // redirect to edit page when matching is working
  return redirect('/curated/' . $userId);

});

// Get possible matches
$router->get('/matching/{userId}', function($userId) use ($compCollection, $studCollection, $notSeenCollection){

  // finding possible matches
  $type = userType($compCollection, $studCollection, $userId);

  if($notSeenCollection->document($userId)->snapshot()->exists()){
    $notSeen = $notSeenCollection->document($userId)->snapshot()->data();
    $count = count($notSeen["notSeenIds"]);

    if($count == 0){
      // if notSeen go to noNewMatches page
      return redirect('/noNewMatches/'.$userId);
    }
  } else {
    return redirect('/error');
  }

  return view('matching', [
    'type' => $type,
    'show' => $notSeen,
    'uid' => $userId
  ]);
});

// move id from notSeen array to interest/skip array
$router->post('/matching/{userId}', function (Request $request, $userId) use ($notSeenCollection, $interestCollection, $skipCollection) {

  $rawData = $request->all();
  $prospectId = $request->input("prospectId");

  //remove from $notSeen
  $notSeenCollection->document($userId)->update([
    ['path' => 'notSeenIds', 'value' => FieldValue::arrayRemove([$prospectId])]
  ]);

  if($rawData["choice"] == "Interested"){
    // add to interested array
    $interestCollection->document($userId)->update([
      ['path' => 'interests', 'value' => FieldValue::arrayUnion([$prospectId])]
    ]);

    if($interestCollection->document($prospectId)->snapshot()->exists()){
      $prospectLikes = $interestCollection->document($prospectId)->snapshot()->data();
      // if the prospect has already liked them
      if(in_array($userId, $prospectLikes["interests"])){
        // can do all match db set in newMatch
        return redirect('/newMatch/'.$userId.'/'.$prospectId);
      } else {
        // hasn't been liked back
        return redirect('/matching/'.$userId);
      }
    } else {
      to_console("error");
    }

  } else if($rawData["choice"] == "Skip"){
    $skipCollection->document($userId)->update([
      ['path' => 'skips', 'value' => FieldValue::arrayUnion([$prospectId])]
    ]);
    return redirect('/matching/'.$userId);
  } else {
    to_console("error");
  }

  return redirect('/matching/' . $userId);
});

// Get all curated matches
$router->get('/curated/{userId}', function($userId) use ($compCollection, $studCollection, $curatedCollection){

  // finding possible matches
  $type = userType($compCollection, $studCollection, $userId);

  if($curatedCollection->document($userId)->snapshot()->exists()){
    $curated = $curatedCollection->document($userId)->snapshot()->data();
    $count = count($curated["curatedMatches"]);

    if($count == 0){
      // if notSeen go to noNewMatches page
      return redirect('/noNewCurated/'.$userId);
    }
  } else {
    return redirect('/error');
  }

  return view('curated', [
    'type' => $type,
    'show' => $curated,
    'uid' => $userId
  ]);
});

// move id from curated and notSeen array to interest/skip array
$router->post('/curated/{userId}', function (Request $request, $userId) use ($curatedCollection, $notSeenCollection, $interestCollection, $skipCollection) {

  $rawData = $request->all();
  $prospectId = $request->input("prospectId");

  //remove from $notSeen
  $notSeenCollection->document($userId)->update([
    ['path' => 'notSeenIds', 'value' => FieldValue::arrayRemove([$prospectId])]
  ]);

  // remove from $curated
  $curatedCollection->document($userId)->update([
    ['path' => 'curatedMatches', 'value' => FieldValue::arrayRemove([$prospectId])]
  ]);

  if($rawData["choice"] == "Interested"){
    // add to interested array
    $interestCollection->document($userId)->update([
      ['path' => 'interests', 'value' => FieldValue::arrayUnion([$prospectId])]
    ]);

    if($interestCollection->document($prospectId)->snapshot()->exists()){
      $prospectLikes = $interestCollection->document($prospectId)->snapshot()->data();
      // if the prospect has already liked them
      if(in_array($userId, $prospectLikes["interests"])){
        // can do all match db set in newMatch
        return redirect('/newMatch/'.$userId.'/'.$prospectId);
      } else {
        // hasn't been liked back
        return redirect('/curated/'.$userId);
      }
    } else {
      to_console("error");
    }

  } else if($rawData["choice"] == "Skip"){
    $skipCollection->document($userId)->update([
      ['path' => 'skips', 'value' => FieldValue::arrayUnion([$prospectId])]
    ]);
    return redirect('/curated/'.$userId);
  } else {
    to_console("error");
  }

  return redirect('/curated/' . $userId);
});

// swipped through all curated matches, tell them to come back for more
$router->get('noNewCurated/{userId}', function($userId) use ($notSeenCollection, $studCollection, $compCollection){

  //check if user is student or company
  $type = userType($compCollection, $studCollection, $userId);

  return view('no_new_curated', [
    'type' => $type,
    'userId' => $userId,
  ]);
});


// populating notSeen with any users made while user was swiping
$router->get('noNewMatches/{userId}', function($userId) use ($notSeenCollection, $studCollection, $compCollection){

  //check if user is student or company
  $type = userType($compCollection, $studCollection, $userId);

  // user is student, look for updates to company collection
  if($type == "Student"){
    //get timestamp of latest company seen
    $studData = $studCollection->document($userId)->snapshot()->data();
    $latest = $studData["latestSeen"];

    $query = $compCollection->where("created", ">", $latest);
    $newComps = $query->documents();
    $count=0;

    foreach($newComps as $newComp){
      $count+=1;
      $notSeenCollection->document($userId)->update([
        ["path" => "notSeenIds", "value" => FieldValue::arrayUnion([$newComp->id()])]
      ]);
    }

    //where new companies added, redirect to matching
    if($count > 0){
      return redirect('/matching/'.$userId);
    } else {
      return view('no_new', [
        'type' => $type,
        'userId' => $userId,
      ]);
    }


  } else if ($type == "Company"){
    //get timestamp of latest company seen
    $compData = $compCollection->document($userId)->snapshot()->data();
    $latest = $compData["latestSeen"];

    //looking for new student documents
    $query = $studCollection->where("created", ">", $latest);
    $newStuds = $query->documents();
    $count=0;

    $notSeenCollection->document($userId)->set([
      "notSeenIds" => [],
    ]);

    foreach($newStuds as $newStud){
      $count+=1;
      $notSeenCollection->document($userId)->update([
        ["path" => "notSeenIds", "value" => FieldValue::arrayUnion([$newStud->id()])]
      ]);
    }

    //where new companies added, redirect to matching
    if($count > 0){
      return redirect('/matching/'.$userId);
    } else {
      return view('no_new', [
        'type' => $type,
        'userId' => $userId,
      ]);
    }

  } else {
    return view('no_new', [
      'userId' => $userId,
      'type' => $type
    ]);
  }
});

// page user gets when they initiate a match
$router->get('newMatch/{userId}/{matchId}', function($userId, $matchId) use ($notSeenCollection, $compCollection, $studCollection){

    $userType = userType($compCollection, $studCollection, $userId);

    // $zoom = first elem in array, zoomLinks removes first elem
    // $zoom = array_shift($zoomLinks);

    if($userType == "Student"){
      $userData = $studCollection->document($userId)->snapshot()->data();
      $matchData = $compCollection->document($matchId)->snapshot()->data();
      $zoom = $matchData["companyZoom"];

      $uMatchesSub = $studCollection->document($userId)->collection("matches");
      $mMatchesSub = $compCollection->document($matchId)->collection("matches");

    } else {
      $userData = $compCollection->document($userId)->snapshot()->data();
      $matchData = $studCollection->document($matchId)->snapshot()->data();
      $zoom = $userData["companyZoom"];

      $uMatchesSub = $compCollection->document($userId)->collection("matches");
      $mMatchesSub = $studCollection->document($matchId)->collection("matches");
    }

    // set userEmail and match Email
    $userEmail = $userData["email"];
    $matchEmail = $matchData["email"];

    $matchName = $matchData["fname"]." ".$matchData["lname"];
    $userName = $userData["fname"]." ".$userData["lname"];

    $uMatchesSub->document($matchId)->set([
      "zoomLink" => $zoom,
      "matchEmail" => $matchEmail,
      "matchName" => $matchName,
      "userEmail" => $userEmail,
      "init" => true,
      "meeting" => ""
    ]);

    $mMatchesSub->document($userId)->set([
      "zoomLink" => $zoom,
      "matchEmail" => $userEmail,
      "matchName" => $userName,
      "userEmail" => $matchEmail,
      "init" => false,
      "meeting" => ""
    ]);

    return view('new_match', [
      'matchName' => $matchName,
      'zoomLink' => $zoom,
      'userType' => $userType,
      'userId' => $userId
    ]);
});

// set the times the user is available for
$router->post('/newMatch/{userId}/{matchId}', function (Request $request, $userId, $matchId) use ($compCollection, $studCollection) {
  $rawData = $request->all();

  $userType = userType($compCollection, $studCollection, $userId);

  if($userType == "Student"){
    $uMatchesSub = $studCollection->document($userId)->collection("matches");
    $mMatchesSub = $compCollection->document($matchId)->collection("matches");

  } else {
    $uMatchesSub = $compCollection->document($userId)->collection("matches");
    $mMatchesSub = $studCollection->document($matchId)->collection("matches");
  }

  $emptyArr = array();
  $uMatchesSub->document($matchId)->update([
    ["path" => "times", "value" => $emptyArr]
  ]);

  $mMatchesSub->document($userId)->update([
    ["path" => "times", "value" => $emptyArr]
  ]);

  foreach($rawData as $time){
    $uMatchesSub->document($matchId)->update([
      ["path" => "times", "value" => FieldValue::arrayUnion([$time])]
    ]);

    $mMatchesSub->document($userId)->update([
      ["path" => "times", "value" => FieldValue::arrayUnion([$time])]
    ]);
  }

  return redirect("/matches/".$userId);

});

// send all matches and let the user choose times available
$router->get('matches/{userId}', function($userId) use ($compCollection, $studCollection){

  $userType = userType($compCollection, $studCollection, $userId);

  $compZoom = "";

  if($userType == "Student"){
    $allMatches = $studCollection->document($userId)->collection("matches")->documents();
  } else {
    $allMatches = $compCollection->document($userId)->collection("matches")->documents();
    $getZoom = $compCollection->document($userId)->snapshot()->data();
    $compZoom = $getZoom["companyZoom"];
  }

  return view('matches', [
    'allMatches' => $allMatches,
    'userId' => $userId,
    'type' => $userType,
    'compZoom' => $compZoom
  ]);
});

// set meeting Time based off options
$router->post('/matches/{userId}', function (Request $request, $userId) use ($compCollection, $studCollection) {
  $matchId = $request->input('matchId');
  $meeting = $request->input('time');

  $userType = userType($compCollection, $studCollection, $userId);

  if($userType == "Student"){
    $uMatchesSub = $studCollection->document($userId)->collection("matches");
    $mMatchesSub = $compCollection->document($matchId)->collection("matches");

  } else {
    $uMatchesSub = $compCollection->document($userId)->collection("matches");
    $mMatchesSub = $studCollection->document($matchId)->collection("matches");
  }

  $uMatchesSub->document($matchId)->update([
    ["path" => "meeting", "value" => $meeting]
  ]);

  $mMatchesSub->document($userId)->update([
    ["path" => "meeting", "value" => $meeting]
  ]);

  return redirect("/matches/".$userId);



});

// Error Page
$router->get('/error', function(){
  return view('error', [
    'test' => null,
  ]);
});

//signup error, too many values
$router->get('/signupError', function(){
  return view('signupError', [
    'test' => null,
  ]);
});


// Helper functions

function workTypes($rawData, $type){
  $numFir;
  $numLas;

  if($type == "stud"){
    $numFir = 28;
    $numLas = 4;
  } else if($type == "comp") {
    $numFir = 29;
    $numLas = 3;
  }
  $tmp = $rawData;
  // getting rid of all elements that aren't in the
  array_splice($tmp, 0, $numFir);
  for($i = 0; $i < $numLas; $i++){
    array_pop($tmp);
  }

  // append each thing to the array
  $workTypes = array("", "", "");
  foreach($tmp as $work){
    if($work == "Internship"){
      $workTypes[0] = "Internship";
    } else if($work == "Full Time"){
      $workTypes[1] = "Full Time";
    } else if($work == "Contract"){
      $workTypes[2] = "Contract";
    }
  }

  return $workTypes;

}

function userType($compCollection, $studCollection, $userId){
  if($studCollection->document($userId)->snapshot()->exists()){
    return "Student";
  } else if($compCollection->document($userId)->snapshot()->exists()){
    return "Company";
  } else {
    return redirect('/error');
  }
}

function to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Output: " . $output . "' );</script>";
}



 ?>

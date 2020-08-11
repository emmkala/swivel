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
$matchCollection = $firestore->collection('matches');
$timeCollection = $firestore->collection('times');

// zoomLinks - $GLOBALS['zoomLinks']
$zoomLinks = array("test1", "test2", "test3", "test4");

$storage = new StorageClient([
  'projectid' => $projectid,
]);
//$gcsBucket = $storage->bucket($projectid.'_bucket';);

// Landing page, no info
$router->get('/', function(){
  return view('landing', [
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
$router->post('/studentSetup/{userId}', function (Request $request, $userId) use ($studCollection, $regCollection) {
  $rawData = $request->all();
  $regData = $regCollection->document($userId)->snapshot()->data();

  $school = $regData["school"];
  $fname = $regData["fname"];
  $lname = $regData["lname"];
  $email = $regData["email"];

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

  $workTypes = workTypes($rawData, "stud");

  $currTime = time();
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
    'Primary' => ['prim1' => $rawData[$keys[4]], 'prim2' =>  $rawData[$keys[5]], 'prim3' => $rawData[$keys[6]]],
    'Secondary' => ['sec1'=> $rawData[$keys[8]], 'sec2'=> $rawData[$keys[9]], 'sec3' => $rawData[$keys[10]], 'sec4'=> $rawData[$keys[11]], 'sec5'=> $rawData[$keys[12]]],
    'Employer' => ['emp1' => $rawData[$keys[14]], 'emp2' => $rawData[$keys[15]], 'emp3' => $rawData[$keys[16]]],
    'Tech' => ['tech1' => $rawData[$keys[18]], 'tech2' => $rawData[$keys[19]], 'tech3' => $rawData[$keys[20]], 'tech4' => $rawData[$keys[21]], 'tech5' => $rawData[$keys[22]]],
    'Soft' => ['soft1' => $rawData[$keys[24]], 'soft2' => $rawData[$keys[25]], 'soft3' => $rawData[$keys[26]], 'soft4' => $rawData[$keys[27]], 'soft5' => $rawData[$keys[28]]],
    'Experience' => ['exp1' => $rawData['exp1'], 'exp2' => $rawData['exp2'], 'exp3' => $rawData['exp3']],
    'WorkType' => ['work1' => $workTypes[0], 'work2' => $workTypes[1], 'work3' => $workTypes[2]],
    'magic' => $rawData['magic'],
  ];

  $studCollection->document($userId)->set($profileData);

  return redirect('/matching/' . $userId);
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
$router->post('/companySetup/{userId}', function (Request $request, $userId) use ($compCollection, $regCollection) {
  $rawData = $request->all();
  $regData = $regCollection->document($userId)->snapshot()->data();

  $company = $regData["company"];
  $fname = $regData["fname"];
  $lname = $regData["lname"];
  $email = $regData["email"];

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

  $workTypes = workTypes($rawData, "comp");

  $keys = array_keys($rawData);

  $currTime = time();

  $profileData = [
    'fname' => $fname,
    'lname' => $lname,
    'email' => $email,
    'company' => $company,
    'postion' => $rawData['position'],
    'size' => $rawData['size'],
    'loc' => $rawData['loc'],
    'site' => $rawData['site'],
    'alma' => $rawData['alma'],
    'latestSeen' => '',
    'created' => $currTime,
    'Primary' => ['prim1' => $rawData[$keys[6]], 'prim2' =>  $rawData[$keys[6]], 'prim3' => $rawData[$keys[7]]],
    'Secondary' => ['sec1'=> $rawData[$keys[9]], 'sec2'=> $rawData[$keys[10]], 'sec3' => $rawData[$keys[11]], 'sec4'=> $rawData[$keys[12]], 'sec5'=> $rawData[$keys[13]]],
    'Apart' => ['diff1' => $rawData[$keys[15]], 'diff2' => $rawData[$keys[16]], 'diff3' => $rawData[$keys[17]]],
    'Tech' => ['tech1' => $rawData[$keys[19]], 'tech2' => $rawData[$keys[20]], 'tech3' => $rawData[$keys[21]], 'tech4' => $rawData[$keys[22]], 'tech5' => $rawData[$keys[23]]],
    'Soft' => ['soft1' => $rawData[$keys[25]], 'soft2' => $rawData[$keys[26]], 'soft3' => $rawData[$keys[27]], 'soft4' => $rawData[$keys[28]], 'soft5' => $rawData[$keys[29]]],
    'Info' => ['info1' => $rawData['info1'], 'info2' => $rawData['info2'], 'exp3' => $rawData['info3']],
    'WorkType' => ['work1' => $workTypes[0], 'work2' => $workTypes[1], 'work3' => $workTypes[2]],
  ];

  $compCollection->document($userId)->set($profileData);

  // redirect to edit page when matching is working
  return redirect('/matching/' . $userId);

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
    'count' => $count
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
        'test' => null,
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
      "interests" => [],
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
        'test' => null,
      ]);
    }

  } else {
    return view('no_new', [
      'test' => null,
    ]);
  }
});

// page user gets when they initiate a match
$router->get('newMatch/{userId}/{matchId}', function($userId, $matchId) use ($zoomLinks, $notSeenCollection, $compCollection, $studCollection, $matchCollection){

    $userType = userType($compCollection, $studCollection, $userId);
    // $zoom = first elem in array, zoomLinks removes first elem
    $zoom = array_shift($zoomLinks);

    if($userType == "Student"){
      $userData = $studCollection->document($userId)->snapshot()->data();
      $matchData = $compCollection->document($matchId)->snapshot()->data();
    } else {
      $userData = $compCollection->document($userId)->snapshot()->data();
      $matchData = $studCollection->document($matchId)->snapshot()->data();
    }

    // set userEmail and match Email
    $userEmail = $userData["email"];
    $matchEmail = $matchData["email"];

    $matchName = $matchData["fname"];

    if($matchCollection->document($userId)->snapshot()->exists()){
      // USER: match -> update
      $pathZoom = $matchId.".zoomLink";
      $pathMatchEmail = $matchId.".matchEmail";
      $pathUserEmail = $matchId.".userEmail";

      $matchCollection->document($userId)->update([
        ["path" => $pathZoom, "value" => $zoom],
        ["path" => $pathMatchEmail, "value" => $matchEmail],
        ["path" => $pathUserEmail, "value" => $userEmail],
      ]);

    } else {
      // USER: first match, match -> set
      $matchCollection->document($userId)->set([
        $matchId => [
          "zoomLink" => $zoom,
          //time
          "matchEmail" => $matchEmail,
          "userEmail" => $userEmail
        ],
      ]);
    }

    if($matchCollection->document($matchId)->snapshot()->exists()){
      // MATCH: match -> update
      $pathZoom = $userId.".zoomLink";
      $pathMatchEmail = $userId.".matchEmail";
      $pathUserEmail = $userId.".userEmail";

      $matchCollection->document($userId)->update([
        ["path" => $pathZoom, "value" => $zoom],
        ["path" => $pathMatchEmail, "value" => $userEmail],
        ["path" => $pathUserEmail, "value" => $matchEmail],
      ]);

    } else {
      // MATCH: first match, match -> set
      $matchCollection->document($matchId)->set([
        $userId => [
          "zoomLink" => $zoom,
          //time
          "matchEmail" => $userEmail,
          "userEmail" => $matchEmail
        ],
      ]);

    }

    return view('new_match', [
      'match' => $matchName,
      'zoomLink' => $zoom
    ]);









});

// Global Sign In
$router->get('/sigin', function(){
  return view('signin', [
    'test' => null,
  ]);
});

// Error Page
$router->get('/error', function(){
  return view('error', [
    'test' => null,
  ]);
});


// Helper functions

// update method of workTypes
//function workTypes($profileData, $rawData, $user){
  /*
  $numFir;
  $numLas;

  if($user == "stud"){
    $numFir = 28;
    $numLas = 4;
  } else if($user == "comp") {
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
  foreach($tmp as $work){
    if($work == "Internship"){
      $profileData[] = ['path' => 'WorkType.work1', 'value' => "Internship"];
    } else if($work == "Full_Time"){
      $profileData[] = ['path' => 'WorkType.work2', 'value' => "Full_Time"];
    } else if($work == "Contract"){
      $profileData[] = ['path' => 'WorkType.work3', 'value' => "Contract"];
    }
  }

  return $profileData;
}
*/

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
    } else if($work == "Full_Time"){
      $workTypes[1] = "Full_Time";
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

<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Google\Cloud\Core\Exception\FailedPreconditionException;

use Google\Cloud\Firestore\FirestoreClient;
use Google\Cloud\Storage\StorageClient;
use Google\Cloud\Firestore\FieldValue;


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
$router->post('/studentSetup/{userId}', function (Request $request, $userId) use ($studCollection) {
  $rawData = $request->all();
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

  $profileData = [
    ['path' => 'degree', 'value' => $rawData['degree']],
    ['path' => 'major', 'value' => $rawData['major']],
    ['path' => 'loc', 'value' => $rawData['loc']],
    ['path' => 'year', 'value' => $rawData['year']],
    ['path' => 'Primary.prim1', 'value' => $rawData[$keys[4]]],
    ['path' => 'Primary.prim2', 'value' => $rawData[$keys[5]]],
    ['path' => 'Primary.prim3', 'value' => $rawData[$keys[6]]],
    ['path' => 'Secondary.sec1', 'value' => $rawData[$keys[8]]],
    ['path' => 'Secondary.sec2', 'value' => $rawData[$keys[9]]],
    ['path' => 'Secondary.sec3', 'value' => $rawData[$keys[10]]],
    ['path' => 'Secondary.sec4', 'value' => $rawData[$keys[11]]],
    ['path' => 'Secondary.sec5', 'value' => $rawData[$keys[12]]],
    ['path' => 'Employer.emp1', 'value' => $rawData[$keys[14]]],
    ['path' => 'Employer.emp2', 'value' => $rawData[$keys[15]]],
    ['path' => 'Employer.emp3', 'value' => $rawData[$keys[16]]],
    ['path' => 'Tech.tech1', 'value' => $rawData[$keys[18]]],
    ['path' => 'Tech.tech2', 'value' => $rawData[$keys[19]]],
    ['path' => 'Tech.tech3', 'value' => $rawData[$keys[20]]],
    ['path' => 'Tech.tech4', 'value' => $rawData[$keys[21]]],
    ['path' => 'Tech.tech5', 'value' => $rawData[$keys[22]]],
    ['path' => 'Soft.soft1', 'value' => $rawData[$keys[24]]],
    ['path' => 'Soft.soft2', 'value' => $rawData[$keys[25]]],
    ['path' => 'Soft.soft3', 'value' => $rawData[$keys[26]]],
    ['path' => 'Soft.soft4', 'value' => $rawData[$keys[27]]],
    ['path' => 'Soft.soft5', 'value' => $rawData[$keys[28]]],
    // work type ??
    ['path' => 'Experience.exp1', 'value' => $rawData['exp1']],
    ['path' => 'Experience.exp2', 'value' => $rawData['exp2']],
    ['path' => 'Experience.exp3', 'value' => $rawData['exp3']],
    ['path' => 'magic', 'value' => $rawData['magic']],
  ];


  $profileData = workTypes($profileData, $rawData, "stud");

  $studCollection->document($userId)->update($profileData);

  return redirect('/matching/' . $userId);

/*
  $query = $studCollection->where('email', '=', $userEmail);
  $documents = $query->documents();

  foreach ($documents as $user) {
    if ($document->exists()) {
      to_console("Success");
      $userId = $user.id();
      $studCollection.doc($userId).update($rawData);
      return redirect('/dashboard');

    } else {
        to_console('Document %s does not exist!' . PHP_EOL, $snapshot->id());
        return redirect('/error');
    }
  }
  */

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

// Get possible matches
$router->get('/matching/{userId}', function($userId) use ($compCollection, $studCollection, $notSeenCollection){

  // finding possible matches
  if($studCollection->document($userId)->snapshot()->exists()){
    // user is a student, get all companies
      $type = "Student";
      // get all companies the student hasn't seen
      if($notSeenCollection->document($userId)->snapshot()->exists()){
        $notSeen = $notSeenCollection->document($userId)->snapshot()->data();
        if(count($notSeen["notSeenIds"]) == 0){
          // if notSeen go to noNewMatches page
          return redirect('/noNewMatches/'.$userId);
        }
      } else {
        to_console("notSeen doesn't exist");
        // return redirect('/error');
      }

  } else if($compCollection->document($userId)->snapshot()->exists()){
      $type = "Company";
      if($notSeenCollection->document($userId)->snapshot()->exists()){
        $notSeen = $notSeenCollection->document($userId)->snapshot()->data();
        if(count($notSeen["notSeenIds"]) == 0){
          // if notSeen go to noNewMatches page
          return redirect('/noNewMatches/'.$userId);
        }

      } else {
        to_console("notSeen doesn't exist");
        // return redirect('/error');
      }

  } else {
    to_console("User doesn't exist in student or company collection");
    //return redirect('/error');
  }

  return view('matching', [
    'type' => $type,
    'show' => $notSeen,
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
      if(in_array($prospectLikes, $userId)){
        // match!
        return redirect('/matched/'.$userId);
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


$router->get('noNewMatches/{userId}', function(){
  return view('no_new', [
    'test' => null,
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
$router->post('/companySetup/{userId}', function (Request $request, $userId) use ($compCollection) {
  $rawData = $request->all();
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

  $profileData = [
    ['path' => 'position', 'value' => $rawData['position']],
    ['path' => 'size', 'value' => $rawData['size']],
    ['path' => 'loc', 'value' => $rawData['loc']],
    ['path' => 'site', 'value' => $rawData['site']],
    ['path' => 'alma', 'value' => $rawData['alma']],
    ['path' => 'Primary.prim1', 'value' => $rawData[$keys[5]]],
    ['path' => 'Primary.prim2', 'value' => $rawData[$keys[6]]],
    ['path' => 'Primary.prim3', 'value' => $rawData[$keys[7]]],
    ['path' => 'Secondary.sec1', 'value' => $rawData[$keys[9]]],
    ['path' => 'Secondary.sec2', 'value' => $rawData[$keys[10]]],
    ['path' => 'Secondary.sec3', 'value' => $rawData[$keys[11]]],
    ['path' => 'Secondary.sec4', 'value' => $rawData[$keys[12]]],
    ['path' => 'Secondary.sec5', 'value' => $rawData[$keys[13]]],
    ['path' => 'Apart.diff1', 'value' => $rawData[$keys[15]]],
    ['path' => 'Apart.diff2', 'value' => $rawData[$keys[16]]],
    ['path' => 'Apart.diff3', 'value' => $rawData[$keys[17]]],
    ['path' => 'Tech.tech1', 'value' => $rawData[$keys[19]]],
    ['path' => 'Tech.tech2', 'value' => $rawData[$keys[20]]],
    ['path' => 'Tech.tech3', 'value' => $rawData[$keys[21]]],
    ['path' => 'Tech.tech4', 'value' => $rawData[$keys[22]]],
    ['path' => 'Tech.tech5', 'value' => $rawData[$keys[23]]],
    ['path' => 'Soft.soft1', 'value' => $rawData[$keys[25]]],
    ['path' => 'Soft.soft2', 'value' => $rawData[$keys[26]]],
    ['path' => 'Soft.soft3', 'value' => $rawData[$keys[27]]],
    ['path' => 'Soft.soft4', 'value' => $rawData[$keys[28]]],
    ['path' => 'Soft.soft5', 'value' => $rawData[$keys[29]]],
    // work type ??
    ['path' => 'Info.info1', 'value' => $rawData['info1']],
    ['path' => 'Info.info2', 'value' => $rawData['info2']],
    ['path' => 'Info.info3', 'value' => $rawData['info3']],
  ];


  $profileData = workTypes($profileData, $rawData, "comp");

  $compCollection->document($userId)->update($profileData);

  // redirect to edit page when matching is working
  return redirect('/matching/' . $userId);

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

function workTypes($profileData, $rawData, $user){

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


function to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Output: " . $output . "' );</script>";
}



 ?>

<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Google\Cloud\Core\Exception\FailedPreconditionException;

use Google\Cloud\Firestore\FirestoreClient;
use Google\Cloud\Storage\StorageClient;

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

/*
Initial doc created, includes:
email, fname, lname, role:student
School will be added here when doing school auth

$router->post('/studentRegister', function (Request $request) use ($studCollection) {

  $fname = $request->input('fname');
  $lname = $request->input('lname');
  $email = $request->input('email');

  $regData = [
    'fname' => $fname,
    'lname' => $lname,
    'email' => $email
  ];

  // Data cleansing & error handling

  //$newProfile = $studCollection->newDocument();
  //$newProfile->set($regData);

  $studCollection.doc($userID).set($regData);

  return redirect('/studentSetup/' . $newProfile->id());
  //return redirect('/studentSetup');
});
*/

// Student profile set up
$router->get('/studentSetup/{userId}', function(){
  return view('stud_setup', [
    'test' => null,
  ]);
});

// Student profile post
$router->post('/studentSetup/{userId}', function (Request $request) use ($studCollection) {
  $rawData = $request->all();
  $userId = $request->input('uid');

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
    ['path' => 'Primary.prim1', 'value' => $rawData[$keys[5]]],
    ['path' => 'Primary.prim2', 'value' => $rawData[$keys[6]]],
    ['path' => 'Primary.prim3', 'value' => $rawData[$keys[7]]],
    ['path' => 'Secondary.sec1', 'value' => $rawData[$keys[9]]],
    ['path' => 'Secondary.sec2', 'value' => $rawData[$keys[10]]],
    ['path' => 'Secondary.sec3', 'value' => $rawData[$keys[11]]],
    ['path' => 'Secondary.sec4', 'value' => $rawData[$keys[12]]],
    ['path' => 'Secondary.sec5', 'value' => $rawData[$keys[13]]],
    ['path' => 'Employer.emp1', 'value' => $rawData[$keys[15]]],
    ['path' => 'Employer.emp2', 'value' => $rawData[$keys[16]]],
    ['path' => 'Employer.emp3', 'value' => $rawData[$keys[17]]],
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
    ['path' => 'Experience.exp1', 'value' => $rawData['exp1']],
    ['path' => 'Experience.exp2', 'value' => $rawData['exp2']],
    ['path' => 'Experience.exp3', 'value' => $rawData['exp3']],
    ['path' => 'magic', 'value' => $rawData['magic']],
  ];


  $profileData = workTypes($profileData, $rawData, "stud");

  $studCollection->document($userId)->update($profileData);

  return redirect('/dashboard/' . $userId);

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
$router->post('/companySetup/{userId}', function (Request $request) use ($compCollection) {
  $rawData = $request->all();
  $userId = $request->input('uid');

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
    ['path' => 'Primary.prim1', 'value' => $rawData[$keys[6]]],
    ['path' => 'Primary.prim2', 'value' => $rawData[$keys[7]]],
    ['path' => 'Primary.prim3', 'value' => $rawData[$keys[8]]],
    ['path' => 'Secondary.sec1', 'value' => $rawData[$keys[10]]],
    ['path' => 'Secondary.sec2', 'value' => $rawData[$keys[11]]],
    ['path' => 'Secondary.sec3', 'value' => $rawData[$keys[12]]],
    ['path' => 'Secondary.sec4', 'value' => $rawData[$keys[13]]],
    ['path' => 'Secondary.sec5', 'value' => $rawData[$keys[14]]],
    ['path' => 'Apart.diff1', 'value' => $rawData[$keys[16]]],
    ['path' => 'Apart.diff2', 'value' => $rawData[$keys[17]]],
    ['path' => 'Apart.diff3', 'value' => $rawData[$keys[18]]],
    ['path' => 'Tech.tech1', 'value' => $rawData[$keys[20]]],
    ['path' => 'Tech.tech2', 'value' => $rawData[$keys[21]]],
    ['path' => 'Tech.tech3', 'value' => $rawData[$keys[22]]],
    ['path' => 'Tech.tech4', 'value' => $rawData[$keys[23]]],
    ['path' => 'Tech.tech5', 'value' => $rawData[$keys[24]]],
    ['path' => 'Soft.soft1', 'value' => $rawData[$keys[26]]],
    ['path' => 'Soft.soft2', 'value' => $rawData[$keys[27]]],
    ['path' => 'Soft.soft3', 'value' => $rawData[$keys[28]]],
    ['path' => 'Soft.soft4', 'value' => $rawData[$keys[29]]],
    ['path' => 'Soft.soft5', 'value' => $rawData[$keys[30]]],
    // work type ??
    ['path' => 'Info.info1', 'value' => $rawData['info1']],
    ['path' => 'Info.info2', 'value' => $rawData['info2']],
    ['path' => 'Info.info3', 'value' => $rawData['info3']],
  ];


  $profileData = workTypes($profileData, $rawData, "comp");

  $compCollection->document($userId)->update($profileData);

  return redirect('/dashboard/' . $userId);

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

// Dashboard
$router->get('/dashboard/{userId}', function(){
  return view('dashboard', [
    'test' => null,
  ]);
});



// Helper functions

function workTypes($profileData, $rawData, $user){

  $numFir;
  $numLas;

  if($user == "stud"){
    $numFir = 29;
    $numLas = 4;
  } else if($user == "comp") {
    $numFir = 30;
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

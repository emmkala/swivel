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
$router->get('/studentSetup', function(){
  return view('stud_setup', [
    'test' => null,
  ]);
});

// Company sign up
$router->get('/companyRegister', function(){
  return view('comp_reg', [
    'test' => null,
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
function to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Output: " . $output . "' );</script>";
}



 ?>

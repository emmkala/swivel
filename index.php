<?php
require 'vendor/autoload.php';

if(!getenv('GOOGLE_CLOUD_PROJECT')){
  throw new Exception('Missing Google Cloud Project environment variable');
}

Google\Cloud\ErrorReporting\Bootstrap::init();

$app = new Laravel\Lumen\Application(__DIR__);
$app->singleton(
  Illuminate\Contract\Debug\ExceptionHandler::class,
  App\Exceptions\Handler::class
);

$app->router->group([
  'namespace' => 'App\Http\Controllers',
], function ($router){
  require __DIR__.'/routes/web.php';
});

if(getenv('PHPUNIT_TESTS') === '1'){
  return $app;
}

$app->run();

?>

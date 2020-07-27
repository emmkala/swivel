<?php
namespace App\Exceptions;

use Exception;
use Laravel\Lumen\Exceptions\Handler as ExceptionHandler;
use Google\Cloud\ErrorReporting\Bootstrap;

class Handler extends ExceptionHandler{
  public function report(Exception $exception){
    // sending error to Stackdriver
    Bootstrap::exceptionHandler($exception);
    parent::report($exception);
  }
}



 ?>

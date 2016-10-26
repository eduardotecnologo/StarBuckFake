<?php

require 'include/Slim/Slim/Slim/Slim.php';

\Slim\Slim::registerAutoloader();


$app = new \Slim\Slim();


// GET route
$app->get(
    '/',
    function () {
        require_once ("View/index.php");
       }
    );
  
$app->run();

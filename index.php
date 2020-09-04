<?php

require 'Awesome/SubDir/Awesome.php';
require 'Best/SubDir/Best.php';
require 'Cool/SubDir/Cool.php';
require 'MainDir/App.php';

use MainDir\App;

$arr = array('Awesome\SubDir\Awesome', 'Best\SubDir\Best', 'Cool\SubDir\Cool');
$rand_key = array_rand($arr, 1);
$randomClass = $arr[$rand_key];
// echo $randomClass;
// var_dump(new $randomClass);
$randomClass = new $randomClass();

$app = new App();
echo $app->randomViewAction($randomClass);
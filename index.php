<?php

require 'Awesome/SubDir/Awesome.php';
require 'Best/SubDir/Best.php';
require 'Cool/SubDir/Cool.php';
require 'MainDir/App.php';
require 'Prefix/SubDir/Prefix.php';
require 'InterFace/InterFace.php';

use Prefix\Prefix;
use MainDir\App;

//set the date
$prefix = new Prefix();
$prefix->setDate(date('d/m/Y'));
// var_dump($prefix->getDate());
$dateStr = $prefix->getDate();

$arr = array('Awesome\SubDir\Awesome', 'Best\SubDir\Best', 'Cool\SubDir\Cool');
$rand_key = array_rand($arr, 1);
$randomClass = $arr[$rand_key];
// echo $randomClass;
// var_dump($randomClass);
$random = new $randomClass();

$app = new App();
echo $app->randomViewAction($dateStr, $random);
//echo $app->getDate();
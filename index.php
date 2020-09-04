<?php

require 'Awesome/SubDir/Awesome.php';
require 'Best/SubDir/Best.php';
require 'Cool/SubDir/Cool.php';

//use Awesome\SubDir\Awesome as AwesomeTask;
//use Best\SubDir\Best as BestTask;
//use Cool\SubDir\Cool as CoolTask;

//// Must use full use path for instantiating classes using strings
var_dump(class_exists('Cool\SubDir\Cool')); // true
var_dump(class_exists('CoolTask')); // false

// Instantiation using string (sometimes useful)
$string = 'Cool\SubDir\Cool';
var_dump(new $string()); // works!!!

// here make a logic that randomly chooses one of those classes
// array_rand() method

//$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
//$rand_keys = array_rand($input, 2);
//echo $input[$rand_keys[0]] . "\n";
//echo $input[$rand_keys[1]] . "\n";

// for example: $randomStr = 'Cool\SubDir\Cool';

$arr = array('Awesome\SubDir\Awesome', 'Best\SubDir\Best', 'Cool\SubDir\Cool');
$rand_key = array_rand($arr, 1);
$randomClass = $arr[$rand_key];
echo $randomClass;
var_dump($randomClass);












//// Tomina referenca
///
///  We need to include files that contain classes and namespace declaration
//require 'Inchoo/Catalog/Product.php';
//require 'Magento/Catalog/Product.php';
//
//// by using Use we read "namespace" declared in included/required files
//use \Inchoo\Catalog\Product as InchooProduct;
//use \Magento\Catalog\Product as MagentoProduct;
//
//// by defining namespace in Inchoo\Catalog\Product we cannot use new Product() anymore although it is used.
////$product = new Product(); // Fatal error:  Uncaught Error: Class 'Product' not found in ...
//
//// Full path
//$product = new \Inchoo\Catalog\Product();
//echo $product->getType();
//
//echo "<br/>";
//
//$product = new \Magento\Catalog\Product();
//echo $product->getType();
//
//echo "<br/>";
//echo "<br/>";
//echo "<br/>";
///*
// * use \Inchoo\Catalog\Product;
// * $product = new Product();
// * echo $product->getType();
// */
//
///*
// * use \Inchoo\Catalog\Product as InchooProduct;
// * use \Inchoo\Catalog\Product as MagentoProduct;
// */
//$product = new InchooProduct();
//echo $product->getType();
//
//echo "<br/>";
//
//$product = new MagentoProduct();
//echo $product->getType();
//
//// Namespaces can be used with abstract classes and interfaces the same way (when you need to implement them).


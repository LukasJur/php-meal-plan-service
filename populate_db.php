<?php
// require the Faker autoloader
require_once 'X:\php_mealplan\php-meal-plan-service\vendor\autoload.php';
// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

// generate data by accessing properties

// random gender
$gnd = $faker->randomElement($array = array ("male", "female") );
echo $gnd . " " ;

//random name 
if ($gnd == "male"){
	$frst = $faker->firstNameMale;
}else{
	$frst = $faker->firstNameFemale;
}
$contacts = $frst. " " . $faker->lastName;
echo $contacts . " ";

// random age
echo $faker->numberBetween($min = 15, $max = 100) . "\n" ;

// random height
echo $faker->numberBetween($min = 140, $max = 200) . "\n";

// random weight
echo $faker->numberBetween($min = 40, $max = 140) . "\n";

// random act_lvl
echo $faker->numberBetween($min = 1, $max = 3) . "\n";

// random goal
echo $faker->randomElement($array = array ("lose", "maintain", "gain") ) ;


 ?>
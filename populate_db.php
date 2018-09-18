<?php

// require the Faker autoloader
require_once 'X:\php_mealplan\php-meal-plan-service\vendor\autoload.php';
// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

try{
$pdo = new PDO("pgsql:" 
    . "host=ec2-54-225-241-25.compute-1.amazonaws.com;"
	. "port=5432;"
	. "user=qkgvshezxcspyo;"
	. "password=05aeb16c0337e86bcb5a8744bf76ce3d50292aae13a9458463493632a7de657d;"
	. "dbname=d93kd16emp4032"
);

//inserts 
$sql_insert = "INSERT INTO orders(contacts, gender, age, height, weight, act_lvl, goal) VALUES(?, ?, ?, ?, ?, ?, ?) ";

for($i = 0; $i<50; $i++){
	
	// generate data
		
	// random gender
	$gender = $faker->randomElement($array = array ("male", "female") );
	
	//random name 
	if ($gender == "male"){
		$frst = $faker->firstNameMale;
	}else{
		$frst = $faker->firstNameFemale;
	}
	$contacts = $frst. " " . $faker->lastName;

	// random age
	$age =  $faker->numberBetween($min = 15, $max = 100) . "\n" ;

	// random height
	$height = $faker->numberBetween($min = 140, $max = 200) . "\n";

	// random weight
	$weight =  $faker->numberBetween($min = 40, $max = 140) . "\n";

	// random act_lvl
	$act_lvl = $faker->numberBetween($min = 1, $max = 3) . "\n";

	// random goal
    $goal =  $faker->randomElement($array = array ("lose", "maintain", "gain") ) ;
	
	//execute prepared statement
	$stmt = $pdo->prepare($sql_insert);
	$stmt->execute( array($contacts, $gender, $age, $height, $weight, $act_lvl, $goal));
	
	if ($stmt->rowCount() < 1){
		echo "No rows were affected. ";
	}
	$arr = $stmt->errorInfo();
	print_r($arr);
	
	/*
	echo "Inserting these values: "
	. $contacts . " " 
	. $gender . " "
	. $age . " "
	. $height . " "
	. $weight . " "
	. $act_lvl . " "
	. $goal . "<br>";
	*/
}


}catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

?>
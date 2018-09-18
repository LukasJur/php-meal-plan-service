<?php 
// insert 
	global $sql_insert;
	$sql_insert = "INSERT INTO orders(contacts, gender, age, height, weight, act_lvl, goal) VALUES(?, ?, ?, ?, ?, ?, ?) ";
// select
	global $sql_select;
	$sql_select = "SELECT * FROM orders";
	
try{
		global $pdo;
		$pdo = new PDO("pgsql:" 
    . "host=ec2-54-225-241-25.compute-1.amazonaws.com;"
	. "port=5432;"
	. "user=qkgvshezxcspyo;"
	. "password=05aeb16c0337e86bcb5a8744bf76ce3d50292aae13a9458463493632a7de657d;"
	. "dbname=d93kd16emp4032"
);


	
}catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"></meta>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Paslaugos užsakymo puslapis</title>
</head>
<body>		
	<?php
	
	require('order.php'); 
	require('processing.php');
	require('database\dbcon.php');
	
	$contacts = $gender = $age = $height = $weight = $act_lvl = $goal =  "";
	$errMsg = "";
    $success = false;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		if(!empty($_POST["contacts"])
		&& !empty($_POST["age"])
		&& !empty($_POST["height"])
		&& !empty($_POST["weight"])){
			if (!preg_match("/^[a-zA-Z ]*$/", $_POST["contacts"])){
				$errMsg = "Kontaktų laukelyje naudokite tik raides ir tarpus"; 
			} else{
			$contacts= test_input($_POST["contacts"]);
			$gender = test_input($_POST["gender"]);
			$age = test_input($_POST["age"]);
			$height = test_input($_POST["height"]);
			$weight = test_input($_POST["height"]);
			$act_lvl = test_input($_POST["actlvl"]);
			$goal= test_input($_POST["goal"]);
			
			//execute prepared statement
			$stmt = $pdo->prepare($sql_insert);
			if( $stmt->execute( array($contacts, $gender, $age, $height, $weight, $act_lvl, $goal)) ){
				$success = true;
			}else{
				$arr = $stmt->errorInfo();
				print_r($arr);
			}
		
			}
		} else {
			$errMsg = "Ne visi laukai užpildyti";
		}
		
	}

	?>
	
<h1>Mitybos plano užsakymo puslapis</h1>
<p>Šiame puslapyje užpildę formą galite užsisakyti mitybos planą. Žemiau rasite laukelių paaiškinimus ir pačią formą.</p>
<p>Platesnė informacija apie laukelius:</p>
<p>Laukelyje 'kontaktai' įveskite savo vardą ir pavardę.</p>
<p>Fizinio aktyvumo lygiai:</p>
<ol>
  <li>Mažai fizinio aktyvumo, sėdimas darbas </li>
  <li>Vidutinis fizinis aktyvumas (sėdimas darbas + reguliarus sportas)</li>
  <li>Didelis fizinis aktyvumas (fizinis darbas ir/arba intensyvus sporto režimas)</li>
</ol>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Jūsų kontaktai:<br>
  <input type="text" name="contacts"><br>
  
  Jūsų lytis:<br>
  <select name="gender">
    <option value="male">Vyras</option>
    <option value="female">Moteris</option>
  </select><br>
  
  Jūsų amžius:<br>
  <input type="number" min="15" max="100" oninput="validity.valid||(value='');" name="age"><br>
   
  Jūsų ūgis (cm):<br>
  <input type="number" min="140" max="220" oninput="validity.valid||(value='');" name="height"><br>
   
  Jūsų svoris (kg):<br>
  <input type="number" min="30" max="140" oninput="validity.valid||(value='');" name="weight"><br>
  
  <div class="selects">
  Jūsų fizinio aktyvumo lygis:<br>
  <select name="actlvl">
    <option value="1">1</option>
    <option value="2">2</option>
	<option value="3">3</option>
  </select><br>
  </div>
  
  <div class= "selects"
  <p> Jūsų tikslas:</p>
	<select name="goal">
		<option value="lose">Numesti svorio</option>
		<option value="gain">Priaugti svorio</option>
		<option value="maintain">Palaikyti esamą svcrį</option>
	 </select><br>
  </div>
	<input type="submit" value="Siųsti">
 </form>
 <<p> <a href="https://phpmealplanservice.herokuapp.com/index.php"> Grįžti į pradžią</a></p>
 <?php if($success){ 
 echo "Forma sėkmingai užregistruota";
 $success = false;
 } ?>
</body>
</html>
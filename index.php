<!DOCTYPE html>
<html>
<?php include('order.php'); ?>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"></meta>
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Paslaugos užsakymo puslapis</title>
</head>
<body>

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

<form>
  Jūsų kontaktai:<br>
  <input type="text" name="contacts"><br>
  
  Jūsų lytis:<br>
  <select name="gender">
    <option value="male">Vyras</option>
    <option value="female">Moteris</option>
  </select><br>
   
  Jūsų ūgis (cm):<br>
  <input type="text" name="height"><br>
   
  Jūsų svoris (kg):<br>
  <input type="text" name="weight"><br>
  
  <div class="selects">
  Jūsų fizinio aktyvumo lygis:<br>
  <select name="actlvl">
    <option value="actlvl_1">1</option>
    <option value="actlvl_2">2</option>
	<option value="actlvl_3">3</option>
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

</body>
</html>
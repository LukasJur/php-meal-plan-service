<!DOCTYPE html>
<html>
    <head>
        <title>Užsakymų sąrašas</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"></meta>
		<link rel="stylesheet" type="text/css" href="css/style.css">

    </head>
    <body>
        <table>
            <tr>
                <th>Kontaktai</th>
                <th>Lytis</th>
                <th>Amžius</th>
                <th>Ūgis</th>
				<th>Svoris</th>
				<th>Fiz.aktyvumo lygis</th>
				<th>Tikslas</th>
            </tr>
			<?php
			require ('database\dbcon.php');
			$stmt = $pdo->query('SELECT * FROM orders');
			$gender = "";
			$goal = ""; 
			while ($row = $stmt->fetch()):; ?>
			<tr>
				<td><?php echo $row['contacts'];?></td>
                <td><?php echo ($row['gender'] == "male" ? "vyras" : "moteris" ) ?></td>
                <td><?php echo $row['age'];?></td>
                <td><?php echo $row['height'];?></td>
				<td><?php echo $row['weight'];?></td>
				<td><?php echo $row['act_lvl'];?></td>
				<td><?php echo ($row['goal'] == "lose" ? "mesti svorį" : ($row['goal'] == "maintain" ? "palaikyti svorį" : "priaugti svorio"  )); ?></td>
			</tr>
            <?php endwhile;?>

        </table>

        <br><br>

    </body>

</html>
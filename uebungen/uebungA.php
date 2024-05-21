<!doctype html>
<html lang="de">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Übung</title>
</head>

<body>
	<form action="uebungA.php">
		<h2>Uebung A1: Zahlen vergleichen</h2>
		<label for="zahl1">Zahl 1
			<input type="text" name="zahl1" placeholder="Zahl 1">
		</label>
		<label for="zahl2">Zahl 2
			<input type="text" name="zahl2" placeholder="Zahl 2">
		</label>
		<input type="submit" value="Start">
		<?php

	

		if (isset($_GET['zahl1']) && isset($_GET['zahl2'])) {
			$zahl1 = $_GET['zahl1'];
			$zahl2 = $_GET['zahl2'];
		};



		if (isset($zahl1) && isset($zahl2)) {
			/* --------------------------------------------
		Übung Zahlen vergleichen startet hier:
		-------------------------------------------- */
			if ($zahl1 > $zahl2) {
				echo "<br>{$zahl1} ist Größer als {$zahl2}";
			} else if ($zahl1 < $zahl2) {
				echo "<br>{$zahl2} ist größer als {$zahl1}";
			} else {
				echo "<br>Beide Zahlen sind gleich groß";
			};


			/* --------------------------------------------
			Übung Zahlen vergleichen endet hier:
		----------------------------------------------- */
		}
		?>
		<h2>Übung A2 Geld Automat</h2>
		<label for="betrag">Betrag
			<input type="text" name="betrag" placeholder="Betrag">
		</label>
		<input type="submit" value="Start">
		<?php
		if (isset($_GET['betrag'])) {
			$betrag = $_GET['betrag'];
		}
		if (isset($betrag)) {
			/* --------------------------------------------
			Übung Geld Automat startet hier:
		-------------------------------------------- */

			if ((int)$betrag === 0) {
				echo "<br>Error. Sie haben kein geld eingeworfen";
			}  else if ($betrag > 10 && $betrag < 20) {
				echo "<br>Das Geld reicht für eine Wundertüte";
			} else if ($betrag > 20) {
				echo "<br>Sie erhalten ein teures Produkt";
			};
			/* --------------------------------------------
			Übung Geld Automat endet hier:
	    ----------------------------------------------- */
		}
		?>
		<h2>Übung A3: Ort überprüfen</h2>
		<label for="betrag2">Ort:
			<input type="text" name="ort" placeholder="Ort">
		</label>
		<input type="submit" value="Start">
		<?php
		if (isset($_GET['ort'])) {
			$ort = $_GET['ort'];
		}
		if (isset($ort)) {
			/* --------------------------------------------
				Übung Ort überprüfen startet hier:
		-------------------------------------------- */
			$welcherOrt = match ($ort) {
			'Graz' || 'Wien' => 'Sie leben im Osten von Österreich',
			'Innsbruck' || 'Bregenz' => 'Sie leben im Westen von Österreich',
			'Salzburg' => 'Sie haben DE als Nachbar',
			};

			echo $welcherOrt;

			/* --------------------------------------------
				Übung Ort überprüfen endet hier:
		----------------------------------------------- */
		}
		?>
		<h2>Übung A4: Berechne zwei Zahlen</h2>
		<label for="a">Zahl 1
			<input type="text" name="a" placeholder="Zahl 1">
		</label>
		<label for="b">Zahl 2
			<input type="text" name="b" placeholder="Zahl 2">
		</label>
		<label for="op">Operator
			<select name="op">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
			</select>
		</label>
		<input type="submit" value="Berechnen">
		<?php
		if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['op'])) {
			$a  = $_GET['a'];
			$b  = $_GET['b'];
			$op = $_GET['op'];
		}
		if (isset($a) && isset($b) && isset($op)) {
			/* --------------------------------------------
			Übung Berechne zwei Zahlen startet hier:
		-------------------------------------------- */

			// Hier steht Ihr Code (Übung A4)

			/* --------------------------------------------
			Übung Berechne zwei Zahlen endet hier:
		----------------------------------------------- */
		}
		?>
	</form>
</body>

</html>
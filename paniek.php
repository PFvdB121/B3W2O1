<?php
	$array = [];
	$errorArray = [];
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		foreach ($_POST as $name => $x) {
			if ($name == "submit") {
				continue;
			}
			if (!empty($x)) {
				$array[$name] = testInput($x);
			}
			else{
				$errorArray[$name] = "vul hier wat in";
			}
			if (count($array) == 7) {
				$submit = true;
			}
		}
	}
	else{
		$submit = false;
	}
	function testInput($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>

<!DOCTYPE html>
<html lang="nl">
	<head>
		<title>paniek</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="container">
			<header>
				<h1>mad Libs</h1>
			</header>
			<nav>
				<ul>
					<li><a href="http://localhost/blok3/week2/B3W2O1/paniek.php">Er heerst paniek...</a></li>
					<li><a href="http://localhost/blok3/week2/B3W2O1/onkunde.php">Onkunde</a></li>
				</ul>
			</nav>
			<div class="white">
				<h2>Er heerst paniek...</h2>
				<?php
					if ($submit == false) {
				?>
				<form method="post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>'>
					<ul>
						<li>
							<div>
								<span>Welk dier zou je nooit als huisdier willen hebben?</span>
								<span class="moet"><?php echo $errorArray["huisdier"]; ?></span>
							</div>
							<input type="text" name="huisdier" value='<?php echo $array["huisdier"]; ?>'>
						</li>
						<li>
							<div>
								<span>Wie is de belangrijkste persoon in je leven?</span>
								<span class="moet"><?php echo $errorArray["persoon"]; ?></span>
							</div>
							<input type="text" name="persoon" value='<?php echo $array["persoon"]; ?>'>
						</li>
						<li>
							<div>
								<span>In welk land zou je graag willen wonen?</span>
								<span class="text"><?php echo $errorArray["land"]; ?></span>
							</div>
							<input type="text" name="land" value='<?php echo $array["land"]; ?>'>
						</li>
						<li>
							<div>
								<span>Wat doe je als je je verveelt?</span>
								<span class="moet"><?php echo $errorArray["verveelt"]; ?></span>
							</div>
							<input type="text" name="verveelt" value='<?php echo $array["verveelt"]; ?>'>
						</li>
						<li>
							<div>
								<span>Met welk speelgoed speelde je als kind het meest?</span>
								<span class="moet"><?php echo $errorArray["speelgoed"]; ?></span>
							</div>
							<input type="text" name="speelgoed" value='<?php echo $array["speelgoed"]; ?>'>
						</li>
						<li>
							<div>
								<span>Bij welk docent spijbel je het liefst?</span>
								<span class="moet"><?php echo $errorArray["docent"]; ?></span>
							</div>
							<input type="text" name="docent" value='<?php echo $array["docent"]; ?>'>
						</li>
						<li>
							<div>
								<span>Als je €100.000,- had, wat zou je dan kopen?</span>
								<span class="moet"><?php echo $errorArray["kopen"]; ?></span>
							</div>
							<input type="text" name="kopen" value='<?php echo $array["kopen"];?>'>
						</li>
						<li>
							<div>
								<span>Wat is je favoriete bezigheid?</span>
								<span class="moet"><?php echo $errorArray["bezigheid"]; ?></span>
							</div>
							<input type="text" name="bezigheid" value='<?php echo $array["bezigheid"]; ?>'>
						</li>
						<li>
							<input type="submit" name="submit" class="submit" value="versturen">
						</li>
					</ul>
				</form>
				<?php
					}
					else{
				?>
				<section class="text">
					<p>Er heerst paniek in het koninkrijk <?php echo $array["land"]; ?>. Koning <?php echo $array["docent"]?> is ten einde raad en als koning <?php echo $array["docent"]?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $array["persoon"]?>.</p>
					<p>"<?php echo $array["persoon"] ?>, het is een ramp! Het is een schande!"</p>
					<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
					<p>"Mijn <?php echo $array["huisdier"]?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $array["speelgoed"]?> voor hem gekocht!"</p>
					<p>"Majesteit, uw <?php $array["huisdier"]?> komt vast vanzelf weer terug?"</p>
					<p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $array["bezigheid"]; ?> leren?"</p>
					<p>"Maar sire, daar kunt u toch uw <?php echo $array["kopen"]; ?> voor gebruiken."</p>
					<p>"<?php echo $array["persoon"]?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
					<p>"<?php echo $array["verveelt"]?>, Sire."</p>
				</section>
				<?php
					}
				?>
			</div>
			<footer>&copy; Patrique Fernando van den Boom - 2021</footer>
		</div>
	</body>
</html>
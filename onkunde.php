<?php
	$array = [];
	$errorArray = [];
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$number = 0;
		$notEmpty = 0;
		foreach ($_POST as $name => $x) {
			if (!empty($_POST[$name])) {
				array_push($array, testInput($x));
				$notEmpty++;
			}
			else{
				$errorArray[$number] = "vul hier wat in";
			}
			if ($notEmpty == count($_POST)) {
				$submit = true;
			}
			$number++;
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
		<title>onkunde</title>
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
					<li><a href="paniek.php">Er heerst paniek...</a></li>
					<li><a href="http://localhost/blok3/week2/B3W2O1/onkunde.php">Onkunde</a></li>
				</ul>
			</nav>
			<div class="white">
				<h2>Onkunde</h2>
				<?php
					if ($submit == false) {
				?>
				<form action="<?php echo htmlspecialchars($_SELF["PHP_SELF"])?>" method="post">
					<ul>
						<li>
							<div>
								<span>Wat zou je graag willen kunnen?</span>
								<span class="moet"><?php echo $errorArray[0]; ?></span>
							</div>
							<input type="text" name="kan" value="<?php echo $array[0]; ?>">
						</li>
						<li>
							<div>
								<span>Met welke persoon kun je goed opschieten?</span>
								<span class="moet"><?php echo $errorArray[1]; ?></span>
							</div>
							<input type="text" name="persoon" value="<?php echo $array[1]; ?>">
						</li>
						<li>
							<div>
								<span>Wat is je favorite getal?</span>
								<span class="moet"><?php echo $errorArray[2]; ?></span>
							</div>
							<input type="text" name="getal" value="<?php echo $array[2]; ?>">
						</li>
						<li>
							<div>
								<span>Wat heb je altijd bij je als je op vakantie gaat?</span>
								<span class="moet"><?php echo $errorArray[3]; ?></span>
							</div>
							<input type="text" name="vakantie" value="<?php echo $array[3]; ?>">
						</li>
						<li>
							<div>
								<span>Wat is je beste persoonlijke eigenschap?</span>
								<span class="moet"><?php echo $errorArray[4]; ?></span>
							</div>
							<input type="text" name="beste" value="<?php echo $array[4]; ?>">
						</li>
						<li>
							<div>
								<span>Wat is je slechste persoonlijke eigenschap?</span>
								<span class="moet"><?php echo $errorArray[5]; ?></span>
							</div>
							<input type="text" name="slechste" value='<?php echo $array[5]; ?>'>
						</li>
						<li>
							<div>
								<span>Wat is het ergste dat je kan overkomen?</span>
								<span class="moet"><?php echo $errorArray[6];?></span>
							</div>
							<input type="text" name="ergste" value="<?php echo $array[6]; ?>">
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
				<p class="text">
					Er zijn veel mensen die niet kunnen <?php echo $array[0]; ?>. Neem nou <?php echo $array[1]; ?> Zelfs met de hulp van een <?php echo $array[3]?> of zelf <?php echo $array[2]; ?> kan <?php echo $array[1]; ?> niet <?php echo $array[0]; ?>. Dat heeft niets te maken met een gebrek aan <?php echo $array[4]?>, maar een te veel aan <?php echo $array[5]; ?>. Te veel <?php echo $array[5]; ?> leidt tot <?php echo $array[6]; ?> en dat is niet goed als je wilt <?php echo $array[0]; ?>. Helaas voor <?php echo $array[1]; ?>.
				</p>
				<?php
					}
				?>
			</div>
			<footer>&copy; Patrique Fernando van den Boom - 2021</footer>
		</div>
	</body>
</html>
<?php
	$array = [];
	$errorArray = [];
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$notEmpty = 0;
		foreach ($_POST as $name => $x) {
			if ($name != "submit") {
				if (!empty($x)) {
					$array[$name] = testInput($x);
					$notEmpty++;
				}
				else{
					$errorArray[$name] = "vul hier wat in";
				}			
			}
			if ($notEmpty == 7) {
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
					<li><a href="http://localhost/blok3/week2/B3W2O1/paniek.php">Er heerst paniek...</a></li>
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
								<span class="moet"><?php echo $errorArray["kan"]; ?></span>
							</div>
							<input type="text" name="kan" value='<?php echo $array["kan"]; ?>'>
						</li>
						<li>
							<div>
								<span>Met welke persoon kun je goed opschieten?</span>
								<span class="moet"><?php echo $errorArray["persoon"]; ?></span>
							</div>
							<input type="text" name="persoon" value='<?php echo $array["persoon"]; ?>'>
						</li>
						<li>
							<div>
								<span>Wat is je favorite getal?</span>
								<span class="moet"><?php echo $errorArray["getal"]; ?></span>
							</div>
							<input type="text" name="getal" value='<?php echo $array["getal"]; ?>'>
						</li>
						<li>
							<div>
								<span>Wat heb je altijd bij je als je op vakantie gaat?</span>
								<span class="moet"><?php echo $errorArray["vakantie"]; ?></span>
							</div>
							<input type="text" name="vakantie" value='<?php echo $array["vakantie"]; ?>'>
						</li>
						<li>
							<div>
								<span>Wat is je beste persoonlijke eigenschap?</span>
								<span class="moet"><?php echo $errorArray["beste"]; ?></span>
							</div>
							<input type="text" name="beste" value='<?php echo $array["beste"]; ?>'>
						</li>
						<li>
							<div>
								<span>Wat is je slechste persoonlijke eigenschap?</span>
								<span class="moet"><?php echo $errorArray["slechste"]; ?></span>
							</div>
							<input type="text" name="slechste" value='<?php echo $array["slechste"]; ?>'>
						</li>
						<li>
							<div>
								<span>Wat is het ergste dat je kan overkomen?</span>
								<span class="moet"><?php echo $errorArray["ergste"];?></span>
							</div>
							<input type="text" name="ergste" value='<?php echo $array["ergste"]; ?>'>
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
					<p>
						Er zijn veel mensen die niet kunnen <?php echo $array["kan"]; ?>. Neem nou <?php echo $array["persoon"]; ?>. Zelfs met de hulp van een <?php echo $array["vakantie"]?> of zelf <?php echo $array["getal"]; ?> kan <?php echo $array["persoon"]; ?> niet <?php echo $array["kan"]; ?>. Dat heeft niets te maken met een gebrek aan <?php echo $array["beste"]?>, maar een te veel aan <?php echo $array["slechste"]; ?>. Te veel <?php echo $array["slechste"]; ?> leidt tot <?php echo $array["ergste"]; ?> en dat is niet goed als je wilt <?php echo $array["kan"]; ?>. Helaas voor <?php echo $array["persoon"]; ?>.
					</p>
				</section>
				<?php
					}
				?>
			</div>
			<footer>&copy; Patrique Fernando van den Boom - 2021</footer>
		</div>
	</body>
</html>
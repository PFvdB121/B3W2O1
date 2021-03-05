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
					<li><a href=""></a>Er heerst paniek...</li>
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
								<span class="moet"><?php echo $errorArray[0]; ?></span>
							</div>
							<input type="text" name="huisdier" value='<?php echo $array[0] ?>'>
						</li>
						<li>
							<div>
								<span>Wie is de belangrijkste persoon in je leven?</span>
								<span class="moet"><?php echo $errorArray[1]; ?></span>
							</div>
							<input type="text" name="persoon" value="<?php echo $array[1] ?>">
						</li>
						<li>
							<div>
								<span>In welk land zou je graag willen wonen?</span>
								<span class="text"><?php echo $errorArray[2]; ?></span>
							</div>
							<input type="text" name="land" value="<?php echo $array[2] ?>">
						</li>
						<li>
							<div>
								<span>Wat doe je als je je verveelt?</span>
								<span class="moet"><?php echo $errorArray[3]; ?></span>
							</div>
							<input type="text" name="verveelt" value="<?php echo $array[3] ?>">
						</li>
						<li>
							<div>
								<span>Met welk speelgoed speelde je als kind het meest?</span>
								<span class="moet"><?php echo $errorArray[4]; ?></span>
							</div>
							<input type="text" name="speelgoed" value="<?php echo $array[4] ?>">
						</li>
						<li>
							<div>
								<span>Bij welk docent spijbel je het liefst?</span>
								<span class="moet"><?php echo $errorArray[5]; ?></span>
							</div>
							<input type="text" name="docent" value="<?php echo $array[5]?>">
						</li>
						<li>
							<div>
								<span></span>
								<span class="moet"></span>
							</div>
							<input type="text" name="">
						</li>
						<li>
							<div>
								<span></span>
								<span class="moet"></span>
							</div>
							<input type="text" name="">
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
					
				</p>
				<?php
					}
				?>
			</div>
			<footer>&copy; Patrique Fernando van den Boom - 2021</footer>
		</div>
	</body>
</html>
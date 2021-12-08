<?php
session_start();
if (array_key_exists('goto', $_GET)) {
	$_SESSION['stav'] = $_GET['goto'];
	header('Location: game.php');
}
?>

<html>
<head>
<title>
Fantom ulice
</title>
<link rel="icon" href="ff-icon.png">
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="text">
Pokrytí hry: 2,6&nbsp%
</div>
<div class="link">
<a href="game.php">Pokračovat</a>
</div>
<div class="link">
<a href="game.php?new-game">Nová hra</a>
</div>
</body>
</html>
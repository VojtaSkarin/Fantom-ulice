<html>
<head>
<title>
Fantom ulice
</title>
<link rel="icon" href="ff-icon.png">
<link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
session_start();

include 'content/map.php';

if (empty($_SESSION['stav'])) {
	$_SESSION['stav'] = 'new-game';
}

if (array_key_exists('action', $_GET)) {
	$action = $_GET['action'];
	
	if ($action == 'new-game') {
		$_SESSION['stav'] = $action;
	} else if ($action == 'med-kit') {
		if ($_SESSION['medkit'] > 0 &&
			$_SESSION['stamina_ted'] < $_SESSION['stamina_max']) {
				$_SESSION['medkit']--;
				$_SESSION['stamina_ted'] = min($_SESSION['stamina_ted'] + 4, $_SESSION['stamina_max']);
		}
	} else {
		$stav = $mapa[$_SESSION['stav']];
		$offset = intval($action) - 1;
		
		if ($_SESSION['stav'] == 'fortune-post' && $offset == 0) {
			$_SESSION['stav'] = $_SESSION['dalsi-stav'];
		} else if (array_key_exists($offset, $stav)) {
			if (! array_key_exists($_SESSION['stav'], $podminky) ||
				! array_key_exists($offset, $podminky[$_SESSION['stav']]) ||
				$podminky[$_SESSION['stav']][$offset]()) {
					$_SESSION['minuly-stav'] = $_SESSION['stav'];
					$_SESSION['stav'] = $stav[$offset];
			}
		}
	}
	
	header('Location: game.php');
} else {
	include 'content/' . $_SESSION['stav'] . '.php';
}
?>

</body>
</html>
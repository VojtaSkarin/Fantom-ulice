<html>
<head>
<title>
Fantom ulice
</title>

<?php
include 'header-table.php';

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
	
	} else if ($action == 'fortune') {
		if (in_array($_SESSION['stav'], $zkouseni_stesti)) {
			$hod = rand(1,6) + rand(1,6);		
			$_SESSION['vysledek'] = $hod <= $_SESSION['stesti_ted'];		
			$_SESSION['stesti_ted'] = max($_SESSION['stesti_ted'] - 1, 0);
			
			$_SESSION['dalsi-stav'] = $mapa[$_SESSION['stav'] . '-stesti'][1 - (int)$_SESSION['vysledek']];
			$_SESSION['stav'] = 'fortune';
		}
	
	} else if ($action == 'fight-skill') {
		if (in_array($_SESSION['stav'], $zkouseni_umeni_boje)) {
			$hod = rand(1,6) + rand(1,6);
			$_SESSION['vysledek'] = $hod <= $_SESSION['umeni_boje_ted'];
			
			$_SESSION['dalsi-stav'] = $mapa[$_SESSION['stav'] . '-um-boje'][1 - (int) $_SESSION['vysledek']];
			$_SESSION['stav'] = 'fight-skill';
		}
	
	} else if ($action == 'showdown') {
		if (in_array($_SESSION['stav'], $kdo_z_koho)) {
			$_SESSION['vysledek'] = $_SESSION['umeni_boje_ja'] >= $_SESSION['umeni_boje_protivnik'];
			
			$_SESSION['dalsi-stav'] = $mapa[$_SESSION['stav'] . '-kdo-z-koho'][1 - (int) $_SESSION['vysledek']];
			$_SESSION['stav'] = 'showdown';
		}
		
	} else {
		$stav = $mapa[$_SESSION['stav']];
		$offset = intval($action) - 1;
		
		$akce = ['fortune', 'fight-skill', 'showdown'];
		
		if (in_array($_SESSION['stav'], $akce) && $offset == 0) {
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

include 'feedback.php';
?>
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
		
	} else if ($_SESSION['smrt']) {
		// nedělej nic
		
	} else if ($action == 'med-kit') {
		if (! in_array($_SESSION['stav'], $boj) &&
			$_SESSION['medkit'] > 0 &&
			$_SESSION['stamina_ted'] < $_SESSION['stamina_max'] &&
			$_SESSION['stav'] != 'fight' && $_SESSION['stav'] != 'round-result') {
				$_SESSION['medkit']--;
				$_SESSION['stamina_ted'] = min($_SESSION['stamina_ted'] + 4, $_SESSION['stamina_max']);
		}
	
	} else if ($action == 'fortune') {
		if (in_array($_SESSION['stav'], $zkouseni_stesti)) {
			$hod = rand(1, 6) + rand(1, 6);		
			$_SESSION['vysledek'] = $hod <= $_SESSION['stesti_ted'];		
			$_SESSION['stesti_ted'] = max($_SESSION['stesti_ted'] - 1, 0);
			
			$_SESSION['dalsi-stav'] = $mapa[$_SESSION['stav'] . '-stesti'][1 - (int)$_SESSION['vysledek']];
			$_SESSION['stav'] = 'fortune';
		}
	
	} else if ($action == 'fight-skill') {
		if (in_array($_SESSION['stav'], $zkouseni_umeni_boje)) {
			$hod = rand(1, 6) + rand(1, 6);
			$_SESSION['vysledek'] = $hod <= $_SESSION['umeni_boje_ted'];
			
			$_SESSION['dalsi-stav'] = $mapa[$_SESSION['stav'] . '-um-boje'][1 - (int) $_SESSION['vysledek']];
			$_SESSION['stav'] = 'fight-skill';
		}
	
	} else if ($action == 'showdown') {
		if (in_array($_SESSION['stav'], $kdo_z_koho)) {
			$_SESSION['vysledek'] = $_SESSION['utocne_cislo_ja'] >= $_SESSION['utocne_cislo_protivnik'];
			
			$_SESSION['dalsi-stav'] = $mapa[$_SESSION['stav'] . '-kdo-z-koho'][1 - (int) $_SESSION['vysledek']];
			$_SESSION['stav'] = 'showdown';
		}
		
	} else if ($action == 'condition') {
		if (in_array($_SESSION['stav'], $zkouseni_podminky)) {
			$_SESSION['stav'] = $mapa[$_SESSION['stav'] . '-podminka'][1 - (int) $_SESSION['podminka']];
		}
	
	} else if ($_SESSION['stav'] == 'fight') {
		if ($_SESSION['stamina_ted'] > 0 && $_SESSION['pancir_ted'] > 0) {
			$cil = intval($_GET['action']) - 1;
			
			$prezivsi = count(array_filter(array_map(function ($v) { return $v['vydrz_ted']; }, $_SESSION['nepritel']), function ($v) { return $v > 0; }));
			
			if ($prezivsi <= 0) {
				if ($cil == 0) {
					$_SESSION['stav'] = $mapa[$_SESSION['minuly-stav'] . '-boj'][$cil];
					
					if ($_SESSION['pocet_zasahu'] > 1 &&
						$_SESSION['typ_souboje'] != Souboj::Vozidla)
					{
						$_SESSION['umeni_boje_ted'] = max($_SESSION['umeni_boje_ted'] - 1, 0);
					}
				}
				
			} else {		
				if (array_key_exists($cil, $_SESSION['nepritel']) &&
					$_SESSION['nepritel'][$cil]['vydrz_ted'] > 0) {
						
					for ($i = 0; $i < count($_SESSION['nepritel']); $i++) {
						$nepritel = &$_SESSION['nepritel'][$i];
						
						if ($nepritel['vydrz_ted'] <= 0) {
							$nepritel['poskozeni'] = 0;
							continue;
						}
						
						$utocne_cislo_protivnik = rand(1, 6) + rand(1, 6) + $nepritel['utocna_sila'];
						$utocne_cislo_ja = rand(1, 6) + rand(1, 6) + $_SESSION['utocna_sila_ja_zmena'];
						
						if ($_SESSION['typ_souboje'] == Souboj::Vozidla) {
							$utocne_cislo_ja += $_SESSION['palebna_sila_ted'];
						} else {
							$utocne_cislo_ja += $_SESSION['umeni_boje_ted'];
						}
						
						if ($_SESSION['typ_souboje'] == Souboj::Tvari_v_tvar) {
							$poskozeni = 1;
						} else {
							$poskozeni = rand(1, 6);
						}
						
						if ($utocne_cislo_ja > $utocne_cislo_protivnik) {
							if ($i == $cil) {
								$nepritel['vydrz_ted'] = max($nepritel['vydrz_ted'] - $poskozeni, 0);
								$nepritel['poskozeni'] = $poskozeni;
							} else {
								$nepritel['poskozeni'] = 0;
								$nepritel['byl_cil'] = false;
							}
							
						} else if ($utocne_cislo_ja < $utocne_cislo_protivnik) {
							if ($_SESSION['typ_souboje'] == Souboj::Vozidla) {
								$_SESSION['pancir_ted'] = max($_SESSION['pancir_ted'] - $poskozeni, 0);
							} else {
								$_SESSION['stamina_ted'] = max($_SESSION['stamina_ted'] - $poskozeni, 0);
							}
							
							$_SESSION['pocet_zasahu'] += 1;
							$nepritel['poskozeni'] = -$poskozeni;
							
						} else {
							$nepritel['poskozeni'] = 0;
							$nepritel['byl_cil'] = $i == $cil;
						}
					}
					
					$_SESSION['stav'] = 'round-result';
				}
			}
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
					if ($_SESSION['stav'] != 'fight' &&
						$_SESSION['stav'] != 'round-result')
					{
						$_SESSION['minuly-stav'] = $_SESSION['stav'];
					}
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
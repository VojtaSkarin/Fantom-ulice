<?php
function ja_ziju() {
	return ($_SESSION['typ_souboje'] != Souboj::Tvari_v_tvar && $_SESSION['stamina_ted'] > 0 && $_SESSION['pancir_ted'] > 0) || ($_SESSION['typ_souboje'] == Souboj::Tvari_v_tvar && $_SESSION['stamina_ted'] > $_SESSION['stamina_zacatek_souboje'] - 6);
}

function jeden_nepritel_zije($nepritel) {
	if ($_SESSION['typ_souboje'] == Souboj::Tvari_v_tvar) {
		$zije = function ($n) { return $n['vydrz_ted'] > $n['vydrz_max'] - 6; };
	} else {
		$zije = function ($n) { return $n['vydrz_ted'] > 0; };
	}
	
	return $zije($nepritel);
}

function libovolny_nepritel_zije() {
	if ($_SESSION['typ_souboje'] == Souboj::Srazky && $_SESSION['kolo'] == 5) {
		return false;
	}
	
	foreach ($_SESSION['nepritel'] as $nepritel) {
		if (jeden_nepritel_zije($nepritel)) {
			return true;
		}
	}
	
	return false;
}
?>
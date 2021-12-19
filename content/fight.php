<?php
echo "<div class=\"title-main\">\n";
echo $_SESSION['kolo'] . ". kolo\n";
echo "</div>\n";

include 'enemy-table.php';

if (ja_ziju()) {
	if (libovolny_nepritel_zije()) {
		echo "<div class=\"text\">\n";
		echo "Na koho chceš zaútočit?\n";
		echo "</div>\n";
		
		for ($i = 0; $i < count($_SESSION['nepritel']); $i++) {
			$nepritel = $_SESSION['nepritel'][$i];
			
			if (! jeden_nepritel_zije($nepritel)) {
				continue;
			}
			
			echo "<div class=\"link\">\n";
			echo "<a href=\"game.php?action=" . ($i + 1) . "\">" . $nepritel['jmeno'][0] . "</a>\n";
			echo "</div>\n";
		}
		
	} else {
		if ($_SESSION['typ_souboje'] == Souboj::Tvari_v_tvar ||
			$_SESSION['typ_souboje'] == Souboj::Srazky) {
			echo "<div class=\"text\">\n";
			echo "Porazil jsi všechny nepřátele.\n";
			echo "</div>\n";
		} else {
			echo "<div class=\"text\">\n";
			echo "Zabil jsi všechny nepřátele.\n";
			echo "</div>\n";
		}
		
		echo "<div class=\"link\">\n";
		echo "<a href=\"game.php?action=1\">Pokračovat</a>\n";
		echo "</div>\n";
	}
} else {
	if ($_SESSION['typ_souboje'] == Souboj::Tvari_v_tvar) {
		echo "<div class=\"text\">\n";
		echo "Byl jsi omráčen.\n";
		echo "</div>\n";
		
		echo "<div class=\"link\">\n";
		echo "<a href=\"game.php?action=1\">Pokračovat</a>\n";
		echo "</div>\n";
		
	} else {
		echo "<div class=\"text\">\n";
		echo "Byl jsi zabit.\n";
		echo "</div>\n";
	
		include 'death-link.php';
	}
}

include 'post.php';
?>
<?php
include 'enemy-table.php';

if ($_SESSION['stamina_ted'] > 0 && $_SESSION['pancir_ted'] > 0) {
	$prezivsi = count(array_filter(array_map(function ($v) { return $v['vydrz_ted']; }, $_SESSION['nepritel']), function ($v) { return $v > 0; }));

	if ($prezivsi) {
		echo "<div class=\"text\">\n";
		echo "Na koho chceš zaútočit?\n";
		echo "</div>\n";
		
		for ($i = 0; $i < count($_SESSION['nepritel']); $i++) {
			$nepritel = $_SESSION['nepritel'][$i];
			
			if ($nepritel['vydrz_ted'] <= 0) {
				continue;
			}
			
			echo "<div class=\"link\">\n";
			echo "<a href=\"game.php?action=" . ($i + 1) . "\">" . $nepritel['jmeno'][0] . "</a>\n";
			echo "</div>\n";
		}
	} else {
		echo "<div class=\"text\">\n";
		echo "Zabil jsi všechny nepřátele.\n";
		echo "</div>\n";
		
		echo "<div class=\"link\">\n";
		echo "<a href=\"game.php?action=1\">Pokračovat</a>\n";
		echo "</div>\n";
	}
} else {
	echo "<div class=\"text\">\n";
	echo "Byl jsi zabit.\n";
	echo "</div>\n";
	
	include 'death-link.php';
}

include 'post.php';
?>
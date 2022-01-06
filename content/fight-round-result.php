<?php
$zajmeno = [
	true => 'mu',
	false => 'jí',
];

$podst_jmeno = [
	true => '',
	false => 'a',
];

function pocet_bodu($body) {
	if ($body == 1) {
		return 'bod';
	} else if ($body > 1 && $body < 5) {
		return 'body';
	}
	return 'bodů';
}

for ($i = 0; $i < count($_SESSION['nepritel']); $i++) {
	$nepritel = $_SESSION['nepritel'][$i];
	
	if ((! jeden_nepritel_zije($nepritel) &&
		 $nepritel['poskozeni'] == 0) ||
		($_SESSION['utok'] == Utok::Stridave &&
		 $_SESSION['cil'] != $i)) {
		continue;
	}
	
	echo "<div class=\"text\">\n";
	
	if ($nepritel['poskozeni'] > 0) {
		if (in_array($_SESSION['typ_souboje'], $souboje_vozidel)) {
			echo 'Zasáhl jsi ' . $nepritel['jmeno'][1] . ' a ubral ' . $zajmeno[$nepritel['rod']] . ' ' . $nepritel['poskozeni'] . ' ' . pocet_bodu($nepritel['poskozeni']) . ' pancíře.';
		} else {
			echo 'Zasáhl jsi ' . $nepritel['jmeno'][1] . ' a ubral ' . $zajmeno[$nepritel['rod']] . ' ' . $nepritel['poskozeni'] . ' ' . pocet_bodu($nepritel['poskozeni']) . ' staminy.';
		}
	} else if ($nepritel['poskozeni'] < 0) {
		if (in_array($_SESSION['typ_souboje'], $souboje_vozidel)) {
			echo $nepritel['jmeno'][0] . ' tě zasáhl' . $podst_jmeno[$nepritel['rod']] . ' a ubral' . $podst_jmeno[$nepritel['rod']] . ' ti ' . -$nepritel['poskozeni'] . ' ' . pocet_bodu(-$nepritel['poskozeni']) . ' pancíře.';
		} else {
			echo $nepritel['jmeno'][0] . ' tě zasáhl' . $podst_jmeno[$nepritel['rod']] . ' a ubral' . $podst_jmeno[$nepritel['rod']] . ' ti ' . -$nepritel['poskozeni'] . ' ' . pocet_bodu(-$nepritel['poskozeni']) . ' staminy.';
		}
		
	} else {
		if ($nepritel['byl_cil']) {
			echo 'S ' . $nepritel['jmeno'][2] . ' jste se navzájem minuli.';
		} else {
			echo $nepritel['jmeno'][0] . ' tě minul' . $podst_jmeno[$nepritel['rod']] . '.';
		}
	}
	
	echo "</div>\n";
}
?>

<div class="link">
<a href="game.php?action=1">Pokračovat</a>
</div>

<?php
include 'post.php';
?>
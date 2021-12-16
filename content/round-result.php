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

foreach ($_SESSION['nepritel'] as $nepritel) {
	if (! jeden_nepritel_zije($nepritel) && $nepritel['poskozeni'] == 0) {
		continue;
	}
	
	echo "<div class=\"text\">\n";
	
	if ($nepritel['poskozeni'] > 0) {
		if ($_SESSION['typ_souboje'] == Souboj::Vozidla) {
			echo 'Zasáhl jsi ' . $nepritel['jmeno'][1] . ' a ubral ' . $zajmeno[$nepritel['rod']] . ' ' . $nepritel['poskozeni'] . ' ' . pocet_bodu($nepritel['poskozeni']) . ' pancíře.';
		} else {
			echo 'Zasáhl jsi ' . $nepritel['jmeno'][1] . ' a ubral ' . $zajmeno[$nepritel['rod']] . ' ' . $nepritel['poskozeni'] . ' ' . pocet_bodu($nepritel['poskozeni']) . ' staminy.';
		}
	} else if ($nepritel['poskozeni'] < 0) {
		if ($_SESSION['typ_souboje'] == Souboj::Vozidla) {
			echo $nepritel['jmeno'][0] . ' tě zasáhl' . $podst_jmeno[$nepritel['rod']] . ' a ubral' . $podst_jmeno[$nepritel['rod']] . ' ti ' . -$nepritel['poskozeni'] . ' ' . pocet_bodu(-$nepritel['poskozeni']) . ' pancíře.';
		} else {
			echo $nepritel['jmeno'][0] . ' tě zasáhl' . $podst_jmeno[$nepritel['rod']] . ' a ubral' . $podst_jmeno[$nepritel['rod']] . ' ti ' . -$nepritel['poskozeni'] . ' ' . pocet_bodu(-$nepritel['poskozeni']) . ' staminy.';
		}
		
	} else {
		if ($nepritel['byl_cil']) {
			echo 'S ' . $nepritel['jmeno'][2] . ' jste se navzájem minuli.';
		} else {
			echo $nepritel['jmeno'][0] . ' tě minul.';
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
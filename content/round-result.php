<?php
$zajmeno = [
	true => 'mu',
	false => 'jí',
];

$podst_jmeno = [
	true => '',
	false => 'a',
];

foreach ($_SESSION['nepritel'] as $nepritel) {
	if ($nepritel['vydrz_ted'] <= 0 && $nepritel['poskozeni'] == 0) {
		continue;
	}
	
	echo "<div class=\"text\">\n";
	
	if ($nepritel['poskozeni'] > 0) {
		if ($_SESSION['typ_souboje'] == Souboj::Vozidla) {
			echo 'Zasáhl jsi ' . $nepritel['jmeno'][1] . ' a ubral ' . $zajmeno[$nepritel['rod']] . ' ' . $nepritel['poskozeni'] . ' body pancíře.';
		} else {
			echo 'Zasáhl jsi ' . $nepritel['jmeno'][1] . ' a ubral ' . $zajmeno[$nepritel['rod']] . ' ' . $nepritel['poskozeni'] . ' body staminy.';
		}
	} else if ($nepritel['poskozeni'] < 0) {
		if ($_SESSION['typ_souboje'] == Souboj::Vozidla) {
			echo $nepritel['jmeno'][0] . ' tě zasáhl' . $podst_jmeno[$nepritel['rod']] . ' a ubral' . $podst_jmeno[$nepritel['rod']] . ' ti ' . -$nepritel['poskozeni'] . ' body pancíře.';
		} else {
			echo $nepritel['jmeno'][0] . ' tě zasáhl' . $podst_jmeno[$nepritel['rod']] . ' a ubral' . $podst_jmeno[$nepritel['rod']] . ' ti ' . -$nepritel['poskozeni'] . ' body staminy.';
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
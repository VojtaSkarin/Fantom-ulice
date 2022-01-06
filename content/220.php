<div class="title-main">
220
</div>

<?php
$_SESSION['pocet_zasahu'] = 0;
$_SESSION['utocna_sila_ja_zmena'] = +1;
$_SESSION['utocna_sila_ja_zmena_kola'] = [];
$_SESSION['zbran_ja'] = 0;
$_SESSION['kolo'] = 1;
$_SESSION['kolo_konec'] = 0;
$_SESSION['stamina_zacatek_souboje'] = $_SESSION['stamina_ted'];
$_SESSION['pristi_cil'] = 0;

$_SESSION['typ_souboje'] = Souboj::Vozidla;
$_SESSION['utok'] = Utok::Stridave;
$_SESSION['nepritel'] = [
	[
		'jmeno' => ['MOTORKA s VOZÍKEM', 'MOTORKU s VOZÍKEM', 'MOTORKOU s VOZÍKEM'],
		'rod' => false,
		'utocna_sila' => 9,
		'zbran' => 0,
		'vydrz_ted' => 8,
		'vydrz_max' => 8,
		'poskozeni' => 0,
		'byl_cil' => false,
	],
];
?>

<div class="text">
Řidiči motorky se nějak podaří prokličkovat mezi bodci a&nbsp;jeho spolujezdec znovu začne střílet. Rozhodneš se opětovat střelbu kulometem Interceptoru, ale kličkující vozidlo není snadné zasáhnout.
</div>

<?php
include 'enemy-table.php';
?>

<div class="text">
Pokud zvítězíš v&nbsp;tomto souboji, otoč na <b>143</b>.
</div>

<div class="link">
<a href="game.php?action=1">Bojovat s&nbsp;motorkou</a>
</div>

<?php
include 'post.php';
?>
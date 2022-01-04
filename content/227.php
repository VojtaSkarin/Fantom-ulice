<div class="title-main">
227
</div>

<?php
$_SESSION['pocet_zasahu'] = 0;
$_SESSION['utocna_sila_ja_zmena'] = -1;
$_SESSION['utocna_sila_ja_zmena_kola'] = [];
$_SESSION['zbran_ja'] = 0;
$_SESSION['kolo'] = 1;
$_SESSION['kolo_konec'] = 0;
$_SESSION['stamina_zacatek_souboje'] = $_SESSION['stamina_ted'];
$_SESSION['pristi_cil'] = 0;

$_SESSION['typ_souboje'] = Souboj::Strelba;
$_SESSION['nepritel'] = [
	[
		'jmeno' => ['LUPIČ', 'LUPIČE', 'LUPIČEM'],
		'rod' => true,
		'utocna_sila' => 8,
		'zbran' => 0,
		'vydrz_ted' => 12,
		'vydrz_max' => 12,
		'poskozeni' => 0,
		'byl_cil' => false,
	],
];
?>

<div class="text">
Kulka se zaryje do země necelý metr od tebe. Rychle se posadíš a&nbsp;výstřel oplatíš.
</div>

<?php
include 'enemy-table.php';
?>

<div class="text">
Rozhodni tento souboj podle pravidel pro střelbu, ale během něj sniž své UMĚNÍ BOJE o&nbsp;1 kvůli svému zranění. Pokud zvítězíš, otoč na <b>131</b>, ale pokud jsi byl v&nbsp;tomto souboji zasažen více než jedenkrát, sniž natrvalo své UMĚNÍ BOJE o&nbsp;1.
</div>

<div class="link">
<a href="game.php?action=1">Bojovat s lupičem</a>
</div>

<?php
include 'post.php';
?>
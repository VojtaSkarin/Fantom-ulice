<div class="title-main">
193
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

$_SESSION['typ_souboje'] = Souboj::Strelba;
$_SESSION['nepritel'] = [
	[
		'jmeno' => ['BANDITA', 'BANDITU', 'BANDITOU'],
		'rod' => true,
		'utocna_sila' => 7,
		'zbran' => 0,
		'vydrz_ted' => 11,
		'vydrz_max' => 11,
		'poskozeni' => 0,
		'byl_cil' => false,
	],
];
?>

<div class="text">
Skrčíš se za dveřmi auta a&nbsp;dýka se od nich odrazí. Muž vytáhne z&nbsp;podpažního pouzdra malý revolver a&nbsp;chystá se vystřelit.
</div>

<?php
include 'enemy-table.php';
?>

<div class="text">
Rozhodni tento souboj podle pravidel pro střelbu, ale během něj zvyš své UMĚNÍ BOJE o&nbsp;1 díky krytu za dveřmi. Pokud zvítězíš, otoč na <b>64</b>, ale pokud jsi byl v&nbsp;tomto souboji zasažen více než jedenkrát, sniž natrvalo své UMĚNÍ BOJE o&nbsp;1.
</div>

<div class="link">
<a href="game.php?action=1">Bojovat s banditou</a>
</div>

<?php
include 'post.php';
?>
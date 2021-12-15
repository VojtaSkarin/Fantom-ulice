<div class="title-main">
6
</div>

<?php
$_SESSION['pocet_zasahu'] = 0;
$_SESSION['utocna_sila_ja_zmena'] = 0;

$_SESSION['typ_souboje'] = Souboj::Strelba;
$_SESSION['nepritel'] = [
	[
		'jmeno' => ['První MOTORKÁŘ', 'Prvního MOTORKÁŘE', 'Prvním MOTORKÁŘEM'],
		'rod' => true,
		'utocna_sila' => 6,
		'vydrz_ted' => 15,
		'vydrz_max' => 15,
		'poskozeni' => 0,
		'byl_cil' => false,
	],
	[
		'jmeno' => ['Druhý MOTORKÁŘ', 'Druhého MOTORKÁŘE', 'Druhým MOTORKÁŘEM'],
		'rod' => true,
		'utocna_sila' => 7,
		'vydrz_ted' => 17,
		'vydrz_max' => 17,
		'poskozeni' => 0,
		'byl_cil' => false,
	],
];
?>

<div class="text">
Oba motorkáři mají pistole. Oplácíš jim střelbu svým revolverem a souboj začíná.
</div>

<?php
include 'enemy-table.php';
?>

<div class="text">
V tomto souboji (podle pravidel pro střelbu) na tebe budou v každém kole boje střílet oba motorkáři, ale ty si musíš vybrat, na kterého z nich budeš střílet ty. Proti druhému si budeš házet na Útočné číslo jako obvykle, ale bude-li tvé Útočné číslo větší, nezraníš ho - znamená to jen, že tě jeho kulka minula. Samozřejmě pokud bude jeho Útočné číslo větší, jeho kulka tě zasáhne. Pokud zvítězíš, otoč na <b>307</b>, ale pokud jsi byl v tomto souboji s motorkáři zasažen více než jedenkrát, sniž natrvalo své UMĚNÍ BOJE o 1.
</div>

<div class="link">
<a href="game.php?action=1">Bojovat s motorkáři</a>
</div>

<?php
include 'post.php';
?>
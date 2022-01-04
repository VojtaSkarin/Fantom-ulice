<?php
session_start();
if (array_key_exists('goto', $_GET)) {
	$_SESSION['stav'] = $_GET['goto'];
	header('Location: game.php');
}
?>

<html>
<head>
<title>
Úvodní strana
</title>

<?php
include 'header-table.php';
?>

<div class="title-main-1">
<b>Ian Livingstone</b>
</div>

<div class="title-main-2">
<b>FANTOM ULICE</b>
</div>

<div class="title-main-3">
Pokrytí hry: 69,7&nbsp;%
</div>

<div class="text">
Po zdecimování zbloudilým smrtícím virem zbyla ze světa, který jsi znal, jen nesmírná divoká pustina. Ti, co přežili, buď žijí v&nbsp;hrstce opevněných měst, nebo projíždějí krajinou jako bandité. Život je plný nebezpečí a&nbsp;neplatí zde žádné zákony.
</div>

<div class="text">
TVÝM úkolem je projet divočinou do vzdálené ropné rafinérie v&nbsp;San Anglo a&nbsp;přivézt zpět do tvého mírumilovného města New Hope životně důležitý náklad. Dokonce i&nbsp;ve vyzbrojeném Dodge Interceptoru, který jsi dostal, bude tvá cesta divoká a&nbsp;nebezpečná. Dokážeš přežít?
</div>

<div class="text">
Před tebou leží mnoho nebezpečí a&nbsp;tvůj úspěch rozhodně není jistý. Čekají tě mocní protivníci a&nbsp;mnohdy se budeš muset rozhodnout, zda zabíjet nebo být zabit.
</div>

<div class="text">
Ian Livingstone, spoluzakladatel (se Stevem Jacksonem) úspěšné společnosti Games Workshop a&nbsp;vydavatel časopisu <i>White Dwarf</i>, vytvořil toto napínavé dobrodružství odehrávající se v&nbsp;nepříliš vzdálené budoucnosti. <i>Fantom ulice</i> obsahuje rozšířený soubojový systém s&nbsp;dvojitou Průvodní listinou na zaznamenávání tvých úspěchů a&nbsp;nezdarů. Všechno, co potřebuješ, jsou dvě kostky, tužka a&nbsp;guma.
</div>

<div class="text">
<i>Ke hraní online verze tužku, gumu, ani šestihrannou kostku nepotřebuješ!</i>
</div>

<img class="cover" src="images/cover.jpg">

<?php
include 'feedback.php';
?>
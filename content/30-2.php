<div class="title-main">
30
</div>

<div class="text">
Střela z&nbsp;kuše tě zasáhne do ramene a&nbsp;ty sklouzneš z&nbsp;žebříku dolů. Hoď jednou kostkou a&nbsp;výsledek odečti od své STAMINY. Pokud jsi ještě naživu, přemůžeš bolest a&nbsp;opět šplháš po žebříku nahoru, dřív než stačí útočník znovu nabít kuši. Kvůli svému zranění nemůžeš použít revolver, takže se vrhneš kupředu, abys s&nbsp;ním bojoval pěstmi. Hoď jednou kostkou a&nbsp;přičti své UMĚNÍ BOJE, ale výsledek sniž o&nbsp;1 kvůli svému zranění. Hoď znovu a&nbsp;přičti 7 (útočníkovo UMĚNÍ BOJE). Pokud je tvůj výsledek stejný nebo větší než jeho, otoč na <b>74</b>. Pokud je tvůj výsledek menší než jeho, otoč na <b>226</b>.
</div>

<?php
$_SESSION['umeni_boje_ja'] = rand(1, 6) + $_SESSION['umeni_boje_ted'] - 1;
$_SESSION['umeni_boje_protivnik'] = rand(1, 6) + 7;
?>

<?php
include 'showdown-link.php';
?>

<?php
include 'post.php';
?>
<div class="title-main">
17
</div>
<div class="text">
Sešlápneš plyn, abys unikl motorkářům dříve, než tvůj vůz ochromí exploze. Interceptor sebou trhne, když se kola opřou do kamenitého povrchu. Projedeš kolem zátarasu a&nbsp;udeješ po silnici ještě asi sto metrů, než mina vybuchne. Zaslechneš jen tlumenou ránu, ale auto sebou začne smýkat z&nbsp;jedné strany silnice na druhou - výbuch jedno ze zadních kol utrhl z osy. Ztrácíš 2 body PANCÍŘE.

<?php
if ($_SESSION['pancir_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Interceptor byl zničen.\n";
	echo "</div>\n";
	
	include 'death-link.php';
} else {
	echo "Se skřípěním zastavíš a&nbsp;vyskočíš s&nbsp;připraveným revolverem. Vidíš, že kolo se nedá opravit a&nbsp;že budeš muset použít rezervu. Na silnici za tebou startují motorkáři svůj obrněný stroj a&nbsp;chystají se k útoku. Nasedneš zpátky do auta, abys je přivítal kulomety Interceptoru.\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Během tohoto souboje vozidel sniž svou PALEBNOU SÍLU o 2 kvůli nepohyblivosti svého auta. Pokud zvítězíš, otoč na <b>103</b>.\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Otočit na <b>103</b></a>\n";
	echo "</div>\n";
}
?>

<?php
include 'post.php';
?>
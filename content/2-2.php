<div class="title-main">
2
</div>

<?php
if ($_SESSION['stamina_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "<div class=\"text\">\n";
	echo "Hadí jed tě usmrtil.\n";
	echo "</div>\n";
	
} else {
	echo "<div class=\"text\">\n";
	echo "Běžíš k autu a rychle otevřeš balíček léků z Med-Kitu. Píchneš si sérum proti uštknutí a obvážeš si ránu. Nicméně použití Med-Kitu tentokrát nezvýší tvou STAMINU, pouze zabrání jedu, aby tě usmrtil. Zanedlouho se vzpamatuješ, ale jsi zesláblý po přestálém utrpení. Ztrácíš 1 bod UMĚNÍ BOJE a 2 body STAMINY. Vrátíš se k převrácenému Interceptoru a hada zastřelíš. V přihrádce na rukavice najdeš stočenou několikametrovou plastikovou hadici a vezmeš ji s sebou. Když se znovu rozjedeš k jihu, stále cítíš bolestivé škubání v paži (otoč na <b>13</b>).\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Otočit na <b>13</b></a>\n";
	echo "</div>\n";
}
?>

<?php
include 'post.php';
?>
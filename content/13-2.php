<div class="title-main">
13
</div>
<div class="text">
Ve zpětném zrcátku zahlédneš, jak se k tobě blíží motorka s&nbsp;přívěsným vozíkem. Spolujezdec drží kulomet upevněný vpředu na vozíku. Se svými brýlemi a koženou kuklou ti připomínají piloty z počátků letectví. Oba mají přes ústa uvázány černé šátky, aby ochránili své plíce před pouštním prachem. Když jsou za tebou necelých padesát metrů, vystřelí na Interceptor salvu z kulometu a tím dají jasně najevo své úmysly. Ztrácíš 1 bod PANCÍŘE. Chceš:
</div>

<?php
if ($_SESSION['bodce'] > 0) {
	echo '<div class="text-choice">';
	echo 'Vyprázdnit zásobník s železnými bodci (pokud ho máš)?';
	echo '</div>';
	echo '<div class="link">';
	echo '<a href="game.php?action=1">Otoč na <b>127</b></a>';
	echo '</div>';
}
if ($_SESSION['olej'] > 0 ) {
	echo '<div class="text-choice">';
	echo 'Vypustit olej (máš-li ještě plný zásobník)?';
	echo '</div>';
	echo '<div class="link">';
	echo '<a href="game.php?action=2">Otoč na <b>361</b></a>';
	echo '</div>';
}
?>

<div class="text-choice">
Opětovat střelbu z kulometu Interceptoru?
</div>
<div class="link">
<a href="game.php?action=3">Otoč na <b>282</b></a>
</div>

<?php
include 'post.php';
?>
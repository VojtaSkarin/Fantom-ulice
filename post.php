<div class="stats">
<?php
$umeni_boje_max = $_SESSION['umeni_boje_max'];
$umeni_boje_ted = $_SESSION['umeni_boje_ted'];

echo 'UMĚNÍ BOJE: ' . $umeni_boje_ted . '/' . $umeni_boje_max . '<br>';

$stamina_max = $_SESSION['stamina_max'];
$stamina_ted = $_SESSION['stamina_ted'];

echo 'STAMINA: ' . $stamina_ted . '/' . $stamina_max . '<br>';

$stesti_max = $_SESSION['stesti_max'];
$stesti_ted = $_SESSION['stesti_ted'];

echo 'ŠTĚSTÍ: ' . $stesti_ted . '/' . $stesti_max . '<br>';

echo '<br>';

echo 'MED-KIT: ';

$medkit = $_SESSION['medkit'];

for ($i = 0; $i < $medkit; $i++) {
	echo '<img class="medkit" src="../images/medkit.png">';
}

echo '<br>';

$kredity = $_SESSION['kredity'];

echo 'KREDITY: ' . $kredity;
echo '<img class="credit" src="../images/credit.png"><br>';

echo '<br>';

$palebna_sila_max = $_SESSION['palebna_sila_max'];
$palebna_sila_ted = $_SESSION['palebna_sila_ted'];

echo 'PALEBNÁ SÍLA: ' . $palebna_sila_ted . '/' . $palebna_sila_max . '<br>';

$pancir_max = $_SESSION['pancir_max'];
$pancir_ted = $_SESSION['pancir_ted'];

echo 'PANCÍŘ: ' . $pancir_ted . '/' . $pancir_max . '<br>';

echo '<br>';

$rakety = $_SESSION['rakety'];

echo 'RAKETY: ';

for ($i = 0; $i < $rakety; $i++) {
	echo '<img class="rocket" src="../images/rocket.png">';
}

echo '<br>';

$bodce = $_SESSION['bodce'];

echo 'ŽELEZNÉ BODCE: ';

for ($i = 0; $i < $bodce; $i++) {
	echo '<img class="nails" src="../images/nails.png">';
}

echo '<br>';

$olej = $_SESSION['olej'];

echo 'OLEJ: ';

for ($i = 0; $i < $olej; $i++) {
	echo '<img class="oil" src="../images/oil.png">';
}

echo '<br>';

$kola = $_SESSION['kola'];

echo 'REZERVNÍ KOLA: ';

for ($i = 0; $i < $kola; $i++) {
	echo '<img class="wheel" src="../images/wheel.png">';
}

echo '<br>';

$palivo = $_SESSION['palivo'];

echo 'PALIVO: ';

for ($i = 0; $i < $palivo; $i++) {
	echo '<img class="canister" src="../images/canister.png">';
}

echo '<br><br>';

echo 'VYBAVENÍ: ';

$vybaveni = $_SESSION['vybaveni'];

for ($i = 0; $i < count($vybaveni); $i++) {
	$predmet = $vybaveni[$i];
	if ($i > 0) {
		echo ', ';
	}
	echo $predmet;
}
?>
</div>

<br><br>
<div class="text">
Překlepy, jednopísmenné předložky na konci řádku, chyby a další nedostatky prosím hlaste na xskarou1@fi.muni.cz. Ocením i jakoukoliv zpětnou vazbu.
</div>
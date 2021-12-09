<?php
include 'pre.php';

echo '<div class="text">';
if ($_SESSION['stesti']) {
	$offset = 0;
	echo 'Máš štěstí.';
} else {
	$offset = 1;
	echo 'Máš smůlu.';
}
echo '</div>';

$_SESSION['dalsi-stav'] = $mapa[$_SESSION['minuly-stav'] . '-post'][$offset];
?>

<div class="link">
<a href="game.php?action=1">Pokračovat</a>
</div>

<?php
include 'post.php';
?>
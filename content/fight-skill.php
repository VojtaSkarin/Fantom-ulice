<?php
echo '<div class="text">';
if ($_SESSION['vysledek']) {
	echo 'Zvládl jsi zareagovat.';
} else {
	echo 'Nezvládl jsi zareagovat.';
}
echo '</div>';
?>

<div class="link">
<a href="game.php?action=1">Pokračovat</a>
</div>

<?php
include 'post.php';
?>
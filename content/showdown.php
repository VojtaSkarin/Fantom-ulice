<?php
echo '<div class="text">';
if ($_SESSION['vysledek']) {
	echo 'Jsi rychlejší, než protivník.';
} else {
	echo 'Protivník je rychlejší, než ty.';
}
echo '</div>';
?>

<div class="link">
<a href="game.php?action=1">Pokračovat</a>
</div>

<?php
include 'post.php';
?>
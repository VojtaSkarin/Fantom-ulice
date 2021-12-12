<?php
$hod = rand(1, 6);

$_SESSION['stamina_ted'] = max($_SESSION['stamina_ted'] - $hod, 0);

header('Location: game.php?action=1');
?>
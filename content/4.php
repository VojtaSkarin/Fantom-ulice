<?php
include 'pre.php';

$_SESSION['stamina_ted'] = min($_SESSION['stamina_max'], $_SESSION['stamina_ted'] + 2);

header('Location: game.php?action=1');
?>
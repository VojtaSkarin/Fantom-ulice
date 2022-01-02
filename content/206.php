<?php
$_SESSION['kredity'] += 200;
array_push($_SESSION['vybaveni'], 'pouta');
$_SESSION['kola'] = max($_SESSION['kola'] - 1, 0);

header('Location: game.php?action=1');
?>
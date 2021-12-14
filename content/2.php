<?php
$_SESSION['medkit'] = max($_SESSION['medkit'] - 1, 0);
$_SESSION['umeni_boje_ted'] = max($_SESSION['umeni_boje_ted'] - 1, 0);
$_SESSION['stamina_ted'] = max($_SESSION['stamina_ted'] - 2, 0);

array_push($_SESSION['vybaveni'], 'plastiková hadice');

header('Location: game.php?action=1');
?>
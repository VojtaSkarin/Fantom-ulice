#!/packages/run/php/bin/php
<?php
include '../pre.php';

$_SESSION['medkit']--;
$_SESSION['umeni_boje_ted']--;
$_SESSION['stamina_ted'] -= 2;

array_push($_SESSION['vybaveni'], 'plastiková hadice');

header('Location: 2-post.php');
?>
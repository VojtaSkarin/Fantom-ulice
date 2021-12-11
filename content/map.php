<?php
$mapa = [
	'fortune' => [],
	'new-game' => ['intro'],
	'intro' => ['intro-2'],
	'intro-2' => ['intro-3'],
	'intro-3' => ['1'],
	'1' => ['126', '34'],
	'2' => ['2-post'],
	'2-post' => ['13'],
	'3' => [],
	'3-post' => ['354', '247'],
	'4' => ['4-post'],
	'4-post' => ['254'],
	'5' => ['241', '218'],
	'6' => ['307'],
	'7' => [],
	'7-post' => ['319', '136'],
	'8' => ['340'],
	'9' => ['9-post'],
	'9-post' => ['smrt'],
	'10' => ['264', '359'],
	'11' => ['11-post'],
	'11-post' => ['216'],
	'12' => ['???'],
	'13' => ['13-post'],
	'13-post' => ['127', '361', '282'],
	'14' => ['14-post'],
	'14-post' => ['260', '217'],
	'15' => ['169', '259'],
	'16' => ['26', '254'],
	'17' => ['17-post'],
	'17-post' => ['???'],
	'18' => ['smrt'],
	'19' => ['19-post'],
	'19-post' => ['119'],
	'20' => ['20-post'],
	'20-post' => ['111'],
	'21' => ['21-post'],
	'21-post' => ['221'],
	'22' => ['311', '203'],
	'23' => [],
	'23-post' => ['137', '342'],
	'24' => ['300', '59'],
];

$zkouseni_stesti = [
	'3',
	'7',
];

$zkouseni_umeni_boje = [
	'23',
];

$podminky = [
	'13-post' => [function () { return $_SESSION['bodce'] > 0; },
		function() { return $_SESSION['olej'] > 0; }],
	'15' => [function () { return $_SESSION['kredity'] >= 200; }],
];
?>
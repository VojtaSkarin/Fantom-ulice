<?php
abstract class Souboj {
	const Tvari_v_tvar = 1;
	const Strelba = 2;
	const Vozidla = 3;
	const Srazky = 4;
}

abstract class Utok {
	const Zaroven = 1;
	const Stridave = 2;
}

$souboje_vozidel = [Souboj::Vozidla, Souboj::Srazky];

$mapa = [
	'fortune' => [],
	'fight-skill' => [],
	'showdown' => [],
	'fight-round-result' => ['fight'],
	'race-round-result' => ['race'],
	'new-game' => ['intro'],
	'intro' => ['intro-2'],
	'intro-2' => ['intro-3'],
	'intro-3' => ['1'],
	'1' => ['126', '34'],
	'2' => ['2-2'],
	'2-2' => ['13'],
	'3' => [],
	'3-stesti' => ['354', '247'],
	'4' => ['4-2'],
	'4-2' => ['254'],
	'5' => ['241', '218'],
	'6' => ['fight'],
	'6-boj' => ['307'],
	'7' => [],
	'7-stesti' => ['319', '136'],
	'8' => ['340'],
	'9' => ['9-2'],
	'9-2' => [],
	'10' => ['264', '359'],
	'11' => ['11-2'],
	'11-2' => ['216'],
	'12' => ['fight'],
	'12-boj' => ['131'],
	'13' => ['13-2'],
	'13-2' => ['127', '361', '282'],
	'14' => ['14-2'],
	'14-2' => ['260', '217'],
	'15' => ['169', '259'],
	'16' => ['26', '254'],
	'17' => ['17-2'],
	'17-2' => ['fight'],
	'17-2-boj' => ['103'],
	'18' => [],
	'19' => ['19-2'],
	'19-2' => ['119'],
	'20' => ['20-2'],
	'20-2' => ['111'],
	'21' => ['21-2'],
	'21-2' => ['221'],
	'22' => ['311', '203'],
	'23' => [],
	'23-um-boje' => ['137', '342'],
	'24' => ['300', '59'],
	'25' => ['100'],
	'26' => ['260', '217'],
	'27' => ['139'],
	'28' => ['141', '88'],
	'29' => ['29-2'],
	'29-2' => ['22'],
	'30' => ['30-2'],
	'30-2' => [],
	'30-2-kdo-z-koho' => ['74', '226'],
	'31' => ['262', '353'],
	'32' => [],
	'32-stesti' => ['76', '160'],
	'33' => ['33-2'],
	'33-2' => ['47'],
	'34' => ['302', '167'],
	'35' => [],
	'35-kdo-z-koho' => ['379', '51'],
	'36' => ['36-2'],
	'36-2' => ['368'],
	'37' => ['37-2'],
	'37-2' => ['261'],
	'38' => ['38-2'],
	'38-2' => ['176', '374'],
	'39' => [],
	'39-stesti' => ['171', '29'],
	'40' => [],
	'40-kdo-z-koho' => ['81', '296'],
	'41' => ['165', '77'],
	'42' => [],
	'42-um-boje' => ['161', '186'],
	'43' => [],
	'43-stesti' => ['175', '201'],
	'44' => [],
	'44-podminka' => ['273', '214'],
	'45' => [],
	'45-stesti' => ['304', '60'],
	'46' => [],
	'46-podminka' => ['310', '364'],
	'47' => ['117', '23'],
	'48' => ['fight'],
	'48-boj' => ['138', '100'],
	'49' => ['fight'],
	'49-boj' => ['91'],
	'50' => [],
	'51' => ['51-2'],
	'51-2' => ['232'],
	'52' => ['164', '190'],
	'53' => ['78', '45'],
	'54' => ['104', '118'],
	'55' => [],
	'55-nahoda' => ['110', '14'],
	'56' => ['198'],
	'57' => ['34'],
	'58' => ['58-2'],
	'58-2' => ['150'],
	'59' => [],
	'59-stesti' => ['73', '121'],
	'60' => ['60-2'],
	'60-2' => ['135'],
	'61' => ['272'],
	'62' => ['151'],
	'63' => ['fight'],
	'63-boj' => ['334'],
	'64' => [],
	'64-stesti' => ['242', '313'],
	'65' => ['65-2'],
	'65-2' => ['207'],
	'66' => ['270', '159'],
	'67' => [],
	'67-um-boje' => ['200', '248'],
	'68' => ['254'],
	'69' => ['90'],
	'70' => [],
	'70-um-boje' => ['62', '133'],
	'71' => [],
	'71-stesti' => ['172', '37'],
	'72' => ['72-2'],
	'72-2' => ['233'],
	'73' => ['207', '330'],
	'74' => [],
	'74-podminka' => ['275', '380'],
	'75' => ['75-2'],
	'75-2' => ['167'],
	'76' => ['198'],
	'77' => [],
	'77-stesti-bez' => ['290', '352'],
	'78' => ['199', '377', '45'],
	'79' => ['281', '150'],
	'80' => ['80-2'],
	'80-2' => ['232'],
	'81' => ['218', '335'],
	'82' => [],
	'82-stesti-bez' => ['39', '244'],
	'83' => ['fight'],
	'83-boj' => ['305'],
	'84' => ['84-2'],
	'84-2' => ['258'],
	'85' => [],
	'85-podminka' => ['107', '326'],
	'86' => ['86-2'],
	'86-2' => ['38', '256'],
	'87' => ['100'],
	'88' => ['177', '271'],
	'89' => ['34'],
	'90' => ['90-2'],
	'90-2' => [],
	'90-um-boje' => ['147', '18'],
	'91' => ['230', '301'],
	'92' => ['272'],
	'93' => [],
	'93-stesti' => ['268', '178'],
	'94' => [],
	'94-podminka' => ['328', '284'],
	'95' => ['fight'],
	'95-boj' => ['249'],
	'96' => [],
	'96-podminka' => ['180', '364'],
	'97' => ['97-2'],
	'97-2' => ['215'],
	'98' => ['98-2'],
	'98-2' => ['294'],
	'99' => ['21', '221'],
	'100' => [],
	'101' => ['101-2'],
	'101-2' => ['303'],
	'102' => ['fight'],
	'102-boj' => ['154'],
	'103' => ['206', '346'],
	'104' => [],
	'104-podminka' => ['306', '187'],
	'105' => ['105-2'],
	'105-2' => ['292'],
	'106' => ['47'],
	'107' => ['158'],
	'108' => ['89'],
	'109' => ['277', '49'],
	'110' => ['110-2'],
	'110-2' => ['254'],
	'111' => ['111-2'],
	'111-2' => ['44, 156, 228'],
	'112' => ['112-2'],
	'112-2' => ['252', '353'],
	'113' => ['158'],
	'114' => ['92'],
	'115' => ['fight'],
	'115-boj' => ['194'],
	'116' => ['116-2'],
	'116-2' => ['fight'],
	'116-2-boj' => ['131'],
	'117' => ['189'],
	'118' => [],
	'118-podminka' => ['99', '364'],
	'119' => ['272'],
	'120' => ['fight'],
	'120-boj' => ['286'],
	'121' => ['121-2'],
	'121-2' => ['134'],
	'122' => ['122-2'],
	'122-2' => ['346'],
	'123' => [],
	'124' => ['203', '344'],
	'125' => [],
	'125-um-boje' => ['349', '202'],
	'126' => ['274', '155'],
	'127' => [],
	'127-nahoda' => ['373', '220'],
	'128' => ['312', '165', '77'],
	'129' => ['129-2'],
	'129-2' => ['93'],
	'130' => ['314', '71'],
	'131' => ['131-2'],
	'131-2' => ['22'],
	'132' => [],
	'132-podminka' => ['275', '380'],
	'133' => ['133-2'],
	'133-2' => ['151'],
	'134' => ['207', '330'],
	'135' => [],
	'135-um-boje' => ['193', '36'],
	'136' => ['32'],
	'137' => ['281', '150'],
	'138' => ['75', '146'],
	'139' => ['139-2'],
	'139-2' => [],
	'139-2-um-boje' => ['8', '287'],
	'140' => ['23'],
	'141' => ['141-2'],
	'141-2' => ['88'],
	'142' => [],
	'142-stesti' => ['299', '25'],
	'143' => ['96'],
	'144' => [],
	'144-um-boje' => ['68', '168'],
	'145' => [],
	'146' => ['146-2'],
	'146-2' => ['167'],
	'147' => [],
	'147-stesti' => ['235', '279'],
	'148' => ['148-2'],
	'148-2' => [],
	'148-2-stesti' => ['354', '247'],
	'149' => ['225', '114'],
	'150' => ['46', '298'],
	'151' => ['179', '362'],
	'152' => ['152-2'],
	'152-2' => ['139'],
	'153' => ['225'],
	'154' => ['154-2'],
	'154-2' => [],
	'154-2-nahoda' => ['245', '376'],
	'155' => ['155-2'],
	'155-2' => ['219', '333'],
	'156' => ['207'],
	'157' => [],
	'157-stesti' => ['222', '315'],
	'158' => ['fight'],
	'158-boj' => ['67'],
	'159' => ['341'],
	'160' => ['293', '367'],
	'161' => ['128'],
	'162' => [],
	'162-um-boje' => ['94', '123'],
	'163' => ['157', '45'],
	'164' => [],
	'164-kdo-z-koho' => ['132', '205'],
	'165' => [],
	'165-nahoda' => ['234', '280'],
	'166' => ['166-2'],
	'166-2' => ['253', '13'],
	'167' => ['fight'],
	'167-boj' => ['188'],
	'168' => ['168-2'],
	'168-2' => ['327'],
	'169' => ['169-2'],
	'169-2' => ['259'],
	'170' => [],
	'170-um-boje' => ['363', '87'],
	'171' => ['22'],
	'172' => ['351'],
	'173' => ['173-2'],
	'173-2' => [],
	'174' => ['218', '335'],
	'175' => ['340'],
	'176' => [],
	'176-um-boje' => ['108', '350'],
	'177' => ['46'],
	'178' => ['fight'],
	'178-boj' => ['375'],
	'179' => ['142', '215'],
	'180' => ['180-2'],
	'180-2' => ['243'],
	'181' => ['47'],
	'182' => [],
	'182-stesti' => ['227', '116'],
	'183' => ['43', '152'],
	'184' => ['fight'],
	'184-boj' => ['69'],
	'185' => ['185-2'],
	'185-2' => ['72', '246'],
	'186' => ['186-2'],
	'186-2' => ['348'],
	'187' => ['118'],
	'188' => ['341', '66'],
	'189' => ['24', '207'],
	'190' => [],
	'190-stesti' => ['345', '30'],
	'191' => ['191-2'],
	'191-2' => ['292'],
	'192' => ['100'],
	'193' => ['fight'],
	'193-boj' => ['64'],
	'194' => ['257', '211'],
	'195' => ['195-2'],
	'195-2' => ['182', '356'],
	'196' => ['351'],
	'197' => ['4', '321', '144'],
	'198' => [],
	'198-podminka' => ['85', '255'],
	'199' => ['262', '353'],
	'200' => ['269', '102'],
	'201' => ['201-2'],
	'201-2' => ['266'],
	'202' => ['202-2'],
	'202-2' => [],
	'203' => ['373', '317', '278'],
	'204' => ['207'],
	'205' => ['205-2'],
	'205-2' => [],
	'206' => ['206-2'],
	'206-2' => ['346'],
	'207' => ['28', '88'],
	'208' => ['196'],
	'209' => [],
	'210' => ['race'],
	'210-zavod' => ['54', '322'],
	'211' => ['11', '83'],
	'212' => ['212-2'],
	'212-2' => ['283', '6'],
	'213' => ['213-2'],
	'213-2' => ['294'],
	'214' => [],
	'214-nahoda' => ['192', '347'],
	'215' => ['149', '10'],
	'216' => ['243'],
	'217' => [],
	'217-um-boje' => ['285', '50'],
	'218' => [],
	'218-um-boje' => ['52', '324'],
	'219' => [],
	'219-2' => ['288', '236'],
	'220' => ['fight'],
	'220-boj' => ['143'],
	'221' => [],
	'221-stesti' => ['7', '331'],
	'222' => ['53'],
	'223' => ['104', '118'],
	'224' => ['207'],
	'225' => [],
	'225-podminka' => ['197', '364'],
	'227' => ['fight'],
	'227-boj' => ['131'],
	'228' => [],
	'228-podminka' => ['273', '214'],
	'229' => [],
	'230' => ['15', '259'],
	'231' => [],
	'232' => ['207'],
	'233' => ['233-2'],
	'233-2' => ['185', '246'],
	'234' => ['47'],
	'235' => ['40'],
	'236' => ['333'],
	'237' => [],
	'238' => ['119'],
	'239' => ['239-2'],
	'239-2' => ['232'],
	'240' => ['240-2'],
	'240-2' => ['3', '148'],
	'241' => ['241-2'],
	'241-2' => ['218'],
	'242' => ['119'],
	'243' => ['109', '49'],
	'244' => ['244-2'],
	'244-2' => [],
	'245' => ['245-2'],
	'245-2-nahoda' => ['360', '376'],
	'246' => ['112', '353'],
	'247' => ['247-2'],
	'247-2' => ['183', '27'],
	'248' => ['248-2'],
	'248-2' => [],
	'249' => ['206', '163'],
	'250' => [],
	'250-nahoda' => ['192', '347'],
	'251' => ['223', '343'],
	'252' => ['185', '72'],
	'253' => ['2', '357'],
	'254' => [],
	'254-nahoda' => ['129', '101'],
	'255' => [],
	'255-stesti' => ['339', '145'],
	'256' => ['256-2'],
	'256-2' => ['34'],
	'257' => ['337', '9'],
	'258' => ['258-2'],
	'258-2' => ['297', '144'],
	'259' => ['369', '291'],
	'260' => ['260-2'],
	'260-2' => [],
	'261' => ['351'],
	'262' => ['262-2'],
	'262-2' => ['112', '252', '353'],
	'263' => ['263-2'],
	'263-2' => [],
	'264' => ['149'],
	'265' => ['104', '118'],
	'266' => ['139'],
	'267' => ['195', '22'],
	'268' => ['303'],
	'269' => ['fight'],
	'269-boj' => ['355'],
	'270' => [],
	'270-um-boje' => ['70', '231'],
	'271' => ['166', '13'],
	'272' => [],
	'272-podminka' => ['323', '364'],
	'273' => [],
	'273-stesti' => ['170', '250'],
	'274' => ['34'],
	'275' => [],
	'276' => ['276-2'],
	'276-2' => ['128'],
	'277' => ['277-2'],
	'277-2' => ['49'],
	'278' => ['278-2'],
	'278-2' => ['311'],
	'279' => ['279-2'],
	'279-2' => ['40'],
	'280' => ['77'],
	'281' => ['58', '150'],
	'282' => ['fight'],
	'282-boj' => ['143'],
	'283' => ['100'],
	'284' => ['fight'],
	'284-boj' => ['265'],
	'285' => ['285-2'],
	'285-2' => ['254'],
	'286' => ['218'],
	'287' => ['287-2'],
	'287-2' => ['340'],
	'288' => ['34'],
	'289' => ['289-2'],
	'289-2' => [],
	'290' => ['fight'],
	'290-boj' => ['106'],
	'291' => ['fight'],
	'291-boj' => ['208'],
	'292' => [],
	'292-podminka' => ['31', '173'],
	'293' => [],
	'293-podminka' => ['56', '125'],
	'294' => ['fight'],
	'294-boj' => ['334'],
	'295' => [],
	'295-stesti' => ['122', '329'],
	'296' => [],
	'296-podminka' => ['174', '263'],
	'297' => ['297-2'],
	'297-2' => ['26', '254'],
	'298' => ['271'],
	'299' => ['299-2'],
	'299-2' => ['fight'],
	'299-2-boj' => ['97'],
	'300' => ['240', '224'],
	'301' => ['301-2'],
	'301-2' => ['251', '237'],
	'302' => ['209', '48'],
	'303' => ['140', '189'],
	'304' => [],
	'304-stesti' => ['238', '370'],
	'305' => ['216'],
	'306' => ['306-2'],
	'306-2' => ['118'],
	'307' => ['206', '346'],
	'308' => ['286'],
	'309' => ['157', '45'],
	'310' => ['310-2'],
	'310-2' => ['115'],
];

$zkouseni_stesti = [
	'3',
	'7',
	'32',
	'39',
	'43',
	'45',
	'59',
	'64',
	'71',
	'93',
	'142',
	'147',
	'148',
	'182',
	'190',
	'219',
	'221',
	'255',
	'273',
	'295',
	'304',
];

$zkouseni_stesti_bez = [
	'77',
	'82',
];

$zkouseni_umeni_boje = [
	'23',
	'42',
	'67',
	'70',
	'125',
	'135',
	'139-2',
	'144',
	'162',
	'170',
	'176',
	'217',
	'218',
	'270',
];

$kdo_z_koho = [
	'30-2',
	'35',
	'40',
];

$zkouseni_podminky = [
	'44',
	'46',
	'74',
	'85',
	'94',
	'96',
	'104',
	'118',
	'132',
	'198',
	'225',
	'228',
	'254',
	'292',
	'293',
	'296',
];

$zkouseni_nahody = [
	'55',
	'127',
	'154-2',
	'214',
];

$boj = [
	'fight',
	'fight-round-result',
	'race',
	'race-round-result',
	'6',
	'12',
	'17-2',
	'48',
	'49',
	'63',
	'83',
	'86-2',
	'95',
	'102',
	'115',
	'116-2',
	'120',
	'167',
	'178',
	'184',
	'220',
	'227',
	'282',
	'284',
	'290',
	'291',
	'294',
	'299-2',
];

$podminky = [
	'13-2' => ['ma_bodce', 'ma_olej'],
	'15' => [function () { return $_SESSION['kredity'] >= 200; }],
	'28' => [function () { return $_SESSION['kredity'] >= 100 && $_SESSION['medkit'] >= 2; }],
	'41' => ['ma_olej'],
	'78' => ['ma_rakety'],
	'86-2' => ['ma_medkit'],
	'109' => [function () { return in_array('páčidlo', $_SESSION['vybaveni']); }],
	'128' => ['ma_bodce', 'ma_olej'],
	'203' => ['ma_rakety'],
	'259' => [function () { return $_SESSION['kredity'] >= 200; }],
];

function ma_bodce() { return $_SESSION['bodce'] > 0; }
function ma_olej() { return $_SESSION['olej'] > 0; }
function ma_rakety() { return $_SESSION['rakety'] > 0; }
function ma_medkit() { return $_SESSION['medkit'] > 0; }
?>
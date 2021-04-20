<?php
$ablakcim = array(
    'cim' => 'Noé Állatothon Alapítvány',
);

$fejlec = array(
    'kepforras' => 'logo.gif',
    'kepalt' => 'Noé Állatotthon Alapítvány',
	'cim' => 'Noé Állatotthon Alapítvány');

$lablec = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'ceg' => 'Noé Állatotthon Alapítvány'
);

$rolunk = array(
    '1' => array('kepforras' => '1.jpg', 'kepalt' => 'Telep kinézete'),
    '2' => array('kepforras' => '2.jpg', 'kepalt' => 'Zoli és Hédi'),
    '3' => array('kepforras' => '3.jpg', 'kepalt' => 'Operáción átesett kutya'),
    '4' => array('kepforras' => '4.jpg', 'kepalt' => 'Állatsimogatás'),
    '5' => array('kepforras' => '5.jpg', 'kepalt' => 'Megmentett kutyák')
);

$oldalak = array(
	'/' => array('fajl' => 'fooldal', 'szoveg' => 'Főoldal', 'menun' => array(1,1)),
	'rolunk' => array('fajl' => 'rolunk', 'szoveg' => 'Rólunk', 'menun' => array(1,1)),
	'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
	'cikkek' => array('fajl' => 'cikkek', 'szoveg' => 'Cikkek', 'menun' => array(1,1)),
    'tablazat' => array('fajl' => 'tablazat', 'szoveg' => 'Táblázat', 'menun' => array(1,1)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0))
);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
?>
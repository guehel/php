<?php

/*
 * Contient la liste des provinces qui s'Affichent lors de la saisie des adresses 
 * a la pasge frameAdresse.php
 * elle est inclus par le fichier class.adress.php
 */
$QC = array();
$QC['code'] = 'QC';
$QC['nom'] = 'Quebec';
$QC['villes'] = array(
    'Quebec',
    'Montreal',
    'Gatineau',
    'Laval',
    'Trois-Rivieres',
    'Drummondville',
    'Sherbrook',
    'Gaspe',
    'Setp-Iles'
);

$ON = array();
$ON['code'] = 'ON';
$ON['nom'] = 'Ontario';
$ON['villes'] = array(
    'Toronto',
    'Kingston',
    'Ottawa',
    'Ajax'
);

$NB = array();
$NB['code'] = 'NB';
$NB['nom'] = 'Nouveau-Brunswick';
$NB['villes'] = array(
    'Moncton'
);

$CB = array();
$CB['code'] = 'CB';
$CB['nom'] = 'Colombie-Britanique';
$CB['villes'] = array(
    'Vancouver',
    'Regina'
);


$AL = array();
$AL['code'] = '$AL';
$AL['nom'] = 'Alberta';
$AL['villes'] = array(
    'Calgary',
    'Edmondton'
);
$provinces = array(
    $AL, $CB, $NB, $ON, $QC
);

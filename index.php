<?php
//require __DIR__ . '/vendor/autoload.php';
//die("Hej!");

//$rabbit = new AnnaRabbit();
//$feeling = $rabbit->getRabbitFeeling(true, false);
//$rabbit->printRabbit($feeling);

// Carina

$rabbit = new CarinaRabbit();
$feeling = $rabbit->getRabbitFeeling(true, false);
$rabbit->printRabbit($feeling);


// Walentyna
$rabbit = new WalentynaRabbit();
$feeling = $rabbit->getRabbitFeeling(true, false);
$rabbit->printRabbit($feeling);

// Sav

$rabbit = new SavRabbit();
$feeling = $rabbit->getRabbitFeeling(false, true);
$rabbit->printRabbit($feeling);



//true/false = happy
//true/true = happy
//false/false = sad
//false/true = angry 

<?php
require __DIR__ . '/vendor/autoload.php';

//$rabbit = new AnnaRabbit();
//$feeling = $rabbit->getRabbitFeeling(true, false);
//$rabbit->printRabbit($feeling);

// Carina


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

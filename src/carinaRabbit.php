<?php
declare(strict_types=1);
require __DIR__ . '/../vendor/autoload.php'; 
//$email = Email::fromString("carina@mail.se");// hämta variabel från en fil i mappen (utan att behöva include php-fil)
//var_dump($email);
class CarinaRabbit {    
    function getRabbitFurColor(bool $sun, bool $wind) : string {
        $rabbitFur = "red";
        if($sun == true) {
                $rabbitFur = "green";
            } 
            else if($wind == false) {
                $rabbitFur = "blue";  
            }
            return $rabbitFur;
    }   
        function getRabbitFeeling(bool $sun, bool $wind) : string {
            $rabbitColor = getRabbitFurColor($sun, $wind);
            switch($rabbitColor) {
                case "red":
                    $rabbitFeeling="angry";
                     break;
                case "blue":
                    $rabbitFeeling="sad";
                    break;
                case "green":
                    $rabbitFeeling="happy";
                    break;
            }
            return $rabbitFeeling;
        }

        public function printRabbit($m) {
            echo "Haren känner sig " . $m . ".";  
        }  

        $feeling = getRabbitFeeling(true, false);
        printRabbit($feeling);
        
}

?>
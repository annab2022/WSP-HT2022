<?php
declare(strict_types=1);
require __DIR__ . '/../vendor/autoload.php'; 
//$email = Email::fromString("carina@mail.se");// hämta variabel från en fil i mappen (utan att behöva include php-fil)
//var_dump($email);
class CarinaRabbit {    
    private function getRabbitFurColor(bool $sun, bool $wind) : string {
        $rabbitFur = "red";
        if($sun == true) {
            $rabbitFur = "green";
        } 
        else if($wind == false) {
        $rabbitFur = "blue";  
        }
            return $rabbitFur;
    }   
        public function getRabbitFeeling(bool $sun, bool $wind) : string {
            $rabbitColor = $this->getRabbitFurColor($sun, $wind); // this för den som är inne i 
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
        
        public function isNumber($number) : bool {

            return is_numeric($number);

        }
        /* $feeling = getRabbitFeeling(true, false);
        printRabbit($feeling);

$feeling = getRabbitFeeling(true, false);
- true/false -> happy
- true/true -> happy
- false/false -> sad
- false/true -> angry 



printRabbit($feeling);*/
}

?>
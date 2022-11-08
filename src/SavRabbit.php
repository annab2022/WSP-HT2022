<?php


declare(strict_types=1);

class SavRabbit {

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
            $rabbitColor = $this->getRabbitFurColor($sun, $wind);

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

}

?>
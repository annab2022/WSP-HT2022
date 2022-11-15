<?php
declare(strict_types=1);
class SuperHelper {
    public $vocal="aouå";
    public function isHardVocal(string $vocal): bool {
        $this->vocal=$vocal;
        if($this->vocal=true)
        {
            return true;
        }
        else
        {
            return false;
        }

    }

    public function countString(string $sign): int {
        return 1;
    } 
}


?>
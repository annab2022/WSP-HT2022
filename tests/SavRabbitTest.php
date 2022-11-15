<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class SavRabbitTest extends TestCase {
   private $rabbit;

    protected function setUp() : void {

        $this->rabbit = new SavRabbit();

    }
    
    public function test_getRabbitFeeling_shouldReturnHappy_when_trueTrue() : void {
       
        $feeling = $this->rabbit->getRabbitFeeling(true, true);

        $this->assertEquals('happy', $feeling);

    }

    public function test_getRabbitFeeling_shouldReturnHappy_when_trueFalse() : void {
        
        $feeling = $this->rabbit->getRabbitFeeling(true, false);

        $this->assertEquals('happy', $feeling);

    }

    public function test_getRabbitFeeling_shouldReturnSad_when_falseFalse() : void {
        
        $feeling = $this->rabbit->getRabbitFeeling(false, false);

        $this->assertEquals('sad', $feeling);

    }

    public function test_getRabbitFeeling_shouldReturnAngry_when_falseTrue() : void {
        
        $feeling = $this->rabbit->getRabbitFeeling(false, true);

        $this->assertEquals('angry', $feeling);

    }

    public function test_isNumber_shouldReturnFalse_when_alphabeticalString() : void {
        
        $result = $this->rabbit->isNumber('ahsöaoisc');

        $this->assertFalse($result);

    }

    public function test_isNumber_shouldReturnTrue_when_int() : void {
        
        $result = $this->rabbit->isNumber(12345);

        $this->assertTrue($result);

    }

    public function test_isNumber_shouldReturnFalse_when_intString() : void {
        
        $result = $this->rabbit->isNumber('12345abdcs');

        $this->assertFalse($result);

    }

    public function test_isNumber_shouldReturnFalse_when_empty() : void {
        
        $result = $this->rabbit->isNumber('');

        $this->assertFalse($result);

    }


    public function test_isNumber_shouldReturnTrue_when_numericalString() : void {

        $result = $this->rabbit->isNumber('12345');

        $this->assertTrue($result);

    }

        /*
        
        $this->markTestSkipped("We don't run this"); = ska sättas högst upp i funktionen
                                                       för att den inte ska testas när 
                                                       test körs t.ex: 
        
        public function test_isNumber_shouldReturnTrue_when_numericalString() : void {
        
        $this->markTestSkipped("We don't run this");
       
        $rabbit = new SavRabbit();
       
        $result = $rabbit->isNumber('12345');

        $this->assertTrue($result);

    }                                            
                                                       


        XX bokstäver i en string -> false
        XX siffror -> true
        siffror och bokstäver i en string - false
        null - false
        siffror i en string -> true

        
        */
}

//}

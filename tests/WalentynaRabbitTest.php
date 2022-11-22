<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/*Förälder-> Barn
private  kan ej använda
protected kan använda
public kan använda, men alla andra klasser*/

class WalentynaRabbitTest extends TestCase {
    private $rabbit;
    protected function setUp() : void
    {
        $this->rabbit = new WalentynaRabbit();
    }

    public function test_getRubbitFeeling_shouldReturnHappy_when_trueFalse(): void {
        $this->markTestSkipped("Hello");

        $feeling = $this->rabbit->getRabbitFeeling(true, false);

        $this->assertEquals('happy', $feeling);
    }
    public function test_getRubbitFeeling_shouldReturnHappy_when_trueTrue(): void {
        
        $feeling = $this->rabbit->getRabbitFeeling(true, true);

        $this->assertEquals('happy', $feeling);
    }
    public function test_getRubbitFeeling_shouldReturnSad_when_falseFalse(): void {
        
        $feeling = $this->rabbit->getRabbitFeeling(false, false);

        $this->assertEquals('sad', $feeling);
    }
    public function test_getRubbitFeeling_shouldReturnAngry_when_falseTrue(): void {

        $feeling = $this->rabbit->getRabbitFeeling(false, true);

        $this->assertEquals('angry', $feeling);
        
    }

    public function test_isNumber_shoudReturnFalse_when_alphabeticalString(): void {

        $result = $this->rabbit->isNumber('sdfghjkl');

        $this->assertFalse($result);
    }

    public function test_isNumber_shoudReturnTrue_when_int(): void {

        $result = $this->rabbit->isNumber(123);

        $this->assertTrue($result);
    }
    public function test_isNumber_shoudReturnFalse_when_string(): void {
    
        $result = $this->rabbit->isNumber('123asdfg');

        $this->assertFalse($result);
    }
    public function test_isNumber_shoudReturnFalse_when_empty(): void {
        
        $result = $this->rabbit->isNumber(' ');

        $this->assertFalse($result);
}
    public function test_isNumber_shoudReturnTrue_when_intInString(): void {
    
        $result = $this->rabbit->isNumber('12345');

        $this->assertTrue($result);
    }
}

/*true/false = happy
true/true = happy
false/false = sad
false/true = angry */

/*sdfghjkl-> false
123-> true
'123asdfg' ->false
' '->false
'12345'->false */
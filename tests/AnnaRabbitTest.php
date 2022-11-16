<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

/*
Förälder -> Barn
private     kan ej använda
protected   kan använda
public      kan använda, men alla andra klasser
*/

class AnnaRabbitTest extends TestCase {

    protected function setUp() : void
    {
    }

    public function test_getRabbitFeeling_shouldReturnHappy_when_trueTrue() : void {
        $this->markTestSkipped("Do not run this right now.");
        $rabbit = new AnnaRabbit();
        $feeling = $rabbit->getRabbitFeeling(true, true);

        $this->assertEquals('happy', $feeling);
    }
    
    public function test_getRabbitFeelting_shouldReturnHappy_when_trueFalse() : void {
        $rabbit = new AnnaRabbit();
        $feeling = $rabbit->getRabbitFeeling(true, false);

        $this->assertEquals('happy', $feeling);
    }

    public function test_getRabbitFeeling_shouldReturnSad_when_falseFalse() : void {
        $rabbit = new AnnaRabbit();
        $feeling = $rabbit->getRabbitFeeling(false, false);

        $this->assertEquals('sad', $feeling);
    }

    public function test_getRabbitFeeling_shouldReturnAngry_when_falseTrue(): void {
        $rabbit = new AnnaRabbit();
        $feeling = $rabbit->getRabbitFeeling(false, true);

        $this->assertEquals('angry', $feeling);
    }

    public function test_isNumber_shouldReturnFalse_when_alphabeticalString(): void {
        $rabbit = new AnnaRabbit();

        $result = $rabbit->isNumber('ashasdj');
        
        $this->assertFalse($result);
    }
}

/*
        Hemläxa:
        - Classer, varaiabler, metoder
        - Skriv färdigt testerna:
        OK ashasdj -> false
        Ok 123 -> true
        OK '1231asdf' -> false
        OK '' -> false
        OK '12365' -> true

        Hemläxa Anna:
        - helhetsprojekt med det som vi har gjort denna terminen

    */
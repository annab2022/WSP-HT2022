<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class WalentynaRabbitTest extends TestCase {
    public function test_getRubbitFeeling_shouldReturnHappy_when_trueFalse(): void {
        $rabbit = new WalentynaRabbit();
        $feeling = $rabbit->getRabbitFeeling(true, false);

        $this->assertEquals('happy', $feeling);
    }
    public function test_getRubbitFeeling_shouldReturnHappy_when_trueTrue(): void {
        $rabbit = new WalentynaRabbit();
        $feeling = $rabbit->getRabbitFeeling(true, true);

        $this->assertEquals('happy', $feeling);
    }
    public function test_getRubbitFeeling_shouldReturnSad_when_frueFalse(): void {
        $rabbit = new WalentynaRabbit();
        $feeling = $rabbit->getRabbitFeeling(false, false);

        $this->assertEquals('sad', $feeling);
    }
    public function test_getRubbitFeeling_shouldReturnAngry_when_falseTrue(): void {
        $rabbit = new WalentynaRabbit();
        $feeling = $rabbit->getRabbitFeeling(false, true);

        $this->assertEquals('angry', $feeling);
        $this->assertTrue($feeling);
    }

    public function test_isNumber_shoudReturnFalse_when_alphabeticalString(): void {
        $rabbit = new WalentynaRabbit();
        $result = $rabbit->isNumber('sdfghjkl');

        $this->assertFalse($result);
    }

    public function test_isNumber_shoudReturnTrue_when_number(): void {
        $rabbit = new WalentynaRabbit();
        $result = $rabbit->isNumber('123');

        $this->assertTrue($result);
    }
    public function test_isNumber_shoudReturnFalse_when_string(): void {
        $rabbit = new WalentynaRabbit();
        $result = $rabbit->isNumber('123asdfg');

        $this->assertFalse($result);
    }
    public function test_isNumber_shoudReturnFalse_when_empty(): void {
        $rabbit = new WalentynaRabbit();
        $result = $rabbit->isNumber('123asdfg');

        $this->assertFalse($result);
}
    public function test_isNumber_shoudReturnFalse_when_numberInString(): void {
        $rabbit = new WalentynaRabbit();
        $result = $rabbit->isNumber('12345');

        $this->assertFalse($result);
    }
}

/*true/false = happy
true/true = happy
false/false = sad
false/true = angry */


/*sdfghjkl-> false
123-> true
'123asdfg' ->false
''->false
'12345'->false */
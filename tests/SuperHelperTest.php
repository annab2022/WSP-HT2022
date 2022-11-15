<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;


final class SuperHelperTest extends TestCase {

    private $vocal;
    private $sign;

    protected function setUp() : void {

        $this->vocal = new SuperHelper();
        $this->sign = new SuperHelper();
    }

    public function test_isHardCoval_shouldReturnTrue_when_charA() : void {
        
        $result = $this->vocal->isHardVocal('a');

        $this->assertTrue($result);

    }


    public function test_isHardCoval_shouldReturnTrue_when_charO() : void {
        
        $result = $this->vocal->isHardVocal('o');

        $this->assertTrue($result);

    }

    public function test_isHardCoval_shouldReturnTrue_when_charU() : void {
        
        $result = $this->vocal->isHardVocal('u');

        $this->assertTrue($result);

    }

    public function test_isHardCoval_shouldReturnTrue_when_charAa() : void {
        
        $result = $this->vocal->isHardVocal('å');

        $this->assertTrue($result);

    }

    public function test_isHardCoval_shouldReturnFalse_when_charE() : void {
        
        $result = $this->vocal->isHardVocal('e');

        $this->assertFalse($result);

    }

    public function test_isHardCoval_shouldReturnFalse_when_charI() : void {
        
        $result = $this->vocal->isHardVocal('i');

        $this->assertFalse($result);

    }

    public function test_isHardCoval_shouldReturnFalse_when_charY() : void {
        
        $result = $this->vocal->isHardVocal('y');

        $this->assertFalse($result);

    }

    public function test_isHardCoval_shouldReturnFalse_when_charAe() : void {
        
        $result = $this->vocal->isHardVocal('ä');

        $this->assertFalse($result);

    }


    public function test_getCountString_shouldReturn_when_string(): void {
        $this->markTestSkipped("Hello");

        $result = $this->sign->countString('ghjk');

        $this->assertEquals(4, $result);
    }
    public function test_getCountString_shouldReturn_when_emptyString(): void {

        $result = $this->sign->countString('');

        $this->assertEquals(0, $result);
    }



    
}

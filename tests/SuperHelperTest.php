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

    public function test_getCountString_shouldReturn_when_string(): void {
        $this->markTestSkipped("Hello");

        $result = $this->sign->countString('ghjk');

        $this->assertEquals(4, $result);
    }
    public function test_getCountString_shouldReturn_when_emptyString(): void {

        $result = $this->sign->countString('');

        $this->assertEquals(0, $result);
    }
    public function test_getCountString_shouldReturn_when_NULLString(): void {

        $result = $this->sign->countString('NULL');

        $this->assertEquals(NULL, $result);
    }
    public function test_getCountString_shouldReturn_when_longString(): void {

        $result = $this->sign->countString('fghjklöähjklö234567..-');

        $this->assertEquals(22, $result);
    }
}

/*' '/ 0
NULL/ 0
fghjklöähjklö234567..-/ 22*/
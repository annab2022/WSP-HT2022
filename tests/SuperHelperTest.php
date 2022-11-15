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



    
}

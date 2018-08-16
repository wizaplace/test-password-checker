<?php

namespace Tests\AppBundle\PasswordChecker;

use AppBundle\PasswordChecker\MinSizeChecker;
use PHPUnit\Framework\TestCase;

class MinSizeCheckerTest extends TestCase
{
    /**
     * @var MinSizeChecker
     */
    private $checker;

    protected function setUp()
    {
        $this->checker = new MinSizeChecker();
    }

    public function testCheckTrue()
    {
        $this->assertTrue($this->checker->check('123456'));
    }

    public function testCheckFalse()
    {
        $this->assertFalse($this->checker->check('12345'));
    }
}
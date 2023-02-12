<?php
require_once 'index.php';

class PasswordTest extends PHPUnit_Framework_TestCase
{
    public function testPassword()
    {
        $password = new Password();
        $PasswordTest = $password->generate();
        $this->assertEquals(8, strlen($PasswordTest));

        $PasswordTest = $password->generate(16, 'medium');
        $this->assertEquals(16, strlen($PasswordTest));

        $PasswordTest = $password->generate(24, 'strong');
        $this->assertEquals(24, strlen($PasswordTest));
    }

    public function testCheck()
    {
        $password = new Password('');
        $this->assertTrue($password->check(''));
        $this->assertFalse($password->check(''));
    }
}




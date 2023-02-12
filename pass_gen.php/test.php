<?php
require_once 'index.php';

class PasswordTest extends PHPUnit_Framework_TestCase
{
    public function testGenerate()
    {
        $password = new Password();
        $generatedPassword = $password->generate();
        $this->assertEquals(8, strlen($generatedPassword));

        $generatedPassword = $password->generate(16, 'medium');
        $this->assertEquals(16, strlen($generatedPassword));

        $generatedPassword = $password->generate(24, 'strong');
        $this->assertEquals(24, strlen($generatedPassword));
    }

    public function testCheck()
    {
        $password = new Password('password123');
        $this->assertTrue($password->check('password123'));
        $this->assertFalse($password->check('Password123'));
    }
}




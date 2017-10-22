<?php
require('password_strength_indicator.php');

class Password_Validator_Return_Correct_StatusTest extends \Codeception\Test\Unit
{
    /**
     * @var \
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    public function testValidateStrengthCorrectly()
    {
        $validator = new PasswordStrengthIndicator();

        $this->assertEquals(1, $validator->doValidatePassword(123));
        $this->assertEquals(2, $validator->doValidatePassword('asdf1'));
        $this->assertEquals(3, $validator->doValidatePassword('abcdefg1'));
        $this->assertEquals(4, $validator->doValidatePassword('abcdefg1@'));
    }
}

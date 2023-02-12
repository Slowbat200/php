<?php
class Password
{
    private $password;

    public function __construct($password = null)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function generate($length = 8, $complexity = 'weak')
    {
        switch ($complexity) {
            case 'strong':
                $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+-=';
                break;
            case 'medium':
                $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
                break;
            default:
                $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
                break;
        }

        $password = '';
        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[rand(0, strlen($characters) - 1)];
        }

        $this->password = $password;
        return $this->password;
    }

    public function check($password)
    {
        return $this->password === $password;
    }
}

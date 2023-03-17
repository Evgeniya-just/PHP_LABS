<?php
class WrongLoginException extends Exception
{
}

class WrongPasswordException extends Exception
{
    public function __construct($password)
    {
        parent::__construct($password);
    }
}

class autariotation
{
    public function __construct()
    {
    }
    public static function auto(string $login, string $password, string $confirmPaswword)
    {
        try {
            if (!preg_match("/^[0-9a-z]+$/i", $login) || strlen($login) > 19) {
                throw new WrongLoginException(' Wrong login exeption');
            }

            if (!preg_match("/^[0-9a-z]+$/i", $password) || strlen($password) > 19 || $password != $confirmPaswword) {
                throw new WrongPasswordException(' Wrong password exeption');
            }
        } catch (WrongLoginException $e) {
            echo 'WrongLoginException: ' . $e->getMessage();
            return false;
        } catch (WrongPasswordException $e) {
            echo 'WrongPasswordException: ' . $e->getMessage();
            return false;
        }
        return true;
    }
}
autariotation::auto('edrfh','gxt3','trty65');
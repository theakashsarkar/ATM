<?php

namespace App\Http\Controllers;
$registrat = new RegistratController();
class Auth
{

    public static function attempt($mobileNo, $password): int
    {
        if ($mobileNo == '01828527818' && $password == 123456789)
        {
            return 1;
        }
        return 0;
    }
}

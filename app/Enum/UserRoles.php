<?php

namespace App\Enum;

enum UserRoles: string
{
    case Admin = "admin";
    case Teammates = "teammates";
    case Patient = "patient";

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}

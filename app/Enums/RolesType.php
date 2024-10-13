<?php

namespace App\Enums;

enum RolesType: string
{
    case admin = 'admin';
    case user = 'user';

    public static function getValues(): array
    {
        return [
            self::admin->value,
            self::user->value,
        ];
    }
}

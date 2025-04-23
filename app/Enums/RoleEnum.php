<?php

namespace App\Enums;

enum RoleEnum: string
{
    case admin = 'admin';
    case owner = 'owner';
    case artist = 'artist';
}

<?php

namespace App\Enums;

enum RoleEnum: string
{
    case Admin = 'admin';
    case Owner = 'owner';
    case Artist = 'artist';
}

<?php

namespace App\Enums;

enum UserType: string
{
    case Admin = 'admin';
    case Tenant = 'tenant';
}

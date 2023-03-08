<?php

namespace App\Config;

enum Roles: string
{
    case Notary = "ROLE_NOTARY";
    case Partner = "ROLE_PARTNER";
    case Admin = "ROLE_ADMIN";
}
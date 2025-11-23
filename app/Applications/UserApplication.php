<?php

namespace App\Applications;

use App\Domains\UserDomain;
use App\Models\User;

class UserApplication
{
    public static function create(array $data): array
    {
        return UserDomain::create($data);
    }

    public static function login(array $credentials): array
    {
        return UserDomain::login($credentials);
    }

    public static function logout(User $user): void
    {
        UserDomain::logout($user);
    }
}

<?php

namespace App\Applications;

use App\Models\Subject;
use App\Domains\SubjectDomain;

class SubjectApplication
{
    public static function create($data): Subject
    {
        return SubjectDomain::create($data);
    }

    public static function all(): Collection
    {
        return SubjectDomain::all();
    }
}
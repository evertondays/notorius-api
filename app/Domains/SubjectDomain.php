<?php

namespace App\Domains;

use App\Models\Subject;

class SubjectDomain
{
    public static function create($data): Subject
    {
        $data['started_at'] = now();
        return Subject::create($data);
    }

    public static function all(): Collection
    {
        return Subject::all();
    }
}
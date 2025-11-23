<?php

namespace App\Domains;

use Illuminate\Support\Facades\Auth;
use App\Models\Subject;

class SubjectDomain
{
    public static function getById(int $id): Subject
    {
        return Subject::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();
    }

    public static function create($data): Subject
    {
        $data['user_id'] = Auth::id();
        $data['started_at'] = now();
        return Subject::create($data);
    }

    public static function all(): Collection
    {
        return Subject::all();
    }
}
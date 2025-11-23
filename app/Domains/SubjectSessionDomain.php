<?php

namespace App\Domains;

use App\Models\SubjectSession;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class SubjectSessionDomain
{
    public static function start(array $data, Subject $subject): SubjectSession
    {
        $data['started_at'] = now();
        $data['user_id'] = Auth::id();
        $data['subject_id'] = $subject->id;

        return SubjectSession::create($data);
    }

    public static function finish(int $subjectId, int $sessionId, array $data): void
    {
        $data['started_at'] = now();
        SubjectSession::where('user_id', Auth::id())
            ->where('id', $sessionId)
            ->where('subject_id', $subjectId)
            ->whereNull('finished_at')
            ->first()
            ->update(['finished_at' => now(), 'duration' => $data['duration']]);
    }

    public static function list(int $subjectId): Collection
    {
        return SubjectSession::where('user_id', Auth::id())
            ->where('subject_id', $subjectId)
            ->get();
    }
}
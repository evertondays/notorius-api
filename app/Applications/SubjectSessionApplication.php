<?php

namespace App\Applications;

use App\Domains\SubjectSessionDomain;
use App\Domains\SubjectDomain;
use App\Models\User;

class SubjectSessionApplication
{
    public static function start(int $subjectId, array $data): array
    {
        $subject = SubjectDomain::getById($subjectId);
        return SubjectSessionDomain::start($data, $subject)->toArray();
    }

    public static function finish(int $subjectId, int $sessionId, array $data): void
    {
        $subject = SubjectDomain::getById($subjectId);
        SubjectSessionDomain::finish($subject->id, $sessionId, $data);
    }

    public static function list(int $subjectId): array
    {
        return SubjectSessionDomain::list($subjectId)->toArray();
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\FinishSubjectSessionRequest;
use App\Applications\SubjectSessionApplication;
use Illuminate\Http\Request;

class SubjectSessionController extends Controller
{
    public function start(Request $request, int $subjectId)
    {
        $data = SubjectSessionApplication::start($subjectId, $request->all());
        return response()->json($data, 201);
    }

    public function finish(FinishSubjectSessionRequest $request, int $subjectId, int $sessionId)
    {
        $data = SubjectSessionApplication::finish($subjectId, $sessionId, $request->validated());
        return response()->json($data);
    }

    public function list(Request $request, int $subjectId)
    {
        $data = SubjectSessionApplication::list($subjectId);
        return response()->json($data);
    }
}

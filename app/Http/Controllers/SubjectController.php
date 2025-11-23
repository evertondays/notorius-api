<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubjectRequest;
use App\Applications\SubjectApplication;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function store(StoreSubjectRequest $request)
    {
        $subject = SubjectApplication::create($request->validated());
        return response()->json($subject, 201);
    }

    public function index()
    {
        return response()->json(SubjectApplication::all());
    }
}

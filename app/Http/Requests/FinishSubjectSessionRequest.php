<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FinishSubjectSessionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'duration' => 'required|integer'
        ];
    }
}

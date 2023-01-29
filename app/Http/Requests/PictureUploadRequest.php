<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PictureUploadRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'imatge' => ['required', 'string', 'max:255'],
            'year' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PictureUploadRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'picture' => ['required', 'file','max:2000'],
            'latitude' => ['required'],
            'longitude' => ['required'],
            'date' => ['required', 'date'],
            'name' => ['nullable', 'string', 'min:2', 'max:255'],
        ];
    }
}

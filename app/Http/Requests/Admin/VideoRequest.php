<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class VideoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Authorization will be handled in the controller
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'video_id' => 'required|string|max:255',
            'type' => 'nullable|string|max:50',
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'video_id.required' => 'The video ID field is required.',
            'video_id.string' => 'The video ID must be a string.',
            'video_id.max' => 'The video ID may not be greater than 255 characters.',
            'type.string' => 'The type must be a string.',
            'type.max' => 'The type may not be greater than 50 characters.',
        ];
    }
}

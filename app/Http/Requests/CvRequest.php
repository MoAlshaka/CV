<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CvRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'birthday' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'eduction' => 'required|string|max:255',
            'place' => 'required|string|max:255',
            'start_day' => 'required|string|max:255',
            'end_day' => 'required|string|max:255',
            'courses' => 'required|string|max:255',
            'language' => 'required|string|max:255',
            'marital_status' => 'required|string|max:255',
            'military_situation' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'communication' => 'required|string|max:255',
            'image' => 'required|file|mimes:jpg,png,pdf|max:2048'
        ];
    }
}

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
            'date' => 'required|date',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'areaOfStudy' => 'required|string|max:255',
            'grade' => 'required|string|max:255',
            'startEducationDate' => 'required|date',
            'endEducationDate' => 'required|date',
            'companyName' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'startDate' => 'required|date',
            'endDate' => 'required|date',
            'skill' => 'required|string|max:255',
            'langName' => 'required|string|max:255',
            'langLvl' => 'required|string|max:255',
            'martialStatus' => 'required|string|max:255',
            'militaryStatus' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'comment' => 'required|string|max:255',
            'image' => 'required|file|mimes:jpg,png,pdf|max:2048'
        ];
    }
}

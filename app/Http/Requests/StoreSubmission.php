<?php

namespace App\Http\Requests;

use App\Submission;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreSubmission extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:5',
            'gender' => [
                'required',
                'string',
                Rule::in(Submission::GENDER_MALE, Submission::GENDER_FEMALE)
            ],
            'date_of_birth' => 'required|date_format:Y-m-d',
            'residence' => 'required|string|min:5',
            'nationality' => 'required|string|min:5',
            'marital_status' => [
                'required',
                'string',
                Rule::in(Submission::STATUS_SINGLE, Submission::STATUS_MARRIED, Submission::STATUS_UNAVAILABLE)
            ],
            'major' => 'required|string|min:5',
            'degree' => 'required|string|min:5',
            'university' => 'required|string|min:5',
            'years_of_experience' => 'required|string|min:5',
            'employment_status' => [
                'required',
                'string',
                Rule::in(Submission::EMPLOYED, Submission::UNEMPLOYED)
            ],
            'expected_salary' => 'required|string|min:3',
            'phone_number' => 'required|string|min:7',
            'email' => 'required|email',
            'visa_status' => [
                'required',
                'string',
                Rule::in(Submission::VISA_VISIT, Submission::VISA_RESIDENCE, Submission::VISA_EMPLOYMENT)
            ]
        ];
    }
}

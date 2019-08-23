<?php

namespace App\Http\Requests;

use App\Submission;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSubmission extends FormRequest
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
            'name' => 'sometimes|string|min:5',
            'gender' => [
                'sometimes',
                'string',
                Rule::in(Submission::GENDER_MALE, Submission::GENDER_FEMALE)
            ],
            'date_of_birth' => 'sometimes|date_format:Y-m-d',
            'residence' => 'sometimes|string|min:5',
            'nationality' => 'sometimes|string|min:5',
            'marital_status' => [
                'sometimes',
                'string',
                Rule::in(Submission::STATUS_SINGLE, Submission::STATUS_MARRIED, Submission::STATUS_UNAVAILABLE)
            ],
            'major' => 'sometimes|string|min:5',
            'degree' => 'sometimes|string|min:5',
            'university' => 'sometimes|string|min:5',
            'years_of_experience' => 'sometimes|string|min:5',
            'employment_status' => [
                'sometimes',
                'string',
                Rule::in(Submission::EMPLOYED, Submission::UNEMPLOYED)
            ],
            'expected_salary' => 'sometimes|string',
            'phone_number' => 'sometimes|string|min:7',
            'email' => 'sometimes|email',
            'visa_status' => [
                'sometimes',
                'string',
                Rule::in(Submission::VISA_VISIT, Submission::VISA_RESIDENCE, Submission::VISA_EMPLOYMENT)
            ]
        ];
    }
}

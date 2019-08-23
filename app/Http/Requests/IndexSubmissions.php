<?php

namespace App\Http\Requests;

use App\Submission;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class IndexSubmissions extends FormRequest
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
            'gender' => [
                'nullable',
                'string',
                Rule::in(Submission::GENDER_MALE, Submission::GENDER_FEMALE)
            ],
            'residence' => 'nullable|string',
            'nationality' => 'nullable|string',
            'employment_status' => [
                'nullable',
                'string',
                Rule::in(Submission::EMPLOYED, Submission::UNEMPLOYED)
            ],
            'visa_status' => [
                'nullable',
                'string',
                Rule::in(Submission::VISA_VISIT, Submission::VISA_RESIDENCE, Submission::VISA_EMPLOYMENT)
            ]
        ];
    }
}

<?php

namespace App\Transformers;

use App\Submission;
use League\Fractal\TransformerAbstract;

class SubmissionTransformer extends TransformerAbstract
{
    /**
     * Turn this item object into a generic array
     *
     * @return array
     */
    public function transform(Submission $submission)
    {
        return [
            'id' => $submission->id,
            'name' => $submission->name,
            'gender' => $submission->gender,
            'date_of_birth' => $submission->date_of_birth,
            'residence' => $submission->residence,
            'nationality' => $submission->nationality,
            'marital_status' => $submission->marital_status,
            'major' => $submission->major,
            'degree' => $submission->degree,
            'university' => $submission->university,
            'years_of_experience' => $submission->years_of_experience,
            'employment_status' => $submission->employment_status,
            'expected_salary' => $submission->expected_salary,
            'phone_number' => $submission->phone_number,
            'email' => $submission->email,
            'visa_status' => $submission->visa_status,
            'bio' => $submission->bio
        ];
    }
}

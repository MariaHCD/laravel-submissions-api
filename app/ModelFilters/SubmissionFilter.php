<?php

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class SubmissionFilter extends ModelFilter
{
    public function gender($gender)
    {
        return $this->where('gender', $gender);
    }

    public function residence($residence)
    {
        return $this->where('residence', $residence);
    }

    public function nationality($nationality)
    {
        return $this->where('nationality', $nationality);
    }

    public function employmentStatus($status)
    {
        return $this->where('employment_status', $status);
    }

    public function visaStatus($status)
    {
        return $this->where('visa_status', $status);
    }
}

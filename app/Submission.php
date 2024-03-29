<?php

namespace App;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Submission extends Model
{
    use Filterable, SoftDeletes;

    const GENDER_MALE = 'male';
    const GENDER_FEMALE = 'female';

    const STATUS_SINGLE = 'single';
    const STATUS_MARRIED = 'married';
    const STATUS_UNAVAILABLE = 'unavailable';

    const EMPLOYED = 'employed';
    const UNEMPLOYED = 'unemployed';

    const VISA_RESIDENCE = 'residence';
    const VISA_EMPLOYMENT = 'employment';
    const VISA_VISIT = 'visit';

    /**
     * Attributes that are not mass assignable
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];
}

<?php

namespace App\Models\Job;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'Job';
    protected $fillable = [
        'id',
        'job_title',
        'job_region',
        'job_type',
        'category',
        'company',
        'vacancy',
        'expirience',
        'salary',
        'gender', 
        'application_deadline',
        'jobdescription',
        'responsibilities',
        'education_expirience',
        'otherbenefits',
        'image',
    ];


    public $timestamps = true;
}

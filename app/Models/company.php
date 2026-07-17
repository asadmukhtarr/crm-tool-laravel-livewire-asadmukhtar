<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    // 
    protected $fillable = [
        'company_name',
        'company_registration_no',
        'company_email',
        'company_phone',
        'company_address',
        'company_city',
        'company_state',
        'company_zip',
        'company_country',
        'company_website',
        'company_industry',
        'company_size',
        'company_rating',
        'company_founded_date',
        'company_owner',
        'company_tags',
        'company_notes',
    ];
}

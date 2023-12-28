<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'school_name',
        'school_phone',
        'school_email',
        'school_logo_url',
        'school_address',
        'school_about'
    ];
}

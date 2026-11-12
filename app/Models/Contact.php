<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'phone_number',
        'email',
        'birthday',
        'gender',
        'street',
        'barangay',
        'city_municipality',
        'province',
        'zip_code',
    ];
}
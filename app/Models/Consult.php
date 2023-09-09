<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consult extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname',
        'lastname',
        'phonenumber',
        'email_id',
        'aadharnumber',
        'address',
        'category',
        'consultant',
        'payment_type',
        'payment_id',
        'payment_status',
        'payment_date',
        'result',
        'date',
        'time',
        'otp_active',
    
    ];
}

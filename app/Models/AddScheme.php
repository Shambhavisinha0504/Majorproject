<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddScheme extends Model
{
    use HasFactory;
    protected $fillable=['scheme_name','scheme_description','scheme_start_date','scheme_end_date'];
}

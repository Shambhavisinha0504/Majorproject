<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmitSchemeForm extends Model
{
    use HasFactory;
    protected $fillable=[
                         'username','password','confirmPassword','first_name','last_name','father_name','mother_name',
                         'phone','email','dob','gender','annual_income','street','city','dist','state','countary','zip',
                         'adhar_number','category','account_number','caccount_number','ifsc','account_holder_name','nick_name',
                         'scheme_type','institution','district','tahsil','mohalla','ward_number','plot_number',
                         'plot_facing','plot_area','khatiyan_number','latitude','longitude','area_detail','aadhar_card',
                         'residential','cast','income','voter_id','vanshavali','khatiyan','birth_certificate','photo','status'
                        ];
}

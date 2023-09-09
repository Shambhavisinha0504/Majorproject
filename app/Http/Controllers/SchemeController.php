<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\AddScheme;
use \App\Models\SubmitSchemeForm;


class SchemeController extends Controller
{
    public function scheme()
    {
        $scheme=AddScheme::all();
        return view('scheme',compact('scheme'));
        //return view('scheme');
    }
    public function listScheme()
    {
        $scheme=AddScheme::all();
        return view('listScheme',compact('scheme'));
        //return view('scheme');
    }
    
    public function schemeRegister()
    {
        return view('schemeRegister');
    }
    public function schemeMultistepform()
    {
        return view('schemeMultistepform');
    }
    public function viewAllScheme()
    {
        $list=AddScheme::get();
        return view('viewAllScheme',compact('list'));
    }


    public function saveSubmitedSchemeForm(Request $request)
    {

        $schemeFormSubmit=new SubmitSchemeForm();
        $schemeFormSubmit->username=$request->username;
        $schemeFormSubmit->password=$request->password;
        $schemeFormSubmit->confirmPassword=$request->confirmPassword;
        $schemeFormSubmit->first_name=$request->first_name;
        $schemeFormSubmit->last_name=$request->last_name;
        $schemeFormSubmit->father_name=$request->father_name;
        $schemeFormSubmit->mother_name=$request->mother_name;
        $schemeFormSubmit->phone=$request->phone;
        $schemeFormSubmit->email=$request->email;
        $schemeFormSubmit->dob=$request->dob;
        $schemeFormSubmit->gender=$request->gender;
        $schemeFormSubmit->annual_income=$request->annual_income;
        $schemeFormSubmit->street=$request->street;
        $schemeFormSubmit->city=$request->city;
        $schemeFormSubmit->dist=$request->dist;
        $schemeFormSubmit->state=$request->state;
        $schemeFormSubmit->countary=$request->countary;
        $schemeFormSubmit->zip=$request->zip;
        $schemeFormSubmit->adhar_number=$request->adhar_number;
        $schemeFormSubmit->category=$request->category; 
        $schemeFormSubmit->account_number=$request->account_number;
        $schemeFormSubmit->caccount_number=$request->caccount_number;
        $schemeFormSubmit->ifsc=$request->ifsc;
        $schemeFormSubmit->account_holder_name=$request->account_holder_name;
        $schemeFormSubmit->nick_name=$request->nick_name; 
        $schemeFormSubmit->scheme_type=$request->scheme_type;
        $schemeFormSubmit->institution=$request->institution;
        $schemeFormSubmit->district=$request->district;
        $schemeFormSubmit->tahsil=$request->tahsil;
        $schemeFormSubmit->mohalla=$request->mohalla;
        $schemeFormSubmit->ward_number=$request->ward_number;
        $schemeFormSubmit->plot_number=$request->plot_number; 
        $schemeFormSubmit->plot_facing=$request->plot_facing;
        $schemeFormSubmit->plot_area=$request->plot_area;
        $schemeFormSubmit->khatiyan_number=$request->khatiyan_number;
        $schemeFormSubmit->latitude=$request->latitude;
        $schemeFormSubmit->longitude=$request->longitude;
        $schemeFormSubmit->area_detail=$request->area_detail;
        $schemeFormSubmit->aadhar_card=$request->aadhar_card;
        $schemeFormSubmit->residential=$request->residential;  
        $schemeFormSubmit->cast=$request->cast;
        $schemeFormSubmit->income=$request->income;
        $schemeFormSubmit->voter_id=$request->voter_id;
        $schemeFormSubmit->vanshavali=$request->vanshavali;
        $schemeFormSubmit->khatiyan=$request->khatiyan;
        $schemeFormSubmit->birth_certificate=$request->birth_certificate;
        $schemeFormSubmit->photo=$request->photo;
       
        $schemeFormSubmit->save();
        return redirect('schemeFormList')->withSuccess('Scheme added successfully.');
        
    }

    public function schemeFormList()
    {
        $list=SubmitSchemeForm::get();
        return view('schemeFormList',compact('list'));
    }
    public function schemeDescription()
    {
        return view('schemeDescription');
    }
   
   
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Consult;

use App\Models\AddScheme;
use \App\Models\SubmitSchemeForm;

class AdminController extends Controller
{
    public function index()
        {
            return view('admin.login');
        }
        public function adminRegister()
        {
            return view('admin.register');
        }
        public function dashboard()
        {
            return view('admin.dashboard');
        }
        public function users()
        {
            $data=User::get();
            return view('admin.users',compact('data'));
        }
        public function edituser($id)
        {
            $data=User::where('id',$id)->first();
            return view('admin.edituser',compact('data'));   
             }
            public function updateuser(Request $request)
            {
               //dd($request->all());  
               $request->validate([
                'name'=>'required'
               ]);
               $id=$request->id;
               $name=$request->name;
               
               User::where('id',$id)->update([
                  'name'=> $name

               ]);
               // Assuming you have a variable called $object that may be null

               return redirect('admin/edituser/.$id')->withSuccess('User details updated successfully');
            }
        
            /* Cunsultancy Section Start */
             public function consult()
             {
                $data=Consult::get();
                return view('admin.consults',compact('data'));
             }
            

    public function saveScheme(Request $request)
    {
        $schemeAdd=new AddScheme();
        $schemeAdd->scheme_name=$request->scheme_name;
        $schemeAdd->scheme_description=$request->scheme_description;
        $schemeAdd->scheme_start_date=$request->scheme_start_date;
        $schemeAdd->scheme_end_date=$request->scheme_end_date;
        $schemeAdd->save();
        return redirect('schemeList')->withSuccess('Scheme added successfully.');
    }

    public function addScheme()
    {
        return view('admin.addScheme');
    }
    public function schemeList()
    {
        $list=AddScheme::get();
        return view('admin.schemeList',compact('list'));
        //return $list;
        //return view('listScheme');
    }
    public function updateScheme($id)
    {
        $list=AddScheme::where('id','=',$id)->first();
        return view('admin.updateScheme',compact('list'));
       // return view('updateScheme');
    }
    public function updatedScheme(Request $request)
    {
        $id=$request->id;
        $schemename=$request->scheme_name;
        $schemedescription=$request->scheme_description;
        $schemestartdate=$request->scheme_start_date;
        $schemeenddate=$request->scheme_end_date;

        AddScheme::where('id','=',$id)->update(
        [
            'scheme_name'=>$schemename,
            'scheme_description'=>$schemedescription,
            'scheme_start_date'=>$schemestartdate,
            'scheme_end_date'=>$schemeenddate,
        ]
       );
       return redirect('schemeList')->withSuccess('Scheme updated successfully.');
       
    }
    public function deleteScheme($id)
    {
        $list=AddScheme::where('id','=',$id)->delete();
        return redirect('schemeList')->withSuccess('Scheme deleted successfully.');

    }
    public function farmersSubmitedFormList()
    {
        $list=SubmitSchemeForm::get();
        return view('admin.farmersSubmitedFormList',compact('list'));
        //return view('admin.farmersSubmitedFormList');
    }
    public function updateStatusAccepted($id)
    {
       // echo $id; exit();
        SubmitSchemeForm::where('id','=',$id)->update(
        [
            'status'=>'ACCEPTED',
        ]
       );
       return redirect('schemeFormList')->withSuccess('Status updated successfully.');
    }
    public function updateStatusRejected($id)
    {
       // echo $id; exit();
        SubmitSchemeForm::where('id','=',$id)->update(
        [
            'status'=>'REJECTED',
        ]
       );
       return redirect('schemeFormList')->withSuccess('Status updated successfully.');
    }

    /* Scheme Section End */
   

}

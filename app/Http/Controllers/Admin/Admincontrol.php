<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class Admincontrol extends Controller
{
    public function updateProduct(Request $request)
    {
        //dd($request->all());
        $request->validate(
            [
                'name'=>'required',
               'email'=>'required|email|max:50|unique:users',
               'password'=>'required|min:6|same:confirm_password',
                //'confirm_password'=>'required|same:password',
            ]
            );
            $id = $request->id;
            $name = $request->name;
           $email = $request->email;
          $password = $request->password; 
            User::where('id',$id)->update([
                'name'=> $name,
                 'email'=> $email ,                
                'password'=>Hash::make($request->password),
                
            ]);
            return redirect('admin/edit-user/'.$id)->withSuccess(' User details updated successfully.');
    }

    public function products(){
        $data = Product::get();
        return  view('admin.products',compact('data'));
    }
    public function add_product(){
        $data = Product::get();
        return  view('admin.add_product');
    }
       
    public function saveProduct(Request $request){
        $photoName = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('uploads/products'), $photoName);
         Product::create([ 
            'name'=>$request->name,
            'category'=>$request->category,
            'description'=>$request->description,
            'photo'=>$photoName,
            'price'=>$request->price,
            'seller'=>$request->seller,
         ]);
         return redirect('admin/add-product')->withSuccess('Product added successfully');
    }
}

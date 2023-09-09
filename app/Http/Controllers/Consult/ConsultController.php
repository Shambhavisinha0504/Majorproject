<?php

namespace App\Http\Controllers\Consult;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use session;
use Illuminate\Http\Request;
use App\Models\Consult;
use App\Models\consultant;
use App\Models\category;
use App\Models\slotdate;
use App\Models\slottime;
use App\Models\UserOtpVerify;
use Hash;
use Mail;
use Str;
use DB;


class ConsultController extends Controller
{
    public function weather(){
        return view('weather');
    }
    public function consult(){
        return view('consultancy');
    } 
    public function form(Request $request){
        $categories=category::get(['category_id','category_name']);
        $slotdates= slotdate::get(['slot_id','slot_date']);
        return view('form',compact('categories','slotdates'));

       
        //return view('form',compact('slotdates'));
    }
        public function getResult(Request $request){
            $data['consultant']=consultant::where('category_id',$request->category_id)->get(['consultant_id','consultant_name']);
            return response()->json($data);
        }
        public function getTime(Request $request)
        {
            $data['slottimes']=slottime::where('slot_id',$request->slot_id)->get(['time_id','time_name']);
            return response()->json($data);
            }
        
    
    
    public function saveform(Request $request){
      //dd($request->all());
      $request->validate(
        [
           'firstname'=>'required',
           'lastname'=>'required',
           'phonenumber'=>'required',
           'email_id'=>'required|email|max:50|unique:consults',
           'aadharnumber'=>'required|numeric',
          'category'=>'required',
           'consultant'=>'required',
           'date'=>'required',
           'time'=>'required'
          
        ]
    );
   

     $data=$request->all();
     $createuser=$this->create($data);
     $token=rand(1111,9999);

     UserOtpVerify::create([
        'user_id'=> $createuser->id,
        'token'=>$token
     ]);

     Mail::send('emails.otpEmail',['token'=>$token],function($message) use($request){
        $message->to($request->email_id);
        $message->subject('Activation account email from Digitalfarm');
        }
);
     return redirect('form')->withSuccess('Your details are submitted successfully. Please check your account for verification!');
     }
     public function create(array $data )
{ 
    $random=rand(00000000,99999999);
  return Consult::create([
  'firstname' =>$data['firstname'],
  'lastname' => $data['lastname'],
  'phonenumber'=>$data['phonenumber'],
  'email_id'=> $data['email_id'],
  'aadharnumber'=> $data['aadharnumber'],
  'address'=>$data['address'],
  'category'=>$data['category'],
  'consultant'=>$data['consultant'],
  'payment_type'=>$data['payment_type'],
  'result'=>$data['result'],
  'date'=>$data['date'],
  'time'=>$data['time'],
  
  ]);
    
}

    public function FormVerify($token)
{
    return view('options',['token'=>$token]);

}  
    public function books()
    {
        return view('slotbooking');
    }
    public function product()
    {
        return view('product');
    }
    public function options()
    {
        return view('options');
    }
    public function payment($id)
    {
        $consults=DB::table('consults')->where('id','=',$id)->first();
      return view('paymentconsult',compact('consults','consults'));
     //  return view('paymentconsult');
    }
    public function PaymentSave(Request $request)
    {  
        //dd($request->all());
     /*   $payment_id = $request->payment_id;
        $card_number=$request->card_number;
        $expire_date=$request->expire_date;
        $cvv=$request->cvv;
        $validatePayment = DB::table('card_details')->where('card_number','=',$card_number)->where('expire_date','=',$expire_date)->where('cvv','=',$cvv)->first();
       // print_r($validatePayment);exit;
       if($validatePayment->card_number!='') {
        $paymentupdate = DB::table('consults')->where('payment_id','=',$payment_id)->update(
            [
                'payment_status' => 'Complete',
                'payment_date' => date('y-m-d')
        
            ]
        );
        return redirect('paymentconsult/.$id')->withSuccess("Your Payment Is Successfull");
    } else {
        return redirect('paymentconsult/'.$id)->withSuccess("Retry!");
    }*/
}
     }
    
    
  

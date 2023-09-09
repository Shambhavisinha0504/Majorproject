@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
  <link rel="stylesheet" href="otpcss/style.css" />
 
</head>
<body>
  

<section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-50">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="https://www.theindiaforum.in/sites/default/files/field/image/2022/06/21/ramkumar-radhakrishnan-wikimedia-1622193304-1622193304.jpeg"
                alt="Sample photo" class="img-fluid" style="border-top-left-radius:.25rem; border-bottom-left-radius: .25rem; height:900px;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-blue">
               <center> <h3 class="mb-5 text-uppercase">Email OTP VERIFICATION</h3></center>

               <div class="d-flex justify-content-center align-items-center container">
                <div class="card py-5 px-3">
                  <form method="post" action="{{ url('save') }}" >
                    
                    <h5>Enter the one time password sent in your Email Id example@gmail.com</h5><br>
                  
                         <input type="text" name="Otp" class="input" maxlength="4">
                 <div class="form_button">
                   <center> <input type="submit" class="btn btn-primary btn-lg" name="submit" value="Verify OTP"> </center><br>
                    <div>
                 <center> <button class="btn btn-primary btn-lg">Resend OTP</button></center>
                    
                 
                  </form>
                </div>
            
                </div>
            </div>
           


                
              
</section>
</body>
</html>
@endsection
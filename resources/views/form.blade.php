@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
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
                                    alt="Sample photo" class="img-fluid"
                                    style="border-top-left-radius:.25rem; border-bottom-left-radius: .25rem; height:1200px;" />
                            </div>

                            <div class="col-xl-6">
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase">Booking Form</h3>
                                    @if(Session::has('success'))
                                    <div class="alert alert-success"> {{Session::get('success')}}</div>
                                 @endif  
                                    <form method="post" action="{{url('save-form')}}" enctype="multipart/form-data">
                                        @csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" name="firstname" id="form3Example1m"
                                                    class="form-control form-control-lg" />
                                                    @error('firstname')
                  <div class="alert alert-danger" role="alert"> {{$message}}</div>
                  @enderror
                                                <label class="form-label" for="form3Example1m">First name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" name="lastname" id="form3Example1n"
                                                    class="form-control form-control-lg" />
                                                    @error('lastname')
                                                    <div class="alert alert-danger" role="alert"> {{$message}}</div>
                                                    @enderror
                                                <label class="form-label" for="form3Example1n">Last name</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" name="phonenumber" id="form3Example1m1" maxlength="10"  ;
                                                    class="form-control form-control-lg" />
                                                    @error('phonenumber')
                                                    <div class="alert alert-danger" role="alert"> {{$message}}</div>
                                                    @enderror
                                                <label class="form-label" for="form3Example1m1">Phone Number</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" id="form3Example1n1"
                                                    name="email_id" class="form-control form-control-lg" />
                                                    @error('email_id')
                                                    <div class="alert alert-danger" role="alert"> {{$message}}</div>
                                                    @enderror
                                                <label class="form-label" for="form3Example1n1">Email Id</label>
                                            </div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example8" name="aadharnumber" class="form-control form-control-lg" />
                                            @error('aadharnumber')
                                            <div class="alert alert-danger" role="alert"> {{$message}}</div>
                                            @enderror
                                            <label class="form-label" for="form3Example8">Aadhar Number</label>
                                        </div>



                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example8" name="address" class="form-control form-control-lg" />
                                            @error('address')
                                            <div class="alert alert-danger" role="alert"> {{$message}}</div>
                                            @enderror
                                            <label class="form-label" for="form3Example8">Address</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <select class="form-control form-control-lg" id="category" name="category">
                                                <option value="">Choose consulting Option</option>
                                               @foreach($categories as $category)
                                                <option value="{{$category->category_id}}">{{$category->category_name}}</option>
                                                @endforeach
                                            </select>
                                            <label class="form-label" for="form3Example90">Select Booking Category</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <select
                                                class="form-control form-control-lg" id="consultant" name="consultant">
                                                <option value="">Select consultant</option>
                                              
                                            </select>
                                            <label class="form-label" for="form3Example90">Choose Consultant</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                        <select class="form-control form-control-lg" name="date" id="date_list">
                                        <option value="">Select date Slot</option>
                                        @foreach($slotdates as $slotdate)
                                        <option value="{{$slotdate->slot_id}}">{{$slotdate->slot_date}}</option>
                                        @endforeach
                                        </select>
                                      
                                                            <label class="form-label" for="form3Example90">Select date slot</label>
                                                        </div>
                                                    </select>
                                                    <div class="form-outline mb-4">
                                                    <select
                                                    class="form-control form-control-lg" name="time" id="time_list">
                                                        <option value="">Select time Slot</option>
                                                     
                                                                            </select>
                                                                            <label class="form-label" for="form3Example90">Select time slot</label>
                                                                        </div>
                                                                    </select>
                                        <div class="row">
                                          <div class="col-md-6 mb-4">
                        
                                            <select class="select" name="payment_type" id="payment-type">
                                              <option value="1">Consulting Mode</option>
                                              <option value="online">Online</option>
                                              <option value="offline">Offline</option>
                                            
                                            </select>
                        
                                          </div>
                                          <div class="col-md-6 mb-4">
                        
                                            <div class="form-outline">
                                              <input type="text" 
                                                  class="form-control form-control-lg" name="result" id="result" readonly />
                                              <label class="form-label" for="form3Example1n1">Total Payable Amount</label>
                                          </div>
                        
                                          </div>
                                        
                                        <div class="form-outline mb-4">
 

                                            <div class="d-flex justify-content-end pt-3">
                                               <a href="{{url('form')}}"> <button type="button" class="btn btn-light btn-lg">Reset all</button></a>
                                               <input type="submit" class="btn btn-primary btn-lg" name="submit" value="submit">
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    <script>
     const paymentTypeDropdown = document.getElementById('payment-type');
    const resultInput = document.getElementById('result');

    paymentTypeDropdown.addEventListener('change', function() {
      const selectedPaymentType = paymentTypeDropdown.value;
      const resultValue = selectedPaymentType === 'online' ? 500 : 1000;
      resultInput.value = resultValue;
    });
      
    $(document).ready(function(){
    //alert('hello');
    $('#category').on('change',function()
    {
      //alert('country selected');
      var IdCategory = this.value;
      $('#consultant').html("");
      $.ajax({
         
        url:"{{url('get-consultants')}}",
        type:"POST",
        data:{
          category_id:IdCategory,
          _token:'{{csrf_token()}}'

        },
        dataType:'json',
        success: function(result) {
          //alert('result');
          $('#consultant').html('<option value="">Select Consultant</option>');
          $.each(result.consultant,function(key,value){
            //alert('chirag'+value.consultant_name);
            $('#consultant').append('<option value="'+ value.consultant_id +'">'+ value.consultant_name +'</option>');
          });
        }
      });
    });
  });

  $(document).ready(function(){
    //alert('hello');
    $('#date_list').on('change',function()
    {
      //alert('country selected');
      var IdDates = this.value;
      $('#time_list').html("");
      $.ajax({
         
        url:"{{url('get-times')}}",
        type:"POST",
        data:{
          slot_id:IdDates,
          _token:'{{csrf_token()}}'

        },
        dataType:'json',
        success: function(result) {
          //alert('result');
          $('#time_list').html('<option value="">Select Time</option>');
          $.each(result.slottimes,function(key,value){
            $('#time_list').append('<option value="'+ value.time_id +'">'+ value.time_name +'</option>');
          });
        }
      });
    });
  });
    </script>
  </body>
  </html>
@endsection

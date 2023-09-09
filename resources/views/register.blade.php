@extends('layout')
@section('content')
<section class=" bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>
              @if(Session::has('success'))
              <div class="alert alert-success"> {{Session::get('success')}}</div>

           @endif

              <form method="post" action="{{url('save-user')}}" enctype="multipart/form-data">
                  @csrf
                <div class="form-outline mb-4">
                  <input type="text" name="name" id="name" class="form-control form-control-lg" placeholder="Enter Your Full Name" value="{{ old('name')}}"/>
                  @error('name')
                  <div class="alert alert-danger" role="alert"> {{$message}}</div>
                  @enderror
                  <label class="form-label" for="name">Your Name</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Enter Your Email Id" />
                  @error('email')
                  <div class="alert alert-danger" role="alert"> {{$message}}</div>
                  @enderror
                  <label class="form-label" for="email">Your Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password"  name="password" id="password" class="form-control form-control-lg" placeholder="Enter Password" />
                  @error('password')
                  <div class="alert alert-danger" role="alert"> {{$message}}</div>
                  @enderror
                  <label class="form-label" for="password">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="confirm_password" id="confirm_password" class="form-control form-control-lg" placeholder="Confirm Password" />
                  @error('confirm_password')
                  <div class="alert alert-danger" role="alert"> {{$message}}</div>
                  @enderror
                  <label class="form-label" for="confirm_password">Repeat your password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="date" name="dob" id="dob" class="form-control form-control-lg" />
                  @error('dob')
                  <div class="alert alert-danger" role="alert"> {{$message}}</div>
                  @enderror
                  <label class="form-label" for="dob">Date of Birth</label>
                </div>


                <div class="form-outline mb-4">
                  
                  <input type="file" name="photo" class="form-control form-control-lg" id="photo"/>
                  @error('photo')
                  <div class="alert alert-danger" role="alert"> {{$message}}</div>
                  @enderror
                  <label class="form-label" for="photo" >Photo  </label>
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="gender">Gender </label><br>
                  <input type="radio" name="gender" id="gender"  value="Male"/>Male
                  <input type="radio" name="gender" id="gender"  value="Female"/>Female  
                  @error('gender')
                  <div class="alert alert-danger" role="alert"> {{$message}}</div>
                  @enderror
                  
                </div>

              <div class="form-outline mb-4">
                  <textarea name="address" name="address" id="address" class="form-control form-control-lg"/></textarea>
                  @error('address')
                  <div class="alert alert-danger" role="alert"> {{$message}}</div>
                  @enderror
                  <label class="form-label" for="address">Address </label>
                </div>

                <div class="form-outline mb-4">
                  
                  
                <select id="country-list" name="country" class="form-control form-control-lg">
                    <option value="">Select Country</option>
                    @foreach($countries as $country)
                    <option value="{{$country->country_id}}">{{$country->country_name}}</option>
                    @endforeach
                  </select><br>
                  
                </div>

                 
                    <div class="form-outline mb-4">
                   <select id="state-list" name="state" class="form-control form-control-lg">
                       <option value="">Select State</option>
                     </select>
                    </div>
                    
                     <div class="form-outline mb-4">
                      <select id="city-list" name="city" class="form-control form-control-lg">
                          <option value="">Select City</option>
                        </select>
                
                </div>
                
                 <div class="d-flex justify-content-center">
                  <br><br>
                  <button class="btn btn-secondary w-100 py-3" type="submit">Register</button>
                </div>

              </form>   
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  $(document).ready(function(){
    //alert('hello');
    $('#country-list').on('change',function()
    {
      //alert('country selected');
      var IdCountry = this.value;
      $('#state-list').html("");
      $.ajax({
         
        url:"{{url('get-states')}}",
        type:"POST",
        data:{
          country_id:IdCountry,
          _token:'{{csrf_token()}}'

        },
        dataType:'json',
        success: function(result) {
          //alert('result');
          $('#state-list').html('<option value="">Select  State</option>');
          $.each(result.states,function(key,value){
            $('#state-list').append('<option value="'+ value.state_id +'">'+ value.state_name +'</option>');
          });
        }
      });
    });

    $('#state-list').on('change',function()
    {
      //alert('country selected');
      var IdState = this.value;
      $('#city-list').html("");
      $.ajax({
         
        url:"{{url('get-cities')}}",
        type:"POST",
        data:{
          state_id:IdState,
          _token:'{{csrf_token()}}'

        },
        dataType:'json',
        success: function(returnState) {
          $('#city-list').html('<option value="">Select Any City</option>');
          $.each(returnState.cities,function(key,value){
            $('#city-list').append('<option value="'+ value.city_id +'">'+ value.city_name +'</option>');
          });
        }
      });
    });
  });


  $(document).ready(function(){
    //alert('hello');
    $('.btn-refresh').on('click',function()
    {
      //alert('captcha selected');
     /* var IdCountry = this.value;
      $('#state-list').html("");
      $.ajax({
         
        url:"{{url('get-states')}}",
        type:"POST",
        data:{
          country_id:IdCountry,
          _token:'{{csrf_token()}}'

        },
        dataType:'json',
        success: function(result) {
          //alert('result');
          $('#state-list').html('<option value="">Select  State</option>');
          $.each(result.states,function(key,value){
            $('#state-list').append('<option value="'+ value.state_id +'">'+ value.state_name +'</option>');
          });
        }
      });
    });

    $('.btn-refresh').on('click',function()
    {
      alert('country selected');
      var IdState = this.value;
      $('#city-list').html("");
      $.ajax({
         
        url:"{{url('get-cities')}}",
        type:"POST",
        data:{
          state_id:IdState,
          _token:'{{csrf_token()}}'

        },
        dataType:'json',
        success: function(returnState) {
          $('#city-list').html('<option value="">Select Any City</option>');
          $.each(returnState.cities,function(key,value){
            $('#city-list').append('<option value="'+ value.city_id +'">'+ value.city_name +'</option>');
          });
        }
      });*/
    });
  });
  </script>


@endsection
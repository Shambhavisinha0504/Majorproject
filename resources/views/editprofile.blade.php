@extends('layout')
@section('content')
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Edit Profile</h2>
              @if(Session::has('success'))
              <div class="alert alert-success"> {{Session::get('success')}}</div>

           @endif

              <form method="post" action="{{url('update-user')}}" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden"  id="name" class="form-control form-control-lg"/>
                <div class="form-outline mb-4">
                  <input type="text" name="name" name="id" class="form-control form-control-lg" placeholder="Enter Your Full Name" value="{{ $user->name}}"/>
                  
                  <label class="form-label" for="name">Your Name</label>
                </div>

                <div class="form-outline mb-4">
                
                  <label class="form-label" for="email">Your Email: {{ $user->email }}</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="date" name="dob" id="dob" class="form-control form-control-lg" value="{{$user->dob}}" />
                  @error('dob')
                  <div class="alert alert-danger" role="alert"> {{$message}}</div>
                  @enderror
                  <label class="form-label" for="dob">Date of Birth</label>
                </div> 

                <div class="form-outline mb-4">
                  <label class="form-label" for="gender">Gender </label><br>
                  @php
                      $selected=''; $selected2='';
                      if($user->gender== 'Male') 
                      {
                        $selected='checked';
                      }
                      else{
                        $selected2='checked';
                      } 
                  @endphp
                  <input type="radio" name="gender" id="gender" {{$selected}} value="Male"/>Male
                  <input type="radio" name="gender" id="gender" {{$selected2}} value="Female"/>Female  
                  @error('gender')
                  <div class="alert alert-danger" role="alert"> {{$message}}</div>
                  @enderror
                  
                </div>

              <div class="form-outline mb-4">
                  <textarea name="address" name="address" id="address" class="form-control form-control-lg"/>{{$user->address}}</textarea>
                  @error('address')
                  <div class="alert alert-danger" role="alert"> {{$message}}</div>
                  @enderror
                  <label class="form-label" for="address">Address </label>
                </div>

              
                <div class="d-flex justify-content-center">
                    <br><br><input type="submit"
                      class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="register" value="Update">
                  </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection
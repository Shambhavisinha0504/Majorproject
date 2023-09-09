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
              <h2 class="text-uppercase text-center mb-5">Change Password</h2>
              @if(Session::has('success'))
              <div class="alert alert-success"> {{Session::get('success')}}</div>

           @endif

              <form method="post" action="{{url('update-password')}}" enctype="multipart/form-data">
                  @csrf
                 <input type="hidden" name="id" id="id" class="form-control form-control-lg" value="{{$user->id}}">
                <div class="form-outline mb-4">
                  <input type="password"  name="current_password" id="current_password" class="form-control form-control-lg" value="{{old('current_password')}}" />
                  @error('current_password')
                  <div class="alert alert-danger" role="alert"> {{$message}}</div>
                  @enderror
                  <label class="form-label" for="current_password">Current Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="password" id="password" class="form-control form-control-lg" value="{{old('password')}}" placeholder="New Password" />
                  @error('password')
                  <div class="alert alert-danger" role="alert"> {{$message}}</div>
                  @enderror
                  <label class="form-label" for="password">New password</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="password" name="confirm_password" id="confirm_password" value="{{old('confirm_password')}}" class="form-control form-control-lg" placeholder="Confirm Password" />
                    @error('confirm_password')
                    <div class="alert alert-danger" role="alert"> {{$message}}</div>
                    @enderror
                    <label class="form-label" for="confirm_password">Repeat your Password</label>
                  </div>
              
                    
                <div class="d-flex justify-content-center">
                    <br><br>
                    <button class="btn btn-secondary w-100 py-3" type="submit" value="update">Change Password</button>
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
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
              <h2 class="text-uppercase text-center mb-5">My Profile</h2>
              @if(Session::has('success'))
              <div class="alert alert-success"> {{Session::get('success')}}</div>

           @endif

              <form method="post" action="{{url('save-user')}}" enctype="multipart/form-data">
                  @csrf
                <div class="form-outline mb-4">
               
                  <label class="form-label" for="name">Name: {{$user->name }} </label>
                </div>

                <div class="form-outline mb-4">
                 
                  <label class="form-label" for="email"> Email: {{ $user->email }}</label>
                </div>

                <div class="form-outline mb-4">
                  <a href="{{url('edit-profile')}}" class="btn btn-success">Edit Profile</a>
                  <a href="{{url('change-password')}}" class="btn btn-success">Change Password</a>

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
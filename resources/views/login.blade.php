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
              <h2 class="text-uppercase text-center mb-5">Login</h2>
              @if(Session::has('success'))
              <div class="alert alert-success"> {{Session::get('success')}}</div>

           @endif

              <form method="post" action="{{route('login.post')}}">
                  @csrf
               

                <div class="form-outline mb-4">
                  <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Enter Your Email Id" />
                 
                  <label class="form-label" for="email">Your Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password"  name="password" id="password" class="form-control form-control-lg" placeholder="Enter Password" />
                 
                  <label class="form-label" for="password">Password</label>
                </div>

              

                <div class="d-flex justify-content-center">
                 
                <!--<input type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="login" value="login">

                </div>-->
                <button class="btn btn-secondary w-100 py-3" type="submit">Login</button>
                </div>
                <div class="d-flex justify-content-center">
                <a href="{{ url ('forgot-password') }}">Forgot Your Password?</a>
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
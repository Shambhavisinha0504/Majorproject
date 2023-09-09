@extends('layout')
@section('content')
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
                <div class="card-body p-md-5 text-black">
                 <center> <h3 class="mb-5 text-uppercase">BOOK AVAILABLE SLOTS</h3></center>
                 <br><br>
                 <form method="post" action="{{url('save-slot')}}" enctype="multipart/form-data">
                  @csrf
          <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="date"  name="date" id="form3Example1m" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example1m">Date</label>
                      </div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="time" name="time" id="form3Example1m" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example1m">Time</label>
                          </div>
                        </div>
                    </div>
          </div>
              <div class="d-flex justify-content-center">
                <br><br>
               <a href="{{url('slotbooking')}}"> <button class="btn btn-secondary w-100 py-3" type="submit">Proceed</button></a>
              </div>
            </form>
  
                  
                
  </section>
@endsection
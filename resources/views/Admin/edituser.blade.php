@extends('admin.layoutadmin')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Users</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    @php
                        // echo"<pre>";print_r($data); echo"</pre>";
                    @endphp


                    @if (Session::has('success'))
                        <div class="alert alert-success"> {{ Session::get('success') }}</div>
                    @endif

                    <form method="post" action="{{ url('admin/update-user') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" id="id" class="form-control form-control-lg"
                            value="{{ $data->id }}" />
                        <div class="form-outline mb-4">
                            <input type="text" name="name" id="name" class="form-control form-control-lg"
                                placeholder="Enter Your Full Name" value="{{ $data->name }}" />
                            @error('name')
                                <div class="alert alert-danger" role="alert"> {{ $message }}</div>
                            @enderror
                            <label class="form-label" for="name">Your Name</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="email" name="email" id="email" class="form-control form-control-lg"
                                placeholder="Enter Your Email Id" value="{{ $data->email }}" />
                            @error('email')
                                <div class="alert alert-danger" role="alert"> {{ $message }}</div>
                            @enderror
                            <label class="form-label" for="email">Your Email</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" name="password" id="password" class="form-control form-control-lg"
                                placeholder="Enter Password" />
                            @error('password')
                                <div class="alert alert-danger" role="alert"> {{ $message }}</div>
                            @enderror
                            <label class="form-label" for="password">Password</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" name="confirm_password" id="confirm_password"
                                class="form-control form-control-lg" placeholder="Confirm Password" />
                            @error('confirm_password')
                                <div class="alert alert-danger" role="alert"> {{ $message }}</div>
                            @enderror
                            <label class="form-label" for="confirm_password">Repeat your password</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="date" name="dob" id="dob" class="form-control form-control-lg" />
                            @error('dob')
                                <div class="alert alert-danger" role="alert"> {{ $message }}</div>
                            @enderror
                            <label class="form-label" for="dob">Date of Birth</label>
                        </div>


                        <div class="form-outline mb-4">

                            <input type="file" name="photo" class="form-control form-control-lg" id="photo" />
                            @error('photo')
                                <div class="alert alert-danger" role="alert"> {{ $message }}</div>
                            @enderror
                            <label class="form-label" for="photo">Photo </label>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="gender">Gender </label><br>
                            <input type="radio" name="gender" id="gender" value="Male" />Male
                            <input type="radio" name="gender" id="gender" value="Female" />Female
                            @error('gender')
                                <div class="alert alert-danger" role="alert"> {{ $message }}</div>
                            @enderror

                        </div>

                        <div class="form-outline mb-4">
                            <textarea name="address" name="address" id="address" class="form-control form-control-lg" /></textarea>
                            @error('address')
                                <div class="alert alert-danger" role="alert"> {{ $message }}</div>
                            @enderror
                            <label class="form-label" for="address">Address </label>
                        </div>




                        <div class="d-flex justify-content-center">
                            <br><br>
                            <button class="btn btn-secondary w-100 py-3" type="submit">Update</button>
                        </div>



                    </form>



                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    <div class="row">

    </div>

    </div>
@endsection

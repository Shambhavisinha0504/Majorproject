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
            <h6 class="m-0 font-weight-bold text-primary">Users List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
              
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                              <th>Email </th>
                              <th>Email Verified_at</th>
                              <th>Password</th>
                              <th>Remember_token </th>
                              <th>Created_at</th>
                              <th>Updated_at</th>
                              <th>Is_active</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                              <th>Email </th>
                              <th>Email Verified_at</th>
                              <th>Password</th>
                              <th>Remember_token </th>
                              <th>Created_at</th>
                              <th>Updated_at</th>
                              <th>Is_active</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        
                        @foreach($data as $user)
                        <tr>
                        <td>{{$user->Id}}</td>
                          <td>{{$user->Name}}</td>
                            <td>{{$user->email}} </td>
                            <td>{{$user->email_verified_at}}</td>
                            <td>{{$user->password}}</td>
                            <td>{{$user->remember_token }}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->updated_at}}</td>
                            <td>{{$user->is_active}}</td>
                            <td><a href="{{url('admin/edituser/'.$user->id)}}">Edit</a>| Delete</td>
                        </tr>
                        @endforeach
                       
                         
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


@endsection
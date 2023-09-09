@extends('admin.layoutadmin')
@section('content')
    

<!-- Begin Page Content -->
<style>
    td{
        color:rgb(75, 64, 78);
    }
    th{
        color:blue;
        background-color: aquamarine;
    }
</style>
<div class="container-fluid">

  <!-- Page Heading -->
  <div style="float:right;">
    <a href="{{url('addScheme')}}" class="mb-4 btn btn-primary">Add Scheme</a>
  </div>
  <h1 class="h3 mb-2 text-gray-800">Schemes</h1>
  <p class="mb-4">This is scheme information table in admin side</p>
  
  
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Scheme Table </h6>
      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>user_id</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Category</th>  
                          <th>Account_No.</th> 
                          <th>Accept</th>
                          <th>Reject</th> 
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                        <th>#</th>
                          <th>user_id</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Category</th>  
                          <th>Account_No.</th> 
                          <th>Accept</th>
                          <th>Reject</th>  
                      </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($list as $data )
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->username}}</td>
                                    <td>{{$data->first_name}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->category}}</td>
                                    <td>{{$data->account_number}}</td>
                                    <td><a href="{{ url('updateStatusAccepted/'.$data->id) }}" class="btn btn-primary">Accept</a></td> 
                                    <td><a href="{{ url('updateStatusRejected/'.$data->id) }}" class="btn btn-danger">Reject</a></td>  
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


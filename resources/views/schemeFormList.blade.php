@extends('layout')
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
                        <th>Status</th>
                        <th>id</th>
                        <th>Name</th>
                        <th>Scheme Type</th>
                        <th>Khatiyan Number</th>
                        <th>email</th>  
                        <th>Photo</th>  
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                        <th>Status</th>
                        <th>id</th>
                        <th>Name</th>
                        <th>Scheme Type</th>
                        <th>Khatiyan Number</th>
                        <th>email</th>  
                        <th>Photo</th>  
                      </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($list as $data )
                                <tr>
                                    <td style="color:red; background-color:pink">{{$data->status}}</td>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->first_name}}</td>
                                    <td>{{$data->scheme_type}}</td>
                                    <td>{{$data->khatiyan_number}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->photo}}</td>
                                    
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


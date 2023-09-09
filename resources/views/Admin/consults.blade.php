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
            <h6 class="m-0 font-weight-bold text-primary">Consulting Slot Booking List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
               <form action="mail" method="post">
              
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>firstname</th>
                              <th>lastname </th>
                              <th>phonenumber</th>
                              <th>email_id</th>
                              <th>aadharnumber</th>
                              <th>address</th>
                              <th>category</th>
                              <th>consultant</th>
                              <th>payment_type</th>
                              <th>result</th>
                              <th>date</th>
                              <th>time</th>
                              <th>created_at</th>
                              <th>updated_at</th>
                              <th>otp_active</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>id</th>
                            <th>firstname</th>
                              <th>lastname </th>
                              <th>phonenumber</th>
                              <th>email_id</th>
                              <th>aadharnumber</th>
                              <th>address</th>
                              <th>category</th>
                              <th>consultant</th>
                              <th>payment_type</th>
                              <th>result</th>
                              <th>date</th>
                              <th>time</th>
                              <th>created_at</th>
                              <th>updated_at</th>
                              <th>otp_active</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                        @foreach($data as $consult)
                       
                            <td>{{$consult->id}}</td>
                            <td>{{$consult->firstname}}</td>
                              <td>{{$consult->lastname}} </td>
                              <td>{{$consult->phonenumber}}</td>
                              <td>{{$consult->email_id}}</td>
                              <td>{{$consult->aadharnumber}}</td>
                              <td>{{$consult->address}}</td>
                              <td>{{$consult->category}}</td>
                              <td>{{$consult->consultant}}</td>
                              <td>{{$consult->payment_type}}</td>
                              <td>{{$consult->result}}</td>
                              <td>{{$consult->date}}</td>
                              <td>{{$consult->time}}</td>
                              <td>{{$consult->created_at}}</td>
                              <td>{{$consult->updated_at}}</td>
                              <td>{{$consult->otp_active}}</td>
                              <td> <button class="btn btn-primary">Accept</td> 
                              <td><button class="btn btn-danger">Reject</td> 
              
                              
                        </tr>
                        @endforeach
                       
                         
                       
                    </tbody>
                </table>
               </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


@endsection
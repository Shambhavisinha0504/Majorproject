@extends('layout')
@section('content')
   
<!doctype html>
<html>
    <head>
        <title>myScheme</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    td{
        color:rgb(75, 64, 78);
    }
    th{
        color:blue;
        background-color: aquamarine;
    }
    .search{
            width:50%;
            border:3px solid #009933;
            padding:8px;
            border-radius: 30px;
            margin: 20px 0 30px 30px;
        }
        input{
            background: transparent;
            border:0px;
            outline:0px;
            width:600px;
        }
    .icon-search{
            color:#009933;
            font-size:20px;
        }
</style>
    </head>
<body>
<div class="container-fluid">
     <!--search bar start-->
     <center>
        <div class="search">
            <input type="search" id="search" placeholder="Enter scheme name to search..." onkeyup="searchFun()">
            <a href="#"><i class="fa-sharp fa-solid fa-magnifying-glass icon-search"></i></a><br>
        </div>
        
    </center>
        <!--search bar end-->

  <!-- Page Heading -->
 
  <h1 class="h3 mb-2 text-gray-800">Schemes</h1>
  <p class="mb-4">This is scheme information table</p>
  
  
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Scheme Table </h6>
      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>Scheme Name</th>
                          <th>Scheme Description</th>
                          <th>Scheme Start Data</th>
                          <th>Scheme last Data</th>  
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                        <th>Scheme Name</th>
                        <th>Scheme Description</th>
                        <th>Scheme Start Data</th>
                        <th>Scheme last Data</th>  
                      </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($list as $data )
                                <tr>
                                    <td>{{$data->scheme_name}}</td>
                                    <td>{{$data->scheme_description}}</td>
                                    <td>{{$data->scheme_start_date}}</td>
                                    <td>{{$data->scheme_end_date}}</td>
                                </tr>
                            @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>

</div>
<!-- /.container-fluid -->
<!-- js code for search scheme -->
<script>
   const searchFun= () =>
   {
    let filter = document.getElementById('search').value.toUpperCase();
    let myTable = document.getElementById('myTable');
    let tr = myTable.getElementsByTagName('tr');
    for(var i=0;i<tr.length;i++)
    {
        let td = tr[i].getElementsByTagName('td')[0];
        if(td)
        {
            let textvalue = td.textcontent || td.innerHTML;
            if(textvalue.toUpperCase().indexOf(filter) > -1)
            {
                tr[i].style.display="";
            }
            else{
                tr[i].style.display ="none";
            }
        }
    }

   }
</script>
</body>
</html>

@endsection
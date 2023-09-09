@extends('admin.layoutadmin')
@section('content')

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/*body{
  font-family: Calibri, Helvetica, sans-serif;
  background-color: pink;
}*/
.container_add_scheme {
  padding: 50px;
  background-color: lightblue;
  margin-bottom:20px;
}

input[type=text], input[type=password], textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: orange;
  outline: none;
}
 div {
            padding: 10px 0;
         }
hr {
  border: 1px solid green;/*#f1f1f1;*/
  margin-bottom: 25px;
}
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.registerbtn:hover {
  opacity: 1;
}
.date{
    width:100%;
    padding:15px;
    margin:5px 0 22px 0;
    background: #f1f1f1;
}
form{
    margin-top:20px;
}
label{
    color:orange;
}
</style>
</head>
<body>
    @if (Session::has('sucsess'))
    <div class="alert alert-success">{{Session::get('sucsess')}}</div>
        
    @endif
<form action="{{url('updatedScheme')}}" method="post" name="form_addscheme" class="mx-1 mx-md-4">
  @csrf
  <input type="hidden" name="id" value="{{$list->id}}"/> 
  <div class="container_add_scheme">
  <center>  <h1 style="color:orange;"> Update Scheme </h1> </center>
  <hr>
  <label> Scheme Name </label> 
<input type="text" name="scheme_name" value="{{$list->scheme_name}}" placeholder= "Scheme Name" required /> 
<label>Scheme Description</label>
<textarea cols="80" rows="5" placeholder="Scheme Description" name="scheme_description" value="{{$list->scheme_description}}" required>
</textarea> 
    <label for="scheme_start_date">Start Date To Apply For Scheme</label>
    <input type="date" class="date" name="scheme_start_date" value="{{$list->scheme_start_date}}" id="scheme_start_date" />
    <label for="scheme_end_date">Last Date To Apply For Scheme</label>
    <input type="date" class="date" name="scheme_end_date" value="{{$list->scheme_end_date}}" id="scheme_end_date" />
    <button type="submit" class="registerbtn" name="submit_scheme" value="addScheme">Update Scheme</button>
  </div>
</form>
</body>
</html>   
@endsection
@extends('layouts.app')

@section('content')
<div class="container" style = "color:;">
    <div class="card justify-content-center">
    <div class="card-body">  
    Name: &nbsp; {{$id->name}}
      <br>email: &nbsp; {{$id->email}}
      
        <br> Stream: {{$id->stream}}
        <br> Year: {{$id->year}}
        <br> Student Id No: {{$id->studentid}}


      <form action="" class="">
          <div class="form-group">
              <label for="Change password" class="">Change password:</label>
                <input type="password" class="form-control" name = "new password" placeholder = "new password">
                <input type="password" class="form-control" name = "confirm passsowrd" placeholder = "Confirm new password">
                <input type="submit" class="btn btn-sm btn-success" placeholder = "change password" value ="change password">
            </div>
      </form>  

    </div>
    </div>
</div>
@endsection

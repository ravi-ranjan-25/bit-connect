@extends('layouts.app')

@section('content')
@if($results->count()>0)
@foreach($results as $result)
<div class="">
<div class = "card">
 <div class="header"><div class = "float-left"><img src="{{$result->avatar}}" alt="" class="img-responsive rounded-circle" width = "70px">&nbsp; {{ $result->name}}</div>
 <div class = "float-right"><a href = "{{route('userprofile', ['username' => $result->username])}}" class="btn btn-sm btn-success float-right">View Profile</a></div>
</div></div>
@endforeach
@else


<div class="">No users found</div>
@endif
</div>
@endsection

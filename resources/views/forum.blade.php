@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class = "text-center" style="color:White;"><h3>Discussions</h3></div><br>        @foreach($discussions as $discussion)
        <div class="card">
            
            <div class="card-header">
            
            <img  class = "img-circle"src = "{{$discussion->user->avatar}}" width = "70px" height = "70px">
            &nbsp; {{$discussion->user->name}} &nbsp; {{$discussion->created_at->diffForHumans()}}
            <a href="{{route('discussion',['slug' => $discussion->slug])}}" class="btn btn-sm  float-right" style = "texr-align:center;background-color:black; color:white;border-radius:50px;width:100px;margin:10px;">View</a> &nbsp;
            @if(!$discussion->is_closed())
            <div class="btn-sm btn float-right"style="background-color:red; color:white;border-radius:50px;width:100px;margin:10px;">CLOSED</div>
            @else
            <div class="btn-sm btn float-right" style="background-color:green; color:white;border-radius:50px;width:100px;margin:10px;">OPEN</div>
            @endif
            </div>
               <div class = "card-body">
               <h3>{{$discussion->title}}  </h3>
              <p> {{$discussion->content}}</p>
               </div>
               <div class="card-footer">
               {{$discussion->replies->count()}} Replies 
               </div>
        </div>
    <br><br>
            @endforeach
        <div class="">
        {{$discussions->links() }}
        </div>
        </div>

    </div>
</div>
@endsection

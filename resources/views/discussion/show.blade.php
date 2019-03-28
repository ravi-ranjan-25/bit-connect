@extends('layouts.app')

@section('content')
<div class="container">

            <div class="row justify-content-center">
        <div class="col-md-12">
        <div class = "text-center"><h3>Discussions</h3></div><br>
        
            <div class="card">
            
                <div class="card-header">
                <img  class = "img-circle"src = "{{$discussion->user->avatar}}" width = "70px" height = "70px">
                &nbsp; {{$discussion->user->name}} &nbsp; {{$discussion->created_at->diffForHumans()}}
                </div>
                   <div class = "card-body">
                   <h3>{{$discussion->title}}  </h3>
                  <p> {{$discussion->content}}</p>
                   </div>

                @if($bestanswer)

                    <hr>
                   <center> <div class="text-center "><h3 class="">BEST ANSWER</h3></div>

                     <img src="{{$bestanswer->user->avatar}}" alt="" width = "70px"  class="rounded-circle img-responsive float"><br>
                    <span class="text-center">{{$bestanswer->user->name}}</span></center>
                    <br><br>
                    
                    {{$bestanswer->content}}
                @endif

                   <div class="card-footer">
                   {{$discussion->replies->count()}} Replies
                   </div>

            </div>
        
        
        <br>
        Replies
        @foreach($discussion->replies as $reply )
        <div class="card" style = "color:white;">
            
            <div class="card-header " style="background:#ff8000;">
            <img  class = "rounded-circle" src = "{{$reply->user->avatar}}" width = "70px" height = "70px">
            &nbsp; {{$reply->user->name}} &nbsp; {{$reply->created_at->diffForHumans()}} @if($discussion->user->id == Auth::id()) @if(!$bestanswer) <a href="{{route('best.answer', ['id' => $reply->id])}}" class="btn btn-sm float-right" style="background:black;color:white;">Mark as Best Answer</a> @endif @endif
            </div>
               <div class = "card-body bg-dark">
               <h3> {{$reply->title}} </h3>
              <p> {{$reply->content}}</p>
               </div>
               <div class="card-footer">
               @if($reply->is_liked_by_auth_user())
                   <a href="{{route('unlike' , ['id' => $reply->id]) }}" class="btn btn-xs" style="background-color:black; color:white;border-radius:50px;width:100px;">Unlike <span class="badge">{{$reply->like->count()}}</span></a>
               @else
                <a href="{{route('like' , ['id' => $reply->id])}}" class="btn-xs btn " style="background-color:black; color:white;border-radius:50px;width:100px;">Like <span class="badge">{{$reply->like->count()}}</span></a>            
                  @endif  
               </div>
        </div> &nbsp;&nbsp; <br><br>
        <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-9">
         @foreach($reply->message as $reply1 )
        
        <div class="card" style = "color:white;">
            
            <div class="card-header " style="background:red;">
            <img  class = "rounded-circle" src = "{{$reply1->user->avatar}}" width = "70px" height = "70px">
            &nbsp; {{$reply1->user->name}} &nbsp; {{$reply1->created_at->diffForHumans()}}
            </div>
               <div class = "card-body bg-dark">
               
              <p> {{$reply1->content}}</p>
               </div>
               <div class="card-footer">
                 
               </div></div><br>
               @endforeach 
               <br>
               <form action="{{route('message.store', ['id' => $reply->id ])}}" method = "post"class="">
            {{csrf_field()}}
            <div class="form-group" >
            <label for="reply" >Send a Reply</label>
            <textarea class = "form-control"name="reply" id="reply" cols="10" rows="10"></textarea>
            </div>
            <div class="form-group">
            <input class = "form-control"type="submit" value ="Send a reply" placeholder = "send a reply" style="background:black;color:white;">
            </div>
        </form>
        </div></div>
       
        @endforeach

        <form action="{{route('replies.store', ['id' => $discussion->id ])}}" method = "post"class="">
            {{csrf_field()}}
            <div class="form-group" >
            <label for="reply" >Send a Reply</label>
            <textarea class = "form-control"name="reply" id="reply" cols="80" rows="10"></textarea>
            </div>
            <div class="form-group">
            <input class = "form-control"type="submit" value ="Send a reply" placeholder = "send a reply" style="background:black;color:white;">
            </div>
        </form>
        </div>
        

    </div></div>

@endsection

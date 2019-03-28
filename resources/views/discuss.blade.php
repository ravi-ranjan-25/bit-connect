@extends('layouts.app')

@section('content')
<div class="">
    <div class="row justify-content-center" style = "color:white;">
        <div class="col-md-8 ">
        <div class="panel">
        <div class="panel-heading text-center">
        Create a new discussion
        </div>
            <div class = "panel-body">
            <form action = "{{route('discuss.store')}}" method = "post">
           {{csrf_field()}}
            <label for="title" class="">Title</label>
           <div class="form-group">
           <input type="text" class="form-control" name = "title">
           </div>
            <div class="form-group">
            <label for = "channel" class = "">Select Channel</label>
            <select name = "channel_id" class = "form-control" id = "channel_id">
            @foreach($channels as $channel)

            <option value = "{{$channel->id}}" >{{$channel->title}}</option>

            @endforeach
            </select></div>

            <div class="form-group">
            <label for="content" class="">Question:</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>

            </div>
            <div class="form-group">
                <input type="submit" class="form-control btn-success" value = "Submit">
            </div>
            </form>
            </div>
               </div>
               </div>
        </div>
    </div>
@endsection

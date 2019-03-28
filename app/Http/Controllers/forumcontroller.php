<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\discussion;
use Auth;
use App\reply;
use App\message;

class forumcontroller extends Controller
{
    public function create(){

        return view('discuss');

    }

    public function index(){

        $discussion = discussion::orderBy('created_at', 'desc')->paginate(3);
            
        return view('forum')->with('discussions',$discussion);    
    }



    public function store(){

        $r = request();
        
        $this->validate($r,[
            'channel_id' => 'required',
            'content' => 'required',
            'title' => 'required',
            
        ]);

       $discussion = discussion::create([
            'user_id' => Auth::id(),
             'channel_id'=> $r->channel_id,
             'title' =>  $r->title,
             'content' => $r->content,
             'slug' => str_slug($r->title)
        ]);

        return redirect()->route('discussion',['slug' => $discussion->slug]);

    }

    public function reply($id){

        $r = request();
        

       $reply = reply::create([
            'user_id' => Auth::id(),
             'discussion_id'=> $id,
             'content' =>  $r->reply
        ]);

        return redirect()->back();
    }


    public function show($slug){


     $discussion =  discussion::where('slug',$slug)->first();
     $bestanswer = $discussion->replies()->where('bestanswer',1)->first();
     
     return view('discussion.show')->with('discussion', $discussion)
                                   ->with('bestanswer',$bestanswer);
    }

    public function message($id){

        $r = request();
        

       $reply = message::create([
            'user_id' => Auth::id(),
             'reply_id'=> $id,
             'content' =>  $r->reply
        ]);

        return redirect()->back();
    }

}

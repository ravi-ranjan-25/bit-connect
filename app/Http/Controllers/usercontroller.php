<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\like;
use App\reply;
use App\User;
use App\ebook;

class usercontroller extends Controller
{
    public function profile($username){
        $user = User::where('username',$username)->first();
        
        return view('profile')->with('user',$user);
  
    }

    public function like($id){
        
        $user_id = Auth::id();

        $like = like::create([
            'reply_id' => $id,
            'user_id' => $user_id

        ]);
        
        return redirect()->back();

    }
    public function unlike($id){
        
        $like = like::where('reply_id' , $id)->where('user_id',Auth::id())->first();

        $like->delete();
        return redirect()->back();

    }

    public function bestanswer($id){
        
        $best = reply::where('id',$id)->first();
        $best->bestanswer = 1;
        $best->save();
        return redirect()->back();


    }

    public function search(){
$request = request();

        $results = User::where('name',$request->name)->get();
        
        return view('search')->with('results',$results);
        
    }
    public function settings(){
        $id = Auth::user();

        return view('settings')->with('id',$id);
    }
    public function ebooks(){
        

        return view('ebooks');
    }
    public function registerebook(){
        
        $r = Request();
        
        $this->validate($r,[
            'subject' => 'required',
            'name' => 'required',
            'link' => 'required|mimes:zip,pdf'
            
        ]);

$file = $r->link;
$link_new_name = time().$file->getClientOriginalName();
$file->move('uploads/ebook',$link_new_name); 
        $ebook = ebook::create([
            
             'channel_id'=> $r->subject,
             'name' =>  $r->name,
             'link' => 'uploads/ebook/'.$link_new_name,
             'stream' => 'CSE',
             
        ]);
        $ebook->save();

        return redirect()->back();

        

     
    }
    public function picture(){
        
        $r = Request();
        $id = User::find(Auth::id());
        $this->validate($r,[
           
            'link' => 'required|image'
            
        ]);

$file = $r->link;
$link_new_name = time().$file->getClientOriginalName();
$file->move('avatar/',$link_new_name); 
        
            $id->avatar = 'avatar/'.$link_new_name;
        $id->save();

        return redirect()->back();

        

     
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
class reply extends Model
{
    //

protected $fillable = [
    'discussion_id','user_id','content','bestanswer'
];

    public function discuss(){
        return $this->belongsTo('App\discussion');
    }
    public function user(){
        return $this->belongsTo('App\user');
    }
    
    public function like(){
        return $this->hasMany('App\like');
    }

    public function message(){
        return $this->hasMany('App\message');
    }
    public function is_liked_by_auth_user(){

        $id = Auth::id();
        $likers = array();

        foreach($this->like as $likes):
            array_push($likers, $likes->user_id);

        endforeach;

        if(in_array($id ,$likers))
        {

            return true;
        }
        else{
            return false;
        }

     }
    
}

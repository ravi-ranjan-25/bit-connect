<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class discussion extends Model
{
    //

    
    protected $fillable = [
        'channel_id','user_id','content','title','slug'
    ];
    public function channels(){
        return $this->belongsTo('App\channel');
    }
    
    public function user(){
        return $this->belongsTo('App\user');
    }


    public function replies(){
        return $this->hasMany('App\reply');
    }


    public function is_closed(){
        
        $result = true;
        
        foreach($this->replies as $reply):
            if($reply->bestanswer){
                $result = false;
                break;
            }
        endforeach;
        return $result;
    }
    
}

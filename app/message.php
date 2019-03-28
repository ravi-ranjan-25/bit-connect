<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\reply;
use App\User;

class message extends Model
{
    protected $fillable = ['user_id','reply_id','content'];
    
    public function replies(){
        return $this->belongsTo('App\reply');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ebook extends Model
{
    protected $fillable = ['link','name','channel_id','stream'];
    public function channel(){
        return $this->belongsTo('App\channel');
    }
}

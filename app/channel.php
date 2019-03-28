<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class channel extends Model
{
    protected $fillable = [
        'title'
    ];

    public function discussion(){
return $this->hasMany('App\discussion');
    }
    
    public function ebook(){
        return $this->hasMany('App\ebook');
            }
            
}

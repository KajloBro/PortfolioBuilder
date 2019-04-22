<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['small', 'original', 'show_at_home'];
    
    public function getOriginalAttribute($img) {
        return "/img/" . $img;  
    }

    public function getSmallAttribute($img) {
        return "/img/" . $img;
    }

}
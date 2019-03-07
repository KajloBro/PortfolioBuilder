<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description', 'photo_id'];

    public function photo() {
        return $this->belongsTo('App\Photo');
    }
}

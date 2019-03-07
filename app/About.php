<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = ['photo_id', 'title', 'content'];

    public function photo() {
        return $this->belongsTo('App\Photo');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['photo_id', 'town', 'telephone', 'email'];

    public function photo() {
        return $this->belongsTo('App\Photo');
    }

    public function getFullNameAttribute($value) {
        return ucfirst($this->first_name) . " " . ucfirst($this->last_name);
    }
}

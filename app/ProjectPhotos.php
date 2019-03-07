<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectPhotos extends Model
{
    protected $fillable = ['photo_id', 'project_id'];

    public function photo() {
        return $this->belongsTo('App\Photo');
    }
    
    public function project() {
        return $this->belongsTo('App\Project');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Contact;
use App\About;
use App\Project;
use App\ProjectPhotos;

class FrontController extends Controller
{
    public function index() {
        $logoImg = Photo::where('is_logo', '1')->limit(1)->value('original');
        $homeImgs = Photo::where('show_at_home', '1')->pluck('original');
        return view('home', compact('homeImgs', 'logoImg'));
    }
    
    public function portfolio() {
        $logoImg = Photo::where('is_logo', '1')->limit(1)->value('original');
        $projects = Project::join('project_photos', 'projects.id', '=', 'project_photos.project_id')->join('photos', 'photos.id', '=', 'project_photos.photo_id')->whereShowAsProjectsPhoto(1)->select('projects.id', 'projects.title', 'photos.small')->get();
        return view('portfolio', compact('projects', 'logoImg'));
    }
    
    public function project($id) {
        $logoImg = Photo::where('is_logo', '1')->limit(1)->value('original');
        $project = Project::whereId($id)->first();
        $projectPhotos = ProjectPhotos::whereProjectId($id)->join('photos', 'project_photos.photo_id', '=', 'photos.id')->select('photos.small', 'photos.id', 'photos.original')->get();
        return view('project', compact('project', 'projectPhotos', 'logoImg'));
    }
    
    public function about() {
        $logoImg = Photo::where('is_logo', '1')->limit(1)->value('original');
        $about = About::limit(1)->first();
        return view('about', compact('about', 'logoImg'));
    }
    
    public function contact() {
        $logoImg = Photo::where('is_logo', '1')->limit(1)->value('original');
        $contact = Contact::limit(1)->first();
        return view('contact', compact('contact', 'logoImg'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Contact;
use App\About;

class FrontController extends Controller
{
    public function index() {
        $logoImg = Photo::where('is_logo', '1')->limit(1)->value('original');
        $homeImgs = Photo::where('show_at_home', '1')->pluck('original');
        return view('home', compact('homeImgs', 'logoImg'));
    }
    
    public function portfolio() {
        $logoImg = Photo::where('is_logo', '1')->limit(1)->value('original');
        return view('portfolio', compact('logoImg'));
    }
    
    public function project($id) {
        $logoImg = Photo::where('is_logo', '1')->limit(1)->value('original');
        return view('project', compact('logoImg'));
    }
    
    public function about() {
        $logoImg = Photo::where('is_logo', '1')->limit(1)->value('original');
        $about = About::limit(1)->first();
        return view('about', compact('about', 'logoImg'));
    }
    
    public function contact() {
        $logoImg = Photo::where('is_logo', '1')->limit(1)->value('original');
        return view('contact', compact('logoImg'));
    }
}

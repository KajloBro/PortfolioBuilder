<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class FrontController extends Controller
{
    public function index() {
        $homeImgs = Photo::where('show_at_home', '1')->pluck('original');
        return view('home', compact('homeImgs'));
    }

    public function portfolio() {
        return view('portfolio');
    }

    public function project($id) {
        return view('project');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }
}

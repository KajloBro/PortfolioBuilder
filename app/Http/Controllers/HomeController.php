<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home');
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

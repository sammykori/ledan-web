<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function solutions(){
        return view('pages.solutions');
    }
    public function company(){
        return view('pages.company');
    }
    public function blog(){
        return view('pages.blog');
    }
    public function contact(){
        return view('pages.contact');
    }
}

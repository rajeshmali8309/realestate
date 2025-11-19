<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function Index(){
        return view('website.index');
    }

    public function Contact(){
        return view('website.contact');
    }

    public function Blogs(){
        return view('website.blogs');
    }
}

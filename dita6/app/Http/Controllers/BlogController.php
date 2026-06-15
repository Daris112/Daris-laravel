<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    public function home()
    {
        return view('blog.home');
    }

    public function about()
    {
        return view('blog.about');
    }

    public function contact()
    {
        return view('blog.contact');
    }
}

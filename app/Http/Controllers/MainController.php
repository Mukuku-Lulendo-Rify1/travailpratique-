<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function articles()
    {
        return view('posts.articles');
    }
     public function article($slug)
    {
        return view('public.article');
    }

    public function categories()
{
    return view('public.categories');
}
     public function about()
    {
        return view('posts.about');
    }
}

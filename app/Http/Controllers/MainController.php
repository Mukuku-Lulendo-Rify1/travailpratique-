<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function index()
    {
        return view('public.index');
    }

    public function articles()
    {
        $articles = [
            (object) [
                'title' => 'Premier article',
                'slug' => 'premier-article',
                'excerpt' => 'Résumé article'
            ]
        ];

        return view('public.articles', compact('articles'));
    }

    public function article($slug)
    {
        $article = (object) [
            'title' => 'Premier article',
            'slug' => $slug,
            'content' => 'Contenu article'
        ];

        return view('public.article', compact('article'));
    }

    public function categories()
    {
        $categories = [
            (object) ['name' => 'Laravel'],
            (object) ['name' => 'PHP']
        ];

        return view('public.categories', compact('categories'));
    }

    public function about()
    {
        return view('public.about');
    }
}
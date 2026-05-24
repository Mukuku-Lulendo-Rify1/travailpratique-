@extends('App')

@section('title', $article->title)

@section('content')

 <nav class="breadcrumb">

        <a href="{{ url('home') }}">
            Accueil
        </a>



        <a href="{{ url('articles.index') }}">
            Articles
        </a>

        <a href="{{ route('articles.show', $article->slug) }}">
    Lire l'article
</a>

        <span>
            {{ $article->title }}
        </span>

    </nav>

    <article>

        <h1>{{ $article->title }}</h1>

        <p>{{ $article->content }}</p>

    </article>
@endsection
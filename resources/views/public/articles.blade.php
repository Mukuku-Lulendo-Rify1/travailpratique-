@extends('App')

@section('title', 'Articles')

@section('content')

    <h1>Liste des articles</h1>

    @foreach($articles as $article)

        <div class="card">

            <h2>{{ $article->title }}</h2>

            <p>{{ $article->excerpt }}</p>

            <a href="{{ route('articles.show', $article->slug) }}">
                Lire l'article
            </a>

        </div>

    @endforeach

@endsection
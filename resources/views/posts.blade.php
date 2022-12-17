@extends('layouts.main')

@section('container')
    <article>
        @foreach ($posts as $post)
        <h2>
            <a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a>
        </h2>
        <h5>By: {{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
        @endforeach
    </article>
@endsection

@extends('layouts.main')

@section('container')
    <h2>{{ $post->title }}</h2>

    {{-- {{ $post->body }} --}}
    {{-- Tidak melakukan escaping character --}}
    {!! $post->body !!}

    <p><a href="/blog">Back to Posts</a></p>
@endsection

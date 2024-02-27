@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $article->title }}</h5>
                <div class="card-subtitle text-muted small mb-2">{{ $article->created_at->diffForHumans() }}</div>
                <p class="card-text">{{ $article->body }}</p>
                <div>
                    <a class="float-start btn btn-warning" href="{{ url("/articles/delete/$article->id") }}">Delete</a>
                    <a class="float-end btn btn-secondary" href="{{ url('/articles') }}">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection

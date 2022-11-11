@extends('dashboard.layouts.main')

@section('style')
<link rel="stylesheet" href="/css/style.css">
@endsection

@section('container')


<div class="container">
    <div class="container">
        <div class="row d-flex">
            @foreach ($posts as $post )
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="https://source.unsplash.com/500x400/?{{ $post->title}}"class="card-img-top" alt="{{ $post->title }}">
                    <div class="card-body">
                      <p>
                        <h3 class="card-title"><a href="/post/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h3>
                        <small class="text-muted">
                            <p>By <a href="/post?user={{ $post->user->username }}"class="text-decoration-none">{{ $post->user->name}}</a> {{ $post->created_at->diffForHumans() }}
                            </p>
                        </small>
                    </p>
                      <p class="card-text">{{ $post->excert }}</p>
                      <a href="/dashboard/post/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

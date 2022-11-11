@extends('dashboard.layouts.main')

@section('style')
<link rel="stylesheet" href="/css/style.css">
@endsection

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-4">{{ $post->title }}</h2>
            <p>By <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> </p>
            <img src="https://source.unsplash.com/1200x400?{{ $post->title }}" class="img-fluid rounded-top" alt="{{ $post->title }}">
            <article class="my-5 fs-5">
                {!! $post->body !!}
            </article>

            <p class="mt-3"> <a name="" id="" class="btn btn-primary" href="{{ route('posts') }}" role="button">Kembali Ke Halaman Postingan</a></p>
        </div>
    </div>
</div>
@endsection

@extends('admins.layouts.main')

@section('style')
{{-- Trix Editor  --}}
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>
@endsection

@section('container')
    <div class="row px-3">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center  pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Buat Postingan Baru </h1>
        </div>
        <div class="col-md-8">
            <form method="post" action="{{ route('admin-store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title"
                        class="form-label @error('title') is-invalid
                @enderror">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" required autofocus
                        value="{{ old('title') }}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="slug"
                        class="form-label @error('slug') is-invalid
                @enderror">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" required
                        value="{{ old('slug') }}" readonly>
                    @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Post Image</label>
                    <input class="form-control @error('image')
                is-invalid
                @enderror"
                        type="file" id="image" name="image">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Postingan</label>
                    @error('body')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                    <trix-editor input="body"></trix-editor>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
            </form>
        </div>
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/admins/post/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
    </script>
@endsection

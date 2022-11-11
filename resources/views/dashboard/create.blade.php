@extends('dashboard.layouts.main')

@section('style')
<link rel="stylesheet" href="/css/style.css">
@endsection

@section('container')
    <div class="row d-flex justify-content-center">
        <h2 class="text-center">Pendaftaran {{ request('title') }}</h2>
        <div class="col-md-6 px-5">
            @if (request('title') == 'Design Competition')
                @include('dashboard.form-daftar-umum.form2')
            @elseif (request('title') == 'Mading Competition')
                @include('dashboard.form-daftar-umum.form2')
            @elseif (request('title') == 'Seminar Nasional')
                @include('dashboard.form-daftar-umum.form2')
            @elseif (request('title') == 'Rangking 1')
                @include('dashboard.form-daftar-umum.form2')
            @elseif (request('title') == 'Lomba Cerdas Tangkas Fisika')
                @include('dashboard.form-daftar-sma-smp.form')
            @elseif (request('title') == 'Lomba Fisika')
                @include('dashboard.form-daftar-sma-smp.form')
            @elseif (request('title') == 'Lomba Karya Tulis Ilmiah')
                @include('dashboard.form-daftar-sma-ptn.form')
            @endif

        </div>
    </div>
@endsection

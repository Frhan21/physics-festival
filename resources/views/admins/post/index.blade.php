@extends('admins.layouts.main')

@section('container')
    <div class="d-flex justify-content-center ">
        <h2 class=" text-center">Daftar Postingan Admin</h2>
    </div class="col-md-6">
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-6 ">
            <a class="btn btn-primary mb-3 mx-4" href="{{ route('admin-create') }}" role="button">Tambah Postingan</a>
            @if ($posts->count())
                <div class="table-responsive table-light col-lg-12 mx-4">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Title</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>
                                        <form action="" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <a class="btn btn-danger" href="" role="button"
                                                onclick="return confirm('Apa Kamu Yakin ?? ')"><i
                                                    class="bi bi-file-earmark-excel "></i></a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <h1 class="text-center">Admin Belum Membuat Postingan</h1>
            @endif
        </div>
    </div>

@endsection

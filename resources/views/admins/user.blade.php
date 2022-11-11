@extends('admins.layouts.main')
@section('style')
    {{-- DATA TABLE J-QUERY --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
@endsection

@section('container')
    <main>
        <div class="container">
            <div class="row justify-content-center align-items-center g-0">
                <div class="kolom col-lg-12 p-5 mt-5 mx-5 mb-2">
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="d-flex me-auto">Log Out</button>
                    </form>
                    <div class="head dashboard">
                        Dashboard
                    </div>
                    <div class="sub fs-6">
                        Selamat datang {{ auth()->user()->name }}
                    </div>
                </div>
                <div class="kolom col-sm-12 p-5 mx-5 my-2">
                    <div class="head mb-2 text-center">
                        Pengguna Website PF XXIV
                    </div>
                    <table class="" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama </th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users->skip(1) as $user)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <form action="{{ route('users') }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <a class="btn btn-danger" href="{{ route('users') }}" role="button" onclick="return confirm('Apa Kamu Yakin ?? ')"><i class="bi bi-file-earmark-excel "></i></a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </main>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endsection

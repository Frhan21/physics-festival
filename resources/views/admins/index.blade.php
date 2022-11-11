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
                <div class="brand col-lg-12 px-5 mx-5 ">
                    <div class="row">
                        <div class="col-md-6 py-4">
                            <a href="{{ route('dashboard') }}" target="_blank"><img src="../img/PF24(3).png" alt="" style="width: 150px;"></a>
                        </div>
                        <div class="col-6 py-4 text-end">
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="border-0 w-auto"><i class="bi bi-box-arrow-in-right"></i> <span> Log Out</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center g-0">
                <div class="kolom col-md-10 col-sm-9  p-5 mt-5 mx-5 mb-2">
                    <div class="head dashboard">
                        Dashboard
                    </div>
                    <div class="sub fs-6">
                        Selamat datang {{ auth()->user()->name }}
                    </div>
                </div>
                <div class="kolom col-sm-9 p-5 mx-5 my-2">
                    <div class="head mb-2 text-center">
                        Peserta Yang Sudah Mendaftar
                    </div>
                    <table id="myTable" class="table table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Peserta</th>
                                <th scope="col">Asal Sekolah</th>
                                <th scope="col">Jenis Lomba</th>
                                {{-- <th scope="col">Bukti Pembayarannya</th> --}}
                                <th scope="col">File Karya Peserta</th>
                                <th scope="col">Sertifikat (Khusus Seminar)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($peserta as $siswa)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $siswa->name }}</td>
                                    <td>{{ $siswa->asal_sekolah }}</td>
                                    <td>{{ $siswa->events }}</td>
                                    {{-- <td><img src="../img/bukti-pembayaran/{{ $siswa->image }}"  alt=""></td> --}}
                                    @if ($siswa->events == 'Lomba Karya Tulis Ilmiah')
                                        <td>
                                            <a href="/folder-peserta/{{ $siswa->fileEvents }}" download>Download File
                                                Peserta LKTI</a>
                                        </td>
                                    @endif
                                    @if ($siswa->events == 'Design Competition')
                                        <td>
                                            <a href="/folder-peserta/{{ $siswa->fileEvents }}" download>Download File
                                                Peserta Design</a>
                                        </td>
                                    @else
                                    <td>

                                    </td>
                                    @endif

                                    <td>
                                        {{ $siswa->status }}
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

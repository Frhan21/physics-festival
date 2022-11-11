@extends('dashboard.layouts.main')
@section('style')
<link rel="stylesheet" href="/css/style.css">
@endsection
@section('container')
    {{-- <main>
        <div class="container">
            <form action="/logout" method="POST">
                @csrf
              <button type="submit" class="d-flex me-auto">Log Out</button>
            </form>
            <div class="row justify-content-center align-items-center g-0">

                <div class="kolom col-lg-12 p-5 mt-5 mx-5 mb-2">
                    <div class="head dashboard">
                        Dashboard
                    </div>
                    <div class="sub fs-6">
                        Selamat datang {{ auth()->user()->name }}
                    </div>
                </div>
                <div class="kolom col-md-12 col-sm-6 p-5 mx-4 my-2">
                    <div class="head">
                        Infromasi Akun
                    </div>
                    <div class="sub table-responsive">
                        <table class="table ">
                            <thead>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>{{ auth()->user()->name }}</td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>:</td>
                                    <td>{{ auth()->user()->username }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>{{ auth()->user()->email }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="kolom col-sm-12 p-5 mx-5 my-2">
                    <div class="head mb-2">
                        Ayo Segera Daftarkan Dirimu!!!
                    </div>
                    <div class="sub">
                        Kamu terdaftar di:
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                    </div>
                    <div class="lomba ps-1 pt-2 table-responsive">
                        <table class="table  fs-7">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Asal Sekolah</th>
                                    <th scope="col">Events</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Grup Wa</th>
                                </tr>
                                @foreach ($peserta as $siswa)
                                    <tr>

                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $siswa->name }}</td>
                                        <td>{{ $siswa->asal_sekolah }}</td>
                                        <td>{{ $siswa->events }}</td>
                                        <td>{{ $siswa->sekolah->sekolah }}</td>
                                        @if ($siswa->events == 'Lomba Fisika')
                                            @if ($siswa->sekolah->sekolah == 'SMA')
                                                <td><a href="https://chat.whatsapp.com/I4elRzyw73cDHCMyp0zNIY"><i class="bi bi-whatsapp"></i> Gabung
                                                        Disini</a></td>
                                            @else
                                                <td><a href="https://chat.whatsapp.com/CgmIE14owxG4ZuOhhqiROw"><i class="bi bi-whatsapp"></i> Gabung
                                                        Disini</a></td>
                                            @endif
                                        @endif
                                        @if ($siswa->events == 'Lomba Cerdas Tangkas Fisika')
                                            @if ($siswa->sekolah->sekolah == 'SMA')
                                                <td><a href="https://chat.whatsapp.com/DRBReotVbjH7IDj7jLg1ec"><i class="bi bi-whatsapp"></i> Gabung
                                                        Disini</a></td>
                                            @else
                                                <td><a href="https://chat.whatsapp.com/DOKDkI0yCYzEzhTiHLm4eB"><i class="bi bi-whatsapp"></i> Gabung
                                                        Disini</a></td>
                                            @endif
                                        @endif
                                        @if ($siswa->events == 'Rangking 1')
                                            <td><a href="https://chat.whatsapp.com/D0CHJIlo7ei7Mq1uQDRBZM"><i class="bi bi-whatsapp"></i> Gabung Disini</a></td>
                                        @endif
                                        @if ($siswa->events == 'Design Competition')
                                            <td><a href=""><i class="bi bi-whatsapp"></i> Gabung Disini</a></td>
                                        @endif
                                    </tr>
                                @endforeach
                            </thead>
                            <tbody>
                                <tr>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </main> --}}
    <main>
        <div class="container">
            <div class="row justify-content-center align-items-center g-0">
                <div class="brand col-lg-12 px-5 mx-5 mb-2">
                    <div class="row">
                        <div class="col-6 py-4">
                            <a href="{{ route('dashboard') }}" target="_blank"><img src="../img/PF24(3).png" alt="" style="width: 150px;"></a>
                        </div>
                        <div class="col-6 py-4 text-end">
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="border-0"><box-icon name='log-out'></box-icon></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center g-0">
                <div class="kolom col-lg-12 p-5 mx-5 my-2">
                    <div class="head dashboard">
                        Dashboard
                    </div>
                    <div class="sub fs-4">
                        Selamat datang {{ auth()->user()->name }}
                    </div>
                </div>
                <div class="kolom col-lg-12 p-5 mx-5 my-2">
                    <div class="head">
                        Info Akun :
                    </div>
                    <div class="sub table-responsive col-md-8">
                        <table class="table table-striped ">
                            <thead>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>{{ auth()->user()->name }}</td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>:</td>
                                    <td>{{ auth()->user()->username }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>{{ auth()->user()->email }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="kolom col-lg-12 p-5 mx-5 my-2">
                    <div class="head mb-2">
                        Ayo Segera Daftarkan Dirimu !!!
                    </div>
                    <div class="sub">
                        Kamu terdaftar di:
                    </div>
                    <div class="lomba ps-1 pt-2 table-responsive">
                        <table class="table  fs-7">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Asal Sekolah</th>
                                    <th scope="col">Events</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Grup Wa</th>
                                </tr>
                                @foreach ($peserta as $siswa)
                                    <tr>

                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $siswa->name }}</td>
                                        <td>{{ $siswa->asal_sekolah }}</td>
                                        <td>{{ $siswa->events }}</td>
                                        <td>{{ $siswa->sekolah->sekolah }}</td>
                                        @if ($siswa->events == 'Lomba Fisika')
                                            @if ($siswa->sekolah->sekolah == 'SMA')
                                                <td><a href="https://chat.whatsapp.com/I4elRzyw73cDHCMyp0zNIY"><i class="bi bi-whatsapp"></i> Gabung
                                                        Disini</a></td>
                                            @else
                                                <td><a href="https://chat.whatsapp.com/CgmIE14owxG4ZuOhhqiROw"><i class="bi bi-whatsapp"></i> Gabung
                                                        Disini</a></td>
                                            @endif
                                        @endif
                                        @if ($siswa->events == 'Lomba Cerdas Tangkas Fisika')
                                            @if ($siswa->sekolah->sekolah == 'SMA')
                                                <td><a href="https://chat.whatsapp.com/DRBReotVbjH7IDj7jLg1ec"><i class="bi bi-whatsapp"></i> Gabung
                                                        Disini</a></td>
                                            @else
                                                <td><a href="https://chat.whatsapp.com/DOKDkI0yCYzEzhTiHLm4eB"><i class="bi bi-whatsapp"></i> Gabung
                                                        Disini</a></td>
                                            @endif
                                        @endif
                                        @if ($siswa->events == 'Rangking 1')
                                            <td><a href="https://chat.whatsapp.com/D0CHJIlo7ei7Mq1uQDRBZM"><i class="bi bi-whatsapp"></i> Gabung Disini</a></td>
                                        @endif
                                        @if ($siswa->events == 'Design Competition')
                                            <td><a href="https://chat.whatsapp.com/GISDsPeClnjLxAd0QEGTt5"><i class="bi bi-whatsapp"></i> Gabung Disini</a></td>
                                        @endif
                                        @if ($siswa->events == 'Seminar Nasional')
                                            <td><a href="https://chat.whatsapp.com/FQokFMjWqZxJS7wcsnFezj"><i class="bi bi-whatsapp"></i> Gabung Disini</a></td>
                                        @endif
                                        @if ($siswa->events == 'Mading Competition')
                                            <td><a href="https://chat.whatsapp.com/JPZMLnHFhGi9lCWh8F54Mg"><i class="bi bi-whatsapp"></i> Gabung Disini</a></td>
                                        @endif

                                    </tr>
                                @endforeach
                            </thead>
                            <tbody>
                                <tr>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection

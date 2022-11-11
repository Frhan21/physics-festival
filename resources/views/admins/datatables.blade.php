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
        <div class="col-md-12 p-5 jus">
            <table id="example" class="table table-light table-responsive">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama Peserta</td>
                        <td>Jenis Lomba</td>
                        <td>Asal Sekolah</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peserta as $siswa)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $siswa->name }}</td>
                            <td>{{ $siswa->events->title }}</td>
                            <td>{{ $siswa->asal_sekolah }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection

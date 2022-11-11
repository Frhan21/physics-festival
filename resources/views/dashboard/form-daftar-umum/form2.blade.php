{{-- Route untuk Lomba dengan File --}}
<form action={{ route('create') }} method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-2">
        <label for="events" class="form-label">Jenis Lomba</label>
        <input type="text" class="form-control" id="events" name="events" placeholder="Events"
            value="{{ request('title') }}" readonly>
    </div>
    <div class="mb-2 ">
        <label for="name" class="form-label @error('name') is-invalid @enderror">Nama Peserta</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nama">
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-2">
        <label for="asal_sekolah" class="form-label @error('asal_sekolah') is-invalid @enderror">Asal
            Sekolah/Instansi</label>
        <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder="Asal Sekolah">
        @error('asal_sekolah')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    @if (request('title') == 'Design Competition')
        <div class="mb-3">
            <label for="fileEvents" class="form-label @error('fileEvents') is-invalid @enderror">Silahkan Up Karyanya
                Disini Yaa !!</label>
            <input class="form-control" type="file" id="fileEvents" name="fileEvents" required>
            @error('fileEvents')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    @endif
    <div class="mb-2">
        <label for="sekolah_id" class="form-label @error('sekolah_id') is-invalid @enderror">Kategori
            Lomba/Sekolah</label>
        <select class="form-select" name="sekolah_id" id="sekolah_id" aria-placeholder="Kategori Sekolah">
            <option selected>Silahkan pilih jenjang pendidikan:</option>
            @foreach ($sekolah as $sekol)
                <option value={{ $sekol->id }}>{{ $sekol->sekolah }}</option>
            @endforeach
        </select>
        <small><i>Silahkan pilih kategori umum untuk event ini</i></small>
    </div>
    @if (request('title') == 'Seminar Nasional')
    <label for="status" class="mt-3 mb-2"> Sertifikat Seminar </label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status" id="status" value="Dengan Nama" required>
            <label class="form-check-label" for="status">Sertifikat dengan Nama</label>
        </div>
        <div class="form-check form-check-inline mb-3">
            <input class="form-check-input" type="radio" name="status" id="status" value="Tanpa Nama" required>
            <label class="form-check-label" for="status">Sertifikat Tanpa Nama</label>
        </div>
    @endif
    <div class="mb-2">
        <label for="no_hp" class="form-label @error('no_hp') is-invalid @enderror">No Hp</label>
        <input type="tel" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor HP" required>
        @error('no_hp')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="image" class="form-label @error('image') is-invalid @enderror">Bukti Pembayaran</label>
        <input class="form-control" type="file" id="image" name="image" required>
        <small><i>Untuk detail pembayaran dan biaya bisa dilihat dihalaman awal</i></small>
        @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
        <button type="submit" class="btn btn-success">Daftar</button>
</form>

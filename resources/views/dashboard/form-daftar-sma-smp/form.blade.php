{{-- Form Lomba Biasa --}}
<form action={{ route('create') }} method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-2 ">
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
        <label for="sekolah_id" class="form-label @error('sekolah_id') is-invalid @enderror">Kategori Sekolah</label>
        <select class="form-select" name="sekolah_id" id="sekolah_id" aria-placeholder="Kategori Sekolah">
            <option selected>Silahkan pilih jenjang pendidikan:</option>
            @foreach ($sekolah as $sekol)
                <option value={{ $sekol->id }}>{{ $sekol->sekolah }}</option>
            @endforeach
        </select>
        <small><i>Silahkan pilih kategori SMP/SMA untuk event ini</i></small>
         @error('sekolah_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-2">
        <label for="asal_sekolah" class="form-label @error('asal_sekolah') is-invalid @enderror ">Asal Sekolah</label>
        <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder="Asal Sekolah">
        @error('asal_sekolah')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-2">
        <label for="no_hp" class="form-label @error('no_hp') is-invalid @enderror">No Hp</label>
        <input type="tel" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor HP">
        @error('no_hp')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="image" class="form-label @error('image') is-invalid @enderror">Bukti Pembayaran</label>
        <input class="form-control" type="file" id="image" name="image">
        @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-success">Daftar</button>
</form>

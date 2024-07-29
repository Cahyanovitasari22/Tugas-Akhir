<x-app>
<div class="container">
    <div class="card">
        <div class="card-header">Edit Data SPPD Dalam Kota</div>
        <div class="card-body">
            <form action="{{ url('arsip/' . $arsip->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')


                <div class="form-group">
                    <label for="nama">Nama Pegawai</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $arsip->nama) }}" placeholder="Nama Lengkap">
                    @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="nomor_surat">Nomor Surat</label>
                    <input type="text" class="form-control @error('nomor_surat') is-invalid @enderror" id="nomor_surat" name="nomor_surat" value="{{ old('nomor_surat', $arsip->nomor_surat) }}" placeholder="Nomor Surat">
                    @error('nomor_surat')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="tujuan">Tujuan</label>
                    <input type="text" class="form-control @error('tujuan') is-invalid @enderror" id="tujuan" name="tujuan" value="{{ old('tujuan', $arsip->tujuan) }}" placeholder="Tujuan">
                    @error('tujuan')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <button class="btn btn-success float-justify">
                            <i class="fas fa-save"></i> Simpan
                    </button>
                    <a href="{{ url('arsip') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
</x-app>
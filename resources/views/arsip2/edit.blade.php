<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Edit Data SPPD Luar Kota
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{ url('arsip2', $arsip2->id)}}">
                @csrf 
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Nama Pegawai</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $arsip2->nama) }}" placeholder="Nama Lengkap">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Nomor Surat</label>
                             <input type="text" class="form-control @error('nomor_surat') is-invalid @enderror" id="nomor_surat" name="nomor_surat" value="{{ old('nomor_surat', $arsip2->nomor_surat) }}" placeholder="Nomor Surat">
                                @error('nomor_surat')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Tujuan</label>
                          <input type="text" class="form-control @error('tujuan') is-invalid @enderror" id="tujuan" name="tujuan" value="{{ old('tujuan', $arsip2->tujuan) }}" placeholder="Tujuan">
                            @error('tujuan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-success float-justify">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                        <a href="{{ url('arsip2') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app>

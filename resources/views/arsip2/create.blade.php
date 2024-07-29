<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah Data SPPD Luar Kota
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{ url('arsip2')}}">
                @csrf 
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Nama Pegawai</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror">
                             @if ($errors->has('nama'))
                                <span class="invalid-feedback">{{ $errors->first('nama') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Nomor Surat</label>
                            <input type="text" name="nomor_surat" class="form-control @error('nomor_surat') is-invalid @enderror">
                             @if ($errors->has('nomor_surat'))
                                <span class="invalid-feedback">{{ $errors->first('nomor_surat') }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Tujuan</label>
                             <input type="text" name="tujuan" class="form-control @error('tujuan') is-invalid @enderror">
                             @if ($errors->has('tujuan'))
                                <span class="invalid-feedback">{{ $errors->first('tujuan') }}</span>
                            @endif
                        </div>
                    </div>

    
                </div>
               <div class="row">
                    <div class="cold-md-">
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
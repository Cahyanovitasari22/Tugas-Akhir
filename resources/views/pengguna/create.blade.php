<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah Administrator 
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{ url('pengguna')}}">
                @csrf 
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Nama Admin</label>
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
                             <div class="form-group">
                            <label for="" class="control-label">Username</label>
                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror">
                             @if ($errors->has('username'))
                                <span class="invalid-feedback">{{ $errors->first('username') }}</span>
                            @endif
                        </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Email</label>
                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror">
                             @if ($errors->has('email'))
                                <span class="invalid-feedback">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Password</label>
                            <input type="text" name="password" class="form-control @error('password') is-invalid @enderror">
                             @if ($errors->has('password'))
                                <span class="invalid-feedback">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>


                </div>
               <div class="row">
                    <div class="cold-md-">
                    <button class="btn btn-success float-justify">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                    <a href="{{ url('pengguna') }}" class="btn btn-secondary">Kembali</a>
                    </div>
               </div>
            </form>
        </div>
    </div>
</x-app>
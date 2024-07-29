<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data SPPD Luar Kota
            </div>
        
            <a href="{{url('arsip2/create')}}" class="btn btn-secondary float-right">
                <i class="fas fa-plus"></i>Tambah Data
            </a>
        </div>
        <div class="card-body">
              <div class="mt-auto d-flex justify-content-end">
             <form method="GET" action="{{ url('arsip') }}" class="form-inline">
                <div class="input-group mb-3" style="width: 300px; height: 40px; padding: 5px;">
                    <input type="text" name="search" class="form-control" placeholder="Cari Nomor Surat" value="{{ request()->get('search') }}">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">Cari</button>
                    </div>
                </div>
             </form>
            </div>
            <table class="table table-bordered" >
                <thead>
                    <th width="30px" >No</th>
                    <th width="150px">Nomor Surat</th>
                    <th width="120px" >Aksi</th>
                </thead>
                @foreach ($list_arsip2 as $arsip2)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$arsip2->nomor_surat}}</td>
                        
                        <td>
                            <div class="btn-group">
                                <a href="{{ url('arsip2', $arsip2->id) }}" class="btn btn-info">
                                    <i class="fas fa-info"></i>
                                </a>
                                <a href="{{ url('arsip2', $arsip2->id) }}/edit" class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <x-button.delete id="{{ $arsip2->id }}"/>
                               
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</x-app>